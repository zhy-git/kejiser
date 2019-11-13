var host = UM_SITE_ROOT.replace("addons/yb_shop/core/index.php?s=/", "");
var form_head_data = {};
function click_tab(obj,form_type,tab_type) {
    $(obj).siblings().removeClass('active').css('backgroundColor','#fff').children('a').css('color','#479EFF');
    $(obj).addClass('active').css('backgroundColor','#479EFF').children('a').css('color','#fff');
    $("."+form_type).each(function(){
       var tab_type_val= $(this).data('type');
       if(tab_type_val==tab_type){
           $(this).show();
       }else{
           $(this).hide();
       }
    });
}
function click_form_head() {
    var all_data = bannerVM.all_data;
    var this_index = -1;
    var new_item = {};
    for (var i = 0, len = all_data.length; i < len; i++) {
        var data = all_data[i];
        if (data['type'] == 'form_head') {
            this_index = i;
            new_item = data;
            break;
        }
    }
    $("#form_head").css("display", 'block').siblings().css("display", 'none');
    if (this_index == -1) {
        bannerVM.this_index = bannerVM.all_data.length;
        new_item['bg_type'] = 1;
        new_item['bg_color'] = "#f5f5f5";
        new_item['bg_pic'] = host + "addons/yb_shop/core/public/menu/images/Tpj_3.png";
        new_item['bg_radian'] = 0;
        new_item['tb_margin'] = 0;
        new_item['rl_margin'] = 0;
        new_item['type'] = "form_head";
        new_item['module'] = "head";
        new_item['opacity'] = "1";
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
    } else {
        bannerVM.this_index = this_index;
        bannerVM.now_index = this_index;
    }
    if (new_item['bg_type'] == 1) {
        //背景颜色
        $("#this_form_bg_type1").prop("checked", "checked");
        $("#this_form_bg_color_div").show();
        $("#this_form_bg_pic_div").hide();
        $("#this_form_bg_color").val(new_item['bg_color']);
    } else {
        //背景图片
        $("#this_form_bg_type2").prop("checked", "checked");
        $("#this_form_bg_color_div").hide();
        $("#this_form_bg_pic_div").show();
        $("#this_form_bg_pic").attr('src', new_item['bg_pic']);
    }
    //背景圆角
    $("#this_form_bg_radian").val(new_item['bg_radian']);
    $("#this_form_bg_radian_span").text(new_item['bg_radian']);
//顶部外边距
    $("#this_form_tb_margin").val(new_item['tb_margin']);
    $("#this_form_tb_margin_span").text(new_item['tb_margin']);
//左右外边距
    $("#this_form_rl_margin").val(new_item['rl_margin']);
    $("#this_form_rl_margin_span").text(new_item['rl_margin']);
    //组件透明度
    $("#this_form_opacity").val(new_item['opacity'] * 100);
    $("#this_form_opacity_span").text(new_item['opacity'] * 100);
    form_head_data = new_item;
    form_style();
}

//页面背景
$("input[name='this_form_bg_type']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['bg_type'] = this.value;
    $(this).prop("checked", "checked");
    if (this.value == 1) {
        $("#this_form_bg_color_div").show();
        $("#this_form_bg_pic_div").hide();
        $("#this_form_bg_color").val(bannerVM.all_data[bannerVM.now_index]['bg_color']);
    } else {
        $("#this_form_bg_color_div").hide();
        $("#this_form_bg_pic_div").show();
        $("#this_form_bg_pic").attr('src', bannerVM.all_data[bannerVM.now_index]['bg_pic']);
    }
    form_style();
})

//背景颜色
function this_form_bg_color(color) {
    bannerVM.all_data[bannerVM.now_index]['bg_color'] = color;
    form_style();
}

//选中图片
function select_img(index, type) {
    art.dialog.open((host + '/addons/yb_shop/core/index.php?s=/admin/images/dialogalbumlist&this_id=' + index + "&type=" + type), {
        lock: true,
        title: "我的图片",
        width: 900,
        height: 620,
        drag: false,
        background: "#000000",
        scrollbar: false
    }, true);
}

