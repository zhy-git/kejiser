(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["yb_shop-pages-kanjia-order-pay-index"],{"1a2e":function(t,e,i){"use strict";i.r(e);var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",[!t.success&&t.show?i("v-uni-view",{staticClass:"page"},[i("v-uni-view",{staticClass:"fui-cell-group"},[i("v-uni-view",{staticClass:"fui-cell"},[i("v-uni-view",{staticClass:"fui-cell-text textl"},[t._v("订单编号")]),i("v-uni-view",{staticClass:"fui-cell-remark noremark"},[t._v(t._s(t.list.order_no))])],1),i("v-uni-view",{staticClass:"fui-cell"},[i("v-uni-view",{staticClass:"fui-cell-text textl"},[t._v("订单金额")]),i("v-uni-view",{staticClass:"text-danger"},[t._v("￥\n\t\t\t\t\t"),i("v-uni-text",[t._v(t._s(t.list.pay_money))])],1)],1)],1),i("v-uni-view",{staticClass:"fui-list-group",staticStyle:{"margin-top":"0"}},[0==t.list.pay_money?i("v-uni-view",{staticClass:"fui-list",attrs:{"data-type":"credit"},on:{click:function(e){e=t.$handleEvent(e),t.pay(e)}}},[i("v-uni-view",{staticClass:"fui-list-media credit radius"},[i("v-uni-image",{staticClass:"round",attrs:{src:"/static/images/icon-white/money.png"}})],1),i("v-uni-view",{staticClass:"fui-list-inner"},[i("v-uni-view",{staticClass:"row"},[i("v-uni-view",{staticClass:"row-text"},[t._v("确认支付")])],1)],1),i("v-uni-view",{staticClass:"angle"})],1):t._e(),0!=t.list.pay_money?i("v-uni-view",{staticClass:"fui-list",attrs:{"data-type":"wechat"},on:{click:function(e){e=t.$handleEvent(e),t.pay(e)}}},[i("v-uni-view",{staticClass:"fui-list-media wechat"},[i("v-uni-image",{staticClass:"round",attrs:{src:"/static/images/icon-white/wechat.png"}})],1),i("v-uni-view",{staticClass:"fui-list-inner"},[i("v-uni-view",{staticClass:"row"},[i("v-uni-view",{staticClass:"row-text"},[t._v("微信支付")])],1),i("v-uni-view",{staticClass:"subtitle"},[t._v("微信安全支付")])],1),i("v-uni-view",{staticClass:"angle"})],1):t._e()],1),i("v-uni-view",{staticClass:"btn btn-danger block",staticStyle:{"font-size":"30rpx",background:"#ed4f4e"},attrs:{"data-type":"wechat"},on:{click:function(e){e=t.$handleEvent(e),t.pay(e)}}},[t._v("确认支付")])],1):t._e(),t.success?i("v-uni-view",{staticClass:"page"},[i("v-uni-view",{staticClass:"fui-list success"},[i("v-uni-view",{staticClass:"fui-list-media"},[i("v-uni-image",{staticClass:"round",attrs:{src:"/static/images/icon-white/deliver-48.png"}})],1),i("v-uni-view",{staticClass:"fui-list-inner"},[i("v-uni-view",{staticClass:"row"},[i("v-uni-view",{},[0==t.list.order_status?i("v-uni-view",[t._v("待付款 ")]):1==t.list.order_status?i("v-uni-view",[t._v(" 待发货 ")]):2==t.list.order_status?i("v-uni-view",[t._v(" 待收货 ")]):3==t.list.order_status?i("v-uni-view",[t._v(" 已完成 ")]):4==t.list.order_status?i("v-uni-view",[t._v(" 退换货 ")]):i("v-uni-view",[t._v(" 未知状态 ")])],1)],1),i("v-uni-view",{},[t._v(t._s(t.list.buyer_message))])],1)],1),i("v-uni-view",{staticClass:"fui-cell-group"},[i("v-uni-navigator",{staticClass:"fui-cell",attrs:{"hover-class":"none"}},[i("v-uni-image",{staticClass:"fui-cell-icon",attrs:{url:"",src:t.icons.location01}}),i("v-uni-view",{staticClass:"fui-cell-text textl info"},[i("v-uni-view",[i("v-uni-text",{staticClass:"name"},[t._v(t._s(t.list.receiver_name))]),i("v-uni-text",[t._v(t._s(t.list.receiver_mobile))])],1),i("v-uni-view",{staticClass:"adress"},[t._v(t._s(t.list.address.province+t.list.address.city+t.list.address.district+" "+t.list.receiver_address))])],1)],1)],1),t.list.stores?i("v-uni-view",{class:"fui-cell-group "+(t.shop?"toggleSend-group":"")},[i("v-uni-view",{staticClass:"send-code fui-list"},[t._l(t.list.stores,function(e,s){return[i("v-uni-view",{staticClass:"fui-list"},[i("v-uni-view",{staticClass:"fui-list-media"},[i("v-uni-image",{staticClass:"fui-list-icon",attrs:{src:"/static/images/icon/shop.png"}})],1),i("v-uni-view",{staticClass:"fui-list-inner store-inner"},[i("v-uni-view",{staticClass:"title"},[i("span",{staticClass:"storename"},[t._v(t._s(e.storename))])]),i("v-uni-view",{staticClass:"text"},[i("v-uni-text",{staticClass:"realname"},[t._v(t._s(e.realname))]),i("v-uni-text",{staticClass:"mobile"},[t._v(t._s(e.mobile))])],1),i("v-uni-view",{staticClass:"text"},[i("v-uni-text",{staticClass:"address"},[t._v(t._s(e.address))])],1)],1),i("v-uni-view",{staticClass:"fui-list-angle "},[i("v-uni-image",{staticClass:"image-48",attrs:{"data-phone":e.mobile,src:"/static/images/icon/tel.png"},on:{click:function(e){e=t.$handleEvent(e),t.phone(e)}}}),i("v-uni-navigator",{attrs:{"hover-class":"none",url:"/pages/order/store/map?id="+e.id}},[i("v-uni-image",{staticClass:"image-48",attrs:{src:t.icons.location01}})],1)],1)],1)]})],2)],1):t._e(),i("v-uni-view",{staticClass:"fui-cell-group"},[i("v-uni-view",{staticClass:"fui-cell"},[i("v-uni-view",{staticClass:"fui-cell-text "},[t._v("微信支付")]),i("v-uni-view",{staticClass:"text-danger"},[t._v("￥\n\t\t\t\t\t"),i("v-uni-text",[t._v(t._s(t.list.order_money))])],1)],1),i("v-uni-view",{staticClass:"fui-cell"},[i("v-uni-view",{staticClass:"fui-cell-remark noremark"},[t._v("请到订单详情中查看详细信息")])],1)],1),i("v-uni-view",{staticClass:"operate"},[i("v-uni-navigator",{staticClass:"btn btn-default",attrs:{url:"/yb_shop/pages/kanjia/order/detail/index?order_id="+t.list.order_id}},[t._v("\n\t\t\t\t订单详情\n\t\t\t")]),i("v-uni-navigator",{staticClass:"btn btn-default",attrs:{"open-type":"redirect",url:"/yb_shop/pages/kanjia/index/index"}},[t._v("\n\t\t\t\t返回首页\n\t\t\t")])],1)],1):t._e()],1)},a=[],n=i("ca7b"),o=getApp(),l=o.core,r={extends:n["a"],data:function(){return{icons:o.icons,success:!1,successData:{},button_color:o.config.button_color,show:!0,http_url:"",options:{},list:[]}},onLoad:function(t){this.setData({options:t,http_url:window.location.href})},onShow:function(t){this.get_list()},methods:{get_list:function(){var t=this;l.get("Bargain/OrderInfo",{order_id:t.options.id},function(e){0==e.code?t.setData({list:e.info,success:1==e.info.pay_status,show:!0}):l.alert(e.msg)})},pay:function(t){l.pdata(t).type;var e=this;l.get("Bargain/Paywap",{out_trade_no:e.list.out_trade_no,openid:getApp().getCache("userinfo").openid},function(t){console.log(t);var i=t.info;if(0==t.code){var s=i.mweb_url+"&redirect_url="+encodeURIComponent(e.http_url);location.href=s}else l.alert(t.msg),setTimeout(function(){wx.navigateBack()},1e3)})},phone:function(t){l.phone(t)}}},c=r,u=(i("2c5d"),i("2877")),v=Object(u["a"])(c,s,a,!1,null,"8181e7e4",null);v.options.__file="index.vue";e["default"]=v.exports},"2c5d":function(t,e,i){"use strict";var s=i("c0f8"),a=i.n(s);a.a},c0f8:function(t,e,i){var s=i("da68");"string"===typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);var a=i("4f06").default;a("71ea9209",s,!0,{sourceMap:!1,shadowMode:!1})},ca7b:function(t,e,i){"use strict";var s,a,n=i("e143"),o={computed:{Vue:function(){return n["default"]}},methods:{setData:function(t){if(t)try{for(var e in t)this[e]=t[e]}catch(i){console.log(i)}},menu_url:function(t){getApp().core.menu_url(t,2)},formSubmit:function(t){var e={currentTarget:{dataset:{}}},i=t.detail.value;e.currentTarget.dataset=i,getApp().core.menu_url(e,1)},isLogin:function(){return!!getApp().getCache("userinfo").uid||(getApp().core.alert("请先登录",function(){wx.redirectTo({url:"/yb_shop/pages/wap/login"})}),!1)}}},l=o,r=i("2877"),c=Object(r["a"])(l,s,a,!1,null,null,null);c.options.__file="Base.vue";e["a"]=c.exports},da68:function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,'\nuni-page-body[data-v-8181e7e4]{background:#f2f2f2\n}\n.fui-list-inner .subtitle[data-v-8181e7e4]{color:#8a8a8a\n}\n.fui-list[data-v-8181e7e4]{padding:%?20?% %?10?%\n}\n.car[data-v-8181e7e4],.credit[data-v-8181e7e4],.wechat[data-v-8181e7e4]{height:%?90?%;width:%?90?%;display:-webkit-flex;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-justify-content:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;border-radius:%?10?%\n}\n.credit[data-v-8181e7e4]{background:#e2cb04\n}\n.wechat[data-v-8181e7e4]{background:#fff\n}\n.car[data-v-8181e7e4]{background:#0291bf\n}\n.car uni-image[data-v-8181e7e4],.credit uni-image[data-v-8181e7e4],.wechat uni-image[data-v-8181e7e4]{width:%?80?%;height:%?80?%\n}\n.success[data-v-8181e7e4]{background:#df2f20;margin-top:0;color:#fff\n}\n.row[data-v-8181e7e4]{font-size:%?40?%\n}\n.adress[data-v-8181e7e4]{font-size:%?27?%;color:#666\n}\n.operate[data-v-8181e7e4]{display:-webkit-flex;display:-webkit-box;display:-ms-flexbox;display:flex\n}\n.operate uni-navigator[data-v-8181e7e4]{-webkit-flex:1;-webkit-box-flex:1;-ms-flex:1;flex:1\n}\n.send-code[data-v-8181e7e4]{display:none\n}\n.fui-cell-group.toggleSend-group .send-code[data-v-8181e7e4]{display:block;font-size:%?26?%\n}\n.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark[data-v-8181e7e4]:after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)\n}\n.image-48[data-v-8181e7e4]{margin:%?8?% 0\n}\n.num[data-v-8181e7e4]{font-size:%?24?%;color:#fff;background:#ff9326;border-radius:50%;padding:%?4?% %?10?%;text-align:center\n}\n.fui-list-media uni-image[data-v-8181e7e4]{width:%?60?%;height:%?60?%\n}\n.btn.btn-default[data-v-8181e7e4]{position:relative;background:#fff;border:0;font-size:%?30?%\n}\n.btn.btn-default[data-v-8181e7e4]:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #d9d9d9;-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5);-ms-transform:scale(.5);transform:scale(.5)\n}\nbody.?%PAGE?%[data-v-8181e7e4]{background:#f2f2f2\n}',""])}}]);