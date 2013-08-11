
/**
 * Website start here
 */
jQuery(document).ready(function($){    
	$('.supersized').fullSlide();
	
	$('.gallery-1').slider({
		nextBtn: '.ico-next',
		preBtn: '.ico-pre',
		container: '.inner'
	});

	var mainContent = $('#main-content');
	var sideBar = $('.sidebar-l');
	if(mainContent.length && sideBar.length){
		if(mainContent.height() > sideBar.height()){
			sideBar.css('height', mainContent.height());
			mainContent.css('height', sideBar.height());
		}else{
			mainContent.css('height', sideBar.height());
			sideBar.css('height', mainContent.height());
		}
	}

	var productBlock = $('.product-detail-block');
	if(productBlock.length){
		if('ontouchstart' in document){
			$('.frame-4 img', productBlock).elevateZoom({
				zoomType: "inner",
				cursor: "crosshair"
			});
		}else{
			$('.frame-4 img', productBlock).elevateZoom({
				cursor: "crosshair"
			});
		}
		
		var zoom = $('.frame-4 img', productBlock).data('elevateZoom');
		var productDetail = $('.content', productBlock);
		var productImg = $('.frame-4 img', productBlock);
		$('.gallery-1').on('click.ajax', 'li a', function(e){
			var url = $(this).data('url');
			$.ajax({
				url: url,
				success: function(res){
					res = $(res);
					productDetail.html(res.children('.content').html());
					zoom.swaptheimage(res.find('.frame-4 img').attr('src'), res.find('.frame-4 img').attr('data-zoom-image'));
				}
			});
			e.preventDefault();
		});
	}
	
	$('.lst-hot-products > ul').carouFredSel({
		items: 3,
		direction: 'up',
		auto: {
			timeoutDuration: 5000,
			pauseOnHover: true
		}
	});

	$('#contact-form').validateForm({
		inputs: [
			{
				inputSelector: '#full-name',
				require: 'notEmpty',
				message: L10N.required.username
			},{
				inputSelector: '#email',
				require: ['notEmpty', 'email'],
				message: [L10N.required.email, L10N.valid.email]
			},{
				inputSelector: '#phone',
				require: ['notEmpty', 'phone'],
				phone: function(val){
					return /[0-9\-\.]+/.test(val);
				},
				message: [L10N.required.phone, L10N.valid.phone]
			},{
				inputSelector: '#comment',
				require: 'notEmpty',
				message: L10N.required.comment
			}
		],
		zIndex: 10001
	});
});