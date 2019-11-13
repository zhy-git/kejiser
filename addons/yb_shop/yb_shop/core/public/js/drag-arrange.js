"use strict";!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a(jQuery)}(function(a){function f(a){var b=a.clone();return b.css({position:"absolute",width:a.width(),height:a.height(),"z-index":1e5}),b}function g(a,b,c){var k,l,m,n,o,p,q,r,d=a.offset(),e=a.width(),f=a.height(),g=d.left,h=d.left+e,i=d.top,j=d.top+f;for(r=0;r<c.length;r++)if(k=c.eq(r),k[0]!==b[0]&&(n=k.offset(),l=n.left+.5*k.width(),m=n.top+.5*k.height(),o=h>l&&l>g,p=j>m&&m>i,q=o&&p))return k[0]}function h(b,c,d){var f,h,e=g(b,c,d);e!==c[0]&&(f=d.index(e),h=d.index(c),h>f?a(e).before(c):a(e).after(c),i(d,h,f))}function i(a,b,c){var d=a.splice(b,1)[0];return a.splice(c,0,d)}function j(){return d+=1,".drag-arrange-"+d}var b="ontouchstart"in document.documentElement,c=5,d=0,e=function(){return b?{START:"touchstart",MOVE:"touchmove",END:"touchend"}:{START:"mousedown",MOVE:"mousemove",END:"mouseup"}}();a.fn.arrangeable=function(b){function s(b){var e,j,q;n&&(e=a(i),j=(b.clientX||b.originalEvent.touches[0].clientX)-k,q=(b.clientY||b.originalEvent.touches[0].clientY)-l,d?(b.stopPropagation(),g.css({left:o+j,top:p+q}),h(g,e,m)):(Math.abs(j)>c||Math.abs(q)>c)&&(g=f(e),o=i.offsetLeft-parseInt(e.css("margin-left"))-parseInt(e.css("padding-left")),p=i.offsetTop-parseInt(e.css("margin-top"))-parseInt(e.css("padding-top")),g.css({left:o,top:p}),e.parent().append(g),e.css("visibility","hidden"),d=!0))}function t(b){d&&(b.stopPropagation(),d=!1,g.remove(),i.style.visibility="visible",a(i).parent().trigger(r,[a(i)])),n=!1}function u(){m.each(function(){var c=b.dragSelector,d=a(this);c?d.off(e.START+q,c):d.off(e.START+q)}),a(document).off(e.MOVE+q).off(e.END+q),m.eq(0).data("drag-arrange-destroy",null),m=null,s=null,t=null}var g,i,k,l,m,o,p,q,r,d=!1,n=!1;return"string"==typeof b&&"destroy"===b?(this.eq(0).data("drag-arrange-destroy")&&this.eq(0).data("drag-arrange-destroy")(),this):(b=a.extend({dragEndEvent:"drag.end.arrangeable"},b),r=b["dragEndEvent"],m=this,q=j(),this.each(function(){function g(a){a.stopPropagation(),n=!0,k=a.clientX||a.originalEvent.touches[0].clientX,l=a.clientY||a.originalEvent.touches[0].clientY,i=d}var c=b.dragSelector,d=this,f=a(this);c?f.on(e.START+q,c,g):f.on(e.START+q,g)}),a(document).on(e.MOVE+q,s).on(e.END+q,t),this.eq(0).data("drag-arrange-destroy",u),void 0)}});