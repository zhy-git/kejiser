var utils=UM.utils={each:function(a,b,c){var d,e,f;if(null!=a)if(a.length===+a.length){for(d=0,e=a.length;e>d;d++)if(b.call(c,a[d],d,a)===!1)return!1}else for(f in a)if(a.hasOwnProperty(f)&&b.call(c,a[f],f,a)===!1)return!1},makeInstance:function(a){var b=new Function;return b.prototype=a,a=new b,b.prototype=null,a},extend:function(a,b,c){if(b)for(var d in b)c&&a.hasOwnProperty(d)||(a[d]=b[d]);return a},extend2:function(a){var c,d,e,b=arguments;for(c=1;c<b.length;c++){d=b[c];for(e in d)a.hasOwnProperty(e)||(a[e]=d[e])}return a},inherits:function(a,b){var c=a.prototype,d=utils.makeInstance(b.prototype);return utils.extend(d,c,!0),a.prototype=d,d.constructor=a},bind:function(a,b){return function(){return a.apply(b,arguments)}},defer:function(a,b,c){var d;return function(){c&&clearTimeout(d),d=setTimeout(a,b)}},indexOf:function(a,b,c){var d=-1;return c=this.isNumber(c)?c:0,this.each(a,function(a,e){return e>=c&&a===b?(d=e,!1):void 0}),d},removeItem:function(a,b){for(var c=0,d=a.length;d>c;c++)a[c]===b&&(a.splice(c,1),c--)},trim:function(a){return a.replace(/(^[ \t\n\r]+)|([ \t\n\r]+$)/g,"")},listToMap:function(a){if(!a)return{};a=utils.isArray(a)?a:a.split(",");for(var c,b=0,d={};c=a[b++];)d[c.toUpperCase()]=d[c]=1;return d},unhtml:function(a,b){return a?a.replace(b||/[&<">'](?:(amp|lt|quot|gt|#39|nbsp);)?/g,function(a,b){return b?a:{"<":"&lt;","&":"&amp;",'"':"&quot;",">":"&gt;","'":"&#39;"}[a]}):""},html:function(a){return a?a.replace(/&((g|l|quo)t|amp|#39);/g,function(a){return{"&lt;":"<","&amp;":"&","&quot;":'"',"&gt;":">","&#39;":"'"}[a]}):""},cssStyleToDomStyle:function(){var a=document.createElement("div").style,b={"float":void 0!=a.cssFloat?"cssFloat":void 0!=a.styleFloat?"styleFloat":"float"};return function(a){return b[a]||(b[a]=a.toLowerCase().replace(/-./g,function(a){return a.charAt(1).toUpperCase()}))}}(),loadFile:function(){function b(b,c){try{for(var e,d=0;e=a[d++];)if(e.doc===b&&e.url==(c.src||c.href))return e}catch(f){return null}}var a=[];return function(c,d,e){var g,h,i,f=b(c,d);if(f)return f.ready?e&&e():f.funs.push(e),void 0;if(a.push({doc:c,url:d.src||d.href,funs:[e]}),!c.body){g=[];for(h in d)"tag"!=h&&g.push(h+'="'+d[h]+'"');return c.write("<"+d.tag+" "+g.join(" ")+" ></"+d.tag+">"),void 0}if(!d.id||!c.getElementById(d.id)){i=c.createElement(d.tag),delete d.tag;for(h in d)i.setAttribute(h,d[h]);i.onload=i.onreadystatechange=function(){if(!this.readyState||/loaded|complete/.test(this.readyState)){if(f=b(c,d),f.funs.length>0){f.ready=1;for(var a;a=f.funs.pop();)a()}i.onload=i.onreadystatechange=null}},i.onerror=function(){throw Error("The load "+(d.href||d.src)+" fails,check the url settings of file umeditor.config.js ")},c.getElementsByTagName("head")[0].appendChild(i)}}}(),isEmptyObject:function(a){if(null==a)return!0;if(this.isArray(a)||this.isString(a))return 0===a.length;for(var b in a)if(a.hasOwnProperty(b))return!1;return!0},fixColor:function(a,b){var c,e,d;if(/color/i.test(a)&&/rgba?/.test(b)){if(c=b.split(","),c.length>3)return"";for(b="#",d=0;e=c[d++];)e=parseInt(e.replace(/[^\d]/gi,""),10).toString(16),b+=1==e.length?"0"+e:e;b=b.toUpperCase()}return b},clone:function(a,b){var c,d;b=b||{};for(d in a)a.hasOwnProperty(d)&&(c=a[d],"object"==typeof c?(b[d]=utils.isArray(c)?[]:{},utils.clone(a[d],b[d])):b[d]=c);return b},transUnitToPx:function(a){if(!/(pt|cm)/.test(a))return a;var b;switch(a.replace(/([\d.]+)(\w+)/,function(c,d,e){a=d,b=e}),b){case"cm":a=25*parseFloat(a);break;case"pt":a=Math.round(96*parseFloat(a)/72)}return a+(a?"px":"")},cssRule:browser.ie&&11!=browser.version?function(a,b,c){var d,e,f;if(c=c||document,d=c.indexList?c.indexList:c.indexList={},d[a])f=c.styleSheets[d[a]];else{if(void 0===b)return"";f=c.createStyleSheet("",e=c.styleSheets.length),d[a]=e}return void 0===b?f.cssText:(f.cssText=b||"",void 0)}:function(a,b,c){c=c||document;var e,d=c.getElementsByTagName("head")[0];if(!(e=c.getElementById(a))){if(void 0===b)return"";e=c.createElement("style"),e.id=a,d.appendChild(e)}return void 0===b?e.innerHTML:(""!==b?e.innerHTML=b:d.removeChild(e),void 0)},render:function(a,b){var c=etpl.compile(a);return c(b)}};utils.each(["String","Function","Array","Number","RegExp","Object"],function(a){UM.utils["is"+a]=function(b){return Object.prototype.toString.apply(b)=="[object "+a+"]"}});