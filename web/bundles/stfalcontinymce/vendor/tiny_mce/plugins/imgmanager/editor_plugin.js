(function(){tinymce.PluginManager.requireLangPack("imgmanager");tinymce.create("tinymce.plugins.ImgmanagerPlugin",{init:function(a,b){a.addCommand("mceImgmanager",function(){a.windowManager.open({file:b+"/dialog.php",width:1024,height:700,popup_css:false,inline:1},{plugin_url:b,some_custom_arg:"custom arg"})});a.addButton("imgmanager",{title:"Image Manager",cmd:"mceImgmanager",image:b+"/img/imgmanager.png"});a.onNodeChange.add(function(a,b,c){b.setActive("imgmanager",c.nodeName=="IMG")})},createControl:function(a,b){return null},getInfo:function(){return{longname:"Image Manager",author:"Darius Matulionis",authorurl:"http://matulionis.lt",infourl:"http://imagemanager.tinymce.matulionis.lt",version:"1.0"}}});tinymce.PluginManager.add("imgmanager",tinymce.plugins.ImgmanagerPlugin)})()