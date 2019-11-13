<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/css1/style.css" />
		<script src="<?php echo TEMPLATE_PATH;?>/js/jquery.min.js"></script>
		<!--  <script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/jquery-2.1.4.min.js"></script> -->
		<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/js/script.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/wps_upload/jquery.ui.widget.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/wps_upload/jquery.iframe-transport.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/wps_upload/jquery.fileupload.js"></script>
        <!-- chat.css -->
        <link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/chat.css" />
        <link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/global.css" />
		<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.3.0.js"></script>
		<title><?php  echo $topic['topic_name'];?></title>
	</head>
	<?php  if($is_pc==1) { ?>
	<script>
		 function flashChecker() {
        var hasFlash = 0;　　　　 //是否安装了flash
        var flashVersion = 0;　　 //flash版本

        if(document.all) {
            var swf = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
            if(swf) {
                hasFlash = 1;
                VSwf = swf.GetVariable("$version");
                flashVersion = parseInt(VSwf.split(" ")[1].split(",")[0]);
            }
        } else {
            if(navigator.plugins && navigator.plugins.length > 0) {
                var swf = navigator.plugins["Shockwave Flash"];
                if(swf) {
                    hasFlash = 1;
                    var words = swf.description.split(" ");
                    for(var i = 0; i < words.length; ++i) {
                        if(isNaN(parseInt(words[i]))) continue;
                        flashVersion = parseInt(words[i]);
                    }
                }
            }
        }
        return { f: hasFlash, v: flashVersion };
    }

		var fls = flashChecker();
		var s = "";

		if(!fls.f) {
		    if(confirm("您的浏览器未安装Flash插件，现在安装？")) {
		        window.location.href = "http://get.adobe.com/cn/flashplayer/";
		    }
		}
	</script>
	<?php  } ?>
<script type="text/javascript">
	var user_info=<?php  echo $user_info_encode;?>;
	var topic_setting=<?php  echo $topic_setting;?>;
	var istopic_end=<?php  echo $istopic_end;?>;
	var is_pc="<?php  echo $is_pc;?>";
	var istopic_begin=<?php  echo $istopic_begin;?>;
	var down_url='<?php  echo $downmedia_url;?>';
	var sub_pages=<?php  echo $pages;?>;
	var discuss_pages=<?php  echo $pages_discuss;?>;
	var reward_url='<?php  echo $reward_url;?>';
	var topic_overurl="<?php  echo $this->createMobileUrl('chat_over');?>";
	var begin_time=<?php  echo $topic['begin_time'];?>;
	var current_ppt_id=0;
	var is_refresh=<?php  echo $is_refresh;?>;
	var topic_poster="<?php  echo $this->createMobileUrl('chat_topicposter');?>";
	var userrole_name="<?php  echo $role_name;?>";
	var curent_iden="<?php  echo $curent_iden;?>";
	var topic_id="<?php  echo $topic_id;?>";
	var first_voice ="<?php  echo $first_voice['msg_id'];?>";
	var mini_pay = false;
	var type_style = "<?php  echo $topic['topic_style'];?>";
	var pay_status_url="<?php  echo $this->createmobileurl('pay_status')?>";
var ti;
function pay_status(id){
	console.log(1)
	$.post(pay_status_url,{'id':id},function(res){
		if(res.success==1){
			//alert('购买成功');
			clearInterval(ti);
			location.href="<?php  echo $topic_url;?>";
		}
	})
}
	$(function(){
		 $("#erweima").click(function(){
            $("#erweima").hide()
             clearInterval(ti);
        })
		var u = navigator.userAgent;
		if (u.indexOf('iPhone') > -1) {//苹果手机
		    $('.wps-btn').hide();
		} 
		wx.ready(function () {
			mini_pay=window.__wxjs_environment === 'miniprogram';
		});
		console.log(mini_pay);
	})
</script>


<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/chat_main1.js?v=201611091"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/tencent/js/im_group_notice.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/tencent/sdk/webim.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/tencent/js/im_base.js?v=3"></script>
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/images/iconfont2/iconfont.css">
<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/swiper.css">
<script src="<?php echo TEMPLATE_PATH;?>/js/swiper.jquery.min.js"></script>
<script src="<?php echo TEMPLATE_PATH;?>/js/json2.min.js"></script>
<style type="text/css" media="screen">#flashcontent {visibility:hidden}</style>



