(function(a) {
	a.fn.extend({
		minTipsBox: function(b) {

			b = a.extend({
				tipsContent: "",
				tipsTime: 1
			}, b);

			var c = 1E3 * parseFloat(b.tipsTime);
			0 < a(".min_tips_box").length ? a(".min_tips_box").show() : a('<div class="min_tips_box mid"><b class="bg"></b><span class="tips_content"></span></div>').appendTo("body");
			(function() {
				a(".min_tips_box .tips_content").html(b.tipsContent);
				var c = a(".min_tips_box .tips_content").width() / 2 + 10;
				a(".min_tips_box").css("z-index", "20");
			})();
			setTimeout(function() {
				a(".min_tips_box").hide()
			}, c)
		}
	})

})(jQuery);
String.prototype.HttpHtml = function(){
	var reg = /(http:\/\/|https:\/\/)((\w|=|\?|\.|\/|&|-)+)/g;
	return this.replace(reg, '<a href="$1$2">$1$2</a>');
};

Date.prototype.format =function(format)
{
    var o = {
    "M+" : this.getMonth()+1, //month
"d+" : this.getDate(),    //day
"h+" : this.getHours(),   //hour
"m+" : this.getMinutes(), //minute
"s+" : this.getSeconds(), //second
"q+" : Math.floor((this.getMonth()+3)/3),  //quarter
"S" : this.getMilliseconds() //millisecond
    }
    if(/(y+)/.test(format)) format=format.replace(RegExp.$1,
    (this.getFullYear()+"").substr(4- RegExp.$1.length));
    for(var k in o)if(new RegExp("("+ k +")").test(format))
    format = format.replace(RegExp.$1,
    RegExp.$1.length==1? o[k] :
    ("00"+ o[k]).substr((""+ o[k]).length));
    return format;
}

console.log("夺冠互动版权所有 http://www.duoguan.com");
console.log("请支持正版 联系电话 0371-53371086");
var clock_index=0,currentPlaying=null,room_id=user_info.room_id,avatar=user_info.headimgurl,nickname=user_info.nickname;
	var clock_handler=null,current_voiclocalid=null,globalObj=new Object();
	WEB_SOCKET_DEBUG = true;globalObj.chat_images=[];
	var ws, name=user_info.nickname, client_list={};
    var is_firstload=1;
    var is_autoplay=false;
//	if(userrole_name=="学生"){
//		is_autoplay=true;
//	}
    var fnTimeCountDown = function(d, o){
    	var f = {
    		haomiao: function(n){
    			if(n < 10)return "00" + n.toString();
    			if(n < 100)return "0" + n.toString();
    			return n.toString();
    		},
    		zero: function(n){
    			var n = parseInt(n, 10);//解析字符串,返回整数
    			if(n > 0){
    				if(n <= 9){
    					n = "0" + n;	
    				}
    				return String(n);
    			}else{
    				return "00";	
    			}
    		},
    		dv: function(){
    			//d = d || Date.UTC(2050, 0, 1); //如果未定义时间，则我们设定倒计时日期是2050年1月1日
    			var now = new Date();
    			//现在将来秒差值
    			//alert(future.getTimezoneOffset());
    			var dur = (d - now.getTime()) / 1000 , mss = d - now.getTime() ,pms = {
    				hm:"000",
    				sec: "00",
    				mini: "00",
    				hour: "00",
    				day: "00",
    				month: "00",
    				year: "0"
    			};
    			if(mss > 0){
    				pms.hm = f.haomiao(mss % 1000);
    				pms.sec = f.zero(dur % 60);
    				pms.mini = Math.floor((dur / 60)) > 0? f.zero(Math.floor((dur / 60)) % 60) : "00";
    				pms.hour = Math.floor((dur / 3600)) > 0? f.zero(Math.floor((dur / 3600)) % 24) : "00";
    				pms.day = Math.floor((dur / 86400)) > 0? f.zero(Math.floor((dur / 86400))) : "00";// % 30
    				//月份，以实际平均每月秒数计算
    				pms.month = Math.floor((dur / 2629744)) > 0? f.zero(Math.floor((dur / 2629744)) % 12) : "00";
    				//年份，按按回归年365天5时48分46秒算
    				pms.year = Math.floor((dur / 31556926)) > 0? Math.floor((dur / 31556926)) : "0";
    			}else{
    				pms.year=pms.month=pms.day=pms.hour=pms.mini=pms.sec="00";
    				pms.hm = "000";
    				//location.reload(true);
    				return;
    			}
    			return pms;
    		},
    		ui: function(){			
    			if(o.hm){
    				o.hm.html(f.dv().hm);
    			}
    			if(o.sec){
    				o.sec.html(f.dv().sec);
    			}
    			if(o.mini){
    				o.mini.html(f.dv().mini);
    			}
    			if(o.hour){
    				o.hour.html(f.dv().hour);
    			}
    			if(o.day){
    				o.day.html(f.dv().day);
    			}
    			if(o.month){
    				o.month.html(f.dv().month);
    			}
    			if(o.year){
    				o.year.html(f.dv().year);
    			}			
    			setTimeout(f.ui, 1);			
    		}
    	};	
    f.ui();
   };
  //初始化表情
   var EmotionDic={};
   function initEmotionUL() {
        for (var index in webim.Emotions) {
            var emotions = $('<img>').attr({
                "id": webim.Emotions[index][0],
                "src": webim.Emotions[index][1]
                // "style": "cursor:pointer;"
            }).click(function () {
                selectEmotionImg(this);
            });
            $('<li>').append(emotions).appendTo($('.enjoy-box'));
            var dic_key=webim.Emotions[index][0];

            var dic_val=webim.Emotions[index][1];
            var my_dic={};
            EmotionDic[dic_key]=dic_val;
        }
        
        $(".enjoy-box li").click(function(){
        	if(globalObj.emojbox)
        	$("."+globalObj.emojbox).text($("."+globalObj.emojbox).text()+$(this).find('img').attr('id'));
        });
 }
   
