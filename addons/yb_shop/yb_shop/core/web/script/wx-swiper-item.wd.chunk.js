webpackJsonp([5],{304:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=!function(){var t=1,e=null,i=[],n=function(n,s){var r=t++;i.push({id:r,self:n,func:s,frames:2});var a=function t(){e=null;for(var n=0;n<i.length;n++){var s=i[n];--s.frames||(s.func.call(s.self),i.splice(n--,1))}e=i.length?requestAnimationFrame(t):null};return e||(e=requestAnimationFrame(a)),r},s=function(t){for(var e=0;e<i.length;e++)if(i[e].id===t)return void i.splice(e,1)};window.exparser.registerElement({is:"wx-swiper-item",template:"\n    <slot></slot>\n  ",properties:{},listeners:{"this.wxSwiperItemChanged":"_invalidChild"},behaviors:["wx-base"],_invalidChild:function(t){if(t.target!==this)return!1},_setDomStyle:function(){var t=this.$$;t.style.position="absolute",t.style.width="100%",t.style.height="100%"},attached:function(){this._setDomStyle(),this._pendingTimeoutId=0,this._pendingTransform="",this._relatedSwiper=null,this.triggerEvent("wxSwiperItemChanged",void 0,{bubbles:!0})},detached:function(){this._clearTransform(),this._relatedSwiper&&(this._relatedSwiper.triggerEvent("wxSwiperItemChanged"),this._relatedSwiper=null)},_setTransform:function(t,e,i){i?(this.$$.style.transitionDuration="0ms",this.$$.style["-webkit-transform"]=i,this.$$.style.transform=i,this._pendingTransform=e,this._pendingTimeoutId=n(this,function(){this.$$.style.transitionDuration=t,this.$$.style["-webkit-transform"]=e,this.$$.style.transform=e})):(this._clearTransform(),this.$$.style.transitionDuration=t,this.$$.style["-webkit-transform"]=e,this.$$.style.transform=e)},_clearTransform:function(){this.$$.style.transitionDuration="0ms",this._pendingTimeoutId&&(this.$$.style["-webkit-transform"]=this._pendingTransform,this.$$.style.transform=this._pendingTransform,s(this._pendingTimeoutId),this._pendingTimeoutId=0)}})}()}});