function zhu_images(id_arr, src_arr) {
    bannerVM.all_data[bannerVM.now_index]['bg_pic'] = src_arr;
    $("#this_form_bg_pic").attr('src', src_arr);
    form_style();
}

//背景圆角
function this_form_bg_radian() {
    var this_form_bg_radian = $('#this_form_bg_radian').val();
    $("#this_form_bg_radian_span").text(this_form_bg_radian);
    bannerVM.all_data[bannerVM.now_index]['bg_radian'] = this_form_bg_radian;
    form_style();
}

//顶部外边距

function this_form_tb_margin() {
    var this_form_tb_margin = $('#this_form_tb_margin').val();
    $("#this_form_tb_margin_span").text(this_form_tb_margin);
    bannerVM.all_data[bannerVM.now_index]['tb_margin'] = this_form_tb_margin;
    form_style();
}

//左右外边距
function this_form_rl_margin() {
    var this_form_rl_margin = $('#this_form_rl_margin').val();
    $("#this_form_rl_margin_span").text(this_form_rl_margin);
    bannerVM.all_data[bannerVM.now_index]['rl_margin'] = this_form_rl_margin;
    form_style();
}

//组件透明度
function this_form_opacity() {
    var this_form_opacity = $('#this_form_opacity').val();
    $("#this_form_opacity_span").text(this_form_opacity);
    //bannerVM.all_data[bannerVM.now_index]['opacity'] = this_form_opacity/100;
    form_head_data['opacity'] = this_form_opacity / 100;
    var all_data = bannerVM.all_data;
    for (var i = 0, len = all_data.length; i < len; i++) {
        bannerVM.all_data[i]['opacity'] = this_form_opacity / 100;
    }
}

function form_style() {
    var form_head = bannerVM.all_data[bannerVM.now_index];
    if (form_head['bg_type'] == 1) {
        //背景颜色
        $("#mCSB_1_container").css("background", form_head['bg_color']);
    } else {
        //背景图片
        $("#mCSB_1_container").css("background", "url(" + form_head['bg_pic'] + ")");
        $("#mCSB_1_container").css("background-size", "100% 100%");
    }
    $(".activeMod").css("border-radius", form_head['bg_radian'] + '%');
    $(".activeMod").css("margin-top", form_head['tb_margin'] + 'px');
    $(".activeMod").css("padding-left", form_head['rl_margin'] + 'px');
    $(".activeMod").css("padding-right", form_head['rl_margin'] + 'px');
}
//标题公共样式方法---开始
//字体
function id_this_title_font_family(title_font_family) {
    bannerVM.all_data[bannerVM.now_index]['title_font_family'] = title_font_family;
}

//字号
function id_this_title_font_size(title_font_size) {
    bannerVM.all_data[bannerVM.now_index]['title_font_size'] = title_font_size;
}

//颜色
function id_this_title_font_color(title_font_color) {
    bannerVM.all_data[bannerVM.now_index]['title_font_color'] = title_font_color;
}

