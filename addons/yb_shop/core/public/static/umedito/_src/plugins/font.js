UM.plugins["font"]=function(){var a,b=this,c={forecolor:"forecolor",backcolor:"backcolor",fontsize:"fontsize",fontfamily:"fontname"},d={forecolor:"color",backcolor:"background-color",fontsize:"font-size",fontfamily:"font-family"},e={forecolor:"color",fontsize:"size",fontfamily:"face"};b.setOpt({fontfamily:[{name:"songti",val:"宋体,SimSun"},{name:"yahei",val:"微软雅黑,Microsoft YaHei"},{name:"kaiti",val:"楷体,楷体_GB2312, SimKai"},{name:"heiti",val:"黑体, SimHei"},{name:"lishu",val:"隶书, SimLi"},{name:"andaleMono",val:"andale mono"},{name:"arial",val:"arial, helvetica,sans-serif"},{name:"arialBlack",val:"arial black,avant garde"},{name:"comicSansMs",val:"comic sans ms"},{name:"impact",val:"impact,chicago"},{name:"timesNewRoman",val:"times new roman"},{name:"sans-serif",val:"sans-serif"}],fontsize:[12,14,16,18,24,32,48]}),b.addOutputRule(function(a){utils.each(a.getNodesByTagName("font"),function(a){var b,c,d;if("font"==a.tagName){b=[];for(c in a.attrs)switch(c){case"size":d=a.attrs[c],$.each({12:"1",14:"2",16:"3",18:"4",24:"5",32:"6",48:"7"},function(a,b){return b==d?(d=a,!1):void 0}),b.push("font-size:"+d+"px");break;case"color":b.push("color:"+a.attrs[c]);break;case"face":b.push("font-family:"+a.attrs[c]);break;case"style":b.push(a.attrs[c])}a.attrs={style:b.join(";")}}a.tagName="span","span"==a.parentNode.tagName&&1==a.parentNode.children.length&&($.each(a.attrs,function(b,c){a.parentNode.attrs[b]="style"==b?a.parentNode.attrs[b]+c:c}),a.parentNode.removeChild(a,!0))})});for(a in c)!function(a){b.commands[a]={execCommand:function(a,b){var e,f,g,h,i;return"transparent"!=b?(e=this.selection.getRange(),e.collapsed?(f=$("<span></span>").css(d[a],b)[0],e.insertNode(f).setStart(f,0).setCursor(),void 0):("fontsize"==a&&(b={12:"1",14:"2",16:"3",18:"4",24:"5",32:"6",48:"7"}[(b+"").replace(/px/,"")]),this.document.execCommand(c[a],!1,b),browser.gecko&&$.each(this.$body.find("a"),function(a,b){var c,d=b.parentNode;d.lastChild===d.firstChild&&/FONT|SPAN/.test(d.tagName)&&(c=d.cloneNode(!1),c.innerHTML=b.innerHTML,$(b).html("").append(c).insertBefore(d),$(d).remove())}),browser.ie||(g=this.selection.getNative().getRangeAt(0),h=g.commonAncestorContainer,e=this.selection.getRange(),i=e.createBookmark(!0),$(h).find("a").each(function(a,b){var c,d=b.parentNode;"FONT"==d.nodeName&&(c=d.cloneNode(!1),c.innerHTML=b.innerHTML,$(b).html("").append(c))}),e.moveToBookmark(i).select()),!0)):void 0},queryCommandValue:function(a){var c=b.selection.getStart(),f=$(c).css(d[a]);return void 0===f&&(f=$(c).attr(e[a])),f?utils.fixColor(a,f).replace(/px/,""):""},queryCommandState:function(a){return this.queryCommandValue(a)}}}(a)};