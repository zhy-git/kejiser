(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["yb_shop-pages-kanjia-index-index"],{"26e6":function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,"\n.index_top_nav uni-image[data-v-683e1e94]{width:%?90?%;height:%?90?%\n}\n.index_top_nav[data-v-683e1e94]{padding-bottom:%?20?%;padding-top:%?20?%;border-bottom:%?14?% solid #f2f2f2;min-height:%?155?%;overflow:hidden\n}\n.index_top_nav>uni-view[data-v-683e1e94]{width:20%;height:%?130?%;text-align:center;font-size:%?27?%;display:block;float:left;padding-bottom:%?20?%\n}\n.index_nav_name[data-v-683e1e94]{height:%?50?%;line-height:%?50?%;color:#666;font-size:.7rem;margin-top:%?10?%\n}\n.swiper-tab[data-v-683e1e94]{width:100%;border-bottom:%?2?% solid #fff;text-align:center;line-height:%?90?%\n}\n.swiper-tab-list[data-v-683e1e94]{font-size:%?30?%;display:inline-block;width:33.33%;color:#111\n}\n.on[data-v-683e1e94]{color:#ed504e;background:url(http://ddfwz.sssvip.net/asmce/kanjia/index_nav_bg.png) bottom no-repeat;background-size:3.5rem .15rem\n}\n.swiper-box[data-v-683e1e94]{display:block;width:100%;overflow:hidden\n}\n.index_info_li[data-v-683e1e94]{border-top:%?14?% solid #f2f2f2\n}\n.index_info_pic[data-v-683e1e94]{width:100%;height:11rem;position:relative\n}\n.index_info_count[data-v-683e1e94]{position:absolute;text-align:center;background:rgba(0,0,0,.5);right:.5rem;top:.5rem;padding:.3rem .8rem;border-radius:0\n}\n.index_info_count uni-text[data-v-683e1e94]{color:#fff;font-size:.8rem\n}\n.price_left .price01[data-v-683e1e94],.price_left .price02[data-v-683e1e94]{margin-left:.2rem\n}\n.index_info_uface[data-v-683e1e94]{margin-left:.5rem;margin-right:.5rem\n}\n.index_info_uface .image[data-v-683e1e94]{width:1.6rem;height:1.6rem;border-radius:50%;float:left;border:%?6?% solid #fff;margin-right:-.35rem\n}\n.index_info_uface .user_no[data-v-683e1e94]{height:1.8rem;line-height:1.8rem;color:#909090;padding-left:.5rem;font-size:.8rem;float:left\n}\n.buy_btn_none[data-v-683e1e94]{height:2.5rem;line-height:2.5rem;background:#7a7a7b;color:#fff;font-size:.9rem;text-align:center;border-radius:1.25rem;width:8rem;-webkit-box-shadow:2px 6px 10px #e4e4e4;box-shadow:2px 6px 10px #e4e4e4\n}\n.price_left .price02[data-v-683e1e94]{color:#ed4f4e;font-size:.8rem;padding-top:.5rem\n}\n.price_left .price02 .price01[data-v-683e1e94]{font-size:.8rem;color:#909090\n}",""])},"654d":function(e,t,i){"use strict";i.r(t);var a=function(){var e=this,t=e.$createElement,i=e._self._c||t;return e.show?i("v-uni-view",[i("v-uni-view",{staticClass:"index_swiper"},[e.carousel.length>0?i("v-uni-swiper",{staticStyle:{height:"8rem"},attrs:{"indicator-dots":"true",circular:"true",autoplay:e.autoplay,interval:e.interval,duration:e.duration}},e._l(e.carousel,function(e,t){return i("v-uni-swiper-item",[i("v-uni-navigator",{attrs:{url:e.url_path,"hover-class":"none"}},[i("v-uni-image",{staticClass:"slide-image",attrs:{src:e.img,mode:"widthFix"}})],1)],1)})):e._e()],1),i("v-uni-view",{staticClass:"index_top_nav",staticStyle:{"padding-top":"40rpx"}},e._l(e.cate_info,function(t,a){return e.cate_info.length>0?i("v-uni-view",[i("v-uni-navigator",{attrs:{url:"/yb_shop/pages/kanjia/good_list/index?cate_id="+t.id+"&class_name="+t.class_name,"hover-class":"none"}},[i("v-uni-image",{attrs:{src:t.img_url}}),i("v-uni-view",{staticClass:"index_nav_name"},[e._v(e._s(t.class_name))])],1)],1):e._e()})),i("v-uni-view",{staticClass:"clear"}),i("v-uni-view",{staticClass:"swiper-tab"},[i("v-uni-view",{class:"swiper-tab-list "+(1==e.kj_type?"on":""),attrs:{"data-kj_type":"1"},on:{click:function(t){t=e.$handleEvent(t),e.swichNav(t)}}},[e._v("正在进行")]),i("v-uni-view",{class:"swiper-tab-list "+(2==e.kj_type?"on":""),attrs:{"data-kj_type":"2"},on:{click:function(t){t=e.$handleEvent(t),e.swichNav(t)}}},[e._v("即将开始")]),i("v-uni-view",{class:"swiper-tab-list "+(3==e.kj_type?"on":""),attrs:{"data-kj_type":"3"},on:{click:function(t){t=e.$handleEvent(t),e.swichNav(t)}}},[e._v("全部活动")])],1),e.list.length>0?i("v-uni-view",e._l(e.list,function(t,a){return i("v-uni-view",[i("v-uni-view",{attrs:{"data-id":t.id,"data-goods_type":t.goods_type,"hover-class":"none"},on:{click:function(t){t=e.$handleEvent(t),e.url(t)}}},[i("v-uni-view",{staticClass:"index_info_li"},[i("v-uni-view",{staticClass:"index_info_pic",style:"background:url("+t.pic.img_cover+") no-repeat center center;background-size: cover;"},[i("v-uni-view",{staticClass:"index_info_count"},[i("v-uni-text",[e._v("剩余"+e._s(t.bargain_inventory)+"份")])],1)],1),i("v-uni-view",{staticClass:"index_info_tit"},[e._v(e._s(t.bargain_name))]),t.user.length>0?i("v-uni-view",{staticClass:"index_info_uface clear"},[e._l(t.user,function(t){return a<6?i("v-uni-view",[i("v-uni-view",{staticClass:"image",style:"background:url("+t.user_headimg+") no-repeat center center;background-size: cover;"})],1):e._e()}),t.user_num>5?i("v-uni-view",{staticClass:"image",staticStyle:{background:"url(http://ddfwz.sssvip.net/asmce/kanjia/index_more.jpg) no-repeat center center","background-size":"cover"}}):e._e(),i("v-uni-view",{staticClass:"user_no"},[e._v(e._s(t.user_num)+"人正在参加")])],2):e._e(),0==t.user.length?i("v-uni-view",{staticClass:"index_info_uface clear"},[i("v-uni-view",{staticClass:"user_no"},[e._v("优惠多多，赶快参与活动吧！")])],1):e._e(),i("v-uni-view",{staticClass:"index_price clear"},[i("v-uni-view",{staticClass:"price_left"},[i("v-uni-view",{staticClass:"price02"},[e._v("￥"),i("v-uni-text",[e._v(e._s(t.lowest_price))]),i("v-uni-text",{staticClass:"price01"},[e._v(" 原价￥"+e._s(t.original_price))])],1)],1),i("v-uni-view",{staticClass:"price_right"},[i("v-uni-view",{class:"buy_btn"+(1==t.goods_type?"_none":"")},[e._v(e._s(1==t.goods_type?"即将开始":"去砍价"))])],1),i("v-uni-view",{staticClass:"clear"})],1)],1)],1)],1)})):e._e(),e.loaded?i("v-uni-view",{staticClass:"fui-loading empty"},[i("v-uni-view",{staticClass:"text"},[e._v("没有更多了")])],1):e._e(),e.showtabbar?i("v-uni-view",[i("v-uni-view",{staticStyle:{height:"100rpx"}}),i("menu_list",{attrs:{menu:e.menu,tabbar_index:e.tabbar_index}})],1):e._e()],1):e._e()},n=[],s=i("ca7b"),r=i("b447"),o=getApp(),l=o.core,c=o.kjb,u={extends:s["a"],data:function(){return{indicatorDots:!0,autoplay:!0,interval:5e3,duration:1e3,page:1,kj_type:1,show:!1,loaded:!1,list:[],route:"kanjia_index",menu:o.tabBar,menu_show:!1,config:o.config,tabbar_index:0,showtabbar:!0,carousel:[],cate_info:[]}},components:{menu_list:r["a"]},onLoad:function(e){l.setting(),null!=e&&void 0!=e&&this.setData({tabbar_index:e.tabbar_index?e.tabbar_index:-1});var t=this;getApp().get_menu(function(e){t.menu=getApp().tabBar}),wx.setNavigationBarTitle({title:o.tabBar.name?decodeURIComponent(o.tabBar.name):"砍价首页"}),this.tabbar_index>=0&&this.setData({showtabbar:!0});t=this;var i=o.isInArray(o.tabBar.list,t.route);e.key&&1==e.key&&i&&t.setData({tabbar_index:i,showtabbar:!!o.tabBar.IsDiDis&&o.tabBar.IsDiDis}),t.getList(),c.BarIndex(function(e){t.setData(e)})},methods:{menu_url:function(e){l.menu_url(e,2)},getList:function(){var e=this,t=e.page,i=e.kj_type,a="";c.kj_list(a,i,t,e,function(t){e.setData(t)})},swichNav:function(e){var t=this,i=l.pdata(e);i.list=[],i.page=1,i.loaded=!1,t.setData(i),this.getList()},url:function(e){var t=l.pdata(e);2==t.goods_type&&wx.navigateTo({url:"/yb_shop/pages/kanjia/goods_info/index?id="+t.id})}},onPullDownRefresh:function(){this.setData({list:[],page:1,loaded:!1}),this.getList(),wx.stopPullDownRefresh()},onReachBottom:function(){this.loaded||this.getList()}},d=u,v=(i("deee"),i("2877")),_=Object(v["a"])(d,a,n,!1,null,"683e1e94",null);_.options.__file="index.vue";t["default"]=_.exports},"6c38":function(e,t,i){var a=i("eb95");"string"===typeof a&&(a=[[e.i,a,""]]),a.locals&&(e.exports=a.locals);var n=i("4f06").default;n("677ab670",a,!0,{sourceMap:!1,shadowMode:!1})},"851d":function(e,t,i){var a=i("26e6");"string"===typeof a&&(a=[[e.i,a,""]]),a.locals&&(e.exports=a.locals);var n=i("4f06").default;n("1f8d9abb",a,!0,{sourceMap:!1,shadowMode:!1})},b447:function(e,t,i){"use strict";var a=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",{staticClass:"fui-navbar",style:"z-index:99999;background:"+e.menu.bg_color+";"},e._l(e.menu.list,function(t,a){return i("v-uni-view",{class:"nav-item "+(e.route!=t.name||"active"),attrs:{"hover-class":"none","data-key":t.key?t.key:1,"data-appid":t.appid,"data-title":t.title,"data-url":t.url,"data-phone":t.phone,"data-lat":t.lat,"data-lng":t.lng},on:{click:function(t){t=e.$handleEvent(t),e.menu_url(t)}}},[i("v-uni-image",{staticClass:"icon",attrs:{src:a==e.tabbar_index?t.tabbar_select_icon:t.tabbar_icon}}),i("v-uni-view",{staticClass:"label",style:"color:"+(a==e.tabbar_index?e.menu.select_color:e.menu.text_color)},[e._v(e._s(t.name))])],1)}))},n=[],s=i("ca7b"),r={extends:s["a"],props:{menu:{},route:"",tabbar_index:{default:0}}},o=r,l=(i("e9f8"),i("2877")),c=Object(l["a"])(o,a,n,!1,null,"074ab1ac",null);c.options.__file="menu.vue";t["a"]=c.exports},ca7b:function(e,t,i){"use strict";var a,n,s=i("e143"),r={computed:{Vue:function(){return s["default"]}},methods:{setData:function(e){if(e)try{for(var t in e)this[t]=e[t]}catch(i){console.log(i)}},menu_url:function(e){getApp().core.menu_url(e,2)},formSubmit:function(e){var t={currentTarget:{dataset:{}}},i=e.detail.value;t.currentTarget.dataset=i,getApp().core.menu_url(t,1)},isLogin:function(){return!!getApp().getCache("userinfo").uid||(getApp().core.alert("请先登录",function(){wx.redirectTo({url:"/yb_shop/pages/wap/login"})}),!1)}}},o=r,l=i("2877"),c=Object(l["a"])(o,a,n,!1,null,null,null);c.options.__file="Base.vue";t["a"]=c.exports},deee:function(e,t,i){"use strict";var a=i("851d"),n=i.n(a);n.a},e9f8:function(e,t,i){"use strict";var a=i("6c38"),n=i.n(a);n.a},eb95:function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,"",""])}}]);