//行高
function id_this_title_line_height(id) {
    var id_this_title_line_height = $('#' + id).val();
    $('#' + id + '_span').text(id_this_title_line_height);
    bannerVM.all_data[bannerVM.now_index]['title_line_height'] = id_this_title_line_height;
}
//加粗
function id_this_title_font_weight(obj) {
    if (bannerVM.all_data[bannerVM.now_index]['title_font_weight'] == 'normal') {
        bannerVM.all_data[bannerVM.now_index]['title_font_weight']='bold';
        $(obj).css("color", "blue");
    } else {
        bannerVM.all_data[bannerVM.now_index]['title_font_weight']='normal';
        $(obj).css("color","");
    }
}
//斜体
function id_this_title_font_style(obj) {
    if (bannerVM.all_data[bannerVM.now_index]['title_font_style'] == 'normal') {
        bannerVM.all_data[bannerVM.now_index]['title_font_style']='oblique';
        $(obj).css("color", "blue");
    } else {
        bannerVM.all_data[bannerVM.now_index]['title_font_style']='normal';
        $(obj).css("color", "");
    }
}
//下划线
function id_this_title_text_decoration(obj) {
    if (bannerVM.all_data[bannerVM.now_index]['title_text_decoration'] == 'none') {
        bannerVM.all_data[bannerVM.now_index]['title_text_decoration']='underline';
        $(obj).css("color", "blue");
    } else {
        bannerVM.all_data[bannerVM.now_index]['title_text_decoration']='none';
        $(obj).css("color", "");
    }
}
//宽度
function id_this_box_width(id) {
    var box_width = $('#' + id).val();
    $('#' + id + '_span').text(box_width);
    bannerVM.all_data[bannerVM.now_index]['box_width'] = box_width;
}
//边框颜色
function id_this_border_color(border_color) {
    bannerVM.all_data[bannerVM.now_index]['border_color'] = border_color;
}
//边框线宽
function id_this_border_width(id) {
    var border_width = $('#' + id).val();
    $('#' + id + '_span').text(border_width);
    bannerVM.all_data[bannerVM.now_index]['border_width'] = border_width;
}
//边框圆角
function id_this_border_radius(id) {
    var border_radius = $('#' + id).val();
    $('#' + id + '_span').text(border_radius);
    bannerVM.all_data[bannerVM.now_index]['border_radius'] = border_radius;
}

//单选复选行间距
function id_this_option_line_height(id) {
    var id_this_option_line_height = $('#' + id).val();
    $('#' + id + '_span').text(id_this_option_line_height);
    bannerVM.all_data[bannerVM.now_index]['option_line_height'] = id_this_option_line_height;
}

//字体
function id_this_option_font_family(option_font_family) {
    bannerVM.all_data[bannerVM.now_index]['option_font_family'] = option_font_family;
}

//字号
function id_this_option_font_size(option_font_size) {
    bannerVM.all_data[bannerVM.now_index]['option_font_size'] = option_font_size;
}

//颜色
function id_this_option_font_color(option_font_color) {
    bannerVM.all_data[bannerVM.now_index]['option_font_color'] = option_font_color;
}

//行间距
function id_this_option_line_height(id) {
    var id_this_option_line_height = $('#' + id).val();
    $('#' + id + '_span').text(id_this_option_line_height);
    bannerVM.all_data[bannerVM.now_index]['option_line_height'] = id_this_option_line_height;
}
//加粗
function id_this_option_font_weight(obj) {
    if (bannerVM.all_data[bannerVM.now_index]['option_font_weight'] == 'normal') {
        bannerVM.all_data[bannerVM.now_index]['option_font_weight']='bold';
        $(obj).css("color", "blue");
    } else {
        bannerVM.all_data[bannerVM.now_index]['option_font_weight']='normal';
        $(obj).css("color","");
    }
}
//斜体
function id_this_option_font_style(obj) {
    if (bannerVM.all_data[bannerVM.now_index]['option_font_style'] == 'normal') {
        bannerVM.all_data[bannerVM.now_index]['option_font_style']='oblique';
        $(obj).css("color", "blue");
    } else {
        bannerVM.all_data[bannerVM.now_index]['option_font_style']='normal';
        $(obj).css("color", "");
    }
}
//下划线
function id_this_option_text_decoration(obj) {
    if (bannerVM.all_data[bannerVM.now_index]['option_text_decoration'] == 'none') {
        bannerVM.all_data[bannerVM.now_index]['option_text_decoration']='underline';
        $(obj).css("color", "blue");
    } else {
        bannerVM.all_data[bannerVM.now_index]['option_text_decoration']='none';
        $(obj).css("color", "");
    }
}
//行高
function id_this_option_height(id) {
    var id_this_option_height = $('#' + id).val();
    $('#' + id + '_span').text(id_this_option_height);
    bannerVM.all_data[bannerVM.now_index]['option_height'] = id_this_option_height;
}