<?php  echo register_jssdk();?>
<script type="text/javascript">
var Im_setting=<?php  echo $im_setting;?>;
                        //帐号模式，0-表示独立模式，1-表示托管模式
                        var accountMode=0;
                        //官方 demo appid,需要开发者自己修改（托管模式）
                        var sdkAppID = Im_setting.sdkAppID;
                        var accountType = Im_setting.accountType;
                        var avChatRoomId = Im_setting.avChatRoomId; //默认房间群ID，群类型必须是直播聊天室（AVChatRoom），这个为官方测试ID(托管模式)
                        
                        if(webim.Tool.getQueryString("groupid")){
                            avChatRoomId=webim.Tool.getQueryString("groupid");//用户自定义房间群id
                        }
                        
                        var selType=webim.SESSION_TYPE.GROUP;
                        var selToID = avChatRoomId;//当前选中聊天id（当聊天类型为私聊时，该值为好友帐号，否则为群号）
                        var selSess = null;//当前聊天会话
                        
                        //默认群组头像(选填)
                        var selSessHeadUrl = '<?php echo TEMPLATE_PATH;?>/tencent/img/2017.jpg';
                       
                        
                        //当前用户身份
                        var loginInfo = {
                                'sdkAppID': sdkAppID, //用户所属应用id,必填
                                'appIDAt3rd': sdkAppID, //用户所属应用id，必填
                                'accountType': accountType, //用户所属应用帐号类型，必填
                                'identifier': Im_setting.identifier, //当前用户ID,必须是否字符串类型，选填
                                'identifierNick': Im_setting.identifierNick, //当前用户昵称，选填
                                'userSig': Im_setting.userSig, //当前用户身份凭证，必须是字符串类型，选填
                                'headurl': '<?php echo TEMPLATE_PATH;?>/tencent/img/2016.gif'//当前用户默认头像，选填
                        };
                        //监听（多终端同步）群系统消息方法，方法都定义在demo_group_notice.js文件中
                        //注意每个数字代表的含义，比如，
                        //1表示监听申请加群消息，2表示监听申请加群被同意消息，3表示监听申请加群被拒绝消息等
                        var onGroupSystemNotifys = {
                                "5": onDestoryGroupNotify, //群被解散(全员接收)
                                "11": onRevokeGroupNotify, //群已被回收(全员接收)
                                "255": onCustomGroupNotify//用户自定义通知(默认全员接收)
                        };
                        
                        
                        //监听连接状态回调变化事件
                        var onConnNotify=function(resp){
                            switch(resp.ErrorCode){
                                case webim.CONNECTION_STATUS.ON:
                                	
                                    break;
                                case webim.CONNECTION_STATUS.OFF:
                                    webim.Log.warn('连接已断开，无法收到新消息，请检查下你的网络是否正常');
                                    break;
                                default:
                                    webim.Log.error('未知连接状态,status='+resp.ErrorCode);
                                    break;
                            }
                        };
                        
                        
                        //监听事件
                        var listeners = {
                                "onConnNotify": onConnNotify, //选填
                                "jsonpCallback": jsonpCallback, //IE9(含)以下浏览器用到的jsonp回调函数,移动端可不填，pc端必填
                                "onBigGroupMsgNotify": onBigGroupMsgNotify, //监听新消息(大群)事件，必填
                                "onMsgNotify": onMsgNotify,//监听新消息(私聊(包括普通消息和全员推送消息)，普通群(非直播聊天室)消息)事件，必填
                                "onGroupSystemNotifys": onGroupSystemNotifys //监听（多终端同步）群系统消息事件，必填
                        };
                        
                        var isAccessFormalEnv=true;//是否访问正式环境
                        
                        if(webim.Tool.getQueryString("isAccessFormalEnv")=="false"){
                            isAccessFormalEnv=false;//访问测试环境
                        }
                        
                        var isLogOn=false;//是否在浏览器控制台打印sdk日志
                        
                        //其他对象，选填
                        var options={
                            'isAccessFormalEnv': isAccessFormalEnv,//是否访问正式环境，默认访问正式，选填
                            'isLogOn': isLogOn//是否开启控制台打印日志,默认开启，选填
                        };
                        var curPlayAudio=null;//当前正在播放的audio对象
                        var openEmotionFlag=false;//是否打开过表情
                        if(accountMode==1){//托管模式
                            //判断是否已经拿到临时身份凭证
                            if (webim.Tool.getQueryString('tmpsig')) {
                                if (loginInfo.identifier == null) {
                                    webim.Log.info('start fetchUserSig');
                                    //获取正式身份凭证，成功后会回调tlsGetUserSig(res)函数
                                    TLSHelper.fetchUserSig();
                                }
                            } else {
                                sdkLogin();
                            }
                        }else{//独立模式
                            sdkLogin();
                        }