function TransferString(content){  
       var string = content;  
       try{  
           string=string.replace(/\r\n/g,"<br>")  
           string=string.replace(/\n/g,"<br>");  
       }catch(e) {  
           alert(e.message);  
       }  
       return string;  
}
    /*转换为标签*/
    function convertEmotion(str){
    	if(str==""){return "";}
    	var reg = new RegExp('\\[(.+?)\\]',"g");
    	// console.log(str);
    	var matchs=str.match(reg);
    	if(matchs){
	    	for(i=0;i<matchs.length;i++){
	    		str=str.replace(matchs[i],"<img  src='" + EmotionDic[matchs[i]] + "'/>");
	    	}
    	}
       str=str.HttpHtml();
       str=TransferString(str);
       return str; 
    }
    /*表情面板*/
    function showEmotionDialog(target){
    	$(".enjoy-box").toggleClass('on');
    	if(target=='main'){
    		globalObj.emojbox="speakInput";
    	}else{
    		globalObj.emojbox="danmuInput";
    	}
    }
	//当前正在播放语音信息
	function startRec(){
		$(".time var").eq(0).text(clock_index);
		clock_index++;
		if(clock_index==59){
			clock_index=60;
			stoprec1();
		}
	}
		
	
	/*赞赏*/
	function reward(){
		/*赞赏功能开始*/
		$(".btn_ilike").unbind();
		  $(".btn_ilike").click(function(){
			  var head=$(this).parent().children('div').attr('attr-img');
			  $(".redbagBox").find(".live_headpic").children().attr("src",head);
			  $(".redbagBox").attr("msg_id",$(this).parent().parent().parent().attr('msg_id'));
			  $(".redbagBox").show();
			  var name=$(this).parent().next().children().children('span.client_name').text();
			  //设置全局赞赏数据
			  var from_name="***";
			  if(user_info&&user_info.nickname){
				  from_name=user_info.nickname;
			  }
			  globalObj.reward={to_name:name,to_avatar:head,from_name:from_name,from_avatar:user_info.headimgurl};
		  });
		  $(".redbag_cancel").unbind();
		  $(".redbag_cancel").click(function(){
			  $(".redbagBox").hide();
		  });
		  $(".live_othermoney").unbind();
		  $(".live_othermoney").click(function(){
			  $(".otherRedmoneyBox").show();
			  // $(".redbagBox").hide();
			  // $(".otherRedmoneyBox").css("display",'block');
		  });
		  $(".gene_cancel").click(function(){
			  $(".otherRedmoneyBox").hide();
		  });
		  $(".pay_its").unbind();
		  $(".pay_its").click(function(){
			  var money=$(this).text();
			  
			  var msg_id=$(this).parents('.redbagBox').attr('msg_id');
			  //console.dir(msg_id);
			  $(document).minTipsBox({
					tipsContent: "加载中..",
					tipsTime: 123
			  });
			  $(".redbagBox").hide();
			  globalObj.reward.money=money;
			  var content_ext=globalObj.reward.from_name+" 赞赏了 "+globalObj.reward.to_name+" 一个红包!";
			  delete globalObj.reward.from_name;
			  delete globalObj.reward.to_name
			  var reward_content=JSON.stringify(globalObj.reward);
			  globalObj.reward_last = {type:"say",target:"main",msgtype:"reward",headimg:avatar,"from_client_name":user_info.nickname,content:reward_content,content_ext:content_ext};
			  $.getJSON(reward_url, { pay: money,msg_id:msg_id,'mini_pay':mini_pay,'reward_last':globalObj.reward_last}, function(json){
				  if(json.success==1){
						wx.miniProgram.navigateTo({url:'/dg_live/pages/pay/index?num='+json.out_trade_no+'&uniacid='+json.uniacid+'&mini_url='+ encodeURIComponent(json.url)})
					}else if(json.success == -1){

						if(is_pc==1){

							$("#code_img").attr('src',json.code_url);
                        	$('#erweima').show();
                        	 ti=setInterval("pay_status("+json.order_id+")",1000);
						}else{
							callpay(json);
						}
						
						
					}
				$(".min_tips_box").remove(); 
			  });
		  });
		  
		  $(".otherRedmoneyBox .gene_confirm").unbind();
		  $(".otherRedmoneyBox .gene_confirm").click(function(){
			  var money=$("#money").val();
			  if(money==''){
				  return;
			  }
			  
			  $(document).minTipsBox({
					tipsContent: "加载中..",
					tipsTime: 123
			  });
			  $(".redbagBox").hide();
			  var msg_id=$('.redbagBox').attr('msg_id');
			  globalObj.reward.money=money+'元';
			  var content_ext=globalObj.reward.from_name+" 赞赏了 "+globalObj.reward.to_name+" 一个红包!";
			  delete globalObj.reward.from_name;
			  delete globalObj.reward.to_name
			  var reward_content=JSON.stringify(globalObj.reward);
			  globalObj.reward_last = {type:"say",target:"main",msgtype:"reward",headimg:avatar,"from_client_name":user_info.nickname,content:reward_content,content_ext:content_ext};
			  $.getJSON(reward_url, { pay: money,msg_id:msg_id,'mini_pay':mini_pay,'reward_last':globalObj.reward_last}, function(json){
				  if(json.success==1){
					  
						wx.miniProgram.navigateTo({url:'/dg_live/pages/pay/index?num='+json.out_trade_no+'&uniacid='+json.uniacid+'&mini_url='+encodeURIComponent(json.url)})
					}else if(json.success == -1){
						if(is_pc==1){
							$("#code_img").attr('src',json.code_url);

                        $('#erweima').show();
                         ti=setInterval("pay_status("+json.order_id+")",1000);
						}else{
							callpay(json);
						}
					}
				$(".min_tips_box").remove();  
			  });
		  });
		  
		  $(".lm_main").unbind();
		  $(".lm_main").click(function(){
			  $(".thank_money").children('var').text($(this).attr('attr-money'));
			  var to_headimg=$(this).attr('attr-imgurl');
			  //to_headimg=to_headimg.replace('46','132');
			  $(".LmTipsBox").find(".live_headpic").children('img').attr('src',to_headimg);
			  var reward_text=$(this).attr('from-name')+"赞赏了"+$(this).attr('attr-toname');
			  if(!$(this).attr('attr-toname'))
			     reward_text="赞赏";
			  $(".LmTipsBox").find(".live_towhy").text(reward_text);
			  $(".LmTipsBox").show();
		  });
		  $(".redbag_cancel").click(function(){
			  $(".redbag_box").hide();
		  });
	    /*赞赏功能结束*/
	}
	/*微信支付开始*/
	 function jsApiCall(parameters){
		 api = eval("(" + parameters.jsApiParameters + ")");
			WeixinJSBridge.invoke(
				'getBrandWCPayRequest',
				 api,
				function(res){
					WeixinJSBridge.log(res.err_msg);
					if(res.err_msg == "get_brand_wcpay_request:ok") {
						if(globalObj.reward_last){
							sentContent(globalObj.reward_last);
						}
	                } else if(res.err_msg == "get_brand_wcpay_request:cancel"){
	                    //alert("已取消赞赏!");
	                }else{
	                	alert(res.err_msg);
	                }
				}
			);
	}

	function callpay(parameters){
			if (typeof WeixinJSBridge == "undefined"){
			    if( document.addEventListener ){
			        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
			    }else if (document.attachEvent){
			        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
			        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
			    }
			}else{
			    jsApiCall(parameters);
			}
	}	
    /*微信支付结束*/
	/*弹幕html*/
	function get_disdamu(tcpdata,order){
		
		 var size=$(".talk").children('li').size();
		if(size>2){
			$(".talk").children('li').last().remove();
		}
		var html="";
		html+="<li><p>";
		if(tcpdata.msgtype=='image'){
			html+='<img id="sub_'+tcpdata.msg_id+'" class="chat_img" mediaid="'+tcpdata.content+'" src="'+tcpdata.content+'">';
		}else{
			html+=convertEmotion(tcpdata.content);
		}
		html+="</p><div class='thumb' style='background-image: url("+tcpdata.headimg+");'>";
		html+="</div></li>";
		if(order=='desc')
		    $(".talk").prepend(html);
		else
			$(".talk").append(html);
	}
		
	function get_contenthtml(tcpdata){
			var text ="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
			text+="<div class='sp-content flex'>";
  				text+='<div class="tc mr15">';
				text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
				if(topic_setting.reward_status==1)
				text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
				text+='</div>';
			text+="<div class='sp-con sub'>";
			text+="<div class='sp-name small-font'><span class='client_name'>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
			if(tcpdata.role_name == "管理员"){
				text+="<div class='sp-box sp-admin sp-text already'>";
			}else{
				text+="<div class='sp-box sp-text already'>";
			}
			text+="<p>"+convertEmotion(tcpdata.content)+"</p></div>";
			if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
			text+="<div msg_id='"+tcpdata.msg_id+"' class='retract'><i class='iconfont icon-undo'></i></div>";
			text+="</div></div></li>";	
		if(tcpdata.msgtype=='voice'){
			       var voice_class=getRecordClass(tcpdata.last);
					var text ="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
					text+="<div class='sp-content flex'>";
					text+='<div class="tc mr15">';
					text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
					if(topic_setting.reward_status==1)
					text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
					text+='</div>';
					text+="<div class='sp-con sub'>";
					text+="<div class='sp-name small-font'><span class='client_name'>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
					if(tcpdata.role_name =="管理员"){
						text+="<div class='sp-box sp-admin sp-vioce recordingMsg already "+voice_class+"'attr-src='"+tcpdata.content+"'>";						
					}else{
					text+="<div class='sp-box sp-vioce recordingMsg already "+voice_class+"'attr-src='"+tcpdata.content+"'>";
					}
					text+="<span class='defalut'><i class='iconfont icon-playon_fill' attr-src='"+tcpdata.content+"'></i> 播放</span>";
					text+='<span class="playing"><i class="i1 delay2"></i><i class="i2 delay5"></i><i class="i3 delay2"></i><i class="i4 delay8"></i><i class="i5 delay10"></i><i class="i6 delay4"></i><i class="i7"></i><i class="i8"></i></span>';
					text+="<span class='duration'>"+tcpdata.last+"'</span></div>";
					if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
					text+="<div msg_id='"+tcpdata.msg_id+"' class='retract'><i class='iconfont icon-undo'></i></div>";
					text+="</div></div></li>";
		}
			if(tcpdata.msgtype=='wps'){
			//console.log(tcpdata.wps_hz)
	    	   var text ="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
				text+="<div class='sp-content flex'>";
  				text+='<div class="tc mr15">';
				text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
				if(topic_setting.reward_status==1 && tcpdata.role_name == "讲师")
				text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
				text+='</div>';
				text+="<div class='sp-con sub'>";
				text+="<div class='sp-name small-font'><span class='client_name '>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
				if(tcpdata.role_name == "讲师"){
					text+="<div class='sp-box sp-admin sp-text already'>";
				}else{
					text+="<div class='sp-box already w100 flex' style='padding:20px;position: relative;'><div msg_id='"+tcpdata.msg_id+"' class='retract' style='position: absolute;top: 2px;right:-10px;'><i class='iconfont icon-undo'></i></div>";
				}
				text+='';
				if(tcpdata.wps_hz=='doc' || tcpdata.wps_hz=='docx'){
					text+="<img src='../addons/dg_chat/resource/img/word.jpg'  style='margin-right:10px;' width='40' height='40'>";
				}else if(tcpdata.wps_hz=='xls' || tcpdata.wps_hz=='xlsx' || tcpdata.wps_hz=='csv'){
					text+="<img src='../addons/dg_chat/resource/img/excel.jpg' style='margin-right:10px;' width='40' height='40'>";
				}else if(tcpdata.wps_hz=='ppt' || tcpdata.wps_hz=='pptx'){
					text+="<img src='../addons/dg_chat/resource/img/ppt.jpg'  style='margin-right:10px;' width='40' height='40'>";
				}else if(tcpdata.wps_hz=='pdf'){
					text+="<img src='../addons/dg_chat/resource/img/pdf.jpg'  style='margin-right:10px;' width='40' height='40'>";
				}
				text+="<div class='sub' style='display:flex;flex-direction:column;justify-content:space-between'><span class='line-text-two'>"+convertEmotion(tcpdata.content)+"</span><span class='f12 grey' style=' justify-content:space-between;display:flex;margin-top:5px;text-align:left;'><span>"+tcpdata.wps_size+"</span><a style='display:block;' href="+tcpdata.wps_url+">立即下载</a></span></div></div>";
				if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
				text+="";
				text+="</div></div></li>";
	    	}
		if(tcpdata.msgtype=='image'){
				var text ="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
					text+="<div class='sp-content flex'>";
					text+='<div class="tc mr15">';
					text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
					if(topic_setting.reward_status==1)
					text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
					text+='</div>';
					text+="<div class='sp-con sub'>";
					text+="<div class='sp-name small-font'><span class='client_name'>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
					if(tcpdata.role_name == "管理员"){
						text+="<div class='sp-box sp-admin sp-text already'>";
					}else{
						text+="<div class='sp-box sp-text already'>";
					}
					text+="<p><img src='"+tcpdata.content+"' class='chat_img'></p></div>";
					if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
					text+='<div msg_id="'+tcpdata.msg_id+'" class="retract"><i class="iconfont icon-undo"></i></div>';
					text+='</div></div></li>';
		}
		
		if(tcpdata.msgtype=='ask'){

			try{
				var Question=JSON.parse(tcpdata.content);
				text="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
				text+="<div class='sp-content flex'>";
				text+='<div class="tc mr15">';
				text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
				if(topic_setting.reward_status==1)
				text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
				text+='</div>';
				text+="<div class='sp-con sub'>";
				text+="<div class='sp-name small-font'><span class='client_name'>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
				if(tcpdata.role_name == "管理员"){
					text+='<div class="sp-box sp-admin sp-text already">';
				}else{
					text+='<div class="sp-box sp-text already">';
				}	
				text+='<p class="gridXb pb5 mb5"><i class="iconfont icon-wen up-replay mr5"></i><b class="grey mr5">'+Question.N+'</b>'+Question.Q+'</p>';
				text+='<p><i class="iconfont icon-da up-replay mr5 yel"></i>'+Question.replay+'</p></div>';
				if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
				text+='<div msg_id="'+tcpdata.msg_id+'" class="retract"><i class="iconfont icon-undo"></i></div>';
				text+='</div></div></li>';

			}
			catch(e){
				text="";
				console.dir(e);
			}
		}
		
		//赞赏
		if(tcpdata.msgtype=='reward'){
			try{
			  var Reward=JSON.parse(tcpdata.content);

			  var text='<div class="luckyMoney tc" msg_id="'+tcpdata.msg_id+'">';
			  if(Reward.to_name){
				  text+='<div class="lm_main" attr-imgurl="'+Reward.to_avatar+'" attr-money="'+Reward.money+'" attr-toname="'+Reward.to_name+'" from-name="'+tcpdata.from_client_name+'" from-avatar="'+tcpdata.headimg+'">';
				  text+='<var>'+tcpdata.from_client_name+'</var> 赞赏了 <var>'+Reward.to_name+'</var> 一个<b>红包</b>';
			  }else{
				  text+='<div class="lm_main" attr-imgurl="'+Reward.to_avatar+'" attr-money="'+Reward.money+'" from-avatar="'+tcpdata.headimg+'">';
				  text+=tcpdata.last;
			  }
			  
			  text+='</div>';
			  text+='</div>';
			}
			catch(e){
				text="";
				console.dir(e);
			}
		}
		return text;
	}
	
	//获取评论信息分页
	function get_discontenthtml(tcpdata){
		// console.log(tcpdata);
		var text ='<li class="flex gridXb" msg_id="'+tcpdata.msg_id+'">';
				text+='<div class="thumb" style="background-image: url('+tcpdata.headimg+');"></div>';
				text+='<div class="sub">';
				if(user_info.is_manager||user_info.is_guest){
					text+='<span class="fr comm-btn primary gridFourRadius btn_wall" onclick="up_wall(this)">上墙</span>';
				}
				
				text+='<div class="title grey"><h2 class="mid-font disi">'+tcpdata.from_client_name+'</div>';
				text+='<div class="con">';
				if(tcpdata.msgtype=='image'){
					text+='<p><img id="sub_'+tcpdata.msg_id+'" class="chat_img" mediaid="'+tcpdata.content+'" src="'+tcpdata.content+'" onclick="dis_large(this)"></p>';
				}else if(tcpdata.ask_type == 1){
					text+='<p><i class="iconfont icon-wen up-replay mr5"></i>'+tcpdata.content+'</p></div>';
				}else{
					text+='<p>'+convertEmotion(tcpdata.content)+'</p></div>';
				}
				if(user_info.is_manager){
					text+='<div class="foot small-font"style="position:relative;"><div><span class="red comm-man commentManage mr10">管理</span>';
				}
					text+='<span class="fr grey">'+tcpdata.time+'</span></div><div class="commentManage_box" style="display:none"><span class="commentManageTab"><a class="delCommentMsg" data-type="'+tcpdata.msgtype+'">删除</a><span class="ml10 mr10">|</span><a class="shutUpSet">禁言</a></span></div></div>';
				
				text+='</div></li>';
		return text;
	}

	//根据时间长度获取对应显示语音宽度
	function getRecordClass(last_second){
		if(last_second<12)
			return "w1";
		else if(last_second>=12 && last_second<24)
			return "w2";
		else if(last_second>=24 && last_second<36)
			return "w3";
		else if(last_second>=36 && last_second<48)
			return "w4";
		else if(last_second>48)
			return "w5";
		else 
			return "w1";
	}
	
	/*保存信息*/
	function sentContent(json_data){
		var posturl=location.href;
		json_data.role_name=user_info.role_name;
		if(json_data.msgtype=='del'||json_data.msgtype=='ppt'){
			onSendMsg(JSON.stringify(json_data));
			return;
		}
		json_data.ppt_id=current_ppt_id;
		$.post(posturl,json_data,function(result){
			if(result.success==-1){
				alert(result.data);
				return;
			}
			json_data.msg_id=result.msg_id;
			json_data.time=new Date().format('hh:mm:ss');
			json_data.uid=user_info.uid;
			onSendMsg(JSON.stringify(json_data));
			globalObj.reward=null;
			globalObj.reward_last=null;
		});
	}
	
	/*声音播放完毕事件*/
	function voicePlayOver(){
		if(globalObj.voicePlaying){
			globalObj.voicePlaying.removeClass("isPlaying");
			globalObj.voicePlaying.addClass("already ");
			globalObj.isPlaying=false;
			var msg_id=globalObj.voicePlaying.parents('li').attr('msg_id');
			$(".recordingMsg").each(function(){
				if(parseInt($(this).parents('li').attr('msg_id'))>parseInt(msg_id)){
					$(this).click();
					return false;
				}
			});
		}
	}
	
   function stopEventBubble(event){
        var e=event || window.event;
        if (e && e.stopPropagation){
            e.stopPropagation();    
        }
        else{
            e.withdrawBubble=true;
        }
    }
   
	/*下载语音事件*/
	function voiceDown(){
		$(".recordingMsg").unbind();
		$(".recordingMsg").click(function(e){
			
			stopEventBubble(e);
    		var recordVoice=$(this);
    		var recordMsg=$(this);
    		$(".isPlaying").removeClass('isPlaying');
    		var attr_voice=recordVoice.attr('attr-src');
    		var ppt_id=recordMsg.parents('li').attr('ppt_id');
    		if(istopic_end&&ppt_id!=0&&swiper_objs.length>0){
    			var temp_index=-1;
    			for(var i=0;i<swiper_objs.length;i++){
    				if(swiper_objs[i].id==ppt_id){
    					temp_index=i;
    				}
    			}
    			if(temp_index>=0)
    			   swiper.slideTo(temp_index, 100, false);
    		}
    		if(attr_voice&&attr_voice.indexOf('http')==0){
    			if($("#audioPlayer").attr('src')!=attr_voice)
    		  	   $("#audioPlayer").attr('src',attr_voice);
    		  	
    		  	var media = $('#audioPlayer')[0];
    		  	if(media.paused) { 
    		  		media.play();
    		  		recordMsg.addClass("isPlaying");
    		  		globalObj.isPlaying=true;
    		    } else {  
    		    	media.pause(); 
    		    	recordMsg.removeClass('isPlaying')
    		    }

    		  	globalObj.voicePlaying=recordMsg;
    		  	media.removeEventListener("ended",voicePlayOver,false);
    		  	media.addEventListener("ended",voicePlayOver,false);
    		  	//ppt2
    		  	return;
    		} 
    		 if(recordVoice.attr("localid")){
     		    var localId=recordVoice.attr("localid");
     		    if(recordMsg.hasClass('isPlaying')){
     		    	wx.pauseVoice({
     		    	    localId: localId // 需要暂停的音频的本地ID，由stopRecord接口获得
     		    	});
     		    	recordMsg.removeClass('isPlaying')
     		    }else{
     		    	wx.playVoice({
     		    	    localId: localId // 需要播放的音频的本地ID，由stopRecord接口获得
     		    	});
     		    	
     		    	globalObj.isPlaying=true;
     		    	recordMsg.addClass("isPlaying");
     		    	wx.onVoicePlayEnd({
 			    	    success: function (res) {
 			    	    	recordMsg.removeClass("isPlaying");
 			    	    	recordMsg.addClass("already ");
 			    	    	globalObj.isPlaying=false;
 			    	    }
 			    	});
     		    }
     		    return;	 
     		 }
     		
 			wx.downloadVoice({
 				    serverId: recordVoice.attr('attr-src'), // 需要下载的音频的服务器端ID，由uploadVoice接口获得
 				    success: function (res) {
 				        var localId = res.localId; // 返回音频的本地ID
 				        recordMsg.addClass("isPlaying");
 				        recordVoice.attr('localid',localId);
 				        wx.playVoice({
 				            localId: localId // 需要播放的音频的本地ID，由stopRecord接口获得
 				        });
 				        globalObj.isPlaying=true;
 				        
 				        wx.onVoicePlayEnd({
 				    	    success: function (res) {
 				    	    	recordMsg.removeClass("isPlaying");
 				    	    	recordMsg.addClass("already ");
 				    	    	globalObj.isPlaying=false;
 				    	    }
 				    	});
 				    }
 				});  
		 });
	}
	
	/*分页获取信息课程*/
	var page_object={sub_pindex:1,sub_pages:sub_pages,com_pindex:1,com_pages:discuss_pages,loaded:[],loadeddis:[]};
	function ajax_content(pindex,dir,isfirst){
		if($.inArray(pindex,page_object.loaded)==-1){
			page_object.loaded.push(pindex);
		}else{
			$(".btnLoadSpeakEnd").removeClass("on");
		    $(".btnLoadSpeak").removeClass("on");
			return;
		}
		var geturl=location.href;
		$.ajax({
			"url":geturl,
			'type':'post',
			'data':{pindex:pindex,target:'main'},
			async:false,
			success:function(data){
		// $.getJSON(geturl,{pindex:pindex,target:'main'}, function(data){
			page_object.sub_pages=data.total;
			page_object.sub_pindex=data.pindex;
			var last_content="";
			$.each(data.rows, function(i,item){
				if(item.msgtype=='image'){
					if($.inArray(item.content,globalObj.chat_images)==-1)
					    globalObj.chat_images.push(item.content);
				}
				last_content+=get_contenthtml(item);	   
		    });
			
			$(".live-content").unbind();	
			
			if(dir=='down')
			  $("#speakBubbles").append(last_content);   
			else
			  $("#speakBubbles").prepend(last_content);   
	    	voiceDown();
	    	$(".chat_img").unbind();
	    	$(".chat_img").click(function(){
	    		wx.previewImage({
	    		    current: $(this).attr('src'), // 当前显示图片的http链接
	    		    urls: globalObj.chat_images // 需要预览的图片http链接列表
	    		});
	    	});
	    	if(dir=='down'){
	    		if(isfirst==1){
	    	       $(".live-content").scrollTop(18);
	    		}
	    	}else
	    		$(".live-content").scrollTop(18);
	    	
	    	setTimeout(function(){
	    		$(".btnLoadSpeakEnd").removeClass("on");
		    	$(".btnLoadSpeak").removeClass("on"); 
	    	},500)		    
		    /*赞赏功能开始*/
		     reward();
		    /*赞赏功能结束*/
		     is_firstload=0;
		     
		     $(".live-content").scroll(scroll_func);	
		     
		     $(".retract").unbind();
		     $(".retract").click(function(){
				  var msg_id=$(this).attr('msg_id');
				      $(".popup").show();
			          $(".popup_title").text("确认撤销此消息吗？");
			          $("#submit").click(function(){
				            $.post(location.href,{msg_id:msg_id,revoke:1},function(result){
				            	$(".popup").hide();
								  if(result.success==1){
									  var jsonObj = {type:"say",target:"main",msgtype:"del","from_client_name":user_info.nickname,content:msg_id};
									  sentContent(jsonObj);
								  }
				  			});
			          });
				      $("#cancel").click(function(){
				             $(".popup").hide();
				             msg_id='';
				      });
			 });
		     
		     $(".live-content").click(function(){
		    	 if(istopic_end==0&&(user_info.is_guest||user_info.is_manager)){
				     $(".speakBox").removeClass("hasTabBottom");
				     $(".speakBox").removeClass("othersBottom");
				     $(".speakBox").removeClass("voiceBottom");
					 $(".speakBox").removeClass("textBottom");
					 $(".speakBox").addClass("hasTabBottom");
		    	 }
		    	 $(".enjoy-box").removeClass('on')
			  });
		}
		});
	}
	
	function ajax_discuss_content(pindex){
		if($.inArray(pindex,page_object.loadeddis)==-1){
			page_object.loadeddis.push(pindex);
		}else{
			$(".btnLoadComment ").removeClass("on");
			return;
		}
			conten = {pindex:pindex,target:'discuss'};
		$.getJSON(location.href,conten, function(data){
			
			page_object.com_pages=data.total;
			$("#common_num").text(data.items);
			page_object.com_pindex=data.pindex;
			if(pindex==1&&data.rows.length>0){
				$("#loadNone").hide();		
			}

				var last_content="";
				$.each(data.rows, function(i,item){
					last_content+=get_discontenthtml(item);	
					get_disdamu(item,'asc');
			    });
			    $("#commentDl").append(last_content);
				$(".teacher").remove(); 
				$(".student1").addClass("active");
				$("#comment_where").children().children('b').text('讨论群');
				// $("#pic").remove();
			// }
			

			$(".btn_wall").click(function(){
				  var ask_name= $(this).parent().children('div.title').children('h2').text();
				  var ask_question=$(this).parent().children('.con').children('p').text();
				  if(ask_question.indexOf('问')==0){
					  ask_question=ask_question.replace('问','');
				  }
				  globalObj.Question={N:ask_name,Q:ask_question};
				  $("#commentReplyBox").show();
			});
			
			$(".commentManage").unbind();
			$(".commentManage").click(function(){
				$(this).parent().next().show();
			});
			
			$(".delCommentMsg").unbind();
			$(".delCommentMsg").click(function(){
				 $(".popup").show();
				if($(this).attr('data-type') == 'image'){
					var msg_id=$(this).parent().parent().parent().parent().parent().parent().attr('msg_id');
					var msg_dd=$(this).parent().parent().parent().parent().parent().parent();
				 }else{
					 var msg_id=$(this).parent().parent().parent().parent().parent().attr('msg_id');
					var msg_dd=$(this).parent().parent().parent().parent().parent();
				 }
			          $(".popup_title").text("确认要删除吗?");
			          $("#submit").click(function(){
				        $.post(location.href,{msg_id:msg_id,op:'del'},function(result){
				        	$(".popup").hide();
							if(result.success==1){
								msg_dd.remove();
							}
						});    
			          });
				      $("#cancel").click(function(){
				             $(".popup").hide();
				             msg_id='';
				      });
			});
			
			$(".shutUpSet").unbind();
			$(".shutUpSet").click(function(){
					 $(".popup").show();
					 var msg_id=$(this).parent().parent().parent().parent().parent().attr('msg_id');
					 var msg_dd=$(this).parent().parent().parent().parent().parent();
				          $(".popup_title").text("确认要对此用户禁言吗?");
				          $("#submit").click(function(){
						        $.post(location.href,{msg_id:msg_id,op:'shutup'},function(result){
						        	 $(".popup").hide();
									if(result.success==1){
										alert(result.data);
										$(this).parent().next('.commentManage_box').hide();
									}
								});    
				          });
					      $("#cancel").click(function(){
					             $(".popup").hide();
					             msg_id='';
					      });
				});	
			
	    	$(".comm-content").scrollTop($(".comm-content")[0].scrollHeight-1000);
	    	$(".btnLoadComment ").removeClass("on");  
		});
	}
    
	//上传语音接口
    function uploadVoic(localId,vload){
    
		if(vload==5){
			wx.uploadVoice({
				localId: localId, // 需要上传的音频的本地ID，由stopRecord接口获得
				isShowProgressTips: 1, // 默认为1，显示进度提示
				success: function (res) {
					var serverId = res.serverId; // 返回音频的服务器端ID
					var jsonObj = {type:"say",target:"main",msgtype:"voice",headimg:avatar,"last":clock_index,"from_client_name":user_info.nickname,content:serverId};
					sentContent(jsonObj);
					clock_index=0;
					$(".time var").eq(0).text(clock_index);
					current_voiclocalid=null;
					$("#btnStartRec").click();
				}
			});
		}else{
			wx.uploadVoice({
				localId: localId, // 需要上传的音频的本地ID，由stopRecord接口获得
				isShowProgressTips: 1, // 默认为1，显示进度提示
				success: function (res) {
					var serverId = res.serverId; // 返回音频的服务器端ID
					var jsonObj = {type:"say",target:"main",msgtype:"voice",headimg:avatar,"last":clock_index,"from_client_name":user_info.nickname,content:serverId};
					sentContent(jsonObj);
					clock_index=0;
					$(".time var").eq(0).text(clock_index);
					current_voiclocalid=null;
					clearInterval(ontck);
				}
			});
		}


	}
	var touchEvents = {
		touchstart: "touchstart",
		touchmove: "touchmove",
		touchend: "touchend",
		touchwithdraw:"touchwithdraw",
	}
	var ontck;
	var START;
	var END;
	var clock_index1;
	var clock_index2=true;
	function clock(){
		$(".time var").eq(0).text(clock_index);
		clock_index++;
		if(clock_index>=59){
			clock_index = 60;
			wx.stopRecord({
				success: function (res) {
					//voice.localId = res.localId;
					current_voiclocalid = res.localId;
					if (current_voiclocalid != null) {
						uploadVoic(current_voiclocalid);
						clock_index1=60;
						$(".recording_box dd").removeClass("startRec");
						$(".time").css("display","none");
					}
				}
			});

		}
	}
	function ontouch1(){
		ontck=setInterval("clock()",1000);
	}


 // 服务端发来消息时
 function onmessage(e){
	    	 // console.log(e.data);
	        var data = JSON.parse(e.data);
	        switch(data['type']){
	            case 'ping':
	                onSendMsg('{"type":"pong"}');
	                break;
	            case 'login':
	            	if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
	            	   $(".qlOLPeople").text(data['users']);
	            	else
	            	   $(".qlOLPeople").text(parseInt($(".qlOLPeople").text())+1);
	                break;
	            case 'say':
	            	if(data.target=='main'){
	            		var msg_last=$("#speakBubbles").find('li').last();
	            		if(msg_last.size()>0&&data.msg_id){
	            			if(msg_last.attr('msg_id')<data.msg_id){
	            				say(data);
	            			}
	            		}else{
	                        say(data);
	            		}
	            	}
	            	else{
	            		say_discuss(data);
	            	}
	                break;
	            case 'logout':
	                break;
	            case 'tipmsg':
	            	if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
		            	 $(".qlOLPeople").text(data['users']);
	        }
	    }
 
 		//讨论
		function say_discuss(tcpdata){
			$("#loadNone").hide();
			// console.log(tcpdata);

			var text ='<li class="flex gridXb" msg_id="'+tcpdata.msg_id+'">';
				text+='<div class="thumb" style="background-image: url('+tcpdata.headimg+');"></div>';
				text+='<div class="sub"  msg_id="'+tcpdata.msg_id+'">';
				if(user_info.is_manager||user_info.is_guest){
                	text+='<span class="fr comm-btn primary gridFourRadius btn_wall">上墙</span>';
            	}
				text+='<div class="title grey"><h2 class="mid-font disi">'+tcpdata.from_client_name+'</h2></div>';
				text+='<div class="con">';
				if(tcpdata.msgtype=='image'){
					text+='<p><img id="sub_'+tcpdata.msg_id+'" class="chat_img" mediaid="'+tcpdata.content+'" src="'+tcpdata.content+'" onclick="dis_large(this)"></p>';
				}else if(tcpdata.is_ask){
					text+='<p><i class="iconfont icon-wen up-replay mr5"></i>'+convertEmotion(tcpdata.content)+'</p></div>';
				}else{
					text+='<p>'+convertEmotion(tcpdata.content)+'</p></div>';
				}
				if(user_info.is_manager){
					text+='<div class="foot small-font"style="position:relative;"><div><span class="red comm-man commentManage mr10">管理</span>';
				}
				text+='<span class="fr grey">'+tcpdata.time+'</span></div><div class="commentManage_box" style="display:none"><span class="commentManageTab"><a class="delCommentMsg" data-type="'+tcpdata.msgtype+'">删除</a><span class="ml10 mr10">|</span><a class="shutUpSet">禁言</a></span></div></div>';
				
				text+='</div></li>';

				$("#commentDl").prepend(text);
				$(".comm-content").scrollTop(15);
				$(".btn_wall").unbind();
				$(".btn_wall").click(function(){
					  var ask_name= $(this).parent().children('div.title').children('h2').text();
				  	var ask_question=$(this).parent().children('.con').children('p').text();
					  if(ask_question.indexOf('问')==0){
						  ask_question=ask_question.replace('问','');
					  }
					  globalObj.Question={N:ask_name,Q:ask_question};
					  $("#commentReplyBox").show();
				});
				$(".commentManage").unbind();
			$(".commentManage").click(function(){
				$(this).parent().next().show();
			});
			
			$(".delCommentMsg").unbind();
			$(".delCommentMsg").click(function(){
				 $(".popup").show();
				if($(this).attr('data-type') == 'image'){
					var msg_id=$(this).parent().parent().parent().parent().parent().parent().attr('msg_id');
					var msg_dd=$(this).parent().parent().parent().parent().parent().parent();
				 }else{
					 var msg_id=$(this).parent().parent().parent().parent().parent().attr('msg_id');
					var msg_dd=$(this).parent().parent().parent().parent().parent();
				 }
				
			          $(".popup_title").text("确认要删除吗?");
			          $("#submit").click(function(){
				        $.post(location.href,{msg_id:msg_id,op:'del'},function(result){
							$(".popup").hide();
							if(result.success==1){
								msg_dd.remove();
							}
						});    
			          });
				      $("#cancel").click(function(){
				             $(".popup").hide();
				             msg_id='';
				      });
			});
				
				$(".shutUpSet").unbind();
				$(".shutUpSet").click(function(){
					 $(".popup").show();
					 var msg_id=$(this).parent().parent().parent().parent().parent().attr('msg_id');
					 var msg_dd=$(this).parent().parent().parent().parent().parent();
				          $(".popup_title").text("确认要对此用户禁言吗?");
				          $("#submit").click(function(){
						        $.post(location.href,{msg_id:msg_id,op:'shutup'},function(result){
						        	 $(".popup").hide();
									if(result.success==1){
										alert(result.data);
										$(this).parent().next('.commentManage_box').hide();
									}
								});    
				          });
					      $("#cancel").click(function(){
					             $(".popup").hide();
					             msg_id='';
					      });
				});	
				
				get_disdamu(tcpdata,'desc');
		}
	    // 发言
	    function say(tcpdata){
	    	tcpdata.revoke=tcpdata.uid==user_info.uid||user_info.is_manager?1:0;
	    	var text="";
	    	if(tcpdata.msgtype=='text'){
	    	   var text ="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
				text+="<div class='sp-content flex'>";
  				text+='<div class="tc mr15">';
				text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
				if(topic_setting.reward_status==1)
				text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
				text+='</div>';
				text+="<div class='sp-con sub'>";
				text+="<div class='sp-name small-font'><span class='client_name'>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
				if(tcpdata.role_name == "管理员"){
					text+="<div class='sp-box sp-admin sp-text already'>";
				}else{
					text+="<div class='sp-box sp-text already'>";
				}
				text+="<p>"+convertEmotion(tcpdata.content)+"</p></div>";
				if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
				text+="<div msg_id='"+tcpdata.msg_id+"' class='retract'><i class='iconfont icon-undo'></i></div>";
				text+="</div></div></li>";
	    	}
	    	if(tcpdata.msgtype=='wps'){
			//console.log(tcpdata.wps_hz)
	    	   var text ="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
				text+="<div class='sp-content flex'>";
  				text+='<div class="tc mr15">';
				text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
				if(topic_setting.reward_status==1 && tcpdata.role_name == "讲师")
				text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
				text+='</div>';
				text+="<div class='sp-con sub'>";
				text+="<div class='sp-name small-font'><span class='client_name '>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
				if(tcpdata.role_name == "讲师"){
					text+="<div class='sp-box sp-admin sp-text already'>";
				}else{
					text+="<div class='sp-box already w100 flex' style='padding:20px;position: relative;'><div msg_id='"+tcpdata.msg_id+"' class='retract' style='position: absolute;top: 2px;right:-10px;'><i class='iconfont icon-undo'></i></div>";
				}
				text+='';
				if(tcpdata.wps_hz=='doc' || tcpdata.wps_hz=='docx'){
					text+="<img src='../addons/dg_chat/resource/img/word.jpg'  style='margin-right:10px;' width='40' height='40'>";
				}else if(tcpdata.wps_hz=='xls' || tcpdata.wps_hz=='xlsx' || tcpdata.wps_hz=='csv'){
					text+="<img src='../addons/dg_chat/resource/img/excel.jpg' style='margin-right:10px;' width='40' height='40'>";
				}else if(tcpdata.wps_hz=='ppt' || tcpdata.wps_hz=='pptx'){
					text+="<img src='../addons/dg_chat/resource/img/ppt.jpg'  style='margin-right:10px;' width='40' height='40'>";
				}else if(tcpdata.wps_hz=='pdf'){
					text+="<img src='../addons/dg_chat/resource/img/pdf.jpg'  style='margin-right:10px;' width='40' height='40'>";
				}
				text+="<div class='sub' style='display:flex;flex-direction:column;justify-content:space-between'><span class='line-text-two'>"+convertEmotion(tcpdata.content)+"</span><span class='f12 grey' style=' justify-content:space-between;display:flex;margin-top:5px;text-align:left;'><span>"+tcpdata.wps_size+"</span><a style='display:block;' href="+tcpdata.wps_url+">立即下载</a></span></div></div>";
				if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
				text+="";
				text+="</div></div></li>";
	    	}
			if(tcpdata.msgtype=='voice'){
			      var voice_class=getRecordClass(tcpdata.last);
					var text ="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
					text+="<div class='sp-content flex'>";
					text+='<div class="tc mr15">';
					text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
					if(topic_setting.reward_status==1)
					text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
					text+='</div>';
					text+="<div class='sp-con sub'>";
					text+="<div class='sp-name small-font'><span class='client_name'>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
					if(tcpdata.role_name =="管理员"){
						text+="<div class='sp-box sp-admin sp-vioce recordingMsg "+voice_class+"'attr-src='"+tcpdata.content+"'>";						
					}else{
					text+="<div class='sp-box sp-vioce recordingMsg already "+voice_class+"'attr-src='"+tcpdata.content+"'>";
					}
					text+="<span class='defalut'><i class='iconfont icon-playon_fill' attr-src='"+tcpdata.content+"'></i> 播放</span>";
					text+='<span class="playing"><i class="i1 delay2"></i><i class="i2 delay5"></i><i class="i3 delay2"></i><i class="i4 delay8"></i><i class="i5 delay10"></i><i class="i6 delay4"></i><i class="i7"></i><i class="i8"></i></span>';
					text+="<span class='duration'>"+tcpdata.last+"'</span></div>";
					if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
					text+="<div msg_id='"+tcpdata.msg_id+"' class='retract'><i class='iconfont icon-undo'></i></div>";
					text+="</div></div></li>";
			}
			
			if(tcpdata.msgtype=='image'){
				var text ="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
					text+="<div class='sp-content flex'>";
					text+='<div class="tc mr15">';
					text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
					if(topic_setting.reward_status==1)
					text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
					text+='</div>';
					text+="<div class='sp-con sub'>";
					text+="<div class='sp-name small-font'><span class='client_name'>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
					if(tcpdata.role_name == "管理员"){
						text+="<div class='sp-box sp-admin sp-text already'>";
					}else{
						text+="<div class='sp-box sp-text already'>";
					}
					text+="<p><img src='"+tcpdata.content+"' class='chat_img'></p></div>";
					if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
					text+='<div msg_id="'+tcpdata.msg_id+'" class="retract"><i class="iconfont icon-undo"></i></div>';
					text+='</div></div></li>';
			}
			
			if(tcpdata.msgtype=='ask'){
					try{
					var Question=JSON.parse(tcpdata.content);
					text="<li msg_id='"+tcpdata.msg_id+"' id='"+tcpdata.msg_id+"' ppt_id='"+tcpdata.ppt_id+"'><div class='sp-time tc grey'>"+tcpdata.time+"</div>";
					text+="<div class='sp-content flex'>";
					text+='<div class="tc mr15">';
					text+="<div class='thumb' style='background-image: url("+tcpdata.headimg+");'attr-img='"+tcpdata.headimg+"'></div>";
					if(topic_setting.reward_status==1)
					text+='<a class="btn_ilike tc" href="javascript:;">赏</a>';
					text+='</div>';
					text+="<div class='sp-con sub'>";
					text+="<div class='sp-name small-font'><span class='client_name'>"+tcpdata.from_client_name+"</span><span class='grey ml5'>"+tcpdata.role_name+"</span></div>";
					if(tcpdata.role_name == "管理员"){
						text+='<div class="sp-box sp-admin sp-text already">';
					}else{
						text+='<div class="sp-box sp-text already">';
					}	
					text+='<p class="gridXb pb5 mb5"><i class="iconfont icon-wen up-replay mr5"></i><b class="grey mr5">'+Question.N+'</b>'+Question.Q+'</p>';
					text+='<p><i class="iconfont icon-da up-replay mr5 yel"></i>'+Question.replay+'</p></div>';
					if(tcpdata.revoke&&(user_info.is_manager||user_info.is_guest))
					text+='<div msg_id="'+tcpdata.msg_id+'" class="retract"><i class="iconfont icon-undo"></i></div>';
					text+='</div></div></li>';

				}
				catch(e){
					text="";
					console.dir(e);
				}
			}
			//赞赏
			if(tcpdata.msgtype=='reward'){
				try{
				  var Reward=JSON.parse(unescape(tcpdata.content));
				  text='<dt class="luckyMoney tc" msg_id="'+tcpdata.msg_id+'">';
				  if(Reward.to_name){
					  text+='<div class="lm_main" attr-imgurl="'+Reward.to_avatar+'" attr-money="'+Reward.money+'" attr-toname="'+Reward.to_name+'" from-name="'+tcpdata.from_client_name+'" from-avatar="'+tcpdata.headimg+'">';
					  text+='<var>'+tcpdata.from_client_name+'</var> 赞赏了 <var>'+Reward.to_name+'</var> 一个<b>红包</b>';
				  }else{
					  text+='<div class="lm_main" attr-imgurl="'+Reward.to_avatar+'" attr-money="'+Reward.money+'" from-avatar="'+tcpdata.headimg+'">';
					  text+=tcpdata.content_ext;
				  }
				  text+='</div>';
				  text+='</dt>';
				}
				catch(e){
					text="";
					console.dir(e);
				}
			}
			//讨论区禁言
			if(tcpdata.msgtype=='shutup'){
				if(tcpdata.content=='on'){
				  text='<div class=" grey f12 tc pt10 pb10">讨论区现在禁止发言</div>';
				  $(".bubble_dt").show();
				  $("#ask_discuss").hide();
				}
				else{
				  text='<div class=" grey f12 tc pt10 pb10">讨论区现在允许发言</div>';
				  $("#ask_discuss").show();
				  $(".bubble_dt").hide();
				}
			}
			if(tcpdata.msgtype=='del'){
				var msg_id=tcpdata.content;
				$("#"+msg_id).remove();
				text='<div class="live-tips grey"><b>'+tcpdata.from_client_name+' 撤回了一条消息</b></div>';
			}
			if(tcpdata.msgtype=='ppt'){
			  //处理say
			  set_swiper_obj(tcpdata);
			  return;
			}						
	    	
			$("#speakBubbles").append(text);
	    	
	    	 $(".live-content").scrollTop($(".live-content")[0].scrollHeight);
	    	
	    	if(tcpdata.msgtype=='voice'){
		    	voiceDown();
		    	if(!globalObj.isPlaying||globalObj.isPlaying==false){
		    	   if(user_info.is_manager||user_info.is_guest){
		    		   if(is_autoplay){
		    		      $(".recordingMsg").last().click();
		    		   }
		    	   }else{
		    		   $(".recordingMsg").last().click();
		    	   }
		    	}
	    	}
	    	$(".chat_img").unbind();
	    	$(".chat_img").click(function(){
	    		if($.inArray($(this).attr('src'),globalObj.chat_images)==-1){
	    			globalObj.chat_images.push($(this).attr('src'));
	    		}
	    		wx.previewImage({
	    		    current: $(this).attr('src'), // 当前显示图片的http链接
	    		    urls: globalObj.chat_images // 需要预览的图片http链接列表
	    		});
	    	 });
	    	//赞赏
	    	reward();
	    	$(".retract").unbind();
		     $(".retract").click(function(){
				  var msg_id=$(this).attr('msg_id');
				      $(".popup").show();
			          $(".popup_title").text("确认撤销此消息吗？");
			          $("#submit").click(function(){
				            $.post(location.href,{msg_id:msg_id,revoke:1},function(result){
				            	$(".popup").hide();
								  if(result.success==1){
									  var jsonObj = {type:"say",target:"main",msgtype:"del","from_client_name":user_info.nickname,content:msg_id};
									  sentContent(jsonObj);
								  }
				  			});
			          });
				      $("#cancel").click(function(){
				             $(".popup").hide();
				              msg_id='';
				      });
			 });
	  }
	  
	 /*滚动事件处理函数*/
     function scroll_func(){
    	 var scrollTop = $(this).scrollTop();
         var scrollHeight = $(this)[0].scrollHeight;
         var windowHeight = $(this)[0].clientHeight; 
         if (scrollTop + windowHeight+2 >= scrollHeight) {  //滚动到底部执行事件
         	if(page_object.sub_pindex<sub_pages){
         	  $(".btnLoadSpeakEnd").addClass("on");
         	  page_object.sub_pindex=page_object.sub_pindex+1;
         	  ajax_content(page_object.sub_pindex,"down",0);
         	}
         }
         if (scrollTop < 3 ) {  //滚动到头部部执行事件
         	 if(page_object.sub_pindex>1){
         	 	 // $(".popup_tips").text('jiazai');
                 // $(".popup_tips").show();
                 // setTimeout(function(){$(".popup_tips").hide();},1000);
         	   $(".btnLoadSpeak").addClass("on");
         	   page_object.sub_pindex=page_object.sub_pindex-1;
         	   ajax_content(page_object.sub_pindex,"up",0)
         	 }
         }  
     }
    

