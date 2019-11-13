function uploadFile(a, b, c, d) {
    var e = document.getElementById(a), f = e.files[0];
    validationFile(f, d) && $.ajaxFileUpload({
        url: host + "addons/yb_shop/core/index.php?s=/admin/upload/uploadfile",
        secureuri: !1,
        fileElementId: a,
        dataType: "text",
        data: b,
        async: !1,
        contentType: "text/json;charset=utf-8",
        success: function (a) {
            var b = a.split("<");
            c.call(this, JSON.parse(b[0]))
        },
        error: function (a) {
            console.log("error:" + a.responseText)
        }
    })
}

function validationFile(a, b) {
    var d, e,
        c = ["application/php", "text/html", "application/javascript", "application/msword", "application/x-msdownload", "text/plain"];
    if (null == a) return !1;
    if (!a.type) return 1 == b ? layer.msg("文件类型不合法") : "pc" == b ? $.msg("文件类型不合法") : showTip("文件类型不合法", "warning"), !1;
    for (d = !1, e = 0; e < c.length; e++) if (a.type == c[e]) {
        d = !0;
        break
    }
    return d ? (1 == b ? layer.msg("文件类型不合法") : "pc" == b ? $.msg("文件类型不合法") : showTip("文件类型不合法", "warning"), !1) : !0
}

function removeFile(a) {
    $.ajax({
        url: host + "addons/yb_shop/core/index.php?s=/admin/upload/removefile",
        type: "post",
        data: {filename: a},
        success: function (a) {
            showTip("本次操作共删除" + a.success_count + "个文件," + a.error_count + "个文件失败", "success")
        }
    })
}

function specImgUpload(a, b, c) {
    var d = document.getElementById(a), e = d.files[0];
    validationFile(e) && $.ajaxFileUpload({
        url: host + "addons/yb_shop/core/index.php?s=/admin/upload/specimgupload",
        secureuri: !1,
        fileElementId: a,
        dataType: "json",
        data: b,
        async: !1,
        contentType: "text/json;charset=utf-8",
        success: function (a) {
            c.call(this, a)
        }
    })
}

var host = UM_SITE_ROOT.replace("addons/yb_shop/core/index.php?s=/", "");