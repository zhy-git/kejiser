webpackJsonp([75],{AI8N:function(t,e){},brMl:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"wrap-g"},[a("mt-header",{staticStyle:{background:"#fff",color:"#1B1B1B"},attrs:{title:"我的收藏"}},[a("router-link",{attrs:{slot:"left",to:"/my"},slot:"left"},[a("mt-button",{attrs:{icon:"back"}})],1)],1),t._v(" "),a("div",{staticClass:"flex"},t._l(t.list,function(e,i){return a("div",{staticClass:"flex1",class:t.activeName==e.path?"active":"",on:{click:function(a){t.handleClick(e)}}},[a("span",[t._v(t._s(e.txt))])])})),t._v(" "),a("div",{staticClass:"main"},[a("transition",{attrs:{name:"fade",mode:"in-out"}},[a("router-view")],1)],1)],1)},staticRenderFns:[]};var n=a("C7Lr")({data:function(){return{list:[{txt:"视频",path:"/videocollection"},{txt:"语音",path:"/voicecollection"},{txt:"直播",path:"/livecollection"}],activeName:"/videocollection"}},methods:{handleClick:function(t){this.activeName=t.path,this.$router.push({path:t.path})}},mounted:function(){this.activeName=this.$route.path}},i,!1,function(t){a("AI8N")},"data-v-05dfcbec",null);e.default=n.exports}});
//# sourceMappingURL=75.b45ca5a0aafeaf1d7f3e.js.map