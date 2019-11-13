var host = UM_SITE_ROOT.replace("addons/yb_shop/core/index.php?s=/", "");
//单行文本
Vue.component('form_text', {
    props: ['empty','box_width','border_color','border_width','border_radius','index', 'title', 'value', 'placeholder', 'opacity', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li  title="点击进行修改,拖动交换位置" class="ui-draggable">' +
        '<div v-on:click="del_left(index)" class="deleteButton"></div><div v-on:click="onc_banner(index,$event)">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration">' +
        '{{title}} <span v-show="empty" style="color:red;">*</span></div>' +
        '<div class="yb_input" :style="'+"'border: 1px solid rgb(239, 239, 239);width:'"+'+box_width+'+"'%;border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'">' +
        '<input type="text" :placeholder="placeholder" :value="value" class="es-input data-bind" ' +
        ':style="' + "'cursor: text; background: rgb(255, 255, 255);border: transparent;text-align:center;opacity:'" + '+opacity+'+"';border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'">' +
        '</div></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_text").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_text").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_input_title").val(bannerVM.all_data[index]['title']);
            //标题字体
            $("#id_this_input_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_input_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_input_title_font_color").val(bannerVM.all_data[index]['title_font_color']);

            //标题行高
            $("#id_this_input_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_input_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);
            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_input_title_font_weight').css("color", "");
            } else {
                $('#id_this_input_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_input_title_font_style').css("color", "");
            } else {
                $('#id_this_input_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_input_title_text_decoration').css("color", "");
            } else {
                $('#id_this_input_title_text_decoration').css("color", "blue");
            }

            //宽度
            $("#id_this_input_box_width").val(bannerVM.all_data[index]['box_width']);
            $("#id_this_input_box_width_span").text(bannerVM.all_data[index]['box_width']);

            //边框颜色
            $("#id_this_input_border_color").val(bannerVM.all_data[index]['border_color']);

            //边框线宽
            $("#id_this_input_border_width").val(bannerVM.all_data[index]['border_width']);
            $("#id_this_input_border_width_span").text(bannerVM.all_data[index]['border_width']);

            //边框圆角
            $("#id_this_input_border_radius").val(bannerVM.all_data[index]['border_radius']);
            $("#id_this_input_border_radius_span").text(bannerVM.all_data[index]['border_radius']);


            $("#id_this_input_value").val(bannerVM.all_data[index]['value']);
            $("#id_this_input_placeholder").val(bannerVM.all_data[index]['placeholder']);

            if (bannerVM.all_data[index]['password'] == '0') {
                $("#this_input_text_password1").prop("checked", "checked");
            } else {
                $("#this_input_text_password2").prop("checked", "checked");
            }
            if (bannerVM.all_data[index]['empty'] == false) {
                $("#this_input_text_empty1").prop("checked", "checked");
            } else {
                $("#this_input_text_empty2").prop("checked", "checked");
            }
            if (bannerVM.all_data[index]['form_type'] == 'text') {
                $("#this_input_text_type1").prop("checked", "checked");
            } else if (bannerVM.all_data[index]['form_type'] == 'number') {
                $("#this_input_text_type2").prop("checked", "checked");
            } else if (bannerVM.all_data[index]['form_type'] == 'idcard') {
                $("#this_input_text_type3").prop("checked", "checked");
            } else if (bannerVM.all_data[index]['form_type'] == 'digit') {
                $("#this_input_text_type4").prop("checked", "checked");
            }

            bannerVM.now_index = index;
        },
    },
})
//单行文本
Vue.component('form_textarea', {
    props: ['empty','box_width','border_color','border_width','border_radius','index', 'title', 'value', 'placeholder', 'opacity', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li title="点击进行修改,拖动交换位置" class="ui-draggable"><div v-on:click="del_left(index)" class="deleteButton"></div>' +
        '<div v-on:click="onc_banner(index,$event)">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';line-height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration">' +
        '{{title}}<span v-show="empty" style="color:red;">*</span></div>' +
        '<div class="yb_textarea" :style="'+"'border: 1px solid rgb(239, 239, 239);width:'"+'+box_width+'+"'%;border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'" >' +
        '<textarea :placeholder="placeholder" class="es-input data-bind" :style="' + "'cursor: text; border: transparent; background: rgb(255, 255, 255); text-align: center;opacity:'" + '+opacity+'+"';border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'">{{value}}</textarea></div></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_textarea").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_textarea").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_textarea_title").val(bannerVM.all_data[index]['title']);
            //标题字体
            $("#id_this_textarea_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_textarea_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_textarea_title_font_color").val(bannerVM.all_data[index]['title_font_color']);

            //标题行高
            $("#id_this_textarea_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_textarea_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);

            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_textarea_title_font_weight').css("color", "");
            } else {
                $('#id_this_textarea_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_textarea_title_font_style').css("color", "");
            } else {
                $('#id_this_textarea_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_textarea_title_text_decoration').css("color", "");
            } else {
                $('#id_this_textarea_title_text_decoration').css("color", "blue");
            }

            //宽度
            $("#id_this_textarea_box_width").val(bannerVM.all_data[index]['box_width']);
            $("#id_this_textarea_box_width_span").text(bannerVM.all_data[index]['box_width']);

            //边框颜色
            $("#id_this_textarea_border_color").val(bannerVM.all_data[index]['border_color']);

            //边框线宽
            $("#id_this_textarea_border_width").val(bannerVM.all_data[index]['border_width']);
            $("#id_this_textarea_border_width_span").text(bannerVM.all_data[index]['border_width']);

            //边框圆角
            $("#id_this_textarea_border_radius").val(bannerVM.all_data[index]['border_radius']);
            $("#id_this_textarea_border_radius_span").text(bannerVM.all_data[index]['border_radius']);


            $("#id_this_textarea_value").val(bannerVM.all_data[index]['value']);
            $("#id_this_textarea_placeholder").val(bannerVM.all_data[index]['placeholder']);
            $("#id_this_textarea_maxlength").val(bannerVM.all_data[index]['maxlength']);

            if (bannerVM.all_data[index]['empty'] == false) {
                $("#this_input_textarea_empty1").prop("checked", "checked");
            } else {
                $("#this_input_textarea_empty2").prop("checked", "checked");
            }
            bannerVM.now_index = index;
        },
    },
})
//多项选择器
Vue.component('form_checkbox', {
    props: ['empty','index', 'option_font_family', 'option_font_size', 'option_font_color', 'option_height', 'option_line_height', 'option_font_weight', 'option_font_style', 'option_text_decoration', 'title', 'value', 'list', 'style_type', 'opacity', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li  title="点击进行修改,拖动交换位置" class="ui-draggable">' +
        '<div v-on:click="del_left(index)" class="deleteButton"></div>' +
        '<div v-on:click="onc_banner(index,$event)" :class="style_type_">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration">' +
        '{{title}}<span v-show="empty" style="color:red;">*</span></div>' +
        '<div class="yb_checkbox" v-for="m in list" :style="'+"'display: flex;background: rgba(255,255,255,'"+'+opacity+'+"');font-family:'" + '+option_font_family+' + "';font-size:'" + '+option_font_size+' + "'px;color:'" + '+option_font_color+' + "';line-height:'" + '+option_line_height+'+ "'px;height:'" + '+option_height+' + "'px;font-weight:'" + '+option_font_weight+' + "';font-style:'" + '+option_font_style+' + "';text-decoration:'" + '+option_text_decoration">' +
        '<input style="margin-top: 11.5px" type="checkbox" :value="m.value" class="es-input data-bind">' +
        '<span>{{m.value}}</span>' +
        '</div>' +
        '</div>' +
        '</li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_checkbox").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_checkbox").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_checkbox_title").val(bannerVM.all_data[index]['title']);
            //标题字体
            $("#id_this_checkbox_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_checkbox_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_checkbox_title_font_color").val(bannerVM.all_data[index]['title_font_color']);
            //标题行高
            $("#id_this_checkbox_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_checkbox_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);
//加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_checkbox_title_font_weight').css("color", "");
            } else {
                $('#id_this_checkbox_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_checkbox_title_font_style').css("color", "");
            } else {
                $('#id_this_checkbox_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_checkbox_title_text_decoration').css("color", "");
            } else {
                $('#id_this_checkbox_title_text_decoration').css("color", "blue");
            }

            //选项字体
            $("#id_this_checkbox_option_font_family").val(bannerVM.all_data[index]['option_font_family']);
            //选项字号
            $("#id_this_checkbox_option_font_size").val(bannerVM.all_data[index]['option_font_size']);
            //选项颜色
            $("#id_this_checkbox_option_font_color").val(bannerVM.all_data[index]['option_font_color']);
            //选项行高
            $("#id_this_checkbox_option_line_height").val(bannerVM.all_data[index]['option_line_height']);
            $("#id_this_checkbox_option_line_height_span").text(bannerVM.all_data[index]['option_line_height']);
            //选项行高
            $("#id_this_checkbox_option_height").val(bannerVM.all_data[index]['option_height']);
            $("#id_this_checkbox_option_height_span").text(bannerVM.all_data[index]['option_height']);
//加粗
            if (bannerVM.all_data[index]['option_font_weight'] == 'normal') {
                $('#id_this_checkbox_option_font_weight').css("color", "");
            } else {
                $('#id_this_checkbox_option_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['option_font_style'] == 'normal') {

                $('#id_this_checkbox_option_font_style').css("color", "");
            } else {
                $('#id_this_checkbox_option_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['option_text_decoration'] == 'none') {
                $('#id_this_checkbox_option_text_decoration').css("color", "");
            } else {
                $('#id_this_checkbox_option_text_decoration').css("color", "blue");
            }


            if (bannerVM.all_data[index]['empty'] === false) {
                $("#this_input_checkbox_empty1").prop("checked", "checked");
            } else {
                $("#this_input_checkbox_empty2").prop("checked", "checked");
            }
            bannerVM.checkbox_list = bannerVM.all_data[index]['list'];
            bannerVM.now_index = index;
        },
    },
    computed: {
        style_type_: function () {
            return 'nana' + this.style_type;
        }
    },
})
//单项选择器
Vue.component('form_radio', {
    props: ['empty','index', 'option_font_family', 'option_font_size', 'option_font_color', 'option_height', 'option_line_height', 'option_font_weight', 'option_font_style', 'option_text_decoration', 'title', 'value', 'list', 'time_key', 'style_type', 'opacity', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li title="点击进行修改,拖动交换位置" class="ui-draggable">' +
        '<div v-on:click="del_left(index)" class="deleteButton"></div><div v-on:click="onc_banner(index,$event)" :class="style_type_">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration" >' +
        '{{title}}<span v-show="empty" style="color:red;">*</span></div>' +
        '<div class="yb_radio" v-for="m in list"  :style="'+"'background: rgba(255,255,255,'"+'+opacity+'+"');font-family:'" + '+option_font_family+' + "';font-size:'" + '+option_font_size+' + "'px;color:'" + '+option_font_color+' + "';line-height:'" + '+option_line_height+'+ "'px;height:'" + '+option_height+' + "'px;font-weight:'" + '+option_font_weight+' + "';font-style:'" + '+option_font_style+' + "';text-decoration:'" + '+option_text_decoration" >' +
        '<input style="display: block" type="radio" :value="m.value" :name="\'radio-\'+time_key"  :checked="m.checked" disabled="true" class="es-input data-bind"><span>{{m.value}}</span></div></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_radio").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_radio").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_radio_title").val(bannerVM.all_data[index]['title']);
            //标题字体
            $("#id_this_radio_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_radio_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_radio_title_font_color").val(bannerVM.all_data[index]['title_font_color']);
            //标题行高
            $("#id_this_radio_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_radio_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);

            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_radio_title_font_weight').css("color", "");
            } else {
                $('#id_this_radio_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_radio_title_font_style').css("color", "");
            } else {
                $('#id_this_radio_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_radio_title_text_decoration').css("color", "");
            } else {
                $('#id_this_radio_title_text_decoration').css("color", "blue");
            }

            //选项字体
            $("#id_this_radio_option_font_family").val(bannerVM.all_data[index]['option_font_family']);
            //选项字号
            $("#id_this_radio_option_font_size").val(bannerVM.all_data[index]['option_font_size']);
            //选项颜色
            $("#id_this_radio_option_font_color").val(bannerVM.all_data[index]['option_font_color']);
            //选项行高
            $("#id_this_radio_option_line_height").val(bannerVM.all_data[index]['option_line_height']);
            $("#id_this_radio_option_line_height_span").text(bannerVM.all_data[index]['option_line_height']);
            //选项行高
            $("#id_this_radio_option_height").val(bannerVM.all_data[index]['option_height']);
            $("#id_this_radio_option_height_span").text(bannerVM.all_data[index]['option_height']);
//加粗
            if (bannerVM.all_data[index]['option_font_weight'] == 'normal') {
                $('#id_this_radio_option_font_weight').css("color", "");
            } else {
                $('#id_this_radio_option_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['option_font_style'] == 'normal') {

                $('#id_this_radio_option_font_style').css("color", "");
            } else {
                $('#id_this_radio_option_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['option_text_decoration'] == 'none') {
                $('#id_this_radio_option_text_decoration').css("color", "");
            } else {
                $('#id_this_radio_option_text_decoration').css("color", "blue");
            }



            if (bannerVM.all_data[index]['style_type'] == 1) {
                $("#magic_radio_1").prop("checked", "checked");
            } else if (bannerVM.all_data[index]['style_type'] == 2) {
                $("#magic_radio_2").prop("checked", "checked");
            } else if (bannerVM.all_data[index]['style_type'] == 3) {
                $("#magic_radio_3").prop("checked", "checked");
            }
            if (bannerVM.all_data[index]['empty'] === false) {
                $("#this_radio_text_empty1").prop("checked", "checked");
            } else {
                $("#this_radio_text_empty2").prop("checked", "checked");
            }
            bannerVM.radio_list = bannerVM.all_data[index]['list'];
            bannerVM.now_index = index;
        },
    },
    computed: {
        style_type_: function () {
            return 'nana' + this.style_type;
        }
    },
})
//下拉选择器
Vue.component('form_picker', {
    props: ['box_width','border_color','border_width','border_radius','index', 'title', 'value', 'list', 'time_key', 'opacity', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li title="点击进行修改,拖动交换位置" class="ui-draggable">' +
        '<div v-on:click="del_left(index)" class="deleteButton"></div><div  v-on:click="onc_banner(index,$event)">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration"  >{{title}}</div>' +
        '<div class="yb_select" :style="'+"'width:'"+'+box_width+'+"'%'"+'"  >' +
        '<select :style="' + "'display: block; border: 1px solid rgb(239, 239, 239);opacity:'" + '+opacity+'+"';border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'" ><option v-for="o in list" :value="o.range">{{o.range}}</option></select>' +
        '</div></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_picker").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_picker").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_picker_title").val(bannerVM.all_data[index]['title']);

            //标题字体
            $("#id_this_picker_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_picker_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_picker_title_font_color").val(bannerVM.all_data[index]['title_font_color']);
            //标题行高
            $("#id_this_picker_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_picker_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);

            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_picker_title_font_weight').css("color", "");
            } else {
                $('#id_this_picker_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_picker_title_font_style').css("color", "");
            } else {
                $('#id_this_picker_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_picker_title_text_decoration').css("color", "");
            } else {
                $('#id_this_picker_title_text_decoration').css("color", "blue");
            }
            //宽度
            $("#id_this_picker_box_width").val(bannerVM.all_data[index]['box_width']);
            $("#id_this_picker_box_width_span").text(bannerVM.all_data[index]['box_width']);

            //边框颜色
            $("#id_this_picker_border_color").val(bannerVM.all_data[index]['border_color']);

            //边框线宽
            $("#id_this_picker_border_width").val(bannerVM.all_data[index]['border_width']);
            $("#id_this_picker_border_width_span").text(bannerVM.all_data[index]['border_width']);

            //边框圆角
            $("#id_this_picker_border_radius").val(bannerVM.all_data[index]['border_radius']);
            $("#id_this_picker_border_radius_span").text(bannerVM.all_data[index]['border_radius']);

            bannerVM.picker_list = bannerVM.all_data[index]['list'];
            bannerVM.now_index = index;
        },
    },
})
//日期
Vue.component('form_time_one', {
    props: ['empty','box_width','border_color','border_width','border_radius','index', 'title', 'time_key', 'default_time', 'opacity', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li title="点击进行修改,拖动交换位置" class="ui-draggable"><div v-on:click="del_left(index)" class="deleteButton"></div><div  v-on:click="onc_banner(index,$event)">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration"   >' +
        '{{title}}<span v-show="empty" style="color:red;">*</span></div>' +
        '<div class="yb_time_one" :style="'+"'border: 1px solid rgb(239, 239, 239);width:'"+'+box_width+'+"'%;border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'"  >' +
        '<input type="text" :value="default_time" readonly class="es-input data-bind" :style="' + "'cursor: text; border: transparent; background: rgb(255, 255, 255); text-align: center;opacity:'" + '+opacity+'+"';border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'"></div></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_time_one").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_time_one").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_time_one_title").val(bannerVM.all_data[index]['title']);
            //标题字体
            $("#id_this_time_one_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_time_one_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_time_one_title_font_color").val(bannerVM.all_data[index]['title_font_color']);
            //标题行高
            $("#id_this_time_one_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_time_one_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);

            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_time_one_title_font_weight').css("color", "");
            } else {
                $('#id_this_time_one_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_time_one_title_font_style').css("color", "");
            } else {
                $('#id_this_time_one_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_time_one_title_text_decoration').css("color", "");
            } else {
                $('#id_this_time_one_title_text_decoration').css("color", "blue");
            }

            //宽度
            $("#id_this_time_one_box_width").val(bannerVM.all_data[index]['box_width']);
            $("#id_this_time_one_box_width_span").text(bannerVM.all_data[index]['box_width']);

            //边框颜色
            $("#id_this_time_one_border_color").val(bannerVM.all_data[index]['border_color']);

            //边框线宽
            $("#id_this_time_one_border_width").val(bannerVM.all_data[index]['border_width']);
            $("#id_this_time_one_border_width_span").text(bannerVM.all_data[index]['border_width']);

            //边框圆角
            $("#id_this_time_one_border_radius").val(bannerVM.all_data[index]['border_radius']);
            $("#id_this_time_one_border_radius_span").text(bannerVM.all_data[index]['border_radius']);


            if (bannerVM.all_data[index]['empty'] == false) {
                $("#this_time_one_empty1").prop("checked", "checked");
            } else {
                $("#this_time_one_empty2").prop("checked", "checked");
            }
            $("#id_this_time_one_def").val(bannerVM.all_data[index]['default']);
            $("#id_this_time_one_star").val(bannerVM.all_data[index]['star']);
            $("#id_this_time_one_end").val(bannerVM.all_data[index]['end']);
            bannerVM.now_index = index;
        },
    },
})
//日期范围
Vue.component('form_time_two', {
    props: ['empty','box_width','border_color','border_width','border_radius','index', 'title', 'time_key', 'default_time1', 'default_time2', 'opacity', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li title="点击进行修改,拖动交换位置" class="ui-draggable"><div v-on:click="del_left(index)" class="deleteButton"></div><div v-on:click="onc_banner(index,$event)">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration" >' +
        '{{title}}<span v-show="empty" style="color:red;">*</span></div>' +
        '<div class="yb_time_two" :style="'+"'display:flex;justify-content:center;width:'"+'+box_width+'+"'%'"+'"  >' +
        '<div :style="'+"'border: 1px solid rgb(239, 239, 239);border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'">' +
        '<input type="text" :value="default_time1" readonly class="es-input data-bind" :style="' + "'cursor: text; border:transparent; background: rgb(255, 255, 255); text-align: center;opacity:'" + '+opacity+'+"';border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'"></div><span style="line-height: auto">-</span>' +
        '<div :style="'+"'border: 1px solid rgb(239, 239, 239);border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'">' +
        '<input type="text" :value="default_time2" readonly class="es-input data-bind" :style="' + "'cursor: text; border: transparent; background: rgb(255, 255, 255); text-align: center;opacity:'" + '+opacity+'+"';border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'"></div>' +
        '</div></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_time_two").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_time_two").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_time_two_title").val(bannerVM.all_data[index]['title']);
            //标题字体
            $("#id_this_time_two_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_time_two_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_time_two_title_font_color").val(bannerVM.all_data[index]['title_font_color']);
            //标题行高
            $("#id_this_time_two_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_time_two_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);

            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_time_two_title_font_weight').css("color", "");
            } else {
                $('#id_this_time_two_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_time_two_title_font_style').css("color", "");
            } else {
                $('#id_this_time_two_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_time_two_title_text_decoration').css("color", "");
            } else {
                $('#id_this_time_two_title_text_decoration').css("color", "blue");
            }

            //宽度
            $("#id_this_time_two_box_width").val(bannerVM.all_data[index]['box_width']);
            $("#id_this_time_two_box_width_span").text(bannerVM.all_data[index]['box_width']);

            //边框颜色
            $("#id_this_time_two_border_color").val(bannerVM.all_data[index]['border_color']);

            //边框线宽
            $("#id_this_time_two_border_width").val(bannerVM.all_data[index]['border_width']);
            $("#id_this_time_two_border_width_span").text(bannerVM.all_data[index]['border_width']);

            //边框圆角
            $("#id_this_time_two_border_radius").val(bannerVM.all_data[index]['border_radius']);
            $("#id_this_time_two_border_radius_span").text(bannerVM.all_data[index]['border_radius']);


            if (bannerVM.all_data[index]['empty'] == false) {
                $("#this_time_tow_empty1").prop("checked", "checked");
            } else {
                $("#this_time_tow_empty2").prop("checked", "checked");
            }
            console.log(bannerVM.all_data[index]);
            $("#id_this_time_tow_def1").val(bannerVM.all_data[index]['default1']);
            $("#id_this_time_tow_def2").val(bannerVM.all_data[index]['default2']);
            $("#id_this_time_tow_star").val(bannerVM.all_data[index]['star']);
            $("#id_this_time_tow_end").val(bannerVM.all_data[index]['end']);
            bannerVM.now_index = index;
        },
    },
})
//城市选择
Vue.component('form_region', {
    props: ['empty','box_width','border_color','border_width','border_radius','index', 'title', 'time_key', 'opacity', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li title="点击进行修改,拖动交换位置" class="ui-draggable"><div v-on:click="del_left(index)" class="deleteButton"></div><div  v-on:click="onc_banner(index,$event)">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration"  >' +
        '{{title}}<span v-show="empty" style="color:red;">*</span></div>' +
        '<div  class="yb_region" :style="'+"'padding:0px;border: 1px solid rgb(239, 239, 239);width:'"+'+box_width+'+"'%;border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'" >' +
        '<input type="text" value="省-市-区/县" readonly class="es-input data-bind" :style="' + "'cursor: text; border: transparent; background: rgb(255, 255, 255); text-align: center;opacity:'" + '+opacity+'+"';border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'"></div></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_region").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_region").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_region_title").val(bannerVM.all_data[index]['title']);
            //标题字体
            $("#id_this_region_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_region_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_region_title_font_color").val(bannerVM.all_data[index]['title_font_color']);
            //标题行高
            $("#id_this_region_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_region_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);

            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_region_title_font_weight').css("color", "");
            } else {
                $('#id_this_region_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_region_title_font_style').css("color", "");
            } else {
                $('#id_this_region_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_region_title_text_decoration').css("color", "");
            } else {
                $('#id_this_region_title_text_decoration').css("color", "blue");
            }
            //宽度
            $("#id_this_region_box_width").val(bannerVM.all_data[index]['box_width']);
            $("#id_this_region_box_width_span").text(bannerVM.all_data[index]['box_width']);

            //边框颜色
            $("#id_this_region_border_color").val(bannerVM.all_data[index]['border_color']);

            //边框线宽
            $("#id_this_region_border_width").val(bannerVM.all_data[index]['border_width']);
            $("#id_this_region_border_width_span").text(bannerVM.all_data[index]['border_width']);

            //边框圆角
            $("#id_this_region_border_radius").val(bannerVM.all_data[index]['border_radius']);
            $("#id_this_region_border_radius_span").text(bannerVM.all_data[index]['border_radius']);

            if (bannerVM.all_data[index]['empty'] == false) {
                $("#this_region_empty1").prop("checked", "checked");
            } else {
                $("#this_region_empty2").prop("checked", "checked");
            }
            bannerVM.now_index = index;
        },
    },
})
//单图
Vue.component('form_pic', {
    props: ['empty','index', 'title', 'time_key', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li  title="点击进行修改,拖动交换位置" class="ui-draggable"><div v-on:click="del_left(index)" class="deleteButton"></div><div v-on:click="onc_banner(index,$event)">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration" >' +
        '{{title}}<span v-show="empty" style="color:red;">*</span></div>' +
        '<div class="yb_pic"><img style="width: 100px;height: 100px;" src="' + host + 'addons/yb_shop/core/public/menu/images/add_pic.jpg"></div></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_pic").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_pic").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_pic_title").val(bannerVM.all_data[index]['title']);

            //标题字体
            $("#id_this_pic_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_pic_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_pic_title_font_color").val(bannerVM.all_data[index]['title_font_color']);
            //标题行高
            $("#id_this_pic_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_pic_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);

            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_pic_title_font_weight').css("color", "");
            } else {
                $('#id_this_pic_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_pic_title_font_style').css("color", "");
            } else {
                $('#id_this_pic_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_pic_title_text_decoration').css("color", "");
            } else {
                $('#id_this_pic_title_text_decoration').css("color", "blue");
            }


            if (bannerVM.all_data[index]['empty'] == false) {
                $("#this_pic_empty1").prop("checked", "checked");
            } else {
                $("#this_pic_empty2").prop("checked", "checked");
            }
            bannerVM.now_index = index;
        },
    },
})
Vue.component('form_pic_arr', {
    props: ['empty','index', 'title', 'time_key', 'title_font_family', 'title_font_size', 'title_font_color', 'title_line_height', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li title="点击进行修改,拖动交换位置" class="ui-draggable"><div v-on:click="del_left(index)" class="deleteButton"></div><div v-on:click="onc_banner(index,$event)">' +
        '<div class="title" :style="' + "'font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';height:'" + '+title_line_height+' + "'px;font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration" >' +
        '{{title}}<span v-show="empty" style="color:red;">*</span></div>' +
        '<div class="yb_pic_arr"><img style="width: 100px;height: 100px;" src="' + host + 'addons/yb_shop/core/public/menu/images/add_pic.jpg"></div></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_edit_pic_arr").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_edit_pic_arr").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_pic_arr_title").val(bannerVM.all_data[index]['title']);
            //标题字体
            $("#id_this_pic_arr_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_pic_arr_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_pic_arr_title_font_color").val(bannerVM.all_data[index]['title_font_color']);
            //标题行高
            $("#id_this_pic_arr_title_line_height").val(bannerVM.all_data[index]['title_line_height']);
            $("#id_this_pic_arr_title_line_height_span").text(bannerVM.all_data[index]['title_line_height']);

            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_pic_arr_title_font_weight').css("color", "");
            } else {
                $('#id_this_pic_arr_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_pic_arr_title_font_style').css("color", "");
            } else {
                $('#id_this_pic_arr_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_pic_arr_title_text_decoration').css("color", "");
            } else {
                $('#id_this_pic_arr_title_text_decoration').css("color", "blue");
            }

            if (bannerVM.all_data[index]['empty'] == false) {
                $("#this_pic_arr_empty1").prop("checked", "checked");
            } else {
                $("#this_pic_arr_empty2").prop("checked", "checked");
            }
            bannerVM.now_index = index;
        },
    },
})
Vue.component('form_button', {
    props: ['box_width','border_color','border_width','border_radius','index', 'title', 'color', 'opacity', 'title_font_family', 'title_font_size', 'title_font_color', 'title_font_weight', 'title_font_style', 'title_text_decoration'],
    template: '<li id="get_button_len" title="点击进行修改,拖动交换位置" class="ui-draggable"><div v-on:click="del_left(index)" class="deleteButton"></div>' +
        '<div class="form_button" :style="'+"'width:'"+'+box_width+'+"'%'"+'"   v-on:click="onc_banner(index,$event)" >' +
        '<button type="button"  :style="' + "'border: 1px solid rgb(239, 239, 239);background-color:'" + '+color+' + "';font-family:'" + '+title_font_family+' + "';font-size:'" + '+title_font_size+' + "'px;color:'" + '+title_font_color+' + "';font-weight:'" + '+title_font_weight+' + "';font-style:'" + '+title_font_style+' + "';text-decoration:'" + '+title_text_decoration+' + "';opacity:'" + '+opacity+'+"';border-color:'"+'+border_color+'+"';border-width:'"+'+border_width+'+"'px;border-radius:'"+'+border_radius+'+"'px'"+'">{{title}}</button></div></li>',
    methods: {
        //删除
        del_left: function (index) {
            bannerVM.all_data.splice(index, 1);
            $("#form_button").css("display", 'none');
        },
        //选中
        onc_banner: function (index, e) {
            $(".activeMod").children().children().removeClass('yb_select');
            $(".activeMod").children().children().eq(index).addClass('yb_select');
            $("#form_button").css("display", 'block').siblings().css("display", 'none');
            $("#id_this_button_title").val(bannerVM.all_data[index]['title']);
            $("#id_this_button_bg").val(bannerVM.all_data[index]['color']);
            //$("#id_this_button_color").val(bannerVM.all_data[index]['text_color']);
            //标题字体
            $("#id_this_button_title_font_family").val(bannerVM.all_data[index]['title_font_family']);
            //标题字号
            $("#id_this_button_title_font_size").val(bannerVM.all_data[index]['title_font_size']);
            //标题颜色
            $("#id_this_button_title_font_color").val(bannerVM.all_data[index]['title_font_color']);

            //加粗
            if (bannerVM.all_data[index]['title_font_weight'] == 'normal') {
                $('#id_this_button_title_font_weight').css("color", "");
            } else {
                $('#id_this_button_title_font_weight').css("color", "blue");
            }
            //斜体
            if (bannerVM.all_data[index]['title_font_style'] == 'normal') {

                $('#id_this_button_title_font_style').css("color", "");
            } else {
                $('#id_this_button_title_font_style').css("color", "blue");
            }
            //下划线
            if (bannerVM.all_data[index]['title_text_decoration'] == 'none') {
                $('#id_this_button_title_text_decoration').css("color", "");
            } else {
                $('#id_this_button_title_text_decoration').css("color", "blue");
            }

            //宽度
            $("#id_this_button_box_width").val(bannerVM.all_data[index]['box_width']);
            $("#id_this_button_box_width_span").text(bannerVM.all_data[index]['box_width']);

            //边框颜色
            $("#id_this_button_border_color").val(bannerVM.all_data[index]['border_color']);

            //边框线宽
            $("#id_this_button_border_width").val(bannerVM.all_data[index]['border_width']);
            $("#id_this_button_border_width_span").text(bannerVM.all_data[index]['border_width']);

            //边框圆角
            $("#id_this_button_border_radius").val(bannerVM.all_data[index]['border_radius']);
            $("#id_this_button_border_radius_span").text(bannerVM.all_data[index]['border_radius']);


            $("#id_this_button_href").val(bannerVM.all_data[index]['form_href_name']);
            bannerVM.now_index = index;
        },
    },
})
var bannerVM = new Vue({
    el: '#b_menu',
    data: {
        all_data: [],//所有数据
        checkbox_list: [],//多选框数据
        radio_list: [],//单选框数据
        picker_list: [],//下拉框
        now_index: 0,//当前下标
        style_type: 3,
        this_index: 0,//当前下标
    },
    mounted: function () {
        this.$dragging.$on('dragged', function (data) {
            // $("#from_edit_goodlist").css("display",'none').siblings().css("display",'none');
            var list = Object.keys(data['value']['list']);
            var index = '';
            for (var i = 0; i < list.length; i++) {
                if (data['draged']['time_key'] == data['value']['list'][i]['time_key']) {
                    index = i;
                }
            }
            bannerVM.now_index = index;
        })
        this.$dragging.$on('dragend', function (data) {
        })
    },
})