//标题公共样式方法---结束
//单行文本
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 1) {
        $("#form_edit_text").css("display", 'block').siblings().css("display", 'none');
        bannerVM.this_index = bannerVM.all_data.length;
        var new_item = {};
        new_item['module'] = "input";
        new_item['title'] = "姓名";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['opacity'] = form_head_data['opacity'];
        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-input";
        new_item['value'] = "";
        new_item['type'] = "form_text";
        new_item['empty'] = false;
        new_item['form_type'] = "text";
        new_item['password'] = false;
        new_item['placeholder'] = "";
        new_item['box_width'] = "100";
        new_item['border_color'] = "#ddd";
        new_item['border_width'] = "1";
        new_item['border_radius'] = "0";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
    }
});

//标题
function this_input_title(title) {
    bannerVM.all_data[bannerVM.now_index]['title'] = title;
}
//初始值
function this_input_value(title) {
    bannerVM.all_data[bannerVM.now_index]['value'] = title;
}

//提示内容
function this_input_placeholder(title) {
    bannerVM.all_data[bannerVM.now_index]['placeholder'] = title;
}

//是否是密码
$("input[name='this_input_text_password']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['password'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})
//选择是否为空
$("input[name='this_input_text_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['empty'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})
//选择类型
$("input[name='this_input_text_type']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['form_type'] = this.value;
    $(this).prop("checked", "checked");
})
//列数
$("input[name='componentLayoutRadio']").click(function () {
    // $(this).parent().addClass("selected").siblings().removeClass("selected");
    // bannerVM.all_data[bannerVM.now_index]['layout']="cubeNavigationArea column-"+this.value+" clearfix";
    bannerVM.all_data[bannerVM.now_index]['style_type'] = this.value;
});
$("input[name='componentLayoutRadio1']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['style_type'] = this.value;
});
//多行文本
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 2) {
        $("#form_edit_textarea").css("display", 'block').siblings().css("display", 'none');
        bannerVM.this_index = bannerVM.all_data.length;
        var new_item = {};
        new_item['module'] = "textarea";
        new_item['title'] = "内容";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['opacity'] = form_head_data['opacity'];
        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-textarea";
        new_item['value'] = "";
        new_item['empty'] = false;
        new_item['type'] = "form_textarea";
        new_item['placeholder'] = "";
        new_item['maxlength'] = "140";
        new_item['box_width'] = "100";
        new_item['border_color'] = "#ddd";
        new_item['border_width'] = "1";
        new_item['border_radius'] = "0";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
    }
});

function this_textarea_title(title) {
    bannerVM.all_data[bannerVM.now_index]['title'] = title;
}
function this_textarea_value(title) {
    bannerVM.all_data[bannerVM.now_index]['value'] = title;
}

function this_textarea_placeholder(title) {
    bannerVM.all_data[bannerVM.now_index]['placeholder'] = title;
}

function this_textarea_maxlength(title) {
    bannerVM.all_data[bannerVM.now_index]['maxlength'] = title;
}

//选择是否为空
$("input[name='this_input_textarea_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['empty'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})
//多项选择器
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 3) {
        $("#form_edit_checkbox").css("display", 'block').siblings().css("display", 'none');
        $("#1magic_radio_3").prop("checked", "checked");
        bannerVM.this_index = bannerVM.all_data.length;
        var item = {};
        item['value'] = "选项";
        item['disabled'] = false;
        item['checked'] = false;
        var arr = [];
        arr.push(item);
        var new_item = {};
        new_item['module'] = "checkbox";
        new_item['title'] = "爱好";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['opacity'] = form_head_data['opacity'];

        new_item['option_font_family'] = "Microsoft YaHei";
        new_item['option_font_size'] = "16";
        new_item['option_font_color'] = "#000000";
        new_item['option_height'] = "30";
        new_item['option_line_height'] = "25";
        new_item['option_font_weight'] = "normal";
        new_item['option_font_style'] = "normal";
        new_item['option_text_decoration'] = "none";


        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-checkbox";
        new_item['value'] = "";
        new_item['empty'] = false;
        new_item['list'] = arr;
        new_item['type'] = "form_checkbox";
        new_item['style_type'] = "3";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
        bannerVM.checkbox_list = arr;
    }
});

