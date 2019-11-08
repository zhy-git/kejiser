//script
$(document).ready(function(){
	
	//首页分类	
	var cat = $(".cat"), 
		catul = $(".cat ul"), 
		catli = $(".cat li");
	function ulWidth() {
		var liW = 0;
		catli.each(function() {
			liW += catli.innerWidth();
		})
		return liW + 30;
	}
	catul.css("width",ulWidth());	
	catli.click(function() {
		$(this).addClass("active").siblings().removeClass("active");
		var capLi = catul.find("li.active").position().left - 80;
		cat.animate({scrollLeft:capLi},500);
		//alert(capLi);
	});
	
	//more
	$(".cc-more").click(function(){
		$(this).toggleClass("active").prev(".con").toggleClass("active");
	})
	//search
	$(".search-btn").click(function(){
		$(".search-box").removeClass("disn");
	})
	//live
	$(".comment-btn").click(function(){
		$(this).closest(".comment").toggleClass("active").find("ul.talk").toggleClass("zoomOut");
		if ($(".comment").hasClass("active")) {
			$(this).html("开");
			setTimeout(function(){
				$(".comment").css("overflow","hidden")
			},500)
		} else{
			$(this).html("关");
			$(".comment").css("overflow","visible")
		}
	})
	
	$(".pptBtn").click(function(){
		$(".play").slideToggle();
	})
	
	$(".comm-write,.comm-write2").click(function(){
		$(".comm-box").toggleClass("disn");
	})
	
	
	$(".wall-btn").click(function(){
		$(".wall-box").removeClass("disn");
	})
	
	$(".ppt-btn").click(function(){
		$(".ppt-box").removeClass("disn");
	})
	$(".live-menu li").click(function(){
		$(".e-items").addClass("disn");
		$(this).toggleClass("yel").siblings().removeClass("yel");
	})
	//关闭弹出层
	$(".close-btn").click(function(){
		$(this).closest(".e-items").addClass("disn");
		$(".live-menu li").removeClass("yel");
	})
	$(".voice-btn").click(function(){
		if($(this).hasClass("yel")){
			$(".voice-Box").removeClass("disn");
		}
		else{
			$(".voice-Box").addClass("disn");
		}
	})
	$(".text-btn").click(function(){
		if($(this).hasClass("yel")){
			$(".text-Box").removeClass("disn");
		}
		else{
			$(".text-Box").addClass("disn");
		}
	})
	
	//set
	$(".setBtn").click(function(){
		$(".set-box").removeClass("disn")
	})
	//tab
	vtab = function(vtit,vbox,vevent){
		$(vtit).find("li:first-child").addClass("active");
		$(vbox).find(".vcon:first-child").show().siblings(".vcon").hide();
		$(vtit).find("li").bind(vevent,function(){
			$(this).addClass("active").siblings("li").removeClass("active");
			var ai = $(vtit).find("li").index(this);
			$(vbox).children().eq(ai).show().siblings().hide();
			return false;
		})
	}
	vtab(".vt",".vb","click");

	//关闭弹出层
	$(".close,.close-btn").click(function(){
		$(this).closest(".float-box").addClass("disn");
	})
	//switch
	$(".switch").click(function(){
		$(this).toggleClass("active")
	})
	//子tab
	$(".sub-tab li").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
	})
	
	//下拉事件
	$(window).scroll(function() {
	    var scrollTop = $(window).scrollTop();
	    if (scrollTop > 120 ) {
	        $(".order .t-fixed").addClass("fixed");
	    } else {
	        $('.order .t-fixed').removeClass("fixed");
	    }
	});
	
	

	
})

document.addEventListener('touchstart', function () {}, false);