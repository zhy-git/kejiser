(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["yb_shop-pages-pintuan-pages-goods-detail"],{3444:function(t,a,i){var e=i("ab0f");"string"===typeof e&&(e=[[t.i,e,""]]),e.locals&&(t.exports=e.locals);var o=i("4f06").default;o("0c7f820a",e,!0,{sourceMap:!1,shadowMode:!1})},"6ed9":function(t,a,i){"use strict";i.r(a);var e=function(){var t=this,a=t.$createElement,i=t._self._c||a;return i("v-uni-view",[t.show?i("v-uni-view",[i("v-uni-scroll-view",{staticClass:"scroll-view-y",style:"height: "+(t.windowHeight-50)+"px;",attrs:{"scroll-y":"true","scroll-with-animation":"true","scroll-top":t.scrollTop,"lower-threshold":"50",bindscrolltolower:"scrolltolower"}},[i("v-uni-view",{staticClass:"goodsInfo"},[t.goodsDetail.album.length>0?i("v-uni-swiper",{staticStyle:{height:"175px"},attrs:{autoplay:"true",circular:"true"}},t._l(t.goodsDetail.album,function(t){return i("v-uni-swiper-item",[i("v-uni-image",{staticStyle:{height:"175px"},attrs:{src:t,mode:"aspectFill"}})],1)})):t._e(),i("v-uni-view",{staticClass:"goods-item bg-fff",staticStyle:{position:"relative"}},[i("v-uni-view",{staticClass:"g-left"},[i("v-uni-text",{staticClass:"goods-price01"},[t._v(" 拼团价 ￥")]),i("v-uni-text",{staticClass:"goods-price",staticStyle:{float:"left",height:"110rpx","line-height":"110rpx"}},[t._v(t._s(t.goodsDetail.gprice))]),i("v-uni-view",{staticClass:"goods-price02"},[i("v-uni-text",{staticClass:"origin-price"},[t._v("¥"+t._s(t.goodsDetail.price))]),i("v-uni-text",{staticClass:"goods-sale"},[t._v("\n\t\t\t\t\t\t\t\t"+t._s(t.goodsDetail.groupNum)+"人团\n\t\t\t\t\t\t\t")])],1),i("v-uni-view",{staticClass:"clear"}),i("v-uni-view",{staticClass:"goods-sale02"},[t._v("\n\t\t\t\t\t\t\t已团"+t._s(t.goodsDetail.saleNum)+t._s(t.goodsDetail.unit)+"\n\t\t\t\t\t\t")])],1),i("v-uni-view",{staticClass:"icon-share2 text-center"},[i("v-uni-button",{staticClass:"share-btn",attrs:{"open-type":"share"}}),i("v-uni-image",{attrs:{src:"/static/resource/share.png"}})],1),i("v-uni-view",{staticClass:"clear"}),i("v-uni-view",{staticClass:"goods-title bg-fff"},[t._v(t._s(t.goodsDetail.name))]),i("v-uni-view",{staticClass:"goods-brief bg-fff"},[t._v(t._s(t.goodsDetail.brief))])],1),i("v-uni-view",{staticClass:"server",attrs:{"data-statu":"open"},on:{click:function(a){a=t.$handleEvent(a),t.showServer2(a)}}},[i("v-uni-image",{attrs:{src:"/static/resource/yes.png"}}),i("v-uni-text",[t._v("全场包邮")]),i("v-uni-image",{attrs:{src:"/static/resource/yes.png"}}),i("v-uni-text",[t._v("7天退换")]),i("v-uni-image",{attrs:{src:"/static/resource/yes.png"}}),i("v-uni-text",[t._v("全场48小时发货")]),i("v-uni-image",{attrs:{src:"/static/resource/yes.png"}}),i("v-uni-text",[t._v("假一赔十")])],1),t.groupList.length>0?i("v-uni-view",[i("v-uni-view",{staticClass:"bg-fff mt-20 p-20"},[t._v("小伙伴正在开团")]),t._l(t.groupList,function(a,e){return i("v-uni-view",{key:e},[i("v-uni-view",{staticClass:"pull-left group-item bg-fff",attrs:{"data-id":a.oid},on:{click:function(a){a=t.$handleEvent(a),t.joinGroup(a)}}},[i("v-uni-view",{staticClass:"pull-left user-img"},[i("v-uni-image",{attrs:{src:a.user_headimg,mode:"aspectFill"}})],1),i("v-uni-view",{staticClass:"group-user pull-left"},[i("v-uni-view",{staticClass:"user-name"},[t._v(t._s(a.nickName))]),i("v-uni-view",{staticClass:"left-time"},[t._v("还差"+t._s(t.goodsDetail.groupNum-1-a.leftNum)+"人，剩余"+t._s(a.leftTimeStr))])],1),i("v-uni-view",{staticClass:"pull-right btn"},[t._v("去参团")])],1),i("v-uni-view",{staticClass:"clear"})],1)})],2):t._e(),i("v-uni-view",{staticClass:"goods-desc bg-fff"},[i("v-uni-view",[t._v("商品详情")])],1),i("v-uni-view",{staticClass:"wxParse case_content",domProps:{innerHTML:t._s(t.goodsDetail.intro)}})],1)],1),i("v-uni-view",{staticStyle:{width:"100%",height:"3rem"}}),i("v-uni-view",{staticClass:"footer"},[i("v-uni-view",{staticClass:"index",on:{click:function(a){a=t.$handleEvent(a),t.goHome(a)}}},[i("v-uni-image",{attrs:{src:"/static/resource/icon-store.png",mode:"aspectFill"}}),i("v-uni-view",{staticClass:"mt-10"},[t._v("首页")])],1),i("v-uni-view",{staticClass:"buy-group pull-right",attrs:{"data-statu":"open","data-type":"group"},on:{click:function(a){a=t.$handleEvent(a),t.showModal(a)}}},[i("v-uni-view",[t._v("¥"+t._s(t.goodsDetail.gprice))]),i("v-uni-view",{staticClass:"mt-10"},[t._v("一键开团")])],1),i("v-uni-view",{staticClass:"buy-only pull-right",attrs:{"data-statu":"open","data-type":"only"},on:{click:function(a){a=t.$handleEvent(a),t.showModal(a)}}},[i("v-uni-view",[t._v("¥"+t._s(t.goodsDetail.price))]),i("v-uni-view",{staticClass:"mt-10"},[t._v("单独购买")])],1)],1),t.showModalStatus?i("v-uni-view",{staticClass:"drawer_screen",attrs:{"data-statu":"close"},on:{click:function(a){a=t.$handleEvent(a),t.showModal(a)}}}):t._e(),t.showModalStatus?i("v-uni-view",{staticClass:"modal",attrs:{animation:t.animationData}},[i("v-uni-view",{staticClass:"modal-close pull-right",attrs:{"data-statu":"close"},on:{click:function(a){a=t.$handleEvent(a),t.showModal(a)}}},[i("v-uni-image",{staticStyle:{width:"30rpx",height:"30rpx"},attrs:{src:"/static/resource/off.png"}})],1),i("v-uni-view",{staticClass:"clear"}),i("v-uni-view",{staticClass:"modal-title"},[i("v-uni-view",{staticClass:"goods-img"},[i("v-uni-image",{attrs:{src:t.goodsDetail.img,mode:"aspectFit"}})],1),i("v-uni-view",{staticClass:"goods_price_box"},[i("v-uni-view",{staticClass:"goods-price"},[t._v("¥"+t._s(t.goodsPrice))]),i("v-uni-view",{staticClass:"goods-stock"},[t._v("库存"+t._s(t.goodsDetail.stock)+"件")])],1)],1),i("v-uni-view",{staticClass:"number pull-left02"},[i("v-uni-text",{staticClass:"pull-left02",staticStyle:{"padding-left":"24rpx"}},[t._v("数量")]),i("v-uni-text",{staticClass:"plus pull-right",on:{click:function(a){a=t.$handleEvent(a),t.plus(a)}}},[t._v("十")]),i("v-uni-text",{staticClass:"buy-value pull-right"},[t._v(t._s(t.num))]),i("v-uni-text",{staticClass:"minus pull-right",on:{click:function(a){a=t.$handleEvent(a),t.minus(a)}}},[t._v("一")])],1),i("v-uni-view",{staticClass:"modal-footer"},[i("v-uni-view",{staticClass:"btn_pt",staticStyle:{"font-size":"14pt"},on:{click:function(a){a=t.$handleEvent(a),t.goToBuy(a)}}},[t._v("确定")])],1)],1):t._e(),t.showServer?i("v-uni-view",{staticClass:"drawer_screen",attrs:{"data-statu":"close"},on:{click:function(a){a=t.$handleEvent(a),t.showServer2(a)}}}):t._e(),t.showServer?i("v-uni-view",{staticClass:"modal",attrs:{animation:t.animationData}},[i("v-uni-text",{staticClass:"modal-close pull-right",attrs:{"data-statu":"close"},on:{click:function(a){a=t.$handleEvent(a),t.showModal(a)}}},[t._v("x")]),i("v-uni-view",{staticClass:"clear"}),i("v-uni-view",{staticClass:"modal-title"},[i("v-uni-view",{staticClass:"text-center"},[i("v-uni-text",{},[t._v("服务说明")])],1)],1),i("v-uni-view",{staticClass:"modal-body"})],1):t._e()],1):t._e()],1)},o=[],n=i("ca7b");function s(t,a,i){return a in t?Object.defineProperty(t,a,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[a]=i,t}var r=getApp(),l=r.core,d={extends:n["a"],data:function(){return{scrollTop:0,num:1,show:!0,goodsDetail:[],groupList:[],info:[],showServer:!1,showModalStatus:!1,animationData:"",windowHeight:0,length:0}},methods:{setTimeData:function(t){var a=this,i=t;setInterval(function(){for(var t=0;t<i.length;t++){var e=--i[t].leftTime,o=Math.floor(e/60/60),n=Math.floor((e-60*o*60)/60),s=e%60;o<10&&(o="0"+o),n<10&&(n="0"+n),s<10&&(s="0"+s),i[t].leftTimeStr=o+":"+n+":"+s}a.setData({groupList:i})},1e3)},joinGroup:function(t){var a=t.currentTarget.dataset.id;r.redirect("group/detail","id="+a)},goHome:function(){l.jump("/yb_shop/pages/pintuan/pages/index/index",2)},goToBuy:function(){var t=this.goodsDetail;t["num"]=this.num,t["goodsPrice"]=this.goodsPrice,t["buyType"]=this.buyType,t["groupPid"]=0,r.goodsInfo=t,r.redirect("goods/payfor")},selectProp:function(t){var a=t.currentTarget.dataset,i=a.pid,e=a.pname,o=a.name,n=this.propValue?this.propValue:[];n[i]={pname:e,name:o},this.propValue=n,this.setData({propValue:n})},minus:function(){var t=this.num>1?--this.num:1;this.setData({num:t})},plus:function(){var t=++this.num;if(t>this.goodsDetail.stock)return l.alert("不好意思，库存不够"),void this.setData({num:this.num-1});this.setData({num:t})},showModal:function(t){var a=t.currentTarget.dataset.type,i="open"==t.currentTarget.dataset.statu,e="group"==a?this.goodsDetail.gprice:this.goodsDetail.price,o="group"==a?1:0;this.setData({showModalStatus:i,goodsPrice:e,buyType:o})},scrolltolower:function(){},showServer2:function(t){}},onLoad:function(t){var a=this,i=this.gid=t.gid?t.gid:t.id;console.log(i);var e=wx.getSystemInfoSync();l.get("Pintuan/ptGoodsDetail",{gid:i,uid:r.getCache("userinfo").uid},function(t){if(console.log(t),0==t.code){var i;t.info.intro,a.setData({windowHeight:e.windowHeight,goodsDetail:t.info});var o=t.info.groupList;if(o.length>0){for(var n=0;n<o.length;n++){t=--o[n].leftTime;var r=Math.floor(t/60/60),d=Math.floor((t-60*r*60)/60),u=t%60;r<10&&(r="0"+r),d<10&&(d="0"+d),u<10&&(u="0"+u),o[n].leftTimeStr=r+":"+d+":"+u}a.setTimeData(o)}a.setData((i={groupList:o},s(i,"groupList",o),s(i,"show",!0),i))}else l.alert(t.msg)},!0)},onShareAppMessage:function(t){return{title:this.goodsDetail.name,path:"/yb_shop/pages/pintuan/pages/goods/detail?gid="+this.goodsDetail.id,success:function(t){console.log(t)}}}},u=d,c=(i("f741"),i("2877")),v=Object(c["a"])(u,e,o,!1,null,"a491f514",null);v.options.__file="detail.vue";a["default"]=v.exports},ab0f:function(t,a,i){a=t.exports=i("2350")(!1),a.push([t.i,"@import url(/yb_shop/pages/pintuan/app.css);",""]),a.push([t.i,"\nuni-swiper-item uni-image[data-v-a491f514]{width:100%;height:100%\n}\nuni-swiper[data-v-a491f514]{height:%?750?%\n}\n.wxParse-img[data-v-a491f514]{width:100%\n}\n.goods-item uni-image[data-v-a491f514]{width:%?43?%;height:%?44?%\n}\n.icon-share2[data-v-a491f514]{right:%?30?%;bottom:%?233?%;position:fixed;width:%?80?%;height:%?80?%;border-radius:50%;border:1px solid #eee;background:#fff;line-height:%?80?%;text-align:center\n}\n.share-text[data-v-a491f514]{margin-top:%?8?%;color:#a4a4a4\n}\n.share-btn[data-v-a491f514]{height:%?70?%;width:%?80?%;right:%?30?%;bottom:%?233?%;opacity:0;position:fixed\n}\n.goods-item .g-left[data-v-a491f514]{width:100%;background:#fd4b49;height:%?110?%\n}\n.goods-price[data-v-a491f514]{color:#fff;margin-right:%?20?%;font-size:%?56?%;height:%?80?%;line-height:%?80?%\n}\n.goods_price_box[data-v-a491f514]{float:left;margin-top:%?-60?%\n}\n.origin-price[data-v-a491f514]{color:#5d5d5d;text-decoration:line-through\n}\n.goods-sale[data-v-a491f514]{color:#5d5d5d;margin-top:%?24?%\n}\n.goods-title[data-v-a491f514]{line-height:%?53?%;padding:0 %?24?%;margin-top:%?34?%;font-size:%?32?%;color:#000;font-weight:400\n}\n.goods-brief[data-v-a491f514]{color:#5d5d5d;line-height:%?31?%;padding:%?32?% %?24?%;border-bottom:1px solid #eee\n}\n.goods-sale02[data-v-a491f514]{position:absolute;right:%?30?%;top:%?36?%;color:#ffd632;font-size:%?26?%;height:%?50?%\n}\n.server[data-v-a491f514]{background-color:#fff;padding:0 %?24?%;line-height:%?88?%;color:#5d5d5d\n}\n.server uni-text[data-v-a491f514]{margin-right:%?15?%;margin-left:%?10?%\n}\n.server uni-image[data-v-a491f514]{width:%?24?%;height:%?24?%\n}\n.right uni-image[data-v-a491f514]{width:%?12?%\n}\n.goods-desc[data-v-a491f514]{margin-top:%?20?%;padding:0 %?24?%;line-height:%?80?%\n}\n.goods-desc>uni-view[data-v-a491f514]{border-bottom:0 solid #ccc\n}\n.goods-price01[data-v-a491f514]{float:left;height:%?110?%;line-height:%?110?%;padding-left:%?20?%;color:#fff;font-size:%?28?%\n}\n.goods-price02[data-v-a491f514]{padding-top:%?20?%;float:left\n}\n.goods-price02 uni-text[data-v-a491f514]{color:#fff\n}\n.group-item[data-v-a491f514]{padding:%?20?% 0;width:100%;margin-top:%?5?%\n}\n.group-item .user-img[data-v-a491f514]{padding-left:%?24?%\n}\n.group-item uni-image[data-v-a491f514]{width:%?90?%;height:%?90?%;border-radius:50%\n}\n.group-user[data-v-a491f514]{padding-top:%?8?%;padding-left:%?20?%\n}\n.left-time[data-v-a491f514]{font-size:%?22?%;color:#5d5d5d;margin-top:%?16?%\n}\n.btn_pt[data-v-a491f514]{border:1px solid #fd4b49;padding:0 %?10?%;margin-right:%?24?%;color:#fff;border-radius:%?10?%;line-height:%?58?%;margin-top:%?18?%;width:%?136?%;text-align:center;background:#e02e24\n}\n.goods-stock[data-v-a491f514]{color:#666\n}\n.recommend-title[data-v-a491f514]{color:red;text-align:center;padding:%?20?%\n}\n.recommend-title uni-image[data-v-a491f514]{width:%?20?%;height:%?20?%;background-color:red\n}\n.footer[data-v-a491f514]{width:100%;background-color:#fff;border-top:%?1?% solid #fff;height:%?99?%;position:fixed;bottom:0\n}\n.goodsInfo[data-v-a491f514]{margin-bottom:%?100?%\n}\n.footer uni-image[data-v-a491f514]{width:%?38?%;height:%?38?%\n}\n.footer>uni-view[data-v-a491f514]{display:inline-block;text-align:center;height:46px;line-height:%?30?%;padding-top:7px\n}\n.footer .index[data-v-a491f514]{border-right:%?1?% solid #f5f5f5\n}\n.footer .collect[data-v-a491f514],.footer .index[data-v-a491f514]{width:15%;-webkit-box-sizing:border-box;box-sizing:border-box;position:relative\n}\n.footer .buy-group[data-v-a491f514],.footer .buy-only[data-v-a491f514]{width:35%;color:#fff\n}\n.buy-only[data-v-a491f514]{background-color:#ff8655\n}\n.buy-group[data-v-a491f514]{background-color:#fd4b49\n}\n.drawer_screen[data-v-a491f514]{height:100%;top:0;left:0;z-index:100;background-color:#000;opacity:.3;overflow:hidden\n}\n.drawer_screen[data-v-a491f514],.modal[data-v-a491f514]{width:100%;position:fixed\n}\n.modal[data-v-a491f514]{bottom:0;z-index:111;background-color:#fff;height:35%\n}\n.modal-close[data-v-a491f514]{font-size:%?40?%;color:#5d5d5d;margin:%?15?% %?30?% 0 0\n}\n.modal-title uni-image[data-v-a491f514]{width:%?200?%;height:%?200?%;position:absolute;top:%?-62?%;left:%?24?%;border-radius:%?10?%;border:%?6?% solid #fff\n}\n.modal .modal-title[data-v-a491f514]{padding-left:%?248?%;border-bottom:1px solid #eee;min-height:%?100?%\n}\n.modal .goods-price[data-v-a491f514]{font-size:%?36?%;color:#fd4b49\n}\n.modal .modal-body[data-v-a491f514]{padding:%?20?% %?24?%\n}\n.modal .prop[data-v-a491f514]{border-bottom:1px solid #eee\n}\n.modal .prop-name[data-v-a491f514]{padding:%?20?% 0;font-size:%?28?%\n}\n.modal .prop>uni-text[data-v-a491f514]{display:inline-block;background-color:#f2f2f2;border-radius:%?10?%;font-size:%?28?%;line-height:%?56?%;padding:0 %?24?%;margin:%?20?% %?30?% %?20?% 0\n}\n.selected[data-v-a491f514]{background-color:red!important;color:#fff\n}\n.number[data-v-a491f514]{width:100%;padding:%?30?% 0;border-bottom:1px solid #eee\n}\n.number>uni-text[data-v-a491f514]{line-height:%?60?%\n}\n.buy-value[data-v-a491f514]{width:%?94?%;text-align:center;margin:0 %?4?%;font-size:%?24?%\n}\n.buy-value[data-v-a491f514],.minus[data-v-a491f514],.plus[data-v-a491f514]{background-color:#eee;border-radius:%?10?%\n}\n.minus[data-v-a491f514],.plus[data-v-a491f514]{padding:0 %?20?%\n}\n.plus[data-v-a491f514]{margin-right:%?24?%\n}\n.modal .btn_pt[data-v-a491f514]{background:#fd4b49;color:#fff;position:absolute;bottom:0;width:100%;text-align:center;line-height:%?98?%;border-radius:0\n}\n.case_content uni-view[data-v-a491f514]{background:#fff;padding:%?20?%\n}\n.index .mt-10[data-v-a491f514]{color:#8f8f8f\n}\n.goods-item[data-v-a491f514]{position:relative\n}\n.pull-left[data-v-a491f514]{top:%?-32?%\n}\n.pull-left[data-v-a491f514],.service_box[data-v-a491f514]{position:absolute;left:0\n}\n.service_box[data-v-a491f514]{padding:%?29?%;top:0;background:#ccc;overflow:hidden;filter:alpha(Opacity=0);-moz-opacity:0;opacity:0\n}",""])},ca7b:function(t,a,i){"use strict";var e,o,n=i("e143"),s={computed:{Vue:function(){return n["default"]}},methods:{setData:function(t){if(t)try{for(var a in t)this[a]=t[a]}catch(i){console.log(i)}},menu_url:function(t){getApp().core.menu_url(t,2)},formSubmit:function(t){var a={currentTarget:{dataset:{}}},i=t.detail.value;a.currentTarget.dataset=i,getApp().core.menu_url(a,1)},isLogin:function(){return!!getApp().getCache("userinfo").uid||(getApp().core.alert("请先登录",function(){wx.redirectTo({url:"/yb_shop/pages/wap/login"})}),!1)}}},r=s,l=i("2877"),d=Object(l["a"])(r,e,o,!1,null,null,null);d.options.__file="Base.vue";a["a"]=d.exports},f741:function(t,a,i){"use strict";var e=i("3444"),o=i.n(e);o.a}}]);