(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["yb_shop-pages-fenxiao-pages-add-share-index"],{"07c9":function(t,e,n){"use strict";var i=n("6e9d"),a=n.n(i);a.a},"3d92":function(t,e,n){"use strict";n.r(e);var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return t.show?n("v-uni-view",[0==t.user_info.is_distributor?n("v-uni-view",{staticClass:"step1"},[n("v-uni-form",{attrs:{reportSubmit:"true"},on:{submit:function(e){e=t.$handleEvent(e),t.formSubmit(e)}}},[n("v-uni-view",{staticClass:"info"},[n("v-uni-view",{staticClass:"info-label flex-row"},[n("v-uni-view",{staticClass:"flex-y-center"},[t._v("\n\t\t\t\t\t\t\t请填写申请信息\n\t\t\t\t\t\t")])],1),n("v-uni-view",{staticClass:"info-label info-content flex-row"},[n("v-uni-view",{staticClass:"info-left flex-y-center"},[t._v("邀请人")]),n("v-uni-view",{staticClass:"info-right flex-row"},[n("v-uni-view",{staticClass:"info-red flex-grow-0 flex-y-center"},[t._v(t._s(t.user_info.parent))]),n("v-uni-view",{staticClass:"info-gray flex-group-1 flex-y-center"},[t._v("(请核对)")])],1)],1),n("v-uni-view",{staticClass:"info-label info-content flex-row"},[n("v-uni-view",{staticClass:"info-left flex-y-center required"},[t._v("姓名")]),n("v-uni-view",{staticClass:"info-right flex-row flex-y-center"},[n("v-uni-input",{staticClass:"name-input",attrs:{name:"name",placeholder:"请填写真实姓名",value:t.form.name}})],1)],1),n("v-uni-view",{staticClass:"info-label info-content flex-row"},[n("v-uni-view",{staticClass:"info-left flex-y-center required"},[t._v("手机号码")]),n("v-uni-view",{staticClass:"info-right flex-row flex-y-center"},[n("v-uni-input",{staticClass:"mobile-input",attrs:{name:"mobile",placeholder:"请填写手机号码",type:"number",value:t.form.mobile}})],1)],1),n("v-uni-view",{staticClass:"info-label info-content flex-row"},[n("v-uni-view",{staticClass:"info-agree flex-row flex-y-center",on:{click:function(e){e=t.$handleEvent(e),t.agree1(e)}}},[n("v-uni-input",{attrs:{hidden:"true",name:"agree",value:t.agree}}),n("v-uni-image",{staticStyle:{width:"32rpx",height:"32rpx"},attrs:{src:t.img}}),n("v-uni-text",{staticStyle:{"margin-left":"10rpx"}},[t._v("我已经阅读并了解")]),n("v-uni-view",{staticStyle:{color:"#014c8c"},on:{click:function(e){e=t.$handleEvent(e),t.agreement(e)}}},[t._v("【"+t._s(t.share_setting.other[13])+"申请协议】")])],1)],1)],1),n("v-uni-view",{staticClass:"info-btn flex-row"},[n("v-uni-button",{staticClass:"flex-y-content info-btn-content",attrs:{formType:"submit"}},[t._v("申请成为"+t._s(t.share_setting.other[13]))])],1)],1),n("v-uni-view",{staticClass:"info"},[n("v-uni-view",{staticClass:"info-label flex-row"},[n("v-uni-view",{staticClass:"flex-y-center"},[t._v(t._s(t.share_setting.other[13])+"特权")])],1),t._e(),n("v-uni-view",{staticClass:"info-label info-height flex-row"},[n("v-uni-view",{staticClass:"flex-y-center"},[n("v-uni-image",{staticClass:"info-icon",attrs:{src:"../../images/img-share-money.png"}})],1),n("v-uni-view",{staticClass:"info-block"},[n("v-uni-view",{staticClass:"info-top bold"},[t._v("销售拿佣金")]),n("v-uni-view",{staticClass:"info-bottom"},[t._v("成为"+t._s(t.share_setting.other[13])+"后卖出商品，您可以获得佣金")])],1)],1),n("v-uni-view",{staticClass:"info-label info-height flex-row"},[n("v-uni-view",{staticClass:"flex-y-center info-block"},[t._v(t._s(t.share_setting.other[13])+"的商品销售统一由厂家直接收款、直接发货，并提供产品的售后服务，佣金由厂家统一设置。")])],1)],1)],1):n("v-uni-view",{staticClass:"step2"},[n("v-uni-view",{staticClass:"info"},[n("v-uni-view",{staticClass:"info-title"},[n("v-uni-image",{staticClass:"info-images",attrs:{src:"../../images/img-share-info.png"}})],1),n("v-uni-view",{staticClass:"info-content"},[t._v("谢谢您的支持，请等待审核！")]),n("v-uni-view",{staticClass:"flex-row info-btn1"},[n("v-uni-navigator",{staticClass:"flex-y-content btn",attrs:{openType:"redirect",url:"/yb_shop/pages/index/index"}},[t._v("去首页逛逛")])],1)],1)],1)],1):t._e()},a=[],o=n("ca7b"),s=getApp(),r=s.core,f=!1,l={extends:o["a"],data:function(){return{form:{name:"",mobile:""},show:!0,img:"../../images/img-share-un.png",agree:0,user_info:{is_distributor:0,parent:""},share_setting:{}}},onLoad:function(t){var e=this;r.ReName(t.title),e.setData({share_setting:s.getCache("shareSetting")}),e.getInfo()},methods:{getInfo:function(){var t=this;r.get("Distribe/userinfo",{uid:s.getCache("userinfo").uid},function(e){0==e.code?t.setData({user_info:e.info,show:!0}):r.alert(e.msg,function(){r.jump("",5)})},!0)},formSubmit:function(t){if(!f){var e=this;if(e.form=t.detail.value,null!=e.form.name&&""!=e.form.name)if(null!=e.form.mobile&&""!=e.form.mobile){var n=t.detail.value;f=!0,n.form_id=t.detail.formId,0!=e.agree?(console.log(e.agree),r.loading("正在提交"),n.user_id=s.getCache("userinfo").uid,r.get("Distribe/join",n,function(t){r.hideLoading(),f=!1,0==t.code?(r.success("申请成功"),1==t.share_condition?setTimeout(function(){e.getInfo()},1e3):r.jump("../index/index",2)):r.alert(t.msg,function(){e.getInfo()})})):r.warning("请先阅读并确认分销申请协议！！")}else r.warning("请填写联系方式！");else r.warning("请填写姓名！")}},agree1:function(){var t=this,e=t.agree;0==e?(e=1,t.setData({img:"../../images/img-share-agree.png",agree:e})):1==e&&(e=0,t.setData({img:"../../images/img-share-un.png",agree:e}))}},onPullDownRefresh:function(){},onReachBottom:function(){},agreement:function(){var t=this;wx.showModal({title:"分销协议",content:t.share_setting.agree,showCancel:!1,confirmText:"我已阅读",confirmColor:"#ff4544",success:function(t){t.confirm&&console.log("用户点击确定")}})}},c=l,u=(n("07c9"),n("2877")),v=Object(u["a"])(c,i,a,!1,null,"43b05879",null);v.options.__file="index.vue";e["default"]=v.exports},"6e9d":function(t,e,n){var i=n("a6d0");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var a=n("4f06").default;a("02ac0157",i,!0,{sourceMap:!1,shadowMode:!1})},a6d0:function(t,e,n){e=t.exports=n("2350")(!1),e.push([t.i,'\n.info-bg[data-v-43b05879]{background-color:#f7f7f7;margin-bottom:%?20?%\n}\n.info-bg[data-v-43b05879],.info-bg .bg[data-v-43b05879]{width:100%;height:%?300?%\n}\n.step1 .info[data-v-43b05879]{background-color:#fff;border-top:%?1?% #e3e3e3 solid;padding:0 %?24?%\n}\n.info .info-label[data-v-43b05879],.step1 .info[data-v-43b05879]{width:100%;border-bottom:%?1?% #e3e3e3 solid\n}\n.info .info-label[data-v-43b05879]{height:%?100?%;color:#353535\n}\n.info .info-label[data-v-43b05879]:last-child{border-bottom:none\n}\n.info .info-label .info-red[data-v-43b05879]{color:#ff4544\n}\n.info .info-label .info-gray[data-v-43b05879]{color:#666\n}\n.info .info-label.info-content[data-v-43b05879]{height:%?100?%\n}\n.info-label .info-left[data-v-43b05879]{width:%?176?%\n}\n.info-label .info-left.required[data-v-43b05879]:after{content:"*";color:#ff4544\n}\n.info-label .info-agree[data-v-43b05879]{font-size:10pt\n}\n.info-btn[data-v-43b05879]{padding:%?24?%;background-color:#f7f7f7;width:100%\n}\n.info-btn .info-btn-content[data-v-43b05879]{width:100%;background-color:#ff4544;color:#fff;font-weight:700;height:%?100?%;line-height:%?100?%\n}\n.info-label .info-icon[data-v-43b05879]{width:%?60?%;height:%?60?%;margin-right:%?24?%\n}\n.info .bold[data-v-43b05879]{font-weight:700\n}\n.info .info-label.info-height[data-v-43b05879]{height:auto\n}\n.info .info-label .info-block[data-v-43b05879]{padding:%?24?% 0\n}\n.info-block .info-top[data-v-43b05879]{margin-bottom:%?16?%\n}\n.info-block .info-bottom[data-v-43b05879]{font-size:9pt\n}\n.step2 .info[data-v-43b05879]{padding:%?48?% %?24?%;text-align:center\n}\n.step2 .info .info-title[data-v-43b05879]{width:100%;padding:%?40?% 0\n}\n.info-title .info-images[data-v-43b05879]{width:%?80?%;height:%?80?%\n}\n.step2 .info-btn1[data-v-43b05879]{margin-top:%?88?%;padding:0 %?24?%;width:100%\n}\n.step2 .info-btn1 .btn[data-v-43b05879]{width:100%;background-color:#ff4544;color:#fff;font-weight:700;height:%?100?%;line-height:%?100?%;border-radius:%?10?%\n}',""])},ca7b:function(t,e,n){"use strict";var i,a,o=n("e143"),s={computed:{Vue:function(){return o["default"]}},methods:{setData:function(t){if(t)try{for(var e in t)this[e]=t[e]}catch(n){console.log(n)}},menu_url:function(t){getApp().core.menu_url(t,2)},formSubmit:function(t){var e={currentTarget:{dataset:{}}},n=t.detail.value;e.currentTarget.dataset=n,getApp().core.menu_url(e,1)},isLogin:function(){return!!getApp().getCache("userinfo").uid||(getApp().core.alert("请先登录",function(){wx.redirectTo({url:"/yb_shop/pages/wap/login"})}),!1)}}},r=s,f=n("2877"),l=Object(f["a"])(r,i,a,!1,null,null,null);l.options.__file="Base.vue";e["a"]=l.exports}}]);