/*停止录音*/
		function stoprec1(){
			clearInterval(clock_handler);
			$(".btn_dd").removeClass('startRec');
			$(".btn_dd").addClass('stopRec');
			$(".rTips_1").css("display","none");
			$("#btnStopRec").hide();
			$("#btnSentRec").show();
			wx.stopRecord({
				success: function (res) {
					current_voiclocalid = res.localId;
					if(current_voiclocalid!=null){
						uploadVoic(current_voiclocalid,5);
					}
					$("#btnSentRec").hide();
					$(".btn_dd").removeClass('stopRec');
					$(".time var").eq(0).text(0);

					$(".step1").show();
					$(".pt15").show();
					$(".time").hide();
				}
			});

		}

		function  up_wall(up){
			  var ask_name= $(up).parent().children('div.title').children('h2').text();
				  var ask_question=$(up).parent().children('.con').children('p').text();
			  globalObj.Question={N:ask_name,Q:ask_question};
			  $("#commentReplyBox").show();
		}
	  $(function(){
	initEmotionUL();
	  	
	    	 $(".packup").click(function(){
			if(page_object.sub_pindex>1){
				$(".btnLoadSpeak").addClass("on");
		        page_object.sub_pindex=page_object.sub_pindex-1;
		         
		        ajax_content(page_object.sub_pindex,"up",0);
			}
	     	 
    		 })
    		 $(".unfold").click(function(){
			if(page_object.sub_pindex<sub_pages){
				$(".btnLoadSpeak").addClass("on");
		        page_object.sub_pindex=page_object.sub_pindex+1;
		         
		        ajax_content(page_object.sub_pindex,"down",0);
			}
	     	 
    		 })
	    	if(istopic_end==0){
	    		page_object.sub_pindex=page_object.sub_pages;
	    		if(page_object.sub_pindex == 0){
	    		page_object.sub_pindex=1;
	    		} 
	    		// page_object.sub_pindex=1;
	    		window.scrollTo(500,500);
	    	}

	    	ajax_content(page_object.sub_pindex,'down',1);
	    	ajax_discuss_content(page_object.com_pindex);
	    	
	    	$(".btn_ask").click(function(){
	    		$(this).toggleClass('on');
	    	});
	    		    	
	    	$("#btn_send").click(function(){
	    	   var inputText = $("#speakInput").text();
	    	   if(inputText==''){
	    		   return;
	    	   }
	    	   var jsonObj = {type:"say",target:"main",msgtype:"text","from_client_name":user_info.nickname,headimg:avatar,content:inputText};
	    	   
	    	   sentContent(jsonObj);
	  	       $("#speakInput").text('');
	  	       $(".enjoy-box").removeClass('on')
	    	});
	    	//开始录音
	    	$("#btnStartRec").click(function(){
	    		$(".step1").hide();
	    		$(".pt15").hide();
	    		// $(".btn_dd").addClass('startRec');
	    		$(".time").show();
	    		$(".step2").show();
	    		wx.startRecord({
					success: function(){
						startRec();
						//$(".rTips_1").css("display","block");
						$("#btnStopRec").show();
						clock_handler=setInterval(startRec,1000);
					},
					withdraw: function () {
						alert('用户拒绝授权录音');
					}
				});
	    	});
	    	//停止录音 
	    	$("#btnStopRec").click(function(){
				//$(".rTips_1").css("display","none");
	    		clearInterval(clock_handler);
	    		// $(".btn_dd").removeClass('startRec');
	    		// $(".btn_dd").addClass('stopRec');
	    		$("#btnStopRec").hide();
	    		$("#btnSentRec").show();
	    		wx.stopRecord({
	    		    success: function (res) {
	    		    	current_voiclocalid = res.localId;
	    		    }
	    		});
	    	});
	    	//发送录音 
	    	$("#btnSentRec").click(function(){
	    		if(current_voiclocalid!=null){
	    		   uploadVoic(current_voiclocalid);
	    		}
	    		$("#btnSentRec").hide();
	    		// $(".btn_dd").removeClass('stopRec');
	    		// $(".time").hide();
	    		$(".time var").eq(0).text(0);
	    		
	    		$(".step1").show();
	    		$(".pt15").show();
	    		$(".time").hide();
	    	});	 
	    	
	    	$("#btnCancelRec").click(function(){
	    		$("#btnStopRec").click();
	    		current_voiclocalid==null
	    		$("#btnSentRec").hide();
		    	// $(".btn_dd").removeClass('stopRec');
		    	$(".time var").eq(0).text(0);
		    		
		    	$(".step1").show();
		    	$(".pt15").show();
		    	$(".time").hide();
		    	 clock_index=0;
	    	});
	    	
	    	$(".midea-btn").click(function(){
	    		 wx.chooseImage({
	    			    count: 1, 
	    			    sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
	    			    sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
	    			    success: function (res) {
	    			       var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
	    			       var i = 0, length = 1;
	    			       globalObj.localIds=localIds;
	    			       function upload(){
			    			     var firstId=globalObj.localIds[i].toString();
			    			      wx.uploadImage({
			    			    	    localId: firstId, // 需要上传的图片的本地ID，由chooseImage接口获得
			    			    	    isShowProgressTips: 1, // 默认为1，显示进度提示
			    			    	    success: function (res) {
			    			    	        var serverId = res.serverId; // 返回图片的服务器端ID
			    			    	        $.post(down_url,{'mid':serverId,"mtype":'image'},function(result){
			    			    	        	 var img_url=result.data;
			    			    	        	 var jsonObj = {type:"say",target:"main",msgtype:"image","from_client_name":user_info.nickname,headimg:avatar,content:img_url};
					    					  	 sentContent(jsonObj);
			    			    	        });  
			    					  	    i++;
			    					  	    if (i < 1) {
			    					            upload();
			    					        }
			    			    	    }
			    			    });
	    			       }
	    			       
	    			       upload();		    			    
	    			    }
	    		}); 
	    		return false;
	    	});

			$("#pic").click(function(){
	    		 wx.chooseImage({
	    			    count: 1, 
	    			    sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
	    			    sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
	    			    success: function (res) {
	    			       var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
	    			       var i = 0, length = 1;
	    			       globalObj.localIds=localIds;
	    			       function upload(){
			    			     var firstId=globalObj.localIds[i].toString();
			    			      wx.uploadImage({
			    			    	    localId: firstId, // 需要上传的图片的本地ID，由chooseImage接口获得
			    			    	    isShowProgressTips: 1, // 默认为1，显示进度提示
			    			    	    success: function (res) {
			    			    	        var serverId = res.serverId; // 返回图片的服务器端ID
			    			    	        $.post(down_url,{'mid':serverId,"mtype":'image'},function(result){
			    			    	        	 var img_url=result.data;
			    			    	        	 var jsonObj = {type:"say",target:"discuss",msgtype:"image","from_client_name":user_info.nickname,headimg:avatar,content:img_url};
					    					  	 sentContent(jsonObj);
			    			    	        });  
			    					  	    i++;
			    					  	    if (i < 1) {
			    					            upload();
			    					        }
			    			    	    }
			    			    });
	    			       }
	    			       
	    			       upload();		    			    
	    			    }
	    		}); 
	    		return false;
	    	});
	    	
	    //评论框加载事件
	     $(".comm-content").scroll(function(){
	    	 var scrollTop = $(this).scrollTop();
	            var scrollHeight = $(this)[0].scrollHeight;
	            var windowHeight = $(this)[0].clientHeight; 
	            //console.dir(scrollTop + windowHeight +"__"+ scrollHeight);
	            if (scrollTop + windowHeight+1 >= scrollHeight) {  //滚动到底部执行事件
	            	if(page_object.com_pindex<page_object.com_pages){
	            	   page_object.com_pindex=page_object.com_pindex+1;
	            	   $(".btnLoadComment ").addClass("on"); 
	            	   ajax_discuss_content(page_object.com_pindex);
	            	}
	            }
	      });
	     
	     
	     $(".live-content").scroll(scroll_func);	 
	     
	     /*上墙*/
	      $(".btn_wall").click(function(){
			  var ask_name= $(this).parent().children('div.title').children('h2').text();
				  var ask_question=$(this).parent().children('.con').children('p').text();
			  globalObj.Question={N:ask_name,Q:ask_question};
			  $("#commentReplyBox").show();
		  });
		  $(".gene_withdraw").click(function(){
			  $("#commentReplyBox").hide()
			  $(".w100").val('');
		  });

		  $(".commentManage").first().click(function(){
		  		$(this).parent().next().show();
				
			});
		  
		  //上墙确认按钮
		  $("#commentReplyBox .gene_confirm").click(function(){
			  var reply_text=$("#commentReplyBox .w100").val();
			  if(reply_text==''){
				  return;
			  }
			  if(!globalObj.Question){
				  return;
			  }
			  //给赋值
			  globalObj.Question.replay=reply_text;
			  var jsonObj = {type:"say",target:"main",msgtype:"ask",headimg:avatar,"from_client_name":user_info.nickname,content:JSON.stringify(globalObj.Question)};
	    	  sentContent(jsonObj);
	    	  //onSendMsg(JSON.stringify(jsonObj));
	  	      $(".w100").val('');
			  $("#commentReplyBox").hide();
		  });
		  /*取消*/
		  $("#cancle").click(function(){
			  $("#commentReplyBox").hide();
			  $(".w100").val('');
		  });
		  
		  /*讨论区禁言*/
		  $("#allShutup").click(function(){
			  $(this).toggleClass('swon');  
			  if($(this).hasClass('swon')){
					 var jsonObj = {type:"say",target:"main",msgtype:"shutup",headimg:avatar,content:"on"};
					 sentContent(jsonObj);
				 }else{
					 var jsonObj = {type:"say",target:"main",msgtype:"shutup",headimg:avatar,content:"off"};
					 sentContent(jsonObj);
				 }
		  });
		  /*自动播放*/
		  $("#btnAutoPlay").click(function(){
			 $(this).toggleClass('swon');  
			 if($(this).hasClass('swon')){
				 is_autoplay=true;

			 }else{
				 is_autoplay=false;
			 }
			 
		  });


		  /*长按上传*/
		  if($("#btnRecording").size()>0){
			  document.getElementById('btnRecording').addEventListener('touchstart',function(event){
				  $(".recording_box dd").addClass("startRec");
				  $(".time").css("display","block");
				  clock_index2=true;
				  event.preventDefault();
				  START = new Date().getTime();
				  recordTimer = setTimeout(function(){
					  wx.startRecord({
						  success: function(){
							  localStorage.rainAllowRecord = 'true';
						  },
						  withdraw: function () {
							  alert('用户拒绝授权录音');
						  }
					  });
				  },300);
				  clock_index=1;
				  ontouch1();
			  });
			  document.getElementById('btnRecording').addEventListener("touchmove",function(event){
				  event.preventDefault();
				  $(".rTips_3").css("display","block");
				  var touch1=event.changedTouches[0].clientY;
				  var boduh=parseInt($("body").height());
				  var xx=parseInt($(".recording_tab_box").innerHeight());
				  var moveh=boduh-xx;
				  if(parseInt(touch1)<parseInt(moveh)){
					  clock_index2=false;
					  clock_index=0;
					  $(".time var").eq(0).text(clock_index);
					  $(".rTips_3").css("display","none");
					  wx.stopRecord();
					  clearInterval(ontck);
				  }
			  });
			  document.getElementById('btnRecording').addEventListener('touchend',function(event){
				  $(".recording_box dd").removeClass("startRec");
				  $(".time").css("display","none");
				  $(".rTips_3").css("display","none");
				  event.preventDefault();
				  END = new Date().getTime();
				  if(clock_index1>=59){
					  return;
				  }else if(clock_index2==false){
					  return;
				  }else {
					  clock_index=parseInt((END - START)/1000);
					  if(clock_index<2){
						  wx.stopRecord();
						  clearInterval(ontck);
						  return;
					  }
					  wx.stopRecord({
						  success: function (res) {
							  //voice.localId = res.localId;
							  current_voiclocalid=res.localId;
							  if(current_voiclocalid!=null){
								  uploadVoic(current_voiclocalid);
							  }
						  }
					  });
				  }
			  });
		  }


   });
