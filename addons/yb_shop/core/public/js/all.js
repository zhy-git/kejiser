var layer_ii = '';

function load_page(url, div_class, data, alert_time) {
    div_class = div_class || "main-content";
    data = data || "";
    alert_time = alert_time || 0;
    if (alert_time > 0) {
        layer_ii = layer.msg("加载中，请稍后... ...", {icon: 16, shade: 0.3, time: alert_time * 1000});
    }
    $("div[class=" + div_class + "]").load(url, data, function (res) {
        if (top_menu.now_key != -1) {
            $("#dont_touch_this").text(top_menu.now_key)
        }
        layer.close(layer_ii);
    });
}

function parent_flash(url) {
    url = url || top_menu.now_url;
    load_page(url);
}

function layer_open(title, url, w, h, close) {
    if (typeof(close) != 'boolean') {
        close = true;
    }
    w = parseInt(w);
    if (w > 1000) {
        w = 1000;
    }
    w += "px";
    h = parseInt(h);
    if (h > 800) {
        h = 800;
    }
    h += "px";
    layer.open({
        type: 2,
        area: [w, h],
        fix: false,
        maxmin: true,
        shade: 0.4,
        title: title,
        content: url,
        scrollbar: false,
        shadeClose: close
    });
}

function layer_close(url) {
    url = url || '';
    var index = parent.layer.getFrameIndex(window.name);
    parent.parent_flash(url);
    parent.layer.close(index);
}