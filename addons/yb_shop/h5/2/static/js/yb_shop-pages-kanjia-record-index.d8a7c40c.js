(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["yb_shop-pages-kanjia-record-index"],{"205d":function(t,e,i){"use strict";var n=i("92fc"),a=i.n(n);a.a},8691:function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,"\n.record_li[data-v-eb931656]{padding-top:1rem;padding-bottom:1rem;border-bottom:1px dashed #eee;padding-left:3.8rem\n}\n.record_li .user_face[data-v-eb931656]{width:2.2rem;height:2.2rem;border-radius:50%;float:left;margin-left:-3rem;margin-top:.3rem\n}\n.record_info[data-v-eb931656]{font-size:.8rem;line-height:1.4rem;margin-right:.8rem\n}",""])},"92fc":function(t,e,i){var n=i("8691");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var a=i("4f06").default;a("0208e7a4",n,!0,{sourceMap:!1,shadowMode:!1})},ca7b:function(t,e,i){"use strict";var n,a,s=i("e143"),r={computed:{Vue:function(){return s["default"]}},methods:{setData:function(t){if(t)try{for(var e in t)this[e]=t[e]}catch(i){console.log(i)}},menu_url:function(t){getApp().core.menu_url(t,2)},formSubmit:function(t){var e={currentTarget:{dataset:{}}},i=t.detail.value;e.currentTarget.dataset=i,getApp().core.menu_url(e,1)},isLogin:function(){return!!getApp().getCache("userinfo").uid||(getApp().core.alert("请先登录",function(){wx.redirectTo({url:"/yb_shop/pages/wap/login"})}),!1)}}},o=r,c=i("2877"),u=Object(c["a"])(o,n,a,!1,null,null,null);u.options.__file="Base.vue";e["a"]=u.exports},e71e:function(t,e,i){"use strict";i.r(e);var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",[t.show?i("v-uni-view",[0==t.list.length?i("v-uni-view",{staticClass:"none_info_box"},[i("v-uni-view",{staticClass:"none_info_img"}),i("v-uni-view",{staticClass:"none_info_text"},[t._v("暂无相关信息！")])],1):t._e(),t._l(t.list,function(e){return t.list.length>0?i("v-uni-view",[i("v-uni-view",{staticClass:"record_li"},[i("v-uni-image",{staticClass:"user_face",attrs:{src:e.user_headimg}}),i("v-uni-view",{staticClass:"record_info"},[i("v-uni-text",{staticClass:"y_color"},[t._v(t._s(e.nick_name))]),t._v("于"+t._s(e.create_time)+"帮你砍掉了\n\t\t\t\t\t"),i("v-uni-text",{staticClass:"y_color"},[t._v(t._s(e.bargain_price)+"元")]),t._v("，砍后价格为\n\t\t\t\t\t"),i("v-uni-text",{staticClass:"y_color"},[t._v(t._s(e.balance_price)+"元")]),t._v("。\n\t\t\t\t")],1)],1)],1):t._e()}),i("v-uni-view",{staticClass:"fui-loading empty"},[i("v-uni-view",{staticClass:"text"},[t._v("没有更多了")])],1)],2):t._e()],1)},a=[],s=i("ca7b"),r=getApp(),o=r.core,c=r.kjb,u={extends:s["a"],data:function(){return{show:!0,list:[]}},onLoad:function(t){o.setting(),this.setData(t),this.getList()},methods:{getList:function(){var t=this,e=t.id;c.BargainRecord(e,function(e){t.setData(e)})}},onPullDownRefresh:function(){this.getList(),wx.stopPullDownRefresh()}},l=u,_=(i("205d"),i("2877")),d=Object(_["a"])(l,n,a,!1,null,"eb931656",null);d.options.__file="index.vue";e["default"]=d.exports}}]);