$(function(){	  
	  	// 关闭按钮	
	  $(".close-btn").click(function(){
	      $(".enjoy-box").removeClass('on');
	     $(".commentManage_box").hide();
	  });

      
      $(".commentInput").click(function(){
	      $(".commentBox").addClass('typing');
		  $(".danmuBottom").show();
		  $(".danmuBottom").css("max-height",'25rem');
		  $(".qlDanmuBg").show();
	  });
	  // 评论发送
	  $("#btn_discuss_send").click(function(){
		 var text=$(".danmuInput").text(); 
		 if(text==''){
			 return;
		 }
			var jsonObj = {type:"say",target:"discuss",msgtype:"text",headimg:avatar,"from_client_name":user_info.nickname,content:text,'send_openid':user_info.openid};
  	     if($('#mr5').is(':checked')){
  	    	jsonObj.is_ask=true;
  	     }
		 sentContent(jsonObj);
	     $(".danmuInput").text('');
	     $("#mr5").removeAttr("checked");
	     $(".enjoy-box").removeClass('on')
	  });
	  // 邀请讲师关闭
	  $(".btn_gtb_close").click(function(){
		  $(".setGuestTips").hide();
	  });


	  $(".btn_closeCBox").click(function(){
	      $(".cbox_main").css("margin-bottom","-250px");
		  $(".control_box").removeClass("on");
	  });
	  
	  $(".close_elt").click(function(){
		  $(".qlMsgTips").hide();
	  });
	  // 关闭直播
	  $(".wran").click(function(){
		  var topic_id=$(this).attr('attr-topicid');
		  $(".popup").show();
          $(".popup_title").text("确定要结束吗?");
          $("#submit").click(function(){
	            $.post(topic_overurl,{topic_id:topic_id},function(result){
			  	// console.log(result);
			  	$(".popup").hide();
				  if(result.success==1){
					  location.href=location.href+"&r=1";
				  }else{
					 $(".popup_tips").text(result.data);
		             $(".popup_tips").show();
		             setTimeout(function(){$(".popup_tips").hide();}, 2000);
				  }
			  });
          });
	      $("#cancel").click(function(){
	             $(".popup").hide();
	             topic_id='';
	      });
	  });
	  
	 var zxx = {
		  obj: function(){
		             return {
		                 sec: $(".sec"),
		                 mini: $(".mini"),
		                 hour: $(".hour"),
		                 day: $(".day")
		             }
		  }
	 };
		 
	if(!istopic_end&&istopic_begin==0){
	   fnTimeCountDown(begin_time+'000', zxx.obj());
	}

	$(".scpoer").click(function(){
		$.post(location.href,{spoer:true},function(result){
			if(result.success==1){
				location.href=topic_poster+"&spoerid="+result.poserid;
			}
		});
	});

	$(".start_remind").click(function(){
		$.post(location.href,{tips:true},function(result){
			if(result.success==1){
				$(".popup_tips").text("设置成功");
				$(".popup_tips").show();
				setTimeout(function(){$(".popup_tips").hide();}, 2000);

				// $(document).minTipsBox({
				// 	tipsContent: "设置成功",
				// 	tipsTime: 2
				// });
				$(".start_remind").text('开播前将会提醒您');
			}else{
				$(".popup_tips").text("已取消");
				$(".popup_tips").show();
				setTimeout(function(){$(".popup_tips").hide();}, 2000);
				// $(document).minTipsBox({
				// 	tipsContent: "已取消",
				// 	tipsTime: 2
				// });
				$(".start_remind").text('点击设置开播提醒');
			}
		});
	});
	
	$(".gzBtn").click(function(e){
		$(".geneBox.focusQr2Box").show();
	});
	
	$(".geneBox.focusQr2Box").click(function(){
		$(".geneBox.focusQr2Box").hide();
	});
	
	$(".focusQr2Box .gene_content").click(function(e){
		stopEventBubble(e);
	});	
	
	$(".ppt-btn").click(function(){
		$(".ppt-box").show();
		$("#come_back_ppt").unbind();
		$("#come_back_ppt").click(function(){
			$(".ppt-box").hide();
		});
	});
	$(".wps-btn").click(function(){
	
		$(".wps-box").show();
		$("#wps_back_comment").unbind();
		$("#wps_back_comment").click(function(){
			$(".wps-box").hide();
		});
	});
	$("#wps_up").click(function(){
		$('#fileupload').click();
	})

	$('#fileupload').fileupload({
		dataType: 'json',
		done: function (e, data) {
			var res=data.result;
			if(res.status==2){
				alert('发送文件大小不能超过20M');
				return;
			}
			if(res.status==4){
				alert('上传文件格式错误');
				return;
			}
			if(res.status==3){
				alert('发送失败');
				return;
			}
			$(".wps-box").hide();
			 var jsonObj = {type:"say",target:"main",msgtype:"wps","from_client_name":user_info.nickname,headimg:avatar,content:res.wps_name,'wps_size':res.wps_size,'wps_url':res.content,'wps_hz':res.wps_hz};
	    	   sentContent(jsonObj);
		}
	});
	$("#come_back_ppt").click(function(){
		$(".ppt-box").hide();
	});
	
	$(".camera").click(function(){
   		 wx.chooseImage({
   			    count: 9, 
   			    sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
   			    sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
   			    success: function (res) {
   			       var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
   			       var i = 0, length = 1;
   			       function upload(){
		    			     var firstId=localIds[i].toString();
		    			      wx.uploadImage({
		    			    	    localId: firstId, // 需要上传的图片的本地ID，由chooseImage接口获得
		    			    	    isShowProgressTips: 1, // 默认为1，显示进度提示
		    			    	    success: function (res) {
		    			    	        var serverId = res.serverId; // 返回图片的服务器端ID
		    			    	        $.post(down_url,{'mid':serverId,"mtype":'image','topic_id':user_info.topic_id,'up_type':'ppt'},function(result){
		    			    	        	 var html=getPPtImgHtml(result);
		    			               	     $("#boxli").append(html);
		    			               	     i++;
				    					  	 if (i < localIds.length) {
				    					          upload();
				    					     }
				    					  	 if(i==localIds.length){
				    					  		init_fun_ppt();
				    					  	 }
		    			    	        });  
		    					  	   
		    			    	    }
		    			 });
   			       } 
   			       upload();
   			       
   			    }
   		}); 
   		return false;
	});
	
	if($(".swiper-slide").size()>0){
		$(".slideT").show(0);
		$("body").removeClass("BdSwitch");	
	}
	resetBtnPosition();
    
	if($(".swiper-container").size()>0){
	    swiper = new Swiper('.swiper-container', {
			pagination: '.swiper-pagination',
			paginationType : 'fraction',
			speed: 400,
			autoplayDisableOnInteraction: false,
		});
	    
	    $(".swiper-slide").each(function(){
	    var img_url=$(this).attr('attr-img');
	    	swiper_objs.push({id:$(this).attr('attr-id'),index:$(this).attr('attr-index'),img_url:img_url});
	    });
	    
	    preview_pptimgs();
	}
    
	// initEmotionUL();
	init_fun_ppt();
});

