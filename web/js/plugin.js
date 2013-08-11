
;(function($, window, undefined){
	var pluginName = 'validateForm';
	
	function Plugin(element, options){
		this.element = $(element);
		this.options = $.extend({}, $.fn[pluginName].defaults, options);
		this.id = Math.random().toString().split('.')[1];
		this.init();
	};
	
	Plugin.prototype = {
		init: function(){
			var _this = this;
			var elm = this.element;
			var opt = this.options;
			var $trim = $.trim;
			var inputs = opt.inputs;

			var buildInCheck = {
				notEmpty: function(val, option){
					return ($trim(val) !== '' && $trim(val) !== option.holder);
				},
				email: function(val){
					return /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(val);
				},
				tick: function(val, option){
					return option.elm.filter(':checked').length;
				}
			};

			var hideTooltip = function(){
				clearTimeout(_this.hideTooltipTimeout);
				_this.tooltip.css({
					top: -1000,
					left: -1000
				});
				_this.tooltipTarget = null;
				_this.tooltipOffset = null;
			};
			var showTooltip = (function(){
				_this.tooltip = $('<div class="' + opt.tooltipClass + '">').css({
					position: 'absolute',
					zIndex: opt.zIndex,
					top: -1000,
					left: -1000
				}).appendTo($(document.body));
				_this.hideTooltipTimeout = null;
				$(window).bind('resize.id_' + _this.id, function(){
					var target = _this.tooltipTarget;
					if(target){
						var tooltipOffset = _this.tooltipOffset;
						var targetOffset = target.offset();
						_this.tooltip.css({
							top: targetOffset.top + target.outerHeight() + tooltipOffset[0],
							left: targetOffset.left + tooltipOffset[1]
						});
					}
				});
				return function(target, msg, offset){
					var targetOffset = target.offset();
					clearTimeout(_this.hideTooltipTimeout);
					if(!offset || offset.length < 2){
						offset = [0, 0];
					}
					_this.tooltip.html(msg).css({
						top: targetOffset.top + target.outerHeight() + offset[0],
						left: targetOffset.left + offset[1]
					});
					_this.tooltipOffset = offset;
					_this.tooltipTarget = target;
					_this.hideTooltipTimeout = setTimeout(hideTooltip, opt.displayTime);
				};
			})();

			var initInput = function(data){
				var inputElm = elm.find(data.inputSelector);
				data.jElm = inputElm;
				if(!inputElm.length){
					return;
				}
				if(opt.closeOnFocus){
					inputElm.bind('click.closeTootip change.closeTootip keydown.closeTootip', hideTooltip);
				}
				if(data.holder){
					var holderValue = data.holder;
					if($.isFunction(holderValue)){
						holderValue = holderValue(inputElm);
						data.holder = holderValue;
					}
					inputElm.bind('focus.validHolder', function(){
						if($trim(this.value) === holderValue){
							this.value = '';
						}
					}).bind('blur.validHolder', function(){
						if($trim(this.value) === ''){
							this.value = holderValue;
						}
					}).val(holderValue);
				}
			};

			var checkInput = function(data, showMessage){
				var inputElm = data.jElm, requires, messages;
				if(!inputElm.length){
					return;
				}
				if(!$.isArray(data.require)){
					requires = [data.require];
					messages = [data.message];
				}else{
					requires = data.require;
					messages = data.message;
				}
				for(var i = 0, l = requires.length; i < l; i++){
					var curRequire = requires[i];
					var checkFn = data[curRequire] || buildInCheck[curRequire];
					var option = {};
					switch(curRequire){
						case 'notEmpty':
							option.holder = data.holder || '';
							break;
						case 'tick':
							option.elm = inputElm;
							break;
					}
					if(checkFn){
						if(!checkFn(inputElm.val(), option)){
							if(showMessage && opt.showTooltip){
								showTooltip(data.tooltipAt || inputElm, messages[i]);
							}
							if(opt.autoFocus) inputElm.focus();
							if($.isFunction(data.onCheck) && (!showMessage || opt.forceOnCheck)) data.onCheck(false, inputElm, curRequire);
							return false;
						}
					}
				}
				if($.isFunction(data.onCheck) && (!showMessage || opt.forceOnCheck)) data.onCheck(true, inputElm);
				return true;
			};

			var checkAll = function(){
				if($.isFunction(opt.submitCondition) && opt.submitCondition() === false){
					return false;
				}
				var result = true;
				opt.beforeValid(elm);
				for(var i = 0, l = inputs.length; i < l; i++){
					if(!checkInput(inputs[i], false)){
						result = false;
					};
				}
				if(result === true) return opt.validSuccess(elm);
				if(result === false){
					opt.validFail(elm);
					return false;
				}
			};
			var checkOrder = function(){
				if($.isFunction(opt.submitCondition) && opt.submitCondition() === false){
					return false;
				}
				opt.beforeValid(elm);
				for(var i = 0, l = inputs.length; i < l; i++){
					if(!checkInput(inputs[i], true)){
						opt.validFail(elm);
						return false;
					};
				}
				return opt.validSuccess(elm);
			};
			var checkForm = (function(){
				if(opt.checkAll){
					return checkAll;
				}else{
					return checkOrder;
				}
			})();
			this.checkForm = checkForm;
			this.resetForm = function(){
				elm[0].reset();
				for(var i = 0, l = inputs.length; i < l; i++){
					var data = inputs[i];
					var holderValue = data.holder;
					if(!holderValue && !data.jElm) continue;
					if($.isFunction(holderValue)) holderValue = holderValue(data.jElm);
					data.jElm.val(holderValue);
				}
			};

			for(var i = 0, l = inputs.length; i < l; i++){
				initInput(inputs[i]);
			}
			elm.unbind('submit.valid').bind('submit.valid', checkForm);
		},
		destroy: function(){
			this.element.removeData(pluginName);
			delete this;
		}
	};
	
	$.fn[pluginName] = function(options, params){
		return this.each(function(){
			var instance = $.data(this, pluginName);
			if(!instance){
				$.data(this, pluginName, new Plugin(this, options));
			}else if(instance[options]){
				if($.isArray(params)){
					instance[options].apply(instance, params);
				}else{
					instance[options](params);
				}
			}else{
				console.warn(options ? options + ' method is not exists in ' + pluginName : pluginName + ' plugin has been initialized');
			}
		});
	};
	
	$.fn[pluginName].defaults = {
		inputs: [],
		checkAll: false,
		forceOnCheck: false,
		showTooltip: true,
		tooltipClass: 'alert-layer',
		zIndex: 10,
		displayTime: 3000,
		closeOnFocus: true,
		autoFocus: true,
		submitCondition: function(){return true;},
		beforeValid: function(){},
		validSuccess: function(){return true;},
		validFail: function(){return false;}
	};
})(jQuery, window);

