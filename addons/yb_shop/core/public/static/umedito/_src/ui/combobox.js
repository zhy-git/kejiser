!function(){var a="combobox",b="edui-combobox-item",c="edui-combobox-item-hover",d="edui-combobox-checked-icon",e="edui-combobox-item-label";UM.ui.define(a,function(){return{tpl:'<ul class="dropdown-menu edui-combobox-menu<%if: ${comboboxName} !==\'\'%> edui-combobox-${comboboxName}<%/if%>" unselectable="on" onmousedown="return false" role="menu" aria-labelledby="dropdownMenu"><%if: ${autoRecord} %><%for : ${recordStack} as ${recordItem}, ${index}%><%var : style = ${itemStyles}[${recordItem}]%><%var : record = ${items}[${recordItem}]%><li class="${itemClassName}<%if: ${selected} == ${recordItem}%> edui-combobox-checked<%/if%>" data-item-index="${recordItem}" unselectable="on" onmousedown="return false"><span class="edui-combobox-icon" unselectable="on" onmousedown="return false"></span><label class="${labelClassName}" style="${style}" unselectable="on" onmousedown="return false">${record}</label></li><%/for%><%if: ${index} %><li class="edui-combobox-item-separator"></li><%/if%><%/if%><%for: ${items} as ${item}, ${itemIndex}%><%var : labelStyle = ${itemStyles}[${itemIndex}]%><li class="${itemClassName}<%if: ${selected} == ${item} %> edui-combobox-checked<%/if%> edui-combobox-item-${itemIndex}" data-item-index="${itemIndex}" unselectable="on" onmousedown="return false"><span class="edui-combobox-icon" unselectable="on" onmousedown="return false"></span><label class="${labelClassName}" style="${labelStyle}" unselectable="on" onmousedown="return false">${item}</label></li><%/for%></ul>',defaultOpt:{recordStack:[],items:[],value:[],comboboxName:"",selected:"",autoRecord:!0,recordCount:5},init:function(a){var c=this;$.extend(c._optionAdaptation(a),c._createItemMapping(a.recordStack,a.items),{itemClassName:b,iconClass:d,labelClassName:e}),this._transStack(a),c.root($(UM.utils.render(c.tpl,a))),this.data("options",a).initEvent()},initEvent:function(){var a=this;a.initSelectItem(),this.initItemActive()},initSelectItem:function(){var a=this,c="."+e;a.root().delegate("."+b,"click",function(){var b=$(this),d=b.attr("data-item-index");return a.trigger("comboboxselect",{index:d,label:b.find(c).text(),value:a.data("options").value[d]}).select(d),a.hide(),!1})},initItemActive:function(){var a={mouseenter:"addClass",mouseleave:"removeClass"};$.IE6&&this.root().delegate("."+b,"mouseenter mouseleave",function(b){$(this)[a[b.type]](c)}).one("afterhide",function(){})},select:function(a){var b=this.data("options").itemCount,c=this.data("options").autowidthitem;return c&&!c.length&&(c=this.data("options").items),0==b?null:(0>a?a=b+a%b:a>=b&&(a=b-1),this.trigger("changebefore",c[a]),this._update(a),this.trigger("changeafter",c[a]),null)},selectItemByLabel:function(a){var b=this.data("options").itemMapping,c=this,d=null;!$.isArray(a)&&(a=[a]),$.each(a,function(a,e){return d=b[e],void 0!==d?(c.select(d),!1):void 0})},_transStack:function(a){var b=[],c=-1,d=-1;$.each(a.recordStack,function(e,f){c=a.itemMapping[f],$.isNumeric(c)&&(b.push(c),f==a.selected&&(d=c))}),a.recordStack=b,a.selected=d,b=null},_optionAdaptation:function(a){if(!("itemStyles"in a)){a.itemStyles=[];for(var b=0,c=a.items.length;c>b;b++)a.itemStyles.push("")}return a.autowidthitem=a.autowidthitem||a.items,a.itemCount=a.items.length,a},_createItemMapping:function(a,b){var c={},d={recordStack:[],mapping:{}};return $.each(b,function(a,b){c[b]=a}),d.itemMapping=c,$.each(a,function(a,b){void 0!==c[b]&&(d.recordStack.push(c[b]),d.mapping[b]=c[b])}),d},_update:function(a){var b=this.data("options"),c=[],d=null;$.each(b.recordStack,function(b,d){d!=a&&c.push(+d)}),c.unshift(+a),c.length>b.recordCount&&(c.length=b.recordCount),b.recordStack=c,b.selected=+a,d=$(UM.utils.render(this.tpl,b)),this.root().html(d.html()),d=null,c=null}}}(),"menu")}();