/*绑定click*/
function preview_pptimgs(){
	var temp_images=new Array();
	for(i=0;i<swiper_objs.length;i++){
		 temp_images.push(swiper_objs[i].img_url);
	}
	
	if(temp_images.length<=0){
		return;
	}
	$(".swiper-slide").unbind();
	$(".swiper-slide").click(function(){
		 var img_url=$(this).attr('attr-img');

		wx.previewImage({
		    current: img_url, // 当前显示图片的http链接
		    urls: temp_images, // 需要预览的图片http链接列表
		    success: function(res) {
                   console.log(res);
               },
		});
		
	});
}

//讨论删除
function comdel(obj){
	var conf=confirm("确认要删除吗?");
	if(conf){
		var msg_id=$(obj).parent().parent().parent().attr('msg_id');
		var msg_dd=$(obj).parent().parent().parent();
		$.post(location.href,{msg_id:msg_id,op:'del'},function(result){
			if(result.success==1){
				msg_dd.remove();
			}
		});
	}
}
//讨论图片放大
function dis_large(obj){
	if($.inArray($(obj).attr('src'),globalObj.chat_images)==-1){
	    globalObj.chat_images.push($(obj).attr('src'));
	}
	wx.previewImage({
	    current: $(obj).attr('src'), // 当前显示图片的http链接
	    urls: globalObj.chat_images // 需要预览的图片http链接列表
	});
}

