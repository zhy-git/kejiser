(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["yb_shop-pages-pintuan-pages-orders-detail"],{"09d6":function(t,e,i){"use strict";var n=i("fb7a"),o=i.n(n);o.a},5872:function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,"\nuni-page-body{background-color:#f2f2f2;font-size:%?26?%;color:#1b1b1b\n}\nuni-image{vertical-align:middle\n}\n.text-center{text-align:center\n}\n.pull-left{float:left\n}\n.pull-right{float:right\n}\n.clearfix{clear:both\n}\n.bg-fff{background-color:#fff\n}\n.mt-10{margin-top:%?10?%\n}\n.mt-20{margin-top:%?20?%\n}\n.p-20{padding:%?20?%\n}\n.text-red{color:red\n}\n.row{width:100%\n}\n.on{border-bottom:2px solid red;color:red!important\n}\n.swiper-box{min-height:%?1000?%\n}\nuni-swiper-item uni-image{width:100%;height:100%\n}\n.toast{position:fixed;bottom:15%;width:100%;z-index:1111;text-align:center;color:#fff\n}\n.toast .toast-mask{display:inline-block;background-color:#000;width:30%;padding:%?20?%;border-radius:%?10?%\n}\n.loading uni-image{width:100prx;height:%?100?%\n}\n.loading .no-data{padding:%?40?%;color:#ccc;font-size:%?22?%\n}\n.flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex\n}\n.flex-row{-webkit-box-orient:horizontal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row\n}\n.flex-col,.flex-row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-direction:normal\n}\n.flex-col{-webkit-box-orient:vertical;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column\n}\n.flex-grow-0{-webkit-box-flex:0;-webkit-flex-grow:0;-ms-flex-positive:0;flex-grow:0\n}\n.flex-grow-1{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1\n}\n.flex-grow-2{-webkit-box-flex:2;-webkit-flex-grow:2;-ms-flex-positive:2;flex-grow:2\n}\n.flex-x-center{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center\n}\n.flex-x-center,.flex-x-left{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex\n}\n.flex-x-left{-webkit-box-pack:left;-webkit-justify-content:left;-ms-flex-pack:left;justify-content:left\n}\n.flex-x-right{-webkit-box-pack:right;-webkit-justify-content:right;-ms-flex-pack:right;justify-content:right\n}\n.flex-x-right,.flex-y-center{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex\n}\n.flex-y-center{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center\n}\n.flex-y-bottom{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:end;-webkit-align-items:flex-end;-ms-flex-align:end;align-items:flex-end\n}\n.float-icon{position:fixed;z-index:20;right:%?40?%;bottom:%?30?%\n}\n.bar-bottom~.float-icon{bottom:%?150?%\n}\n.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:none\n}\n.float-icon .float-icon-btn:after{display:none\n}\n.float-icon .float-icon-btn:active{opacity:.75\n}\n.float-icon .float-icon-btn uni-image{width:%?100?%;height:%?100?%;display:block\n}\n.float-icon1,.float-icon2{margin-bottom:%?20?%\n}\nbody.?%PAGE?%{background-color:#f2f2f2\n}",""])},c950:function(t,e,i){"use strict";i.r(e);var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",[i("v-uni-view",{staticClass:"jumbotron flex-row"},["待付款"==t.orderInfo.orderStatus?i("v-uni-view",{staticClass:"unpay"},[i("v-uni-view",{staticClass:"flex-grow-1 info-text"},[t._v(t._s(t.orderInfo.orderStatus))]),i("v-uni-image",{staticClass:"flex-grow-0 img",staticStyle:{float:"right","margin-top":"-50px"},attrs:{src:"/static/resource/order-unpay.png"}})],1):t._e(),"已取消"==t.orderInfo.orderStatus?i("v-uni-view",[i("v-uni-view",{staticClass:"flex-grow-1 info-text"},[t._v("订单已取消")]),i("v-uni-image",{staticClass:"flex-grow-0 img",staticStyle:{float:"right","margin-top":"-50px"},attrs:{src:"/static/resource/order-fail.png"}})],1):t._e(),"待成团"==t.orderInfo.orderStatus?i("v-uni-view",{staticClass:"ungroup"},[i("v-uni-view",{staticClass:"flex-grow-1 info-text"},[t._v(t._s(t.orderInfo.orderStatus))]),i("v-uni-image",{staticClass:"flex-grow-0 img",staticStyle:{float:"right","margin-top":"-50px"},attrs:{src:"/static/resource/order-ungroup.png"}})],1):t._e(),"待发货"==t.orderInfo.orderStatus?i("v-uni-view",{staticClass:"unsend"},[i("v-uni-view",{staticClass:"flex-grow-1 info-text"},[t._v(t._s(t.orderInfo.orderStatus))]),i("v-uni-image",{staticClass:"flex-grow-0 img",staticStyle:{float:"right","margin-top":"-50px"},attrs:{src:"/static/resource/order-unsend.png"}})],1):t._e(),"待收货"==t.orderInfo.orderStatus?i("v-uni-view",[i("v-uni-view",{staticClass:"flex-grow-1 info-text"},[t._v(t._s(t.orderInfo.orderStatus))]),i("v-uni-image",{staticClass:"flex-grow-0 img",staticStyle:{float:"right","margin-top":"-50px"},attrs:{src:"/static/resource/order-receive.png"}})],1):t._e(),"已完成"==t.orderInfo.orderStatus?i("v-uni-view",[i("v-uni-view",{staticClass:"flex-grow-1 info-text"},[t._v(t._s(t.orderInfo.orderStatus))]),i("v-uni-image",{staticClass:"flex-grow-0 img",staticStyle:{float:"right","margin-top":"-50px"},attrs:{src:"/static/resource/order-success.png"}})],1):t._e(),"拼团失败"==t.orderInfo.orderStatus?i("v-uni-view",[i("v-uni-view",{staticClass:"flex-grow-1 info-text"},[t._v(t._s(t.orderInfo.orderStatus))]),i("v-uni-image",{staticClass:"flex-grow-0 img",staticStyle:{float:"right","margin-top":"-50px"},attrs:{src:"/static/resource/order-fail.png"}})],1):t._e(),"已退款(未成团)"==t.orderInfo.orderStatus?i("v-uni-view",[i("v-uni-view",{staticClass:"flex-grow-1 info-text"},[t._v("未成团，退款成功")]),i("v-uni-image",{staticClass:"flex-grow-0 img",staticStyle:{float:"right","margin-top":"-50px"},attrs:{src:"/static/resource/order-fail.png"}})],1):t._e()],1),i("v-uni-view",{staticClass:"address bg-fff flex-row"},[i("v-uni-view",{staticClass:"flex-grow-0 flex-y-center img"},[i("v-uni-image",{attrs:{src:"/static/resource/address.png"}})],1),i("v-uni-view",{staticClass:"flex-grow-1"},[i("v-uni-view",{staticClass:"flex-grow-0 addr-user"},[i("v-uni-text",[t._v(t._s(t.orderInfo.address.userName))]),i("v-uni-text",[t._v(t._s(t.orderInfo.address.telNumber))])],1),i("v-uni-view",{staticClass:"flex-grow-0 addr-info"},[t._v("\n\t\t\t\t\t"+t._s(t.orderInfo.address.province)+" "+t._s(t.orderInfo.address.city)+" "+t._s(t.orderInfo.address.county)+" "+t._s(t.orderInfo.address.address)+"\n\t\t\t\t")])],1)],1),i("v-uni-view",{staticClass:"ordernum bg-fff flex-row"},[i("v-uni-view",[t._v("订单编号："+t._s(t.orderInfo.orderNum))])],1),i("v-uni-view",{staticClass:"order-goods flex-row"},[i("v-uni-view",{staticClass:"goods-img flex-grow-0"},[i("v-uni-image",{attrs:{src:t.orderInfo.goods.img,mode:"aspectFill"}})],1),i("v-uni-view",{staticClass:"goods-right flex-grow-1"},[i("v-uni-view",{staticClass:"goods-title flex-row"},[t._v("\n\t\t\t\t\t"+t._s(t.orderInfo.goods.name)+"\n\t\t\t\t")]),i("v-uni-view",{staticClass:"goods-info flex-row"},[i("v-uni-view",{staticClass:"goods-class flex-grow-1"},[i("v-uni-text",{staticClass:"goods-num"},[t._v("数量："+t._s(t.orderInfo.goodsNum)+" "+t._s(t.orderInfo.goods.unit))])],1),i("v-uni-view",{staticClass:"flex-grow-0 info-money"},[t._v("\n\t\t\t\t\t\t￥"+t._s(t.orderInfo.totalPrice)+"\n\t\t\t\t\t")])],1)],1)],1),i("v-uni-view",{staticClass:"order-price bg-fff"},[i("v-uni-text",[t._v("实付：¥"+t._s(t.orderInfo.totalPrice))])],1),i("v-uni-view",{staticClass:"order-item bg-fff"},[i("v-uni-view",[t._v("\n\t\t\t\t订单编号："+t._s(t.orderInfo.orderNum)),i("v-uni-text")],1),i("v-uni-view",[t._v("支付方式：微信")]),i("v-uni-view",[t._v("下单时间："+t._s(t.orderInfo.createTime))]),t.orderInfo.payTime?i("v-uni-view",[t._v("支付时间："+t._s(t.orderInfo.payTime))]):t._e(),t.orderInfo.group_time?i("v-uni-view",[t._v("成团时间："+t._s(t.orderInfo.group_time))]):t._e(),t.orderInfo.deliveryTime?i("v-uni-view",[t._v("发货时间："+t._s(t.orderInfo.deliveryTime))]):t._e(),t.orderInfo.completeTime?i("v-uni-view",[t._v("成交时间："+t._s(t.orderInfo.completeTime))]):t._e(),t.orderInfo.express?i("v-uni-view",[i("v-uni-view",[t._v("快递方式："+t._s(t.orderInfo.express.type))]),i("v-uni-view",[t._v("运单编号："+t._s(t.orderInfo.express.sn))])],1):t._e()],1)],1)},o=[],r=i("ca7b"),a=getApp(),s=a.core,d={extends:r["a"],data:function(){return{orderInfo:{}}},methods:{showDataInfo:function(){var t=this;s.get("Pintuan/ptOrderDetail",{id:this.oid},function(e){0==e.code?t.setData({orderInfo:e.info}):s.alert(e.msg)})}},onLoad:function(t){this.oid=t.oid,this.showDataInfo()},onShow:function(){}},f=d,l=(i("09d6"),i("2877")),c=Object(l["a"])(f,n,o,!1,null,"84fa39bc",null);c.options.__file="detail.vue";e["default"]=c.exports},ca7b:function(t,e,i){"use strict";var n,o,r=i("e143"),a={computed:{Vue:function(){return r["default"]}},methods:{setData:function(t){if(t)try{for(var e in t)this[e]=t[e]}catch(i){console.log(i)}},menu_url:function(t){getApp().core.menu_url(t,2)},formSubmit:function(t){var e={currentTarget:{dataset:{}}},i=t.detail.value;e.currentTarget.dataset=i,getApp().core.menu_url(e,1)},isLogin:function(){return!!getApp().getCache("userinfo").uid||(getApp().core.alert("请先登录",function(){wx.redirectTo({url:"/yb_shop/pages/wap/login"})}),!1)}}},s=a,d=i("2877"),f=Object(d["a"])(s,n,o,!1,null,null,null);f.options.__file="Base.vue";e["a"]=f.exports},f6d1:function(t,e,i){e=t.exports=i("2350")(!1),e.i(i("5872"),""),e.push([t.i,"\n.jumbotron[data-v-84fa39bc]{background-color:red;color:#fff;height:%?122?%;padding:%?52?% %?72?% 0 %?50?%;FILTER:progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#ff7e45,endColorStr=#fe4137);background:-o-linear-gradient(left,#ff7e45,#fe4137)\n}\n.ungroup[data-v-84fa39bc],.unpay[data-v-84fa39bc],.unsend[data-v-84fa39bc]{display:inline-block;width:100%\n}\n.jumbotron uni-image[data-v-84fa39bc]{width:%?138?%;height:%?100?%\n}\n.jumbotron .order-status[data-v-84fa39bc],.jumbotron .status-img[data-v-84fa39bc]{display:inline-block;width:50%\n}\n.ordernum[data-v-84fa39bc]{line-height:%?72?%;font-size:11pt;color:#5d5d5d;padding-left:%?24?%\n}\n.goods-price[data-v-84fa39bc]{margin-top:%?30?%\n}\n.goods-prop[data-v-84fa39bc]{width:80%;display:inline-block;margin-top:%?24?%;color:#a4a4a4;font-size:9pt\n}\n.user-option[data-v-84fa39bc]{line-height:%?72?%;text-align:right\n}\n.user-option .btn[data-v-84fa39bc]{padding:0 %?24?%;line-height:%?52?%;color:#5d5d5d;font-size:10pt;border:1px solid #a4a4a4;border-radius:%?10?%;display:inline-block;margin-right:%?24?%;background-color:#fff\n}\n.order-price[data-v-84fa39bc]{width:100%;text-align:right;line-height:%?72?%;font-size:10pt;margin-bottom:%?20?%\n}\n.order-price uni-text[data-v-84fa39bc]{color:#e02e24;font-weight:700;margin-right:%?24?%\n}\n.order-item[data-v-84fa39bc]{padding:%?24?% %?24?% %?4?% %?24?%;line-height:%?45?%;font-size:11pt;color:#5d5d5d;margin-top:1px\n}\n.order-item uni-view[data-v-84fa39bc]{margin-bottom:%?20?%\n}\n.footer[data-v-84fa39bc]{position:fixed;bottom:0;width:100%;border-top:%?1?% solid #ddd;background-color:#fff;line-height:%?98?%;text-align:right\n}\n.footer .btn[data-v-84fa39bc]{display:inline-block;line-height:%?64?%;padding:0 %?32?%;border-radius:%?10?%;margin-right:%?24?%\n}\n.footer .btn-red[data-v-84fa39bc]{background-color:#e02e24;color:#fff\n}\n.info-text[data-v-84fa39bc]{font-size:14pt;color:#fff;padding-top:%?10?%\n}\n.address[data-v-84fa39bc]{padding:%?24?%;font-size:11pt;color:#5d5d5d;margin-bottom:%?20?%\n}\n.img[data-v-84fa39bc]{margin-right:%?24?%\n}\n.address .img uni-image[data-v-84fa39bc]{width:%?36?%;height:%?44?%\n}\n.addr-user[data-v-84fa39bc]{margin-bottom:%?24?%\n}\n.addr-user uni-text[data-v-84fa39bc]{margin-right:%?24?%\n}\n.order-goods[data-v-84fa39bc]{background-color:#f8f8f8;padding-right:%?24?%\n}\n.goods-img[data-v-84fa39bc]{padding:%?14?% %?24?%\n}\n.goods-img uni-image[data-v-84fa39bc]{width:%?154?%;height:%?154?%\n}\n.goods-title[data-v-84fa39bc]{font-size:11pt;color:#1b1b1b;line-height:%?29?%\n}\n.g-info[data-v-84fa39bc]{margin-top:%?20?%\n}\n.goods-pice[data-v-84fa39bc]{margin-right:%?24?%\n}\n.goods-right[data-v-84fa39bc]{margin-top:%?24?%;padding-right:%?24?%;float:left\n}\n.goods-info[data-v-84fa39bc]{margin-top:%?40?%\n}\n.goods-class[data-v-84fa39bc]{font-size:11pt;color:#9d9d9d\n}\n.goods-num[data-v-84fa39bc]{margin-right:%?24?%\n}\n.info-money[data-v-84fa39bc]{font-size:12pt;color:#1b1b1b;text-align:right;max-width:%?200?%;word-wrap:break-word\n}\nuni-page-body[data-v-84fa39bc]{padding-bottom:%?100?%!important\n}",""])},fb7a:function(t,e,i){var n=i("f6d1");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var o=i("4f06").default;o("f508ccec",n,!0,{sourceMap:!1,shadowMode:!1})}}]);