function this_checkbox_title(val) {
    bannerVM.all_data[bannerVM.now_index]['title'] = val;
}

function this_input_checkbox_value(obj, val) {
    var index = $(obj).attr('data-index');
    bannerVM.all_data[bannerVM.now_index]['list'][index]['value'] = val;
}

//选择是否为空
$("input[name='this_input_checkbox_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['empty'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})

function checkbox_add_menu() {
    var item = {};
    item['value'] = "选项";
    item['disabled'] = false;
    item['checked'] = false;
    var arr = [];
    arr.push(item);
    bannerVM.checkbox_list.push(item);
}

//单项选择器
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 4) {
        $("#form_edit_radio").css("display", 'block').siblings().css("display", 'none');
        $("#magic_radio_3").prop("checked", "checked");
        bannerVM.this_index = bannerVM.all_data.length;
        var item = {};
        item['value'] = "选项";
        item['disabled'] = false;
        item['checked'] = false;
        var arr = [];
        arr.push(item);
        var new_item = {};
        new_item['module'] = "radio";
        new_item['title'] = "性别";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['opacity'] = form_head_data['opacity'];

        new_item['option_font_family'] = "Microsoft YaHei";
        new_item['option_font_size'] = "16";
        new_item['option_font_color'] = "#000000";
        new_item['option_height'] = "30";
        new_item['option_line_height'] = "25";
        new_item['option_font_weight'] = "normal";
        new_item['option_font_style'] = "normal";
        new_item['option_text_decoration'] = "none";
        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-radio";
        new_item['value'] = "";
        new_item['empty'] = false;
        new_item['list'] = arr;
        new_item['type'] = "form_radio";
        new_item['style_type'] = "3";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
        bannerVM.radio_list = arr;
    }
});

function this_radio_title(val) {
    bannerVM.all_data[bannerVM.now_index]['title'] = val;
}
//选择是否为空
$("input[name='this_radio_text_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['empty'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})
function radio_add_menu() {
    var item = {};
    item['value'] = "选项";
    item['disabled'] = false;
    item['checked'] = false;
    var arr = [];
    arr.push(item);
    bannerVM.radio_list.push(item);
}

function set_radio_def(obj, val) {
    var index = $(obj).attr('data-index');
    console.log(index);
    var list = bannerVM.all_data[bannerVM.now_index]['list'];
    $.each(list, function (ind, list) {
        bannerVM.all_data[bannerVM.now_index]['list'][ind]['checked'] = false;
    })
    bannerVM.all_data[bannerVM.now_index]['list'][index]['checked'] = eval(val.toLowerCase());
}

//下拉选择器
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 5) {
        $("#form_edit_picker").css("display", 'block').siblings().css("display", 'none');
        bannerVM.this_index = bannerVM.all_data.length;
        var item = {};
        item['range'] = "选项";
        var arr = [];
        arr.push(item);
        var new_item = {};
        new_item['module'] = "picker";
        new_item['title'] = "下拉框";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['opacity'] = form_head_data['opacity'];
        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-picker";
        new_item['list'] = arr;
        new_item['type'] = "form_picker";
        new_item['box_width'] = "100";
        new_item['border_color'] = "#ddd";
        new_item['border_width'] = "1";
        new_item['border_radius'] = "0";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
        bannerVM.picker_list = arr;
    }
});

function this_picker_title(val) {
    bannerVM.all_data[bannerVM.now_index]['title'] = val;
}

function picker_add_menu() {
    var item = {};
    item['range'] = "选项";
    var arr = [];
    arr.push(item);
    bannerVM.picker_list.push(item);
}

