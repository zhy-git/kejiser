function getRegions(){var a=new Array;return $(".js-regions input[data-second-parent-index]:checked").length&&$(".js-regions input[data-second-parent-index]:checked").each(function(){a.push($(this).attr("data-province-name"))}),a.toString()}function setProvinceIdArray(){var a=new Array;$(".js-regions input[data-second-parent-index]:checked").length&&$(".js-regions input[data-second-parent-index]:checked").each(function(){$(this).is(":disabled")||$(this).attr("data-is-disabled")||a.push($(this).val())}),$("#hidden_province_id_array").val(a.toString())}function validation(){var a,e;return $("#shipping_fee_name").val()?parseInt($("#hidden_is_default").val())||$("#hidden_province_id_array").val().length?(a=/^\d+(.{0,1})\d{0,2}$/,e=!0,$(".input-info-table input[type='text']").each(function(){var b=a;return $(this).val().length&&(isNaN($(this).val())?e=!1:(b=a,b.test($(this).val())||(e=!1)),!e)?(layer.msg($(this).attr("data-msg"),{icon:2,time:1e3}),$(this).select(),!1):void 0}),e?!0:!1):(layer.msg("请选择地区",{icon:2,time:1e3}),!1):(layer.msg("请输入模板名称",{icon:2,time:1e3}),$("#shipping_fee_name").focus(),!1)}function getData(){var a={shipping_fee_id:parseInt($("#hidden_shipping_fee_id").val()),co_id:parseInt($("#hidden_co_id").val()),is_default:$("#hidden_is_default").val(),shipping_fee_name:$("#shipping_fee_name").val(),province_id_array:$("#hidden_province_id_array").val(),city_id_array:$("#hidden_city_id_array").val(),district_id_array:$("#hidden_district_id_array").val(),weight_is_use:$("#weight_is_use").is(":checked")?1:0,weight_snum:$("#weight_snum").val(),weight_sprice:$("#weight_sprice").val(),weight_xnum:$("#weight_xnum").val(),weight_xprice:$("#weight_xprice").val(),volume_is_use:$("#volume_is_use").is(":checked")?1:0,volume_snum:$("#volume_snum").val(),volume_sprice:$("#volume_sprice").val(),volume_xnum:$("#volume_xnum").val(),volume_xprice:$("#volume_xprice").val(),bynum_is_use:$("#bynum_is_use").is(":checked")?1:0,bynum_snum:$("#bynum_snum").val(),bynum_sprice:$("#bynum_sprice").val(),bynum_xnum:$("#bynum_xnum").val(),bynum_xprice:$("#bynum_xprice").val()};return JSON.stringify(a)}var snap=location.href,cuff=snap.split("addons"),host=cuff[0];$(function(){var b,c,d,a=($(window).height()-$("#select-region").outerHeight())/2;if($("#select-region").css({top:a}),$("#is_default").change(function(){$("#hidden_is_default").val($(this).val()),parseInt($(this).val())?($(".js-select-city").text("默认地区(全国)"),$(".js-select-city").attr("data-flag",1),$(".js-select-city").addClass("btn-gradient-default").removeClass("btn-gradient-blue"),$("#hidden_province_id_array").val(""),$("#hidden_city_id_array").val(""),$("#hidden_district_id_array").val(""),$(".js-region-info").text(""),$(".js-regions input[type='checkbox']").attr("checked",!1)):($(".js-select-city").addClass("btn-gradient-blue").removeClass("btn-gradient-default"),$(".js-select-city").text("指定地区城市"),$(".js-select-city").attr("data-flag",0))}),parseInt($("#hidden_shipping_fee_id").val())&&$("#hidden_province_id_array").val())for(b=$("#hidden_province_id_array").val().split(","),c=0;c<b.length;c++)b[c]&&$("input[data-second-parent-index][value='"+b[c]+"']").attr("checked",!0);$(".js-select-city").click(function(){parseInt($(this).attr("data-flag"))||($(".mask-layer").fadeIn(300),$("#select-region").fadeIn(300))}),$("input[data-first-index]").change(function(){var a,b,c;$(this).is(":disabled")||$(this).attr("data-is-disabled")||(a=$(this),b=a.attr("data-first-index"),c=a.is(":checked"),$("input[data-second-parent-index='"+b+"']").length&&$("input[data-second-parent-index='"+b+"']").each(function(){$(this).is(":disabled")||$(this).attr("data-is-disabled")||$(this).attr("checked",c)}))}),$("input[data-second-parent-index]").change(function(){var a=$(this),b=a.is(":checked");a.parent().find("div input[type='checkbox']").length&&a.parent().find("div input[type='checkbox']").each(function(){$(this).is(":disabled")||$(this).attr("data-is-disabled")||$(this).attr("checked",b)})}),$("#select-region .js-confirm").click(function(){setProvinceIdArray(),$(".js-region-info").html(getRegions()),$(".mask-layer").fadeOut(300),$("#select-region").fadeOut(300)}),$("#select-region .js-cancle").click(function(){$(".mask-layer").fadeOut(300),$("#select-region").fadeOut(300)}),$(".drop-down").click(function(){var a=$(this),b=a.next().is(":visible"),c=$(this).attr("data-level");$(".drop-down[data-level='"+c+"']").parent().parent().removeClass("open"),$(".drop-down[data-level='"+c+"']").next().hide(),b?(a.next().hide().removeAttr("data-open-children"),a.parent().parent().removeClass("open").removeAttr("data-open")):(a.parent().parent().addClass("open").attr("data-open",1),a.next().show().attr("data-open-children",1))}),$(".close_button").click(function(){$(this).parent().parent().css("display","none"),$(this).parent().parent().parent().removeClass("open")}),d=!1,$(".edit_button,.btn-common").click(function(){if(validation()){if(d)return;d=!0,$.ajax({url:host+"addons/yb_shop/core/index.php?s=/admin/express/freighttemplateedit",type:"post",data:{data:getData()},success:function(a){parseInt(a.code)?layer.msg(a.message,{icon:1,time:1e3},function(){window.parent.location.href=host+"addons/yb_shop/core/index.php?s=/admin/express/freightTemplateList&co_id="+$("#hidden_co_id").val()}):(layer.msg(a.message,{icon:2,time:1e3}),d=!1)}})}})});