;(function($, window, undefined) {
	var pluginName = 'autoSwitch';
	
	function Plugin(element, options) {
		this.element = $(element);
		this.options = $.extend({}, $.fn[pluginName].defaults, options);
		this.vars = {};
		this.init();
	};

	Plugin.prototype = {
		init: function() {
			var opt = this.options;
			var vars = this.vars;
			var listElement = this.element.find(opt.selector);
			vars.curIdx = null;
			vars.listElement = listElement;
			vars.elmLength = listElement.length;
			opt.init(listElement);
			this.active(opt.startIndex);
		},
		active: function(idx){
			var _this = this;
			var opt = this.options;
			var vars = this.vars;
			var startTime = new Date().getTime();
			idx %= vars.elmLength;
			idx = (idx >= 0) ? idx : idx + vars.elmLength;
			if(idx === vars.curIdx){
				return;
			}
			opt.onChange({
				current: idx,
				prev: vars.curIdx,
				elems: vars.listElement
			});
			vars.curIdx = idx;
			if(opt.auto){
				clearTimeout(vars.loopTimeout);
				var endTime = new Date().getTime();
				var nextTime = Math.max(0, opt.delay - (endTime - startTime));
				vars.loopTimeout = setTimeout(function(){
					_this.next();
				}, nextTime);
			}
		},
		next: function(idx){
			this.active(this.vars.curIdx + 1);
		},
		destroy: function() {
            $.removeData(this.element, pluginName);
		}
	};

	$.fn[pluginName] = function(options, params) {
		return this.each(function() {
			var instance = $.data(this, pluginName);
			if (!instance) {
				$.data(this, pluginName, new Plugin(this, options));
			} else if (instance[options]) {
				instance[options](params);
			} else {
				alert(options ? options + ' method is not exists in ' + pluginName : pluginName + ' plugin has been initialized');
			}
		});
	};

	$.fn[pluginName].defaults = {
		selector: 'a',
		startIndex: 0,
		auto: true,
		delay: 5000,
		init: function(){},
		onChange: function(){}
	};
}(jQuery, window));

