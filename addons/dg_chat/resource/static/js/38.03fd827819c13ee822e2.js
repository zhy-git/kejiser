webpackJsonp([38],{"/7+I":function(t,i,e){"use strict";Object.defineProperty(i,"__esModule",{value:!0});var s={data:function(){return{list:[1,4],pageLoad:!1}},methods:{loadMore:function(){var t=this;this.pageLoad=!0,setTimeout(function(){for(var i=t.list[t.list.length-1],e=1;e<=2;e++)t.list.push(i+e);t.pageLoad=!1},2500)}},mounted:function(){}},a={render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"bgfff"},[e("div",{staticClass:"main1 book   bgfff",staticStyle:{"margin-bottom":"50px"}},[e("div",{directives:[{name:"infinite-scroll",rawName:"v-infinite-scroll",value:t.loadMore,expression:"loadMore"}],staticClass:"list",staticStyle:{width:"100%",overflow:"hidden"},attrs:{"infinite-scroll-disabled":"loading","infinite-scroll-distance":"10"}},t._l(t.list,function(i,s){return e("div",{key:s,staticClass:"item flex",staticStyle:{padding:"10px 0","border-bottom":"1px solid #f2f2f2"}},[t._m(0,!0),t._v(" "),t._m(1,!0)])}))]),t._v(" "),t.pageLoad?e("div",{staticClass:"pageLoad"},[e("i",{staticClass:"el-icon-loading"}),t._v("\n    上划自动加载\n  ")]):t._e()])},staticRenderFns:[function(){var t=this.$createElement,i=this._self._c||t;return i("div",{staticClass:"flex1",staticStyle:{padding:"0 10px"}},[i("img",{staticStyle:{width:"100%",height:"auto"},attrs:{src:e("npRm")}})])},function(){var t=this.$createElement,i=this._self._c||t;return i("div",{staticClass:"flex2"},[i("div",{staticClass:"title",staticStyle:{color:"#1B1B1B","margin-top":"0"}},[this._v("别输在不会表达上+回话的技术")]),this._v(" "),i("div",{staticStyle:{"text-align":"right",padding:"5px 0","padding-bottom":"20px",color:"#1B1B1B","font-weight":"bold"}},[this._v("审核中")]),this._v(" "),i("div",{staticClass:"bottom",staticStyle:{position:"absolute",bottom:"10px",width:"100%"}},[i("div",{staticStyle:{"font-size":"12px",color:"#7D7D7D"}},[i("span",{staticStyle:{color:"#00D000"}},[this._v("￥38.00 ")]),this._v("| 55690人学习过\n            ")])])])}]};var o=e("C7Lr")(s,a,!1,function(t){e("Ox8G")},"data-v-74ea6f3e",null);i.default=o.exports},Ox8G:function(t,i){}});
//# sourceMappingURL=38.03fd827819c13ee822e2.js.map