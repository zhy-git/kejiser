UM.registerUI("autofloat",function(){var c,d,a=this,b=a.getLang();a.setOpt({autoFloatEnabled:!0,topOffset:0}),c=a.options.autoFloatEnabled!==!1,d=a.options.topOffset,c&&a.ready(function(){function f(){return UM.ui?1:(alert(b.autofloatMsg),0)}function g(){var a=document.body.style;a.backgroundImage='url("about:blank")',a.backgroundAttachment="fixed"}function n(){if(!m){var b=domUtils.getXY(j),f=domUtils.getComputedStyle(j,"position"),g=domUtils.getComputedStyle(j,"left");j.style.width=j.offsetWidth+"px",j.style.zIndex=1*a.options.zIndex+1,j.parentNode.insertBefore(i,j),c||e&&browser.ie?("absolute"!=j.style.position&&(j.style.position="absolute"),j.style.top=(document.body.scrollTop||document.documentElement.scrollTop)-k+d+"px"):"fixed"!=j.style.position&&(j.style.position="fixed",j.style.top=d+"px",("absolute"==f||"relative"==f)&&parseFloat(g)&&(j.style.left=b.x+"px"))}}function o(){i.parentNode&&i.parentNode.removeChild(i),j.style.cssText=h}function p(){var b=l(a.container),c=a.options.toolbarTopOffset||0;b.top<0&&b.bottom-j.offsetHeight>c?n():o()}var h,j,k,c=browser.ie&&browser.version<=6,e=browser.quirks,i=document.createElement("div"),l=function(a){var b,d,e;try{b=a.getBoundingClientRect()}catch(c){b={left:0,top:0,height:0,width:0}}for(d={left:Math.round(b.left),top:Math.round(b.top),height:Math.round(b.bottom-b.top),width:Math.round(b.right-b.left)};(e=a.ownerDocument)!==document&&(a=domUtils.getWindow(e).frameElement);)b=a.getBoundingClientRect(),d.left+=b.left,d.top+=b.top;return d.bottom=d.top+d.height,d.right=d.left+d.width,d},m=!1,q=utils.defer(function(){p()},browser.ie?200:100,!0);a.addListener("destroy",function(){$(window).off("scroll resize",p),a.removeListener("keydown",q)}),f(a)&&(j=$(".edui-toolbar",a.container)[0],a.addListener("afteruiready",function(){setTimeout(function(){k=$(j).offset().top},100)}),h=j.style.cssText,i.style.height=j.offsetHeight+"px",c&&g(),$(window).on("scroll resize",p),a.addListener("keydown",q),a.addListener("resize",function(){o(),i.style.height=j.offsetHeight+"px",p()}),a.addListener("beforefullscreenchange",function(a,b){b&&(o(),m=b)}),a.addListener("fullscreenchanged",function(a,b){b||p(),m=b}),a.addListener("sourcemodechanged",function(){setTimeout(function(){p()},0)}),a.addListener("clearDoc",function(){setTimeout(function(){p()},0)}))})});