;(function($, window, undefined) {
	var pluginName = 'fullSlide';
	
	function Plugin(element, options) {
		this.element = $(element);
		this.options = $.extend({}, $.fn[pluginName].defaults, options);
		this.init();
	};

	Plugin.prototype = {
		init: function() {
			var opt = this.options;
			var elm = this.element;

			elm.find('img').fullSize({
				container: '.supersized'
			});
			
			elm.autoSwitch({
				selector: 'li',
				delay: opt.timeout,
				init: function(listElement){
					listElement.css({
						'z-index': 0,
						opacity: 0
					});
				},
				onChange: function(vars){
					if(vars.prev === null){
						vars.elems.eq(vars.current).css({
							'z-index': 1 
						}).stop().animate({
							opacity: 1
						}, 500);
					}else{
						vars.elems.eq(vars.prev).css({
							'z-index': 0 
						}).stop().animate({
							opacity: 0							
						}, opt.duration);
						vars.elems.eq(vars.current).css({
							'z-index': 1 
						}).stop().animate({
							opacity: 1							
						}, opt.duration);
					}
				}
			});
		},
		destroy: function() {
			$.removeData(this.element, pluginName);
		}
	};

	$.fn[pluginName] = function(options, params) {
		return this.each(function() {
			var instance = $.data(this, pluginName);
			if (!instance) {
				$.data(this, pluginName, new Plugin(this, options));
			} else if (instance[options]) {
				instance[options](params);
			} else {
				alert(options ? options + ' method is not exists in ' + pluginName : pluginName + ' plugin has been initialized');
			}
		});
	};

	$.fn[pluginName].defaults = {
		duration: 1500,
		timeout: 6000,
		item: 'li'
	};
}(jQuery, window));
;(function($, window, undefined) {
	var pluginName = 'fullSize';
	var jWindow = $(window);
	
	function Plugin(element, options) {
		var _this = this;
		this.element = $(element);
		this.options = $.extend({}, $.fn[pluginName].defaults, options);
		this.vars = {};
		var vars = this.vars;
		var img = new Image();

		if(this.options.container){
			this.container = this.element.closest(this.options.container)
		}else{
			this.container = $(window);
		}
		
		img.onload = function(){
			vars.normalWidth = element.clientWidth;
			vars.normalHeight = element.clientHeight;
			vars.imgRatio = vars.normalWidth / vars.normalHeight;

			_this.init();
		}
		img.src = this.element.attr('src');
	};

	Plugin.prototype = {
		init: function() {
			var _this = this;
			
			jWindow.bind('resize.fullSize', function(){
				_this.reSize();
			}).trigger('resize.fullSize');
		},
		reSize: function(){
			var vars = this.vars;
			var cWidth = this.container.width();
			var cHeight = this.container.height();
			var cRatio = cWidth / cHeight;
			
			var elmWidth = cWidth;
			var elmHeight = cHeight;
			var marginLeft = 0;
			var marginTop = 0;
			if(cRatio < vars.imgRatio){
				elmWidth = elmHeight * vars.imgRatio;
				marginLeft = (cWidth - elmWidth) / 2;
			}else{
				elmHeight = elmWidth / vars.imgRatio;
				marginTop = (cHeight - elmHeight) / 2;
			}
			
			this.element.css({
				width: elmWidth,
				height: elmHeight,
				'margin-left': marginLeft,
				'margin-top': marginTop
			});
			this.options.onChange({
				width: elmWidth,
				height: elmHeight,
				top: marginTop,
				left: marginLeft
			});
		},
		destroy: function() {
            $.removeData(this.element, pluginName);
		}
	};

	$.fn[pluginName] = function(options, params) {
		return this.each(function() {
			var instance = $.data(this, pluginName);
			if (!instance) {
				$.data(this, pluginName, new Plugin(this, options));
			} else if (instance[options]) {
				instance[options](params);
			} else {
				alert(options ? options + ' method is not exists in ' + pluginName : pluginName + ' plugin has been initialized');
			}
		});
	};

	$.fn[pluginName].defaults = {
		container: '#main',
		onChange: function(){}
	};
}(jQuery, window));

