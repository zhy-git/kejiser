webpackJsonp([42],{TVRa:function(t,a){},Uhny:function(t,a,e){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var i={render:function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("div",{staticClass:"wrap-g"},[e("mt-header",{staticStyle:{background:"#fff",color:"#1B1B1B"},attrs:{title:"我的上传"}},[e("router-link",{attrs:{slot:"left",to:-1},slot:"left"},[e("mt-button",{attrs:{icon:"back"}})],1)],1),t._v(" "),e("div",{staticClass:"flex"},t._l(t.list,function(a,i){return e("div",{staticClass:"flex1",class:t.activeName==a.path?"active":"",on:{click:function(e){t.handleClick(a)}}},[e("span",[t._v(t._s(a.txt))])])})),t._v(" "),e("div",{staticClass:"main"},[e("transition",{attrs:{name:"fade",mode:"in-out"}},[e("router-view")],1)],1)],1)},staticRenderFns:[]};var n=e("C7Lr")({data:function(){return{list:[{txt:"全部",path:"/uploadall"},{txt:"已上架",path:"/uploadacomplete"},{txt:"未上架",path:"/uploadasoon"},{txt:"审核中",path:"/uploadaexamine"}],activeName:"/home"}},methods:{handleClick:function(t){this.activeName=t.path,this.$router.push({path:t.path})}},mounted:function(){this.activeName=this.$route.path}},i,!1,function(t){e("TVRa")},"data-v-7164370e",null);a.default=n.exports}});
//# sourceMappingURL=42.2c65ee00d0be67f3076b.js.map