/*ppt获取*/
function getPPtImgHtml(res){
	var html='';
	    html+='<li class="flex gridXt grey pptItem" ppt-id="'+res.ppt_id+'" ppt-order="'+res.ppt_order+'">';
	    html+='<div class="thumb imgBox" style="background-image: url('+res.data+');" attr-img="'+res.data+'">';
	    html+='<span class="current"></span>';
	    html+='<span class="withdraw"></span></div>';
	    html+='<div class="ppt-set ml15 big-font sub">';
	    html+='<span class="pptup"><i class="iconfont icon-packup"></i></span>';
	    html+='<span class="pptdown"><i class="iconfont icon-unfold"></i></span></div>';
	    html+='<div class="ml20 pptdel"><i class="iconfont icon-empty_fill"></i></div>';
	    html+='</li>';
	return html;
}

var swiper=null;
var swiper_objs=new Array();
function init_fun_ppt(){
	$(".pptItem .pptdel").unbind();
	$(".pptItem .pptdel").click(function(){
		 	$(".popup").show();
            $(".popup_title").text("确认删除此图片吗？");
	        var ppt_id=$(this).parents('.pptItem').attr('ppt-id');
			var url=location.href.replace("do=chat","do=ppt_ajax");
			var ppt_order=$(this).parents('.pptItem').attr('ppt-order');
			var that=$(this).parents('.pptItem');
			var is_online=that.find('.withdraw').text()=='撤回';
	          $("#submit").click(function(){
		            $.post(url,{op:'del',topic_id:user_info.topic_id,id:ppt_id},function(result){
		            	 $(".popup").hide();
						if(result.success==1){
							 if(is_online){
							   var jsonObj = {type:"say",op:"withdraw",target:"main",msgtype:"ppt",id:ppt_id,ppt_order:ppt_order};
							   sentContent(jsonObj);
						     }
							that.remove();
						}
					});
	          });
		      $("#cancel").click(function(){
		             $(".popup").hide();
		             ppt_id='';

		      });
	});	
	
	$(".pptItem .pptup,.pptItem .pptdown").unbind();
	$(".pptItem .pptup,.pptItem .pptdown").click(function(){
		var ppt_id=$(this).parents('.pptItem').attr('ppt-id');
		var ppt_order=$(this).parents('.pptItem').attr('ppt-order');
		var url=location.href.replace("do=chat","do=ppt_ajax");
		
		var current_dir=$(this).attr('class');
		var that_count=$(this).parents('.pptItem').prevAll().size();
		var that=$(this).parents('.pptItem');
		var that2=$(this).parents('.pptItem').prev();
		if(current_dir=='pptdown'){
			that2=$(this).parents('.pptItem').next();
			that_count=$(this).parents('.pptItem').nextAll().size()+1;
		}
		
		if(that_count==1){
			return;
		}
		
		var ppt_id2=that2.attr('ppt-id');
		var ppt_order2=that2.attr('ppt-order');
		var postdata={op:current_dir,topic_id:user_info.topic_id};
		postdata.id=ppt_id;
		postdata.order=ppt_order2;
		postdata.id2=ppt_id2;
		postdata.order2=ppt_order;		

		$.post(url,postdata,function(result){
			 //console.log(result);
			if(result.success==1){
				if(current_dir=='pptup')
				    that.insertBefore(that2);
				else
					that.insertAfter(that2);
			}
		});		
	});
	
	$(".pptItem .imgBox").unbind();
	$(".pptItem .imgBox").click(function(){
		 var ppt_id=$(this).parents('.pptItem').attr('ppt-id');
		 var ppt_order=$(this).parents('.pptItem').attr('ppt-order');
		 var url=location.href.replace("do=chat","do=ppt_ajax");
		 var img_url=$(this).attr('attr-img');
		 var that=$(this);
		 $.post(url,{'op':'send',topic_id:user_info.topic_id,id:ppt_id},function(result){
			 if(result.success==1){
				 $('.pptItem').find('.current').text('');
				 that.parents('.pptItem').find('.current').text('当前');
				 that.parents('.pptItem').find('.withdraw').text('撤回');
				 $(".ppt-box").hide();
				 var jsonObj = {type:"say",op:"set",target:"main",msgtype:"ppt",id:ppt_id,ppt_order:ppt_order,img_url:img_url};
				 sentContent(jsonObj);
			 }
		 });
	});
	
	$(".pptItem .withdraw").unbind();
	$(".pptItem .withdraw").click(function(e){
		$(".popup").show();
        $(".popup_title").text("确认撤销此图片吗？");
        var ppt_id=$(this).parents('.pptItem').attr('ppt-id');
		var ppt_order=$(this).parents('.pptItem').attr('ppt-order');
		var url=location.href.replace("do=chat","do=ppt_ajax");
		var img_url=$(this).attr('attr-img');
		var that=$(this);
		$("#submit").click(function(){
		    $.post(url,{'op':'c_send',topic_id:user_info.topic_id,id:ppt_id},function(result){
		    	$(".popup").hide();
				 if(result.success==1){
					 that.parents('.pptItem').find('.current').text('');
					 that.parents('.pptItem').find('.withdraw').text('');
					 var jsonObj = {type:"say",op:"withdraw",target:"main",msgtype:"ppt",id:ppt_id,ppt_order:ppt_order,img_url:img_url};
					 sentContent(jsonObj);
				 }
		 	});
	    });
		$("#cancel").click(function(){
		    $(".popup").hide();
		    ppt_id='';

		});	
		stopEventBubble(e);
	});
	
	$(".pptSwitch").click(function(){
		$(".slideT").toggle(0);
		$("body").toggleClass("BdSwitch");
		
		resetBtnPosition();
		
	})
		
}