;(function($){
	var setCss = (function(){
		if($.browser.webkit){
			return function(elm, val){
				elm.css('-webkit-transform', 'translate3d(' + val + 'px, 0, 0)');
			}
		}else{
			return function(elm, val){
				elm.css('margin-left', val);
			}
		}
	})();
	
	$.fn.slider = function(options){
		var defaults = {
			preBtn: '.pre',
			nextBtn: '.next',
			container: '.display',
			view: 3,
			active: 0,
			fix: false,
			mode: 1,
			duration: 500,
			easing: 'easeOutCubic',
			activeClass: 'active'
		}
		options = $.extend(defaults, options);
		return this.each(function(){
			var that = $(this);
			var preBtn = that.find(options.preBtn);
			var nextBtn = that.find(options.nextBtn);
			var container = that.find(options.container);
			var slider = container.children();
			var itemList = slider.children();
			
			setCss(slider, 0);
			if(!itemList.length || itemList.length <= options.view){
				preBtn.css('visibility', 'hidden');
				nextBtn.css('visibility', 'hidden');
				return;
			}
			
			var vars = {
				itemList: itemList,
				itemLen: itemList.length,
				slider: slider,
				preBtn: preBtn,
				nextBtn: nextBtn,
				curIdx: 0,
				container: container,
				fix: 0
			};

			that.vars = vars;
			
			init(that);

			container.parent().bind('mousedown.sld', function(){
				return false;
			});
			
			nextBtn.unbind('click.sld').bind('click.sld', function(e){
				e.preventDefault();
				if(vars.nextLock){
					return;
				}
				vars.nextClick = true;
				slideTo(that, 1);
				lockBtn(that);
			});
			
			preBtn.unbind('click.sld').bind('click.sld', function(e){
				e.preventDefault();
				if(vars.preLock){
					return;
				}
				vars.preClick = true;
				slideTo(that, -1);
				lockBtn(that);
			});
		});

		function init(that){
			var vars = that.vars;
			setTimeout(function(){
				vars.itemWidth = vars.itemList.width();
				vars.slider.css({
					'margin-left': -(options.active * vars.itemWidth),
					'-webkit-transition': 'margin-left -webkit-transform'
				});
				if(options.fix){
					vars.fix = vars.container.width() - vars.itemWidth * options.view;
				}
			}, 10);
			
			that.vars.curIdx = options.active;
			
			if(options.mode == 2){
				vars.curActive = options.active;
				vars.itemList.removeClass(options.activeClass);
				vars.itemList.eq(vars.curActive).addClass(options.activeClass);
				that.data('slideData', {});
				that.data('slideData').curActive = vars.curActive;
			}
			
			lockBtn(that);
		}
		
		function lockBtn(that){
			var vars = that.vars;
			vars.preLock = vars.nextLock = false;
			vars.preBtn.css('visibility', 'visible');
			vars.nextBtn.css('visibility', 'visible');
			if(getActiveStatus(that) == 'start'){
				vars.preBtn.css('visibility', 'hidden');
				vars.preLock = true;
			}
			if(getActiveStatus(that) == 'end'){
				vars.nextBtn.css('visibility', 'hidden');
				vars.nextLock = true;
			}
		}
		
		function slideTo(that, idx){
			var vars = that.vars;
			var wOffset = 0;
			var cancelAnimate = false;
			if(vars.nextClick && getActiveStatus(that) == 'before-end'){
				wOffset = vars.fix;
			}
			var prevIdx = vars.curIdx;
			if(options.mode == 2){
				vars.curActive += idx;
				that.data('slideData').curActive = vars.curActive;
				vars.itemList.removeClass(options.activeClass);
				vars.itemList.eq(vars.curActive).addClass(options.activeClass);
				if(vars.curActive - vars.curIdx >= options.view && vars.nextClick){
					vars.curIdx = vars.curActive - 2;
				}
				if(vars.curActive == vars.curIdx - 1 && vars.preClick){
					vars.curIdx = vars.curActive;
				}
				if(getActiveStatus(that) == 'before-end' && vars.preClick && options.fix){
					vars.curIdx -= 1;
				}
				if($.isFunction(options.onChange)){
					options.onChange.call(that);
				}
			}else{
				vars.curIdx += idx;
			}
			
			var startPos = -prevIdx * vars.itemWidth;
			if(vars.tween && vars.tween.stop){
				vars.tween.stop();
				startPos = vars.curPos;
			}
			vars.tween = new Tween(new Object(), '', Tween.strongEaseOut, startPos, -vars.curIdx * vars.itemWidth, 1, '');

			vars.tween.onMotionChanged = function(fx){
				vars.curPos = fx.target._pos;
				setCss(vars.slider, vars.curPos);
			};
			vars.tween.start();
			
			vars.nextClick = vars.preClick = false;
		}
		
		function getActiveStatus(that){
			var vars = that.vars;
			var idx = vars.curIdx;
			var view = options.view;
			if(options.mode == 2){
				idx = vars.curActive;
				view = 1;
			}
			switch (idx){
				case 0:
					return 'start';
				case (vars.itemLen - view):
					return 'end';
				case (vars.itemLen - view - 1):
					return 'before-end';
				default:
					return '';
			}
		}
	}
})(jQuery);