//日期
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 6) {
        $("#form_edit_time_one").css("display", 'block').siblings().css("display", 'none');
        bannerVM.this_index = bannerVM.all_data.length;
        var now = new Date();
        var time = now.getFullYear() + "-" + ((now.getMonth() + 1) < 10 ? "0" : "") + (now.getMonth() + 1) + "-" + (now.getDate() < 10 ? "0" : "") + now.getDate();
        var new_item = {};
        new_item['module'] = "time_one";
        new_item['title'] = "日期";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['opacity'] = form_head_data['opacity'];
        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-time_one";
        new_item['empty'] = false;
        new_item['default'] = time;
        new_item['start'] = '';
        new_item['end'] = '';
        new_item['type'] = "form_time_one";
        new_item['box_width'] = "100";
        new_item['border_color'] = "#ddd";
        new_item['border_width'] = "1";
        new_item['border_radius'] = "0";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
        $("#id_this_time_one_def").val(time);
    }
});

function this_time_one_title(val) {
    bannerVM.all_data[bannerVM.now_index]['title'] = val;
}

//选择是否为空
$("input[name='this_time_one_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['empty'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})

function this_time_one_def(element) {
    bannerVM.all_data[bannerVM.now_index]['default'] = element.cal.getNewDateStr();
}

function this_time_one_star(element) {
    bannerVM.all_data[bannerVM.now_index]['start'] = element.cal.getNewDateStr();
    $("#id_this_time_one_star").val(element.cal.getNewDateStr());
}

function this_time_one_end(element) {
    bannerVM.all_data[bannerVM.now_index]['end'] = element.cal.getNewDateStr();
    $("#id_this_time_one_end").val(element.cal.getNewDateStr());
}

//日期
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 7) {
        $("#form_edit_time_two").css("display", 'block').siblings().css("display", 'none');
        bannerVM.this_index = bannerVM.all_data.length;
        var now = new Date();
        var time = now.getFullYear() + "-" + ((now.getMonth() + 1) < 10 ? "0" : "") + (now.getMonth() + 1) + "-" + (now.getDate() < 10 ? "0" : "") + now.getDate();
        var time1 = now.getFullYear() + 1 + "-" + ((now.getMonth() + 1) < 10 ? "0" : "") + (now.getMonth() + 1) + "-" + (now.getDate() < 10 ? "0" : "") + now.getDate();
        var new_item = {};
        new_item['module'] = "time_two";
        new_item['title'] = "日期范围";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['opacity'] = form_head_data['opacity'];
        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-time_two";
        new_item['empty'] = false;
        new_item['default1'] = time;
        new_item['default2'] = time1;
        new_item['start'] = '';
        new_item['end'] = '';
        new_item['type'] = "form_time_two";
        new_item['box_width'] = "100";
        new_item['border_color'] = "#ddd";
        new_item['border_width'] = "1";
        new_item['border_radius'] = "0";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
        $("#id_this_time_tow_def1").val(time);
        $("#id_this_time_tow_def2").val(time1);
    }
});

function this_time_two_title(val) {
    bannerVM.all_data[bannerVM.now_index]['title'] = val;
}

//选择是否为空
$("input[name='this_time_tow_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['empty'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})

function this_time_tow_def1(element) {
    bannerVM.all_data[bannerVM.now_index]['default1'] = element.cal.getNewDateStr();
    $("#id_this_time_tow_def1").val(element.cal.getNewDateStr());
}

function this_time_tow_def2(element) {
    bannerVM.all_data[bannerVM.now_index]['default2'] = element.cal.getNewDateStr();
    $("#id_this_time_tow_def2").val(element.cal.getNewDateStr());
}

function this_time_tow_star(element) {
    bannerVM.all_data[bannerVM.now_index]['star'] = element.cal.getNewDateStr();
    $("#id_this_time_tow_star").val(element.cal.getNewDateStr());
    console.log(bannerVM.all_data[bannerVM.now_index]);
}

function this_time_tow_end(element) {
    bannerVM.all_data[bannerVM.now_index]['end'] = element.cal.getNewDateStr();
    $("#id_this_time_tow_end").val(element.cal.getNewDateStr());
}

$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 8) {
        $("#form_edit_region").css("display", 'block').siblings().css("display", 'none');
        bannerVM.this_index = bannerVM.all_data.length;
        var new_item = {};
        new_item['module'] = "region";
        new_item['title'] = "地区";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['opacity'] = form_head_data['opacity'];
        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-region";
        new_item['empty'] = false;
        new_item['default'] = '';
        new_item['type'] = "form_region";
        new_item['box_width'] = "100";
        new_item['border_color'] = "#ddd";
        new_item['border_width'] = "1";
        new_item['border_radius'] = "0";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
    }
});

