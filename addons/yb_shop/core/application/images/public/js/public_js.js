function layer_show(title,url,w,h){
    if (!title || title === "") {
        title=false;
    };
    if (!url || url === "") {
        url="404.html";
    };
    if (!w || w === "") {
        w=800;
    };
    if (!h || h === "") {
        h=($(window).height() - 50);
    };

    w += "";
    h += "";
    w = w.indexOf("%") < 0 ? w.replace("px","")+"px" : w;
    h = h.indexOf("%") < 0 ? h.replace("px","")+"px" : h;

    layer.open({
        type: 2,
        area: [w, h],
        fix: true, //不固定
        maxmin: true,
        shade:0.4,
        title: title,
        content: url,
        scrollbar:false,
        shadeClose:true
    });
}
var ajax_running = false;
function AjaxPost(url,data,success,fail) {
    if(ajax_running)return;
    ajax_running = true;
    $.ajax({
        type : "post",
        url : url,
        data : data,
        dataType:"json",
        success : function(data) {
            if (data['code'] > 0) {
                layer.msg('操作成功',{icon:1,time:1000},function () {
                    success && success();
                });
            }else{
                layer.msg(data['msg'] || "操作失败", {icon: 2, time: 1000},function () {
                    fail && fail();
                });
            }
            ajax_running = false;
        },
        fail:function (err) {
            console.log(err);
            layer.msg("操作失败", {icon: 2, time: 1000},function () {
                fail && fail();
            });
            ajax_running = false;
        }
    })
}