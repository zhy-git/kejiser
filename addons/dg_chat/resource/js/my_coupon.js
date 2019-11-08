function couponLoad(postData) {
	$("#next").hide();
	$.post(location.href, {
		'pindex': postData.pindex,
		'coupon_type': postData.coupon_type
	}, function(res) {
		var coupon = res.list;
		if(jQuery.isEmptyObject(coupon)) {
			$("#next").show();
			return false;
		} else {
			var html = '';
			for(var i = 0; i < coupon.length; i++) {
				html += getCouponHtml(coupon, i,postData.coupon_type);
			}
			$("#coupon").append(html);
		}
	})
}

function getCouponHtml(List,Qindex,type){
	var html='';
	if(type=='al_use'){
		html+='<li class="flex bWhite pr mb10 bGrey overflow"><div class="fla tc blank flex-column-c before pr">';
		html+='<h2 class="blank"><i class="f18">￥</i>'+parseFloat(List[Qindex].coupon_money)+'</h2>';
		if(List[Qindex].coupon_type==2){
			html+='<p class="f14">无门槛使用</p>';
		}else{
			html+='<p class="f14">满'+parseFloat(List[Qindex].full_money)+'元可使用</p>';
		}				
		html+='</div><div class="info sub pl20 pt10 pb10 pr10 bWhite flex-column-c"><div><h3 class="f16 line-text">'+List[Qindex].coupon_name+'</h3>';
		html+='<p class="f12 grey mt5">'+List[Qindex].start_time+'~'+List[Qindex].end_time+'</p>';
		html+='</div></div><i class="before after"><p>已使用</p></i></li>';
	}else if(type=='outtime'){
		html+='<li class="flex bWhite pr mb10 bGrey overflow"><div class="fla tc blank flex-column-c before pr">';
		html+='<h2 class="blank"><i class="f18">￥</i>'+parseFloat(List[Qindex].coupon_money)+'</h2>';
		if(List[Qindex].coupon_type==2){
			html+='<p class="f14">无门槛使用</p>';
		}else{
			html+='<p class="f14">满'+parseFloat(List[Qindex].full_money)+'元可使用</p>';
		}				
		html+='</div><div class="info sub pl20 pt10 pb10 pr10 bWhite flex-column-c"><div><h3 class="f16 line-text">'+List[Qindex].coupon_name+'</h3>';
		html+='<p class="f12 grey mt5">'+List[Qindex].start_time+'~'+List[Qindex].end_time+'</p>';
		html+='</div></div><i class="before after"><p>已过期</p></i></li>';;
	}else{
		html+='<li class="flex bWhite pr mb10 overflow"><div class="fla tc blank flex-column-c before pr"><h2 class="blank"><i class="f18">￥</i>'+parseFloat(List[Qindex].coupon_money)+'</h2>';
		if(List[Qindex].coupon_type==2){
			html+='<p class="f14">无门槛使用</p>';
		}else{
			html+='<p class="f14">满'+parseFloat(List[Qindex].full_money)+'元可使用</p>';
		}
		html+='</div><div class="info sub pl20 pt10 pb10 pr10 bWhite flex-column-c"><div>';
		html+='<h3 class="f16 line-text">'+List[Qindex].coupon_name+'</h3>';
		html+='<p class="f12 grey mt5">'+List[Qindex].start_time+'~'+List[Qindex].end_time+'</p>';
		html+='<div class="infoUn flex-jb"><p class="grey"></p>';					
		html+='<a class="mt15 disi" href="'+conpon_url+'">立即使用</a></div></div></div></li>';
	}	
	return html;
}
function couponClick(obj){
	coupon_type=$(obj).attr('data');
	pindex=1;
	$.post(location.href,{'coupon_type':coupon_type,'pindex':pindex},function(res){
		var coupon = res.list;
		$("#coupon").empty();
		if(jQuery.isEmptyObject(coupon)) {
			$("#next").html('<p class="grey">已加载全部</p>');
			return false;
		} else {
			var html = '';
			for(var i = 0; i < coupon.length; i++) {
				html += getCouponHtml(coupon, i,coupon_type);
			}
			$("#coupon").append(html);
			$("#next").html('<span class="loading"></span><p class="grey">没有更多了~</p>');
		}
	})
}