function this_region_title(val) {
    bannerVM.all_data[bannerVM.now_index]['title'] = val;
}

$("input[name='this_region_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['empty'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 9) {
        $("#form_edit_pic").css("display", 'block').siblings().css("display", 'none');
        bannerVM.this_index = bannerVM.all_data.length;
        var new_item = {};
        new_item['module'] = "pic";
        new_item['title'] = "单图上传";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-pic";
        new_item['empty'] = false;
        new_item['type'] = "form_pic";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
    }
});

function this_pic_title(val) {
    bannerVM.all_data[bannerVM.now_index]['title'] = val;
}

$("input[name='this_pic_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['empty'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})
//多图上传
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 10) {
        $("#form_edit_pic_arr").css("display", 'block').siblings().css("display", 'none');
        bannerVM.this_index = bannerVM.all_data.length;
        var new_item = {};
        new_item['module'] = "pic_arr";
        new_item['title'] = "多图上传";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_line_height'] = "30";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['name'] = "field_" + bannerVM.this_index + '' + Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000) + "-pic_arr";
        new_item['empty'] = false;
        new_item['type'] = "form_pic_arr";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
    }
});

function this_pic_arr_title(val) {
    bannerVM.all_data[bannerVM.now_index]['title'] = val;
}

$("input[name='this_pic_arr_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['empty'] = eval(this.value.toLowerCase());
    $(this).prop("checked", "checked");
})
$(".j-diy-addModule").click(function () {
    if ($(this).attr('data-type') == 11) {
        if ($("#get_button_len").length > 0) {
            layer.msg('按钮只能添加一个', {icon: 5, time: 1000});
            return false;
        }
        $("#form_button").css("display", 'block').siblings().css("display", 'none');
        bannerVM.this_index = bannerVM.all_data.length;
        var new_item = {};
        new_item['module'] = "button";
        new_item['color'] = "#dedede";
        new_item['title'] = "提交";
        new_item['title_font_family'] = "Microsoft YaHei";
        new_item['title_font_size'] = "16";
        new_item['title_font_color'] = "#000000";
        new_item['title_font_weight'] = "normal";
        new_item['title_font_style'] = "normal";
        new_item['title_text_decoration'] = "none";
        new_item['text_color'] = "#646464";
        new_item['type'] = "form_button";
        new_item['box_width'] = "100";
        new_item['border_color'] = "#ddd";
        new_item['border_width'] = "1";
        new_item['border_radius'] = "0";
        new_item['time_key'] = Date.parse(new Date()) / 1000 + "" + Math.round(Math.random() * 100000);
        bannerVM.all_data.push(new_item);
        bannerVM.now_index = bannerVM.all_data.length - 1;
    }
});

function this_button_title(val) {
    bannerVM.all_data[bannerVM.now_index]['title'] = val;
}

function this_button_bg(color) {
    bannerVM.all_data[bannerVM.now_index]['color'] = color;
}

function this_button_color(color) {
    bannerVM.all_data[bannerVM.now_index]['text_color'] = color;
}

$("input[name='this_button_empty']").click(function () {
    bannerVM.all_data[bannerVM.now_index]['size'] = this.value;
    $(this).prop("checked", "checked");
})

/**
 * 上移组件
 */
function tool_up_vue() {
    //获取组件index
    //当前index
    var index = bannerVM.now_index;
    if (index == 0) {
        return false;
    }
    //当前的元素
    var Option = bannerVM.all_data[bannerVM.now_index];
    //上面那个元素
    var tempOption = bannerVM.all_data[index - 1];
    Vue.set(bannerVM.all_data, index - 1, Option);
    Vue.set(bannerVM.all_data, index, tempOption);
    bannerVM.now_index = bannerVM.now_index - 1;
}

