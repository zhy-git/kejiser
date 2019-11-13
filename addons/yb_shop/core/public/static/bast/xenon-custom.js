function setup_sidebar_menu(){if(public_vars.$sidebarMenu.length){var a=public_vars.$sidebarMenu.find("li:has(> ul)"),b=public_vars.$sidebarMenu.hasClass("toggle-others");a.filter(".active").addClass("expanded"),a.each(function(a,c){var d=jQuery(c),e=d.children("a"),f=d.children("ul");d.addClass("has-sub"),e.on("click",function(a){a.preventDefault(),b&&sidebar_menu_close_items_siblings(d),d.hasClass("expanded")||d.hasClass("opened")?sidebar_menu_item_collapse(d,f):sidebar_menu_item_expand(d,f)})})}}function sidebar_menu_item_expand(a,b){var c,d,g,j,k;a.data("is-busy")||a.parent(".main-menu").length&&public_vars.$sidebarMenu.hasClass("collapsed")||(a.addClass("expanded").data("is-busy",!0),b.show(),c=b.children(),d=b.outerHeight(),jQuery(window).height(),a.outerHeight(),g=public_vars.$sidebarMenu.scrollTop(),a.position().top+g,public_vars.$sidebarMenu.hasClass("fit-in-viewport"),c.addClass("is-hidden"),b.height(0),TweenMax.to(b,sm_duration,{css:{height:d},onUpdate:ps_update,onComplete:function(){b.height("")}}),j=a.data("sub_i_1"),k=a.data("sub_i_2"),window.clearTimeout(j),j=setTimeout(function(){c.each(function(a,b){var c=jQuery(b);c.addClass("is-shown")});var b=sm_transition_delay*c.length,d=parseFloat(c.eq(0).css("transition-duration")),e=parseFloat(c.last().css("transition-delay"));d&&e&&(b=1e3*(d+e)),window.clearTimeout(k),k=setTimeout(function(){c.removeClass("is-hidden is-shown")},b),a.data("is-busy",!1)},0),a.data("sub_i_1",j),a.data("sub_i_2",k))}function sidebar_menu_item_collapse(a,b){if(!a.data("is-busy")){var c=b.children();a.removeClass("expanded").data("is-busy",!0),c.addClass("hidden-item"),TweenMax.to(b,sm_duration,{css:{height:0},onUpdate:ps_update,onComplete:function(){a.data("is-busy",!1).removeClass("opened"),b.attr("style","").hide(),c.removeClass("hidden-item"),a.find("li.expanded ul").attr("style","").hide().parent().removeClass("expanded"),ps_update(!0)}})}}function sidebar_menu_close_items_siblings(a){a.siblings().not(a).filter(".expanded, .opened").each(function(a,b){var c=jQuery(b),d=c.children("ul");sidebar_menu_item_collapse(c,d)})}function setup_horizontal_menu(){if(public_vars.$horizontalMenu.length){var a=public_vars.$horizontalMenu.find("li:has(> ul)"),b=public_vars.$horizontalMenu.hasClass("click-to-expand");b&&public_vars.$mainContent.add(public_vars.$sidebarMenu).on("click",function(){a.removeClass("hover")}),a.each(function(c,d){var e=jQuery(d),f=e.children("a"),g=e.children("ul"),h=e.parent().is(".navbar-nav");e.addClass("has-sub"),f.on("click",function(a){isxs()&&(a.preventDefault(),sidebar_menu_close_items_siblings(e),e.hasClass("expanded")||e.hasClass("opened")?sidebar_menu_item_collapse(e,g):sidebar_menu_item_expand(e,g))}),b?f.on("click",function(b){if(b.preventDefault(),!isxs())if(h)a.filter(function(a,b){return jQuery(b).parent().is(".navbar-nav")}).not(e).removeClass("hover"),e.toggleClass("hover");else{var c;0==e.hasClass("expanded")?(e.addClass("expanded"),g.addClass("is-visible"),c=g.outerHeight(),g.height(0),TweenLite.to(g,.15,{css:{height:c},ease:Sine.easeInOut,onComplete:function(){g.attr("style","")}}),e.siblings().find("> ul.is-visible").not(g).each(function(a,b){var d=jQuery(b);c=d.outerHeight(),d.removeClass("is-visible").height(c),d.parent().removeClass("expanded"),TweenLite.to(d,.15,{css:{height:0},onComplete:function(){d.attr("style","")}})})):(c=g.outerHeight(),e.removeClass("expanded"),g.removeClass("is-visible").height(c),TweenLite.to(g,.15,{css:{height:0},onComplete:function(){g.attr("style","")}}))}}):e.hoverIntent({over:function(){isxs()||(h?e.addClass("hover"):(g.addClass("is-visible"),sub_height=g.outerHeight(),g.height(0),TweenLite.to(g,.25,{css:{height:sub_height},ease:Sine.easeInOut,onComplete:function(){g.attr("style","")}})))},out:function(){isxs()||(h?e.removeClass("hover"):(sub_height=g.outerHeight(),e.removeClass("expanded"),g.removeClass("is-visible").height(sub_height),TweenLite.to(g,.25,{css:{height:0},onComplete:function(){g.attr("style","")}})))},timeout:200,interval:h?10:100})})}}function stickFooterToBottom(){if(public_vars.$mainFooter.add(public_vars.$mainContent).add(public_vars.$sidebarMenu).attr("style",""),isxs())return!1;if(public_vars.$mainFooter.hasClass("sticky")){var a=jQuery(window).height(),b=public_vars.$mainFooter.outerHeight(!0),c=public_vars.$mainFooter.position().top+b,e=public_vars.$horizontalNavbar.outerHeight();a>c-parseInt(public_vars.$mainFooter.css("marginTop"),10)&&public_vars.$mainFooter.css({marginTop:a-c-e})}}function ps_update(a){if(!isxs()&&jQuery.isFunction(jQuery.fn.perfectScrollbar)){if(public_vars.$sidebarMenu.hasClass("collapsed"))return;public_vars.$sidebarMenu.find(".sidebar-menu-inner").perfectScrollbar("update"),a&&(ps_destroy(),ps_init())}}function ps_init(){if(!isxs()&&jQuery.isFunction(jQuery.fn.perfectScrollbar)){if(public_vars.$sidebarMenu.hasClass("collapsed")||!public_vars.$sidebarMenu.hasClass("fixed"))return;public_vars.$sidebarMenu.find(".sidebar-menu-inner").perfectScrollbar({wheelSpeed:2,wheelPropagation:public_vars.wheelPropagation})}}function ps_destroy(){jQuery.isFunction(jQuery.fn.perfectScrollbar)&&public_vars.$sidebarMenu.find(".sidebar-menu-inner").perfectScrollbar("destroy")}function cbr_replace(){var a=jQuery('input[type="checkbox"].cbr, input[type="radio"].cbr').filter(":not(.cbr-done)"),b='<div class="cbr-replaced"><div class="cbr-input"></div><div class="cbr-state"><span></span></div></div>';a.each(function(a,c){var i,d=jQuery(c),e=d.is(":radio"),f=d.is(":checkbox"),g=d.is(":disabled"),h=["primary","secondary","success","danger","warning","info","purple","blue","red","gray","pink","yellow","orange","turquoise"];(e||f)&&(d.after(b),d.addClass("cbr-done"),i=d.next(),i.find(".cbr-input").append(d),e&&i.addClass("cbr-radio"),g&&i.addClass("cbr-disabled"),d.is(":checked")&&i.addClass("cbr-checked"),jQuery.each(h,function(a,b){var c="cbr-"+b;d.hasClass(c)&&(i.addClass(c),d.removeClass(c))}),i.on("click",function(a){e&&d.prop("checked")||i.parent().is("label")||0==jQuery(a.target).is(d)&&(d.prop("checked",!d.is(":checked")),d.trigger("change"))}),d.on("change",function(){i.removeClass("cbr-checked"),d.is(":checked")&&i.addClass("cbr-checked"),cbr_recheck()}))})}function cbr_recheck(){var a=jQuery("input.cbr-done");a.each(function(a,b){var c=jQuery(b),d=c.is(":radio"),f=(c.is(":checkbox"),c.is(":disabled")),g=c.closest(".cbr-replaced");f&&g.addClass("cbr-disabled"),d&&!c.prop("checked")&&g.hasClass("cbr-checked")&&g.removeClass("cbr-checked")})}function attrDefault(a,b,c){return"undefined"!=typeof a.data(b)?a.data(b):c}function callback_test(){alert("Callback function executed! No. of arguments: "+arguments.length+"\n\nSee console log for outputed of the arguments."),console.log(arguments)}function date(a,b){var d,c=this,f=["Sun","Mon","Tues","Wednes","Thurs","Fri","Satur","January","February","March","April","May","June","July","August","September","October","November","December"],g=/\\?(.?)/gi,h=function(a,b){return e[a]?e[a]():b},i=function(a,b){for(a=String(a);a.length<b;)a="0"+a;return a},e={d:function(){return i(e.j(),2)},D:function(){return e.l().slice(0,3)},j:function(){return d.getDate()},l:function(){return f[e.w()]+"day"},N:function(){return e.w()||7},S:function(){var a=e.j(),b=a%10;return 3>=b&&1==parseInt(a%100/10,10)&&(b=0),["st","nd","rd"][b-1]||"th"},w:function(){return d.getDay()},z:function(){var a=new Date(e.Y(),e.n()-1,e.j()),b=new Date(e.Y(),0,1);return Math.round((a-b)/864e5)},W:function(){var a=new Date(e.Y(),e.n()-1,e.j()-e.N()+3),b=new Date(a.getFullYear(),0,4);return i(1+Math.round((a-b)/864e5/7),2)},F:function(){return f[6+e.n()]},m:function(){return i(e.n(),2)},M:function(){return e.F().slice(0,3)},n:function(){return d.getMonth()+1},t:function(){return new Date(e.Y(),e.n(),0).getDate()},L:function(){var a=e.Y();return 0===a%4&0!==a%100|0===a%400},o:function(){var a=e.n(),b=e.W(),c=e.Y();return c+(12===a&&9>b?1:1===a&&b>9?-1:0)},Y:function(){return d.getFullYear()},y:function(){return e.Y().toString().slice(-2)},a:function(){return d.getHours()>11?"pm":"am"},A:function(){return e.a().toUpperCase()},B:function(){var a=3600*d.getUTCHours(),b=60*d.getUTCMinutes(),c=d.getUTCSeconds();return i(Math.floor((a+b+c+3600)/86.4)%1e3,3)},g:function(){return e.G()%12||12},G:function(){return d.getHours()},h:function(){return i(e.g(),2)},H:function(){return i(e.G(),2)},i:function(){return i(d.getMinutes(),2)},s:function(){return i(d.getSeconds(),2)},u:function(){return i(1e3*d.getMilliseconds(),6)},e:function(){throw"Not supported (see source code of date() for timezone on how to add support)"},I:function(){var a=new Date(e.Y(),0),b=Date.UTC(e.Y(),0),c=new Date(e.Y(),6),d=Date.UTC(e.Y(),6);return a-b!==c-d?1:0},O:function(){var a=d.getTimezoneOffset(),b=Math.abs(a);return(a>0?"-":"+")+i(100*Math.floor(b/60)+b%60,4)},P:function(){var a=e.O();return a.substr(0,3)+":"+a.substr(3,2)},T:function(){return"UTC"},Z:function(){return 60*-d.getTimezoneOffset()},c:function(){return"Y-m-d\\TH:i:sP".replace(g,h)},r:function(){return"D, d M Y H:i:s O".replace(g,h)},U:function(){return 0|d/1e3}};return this.date=function(a,b){return c=this,d=void 0===b?new Date:b instanceof Date?new Date(b):new Date(1e3*b),a.replace(g,h)},this.date(a,b)}var sm_duration,sm_transition_delay,public_vars=public_vars||{};!function(a,b){"use strict";a(document).ready(function(){var c,d,e,f;public_vars.$body=a("body"),public_vars.$pageContainer=public_vars.$body.find(".page-container"),public_vars.$chat=public_vars.$pageContainer.find("#chat"),public_vars.$sidebarMenu=public_vars.$pageContainer.find(".sidebar-menu"),public_vars.$mainMenu=public_vars.$sidebarMenu.find(".main-menu"),public_vars.$horizontalNavbar=public_vars.$body.find(".navbar.horizontal-menu"),public_vars.$horizontalMenu=public_vars.$horizontalNavbar.find(".navbar-nav"),public_vars.$mainContent=public_vars.$pageContainer.find(".main-content"),public_vars.$mainFooter=public_vars.$body.find("footer.main-footer"),public_vars.$userInfoMenuHor=public_vars.$body.find(".navbar.horizontal-menu"),public_vars.$userInfoMenu=public_vars.$body.find("nav.navbar.user-info-navbar"),public_vars.$settingsPane=public_vars.$body.find(".settings-pane"),public_vars.$settingsPaneIn=public_vars.$settingsPane.find(".settings-pane-inner"),public_vars.wheelPropagation=!0,public_vars.$pageLoadingOverlay=public_vars.$body.find(".page-loading-overlay"),public_vars.defaultColorsPalette=["#68b828","#7c38bc","#0e62c7","#fcd036","#4fcdfc","#00b19d","#ff6264","#f7aa47"],public_vars.$pageLoadingOverlay.length&&a(b).load(function(){public_vars.$pageLoadingOverlay.addClass("loaded")}),b.onerror=function(){public_vars.$pageLoadingOverlay.addClass("loaded")},setup_sidebar_menu(),setup_horizontal_menu(),public_vars.$mainFooter.hasClass("sticky")&&(stickFooterToBottom(),a(b).on("xenon.resized",stickFooterToBottom)),a.isFunction(a.fn.perfectScrollbar)&&(public_vars.$sidebarMenu.hasClass("fixed")&&ps_init(),a(".ps-scrollbar").each(function(b,c){var d=a(c);d.perfectScrollbar({wheelPropagation:!1})}),c=public_vars.$pageContainer.find("#chat .chat-inner"),c.parent().hasClass("fixed")&&c.css({maxHeight:a(b).height()}).perfectScrollbar(),a(".user-info-navbar .dropdown:has(.ps-scrollbar)").each(function(){var d=a(this).find(".ps-scrollbar");a(this).on("click",'[data-toggle="dropdown"]',function(a){a.preventDefault(),setTimeout(function(){d.perfectScrollbar("update")},1)})}),a("div.scrollable").each(function(b,c){var d=a(c),e=parseInt(attrDefault(d,"max-height",200),10);e=0>e?200:e,d.css({maxHeight:e}).perfectScrollbar({wheelPropagation:!0})})),d=a(".user-info-menu .search-form, .nav.navbar-right .search-form"),d.each(function(b,c){var d=a(c).find(".form-control");a(c).on("click",".btn",function(){return 0==d.val().trim().length?(jQuery(c).addClass("focused"),setTimeout(function(){d.focus()},100),!1):void 0}),d.on("blur",function(){jQuery(c).removeClass("focused")})}),public_vars.$mainFooter.hasClass("fixed")&&public_vars.$mainContent.css({paddingBottom:public_vars.$mainFooter.outerHeight(!0)}),a("body").on("click",'a[rel="go-top"]',function(c){c.preventDefault();var d={pos:a(b).scrollTop()};TweenLite.to(d,.3,{pos:0,ease:Power4.easeOut,onUpdate:function(){a(b).scrollTop(d.pos)}})}),public_vars.$userInfoMenu.length&&public_vars.$userInfoMenu.find(".user-info-menu > li").css({minHeight:public_vars.$userInfoMenu.outerHeight()-1}),a.isFunction(a.fn.autosize)&&a(".autosize, .autogrow").autosize(),cbr_replace(),a(".breadcrumb.auto-hidden").each(function(b,c){var d=a(c),e=d.find("li a"),g=(e.width(),0);e.each(function(b,c){var d=a(c);g=d.outerWidth(!0),d.addClass("collapsed").width(g),d.hover(function(){d.removeClass("collapsed")},function(){d.addClass("collapsed")})})}),a(b).on("keydown",function(b){27==b.keyCode&&public_vars.$body.hasClass("modal-open")&&a(".modal-open .modal:visible").modal("hide")}),a(".input-group.input-group-minimal:has(.form-control)").each(function(b,c){var d=a(c),e=d.find(".form-control");e.on("focus",function(){d.addClass("focused")}).on("blur",function(){d.removeClass("focused")})}),a(".input-group.spinner").each(function(b,c){var d=a(c),e=d.find('[data-type="decrement"]'),f=d.find('[data-type="increment"]'),g=d.find(".form-control"),h=attrDefault(d,"step",1),i=attrDefault(d,"min",0),j=attrDefault(d,"max",0),k=j>i;e.on("click",function(a){a.preventDefault();var b=new Number(g.val())-h;k&&i>=b&&(b=i),g.val(b)}),f.on("click",function(a){a.preventDefault();var b=new Number(g.val())+h;k&&b>=j&&(b=j),g.val(b)})}),a.isFunction(a.fn.select2)&&(a(".select2").each(function(b,c){var d=a(c),e={allowClear:attrDefault(d,"allowClear",!1)};d.select2(e),d.addClass("visible")}),a.isFunction(a.fn.niceScroll)&&a(".select2-results").niceScroll({cursorcolor:"#d4d4d4",cursorborder:"1px solid #ccc",railpadding:{right:3}})),a.isFunction(a.fn.selectBoxIt)&&a("select.selectboxit").each(function(b,c){var d=a(c),e={showFirstOption:attrDefault(d,"first-option",!0),"native":attrDefault(d,"native",!1),defaultText:attrDefault(d,"text","")};d.addClass("visible"),d.selectBoxIt(e)}),a.isFunction(a.fn.datepicker)&&a(".datepicker").each(function(b,c){var d=a(c),e={format:attrDefault(d,"format","mm/dd/yyyy"),startDate:attrDefault(d,"startDate",""),endDate:attrDefault(d,"endDate",""),daysOfWeekDisabled:attrDefault(d,"disabledDays",""),startView:attrDefault(d,"startView",0),rtl:rtl()},f=d.next(),g=d.prev();d.datepicker(e),f.is(".input-group-addon")&&f.has("a")&&f.on("click",function(a){a.preventDefault(),d.datepicker("show")}),g.is(".input-group-addon")&&g.has("a")&&g.on("click",function(a){a.preventDefault(),d.datepicker("show")})}),a.isFunction(a.fn.daterangepicker)&&a(".daterange").each(function(b,c){var d={Today:[moment(),moment()],Yesterday:[moment().subtract("days",1),moment().subtract("days",1)],"Last 7 Days":[moment().subtract("days",6),moment()],"Last 30 Days":[moment().subtract("days",29),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract("month",1).startOf("month"),moment().subtract("month",1).endOf("month")]},e=a(c),f={format:attrDefault(e,"format","MM/DD/YYYY"),timePicker:attrDefault(e,"timePicker",!1),timePickerIncrement:attrDefault(e,"timePickerIncrement",!1),separator:attrDefault(e,"separator"," - ")},g=attrDefault(e,"minDate",""),h=attrDefault(e,"maxDate",""),i=attrDefault(e,"startDate",""),j=attrDefault(e,"endDate","");e.hasClass("add-ranges")&&(f["ranges"]=d),g.length&&(f["minDate"]=g),h.length&&(f["maxDate"]=h),i.length&&(f["startDate"]=i),j.length&&(f["endDate"]=j),e.daterangepicker(f,function(a,b){var c=e.data("daterangepicker");e.is("[data-callback]")&&callback_test(a,b),e.hasClass("daterange-inline")&&e.find("span").html(a.format(c.format)+c.separator+b.format(c.format))}),"object"==typeof f["ranges"]&&e.data("daterangepicker").container.removeClass("show-calendar")}),a.isFunction(a.fn.timepicker)&&a(".timepicker").each(function(b,c){var d=a(c),e={template:attrDefault(d,"template",!1),showSeconds:attrDefault(d,"showSeconds",!1),defaultTime:attrDefault(d,"defaultTime","current"),showMeridian:attrDefault(d,"showMeridian",!0),minuteStep:attrDefault(d,"minuteStep",15),secondStep:attrDefault(d,"secondStep",15)},f=d.next(),g=d.prev();d.timepicker(e),f.is(".input-group-addon")&&f.has("a")&&f.on("click",function(a){a.preventDefault(),d.timepicker("showWidget")}),g.is(".input-group-addon")&&g.has("a")&&g.on("click",function(a){a.preventDefault(),d.timepicker("showWidget")})}),a.isFunction(a.fn.colorpicker)&&a(".colorpicker").each(function(b,c){var d=a(c),e={},f=d.next(),g=d.prev(),h=d.siblings(".input-group-addon").find(".color-preview");d.colorpicker(e),f.is(".input-group-addon")&&f.has("a")&&f.on("click",function(a){a.preventDefault(),d.colorpicker("show")}),g.is(".input-group-addon")&&g.has("a")&&g.on("click",function(a){a.preventDefault(),d.colorpicker("show")}),h.length&&(d.on("changeColor",function(a){h.css("background-color",a.color.toHex())}),d.val().length&&h.css("background-color",d.val()))}),a.isFunction(a.fn.validate)&&a("form.validate").each(function(b,c){var d=a(c),e={rules:{},messages:{},errorElement:"span",errorClass:"validate-has-error",highlight:function(b){a(b).closest(".form-group").addClass("validate-has-error")},unhighlight:function(b){a(b).closest(".form-group").removeClass("validate-has-error")},errorPlacement:function(a,b){b.closest(".has-switch").length?a.insertAfter(b.closest(".has-switch")):b.parent(".checkbox, .radio").length||b.parent(".input-group").length?a.insertAfter(b.parent()):a.insertAfter(b)}},f=d.find("[data-validate]");f.each(function(b,c){var i,k,l,j,d=a(c),f=d.attr("name"),g=attrDefault(d,"validate","").toString(),h=g.split(",");for(i in h)j=h[i],"undefined"==typeof e["rules"][f]&&(e["rules"][f]={},e["messages"][f]={}),-1!=a.inArray(j,["required","url","email","number","date","creditcard"])?(e["rules"][f][j]=!0,l=d.data("message-"+j),l&&(e["messages"][f][j]=l)):(k=j.match(/(\w+)\[(.*?)\]/i))&&-1!=a.inArray(k[1],["min","max","minlength","maxlength","equalTo"])&&(e["rules"][f][k[1]]=k[2],l=d.data("message-"+k[1]),l&&(e["messages"][f][k[1]]=l))}),d.validate(e)}),a.isFunction(a.fn.inputmask)&&a("[data-mask]").each(function(b,c){var i,d=a(c),e=d.data("mask").toString(),f={numericInput:attrDefault(d,"numeric",!1),radixPoint:attrDefault(d,"radixPoint",""),rightAlign:"right"==attrDefault(d,"numericAlign","left")},g=attrDefault(d,"placeholder",""),h=attrDefault(d,"isRegex","");switch(g.length&&(f[g]=g),e.toLowerCase()){case"phone":e="(999) 999-9999";break;case"currency":case"rcurrency":i=attrDefault(d,"sign","$"),e="999,999,999.99","rcurrency"==d.data("mask").toLowerCase()?e+=" "+i:e=i+" "+e,f.numericInput=!0,f.rightAlignNumerics=!1,f.radixPoint=".";break;case"email":e="Regex",f.regex="[a-zA-Z0-9._%-]+@[a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}";break;case"fdecimal":e="decimal",a.extend(f,{autoGroup:!0,groupSize:3,radixPoint:attrDefault(d,"rad","."),groupSeparator:attrDefault(d,"dec",",")})}h&&(f.regex=e,e="Regex"),d.inputmask(e,f)}),a.isFunction(a.fn.bootstrapWizard)&&a(".form-wizard").each(function(b,c){var d=a(c),e=d.find("> .tabs > li"),f=d.find(".progress-indicator"),g=d.find("> ul > li.active").index(),h=function(){if(d.hasClass("validate")){var e=d.valid();if(!e)return d.data("validator").focusInvalid(),!1}return!0};g>0&&(f.css({width:100*(g/e.length)+"%"}),e.removeClass("completed").slice(0,g).addClass("completed")),d.bootstrapWizard({tabClass:"",onTabShow:function(a,b,c){var d=100*(e.eq(c).position().left/e.parent().width());e.removeClass("completed").slice(0,c).addClass("completed"),f.css({width:d+"%"})},onNext:h,onTabClick:h}),d.data("bootstrapWizard").show(g),d.find(".pager a").on("click",function(a){a.preventDefault()})}),a.isFunction(a.fn.slider)&&a(".slider").each(function(b,c){var t,d=a(c),e=a('<span class="ui-label"></span>'),f=e.clone(),g=0!=attrDefault(d,"vertical",0)?"vertical":"horizontal",h=attrDefault(d,"prefix",""),i=attrDefault(d,"postfix",""),j=attrDefault(d,"fill",""),k=a(j),l=attrDefault(d,"step",1),m=attrDefault(d,"value",5),n=attrDefault(d,"min",0),o=attrDefault(d,"max",100),p=attrDefault(d,"min-val",10),q=attrDefault(d,"max-val",90),r=d.is("[data-min-val]")||d.is("[data-max-val]"),s=0;r?(d.slider({range:!0,orientation:g,min:n,max:o,values:[p,q],step:l,slide:function(a,b){var c=(h?h:"")+b.values[0]+(i?i:""),d=(h?h:"")+b.values[1]+(i?i:"");e.html(c),f.html(d),j&&k.val(c+","+d),s++},change:function(a,b){if(1==s){var c=(h?h:"")+b.values[0]+(i?i:""),d=(h?h:"")+b.values[1]+(i?i:"");e.html(c),f.html(d),j&&k.val(c+","+d)}s=0}}),t=d.find(".ui-slider-handle"),e.html((h?h:"")+p+(i?i:"")),t.first().append(e),f.html((h?h:"")+q+(i?i:"")),t.last().append(f)):(d.slider({range:attrDefault(d,"basic",0)?!1:"min",orientation:g,min:n,max:o,value:m,step:l,slide:function(a,b){var c=(h?h:"")+b.value+(i?i:"");e.html(c),j&&k.val(c),s++},change:function(a,b){if(1==s){var c=(h?h:"")+b.value+(i?i:"");e.html(c),j&&k.val(c)}s=0}}),t=d.find(".ui-slider-handle"),e.html((h?h:"")+m+(i?i:"")),t.html(e))}),a.isFunction(a.fn.knob)&&a(".knob").knob({change:function(){},release:function(){},cancel:function(){},draw:function(){if("tron"==this.$.data("skin")){var d,a=this.angle(this.cv),b=this.startAngle,c=this.startAngle,e=c+a,f=1;return this.g.lineWidth=this.lineWidth,this.o.cursor&&(c=e-.3)&&(e+=.3),this.o.displayPrevious&&(d=this.startAngle+this.angle(this.v),this.o.cursor&&(b=d-.3)&&(d+=.3),this.g.beginPath(),this.g.strokeStyle=this.pColor,this.g.arc(this.xy,this.xy,this.radius-this.lineWidth,b,d,!1),this.g.stroke()),this.g.beginPath(),this.g.strokeStyle=f?this.o.fgColor:this.fgColor,this.g.arc(this.xy,this.xy,this.radius-this.lineWidth,c,e,!1),this.g.stroke(),this.g.lineWidth=2,this.g.beginPath(),this.g.strokeStyle=this.o.fgColor,this.g.arc(this.xy,this.xy,this.radius-this.lineWidth+1+2*this.lineWidth/3,0,2*Math.PI,!1),this.g.stroke(),!1}}}),a.isFunction(a.fn.wysihtml5)&&a(".wysihtml5").each(function(b,c){var d=a(c),e=attrDefault(d,"stylesheet-url","");a(".wysihtml5").wysihtml5({size:"white",stylesheets:e.split(","),html:attrDefault(d,"html",!0),color:attrDefault(d,"colors",!0)})}),a.isFunction(a.fn.ckeditor)&&a(".ckeditor").ckeditor({contentsLangDirection:rtl()?"rtl":"ltr"}),"undefined"!=typeof Dropzone&&(Dropzone.autoDiscover=!1,a(".dropzone[action]").each(function(b,c){a(c).dropzone()})),a.isFunction(a.fn.tocify)&&a("#toc").length&&(a("#toc").tocify({context:".tocify-content",selectors:"h2,h3,h4,h5"}),e=a(".tocify"),f=scrollMonitor.create(e.get(0)),e.width(e.parent().width()),f.lock(),f.stateChange(function(){a(e.get(0)).toggleClass("fixed",this.isAboveViewport)})),a(".login-form .form-group:has(label)").each(function(b,c){var d=a(c),e=d.find("label"),f=d.find(".form-control");f.on("focus",function(){d.addClass("is-focused")}),f.on("keydown",function(){d.addClass("is-focused")}),f.on("blur",function(){d.removeClass("is-focused"),f.val().trim().length>0&&d.addClass("is-focused")}),e.on("click",function(){f.focus()}),f.val().trim().length>0&&d.addClass("is-focused")})});var d=0;a(b).resize(function(){clearTimeout(d),d=setTimeout(trigger_resizable,200)})}(jQuery,window),sm_duration=.2,sm_transition_delay=150;