/*更新幻灯片*/
function set_swiper_obj(obj){
	if(swiper_objs.length==0){
		$(".slideT").show(0);
		$("body").removeClass("BdSwitch");
	    if(swiper==null){
			swiper = new Swiper('.swiper-container', {
					pagination: '.swiper-pagination',
					paginationType : 'fraction',
					speed: 400,
					autoplayDisableOnInteraction: false,
				});
	    }
	}
	
	var is_hasppts=false;
	for(i=0;i<swiper_objs.length;i++){
		if(swiper_objs[i].id==obj.id){
			is_hasppts=true;
			obj.index=i;
			break;
		}
	}
		
	if(!is_hasppts){
		obj.index=swiper_objs.length;
		swiper_objs.push(obj);
		var html='<div class="swiper-slide thumb" attr-id="';
		html+=obj.id;
		html+='" attr-index="'+obj.index+'" style="background-image: url('+obj.img_url+')" attr-img="'+obj.img_url+'">';
		// html+='<img src="'+obj.img_url+'" width="100%" />';
		html+='</div>';
		swiper.appendSlide(html);
		preview_pptimgs();
	}
	if(obj.op=='withdraw'){
		swiper.removeSlide(obj.index);
		swiper_objs.splice(obj.index,1);
		if(swiper_objs.length==0){
			$(".slideT").hide(0);
			$("body").addClass("BdSwitch");			
			
			resetBtnPosition();
		}
		return;
	}
	current_ppt_id=obj.id;
	swiper.slideTo(obj.index, 100, false);	
}

/*重新设置Button位置*/
function resetBtnPosition(){
	if($("body").hasClass('BdSwitch')){
	    $(".danmuBox").css({"top":'5rem','right':'4.4rem'});
	    $(".pptBtn").css('top','5rem');
	    $(".danmu_bar").css("top",'0px');
	}else{
		$(".danmuBox").css({"top":'250px','right':'1rem'});
		$(".danmu_bar").css("top",'200px');
		$(".pptBtn").css('top','0rem');
	}
}

//复制
function _copy(obj) {
	var clipboard = new Clipboard(obj);
	clipboard.on('success', function(e) {
		layer.msg("复制成功");
		e.clearSelection();
	});
	clipboard.on('error', function(e) {
		console.log(e);
		layer.msg("请长按复制");
		
	});
};
function pay_status(id){
	console.log(1)
	$.post(pay_status_url,{'id':id},function(res){
		if(res.success==1){
			//alert('购买成功');
			clearInterval(ti);
			location.reload();
		}
	})
}