(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["yb_shop-pages-wap-login"],{"00ec":function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,"\n.name[data-v-3f1527b8]{text-align:right;margin-top:4px\n}",""])},"17be":function(t,e,i){var n=i("00ec");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var a=i("4f06").default;a("7335eff8",n,!0,{sourceMap:!1,shadowMode:!1})},"4b5f":function(t,e,i){"use strict";i.r(e);var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",[i("v-uni-form",{staticClass:"box",staticStyle:{width:"100%",height:"100%",position:"absolute","margin-top":"-1px",background:"url('http://ybimage.ybvips.com/asmce/ybshop/bjt.jpg') no-repeat"}},[i("v-uni-view",{staticStyle:{"text-align":"center","font-size":"25px","margin-top":"65px",color:"#fff"}},[t._v("\n\t\t用户登录\n\t")]),i("v-uni-view",{staticClass:"clear"}),i("v-uni-view",{staticStyle:{"margin-top":"60px",position:"relative",width:"320px",margin:"0 auto"}},[i("v-uni-view",{staticStyle:{"margin-top":"50px"}},[i("v-uni-view",{staticClass:"name",staticStyle:{float:"left",width:"0%","margin-left":"6%",color:"#666"}}),i("v-uni-view",{staticStyle:{"text-align":"center",margin:"0 auto",width:"320px"}},[i("v-uni-input",{staticStyle:{height:"49px","text-align":"center",width:"320px","border-radius":"24.5px",background:"rgba(255,255,255,0.2)"},attrs:{type:"text",placeholder:"请输入用户名"},model:{value:t.user_name,callback:function(e){t.user_name=e},expression:"user_name"}}),i("v-uni-image",{staticStyle:{width:"28px",height:"28px",position:"absolute","margin-top":"-40px",left:"1rem"},attrs:{src:"../../../static/ren.png",mode:""}})],1)],1)],1),i("v-uni-view",{staticClass:"clear"}),i("v-uni-view",{staticStyle:{"margin-top":"20px",position:"relative",width:"320px",margin:"0 auto"}},[i("v-uni-view",{staticStyle:{"margin-top":"20px"}},[i("v-uni-view",{staticClass:"name",staticStyle:{float:"left",width:"0%","margin-left":"6%",color:"#666"}}),i("v-uni-view",{staticStyle:{"text-align":"center",margin:"0 auto",width:"320px"}},[i("v-uni-input",{staticStyle:{height:"49px","text-align":"center",width:"320px","border-radius":"24.5px",background:"rgba(255,255,255,0.2)"},attrs:{type:"password"},model:{value:t.password,callback:function(e){t.password=e},expression:"password"}}),i("v-uni-image",{staticStyle:{width:"28px",height:"28px",position:"absolute","margin-top":"-40px",left:"1rem"},attrs:{src:"../../../static/suo.png",mode:""}})],1)],1)],1),i("v-uni-view",{staticClass:"clear"}),i("v-uni-view",{staticClass:"section",staticStyle:{"margin-top":"75px"}},[i("v-uni-button",{staticStyle:{height:"49px","text-align":"center",width:"320px","border-radius":"24.5px",background:"rgb(68,228,194)","font-size":"16px","line-height":"49px"},attrs:{type:"primary"},on:{click:function(e){e=t.$handleEvent(e),t.login(e)}}},[t._v(" 登   录")]),i("v-uni-button",{staticStyle:{height:"49px","text-align":"center",width:"320px","border-radius":"24.5px","font-size":"16px","line-height":"49px",border:"1px solid #44e4c2",background:"none",color:"#44e4c2","margin-top":"15px"},attrs:{type:"default"},on:{click:function(e){e=t.$handleEvent(e),t.register(e)}}},[t._v(" 注  册")])],1)],1)],1)},a=[],o=i("ca7b"),r=getApp(),s=r.core,p=(r.check,{extends:o["a"],data:function(){return{user_name:"",password:""}},onLoad:function(){var t=getApp().getCache("userinfo").uid;null!=t&&""!=t&&(console.log("uid not null !!!!!!!!!!!!!!!!"),wx.redirectTo({url:"/yb_shop/pages/index/index"}))},methods:{login:function(){""!=this.user_name?""!=this.password?s.post("Userwap/login",{user_name:this.user_name,password:this.password},function(t){if(0==t.code){var e=t.info,i={openid:"",uid:e.uid};getApp().setCache("userinfo",i),wx.redirectTo({url:"/yb_shop/pages/index/index"})}else s.alert(t.msg)}):s.alert("密码不能为空"):s.alert("用户名不能为空")},register:function(){wx.navigateTo({url:"/yb_shop/pages/wap/register"})}}}),c=p,l=(i("b77c"),i("2877")),u=Object(l["a"])(c,n,a,!1,null,"3f1527b8",null);u.options.__file="login.vue";e["default"]=u.exports},b77c:function(t,e,i){"use strict";var n=i("17be"),a=i.n(n);a.a},ca7b:function(t,e,i){"use strict";var n,a,o=i("e143"),r={computed:{Vue:function(){return o["default"]}},methods:{setData:function(t){if(t)try{for(var e in t)this[e]=t[e]}catch(i){console.log(i)}},menu_url:function(t){getApp().core.menu_url(t,2)},formSubmit:function(t){var e={currentTarget:{dataset:{}}},i=t.detail.value;e.currentTarget.dataset=i,getApp().core.menu_url(e,1)},isLogin:function(){return!!getApp().getCache("userinfo").uid||(getApp().core.alert("请先登录",function(){wx.redirectTo({url:"/yb_shop/pages/wap/login"})}),!1)}}},s=r,p=i("2877"),c=Object(p["a"])(s,n,a,!1,null,null,null);c.options.__file="Base.vue";e["a"]=c.exports}}]);