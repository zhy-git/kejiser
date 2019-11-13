define("siteinfo.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    module.exports = {
        name: 'yb_shop',
        uniacid: __uniacid__,
        acid: "30",
        version: "1.0.0",
        siteroot: "https://wq.sssvip.net/app/index.php"
    }
});
;define("utils/conf.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    /*
     Tencent is pleased to support the open source community by making Face-2-Face Translator available.
     Copyright (C) 2018 THL A29 Limited, a Tencent company. All rights reserved.
     Licensed under the MIT License (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at
     http://opensource.org/licenses/MIT
     Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
     */
    var language = [{
        id: 0,
        lang_name: "中文",
        lang_content: "zh_CN",
        lang_to: ["en_US"],
        max_length: 300,
        source_language: "输入文字",
        target_language: "输出文字",
        hold_talk: "长按说话",
        keyboard_input: "键盘输入",
        type_here: "输入文字",
        bg_content: "请输入翻译内容",
        record_failed: "录制失败",
        recognize_nothing: "请说话",
        time_left: "录音输入倒数",
        text_left: "剩余文本长度",
        prompt_time: "提示秒数",
        upload_failed: "上传失败",
        translating: "翻译中",
        text_limit: "限制长度",
        input_tip: "请输入有效文字",
        request_failed: "请求失败",
        delete_tip: "删除该项",
        cancel: "取消",
        bubble_tip: "请输入文本",
        bg_bubble: "正在听你说话",
        copy_source_text: "复制原文",
        copy_target_text: "复制译文",
        delete_item: "删除",
        exceed_network: "网络请求失败",
        retry_network: "尝试重新连接",
        wait_last_record: "请等待翻译结束",
        access_auth: "请检查权限",
        access_network: "网络错误",
        login: "登录"
    }, {
        id: 1,
        lang_name: "EN",
        lang_content: "en_US",
        lang_to: ["zh_CN"],
        max_length: 1800,
        source_language: "Source Language",
        target_language: "Target Language",
        hold_talk: "Hold To Talk",
        keyboard_input: "Keyboard",
        type_here: "Type here...",
        bg_content: "Please enter the content to be translated",
        record_failed: "Audio recording failed",
        recognize_nothing: "Nothing recognized",
        time_left: "Recording time left",
        text_left: "Inputing text left",
        prompt_time: "Prompt time",
        upload_failed: "Upload failed",
        translating: "Translating",
        text_limit: "Text length has reached the limit",
        input_tip: "Please enter valid text",
        request_failed: "Request failed",
        delete_tip: "Delete this item",
        cancel: "Cancel",
        bubble_tip: "Please input English content",
        bg_bubble: "Please speak English",
        copy_source_text: "Copy Source",
        copy_target_text: "Copy Target",
        delete_item: "Delete",
        exceed_network: "Network request failed",
        retry_network: "Retry connect",
        access_auth: "Please checkout authorization",
        access_network: "Network error",
        login: "Login"
    }];
    module.exports = {
        language: language
    };
});
;define("utils/qqmap-wx-jssdk.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var _createClass = function () {
        function o(t, e) {
            for (var i = 0; i < e.length; i++) {
                var o = e[i];
                o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(t, o.key, o);
            }
        }
        return function (t, e, i) {
            return e && o(t.prototype, e), i && o(t, i), t;
        };
    }();
    function _classCallCheck(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
    }
    var ERROR_CONF = {
            KEY_ERR: 311,
            KEY_ERR_MSG: "key格式错误",
            PARAM_ERR: 310,
            PARAM_ERR_MSG: "请求参数信息有误",
            SYSTEM_ERR: 600,
            SYSTEM_ERR_MSG: "系统错误",
            WX_ERR_CODE: 1e3,
            WX_OK_CODE: 200
        },
        BASE_URL = "https://apis.map.qq.com/ws/",
        URL_SEARCH = BASE_URL + "place/v1/search",
        URL_SUGGESTION = BASE_URL + "place/v1/suggestion",
        URL_GET_GEOCODER = BASE_URL + "geocoder/v1/",
        URL_CITY_LIST = BASE_URL + "district/v1/list",
        URL_AREA_LIST = BASE_URL + "district/v1/getchildren",
        URL_DISTANCE = BASE_URL + "distance/v1/",
        Utils = {
            location2query: function location2query(t) {
                if ("string" == typeof t) return t;
                for (var e = "", i = 0; i < t.length; i++) {
                    var o = t[i];
                    e && (e += ";"), o.location && (e = e + o.location.lat + "," + o.location.lng), o.latitude && o.longitude && (e = e + o.latitude + "," + o.longitude);
                }
                return e;
            },
            getWXLocation: function getWXLocation(t, e, i) {
                wx.getLocation({
                    type: "gcj02",
                    success: t,
                    fail: e,
                    complete: i
                });
            },
            getLocationParam: function getLocationParam(t) {
                "string" == typeof t && (t = 2 === t.split(",").length ? {
                    latitude: t.split(",")[0],
                    longitude: t.split(",")[1]
                } : {});
                return t;
            },
            polyfillParam: function polyfillParam(t) {
                t.success = t.success || function () {
                    }, t.fail = t.fail || function () {
                    }, t.complete = t.complete || function () {
                    };
            },
            checkParamKeyEmpty: function checkParamKeyEmpty(t, e) {
                if (!t[e]) {
                    var i = this.buildErrorConfig(ERROR_CONF.PARAM_ERR, ERROR_CONF.PARAM_ERR_MSG + e + "参数格式有误");
                    return t.fail(i), t.complete(i), !0;
                }
                return !1;
            },
            checkKeyword: function checkKeyword(t) {
                return !this.checkParamKeyEmpty(t, "keyword");
            },
            checkLocation: function checkLocation(t) {
                var e = this.getLocationParam(t.location);
                if (!e || !e.latitude || !e.longitude) {
                    var i = this.buildErrorConfig(ERROR_CONF.PARAM_ERR, ERROR_CONF.PARAM_ERR_MSG + " location参数格式有误");
                    return t.fail(i), t.complete(i), !1;
                }
                return !0;
            },
            buildErrorConfig: function buildErrorConfig(t, e) {
                return {
                    status: t,
                    message: e
                };
            },
            buildWxRequestConfig: function buildWxRequestConfig(i, t) {
                var o = this;
                return t.header = {
                    "content-type": "application/json"
                }, t.method = "GET", t.success = function (t) {
                    var e = t.data;
                    0 === e.status ? i.success(e) : i.fail(e);
                }, t.fail = function (t) {
                    t.statusCode = ERROR_CONF.WX_ERR_CODE, i.fail(o.buildErrorConfig(ERROR_CONF.WX_ERR_CODE, result.errMsg));
                }, t.complete = function (t) {
                    switch (+t.statusCode) {
                        case ERROR_CONF.WX_ERR_CODE:
                            i.complete(o.buildErrorConfig(ERROR_CONF.WX_ERR_CODE, t.errMsg));
                            break;
                        case ERROR_CONF.WX_OK_CODE:
                            var e = t.data;
                            0 === e.status ? i.complete(e) : i.complete(o.buildErrorConfig(e.status, e.message));
                            break;
                        default:
                            i.complete(o.buildErrorConfig(ERROR_CONF.SYSTEM_ERR, ERROR_CONF.SYSTEM_ERR_MSG));
                    }
                }, t;
            },
            locationProcess: function locationProcess(e, t, i, o) {
                var r = this;
                if (i = i || function (t) {
                            t.statusCode = ERROR_CONF.WX_ERR_CODE, e.fail(r.buildErrorConfig(ERROR_CONF.WX_ERR_CODE, t.errMsg));
                        }, o = o || function (t) {
                            t.statusCode == ERROR_CONF.WX_ERR_CODE && e.complete(r.buildErrorConfig(ERROR_CONF.WX_ERR_CODE, t.errMsg));
                        }, e.location) {
                    if (r.checkLocation(e)) {
                        t(Utils.getLocationParam(e.location));
                    }
                } else r.getWXLocation(t, i, o);
            }
        },
        QQMapWX = function () {
            function e(t) {
                if (_classCallCheck(this, e), !t.key) throw Error("key值不能为空");
                this.key = t.key;
            }
            return _createClass(e, [{
                key: "search",
                value: function value(e) {
                    if (e = e || {}, Utils.polyfillParam(e), Utils.checkKeyword(e)) {
                        var i = {
                            keyword: e.keyword,
                            orderby: e.orderby || "_distance",
                            page_size: e.page_size || 10,
                            page_index: e.page_index || 1,
                            output: "json",
                            key: this.key
                        };
                        e.address_format && (i.address_format = e.address_format), e.filter && (i.filter = e.filter);
                        var o = e.distance || "1000",
                            r = e.auto_extend || 1;
                        Utils.locationProcess(e, function (t) {
                            i.boundary = "nearby(" + t.latitude + "," + t.longitude + "," + o + "," + r + ")", wx.request(Utils.buildWxRequestConfig(e, {
                                url: URL_SEARCH,
                                data: i
                            }));
                        });
                    }
                }
            }, {
                key: "getSuggestion",
                value: function value(t) {
                    if (t = t || {}, Utils.polyfillParam(t), Utils.checkKeyword(t)) {
                        var e = {
                            keyword: t.keyword,
                            region: t.region || "全国",
                            region_fix: t.region_fix || 0,
                            policy: t.policy || 0,
                            output: "json",
                            key: this.key
                        };
                        wx.request(Utils.buildWxRequestConfig(t, {
                            url: URL_SUGGESTION,
                            data: e
                        }));
                    }
                }
            }, {
                key: "reverseGeocoder",
                value: function value(e) {
                    e = e || {}, Utils.polyfillParam(e);
                    var i = {
                        coord_type: e.coord_type || 5,
                        get_poi: e.get_poi || 0,
                        output: "json",
                        key: this.key
                    };
                    e.poi_options && (i.poi_options = e.poi_options);
                    Utils.locationProcess(e, function (t) {
                        i.location = t.latitude + "," + t.longitude, wx.request(Utils.buildWxRequestConfig(e, {
                            url: URL_GET_GEOCODER,
                            data: i
                        }));
                    });
                }
            }, {
                key: "geocoder",
                value: function value(t) {
                    if (t = t || {}, Utils.polyfillParam(t), !Utils.checkParamKeyEmpty(t, "address")) {
                        var e = {
                            address: t.address,
                            output: "json",
                            key: this.key
                        };
                        wx.request(Utils.buildWxRequestConfig(t, {
                            url: URL_GET_GEOCODER,
                            data: e
                        }));
                    }
                }
            }, {
                key: "getCityList",
                value: function value(t) {
                    t = t || {}, Utils.polyfillParam(t);
                    var e = {
                        output: "json",
                        key: this.key
                    };
                    wx.request(Utils.buildWxRequestConfig(t, {
                        url: URL_CITY_LIST,
                        data: e
                    }));
                }
            }, {
                key: "getDistrictByCityId",
                value: function value(t) {
                    if (t = t || {}, Utils.polyfillParam(t), !Utils.checkParamKeyEmpty(t, "id")) {
                        var e = {
                            id: t.id || "",
                            output: "json",
                            key: this.key
                        };
                        wx.request(Utils.buildWxRequestConfig(t, {
                            url: URL_AREA_LIST,
                            data: e
                        }));
                    }
                }
            }, {
                key: "calculateDistance",
                value: function value(e) {
                    if (e = e || {}, Utils.polyfillParam(e), !Utils.checkParamKeyEmpty(e, "to")) {
                        var i = {
                            mode: e.mode || "walking",
                            to: Utils.location2query(e.to),
                            output: "json",
                            key: this.key
                        };
                        e.from && (e.location = e.from), Utils.locationProcess(e, function (t) {
                            i.from = t.latitude + "," + t.longitude, wx.request(Utils.buildWxRequestConfig(e, {
                                url: URL_DISTANCE,
                                data: i
                            }));
                        });
                    }
                }
            }]), e;
        }();
    module.exports = QQMapWX;
});
;define("utils/qqmap-wx-jssdk.min.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var _createClass = function () {
        function o(t, e) {
            for (var i = 0; i < e.length; i++) {
                var o = e[i];
                o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(t, o.key, o);
            }
        }
        return function (t, e, i) {
            return e && o(t.prototype, e), i && o(t, i), t;
        };
    }();
    function _classCallCheck(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
    }
    var ERROR_CONF = {
            KEY_ERR: 311,
            KEY_ERR_MSG: "key格式错误",
            PARAM_ERR: 310,
            PARAM_ERR_MSG: "请求参数信息有误",
            SYSTEM_ERR: 600,
            SYSTEM_ERR_MSG: "系统错误",
            WX_ERR_CODE: 1e3,
            WX_OK_CODE: 200
        },
        BASE_URL = "https://apis.map.qq.com/ws/",
        URL_SEARCH = BASE_URL + "place/v1/search",
        URL_SUGGESTION = BASE_URL + "place/v1/suggestion",
        URL_GET_GEOCODER = BASE_URL + "geocoder/v1/",
        URL_CITY_LIST = BASE_URL + "district/v1/list",
        URL_AREA_LIST = BASE_URL + "district/v1/getchildren",
        URL_DISTANCE = BASE_URL + "distance/v1/",
        Utils = {
            location2query: function location2query(t) {
                if ("string" == typeof t) return t;
                for (var e = "", i = 0; i < t.length; i++) {
                    var o = t[i];
                    e && (e += ";"), o.location && (e = e + o.location.lat + "," + o.location.lng), o.latitude && o.longitude && (e = e + o.latitude + "," + o.longitude);
                }
                return e;
            },
            getWXLocation: function getWXLocation(t, e, i) {
                wx.getLocation({
                    type: "gcj02",
                    success: t,
                    fail: e,
                    complete: i
                });
            },
            getLocationParam: function getLocationParam(t) {
                "string" == typeof t && (t = 2 === t.split(",").length ? {
                    latitude: t.split(",")[0],
                    longitude: t.split(",")[1]
                } : {});
                return t;
            },
            polyfillParam: function polyfillParam(t) {
                t.success = t.success || function () {
                    }, t.fail = t.fail || function () {
                    }, t.complete = t.complete || function () {
                    };
            },
            checkParamKeyEmpty: function checkParamKeyEmpty(t, e) {
                if (!t[e]) {
                    var i = this.buildErrorConfig(ERROR_CONF.PARAM_ERR, ERROR_CONF.PARAM_ERR_MSG + e + "参数格式有误");
                    return t.fail(i), t.complete(i), !0;
                }
                return !1;
            },
            checkKeyword: function checkKeyword(t) {
                return !this.checkParamKeyEmpty(t, "keyword");
            },
            checkLocation: function checkLocation(t) {
                var e = this.getLocationParam(t.location);
                if (!e || !e.latitude || !e.longitude) {
                    var i = this.buildErrorConfig(ERROR_CONF.PARAM_ERR, ERROR_CONF.PARAM_ERR_MSG + " location参数格式有误");
                    return t.fail(i), t.complete(i), !1;
                }
                return !0;
            },
            buildErrorConfig: function buildErrorConfig(t, e) {
                return {
                    status: t,
                    message: e
                };
            },
            buildWxRequestConfig: function buildWxRequestConfig(i, t) {
                var o = this;
                return t.header = {
                    "content-type": "application/json"
                }, t.method = "GET", t.success = function (t) {
                    var e = t.data;
                    0 === e.status ? i.success(e) : i.fail(e);
                }, t.fail = function (t) {
                    t.statusCode = ERROR_CONF.WX_ERR_CODE, i.fail(o.buildErrorConfig(ERROR_CONF.WX_ERR_CODE, result.errMsg));
                }, t.complete = function (t) {
                    switch (+t.statusCode) {
                        case ERROR_CONF.WX_ERR_CODE:
                            i.complete(o.buildErrorConfig(ERROR_CONF.WX_ERR_CODE, t.errMsg));
                            break;
                        case ERROR_CONF.WX_OK_CODE:
                            var e = t.data;
                            0 === e.status ? i.complete(e) : i.complete(o.buildErrorConfig(e.status, e.message));
                            break;
                        default:
                            i.complete(o.buildErrorConfig(ERROR_CONF.SYSTEM_ERR, ERROR_CONF.SYSTEM_ERR_MSG));
                    }
                }, t;
            },
            locationProcess: function locationProcess(e, t, i, o) {
                var r = this;
                (i = i || function (t) {
                        t.statusCode = ERROR_CONF.WX_ERR_CODE, e.fail(r.buildErrorConfig(ERROR_CONF.WX_ERR_CODE, t.errMsg));
                    }, o = o || function (t) {
                        t.statusCode == ERROR_CONF.WX_ERR_CODE && e.complete(r.buildErrorConfig(ERROR_CONF.WX_ERR_CODE, t.errMsg));
                    }, e.location) ? r.checkLocation(e) && t(Utils.getLocationParam(e.location)) : r.getWXLocation(t, i, o);
            }
        },
        QQMapWX = function () {
            function e(t) {
                if (_classCallCheck(this, e), !t.key) throw Error("key值不能为空");
                this.key = t.key;
            }
            return _createClass(e, [{
                key: "search",
                value: function value(e) {
                    if (e = e || {}, Utils.polyfillParam(e), Utils.checkKeyword(e)) {
                        var i = {
                            keyword: e.keyword,
                            orderby: e.orderby || "_distance",
                            page_size: e.page_size || 10,
                            page_index: e.page_index || 1,
                            output: "json",
                            key: this.key
                        };
                        e.address_format && (i.address_format = e.address_format), e.filter && (i.filter = e.filter);
                        var o = e.distance || "1000",
                            r = e.auto_extend || 1;
                        Utils.locationProcess(e, function (t) {
                            i.boundary = "nearby(" + t.latitude + "," + t.longitude + "," + o + "," + r + ")", wx.request(Utils.buildWxRequestConfig(e, {
                                url: URL_SEARCH,
                                data: i
                            }));
                        });
                    }
                }
            }, {
                key: "getSuggestion",
                value: function value(t) {
                    if (t = t || {}, Utils.polyfillParam(t), Utils.checkKeyword(t)) {
                        var e = {
                            keyword: t.keyword,
                            region: t.region || "全国",
                            region_fix: t.region_fix || 0,
                            policy: t.policy || 0,
                            output: "json",
                            key: this.key
                        };
                        wx.request(Utils.buildWxRequestConfig(t, {
                            url: URL_SUGGESTION,
                            data: e
                        }));
                    }
                }
            }, {
                key: "reverseGeocoder",
                value: function value(e) {
                    e = e || {}, Utils.polyfillParam(e);
                    var i = {
                        coord_type: e.coord_type || 5,
                        get_poi: e.get_poi || 0,
                        output: "json",
                        key: this.key
                    };
                    e.poi_options && (i.poi_options = e.poi_options);
                    Utils.locationProcess(e, function (t) {
                        i.location = t.latitude + "," + t.longitude, wx.request(Utils.buildWxRequestConfig(e, {
                            url: URL_GET_GEOCODER,
                            data: i
                        }));
                    });
                }
            }, {
                key: "geocoder",
                value: function value(t) {
                    if (t = t || {}, Utils.polyfillParam(t), !Utils.checkParamKeyEmpty(t, "address")) {
                        var e = {
                            address: t.address,
                            output: "json",
                            key: this.key
                        };
                        wx.request(Utils.buildWxRequestConfig(t, {
                            url: URL_GET_GEOCODER,
                            data: e
                        }));
                    }
                }
            }, {
                key: "getCityList",
                value: function value(t) {
                    t = t || {}, Utils.polyfillParam(t);
                    var e = {
                        output: "json",
                        key: this.key
                    };
                    wx.request(Utils.buildWxRequestConfig(t, {
                        url: URL_CITY_LIST,
                        data: e
                    }));
                }
            }, {
                key: "getDistrictByCityId",
                value: function value(t) {
                    if (t = t || {}, Utils.polyfillParam(t), !Utils.checkParamKeyEmpty(t, "id")) {
                        var e = {
                            id: t.id || "",
                            output: "json",
                            key: this.key
                        };
                        wx.request(Utils.buildWxRequestConfig(t, {
                            url: URL_AREA_LIST,
                            data: e
                        }));
                    }
                }
            }, {
                key: "calculateDistance",
                value: function value(e) {
                    if (e = e || {}, Utils.polyfillParam(e), !Utils.checkParamKeyEmpty(e, "to")) {
                        var i = {
                            mode: e.mode || "walking",
                            to: Utils.location2query(e.to),
                            output: "json",
                            key: this.key
                        };
                        e.from && (e.location = e.from), Utils.locationProcess(e, function (t) {
                            i.from = t.latitude + "," + t.longitude, wx.request(Utils.buildWxRequestConfig(e, {
                                url: URL_DISTANCE,
                                data: i
                            }));
                        });
                    }
                }
            }]), e;
        }();
    module.exports = QQMapWX;
});
;define("utils/util.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var formatTime = function formatTime(t) {
            var e = t.getFullYear(),
                a = t.getMonth() + 1,
                r = t.getDate(),
                n = t.getHours(),
                o = t.getMinutes(),
                i = t.getSeconds();
            return [e, a, r].map(formatNumber).join("/") + " " + [n, o, i].map(formatNumber).join(":");
        },
        formatNumber = function formatNumber(t) {
            return (t = t.toString())[1] ? t : "0" + t;
        };
    function DateDiff(t, e) {
        var a, r, n;
        return a = t.split("-"), r = new Date(a[1] + "-" + a[2] + "-" + a[0]), a = e.split("-"), n = new Date(a[1] + "-" + a[2] + "-" + a[0]), parseInt(Math.abs(r - n) / 1e3 / 60 / 60 / 24);
    }
    function getDistance(t, e, a, r) {
        e = e || 0, a = a || 0, r = r || 0;
        var n = (t = t || 0) * Math.PI / 180,
            o = a * Math.PI / 180,
            i = n - o,
            u = e * Math.PI / 180 - r * Math.PI / 180;
        return 12756274 * Math.asin(Math.sqrt(Math.pow(Math.sin(i / 2), 2) + Math.cos(n) * Math.cos(o) * Math.pow(Math.sin(u / 2), 2)));
    }
    function ormatDate(t) {
        var e = new Date(1e3 * t);
        return e.getFullYear() + "-" + a(e.getMonth() + 1, 2) + "-" + a(e.getDate(), 2) + " " + a(e.getHours(), 2) + ":" + a(e.getMinutes(), 2) + ":" + a(e.getSeconds(), 2);
        function a(t, e) {
            for (var a = "" + t, r = a.length, n = "", o = e; o-- > r;) {
                n += "0";
            }
            return n + a;
        }
    }
    function recordTime(date) {
        var month = date.getMonth() + 1;
        var day = date.getDate();
        var hour = date.getHours();
        var minute = date.getMinutes();
        return [month, day].map(formatNumber).join('/') + ' ' + [hour, minute].map(formatNumber).join(':');
    }
    module.exports = {
        formatTime: formatTime,
        DateDiff: DateDiff,
        getDistance: getDistance,
        ormatDate: ormatDate,
        recordTime: recordTime
    };
});
;define("we7/pages/index/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var app = getApp();
    Page({
        data: {
            navs: [],
            slide: [],
            commend: [],
            userInfo: {}
        },
        onLoad: function onLoad() {
            var a = this;
            app.util.footer(a), app.util.request({
                url: "wxapp/home/nav",
                cachetime: "30",
                success: function success(e) {
                    e.data.message.errno || (console.log(e.data.message.message), a.setData({
                        navs: e.data.message.message
                    }));
                }
            }), app.util.request({
                url: "wxapp/home/slide",
                cachetime: "30",
                success: function success(e) {
                    e.data.message.errno || a.setData({
                        slide: e.data.message.message
                    });
                }
            }), app.util.request({
                url: "wxapp/home/commend",
                cachetime: "30",
                success: function success(e) {
                    e.data.message.errno || a.setData({
                        commend: e.data.message.message
                    });
                }
            });
        }
    });
});
;define("we7/pages/newsDetail/newsDetail.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var appInstance = getApp(),
        R_htmlToWxml = require("../../resource/js/htmlToWxml.js");
    Page({
        data: {
            scrollHeight: 0,
            newsData: {}
        },
        getNewsDetail: function getNewsDetail() {
            var t = this;
            wx.request({
                url: "https://wedengta.com/wxnews/getNews?action=DiscNewsContent&type=4&id=1478677877_1406730_1_9",
                headers: {
                    "Content-Type": "application/json"
                },
                success: function success(e) {
                    var o = e.data;
                    if (0 == o.ret) {
                        var n = JSON.parse(o.content);
                        n.content = R_htmlToWxml.html2json(n.sContent), n.time = appInstance.util.formatTime(1e3 * n.iTime), t.setData({
                            newsData: n
                        });
                    } else console.log("数据拉取失败");
                },
                fail: function fail(e) {
                    console.log("数据拉取失败");
                }
            });
        },
        stockClick: function stockClick(e) {
            var o = e.currentTarget.dataset.seccode,
                n = e.currentTarget.dataset.secname;
            console.log("stockClick:" + o + ";secName:" + n);
        },
        onLoad: function onLoad(e) {
            this.getNewsDetail(), console.log("onLoad");
        },
        onShow: function onShow() {
            console.log("onShow");
        },
        onReady: function onReady() {
            console.log("onReady");
        },
        onHide: function onHide() {
            console.log("onHide");
        },
        onUnload: function onUnload() {
            console.log("onUnload");
        }
    });
});
;define("we7/pages/selectarea/selectarea.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var _util = require("../utils/util"),
        API = "http://japi.zto.cn/zto/api_utf8/baseArea?msg_type=GET_AREA&data=",
        selectArea = {
            addDot: function addDot(e) {
                e instanceof Array && e.map(function (e) {
                    return 4 < e.fullName.length ? e.fullNameDot = e.fullName.slice(0, 4) + "..." : e.fullNameDot = e.fullName, e;
                });
            },
            load: function load(a) {
                a.setData({
                    isShow: !1
                }), (0, _util.Promise)(wx.request, {
                    url: API + "0",
                    method: "GET"
                }).then(function (e) {
                    var t = e.data.result[0];
                    return selectArea.addDot(e.data.result), a.setData({
                        proviceData: e.data.result,
                        "selectedProvince.index": 0,
                        "selectedProvince.code": t.code,
                        "selectedProvince.fullName": t.fullName
                    }), (0, _util.Promise)(wx.request, {
                        url: API + t.code,
                        method: "GET"
                    });
                }).then(function (e) {
                    var t = e.data.result[0];
                    return selectArea.addDot(e.data.result), a.setData({
                        cityData: e.data.result,
                        "selectedCity.index": 0,
                        "selectedCity.code": t.code,
                        "selectedCity.fullName": t.fullName
                    }), (0, _util.Promise)(wx.request, {
                        url: API + t.code,
                        method: "GET"
                    });
                }).then(function (e) {
                    var t = e.data.result[0];
                    selectArea.addDot(e.data.result), a.setData({
                        districtData: e.data.result,
                        "selectedDistrict.index": 0,
                        "selectedDistrict.code": t.code,
                        "selectedDistrict.fullName": t.fullName
                    });
                }).catch(function (e) {
                    console.log(e);
                });
            },
            tapProvince: function tapProvince(t, a) {
                var l = t.currentTarget.dataset;
                (0, _util.Promise)(wx.request, {
                    url: API + l.code,
                    method: "GET"
                }).then(function (e) {
                    return selectArea.addDot(e.data.result), a.setData({
                        cityData: e.data.result,
                        "selectedProvince.code": l.code,
                        "selectedProvince.fullName": l.fullName,
                        "selectedCity.code": e.data.result[0].code,
                        "selectedCity.fullName": e.data.result[0].fullName
                    }), (0, _util.Promise)(wx.request, {
                        url: API + e.data.result[0].code,
                        method: "GET"
                    });
                }).then(function (e) {
                    selectArea.addDot(e.data.result), a.setData({
                        districtData: e.data.result,
                        "selectedProvince.index": t.currentTarget.dataset.index,
                        "selectedCity.index": 0,
                        "selectedDistrict.index": 0,
                        "selectedDistrict.code": e.data.result[0].code,
                        "selectedDistrict.fullName": e.data.result[0].fullName
                    });
                }).catch(function (e) {
                    console.log(e);
                });
            },
            tapCity: function tapCity(t, a) {
                var l = t.currentTarget.dataset;
                (0, _util.Promise)(wx.request, {
                    url: API + l.code,
                    method: "GET"
                }).then(function (e) {
                    selectArea.addDot(e.data.result), a.setData({
                        districtData: e.data.result,
                        "selectedCity.index": t.currentTarget.dataset.index,
                        "selectedCity.code": l.code,
                        "selectedCity.fullName": l.fullName,
                        "selectedDistrict.index": 0,
                        "selectedDistrict.code": e.data.result[0].code,
                        "selectedDistrict.fullName": e.data.result[0].fullName
                    });
                }).catch(function (e) {
                    console.log(e);
                });
            },
            tapDistrict: function tapDistrict(e, t) {
                var a = e.currentTarget.dataset;
                t.setData({
                    "selectedDistrict.index": e.currentTarget.dataset.index,
                    "selectedDistrict.code": a.code,
                    "selectedDistrict.fullName": a.fullName
                });
            },
            confirm: function confirm(e, t) {
                t.setData({
                    address: t.data.selectedProvince.fullName + " " + t.data.selectedCity.fullName + " " + t.data.selectedDistrict.fullName,
                    isShow: !1
                });
            },
            cancel: function cancel(e) {
                e.setData({
                    isShow: !1
                });
            },
            choosearea: function choosearea(e) {
                e.setData({
                    isShow: !0
                });
            }
        };
    module.exports = {
        SA: selectArea
    };
});
;define("we7/pages/user/index/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var app = getApp();
    Page({
        data: {
            text: "微擎我的"
        },
        onLoad: function onLoad(n) {
            app.util.footer(this);
        },
        onReady: function onReady() {
        },
        onShow: function onShow() {
        },
        onHide: function onHide() {
        },
        onUnload: function onUnload() {
        }
    });
});
;define("we7/resource/js/base64.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    function base64_encode(r) {
        for (var e, a, t, o = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/", c = 0, h = r.length, d = ""; c < h;) {
            if (e = 255 & r.charCodeAt(c++), c == h) {
                d += o.charAt(e >> 2), d += o.charAt((3 & e) << 4), d += "==";
                break;
            }
            if (a = r.charCodeAt(c++), c == h) {
                d += o.charAt(e >> 2), d += o.charAt((3 & e) << 4 | (240 & a) >> 4), d += o.charAt((15 & a) << 2), d += "=";
                break;
            }
            t = r.charCodeAt(c++), d += o.charAt(e >> 2), d += o.charAt((3 & e) << 4 | (240 & a) >> 4), d += o.charAt((15 & a) << 2 | (192 & t) >> 6), d += o.charAt(63 & t);
        }
        return d;
    }
    function base64_decode(r) {
        for (var e, a, t, o, c = new Array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1, -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1), h = 0, d = r.length, f = ""; h < d;) {
            for (; e = c[255 & r.charCodeAt(h++)], h < d && -1 == e;) {
            }
            if (-1 == e) break;
            for (; a = c[255 & r.charCodeAt(h++)], h < d && -1 == a;) {
            }
            if (-1 == a) break;
            f += String.fromCharCode(e << 2 | (48 & a) >> 4);
            do {
                if (61 == (t = 255 & r.charCodeAt(h++))) return f;
                t = c[t];
            } while (h < d && -1 == t);
            if (-1 == t) break;
            f += String.fromCharCode((15 & a) << 4 | (60 & t) >> 2);
            do {
                if (61 == (o = 255 & r.charCodeAt(h++))) return f;
                o = c[o];
            } while (h < d && -1 == o);
            if (-1 == o) break;
            f += String.fromCharCode((3 & t) << 6 | o);
        }
        return f;
    }
    module.exports = {
        base64_encode: base64_encode,
        base64_decode: base64_decode
    };
});
;define("we7/resource/js/htmlToWxml.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var startTag = /^<([-A-Za-z0-9_]+)((?:\s+[a-zA-Z_:][-a-zA-Z0-9_:.]*(?:\s*=\s*(?:(?:"[^"]*")|(?:'[^']*')|[^>\s]+))?)*)\s*(\/?)>/,
        endTag = /^<\/([-A-Za-z0-9_]+)[^>]*>/,
        attr = /([a-zA-Z_:][-a-zA-Z0-9_:.]*)(?:\s*=\s*(?:(?:"((?:\\.|[^"])*)")|(?:'((?:\\.|[^'])*)')|([^>\s]+)))?/g,
        empty = makeMap("area,base,basefont,br,col,frame,hr,img,input,link,meta,param,embed,command,keygen,source,track,wbr"),
        block = makeMap("a,address,article,applet,aside,audio,blockquote,button,canvas,center,dd,del,dir,div,dl,dt,fieldset,figcaption,figure,footer,form,frameset,h1,h2,h3,h4,h5,h6,header,hgroup,hr,iframe,ins,isindex,li,map,menu,noframes,noscript,object,ol,output,p,pre,section,script,table,tbody,td,tfoot,th,thead,tr,ul,video"),
        inline = makeMap("abbr,acronym,applet,b,basefont,bdo,big,br,button,cite,code,del,dfn,em,font,i,iframe,img,input,ins,kbd,label,map,object,q,s,samp,script,select,small,span,strike,strong,sub,sup,textarea,tt,u,var"),
        closeSelf = makeMap("colgroup,dd,dt,li,options,p,td,tfoot,th,thead,tr"),
        fillAttrs = makeMap("checked,compact,declare,defer,disabled,ismap,multiple,nohref,noresize,noshade,nowrap,readonly,selected"),
        special = makeMap("script,style"),
        HTMLParser = function HTMLParser(e, n) {
            var t,
                a,
                r,
                s = [],
                i = e;
            for (s.last = function () {
                return this[this.length - 1];
            }; e;) {
                if (a = !0, s.last() && special[s.last()]) e = e.replace(new RegExp("([\\s\\S]*?)</" + s.last() + "[^>]*>"), function (e, t) {
                    return t = t.replace(/<!--([\s\S]*?)-->|<!\[CDATA\[([\s\S]*?)]]>/g, "$1$2"), n.chars && n.chars(t), "";
                }), c("", s.last()); else if (0 == e.indexOf("\x3c!--") ? 0 <= (t = e.indexOf("--\x3e")) && (n.comment && n.comment(e.substring(4, t)), e = e.substring(t + 3), a = !1) : 0 == e.indexOf("</") ? (r = e.match(endTag)) && (e = e.substring(r[0].length), r[0].replace(endTag, c), a = !1) : 0 == e.indexOf("<") && (r = e.match(startTag)) && (e = e.substring(r[0].length), r[0].replace(startTag, o), a = !1), a) {
                    var l = (t = e.indexOf("<")) < 0 ? e : e.substring(0, t);
                    e = t < 0 ? "" : e.substring(t), n.chars && n.chars(l);
                }
                if (e == i) throw "Parse Error: " + e;
                i = e;
            }
            function o(e, t, a, r) {
                if (t = t.toLowerCase(), block[t]) for (; s.last() && inline[s.last()];) {
                    c("", s.last());
                }
                if (closeSelf[t] && s.last() == t && c("", t), (r = empty[t] || !!r) || s.push(t), n.start) {
                    var i = [];
                    a.replace(attr, function (e, t) {
                        var a = arguments[2] ? arguments[2] : arguments[3] ? arguments[3] : arguments[4] ? arguments[4] : fillAttrs[t] ? t : "";
                        i.push({
                            name: t,
                            value: a,
                            escaped: a.replace(/(^|[^\\])"/g, '$1\\"')
                        });
                    }), n.start && n.start(t, i, r);
                }
            }
            function c(e, t) {
                if (t) for (a = s.length - 1; 0 <= a && s[a] != t; a--) {
                } else var a = 0;
                if (0 <= a) {
                    for (var r = s.length - 1; a <= r; r--) {
                        n.end && n.end(s[r]);
                    }
                    s.length = a;
                }
            }
            c();
        };
    function makeMap(e) {
        for (var t = {}, a = e.split(","), r = 0; r < a.length; r++) {
            t[a[r]] = !0;
        }
        return t;
    }
    var global = {},
        debug = function debug() {
        };
    function q(e) {
        return '"' + e + '"';
    }
    function removeDOCTYPE(e) {
        return e.replace(/<\?xml.*\?>\n/, "").replace(/<!doctype.*\>\n/, "").replace(/<!DOCTYPE.*\>\n/, "");
    }
    global.html2json = function (e) {
        e = removeDOCTYPE(e);
        var n = [],
            s = {
                node: "root",
                child: []
            };
        return HTMLParser(e, {
            start: function start(e, t, a) {
                debug(e, t, a);
                var r = {
                    node: "element",
                    tag: e
                };
                if (0 !== t.length && (r.attr = t.reduce(function (e, t) {
                        var a = t.name,
                            r = t.value;
                        return r.match(/ /) && (r = r.split(" ")), e[a] ? Array.isArray(e[a]) ? e[a].push(r) : e[a] = [e[a], r] : e[a] = r, e;
                    }, {})), a) {
                    var i = n[0] || s;
                    void 0 === i.child && (i.child = []), i.child.push(r);
                } else n.unshift(r);
            },
            end: function end(e) {
                debug(e);
                var t = n.shift();
                if (t.tag !== e && console.error("invalid state: mismatch end tag"), 0 === n.length) s.child.push(t); else {
                    var a = n[0];
                    void 0 === a.child && (a.child = []), a.child.push(t);
                }
            },
            chars: function chars(e) {
                debug(e);
                var t = {
                    node: "text",
                    text: e
                };
                if (0 === n.length) s.child.push(t); else {
                    var a = n[0];
                    void 0 === a.child && (a.child = []), a.child.push(t);
                }
            },
            comment: function comment(e) {
                debug(e);
                var t = {
                        node: "comment",
                        text: e
                    },
                    a = n[0];
                void 0 === a.child && (a.child = []), a.child.push(t);
            }
        }), s;
    }, global.json2html = function t(a) {
        var e = "";
        a.child && (e = a.child.map(function (e) {
            return t(e);
        }).join(""));
        var r = "";
        if (a.attr && "" !== (r = Object.keys(a.attr).map(function (e) {
                var t = a.attr[e];
                return Array.isArray(t) && (t = t.join(" ")), e + "=" + q(t);
            }).join(" ")) && (r = " " + r), "element" === a.node) {
            var i = a.tag;
            return -1 < ["area", "base", "basefont", "br", "col", "frame", "hr", "img", "input", "isindex", "link", "meta", "param", "embed"].indexOf(i) ? "<" + a.tag + r + "/>" : "<" + a.tag + r + ">" + e + ("</" + a.tag + ">");
        }
        return "text" === a.node ? a.text : "comment" === a.node ? "\x3c!--" + a.text + "--\x3e" : "root" === a.node ? e : void 0;
    };
    var html2wxwebview = function html2wxwebview(e) {
            var t = global.html2json(e);
            return t = parseHtmlNode(t), t = arrangeNode(t);
        },
        arrangeNode = function arrangeNode(e) {
            for (var t = [], a = [], r = 0, i = e.length; r < i; r++) {
                if (0 == r) {
                    if ("view" == e[r].type) continue;
                    t.push(e[r]);
                } else if ("view" == e[r].type) {
                    if (0 < t.length) {
                        var n = {
                            type: "view",
                            child: t
                        };
                        a.push(n);
                    }
                    t = [];
                } else if ("img" == e[r].type) {
                    if (0 < t.length) {
                        n = {
                            type: "view",
                            child: t
                        };
                        a.push(n);
                    }
                    var s = e[r].attr;
                    e[r].attr.width && -1 === e[r].attr.width.indexOf("%") && -1 === e[r].attr.width.indexOf("px") && (e[r].attr.width = e[r].attr.width + "px"), e[r].attr.height && -1 === e[r].attr.height.indexOf("%") && -1 === e[r].attr.height.indexOf("px") && (e[r].attr.height = e[r].attr.height + "px");
                    n = {
                        type: "img",
                        attr: s
                    };
                    a.push(n), t = [];
                } else if (t.push(e[r]), r == i - 1) {
                    n = {
                        type: "view",
                        child: t
                    };
                    a.push(n);
                }
            }
            return a;
        },
        parseHtmlNode = function parseHtmlNode(e) {
            var n = [];
            return function e(t) {
                var a = {};
                if ("root" == t.node) ; else if ("element" == t.node) switch (t.tag) {
                    case "a":
                        a = {
                            type: "a",
                            text: t.child[0].text
                        };
                        break;
                    case "img":
                        a = {
                            type: "img",
                            text: t.text
                        };
                        break;
                    case "p":
                    case "div":
                        a = {
                            type: "view",
                            text: t.text
                        };
                } else "text" == t.node && (a = {
                    type: "text",
                    text: t.text
                });
                if (t.attr && (a.attr = t.attr), 0 != Object.keys(a).length && n.push(a), "a" != t.tag) {
                    var r = t.child;
                    if (r) for (var i in r) {
                        e(r[i]);
                    }
                }
            }(e), n;
        };
    module.exports = {
        html2json: html2wxwebview
    };
});
;define("we7/resource/js/md5.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    !function (n) {
        function v(n, r) {
            var t = (65535 & n) + (65535 & r);
            return (n >> 16) + (r >> 16) + (t >> 16) << 16 | 65535 & t;
        }
        function f(n, r, t, e, o, u) {
            return v((c = v(v(r, n), v(e, u))) << (f = o) | c >>> 32 - f, t);
            var c, f;
        }
        function g(n, r, t, e, o, u, c) {
            return f(r & t | ~r & e, n, r, o, u, c);
        }
        function l(n, r, t, e, o, u, c) {
            return f(r & e | t & ~e, n, r, o, u, c);
        }
        function d(n, r, t, e, o, u, c) {
            return f(r ^ t ^ e, n, r, o, u, c);
        }
        function C(n, r, t, e, o, u, c) {
            return f(t ^ (r | ~e), n, r, o, u, c);
        }
        function i(n, r) {
            var t, e, o, u, c;
            n[r >> 5] |= 128 << r % 32, n[14 + (r + 64 >>> 9 << 4)] = r;
            var f = 1732584193,
                i = -271733879,
                a = -1732584194,
                h = 271733878;
            for (t = 0; t < n.length; t += 16) {
                i = C(i = C(i = C(i = C(i = d(i = d(i = d(i = d(i = l(i = l(i = l(i = l(i = g(i = g(i = g(i = g(o = i, a = g(u = a, h = g(c = h, f = g(e = f, i, a, h, n[t], 7, -680876936), i, a, n[t + 1], 12, -389564586), f, i, n[t + 2], 17, 606105819), h, f, n[t + 3], 22, -1044525330), a = g(a, h = g(h, f = g(f, i, a, h, n[t + 4], 7, -176418897), i, a, n[t + 5], 12, 1200080426), f, i, n[t + 6], 17, -1473231341), h, f, n[t + 7], 22, -45705983), a = g(a, h = g(h, f = g(f, i, a, h, n[t + 8], 7, 1770035416), i, a, n[t + 9], 12, -1958414417), f, i, n[t + 10], 17, -42063), h, f, n[t + 11], 22, -1990404162), a = g(a, h = g(h, f = g(f, i, a, h, n[t + 12], 7, 1804603682), i, a, n[t + 13], 12, -40341101), f, i, n[t + 14], 17, -1502002290), h, f, n[t + 15], 22, 1236535329), a = l(a, h = l(h, f = l(f, i, a, h, n[t + 1], 5, -165796510), i, a, n[t + 6], 9, -1069501632), f, i, n[t + 11], 14, 643717713), h, f, n[t], 20, -373897302), a = l(a, h = l(h, f = l(f, i, a, h, n[t + 5], 5, -701558691), i, a, n[t + 10], 9, 38016083), f, i, n[t + 15], 14, -660478335), h, f, n[t + 4], 20, -405537848), a = l(a, h = l(h, f = l(f, i, a, h, n[t + 9], 5, 568446438), i, a, n[t + 14], 9, -1019803690), f, i, n[t + 3], 14, -187363961), h, f, n[t + 8], 20, 1163531501), a = l(a, h = l(h, f = l(f, i, a, h, n[t + 13], 5, -1444681467), i, a, n[t + 2], 9, -51403784), f, i, n[t + 7], 14, 1735328473), h, f, n[t + 12], 20, -1926607734), a = d(a, h = d(h, f = d(f, i, a, h, n[t + 5], 4, -378558), i, a, n[t + 8], 11, -2022574463), f, i, n[t + 11], 16, 1839030562), h, f, n[t + 14], 23, -35309556), a = d(a, h = d(h, f = d(f, i, a, h, n[t + 1], 4, -1530992060), i, a, n[t + 4], 11, 1272893353), f, i, n[t + 7], 16, -155497632), h, f, n[t + 10], 23, -1094730640), a = d(a, h = d(h, f = d(f, i, a, h, n[t + 13], 4, 681279174), i, a, n[t], 11, -358537222), f, i, n[t + 3], 16, -722521979), h, f, n[t + 6], 23, 76029189), a = d(a, h = d(h, f = d(f, i, a, h, n[t + 9], 4, -640364487), i, a, n[t + 12], 11, -421815835), f, i, n[t + 15], 16, 530742520), h, f, n[t + 2], 23, -995338651), a = C(a, h = C(h, f = C(f, i, a, h, n[t], 6, -198630844), i, a, n[t + 7], 10, 1126891415), f, i, n[t + 14], 15, -1416354905), h, f, n[t + 5], 21, -57434055), a = C(a, h = C(h, f = C(f, i, a, h, n[t + 12], 6, 1700485571), i, a, n[t + 3], 10, -1894986606), f, i, n[t + 10], 15, -1051523), h, f, n[t + 1], 21, -2054922799), a = C(a, h = C(h, f = C(f, i, a, h, n[t + 8], 6, 1873313359), i, a, n[t + 15], 10, -30611744), f, i, n[t + 6], 15, -1560198380), h, f, n[t + 13], 21, 1309151649), a = C(a, h = C(h, f = C(f, i, a, h, n[t + 4], 6, -145523070), i, a, n[t + 11], 10, -1120210379), f, i, n[t + 2], 15, 718787259), h, f, n[t + 9], 21, -343485551), f = v(f, e), i = v(i, o), a = v(a, u), h = v(h, c);
            }
            return [f, i, a, h];
        }
        function a(n) {
            var r,
                t = "",
                e = 32 * n.length;
            for (r = 0; r < e; r += 8) {
                t += String.fromCharCode(n[r >> 5] >>> r % 32 & 255);
            }
            return t;
        }
        function h(n) {
            var r,
                t = [];
            for (t[(n.length >> 2) - 1] = void 0, r = 0; r < t.length; r += 1) {
                t[r] = 0;
            }
            var e = 8 * n.length;
            for (r = 0; r < e; r += 8) {
                t[r >> 5] |= (255 & n.charCodeAt(r / 8)) << r % 32;
            }
            return t;
        }
        function e(n) {
            var r,
                t,
                e = "0123456789abcdef",
                o = "";
            for (t = 0; t < n.length; t += 1) {
                r = n.charCodeAt(t), o += e.charAt(r >>> 4 & 15) + e.charAt(15 & r);
            }
            return o;
        }
        function t(n) {
            return unescape(encodeURIComponent(n));
        }
        function o(n) {
            return a(i(h(r = t(n)), 8 * r.length));
            var r;
        }
        function u(n, r) {
            return function (n, r) {
                var t,
                    e,
                    o = h(n),
                    u = [],
                    c = [];
                for (u[15] = c[15] = void 0, 16 < o.length && (o = i(o, 8 * n.length)), t = 0; t < 16; t += 1) {
                    u[t] = 909522486 ^ o[t], c[t] = 1549556828 ^ o[t];
                }
                return e = i(u.concat(h(r)), 512 + 8 * r.length), a(i(c.concat(e), 640));
            }(t(n), t(r));
        }
        module.exports = function (n, r, t) {
            return r ? t ? u(r, n) : e(u(r, n)) : t ? o(n) : e(o(n));
        };
    }();
});
;define("we7/resource/js/underscore.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var _typeof2 = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) {
        return typeof obj;
    } : function (obj) {
        return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
    var _typeof = "function" == typeof Symbol && "symbol" == _typeof2(Symbol.iterator) ? function (n) {
        return typeof n === "undefined" ? "undefined" : _typeof2(n);
    } : function (n) {
        return n && "function" == typeof Symbol && n.constructor === Symbol && n !== Symbol.prototype ? "symbol" : typeof n === "undefined" ? "undefined" : _typeof2(n);
    };
    (function () {
        var e = Array.prototype,
            o = Object.prototype,
            n = Function.prototype,
            u = e.push,
            a = e.slice,
            p = o.toString,
            r = o.hasOwnProperty,
            t = Array.isArray,
            i = Object.keys,
            c = n.bind,
            f = Object.create,
            l = function l() {
            },
            h = function n(t) {
                return t instanceof n ? t : this instanceof n ? void (this._wrapped = t) : new n(t);
            };
        (module.exports = h).VERSION = "1.8.2";
        var s = function s(u, i, n) {
                if (void 0 === i) return u;
                switch (null == n ? 3 : n) {
                    case 1:
                        return function (n) {
                            return u.call(i, n);
                        };
                    case 2:
                        return function (n, t) {
                            return u.call(i, n, t);
                        };
                    case 3:
                        return function (n, t, r) {
                            return u.call(i, n, t, r);
                        };
                    case 4:
                        return function (n, t, r, e) {
                            return u.call(i, n, t, r, e);
                        };
                }
                return function () {
                    return u.apply(i, arguments);
                };
            },
            v = function v(n, t, r) {
                return null == n ? h.identity : h.isFunction(n) ? s(n, t, r) : h.isObject(n) ? h.matcher(n) : h.property(n);
            };
        h.iteratee = function (n, t) {
            return v(n, t, 1 / 0);
        };
        var y = function y(c, f) {
                return function (n) {
                    var t = arguments.length;
                    if (t < 2 || null == n) return n;
                    for (var r = 1; r < t; r++) {
                        for (var e = arguments[r], u = c(e), i = u.length, o = 0; o < i; o++) {
                            var a = u[o];
                            f && void 0 !== n[a] || (n[a] = e[a]);
                        }
                    }
                    return n;
                };
            },
            d = function d(n) {
                if (!h.isObject(n)) return {};
                if (f) return f(n);
                l.prototype = n;
                var t = new l();
                return l.prototype = null, t;
            },
            g = Math.pow(2, 53) - 1,
            m = function m(n) {
                var t = null != n && n.length;
                return "number" == typeof t && 0 <= t && t <= g;
            };
        function b(a) {
            return function (n, t, r, e) {
                t = s(t, e, 4);
                var u = !m(n) && h.keys(n),
                    i = (u || n).length,
                    o = 0 < a ? 0 : i - 1;
                return arguments.length < 3 && (r = n[u ? u[o] : o], o += a), function (n, t, r, e, u, i) {
                    for (; 0 <= u && u < i; u += a) {
                        var o = e ? e[u] : u;
                        r = t(r, n[o], o, n);
                    }
                    return r;
                }(n, t, r, u, o, i);
            };
        }
        h.each = h.forEach = function (n, t, r) {
            var e, u;
            if (t = s(t, r), m(n)) for (e = 0, u = n.length; e < u; e++) {
                t(n[e], e, n);
            } else {
                var i = h.keys(n);
                for (e = 0, u = i.length; e < u; e++) {
                    t(n[i[e]], i[e], n);
                }
            }
            return n;
        }, h.map = h.collect = function (n, t, r) {
            t = v(t, r);
            for (var e = !m(n) && h.keys(n), u = (e || n).length, i = Array(u), o = 0; o < u; o++) {
                var a = e ? e[o] : o;
                i[o] = t(n[a], a, n);
            }
            return i;
        }, h.reduce = h.foldl = h.inject = b(1), h.reduceRight = h.foldr = b(-1), h.find = h.detect = function (n, t, r) {
            var e;
            if (void 0 !== (e = m(n) ? h.findIndex(n, t, r) : h.findKey(n, t, r)) && -1 !== e) return n[e];
        }, h.filter = h.select = function (n, e, t) {
            var u = [];
            return e = v(e, t), h.each(n, function (n, t, r) {
                e(n, t, r) && u.push(n);
            }), u;
        }, h.reject = function (n, t, r) {
            return h.filter(n, h.negate(v(t)), r);
        }, h.every = h.all = function (n, t, r) {
            t = v(t, r);
            for (var e = !m(n) && h.keys(n), u = (e || n).length, i = 0; i < u; i++) {
                var o = e ? e[i] : i;
                if (!t(n[o], o, n)) return !1;
            }
            return !0;
        }, h.some = h.any = function (n, t, r) {
            t = v(t, r);
            for (var e = !m(n) && h.keys(n), u = (e || n).length, i = 0; i < u; i++) {
                var o = e ? e[i] : i;
                if (t(n[o], o, n)) return !0;
            }
            return !1;
        }, h.contains = h.includes = h.include = function (n, t, r) {
            return m(n) || (n = h.values(n)), 0 <= h.indexOf(n, t, "number" == typeof r && r);
        }, h.invoke = function (n, r) {
            var e = a.call(arguments, 2),
                u = h.isFunction(r);
            return h.map(n, function (n) {
                var t = u ? r : n[r];
                return null == t ? t : t.apply(n, e);
            });
        }, h.pluck = function (n, t) {
            return h.map(n, h.property(t));
        }, h.where = function (n, t) {
            return h.filter(n, h.matcher(t));
        }, h.findWhere = function (n, t) {
            return h.find(n, h.matcher(t));
        }, h.max = function (n, e, t) {
            var r,
                u,
                i = -1 / 0,
                o = -1 / 0;
            if (null == e && null != n) for (var a = 0, c = (n = m(n) ? n : h.values(n)).length; a < c; a++) {
                r = n[a], i < r && (i = r);
            } else e = v(e, t), h.each(n, function (n, t, r) {
                u = e(n, t, r), (o < u || u === -1 / 0 && i === -1 / 0) && (i = n, o = u);
            });
            return i;
        }, h.min = function (n, e, t) {
            var r,
                u,
                i = 1 / 0,
                o = 1 / 0;
            if (null == e && null != n) for (var a = 0, c = (n = m(n) ? n : h.values(n)).length; a < c; a++) {
                (r = n[a]) < i && (i = r);
            } else e = v(e, t), h.each(n, function (n, t, r) {
                ((u = e(n, t, r)) < o || u === 1 / 0 && i === 1 / 0) && (i = n, o = u);
            });
            return i;
        }, h.shuffle = function (n) {
            for (var t, r = m(n) ? n : h.values(n), e = r.length, u = Array(e), i = 0; i < e; i++) {
                (t = h.random(0, i)) !== i && (u[i] = u[t]), u[t] = r[i];
            }
            return u;
        }, h.sample = function (n, t, r) {
            return null == t || r ? (m(n) || (n = h.values(n)), n[h.random(n.length - 1)]) : h.shuffle(n).slice(0, Math.max(0, t));
        }, h.sortBy = function (n, e, t) {
            return e = v(e, t), h.pluck(h.map(n, function (n, t, r) {
                return {
                    value: n,
                    index: t,
                    criteria: e(n, t, r)
                };
            }).sort(function (n, t) {
                var r = n.criteria,
                    e = t.criteria;
                if (r !== e) {
                    if (e < r || void 0 === r) return 1;
                    if (r < e || void 0 === e) return -1;
                }
                return n.index - t.index;
            }), "value");
        };
        var _ = function _(o) {
            return function (e, u, n) {
                var i = {};
                return u = v(u, n), h.each(e, function (n, t) {
                    var r = u(n, t, e);
                    o(i, n, r);
                }), i;
            };
        };
        h.groupBy = _(function (n, t, r) {
            h.has(n, r) ? n[r].push(t) : n[r] = [t];
        }), h.indexBy = _(function (n, t, r) {
            n[r] = t;
        }), h.countBy = _(function (n, t, r) {
            h.has(n, r) ? n[r]++ : n[r] = 1;
        }), h.toArray = function (n) {
            return n ? h.isArray(n) ? a.call(n) : m(n) ? h.map(n, h.identity) : h.values(n) : [];
        }, h.size = function (n) {
            return null == n ? 0 : m(n) ? n.length : h.keys(n).length;
        }, h.partition = function (n, e, t) {
            e = v(e, t);
            var u = [],
                i = [];
            return h.each(n, function (n, t, r) {
                (e(n, t, r) ? u : i).push(n);
            }), [u, i];
        }, h.first = h.head = h.take = function (n, t, r) {
            if (null != n) return null == t || r ? n[0] : h.initial(n, n.length - t);
        }, h.initial = function (n, t, r) {
            return a.call(n, 0, Math.max(0, n.length - (null == t || r ? 1 : t)));
        }, h.last = function (n, t, r) {
            if (null != n) return null == t || r ? n[n.length - 1] : h.rest(n, Math.max(0, n.length - t));
        }, h.rest = h.tail = h.drop = function (n, t, r) {
            return a.call(n, null == t || r ? 1 : t);
        }, h.compact = function (n) {
            return h.filter(n, h.identity);
        };
        var j = function n(t, r, e, u) {
            for (var i = [], o = 0, a = u || 0, c = t && t.length; a < c; a++) {
                var f = t[a];
                if (m(f) && (h.isArray(f) || h.isArguments(f))) {
                    r || (f = n(f, r, e));
                    var l = 0,
                        s = f.length;
                    for (i.length += s; l < s;) {
                        i[o++] = f[l++];
                    }
                } else e || (i[o++] = f);
            }
            return i;
        };
        function x(i) {
            return function (n, t, r) {
                t = v(t, r);
                for (var e = null != n && n.length, u = 0 < i ? 0 : e - 1; 0 <= u && u < e; u += i) {
                    if (t(n[u], u, n)) return u;
                }
                return -1;
            };
        }
        h.flatten = function (n, t) {
            return j(n, t, !1);
        }, h.without = function (n) {
            return h.difference(n, a.call(arguments, 1));
        }, h.uniq = h.unique = function (n, t, r, e) {
            if (null == n) return [];
            h.isBoolean(t) || (e = r, r = t, t = !1), null != r && (r = v(r, e));
            for (var u = [], i = [], o = 0, a = n.length; o < a; o++) {
                var c = n[o],
                    f = r ? r(c, o, n) : c;
                t ? (o && i === f || u.push(c), i = f) : r ? h.contains(i, f) || (i.push(f), u.push(c)) : h.contains(u, c) || u.push(c);
            }
            return u;
        }, h.union = function () {
            return h.uniq(j(arguments, !0, !0));
        }, h.intersection = function (n) {
            if (null == n) return [];
            for (var t = [], r = arguments.length, e = 0, u = n.length; e < u; e++) {
                var i = n[e];
                if (!h.contains(t, i)) {
                    for (var o = 1; o < r && h.contains(arguments[o], i); o++) {
                    }
                    o === r && t.push(i);
                }
            }
            return t;
        }, h.difference = function (n) {
            var t = j(arguments, !0, !0, 1);
            return h.filter(n, function (n) {
                return !h.contains(t, n);
            });
        }, h.zip = function () {
            return h.unzip(arguments);
        }, h.unzip = function (n) {
            for (var t = n && h.max(n, "length").length || 0, r = Array(t), e = 0; e < t; e++) {
                r[e] = h.pluck(n, e);
            }
            return r;
        }, h.object = function (n, t) {
            for (var r = {}, e = 0, u = n && n.length; e < u; e++) {
                t ? r[n[e]] = t[e] : r[n[e][0]] = n[e][1];
            }
            return r;
        }, h.indexOf = function (n, t, r) {
            var e = 0,
                u = n && n.length;
            if ("number" == typeof r) e = r < 0 ? Math.max(0, u + r) : r; else if (r && u) return n[e = h.sortedIndex(n, t)] === t ? e : -1;
            if (t != t) return h.findIndex(a.call(n, e), h.isNaN);
            for (; e < u; e++) {
                if (n[e] === t) return e;
            }
            return -1;
        }, h.lastIndexOf = function (n, t, r) {
            var e = n ? n.length : 0;
            if ("number" == typeof r && (e = r < 0 ? e + r + 1 : Math.min(e, r + 1)), t != t) return h.findLastIndex(a.call(n, 0, e), h.isNaN);
            for (; 0 <= --e;) {
                if (n[e] === t) return e;
            }
            return -1;
        }, h.findIndex = x(1), h.findLastIndex = x(-1), h.sortedIndex = function (n, t, r, e) {
            for (var u = (r = v(r, e, 1))(t), i = 0, o = n.length; i < o;) {
                var a = Math.floor((i + o) / 2);
                r(n[a]) < u ? i = a + 1 : o = a;
            }
            return i;
        }, h.range = function (n, t, r) {
            arguments.length <= 1 && (t = n || 0, n = 0), r = r || 1;
            for (var e = Math.max(Math.ceil((t - n) / r), 0), u = Array(e), i = 0; i < e; i++, n += r) {
                u[i] = n;
            }
            return u;
        };
        var w = function w(n, t, r, e, u) {
            if (!(e instanceof t)) return n.apply(r, u);
            var i = d(n.prototype),
                o = n.apply(i, u);
            return h.isObject(o) ? o : i;
        };
        h.bind = function (t, r) {
            if (c && t.bind === c) return c.apply(t, a.call(arguments, 1));
            if (!h.isFunction(t)) throw new TypeError("Bind must be called on a function");
            var e = a.call(arguments, 2);
            return function n() {
                return w(t, n, r, this, e.concat(a.call(arguments)));
            };
        }, h.partial = function (i) {
            var o = a.call(arguments, 1);
            return function n() {
                for (var t = 0, r = o.length, e = Array(r), u = 0; u < r; u++) {
                    e[u] = o[u] === h ? arguments[t++] : o[u];
                }
                for (; t < arguments.length;) {
                    e.push(arguments[t++]);
                }
                return w(i, n, this, this, e);
            };
        }, h.bindAll = function (n) {
            var t,
                r,
                e = arguments.length;
            if (e <= 1) throw new Error("bindAll must be passed function names");
            for (t = 1; t < e; t++) {
                n[r = arguments[t]] = h.bind(n[r], n);
            }
            return n;
        }, h.memoize = function (u, i) {
            var n = function n(t) {
                var r = n.cache,
                    e = "" + (i ? i.apply(this, arguments) : t);
                return h.has(r, e) || (r[e] = u.apply(this, arguments)), r[e];
            };
            return n.cache = {}, n;
        }, h.delay = function (n, t) {
            var r = a.call(arguments, 2);
            return setTimeout(function () {
                return n.apply(null, r);
            }, t);
        }, h.defer = h.partial(h.delay, h, 1), h.throttle = function (r, e, u) {
            var i,
                o,
                a,
                c = null,
                f = 0;
            u || (u = {});
            var l = function l() {
                f = !1 === u.leading ? 0 : h.now(), c = null, a = r.apply(i, o), c || (i = o = null);
            };
            return function () {
                var n = h.now();
                f || !1 !== u.leading || (f = n);
                var t = e - (n - f);
                return i = this, o = arguments, t <= 0 || e < t ? (c && (clearTimeout(c), c = null), f = n, a = r.apply(i, o), c || (i = o = null)) : c || !1 === u.trailing || (c = setTimeout(l, t)), a;
            };
        }, h.debounce = function (r, e, u) {
            var i,
                o,
                a,
                c,
                f,
                t = function n() {
                    var t = h.now() - c;
                    t < e && 0 <= t ? i = setTimeout(n, e - t) : (i = null, u || (f = r.apply(a, o), i || (a = o = null)));
                };
            return function () {
                a = this, o = arguments, c = h.now();
                var n = u && !i;
                return i || (i = setTimeout(t, e)), n && (f = r.apply(a, o), a = o = null), f;
            };
        }, h.wrap = function (n, t) {
            return h.partial(t, n);
        }, h.negate = function (n) {
            return function () {
                return !n.apply(this, arguments);
            };
        }, h.compose = function () {
            var r = arguments,
                e = r.length - 1;
            return function () {
                for (var n = e, t = r[e].apply(this, arguments); n--;) {
                    t = r[n].call(this, t);
                }
                return t;
            };
        }, h.after = function (n, t) {
            return function () {
                if (--n < 1) return t.apply(this, arguments);
            };
        }, h.before = function (n, t) {
            var r;
            return function () {
                return 0 < --n && (r = t.apply(this, arguments)), n <= 1 && (t = null), r;
            };
        }, h.once = h.partial(h.before, 2);
        var A = !{
                toString: null
            }.propertyIsEnumerable("toString"),
            O = ["valueOf", "isPrototypeOf", "toString", "propertyIsEnumerable", "hasOwnProperty", "toLocaleString"];
        function k(n, t) {
            var r = O.length,
                e = n.constructor,
                u = h.isFunction(e) && e.prototype || o,
                i = "constructor";
            for (h.has(n, i) && !h.contains(t, i) && t.push(i); r--;) {
                (i = O[r]) in n && n[i] !== u[i] && !h.contains(t, i) && t.push(i);
            }
        }
        h.keys = function (n) {
            if (!h.isObject(n)) return [];
            if (i) return i(n);
            var t = [];
            for (var r in n) {
                h.has(n, r) && t.push(r);
            }
            return A && k(n, t), t;
        }, h.allKeys = function (n) {
            if (!h.isObject(n)) return [];
            var t = [];
            for (var r in n) {
                t.push(r);
            }
            return A && k(n, t), t;
        }, h.values = function (n) {
            for (var t = h.keys(n), r = t.length, e = Array(r), u = 0; u < r; u++) {
                e[u] = n[t[u]];
            }
            return e;
        }, h.mapObject = function (n, t, r) {
            t = v(t, r);
            for (var e, u = h.keys(n), i = u.length, o = {}, a = 0; a < i; a++) {
                o[e = u[a]] = t(n[e], e, n);
            }
            return o;
        }, h.pairs = function (n) {
            for (var t = h.keys(n), r = t.length, e = Array(r), u = 0; u < r; u++) {
                e[u] = [t[u], n[t[u]]];
            }
            return e;
        }, h.invert = function (n) {
            for (var t = {}, r = h.keys(n), e = 0, u = r.length; e < u; e++) {
                t[n[r[e]]] = r[e];
            }
            return t;
        }, h.functions = h.methods = function (n) {
            var t = [];
            for (var r in n) {
                h.isFunction(n[r]) && t.push(r);
            }
            return t.sort();
        }, h.extend = y(h.allKeys), h.extendOwn = h.assign = y(h.keys), h.findKey = function (n, t, r) {
            t = v(t, r);
            for (var e, u = h.keys(n), i = 0, o = u.length; i < o; i++) {
                if (t(n[e = u[i]], e, n)) return e;
            }
        }, h.pick = function (n, t, r) {
            var e,
                u,
                i = {},
                o = n;
            if (null == o) return i;
            h.isFunction(t) ? (u = h.allKeys(o), e = s(t, r)) : (u = j(arguments, !1, !1, 1), e = function e(n, t, r) {
                return t in r;
            }, o = Object(o));
            for (var a = 0, c = u.length; a < c; a++) {
                var f = u[a],
                    l = o[f];
                e(l, f, o) && (i[f] = l);
            }
            return i;
        }, h.omit = function (n, t, r) {
            if (h.isFunction(t)) t = h.negate(t); else {
                var e = h.map(j(arguments, !1, !1, 1), String);
                t = function t(n, _t) {
                    return !h.contains(e, _t);
                };
            }
            return h.pick(n, t, r);
        }, h.defaults = y(h.allKeys, !0), h.create = function (n, t) {
            var r = d(n);
            return t && h.extendOwn(r, t), r;
        }, h.clone = function (n) {
            return h.isObject(n) ? h.isArray(n) ? n.slice() : h.extend({}, n) : n;
        }, h.tap = function (n, t) {
            return t(n), n;
        }, h.isMatch = function (n, t) {
            var r = h.keys(t),
                e = r.length;
            if (null == n) return !e;
            for (var u = Object(n), i = 0; i < e; i++) {
                var o = r[i];
                if (t[o] !== u[o] || !(o in u)) return !1;
            }
            return !0;
        };
        h.isEqual = function (n, t) {
            return function n(t, r, e, u) {
                if (t === r) return 0 !== t || 1 / t == 1 / r;
                if (null == t || null == r) return t === r;
                t instanceof h && (t = t._wrapped), r instanceof h && (r = r._wrapped);
                var i = p.call(t);
                if (i !== p.call(r)) return !1;
                switch (i) {
                    case "[object RegExp]":
                    case "[object String]":
                        return "" + t == "" + r;
                    case "[object Number]":
                        return +t != +t ? +r != +r : 0 == +t ? 1 / +t == 1 / r : +t == +r;
                    case "[object Date]":
                    case "[object Boolean]":
                        return +t == +r;
                }
                var o = "[object Array]" === i;
                if (!o) {
                    if ("object" != (void 0 === t ? "undefined" : _typeof(t)) || "object" != (void 0 === r ? "undefined" : _typeof(r))) return !1;
                    var a = t.constructor,
                        c = r.constructor;
                    if (a !== c && !(h.isFunction(a) && a instanceof a && h.isFunction(c) && c instanceof c) && "constructor" in t && "constructor" in r) return !1;
                }
                u = u || [];
                for (var f = (e = e || []).length; f--;) {
                    if (e[f] === t) return u[f] === r;
                }
                if (e.push(t), u.push(r), o) {
                    if ((f = t.length) !== r.length) return !1;
                    for (; f--;) {
                        if (!n(t[f], r[f], e, u)) return !1;
                    }
                } else {
                    var l,
                        s = h.keys(t);
                    if (f = s.length, h.keys(r).length !== f) return !1;
                    for (; f--;) {
                        if (l = s[f], !h.has(r, l) || !n(t[l], r[l], e, u)) return !1;
                    }
                }
                return e.pop(), u.pop(), !0;
            }(n, t);
        }, h.isEmpty = function (n) {
            return null == n || (m(n) && (h.isArray(n) || h.isString(n) || h.isArguments(n)) ? 0 === n.length : 0 === h.keys(n).length);
        }, h.isElement = function (n) {
            return !(!n || 1 !== n.nodeType);
        }, h.isArray = t || function (n) {
                return "[object Array]" === p.call(n);
            }, h.isObject = function (n) {
            var t = void 0 === n ? "undefined" : _typeof(n);
            return "function" === t || "object" === t && !!n;
        }, h.each(["Arguments", "Function", "String", "Number", "Date", "RegExp", "Error"], function (t) {
            h["is" + t] = function (n) {
                return p.call(n) === "[object " + t + "]";
            };
        }), h.isArguments(arguments) || (h.isArguments = function (n) {
            return h.has(n, "callee");
        }), "function" != typeof /./ && "object" != ("undefined" == typeof Int8Array ? "undefined" : _typeof(Int8Array)) && (h.isFunction = function (n) {
            return "function" == typeof n || !1;
        }), h.isFinite = function (n) {
            return isFinite(n) && !isNaN(parseFloat(n));
        }, h.isNaN = function (n) {
            return h.isNumber(n) && n !== +n;
        }, h.isBoolean = function (n) {
            return !0 === n || !1 === n || "[object Boolean]" === p.call(n);
        }, h.isNull = function (n) {
            return null === n;
        }, h.isUndefined = function (n) {
            return void 0 === n;
        }, h.has = function (n, t) {
            return null != n && r.call(n, t);
        }, h.noConflict = function () {
            return root._ = previousUnderscore, this;
        }, h.identity = function (n) {
            return n;
        }, h.constant = function (n) {
            return function () {
                return n;
            };
        }, h.noop = function () {
        }, h.property = function (t) {
            return function (n) {
                return null == n ? void 0 : n[t];
            };
        }, h.propertyOf = function (t) {
            return null == t ? function () {
            } : function (n) {
                return t[n];
            };
        }, h.matcher = h.matches = function (t) {
            return t = h.extendOwn({}, t), function (n) {
                return h.isMatch(n, t);
            };
        }, h.times = function (n, t, r) {
            var e = Array(Math.max(0, n));
            t = s(t, r, 1);
            for (var u = 0; u < n; u++) {
                e[u] = t(u);
            }
            return e;
        }, h.random = function (n, t) {
            return null == t && (t = n, n = 0), n + Math.floor(Math.random() * (t - n + 1));
        }, h.now = Date.now || function () {
                return new Date().getTime();
            };
        var S = {
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                '"': "&quot;",
                "'": "&#x27;",
                "`": "&#x60;"
            },
            F = h.invert(S),
            E = function E(t) {
                var r = function r(n) {
                        return t[n];
                    },
                    n = "(?:" + h.keys(t).join("|") + ")",
                    e = RegExp(n),
                    u = RegExp(n, "g");
                return function (n) {
                    return n = null == n ? "" : "" + n, e.test(n) ? n.replace(u, r) : n;
                };
            };
        h.escape = E(S), h.unescape = E(F), h.result = function (n, t, r) {
            var e = null == n ? void 0 : n[t];
            return void 0 === e && (e = r), h.isFunction(e) ? e.call(n) : e;
        };
        var I = 0;
        h.uniqueId = function (n) {
            var t = ++I + "";
            return n ? n + t : t;
        }, h.templateSettings = {
            evaluate: /<%([\s\S]+?)%>/g,
            interpolate: /<%=([\s\S]+?)%>/g,
            escape: /<%-([\s\S]+?)%>/g
        };
        var M = /(.)^/,
            N = {
                "'": "'",
                "\\": "\\",
                "\r": "r",
                "\n": "n",
                "\u2028": "u2028",
                "\u2029": "u2029"
            },
            B = /\\|'|\r|\n|\u2028|\u2029/g,
            T = function T(n) {
                return "\\" + N[n];
            };
        h.template = function (i, n, t) {
            !n && t && (n = t), n = h.defaults({}, n, h.templateSettings);
            var r = RegExp([(n.escape || M).source, (n.interpolate || M).source, (n.evaluate || M).source].join("|") + "|$", "g"),
                o = 0,
                a = "__p+='";
            i.replace(r, function (n, t, r, e, u) {
                return a += i.slice(o, u).replace(B, T), o = u + n.length, t ? a += "'+\n((__t=(" + t + "))==null?'':_.escape(__t))+\n'" : r ? a += "'+\n((__t=(" + r + "))==null?'':__t)+\n'" : e && (a += "';\n" + e + "\n__p+='"), n;
            }), a += "';\n", n.variable || (a = "with(obj||{}){\n" + a + "}\n"), a = "var __t,__p='',__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,'');};\n" + a + "return __p;\n";
            try {
                var e = new Function(n.variable || "obj", "_", a);
            } catch (n) {
                throw n.source = a, n;
            }
            var u = function u(n) {
                    return e.call(this, n, h);
                },
                c = n.variable || "obj";
            return u.source = "function(" + c + "){\n" + a + "}", u;
        }, h.chain = function (n) {
            var t = h(n);
            return t._chain = !0, t;
        };
        var R = function R(n, t) {
            return n._chain ? h(t).chain() : t;
        };
        h.mixin = function (r) {
            h.each(h.functions(r), function (n) {
                var t = h[n] = r[n];
                h.prototype[n] = function () {
                    var n = [this._wrapped];
                    return u.apply(n, arguments), R(this, t.apply(h, n));
                };
            });
        }, h.mixin(h), h.each(["pop", "push", "reverse", "shift", "sort", "splice", "unshift"], function (t) {
            var r = e[t];
            h.prototype[t] = function () {
                var n = this._wrapped;
                return r.apply(n, arguments), "shift" !== t && "splice" !== t || 0 !== n.length || delete n[0], R(this, n);
            };
        }), h.each(["concat", "join", "slice"], function (n) {
            var t = e[n];
            h.prototype[n] = function () {
                return R(this, t.apply(this._wrapped, arguments));
            };
        }), h.prototype.value = function () {
            return this._wrapped;
        }, h.prototype.valueOf = h.prototype.toJSON = h.prototype.value, h.prototype.toString = function () {
            return "" + this._wrapped;
        };
    }).call(void 0);
});
;define("we7/resource/js/util.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var _typeof2 = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) {
        return typeof obj;
    } : function (obj) {
        return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
    var _typeof = "function" == typeof Symbol && "symbol" == _typeof2(Symbol.iterator) ? function (e) {
        return typeof e === "undefined" ? "undefined" : _typeof2(e);
    } : function (e) {
        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e === "undefined" ? "undefined" : _typeof2(e);
    };
    function _defineProperty(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e;
    }
    var util = {};
    function getQuery(e) {
        var t = [];
        if (-1 != e.indexOf("?")) for (var n = e.split("?")[1].split("&"), a = 0; a < n.length; a++) {
            n[a].split("=")[0] && unescape(n[a].split("=")[1]) && (t[a] = {
                name: n[a].split("=")[0],
                value: unescape(n[a].split("=")[1])
            });
        }
        return t;
    }
    function getUrlParam(e, t) {
        var n = new RegExp("(^|&)" + t + "=([^&]*)(&|$)"),
            a = e.split("?")[1].match(n);
        return null != a ? unescape(a[2]) : null;
    }
    function getSign(e, t, n) {
        var a = require("underscore.js"),
            r = require("md5.js"),
            i = "",
            o = getUrlParam(e, "sign");
        if (o || t && t.sign) return !1;
        if (e && (i = getQuery(e)), t) {
            var s = [];
            for (var u in t) {
                u && t[u] && (s = s.concat({
                    name: u,
                    value: t[u]
                }));
            }
            i = i.concat(s);
        }
        i = a.sortBy(i, "name"), i = a.uniq(i, !0, "name");
        for (var c = "", g = 0; g < i.length; g++) {
            i[g] && i[g].name && i[g].value && (c += i[g].name + "=" + i[g].value, g < i.length - 1 && (c += "&"));
        }
        return o = r(c + (n = n || getApp().siteInfo.token));
    }
    util.url = function (e, t) {
        var n = getApp(),
            a = n.siteInfo.siteroot + "?i=" + n.siteInfo.uniacid + "&t=" + n.siteInfo.multiid + "&v=" + n.siteInfo.version + "&from=wxapp&";
        if (e && ((e = e.split("/"))[0] && (a += "c=" + e[0] + "&"), e[1] && (a += "a=" + e[1] + "&"), e[2] && (a += "do=" + e[2] + "&")), t && "object" === (void 0 === t ? "undefined" : _typeof(t))) for (var r in t) {
            r && t.hasOwnProperty(params) && t[r] && (a += r + "=" + t[r] + "&");
        }
        return a;
    }, util.request = function (a) {
        require("underscore.js");
        var e,
            t = require("md5.js"),
            r = getApp();
        (a = a || {}).cachetime = a.cachetime ? a.cachetime : 0;
        var n = wx.getStorageSync("userInfo").sessionid,
            i = a.url;
        if (-1 == i.indexOf("http://") && -1 == i.indexOf("https://") && (i = util.url(i)), getUrlParam(i, "state") || a.data && a.data.state || !n || (i = i + "&state=we7sid-" + n), !a.data || !a.data.m) {
            var o = getCurrentPages(); // + o.__route__.split("/")[0]
            o.length && (o = o[getCurrentPages().length - 1]) && o.__route__ && (i = i + "&m=" + o.__route__.split("/")[0]);
        }
        var s = getSign(i, a.data);
        if (s && (i = i + "&sign=" + s), !i) return !1;
        if (wx.showNavigationBarLoading(), a.showLoading && util.showLoading(), a.cachetime) {
            var u = t(i),
                c = wx.getStorageSync(u),
                g = Date.parse(new Date());
            if (c && c.data) {
                if (c.expire > g) return a.complete && "function" == typeof a.complete && a.complete(c), a.success && "function" == typeof a.success && a.success(c), console.log("cache:" + i), wx.hideLoading(), wx.hideNavigationBarLoading(), !0;
                wx.removeStorageSync(u);
            }
        }
        wx.request((_defineProperty(e = {
            url: i,
            data: a.data ? a.data : {},
            header: a.header ? a.header : {},
            method: a.method ? a.method : "GET"
        }, "header", {
            "content-type": "application/x-www-form-urlencoded"
        }), _defineProperty(e, "success", function (e) {
            if (wx.hideNavigationBarLoading(), wx.hideLoading(), e.data.errno) {
                if ("41009" == e.data.errno) return wx.setStorageSync("userInfo", ""), void util.getUserInfo(function () {
                    util.request(a);
                });
                if (a.fail && "function" == typeof a.fail) a.fail(e); else if (e.data.message) {
                    if (null != e.data.data && e.data.data.redirect) var t = e.data.data.redirect; else t = "";
                    r.util.message(e.data.message, t, "error");
                }
            } else if (a.success && "function" == typeof a.success && a.success(e), a.cachetime) {
                var n = {
                    data: e.data,
                    expire: g + 1e3 * a.cachetime
                };
                wx.setStorageSync(u, n);
            }
        }), _defineProperty(e, "fail", function (e) {
            wx.hideNavigationBarLoading(), wx.hideLoading();
            var t = require("md5.js")(i),
                n = wx.getStorageSync(t);
            if (n && n.data) return a.success && "function" == typeof a.success && a.success(n), console.log("failreadcache:" + i), !0;
            a.fail && "function" == typeof a.fail && a.fail(e);
        }), _defineProperty(e, "complete", function (e) {
            a.complete && "function" == typeof a.complete && a.complete(e);
        }), e));
    }, util.getUserInfo = function (n) {
        var e = function e() {
                var t = {
                    sessionid: "",
                    wxInfo: "",
                    memberInfo: ""
                };
                wx.login({
                    success: function success(e) {
                        util.request({
                            url: "auth/session/openid",
                            data: {
                                code: e.code
                            },
                            cachetime: 0,
                            success: function success(e) {
                                e.data.errno || (t.sessionid = e.data.data.sessionid, wx.setStorageSync("userInfo", t), wx.getUserInfo({
                                    success: function success(e) {
                                        t.wxInfo = e.userInfo, wx.setStorageSync("userInfo", t), util.request({
                                            url: "auth/session/userinfo",
                                            data: {
                                                signature: e.signature,
                                                rawData: e.rawData,
                                                iv: e.iv,
                                                encryptedData: e.encryptedData
                                            },
                                            method: "POST",
                                            header: {
                                                "content-type": "application/x-www-form-urlencoded"
                                            },
                                            cachetime: 0,
                                            success: function success(e) {
                                                e.data.errno || (t.memberInfo = e.data.data, wx.setStorageSync("userInfo", t)), "function" == typeof n && n(t);
                                            }
                                        });
                                    },
                                    fail: function fail() {
                                    },
                                    complete: function complete() {
                                    }
                                }));
                            }
                        });
                    },
                    fail: function fail() {
                        wx.showModal({
                            title: "获取信息失败",
                            content: "请允许授权以便为您提供给服务",
                            success: function success(e) {
                                e.confirm && util.getUserInfo();
                            }
                        });
                    }
                });
            },
            t = wx.getStorageSync("userInfo");
        t.sessionid ? wx.checkSession({
            success: function success() {
                "function" == typeof n && n(t);
            },
            fail: function fail() {
                t.sessionid = "", console.log("relogin"), wx.removeStorageSync("userInfo"), e();
            }
        }) : e();
    }, util.navigateBack = function (t) {
        var e = t.delta ? t.delta : 1;
        if (t.data) {
            var n = getCurrentPages(),
                a = n[n.length - (e + 1)];
            a.pageForResult ? a.pageForResult(t.data) : a.setData(t.data);
        }
        wx.navigateBack({
            delta: e,
            success: function success(e) {
                "function" == typeof t.success && t.success(e);
            },
            fail: function fail(e) {
                "function" == typeof t.fail && t.function(e);
            },
            complete: function complete() {
                "function" == typeof t.complete && t.complete();
            }
        });
    }, util.footer = function (e) {
        var t = e,
            n = getApp().tabBar;
        for (var a in n.list) {
            n.list[a].pageUrl = n.list[a].pagePath.replace(/(\?|#)[^"]*/g, "");
        }
        t.setData({
            tabBar: n,
            "tabBar.thisurl": t.__route__
        });
    }, util.message = function (e, t, n) {
        if (!e) return !0;
        if ("object" == (void 0 === e ? "undefined" : _typeof(e)) && (t = e.redirect, n = e.type, e = e.title), t) {
            var a = t.substring(0, 9),
                r = "",
                i = "";
            "navigate:" == a ? (i = "navigateTo", r = t.substring(9)) : "redirect:" == a ? (i = "redirectTo", r = t.substring(9)) : (r = t, i = "redirectTo");
        }
        n || (n = "success"), "success" == n ? wx.showToast({
            title: e,
            icon: "success",
            duration: 2e3,
            mask: !!r,
            complete: function complete() {
                r && setTimeout(function () {
                    wx[i]({
                        url: r
                    });
                }, 1800);
            }
        }) : "error" == n && wx.showModal({
                title: "系统信息",
                content: e,
                showCancel: !1,
                complete: function complete() {
                    r && wx[i]({
                        url: r
                    });
                }
            });
    }, util.user = util.getUserInfo, util.showLoading = function () {
        wx.getStorageSync("isShowLoading") && (wx.hideLoading(), wx.setStorageSync("isShowLoading", !1)), wx.showLoading({
            title: "加载中",
            complete: function complete() {
                wx.setStorageSync("isShowLoading", !0);
            },
            fail: function fail() {
                wx.setStorageSync("isShowLoading", !1);
            }
        });
    }, util.showImage = function (e) {
        var t = e ? e.currentTarget.dataset.preview : "";
        if (!t) return !1;
        wx.previewImage({
            urls: [t]
        });
    }, util.parseContent = function (e) {
        if (!e) return e;
        var t = e.match(new RegExp(["\uD83C[\uDF00-\uDFFF]", "\uD83D[\uDC00-\uDE4F]", "\uD83D[\uDE80-\uDEFF]"].join("|"), "g"));
        if (t) for (var n in t) {
            e = e.replace(t[n], "[U+" + t[n].codePointAt(0).toString(16).toUpperCase() + "]");
        }
        return e;
    }, util.date = function () {
        this.isLeapYear = function (e) {
            return 0 == e.getYear() % 4 && (e.getYear() % 100 != 0 || e.getYear() % 400 == 0);
        }, this.dateToStr = function (e, t) {
            e = e || "yyyy-MM-dd HH:mm:ss", t = t || new Date();
            var n = e;
            return n = (n = (n = (n = (n = (n = (n = (n = (n = (n = (n = (n = (n = n.replace(/yyyy|YYYY/, t.getFullYear())).replace(/yy|YY/, 9 < t.getYear() % 100 ? (t.getYear() % 100).toString() : "0" + t.getYear() % 100)).replace(/MM/, 9 < t.getMonth() ? t.getMonth() + 1 : "0" + (t.getMonth() + 1))).replace(/M/g, t.getMonth())).replace(/w|W/g, ["日", "一", "二", "三", "四", "五", "六"][t.getDay()])).replace(/dd|DD/, 9 < t.getDate() ? t.getDate().toString() : "0" + t.getDate())).replace(/d|D/g, t.getDate())).replace(/hh|HH/, 9 < t.getHours() ? t.getHours().toString() : "0" + t.getHours())).replace(/h|H/g, t.getHours())).replace(/mm/, 9 < t.getMinutes() ? t.getMinutes().toString() : "0" + t.getMinutes())).replace(/m/g, t.getMinutes())).replace(/ss|SS/, 9 < t.getSeconds() ? t.getSeconds().toString() : "0" + t.getSeconds())).replace(/s|S/g, t.getSeconds());
        }, this.dateAdd = function (e, t, n) {
            switch (n = n || new Date(), e) {
                case "s":
                    return new Date(n.getTime() + 1e3 * t);
                case "n":
                    return new Date(n.getTime() + 6e4 * t);
                case "h":
                    return new Date(n.getTime() + 36e5 * t);
                case "d":
                    return new Date(n.getTime() + 864e5 * t);
                case "w":
                    return new Date(n.getTime() + 6048e5 * t);
                case "m":
                    return new Date(n.getFullYear(), n.getMonth() + t, n.getDate(), n.getHours(), n.getMinutes(), n.getSeconds());
                case "y":
                    return new Date(n.getFullYear() + t, n.getMonth(), n.getDate(), n.getHours(), n.getMinutes(), n.getSeconds());
            }
        }, this.dateDiff = function (e, t, n) {
            switch (e) {
                case "s":
                    return parseInt((n - t) / 1e3);
                case "n":
                    return parseInt((n - t) / 6e4);
                case "h":
                    return parseInt((n - t) / 36e5);
                case "d":
                    return parseInt((n - t) / 864e5);
                case "w":
                    return parseInt((n - t) / 6048e5);
                case "m":
                    return n.getMonth() + 1 + 12 * (n.getFullYear() - t.getFullYear()) - (t.getMonth() + 1);
                case "y":
                    return n.getFullYear() - t.getFullYear();
            }
        }, this.strToDate = function (dateStr) {
            var data = dateStr,
                reCat = /(\d{1,4})/gm,
                t = data.match(reCat);
            return t[1] = t[1] - 1, eval("var d = new Date(" + t.join(",") + ");"), d;
        }, this.strFormatToDate = function (e, t) {
            var n = 0,
                a = -1,
                r = t.length;
            -1 < (a = e.indexOf("yyyy")) && a < r && (n = t.substr(a, 4));
            var i = 0;
            -1 < (a = e.indexOf("MM")) && a < r && (i = parseInt(t.substr(a, 2)) - 1);
            var o = 0;
            -1 < (a = e.indexOf("dd")) && a < r && (o = parseInt(t.substr(a, 2)));
            var s = 0;
            (-1 < (a = e.indexOf("HH")) || 1 < (a = e.indexOf("hh"))) && a < r && (s = parseInt(t.substr(a, 2)));
            var u = 0;
            -1 < (a = e.indexOf("mm")) && a < r && (u = t.substr(a, 2));
            var c = 0;
            return -1 < (a = e.indexOf("ss")) && a < r && (c = t.substr(a, 2)), new Date(n, i, o, s, u, c);
        }, this.dateToLong = function (e) {
            return e.getTime();
        }, this.longToDate = function (e) {
            return new Date(e);
        }, this.isDate = function (e, t) {
            null == t && (t = "yyyyMMdd");
            var n = t.indexOf("yyyy");
            if (-1 == n) return !1;
            var a = e.substring(n, n + 4),
                r = t.indexOf("MM");
            if (-1 == r) return !1;
            var i = e.substring(r, r + 2),
                o = t.indexOf("dd");
            if (-1 == o) return !1;
            var s = e.substring(o, o + 2);
            return !(!isNumber(a) || "2100" < a || a < "1900") && !(!isNumber(i) || "12" < i || i < "01") && !(s > getMaxDay(a, i) || s < "01");
        }, this.getMaxDay = function (e, t) {
            return 4 == t || 6 == t || 9 == t || 11 == t ? "30" : 2 == t ? e % 4 == 0 && e % 100 != 0 || e % 400 == 0 ? "29" : "28" : "31";
        }, this.isNumber = function (e) {
            return (/^\d+$/g.test(e)
            );
        }, this.toArray = function (e) {
            e = e || new Date();
            var t = Array();
            return t[0] = e.getFullYear(), t[1] = e.getMonth(), t[2] = e.getDate(), t[3] = e.getHours(), t[4] = e.getMinutes(), t[5] = e.getSeconds(), t;
        }, this.datePart = function (e, t) {
            t = t || new Date();
            var n = "";
            switch (e) {
                case "y":
                    n = t.getFullYear();
                    break;
                case "M":
                    n = t.getMonth() + 1;
                    break;
                case "d":
                    n = t.getDate();
                    break;
                case "w":
                    n = ["日", "一", "二", "三", "四", "五", "六"][t.getDay()];
                    break;
                case "ww":
                    n = t.WeekNumOfYear();
                    break;
                case "h":
                    n = t.getHours();
                    break;
                case "m":
                    n = t.getMinutes();
                    break;
                case "s":
                    n = t.getSeconds();
            }
            return n;
        }, this.maxDayOfDate = function (e) {
            (e = e || new Date()).setDate(1), e.setMonth(e.getMonth() + 1);
            var t = e.getTime() - 864e5;
            return new Date(t).getDate();
        };
    }, module.exports = util;
});
;define("yb_shop/pages/fenxiao/pages/add-share/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var app = getApp(),
        a = app.requirejs('core');
    var loading = false;
    Page({
        data: {
            form: {
                name: "",
                mobile: ""
            },
            show: false,
            img: "../../images/img-share-un.png",
            agree: 0
        },
        onLoad: function onLoad(e) {
            var that = this;
            a.ReName(e.title);
            that.setData({
                share_setting: app.getCache('shareSetting')
            });
            that.getInfo();
        },
        getInfo: function getInfo() {
            var that = this;
            a.get('Distribe/userinfo', {uid: app.getCache('userinfo').uid}, function (t) {
                if (t.code == 0) {
                    that.setData({
                        user_info: t.info,
                        show: true
                    });
                } else {
                    a.alert(t.msg, function () {
                        a.jump('', 5);
                    });
                }
            }, true);
        },
        formSubmit: function formSubmit(e) {
            var that = this;
            if (that.data.form = e.detail.value, null != that.data.form.name && "" != that.data.form.name) {
                if (null != that.data.form.mobile && "" != that.data.form.mobile) {
                    var o = e.detail.value;
                    if (loading) {
                        return;
                    }
                    loading = true;
                    o.form_id = e.detail.formId, 0 != that.data.agree ? (console.log(that.data.agree), a.loading('正在提交'), o.user_id = app.getCache('userinfo').uid, a.get('Distribe/join', o, function (t) {
                        a.hideLoading();
                        loading = false;
                        if (t.code == 0) {
                            a.success('申请成功');
                            setTimeout(function () {
                                that.getInfo();
                            }, 1e3);
                        } else {
                            a.alert(t.msg, function () {
                                that.getInfo();
                            });
                        }
                    })) : a.warning("请先阅读并确认分销申请协议！！");
                } else a.warning("请填写联系方式！");
            } else a.warning("请填写姓名！");
        },
        onPullDownRefresh: function onPullDownRefresh() {
        },
        onReachBottom: function onReachBottom() {
        },
        agreement: function agreement() {
            var that = this;
            wx.showModal({
                title: "分销协议",
                content: that.data.share_setting.agree,
                showCancel: !1,
                confirmText: "我已阅读",
                confirmColor: "#ff4544",
                success: function success(e) {
                    e.confirm && console.log("用户点击确定");
                }
            });
        },
        agree: function agree() {
            var e = this,
                a = e.data.agree;
            0 == a ? (a = 1, e.setData({
                img: "../../images/img-share-agree.png",
                agree: a
            })) : 1 == a && (a = 0, e.setData({
                    img: "../../images/img-share-un.png",
                    agree: a
                }));
        }
    });
});
;define("yb_shop/pages/fenxiao/pages/cash-detail/cash-detail.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var app = getApp(),
        a = app.requirejs('core');
    var loading = false;
    Page({
        data: {
            show: false,
            status: -1,
            list: [],
            loaded: false,
            page: 1
        },
        onLoad: function onLoad(t) {
            a.ReName(t.title);
            this.getlist();
        },
        getlist: function getlist() {
            if (loading) {
                return;
            }
            loading = true;
            var that = this,
                page = that.data.page;
            a.get('Distribe/CashList', {
                uid: app.getCache('userinfo').uid,
                status: that.data.status
            }, function (t) {
                loading = false;
                if (t.code == 0) {
                    that.setData({
                        list: that.data.list.concat(t.info),
                        page: t.info.length == 0 ? that.data.page : that.data.page + 1,
                        loaded: t.info.length < 10 ? true : false,
                        show: true
                    });
                } else {
                    a.alert(t.msg);
                }
            }, true);
        },
        click: function click(e) {
            var that = this,
                i = a.pdata(e).index;
            that.setData({
                hidden: i != that.data.hidden ? i : -1
            });
        },
        select: function select(e) {
            var that = this,
                i = a.pdata(e).status;
            that.setData({
                page: 1,
                list: [],
                loaded: false,
                status: i
            });
            this.getlist();
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                list: [],
                page: 1,
                loaded: false
            });
            this.getlist();
            wx.stopPullDownRefresh();
        },
        /**
         *上拉加载
         */
        onReachBottom: function onReachBottom() {
            console.log('加载更多');
            this.data.loaded || this.getlist();
        }
    });
});
;define("yb_shop/pages/fenxiao/pages/cash/cash.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var app = getApp(),
        a = app.requirejs('core');
    var loading = false;
    function min(a, e) {
        return a = parseFloat(a), (e = parseFloat(e)) < a ? e : a;
    }
    Page({
        data: {
            cash_max_day: -1,
            selected: -1
        },
        onLoad: function onLoad(a) {
        },
        onShow: function onShow() {
            var that = this,
                cash_max_day = that.data.cash_max_day,
                cache = app.getCache('shareSetting');
            a.get('Distribe/userinfo', {uid: app.getCache('userinfo').uid}, function (t) {
                if (t.code == 0) {
                    if (cache.max_money && cache.max_money != 0.00) {
                        cash_max_day = parseFloat(cache.max_money) - parseFloat(t.info.today_price);
                    }
                    that.setData({
                        user_info: t.info,
                        share_setting: cache,
                        cash_max_day: cash_max_day,
                        show: true
                    });
                } else {
                    a.alert(t.msg, function () {
                        a.jump('', 5);
                    });
                }
            }, true);
        },
        onPullDownRefresh: function onPullDownRefresh() {
        },
        formSubmit: function formSubmit(v) {
            var e = this,
                t = parseFloat(parseFloat(v.detail.value.cash).toFixed(2)),
                i = e.data.user_info.price;
            if (-1 != e.data.cash_max_day && (i = min(i, e.data.cash_max_day)), t) {
                if (i < t) a.alert("提现金额不能超过" + i + "元"); else if (t < parseFloat(e.data.share_setting.min_money)) a.alert("提现金额不能低于" + e.data.share_setting.min_money + "元"); else {
                    var n = e.data.selected;
                    if (0 == n || 1 == n || 2 == n || 3 == n) {
                        if (0 == n || 1 == n || 2 == n) {
                            if (!(c = v.detail.value.name) || null == c) return void a.warning('姓名不能为空');
                            if (!(o = v.detail.value.mobile) || null == o) return void a.warning('账号不能为空');
                        }
                        if (2 == n) {
                            if (!(s = a.detail.value.bank_name) || null == s) return void a.warning('开户行不能为空');
                        } else var s = "";
                        if (3 == n) {
                            s = "";
                            var o = "",
                                c = "";
                        }
                        //form_id: v.detail.formId
                        if (loading) {
                            return;
                        }
                        loading = true;
                        a.loading('正在提交');
                        a.get('Distribe/addCash', {
                            price: t,
                            name: c,
                            mobile: o,
                            bank_name: s,
                            pay_type: n,
                            user_id: app.getCache('userinfo').uid
                        }, function (t) {
                            a.hideLoading();
                            loading = false;
                            if (t.code == 0) {
                                a.success('申请成功');
                                setTimeout(function () {
                                    a.jump('../index/index', 2);
                                }, 1e3);
                            } else {
                                a.alert(t.msg);
                            }
                        });
                    } else a.warning('请选择提现方式');
                }
            } else a.warning('请输入提现金额');
        },
        showCashMaxDetail: function showCashMaxDetail() {
            wx.showModal({
                title: "提示",
                content: "今日剩余提现金额=平台每日可提现金额-今日所有用户提现金额"
            });
        },
        select: function select(a) {
            var e = a.currentTarget.dataset.index;
            e != this.data.check && this.setData({
                name: "",
                mobile: "",
                bank_name: ""
            }), this.setData({
                selected: e
            });
        }
    });
});
;define("yb_shop/pages/fenxiao/pages/index/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var app = getApp(),
        a = app.requirejs('core');
    Page({
        data: {
            show: false,
            total_price: 0,
            price: 0,
            cash_price: 0,
            total_cash: 0,
            team_count: 0,
            order_money: 0
        },
        onLoad: function onLoad(e) {
            a.ReName(e.title);
            var that = this;
            that.getInfo();
        },
        getInfo: function getInfo() {
            var that = this;
            a.get('Distribe/shareSetting', {}, function (t) {
                if (t.code == 0) {
                    app.setCache('shareSetting', t.info);
                    that.setData({
                        shareSetting: t.info
                    });
                }
            });
            a.get('Distribe/userinfo', {uid: app.getCache('userinfo').uid}, function (t) {
                if (t.code == 0) {
                    app.setCache('share_userinfo', t.info);
                    that.setData({
                        user_info: t.info,
                        show: true
                    });
                } else {
                    a.alert(t.msg, function () {
                        a.jump('', 5);
                    });
                }
            }, true);
        },
        onReady: function onReady() {
        },
        onShow: function onShow() {
        },
        onPullDownRefresh: function onPullDownRefresh() {
            var that = this;
            that.getInfo();
            wx.stopPullDownRefresh();
        },
        onReachBottom: function onReachBottom() {
        },
        apply: function apply(e) {
            var that = this;
            a.jump('../add-share/index?title=申请' + that.data.shareSetting.other[13]);
        },
        home: function home(e) {
            a.jump('/yb_shop/pages/index/index', 2);
        }
    });
});
;define("yb_shop/pages/fenxiao/pages/share-money/share-money.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var app = getApp(),
        a = app.requirejs('core');
    Page({
        data: {
            block: !1,
            active: "",
            share_userinfo: {
                today_price: 0.00,
                price: 0.00,
                un_pay: 0.00,
                get_price: 0.00
            }
        },
        onLoad: function onLoad(t) {
            a.ReName(t.title);
        },
        onShow: function onShow() {
            this.setData({
                share_setting: app.getCache('shareSetting'),
                share_userinfo: app.getCache('share_userinfo')
            });
        },
        tapName: function tapName(a) {
            var t = this,
                e = "";
            t.data.block || (e = "active"), t.setData({
                block: !t.data.block,
                active: e
            });
        }
    });
});
;define("yb_shop/pages/fenxiao/pages/share-order/share-order.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var app = getApp(),
        a = app.requirejs('core');
    var loading = false;
    Page({
        data: {
            show: false,
            status: -1,
            list: [],
            loaded: false,
            page: 1,
            hidden: -1
        },
        onLoad: function onLoad(t) {
            a.ReName(t.title);
            this.getlist();
        },
        getlist: function getlist() {
            if (loading) {
                return;
            }
            loading = true;
            var that = this,
                page = that.data.page;
            a.get('Distribe/shareOrder', {
                uid: app.getCache('userinfo').uid,
                status: that.data.status
            }, function (t) {
                loading = false;
                if (t.code == 0) {
                    that.setData({
                        list: that.data.list.concat(t.info),
                        page: t.info.length == 0 ? that.data.page : that.data.page + 1,
                        loaded: t.info.length < 10 ? true : false,
                        show: true
                    });
                } else {
                    a.alert(t.msg);
                }
            }, true);
        },
        click: function click(e) {
            var that = this,
                i = a.pdata(e).index;
            that.setData({
                hidden: i != that.data.hidden ? i : -1
            });
        },
        select: function select(e) {
            var that = this,
                i = a.pdata(e).status;
            that.setData({
                page: 1,
                list: [],
                loaded: false,
                status: i
            });
            this.getlist();
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                list: [],
                page: 1,
                loaded: false
            });
            this.getlist();
            wx.stopPullDownRefresh();
        },
        /**
         *上拉加载
         */
        onReachBottom: function onReachBottom() {
            console.log('加载更多');
            this.data.loaded || this.getlist();
        }
    });
});
;define("yb_shop/pages/fenxiao/pages/share-qrcode/share-qrcode.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var app = getApp(),
        a = app.requirejs('core');
    Page({
        data: {
            qrcode: "",
            show: false
        },
        onLoad: function onLoad(e) {
            a.ReName(e.title);
            var that = this;
            var qrcode = app.getCache('qrcode');
            if (qrcode) {
                that.setData({
                    qrcode: qrcode,
                    show: true
                });
            } else {
                a.get('Distribe/getShareCode', {
                    uid: app.getCache('userinfo').uid
                }, function (t) {
                    if (t.code == 0) {
                        app.setCache('qrcode', t.info, 300);
                        that.setData({
                            qrcode: t.info,
                            show: true
                        });
                    } else {
                        a.alert(t.msg, function () {
                            a.jump('', 5);
                        });
                    }
                });
            }
        },
        onReady: function onReady() {
        },
        onShow: function onShow() {
        },
        click: function click() {
            wx.previewImage({
                current: this.data.qrcode,
                urls: [this.data.qrcode]
            });
        },
        onHide: function onHide() {
        },
        onUnload: function onUnload() {
        },
        onPullDownRefresh: function onPullDownRefresh() {
        },
        onReachBottom: function onReachBottom() {
        }
    });
});
;define("yb_shop/pages/fenxiao/pages/share-team/share-team.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var app = getApp(),
        a = app.requirejs('core');
    var loading = false;
    Page({
        data: {
            show: false,
            status: 1,
            first_count: 0,
            second_count: 0,
            third_count: 0,
            list: [],
            loaded: false,
            page: 1
        },
        onLoad: function onLoad(t) {
            a.ReName(t.title);
            this.setData({
                share_setting: app.getCache('shareSetting')
            });
            this.getlist();
        },
        getlist: function getlist() {
            if (loading) {
                return;
            }
            loading = true;
            var that = this,
                page = that.data.page;
            a.get('Distribe/myteam', {
                uid: app.getCache('userinfo').uid,
                status: that.data.status
            }, function (t) {
                loading = false;
                if (t.code == 0) {
                    that.setData({
                        list: that.data.list.concat(t.info.list),
                        first_count: t.info.first,
                        second_count: t.info.second,
                        third_count: t.info.third,
                        page: t.info.list.length == 0 ? that.data.page : that.data.page + 1,
                        loaded: t.info.list.length < 10 ? true : false,
                        show: true
                    });
                } else {
                    a.alert(t.msg);
                }
            });
        },
        select: function select(e) {
            var that = this,
                i = a.pdata(e).status;
            that.setData({
                page: 1,
                list: [],
                loaded: false,
                status: i
            });
            this.getlist();
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                list: [],
                page: 1,
                loaded: false
            });
            this.getlist();
            wx.stopPullDownRefresh();
        },
        /**
         *上拉加载
         */
        onReachBottom: function onReachBottom() {
            console.log('加载更多');
            this.data.loaded || this.getlist();
        }
    });
});
;define("yb_shop/pages/kanjia/discount_info/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var app = getApp(),
        a = app.requirejs("core"),
        b = app.requirejs("api/kjb");
    Page({
        /**
         * 页面的初始数据
         */
        data: {
            indicatorDots: true,
            autoplay: true,
            interval: 5000,
            duration: 1000,
            popup: false,
            countDownDay: 0,
            countDownHour: 0,
            countDownMinute: 0,
            countDownSecond: 0,
            show_time: true,
            // pickerOption: {},
            // specsData: [],
            // specsTitle: "",
            // tempname: "",//弹框
            // showPicker: false,//页面阴暗效果
            // total: 1,   //默认选择数量
            // optionid: 0,//初始规格未选中的状态。buyNow()调用
            // spec_Show: true,
            active: ''
        },
        /**
         * 生命周期函数--监听页面加载
         */
        onLoad: function onLoad(options) {
            a.setting();
            var that = this,
                status = false,
                id = options.id;
            if (options.form_id) {
                var form_id = options.form_id;
            }
            that.setData(options);
            if (options.kj_stu && options.kj_stu == 1) {
                status = true;
            }
            b.BargainCreate(id, function (t) {
                that.setData(t);
                that.detail();
                if (form_id && t.code == 0) {
                    //that.push(id, form_id);
                }
            }, status);
        },
        detail: function detail() {
            var that = this,
                uid = getApp().getCache("userinfo").uid,
                id = that.data.id;
            b.kj_info(id, uid, that, function (t) {
                that.setData(t);
                //倒计时
                if (t.bargain_info.end_time) {
                    var time = t.bargain_info.end_time;
                    b.Countdown(time, function (i) {
                        that.setData(i);
                    });
                }
            });
        },
        push: function push(id, form_id) {
            var that = this;
            a.get('Bargain/Push', {
                bargain_id: id,
                user_id: getApp().getCache("userinfo").uid,
                form_id: form_id
            }, function (t) {
                console.log(t);
            });
        },
        /**
         * 生命周期函数--监听页面显示
         */
        onShow: function onShow() {
        },
        tankuang: function tankuang() {
            this.setData({
                popup: false
            });
        },
        /**
         * 页面相关事件处理函数--监听用户下拉动作
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.detail();
            wx.stopPullDownRefresh();
        },
        /**
         * 页面上拉触底事件的处理函数
         */
        onReachBottom: function onReachBottom() {
        },
        /**
         * 跳转到砍价记录
         */
        record: function record() {
            wx.navigateTo({
                url: '/yb_shop/pages/kanjia/record/index?id=' + this.data.user_info.id
            });
        },
        /**
         *立即购买
         * @param goods_id sku_id uid total
         * @return url
         */
        buyNow: function buyNow(t) {
            var i = this.data;
            if (i.overtime == 1) {
                a.alert('该活动已过期');
                return false;
            }
            if (i.bargain_info.bargain_inventory < 1) {
                a.alert('库存不足');
                return false;
            }
            wx.navigateTo({
                url: "/yb_shop/pages/kanjia/order/create/index?bargain_id=" + i.bargain_info.id + "&total=1&sku_id=" + "&uid=" + getApp().getCache("userinfo").uid + "&activity_order_type=1&current_price=" + i.user_info.current_price
            });
        },
        Forsubmit: function Forsubmit(e) {
            this.setData({
                formId: e.detail.formId
            });
        },
        /**
         * 用户点击右上角分享
         */
        onShareAppMessage: function onShareAppMessage(e) {
            var that = this.data;
            return {
                title: '我正在参加：' + that.bargain_info.bargain_name,
                path: '/yb_shop/pages/kanjia/share_info/index?id=' + that.user_info.id + '&uid=' + that.user_info.user_id + '&bargain_id=' + that.user_info.bargain_id + '&form_id=' + that.formId,
                success: function success(res) {
                    // 转发成功
                },
                fail: function fail(res) {
                    // 转发失败
                }
            };
        },
        /**
         *点击按钮 弹出 选择规格、数量页面
         */
        selectPicker: function selectPicker(t) {
            var that = this;
            if (that.data.bargain_info.bargain_inventory < 1) {
                a.alert('当前库存不足，请稍后再试');
                return;
            }
            if (that.data.goods_detail.goods_spec_format.length == 0) {
                wx.redirectTo({
                    url: "/pages/order/create/index?bargain_id=" + that.data.bargain_info.id + "&goods_id=" + that.data.goods_detail.goods_id + "&total=1&sku_id=" + that.data.goods_detail.sku['0'].sku_id + "&uid=" + getApp().getCache("userinfo").uid + "&activity_order_type=1&current_price=" + that.data.user_info.current_price
                });
            }
            that.setData({
                active: "active",
                slider: "in",
                tempname: "select-picker"
            });
            var d = that.data.goods_detail.sku;
            //默认规格选中
            if (that.data.goods_detail.goods_spec_format.length != 0) {
                that.setData({
                    optionid: d['0'].sku_id,
                    "goods_detail.sku_pic": d['0'].pic != null ? d['0'].pic.img_cover_small : ''
                });
                var r = that.data.goods_detail.goods_spec_format,
                    o = "",
                    arr = [];
                r.forEach(function (t, k) {
                    arr[k] = {
                        id: t.spec_id,
                        vid: t.value[0].spec_value_id,
                        spec_name: t.value[0].spec_value_name
                    };
                    o += t.value[0].spec_value_name + "， ";
                });
                that.setData({
                    specsData: arr,
                    specsTitle: o
                });
            } else {
                that.setData({
                    "goods.sku_pic": d['0'].pic != null ? d['0'].pic.img_cover_small : ''
                });
            }
        },
        /**
         *选中规格后在data中储存相应的数量、价格、sku等信息
         */
        specsTap: function specsTap(t) {
            var e = this,
                o = "",
                i = "",
                a = t.target.dataset.idx,
                d = e.data.goods_detail.sku,
                r = e.data.specsData;
            r[a] = {
                id: t.target.dataset.id,
                vid: t.target.dataset.vid,
                spec_name: t.target.dataset.spec_name
            };
            r.forEach(function (t) {
                o += t.spec_name + "， ", i += t.id + ":" + t.vid + ";";
            });
            i = i.substring(0, i.length - 1);
            d.forEach(function (a) {
                a.attr_value_items == i && e.setData({
                    optionid: a.sku_id,
                    "goods.sku_pic": a.pic != null ? a.pic.img_cover_small : ''
                });
            }), e.setData({
                specsData: r,
                specsTitle: o
            });
        },
        /**
         *隐藏 选选数量、规格的 弹框
         */
        emptyActive: function emptyActive() {
            this.setData({
                active: "",
                slider: "out"
                //showPicker: false,
            });
        }
    });
});
;define("yb_shop/pages/kanjia/good_list/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
//index.js
//获取应用实例
    var app = getApp(),
        a = app.requirejs("core"),
        b = app.requirejs('api/kjb');
    Page({
        data: {
            status: ["正在进行", "即将开始", "全部活动"],
            kj_type: 1,
            cate_info: [],
            page: 1,
            cate_index: 0,
            show: false,
            loaded: false,
            list: []
        },
        onLoad: function onLoad(e) {
            a.setting();
            var that = this;
            that.setData(e);
            that.getList();
            b.BarIndex(function (t) {
                t.cate_info.forEach(function (t, k) {
                    if (t.id == e.cate_id) {
                        that.setData({
                            cate_index: k
                        });
                    }
                });
                that.setData(t);
            });
        },
        getList: function getList() {
            var that = this,
                page = that.data.page,
                kj_type = that.data.kj_type,
                cate_id = that.data.cate_id;
            wx.setNavigationBarTitle({
                title: that.data.class_name || "活动列表"
            });
            b.kj_list(cate_id, kj_type, page, that, function (t) {
                that.setData(t);
            });
        },
        /**
         * 状态转换
         */
        status: function status(e) {
            var kj_type = parseInt(e.detail.value) + 1;
            this.setData({
                kj_type: kj_type,
                list: [],
                page: 1,
                loaded: false
            });
            this.getList();
        },
        /**
         * 分类转换
         */
        cate: function cate(e) {
            var that = this,
                cate_index = e.detail.value;
            that.data.cate_info.forEach(function (t, k) {
                if (k == cate_index) {
                    that.setData({
                        cate_index: cate_index,
                        cate_id: t.id,
                        list: [],
                        page: 1,
                        loaded: false,
                        class_name: t.class_name
                    });
                    that.getList();
                }
            });
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                list: [],
                page: 1,
                loaded: false
            });
            this.getList();
            wx.stopPullDownRefresh();
        },
        /**
         *上拉加载
         */
        onReachBottom: function onReachBottom() {
            this.data.loaded || this.getList();
        },
        /**
         * 跳转至详情
         */
        url: function url(e) {
            var data = a.pdata(e);
            if (data.goods_type == 2) {
                wx.navigateTo({
                    url: '/yb_shop/pages/kanjia/goods_info/index?id=' + data.id
                });
            }
        },
        /**
         * 用户点击右上角分享
         */
        onShareAppMessage: function onShareAppMessage() {
        }
    });
});
;define("yb_shop/pages/kanjia/goods_info/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var app = getApp(),
        a = app.requirejs("core"),
        b = app.requirejs("api/kjb");
    Page({
        /**
         * 页面的初始数据
         */
        data: {
            indicatorDots: true,
            autoplay: true,
            interval: 5000,
            duration: 1000,
            countDownDay: 0,
            countDownHour: 0,
            countDownMinute: 0,
            countDownSecond: 0,
            list: [],
            show_time: true
        },
        /**
         * 生命周期函数--监听页面加载
         */
        onLoad: function onLoad(options) {
            a.setting();
            this.setData(options);
            this.detail();
            this.goodslist();
        },
        /**
         * 商品详情
         */
        detail: function detail() {
            var that = this,
                id = that.data.id;
            b.kj_detail(id, that, function (t) {
                that.setData(t);
                //倒计时
                if (t.bargain_info.end_time) {
                    var time = t.bargain_info.end_time;
                    wx.setNavigationBarTitle({
                        title: t.bargain_info.bargain_name || "活动详情"
                    });
                    b.Countdown(time, function (i) {
                        that.setData(i);
                    });
                }
            });
        },
        goodslist: function goodslist() {
            var that = this;
            b.kj_list('', 1, 1, that, function (t) {
                that.setData(t);
            });
        },
        /**
         * 页面相关事件处理函数--监听用户下拉动作
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({list: []});
            this.detail();
            this.goodslist();
            wx.stopPullDownRefresh();
        },
        /**
         * 跳转至地图
         */
        navigate: function navigate() {
            var that = this;
            var t = this.data.about_info;
            if (t.name && t.lat && t.lng) {
                a.tx_map(t.lat, t.lng, t.name);
            } else {
                a.toast('获取位置失败');
            }
        },
        /**
         * 跳转至详情
         */
        url: function url(e) {
            var data = a.pdata(e);
            wx.navigateTo({
                url: '/yb_shop/pages/kanjia/goods_info/index?id=' + data.id
            });
        },
        /**
         * 直接购
         */
        shoping: function shoping(e) {
            var that = this,
                data = a.pdata(e);
            if (!that.data.show_time) {
                a.alert('该活动已经结束');
                return false;
            }
            if (that.data.bargain_info.bargain_inventory < 1) {
                a.alert('库存不足');
                return false;
            }
            wx.navigateTo({
                url: "/yb_shop/pages/kanjia/order/create/index?bargain_id=" + that.data.bargain_info.id + "&total=1&uid=" + getApp().getCache("userinfo").uid + "&activity_order_type=0&current_price=" + that.data.bargain_info.original_price
            });
        },
        /**
         * 发起砍
         */
        formSubmit: function formSubmit(e) {
            var that = this,
                form_id = e.detail.formId,
                bargain_id = e.detail.value.id,
                data = a.pdata(e);
            if (!that.data.show_time) {
                a.alert('该活动已经结束');
                return false;
            }
            if (that.data.bargain_info.bargain_inventory < 1) {
                a.alert('库存不足');
                return false;
            }
            // a.get('Bargain/Push', {
            //   bargain_id: bargain_id,
            //   user_id: getApp().getCache("userinfo").uid,
            //   form_id: form_id
            // }, function (t) {
            //   console.log(t)
            wx.navigateTo({
                url: '/yb_shop/pages/kanjia/discount_info/index?id=' + bargain_id + '&form_id=' + form_id
            });
            // })
        },
        /**
         * 打电话
         */
        phone: function phone(e) {
            a.phone(e);
        }
    });
});
;define("yb_shop/pages/kanjia/index/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
//index.js
//获取应用实例
    var app = getApp(),
        a = app.requirejs("core"),
        b = app.requirejs('api/kjb');
    Page({
        data: {
            indicatorDots: true,
            autoplay: true,
            interval: 5000,
            duration: 1000,
            page: 1,
            kj_type: 1,
            show: false,
            loaded: false,
            list: [],
            route: "kanjia",
            menu: app.tabBar,
            menu_show: false,
            config: app.config
        },
        //底部导航跳转
        menu_url: function menu_url(k) {
            a.menu_url(k, 2);
        },
        onLoad: function onLoad(e) {
            a.setting();
            if (e != null && e != undefined) {
                this.setData({
                    tabbar_index: e.tabbar_index ? e.tabbar_index : -1
                });
            }
            this.setData({
                menu: getApp().tabBar
            });
            wx.setNavigationBarTitle({
                title: getApp().tabBar.name ? decodeURIComponent(getApp().tabBar.name) : '砍价首页'
            });
            if (this.data.tabbar_index >= 0) {
                this.setData({
                    showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
                });
            }
            var that = this;
            var key = app.isInArray(getApp().tabBar.list, that.data.route);
            if (e.key && e.key == 1 && key) {
                that.setData({
                    tabbar_index: key,
                    showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
                });
            }
            that.getList();
            b.BarIndex(function (i) {
                that.setData(i);
            });
        },
        getList: function getList() {
            var that = this,
                page = that.data.page,
                kj_type = that.data.kj_type,
                cate_id = '';
            b.kj_list(cate_id, kj_type, page, that, function (t) {
                that.setData(t);
            });
        },
        /**
         * 菜单转换
         */
        swichNav: function swichNav(e) {
            var that = this,
                k = a.pdata(e);
            k.list = [];
            k.page = 1;
            k.loaded = false;
            that.setData(k);
            this.getList();
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                list: [],
                page: 1,
                loaded: false
            });
            this.getList();
            wx.stopPullDownRefresh();
        },
        /**
         *上拉加载
         */
        onReachBottom: function onReachBottom() {
            this.data.loaded || this.getList();
        },
        /**
         * 跳转至详情
         */
        url: function url(e) {
            var data = a.pdata(e);
            if (data.goods_type == 2) {
                wx.navigateTo({
                    url: '/yb_shop/pages/kanjia/goods_info/index?id=' + data.id
                });
            }
        }
    });
});
;define("yb_shop/pages/kanjia/my_record/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var app = getApp(),
        a = app.requirejs("core"),
        b = app.requirejs("api/kjb");
    Page({
        data: {
            show: false,
            loaded: false,
            page: 1,
            list: []
        },
        onLoad: function onLoad(e) {
            a.setting();
            this.setData(e);
            this.getList();
        },
        getList: function getList() {
            var that = this,
                page = that.data.page;
            b.MyBargain(page, that, function (t) {
                that.setData(t);
            });
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                list: [],
                page: 1,
                loaded: false
            });
            this.getList();
            wx.stopPullDownRefresh();
        },
        /**
         * 跳转至详情
         */
        url: function url(e) {
            var data = a.pdata(e);
            if (data.goods_type == 1) {
                wx.navigateTo({
                    url: '/yb_shop/pages/kanjia/discount_info/index?id=' + data.id + '&kj_stu=1'
                });
            } else {
                a.alert('活动已结束');
            }
        },
        /**
         *上拉加载
         */
        onReachBottom: function onReachBottom() {
            this.data.loaded || this.getList();
        }
    });
});
;define("yb_shop/pages/kanjia/order/create/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) {
        return typeof obj;
    } : function (obj) {
        return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
    var t = "function" == typeof Symbol && "symbol" == _typeof(Symbol.iterator) ? function (t) {
            return typeof t === "undefined" ? "undefined" : _typeof(t);
        } : function (t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t === "undefined" ? "undefined" : _typeof(t);
        },
        e = getApp(),
        a = e.requirejs("core"),
        r = e.requirejs("check");
    Page({
        data: {
            icons: e.requirejs("icons"),
            list: {},
            data: [],
            showPicker: false,
            pvalOld: [0, 0, 0],
            pval: [0, 0, 0],
            areas: [],
            noArea: true,
            submit: true,
            button_color: e.config.button_color
        },
        onLoad: function onLoad(t) {
            a.setting();
            var i = this,
                data = this.data,
                d = {};
            this.setData({
                options: t,
                button_color: getApp().config.button_color
            });
            //获取用户地址
            a.get("Area/UserAddress", {uid: getApp().getCache("userinfo").uid}, function (t) {
                if (t.code == 0) {
                    i.setData({
                        address: t.info.address
                    });
                    //获取订单信息
                    a.get("Bargain/GoodsInfo", {id: i.data.options.bargain_id}, function (t) {
                        0 == t.code ? (i.setData({
                            list: t.info.bargain_info,
                            show: true
                        }), i.caculate()) : a.alert(t.msg);
                    }, true);
                } else {
                    a.alert(t.msg);
                }
            });
        },
        onShow: function onShow() {
            var i = this,
                d = e.getCache("orderAddress");
            if (d) {
                this.setData({
                    address: d
                });
                i.caculate();
            }
        },
        /**
         *返回触发事件
         * @param t 事件
         * @return array
         */
        toggle: function toggle(t) {
            var e = a.pdata(t),
                i = e.id,
                d = e.type,
                r = {};
            r[d] = 0 == i || void 0 === i ? 1 : 0, this.setData(r);
        },
        /**
         *打电话
         */
        phone: function phone(t) {
            a.phone(t);
        },
        //计算
        caculate: function caculate() {
            var e = this,
                a = e.data.address;
            //订单价
            a.order_money = e.data.options.current_price;
            //运费
            // a.shipping_money = e.data.options.total * e.data.list.goods.shipping_fee;
            //实付价
            //a.pay_money = parseFloat(e.data.options.total * (e.data.list.price - e.data.list.goods.shipping_fee) - discount_money);
            a.pay_money = e.data.options.current_price;
            a.total = e.data.options.total;
            a.user_name = getApp().getCache("userinfo").nickName;
            a.buyer_id = getApp().getCache("userinfo").uid;
            a.mch_id = e.data.list.mch_id;
            a.activity_order_type = e.data.options.activity_order_type ? e.data.options.activity_order_type : 0;
            a.bargain_id = e.data.options.bargain_id;
            e.setData({
                data: a
            });
        },
        //提交订单
        submit: function submit() {
            var e = this,
                t = this.data;
            if (!t.submit) {
                wx.navigateTo({
                    url: "/yb_shop/pages/kanjia/order/pay/index?id=" + e.data.order_id
                });
            } else {
                if (!t.address.phone || t.address.province == '') {
                    a.alert('请选择收货地址！');
                    return false;
                }
                a.get("Bargain/CreateOrder", t.data, function (t) {
                    if (0 == t.code) {
                        e.setData({
                            submit: false,
                            order_id: t.info
                        }), wx.navigateTo({
                            url: "/yb_shop/pages/kanjia/order/pay/index?id=" + t.info
                        });
                    } else {
                        a.alert(t.msg);
                    }
                });
            }
        },
        dataChange: function dataChange(t) {
            var e = this.data.data,
                a = this.data.list;
            switch (t.target.id) {
                case "buyer_message":
                    //留言
                    e.buyer_message = t.detail.value;
                    break;
            }
            this.setData({
                data: e
                //list: a
            });
        },
        radioChange: function radioChange(e) {
            //console.log(e.detail.value)
            this.setData({
                data: e
                //list: a
            });
        },
        url: function url(t) {
            var e = a.pdata(t).url;
            wx.redirectTo({
                url: e
            });
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            wx.stopPullDownRefresh();
        }
    });
});
;define("yb_shop/pages/kanjia/order/detail/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var t = getApp(),
        b = t.requirejs("api/kjb"),
        e = t.requirejs("core");
    Page({
        data: {
            code: false,
            consume: false,
            store: false,
            cancelindex: 0,
            diyshow: {},
            list: []
        },
        onLoad: function onLoad(t) {
            e.setting();
            this.setData({
                options: t,
                config: getApp().config
            });
            this.get_list();
        },
        onShow: function onShow() {
            // this.goods_like()
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.get_list();
            wx.stopPullDownRefresh();
        },
        /**
         *获取订单信息
         * @param order_id 订单id
         * @param buyer_id 用户id
         * @return array
         */
        get_list: function get_list() {
            var t = this;
            e.get("Bargain/GetOrder", {
                buyer_id: getApp().getCache("userinfo").uid,
                order_id: t.data.options.order_id
            }, function (i) {
                0 == i.code ? (i.show = true, t.setData(i)) : (e.alert(i.msg), wx.redirectTo({
                    url: "/yb_shop/pages/kanjia/order/index"
                }));
            });
        },
        /**
         *推荐商品
         * @return array
         */
        goods_like: function goods_like() {
            var that = this;
            b.kj_list('', 1, 1, that, function (t) {
                that.setData(t);
            });
        },
        /**
         * 打电话
         */
        phone: function phone(t) {
            e.phone(t);
        },
        /**
         * 跳转至详情
         */
        url: function url(t) {
            var data = e.pdata(t);
            wx.navigateTo({
                url: '/yb_shop/pages/kanjia/goods_info/index?id=' + data.id
            });
        }
    });
});
;define("yb_shop/pages/kanjia/order/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var t = getApp(),
        a = t.requirejs("core");
    Page({
        data: {
            icons: t.requirejs("icons"),
            status: "",
            list: [],
            page: 1,
            cancel: ["我不想买了", "信息填写错误，重新拍", "其他原因"], //订单取消理由
            cancelindex: 0,
            alert_color: t.config.alert_color,
            button_color: t.config.button_color
        },
        onLoad: function onLoad(e) {
            a.setting();
            "" == t.getCache("userinfo") && wx.redirectTo({
                url: "/pages/error/index"
            }), this.setData({
                options: e,
                status: e.status || "",
                alert_color: getApp().config.alert_color,
                button_color: getApp().config.button_color
            }), this.get_list();
        },
        /**
         *获取订单列表
         * @param status uid page
         * @return array
         */
        get_list: function get_list() {
            var t = this;
            t.setData({
                loading: true
            }), a.get("Bargain/OrderList", {
                page: t.data.page,
                status: t.data.status,
                uid: getApp().getCache("userinfo").uid
            }, function (e) {
                0 == e.code ? (t.setData({
                    loading: false,
                    show: true,
                    total: e.info.length
                    //empty: true
                }), e.info.length > 0 && t.setData({
                    page: t.data.page + 1,
                    list: t.data.list.concat(e.info)
                }), e.info.length < 10 && t.setData({
                    loaded: true
                })) : a.alert(e.msg);
            }, this.data.show);
        },
        /**
         *不同订单状态之间切换
         */
        selected: function selected(t) {
            var e = a.data(t).type;
            this.setData({
                list: [],
                page: 1,
                status: e
                //empty: false
            }), this.get_list();
        },
        //下拉刷新
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                list: [],
                page: 1
            }), this.get_list();
            wx.stopPullDownRefresh();
        },
        //上拉加载更多
        onReachBottom: function onReachBottom() {
            this.data.loaded || this.get_list();
        },
        /**
         *取消订单
         * @param order_id buyer_id cancel_text
         * @return string
         */
        cancel: function cancel(t) {
            var that = this,
                cancel_text = this.data.cancel[t.detail.value],
                s = a.data(t).orderid;
            a.get("Bargain/CancelOrder", {
                order_id: s,
                cancel_text: cancel_text,
                buyer_id: getApp().getCache("userinfo").uid
            }, function (e) {
                0 == e.code ? (that.setData({
                    page: 1,
                    list: []
                }), that.get_list(), a.alert('取消订单成功！')) : a.alert(e.msg);
            });
        },
        /**
         *删除订单
         * @param order_id buyer_id
         * @return string
         */
        delete: function _delete(t) {
            var that = this,
                i = a.data(t).orderid;
            a.get("Bargain/DelOrder", {
                order_id: i,
                buyer_id: getApp().getCache("userinfo").uid
            }, function (e) {
                0 == e.code ? (that.setData({
                    page: 1,
                    list: []
                }), that.get_list(), a.alert('删除订单成功！')) : a.alert(e.msg);
            });
        },
        /**
         *退款
         * @param order_id
         * @return string
         */
        refund: function refund(i) {
            var that = this,
                order_id = a.data(i).orderid;
            a.confirm("申请退款后请联系客服", function () {
                a.get("Bargain/RefundOrder", {
                    order_id: order_id,
                    buyer_id: getApp().getCache("userinfo").uid
                }, function (t) {
                    0 == t.code ? (that.setData({
                        page: 1,
                        list: []
                    }), that.get_list(), a.toast('申请成功')) : a.alert(t.msg);
                });
            });
        },
        /**
         *确认收货
         * @param order_id buyer_id
         * @return string
         */
        finish: function finish(t) {
            var that = this,
                s = a.data(t).orderid;
            a.get("Bargain/SignOrder", {
                order_id: s,
                buyer_id: getApp().getCache("userinfo").uid
            }, function (e) {
                0 == e.code ? (that.setData({
                    page: 1,
                    list: []
                }), that.get_list(), a.alert('使用成功！')) : a.alert(e.msg);
            });
        }
    });
});
;define("yb_shop/pages/kanjia/order/pay/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var t = getApp(),
        e = t.requirejs("core");
    Page({
        data: {
            icons: t.requirejs("icons"),
            success: false,
            successData: {},
            button_color: t.config.button_color
        },
        onLoad: function onLoad(e) {
            this.setData({
                options: e
            });
        },
        onShow: function onShow() {
            this.get_list();
        },
        /**
         *获取订单信息
         * @param order_id 订单id
         * @return array
         */
        get_list: function get_list() {
            var t = this;
            e.get("Bargain/OrderInfo", {order_id: t.data.options.id}, function (i) {
                0 == i.code ? t.setData({
                    list: i.info,
                    show: true
                }) : e.alert(i.msg);
            });
        },
        /**
         *调用支付
         * @param out_trade_no 订单号
         * @param openid
         * @return array
         */
        pay: function pay(t) {
            var i = e.pdata(t).type,
                o = this;
            e.get("Bargain/Pay", {
                out_trade_no: o.data.list.out_trade_no,
                openid: getApp().getCache("userinfo").openid
            }, function (t) {
                console.log(t);
                0 == t.code ? wx.requestPayment({
                    'timeStamp': t.info.timeStamp,
                    'nonceStr': t.info.nonceStr,
                    'package': t.info.package,
                    'signType': 'MD5',
                    'paySign': t.info.paySign,
                    'success': function success(res) {
                        console.log(res);
                        if (res.errMsg == "requestPayment:ok") {
                            return wx.setNavigationBarTitle({
                                title: "支付成功"
                            }), void o.setData({
                                success: true,
                                "list.order_status": 1
                            });
                        } else {
                            e.alert('支付失败！');
                            wx.redirectTo({
                                url: "/yb_shop/pages/kanjia/order/index"
                            });
                        }
                    },
                    'fail': function fail(res) {
                        e.alert('您已经取消支付！');
                        wx.redirectTo({
                            url: "/yb_shop/pages/kanjia/order/index"
                        });
                    }
                }) : e.alert(t.msg);
            });
            return;
        },
        phone: function phone(t) {
            e.phone(t);
        }
    });
});
;define("yb_shop/pages/kanjia/record/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var app = getApp(),
        a = app.requirejs("core"),
        b = app.requirejs("api/kjb");
    Page({
        data: {
            show: false,
            list: []
        },
        onLoad: function onLoad(e) {
            a.setting();
            this.setData(e);
            this.getList();
        },
        getList: function getList() {
            var that = this,
                id = that.data.id;
            b.BargainRecord(id, function (t) {
                that.setData(t);
            });
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.getList();
            wx.stopPullDownRefresh();
        }
    });
});
;define("yb_shop/pages/kanjia/share_info/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var app = getApp(),
        a = app.requirejs('core'),
        b = app.requirejs('api/kjb');
    Page({
        /**
         * 页面的初始数据
         */
        data: {
            indicatorDots: true,
            autoplay: true,
            interval: 5000,
            duration: 1000,
            popup: false,
            countDownDay: 0,
            countDownHour: 0,
            countDownMinute: 0,
            countDownSecond: 0,
            show_time: true,
            display: true
        },
        onGotUserInfo: function onGotUserInfo(q) {
            var that = this,
                e = app.getCache("userinfo");
            that.setData({
                display: false
            });
            if (e) {
                return;
            }
            app.getUserInfo(q.detail.userInfo, function (t) {
                if (t != 1000) {
                } else {
                    that.setData({
                        display: true
                    });
                }
            });
        },
        /**
         * 生命周期函数--监听页面加载
         */
        onLoad: function onLoad(options) {
            console.log(options);
            var id = options.bargain_id,
                e = app.getCache("userinfo");
            if (e) {
                this.setData({
                    display: false
                });
            }
            this.setData(options);
            this.detail();
        },
        detail: function detail() {
            var that = this,
                uid = that.data.uid,
                bargain_id = that.data.bargain_id;
            b.kj_info(bargain_id, uid, that, function (t) {
                that.setData(t);
                //倒计时
                if (t.bargain_info.end_time) {
                    var time = t.bargain_info.end_time;
                    b.Countdown(time, function (i) {
                        that.setData(i);
                    });
                }
            });
        },
        tankuang: function tankuang() {
            this.setData({
                popup: false
            });
        },
        bargain_help: function bargain_help(e) {
            var that = this,
                id = that.data.id,
                uid = that.data.uid;
            if (!that.data.show_time) {
                a.alert('该活动已经结束');
                return;
            }
            if (that.data.bargain_info.bargain_inventory < 1) {
                a.alert('库存不足');
                return;
            }
            b.BargainHelp(id, uid, function (t) {
                console.log(t);
                that.setData(t);
                that.detail();
            });
        },
        /**
         * 发起砍，直接购
         */
        shoping: function shoping(e) {
            var that = this,
                id = a.pdata(e).id;
            if (!that.data.show_time) {
                a.alert('该活动已经结束');
                return false;
            }
            if (that.data.bargain_info.bargain_inventory < 1) {
                a.alert('库存不足');
                return false;
            }
            wx.navigateTo({
                url: '/yb_shop/pages/kanjia/discount_info/index?id=' + id
            });
        },
        /**
         * 页面相关事件处理函数--监听用户下拉动作
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.detail();
            wx.stopPullDownRefresh();
        },
        /**
         * 页面上拉触底事件的处理函数
         */
        onReachBottom: function onReachBottom() {
        },
        /**
         * 用户点击右上角分享
         */
        onShareAppMessage: function onShareAppMessage() {
        }
    });
});
;define("yb_shop/pages/kanjia/user_center/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
// pages/user_center/user_center.js
    Page({
        /**
         * 页面的初始数据
         */
        data: {},
        /**
         * 生命周期函数--监听页面加载
         */
        onLoad: function onLoad(options) {
        },
        /**
         * 生命周期函数--监听页面初次渲染完成
         */
        onReady: function onReady() {
        },
        /**
         * 生命周期函数--监听页面显示
         */
        onShow: function onShow() {
        },
        /**
         * 页面相关事件处理函数--监听用户下拉动作
         */
        onPullDownRefresh: function onPullDownRefresh() {
        },
        /**
         * 页面上拉触底事件的处理函数
         */
        onReachBottom: function onReachBottom() {
        },
        /**
         * 用户点击右上角分享
         */
        onShareAppMessage: function onShareAppMessage() {
        }
    });
});
;define("yb_shop/pages/pintuan/pages/goods/detail.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    function _defineProperty(obj, key, value) {
        if (key in obj) {
            Object.defineProperty(obj, key, {value: value, enumerable: true, configurable: true, writable: true});
        } else {
            obj[key] = value;
        }
        return obj;
    }
// pages/goods/detail.js
    var app = getApp();
    var a = app.requirejs("core");
    var WxParse = app.requirejs("wxParse/wxParse");
    Page({
        data: {
            scrollTop: 0,
            num: 1,
            show: false
        },
        onLoad: function onLoad(options) {
            var self = this;
            var gid = this.gid = options.gid ? options.gid : options.id;
            console.log(gid);
            var systemInfo = wx.getSystemInfoSync();
            a.get('Pintuan/ptGoodsDetail', {
                gid: gid,
                uid: app.getCache("userinfo").uid
            }, function (t) {
                console.log(t);
                if (t.code == 0) {
                    var _self$setData;
                    if (t.info.intro) {
                        WxParse.wxParse("wxParseData", "html", t.info.intro, self, "0");
                    }
                    self.setData({
                        windowHeight: systemInfo.windowHeight,
                        goodsDetail: t.info
                    });
                    var groupList = t.info.groupList;
                    if (groupList.length > 0) {
                        for (var i = 0; i < groupList.length; i++) {
                            var t = --groupList[i].leftTime;
                            var h = Math.floor(t / 60 / 60);
                            var m = Math.floor((t - h * 60 * 60) / 60);
                            var s = t % 60;
                            if (h < 10) h = "0" + h;
                            if (m < 10) m = "0" + m;
                            if (s < 10) s = "0" + s;
                            groupList[i].leftTimeStr = h + ':' + m + ':' + s;
                        }
                        self.setTimeData(groupList);
                    }
                    self.setData((_self$setData = {
                        groupList: groupList
                    }, _defineProperty(_self$setData, "groupList", groupList), _defineProperty(_self$setData, "show", true), _self$setData));
                } else {
                    a.alert(t.msg);
                }
            }, true);
        },
        onShareAppMessage: function onShareAppMessage(res) {
            return {
                title: this.goodsDetail.name,
                path: "/yb_shop/pages/pintuan/pages/goods/detail?gid=" + this.goodsDetail.id,
                success: function success(res) {
                    console.log(res);
                }
            };
        },
        setTimeData: function setTimeData(data) {
            var self = this;
            var groupList = data;
            setInterval(function () {
                for (var i = 0; i < groupList.length; i++) {
                    var t = --groupList[i].leftTime;
                    var h = Math.floor(t / 60 / 60);
                    var m = Math.floor((t - h * 60 * 60) / 60);
                    var s = t % 60;
                    if (h < 10) h = "0" + h;
                    if (m < 10) m = "0" + m;
                    if (s < 10) s = "0" + s;
                    groupList[i].leftTimeStr = h + ':' + m + ':' + s;
                }
                self.setData({
                    groupList: groupList
                });
            }, 1000);
        },
        joinGroup: function joinGroup(e) {
            var id = e.currentTarget.dataset.id;
            app.redirect('group/detail', 'id=' + id);
        },
        goHome: function goHome() {
            a.jump('/yb_shop/pages/pintuan/pages/index/index', 2);
        },
        goToBuy: function goToBuy() {
            var goodsDetail = this.data.goodsDetail;
            goodsDetail['num'] = this.data.num;
            goodsDetail['goodsPrice'] = this.data.goodsPrice;
            goodsDetail['buyType'] = this.data.buyType;
            goodsDetail['groupPid'] = 0;
            app.goodsInfo = goodsDetail;
            app.redirect('goods/payfor');
        },
        selectProp: function selectProp(e) {
            var current = e.currentTarget.dataset;
            var pid = current.pid;
            var pname = current.pname;
            var name = current.name;
            var propValue = this.propValue ? this.propValue : [];
            propValue[pid] = {pname: pname, name: name};
            this.propValue = propValue;
            this.setData({
                propValue: propValue
            });
        },
        minus: function minus() {
            var num = this.data.num > 1 ? --this.data.num : 1;
            this.setData({
                num: num
            });
        },
        plus: function plus() {
            var num = ++this.data.num;
            this.setData({
                num: num
            });
        },
        showModal: function showModal(e) {
            var type = e.currentTarget.dataset.type;
            var showModalStatus = e.currentTarget.dataset.statu == 'open' ? true : false;
            var goodsPrice = type == 'group' ? this.data.goodsDetail.gprice : this.data.goodsDetail.price;
            var buyType = type == 'group' ? 1 : 0;
            app.showModal(this);
            this.setData({
                showModalStatus: showModalStatus,
                goodsPrice: goodsPrice,
                buyType: buyType
            });
        },
        scrolltolower: function scrolltolower() {
        },
        showServer: function showServer(e) {
            // var showServer = e.currentTarget.dataset.statu== 'open' ? true : false;
            // app.showModal(this)
            // this.setData({
            // showServer:showServer
            // })
        }
    });
});
;define("yb_shop/pages/pintuan/pages/goods/payfor.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
// pages/goods/payfor.js
    var app = getApp();
    var a = app.requirejs("core");
    Page({
        data: {
            addressData: {},
            address: false,
            show: false,
            freight: 0,
            totalPrice: 0
        },
        onLoad: function onLoad(options) {
            var self = this;
            wx.showLoading({
                title: "正在加载",
                mask: true
            });
            self.setData({
                address: app.goodsInfo.address,
                goodsNum: app.goodsInfo.num,
                goodsInfo: app.goodsInfo,
                goodsPrice: app.goodsInfo.goodsPrice,
                totalPrice: app.goodsInfo.goodsPrice * app.goodsInfo.num,
                show: true
            });
            wx.hideLoading();
        },
        onShow: function onShow(options) {
            wx.showLoading({
                title: "正在加载",
                mask: true
            });
            var i = this,
                d = app.getCache("orderAddress");
            if (d) {
                d.userName = d.consigner;
                d.telNumber = d.phone;
                i.setData({
                    address: d
                });
            }
            wx.hideLoading();
        },
        showAddressList: function showAddressList() {
            wx.navigateTo({
                url: '/yb_shop/pages/member/address/select'
            });
        },
        goToPay: function goToPay() {
            var self = this;
            if (!this.data.address) {
                app.showToast(this, '请选择地址');
                return false;
            }
            var data = {
                pid: self.data.goodsInfo.groupPid,
                isGroup: self.data.goodsInfo.buyType,
                gid: self.data.goodsInfo.id,
                goodsNum: self.data.goodsNum,
                limitTime: self.data.goodsInfo.limitTime,
                address: JSON.stringify(self.data.address),
                totalPrice: self.data.goodsInfo.goodsPrice * self.data.goodsNum + parseFloat(self.data.freight),
                uid: app.getCache('userinfo').uid
            };
            if (this.data.oid) {
                return;
            }
            wx.showLoading({
                title: '正在提交',
                mask: true
            });
            a.get('Pintuan/ptCreateOrder', data, function (i) {
                wx.hideLoading();
                if (i.code == 0) {
                    self.setData({
                        oid: i.info
                    });
                    a.get('Pintuan/ptPay', {
                        oid: i.info,
                        openid: getApp().getCache("userinfo").openid
                    }, function (t) {
                        if (t.code == 0) {
                            wx.requestPayment({
                                'timeStamp': t.info.timeStamp,
                                'nonceStr': t.info.nonceStr,
                                'package': t.info.package,
                                'signType': 'MD5',
                                'paySign': t.info.paySign,
                                'success': function success(res) {
                                    console.log(res);
                                    if (data.isGroup == 1) {
                                        //拼团
                                        // 重定向到团详情页面
                                        wx.redirectTo({
                                            url: '/yb_shop/pages/pintuan/pages/group/detail?id=' + i.info
                                        });
                                        // app.redirect('group/detail','id='+oid)
                                    } else {
                                        // 重定向到订单页面
                                        wx.redirectTo({
                                            url: '/yb_shop/pages/pintuan/pages/orders/index'
                                        });
                                        // app.redirect('orders/index','id=3')
                                    }
                                },
                                'fail': function fail(res) {
                                    a.alert('您已取消了支付', function () {
                                        wx.redirectTo({
                                            url: '/yb_shop/pages/pintuan/pages/orders/index'
                                        });
                                    });
                                }
                            });
                        } else {
                            a.alert(t.msg, function () {
                                wx.redirectTo({
                                    url: '/yb_shop/pages/pintuan/pages/orders/index'
                                });
                            });
                        }
                    });
                } else {
                    a.alert(i.msg);
                }
            });
        },
        minus: function minus() {
            var num = this.data.goodsNum > 1 ? --this.data.goodsNum : 1;
            var totalPrice = this.data.goodsPrice * num;
            this.setData({
                goodsNum: num,
                totalPrice: totalPrice.toFixed(2)
            });
        },
        plus: function plus() {
            var num = ++this.data.goodsNum;
            var totalPrice = this.data.goodsPrice * num;
            this.setData({
                goodsNum: num,
                totalPrice: totalPrice.toFixed(2)
            });
        }
    });
});
;define("yb_shop/pages/pintuan/pages/group/detail.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    function _defineProperty(obj, key, value) {
        if (key in obj) {
            Object.defineProperty(obj, key, {value: value, enumerable: true, configurable: true, writable: true});
        } else {
            obj[key] = value;
        }
        return obj;
    }
// pages/group/info.js
    var app = getApp(),
        a = app.requirejs("core");
    Page({
        data: {
            num: 1,
            show: false,
            display: false
        },
        onGotUserInfo: function onGotUserInfo(q) {
            var id = this.id;
            var that = this,
                e = app.getCache("userinfo");
            that.setData({
                display: false
            });
            if (e) {
                return;
            }
            app.getUserInfo(q.detail.userInfo, function (t) {
                if (t != 1000) {
                    // that.getList();
                    // that.setData({
                    //   display: false
                    // })
                    that.getDetail(id);
                } else {
                    that.setData({
                        display: true
                    });
                }
            });
        },
        onLoad: function onLoad(options) {
            this.id = options.id;
        },
        onShow: function onShow() {
            var id = this.id;
            var e = app.getCache("userinfo");
            if (e) {
                this.getDetail(id);
                this.setData({
                    display: false
                });
            } else {
                this.setData({
                    display: true
                });
            }
        },
        getDetail: function getDetail(id) {
            var self = this;
            a.get('Pintuan/ptGroupDetail', {
                id: id,
                uid: getApp().getCache("userinfo").uid
            }, function (res) {
                console.log(res);
                if (res.code == 0) {
                    var _self$setData;
                    var timeStr = '';
                    if (res.info.leftTime > 0) {
                        var t = --res.info.leftTime;
                        var h = Math.floor(t / 60 / 60);
                        var m = Math.floor((t - h * 60 * 60) / 60);
                        var s = t % 60;
                        if (h < 10) h = "0" + h;
                        if (m < 10) m = "0" + m;
                        if (s < 10) s = "0" + s;
                        timeStr = h + ':' + m + ':' + s;
                        console.log('a:' + timeStr);
                        self.setTimeData(res.info.leftTime, id);
                    }
                    var groupMember = [];
                    for (var i = res.info.goods.groupNum - 1; i >= 0; i--) {
                        if (res.info.groupMember[i]) {
                            groupMember[i] = res.info.groupMember[i];
                        } else {
                            groupMember[i] = {};
                        }
                    }
                    self.setData((_self$setData = {
                        groupMember: groupMember
                    }, _defineProperty(_self$setData, "groupMember", groupMember), _defineProperty(_self$setData, "groupInfo", res.info), _defineProperty(_self$setData, "leftTime", timeStr), _defineProperty(_self$setData, "leftnum", res.info.goods.groupNum - res.info.leftNum), _defineProperty(_self$setData, "show", true), _self$setData));
                } else {
                    a.alert(res.msg);
                }
            }, true);
        },
        setTimeData: function setTimeData(time, id) {
            var self = this;
            var id = id;
            setInterval(function () {
                var t = --time;
                var h = Math.floor(t / 60 / 60);
                var m = Math.floor((t - h * 60 * 60) / 60);
                var s = t % 60;
                if (h < 10) h = "0" + h;
                if (m < 10) m = "0" + m;
                if (s < 10) s = "0" + s;
                var timeStr = h + ':' + m + ':' + s;
                if (h == 0 && m == 0 && s == 0) {
                    a.get('Pintuan/ptGroupDetail', {
                        id: id
                    }, function (res) {
                        var groupMember = [];
                        for (var i = res.info.goods.groupNum - 1; i >= 0; i--) {
                            if (res.info.groupMember[i]) {
                                groupMember[i] = res.info.groupMember[i];
                            } else {
                                groupMember[i] = {};
                            }
                        }
                        self.setData({
                            groupMember: groupMember,
                            groupInfo: res.info
                        });
                    });
                }
                self.setData({
                    leftTime: timeStr
                });
            }, 1000);
        },
        onShareAppMessage: function onShareAppMessage(options) {
            console.log(options);
            var path = '/yb_shop/pages/pintuan/pages/group/detail?id=' + this.data.groupInfo.id;
            return {
                title: this.data.groupInfo.goods.name,
                path: path,
                success: function success(res) {
                    console.log(path);
                    console.log(res);
                }
            };
        },
        goToHome: function goToHome() {
            a.jump('/yb_shop/pages/index/index', 2);
        },
        showGoodsDetail: function showGoodsDetail(e) {
            var id = e.currentTarget.dataset.id;
            app.redirect('goods/detail', 'gid=' + id);
        },
        goToBuy: function goToBuy() {
            var goodsDetail = this.data.groupInfo.goods;
            goodsDetail['num'] = this.data.num;
            goodsDetail['goodsPrice'] = this.data.groupInfo.goods.gprice;
            goodsDetail['buyType'] = 1;
            goodsDetail['groupPid'] = this.data.groupInfo.id;
            //console.log(goodsDetail)
            app.goodsInfo = goodsDetail;
            app.redirect('goods/payfor');
        },
        selectProp: function selectProp(e) {
            var current = e.currentTarget.dataset;
            var pid = current.pid;
            var pname = current.pname;
            var name = current.name;
            var propValue = this.propValue ? this.propValue : [];
            propValue[pid] = {pname: pname, name: name};
            this.propValue = propValue;
            this.setData({
                propValue: propValue
            });
        },
        minus: function minus() {
            var num = this.data.num > 1 ? --this.data.num : 1;
            this.setData({
                num: num
            });
        },
        plus: function plus() {
            var num = ++this.data.num;
            this.setData({
                num: num
            });
        },
        showModal: function showModal(e) {
            var showModalStatus = e.currentTarget.dataset.statu == 'open' ? true : false;
            app.showModal(this);
            this.setData({
                showModalStatus: showModalStatus
            });
        }
    });
});
;define("yb_shop/pages/pintuan/pages/group/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
// pages/group/index.js
    var app = getApp(),
        a = app.requirejs("core");
    Page({
        data: {
            currentTab: 0,
            scrollTop: 0,
            page: 0,
            groupList: [],
            loading: true
        },
        onLoad: function onLoad(options) {
            var systemInfo = wx.getSystemInfoSync();
            this.setData({
                windowHeight: systemInfo.windowHeight
            });
            this.setCurrentData();
        },
        onShow: function onShow() {
        },
        setCurrentData: function setCurrentData() {
            var t = this;
            t.setData({
                loading: true
            }), a.get("Pintuan/ptGroupList", {
                page: t.data.page,
                status: t.data.currentTab,
                uid: getApp().getCache("userinfo").uid
            }, function (e) {
                console.log(e);
                0 == e.code ? (t.setData({
                    loading: false,
                    show: true
                }), e.info.length > 0 && t.setData({
                    page: t.data.page + 1,
                    groupList: t.data.groupList.concat(e.info)
                }), e.info.length < 10 && t.setData({
                    loaded: true
                })) : a.alert(e.msg);
            }, true);
        },
        showGoodsDetail: function showGoodsDetail(e) {
            var id = e.currentTarget.dataset.id;
            if (!id) return;
            app.redirect('goods/detail', "gid=" + id);
        },
        showGroupInfo: function showGroupInfo(e) {
            var id = e.currentTarget.dataset.id;
            app.redirect('group/detail', "id=" + id);
        },
        showOrderInfo: function showOrderInfo(e) {
            var id = e.currentTarget.dataset.id;
            app.redirect('orders/detail', "oid=" + id);
        },
        // 滑动切换tab
        bindChange: function bindChange(e) {
            this.data.page = 0;
            this.data.groupData = [];
            this.data.loading = true;
            this.data.currentTab = e.detail.current;
            this.setData({
                loading: true,
                groupList: [],
                currentTab: this.data.currentTab
            });
            this.setCurrentData();
        },
        // 点击tab切换
        swichNav: function swichNav(e) {
            if (this.data.currentTab == e.currentTarget.dataset.current) return;
            this.data.currentTab = e.currentTarget.dataset.current;
            this.setData({
                currentTab: this.data.currentTab
            });
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                groupList: [],
                page: 1,
                loaded: false
            });
            this.setCurrentData();
            wx.stopPullDownRefresh();
        },
        scrolltolower: function scrolltolower() {
            console.log('加载更多');
            this.data.loaded || this.setCurrentData();
        }
    });
});
;define("yb_shop/pages/pintuan/pages/index/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
// pages/index/index.js
    var app = getApp(),
        a = app.requirejs("core");
    Page({
        data: {
            route: "pintuan",
            cid: 0,
            show: false,
            scrollLeft: 0,
            scrollTop: 0,
            page: 1,
            goodsList: [],
            loading: true,
            suspension: []
        },
        //底部导航跳转
        menu_url: function menu_url(k) {
            a.menu_url(k, 2);
        },
        onLoad: function onLoad(e) {
            a.setting();
            if (e != null && e != undefined) {
                this.setData({
                    tabbar_index: e.tabbar_index ? e.tabbar_index : -1
                });
            }
            this.setData({
                menu: getApp().tabBar
            });
            if (this.data.tabbar_index >= 0) {
                this.setData({
                    showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
                });
            }
            this.systemInfo = wx.getSystemInfoSync();
            this.setIndexData();
            this.setGoodsData();
        },
        onShow: function onShow() {
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                goodsList: [],
                page: 1,
                loaded: false
            });
            this.setIndexData();
            this.setGoodsData();
            wx.stopPullDownRefresh();
        },
        /**
         *上拉加载
         */
        onReachBottom: function onReachBottom() {
            console.log('加载更多');
            this.data.loaded || this.setGoodsData();
        },
        setIndexData: function setIndexData() {
            var self = this;
            a.get('Pintuan/ptIndex', {}, function (t) {
                if (t.code == 0) {
                    self.setData({
                        windowHeight: self.systemInfo.windowHeight,
                        advert: t.info.advert,
                        category: t.info.cate
                    });
                } else {
                    a.alert(t.msg);
                }
            });
        },
        setGoodsData: function setGoodsData() {
            if (!this.data.loading) {
                return false;
            }
            var self = this;
            a.get("Pintuan/ptGoodsList", {page: self.data.page, cate_id: self.data.cid}, function (t) {
                console.log(t);
                if (t.code == 0) {
                    var e = {
                        loading: false
                    };
                    t.info.length > 0 && (e.page = self.data.page + 1, e.goodsList = self.data.goodsList.concat(t.info)), t.info.length < 10 && (e.loaded = true);
                    self.setData(e);
                } else {
                    a.alert(t.msg);
                }
            });
        },
        showList: function showList(e) {
            var cid = e.currentTarget.dataset.id;
            app.redirect('index/list', 'cid=' + cid);
        },
        showGoodsDetial: function showGoodsDetial(e) {
            var gid = e.currentTarget.dataset.id;
            if (!gid) return;
            app.redirect('goods/detail', 'gid=' + gid);
        },
        switchNav: function switchNav(e) {
            if (this.data.cid == e.currentTarget.dataset.cid && e.currentTarget.dataset.cid != 0) return;
            this.data.cid = e.currentTarget.dataset.cid;
            this.data.page = 0;
            this.data.loading = true;
            this.data.goodsList = [];
            var windowWidth = this.systemInfo.windowWidth;
            var offsetLeft = e.currentTarget.offsetLeft;
            var scrollLeft = this.data.scrollLeft;
            if (offsetLeft > windowWidth / 2) {
                scrollLeft = offsetLeft;
            } else {
                scrollLeft = 0;
            }
            this.setData({
                goodsList: [],
                childCate: [],
                loading: true,
                scrollLeft: scrollLeft,
                scrollTop: 0,
                cid: this.data.cid
            });
            this.setGoodsData();
        },
        scrolltolower: function scrolltolower(e) {
            console.log('加载更多');
            this.data.loaded || this.setGoodsData();
        },
        // 拨打电话
        consultation: function consultation(e) {
            suspension.call();
        }
    });
});
;define("yb_shop/pages/pintuan/pages/index/list.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
// pages/index/index.js
    var app = getApp(),
        a = app.requirejs("core");
    Page({
        data: {
            cid: 0,
            show: false,
            scrollLeft: 0,
            scrollTop: 0,
            page: 1,
            goodsList: [],
            loading: true,
            suspension: []
        },
        onLoad: function onLoad(options) {
            this.setData({
                cid: options.cid ? options.cid : 0
            });
            this.systemInfo = wx.getSystemInfoSync();
            this.setIndexData();
            this.setGoodsData();
        },
        onShow: function onShow() {
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                goodsList: [],
                page: 1,
                loaded: false
            });
            this.setIndexData();
            this.setGoodsData();
            wx.stopPullDownRefresh();
        },
        /**
         *上拉加载
         */
        onReachBottom: function onReachBottom() {
            console.log('加载更多');
            this.data.loaded || this.setGoodsData();
        },
        setIndexData: function setIndexData() {
            var self = this;
            a.get('Pintuan/ptIndex', {}, function (t) {
                if (t.code == 0) {
                    self.setData({
                        windowHeight: self.systemInfo.windowHeight,
                        advert: t.info.advert,
                        category: t.info.cate
                    });
                } else {
                    a.alert(t.msg);
                }
            });
        },
        setGoodsData: function setGoodsData() {
            if (!this.data.loading) {
                return false;
            }
            var self = this;
            a.get("Pintuan/ptGoodsList", {page: self.data.page, cate_id: self.data.cid}, function (t) {
                console.log(t);
                if (t.code == 0) {
                    var e = {
                        loading: false
                    };
                    t.info.length > 0 && (e.page = self.data.page + 1, e.goodsList = self.data.goodsList.concat(t.info)), t.info.length < 10 && (e.loaded = true);
                    self.setData(e);
                } else {
                    a.alert(t.msg);
                }
            });
        },
        showList: function showList(e) {
            var cid = e.currentTarget.dataset.id;
            app.redirect('index/list', 'cid=' + cid);
        },
        showGoodsDetial: function showGoodsDetial(e) {
            var gid = e.currentTarget.dataset.id;
            if (!gid) return;
            app.redirect('goods/detail', 'gid=' + gid);
        },
        switchNav: function switchNav(e) {
            if (this.data.cid == e.currentTarget.dataset.cid && e.currentTarget.dataset.cid != 0) return;
            this.data.cid = e.currentTarget.dataset.cid;
            this.data.page = 0;
            this.data.loading = true;
            this.data.goodsList = [];
            var windowWidth = this.systemInfo.windowWidth;
            var offsetLeft = e.currentTarget.offsetLeft;
            var scrollLeft = this.data.scrollLeft;
            if (offsetLeft > windowWidth / 2) {
                scrollLeft = offsetLeft;
            } else {
                scrollLeft = 0;
            }
            this.setData({
                goodsList: [],
                childCate: [],
                loading: true,
                scrollLeft: scrollLeft,
                scrollTop: 0,
                cid: this.data.cid
            });
            this.setGoodsData();
        },
        scrolltolower: function scrolltolower(e) {
            console.log('加载更多');
            this.data.loaded || this.setGoodsData();
        },
        // 拨打电话
        consultation: function consultation(e) {
            suspension.call();
        }
    });
});
;define("yb_shop/pages/pintuan/pages/orders/detail.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
// pages/orders/detail.js
    var app = getApp(),
        a = app.requirejs("core");
    Page({
        onLoad: function onLoad(options) {
            this.oid = options.oid;
            this.showDataInfo();
        },
        onShow: function onShow() {
        },
        showDataInfo: function showDataInfo() {
            var self = this;
            a.get('Pintuan/ptOrderDetail', {
                id: this.oid
            }, function (t) {
                if (t.code == 0) {
                    self.setData({
                        orderInfo: t.info
                    });
                } else {
                    a.alert(t.msg);
                }
            });
        }
    });
});
;define("yb_shop/pages/pintuan/pages/orders/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
// pages/order/index.js
    var app = getApp(),
        a = app.requirejs("core");
    Page({
        data: {
            currentTab: 0,
            scrollTop: 0,
            scrollLeft: 0,
            page: 1,
            ordersList: [],
            loading: true
        },
        onLoad: function onLoad(options) {
            var current = options.id;
            this.data.currentTab = current ? current : 0;
            this.systemInfo = wx.getSystemInfoSync();
            this.setData({
                currentTab: this.data.currentTab,
                windowHeight: this.systemInfo.windowHeight
            });
        },
        onShow: function onShow(options) {
            if (this.data.currentTab == 0) {
                this.setCurrentData();
            }
        },
        setCurrentData: function setCurrentData() {
            var t = this;
            t.setData({
                loading: true
            }), a.get("Pintuan/ptOrderList", {
                page: t.data.page,
                status: t.data.currentTab,
                uid: getApp().getCache("userinfo").uid
            }, function (e) {
                console.log(e);
                0 == e.code ? (t.setData({
                    loading: false,
                    show: true
                }), e.info.length > 0 && t.setData({
                    page: t.data.page + 1,
                    ordersList: t.data.ordersList.concat(e.info)
                }), e.info.length < 10 && t.setData({
                    loaded: true
                })) : a.alert(e.msg);
            }, true);
        },
        toGroupDetail: function toGroupDetail(e) {
            var id = e.currentTarget.dataset.id;
            app.redirect('group/detail', 'id=' + id);
        },
        toPay: function toPay(e) {
            wx.showLoading({
                title: '正在提交',
                mask: true
            });
            var self = this;
            var data = e.currentTarget.dataset;
            a.get('Pintuan/ptPay', {
                oid: data.id,
                openid: getApp().getCache("userinfo").openid
            }, function (t) {
                wx.hideLoading();
                if (t.code == 0) {
                    wx.requestPayment({
                        'timeStamp': t.info.timeStamp,
                        'nonceStr': t.info.nonceStr,
                        'package': t.info.package,
                        'signType': 'MD5',
                        'paySign': t.info.paySign,
                        'success': function success(res) {
                            console.log(res);
                            if (data.isGroup == 1) {
                                //拼团
                                // 重定向到团详情页面
                                wx.redirectTo({
                                    url: '/yb_shop/pages/pintuan/pages/group/detail?id=' + data.id
                                });
                                // app.redirect('group/detail','id='+oid)
                            } else {
                                // 重定向到订单页面
                                self.setData({
                                    ordersList: [],
                                    page: 1,
                                    loaded: false
                                });
                                self.setCurrentData();
                                // app.redirect('orders/index','id=3')
                            }
                        },
                        'fail': function fail(res) {
                            // a.alert('您已取消了支付')
                        }
                    });
                } else {
                    a.alert(t.msg, function () {
                        wx.redirectTo({
                            url: '/yb_shop/pages/pintuan/pages/orders/index'
                        });
                    });
                }
            });
        },
        confirmReceipt: function confirmReceipt(e) {
            var self = this;
            var id = e.currentTarget.dataset.id;
            wx.showModal({
                content: '是否确认收货？',
                success: function success(res) {
                    if (res.confirm) {
                        a.get('Pintuan/SignOrder', {
                            id: id,
                            uid: getApp().getCache('userinfo').uid
                        }, function (t) {
                            if (t.code == 0) {
                                a.success('收货成功');
                                setTimeout(function () {
                                    self.setData({
                                        ordersList: [],
                                        page: 1,
                                        loaded: false
                                    });
                                    self.setCurrentData();
                                });
                            } else {
                                a.alert(t.msg);
                            }
                        });
                    }
                }
            });
        },
        tuikuan: function tuikuan(e) {
            var self = this;
            var id = e.currentTarget.dataset.id;
            wx.showModal({
                content: '是否要申请退款？',
                success: function success(res) {
                    if (res.confirm) {
                        a.get('Pintuan/refundOrder', {
                            id: id,
                            uid: getApp().getCache('userinfo').uid
                        }, function (t) {
                            if (t.code == 0) {
                                a.success('申请成功');
                                setTimeout(function () {
                                    self.setData({
                                        ordersList: [],
                                        page: 1,
                                        loaded: false
                                    });
                                    self.setCurrentData();
                                });
                            } else {
                                a.alert(t.msg);
                            }
                        });
                    }
                }
            });
        },
        showOrderDetail: function showOrderDetail(e) {
            var id = e.currentTarget.dataset.id;
            app.redirect('orders/detail', 'oid=' + id);
        },
        showGoodsDetial: function showGoodsDetial(e) {
            var id = e.currentTarget.dataset.id;
            app.redirect('goods/detail', 'gid=' + id);
        },
        // 滑动切换tab
        bindChange: function bindChange(e) {
            this.data.page = 0;
            this.data.ordersList = [];
            this.data.loading = true;
            this.data.currentTab = e.detail.current;
            this.setCurrentData();
            this.setData({
                loading: true,
                ordersList: [],
                currentTab: this.data.currentTab
            });
        },
        // 点击tab切换
        swichNav: function swichNav(e) {
            if (this.data.currentTab == e.currentTarget.dataset.current) return;
            this.data.currentTab = e.currentTarget.dataset.current;
            var windowWidth = this.systemInfo.windowWidth;
            var offsetLeft = e.currentTarget.offsetLeft;
            var scrollLeft = this.data.scrollLeft;
            if (offsetLeft > windowWidth / 2) {
                scrollLeft = offsetLeft;
            } else {
                scrollLeft = 0;
            }
            this.setData({
                scrollLeft: scrollLeft,
                currentTab: this.data.currentTab
            });
        },
        /**
         * 下拉刷新
         */
        onPullDownRefresh: function onPullDownRefresh() {
            this.setData({
                ordersList: [],
                page: 1,
                loaded: false
            });
            this.setCurrentData();
            wx.stopPullDownRefresh();
        },
        scrolltolower: function scrolltolower() {
            console.log('加载更多');
            this.data.loaded || this.setCurrentData();
        }
    });
});
;define("yb_shop/pages/pintuan/pages/orders/picker-address.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
// pages/orders/address.js
    var app = getApp();
    Page({
        data: {
            addressInfo: {},
            addressVal: [0, 0, 0],
            addressData: {},
            from: false
        },
        onLoad: function onLoad(options) {
            console.log(options);
            this.setData({
                from: options.from
            });
            this.setAddress();
        },
        onReady: function onReady() {
        },
        onShow: function onShow() {
            this.setAddress();
        },
        onPullDownRefresh: function onPullDownRefresh() {
        },
        onReachBottom: function onReachBottom() {
        },
        userAddress: function userAddress(e) {
            var id = e.currentTarget.dataset.id;
            for (var i = 0; i < this.addressList.length; i++) {
                if (this.addressList[i].id == id) {
                    app.address = this.addressList[i];
                    wx.navigateBack();
                }
            }
        },
        setAddress: function setAddress() {
            var self = this;
            wx.showLoading({
                title: "正在加载",
                mask: true
            });
            app.request.wxRequest({
                url: 'address-list',
                success: function success(res) {
                    self.addressList = res;
                    wx.hideLoading();
                    self.setData({
                        address: res
                    });
                }
            });
        },
        chooseWxAddress: function chooseWxAddress() {
            var self = this;
            wx.chooseAddress({
                success: function success(res) {
                    var data = {};
                    data.userName = res.userName;
                    data.province = res.provinceName;
                    data.city = res.cityName;
                    data.county = res.countyName;
                    data.address = res.detailInfo;
                    data.telNumber = res.telNumber;
                    app.request.wxRequest({
                        url: 'address-edit',
                        data: data,
                        method: 'POST',
                        success: function success(res) {
                            self.setAddress();
                        }
                    });
                }
            });
        },
        setDefault: function setDefault(e) {
            var self = this;
            var id = e.currentTarget.dataset.id;
            app.request.wxRequest({
                url: 'address-edit&act=setdefault&aid=' + id,
                success: function success(res) {
                    app.showToast(self, '设置成功');
                    self.setAddress();
                }
            });
        },
        delAddress: function delAddress(e) {
            var id = e.currentTarget.dataset.id;
            var self = this;
            app.request.wxRequest({
                url: 'address-edit&act=del&aid=' + id,
                success: function success(res) {
                    app.showToast(self, '删除成功');
                    self.setAddress();
                }
            });
        },
        bindblur: function bindblur(e) {
            var field = e.currentTarget.dataset.name;
            var word = e.detail.value;
            this.data.addressInfo[field] = word;
        },
        // 跳转至编辑地址页
        editAddress: function editAddress(e) {
            var id = e.currentTarget.dataset.id;
            console.log(id);
            wx.navigateTo({
                url: '/pages/member/edit-address?id=' + id
            });
        },
        // 微信一键获取
        onKeyAddress: function onKeyAddress(e) {
            var self = this;
            wx.chooseAddress({
                success: function success(res) {
                    console.log(res);
                    var data = {};
                    data.userName = res.userName;
                    data.province = res.provinceName;
                    data.city = res.cityName;
                    data.county = res.countyName;
                    data.address = res.detailInfo;
                    data.telNumber = res.telNumber;
                    // self.setData({
                    //   addressData:data,
                    //   addressInfo: self.data.addressInfo,
                    // })
                    wx.showLoading({
                        title: "正在保存",
                        mask: true
                    });
                    app.request.wxAsk({
                        url: 'address/edit',
                        data: data,
                        method: 'POST',
                        success: function success(res) {
                            wx.hideLoading();
                            if (res.code == 0) {
                                app.address = res.data;
                                wx.navigateBack();
                            }
                        }
                    });
                }
            });
        }
    });
});
;define("yb_shop/utils/api/form.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var app = getApp(),
        a = app.requirejs("core"),
        info = app.getCache("userinfo");
    module.exports = {
        //获取表单
        get_form_list: function get_form_list(id, that) {
            var form = app.siteInfo.form,
                data = {};
            var button_name = '提交';
            a.get('index/form', {
                id: id
            }, function (t) {
                console.log(t);
                if (t.code == 0) {
                    wx.setNavigationBarTitle({
                        title: t.info.title ? decodeURIComponent(t.info.title) : '万能表单'
                    });
                    var form = t.info.list;
                    if (form.length == 0) {
                        a.alert('表单内容为空');
                        return;
                    }
                    form.forEach(function (k) {
                        if (k.module == 'picker') {
                            data[k.name] = 0;
                        }
                        ;
                        if (k.module == 'time_one') {
                            data[k.name] = k.default;
                        }
                        ;
                        if (k.module == 'time_two') {
                            data[k.name + '_1'] = k.default1;
                            data[k.name + '_2'] = k.default2;
                            if (k.default1 && k.default2) {
                                data[k.name] = k.default1 + ',' + k.default2;
                            } else {
                                data[k.name] = '';
                            }
                        }
                        ;
                        if (k.module == 'pic_arr') {
                            data[k.name] = [];
                        }
                        ;
                        if (k.module == 'region') {
                            data[k.name] = k.default;
                            data[k.name + '_multi'] = [0, 0, 0];
                        }
                        if (k.module == 'button') {
                            button_name = k.title;
                        }
                        ;
                    });
                    that.setData({
                        data: data,
                        show: true,
                        button_name: button_name,
                        form: form
                    });
                } else {
                    a.alert(t.msg);
                }
            }, true);
        },
        //过滤字段，转换字段格式
        to_str: function to_str(data, list) {
            var that = this,
                arr = [];
            for (var i in data) {
                arr.push({'name': i, 'value': data[i]});
            }
            if (arr.length > 0) {
                arr.forEach(function (k) {
                    for (var i = 0; i < list.length; i++) {
                        if (k.name == list[i].name) {
                            if (list[i].module == 'checkbox') {
                                data[k.name] = data[k.name].join(',');
                            }
                            // if (list[i].module == 'region') {//input自动转数组为字符串了
                            //  // data[k.name] = data[k.name].join(',');
                            // }
                        }
                    }
                });
                return data;
            } else {
                a.error('表单不能为空');
                return;
            }
        },
        //字段验证
        validate: function validate(data, list, obj) {
            var arr = [],
                n = 0,
                that = this;
            for (var _i in data) {
                arr.push({'name': _i, 'value': data[_i]});
            }
            if (arr.length > 0) {
                for (var i = 0; i < arr.length; i++) {
                    var res = that.in_array(arr[i].name, arr[i].value, list);
                    if (res['code'] == 1) {
                        n++;
                        a.error(res.msg);
                        break;
                    }
                }
                "function" == typeof obj && obj(n);
            } else {
                a.error('表单不能为空');
                return;
            }
        },
        //错误判断
        in_array: function in_array(name, value, list) {
            var data = {'code': 0};
            list.forEach(function (k) {
                if (k.name == name) {
                    console.log(name);
                    console.log(value);
                    //判断不能为空
                    if (k.empty) {
                        if (!value || value.length == 0) {
                            //判断字段是否空值
                            data['code'] = 1;
                            data['msg'] = k.title + '不能为空';
                            return data; //字段不能能为空
                        }
                    }
                    // if (k.module == 'time_two') {
                    // }
                }
            });
            return data;
        },
        /**
         * 图片上传
         * this
         * n文件夹名称
         * key 0多图上传，1单图上传
         */
        upload: function upload(that, field, n) {
            var key = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 0;
            var _this = this;
            wx.showActionSheet({
                itemList: ['从相册中选择', '拍照'],
                itemColor: "#f7982a",
                success: function success(res) {
                    if (!res.cancel) {
                        if (res.tapIndex == 0) {
                            _this.chooseWxImage('album', that, field, n, key);
                        } else if (res.tapIndex == 1) {
                            _this.chooseWxImage('camera', that, field, n, key);
                        }
                    }
                }
            });
        },
        chooseWxImage: function chooseWxImage(type_, that, field, n, key) {
            var _this = this,
                site = getApp().siteInfo,
                arr = that.data.data,
                url = site.siteroot + '?i=' + site.uniacid + '&t=undefined&v=' + site.version + '&from=wxapp&c=entry&a=wxapp&do=index_uploadFile&path=' + n + '&m=' + site.name + '&sign=5201314';
            wx.chooseImage({
                sizeType: ['original', 'compressed'],
                sourceType: [type_],
                success: function success(res) {
                    //console.log(res)
                    if (key == 0) {
                        res.tempFilePaths.forEach(function (t) {
                            // console.log(t)
                            wx.uploadFile({
                                url: url,
                                filePath: t,
                                name: 'file_upload',
                                success: function success(res) {
                                    console.log(res);
                                    if (res.data != null && res.data != '') {
                                        var data = a.json_parse(res.data);
                                        console.log(data);
                                        if (data.code == 0) {
                                            arr[field] = arr[field].concat(data.info);
                                            that.setData({
                                                data: arr
                                            });
                                        } else {
                                            a.error(data.msg);
                                        }
                                    }
                                }
                            });
                        });
                    } else {
                        wx.uploadFile({
                            url: url,
                            filePath: res.tempFilePaths[0],
                            name: 'file_upload',
                            success: function success(res) {
                                console.log(res);
                                if (res.data != null && res.data != '') {
                                    var data = a.json_parse(res.data);
                                    if (data.code == 0) {
                                        //var arr = that.data.data;
                                        arr[field] = data.info;
                                        that.setData({
                                            data: arr
                                        });
                                    } else {
                                        a.error(data.msg);
                                    }
                                }
                            }
                        });
                    }
                }
            });
        }
    };
});
;define("yb_shop/utils/api/index.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var app = getApp(),
        a = app.requirejs("core"),
        info = app.getCache("userinfo"),
        s = app.requirejs("wxParse/wxParse");
    module.exports = {
        //跳转小程序，web网页，内部页面
        to_url: function to_url(k, url) {
            var appid = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '';
            var path = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : '';
            var title = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : '';
            if (k == 1) {
                if (url) {
                    if (url.length > 0) {
                        a.jump(url);
                    }
                }
            } else if (k == 2) {
                //跳转小程序
                wx.navigateToMiniProgram({
                    appId: appid,
                    path: path,
                    extraData: {
                        foo: 'bar'
                    },
                    envVersion: 'release',
                    success: function success(res) {
                        console.log('打开成功');
                    },
                    fail: function fail(res) {
                        a.alert('请绑定小程序');
                    }
                });
            } else if (k == 3) {
                //web网页
                a.jump('/yb_shop/pages/web/index?url=' + escape(path) + '&name=' + title);
            } else {
                return;
            }
        },
        /**
         * 缓存省市县地址1
         */
        getArea: function getArea() {
            a.get("area/GetArea", {}, function (e) {
                app.globalData.areas = e.areas;
            });
        },
        /**
         * 获取文章列表
         */
        article_list: function article_list(ident, page, class_id, that, obj) {
            var e = {};
            a.get("Article/Article", {
                page: page,
                ident: ident,
                class_id: class_id
            }, function (t) {
                if (t.code == 0) {
                    if (t.info.info) {
                        t.info.info.length > 0 && (e.page = page + 1, e.list = that.data.list.concat(t.info.info), t.info.info.length < 10 && (e.loaded = true));
                        t.info.info.length == 0 && (e.loaded = true);
                        e.show = true;
                    } else {
                        e.loaded = true;
                        e.show = true;
                    }
                    wx.setNavigationBarTitle({
                        title: t.info.article_name ? decodeURIComponent(t.info.article_name) : '列表'
                    });
                    e.class_style = t.info.class_style;
                } else {
                    a.alert(t.msg, function () {
                        return;
                    });
                }
                typeof obj == "function" && obj(e);
            }, true);
        },
        /**
         * 文章详情
         */
        ArticleInfo: function ArticleInfo(ident, id, that, obj) {
            var e = {};
            a.get("Article/ArticleInfo", {
                article_id: id,
                ident: ident
            }, function (t) {
                wx.setNavigationBarTitle({
                    title: t.info.title ? decodeURIComponent(t.info.title) : '详情'
                });
                if (t.code == 0) {
                    s.wxParse("wxParseData", "html", t.info.content, that, "0");
                    e.detail = t.info;
                    e.show = true;
                    typeof obj == "function" && obj(e);
                } else {
                    a.alert(t.msg);
                }
            }, true);
        },
        /**
         * 首页内容
         */
        indexList: function indexList(obj) {
            var e = {},
                width = 372,
                cache = app.getCache("indexList");
            if (cache) {
                typeof obj == "function" && obj(cache);
            } else {
                var width = wx.getSystemInfoSync().windowWidth;
                a.get("index/index", {}, function (i) {
                    if (i.code == 0) {
                        var d = i.info.advert_position_list;
                        //计算广告高度
                        d[2].advert_position.forEach(function (k) {
                            k.high = width * k.height / k.width;
                        });
                        e.advert_position = d[2].advert_position, //广告位
                            e.navigation = i.info.advert_position_list[1], //导航
                            e.adv = i.info.advert_position_list[0], //轮播图
                            e.GoodsList = i.info.goods_list, //商品
                            e.adv_height = i.info.advert_height != "undefined" ? i.info.advert_height : '188'; //轮播图高度
                        e.show = true;
                        app.setCache("indexList", e, 10); //10秒
                        typeof obj == "function" && obj(e);
                    } else {
                        a.alert(i.msg);
                    }
                }, true);
            }
        },
        /**
         * 相册
         */
        ImageInfo: function ImageInfo(ident, page, group_id, that, obj) {
            var e = {};
            a.get("Album/Album", {
                page: page,
                ident: ident,
                group_id: group_id
            }, function (t) {
                if (t.code == 0) {
                    if (t.info.info) {
                        t.info.info.length > 0 && (e.page = page + 1, e.list = that.data.list.concat(t.info.info), t.info.info.length < 10 && (e.loaded = true));
                        t.info.info.length == 0 && (e.loaded = true);
                        e.show = true;
                    } else {
                        e.loaded = true;
                        e.show = true;
                    }
                    wx.setNavigationBarTitle({
                        title: t.info.group_name ? t.info.group_name : '相册'
                    });
                } else {
                    a.alert(t.msg, function () {
                        return;
                    });
                }
                typeof obj == "function" && obj(e);
            }, true);
        },
        /**
         * 首页模块化
         */
        indexMod: function indexMod(that, obj) {
            var _this = this,
                e = {},
                width = wx.getSystemInfoSync().windowWidth,
                cache = app.getCache("indexMod");
            if (cache) {
                typeof obj == "function" && obj(cache);
            } else {
                var width = wx.getSystemInfoSync().windowWidth;
                a.get("index/modindex", {}, function (i) {
                    if (i.code == 0) {
                        i.info.all_data.forEach(function (k) {
                            //计算广告高度
                            if (k.type == "advert") {
                                k.high = width * k.ly_height / k.ly_width;
                            }
                            //计算轮播图高度
                            if (k.type == "banner") {
                                //k.high = width * k.ly_height / k.ly_width
                                k.high = width * k.ly_height / 10;
                            }
                            //地图
                            if (k.type == "position" && k.is_display == 2) {
                                that.setData({
                                    "markers[0].latitude": k.latitude,
                                    "markers[0].longitude": k.longitude,
                                    "markers[0].title": k.position_name
                                });
                            }
                            //富文本
                            if (k.type == "rich_text") {
                                s.wxParse("wxParseData_" + k.time_key, "html", k.content, that, "0");
                                k.wxParseData = that.data['wxParseData_' + k.time_key].nodes;
                            }
                            //图片列表数组转json字符串
                            if (k.type == "edit_piclist") {
                                k.arr = a.str(k.list);
                            }
                            //悬浮图标
                            if (k.type == "floaticon") {
                            }
                            //  var bili=(25/width)*100;
                            //  if (k.b_form_margin<bili){
                            //    k.b_form_margin = bili;
                            //  } else if (k.b_form_margin > (100 - bili) ){
                            //    k.b_form_margin = 100 - bili;
                            //  }
                            //评论
                            if (k.type == "comment") {
                                _this.comment(that, k.is_display);
                            }
                            //背景音乐
                            if (k.type == 'edit_music') {
                                _this.play_music(k.title, k.author, k.imgurl, k.music_url);
                            }
                            //万能表单
                            if (k.type == 'edit_form') {
                                if (k.param && k.param != '' && k.param != 0) {
                                    _this.get_form_list(2, k.param, that);
                                    e.id = k.param;
                                }
                            }
                        });
                        //展示底部菜单
                        showMenu("index");
                        e.index = i.info.all_data;
                        e.show = true;
                        app.setCache("indexMod", e, 1);
                        typeof obj == "function" && obj(e);
                    } else {
                        a.alert(i.msg ? i.msg : '数据异常');
                    }
                }, true);
            }
        },
        // 万能页面
        power: function power(id, that, obj) {
            var _this = this,
                e = {},
                width = 375;
            var width = wx.getSystemInfoSync().windowWidth;
            a.get("index/power", {id: id}, function (i) {
                if (i.code == 0) {
                    wx.setNavigationBarTitle({
                        title: i.info.name ? i.info.name : '万能页面'
                    });
                    i.info.all_data.forEach(function (k) {
                        //计算广告高度
                        if (k.type == "advert") {
                            k.high = width * k.ly_height / k.ly_width;
                        }
                        //计算轮播图高度
                        if (k.type == "banner") {
                            //k.high = width * k.ly_height / k.ly_width
                            k.high = width * k.ly_height / 10;
                        }
                        //地图
                        if (k.type == "position" && k.is_display == 2) {
                            that.setData({
                                "markers[0].latitude": k.latitude,
                                "markers[0].longitude": k.longitude,
                                "markers[0].title": k.position_name
                            });
                        }
                        //富文本
                        if (k.type == "rich_text") {
                            s.wxParse("wxParseData_" + k.time_key, "html", k.content, that, "0");
                            k.wxParseData = that.data['wxParseData_' + k.time_key].nodes;
                        }
                        //图片列表数组转json字符串
                        if (k.type == "edit_piclist") {
                            k.arr = a.str(k.list);
                        }
                        //悬浮图标
                        if (k.type == "floaticon") {
                        }
                        //评论
                        if (k.type == "comment") {
                            _this.comment(that, k.is_display);
                        }
                        //背景音乐
                        if (k.type == 'edit_music') {
                            _this.play_music(k.title, k.author, k.imgurl, k.music_url);
                        }
                        //万能表单
                        if (k.type == 'edit_form') {
                            if (k.param && k.param != '' && k.param != 0) {
                                _this.get_form_list(3, k.param, that);
                                e.id = k.param;
                            }
                        }
                    });
                    e.index = i.info.all_data;
                    e.show = true;
                    //app.setCache("power", e, 5);//5秒
                    typeof obj == "function" && obj(e);
                } else {
                    a.alert(i.msg);
                }
            }, true);
            //}
        },
        play_music: function play_music(title, singer, coverImgUrl, src) {
            if (src && src != '') {
                var backgroundAudioManager = wx.getBackgroundAudioManager();
                backgroundAudioManager.title = title;
                backgroundAudioManager.singer = singer;
                backgroundAudioManager.coverImgUrl = coverImgUrl;
                backgroundAudioManager.src = src; // 设置了 src 之后会自动播放
            }
        },
        comment: function comment(that, num) {
            a.get("Index/CommentList", {num: num}, function (i) {
                if (i.code == 0) {
                    var a = {sroce: i.info.sroce, count: i.info.count};
                    a.commentlist = i.info.info;
                    that.setData(a);
                } else {
                    e.alert(i.msg);
                }
            });
        },
        /**
         * 获取文章分类
         */
        Article_Class: function Article_Class(ident_class, that) {
            var e = {};
            wx.getSystemInfo({
                success: function success(res) {
                    var height = (res.windowWidth - 20) * 0.50 * 0.90;
                    that.setData({height: height});
                }
            });
            a.get("Article/ArticleClass", {
                ident_class: ident_class
            }, function (t) {
                if (t.code == 0) {
                    if (t.info) {
                        e.list = t.info;
                        e.show = true;
                        that.setData(e);
                    }
                } else {
                    a.alert(t.msg);
                }
                //typeof obj == "function" && obj(e)
            }, true);
        },
        /**
         * 获取相册分类
         */
        Album_Class: function Album_Class(ident_class, that) {
            var e = {};
            wx.getSystemInfo({
                success: function success(res) {
                    var height = (res.windowWidth - 20) * 0.50 * 0.90;
                    that.setData({height: height});
                }
            });
            a.get("Album/AlbumImages", {
                ident_class: ident_class
            }, function (t) {
                if (t.code == 0) {
                    if (t.info) {
                        e.list = t.info;
                        e.show = true;
                        that.setData(e);
                    }
                } else {
                    a.alert(t.msg);
                }
                //typeof obj == "function" && obj(e)
            }, true);
        },
        //表单提交
        formSubmit: function formSubmit(that, e) {
            var that_ = this,
                form = that.data.form,
                data = e.detail.value;
            that_.validate(data, form, function (k) {
                //字段验证
                if (k == 0) {
                    data = JSON.stringify(that_.to_str(data, form)); //转换字段格式
                    a.loading('正在提交中...');
                    a.post('index/submitform', {
                        data: data,
                        form: JSON.stringify(form),
                        bus_form_id: that.data.form_id,
                        user_id: app.getCache("userinfo").uid
                    }, function (t) {
                        a.hideLoading();
                        if (t.code == 0) {
                            a.success('提交成功');
                            setTimeout(function () {
                                that.get_list();
                            }, 1e3);
                        } else {
                            a.alert(t.msg);
                        }
                    });
                } else {
                    return;
                }
            });
        },
        bindPickerChange: function bindPickerChange(that, e) {
            var id = e.target.id,
                data = that.data.data;
            data[id] = e.detail.value;
            that.setData({
                data: data
            });
        },
        listen_time_two: function listen_time_two(that, e) {
            var id = e.target.id,
                key = e.currentTarget.dataset.key,
                data = that.data.data;
            data[id + '_' + key] = e.detail.value;
            if (key == 2) {
                if (a.time_str(data[id + '_1']) >= a.time_str(data[id + '_2'])) {
                    a.error('不小于开始时间');
                    return;
                }
                data[id] = data[id + '_1'] + ',' + data[id + '_2'];
            }
            that.setData({
                data: data
            });
        },
        Image_del: function Image_del(that, e) {
            var index = a.pdata(e).index,
                key = a.pdata(e).key,
                arr = that.data.data;
            a.removeByValue(arr[key], index, function (i) {
                arr[key] = i;
                that.setData({
                    data: arr
                });
            });
        },
        //获取表单
        get_form_list: function get_form_list(type_, id, that) {
            var form = app.siteInfo.form,
                data = {};
            var button_name = '提交';
            a.get('index/form', {
                id: id
            }, function (t) {
                var form = t.info.list;
                if (t.code == 0) {
                    if (type_ == 1) {
                        wx.setNavigationBarTitle({
                            title: t.info.title ? decodeURIComponent(t.info.title) : '万能表单'
                        });
                        if (form.length == 0) {
                            a.alert('表单内容为空');
                            return;
                        }
                    }
                    form.forEach(function (k) {
                        if (k.module == 'picker') {
                            data[k.name] = 0;
                        }
                        ;
                        if (k.module == 'time_one') {
                            data[k.name] = k.default;
                        }
                        ;
                        if (k.module == 'time_two') {
                            data[k.name + '_1'] = k.default1;
                            data[k.name + '_2'] = k.default2;
                            if (k.default1 && k.default2) {
                                data[k.name] = k.default1 + ',' + k.default2;
                            } else {
                                data[k.name] = '';
                            }
                        }
                        ;
                        if (k.module == 'pic_arr') {
                            data[k.name] = [];
                        }
                        ;
                        if (k.module == 'region') {
                            data[k.name] = k.default;
                            data[k.name + '_multi'] = [0, 0, 0];
                        }
                        if (k.module == 'button') {
                            button_name = k.title;
                        }
                        ;
                    });
                    if (type_ == 1) {
                        that.setData({
                            show: true
                        });
                    }
                    that.setData({
                        data: data,
                        button_name: button_name,
                        form: form,
                        form_id: id
                    });
                } else {
                    a.alert(t.msg);
                }
            }, true);
        },
        //过滤字段，转换字段格式
        to_str: function to_str(data, list) {
            var that = this,
                arr = [];
            for (var i in data) {
                arr.push({'name': i, 'value': data[i]});
            }
            if (arr.length > 0) {
                arr.forEach(function (k) {
                    for (var i = 0; i < list.length; i++) {
                        if (k.name == list[i].name) {
                            if (list[i].module == 'checkbox') {
                                data[k.name] = data[k.name].join(',');
                            }
                            // if (list[i].module == 'region') {//input自动转数组为字符串了
                            //  // data[k.name] = data[k.name].join(',');
                            // }
                        }
                    }
                });
                return data;
            } else {
                a.error('表单不能为空');
                return;
            }
        },
        //字段验证
        validate: function validate(data, list, obj) {
            var arr = [],
                n = 0,
                that = this;
            for (var _i in data) {
                arr.push({'name': _i, 'value': data[_i]});
            }
            if (arr.length > 0) {
                for (var i = 0; i < arr.length; i++) {
                    var res = that.in_array(arr[i].name, arr[i].value, list);
                    if (res['code'] == 1) {
                        n++;
                        a.error(res.msg);
                        break;
                    }
                }
                "function" == typeof obj && obj(n);
            } else {
                a.error('表单不能为空');
                return;
            }
        },
        //错误判断
        in_array: function in_array(name, value, list) {
            var data = {'code': 0};
            list.forEach(function (k) {
                if (k.name == name) {
                    //判断不能为空
                    if (k.empty) {
                        if (!value || value.length == 0) {
                            //判断字段是否空值
                            data['code'] = 1;
                            data['msg'] = k.title + '不能为空';
                            return data; //字段不能能为空
                        }
                    }
                    // if (k.module == 'time_two') {
                    // }
                }
            });
            return data;
        },
        /**
         * 图片上传
         * this
         * n文件夹名称
         * key 0多图上传，1单图上传
         */
        upload: function upload(that, field, n) {
            var key = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 0;
            var _this = this;
            wx.showActionSheet({
                itemList: ['从相册中选择', '拍照'],
                itemColor: "#f7982a",
                success: function success(res) {
                    if (!res.cancel) {
                        if (res.tapIndex == 0) {
                            _this.chooseWxImage('album', that, field, n, key);
                        } else if (res.tapIndex == 1) {
                            _this.chooseWxImage('camera', that, field, n, key);
                        }
                    }
                }
            });
        },
        chooseWxImage: function chooseWxImage(type_, that, field, n, key) {
            var _this = this,
                site = getApp().siteInfo,
                arr = that.data.data,
                url = site.siteroot + '?i=' + site.uniacid + '&t=undefined&v=' + site.version + '&from=wxapp&c=entry&a=wxapp&do=index_uploadFile&path=' + n + '&m=yb_shop&sign=5201314';
            wx.chooseImage({
                sizeType: ['original', 'compressed'],
                sourceType: [type_],
                success: function success(res) {
                    if (key == 0) {
                        res.tempFilePaths.forEach(function (t) {
                            wx.uploadFile({
                                url: url,
                                filePath: t,
                                name: 'file_upload',
                                success: function success(res) {
                                    console.log(res.data);
                                    if (res.data != null && res.data != '') {
                                        arr[field] = arr[field].concat(res.data);
                                        that.setData({
                                            data: arr
                                        });
                                        //var data = a.json_parse(res.data);
                                        // if (data.code == 0) {
                                        //   arr[field] = arr[field].concat(data.info);
                                        //   that.setData({
                                        //     data: arr
                                        //   })
                                        // } else {
                                        //   a.error(data.msg)
                                        // }
                                    } else {
                                        a.error(data.msg);
                                    }
                                }
                            });
                        });
                    } else {
                        wx.uploadFile({
                            url: url,
                            filePath: res.tempFilePaths[0],
                            name: 'file_upload',
                            success: function success(res) {
                                if (res.data != null && res.data != '') {
                                    console.log(res.data);
                                    arr[field] = res.data;
                                    that.setData({
                                        data: arr
                                    });
                                    // var data = a.json_parse(res.data);
                                    // if (data.code == 0) {
                                    //   //var arr = that.data.data;
                                    //   arr[field] = data.info;
                                    //   that.setData({
                                    //     data: arr
                                    //   })
                                    // } else {
                                    //   a.error(data.msg)
                                    // }
                                } else {
                                    a.error('上传失败，请重试');
                                }
                            }
                        });
                    }
                }
            });
        },
        //版本号比较
        versionfunegt: function versionfunegt(ver1, ver2) {
            var version1next = ver1.replace(".", "");
            var version2next = ver2.replace(".", "");
            var version1pre = parseFloat(version1next);
            var version2pre = parseFloat(version2next);
            if (version1pre < version2pre) {
                return false;
            } else {
                return true;
            }
        }
    };
});
;define("yb_shop/utils/api/kjb.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
//砍价活动
    var app = getApp(),
        a = app.requirejs("core"),
        info = app.getCache("userinfo"),
        s = app.requirejs("wxParse/wxParse");
    module.exports = {
        /**
         * 首页轮播图、分类
         */
        BarIndex: function BarIndex(obj) {
            var e = {};
            a.get('Bargain/BarIndex', {}, function (t) {
                console.log(t);
                if (t.code == 0) {
                    e.cate_info = t.info.cate_info;
                    e.carousel = t.info.carousel;
                    typeof obj == "function" && obj(e);
                } else {
                    a.alert(t.msg);
                }
            });
        },
        /**
         * 砍价活动商品列表
         */
        kj_list: function kj_list(cate_id, kj_type, page, that, obj) {
            var e = {};
            a.get('Bargain/Bargain', {
                type: kj_type,
                class_id: cate_id,
                page: page
            }, function (t) {
                console.log(t);
                if (t.code == 0) {
                    t.info.forEach(function (i) {
                        var short = i.star_time - Date.parse(new Date()) / 1000;
                        if (short > 0) {
                            i.goods_type = 1; //未开始
                        } else {
                            i.goods_type = 2; //已开始
                        }
                        i.user_num = i.user.length;
                    });
                    t.info.length > 0 && (e.page = page + 1, e.list = that.data.list.concat(t.info), t.info.length < 10 && (e.loaded = true));
                    t.info.length == 0 && (e.loaded = true);
                    e.show = true;
                    typeof obj == "funciton" & obj(e);
                } else {
                    a.alert(t.msg, function () {
                        return;
                    });
                }
            }, true);
        },
        /**
         * 商品详情
         */
        kj_detail: function kj_detail(id, that, obj) {
            var e = {};
            a.get("Bargain/GoodsInfo", {
                id: id
            }, function (t) {
                console.log(t);
                if (t.code == 0 && t.info != null) {
                    s.wxParse("wxParseData", "html", t.info.bargain_info.activity_rules, that, "0");
                    e.bargain_info = t.info.bargain_info;
                    e.about_info = t.info.about_info;
                    e.show = true;
                    typeof obj == "function" && obj(e);
                } else {
                    a.alert(t.msg);
                }
            }, true);
        },
        /**
         * 砍价详情
         */
        kj_info: function kj_info(id, uid, that, obj) {
            var e = {};
            a.get("Bargain/BargainInfo", {
                id: id,
                user_id: uid
            }, function (t) {
                if (t.code == 0 && t.info != null) {
                    s.wxParse("wxParseData", "html", t.info.bargain_info.activity_rules, that, "0");
                    e.bargain_info = t.info.bargain_info;
                    e.bargain_info.cons_time = a.time_format(t.info.bargain_info.consumption_time);
                    e.user_info = t.info.user_info;
                    e.show = true;
                    var now_time = Date.parse(new Date()) / 1000;
                    if (now_time > t.info.bargain_info.consumption_time) {
                        e.overtime = 1; //已过期
                    } else {
                        e.overtime = 2;
                    }
                    wx.setNavigationBarTitle({
                        title: t.info.bargain_info.bargain_name || "砍价详情"
                    });
                    typeof obj == "function" && obj(e);
                } else {
                    a.alert(t.msg);
                    setTimeout(function () {
                        wx.navigateBack();
                    }, 1e3);
                }
            }, true);
        },
        /**
         * 发起砍价
         * param id 活动id
         * param status 是否提示
         * return object
         */
        BargainCreate: function BargainCreate(id, obj, status) {
            a.get('Bargain/BargainCreate', {
                bargain_id: id,
                user_id: getApp().getCache("userinfo").uid
            }, function (t) {
                console.log(t);
                if (t.code == 0) {
                    t.popup = true;
                } else {
                    if (!status) {
                        a.alert(t.msg);
                    }
                }
                typeof obj == "function" && obj(t); //注意：特殊需求，勿动
            });
        },
        /**
         * 帮他砍价
         */
        BargainHelp: function BargainHelp(id, uid, obj) {
            a.get('Bargain/BargainHelp', {
                iInitiated_id: id,
                user_id: getApp().getCache("userinfo").uid,
                uid: uid
            }, function (t) {
                if (t.code == 0) {
                    t.popup = true;
                    typeof obj == "function" && obj(t);
                } else {
                    a.alert(t.msg);
                }
            });
        },
        /**
         * 帮砍记录
         */
        BargainRecord: function BargainRecord(id, obj) {
            var e = {};
            a.get("Bargain/BargainRecord", {
                iInitiated_id: id
            }, function (t) {
                if (t.code == 0) {
                    t.info.forEach(function (t) {
                        t.create_time = a.time_format(t.create_time);
                        if (t.user_id == getApp().getCache("userinfo").uid) {
                            t.nick_name = "系统";
                            t.user_headimg = "/yb_shop/static/images/icon/kj_info.png";
                        }
                    });
                    e.list = t.info;
                    e.show = true;
                    typeof obj == "function" && obj(e);
                } else {
                    a.alert(t.msg);
                }
            }, true);
        },
        /**
         * 我的砍价记录
         */
        MyBargain: function MyBargain(page, that, obj) {
            var e = {};
            a.get("Bargain/MyBargain", {
                page: page,
                user_id: getApp().getCache("userinfo").uid
            }, function (t) {
                if (t.code == 0) {
                    t.info.forEach(function (i) {
                        var now_time = Date.parse(new Date()) / 1000;
                        if (now_time > i.consumption_time) {
                            i.overtime = 1; //已过期
                        } else {
                            i.overtime = 2;
                        }
                        if (i.end_time > now_time) {
                            i.goods_type = 1; //进行中
                        } else {
                            i.goods_type = 2; //已结束
                        }
                        if (i.current_price - i.lowest_price <= 0) {
                            i.kj_type = 1; //砍价已完成
                        } else {
                            i.kj_type = 2; //砍价未完成
                        }
                    });
                    t.info.length > 0 && (e.page = page + 1, e.list = that.data.list.concat(t.info), t.info.length < 10 && (e.loaded = true));
                    t.info.length == 0 && (e.loaded = true);
                    e.show = true;
                    typeof obj == "function" && obj(e);
                } else {
                    a.alert(t.msg);
                }
            }, true);
        },
        /**
         * 倒计时
         */
        Countdown: function Countdown(time, obj) {
            var e = {},
                totalSecond = time - Date.parse(new Date()) / 1000;
            if (totalSecond <= 0) {
                e.show_time = false;
                typeof obj == "function" & obj(e);
            }
            {
                var interval = setInterval(function () {
                    // 秒数
                    var second = totalSecond;
                    // 天数位
                    var day = Math.floor(second / 3600 / 24);
                    var dayStr = day.toString();
                    if (dayStr.length == 1) dayStr = '0' + dayStr;
                    // 小时位
                    var hr = Math.floor((second - day * 3600 * 24) / 3600);
                    var hrStr = hr.toString();
                    if (hrStr.length == 1) hrStr = '0' + hrStr;
                    // 分钟位
                    var min = Math.floor((second - day * 3600 * 24 - hr * 3600) / 60);
                    var minStr = min.toString();
                    if (minStr.length == 1) minStr = '0' + minStr;
                    // 秒位
                    var sec = second - day * 3600 * 24 - hr * 3600 - min * 60;
                    var secStr = sec.toString();
                    if (secStr.length == 1) secStr = '0' + secStr;
                    e.countDownDay = dayStr, e.countDownHour = hrStr, e.countDownMinute = minStr, e.countDownSecond = secStr, typeof obj == "function" && obj(e);
                    totalSecond--;
                    if (totalSecond < 0) {
                        clearInterval(interval);
                        wx.showToast({
                            title: '活动已结束'
                        });
                        e.countDownDay = "0", e.countDownHour = "0", e.countDownMinute = "0", e.countDownSecond = "0", e.show_time = false;
                        typeof obj == "function" && obj(e);
                    }
                }.bind(this), 1000);
            }
        },
        /**
         * 定义函数removeByValue进行元素删除
         * param arr 数组
         * param val 元素value值
         * return arr
         */
        removeByValue: function removeByValue(arr, val, obj) {
            var index = -1;
            for (var i = 0; i < arr.length; i++) {
                console.log(arr[i]);
                if (arr[i] == val) {
                    index = i;
                    break;
                }
            }
            arr.splice(index, 1);
            typeof obj == "function" && obj(arr);
        }
    };
});
;define("yb_shop/utils/check.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) {
        return typeof obj;
    } : function (obj) {
        return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
    /*
     *数组，字符串，数字，对象等类型的检验、判断，转化
     */
    function n(r, e, i, o) {
        var u;
        if (s.isArray(e)) s.each(e, function (e, u) {
            i || l.test(r) ? o(r, u) : n(r + "[" + ("object" === (void 0 === u ? "undefined" : t(u)) ? e : "") + "]", u, i, o);
        }); else if (i || "object" !== s.type(e)) o(r, e); else for (u in e) {
            n(r + "[" + u + "]", e[u], i, o);
        }
    }
    function r(n) {
        var r = n.length,
            t = s.type(n);
        return !s.isWindow(n) && (!(1 !== n.nodeType || !r) || "array" === t || "function" !== t && (0 === r || "number" == typeof r && r > 0 && r - 1 in n));
    }
    var t = "function" == typeof Symbol && "symbol" == _typeof(Symbol.iterator) ? function (n) {
            return typeof n === "undefined" ? "undefined" : _typeof(n);
        } : function (n) {
            return n && "function" == typeof Symbol && n.constructor === Symbol && n !== Symbol.prototype ? "symbol" : typeof n === "undefined" ? "undefined" : _typeof(n);
        },
        e = {},
        i = [],
        o = i.push,
        u = i.indexOf,
        f = e.toString,
        a = e.hasOwnProperty,
        c = "1.10.2".trim,
        l = /\[\]$/,
        s = {
            isFunction: function isFunction(n) {
                return "function" === s.type(n);
            },
            isArray: Array.isArray || function (n) {
                return "array" === s.type(n);
            },
            isWindow: function isWindow(n) {
                return null != n && n == n.window;
            },
            isNumeric: function isNumeric(n) {
                return !isNaN(parseFloat(n)) && isFinite(n);
            },
            type: function type(n) {
                return null == n ? String(n) : "object" === (void 0 === n ? "undefined" : t(n)) || "function" == typeof n ? e[f.call(n)] || "object" : void 0 === n ? "undefined" : t(n);
            },
            isPlainObject: function isPlainObject(n) {
                var r;
                if (!n || "object" !== s.type(n) || n.nodeType || s.isWindow(n)) return false;
                try {
                    if (n.constructor && !a.call(n, "constructor") && !a.call(n.constructor.prototype, "isPrototypeOf")) return false;
                } catch (n) {
                    return false;
                }
                if (s.support.ownLast) for (r in n) {
                    return a.call(n, r);
                }
                for (r in n) {
                }
                return void 0 === r || a.call(n, r);
            },
            isEmptyObject: function isEmptyObject(n) {
                var r;
                for (r in n) {
                    return false;
                }
                return true;
            },
            each: function each(n, t, e) {
                var i = 0,
                    o = n.length,
                    u = r(n);
                if (e) {
                    if (u) for (; i < o && false !== t.apply(n[i], e); i++) {
                    } else for (i in n) {
                        if (false === t.apply(n[i], e)) break;
                    }
                } else if (u) for (; i < o && false !== t.call(n[i], i, n[i]); i++) {
                } else for (i in n) {
                    if (false === t.call(n[i], i, n[i])) break;
                }
                return n;
            },
            trim: c && !c.call("\uFEFF?") ? function (n) {
                return null == n ? "" : c.call(n);
            } : function (n) {
                //return null == n ? "" : (n + "").replace(rtrim, "") //估计rtrim压缩变了名称
                return null == n ? "" : (n + "").replace(l, "");
            },
            makeArray: function makeArray(n, t) {
                var e = t || [];
                return null != n && (r(Object(n)) ? s.merge(e, "string" == typeof n ? [n] : n) : o.call(e, n)), e;
            },
            inArray: function inArray(n, r, t) {
                var e;
                if (r) {
                    if (u) return u.call(r, n, t);
                    for (e = r.length, t = t ? t < 0 ? Math.max(0, e + t) : t : 0; t < e; t++) {
                        if (t in r && r[t] === n) return t;
                    }
                }
                return -1;
            },
            merge: function merge(n, r) {
                var t = r.length,
                    e = n.length,
                    i = 0;
                if ("number" == typeof t) for (; i < t; i++) {
                    n[e++] = r[i];
                } else for (; void 0 !== r[i];) {
                    n[e++] = r[i++];
                }
                return n.length = e, n;
            },
            isMobile: function isMobile(n) {
                return "" !== s.trim(n) && /^1[3|4|5|7|8][0-9]\d{8}$/.test(s.trim(n));
            },
            toFixed: function toFixed(n, r) {
                var t = parseInt(r) || 0;
                if (t < -20 || t > 100) throw new RangeError("Precision of " + t + " fractional digits is out of range");
                var e = Number(n);
                if (isNaN(e)) return "NaN";
                var i = "";
                if (e <= 0 && (i = "-", e = -e), e >= Math.pow(10, 21)) return i + e.toString();
                var o;
                if (r = Math.round(e * Math.pow(10, t)), o = 0 == r ? "0" : r.toString(), 0 == t) return i + o;
                var u = o.length;
                if (u <= t) {
                    o = Math.pow(10, t + 1 - u).toString().substring(1) + o, u = t + 1;
                }
                if (t > 0) {
                    o = o.substring(0, u - t) + "." + o.substring(u - t);
                }
                return i + o;
            }
        };
    s.extend = function () {
        var n,
            r,
            e,
            i,
            o,
            u,
            f = arguments[0] || {},
            a = 1,
            c = arguments.length,
            l = false;
        for ("boolean" == typeof f && (l = f, f = arguments[1] || {}, a = 2), "object" === (void 0 === f ? "undefined" : t(f)) || s.isFunction(f) || (f = {}), c === a && (f = this, --a); a < c; a++) {
            if (null != (n = arguments[a])) for (r in n) {
                e = f[r], i = n[r], f !== i && (l && i && (s.isPlainObject(i) || (o = s.isArray(i))) ? (o ? (o = false, u = e && s.isArray(e) ? e : []) : u = e && s.isPlainObject(e) ? e : {}, f[r] = s.extend(l, u, i)) : void 0 !== i && (f[r] = i));
            }
        }
        return f;
    },
//转换参数
        s.param = function (r, t) {
            var e,
                i = [],
                o = function o(n, r) {
                    r = s.isFunction(r) ? r() : null == r ? "" : r, i[i.length] = encodeURIComponent(n) + "=" + encodeURIComponent(r);
                };
            if (void 0 === t && (t = false), s.isArray(r) || r.jquery && !s.isPlainObject(r)) s.each(r, function () {
                o(this.name, this.value);
            }); else for (e in r) {
                n(e, r[e], t, o);
            }
            return i.join("&").replace(/%20/g, "+");
        }, module.exports = s;
});
;define("yb_shop/utils/core.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) {
        return typeof obj;
    } : function (obj) {
        return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
    /**
     * 核心类库
     */
    var t = "function" == typeof Symbol && "symbol" == _typeof(Symbol.iterator) ? function (t) {
            return typeof t === "undefined" ? "undefined" : _typeof(t);
        } : function (t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t === "undefined" ? "undefined" : _typeof(t);
        },
        e = require("check");
    module.exports = {
        toQueryPair: function toQueryPair(t, e) {
            2;
            return void 0 === e ? t : t + "=" + encodeURIComponent(null === e ? "" : String(e));
        },
        /*
         *处理请求路径
         * @param n 方法名
         * @param o 参数
         * return  string
         */
        getUrl: function getUrl(n, o) {
            var n = n.replace(/\//gi, "/");
            var a = getApp().globalData.api + "api/" + n;
            //lujin
            return o && ("object" == (void 0 === o ? "undefined" : t(o)) ? a += "?app_id=" + getApp().globalData.appid + "&" + e.param(o) : "string" == typeof o && (a += "&" + o)), a;
        },
        /*
         *处理请求路径格式
         * @param t:缓存值
         * @param n:data参数
         * @param o:success后返回值
         * @param a:请求类型
         * return  string
         */
        json: function json(t, n, o, i, a, c) {
            var r = getApp(),
                s = r.getCache("userinfo"),
                d = r.requirejs("core");
            i && d.loading();
            var p = a ? this.getUrl(t) : this.getUrl(t, n),
                l = {
                    url: p,
                    method: a ? "POST" : "GET",
                    header: {
                        "Content-type": a ? "application/x-www-form-urlencoded" : "application/json"
                    }
                };
            a && (l.data = e.param(n)), //参数
            o && (l.success = function (t) {
                i && d.hideLoading();
                if (t.errMsg == "request:ok") {
                    if (typeof t.data == "string") {
                        if (t.data.indexOf("html") >= 0 && t.data.indexOf("head") >= 0 && t.data.indexOf("body") >= 0) {
                            d.error('服务器错误！');
                            return;
                        }
                    }
                    "function" == typeof o, o(t.data);
                } else {
                    this.alert(t.errMsg);
                }
            }), l.fail = function (t) {
                that.alert(t.errMsg);
            };
            wx.request(l);
            console.log(l);
        },
        /*
         *post请求
         * @param n 方法名
         * return  string
         */
        post: function post(t, e, n, i) {
            var that = this;
            var name = t.split('/');
            name = name[0] + '_' + name[1];
            //console.log(name)
            i && that.loading();
            getApp().util.request({
                'url': 'entry/wxapp/' + name,
                data: e,
                method: 'POST',
                success: function success(t) {
                    i && that.hideLoading();
                    if (t.errMsg == "request:ok") {
                        if (typeof t.data == "string") {
                            if (t.data.indexOf("html") >= 0 && t.data.indexOf("head") >= 0 && t.data.indexOf("body") >= 0) {
                                that.error('请求错误002');
                                return;
                            }
                        }
                        if (t.data == '') {
                            //that.error('请求异常！');
                            console.log('请求异常！');
                            return;
                        }
                        //转json对象
                        var res_data = t.data;
                        // console.log(res_data)
                        if (typeof res_data == 'string') {
                            console.log(typeof res_data === "undefined" ? "undefined" : _typeof(res_data));
                            res_data = that.json_parse(res_data);
                        }
                        "function" == typeof n, n(res_data);
                    } else {
                        that.alert(t.errMsg);
                    }
                },
                fail: function fail(res) {
                    that.alert(res.errMsg);
                }
            });
            // this.json(t, e, n, o, true, i)
        },
        /*
         *get请求
         * @param n 方法名
         * return  string
         */
        get: function get(t, e, n, i) {
            var that = this;
            var name = t.split('/');
            name = name[0] + '_' + name[1];
            //console.log(name)
            i && that.loading();
            getApp().util.request({
                'url': 'entry/wxapp/' + name,
                data: e,
                success: function success(t) {
                    i && that.hideLoading();
                    if (t.errMsg == "request:ok") {
                        if (typeof t.data == "string") {
                            if (t.data.indexOf("html") >= 0 && t.data.indexOf("head") >= 0 && t.data.indexOf("body") >= 0) {
                                that.error('请求错误001');
                                return;
                            }
                        }
                        if (t.data == '') {
                            //that.error('请求异常！');
                            console.log('请求异常！');
                            return;
                        }
                        //转json对象
                        var res_data = t.data;
                        // console.log(res_data)
                        if (typeof res_data == 'string') {
                            console.log(typeof res_data === "undefined" ? "undefined" : _typeof(res_data));
                            res_data = that.json_parse(res_data);
                        }
                        "function" == typeof n, n(res_data);
                    } else {
                        that.alert(t.errMsg);
                    }
                },
                fail: function fail(res) {
                    i && that.hideLoading();
                    that.alert(res.errMsg);
                }
            });
            //this.json(t, e, n, o, false, i)
        },
        alert: function alert(e, n) {
            "object" === (void 0 === e ? "undefined" : t(e)) && (e = JSON.stringify(e)), wx.showModal({
                title: "提示",
                content: e,
                showCancel: false,
                success: function success(t) {
                    t.confirm && "function" == typeof n && n();
                }
            });
        },
        confirm: function confirm(e, n, o) {
            "object" === (void 0 === e ? "undefined" : t(e)) && (e = JSON.stringify(e)), wx.showModal({
                title: "提示",
                content: e,
                showCancel: true,
                success: function success(t) {
                    t.confirm ? "function" == typeof n && n() : "function" == typeof o && o();
                }
            });
        },
        loading: function loading(t) {
            void 0 !== t && "" != t || (t = "加载中"), wx.showToast({
                title: t,
                icon: "loading",
                duration: 5e6
            });
        },
        hideLoading: function hideLoading() {
            wx.hideToast();
        },
        toast: function toast(t, e) {
            e || (e = "loading"), wx.showToast({
                title: t,
                icon: e,
                duration: 1000
            });
        },
        warning: function warning(t) {
            wx.showToast({
                title: t,
                image: "/yb_shop/static/images/icon-warning.png",
                duration: 2000
            });
        },
        error: function error(t) {
            wx.showToast({
                title: t,
                icon: 'success',
                image: "/yb_shop/static/images/x.png",
                duration: 2000
            });
        },
        success: function success(t) {
            wx.showToast({
                title: t,
                icon: "success",
                duration: 1000
            });
        },
        //event.currentTarget返回绑定事件的元素
        pdata: function pdata(t) {
            return t.currentTarget.dataset;
        },
        //event.target返回触发事件的元素
        data: function data(t) {
            return t.target.dataset;
        },
        phone: function phone(t) {
            var e = this.pdata(t).phone;
            wx.makePhoneCall({
                phoneNumber: e
            });
        },
        /**
         * 时间戳转时间字符串
         */
        time_format: function time_format(time) {
            var timestamp = time;
            var d = new Date(timestamp * 1000); //根据时间戳生成的时间对象
            var date = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate() + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
            return date;
        },
        /**
         * 时间字符串转时间戳
         */
        time_str: function time_str(date) {
            date = date.substring(0, 19);
            date = date.replace(/-/g, '/');
            var timestamp = new Date(date).getTime();
            return timestamp / 1000;
        },
        /**
         * 倒计时
         */
        Countdown: function Countdown(time, obj) {
            var e = {},
                totalSecond = time - Date.parse(new Date()) / 1000;
            if (totalSecond <= 0) {
                e.show_time = false;
                typeof obj == "function" & obj(e);
            }
            {
                var interval = setInterval(function () {
                    // 秒数
                    var second = totalSecond;
                    // 天数位
                    var day = Math.floor(second / 3600 / 24);
                    var dayStr = day.toString();
                    if (dayStr.length == 1) dayStr = '0' + dayStr;
                    // 小时位
                    var hr = Math.floor((second - day * 3600 * 24) / 3600);
                    var hrStr = hr.toString();
                    if (hrStr.length == 1) hrStr = '0' + hrStr;
                    // 分钟位
                    var min = Math.floor((second - day * 3600 * 24 - hr * 3600) / 60);
                    var minStr = min.toString();
                    if (minStr.length == 1) minStr = '0' + minStr;
                    // 秒位
                    var sec = second - day * 3600 * 24 - hr * 3600 - min * 60;
                    var secStr = sec.toString();
                    if (secStr.length == 1) secStr = '0' + secStr;
                    e.countDownDay = dayStr, e.countDownHour = hrStr, e.countDownMinute = minStr, e.countDownSecond = secStr, typeof obj == "function" && obj(e);
                    totalSecond--;
                    if (totalSecond < 0) {
                        clearInterval(interval);
                        wx.showToast({
                            title: '活动已结束'
                        });
                        e.countDownDay = "0", e.countDownHour = "0", e.countDownMinute = "0", e.countDownSecond = "0", e.show_time = false;
                        typeof obj == "function" && obj(e);
                    }
                }.bind(this), 1000);
            }
        },
        /**
         * json字符串转对象
         */
        json_parse: function json_parse(str) {
            var jsonStr = str;
            jsonStr = jsonStr.replace(" ", "");
            if ((typeof jsonStr === "undefined" ? "undefined" : _typeof(jsonStr)) != 'object') {
                jsonStr = jsonStr.replace(/\ufeff/g, ""); //重点
                var obj = JSON.parse(jsonStr);
                return obj;
            }
        },
        /**
         * 对象转json字符串
         */
        str: function str(obj) {
            var aToStr = JSON.stringify(obj);
            return aToStr;
        },
        /**
         * 腾讯地图
         * lat 纬度
         * lng 经度
         * name 地址名称
         */
        tx_map: function tx_map(lat, lng, name) {
            lat = parseFloat(lat);
            lng = parseFloat(lng);
            var that = this,
                cache = getApp().getCache("map");
            if (cache) {
                wx.openLocation({
                    latitude: lat,
                    longitude: lng,
                    scale: 28,
                    name: name
                });
            } else {
                wx.getLocation({
                    type: 'wgs84',
                    success: function success(res) {
                        console.log(res);
                        getApp().setCache("map", res, 1200);
                        var latitude = res.latitude;
                        var longitude = res.longitude;
                        wx.openLocation({
                            latitude: lat,
                            longitude: lng,
                            scale: 28,
                            name: name
                        });
                    },
                    fail: function fail() {
                        that.alert('未授权位置信息');
                    }
                });
            }
        },
        /**
         * 图片预览
         * url str 当前图片路径
         * arr json字符串
         * field arr中图片路径的字段名
         */
        previewImage: function previewImage(url, arr, field) {
            var urls = [];
            arr = JSON.parse(arr);
            arr.forEach(function (t, k) {
                urls[k] = t[field];
            });
            wx.previewImage({
                current: url, // 当前显示图片的http链接
                urls: urls // 需要预览的图片http链接列表
            });
        },
        /**
         * 复制到剪贴板
         * data string
         */
        Clipboard: function Clipboard(data) {
            var that = this;
            wx.setClipboardData({
                data: data,
                success: function success(res) {
                    wx.getClipboardData({
                        success: function success(res) {
                            that.alert('成功复制到剪贴板');
                        }
                    });
                }
            });
        },
        //跳转
        jump: function jump(url, i) {
            !i || i == '' ? i = 1 : i = i;
            if (i == 1) {
                wx.navigateTo({
                    url: url
                });
            } else if (i == 2) {
                wx.redirectTo({
                    url: url
                });
            } else if (i == 3) {
                wx.reLaunch({ //关闭所有页面，打开到应用内的某个页面。
                    url: url
                });
            } else if (i == 4) {
                wx.switchTab({ //跳转到 tabBar 页面，并关闭其他所有非 tabBar 页面
                    url: url
                });
            } else if (i == 5) {
                wx.navigateBack();
            }
        },
        ReName: function ReName(e) {
            wx.setNavigationBarTitle({
                title: e ? e : ''
            });
        },
        /**
         * 定义函数removeByValue进行元素删除
         * param arr 数组
         * param val 元素value值
         * return arr
         */
        removeByValue: function removeByValue(arr, val, obj) {
            var index = -1;
            for (var i = 0; i < arr.length; i++) {
                console.log(arr[i]);
                if (arr[i] == val) {
                    index = i;
                    break;
                }
            }
            arr.splice(index, 1);
            typeof obj == "function" && obj(arr);
        },
        setting: function setting() {
            console.log(getApp().tabBar.backgroundTextStyle);
            console.log(getApp().tabBar.background);
            wx.setNavigationBarColor({
                frontColor: getApp().tabBar.backgroundTextStyle,
                backgroundColor: getApp().tabBar.background,
                animation: {
                    duration: 0,
                    timingFunc: "easeIn"
                }
            });
        },
        //底部导航跳转小程序，web网页，内部页面
        menu_url: function menu_url(k) {
            var i = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 1;
            var that_ = this;
            var data = that_.pdata(k),
                k = data.key,
                url = data.url ? data.url : '',
                appid = data.appid ? data.appid : '',
                path = data.path ? data.path : '',
                title = data.title ? data.title : '',
                phone = data.phone ? data.phone : '',
                lat = data.lat ? data.lat : '',
                lng = data.lng ? data.lng : '';
            console.log(data);
            if (k == 1) {
                if (url) {
                    if (url.length > 0) {
                        that_.jump(url, i);
                    }
                }
            } else if (k == 2) {
                //跳转小程序
                wx.navigateToMiniProgram({
                    appId: appid,
                    path: path,
                    extraData: {
                        foo: 'bar'
                    },
                    envVersion: 'release',
                    success: function success(res) {
                        console.log('打开成功');
                    },
                    fail: function fail(res) {
                        that_.alert('请绑定小程序');
                    }
                });
            } else if (k == 3) {
                //web网页
                that_.jump('/yb_shop/pages/web/index?url=' + escape(path) + '&name=' + title);
            } else if (k == 4) {
                //打电话
                if (phone) {
                    wx.makePhoneCall({
                        phoneNumber: phone
                    });
                } else {
                    that_.alert('电话不能为空');
                }
            } else if (k == 5) {
                //地图
                if (lat && lng) {
                    that_.tx_map(lat, lng, title);
                } else {
                    that_.alert('请完善位置信息');
                }
            } else {
                return;
            }
        }
    };
});
;define("yb_shop/utils/icons.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    module.exports = {
        home: "/yb_shop/static/images/icon/home.png",
        coupon02: "/yb_shop/static/images/icon/coupon02.png",
        index: "/yb_shop/static/images/icon/index.png",
        share: "/yb_shop/static/images/icon/share.png",
        home_red: "/yb_shop/static/images/icon-red/home.png",
        cate: "/yb_shop/static/images/icon/cate.png",
        cate_red: "/yb_shop/static/images/icon-red/cate.png",
        cart: "/yb_shop/static/images/icon/cart.png",
        service: "/yb_shop/static/images/icon/service.png",
        service02: "/yb_shop/static/images/icon/service02.png",
        about: "/yb_shop/static/images/icon/about.png",
        about02: "/yb_shop/static/images/icon/about02.png",
        cart01: "/yb_shop/static/images/icon/cart01.png",
        cart_red: "/yb_shop/static/images/icon-red/cart.png",
        people: "/yb_shop/static/images/icon/people.png",
        people_red: "/yb_shop/static/images/icon-red/people.png",
        shop: "/yb_shop/static/images/icon/shop.png",
        order: "/yb_shop/static/images/icon/order.png",
        cartWhite: "/yb_shop/static/images/icon-white/cart.png",
        like: "/yb_shop/static/images/icon/like.png",
        like02: "/yb_shop/static/images/icon/like02.png",
        good_like: "/yb_shop/static/images/icon/good_like.png",
        index_shop: "/yb_shop/static/images/icon/index_shop_icon.png",
        likeactive: "/yb_shop/static/images/icon-red/like.png",
        likefill: "/yb_shop/static/images/icon/like_fill.png",
        footprint: "/yb_shop/static/images/icon/footprint.png",
        notice: "/yb_shop/static/images/icon/notice.png",
        list: "/yb_shop/static/images/icon/list.png",
        location: "/yb_shop/static/images/icon/location.png",
        location01: "/yb_shop/static/images/icon/location01.png",
        location02: "/yb_shop/static/images/icon/location02.png",
        setting: "/yb_shop/static/images/icon-white/setting.png",
        paying48: "/yb_shop/static/images/icon/paying-48.png",
        deliver48: "/yb_shop/static/images/icon/deliver-48.png",
        box48: "/yb_shop/static/images/icon/box-48.png",
        refund48: "/yb_shop/static/images/icon/refund-48.png",
        store: "/yb_shop/static/images/icon/store.png",
        storeWhite: "/yb_shop/static/images/icon-white/store.png",
        search: "/yb_shop/static/images/icon/search.png",
        money: "/yb_shop/static/images/icon/money.png",
        coupon: "/yb_shop/static/images/icon/coupon.png",
        card: "/yb_shop/static/images/icon/card.png",
        car48: "/yb_shop/static/images/icon/car-48.png",
        cry220: "/yb_shop/static/images/icon/car-220.png",
        group: "/yb_shop/static/images/icon/group.png",
        mobile: "/yb_shop/static/images/icon/mobile.png",
        labelGreen: "/yb_shop/static/images/label-green.png",
        labelRed: "/yb_shop/static/images/label-red.png",
        back: "/yb_shop/static/images/icon/back.png",
        seting: "/yb_shop/static/images/icon/seting.png",
        appointment: "/yb_shop/static/images/icon/appointment.png",
        kj_cion: "/yb_shop/static/images/icon/kj_icon.png",
        kj_order_cion: "/yb_shop/static/images/icon/kj_order_icon.png",
        group_icon: "/yb_shop/static/images/icon/group_icon.png",
        nopic: "/yb_shop/static/images/nopic.jpg",
        fenxiao: "/yb_shop/static/images/fx_icon.png"
    };
});
;define("yb_shop/utils/wxParse/html2json.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var __placeImgeUrlHttps = "https";
    var __emojisReg = '';
    var __emojisBaseSrc = '';
    var __emojis = {};
    var wxDiscode = require('./wxDiscode.js');
    var HTMLParser = require('./htmlparser.js');
// Empty Elements - HTML 5
    var empty = makeMap("area,base,basefont,br,col,frame,hr,img,input,link,meta,param,embed,command,keygen,source,track,wbr");
// Block Elements - HTML 5
    var block = makeMap("br,a,code,address,article,applet,aside,audio,blockquote,button,canvas,center,dd,del,dir,div,dl,dt,fieldset,figcaption,figure,footer,form,frameset,h1,h2,h3,h4,h5,h6,header,hgroup,hr,iframe,ins,isindex,li,map,menu,noframes,noscript,object,ol,output,p,pre,section,script,table,tbody,td,tfoot,th,thead,tr,ul,video");
// Inline Elements - HTML 5
    var inline = makeMap("abbr,acronym,applet,b,basefont,bdo,big,button,cite,del,dfn,em,font,i,iframe,img,input,ins,kbd,label,map,object,q,s,samp,script,select,small,span,strike,strong,sub,sup,textarea,tt,u,var");
// Elements that you can, intentionally, leave open
// (and which close themselves)
    var closeSelf = makeMap("colgroup,dd,dt,li,options,p,td,tfoot,th,thead,tr");
// Attributes that have their values filled in disabled="disabled"
    var fillAttrs = makeMap("checked,compact,declare,defer,disabled,ismap,multiple,nohref,noresize,noshade,nowrap,readonly,selected");
// Special Elements (can contain anything)
    var special = makeMap("wxxxcode-style,script,style,view,scroll-view,block");
    function makeMap(str) {
        var obj = {},
            items = str.split(",");
        for (var i = 0; i < items.length; i++) {
            obj[items[i]] = true;
        }
        return obj;
    }
    function q(v) {
        return '"' + v + '"';
    }
    function removeDOCTYPE(html) {
        return html.replace(/<\?xml.*\?>\n/, '').replace(/<.*!doctype.*\>\n/, '').replace(/<.*!DOCTYPE.*\>\n/, '');
    }
    function html2json(html, bindName) {
        //处理字符串
        html = removeDOCTYPE(html);
        html = wxDiscode.strDiscode(html);
        //生成node节点
        var bufArray = [];
        var results = {
            node: bindName,
            nodes: [],
            images: [],
            imageUrls: []
        };
        HTMLParser(html, {
            start: function start(tag, attrs, unary) {
                //debug(tag, attrs, unary);
                // node for this element
                var node = {
                    node: 'element',
                    tag: tag
                };
                if (block[tag]) {
                    node.tagType = "block";
                } else if (inline[tag]) {
                    node.tagType = "inline";
                } else if (closeSelf[tag]) {
                    node.tagType = "closeSelf";
                }
                if (attrs.length !== 0) {
                    node.attr = attrs.reduce(function (pre, attr) {
                        var name = attr.name;
                        var value = attr.value;
                        if (name == 'class') {
                            //  console.dir(value);
                            //  value = value.join("")
                            node.classStr = value;
                        }
                        // has multi attibutes
                        // make it array of attribute
                        if (name == 'style') {
                            //  console.dir(value);
                            //  value = value.join("")
                            node.styleStr = value;
                        }
                        if (value.match(/ /)) {
                            value = value.split(' ');
                        }
                        // if attr already exists
                        // merge it
                        if (pre[name]) {
                            if (Array.isArray(pre[name])) {
                                // already array, push to last
                                pre[name].push(value);
                            } else {
                                // single value, make it array
                                pre[name] = [pre[name], value];
                            }
                        } else {
                            // not exist, put it
                            pre[name] = value;
                        }
                        return pre;
                    }, {});
                }
                //对img添加额外数据
                if (node.tag === 'img') {
                    node.imgIndex = results.images.length;
                    var imgUrl = node.attr.src;
                    imgUrl = wxDiscode.urlToHttpUrl(imgUrl, __placeImgeUrlHttps);
                    node.attr.src = imgUrl;
                    node.from = bindName;
                    results.images.push(node);
                    results.imageUrls.push(imgUrl);
                }
                // 处理font标签样式属性
                if (node.tag === 'font') {
                    var fontSize = ['x-small', 'small', 'medium', 'large', 'x-large', 'xx-large', '-webkit-xxx-large'];
                    var styleAttrs = {
                        'color': 'color',
                        'face': 'font-family',
                        'size': 'font-size'
                    };
                    if (!node.attr.style) node.attr.style = [];
                    if (!node.styleStr) node.styleStr = '';
                    for (var key in styleAttrs) {
                        if (node.attr[key]) {
                            var value = key === 'size' ? fontSize[node.attr[key] - 1] : node.attr[key];
                            node.attr.style.push(styleAttrs[key]);
                            node.attr.style.push(value);
                            node.styleStr += styleAttrs[key] + ': ' + value + ';';
                        }
                    }
                }
                //临时记录source资源
                if (node.tag === 'source') {
                    results.source = node.attr.src;
                }
                if (unary) {
                    // if this tag dosen't have end tag
                    // like <img src="hoge.png"/>
                    // add to parents
                    var parent = bufArray[0] || results;
                    if (parent.nodes === undefined) {
                        parent.nodes = [];
                    }
                    parent.nodes.push(node);
                } else {
                    bufArray.unshift(node);
                }
            },
            end: function end(tag) {
                //debug(tag);
                // merge into parent tag
                var node = bufArray.shift();
                if (node.tag !== tag) console.error('invalid state: mismatch end tag');
                //当有缓存source资源时于于video补上src资源
                if (node.tag === 'video' && results.source) {
                    node.attr.src = results.source;
                    delete result.source;
                }
                if (bufArray.length === 0) {
                    results.nodes.push(node);
                } else {
                    var parent = bufArray[0];
                    if (parent.nodes === undefined) {
                        parent.nodes = [];
                    }
                    parent.nodes.push(node);
                }
            },
            chars: function chars(text) {
                //debug(text);
                var node = {
                    node: 'text',
                    text: text,
                    textArray: transEmojiStr(text)
                };
                if (bufArray.length === 0) {
                    results.nodes.push(node);
                } else {
                    var parent = bufArray[0];
                    if (parent.nodes === undefined) {
                        parent.nodes = [];
                    }
                    parent.nodes.push(node);
                }
            },
            comment: function comment(text) {
                //debug(text);
                // var node = {
                //     node: 'comment',
                //     text: text,
                // };
                // var parent = bufArray[0];
                // if (parent.nodes === undefined) {
                //     parent.nodes = [];
                // }
                // parent.nodes.push(node);
            }
        });
        return results;
    };
    function transEmojiStr(str) {
        // var eReg = new RegExp("["+__reg+' '+"]");
        //   str = str.replace(/\[([^\[\]]+)\]/g,':$1:')
        var emojiObjs = [];
        //如果正则表达式为空
        if (__emojisReg.length == 0 || !__emojis) {
            var emojiObj = {};
            emojiObj.node = "text";
            emojiObj.text = str;
            array = [emojiObj];
            return array;
        }
        //这个地方需要调整
        str = str.replace(/\[([^\[\]]+)\]/g, ':$1:');
        var eReg = new RegExp("[:]");
        var array = str.split(eReg);
        for (var i = 0; i < array.length; i++) {
            var ele = array[i];
            var emojiObj = {};
            if (__emojis[ele]) {
                emojiObj.node = "element";
                emojiObj.tag = "emoji";
                emojiObj.text = __emojis[ele];
                emojiObj.baseSrc = __emojisBaseSrc;
            } else {
                emojiObj.node = "text";
                emojiObj.text = ele;
            }
            emojiObjs.push(emojiObj);
        }
        return emojiObjs;
    }
    function emojisInit() {
        var reg = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
        var baseSrc = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "/wxParse/emojis/";
        var emojis = arguments[2];
        __emojisReg = reg;
        __emojisBaseSrc = baseSrc;
        __emojis = emojis;
    }
    module.exports = {
        html2json: html2json,
        emojisInit: emojisInit
    };
});
;define("yb_shop/utils/wxParse/htmlparser.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
// Regular Expressions for parsing tags and attributes
    var startTag = /^<([-A-Za-z0-9_]+)((?:\s+[a-zA-Z_:][-a-zA-Z0-9_:.]*(?:\s*=\s*(?:(?:"[^"]*")|(?:'[^']*')|[^>\s]+))?)*)\s*(\/?)>/,
        endTag = /^<\/([-A-Za-z0-9_]+)[^>]*>/,
        attr = /([a-zA-Z_:][-a-zA-Z0-9_:.]*)(?:\s*=\s*(?:(?:"((?:\\.|[^"])*)")|(?:'((?:\\.|[^'])*)')|([^>\s]+)))?/g;
// Empty Elements - HTML 5
    var empty = makeMap("area,base,basefont,br,col,frame,hr,img,input,link,meta,param,embed,command,keygen,source,track,wbr");
// Block Elements - HTML 5
    var block = makeMap("a,address,code,article,applet,aside,audio,blockquote,button,canvas,center,dd,del,dir,div,dl,dt,fieldset,figcaption,figure,footer,form,frameset,h1,h2,h3,h4,h5,h6,header,hgroup,hr,iframe,ins,isindex,li,map,menu,noframes,noscript,object,ol,output,p,pre,section,script,table,tbody,td,tfoot,th,thead,tr,ul,video");
// Inline Elements - HTML 5
    var inline = makeMap("abbr,acronym,applet,b,basefont,bdo,big,br,button,cite,del,dfn,em,font,i,iframe,img,input,ins,kbd,label,map,object,q,s,samp,script,select,small,span,strike,strong,sub,sup,textarea,tt,u,var");
// Elements that you can, intentionally, leave open
// (and which close themselves)
    var closeSelf = makeMap("colgroup,dd,dt,li,options,p,td,tfoot,th,thead,tr");
// Attributes that have their values filled in disabled="disabled"
    var fillAttrs = makeMap("checked,compact,declare,defer,disabled,ismap,multiple,nohref,noresize,noshade,nowrap,readonly,selected");
// Special Elements (can contain anything)
    var special = makeMap("wxxxcode-style,script,style,view,scroll-view,block");
    function HTMLParser(html, handler) {
        var index,
            chars,
            match,
            stack = [],
            last = html;
        stack.last = function () {
            return this[this.length - 1];
        };
        while (html) {
            chars = true;
            // Make sure we're not in a script or style element
            if (!stack.last() || !special[stack.last()]) {
                // Comment
                if (html.indexOf("<!--") == 0) {
                    index = html.indexOf("-->");
                    if (index >= 0) {
                        if (handler.comment) handler.comment(html.substring(4, index));
                        html = html.substring(index + 3);
                        chars = false;
                    }
                    // end tag
                } else if (html.indexOf("</") == 0) {
                    match = html.match(endTag);
                    if (match) {
                        html = html.substring(match[0].length);
                        match[0].replace(endTag, parseEndTag);
                        chars = false;
                    }
                    // start tag
                } else if (html.indexOf("<") == 0) {
                    match = html.match(startTag);
                    if (match) {
                        html = html.substring(match[0].length);
                        match[0].replace(startTag, parseStartTag);
                        chars = false;
                    }
                }
                if (chars) {
                    index = html.indexOf("<");
                    var text = '';
                    while (index === 0) {
                        text += "<";
                        html = html.substring(1);
                        index = html.indexOf("<");
                    }
                    text += index < 0 ? html : html.substring(0, index);
                    html = index < 0 ? "" : html.substring(index);
                    if (handler.chars) handler.chars(text);
                }
            } else {
                html = html.replace(new RegExp("([\\s\\S]*?)<\/" + stack.last() + "[^>]*>"), function (all, text) {
                    text = text.replace(/<!--([\s\S]*?)-->|<!\[CDATA\[([\s\S]*?)]]>/g, "$1$2");
                    if (handler.chars) handler.chars(text);
                    return "";
                });
                parseEndTag("", stack.last());
            }
            if (html == last) throw "Parse Error: " + html;
            last = html;
        }
        // Clean up any remaining tags
        parseEndTag();
        function parseStartTag(tag, tagName, rest, unary) {
            tagName = tagName.toLowerCase();
            if (block[tagName]) {
                while (stack.last() && inline[stack.last()]) {
                    parseEndTag("", stack.last());
                }
            }
            if (closeSelf[tagName] && stack.last() == tagName) {
                parseEndTag("", tagName);
            }
            unary = empty[tagName] || !!unary;
            if (!unary) stack.push(tagName);
            if (handler.start) {
                var attrs = [];
                rest.replace(attr, function (match, name) {
                    var value = arguments[2] ? arguments[2] : arguments[3] ? arguments[3] : arguments[4] ? arguments[4] : fillAttrs[name] ? name : "";
                    attrs.push({
                        name: name,
                        value: value,
                        escaped: value.replace(/(^|[^\\])"/g, '$1\\\"') //"
                    });
                });
                if (handler.start) {
                    handler.start(tagName, attrs, unary);
                }
            }
        }
        function parseEndTag(tag, tagName) {
            // If no tag name is provided, clean shop
            if (!tagName) var pos = 0;
            // Find the closest opened tag of the same type
            else {
                tagName = tagName.toLowerCase();
                for (var pos = stack.length - 1; pos >= 0; pos--) {
                    if (stack[pos] == tagName) break;
                }
            }
            if (pos >= 0) {
                // Close all the open elements, up the stack
                for (var i = stack.length - 1; i >= pos; i--) {
                    if (handler.end) handler.end(stack[i]);
                } // Remove the open elements from the stack
                stack.length = pos;
            }
        }
    };
    function makeMap(str) {
        var obj = {},
            items = str.split(",");
        for (var i = 0; i < items.length; i++) {
            obj[items[i]] = true;
        }
        return obj;
    }
    module.exports = HTMLParser;
});
;define("yb_shop/utils/wxParse/showdown.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) {
        return typeof obj;
    } : function (obj) {
        return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
    function getDefaultOpts(simple) {
        'use strict';
        var defaultOptions = {
            omitExtraWLInCodeBlocks: {
                defaultValue: false,
                describe: 'Omit the default extra whiteline added to code blocks',
                type: 'boolean'
            },
            noHeaderId: {
                defaultValue: false,
                describe: 'Turn on/off generated header id',
                type: 'boolean'
            },
            prefixHeaderId: {
                defaultValue: false,
                describe: 'Specify a prefix to generated header ids',
                type: 'string'
            },
            headerLevelStart: {
                defaultValue: false,
                describe: 'The header blocks level start',
                type: 'integer'
            },
            parseImgDimensions: {
                defaultValue: false,
                describe: 'Turn on/off image dimension parsing',
                type: 'boolean'
            },
            simplifiedAutoLink: {
                defaultValue: false,
                describe: 'Turn on/off GFM autolink style',
                type: 'boolean'
            },
            literalMidWordUnderscores: {
                defaultValue: false,
                describe: 'Parse midword underscores as literal underscores',
                type: 'boolean'
            },
            strikethrough: {
                defaultValue: false,
                describe: 'Turn on/off strikethrough support',
                type: 'boolean'
            },
            tables: {
                defaultValue: false,
                describe: 'Turn on/off tables support',
                type: 'boolean'
            },
            tablesHeaderId: {
                defaultValue: false,
                describe: 'Add an id to table headers',
                type: 'boolean'
            },
            ghCodeBlocks: {
                defaultValue: true,
                describe: 'Turn on/off GFM fenced code blocks support',
                type: 'boolean'
            },
            tasklists: {
                defaultValue: false,
                describe: 'Turn on/off GFM tasklist support',
                type: 'boolean'
            },
            smoothLivePreview: {
                defaultValue: false,
                describe: 'Prevents weird effects in live previews due to incomplete input',
                type: 'boolean'
            },
            smartIndentationFix: {
                defaultValue: false,
                description: 'Tries to smartly fix identation in es6 strings',
                type: 'boolean'
            }
        };
        if (simple === false) {
            return JSON.parse(JSON.stringify(defaultOptions));
        }
        var ret = {};
        for (var opt in defaultOptions) {
            if (defaultOptions.hasOwnProperty(opt)) {
                ret[opt] = defaultOptions[opt].defaultValue;
            }
        }
        return ret;
    }
    /**
     * Created by Tivie on 06-01-2015.
     */
// Private properties
    var showdown = {},
        parsers = {},
        extensions = {},
        globalOptions = getDefaultOpts(true),
        flavor = {
            github: {
                omitExtraWLInCodeBlocks: true,
                prefixHeaderId: 'user-content-',
                simplifiedAutoLink: true,
                literalMidWordUnderscores: true,
                strikethrough: true,
                tables: true,
                tablesHeaderId: true,
                ghCodeBlocks: true,
                tasklists: true
            },
            vanilla: getDefaultOpts(true)
        };
    /**
     * helper namespace
     * @type {{}}
     */
    showdown.helper = {};
    /**
     * TODO LEGACY SUPPORT CODE
     * @type {{}}
     */
    showdown.extensions = {};
    /**
     * Set a global option
     * @static
     * @param {string} key
     * @param {*} value
     * @returns {showdown}
     */
    showdown.setOption = function (key, value) {
        'use strict';
        globalOptions[key] = value;
        return this;
    };
    /**
     * Get a global option
     * @static
     * @param {string} key
     * @returns {*}
     */
    showdown.getOption = function (key) {
        'use strict';
        return globalOptions[key];
    };
    /**
     * Get the global options
     * @static
     * @returns {{}}
     */
    showdown.getOptions = function () {
        'use strict';
        return globalOptions;
    };
    /**
     * Reset global options to the default values
     * @static
     */
    showdown.resetOptions = function () {
        'use strict';
        globalOptions = getDefaultOpts(true);
    };
    /**
     * Set the flavor showdown should use as default
     * @param {string} name
     */
    showdown.setFlavor = function (name) {
        'use strict';
        if (flavor.hasOwnProperty(name)) {
            var preset = flavor[name];
            for (var option in preset) {
                if (preset.hasOwnProperty(option)) {
                    globalOptions[option] = preset[option];
                }
            }
        }
    };
    /**
     * Get the default options
     * @static
     * @param {boolean} [simple=true]
     * @returns {{}}
     */
    showdown.getDefaultOptions = function (simple) {
        'use strict';
        return getDefaultOpts(simple);
    };
    /**
     * Get or set a subParser
     *
     * subParser(name)       - Get a registered subParser
     * subParser(name, func) - Register a subParser
     * @static
     * @param {string} name
     * @param {function} [func]
     * @returns {*}
     */
    showdown.subParser = function (name, func) {
        'use strict';
        if (showdown.helper.isString(name)) {
            if (typeof func !== 'undefined') {
                parsers[name] = func;
            } else {
                if (parsers.hasOwnProperty(name)) {
                    return parsers[name];
                } else {
                    throw Error('SubParser named ' + name + ' not registered!');
                }
            }
        }
    };
    /**
     * Gets or registers an extension
     * @static
     * @param {string} name
     * @param {object|function=} ext
     * @returns {*}
     */
    showdown.extension = function (name, ext) {
        'use strict';
        if (!showdown.helper.isString(name)) {
            throw Error('Extension \'name\' must be a string');
        }
        name = showdown.helper.stdExtName(name);
        // Getter
        if (showdown.helper.isUndefined(ext)) {
            if (!extensions.hasOwnProperty(name)) {
                throw Error('Extension named ' + name + ' is not registered!');
            }
            return extensions[name];
            // Setter
        } else {
            // Expand extension if it's wrapped in a function
            if (typeof ext === 'function') {
                ext = ext();
            }
            // Ensure extension is an array
            if (!showdown.helper.isArray(ext)) {
                ext = [ext];
            }
            var validExtension = validate(ext, name);
            if (validExtension.valid) {
                extensions[name] = ext;
            } else {
                throw Error(validExtension.error);
            }
        }
    };
    /**
     * Gets all extensions registered
     * @returns {{}}
     */
    showdown.getAllExtensions = function () {
        'use strict';
        return extensions;
    };
    /**
     * Remove an extension
     * @param {string} name
     */
    showdown.removeExtension = function (name) {
        'use strict';
        delete extensions[name];
    };
    /**
     * Removes all extensions
     */
    showdown.resetExtensions = function () {
        'use strict';
        extensions = {};
    };
    /**
     * Validate extension
     * @param {array} extension
     * @param {string} name
     * @returns {{valid: boolean, error: string}}
     */
    function validate(extension, name) {
        'use strict';
        var errMsg = name ? 'Error in ' + name + ' extension->' : 'Error in unnamed extension',
            ret = {
                valid: true,
                error: ''
            };
        if (!showdown.helper.isArray(extension)) {
            extension = [extension];
        }
        for (var i = 0; i < extension.length; ++i) {
            var baseMsg = errMsg + ' sub-extension ' + i + ': ',
                ext = extension[i];
            if ((typeof ext === 'undefined' ? 'undefined' : _typeof(ext)) !== 'object') {
                ret.valid = false;
                ret.error = baseMsg + 'must be an object, but ' + (typeof ext === 'undefined' ? 'undefined' : _typeof(ext)) + ' given';
                return ret;
            }
            if (!showdown.helper.isString(ext.type)) {
                ret.valid = false;
                ret.error = baseMsg + 'property "type" must be a string, but ' + _typeof(ext.type) + ' given';
                return ret;
            }
            var type = ext.type = ext.type.toLowerCase();
            // normalize extension type
            if (type === 'language') {
                type = ext.type = 'lang';
            }
            if (type === 'html') {
                type = ext.type = 'output';
            }
            if (type !== 'lang' && type !== 'output' && type !== 'listener') {
                ret.valid = false;
                ret.error = baseMsg + 'type ' + type + ' is not recognized. Valid values: "lang/language", "output/html" or "listener"';
                return ret;
            }
            if (type === 'listener') {
                if (showdown.helper.isUndefined(ext.listeners)) {
                    ret.valid = false;
                    ret.error = baseMsg + '. Extensions of type "listener" must have a property called "listeners"';
                    return ret;
                }
            } else {
                if (showdown.helper.isUndefined(ext.filter) && showdown.helper.isUndefined(ext.regex)) {
                    ret.valid = false;
                    ret.error = baseMsg + type + ' extensions must define either a "regex" property or a "filter" method';
                    return ret;
                }
            }
            if (ext.listeners) {
                if (_typeof(ext.listeners) !== 'object') {
                    ret.valid = false;
                    ret.error = baseMsg + '"listeners" property must be an object but ' + _typeof(ext.listeners) + ' given';
                    return ret;
                }
                for (var ln in ext.listeners) {
                    if (ext.listeners.hasOwnProperty(ln)) {
                        if (typeof ext.listeners[ln] !== 'function') {
                            ret.valid = false;
                            ret.error = baseMsg + '"listeners" property must be an hash of [event name]: [callback]. listeners.' + ln + ' must be a function but ' + _typeof(ext.listeners[ln]) + ' given';
                            return ret;
                        }
                    }
                }
            }
            if (ext.filter) {
                if (typeof ext.filter !== 'function') {
                    ret.valid = false;
                    ret.error = baseMsg + '"filter" must be a function, but ' + _typeof(ext.filter) + ' given';
                    return ret;
                }
            } else if (ext.regex) {
                if (showdown.helper.isString(ext.regex)) {
                    ext.regex = new RegExp(ext.regex, 'g');
                }
                if (!ext.regex instanceof RegExp) {
                    ret.valid = false;
                    ret.error = baseMsg + '"regex" property must either be a string or a RegExp object, but ' + _typeof(ext.regex) + ' given';
                    return ret;
                }
                if (showdown.helper.isUndefined(ext.replace)) {
                    ret.valid = false;
                    ret.error = baseMsg + '"regex" extensions must implement a replace string or function';
                    return ret;
                }
            }
        }
        return ret;
    }
    /**
     * Validate extension
     * @param {object} ext
     * @returns {boolean}
     */
    showdown.validateExtension = function (ext) {
        'use strict';
        var validateExtension = validate(ext, null);
        if (!validateExtension.valid) {
            console.warn(validateExtension.error);
            return false;
        }
        return true;
    };
    /**
     * showdownjs helper functions
     */
    if (!showdown.hasOwnProperty('helper')) {
        showdown.helper = {};
    }
    /**
     * Check if var is string
     * @static
     * @param {string} a
     * @returns {boolean}
     */
    showdown.helper.isString = function isString(a) {
        'use strict';
        return typeof a === 'string' || a instanceof String;
    };
    /**
     * Check if var is a function
     * @static
     * @param {string} a
     * @returns {boolean}
     */
    showdown.helper.isFunction = function isFunction(a) {
        'use strict';
        var getType = {};
        return a && getType.toString.call(a) === '[object Function]';
    };
    /**
     * ForEach helper function
     * @static
     * @param {*} obj
     * @param {function} callback
     */
    showdown.helper.forEach = function forEach(obj, callback) {
        'use strict';
        if (typeof obj.forEach === 'function') {
            obj.forEach(callback);
        } else {
            for (var i = 0; i < obj.length; i++) {
                callback(obj[i], i, obj);
            }
        }
    };
    /**
     * isArray helper function
     * @static
     * @param {*} a
     * @returns {boolean}
     */
    showdown.helper.isArray = function isArray(a) {
        'use strict';
        return a.constructor === Array;
    };
    /**
     * Check if value is undefined
     * @static
     * @param {*} value The value to check.
     * @returns {boolean} Returns `true` if `value` is `undefined`, else `false`.
     */
    showdown.helper.isUndefined = function isUndefined(value) {
        'use strict';
        return typeof value === 'undefined';
    };
    /**
     * Standardidize extension name
     * @static
     * @param {string} s extension name
     * @returns {string}
     */
    showdown.helper.stdExtName = function (s) {
        'use strict';
        return s.replace(/[_-]||\s/g, '').toLowerCase();
    };
    function escapeCharactersCallback(wholeMatch, m1) {
        'use strict';
        var charCodeToEscape = m1.charCodeAt(0);
        return '~E' + charCodeToEscape + 'E';
    }
    /**
     * Callback used to escape characters when passing through String.replace
     * @static
     * @param {string} wholeMatch
     * @param {string} m1
     * @returns {string}
     */
    showdown.helper.escapeCharactersCallback = escapeCharactersCallback;
    /**
     * Escape characters in a string
     * @static
     * @param {string} text
     * @param {string} charsToEscape
     * @param {boolean} afterBackslash
     * @returns {XML|string|void|*}
     */
    showdown.helper.escapeCharacters = function escapeCharacters(text, charsToEscape, afterBackslash) {
        'use strict';
        // First we have to escape the escape characters so that
        // we can build a character class out of them
        var regexString = '([' + charsToEscape.replace(/([\[\]\\])/g, '\\$1') + '])';
        if (afterBackslash) {
            regexString = '\\\\' + regexString;
        }
        var regex = new RegExp(regexString, 'g');
        text = text.replace(regex, escapeCharactersCallback);
        return text;
    };
    var rgxFindMatchPos = function rgxFindMatchPos(str, left, right, flags) {
        'use strict';
        var f = flags || '',
            g = f.indexOf('g') > -1,
            x = new RegExp(left + '|' + right, 'g' + f.replace(/g/g, '')),
            l = new RegExp(left, f.replace(/g/g, '')),
            pos = [],
            t,
            s,
            m,
            start,
            end;
        do {
            t = 0;
            while (m = x.exec(str)) {
                if (l.test(m[0])) {
                    if (!t++) {
                        s = x.lastIndex;
                        start = s - m[0].length;
                    }
                } else if (t) {
                    if (!--t) {
                        end = m.index + m[0].length;
                        var obj = {
                            left: {start: start, end: s},
                            match: {start: s, end: m.index},
                            right: {start: m.index, end: end},
                            wholeMatch: {start: start, end: end}
                        };
                        pos.push(obj);
                        if (!g) {
                            return pos;
                        }
                    }
                }
            }
        } while (t && (x.lastIndex = s));
        return pos;
    };
    /**
     * matchRecursiveRegExp
     *
     * (c) 2007 Steven Levithan <stevenlevithan.com>
     * MIT License
     *
     * Accepts a string to search, a left and right format delimiter
     * as regex patterns, and optional regex flags. Returns an array
     * of matches, allowing nested instances of left/right delimiters.
     * Use the "g" flag to return all matches, otherwise only the
     * first is returned. Be careful to ensure that the left and
     * right format delimiters produce mutually exclusive matches.
     * Backreferences are not supported within the right delimiter
     * due to how it is internally combined with the left delimiter.
     * When matching strings whose format delimiters are unbalanced
     * to the left or right, the output is intentionally as a
     * conventional regex library with recursion support would
     * produce, e.g. "<<x>" and "<x>>" both produce ["x"] when using
     * "<" and ">" as the delimiters (both strings contain a single,
     * balanced instance of "<x>").
     *
     * examples:
     * matchRecursiveRegExp("test", "\\(", "\\)")
     * returns: []
     * matchRecursiveRegExp("<t<<e>><s>>t<>", "<", ">", "g")
     * returns: ["t<<e>><s>", ""]
     * matchRecursiveRegExp("<div id=\"x\">test</div>", "<div\\b[^>]*>", "</div>", "gi")
     * returns: ["test"]
     */
    showdown.helper.matchRecursiveRegExp = function (str, left, right, flags) {
        'use strict';
        var matchPos = rgxFindMatchPos(str, left, right, flags),
            results = [];
        for (var i = 0; i < matchPos.length; ++i) {
            results.push([str.slice(matchPos[i].wholeMatch.start, matchPos[i].wholeMatch.end), str.slice(matchPos[i].match.start, matchPos[i].match.end), str.slice(matchPos[i].left.start, matchPos[i].left.end), str.slice(matchPos[i].right.start, matchPos[i].right.end)]);
        }
        return results;
    };
    /**
     *
     * @param {string} str
     * @param {string|function} replacement
     * @param {string} left
     * @param {string} right
     * @param {string} flags
     * @returns {string}
     */
    showdown.helper.replaceRecursiveRegExp = function (str, replacement, left, right, flags) {
        'use strict';
        if (!showdown.helper.isFunction(replacement)) {
            var repStr = replacement;
            replacement = function replacement() {
                return repStr;
            };
        }
        var matchPos = rgxFindMatchPos(str, left, right, flags),
            finalStr = str,
            lng = matchPos.length;
        if (lng > 0) {
            var bits = [];
            if (matchPos[0].wholeMatch.start !== 0) {
                bits.push(str.slice(0, matchPos[0].wholeMatch.start));
            }
            for (var i = 0; i < lng; ++i) {
                bits.push(replacement(str.slice(matchPos[i].wholeMatch.start, matchPos[i].wholeMatch.end), str.slice(matchPos[i].match.start, matchPos[i].match.end), str.slice(matchPos[i].left.start, matchPos[i].left.end), str.slice(matchPos[i].right.start, matchPos[i].right.end)));
                if (i < lng - 1) {
                    bits.push(str.slice(matchPos[i].wholeMatch.end, matchPos[i + 1].wholeMatch.start));
                }
            }
            if (matchPos[lng - 1].wholeMatch.end < str.length) {
                bits.push(str.slice(matchPos[lng - 1].wholeMatch.end));
            }
            finalStr = bits.join('');
        }
        return finalStr;
    };
    /**
     * POLYFILLS
     */
    if (showdown.helper.isUndefined(console)) {
        console = {
            warn: function warn(msg) {
                'use strict';
                alert(msg);
            },
            log: function log(msg) {
                'use strict';
                alert(msg);
            },
            error: function error(msg) {
                'use strict';
                throw msg;
            }
        };
    }
    /**
     * Created by Estevao on 31-05-2015.
     */
    /**
     * Showdown Converter class
     * @class
     * @param {object} [converterOptions]
     * @returns {Converter}
     */
    showdown.Converter = function (converterOptions) {
        'use strict';
        var
            /**
             * Options used by this converter
             * @private
             * @type {{}}
             */
            options = {},
            /**
             * Language extensions used by this converter
             * @private
             * @type {Array}
             */
            langExtensions = [],
            /**
             * Output modifiers extensions used by this converter
             * @private
             * @type {Array}
             */
            outputModifiers = [],
            /**
             * Event listeners
             * @private
             * @type {{}}
             */
            listeners = {};
        _constructor();
        /**
         * Converter constructor
         * @private
         */
        function _constructor() {
            converterOptions = converterOptions || {};
            for (var gOpt in globalOptions) {
                if (globalOptions.hasOwnProperty(gOpt)) {
                    options[gOpt] = globalOptions[gOpt];
                }
            }
            // Merge options
            if ((typeof converterOptions === 'undefined' ? 'undefined' : _typeof(converterOptions)) === 'object') {
                for (var opt in converterOptions) {
                    if (converterOptions.hasOwnProperty(opt)) {
                        options[opt] = converterOptions[opt];
                    }
                }
            } else {
                throw Error('Converter expects the passed parameter to be an object, but ' + (typeof converterOptions === 'undefined' ? 'undefined' : _typeof(converterOptions)) + ' was passed instead.');
            }
            if (options.extensions) {
                showdown.helper.forEach(options.extensions, _parseExtension);
            }
        }
        /**
         * Parse extension
         * @param {*} ext
         * @param {string} [name='']
         * @private
         */
        function _parseExtension(ext, name) {
            name = name || null;
            // If it's a string, the extension was previously loaded
            if (showdown.helper.isString(ext)) {
                ext = showdown.helper.stdExtName(ext);
                name = ext;
                // LEGACY_SUPPORT CODE
                if (showdown.extensions[ext]) {
                    console.warn('DEPRECATION WARNING: ' + ext + ' is an old extension that uses a deprecated loading method.' + 'Please inform the developer that the extension should be updated!');
                    legacyExtensionLoading(showdown.extensions[ext], ext);
                    return;
                    // END LEGACY SUPPORT CODE
                } else if (!showdown.helper.isUndefined(extensions[ext])) {
                    ext = extensions[ext];
                } else {
                    throw Error('Extension "' + ext + '" could not be loaded. It was either not found or is not a valid extension.');
                }
            }
            if (typeof ext === 'function') {
                ext = ext();
            }
            if (!showdown.helper.isArray(ext)) {
                ext = [ext];
            }
            var validExt = validate(ext, name);
            if (!validExt.valid) {
                throw Error(validExt.error);
            }
            for (var i = 0; i < ext.length; ++i) {
                switch (ext[i].type) {
                    case 'lang':
                        langExtensions.push(ext[i]);
                        break;
                    case 'output':
                        outputModifiers.push(ext[i]);
                        break;
                }
                if (ext[i].hasOwnProperty(listeners)) {
                    for (var ln in ext[i].listeners) {
                        if (ext[i].listeners.hasOwnProperty(ln)) {
                            listen(ln, ext[i].listeners[ln]);
                        }
                    }
                }
            }
        }
        /**
         * LEGACY_SUPPORT
         * @param {*} ext
         * @param {string} name
         */
        function legacyExtensionLoading(ext, name) {
            if (typeof ext === 'function') {
                ext = ext(new showdown.Converter());
            }
            if (!showdown.helper.isArray(ext)) {
                ext = [ext];
            }
            var valid = validate(ext, name);
            if (!valid.valid) {
                throw Error(valid.error);
            }
            for (var i = 0; i < ext.length; ++i) {
                switch (ext[i].type) {
                    case 'lang':
                        langExtensions.push(ext[i]);
                        break;
                    case 'output':
                        outputModifiers.push(ext[i]);
                        break;
                    default:
                        // should never reach here
                        throw Error('Extension loader error: Type unrecognized!!!');
                }
            }
        }
        /**
         * Listen to an event
         * @param {string} name
         * @param {function} callback
         */
        function listen(name, callback) {
            if (!showdown.helper.isString(name)) {
                throw Error('Invalid argument in converter.listen() method: name must be a string, but ' + (typeof name === 'undefined' ? 'undefined' : _typeof(name)) + ' given');
            }
            if (typeof callback !== 'function') {
                throw Error('Invalid argument in converter.listen() method: callback must be a function, but ' + (typeof callback === 'undefined' ? 'undefined' : _typeof(callback)) + ' given');
            }
            if (!listeners.hasOwnProperty(name)) {
                listeners[name] = [];
            }
            listeners[name].push(callback);
        }
        function rTrimInputText(text) {
            var rsp = text.match(/^\s*/)[0].length,
                rgx = new RegExp('^\\s{0,' + rsp + '}', 'gm');
            return text.replace(rgx, '');
        }
        /**
         * Dispatch an event
         * @private
         * @param {string} evtName Event name
         * @param {string} text Text
         * @param {{}} options Converter Options
         * @param {{}} globals
         * @returns {string}
         */
        this._dispatch = function dispatch(evtName, text, options, globals) {
            if (listeners.hasOwnProperty(evtName)) {
                for (var ei = 0; ei < listeners[evtName].length; ++ei) {
                    var nText = listeners[evtName][ei](evtName, text, this, options, globals);
                    if (nText && typeof nText !== 'undefined') {
                        text = nText;
                    }
                }
            }
            return text;
        };
        /**
         * Listen to an event
         * @param {string} name
         * @param {function} callback
         * @returns {showdown.Converter}
         */
        this.listen = function (name, callback) {
            listen(name, callback);
            return this;
        };
        /**
         * Converts a markdown string into HTML
         * @param {string} text
         * @returns {*}
         */
        this.makeHtml = function (text) {
            //check if text is not falsy
            if (!text) {
                return text;
            }
            var globals = {
                gHtmlBlocks: [],
                gHtmlMdBlocks: [],
                gHtmlSpans: [],
                gUrls: {},
                gTitles: {},
                gDimensions: {},
                gListLevel: 0,
                hashLinkCounts: {},
                langExtensions: langExtensions,
                outputModifiers: outputModifiers,
                converter: this,
                ghCodeBlocks: []
            };
            // attacklab: Replace ~ with ~T
            // This lets us use tilde as an escape char to avoid md5 hashes
            // The choice of character is arbitrary; anything that isn't
            // magic in Markdown will work.
            text = text.replace(/~/g, '~T');
            // attacklab: Replace $ with ~D
            // RegExp interprets $ as a special character
            // when it's in a replacement string
            text = text.replace(/\$/g, '~D');
            // Standardize line endings
            text = text.replace(/\r\n/g, '\n'); // DOS to Unix
            text = text.replace(/\r/g, '\n'); // Mac to Unix
            if (options.smartIndentationFix) {
                text = rTrimInputText(text);
            }
            // Make sure text begins and ends with a couple of newlines:
            //text = '\n\n' + text + '\n\n';
            text = text;
            // detab
            text = showdown.subParser('detab')(text, options, globals);
            // stripBlankLines
            text = showdown.subParser('stripBlankLines')(text, options, globals);
            //run languageExtensions
            showdown.helper.forEach(langExtensions, function (ext) {
                text = showdown.subParser('runExtension')(ext, text, options, globals);
            });
            // run the sub parsers
            text = showdown.subParser('hashPreCodeTags')(text, options, globals);
            text = showdown.subParser('githubCodeBlocks')(text, options, globals);
            text = showdown.subParser('hashHTMLBlocks')(text, options, globals);
            text = showdown.subParser('hashHTMLSpans')(text, options, globals);
            text = showdown.subParser('stripLinkDefinitions')(text, options, globals);
            text = showdown.subParser('blockGamut')(text, options, globals);
            text = showdown.subParser('unhashHTMLSpans')(text, options, globals);
            text = showdown.subParser('unescapeSpecialChars')(text, options, globals);
            // attacklab: Restore dollar signs
            text = text.replace(/~D/g, '$$');
            // attacklab: Restore tildes
            text = text.replace(/~T/g, '~');
            // Run output modifiers
            showdown.helper.forEach(outputModifiers, function (ext) {
                text = showdown.subParser('runExtension')(ext, text, options, globals);
            });
            return text;
        };
        /**
         * Set an option of this Converter instance
         * @param {string} key
         * @param {*} value
         */
        this.setOption = function (key, value) {
            options[key] = value;
        };
        /**
         * Get the option of this Converter instance
         * @param {string} key
         * @returns {*}
         */
        this.getOption = function (key) {
            return options[key];
        };
        /**
         * Get the options of this Converter instance
         * @returns {{}}
         */
        this.getOptions = function () {
            return options;
        };
        /**
         * Add extension to THIS converter
         * @param {{}} extension
         * @param {string} [name=null]
         */
        this.addExtension = function (extension, name) {
            name = name || null;
            _parseExtension(extension, name);
        };
        /**
         * Use a global registered extension with THIS converter
         * @param {string} extensionName Name of the previously registered extension
         */
        this.useExtension = function (extensionName) {
            _parseExtension(extensionName);
        };
        /**
         * Set the flavor THIS converter should use
         * @param {string} name
         */
        this.setFlavor = function (name) {
            if (flavor.hasOwnProperty(name)) {
                var preset = flavor[name];
                for (var option in preset) {
                    if (preset.hasOwnProperty(option)) {
                        options[option] = preset[option];
                    }
                }
            }
        };
        /**
         * Remove an extension from THIS converter.
         * Note: This is a costly operation. It's better to initialize a new converter
         * and specify the extensions you wish to use
         * @param {Array} extension
         */
        this.removeExtension = function (extension) {
            if (!showdown.helper.isArray(extension)) {
                extension = [extension];
            }
            for (var a = 0; a < extension.length; ++a) {
                var ext = extension[a];
                for (var i = 0; i < langExtensions.length; ++i) {
                    if (langExtensions[i] === ext) {
                        langExtensions[i].splice(i, 1);
                    }
                }
                for (var ii = 0; ii < outputModifiers.length; ++i) {
                    if (outputModifiers[ii] === ext) {
                        outputModifiers[ii].splice(i, 1);
                    }
                }
            }
        };
        /**
         * Get all extension of THIS converter
         * @returns {{language: Array, output: Array}}
         */
        this.getAllExtensions = function () {
            return {
                language: langExtensions,
                output: outputModifiers
            };
        };
    };
    /**
     * Turn Markdown link shortcuts into XHTML <a> tags.
     */
    showdown.subParser('anchors', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('anchors.before', text, options, globals);
        var writeAnchorTag = function writeAnchorTag(wholeMatch, m1, m2, m3, m4, m5, m6, m7) {
            if (showdown.helper.isUndefined(m7)) {
                m7 = '';
            }
            wholeMatch = m1;
            var linkText = m2,
                linkId = m3.toLowerCase(),
                url = m4,
                title = m7;
            if (!url) {
                if (!linkId) {
                    // lower-case and turn embedded newlines into spaces
                    linkId = linkText.toLowerCase().replace(/ ?\n/g, ' ');
                }
                url = '#' + linkId;
                if (!showdown.helper.isUndefined(globals.gUrls[linkId])) {
                    url = globals.gUrls[linkId];
                    if (!showdown.helper.isUndefined(globals.gTitles[linkId])) {
                        title = globals.gTitles[linkId];
                    }
                } else {
                    if (wholeMatch.search(/\(\s*\)$/m) > -1) {
                        // Special case for explicit empty url
                        url = '';
                    } else {
                        return wholeMatch;
                    }
                }
            }
            url = showdown.helper.escapeCharacters(url, '*_', false);
            var result = '<a href="' + url + '"';
            if (title !== '' && title !== null) {
                title = title.replace(/"/g, '&quot;');
                title = showdown.helper.escapeCharacters(title, '*_', false);
                result += ' title="' + title + '"';
            }
            result += '>' + linkText + '</a>';
            return result;
        };
        // First, handle reference-style links: [link text] [id]
        /*
         text = text.replace(/
         (							// wrap whole match in $1
         \[
         (
         (?:
         \[[^\]]*\]		// allow brackets nested one level
         |
         [^\[]			// or anything else
         )*
         )
         \]
         [ ]?					// one optional space
         (?:\n[ ]*)?				// one optional newline followed by spaces
         \[
         (.*?)					// id = $3
         \]
         )()()()()					// pad remaining backreferences
         /g,_DoAnchors_callback);
         */
        text = text.replace(/(\[((?:\[[^\]]*]|[^\[\]])*)][ ]?(?:\n[ ]*)?\[(.*?)])()()()()/g, writeAnchorTag);
        //
        // Next, inline-style links: [link text](url "optional title")
        //
        /*
         text = text.replace(/
         (						// wrap whole match in $1
         \[
         (
         (?:
         \[[^\]]*\]	// allow brackets nested one level
         |
         [^\[\]]			// or anything else
         )
         )
         \]
         \(						// literal paren
         [ \t]*
         ()						// no id, so leave $3 empty
         <?(.*?)>?				// href = $4
         [ \t]*
         (						// $5
         (['"])				// quote char = $6
         (.*?)				// Title = $7
         \6					// matching quote
         [ \t]*				// ignore any spaces/tabs between closing quote and )
         )?						// title is optional
         \)
         )
         /g,writeAnchorTag);
         */
        text = text.replace(/(\[((?:\[[^\]]*]|[^\[\]])*)]\([ \t]*()<?(.*?(?:\(.*?\).*?)?)>?[ \t]*((['"])(.*?)\6[ \t]*)?\))/g, writeAnchorTag);
        //
        // Last, handle reference-style shortcuts: [link text]
        // These must come last in case you've also got [link test][1]
        // or [link test](/foo)
        //
        /*
         text = text.replace(/
         (                // wrap whole match in $1
         \[
         ([^\[\]]+)       // link text = $2; can't contain '[' or ']'
         \]
         )()()()()()      // pad rest of backreferences
         /g, writeAnchorTag);
         */
        text = text.replace(/(\[([^\[\]]+)])()()()()()/g, writeAnchorTag);
        text = globals.converter._dispatch('anchors.after', text, options, globals);
        return text;
    });
    showdown.subParser('autoLinks', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('autoLinks.before', text, options, globals);
        var simpleURLRegex = /\b(((https?|ftp|dict):\/\/|www\.)[^'">\s]+\.[^'">\s]+)(?=\s|$)(?!["<>])/gi,
            delimUrlRegex = /<(((https?|ftp|dict):\/\/|www\.)[^'">\s]+)>/gi,
            simpleMailRegex = /(?:^|[ \n\t])([A-Za-z0-9!#$%&'*+-/=?^_`\{|}~\.]+@[-a-z0-9]+(\.[-a-z0-9]+)*\.[a-z]+)(?:$|[ \n\t])/gi,
            delimMailRegex = /<(?:mailto:)?([-.\w]+@[-a-z0-9]+(\.[-a-z0-9]+)*\.[a-z]+)>/gi;
        text = text.replace(delimUrlRegex, replaceLink);
        text = text.replace(delimMailRegex, replaceMail);
        // simpleURLRegex  = /\b(((https?|ftp|dict):\/\/|www\.)[-.+~:?#@!$&'()*,;=[\]\w]+)\b/gi,
        // Email addresses: <address@domain.foo>
        if (options.simplifiedAutoLink) {
            text = text.replace(simpleURLRegex, replaceLink);
            text = text.replace(simpleMailRegex, replaceMail);
        }
        function replaceLink(wm, link) {
            var lnkTxt = link;
            if (/^www\./i.test(link)) {
                link = link.replace(/^www\./i, 'http://www.');
            }
            return '<a href="' + link + '">' + lnkTxt + '</a>';
        }
        function replaceMail(wholeMatch, m1) {
            var unescapedStr = showdown.subParser('unescapeSpecialChars')(m1);
            return showdown.subParser('encodeEmailAddress')(unescapedStr);
        }
        text = globals.converter._dispatch('autoLinks.after', text, options, globals);
        return text;
    });
    /**
     * These are all the transformations that form block-level
     * tags like paragraphs, headers, and list items.
     */
    showdown.subParser('blockGamut', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('blockGamut.before', text, options, globals);
        // we parse blockquotes first so that we can have headings and hrs
        // inside blockquotes
        text = showdown.subParser('blockQuotes')(text, options, globals);
        text = showdown.subParser('headers')(text, options, globals);
        // Do Horizontal Rules:
        var key = showdown.subParser('hashBlock')('<hr />', options, globals);
        text = text.replace(/^[ ]{0,2}([ ]?\*[ ]?){3,}[ \t]*$/gm, key);
        text = text.replace(/^[ ]{0,2}([ ]?\-[ ]?){3,}[ \t]*$/gm, key);
        text = text.replace(/^[ ]{0,2}([ ]?_[ ]?){3,}[ \t]*$/gm, key);
        text = showdown.subParser('lists')(text, options, globals);
        text = showdown.subParser('codeBlocks')(text, options, globals);
        text = showdown.subParser('tables')(text, options, globals);
        // We already ran _HashHTMLBlocks() before, in Markdown(), but that
        // was to escape raw HTML in the original Markdown source. This time,
        // we're escaping the markup we've just created, so that we don't wrap
        // <p> tags around block-level tags.
        text = showdown.subParser('hashHTMLBlocks')(text, options, globals);
        text = showdown.subParser('paragraphs')(text, options, globals);
        text = globals.converter._dispatch('blockGamut.after', text, options, globals);
        return text;
    });
    showdown.subParser('blockQuotes', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('blockQuotes.before', text, options, globals);
        /*
         text = text.replace(/
         (								// Wrap whole match in $1
         (
         ^[ \t]*>[ \t]?			// '>' at the start of a line
         .+\n					// rest of the first line
         (.+\n)*					// subsequent consecutive lines
         \n*						// blanks
         )+
         )
         /gm, function(){...});
         */
        text = text.replace(/((^[ \t]{0,3}>[ \t]?.+\n(.+\n)*\n*)+)/gm, function (wholeMatch, m1) {
            var bq = m1;
            // attacklab: hack around Konqueror 3.5.4 bug:
            // "----------bug".replace(/^-/g,"") == "bug"
            bq = bq.replace(/^[ \t]*>[ \t]?/gm, '~0'); // trim one level of quoting
            // attacklab: clean up hack
            bq = bq.replace(/~0/g, '');
            bq = bq.replace(/^[ \t]+$/gm, ''); // trim whitespace-only lines
            bq = showdown.subParser('githubCodeBlocks')(bq, options, globals);
            bq = showdown.subParser('blockGamut')(bq, options, globals); // recurse
            bq = bq.replace(/(^|\n)/g, '$1  ');
            // These leading spaces screw with <pre> content, so we need to fix that:
            bq = bq.replace(/(\s*<pre>[^\r]+?<\/pre>)/gm, function (wholeMatch, m1) {
                var pre = m1;
                // attacklab: hack around Konqueror 3.5.4 bug:
                pre = pre.replace(/^  /mg, '~0');
                pre = pre.replace(/~0/g, '');
                return pre;
            });
            return showdown.subParser('hashBlock')('<blockquote>\n' + bq + '\n</blockquote>', options, globals);
        });
        text = globals.converter._dispatch('blockQuotes.after', text, options, globals);
        return text;
    });
    /**
     * Process Markdown `<pre><code>` blocks.
     */
    showdown.subParser('codeBlocks', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('codeBlocks.before', text, options, globals);
        /*
         text = text.replace(text,
         /(?:\n\n|^)
         (								// $1 = the code block -- one or more lines, starting with a space/tab
         (?:
         (?:[ ]{4}|\t)			// Lines must start with a tab or a tab-width of spaces - attacklab: g_tab_width
         .*\n+
         )+
         )
         (\n*[ ]{0,3}[^ \t\n]|(?=~0))	// attacklab: g_tab_width
         /g,function(){...});
         */
        // attacklab: sentinel workarounds for lack of \A and \Z, safari\khtml bug
        text += '~0';
        var pattern = /(?:\n\n|^)((?:(?:[ ]{4}|\t).*\n+)+)(\n*[ ]{0,3}[^ \t\n]|(?=~0))/g;
        text = text.replace(pattern, function (wholeMatch, m1, m2) {
            var codeblock = m1,
                nextChar = m2,
                end = '\n';
            codeblock = showdown.subParser('outdent')(codeblock);
            codeblock = showdown.subParser('encodeCode')(codeblock);
            codeblock = showdown.subParser('detab')(codeblock);
            codeblock = codeblock.replace(/^\n+/g, ''); // trim leading newlines
            codeblock = codeblock.replace(/\n+$/g, ''); // trim trailing newlines
            if (options.omitExtraWLInCodeBlocks) {
                end = '';
            }
            codeblock = '<pre><code>' + codeblock + end + '</code></pre>';
            return showdown.subParser('hashBlock')(codeblock, options, globals) + nextChar;
        });
        // attacklab: strip sentinel
        text = text.replace(/~0/, '');
        text = globals.converter._dispatch('codeBlocks.after', text, options, globals);
        return text;
    });
    /**
     *
     *   *  Backtick quotes are used for <code></code> spans.
     *
     *   *  You can use multiple backticks as the delimiters if you want to
     *     include literal backticks in the code span. So, this input:
     *
     *         Just type ``foo `bar` baz`` at the prompt.
     *
     *       Will translate to:
     *
     *         <p>Just type <code>foo `bar` baz</code> at the prompt.</p>
     *
     *    There's no arbitrary limit to the number of backticks you
     *    can use as delimters. If you need three consecutive backticks
     *    in your code, use four for delimiters, etc.
     *
     *  *  You can use spaces to get literal backticks at the edges:
     *
     *         ... type `` `bar` `` ...
     *
     *       Turns to:
     *
     *         ... type <code>`bar`</code> ...
     */
    showdown.subParser('codeSpans', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('codeSpans.before', text, options, globals);
        /*
         text = text.replace(/
         (^|[^\\])					// Character before opening ` can't be a backslash
         (`+)						// $2 = Opening run of `
         (							// $3 = The code block
         [^\r]*?
         [^`]					// attacklab: work around lack of lookbehind
         )
         \2							// Matching closer
         (?!`)
         /gm, function(){...});
         */
        if (typeof text === 'undefined') {
            text = '';
        }
        text = text.replace(/(^|[^\\])(`+)([^\r]*?[^`])\2(?!`)/gm, function (wholeMatch, m1, m2, m3) {
            var c = m3;
            c = c.replace(/^([ \t]*)/g, ''); // leading whitespace
            c = c.replace(/[ \t]*$/g, ''); // trailing whitespace
            c = showdown.subParser('encodeCode')(c);
            return m1 + '<code>' + c + '</code>';
        });
        text = globals.converter._dispatch('codeSpans.after', text, options, globals);
        return text;
    });
    /**
     * Convert all tabs to spaces
     */
    showdown.subParser('detab', function (text) {
        'use strict';
        // expand first n-1 tabs
        text = text.replace(/\t(?=\t)/g, '    '); // g_tab_width
        // replace the nth with two sentinels
        text = text.replace(/\t/g, '~A~B');
        // use the sentinel to anchor our regex so it doesn't explode
        text = text.replace(/~B(.+?)~A/g, function (wholeMatch, m1) {
            var leadingText = m1,
                numSpaces = 4 - leadingText.length % 4; // g_tab_width
            // there *must* be a better way to do this:
            for (var i = 0; i < numSpaces; i++) {
                leadingText += ' ';
            }
            return leadingText;
        });
        // clean up sentinels
        text = text.replace(/~A/g, '    '); // g_tab_width
        text = text.replace(/~B/g, '');
        return text;
    });
    /**
     * Smart processing for ampersands and angle brackets that need to be encoded.
     */
    showdown.subParser('encodeAmpsAndAngles', function (text) {
        'use strict';
        // Ampersand-encoding based entirely on Nat Irons's Amputator MT plugin:
        // http://bumppo.net/projects/amputator/
        text = text.replace(/&(?!#?[xX]?(?:[0-9a-fA-F]+|\w+);)/g, '&amp;');
        // Encode naked <'s
        text = text.replace(/<(?![a-z\/?\$!])/gi, '&lt;');
        return text;
    });
    /**
     * Returns the string, with after processing the following backslash escape sequences.
     *
     * attacklab: The polite way to do this is with the new escapeCharacters() function:
     *
     *    text = escapeCharacters(text,"\\",true);
     *    text = escapeCharacters(text,"`*_{}[]()>#+-.!",true);
     *
     * ...but we're sidestepping its use of the (slow) RegExp constructor
     * as an optimization for Firefox.  This function gets called a LOT.
     */
    showdown.subParser('encodeBackslashEscapes', function (text) {
        'use strict';
        text = text.replace(/\\(\\)/g, showdown.helper.escapeCharactersCallback);
        text = text.replace(/\\([`*_{}\[\]()>#+-.!])/g, showdown.helper.escapeCharactersCallback);
        return text;
    });
    /**
     * Encode/escape certain characters inside Markdown code runs.
     * The point is that in code, these characters are literals,
     * and lose their special Markdown meanings.
     */
    showdown.subParser('encodeCode', function (text) {
        'use strict';
        // Encode all ampersands; HTML entities are not
        // entities within a Markdown code span.
        text = text.replace(/&/g, '&amp;');
        // Do the angle bracket song and dance:
        text = text.replace(/</g, '&lt;');
        text = text.replace(/>/g, '&gt;');
        // Now, escape characters that are magic in Markdown:
        text = showdown.helper.escapeCharacters(text, '*_{}[]\\', false);
        // jj the line above breaks this:
        //---
        //* Item
        //   1. Subitem
        //            special char: *
        // ---
        return text;
    });
    /**
     *  Input: an email address, e.g. "foo@example.com"
     *
     *  Output: the email address as a mailto link, with each character
     *    of the address encoded as either a decimal or hex entity, in
     *    the hopes of foiling most address harvesting spam bots. E.g.:
     *
     *    <a href="&#x6D;&#97;&#105;&#108;&#x74;&#111;:&#102;&#111;&#111;&#64;&#101;
     *       x&#x61;&#109;&#x70;&#108;&#x65;&#x2E;&#99;&#111;&#109;">&#102;&#111;&#111;
     *       &#64;&#101;x&#x61;&#109;&#x70;&#108;&#x65;&#x2E;&#99;&#111;&#109;</a>
     *
     *  Based on a filter by Matthew Wickline, posted to the BBEdit-Talk
     *  mailing list: <http://tinyurl.com/yu7ue>
     *
     */
    showdown.subParser('encodeEmailAddress', function (addr) {
        'use strict';
        var encode = [function (ch) {
            return '&#' + ch.charCodeAt(0) + ';';
        }, function (ch) {
            return '&#x' + ch.charCodeAt(0).toString(16) + ';';
        }, function (ch) {
            return ch;
        }];
        addr = 'mailto:' + addr;
        addr = addr.replace(/./g, function (ch) {
            if (ch === '@') {
                // this *must* be encoded. I insist.
                ch = encode[Math.floor(Math.random() * 2)](ch);
            } else if (ch !== ':') {
                // leave ':' alone (to spot mailto: later)
                var r = Math.random();
                // roughly 10% raw, 45% hex, 45% dec
                ch = r > 0.9 ? encode[2](ch) : r > 0.45 ? encode[1](ch) : encode[0](ch);
            }
            return ch;
        });
        addr = '<a href="' + addr + '">' + addr + '</a>';
        addr = addr.replace(/">.+:/g, '">'); // strip the mailto: from the visible part
        return addr;
    });
    /**
     * Within tags -- meaning between < and > -- encode [\ ` * _] so they
     * don't conflict with their use in Markdown for code, italics and strong.
     */
    showdown.subParser('escapeSpecialCharsWithinTagAttributes', function (text) {
        'use strict';
        // Build a regex to find HTML tags and comments.  See Friedl's
        // "Mastering Regular Expressions", 2nd Ed., pp. 200-201.
        var regex = /(<[a-z\/!$]("[^"]*"|'[^']*'|[^'">])*>|<!(--.*?--\s*)+>)/gi;
        text = text.replace(regex, function (wholeMatch) {
            var tag = wholeMatch.replace(/(.)<\/?code>(?=.)/g, '$1`');
            tag = showdown.helper.escapeCharacters(tag, '\\`*_', false);
            return tag;
        });
        return text;
    });
    /**
     * Handle github codeblocks prior to running HashHTML so that
     * HTML contained within the codeblock gets escaped properly
     * Example:
     * ```ruby
     *     def hello_world(x)
     *       puts "Hello, #{x}"
     *     end
     * ```
     */
    showdown.subParser('githubCodeBlocks', function (text, options, globals) {
        'use strict';
        // early exit if option is not enabled
        if (!options.ghCodeBlocks) {
            return text;
        }
        text = globals.converter._dispatch('githubCodeBlocks.before', text, options, globals);
        text += '~0';
        text = text.replace(/(?:^|\n)```(.*)\n([\s\S]*?)\n```/g, function (wholeMatch, language, codeblock) {
            var end = options.omitExtraWLInCodeBlocks ? '' : '\n';
            // First parse the github code block
            codeblock = showdown.subParser('encodeCode')(codeblock);
            codeblock = showdown.subParser('detab')(codeblock);
            codeblock = codeblock.replace(/^\n+/g, ''); // trim leading newlines
            codeblock = codeblock.replace(/\n+$/g, ''); // trim trailing whitespace
            codeblock = '<pre><code' + (language ? ' class="' + language + ' language-' + language + '"' : '') + '>' + codeblock + end + '</code></pre>';
            codeblock = showdown.subParser('hashBlock')(codeblock, options, globals);
            // Since GHCodeblocks can be false positives, we need to
            // store the primitive text and the parsed text in a global var,
            // and then return a token
            return '\n\n~G' + (globals.ghCodeBlocks.push({text: wholeMatch, codeblock: codeblock}) - 1) + 'G\n\n';
        });
        // attacklab: strip sentinel
        text = text.replace(/~0/, '');
        return globals.converter._dispatch('githubCodeBlocks.after', text, options, globals);
    });
    showdown.subParser('hashBlock', function (text, options, globals) {
        'use strict';
        text = text.replace(/(^\n+|\n+$)/g, '');
        return '\n\n~K' + (globals.gHtmlBlocks.push(text) - 1) + 'K\n\n';
    });
    showdown.subParser('hashElement', function (text, options, globals) {
        'use strict';
        return function (wholeMatch, m1) {
            var blockText = m1;
            // Undo double lines
            blockText = blockText.replace(/\n\n/g, '\n');
            blockText = blockText.replace(/^\n/, '');
            // strip trailing blank lines
            blockText = blockText.replace(/\n+$/g, '');
            // Replace the element text with a marker ("~KxK" where x is its key)
            blockText = '\n\n~K' + (globals.gHtmlBlocks.push(blockText) - 1) + 'K\n\n';
            return blockText;
        };
    });
    showdown.subParser('hashHTMLBlocks', function (text, options, globals) {
        'use strict';
        var blockTags = ['pre', 'div', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'blockquote', 'table', 'dl', 'ol', 'ul', 'script', 'noscript', 'form', 'fieldset', 'iframe', 'math', 'style', 'section', 'header', 'footer', 'nav', 'article', 'aside', 'address', 'audio', 'canvas', 'figure', 'hgroup', 'output', 'video', 'p'],
            repFunc = function repFunc(wholeMatch, match, left, right) {
                var txt = wholeMatch;
                // check if this html element is marked as markdown
                // if so, it's contents should be parsed as markdown
                if (left.search(/\bmarkdown\b/) !== -1) {
                    txt = left + globals.converter.makeHtml(match) + right;
                }
                return '\n\n~K' + (globals.gHtmlBlocks.push(txt) - 1) + 'K\n\n';
            };
        for (var i = 0; i < blockTags.length; ++i) {
            text = showdown.helper.replaceRecursiveRegExp(text, repFunc, '^(?: |\\t){0,3}<' + blockTags[i] + '\\b[^>]*>', '</' + blockTags[i] + '>', 'gim');
        }
        // HR SPECIAL CASE
        text = text.replace(/(\n[ ]{0,3}(<(hr)\b([^<>])*?\/?>)[ \t]*(?=\n{2,}))/g, showdown.subParser('hashElement')(text, options, globals));
        // Special case for standalone HTML comments:
        text = text.replace(/(<!--[\s\S]*?-->)/g, showdown.subParser('hashElement')(text, options, globals));
        // PHP and ASP-style processor instructions (<?...?> and <%...%>)
        text = text.replace(/(?:\n\n)([ ]{0,3}(?:<([?%])[^\r]*?\2>)[ \t]*(?=\n{2,}))/g, showdown.subParser('hashElement')(text, options, globals));
        return text;
    });
    /**
     * Hash span elements that should not be parsed as markdown
     */
    showdown.subParser('hashHTMLSpans', function (text, config, globals) {
        'use strict';
        var matches = showdown.helper.matchRecursiveRegExp(text, '<code\\b[^>]*>', '</code>', 'gi');
        for (var i = 0; i < matches.length; ++i) {
            text = text.replace(matches[i][0], '~L' + (globals.gHtmlSpans.push(matches[i][0]) - 1) + 'L');
        }
        return text;
    });
    /**
     * Unhash HTML spans
     */
    showdown.subParser('unhashHTMLSpans', function (text, config, globals) {
        'use strict';
        for (var i = 0; i < globals.gHtmlSpans.length; ++i) {
            text = text.replace('~L' + i + 'L', globals.gHtmlSpans[i]);
        }
        return text;
    });
    /**
     * Hash span elements that should not be parsed as markdown
     */
    showdown.subParser('hashPreCodeTags', function (text, config, globals) {
        'use strict';
        var repFunc = function repFunc(wholeMatch, match, left, right) {
            // encode html entities
            var codeblock = left + showdown.subParser('encodeCode')(match) + right;
            return '\n\n~G' + (globals.ghCodeBlocks.push({text: wholeMatch, codeblock: codeblock}) - 1) + 'G\n\n';
        };
        text = showdown.helper.replaceRecursiveRegExp(text, repFunc, '^(?: |\\t){0,3}<pre\\b[^>]*>\\s*<code\\b[^>]*>', '^(?: |\\t){0,3}</code>\\s*</pre>', 'gim');
        return text;
    });
    showdown.subParser('headers', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('headers.before', text, options, globals);
        var prefixHeader = options.prefixHeaderId,
            headerLevelStart = isNaN(parseInt(options.headerLevelStart)) ? 1 : parseInt(options.headerLevelStart),
            // Set text-style headers:
            //	Header 1
            //	========
            //
            //	Header 2
            //	--------
            //
            setextRegexH1 = options.smoothLivePreview ? /^(.+)[ \t]*\n={2,}[ \t]*\n+/gm : /^(.+)[ \t]*\n=+[ \t]*\n+/gm,
            setextRegexH2 = options.smoothLivePreview ? /^(.+)[ \t]*\n-{2,}[ \t]*\n+/gm : /^(.+)[ \t]*\n-+[ \t]*\n+/gm;
        text = text.replace(setextRegexH1, function (wholeMatch, m1) {
            var spanGamut = showdown.subParser('spanGamut')(m1, options, globals),
                hID = options.noHeaderId ? '' : ' id="' + headerId(m1) + '"',
                hLevel = headerLevelStart,
                hashBlock = '<h' + hLevel + hID + '>' + spanGamut + '</h' + hLevel + '>';
            return showdown.subParser('hashBlock')(hashBlock, options, globals);
        });
        text = text.replace(setextRegexH2, function (matchFound, m1) {
            var spanGamut = showdown.subParser('spanGamut')(m1, options, globals),
                hID = options.noHeaderId ? '' : ' id="' + headerId(m1) + '"',
                hLevel = headerLevelStart + 1,
                hashBlock = '<h' + hLevel + hID + '>' + spanGamut + '</h' + hLevel + '>';
            return showdown.subParser('hashBlock')(hashBlock, options, globals);
        });
        // atx-style headers:
        //  # Header 1
        //  ## Header 2
        //  ## Header 2 with closing hashes ##
        //  ...
        //  ###### Header 6
        //
        text = text.replace(/^(#{1,6})[ \t]*(.+?)[ \t]*#*\n+/gm, function (wholeMatch, m1, m2) {
            var span = showdown.subParser('spanGamut')(m2, options, globals),
                hID = options.noHeaderId ? '' : ' id="' + headerId(m2) + '"',
                hLevel = headerLevelStart - 1 + m1.length,
                header = '<h' + hLevel + hID + '>' + span + '</h' + hLevel + '>';
            return showdown.subParser('hashBlock')(header, options, globals);
        });
        function headerId(m) {
            var title,
                escapedId = m.replace(/[^\w]/g, '').toLowerCase();
            if (globals.hashLinkCounts[escapedId]) {
                title = escapedId + '-' + globals.hashLinkCounts[escapedId]++;
            } else {
                title = escapedId;
                globals.hashLinkCounts[escapedId] = 1;
            }
            // Prefix id to prevent causing inadvertent pre-existing style matches.
            if (prefixHeader === true) {
                prefixHeader = 'section';
            }
            if (showdown.helper.isString(prefixHeader)) {
                return prefixHeader + title;
            }
            return title;
        }
        text = globals.converter._dispatch('headers.after', text, options, globals);
        return text;
    });
    /**
     * Turn Markdown image shortcuts into <img> tags.
     */
    showdown.subParser('images', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('images.before', text, options, globals);
        var inlineRegExp = /!\[(.*?)]\s?\([ \t]*()<?(\S+?)>?(?: =([*\d]+[A-Za-z%]{0,4})x([*\d]+[A-Za-z%]{0,4}))?[ \t]*(?:(['"])(.*?)\6[ \t]*)?\)/g,
            referenceRegExp = /!\[([^\]]*?)] ?(?:\n *)?\[(.*?)]()()()()()/g;
        function writeImageTag(wholeMatch, altText, linkId, url, width, height, m5, title) {
            var gUrls = globals.gUrls,
                gTitles = globals.gTitles,
                gDims = globals.gDimensions;
            linkId = linkId.toLowerCase();
            if (!title) {
                title = '';
            }
            if (url === '' || url === null) {
                if (linkId === '' || linkId === null) {
                    // lower-case and turn embedded newlines into spaces
                    linkId = altText.toLowerCase().replace(/ ?\n/g, ' ');
                }
                url = '#' + linkId;
                if (!showdown.helper.isUndefined(gUrls[linkId])) {
                    url = gUrls[linkId];
                    if (!showdown.helper.isUndefined(gTitles[linkId])) {
                        title = gTitles[linkId];
                    }
                    if (!showdown.helper.isUndefined(gDims[linkId])) {
                        width = gDims[linkId].width;
                        height = gDims[linkId].height;
                    }
                } else {
                    return wholeMatch;
                }
            }
            altText = altText.replace(/"/g, '&quot;');
            altText = showdown.helper.escapeCharacters(altText, '*_', false);
            url = showdown.helper.escapeCharacters(url, '*_', false);
            var result = '<img src="' + url + '" alt="' + altText + '"';
            if (title) {
                title = title.replace(/"/g, '&quot;');
                title = showdown.helper.escapeCharacters(title, '*_', false);
                result += ' title="' + title + '"';
            }
            if (width && height) {
                width = width === '*' ? 'auto' : width;
                height = height === '*' ? 'auto' : height;
                result += ' width="' + width + '"';
                result += ' height="' + height + '"';
            }
            result += ' />';
            return result;
        }
        // First, handle reference-style labeled images: ![alt text][id]
        text = text.replace(referenceRegExp, writeImageTag);
        // Next, handle inline images:  ![alt text](url =<width>x<height> "optional title")
        text = text.replace(inlineRegExp, writeImageTag);
        text = globals.converter._dispatch('images.after', text, options, globals);
        return text;
    });
    showdown.subParser('italicsAndBold', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('italicsAndBold.before', text, options, globals);
        if (options.literalMidWordUnderscores) {
            //underscores
            // Since we are consuming a \s character, we need to add it
            text = text.replace(/(^|\s|>|\b)__(?=\S)([\s\S]+?)__(?=\b|<|\s|$)/gm, '$1<strong>$2</strong>');
            text = text.replace(/(^|\s|>|\b)_(?=\S)([\s\S]+?)_(?=\b|<|\s|$)/gm, '$1<em>$2</em>');
            //asterisks
            text = text.replace(/(\*\*)(?=\S)([^\r]*?\S[*]*)\1/g, '<strong>$2</strong>');
            text = text.replace(/(\*)(?=\S)([^\r]*?\S)\1/g, '<em>$2</em>');
        } else {
            // <strong> must go first:
            text = text.replace(/(\*\*|__)(?=\S)([^\r]*?\S[*_]*)\1/g, '<strong>$2</strong>');
            text = text.replace(/(\*|_)(?=\S)([^\r]*?\S)\1/g, '<em>$2</em>');
        }
        text = globals.converter._dispatch('italicsAndBold.after', text, options, globals);
        return text;
    });
    /**
     * Form HTML ordered (numbered) and unordered (bulleted) lists.
     */
    showdown.subParser('lists', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('lists.before', text, options, globals);
        /**
         * Process the contents of a single ordered or unordered list, splitting it
         * into individual list items.
         * @param {string} listStr
         * @param {boolean} trimTrailing
         * @returns {string}
         */
        function processListItems(listStr, trimTrailing) {
            // The $g_list_level global keeps track of when we're inside a list.
            // Each time we enter a list, we increment it; when we leave a list,
            // we decrement. If it's zero, we're not in a list anymore.
            //
            // We do this because when we're not inside a list, we want to treat
            // something like this:
            //
            //    I recommend upgrading to version
            //    8. Oops, now this line is treated
            //    as a sub-list.
            //
            // As a single paragraph, despite the fact that the second line starts
            // with a digit-period-space sequence.
            //
            // Whereas when we're inside a list (or sub-list), that line will be
            // treated as the start of a sub-list. What a kludge, huh? This is
            // an aspect of Markdown's syntax that's hard to parse perfectly
            // without resorting to mind-reading. Perhaps the solution is to
            // change the syntax rules such that sub-lists must start with a
            // starting cardinal number; e.g. "1." or "a.".
            globals.gListLevel++;
            // trim trailing blank lines:
            listStr = listStr.replace(/\n{2,}$/, '\n');
            // attacklab: add sentinel to emulate \z
            listStr += '~0';
            var rgx = /(\n)?(^[ \t]*)([*+-]|\d+[.])[ \t]+((\[(x|X| )?])?[ \t]*[^\r]+?(\n{1,2}))(?=\n*(~0|\2([*+-]|\d+[.])[ \t]+))/gm,
                isParagraphed = /\n[ \t]*\n(?!~0)/.test(listStr);
            listStr = listStr.replace(rgx, function (wholeMatch, m1, m2, m3, m4, taskbtn, checked) {
                checked = checked && checked.trim() !== '';
                var item = showdown.subParser('outdent')(m4, options, globals),
                    bulletStyle = '';
                // Support for github tasklists
                if (taskbtn && options.tasklists) {
                    bulletStyle = ' class="task-list-item" style="list-style-type: none;"';
                    item = item.replace(/^[ \t]*\[(x|X| )?]/m, function () {
                        var otp = '<input type="checkbox" disabled style="margin: 0px 0.35em 0.25em -1.6em; vertical-align: middle;"';
                        if (checked) {
                            otp += ' checked';
                        }
                        otp += '>';
                        return otp;
                    });
                }
                // m1 - Leading line or
                // Has a double return (multi paragraph) or
                // Has sublist
                if (m1 || item.search(/\n{2,}/) > -1) {
                    item = showdown.subParser('githubCodeBlocks')(item, options, globals);
                    item = showdown.subParser('blockGamut')(item, options, globals);
                } else {
                    // Recursion for sub-lists:
                    item = showdown.subParser('lists')(item, options, globals);
                    item = item.replace(/\n$/, ''); // chomp(item)
                    if (isParagraphed) {
                        item = showdown.subParser('paragraphs')(item, options, globals);
                    } else {
                        item = showdown.subParser('spanGamut')(item, options, globals);
                    }
                }
                item = '\n<li' + bulletStyle + '>' + item + '</li>\n';
                return item;
            });
            // attacklab: strip sentinel
            listStr = listStr.replace(/~0/g, '');
            globals.gListLevel--;
            if (trimTrailing) {
                listStr = listStr.replace(/\s+$/, '');
            }
            return listStr;
        }
        /**
         * Check and parse consecutive lists (better fix for issue #142)
         * @param {string} list
         * @param {string} listType
         * @param {boolean} trimTrailing
         * @returns {string}
         */
        function parseConsecutiveLists(list, listType, trimTrailing) {
            // check if we caught 2 or more consecutive lists by mistake
            // we use the counterRgx, meaning if listType is UL we look for UL and vice versa
            var counterRxg = listType === 'ul' ? /^ {0,2}\d+\.[ \t]/gm : /^ {0,2}[*+-][ \t]/gm,
                subLists = [],
                result = '';
            if (list.search(counterRxg) !== -1) {
                (function parseCL(txt) {
                    var pos = txt.search(counterRxg);
                    if (pos !== -1) {
                        // slice
                        result += '\n\n<' + listType + '>' + processListItems(txt.slice(0, pos), !!trimTrailing) + '</' + listType + '>\n\n';
                        // invert counterType and listType
                        listType = listType === 'ul' ? 'ol' : 'ul';
                        counterRxg = listType === 'ul' ? /^ {0,2}\d+\.[ \t]/gm : /^ {0,2}[*+-][ \t]/gm;
                        //recurse
                        parseCL(txt.slice(pos));
                    } else {
                        result += '\n\n<' + listType + '>' + processListItems(txt, !!trimTrailing) + '</' + listType + '>\n\n';
                    }
                })(list);
                for (var i = 0; i < subLists.length; ++i) {
                }
            } else {
                result = '\n\n<' + listType + '>' + processListItems(list, !!trimTrailing) + '</' + listType + '>\n\n';
            }
            return result;
        }
        // attacklab: add sentinel to hack around khtml/safari bug:
        // http://bugs.webkit.org/show_bug.cgi?id=11231
        text += '~0';
        // Re-usable pattern to match any entire ul or ol list:
        var wholeList = /^(([ ]{0,3}([*+-]|\d+[.])[ \t]+)[^\r]+?(~0|\n{2,}(?=\S)(?![ \t]*(?:[*+-]|\d+[.])[ \t]+)))/gm;
        if (globals.gListLevel) {
            text = text.replace(wholeList, function (wholeMatch, list, m2) {
                var listType = m2.search(/[*+-]/g) > -1 ? 'ul' : 'ol';
                return parseConsecutiveLists(list, listType, true);
            });
        } else {
            wholeList = /(\n\n|^\n?)(([ ]{0,3}([*+-]|\d+[.])[ \t]+)[^\r]+?(~0|\n{2,}(?=\S)(?![ \t]*(?:[*+-]|\d+[.])[ \t]+)))/gm;
            //wholeList = /(\n\n|^\n?)( {0,3}([*+-]|\d+\.)[ \t]+[\s\S]+?)(?=(~0)|(\n\n(?!\t| {2,}| {0,3}([*+-]|\d+\.)[ \t])))/g;
            text = text.replace(wholeList, function (wholeMatch, m1, list, m3) {
                var listType = m3.search(/[*+-]/g) > -1 ? 'ul' : 'ol';
                return parseConsecutiveLists(list, listType);
            });
        }
        // attacklab: strip sentinel
        text = text.replace(/~0/, '');
        text = globals.converter._dispatch('lists.after', text, options, globals);
        return text;
    });
    /**
     * Remove one level of line-leading tabs or spaces
     */
    showdown.subParser('outdent', function (text) {
        'use strict';
        // attacklab: hack around Konqueror 3.5.4 bug:
        // "----------bug".replace(/^-/g,"") == "bug"
        text = text.replace(/^(\t|[ ]{1,4})/gm, '~0'); // attacklab: g_tab_width
        // attacklab: clean up hack
        text = text.replace(/~0/g, '');
        return text;
    });
    /**
     *
     */
    showdown.subParser('paragraphs', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('paragraphs.before', text, options, globals);
        // Strip leading and trailing lines:
        text = text.replace(/^\n+/g, '');
        text = text.replace(/\n+$/g, '');
        var grafs = text.split(/\n{2,}/g),
            grafsOut = [],
            end = grafs.length; // Wrap <p> tags
        for (var i = 0; i < end; i++) {
            var str = grafs[i];
            // if this is an HTML marker, copy it
            if (str.search(/~(K|G)(\d+)\1/g) >= 0) {
                grafsOut.push(str);
            } else {
                str = showdown.subParser('spanGamut')(str, options, globals);
                str = str.replace(/^([ \t]*)/g, '<p>');
                str += '</p>';
                grafsOut.push(str);
            }
        }
        /** Unhashify HTML blocks */
        end = grafsOut.length;
        for (i = 0; i < end; i++) {
            var blockText = '',
                grafsOutIt = grafsOut[i],
                codeFlag = false;
            // if this is a marker for an html block...
            while (grafsOutIt.search(/~(K|G)(\d+)\1/) >= 0) {
                var delim = RegExp.$1,
                    num = RegExp.$2;
                if (delim === 'K') {
                    blockText = globals.gHtmlBlocks[num];
                } else {
                    // we need to check if ghBlock is a false positive
                    if (codeFlag) {
                        // use encoded version of all text
                        blockText = showdown.subParser('encodeCode')(globals.ghCodeBlocks[num].text);
                    } else {
                        blockText = globals.ghCodeBlocks[num].codeblock;
                    }
                }
                blockText = blockText.replace(/\$/g, '$$$$'); // Escape any dollar signs
                grafsOutIt = grafsOutIt.replace(/(\n\n)?~(K|G)\d+\2(\n\n)?/, blockText);
                // Check if grafsOutIt is a pre->code
                if (/^<pre\b[^>]*>\s*<code\b[^>]*>/.test(grafsOutIt)) {
                    codeFlag = true;
                }
            }
            grafsOut[i] = grafsOutIt;
        }
        text = grafsOut.join('\n\n');
        // Strip leading and trailing lines:
        text = text.replace(/^\n+/g, '');
        text = text.replace(/\n+$/g, '');
        return globals.converter._dispatch('paragraphs.after', text, options, globals);
    });
    /**
     * Run extension
     */
    showdown.subParser('runExtension', function (ext, text, options, globals) {
        'use strict';
        if (ext.filter) {
            text = ext.filter(text, globals.converter, options);
        } else if (ext.regex) {
            // TODO remove this when old extension loading mechanism is deprecated
            var re = ext.regex;
            if (!re instanceof RegExp) {
                re = new RegExp(re, 'g');
            }
            text = text.replace(re, ext.replace);
        }
        return text;
    });
    /**
     * These are all the transformations that occur *within* block-level
     * tags like paragraphs, headers, and list items.
     */
    showdown.subParser('spanGamut', function (text, options, globals) {
        'use strict';
        text = globals.converter._dispatch('spanGamut.before', text, options, globals);
        text = showdown.subParser('codeSpans')(text, options, globals);
        text = showdown.subParser('escapeSpecialCharsWithinTagAttributes')(text, options, globals);
        text = showdown.subParser('encodeBackslashEscapes')(text, options, globals);
        // Process anchor and image tags. Images must come first,
        // because ![foo][f] looks like an anchor.
        text = showdown.subParser('images')(text, options, globals);
        text = showdown.subParser('anchors')(text, options, globals);
        // Make links out of things like `<http://example.com/>`
        // Must come after _DoAnchors(), because you can use < and >
        // delimiters in inline links like [this](<url>).
        text = showdown.subParser('autoLinks')(text, options, globals);
        text = showdown.subParser('encodeAmpsAndAngles')(text, options, globals);
        text = showdown.subParser('italicsAndBold')(text, options, globals);
        text = showdown.subParser('strikethrough')(text, options, globals);
        // Do hard breaks:
        text = text.replace(/  +\n/g, ' <br />\n');
        text = globals.converter._dispatch('spanGamut.after', text, options, globals);
        return text;
    });
    showdown.subParser('strikethrough', function (text, options, globals) {
        'use strict';
        if (options.strikethrough) {
            text = globals.converter._dispatch('strikethrough.before', text, options, globals);
            text = text.replace(/(?:~T){2}([\s\S]+?)(?:~T){2}/g, '<del>$1</del>');
            text = globals.converter._dispatch('strikethrough.after', text, options, globals);
        }
        return text;
    });
    /**
     * Strip any lines consisting only of spaces and tabs.
     * This makes subsequent regexs easier to write, because we can
     * match consecutive blank lines with /\n+/ instead of something
     * contorted like /[ \t]*\n+/
     */
    showdown.subParser('stripBlankLines', function (text) {
        'use strict';
        return text.replace(/^[ \t]+$/mg, '');
    });
    /**
     * Strips link definitions from text, stores the URLs and titles in
     * hash references.
     * Link defs are in the form: ^[id]: url "optional title"
     *
     * ^[ ]{0,3}\[(.+)\]: // id = $1  attacklab: g_tab_width - 1
     * [ \t]*
     * \n?                  // maybe *one* newline
     * [ \t]*
     * <?(\S+?)>?          // url = $2
     * [ \t]*
     * \n?                // maybe one newline
     * [ \t]*
     * (?:
     * (\n*)              // any lines skipped = $3 attacklab: lookbehind removed
     * ["(]
     * (.+?)              // title = $4
     * [")]
     * [ \t]*
     * )?                 // title is optional
     * (?:\n+|$)
     * /gm,
     * function(){...});
     *
     */
    showdown.subParser('stripLinkDefinitions', function (text, options, globals) {
        'use strict';
        var regex = /^ {0,3}\[(.+)]:[ \t]*\n?[ \t]*<?(\S+?)>?(?: =([*\d]+[A-Za-z%]{0,4})x([*\d]+[A-Za-z%]{0,4}))?[ \t]*\n?[ \t]*(?:(\n*)["|'(](.+?)["|')][ \t]*)?(?:\n+|(?=~0))/gm;
        // attacklab: sentinel workarounds for lack of \A and \Z, safari\khtml bug
        text += '~0';
        text = text.replace(regex, function (wholeMatch, linkId, url, width, height, blankLines, title) {
            linkId = linkId.toLowerCase();
            globals.gUrls[linkId] = showdown.subParser('encodeAmpsAndAngles')(url); // Link IDs are case-insensitive
            if (blankLines) {
                // Oops, found blank lines, so it's not a title.
                // Put back the parenthetical statement we stole.
                return blankLines + title;
            } else {
                if (title) {
                    globals.gTitles[linkId] = title.replace(/"|'/g, '&quot;');
                }
                if (options.parseImgDimensions && width && height) {
                    globals.gDimensions[linkId] = {
                        width: width,
                        height: height
                    };
                }
            }
            // Completely remove the definition from the text
            return '';
        });
        // attacklab: strip sentinel
        text = text.replace(/~0/, '');
        return text;
    });
    showdown.subParser('tables', function (text, options, globals) {
        'use strict';
        if (!options.tables) {
            return text;
        }
        var tableRgx = /^[ \t]{0,3}\|?.+\|.+\n[ \t]{0,3}\|?[ \t]*:?[ \t]*(?:-|=){2,}[ \t]*:?[ \t]*\|[ \t]*:?[ \t]*(?:-|=){2,}[\s\S]+?(?:\n\n|~0)/gm;
        function parseStyles(sLine) {
            if (/^:[ \t]*--*$/.test(sLine)) {
                return ' style="text-align:left;"';
            } else if (/^--*[ \t]*:[ \t]*$/.test(sLine)) {
                return ' style="text-align:right;"';
            } else if (/^:[ \t]*--*[ \t]*:$/.test(sLine)) {
                return ' style="text-align:center;"';
            } else {
                return '';
            }
        }
        function parseHeaders(header, style) {
            var id = '';
            header = header.trim();
            if (options.tableHeaderId) {
                id = ' id="' + header.replace(/ /g, '_').toLowerCase() + '"';
            }
            header = showdown.subParser('spanGamut')(header, options, globals);
            return '<th' + id + style + '>' + header + '</th>\n';
        }
        function parseCells(cell, style) {
            var subText = showdown.subParser('spanGamut')(cell, options, globals);
            return '<td' + style + '>' + subText + '</td>\n';
        }
        function buildTable(headers, cells) {
            var tb = '<table>\n<thead>\n<tr>\n',
                tblLgn = headers.length;
            for (var i = 0; i < tblLgn; ++i) {
                tb += headers[i];
            }
            tb += '</tr>\n</thead>\n<tbody>\n';
            for (i = 0; i < cells.length; ++i) {
                tb += '<tr>\n';
                for (var ii = 0; ii < tblLgn; ++ii) {
                    tb += cells[i][ii];
                }
                tb += '</tr>\n';
            }
            tb += '</tbody>\n</table>\n';
            return tb;
        }
        text = globals.converter._dispatch('tables.before', text, options, globals);
        text = text.replace(tableRgx, function (rawTable) {
            var i,
                tableLines = rawTable.split('\n');
            // strip wrong first and last column if wrapped tables are used
            for (i = 0; i < tableLines.length; ++i) {
                if (/^[ \t]{0,3}\|/.test(tableLines[i])) {
                    tableLines[i] = tableLines[i].replace(/^[ \t]{0,3}\|/, '');
                }
                if (/\|[ \t]*$/.test(tableLines[i])) {
                    tableLines[i] = tableLines[i].replace(/\|[ \t]*$/, '');
                }
            }
            var rawHeaders = tableLines[0].split('|').map(function (s) {
                    return s.trim();
                }),
                rawStyles = tableLines[1].split('|').map(function (s) {
                    return s.trim();
                }),
                rawCells = [],
                headers = [],
                styles = [],
                cells = [];
            tableLines.shift();
            tableLines.shift();
            for (i = 0; i < tableLines.length; ++i) {
                if (tableLines[i].trim() === '') {
                    continue;
                }
                rawCells.push(tableLines[i].split('|').map(function (s) {
                    return s.trim();
                }));
            }
            if (rawHeaders.length < rawStyles.length) {
                return rawTable;
            }
            for (i = 0; i < rawStyles.length; ++i) {
                styles.push(parseStyles(rawStyles[i]));
            }
            for (i = 0; i < rawHeaders.length; ++i) {
                if (showdown.helper.isUndefined(styles[i])) {
                    styles[i] = '';
                }
                headers.push(parseHeaders(rawHeaders[i], styles[i]));
            }
            for (i = 0; i < rawCells.length; ++i) {
                var row = [];
                for (var ii = 0; ii < headers.length; ++ii) {
                    if (showdown.helper.isUndefined(rawCells[i][ii])) {
                    }
                    row.push(parseCells(rawCells[i][ii], styles[ii]));
                }
                cells.push(row);
            }
            return buildTable(headers, cells);
        });
        text = globals.converter._dispatch('tables.after', text, options, globals);
        return text;
    });
    /**
     * Swap back in all the special characters we've hidden.
     */
    showdown.subParser('unescapeSpecialChars', function (text) {
        'use strict';
        text = text.replace(/~E(\d+)E/g, function (wholeMatch, m1) {
            var charCodeToReplace = parseInt(m1);
            return String.fromCharCode(charCodeToReplace);
        });
        return text;
    });
    module.exports = showdown;
});
;define("yb_shop/utils/wxParse/wxDiscode.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
// HTML 支持的数学符号
    function strNumDiscode(str) {
        str = str.replace(/&forall;/g, '∀');
        str = str.replace(/&part;/g, '∂');
        str = str.replace(/&exists;/g, '∃');
        str = str.replace(/&empty;/g, '∅');
        str = str.replace(/&nabla;/g, '∇');
        str = str.replace(/&isin;/g, '∈');
        str = str.replace(/&notin;/g, '∉');
        str = str.replace(/&ni;/g, '∋');
        str = str.replace(/&prod;/g, '∏');
        str = str.replace(/&sum;/g, '∑');
        str = str.replace(/&minus;/g, '−');
        str = str.replace(/&lowast;/g, '∗');
        str = str.replace(/&radic;/g, '√');
        str = str.replace(/&prop;/g, '∝');
        str = str.replace(/&infin;/g, '∞');
        str = str.replace(/&ang;/g, '∠');
        str = str.replace(/&and;/g, '∧');
        str = str.replace(/&or;/g, '∨');
        str = str.replace(/&cap;/g, '∩');
        str = str.replace(/&cap;/g, '∪');
        str = str.replace(/&int;/g, '∫');
        str = str.replace(/&there4;/g, '∴');
        str = str.replace(/&sim;/g, '∼');
        str = str.replace(/&cong;/g, '≅');
        str = str.replace(/&asymp;/g, '≈');
        str = str.replace(/&ne;/g, '≠');
        str = str.replace(/&le;/g, '≤');
        str = str.replace(/&ge;/g, '≥');
        str = str.replace(/&sub;/g, '⊂');
        str = str.replace(/&sup;/g, '⊃');
        str = str.replace(/&nsub;/g, '⊄');
        str = str.replace(/&sube;/g, '⊆');
        str = str.replace(/&supe;/g, '⊇');
        str = str.replace(/&oplus;/g, '⊕');
        str = str.replace(/&otimes;/g, '⊗');
        str = str.replace(/&perp;/g, '⊥');
        str = str.replace(/&sdot;/g, '⋅');
        return str;
    }
//HTML 支持的希腊字母
    function strGreeceDiscode(str) {
        str = str.replace(/&Alpha;/g, 'Α');
        str = str.replace(/&Beta;/g, 'Β');
        str = str.replace(/&Gamma;/g, 'Γ');
        str = str.replace(/&Delta;/g, 'Δ');
        str = str.replace(/&Epsilon;/g, 'Ε');
        str = str.replace(/&Zeta;/g, 'Ζ');
        str = str.replace(/&Eta;/g, 'Η');
        str = str.replace(/&Theta;/g, 'Θ');
        str = str.replace(/&Iota;/g, 'Ι');
        str = str.replace(/&Kappa;/g, 'Κ');
        str = str.replace(/&Lambda;/g, 'Λ');
        str = str.replace(/&Mu;/g, 'Μ');
        str = str.replace(/&Nu;/g, 'Ν');
        str = str.replace(/&Xi;/g, 'Ν');
        str = str.replace(/&Omicron;/g, 'Ο');
        str = str.replace(/&Pi;/g, 'Π');
        str = str.replace(/&Rho;/g, 'Ρ');
        str = str.replace(/&Sigma;/g, 'Σ');
        str = str.replace(/&Tau;/g, 'Τ');
        str = str.replace(/&Upsilon;/g, 'Υ');
        str = str.replace(/&Phi;/g, 'Φ');
        str = str.replace(/&Chi;/g, 'Χ');
        str = str.replace(/&Psi;/g, 'Ψ');
        str = str.replace(/&Omega;/g, 'Ω');
        str = str.replace(/&alpha;/g, 'α');
        str = str.replace(/&beta;/g, 'β');
        str = str.replace(/&gamma;/g, 'γ');
        str = str.replace(/&delta;/g, 'δ');
        str = str.replace(/&epsilon;/g, 'ε');
        str = str.replace(/&zeta;/g, 'ζ');
        str = str.replace(/&eta;/g, 'η');
        str = str.replace(/&theta;/g, 'θ');
        str = str.replace(/&iota;/g, 'ι');
        str = str.replace(/&kappa;/g, 'κ');
        str = str.replace(/&lambda;/g, 'λ');
        str = str.replace(/&mu;/g, 'μ');
        str = str.replace(/&nu;/g, 'ν');
        str = str.replace(/&xi;/g, 'ξ');
        str = str.replace(/&omicron;/g, 'ο');
        str = str.replace(/&pi;/g, 'π');
        str = str.replace(/&rho;/g, 'ρ');
        str = str.replace(/&sigmaf;/g, 'ς');
        str = str.replace(/&sigma;/g, 'σ');
        str = str.replace(/&tau;/g, 'τ');
        str = str.replace(/&upsilon;/g, 'υ');
        str = str.replace(/&phi;/g, 'φ');
        str = str.replace(/&chi;/g, 'χ');
        str = str.replace(/&psi;/g, 'ψ');
        str = str.replace(/&omega;/g, 'ω');
        str = str.replace(/&thetasym;/g, 'ϑ');
        str = str.replace(/&upsih;/g, 'ϒ');
        str = str.replace(/&piv;/g, 'ϖ');
        str = str.replace(/&middot;/g, '·');
        return str;
    }
//
    function strcharacterDiscode(str) {
        // 加入常用解析
        str = str.replace(/&nbsp;/g, ' ');
        str = str.replace(/&quot;/g, "'");
        str = str.replace(/&amp;/g, '&');
        // str = str.replace(/&lt;/g, '‹');
        // str = str.replace(/&gt;/g, '›');
        str = str.replace(/&lt;/g, '<');
        str = str.replace(/&gt;/g, '>');
        return str;
    }
// HTML 支持的其他实体
    function strOtherDiscode(str) {
        str = str.replace(/&OElig;/g, 'Œ');
        str = str.replace(/&oelig;/g, 'œ');
        str = str.replace(/&Scaron;/g, 'Š');
        str = str.replace(/&scaron;/g, 'š');
        str = str.replace(/&Yuml;/g, 'Ÿ');
        str = str.replace(/&fnof;/g, 'ƒ');
        str = str.replace(/&circ;/g, 'ˆ');
        str = str.replace(/&tilde;/g, '˜');
        str = str.replace(/&ensp;/g, '');
        str = str.replace(/&emsp;/g, '');
        str = str.replace(/&thinsp;/g, '');
        str = str.replace(/&zwnj;/g, '');
        str = str.replace(/&zwj;/g, '');
        str = str.replace(/&lrm;/g, '');
        str = str.replace(/&rlm;/g, '');
        str = str.replace(/&ndash;/g, '–');
        str = str.replace(/&mdash;/g, '—');
        str = str.replace(/&lsquo;/g, '‘');
        str = str.replace(/&rsquo;/g, '’');
        str = str.replace(/&sbquo;/g, '‚');
        str = str.replace(/&ldquo;/g, '“');
        str = str.replace(/&rdquo;/g, '”');
        str = str.replace(/&bdquo;/g, '„');
        str = str.replace(/&dagger;/g, '†');
        str = str.replace(/&Dagger;/g, '‡');
        str = str.replace(/&bull;/g, '•');
        str = str.replace(/&hellip;/g, '…');
        str = str.replace(/&permil;/g, '‰');
        str = str.replace(/&prime;/g, '′');
        str = str.replace(/&Prime;/g, '″');
        str = str.replace(/&lsaquo;/g, '‹');
        str = str.replace(/&rsaquo;/g, '›');
        str = str.replace(/&oline;/g, '‾');
        str = str.replace(/&euro;/g, '€');
        str = str.replace(/&trade;/g, '™');
        str = str.replace(/&larr;/g, '←');
        str = str.replace(/&uarr;/g, '↑');
        str = str.replace(/&rarr;/g, '→');
        str = str.replace(/&darr;/g, '↓');
        str = str.replace(/&harr;/g, '↔');
        str = str.replace(/&crarr;/g, '↵');
        str = str.replace(/&lceil;/g, '⌈');
        str = str.replace(/&rceil;/g, '⌉');
        str = str.replace(/&lfloor;/g, '⌊');
        str = str.replace(/&rfloor;/g, '⌋');
        str = str.replace(/&loz;/g, '◊');
        str = str.replace(/&spades;/g, '♠');
        str = str.replace(/&clubs;/g, '♣');
        str = str.replace(/&hearts;/g, '♥');
        str = str.replace(/&diams;/g, '♦');
        return str;
    }
    function strMoreDiscode(str) {
        str = str.replace(/\r\n/g, "");
        str = str.replace(/\n/g, "");
        str = str.replace(/code/g, "wxxxcode-style");
        return str;
    }
    function strDiscode(str) {
        str = strNumDiscode(str);
        str = strGreeceDiscode(str);
        str = strcharacterDiscode(str);
        str = strOtherDiscode(str);
        str = strMoreDiscode(str);
        return str;
    }
    function urlToHttpUrl(url, rep) {
        var patt1 = new RegExp("^//");
        var result = patt1.test(url);
        if (result) {
            url = rep + ":" + url;
        }
        return url;
    }
    module.exports = {
        strDiscode: strDiscode,
        urlToHttpUrl: urlToHttpUrl
    };
});
;define("yb_shop/utils/wxParse/wxParse.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    'use strict';
    var _showdown = require('./showdown.js');
    var _showdown2 = _interopRequireDefault(_showdown);
    var _html2json = require('./html2json.js');
    var _html2json2 = _interopRequireDefault(_html2json);
    function _interopRequireDefault(obj) {
        return obj && obj.__esModule ? obj : {default: obj};
    }
    /**
     * 配置及公有属性
     **/
    /**
     * 主函数入口区
     **/
    /**
     * utils函数引入
     **/
    function wxParse() {
        var bindName = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'wxParseData';
        var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'html';
        var data = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '<div class="color:red;">数据不能为空</div>';
        var target = arguments[3];
        var imagePadding = arguments[4];
        var that = target;
        var transData = {}; //存放转化后的数据
        if (type == 'html') {
            transData = _html2json2.default.html2json(data, bindName);
            //console.log(JSON.stringify(transData, ' ', ' '));
        } else if (type == 'md' || type == 'markdown') {
            var converter = new _showdown2.default.Converter();
            var html = converter.makeHtml(data);
            transData = _html2json2.default.html2json(html, bindName);
            console.log(JSON.stringify(transData, ' ', ' '));
        }
        transData.view = {};
        transData.view.imagePadding = 0;
        if (typeof imagePadding != 'undefined') {
            transData.view.imagePadding = imagePadding;
        }
        var bindData = {};
        bindData[bindName] = transData;
        that.setData(bindData);
        that.wxParseImgLoad = wxParseImgLoad;
        that.wxParseImgTap = wxParseImgTap;
    }
// 图片点击事件
    function wxParseImgTap(e) {
        console.log(e);
        var that = this;
        var nowImgUrl = e.target.dataset.src;
        var tagFrom = e.target.dataset.from;
        if (typeof tagFrom != 'undefined' && tagFrom.length > 0) {
            wx.previewImage({
                current: nowImgUrl, // 当前显示图片的http链接
                urls: that.data[tagFrom].imageUrls // 需要预览的图片http链接列表
            });
        }
    }
    /**
     * 图片视觉宽高计算函数区
     **/
    function wxParseImgLoad(e) {
        var that = this;
        var tagFrom = e.target.dataset.from;
        var idx = e.target.dataset.idx;
        if (typeof tagFrom != 'undefined' && tagFrom.length > 0) {
            calMoreImageInfo(e, idx, that, tagFrom);
        }
    }
// 假循环获取计算图片视觉最佳宽高
    function calMoreImageInfo(e, idx, that, bindName) {
        var temData = that.data[bindName];
        if (!temData || temData.images.length == 0) {
            return;
        }
        var temImages = temData.images;
        //因为无法获取view宽度 需要自定义padding进行计算，稍后处理
        var recal = wxAutoImageCal(e.detail.width, e.detail.height, that, bindName);
        temImages[idx].width = recal.imageWidth;
        temImages[idx].height = recal.imageheight;
        temData.images = temImages;
        var bindData = {};
        bindData[bindName] = temData;
        that.setData(bindData);
    }
// 计算视觉优先的图片宽高
    function wxAutoImageCal(originalWidth, originalHeight, that, bindName) {
        //获取图片的原始长宽
        var windowWidth = 0,
            windowHeight = 0;
        var autoWidth = 0,
            autoHeight = 0;
        var results = {};
        wx.getSystemInfo({
            success: function success(res) {
                var padding = that.data[bindName].view.imagePadding;
                windowWidth = res.windowWidth - 2 * padding;
                windowHeight = res.windowHeight;
                //判断按照那种方式进行缩放
                //console.log("windowWidth" + windowWidth);
                if (originalWidth > windowWidth) {
                    //在图片width大于手机屏幕width时候
                    autoWidth = windowWidth;
                    //console.log("autoWidth" + autoWidth);
                    autoHeight = autoWidth * originalHeight / originalWidth;
                    //console.log("autoHeight" + autoHeight);
                    results.imageWidth = autoWidth;
                    results.imageheight = autoHeight;
                } else {
                    //否则展示原来的数据
                    results.imageWidth = originalWidth;
                    results.imageheight = originalHeight;
                }
            }
        });
        return results;
    }
    function wxParseTemArray(temArrayName, bindNameReg, total, that) {
        var array = [];
        var temData = that.data;
        var obj = null;
        for (var i = 0; i < total; i++) {
            var simArr = temData[bindNameReg + i].nodes;
            array.push(simArr);
        }
        temArrayName = temArrayName || 'wxParseTemArray';
        obj = JSON.parse('{"' + temArrayName + '":""}');
        obj[temArrayName] = array;
        that.setData(obj);
    }
    /**
     * 配置emojis
     *
     */
    function emojisInit() {
        var reg = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
        var baseSrc = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "/wxParse/emojis/";
        var emojis = arguments[2];
        _html2json2.default.emojisInit(reg, baseSrc, emojis);
    }
    module.exports = {
        wxParse: wxParse,
        wxParseTemArray: wxParseTemArray,
        emojisInit: emojisInit
    };
});
;define("app.js", function (require, module, exports, window, document, frames, self, location, navigator, localStorage, history, Caches, screen, alert, confirm, prompt, fetch, XMLHttpRequest, WebSocket, webkit, WeixinJSCore, ServiceJSBridge, Reporter) {
    "use strict";
    var e = require("/yb_shop/utils/core.js");
    App({
        onLaunch: function onLaunch(e) {
            console.log("onLaunch");
            e.alert("onLaunch !!!!!!");
            this.webLogin();
            this.get_menu(function (t) {
            });
        },
        onShow:function (){},
        ttt:function ttt() {
            return "5657878 @@@@";
        },
        webLogin: function webLogin() {
            e.alert("565656565656");
            var that = this;
            if(typeof(__UID__) == "undefined"){
                __UID__= that.getCache("__UID__");
            }
            var url = that.siteInfo.siteroot + '?i=' + that.getCache("__uniacid__") + '&t=undefined&v=1.0.0&from=wxapp&c=entry&a=wxapp&do=user_weblogin&m=yb_shop&sign=1d917db727d0aa4e23ca117826fa3153';
            e.alert(url);
            wx.request({
                url: that.siteInfo.siteroot + '?i=' + that.getCache("__uniacid__") + '&t=undefined&v=1.0.0&from=wxapp&c=entry&a=wxapp&do=user_weblogin&m=yb_shop&sign=1d917db727d0aa4e23ca117826fa3153', //仅为示例，并非真实的接口地址
                data: {uid: __UID__},
                header: {
                    'content-type': 'application/json' // 默认值
                },
                success: function success(t) {
                    if (t.errMsg == "request:ok") {
                        if (typeof t.data == "string") {
                            if (t.data.indexOf("html") >= 0 && t.data.indexOf("head") >= 0 && t.data.indexOf("body") >= 0) {
                                e.error('请求错误003');
                                return;
                            }
                        }
                        if (t.data == '') {
                            //e.error('请求异常！');
                            return;
                        }
                        //转json对象
                        if (typeof t.data == 'string') {
                            t.data = e.json_parse(t.data);
                        }
                        if (t.data.code == 0) {
                            var info = t.data.info;
                            var userInfo = {};
                            userInfo.openid = info.wx_openid
                            userInfo.uid = info.uid
                            userInfo.avatarUrl=info.user_headimg
                            userInfo.nickName=info.nick_name
                            that.setCache("userinfo", userInfo);
                            that.setCache("__UID__", __UID__);
                        } else {
                            e.alert(t.data.msg);
                        }
                    } else {
                        e.alert(t.errMsg);
                    }
                }
            });
        },
        getExtC: function getExtC(obj) {
            var that = this;
            if (wx.getExtConfig) {
                wx.getExtConfig({
                    success: function success(res) {
                        console.log(res);
                        if (res.errMsg == "getExtConfig: ok") {
                            that.globalData.appid = res.extConfig.app_key ? res.extConfig.app_key : '';
                            that.globalData.app_name = res.extConfig.app_name ? res.extConfig.app_name : getApp().globalData.app_name;
                            that.siteInfo.siteroot = res.extConfig.siteroot ? res.extConfig.siteroot : '';
                            that.siteInfo.uniacid = res.extConfig.uniacid ? res.extConfig.uniacid : '';
                            typeof obj == "function" && obj();
                        } else {
                            e.error('app.js:' + res.errMsg);
                        }
                    }
                });
            }
        },
        requirejs: function requirejs(e) {
            return require("yb_shop/utils/" + e + ".js");
        },
        get_menu: function get_menu(n) {
            var that = this;
            var cache = that.getCache('menu');
            if (cache) {
                "function" == typeof n, n(2);
            } else {
                wx.request({
                    url: that.siteInfo.siteroot + '?i=' + that.getCache("__uniacid__") + '&t=undefined&v=1.0.0&from=wxapp&c=entry&a=wxapp&do=index_menu&m=yb_shop&sign=1d917db727d0aa4e23ca117826fa3153', //仅为示例，并非真实的接口地址
                    data: {},
                    header: {
                        'content-type': 'application/json' // 默认值
                    },
                    success: function success(t) {
                        if (t.errMsg == "request:ok") {
                            if (typeof t.data == "string") {
                                if (t.data.indexOf("html") >= 0 && t.data.indexOf("head") >= 0 && t.data.indexOf("body") >= 0) {
                                    e.error('请求错误003');
                                    return;
                                }
                            }
                            if (t.data == '') {
                                console.log('请求异常！');
                                //e.error('请求异常！');
                                return;
                            }
                            // console.log(t.data)
                            //转json对象
                            if (typeof t.data == 'string') {
                                t.data = e.json_parse(t.data);
                            }
                            //   console.log(t.data)
                            if (t.data.code == 0) {
                                if (t.data.info.tabBar.IsDiDis == null || t.data.info.tabBar.IsDiDis == undefined) {
                                    t.data.info.tabBar.IsDiDis = false;
                                }
                                //隐藏底部菜单
                                t.data.info.tabBar.IsDiDis = false;
                                that.setCache("menu", t.data.info.tabBar, 2);
                                that.tabBar = t.data.info.tabBar;
                                //  console.log(that.tabBar.list);
                                var iii = 0;
                                for (var iii = 0; iii < that.tabBar.list.length; iii++) {
                                    var bbb = that.tabBar.list[iii];
                                    if (bbb.imgurl.indexOf("?") < 0) {
                                        bbb.imgurl += "?tabbar_index=" + iii;
                                    } else {
                                        bbb.imgurl += "&tabbar_index=" + iii;
                                    }
                                }
                                that.config.background = t.data.info.tabBar.background ? t.data.info.tabBar.background : that.config.background;
                                that.config.button_color = t.data.info.tabBar.background ? t.data.info.tabBar.background : that.config.button_color;
                                that.config.alert_color = t.data.info.tabBar.background ? t.data.info.tabBar.background : that.config.alert_color;
                                that.config.font_color = t.data.info.tabBar.backgroundTextStyle ? t.data.info.tabBar.backgroundTextStyle : that.config.font_color;
                                that.config.selectedColor = t.data.info.tabBar.selectedColor ? t.data.info.tabBar.selectedColor : that.config.selectedColor;
                            }
                            "function" == typeof n, n(1);
                        } else {
                            e.alert(t.errMsg);
                        }
                    }
                });
            }
        },
        getUserInfo: function getUserInfo(userInfo, t) {
            //this.webLogin();
        },
        isInArray: function isInArray(arr, value) {
            for (var i = 0; i < arr.length; i++) {
                if (value == arr[i].key) {
                    var str = arr[i].imgurl;
                    return str.charAt(str.length - 1);
                }
            }
            return false;
        },
        tabBar: {
            name: "万能门店",
            background: "#F4F4F4",
            backgroundTextStyle: "#ffffff",
            backgroundColor: "#FFF5EE",
            color: "#8b8b8b",
            selectedColor: "#e02e24",
            list: [{
                imgurl: "/yb_shop/pages/index/index",
                name: "首页",
                key: 'index',
                page_icon: "/yb_shop/static/icon/gray_home.png",
                page_select_icon: "/yb_shop/static/icon/red_home.png"
            }, {
                imgurl: "/yb_shop/pages/class_article/index",
                name: "发现",
                key: 'class_article',
                page_icon: "/yb_shop/static/icon/gray_find.png",
                page_select_icon: "/yb_shop/static/icon/red_find.png"
            }, {
                imgurl: "/yb_shop/pages/product/index",
                name: "商品",
                key: 'product',
                page_icon: "/yb_shop/static/icon/gray_cate.png",
                page_select_icon: "/yb_shop/static/icon/red_cate.png"
            }, {
                imgurl: "/yb_shop/pages/member/cart/index",
                name: "购物车",
                key: 'cart',
                page_icon: "/yb_shop/static/icon/gray_cart.png",
                page_select_icon: "/yb_shop/static/icon/red_cart.png"
            }, {
                imgurl: "/yb_shop/pages/member/index/index",
                name: "会员中心",
                key: "member_index",
                page_icon: "/yb_shop/static/icon/gray_people.png",
                page_select_icon: "/yb_shop/static/icon/red_people.png"
            }]
        },
        getMenuList:function getMenuList(n) {
            var that=this;
            wx.request({
                url: that.siteInfo.siteroot + '?i=' + that.getCache("__uniacid__") + '&t=undefined&v=1.0.0&from=wxapp&c=entry&a=wxapp&do=index_menu&m=yb_shop&sign=1d917db727d0aa4e23ca117826fa3153', //仅为示例，并非真实的接口地址
                data: {},
                header: {
                    'content-type': 'application/json' // 默认值
                },
                success: function success(t) {
                    if (t.errMsg == "request:ok") {
                        if (typeof t.data == "string") {
                            if (t.data.indexOf("html") >= 0 && t.data.indexOf("head") >= 0 && t.data.indexOf("body") >= 0) {
                                e.error('请求错误003');
                                return;
                            }
                        }
                        if (t.data == '') {
                            console.log('请求异常！');
                            //e.error('请求异常！');
                            return;
                        }
                        // console.log(t.data)
                        //转json对象
                        if (typeof t.data == 'string') {
                            t.data = e.json_parse(t.data);
                        }
                        //   console.log(t.data)
                        if (t.data.code == 0) {
                            typeof n == "function" && n(t.data.info.tabBar.list);
                        }
                    } else {
                        e.alert(t.errMsg);
                    }
                }
            });
        },
        getCache: function getCache(e, t) {
            var i = +new Date() / 1000,
                n = "";
            i = parseInt(i);
            try {
                n = wx.getStorageSync(e + this.globalData.appid), n.expire > i || 0 == n.expire ? n = n.value : (n = "", this.removeCache(e));
            } catch (e) {
                n = void 0 === t ? "" : t;
            }
            return n = n || "";
        },
        setCache: function setCache(key, t, i) {
            var n = +new Date() / 1000,
                a = true,
                o = {
                    expire: i ? n + parseInt(i) : 0,
                    value: t
                };
            try {
                wx.setStorageSync(key + this.globalData.appid, o);
            } catch (err) {
                a = false;
            }
            return a;
        },
        removeCache: function removeCache(e) {
            var t = true;
            try {
                wx.removeStorageSync(e + this.globalData.appid);
            } catch (e) {
                t = false;
            }
            return t;
        },
        util: require("we7/resource/js/util.js"),
        siteInfo: require("siteinfo.js"),
        globalData: {
            appid: 'liu2417301781',
            userInfo: null,
            app_name: '壹佰小程序'
        },
        config: {
            background: '#8b8b8b', //首页搜索、个人汇中心背景#000cf.color.background
            button_color: '#fff', //商品详情按钮，提交订单、确认支付按钮，购物车结算按钮
            alert_color: '#fff', //信息提示，表单提交按钮oI9vSwl9OO4Vggsuy65nL_qZYprY
            font_color: 'black',
            selectedColor: "#df2f20",
            kuan: '款',
            dan: '单',
            fu: '付',
            gou: '购',
            huo: '货'
        },
        //拼团
        redirect: function redirect(url, param) {
            wx.navigateTo({
                url: '/yb_shop/pages/pintuan/pages/' + url + '?' + param
            });
        },
        showModal: function showModal(that) {
            var animation = wx.createAnimation({
                duration: 200
            });
            animation.opacity(0).rotateX(-100).step();
            that.setData({
                // animationData:animation.width('291px'),
                animationData: animation.export()
            });
            setTimeout(function () {
                animation.opacity(1).rotateX(0).step();
                that.setData({
                    animationData: animation
                });
            }.bind(that), 200);
        },
        showToast: function showToast(that, title) {
            var toast = {};
            toast.toastTitle = title;
            that.setData({
                toast: toast
            });
            var animation = wx.createAnimation({
                duration: 100
            });
            animation.opacity(0).rotateY(-100).step();
            toast.toastStatus = true;
            toast.toastAnimationData = animation.export();
            that.setData({
                toast: toast
            });
            setTimeout(function () {
                animation.opacity(1).rotateY(0).step();
                toast.toastAnimationData = animation;
                that.setData({
                    toast: toast
                });
            }.bind(that), 100);
            // 定时器关闭
            setTimeout(function () {
                toast.toastStatus = false;
                that.setData({
                    toast: toast
                });
            }.bind(that), 2000);
        }
    });
});
require("app.js")