</script>
	<body  class="BdSwitch" style="margin:auto;">
		
		<div class="live flex-column">
			<!--课件与视频 直播区域 start-->
			<div class="play" style="padding-bottom: 50%;">
				<div class="play-box anbox">
					<!--轮播图 start-->
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php  if(is_array($ppt_list_top)) { foreach($ppt_list_top as $index => $ppt) { ?>
							<div class="swiper-slide thumb" style="background-image: url(<?php  echo $ppt['img_url'];?>);" attr-img="<?php  echo $ppt['img_url'];?>"  attr-id="<?php  echo $ppt['id'];?>" attr-index="<?php  echo $index;?>"></div>
							<?php  } } ?>
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">3</span></div>
					</div>
					
					<!-- Swiper CSS -->
					<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/swiper.css" />
					<!-- Swiper JS -->
					<script src="<?php echo TEMPLATE_PATH;?>/js/swiper.jquery.min.js"></script>
					<script>
						var swiper = new Swiper('.swiper-container', {
							pagination: '.swiper-pagination',
							speed: 400,
							autoplayDisableOnInteraction: false,
							paginationType: 'fraction'
						});
					</script>
					<!--轮播图 end-->
				</div>	
			</div>
			<!--课件与视频 直播区域 end-->
			<!--文字图片 直播区域 start-->
			<div class="live-content sub " >
				<a class="btn_load_history btnLoadSpeakEnd" href="javascript:;">
					<i></i>
				</a>
				<audio id="audioPlayer" autoplay="autoplay">Your browser does not support the audio element.您的浏览器不支持 audio 标签。</audio>
				<a class="btn_load_history btnLoadSpeak" href="javascript:;">
					<i></i>
				</a>
				<div class="zhibo_admin">
					<a href="<?php  echo $guest_manager_url;?>">
						<span class="admin-img"><img src="<?php  echo $chat_room['create_avatar'];?>" alt="" width="100%"></span>
						<?php  if(is_array($guests)) { foreach($guests as $guest) { ?>
						<span class="admin-img"><img src="<?php  echo $guest['guest_avatar'];?>" alt="" width="100%"></span>
						<?php  } } ?>
					</a>
				</div>
				<div class="live-start">
					<?php  if($istopic_end ) { ?>
				   		本次直播于<?php  echo date('Y/m/d H:i', $topic['end_time']);?>结束
					<?php  } else { ?>
			             本次直播于<?php  echo date('Y/m/d H:i', $topic['begin_time']);?>开始
					<?php  } ?>
				</div>
				<!-- <div class="live-help yel help"><i class="iconfont icon-feedback_fill disi"></i> 点击查看帮助说明</div> -->
				<?php  if($istopic_end) { ?>
				<div class="live-tips grey">直播已经结束</div>
				<?php  } ?>
				<?php  if(!$istopic_begin ) { ?>
				<div class="live-time">
					<p class="gridXb pb10 mb10 grey">
						<?php  if($istopic_end ) { ?>
				   		本次直播于<?php  echo date('Y/m/d H:i', $topic['end_time']);?>结束
					<?php  } else { ?>
			             本次直播于<?php  echo date('Y/m/d H:i', $topic['begin_time']);?>开始
					<?php  } ?>
					</p>
					<p class="grey"><i class="iconfont icon-clock_fill disi"></i> 倒计时</p>
					<ul class="flex pb10 mt10">
						<li><span class="day">0</span>天</li>
						<li><span class="hour">0</span>时</li>
						<li><span class="mini">0</span>分</li>
						<li><span class="sec">0</span>秒</li>
					</ul>
					<a href="javaScript:;" class="gridFourRadius comm-btn primary radius3 small start_remind">
						<?php  if($is_subscribe==1) { ?>开播前将会提醒您<?php  } else { ?>点击设置开播提醒<?php  } ?>
					</a>
					<b class="ql_remind_b" style="display: none;">开播前将会提醒你</b>
				</div>
				<?php  } ?>
				
				<style>
					.my-scpoer{ background: #fff; margin: 1rem; text-align: center; padding:15px; border-radius: 5px;}
					.my-scpoer-tit{ padding-bottom: 15px; border-bottom: 1px solid rgba(0,0,0,0.05); margin-bottom: 15px;  }
					.my-scpoer .scpoer{ background: #f19937; color: #fff; border-radius: 5px; padding:5px 0; width:
							50%;font-size: 16px; display: block; margin:15px auto 0;}
				</style>
				<?php  if($is_manager&&$istopic_begin==0) { ?>
				<div class="live-invite flex">
					<div class="invite-icons"><i class="iconfont icon-addpeople_fill"></i></div>
					<div class="sub tl ml15">
						<h3 class="big-font">讲师</h3>
						<p class="grey">此卡片仅管理员可见</p>
						<p class="grey">点击【操作】按钮也可以邀请讲师</p>
						<a href="<?php  echo $invite_url;?>" class="comm-btn pl15 pr15 mt10 fill radius3 small">立即邀请</a>
					</div>
				</div>
				<?php  } ?>
				<!-- 管理员的说话区 -->
				<ul class="live-bubble" id="speakBubbles">
					
				</ul>
				
				<div style="height: 57px;"></div>
			</div>
			<!--文字图片 直播区域 end-->
			
			<!--底部bar start-->
			<div class="live-menu bb gridXt">
				<ul class="flex tc lastno">
					<?php  if($is_guest||$is_manager) { ?>
					<?php  if($is_pc!=1) { ?>
					<li class="gridYr voice-btn"><i class="iconfont icon-voicefill"></i> 语音</li>
					<?php  } ?>
					<li class="gridYr text-btn"><i class="iconfont icon-iconzhenghe28"></i> 文字</li>
					<?php  if($is_pc!=1) { ?>
					<li class="gridYr midea-btn"><i class="iconfont icon-recordfill"></i> 图片</li>
					<?php  } ?>
					<li class="gridYr wps-btn"><i class="iconfont "><img src="<?php echo TEMPLATE_PATH;?>/hei.png" alt="" width='15' height='12'></i> 文件</li>
					<?php  if($is_pc!=1) { ?>
					<li class="gridYr ppt-btn"><i class="iconfont icon-computer_fill"></i> 课件</li>
					<?php  } ?>
					<?php  } else { ?>
					<li class="gridYr comm-write2"><i class="iconfont icon-iconzhenghe28"></i> 讨论</li>
					<?php  } ?>
				</ul>
			</div>

			<!--底部bar end-->
			<div class="fast-set">
				<ul class="small-font">
					<li class="pptBtn">课件</li>
					<?php  if($is_manager) { ?>
					<li  class="setBtn">操作</li>
					<?php  } ?>
					<?php  if($is_guest||$is_manager) { ?>
						<li><a href="<?php  echo $chat_url;?>" style="color:#fff;">直播间</a></li>
					<?php  } else { ?>
						<li><a href="<?php  echo $index_url;?>" style="color:#fff;">更多直播</a></li>
					<?php  } ?>
					<li class=""><a href="javaScript:;" class="scpoer" style="color:#fff;">邀请卡</a></li>
					
					
					<li><a style="color:#fff;" href="javascript:;" onclick="window.location.href = '<?php  echo $topic_url;?>&_='+new Date().getTime();">刷新</a></li>
				</ul>
			</div>
			<div class="move">
			</div>
			<div class="comment small-font">
				<div class="danmuBox" style="display: block;">
					<dl class="danmulist">
	
					</dl>
				</div>
				<div class="comment-bar">
					<span class="comment-btn">关</span>
					<div class="comment-info flex">
						<span class="comm-btn fill comm-write large-font"><i class="iconfont icon-brush_fill" id="commBtn"></i></span>
						<div class="sub"><i></i><var class="qlOLPeople"><?php  echo $topic['look_numbers'];?></var></div>
					</div>
				</div>
				<!-- 浮动弹幕评论 -->
				<?php  if($topic['is_opendm']==1) { ?>
				<ul class="talk animated zoomIn delay3">
				</ul>
				<?php  } ?>
			</div>
			<!--浮动区域 end-->
			
			<!--弹出区域 start-->
			<!--讨论 start-->
			<div class="float-box black-bg flex-column animated zoomIn comm-box disn" id="shut_comment">
				<div class="back-live p20 tc">
					<button  class="comm-btn fill close-btn" id="come_back_comment">回到直播</button>
				</div>
				<div class="comm-tab big-font tc">
					<ul class="flex grey gridXb t-fixed" id="comment_where">
						<?php  if($agent['level']==1 || $is_manager||$is_supermanager) { ?>
						<li class="teacher active"><i class="iconfont icon-mine_fill"></i> <b>老师群</b></li>
						<?php  } ?>
						<li class="student1"><i class="iconfont icon-group_fill"></i> <b>班级群</b></li>
					</ul>
				</div>
				<div class="comm-content sub">
					<div class="btn_load_history btnLoadComment">
						<i></i>
					</div>
					<div class="comm-cons">
						<ul class="lastno"  id="commentDl" >
						</ul>
						<ul class="lastno"  id="commentDl1" >
						</ul>
					</div>
				</div>
				<div class="comm-enter tc grey bubble_dt"><p>本直播当前为禁言状态</p></div>
				<div class="comm-enter gridXt" id="ask_discuss">
                    <div class=" flex">
                        <div class="comm-input sub">
                            <div class="type-text big-font danmuInput" contenteditable="plaintext-only" placeholder="来说点什么吧..." onfocus="if(this.getAttribute(&#39;placeholder&#39;)==&#39;来说点什么吧...&#39;)this.setAttribute(&#39;placeholder&#39;,&#39;&#39;)" onblur="if(this.getAttribute(&#39;placeholder&#39;)==&#39;&#39;)this.setAttribute(&#39;placeholder&#39;,&#39;来说点什么吧...&#39;)"></div>
                            <label class="small-font" id="ask_question"><input type="checkbox" class="mr5" id="mr5">提问</label>
                        </div>
                        <?php  if($is_pc!=1) { ?>
                        <div class="comm-img big-font gridFourRadius ml10" id="pic"><i class="iconfont icon-picfill"></i></div>
                        <?php  } ?>
                        <div class="ml10" style="width:26px;height:26px;transform: scale(0.8,0.8);"><img src="<?php echo TEMPLATE_PATH;?>/img/face.png" alt="" width="100%"  onclick="showEmotionDialog('discuss')"></div>
                        <button class="comm-send comm-btn fill ml10"  id="btn_discuss_send">发送</button>
                    </div>
                    <!-- 表情符号 -->
                    <style>
                        .enjoy-box{padding: 10px 0;background: #fff;list-style: none;width: 100%;display:none;}
                        .enjoy-box li{padding: 5px;cursor: pointer;float: left;}
                        .enjoy-box.on{display: block;}
                    </style>
                    <ul class="enjoy-box clearfix" id="emoj_list">
                    </ul>
                </div>
			</div>
			<!--讨论 end-->
			<!--上墙 start-->
			<div class="float-box black-bg animated fadeIn wall-box disn" id="commentReplyBox">
				<div class="anbox animated zoomIn delay3">
					<div class="float-mid radius3 bb">
						<div class="con p20 gridXb">
							<textarea rows="5" class="w100" placeholder="点击确定后，回复内容会同步到直播主屏" onkeyup=" if($(this).val().length &gt;= 2000) $(this).val($(this).val().substr(0,2000))"></textarea>
						</div>
						<ul class="flex big-font tc lastno">
							<li class="close-btn gridYr" id="cancle">取消</li>
							<li class="yel gridYr gene_confirm"><b>确定</b></li>
						</ul>
					</div>
				</div>
			</div>
			<!--上墙 end-->
			<!--语音输入 start-->
			<div class="e-items voice-Box gridXt disn">
				<!--录音 start-->
				<div class="voice">
					<p class="tc tips pt15">点击开始语音回答，最长60s</p>
					<p class="tc time pt15" style="display: none;"><var>0</var>s / 60s</p>
					<div class="con mt20">
						<ul class="flex">
							<li>
								<div class="comm-btn disable gridFourCirle close-btn">取消</div>
							</li>
							<li>
								<div class="recording step1" style="display:block;"  id="btnStartRec" ><i class="iconfont icon-voicefill" style="font-size:35px;"></i></div>
								<div class="recording step2" style="display:none;"   id="btnStopRec"><i class="iconfont icon-zanting"></i></div>
								<div class="recording step3" style="display:none;"   id="btnSentRec" >点击发送</div>
			
							</li>
							<li>
								<!-- <div class="comm-btn fill shiBo">试播</div> -->
								<div class="comm-btn primary gridFourCirle mt15 again"  id="btnCancelRec" >重录</div>
							</li>
						</ul>
					</div>
					<div class="voiceBg"></div>
				</div>
			</div>
			<!--语音输入 end-->
			<!--text输入 start-->
			<div class="e-items animated slideInUp b-fixed gridXt text-Box disn">
                <div class="comm-enter">
                    <div class="flex">
                        <div class="comm-back big-font gridFourRadius close-btn">返回</div>
                        <div class="comm-input mr15 sub">
                            <div class="type-text student big-font speakInput" contenteditable="plaintext-only" placeholder="来说点什么吧..." onfocus="if(this.getAttribute(&#39;placeholder&#39;)==&#39;来说点什么吧...&#39;)this.setAttribute(&#39;placeholder&#39;,&#39;&#39;)" onblur="if(this.getAttribute(&#39;placeholder&#39;)==&#39;&#39;)this.setAttribute(&#39;placeholder&#39;,&#39;来说点什么吧...&#39;)" id="speakInput"></div>
                        </div>
                        <div class="mr10" style="width:26px;height:26px;transform: scale(0.8,0.8);"><img src="<?php echo TEMPLATE_PATH;?>/img/face.png" alt="" width="100%"  onclick="showEmotionDialog('main')"></div>
                        <button class="comm-send comm-btn fill"  id="btn_send" >发送</button>
                    </div>
                    <ul class="enjoy-box clearfix" id="emoj_list">
                    </ul>
                </div>
            </div>
			<!--text输入 end-->
			<!--操作 start-->
			<div class="float-box black-bg animated fadeIn set-box disn" <?php  if($is_pc==1) { ?> style="max-width:640px;margin:auto" <?php  } ?>>
				<div class="b-fixed animated slideInUp delay2">
					<div class="title gridXb tc">
						<div class="close fr"></div>
						<h2 class="big-font grey">操作设置</h2>
					</div>
					<div class="con big-font">
						<ul class="m15 lastno">
							<a href="<?php  echo $invite_url;?>" class="flex gridXb">
								<li>
									<p class="sub">邀请嘉宾</p>
								</li>
							</a>
							<li class="flex gridXb">
								<p class="sub" >禁言</p>
								<div class="switch <?php  if($topic['is_allshutup']==1) { ?> active swon <?php  } ?>" id="allShutup"></div>
							</li>

							<li class="flex gridXb">
								<?php  if($istopic_end==0) { ?>
								<p class="sub">关闭直播</p>
								<button class="comm-btn wran small radius3" attr-topicid='<?php  echo $topic_id;?>'>关闭直播</button>
								<?php  } else { ?>
								<p class="sub">直播已结束</p>
								<?php  } ?>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			<!--操作 end-->
			<!--ppt start-->
			<div class="float-box black-bg animated zoomIn ppt-box disn">
				<div class="flex-column h100">
					<div class="back-live p20 tc">
						<button class="comm-btn fill close-btn" id="come_back_ppt">回到直播</button>
					</div>
					<div class="sub bb ppt-picbox">
						<p class="small-font red p15 tc">点击选中图片在主屏放出。图片推荐尺寸750*375</p>
						<ul id="boxli">
							<?php  if(is_array($ppt_list)) { foreach($ppt_list as $ppt) { ?>
							<li class="flex gridXt grey pptItem"  ppt-id="<?php  echo $ppt['id'];?>" ppt-order="<?php  echo $ppt['img_order'];?>">
								<div class="thumb imgBox" style="background-image: url(<?php  echo $ppt['img_url'];?>);" attr-img="<?php  echo $ppt['img_url'];?>">
									<span class="current"><?php  if($ppt['is_current']==1) { ?>当前<?php  } ?></span>
									<span class="withdraw"><?php  if($ppt['is_send']==1) { ?>撤回<?php  } ?></span>
								</div>
								<div class="ppt-set ml15 big-font sub">
									<span class="pptup"><i class="iconfont icon-packup"></i></span>
									<span class="pptdown"><i class="iconfont icon-unfold"></i></span>
								</div>
								<div class="ml20 pptdel"><i class="iconfont icon-empty_fill"></i></div>
							</li>
							<?php  } } ?>
						</ul>
					</div>
					<a href="javaScript:;" class="comm-btn fill camera"><i class="iconfont icon-camera_fill"></i></a>
				</div>
			</div>
				<div class="float-box black-bg animated zoomIn wps-box disn">
				<div class="flex-column" style="height: 70vh;position:absolute;bottom: 0;<?php  if($is_pc==1) { ?>left: 50%;margin-left: -320px;<?php  } ?>">
					<div class="back-live p20 tc">
						<button class="comm-btn fill close-btn" id="wps_back_comment">回到直播</button>
					</div>
					<div class="sub bb ppt-picbox">
						<p class="small-font red p15 tc" style="font-size: 18px;font-weight: normal;">支持word、excel、ppt、pdf格式，上传大小不能大于20M</p>					
					</div>
					<div class="image" style="position:absolute;top:60%;left: 50%;-webkit-transform: translate(-50%,-60%);transform: translate(-50%,-60%);width:80px;height: 80px;background:#ec7c5a;border-radius: 50%;display: flex;justify-content: center;    align-items: center;box-shadow: 0 0 10px rgba(236,124,96,.3)">
						<img src="<?php echo TEMPLATE_PATH;?>/bai.png" alt="" id="wps_up" width='40' height='30'>

					</div>
					
						<input id="fileupload" type="file" name="wps_up" style="display: none" data-url="<?php  echo $this->createMobileUrl('wps_upload')?>" multiple >
				
					<!-- <a href="javaScript:;" class="comm-btn fill wps-up"></a> -->
				</div>
			</div>
			<style>
	.comm-cons li img, .sp-box img, .talk p img {
   width:60px; 
    height: 60px;
     max-width: 60px; 
     max-height: 60px;
     } 
</style>
			<!--ppt end-->
			<!--弹出区域 end-->
		</div>
		<!-- 弹出帮助 -->

		<!-- <div class="tipPic" style="position:fixed; left:0; top: 0; right: 0; right:0; z-index: 999999;">
			<img src="<?php echo TEMPLATE_PATH;?>/tips.png" width="100%" height="100%">
		</div> -->
		<!-- 赞赏 -->
	<div class="redbag_box redbagBox">
			<div class="main_box_4 redbag" id="redbag">
				<div class="redbag_inbox">
					<div class=" live_redbag">
						<a href="javascript:;" class="gene_btn redbag_cancel">&times;</a>
						<div class="live_headpic"><img src="<?php  echo $topic['topic_icon'];?>"></div>
						<div class="live_towho" attr-id=""></div>
						<div class="live_towhy">爱赞赏的人，运气不会太差～</div>
						<div class="live_redbaglist">
							<ul>
								<li class="pay_its" data="2"><a class="rglist" href="javascript:;"><var class="rglist payli">2</var>元</a></li>
								<li class="pay_its" data="5"><a class="rglist" href="javascript:;"><var class="rglist payli">5</var>元</a></li>
								<li class="pay_its" data="10"><a class="rglist" href="javascript:;"><var class="rglist payli">10</var>元</a></li>
								<li class="pay_its" data="50"><a class="rglist" href="javascript:;"><var class="rglist payli">50</var>元</a></li>
								<li class="pay_its" data="100"><a class="rglist" href="javascript:;"><var class="rglist payli">100</var>元</a></li>
								<li class="pay_its" data="200"><a class="rglist" href="javascript:;"><var class="rglist payli">200</var>元</a></li>
							</ul>
						</div>
						<div class="live_othermoney"><a href="javascript:;" class="rglist"> 其他金额 </a></div>
					</div>
				</div>
			</div>
			<div class="otherRedmoneyBox" style="display:none;">
				<div class="otherRedmoney">
				<div class="otherredmoney_content">
					<span class="redbag_head">其他金额<a href="javascript:;" class="gene_btn gene_cancel">&times;</a></span>
					<span class="redbag_countarea"><label class="redbag_count_label" for="money">金额(元)</label><input type="text" value="" id="money" class="money_count" placeholder="可填写2-200"></span>
					<span><a href="javascript:;" class="gene_btn gene_confirm" id="confirm_ok">确定</a></span>
				</div>
				</div>
			</div>
		</div> 
		
		<div class="redbag_box LmTipsBox" style="display: none;">
			<div class="main_box_4 redbag">
			  <div class="redbag_inbox">
				<div class=" live_redbag">
					<a href="javascript:;" class="gene_btn redbag_cancel">&times;</a>
					<div class="live_headpic"><img src=""></div>
					<div class="live_towhy"></div>
					<div class="thank_money"><var>30</var></div>
					<dl class="thank_p1 rgdetail" style="display:none;"><dd class="rglist">赏金明细</dd></dl>
					<div class="redbag_reply">
						<div class="thank_box managerThankBox" style="display:none;"><!--管理员 -->
						
							<dl class="redbag_rule">
								<dd>微信官方手续费2%</dd>
								<dd>被赞赏人得90%</dd>
								<dd>直播间得8%</dd>
								<dd>微信规定：单人每天只能到账100个红包，超过的红包第二天会到账。</dd>
							</dl>
							<span class="redbag_rule_2">请在直播间设置页面查看收益明细</span>
							<span class="redbag_rule_3" style="display:none;">请关注【夺冠】公众号查看赞赏金额总计</span>
						</div>
						<span class="replyresult">
							<var class="r1">sdfds</var>给了<var class="r2">sdfs</var>一个
							<var class="r3"></var>
						</span>
					
				 		<div class="thank_box thankBox" style="display:none;"><!--被赞赏人 -->
							<div style="padding-left:2rem;color:#999;">回复Ta</div>
							<dl class="thank_choose">
								<dd class="rglist" attr-action="baobao">拥抱</dd>
								<dd class="rglist" attr-action="loveyou">握手</dd>
								<dd class="rglist" attr-action="meme">么么哒</dd>
							</dl>
						</div>
						<div class="thank_box replyresultNone"></div><!--没有回复 -->
					</div>		
				</div>
			  </div>
			</div>
		</div>

<!-- 弹框 -->
<style>
    .flex,.flexC{display: flex;}
    .flexC{flex-direction: column;}
    .flex>.sub,.flexC>.sub{flex:1;}
    .mid{position: absolute;z-index: 1;border-radius: 6px;top: 50%;left: 50%;transform:translate(-50%,-50%);}
    .popup{position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 99;}
    .popupbg{width: 100%;height: 100%;position: absolute;top: 0;left: 0;background: rgba(0, 0, 0, 0.5);}
    .popup_box{width: 70%;padding: 15px;background: #fff;}
    .popup_title{padding-bottom:10px;}
    .popup_content{padding: 15px 0;}
    .popup_btn{line-height: 36px;}
    .popup_btn div{padding: 0 10px;background: #f19937;color: #fff;border-radius: 6px; margin-top: 20px;}
    .popup_btn div:nth-child(2){border:1px solid  #f19937;color: #f19937;background: #fff;margin-left: 30px;}
    .popup_btn div:active{background: rgba(241, 153, 55, 0.8);}
    .popup_btn div:nth-child(2):active{background: rgba(241, 153, 55, 0.1);}

</style>
<div class="popup " style="display:none">
    <div class="popup_box flexC mid">
        <div class="popup_title tc gridXb"></div>
        <!-- <div class="popup_content sub">确认删除吗？</div> -->
        <div class="popup_btn flex tc"><div class="sub" id="submit">确认</div><div class="sub" id="cancel">取消</div></div>
    </div>
    <div class="popupbg"></div>
</div>
<div class="reward" id="re_gift">	
			<div class="rewardBox">
				<div class="close" style="opacity: 1;border-radius: inherit;" id="gift_close"></div>
				<div id="reward-list-wrap" class="clearfix">
					<div class="reward-list-wrap">									
						<ul>
							<?php  if(is_array($gift_list)) { foreach($gift_list as $row) { ?>
								<li class="reward-gift-wrap">
								  <div class="reward-img-wrap" gift-name="<?php  echo $row['gift_name'];?>" gift-id="<?php  echo $row['id'];?>" gift-price="<?php  echo $row['gift_price'];?>" data-one="" data-type="">
								  <img src="<?php  echo $row['gift_img'];?>" width=55 height=55 />
								  </div>
								  <p><?php  echo $row['gift_name'];?></p>											
								</li>
							<?php  } } ?>
						</ul>
					</div>
					<div class="swiper-pagination gift_page" style="position:static"></div>
					<div id="reward-pay-close" ></div>
					 <!-- <i class="icon iconfont closeicon" onclick="close_gift_list()">&#xe62d;</i> -->
				</div>
				<div id="reward-price-wrap" class="flex">
					<div class="reward-price-wrap sub">
						<div class="rewardL flex sub">
							<div class="num_div tc mr10">数量</div>
							<div class="gw_num flex">											
								<span class="iconfont jian">-</span>
								<input class="sub tc num" type="num" value="1"  id="gift_number" >
								<input type="hidden" value="0" id="gift_price">
								<input type="hidden" value="" id="gift_id" >
								<span class="iconfont add">+</span>
							</div>
							<div class="heji sub ml10">合计
								<p class="price_div"style="color: #ff5f5f;display: inline-block;">￥
									<i id="total_price" gift-money=''>0.00</i>
								</p>
							</div>												
						</div>
					</div>																
					<div class="pay-btn" style="float:right" id="gift_pay">立即支付</div>
				</div>
			</div>
		</div>
<!-- 弹框 -->
<style>	
    .flex,.flexC{display: flex;}
    .flexC{flex-direction: column;}
    .flex>.sub,.flexC>.sub{flex:1;}
    .gift_border{box-shadow: 0 0 10px rgba(245,42,0,.8);}
    .mid{position: absolute;z-index: 1;border-radius: 6px;top: 50%;left: 50%;transform:translate(-50%,-50%);}
    .popup{position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 99;}
    .popupbg{width: 100%;height: 100%;position: absolute;top: 0;left: 0;background: rgba(0, 0, 0, 0.5);}
    .popup_box{width: 70%;padding: 15px;background: #fff;}
    .popup_title{padding-bottom:10px;}
    .popup_content{padding: 15px 0;}
    .popup_btn{line-height: 36px;}
    .popup_btn div{padding: 0 10px;background: #f19937;color: #fff;border-radius: 6px; margin-top: 20px;}
    .popup_btn div:nth-child(2){border:1px solid  #f19937;color: #f19937;background: #fff;margin-left: 30px;}
    .popup_btn div:active{background: rgba(241, 153, 55, 0.8);}
    .popup_btn div:nth-child(2):active{background: rgba(241, 153, 55, 0.1);}
     .floatBox{
    	position: fixed;
    	left: 15px;
    	top:340px;
    	z-index: 100;
    	width: 36px;
    	height:36px;
    	border-radius: 50%;
    	text-align: center;
    	line-height: 36px;
    	color: #fff;
    	font-size: 14px;
    	background-color: #eea512;
    	
    }
    .floatBoxTwo{top:384px;}
    .reward{width:100vh;height:0;background: rgba(0,0,0,.6);position: fixed;bottom:0;left: 0;z-index: 999;}
    .reward.active{height:100vh;}
    .rewardBox{width:100%;height:0;position: fixed;bottom: 0;left: 0;-webkit-transition: all 0.2s ease-in-ease;transition: all 0.2s ease-in-ease;overflow: hidden;}
    .rewardBox.active{height:180px;}
    #reward-list-wrap{background: #fff;border-top:1px solid #f5f5f5;}
    .reward-list-wrap{width: 70%;margin: 0px auto;padding: 15px;overflow: hidden;overflow-x:auto; -webkit-overflow-scrolling:touch;}
    .reward-list-wrap ul{white-space:nowrap;font-size: 0; }
    .reward-gift-wrap{width:22%;margin-right:10px;text-align: center;display: inline-block;}
    .reward-gift-wrap p{padding-top: 5px;font-size: 12px;}
    .gift_page{padding-bottom: 10px;}
    #reward-price-wrap{line-height:30px;border-top:1px solid #ddd;padding: 15px;background: #fff;word-wrap: normal;}
    .gw_num{border:1px solid #ddd;width:112px;height: 30px;}
    .gw_num .iconfont{width:30px;height:30px;line-height:28px;text-align:center;display: inline-block;font-size: 24px;color:#f19937;}
    .gw_num .num{width: 40px;height: 30px;line-height:30px;text-align: center;border-left:1px solid #ddd;border-right:1px solid #ddd;}
    .pay-btn{background:#f19937;padding: 0px 15px;border-radius: 3px;color:#fff;}
    .live-menu{position: fixed;bottom: 0;max-width: 640px;width: 100%;}
    .close{width:0px;height: 0px;border:30px solid;border-color:transparent transparent #ddd transparent;position: absolute;top: -30px;right:-30px;-webkit-transform:rotate(45deg);transform:rotate(45deg);}
    .close:before, .close:after {
    content: "";
    display: block;
    width: 16px;
    height: 1px;
    background: #000;
    border-radius: 2px;
    position: absolute;
    left: 1px;
    top: 17px;
}
</style>
<div class="floatBox" id="reward_s" style="display: none;">赏</div>
<div class="floatBox floatBoxTwo " id="reward_gift" style="display: none;"><i class="iconfont icon-gift"></i></div>
<div class="popup_tips mid" style="display:none"></div>		
<div id="erweima" style="position:fixed;top:0;width:100%;max-width: 640px;height:100vh;background:rgba(0,0,0,0.5);display:none;">
        <div style="position:absolute;top:50%;left:50%;margin-left:-150px;margin-top:-150px">
        <img style="width:300px;height:300px;" src="" id="code_img" alt="">
            <div style="text-align:center;width:100%;color:#fff;margin-top:10px">请使用微信扫描二维码支付</div>
        </div>
           
</div> 
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('remember', TEMPLATE_INCLUDEPATH)) : (include template('remember', TEMPLATE_INCLUDEPATH));?>
	<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=8&c=utility&a=visit&do=showjs&m=dg_chat"></script></body>
	<script>
	$(document).ready(function(){
		
		var is_allshutup = <?php  echo $topic['is_allshutup'];?>;
		var min_height = $(".live-content").height()-$(".live-start").height()-$(".my-scpoer").height();
		console.log(min_height)
		$(".live-bubble").css('min-height',min_height);
		if(is_allshutup == 1){
			$(".bubble_dt").show();
			$("#ask_discuss").hide();
		}else{
			$("#ask_discuss").show();
			$(".bubble_dt").hide();
		}
	});
	// $(".tipPic").click(function(){
	// 	$(this).css("display","none");
	// });
	// $(".help").click(function(){
	// 	$(".tipPic").css("display","block");
	// });
	</script>

</html>