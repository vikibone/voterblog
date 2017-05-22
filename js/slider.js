$(function(){
	var slidershow=$(".slider-show"),
	ul=slidershow.find("ul"),
	span=slidershow.find(".nav span"),
	width=ul.find("li").eq(0).width(),
	iNow=0;
	timer=null;
	slidershow.hover(function(){
		clearInterval(timer);
	},autoplay);
	span.on("click",function(){
		var me=$(this);
		index=me.index();
		iNow=index;
		ul.animate({
			"left":- width*iNow
		})
		me.siblings().removeClass("selected");
		me.addClass("selected");
	});
	autoplay();
	function autoplay(){
		clearInterval(timer);
		timer=setInterval(function(){
		iNow++;
		if(iNow>span.length){
			iNow=0;
		}
		span.eq(iNow).trigger("click");
	},2000)
	}
})