function tool_down_vue() {
    var index = bannerVM.now_index;
    if (index == bannerVM.all_data.length - 1) {
        return false;
    }
    //当前的元素
    var Option = bannerVM.all_data[bannerVM.now_index];
    //下面那个元素
    var tempOption = bannerVM.all_data[index + 1];
    //  console.log(index);
    //console.log(tempOption);
    Vue.set(bannerVM.all_data, index + 1, Option);
    Vue.set(bannerVM.all_data, index, tempOption);
    bannerVM.now_index = bannerVM.now_index + 1;
}

//删除选项
function del_checkbox(obj) {
    if (bannerVM.all_data[bannerVM.now_index]['list'].length == 1) {
        layer.msg('至少留一个吧~', {icon: 5, time: 1000});
        return false;
    }
    var index = $(obj).attr('data-index');
    bannerVM.all_data[bannerVM.now_index]['list'].splice(index, 1)
}

var lock = false;

function add_submit() {
    event.preventDefault();
    layer.msg('正在加载,请稍等！', {icon: 16, shade: 0.05});
    html2canvas(document.querySelector("#mCSB_1_container"), {
        useCORS: true,
        logging: false,
    }).then(canvas => {
        var dataUrl = canvas.toDataURL();
        src = dataUrl;
        var form_title = $("#form_title").val();
        if (form_title == '') {
            layer.prompt({title: '输入表单名称', formType: 0}, function (text, index) {
                if (!lock) {
                    lock = true;
                    var id = $("#form_id").val();
                    var form_type = $('input:radio[name="this_form_type"]:checked').val();
                    $.ajax({
                        type: "post",
                        url: host + "addons/yb_shop/core/index.php?s=/admin/menu/universal_form_add",
                        data: {
                            'index_list': JSON.stringify(bannerVM._data),
                            'title': text,
                            'id': id,
                            'img': src,
                            'form_type': form_type
                        },
                        success: function (data) {
                            if (data['code'] > 0) {
                                layer.msg('成功', {icon: 1, time: 1000}, function () {
                                    location.href = host + "addons/yb_shop/core/index.php?s=/admin/menu/universal_form";
                                });
                            } else {
                                layer.msg('失败', {icon: 5, time: 1000});
                                lock = false;
                            }
                        }
                    })
                }
            })
        } else {
            if (!lock) {
                lock = true;
                var id = $("#form_id").val();
                $.ajax({
                    type: "post",
                    url: host + "addons/yb_shop/core/index.php?s=/admin/menu/universal_form_add",
                    data: {
                        'index_list': JSON.stringify(bannerVM._data),
                        'id': id,
                        'img': src
                    },
                    success: function (data) {
                        if (data['code'] > 0) {
                            layer.msg('成功', {icon: 1, time: 1000}, function () {
                                location.href = host + "addons/yb_shop/core/index.php?s=/admin/menu/universal_form";
                            });
                        } else {
                            layer.msg('失败', {icon: 5, time: 1000});
                            lock = false;
                        }
                    }
                })
            }
        }
    })
}

//打开一个子窗口
function lay_open(title, url, w, h) {
    layer.open({
        type: 2,
        area: [w, h],
        fix: false, //不固定
        maxmin: true,
        shade: 0.4,
        title: title,
        content: url,
        scrollbar: false
    });
}

function id_this_button_href(type, index) {
    $("#goods_select_id").val(index);
    bannerVM.this_type = type;
    lay_open('选择功能', host + 'addons/yb_shop/core/index.php?s=/admin/menu/menu_select&this_type=' + type + '&select_id=' + index, '800px', '600px');
}

function menu_select(item) {
    $("#id_this_button_href").val(item.name);
    bannerVM.all_data[bannerVM.now_index]['form_href'] = item.url;
    bannerVM.all_data[bannerVM.now_index]['form_href_name'] = item.name;
}