<?php defined('IN_IA') or exit('Access Denied');?>

<!doctype html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <title>数钱已结束，感谢您的参与</title>
   <style>
       * {
           outline: 0;
           position: relative;
           border: 0;
           margin: 0;
           padding: 0;
           list-style: none;
           box-sizing: border-box;
           -moz-box-sizing: border-box;
           -webkit-box-sizing: border-box;
           -webkit-appearance: none
       }

       body {
           margin: 0;
           background: #f5f5f5;
           padding: 0;
           color: #4d4f54;
           font-size: 1.4rem;
           -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
           overflow-x: hidden;
           -webkit-user-select: none
       }
       .countBac {
           background: url(../addons/hm_newdpm/countmoney/count.jpg) no-repeat;
           background-size: 100%;
           position: fixed;
           width: 100%;
           top: 0;
           left: 0;
           height: 100%;
       }
       /*    弹窗
----------------------------------------*/
       .tc{
           background: rgba(0,0,0,0.58);
           position: fixed;
           top: 0;
           left: 0;
           height: 100%;
           width: 100%;
       }
       .tc-content{
           position: fixed;
           top: 45%;
           left: 50%;
           margin-left: -150px;
           margin-top: -150px;
           width: 300px;
           box-sizing: border-box;
           padding:15px;
           background: url(../addons/hm_newdpm/img10/tc-bg.png) no-repeat #e92c2c;
           background-size: 100% 100%;
           border-radius: 3px;
       }
       .close{
           position: absolute;
           right: 5px;
           top: 5px;
       }
       .tc-title{
           text-align: center;
       }
       .tc-title span{
           text-align: center;
           color: #ffffff;
           background: #cb2524;
           display: inline-block;
           padding: 5px;
       }
       .tc-content p{
           color: #ffffff;
           line-height: 20px;
           padding: 10px 0;
           text-align: left;
       }
       .tc-content .textleft{
           text-align: left;
       }
       .tc-content .tc-runout{
           margin: 25px 10px;
           background: #cb2524;
           padding: 10px;
       }
       .tc-btn{
           text-align: center;
       }
       .tc-btn span{
           color: #de2c2b;
           background: #edd02e;
           display: inline-block;
           padding: 5px;
           width: 85px;
           margin: 0 9px;
       }
       .tc-btn .again{
           background: #fa4861;
           color: #ffffff;
       }
       .goods-title{
           text-align: center;
       }
       .goods-wrap{
           background: #cb2524;
           padding: 5px 10px;
           display: inline-block;
       }
       .goods-wrap .margin-null{
           margin-right: 0;
       }
       .goods-left-text{
           float: left;
           margin-right: 10px;
       }
       .goods-wrap p{
           padding: 0;
       }
       .prize-hd{
           font-size: 22px;
           margin-top: 2px;
       }
       .prize-hd span{
           font-size: 22px;
           color: #ffdf47;
       }
       #main {
           max-width: 640px;
           margin: auto;
           padding-bottom: 70px;
           font-size: 1rem;
           z-index: 999999;
       }
       .tips {
           width: 250px;
           height: 500px;
           color: #57a2cd;
           text-align: center;
           position: fixed;
           left: 50%;
           margin-left: -125px;
           top: 50%;
           margin-top: -240px;
           font-size: 1.2rem
       }

       .tips div {
           width: 200px;
           height: 260px;
           margin: auto;
           margin-bottom: 20px
       }

       .tips div.success {
           /*background: url(../images/tipbg_success.jpg) no-repeat;*/
           /*background-size: 100%*/
       }
       .btnBox {
           max-width: 640px;
           padding: 10px;
           /*background: #f5f5f5;*/
           position: fixed;
           bottom: 80px;
           width: 100%;
           height: 65px
       }

       .button {
           display: block;
           width: 100%;
           height: 45px;
           line-height: 45px;
           background: #00bc99;
           border-radius: 5px;
           color: #fff;
           font-size: 2rem
       }

       .button:active {
           background: #00876e
       }

   </style>
</head>
<body>
<div class="countBac">

</div>
<div class="tc-window">
    <div id="main">

        <div class="tips">
            <div class="success"></div>
            数钱已结束，感谢您的参与
        </div>

        <div class="btnBox">
            <input type="button" class="button" value="确定" onclick="go_back()"/>
        </div>
    </div>
    <div id="Prize-goods" class="tc" style="display: block;">
        <div class="tc-content">
            <img class="close" src="../addons/hm_newdpm/img10/close.png" width="20" />
            <div class="goods-title">
                <div class="goods-wrap">
                    <div class="goods-left-text" >
                        <!-- <p class="prizes" style="text-align: center;color: #fff">您本轮名次</p> -->
                        <p id="tc1" class="prize-hd" style="text-align: center;color: #ffdf47">您本轮排第<?php  echo $order;?>名</p>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script type="text/javascript" src="../addons/haoman_base/base/jquery.min.js"></script>

    <script>
        function go_back(){
            location.href = "<?php  echo $this->createMobileUrl("count_money", array('id' => $rid))?>";
        }
//      $('.button').click(function () {
//          window.location.href = "<?php  echo $this->createMobileUrl('count_money',array('id'=>$rid))?>";
//      })
    </script>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('m_footer', TEMPLATE_INCLUDEPATH)) : (include template('m_footer', TEMPLATE_INCLUDEPATH));?>
</html>