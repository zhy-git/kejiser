!function (e) {
    function t(n) {
        if (r[n]) return r[n].exports;
        var o = r[n] = {i: n, l: !1, exports: {}};
        return e[n].call(o.exports, o, o.exports, t), o.l = !0, o.exports
    }
    var n = window.webpackJsonp;
    window.webpackJsonp = function (t, r, i) {
        for (var a, s, u = 0, c = []; u < t.length; u++) s = t[u], o[s] && c.push(o[s][0]), o[s] = 0;
        for (a in r) Object.prototype.hasOwnProperty.call(r, a) && (e[a] = r[a]);
        for (n && n(t, r, i); c.length;) c.shift()()
    };
    var r = {}, o = {23: 0};
    t.e = function (e) {
        function n() {
            s.onerror = s.onload = null, clearTimeout(u);
            var t = o[e];
            0 !== t && (t && t[1](new Error("Loading chunk " + e + " failed.")), o[e] = void 0)
        }
        var r = o[e];
        if (0 === r) return new Promise(function (e) {
            e()
        });
        if (r) return r[2];
        var i = new Promise(function (t, n) {
            r = o[e] = [t, n]
        });
        r[2] = i;
        var a = document.getElementsByTagName("head")[0], s = document.createElement("script");
        s.type = "text/javascript", s.charset = "utf-8", s.async = !0, s.timeout = 12e4, t.nc && s.setAttribute("nonce", t.nc), s.src = t.p + "" + ({
            0: "wx-video",
            1: "wx-toast",
            2: "wx-textarea",
            3: "wx-switch",
            4: "wx-swiper",
            5: "wx-swiper-item",
            6: "wx-slider",
            7: "wx-scroll-view",
            8: "wx-radio",
            9: "wx-radio-group",
            10: "wx-progress",
            11: "wx-picker",
            12: "wx-picker-view",
            13: "wx-picker-view-column",
            14: "wx-modal",
            15: "wx-map",
            16: "wx-form",
            17: "wx-contact-button",
            18: "wx-canvas",
            19: "wx-audio",
            20: "wx-action-sheet",
            21: "wx-action-sheet-item",
            22: "wx-action-sheet-cancel"
        }[e] || e) + ".wd.chunk.js";
        var u = setTimeout(n, 12e4);
        return s.onerror = s.onload = n, a.appendChild(s), i
    }, t.m = e, t.c = r, t.d = function (e, n, r) {
        t.o(e, n) || Object.defineProperty(e, n, {configurable: !1, enumerable: !0, get: r})
    }, t.n = function (e) {
        var n = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return t.d(n, "a", n), n
    }, t.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, t.p = "script/", t.oe = function (e) {
        throw console.error(e), e
    }, t(t.s = 118)
}([function (e, t, n) {
    "use strict";
    t.__esModule = !0, t.default = function (e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }
}, function (e, t, n) {
    "use strict";
    t.__esModule = !0;
    var r = n(51), o = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(r);
    t.default = function () {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), (0, o.default)(e, r.key, r)
            }
        }
        return function (t, n, r) {
            return n && e(t.prototype, n), r && e(t, r), t
        }
    }()
}, function (e, t) {
    var n = e.exports = {version: "2.4.0"};
    "number" == typeof __e && (__e = n)
}, function (e, t, n) {
    function r(e) {
        if (e) return o(e)
    }
    function o(e) {
        for (var t in r.prototype) e[t] = r.prototype[t];
        return e
    }
    e.exports = r, r.prototype.on = r.prototype.addEventListener = function (e, t) {
        return this._callbacks = this._callbacks || {}, (this._callbacks["$" + e] = this._callbacks["$" + e] || []).push(t), this
    }, r.prototype.once = function (e, t) {
        function n() {
            this.off(e, n), t.apply(this, arguments)
        }
        return n.fn = t, this.on(e, n), this
    }, r.prototype.off = r.prototype.removeListener = r.prototype.removeAllListeners = r.prototype.removeEventListener = function (e, t) {
        if (this._callbacks = this._callbacks || {}, 0 == arguments.length) return this._callbacks = {}, this;
        var n = this._callbacks["$" + e];
        if (!n) return this;
        if (1 == arguments.length) return delete this._callbacks["$" + e], this;
        for (var r, o = 0; o < n.length; o++) if ((r = n[o]) === t || r.fn === t) {
            n.splice(o, 1);
            break
        }
        return this
    }, r.prototype.emit = function (e) {
        this._callbacks = this._callbacks || {};
        var t = [].slice.call(arguments, 1), n = this._callbacks["$" + e];
        if (n) {
            n = n.slice(0);
            for (var r = 0, o = n.length; r < o; ++r) n[r].apply(this, t)
        }
        return this
    }, r.prototype.listeners = function (e) {
        return this._callbacks = this._callbacks || {}, this._callbacks["$" + e] || []
    }, r.prototype.hasListeners = function (e) {
        return !!this.listeners(e).length
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    t.__esModule = !0;
    var o = n(151), i = r(o), a = n(95), s = r(a),
        u = "function" == typeof s.default && "symbol" == typeof i.default ? function (e) {
            return typeof e
        } : function (e) {
            return e && "function" == typeof s.default && e.constructor === s.default && e !== s.default.prototype ? "symbol" : typeof e
        };
    t.default = "function" == typeof s.default && "symbol" === u(i.default) ? function (e) {
        return void 0 === e ? "undefined" : u(e)
    } : function (e) {
        return e && "function" == typeof s.default && e.constructor === s.default && e !== s.default.prototype ? "symbol" : void 0 === e ? "undefined" : u(e)
    }
}, function (e, t, n) {
    e.exports = {default: n(172), __esModule: !0}
}, function (e, t, n) {
    var r = n(62)("wks"), o = n(43), i = n(8).Symbol, a = "function" == typeof i;
    (e.exports = function (e) {
        return r[e] || (r[e] = a && i[e] || (a ? i : o)("Symbol." + e))
    }).store = r
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        return "number" == typeof e ? e + "px" : e
    }
    function i(e) {
        return e + "deg"
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var a = n(15), s = r(a), u = n(51), c = r(u), l = n(52), d = r(l), f = n(4), h = r(f), p = n(13), v = r(p),
        g = n(9), m = r(g), y = n(16), _ = r(y), b = n(22), w = r(b), x = n(23), k = r(x), T = n(0), S = r(T), C = n(1),
        E = r(C), M = window.btoa, A = window.atob, P = function () {
            function e(t, n, r) {
                (0, S.default)(this, e), this._selectorQuery = t, this._selector = n, this._single = r
            }
            return (0, E.default)(e, [{
                key: "fields", value: function (e, t) {
                    return this._selectorQuery._push(this._selector, this._single, e, t), this._selectorQuery
                }
            }, {
                key: "boundingClientRect", value: function (e) {
                    return this._selectorQuery._push(this._selector, this._single, {
                        id: !0,
                        dataset: !0,
                        rect: !0,
                        size: !0
                    }, e), this._selectorQuery
                }
            }, {
                key: "scrollOffset", value: function (e) {
                    return this._selectorQuery._push(this._selector, this._single, {
                        id: !0,
                        dataset: !0,
                        scrollOffset: !0
                    }, e), this._selectorQuery
                }
            }]), e
        }(), O = function (e) {
            var t = {};
            return e.id && (t.id = ""), e.dataset && (t.dataset = {}), e.rect && (t.left = 0, t.right = 0, t.top = 0, t.bottom = 0), e.size && (t.width = document.documentElement.clientWidth, t.height = document.documentElement.clientHeight), e.scrollOffset && (t.scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft || 0, t.scrollTop = document.documentElement.scrollTop || document.body.scrollTop || 0), t
        }, I = function (e, t) {
            var n = e.$$, r = {};
            if (t.id && (r.id = e.id || ""), t.dataset && (r.dataset = e.dataset || {}), t.rect || t.size) {
                var o = n.getBoundingClientRect();
                t.rect && (r.left = o.left, r.right = o.right, r.top = o.top, r.bottom = o.bottom), t.size && (r.width = o.width, r.height = o.height)
            }
            if (t.properties && t.properties.forEach(function (t) {
                var n = t.replace(/-([a-z])/g, function (e, t) {
                    return t.toUpperCase()
                });
                window.exparser.Component.hasPublicProperty(e, n) && (r[n] = e[n])
            }), t.scrollOffset) if (e.hasBehavior("wx-positioning-container")) {
                var i = e.getScrollPosition();
                r.scrollLeft = i.scrollLeft, r.scrollTop = i.scrollTop
            } else r.scrollLeft = 0, r.scrollTop = 0;
            return r
        }, R = function (e, t, n) {
            var r = [];
            t.forEach(function (e) {
                var t = e.selector, n = e.single, o = e.fields, i = null;
                if ("viewport" === t) i = O(o); else if (n) {
                    var a = window.__DOMTree__.querySelector(t);
                    i = a ? I(a, o) : null
                } else {
                    var s = window.__DOMTree__.querySelectorAll(t);
                    i = [];
                    for (var u = 0; u < s.length; u++) i.push(I(s[u], o))
                }
                r.push(i)
            }), n(r)
        }, N = function () {
            function e(t) {
                (0, S.default)(this, e), this._webviewId = t, this._queue = [], this._queueCb = []
            }
            return (0, E.default)(e, [{
                key: "select", value: function (e) {
                    return new P(this, e, !0)
                }
            }, {
                key: "selectAll", value: function (e) {
                    return new P(this, e, !1)
                }
            }, {
                key: "selectViewport", value: function () {
                    return new P(this, "viewport", !0)
                }
            }, {
                key: "_push", value: function (e, t, n, r) {
                    this._queue.push({selector: e, single: t, fields: n}), this._queueCb.push(r || null)
                }
            }, {
                key: "exec", value: function (e) {
                    var t = this;
                    R(this._webviewId, this._queue, function (n) {
                        var r = t._queueCb;
                        n.forEach(function (e, n) {
                            "function" == typeof r[n] && r[n].call(t, e)
                        }), "function" == typeof e && e.call(t, n)
                    })
                }
            }]), e
        }(), L = function (e) {
            function t(e) {
                (0, S.default)(this, t);
                var n = (0, w.default)(this, (t.__proto__ || (0, _.default)(t)).call(this, "APP-SERVICE-SDK:" + e));
                return n.type = "AppServiceSdkKnownError", n
            }
            return (0, k.default)(t, e), t
        }(Error), j = function (e) {
            function t(e) {
                (0, S.default)(this, t);
                var n = (0, w.default)(this, (t.__proto__ || (0, _.default)(t)).call(this, "APP-SERVICE-Engine:" + e));
                return n.type = "AppServiceEngineKnownError", n
            }
            return (0, k.default)(t, e), t
        }(Error), B = window.navigator.userAgent.toLowerCase(),
        D = /(iphone|ipad)/.test(B) ? "ios" : /android/.test(B) ? "android" : "", F = D && window.innerWidth || 375,
        V = window.devicePixelRatio || 2, U = function (e) {
            return e = e / 750 * F, e = Math.floor(e + 1e-4), 0 === e ? 1 !== V && "ios" == D ? .5 : 1 : e
        }, H = function (e) {
            for (var t = 0, n = 1, r = !1, o = !1, i = 0; i < e.length; ++i) {
                var a = e[i];
                a >= "0" && a <= "9" ? r ? (n *= .1, t += (a - "0") * n) : t = 10 * t + (a - "0") : "." === a ? r = !0 : "-" === a && (o = !0)
            }
            return o && (t = -t), U(t)
        }, q = /%%\?[+-]?\d+(\.\d+)?rpx\?%%/g, W = /(:|\s)[+-]?\d+(\.\d+)?rpx/g, G = {
            copyObj: function (e, t) {
                for (var n in t) !function (n) {
                    e.__defineGetter__(n, function () {
                        return Reporter.surroundThirdByTryCatch(t[n], "wx." + n)
                    })
                }(n)
            },
            getPlatform: function () {
                return D
            },
            transformRpx: function (e, t) {
                if ("String" !== this.getDataType(e)) return e;
                var n = void 0;
                return n = t ? e.match(W) : e.match(q), n && n.forEach(function (n) {
                    var r = H(n), o = (t ? n[0] : "") + r + "px";
                    e = e.replace(n, o)
                }), e
            },
            getRealRoute: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
                if (0 === t.indexOf("/")) return t.substr(1);
                if (0 === t.indexOf("./")) return this.getRealRoute(e, t.substr(2));
                var n, r, o = t.split("/");
                for (n = 0, r = o.length; n < r && ".." === o[n]; n++) ;
                o.splice(0, n);
                var i = e.length > 0 ? e.split("/") : [];
                return i.splice(i.length - n - 1, n + 1), i.concat(o).join("/")
            },
            animationToStyle: function (e) {
                var t = e.animates, n = e.option, r = void 0 === n ? {} : n, a = r.transformOrigin, s = r.transition;
                if (void 0 === s || void 0 === t) return {transformOrigin: "", transform: "", transition: ""};
                var u = t.filter(function (e) {
                    return "style" !== e.type
                }).map(function (e) {
                    var t = e.type, n = e.args;
                    switch (t) {
                        case"matrix":
                            return "matrix(" + n.join(",") + ")";
                        case"matrix3d":
                            return "matrix3d(" + n.join(",") + ")";
                        case"rotate":
                            return n = n.map(i), "rotate(" + n[0] + ")";
                        case"rotate3d":
                            return n[3] = i(n[3]), "rotate3d(" + n.join(",") + ")";
                        case"rotateX":
                            return n = n.map(i), "rotateX(" + n[0] + ")";
                        case"rotateY":
                            return n = n.map(i), "rotateY(" + n[0] + ")";
                        case"rotateZ":
                            return n = n.map(i), "rotateZ(" + n[0] + ")";
                        case"scale":
                            return "scale(" + n.join(",") + ")";
                        case"scale3d":
                            return "scale3d(" + n.join(",") + ")";
                        case"scaleX":
                            return "scaleX(" + n[0] + ")";
                        case"scaleY":
                            return "scaleY(" + n[0] + ")";
                        case"scaleZ":
                            return "scaleZ(" + n[0] + ")";
                        case"translate":
                            return n = n.map(o), "translate(" + n.join(",") + ")";
                        case"translate3d":
                            return n = n.map(o), "translate3d(" + n.join(",") + ")";
                        case"translateX":
                            return n = n.map(o), "translateX(" + n[0] + ")";
                        case"translateY":
                            return n = n.map(o), "translateY(" + n[0] + ")";
                        case"translateZ":
                            return n = n.map(o), "translateZ(" + n[0] + ")";
                        case"skew":
                            return n = n.map(i), "skew(" + n.join(",") + ")";
                        case"skewX":
                            return n = n.map(i), "skewX(" + n[0] + ")";
                        case"skewY":
                            return n = n.map(i), "skewY(" + n[0] + ")";
                        default:
                            return ""
                    }
                }).join(" "), c = t.filter(function (e) {
                    return "style" === e.type
                }).reduce(function (e, t) {
                    return e[t.args[0]] = t.args[1], e
                }, {});
                return {
                    style: c,
                    transformOrigin: a,
                    transform: u,
                    transitionProperty: ["transform"].concat((0, m.default)(c)).join(","),
                    transition: s.duration + "ms " + s.timingFunction + " " + s.delay + "ms"
                }
            },
            anyTypeToString: function (e) {
                var t = this.getDataType(e);
                if ("Array" == t || "Object" == t) try {
                    e = (0, v.default)(e)
                } catch (e) {
                    throw e.type = "AppServiceSdkKnownError", e
                } else e = "String" == t || "Number" == t || "Boolean" == t ? e.toString() : "Date" == t ? e.getTime().toString() : "Undefined" == t ? "undefined" : "Null" == t ? "null" : "";
                return {data: e, dataType: t}
            },
            stringToAnyType: function (e, t) {
                return e = "String" == t ? e : "Array" == t || "Object" == t ? JSON.parse(e) : "Number" == t ? parseFloat(e) : "Boolean" == t ? "true" == e : "Date" == t ? new Date(parseInt(e)) : "Undefined" == t ? void 0 : "Null" == t ? null : ""
            },
            getDataType: function (e) {
                return Object.prototype.toString.call(e).split(" ")[1].split("]")[0]
            },
            isPlainObject: function (e) {
                return "Object" === this.getDataType(e)
            },
            paramCheck: function (e, t) {
                var n, r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "parameter",
                    o = this.getDataType(t), i = this.getDataType(e);
                if (i != o) return r + " should be " + o + " instead of " + i + ";";
                switch (n = "", o) {
                    case"Object":
                        for (var a in t) n += this.paramCheck(e[a], t[a], r + "." + a);
                        break;
                    case"Array":
                        if (e.length < t.length) return r + " should have at least " + t.length + " item;";
                        for (var s = 0; s < t.length; ++s) n += this.paramCheck(e[s], t[s], r + "[" + s + "]")
                }
                return n
            },
            urlEncodeFormData: function (e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                if ("object" !== (void 0 === e ? "undefined" : (0, h.default)(e))) return e;
                var n = [];
                for (var r in e) if (e.hasOwnProperty(r)) if (t) try {
                    n.push(encodeURIComponent(r) + "=" + encodeURIComponent(e[r]))
                } catch (t) {
                    n.push(r + "=" + e[r])
                } else n.push(r + "=" + e[r]);
                return n.join("&")
            },
            addQueryStringToUrl: function (e, t) {
                if ("string" == typeof e && "object" === (void 0 === t ? "undefined" : (0, h.default)(t)) && (0, m.default)(t).length > 0) {
                    var n = e.split("?"), r = n[0], o = (n[1] || "").split("&").reduce(function (e, t) {
                        if ("string" == typeof t && t.length > 0) {
                            var n = t.split("="), r = n[0], o = n[1];
                            e[r] = o
                        }
                        return e
                    }, {}), i = (0, m.default)(t).reduce(function (e, n) {
                        return "object" === (0, h.default)(t[n]) ? e[encodeURIComponent(n)] = encodeURIComponent((0, v.default)(t[n])) : e[encodeURIComponent(n)] = encodeURIComponent(t[n]), e
                    }, {});
                    return r + "?" + this.urlEncodeFormData(this.assign(o, i))
                }
                return e
            },
            validateUrl: function (e) {
                return /^(http|https):\/\/.*/i.test(e)
            },
            assign: function () {
                return Array.prototype.slice.apply(arguments).reduce(function (e, t) {
                    for (var n in t) e[n] = t[n];
                    return e
                }, {})
            },
            encodeUrlQuery: function (e) {
                if ("string" == typeof e) {
                    var t = e.split("?"), n = t[0], r = (t[1] || "").split("&").reduce(function (e, t) {
                        if ("string" == typeof t && t.length > 0) {
                            var n = t.split("="), r = n[0], o = n[1];
                            e[r] = o
                        }
                        return e
                    }, {}), o = [];
                    for (var i in r) r.hasOwnProperty(i) && o.push(i + "=" + encodeURIComponent(r[i]));
                    return o.length > 0 ? n + "?" + o.join("&") : e
                }
                return e
            },
            addHTMLSuffix: function (e) {
                if ("string" != typeof e) return e;
                var t = e.split("?");
                return t[0] += ".html", void 0 !== t[1] ? t[0] + "?" + t[1] : t[0]
            },
            arrayBufferToBase64: function (e) {
                for (var t = "", n = new Uint8Array(e), r = n.byteLength, o = 0; o < r; o++) t += String.fromCharCode(n[o]);
                return M(t)
            },
            base64ToArrayBuffer: function (e) {
                for (var t = A(e), n = t.length, r = new Uint8Array(n), o = 0; o < n; o++) r[o] = t.charCodeAt(o);
                return r.buffer
            },
            blobToArrayBuffer: function (e, t) {
                var n = new FileReader;
                n.onload = function () {
                    t(this.result)
                }, n.readAsArrayBuffer(e)
            },
            convertObjectValueToString: function (e) {
                return (0, m.default)(e).reduce(function (t, n) {
                    return "string" == typeof e[n] ? t[n] = e[n] : "number" == typeof e[n] ? t[n] = e[n] + "" : t[n] = Object.prototype.toString.apply(e[n]), t
                }, {})
            },
            renameProperty: function (e, t, n) {
                !1 !== this.isPlainObject(e) && t != n && e.hasOwnProperty(t) && (e[n] = e[t], delete e[t])
            },
            toArray: function (e) {
                if (Array.isArray(e)) {
                    for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
                    return n
                }
                return (0, d.default)(e)
            },
            canIUse: function (e, t) {
                return !0
            },
            transWxmlToHtml: function (e) {
                if ("string" != typeof e) return e;
                var t = e.split("?");
                return t[0] += ".html", void 0 !== t[1] ? t[0] + "?" + t[1] : t[0]
            },
            removeHtmlSuffixFromUrl: function (e) {
                return "string" == typeof e ? -1 !== e.indexOf("?") ? e.replace(/\.html\?/, "?") : e.replace(/\.html$/, "") : e
            },
            AppServiceSdkKnownError: L,
            AppServiceEngineKnownError: j,
            defaultRunningStatus: "active",
            wxQuerySelector: N,
            safeInvoke: function () {
                var e = void 0, t = Array.prototype.slice.call(arguments), n = t[0];
                t = t.slice(1);
                try {
                    var r = Date.now();
                    e = this[n].apply(this, t);
                    var o = Date.now() - r;
                    o > 1e3 && Reporter.slowReport({
                        key: "pageInvoke",
                        cost: o,
                        extend: "at " + this.__route__ + " page " + n + " function"
                    })
                } catch (e) {
                    Reporter.thirdErrorReport({error: e, extend: 'at "' + this.__route__ + '" page ' + n + " function"})
                }
                return e
            },
            isEmptyObject: function (e) {
                for (var t in e) if (e.hasOwnProperty(t)) return !1;
                return !0
            },
            noop: function () {
            },
            def: function (e, t, n, r) {
                (0, c.default)(e, t, {value: n, enumerable: !!r, writable: !0, configurable: !0})
            },
            error: function (e, t) {
                console.group(new Date + " " + e), console.error(t), console.groupEnd()
            },
            warn: function (e, t) {
                this.error(e, t)
            },
            info: function (e) {
                __wxConfig__ && __wxConfig__.debug && console.info(e)
            },
            publish: function () {
                var e = Array.prototype.slice.call(arguments), t = {options: {timestamp: Date.now()}};
                e[1] ? e[1].options = (0, s.default)(e[1].options || {}, t.options) : e[1] = t, ServiceJSBridge.publish.apply(ServiceJSBridge, e)
            }
        };
    t.default = G
}, function (e, t) {
    var n = e.exports = "undefined" != typeof window && window.Math == Math ? window : "undefined" != typeof self && self.Math == Math ? self : Function("return this")();
    "number" == typeof __g && (__g = n)
}, function (e, t, n) {
    e.exports = {default: n(147), __esModule: !0}
}, function (e, t, n) {
    var r = n(8), o = n(2), i = n(26), a = n(18), s = function (e, t, n) {
        var u, c, l, d = e & s.F, f = e & s.G, h = e & s.S, p = e & s.P, v = e & s.B, g = e & s.W,
            m = f ? o : o[t] || (o[t] = {}), y = m.prototype, _ = f ? r : h ? r[t] : (r[t] || {}).prototype;
        f && (n = t);
        for (u in n) (c = !d && _ && void 0 !== _[u]) && u in m || (l = c ? _[u] : n[u], m[u] = f && "function" != typeof _[u] ? n[u] : v && c ? i(l, r) : g && _[u] == l ? function (e) {
            var t = function (t, n, r) {
                if (this instanceof e) {
                    switch (arguments.length) {
                        case 0:
                            return new e;
                        case 1:
                            return new e(t);
                        case 2:
                            return new e(t, n)
                    }
                    return new e(t, n, r)
                }
                return e.apply(this, arguments)
            };
            return t.prototype = e.prototype, t
        }(l) : p && "function" == typeof l ? i(Function.call, l) : l, p && ((m.virtual || (m.virtual = {}))[u] = l, e & s.R && y && !y[u] && a(y, u, l)))
    };
    s.F = 1, s.G = 2, s.S = 4, s.P = 8, s.B = 16, s.W = 32, s.U = 64, s.R = 128, e.exports = s
}, function (e, t, n) {
    var r = n(12), o = n(83), i = n(58), a = Object.defineProperty;
    t.f = n(14) ? Object.defineProperty : function (e, t, n) {
        if (r(e), t = i(t, !0), r(n), o) try {
            return a(e, t, n)
        } catch (e) {
        }
        if ("get" in n || "set" in n) throw TypeError("Accessors not supported!");
        return "value" in n && (e[t] = n.value), e
    }
}, function (e, t, n) {
    var r = n(27);
    e.exports = function (e) {
        if (!r(e)) throw TypeError(e + " is not an object!");
        return e
    }
}, function (e, t, n) {
    e.exports = {default: n(138), __esModule: !0}
}, function (e, t, n) {
    e.exports = !n(28)(function () {
        return 7 != Object.defineProperty({}, "a", {
            get: function () {
                return 7
            }
        }).a
    })
}, function (e, t, n) {
    e.exports = {default: n(141), __esModule: !0}
}, function (e, t, n) {
    e.exports = {default: n(164), __esModule: !0}
}, function (e, t) {
    function n(e, t) {
        if ("string" != typeof e) throw new TypeError("String expected");
        t || (t = document);
        var n = /<([\w:]+)/.exec(e);
        if (!n) return t.createTextNode(e);
        e = e.replace(/^\s+|\s+$/g, "");
        var r = n[1];
        if ("body" == r) {
            var o = t.createElement("html");
            return o.innerHTML = e, o.removeChild(o.lastChild)
        }
        var a = i[r] || i._default, s = a[0], u = a[1], c = a[2], o = t.createElement("div");
        for (o.innerHTML = u + e + c; s--;) o = o.lastChild;
        if (o.firstChild == o.lastChild) return o.removeChild(o.firstChild);
        for (var l = t.createDocumentFragment(); o.firstChild;) l.appendChild(o.removeChild(o.firstChild));
        return l
    }
    e.exports = n;
    var r, o = !1;
    "undefined" != typeof document && (r = document.createElement("div"), r.innerHTML = '  <link/><table></table><a href="/a">a</a><input type="checkbox"/>', o = !r.getElementsByTagName("link").length, r = void 0);
    var i = {
        legend: [1, "<fieldset>", "</fieldset>"],
        tr: [2, "<table><tbody>", "</tbody></table>"],
        col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
        _default: o ? [1, "X<div>", "</div>"] : [0, "", ""]
    };
    i.td = i.th = [3, "<table><tbody><tr>", "</tr></tbody></table>"], i.option = i.optgroup = [1, '<select multiple="multiple">', "</select>"], i.thead = i.tbody = i.colgroup = i.caption = i.tfoot = [1, "<table>", "</table>"], i.polyline = i.ellipse = i.polygon = i.circle = i.text = i.line = i.path = i.rect = i.g = [1, '<svg xmlns="http://www.w3.org/2000/svg" version="1.1">', "</svg>"]
}, function (e, t, n) {
    var r = n(11), o = n(34);
    e.exports = n(14) ? function (e, t, n) {
        return r.f(e, t, o(1, n))
    } : function (e, t, n) {
        return e[t] = n, e
    }
}, function (e, t) {
    var n = {}.hasOwnProperty;
    e.exports = function (e, t) {
        return n.call(e, t)
    }
}, function (e, t, n) {
    var r = n(86), o = n(55);
    e.exports = function (e) {
        return r(o(e))
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o() {
        return T++
    }
    function i() {
        return k || (k = new x.default), k
    }
    function a(e, t, n) {
        var r = function r(o) {
            e.removeEventListener(t, r, !1), n.call(e, o)
        };
        e.addEventListener(t, r, !1)
    }
    function s(e) {
        return e.replace(/\.html/, "").replace(/^\.?\//, "")
    }
    function u(e, t, n) {
        var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : document.body,
            o = document.createElement("iframe");
        return o.setAttribute("src", t), o.setAttribute("id", e), o.setAttribute("seamless", "seamless"), o.setAttribute("sandbox", "allow-scripts allow-same-origin allow-forms allow-modals"), o.setAttribute("frameborder", "0"), o.setAttribute("width", n ? "0" : "100%"), o.setAttribute("height", n ? "0" : "100%"), n && o.setAttribute("style", "width:0;height:0;border:0; display:none;"), r.appendChild(o), o
    }
    function c(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : document.body,
            n = document.createElement("iframe");
        return n.setAttribute("id", e), n.setAttribute("seamless", "seamless"), n.setAttribute("sandbox", "allow-scripts allow-same-origin allow-forms allow-modals"), n.setAttribute("frameborder", "0"), n.setAttribute("width", "0"), n.setAttribute("height", "0"), n.setAttribute("style", "width:0;height:0;border:0; display:none;"), t.appendChild(n), n
    }
    function l(e, t) {
        var n = document.querySelector("#" + e);
        return n.setAttribute("src", t), n.setAttribute("width", "100%"), n.setAttribute("height", "100%"), n.setAttribute("style", ""), n
    }
    function d(e) {
        var t = e.split(/\?/);
        return {path: t[0], query: b.default.parse(t[1])}
    }
    function f(e) {
        var t = window.__wxConfig__.pages, n = d(e), r = n.path;
        return -1 !== t.indexOf(r)
    }
    function h(e) {
        var t = window.__wxConfig__.tabBar && window.__wxConfig__.tabBar.list;
        if (t) {
            return -1 !== t.map(function (e) {
                return e.pagePath
            }).indexOf(e)
        }
    }
    function p() {
        location.reload()
    }
    function v() {
        var e = location.protocol + "//" + location.host + location.pathname;
        "function" == typeof location.replace ? location.replace(e) : "function" == typeof history.replaceState ? (window.history.replaceState({}, "", e), location.reload()) : (location.hash = "#", location.reload())
    }
    function g(e) {
        for (var t = atob(e.split(",")[1]), n = e.split(",")[0].split(":")[1].split(";")[0], r = new ArrayBuffer(t.length), o = new Uint8Array(r), i = 0; i < t.length; i++) o[i] = t.charCodeAt(i);
        var a = new Blob([r], {type: n});
        return URL.createObjectURL(a)
    }
    function m(e) {
        for (var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0, n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "", r = [], o = t; o <= e; o++) r.push(o < 10 ? "0" + o + n : "" + o + n);
        return r
    }
    function y(e) {
        return Array.isArray(e) ? e.map(function (e) {
            return Number(e)
        }) : "string" == typeof e ? Number(e) : e
    }
    Object.defineProperty(t, "__esModule", {value: !0}), t.uid = o, t.getBus = i, t.once = a, t.normalize = s, t.createFrame = u, t.createWebview = c, t.updateWebView = l, t.parsePath = d, t.validPath = f, t.isTabbar = h, t.reload = p, t.navigateHome = v, t.dataURItoBlob = g, t.range = m, t.toNumber = y;
    var _ = n(161), b = r(_), w = n(3), x = r(w), k = null, T = 0
}, function (e, t, n) {
    "use strict";
    t.__esModule = !0;
    var r = n(4), o = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(r);
    t.default = function (e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" !== (void 0 === t ? "undefined" : (0, o.default)(t)) && "function" != typeof t ? e : t
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    t.__esModule = !0;
    var o = n(168), i = r(o), a = n(5), s = r(a), u = n(4), c = r(u);
    t.default = function (e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + (void 0 === t ? "undefined" : (0, c.default)(t)));
        e.prototype = (0, s.default)(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (i.default ? (0, i.default)(e, t) : e.__proto__ = t)
    }
}, function (e, t, n) {
    e.exports = {default: n(195), __esModule: !0}
}, function (e, t, n) {
    function r(e, t) {
        if (!(this instanceof r)) return new r(e, t);
        if (!e) throw new Error("element required");
        if (!t) throw new Error("object required");
        this.el = e, this.obj = t, this._events = {}
    }
    function o(e) {
        var t = e.split(/ +/);
        return {name: t.shift(), selector: t.join(" ")}
    }
    try {
        var i = n(104)
    } catch (e) {
        var i = n(104)
    }
    try {
        var a = n(105)
    } catch (e) {
        var a = n(105)
    }
    e.exports = r, r.prototype.sub = function (e, t, n) {
        this._events[e] = this._events[e] || {}, this._events[e][t] = n
    }, r.prototype.bind = function (e, t) {
        function n() {
            var e = [].slice.call(arguments).concat(l);
            u[t].apply(u, e)
        }
        var r = o(e), s = this.el, u = this.obj, c = r.name, t = t || "on" + c, l = [].slice.call(arguments, 2);
        return r.selector ? n = a.bind(s, r.selector, c, n) : i.bind(s, c, n), this.sub(c, t, n), n
    }, r.prototype.unbind = function (e, t) {
        if (0 == arguments.length) return this.unbindAll();
        if (1 == arguments.length) return this.unbindAllOf(e);
        var n = this._events[e];
        if (n) {
            var r = n[t];
            r && i.unbind(this.el, e, r)
        }
    }, r.prototype.unbindAll = function () {
        for (var e in this._events) this.unbindAllOf(e)
    }, r.prototype.unbindAllOf = function (e) {
        var t = this._events[e];
        if (t) for (var n in t) this.unbind(e, n)
    }
}, function (e, t, n) {
    var r = n(56);
    e.exports = function (e, t, n) {
        if (r(e), void 0 === t) return e;
        switch (n) {
            case 1:
                return function (n) {
                    return e.call(t, n)
                };
            case 2:
                return function (n, r) {
                    return e.call(t, n, r)
                };
            case 3:
                return function (n, r, o) {
                    return e.call(t, n, r, o)
                }
        }
        return function () {
            return e.apply(t, arguments)
        }
    }
}, function (e, t) {
    e.exports = function (e) {
        return "object" == typeof e ? null !== e : "function" == typeof e
    }
}, function (e, t) {
    e.exports = function (e) {
        try {
            return !!e()
        } catch (e) {
            return !0
        }
    }
}, function (e, t, n) {
    var r = n(85), o = n(63);
    e.exports = Object.keys || function (e) {
        return r(e, o)
    }
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    var r = n(5), o = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(r), i = function () {
    }, a = null;
    i.prototype = (0, o.default)(Object.prototype, {
        constructor: {
            value: i,
            writable: !0,
            configurable: !0
        }
    }), i._setGlobalOptionsGetter = function (e) {
        a = e
    }, i.create = function (e) {
        var t = (0, o.default)(i.prototype);
        return t.empty = !0, t._type = e, t._arr = [], t._index = 0, t
    }, i.prototype.add = function (e) {
        var t = this._index++;
        return this._arr.push({id: t, func: e}), this.empty = !1, t
    }, i.prototype.remove = function (e) {
        var t = this._arr, n = 0;
        if ("function" == typeof e) {
            for (n = 0; n < t.length; n++) if (t[n].func === e) return t.splice(n, 1), this.empty = !t.length, !0
        } else for (n = 0; n < t.length; n++) if (t[n].id === e) return t.splice(n, 1), this.empty = !t.length, !0;
        return !1
    }, i.prototype.call = function (e, t) {
        for (var n = this._arr, r = !1, o = 0; o < n.length; o++) {
            !1 === c(this._type, n[o].func, e, t) && (r = !0)
        }
        if (r) return !1
    };
    var s = i.create(), u = function (e, t) {
        if (!t.type || !1 !== s.call(null, [e, t])) {
            if (console.error(t.message), a().throwGlobalError) throw e;
            console.error(e.stack)
        }
    }, c = function (e, t, n, r) {
        try {
            return t.apply(n, r)
        } catch (i) {
            var o = "Exparser " + (e || "Error Listener") + " Error @ ";
            n && (o += n.is), o += "#" + (t.name || "(anonymous)"), u(i, {
                message: o,
                type: e,
                element: n,
                method: t,
                args: r
            })
        }
    };
    i.safeCallback = c, i.addGlobalErrorListener = function (e) {
        return s.add(e)
    }, i.removeGlobalErrorListener = function (e) {
        return s.remove(e)
    }, t.default = i
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(15), i = r(o), a = n(4), s = r(a), u = n(16), c = r(u), l = function (e) {
        return "[object String]" === Object.prototype.toString.call(e)
    };
    t.default = {
        isString: l, isArray: function (e) {
            return Array.isArray ? Array.isArray(e) : "[object Array]" === Object.prototype.toString.call(e)
        }, getPrototype: function (e) {
            return c.default ? (0, c.default)(e) : e.__proto__ ? e.__proto__ : e.constructor ? e.constructor.prototype : void 0
        }, isObject: function (e) {
            return "object" === (void 0 === e ? "undefined" : (0, s.default)(e)) && null !== e
        }, isEmptyObject: function (e) {
            for (var t in e) return !1;
            return !0
        }, isVirtualNode: function (e) {
            return e && "WxVirtualNode" === e.type
        }, isVirtualText: function (e) {
            return e && "WxVirtualText" === e.type
        }, isUndefined: function (e) {
            return "[object Undefined]" === Object.prototype.toString.call(e)
        }, uuid: function () {
            var e = function () {
                return Math.floor(65536 * (1 + Math.random())).toString(16).substring(1)
            };
            return e() + e() + "-" + e() + "-" + e() + "-" + e() + "-" + e() + e() + e()
        }, getDataType: function (e) {
            return Object.prototype.toString.call(e).split(" ")[1].split("]")[0]
        }, getPageConfig: function () {
            var e = {};
            if (window.__wxConfig && window.__wxConfig.window) e = window.__wxConfig.window; else {
                var t = {};
                window.__wxConfig && window.__wxConfig.global && window.__wxConfig.global.window && (t = window.__wxConfig.global.window);
                var n = {};
                window.__wxConfig && window.__wxConfig.page && window.__wxConfig.page[window.__route__] && window.__wxConfig.page[window.__route__].window && (n = window.__wxConfig.page[window.__route__].window), e = (0, i.default)({}, t, n)
            }
            return e
        }
    }
}, function (e, t, n) {
    "use strict";
    var r = n(122)(!0);
    n(82)(String, "String", function (e) {
        this._t = String(e), this._i = 0
    }, function () {
        var e, t = this._t, n = this._i;
        return n >= t.length ? {value: void 0, done: !0} : (e = r(t, n), this._i += e.length, {value: e, done: !1})
    })
}, function (e, t) {
    e.exports = {}
}, function (e, t) {
    e.exports = function (e, t) {
        return {enumerable: !(1 & e), configurable: !(2 & e), writable: !(4 & e), value: t}
    }
}, function (e, t) {
    var n = {}.toString;
    e.exports = function (e) {
        return n.call(e).slice(8, -1)
    }
}, function (e, t, n) {
    var r = n(55);
    e.exports = function (e) {
        return Object(r(e))
    }
}, function (e, t, n) {
    var r = null;
    !function () {
        for (var e = ["webkitTransform", "MozTransform", "msTransform", "OTransform", "transform"], t = document.createElement("p"), n = 0; n < e.length; n++) if (null != t.style[e[n]]) {
            r = e[n];
            break
        }
    }();
    var o = null;
    !function () {
        var e = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd",
            msTransition: "MSTransitionEnd",
            transition: "transitionend"
        }, t = document.createElement("p");
        for (var n in e) if (null != t.style[n]) {
            o = e[n];
            break
        }
    }(), t.transitionend = o, t.transition = n(180), t.transform = r, t.touchAction = n(181), t.has3d = n(182)
}, function (e, t, n) {
    "use strict";
    function r() {
        ServiceJSBridge.invoke.apply(ServiceJSBridge, arguments)
    }
    function o() {
        ServiceJSBridge.on.apply(ServiceJSBridge, arguments)
    }
    function i() {
        var e = Array.prototype.slice.call(arguments);
        e[1] = {data: e[1], options: {timestamp: Date.now()}}, ServiceJSBridge.publish.apply(ServiceJSBridge, e)
    }
    function a() {
        var e = Array.prototype.slice.call(arguments), t = e[1];
        e[1] = function (e, n) {
            var r = e.data;
            "function" == typeof t && t(r, n)
        }, ServiceJSBridge.subscribe.apply(ServiceJSBridge, e)
    }
    function s(e, t, n) {
        var r = {};
        for (var o in t) "function" == typeof t[o] && (r[o] = Reporter.surroundThirdByTryCatch(t[o], "at api " + e + " " + o + " callback function"), delete t[o]);
        var i = {};
        for (var a in n) "function" == typeof n[a] && (i[a] = Reporter.surroundThirdByTryCatch(n[a], "at api " + e + " " + a + " callback function"));
        var s = {};
        s.sdkName = e, s.args = t;
        var u = m[e](s);
        !function (t) {
            t.errMsg = t.errMsg || e + ":ok";
            var n = 0 === t.errMsg.indexOf(e + ":ok"), o = 0 === t.errMsg.indexOf(e + ":cancel"),
                a = 0 === t.errMsg.indexOf(e + ":fail");
            if ("function" == typeof i.beforeAll && i.beforeAll(t), n) "function" == typeof i.beforeSuccess && i.beforeSuccess(t), "function" == typeof r.success && r.success(t), "function" == typeof i.afterSuccess && i.afterSuccess(t); else if (o) t.errMsg = t.errMsg.replace(e + ":cancel", e + ":fail cancel"), "function" == typeof r.fail && r.fail(t), "function" == typeof i.beforeCancel && i.beforeCancel(t), "function" == typeof r.cancel && r.cancel(t), "function" == typeof i.afterCancel && i.afterCancel(t); else if (a) {
                "function" == typeof i.beforeFail && i.beforeFail(t), "function" == typeof r.fail && r.fail(t);
                var s = !0;
                "function" == typeof i.afterFail && (s = i.afterFail(t)), !1 !== s && Reporter.reportIDKey({key: e + "_fail"})
            }
            "function" == typeof r.complete && r.complete(t), "function" == typeof i.afterAll && i.afterAll(t)
        }(u.msg), Reporter.reportIDKey({key: e})
    }
    function u(e, t, n) {
        var o = {};
        for (var i in t) "function" == typeof t[i] && (o[i] = Reporter.surroundThirdByTryCatch(t[i], "at api " + e + " " + i + " callback function"), delete t[i]);
        var a = {};
        for (var s in n) "function" == typeof n[s] && (a[s] = Reporter.surroundThirdByTryCatch(n[s], "at api " + e + " " + s + " callback function"));
        r(e, t, function (t) {
            t.errMsg = t.errMsg || e + ":ok";
            var n = 0 === t.errMsg.indexOf(e + ":ok"), r = 0 === t.errMsg.indexOf(e + ":cancel"),
                i = 0 === t.errMsg.indexOf(e + ":fail");
            if ("function" == typeof a.beforeAll && a.beforeAll(t), n) "function" == typeof a.beforeSuccess && a.beforeSuccess(t), "function" == typeof o.success && o.success(t), "function" == typeof a.afterSuccess && a.afterSuccess(t); else if (r) t.errMsg = t.errMsg.replace(e + ":cancel", e + ":fail cancel"), "function" == typeof o.fail && o.fail(t), "function" == typeof a.beforeCancel && a.beforeCancel(t), "function" == typeof o.cancel && o.cancel(t), "function" == typeof a.afterCancel && a.afterCancel(t); else if (i) {
                "function" == typeof a.beforeFail && a.beforeFail(t), "function" == typeof o.fail && o.fail(t);
                var s = !0;
                "function" == typeof a.afterFail && (s = a.afterFail(t)), !1 !== s && Reporter.reportIDKey({key: e + "_fail"})
            }
            "function" == typeof o.complete && o.complete(t), "function" == typeof a.afterAll && a.afterAll(t)
        }), Reporter.reportIDKey({key: e})
    }
    function c() {
    }
    function l(e, t) {
        o(e, Reporter.surroundThirdByTryCatch(t, "at api " + e + " callback function"))
    }
    function d(e, t, n) {
        var r = v.default.paramCheck(t, n);
        return !r || (f(e, t, "parameter error: " + r), !1)
    }
    function f(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
            n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "", r = e + ":fail " + n;
        console.error(r);
        var o = Reporter.surroundThirdByTryCatch(t.fail || c, "at api " + e + " fail callback function"),
            i = Reporter.surroundThirdByTryCatch(t.complete || c, "at api " + e + " complete callback function");
        o({errMsg: r}), i({errMsg: r})
    }
    function h(e, t, n) {
        var r = t.replace(/\.html\?.*|\.html$/, "");
        return -1 !== __wxConfig.pages.indexOf(r) || (f(e, n, 'url "' + v.default.removeHtmlSuffixFromUrl(t) + '" is not in app.json'), !1)
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var p = n(7), v = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(p), g = n(220), m = function (e) {
        if (e && e.__esModule) return e;
        var t = {};
        if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
        return t.default = e, t
    }(g);
    t.default = {
        invoke: r,
        on: o,
        publish: i,
        subscribe: a,
        invokeMethod: u,
        invokeMethodSync: s,
        onMethod: l,
        noop: c,
        beforeInvoke: d,
        beforeInvokeFail: f,
        checkUrlInConfig: h
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(4), i = r(o), a = n(5), s = r(a), u = n(79), c = function (e) {
        if (e && e.__esModule) return e;
        var t = {};
        if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
        return t.default = e, t
    }(u), l = n(50), d = r(l), f = function () {
    };
    f.prototype = (0, s.default)(Object.prototype, {constructor: {value: f, writable: !0, configurable: !0}});
    var h = null;
    f._setCompnentSystem = function (e) {
        h = e
    }, f.initialize = function (e) {
        e.__attached = !1, e.parentNode = null, e.childNodes = [], e.__slotParent = null, e.__slotChildren = e.childNodes, e.__subtreeObserversCount = 0
    };
    var p = function (e) {
        if (!e.parentNode || e.parentNode.__attached) {
            !function e(t) {
                t.__attached = !0, t.shadowRoot instanceof f && e(t.shadowRoot);
                var n = t.childNodes;
                if (n) for (var r = 0; r < n.length; r++) e(n[r])
            }(e);
            !function e(t) {
                t.__lifeTimeFuncs && h._callLifeTimeFuncs(t, "attached"), t.shadowRoot instanceof f && e(t.shadowRoot);
                var n = t.childNodes;
                if (n) for (var r = 0; r < n.length; r++) e(n[r])
            }(e)
        }
    }, v = function (e) {
        if (e.__attached) {
            !function e(t) {
                t.__attached = !1, t.shadowRoot instanceof f && e(t.shadowRoot);
                var n = t.childNodes;
                if (n) for (var r = 0; r < n.length; r++) e(n[r])
            }(e);
            !function e(t) {
                t.__lifeTimeFuncs && h._callLifeTimeFuncs(t, "detached"), t.shadowRoot instanceof f && e(t.shadowRoot);
                var n = t.childNodes;
                if (n) for (var r = 0; r < n.length; r++) e(n[r])
            }(e)
        }
    }, g = function (e, t, n) {
        if (e.__childObservers && !e.__childObservers.empty || e.__subtreeObserversCount) {
            var r = null;
            r = "add" === t ? {type: "childList", target: e, addedNodes: [n]} : {
                type: "childList",
                target: e,
                removedNodes: [n]
            }, d.default._callObservers(e, "__childObservers", r)
        }
    }, m = function (e, t, n, r) {
        var o = e;
        if (o instanceof f) {
            for (; o.__virtual;) {
                var i = o.__slotParent;
                if (!i) return;
                if (t && !n) {
                    var a = i.__slotChildren.indexOf(o);
                    n = i.__slotChildren[a + 1]
                }
                o = i
            }
            o instanceof f && (o = o.__domElement)
        }
        var s = null;
        if (t) if (t.__virtual) {
            var u = document.createDocumentFragment();
            !function e(t) {
                for (var n = 0; n < t.__slotChildren.length; n++) {
                    var r = t.__slotChildren[n];
                    r.__virtual ? e(r) : u.appendChild(r.__domElement)
                }
            }(t), s = u
        } else s = t.__domElement;
        var c = null;
        if (n) if (n.__virtual) {
            var l = e, d = 0;
            if (r) {
                !function e(t) {
                    for (var n = 0; n < t.__slotChildren.length; n++) {
                        var r = t.__slotChildren[n];
                        r.__virtual ? e(r) : o.removeChild(r.__domElement)
                    }
                }(n), r = !1, d = e.__slotChildren.indexOf(n) + 1
            } else l = n.__slotParent, d = l.__slotChildren.indexOf(n);
            if (t) {
                n = null;
                for (var h = l; !(n = function e(t, n) {
                    for (; n < t.__slotChildren.length; n++) {
                        var r = t.__slotChildren[n];
                        if (!r.__virtual) return r;
                        var o = e(r, 0);
                        if (o) return o
                    }
                }(h, d)) && h.__virtual; h = h.__slotParent) d = h.__slotParent.__slotChildren.indexOf(h) + 1;
                n && (c = n.__domElement)
            }
        } else c = n.__domElement;
        r ? s ? o.replaceChild(s, c) : o.removeChild(c) : s && (c ? o.insertBefore(s, c) : o.appendChild(s))
    }, y = function (e, t, n, r) {
        var o = -1;
        if (n && (o = e.childNodes.indexOf(n)) < 0) return !1;
        r && (t === n ? r = !1 : (e.__subtreeObserversCount && d.default._updateSubtreeCaches(n, -e.__subtreeObserversCount), n.parentNode = null, n.__slotParent = null));
        var i = null, a = e;
        if (e.__slots && (a = e.__slots[""]), t) {
            i = t.parentNode, t.parentNode = e, t.__slotParent = a;
            var s = e.__subtreeObserversCount;
            if (i) {
                var u = i.childNodes.indexOf(t);
                i.childNodes.splice(u, 1), i === e && u < o && o--, s -= i.__subtreeObserversCount
            }
            s && d.default._updateSubtreeCaches(t, s)
        }
        return m(a, t, n, r), -1 === o && (o = e.childNodes.length), t ? e.childNodes.splice(o, r ? 1 : 0, t) : e.childNodes.splice(o, r ? 1 : 0), r && (v(n), g(e, "remove", n)), t && (i && (v(t), g(i, "remove", t)), p(t), g(e, "add", t)), !0
    }, _ = function (e, t, n, r) {
        var o = r ? n : t;
        return y(e, t, n, r) ? o : null
    };
    f._attachShadowRoot = function (e, t) {
        m(e, t, null, !1)
    }, f.appendChild = function (e, t) {
        return _(e, t, null, !1)
    }, f.insertBefore = function (e, t, n) {
        return _(e, t, n, !1)
    }, f.removeChild = function (e, t) {
        return _(e, null, t, !0)
    }, f.replaceChild = function (e, t, n) {
        return _(e, t, n, !0)
    }, f.replaceDocumentElement = function (e, t) {
        e.__attached || (t.parentNode.replaceChild(e.__domElement, t), p(e))
    };
    var b = function (e, t) {
        var n = e.match(/^(#[_a-zA-Z][-_a-zA-Z0-9:]*|)((?:\.-?[_a-zA-Z][-_a-zA-Z0-9]*)+|)$/);
        if (!n) return null;
        var r = n[1].slice(1), o = n[2].split(".");
        return o.shift(), r || o.length ? {id: r, classes: o, relation: t || ""} : null
    };
    f.parseSelector = function (e) {
        for (var t = e.split(","), n = [], r = 0; r < t.length; r++) {
            for (var o = t[r].split(/( |\t|>)/g), i = [], a = "", s = 0; s < o.length; s++) {
                var u = o[s];
                if (u && " " !== u && "\t" !== u) if (">" !== u) {
                    var c = b(u, a);
                    if (a = "", !c) break;
                    i.push(c)
                } else {
                    if ("" !== a) break;
                    a = "child"
                }
            }
            s === o.length && i.length && n.push(i)
        }
        return n.length ? n : null
    };
    var w = f.parseSelector;
    f.prototype.appendChild = function (e) {
        return _(this, e, null, !1)
    }, f.prototype.insertBefore = function (e, t) {
        return _(this, e, t, !1)
    }, f.prototype.removeChild = function (e) {
        return _(this, null, e, !0)
    }, f.prototype.replaceChild = function (e, t) {
        return _(this, e, t, !0)
    }, f.prototype.triggerEvent = function (e, t, n) {
        c.triggerEvent(this, e, t, n)
    }, f.prototype.addListener = function (e, t) {
        c.addListenerToElement(this, e, t)
    }, f.prototype.removeListener = function (e, t) {
        c.removeListenerFromElement(this, e, t)
    }, f.prototype.hasBehavior = function (e) {
        return !!this.__behavior && this.__behavior.hasBehavior(e)
    };
    var x = function e(t, n, r, o, i, a) {
        var s = r[o], u = !0;
        s.id && s.id !== n.__id && (u = !1);
        for (var c = s.classes, l = 0; u && l < c.length; l++) n.classList.contains(c[l]) || (u = !1);
        if (u && 0 === o) return !0;
        if (n === t) return !1;
        for (var d = i ? n.__wxSlotParent : n.parentNode; d && d.__virtual;) {
            if (d === t) return !1;
            d = i ? d.__wxSlotParent : d.parentNode
        }
        return !!d && (u ? e(t, d, r, o - 1, i, "" === s.relation) : !!a && e(t, d, r, o, i, !0))
    }, k = function (e, t, n, r) {
        if (n.__virtual) return !1;
        for (var o = 0; o < e.length; o++) {
            var i = e[o];
            if (x(t, n, i, i.length - 1, r, !1)) return !0
        }
        return !1
    }, T = function e(t, n, r, o, i, a) {
        if (k(n, r, o, i) && (t.push(o), a)) return !0;
        for (var s = i ? o.__wxSlotChildren : o.childNodes, u = 0; u < s.length; u++) if (s[u] instanceof f && e(t, n, r, s[u], i, a) && a) return !0;
        return !1
    };
    f.prototype.querySelector = function (e, t) {
        var n = "object" === (void 0 === e ? "undefined" : (0, i.default)(e)) ? e : w(e);
        if (!n) return null;
        var r = [];
        return T(r, n, this, this, t, !0), r[0] || null
    }, t.default = f
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = {
        PATCH_TYPE: {
            NONE: 0,
            TEXT: 1,
            VNODE: 2,
            PROPS: 3,
            REORDER: 4,
            INSERT: 5,
            REMOVE: 6
        },
        WX_KEY: "wxKey",
        ATTRIBUTE_NAME: ["class", "style"],
        RPX_RATE: 20,
        BASE_DEVICE_WIDTH: 750,
        INLINE_STYLE: ["placeholderStyle", "hoverStyle", "style"]
    }
}, function (e, t, n) {
    n(127);
    for (var r = n(8), o = n(18), i = n(33), a = n(6)("toStringTag"), s = ["NodeList", "DOMTokenList", "MediaList", "StyleSheetList", "CSSRuleList"], u = 0; u < 5; u++) {
        var c = s[u], l = r[c], d = l && l.prototype;
        d && !d[a] && o(d, a, c), i[c] = i.Array
    }
}, function (e, t) {
    e.exports = !0
}, function (e, t) {
    var n = 0, r = Math.random();
    e.exports = function (e) {
        return "Symbol(".concat(void 0 === e ? "" : e, ")_", (++n + r).toString(36))
    }
}, function (e, t, n) {
    var r = n(11).f, o = n(19), i = n(6)("toStringTag");
    e.exports = function (e, t, n) {
        e && !o(e = n ? e : e.prototype, i) && r(e, i, {configurable: !0, value: t})
    }
}, function (e, t) {
    t.f = {}.propertyIsEnumerable
}, function (e, t) {
    var n = Object.prototype.toString;
    e.exports = function (e) {
        switch (n.call(e)) {
            case"[object Date]":
                return "date";
            case"[object RegExp]":
                return "regexp";
            case"[object Arguments]":
                return "arguments";
            case"[object Array]":
                return "array";
            case"[object Error]":
                return "error"
        }
        return null === e ? "null" : void 0 === e ? "undefined" : e !== e ? "nan" : e && 1 === e.nodeType ? "element" : typeof(e = e.valueOf ? e.valueOf() : Object.prototype.valueOf.apply(e))
    }
}, function (e, t) {
    function n(e) {
        var t = (new Date).getTime(), n = Math.max(0, 16 - (t - r)), o = setTimeout(e, n);
        return r = t, o
    }
    t = e.exports = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || n;
    var r = (new Date).getTime(),
        o = window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || window.clearTimeout;
    t.cancel = function (e) {
        o.call(window, e)
    }
}, function (e, t, n) {
    function r(e) {
        if (!e || !e.nodeType) throw new Error("A DOM element reference is required");
        this.el = e, this.list = e.classList
    }
    try {
        var o = n(101)
    } catch (e) {
        var o = n(101)
    }
    var i = /\s+/, a = Object.prototype.toString;
    e.exports = function (e) {
        return new r(e)
    }, r.prototype.add = function (e) {
        if (this.list) return this.list.add(e), this;
        var t = this.array();
        return ~o(t, e) || t.push(e), this.el.className = t.join(" "), this
    }, r.prototype.remove = function (e) {
        if ("[object RegExp]" == a.call(e)) return this.removeMatching(e);
        if (this.list) return this.list.remove(e), this;
        var t = this.array(), n = o(t, e);
        return ~n && t.splice(n, 1), this.el.className = t.join(" "), this
    }, r.prototype.removeMatching = function (e) {
        for (var t = this.array(), n = 0; n < t.length; n++) e.test(t[n]) && this.remove(t[n]);
        return this
    }, r.prototype.toggle = function (e, t) {
        return this.list ? (void 0 !== t ? t !== this.list.toggle(e, t) && this.list.toggle(e) : this.list.toggle(e), this) : (void 0 !== t ? t ? this.add(e) : this.remove(e) : this.has(e) ? this.remove(e) : this.add(e), this)
    }, r.prototype.array = function () {
        var e = this.el.getAttribute("class") || "", t = e.replace(/^\s+|\s+$/g, ""), n = t.split(i);
        return "" === n[0] && n.shift(), n
    }, r.prototype.has = r.prototype.contains = function (e) {
        return this.list ? this.list.contains(e) : !!~o(this.array(), e)
    }
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = {
        AppStatus: {
            FORE_GROUND: 0,
            BACK_GROUND: 1,
            LOCLOCKK: 2
        }
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(5), i = r(o), a = n(30), s = r(a), u = function () {
    };
    u.prototype = (0, i.default)(Object.prototype, {
        constructor: {
            value: u,
            writable: !0,
            configurable: !0
        }
    }), u.create = function (e) {
        var t = (0, i.default)(u.prototype);
        return t._cb = e, t._noSubtreeCb = function (t) {
            t.target === this && e.call(this, t)
        }, t._binded = [], t
    };
    var c = u._updateSubtreeCaches = function (e, t) {
        e.__subtreeObserversCount += t;
        var n = e.childNodes;
        if (n) for (var r = 0; r < n.length; r++) c(n[r], t)
    };
    u.prototype.observe = function (e, t) {
        t = t || {};
        var n = 0, r = t.subtree ? this._cb : this._noSubtreeCb;
        t.properties && (e.__propObservers || (e.__propObservers = s.default.create("Observer Callback")), this._binded.push({
            funcArr: e.__propObservers,
            id: e.__propObservers.add(r),
            subtree: t.subtree ? e : null
        }), n++), t.childList && (e.__childObservers || (e.__childObservers = s.default.create("Observer Callback")), this._binded.push({
            funcArr: e.__childObservers,
            id: e.__childObservers.add(r),
            subtree: t.subtree ? e : null
        }), n++), t.characterData && (e.__textObservers || (e.__textObservers = s.default.create("Observer Callback")), this._binded.push({
            funcArr: e.__textObservers,
            id: e.__textObservers.add(r),
            subtree: t.subtree ? e : null
        }), n++), t.subtree && c(e, n)
    }, u.prototype.disconnect = function () {
        for (var e = this._binded, t = 0; t < e.length; t++) {
            var n = e[t];
            n.funcArr.remove(n.id), n.subtree && c(n.subtree, -1)
        }
        this._binded = []
    }, u._callObservers = function (e, t, n) {
        do {
            e[t] && e[t].call(e, [n]), e = e.parentNode
        } while (e && e.__subtreeObserversCount)
    }, t.default = u
}, function (e, t, n) {
    e.exports = {default: n(166), __esModule: !0}
}, function (e, t, n) {
    e.exports = {default: n(174), __esModule: !0}
}, function (e, t) {
}, function (e, t) {
    var n = Math.ceil, r = Math.floor;
    e.exports = function (e) {
        return isNaN(e = +e) ? 0 : (e > 0 ? r : n)(e)
    }
}, function (e, t) {
    e.exports = function (e) {
        if (void 0 == e) throw TypeError("Can't call method on  " + e);
        return e
    }
}, function (e, t) {
    e.exports = function (e) {
        if ("function" != typeof e) throw TypeError(e + " is not a function!");
        return e
    }
}, function (e, t, n) {
    var r = n(27), o = n(8).document, i = r(o) && r(o.createElement);
    e.exports = function (e) {
        return i ? o.createElement(e) : {}
    }
}, function (e, t, n) {
    var r = n(27);
    e.exports = function (e, t) {
        if (!r(e)) return e;
        var n, o;
        if (t && "function" == typeof(n = e.toString) && !r(o = n.call(e))) return o;
        if ("function" == typeof(n = e.valueOf) && !r(o = n.call(e))) return o;
        if (!t && "function" == typeof(n = e.toString) && !r(o = n.call(e))) return o;
        throw TypeError("Can't convert object to primitive value")
    }
}, function (e, t, n) {
    var r = n(12), o = n(124), i = n(63), a = n(61)("IE_PROTO"), s = function () {
    }, u = function () {
        var e, t = n(57)("iframe"), r = i.length;
        for (t.style.display = "none", n(87).appendChild(t), t.src = "javascript:", e = t.contentWindow.document, e.open(), e.write("<script>document.F=Object<\/script>"), e.close(), u = e.F; r--;) delete u.prototype[i[r]];
        return u()
    };
    e.exports = Object.create || function (e, t) {
        var n;
        return null !== e ? (s.prototype = r(e), n = new s, s.prototype = null, n[a] = e) : n = u(), void 0 === t ? n : o(n, t)
    }
}, function (e, t, n) {
    var r = n(54), o = Math.min;
    e.exports = function (e) {
        return e > 0 ? o(r(e), 9007199254740991) : 0
    }
}, function (e, t, n) {
    var r = n(62)("keys"), o = n(43);
    e.exports = function (e) {
        return r[e] || (r[e] = o(e))
    }
}, function (e, t, n) {
    var r = n(8), o = r["__core-js_shared__"] || (r["__core-js_shared__"] = {});
    e.exports = function (e) {
        return o[e] || (o[e] = {})
    }
}, function (e, t) {
    e.exports = "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")
}, function (e, t, n) {
    var r = n(80), o = n(6)("iterator"), i = n(33);
    e.exports = n(2).getIteratorMethod = function (e) {
        if (void 0 != e) return e[o] || e["@@iterator"] || i[r(e)]
    }
}, function (e, t) {
    t.f = Object.getOwnPropertySymbols
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e, t, n) {
        i({msg: {eventName: "onAppRoute", data: {path: e + ".wxml", query: t, openType: n}}})
    }
    function i(e) {
        var t = k ? k.id : 0, n = e.msg || {};
        ServiceJSBridge.subscribeHandler(n.eventName, n.data || {}, t)
    }
    function a() {
        var e = window.__root__, t = location.hash.replace(/^#!/, ""), n = t ? [t] : [e];
        if (sessionStorage) {
            var r = sessionStorage.getItem("weweb_routes");
            if (r) {
                var o = r.split("|");
                o.indexOf(t) === o.length - 1 && (n = o)
            }
        }
        return n
    }
    function s() {
        var e = location.protocol + "//" + location.host + location.pathname;
        "function" == typeof history.replaceState && history.replaceState({}, "", e + "#!" + k.url), x.emit("route", k);
        for (var t = [], n = k; n;) t.push(n.url), n = null != n.pid ? T[n.pid] : null;
        var r = t.reverse().join("|");
        sessionStorage.setItem("weweb_routes", r)
    }
    function u() {
        k.external || o(k.path, k.query, "navigateBack")
    }
    function c(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "navigateTo";
        if (!e) throw new Error("url not found");
        if ("reLaunch" == t && m.isTabbar(k.path) && k.query) return void console.error("wx.reLaunch 跳转到 tabbar 页面时不允许携带参数，请去除参数或使用 wx.switchTab");
        k.onReady(function () {
            o(k.path, k.query, t)
        })
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var l = n(9), d = r(l), f = n(81), h = r(f), p = n(4), v = r(p);
    t.lifeSycleEvent = o;
    var g = n(21), m = function (e) {
        if (e && e.__esModule) return e;
        var t = {};
        if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
        return t.default = e, t
    }(g), y = n(163), _ = r(y), b = n(178), w = r(b), x = m.getBus(), k = null, T = {}, S = {};
    window.__wxConfig || (Object.defineProperty(window, "__wxConfig", {
        get: function () {
            return k ? k.getConfig() : __wxConfig__
        }
    }), Object.defineProperty(window, "__curPage__", {
        get: function () {
            return k
        }, set: function (e) {
            k[e.name] = e.value
        }
    }), window.addEventListener("message", function (e) {
        var t = e.data || {};
        "object" !== (void 0 === t ? "undefined" : (0, v.default)(t)) || "geolocation" !== t.module && "locationPicker" !== t.module || ("geolocation" == t.module && (t = {
            module: "locationPicker",
            latlng: {lat: t.lat, lng: t.lng},
            poiaddress: "" + t.province + t.city,
            poiname: t.addr,
            cityname: t.city
        }), k.setLocation(t))
    }));
    var C = {
        onLaunch: function () {
            var e = a();
            var t = e.shift();
            if(t.indexOf("&")!= -1){
                t=t.substring(0,t.indexOf("&"));
            }
            var n = m.validPath(t);
            var r = n ? t : window.__root__;
            if (this.navigateTo(r, !0), !n) return void console.warn("Invalid route: " + t + ", redirect to root");
            if (e.length) {
                w.default.show();
                var o = k.id;
                x.once("ready", function (t) {
                    if (w.default.hide(), t === o) {
                        var r = !0, a = !1, s = void 0;
                        try {
                            for (var u, c = (0, h.default)(e); !(r = (u = c.next()).done); r = !0) {
                                var l = u.value;
                                if (!(n = m.validPath(l))) {
                                    console.warn("无法在 pages 配置中找到 " + l + "，停止路由");
                                    break
                                }
                                i({
                                    msg: {
                                        eventName: "custom_event_INVOKE_METHOD",
                                        data: {data: {name: "navigateTo", args: {url: "/" + l}}}
                                    }
                                })
                            }
                        } catch (e) {
                            a = !0, s = e
                        } finally {
                            try {
                                !r && c.return && c.return()
                            } finally {
                                if (a) throw s
                            }
                        }
                    }
                })
            }
        }, redirectTo: function (e) {
            if (e = m.normalize(e), !k) throw new Error("Current view not exists");
            var t = k.pid;
            k.destroy(), delete T[k.id];
            var n = k = new _.default(e);
            k.pid = t, T[k.id] = n, s(), c(e, "redirectTo")
        }, navigateTo: function (e, t) {
            e = m.normalize(e);
            var n = S[e];
            if (k && k.hide(), n && n.__DOMTree__) k = n, n.show(); else {
                var r = m.isTabbar(e), o = k ? k.id : null, i = k = new _.default(e);
                k.pid = r ? null : o, T[i.id] = i, r && (S[e] = k)
            }
            s(), t ? c(e, "appLaunch") : c(e, "navigateTo")
        }, reLaunch: function (e) {
            sessionStorage.clear(), e = m.normalize(e);
            var t = S[e];
            if (k && k.hide(), t && t.__DOMTree__) k = t, t.show(); else {
                var n = m.isTabbar(e), r = k = new _.default(e);
                k.pid = null, T = [], T[r.id] = r, n && (S[e] = k)
            }
            s(), c(e, "reLaunch")
        }, switchTab: function (e) {
            e = m.normalize(e), m.isTabbar(k.path) && k.hide();
            var t = S[e];
            if ((0, d.default)(T).forEach(function (e) {
                var t = T[e];
                m.isTabbar(t.path) || (t.destroy(), delete T[e])
            }), t && t.__DOMTree__) k = t, t.show(); else {
                var n = m.isTabbar(e), r = k ? k.id : null, o = k = new _.default(e);
                k.pid = n ? null : r, T[o.id] = o, n && (S[e] = k)
            }
            s(), c(e, "switchTab")
        }, navigateBack: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1;
            if (!k) throw new Error("Current page not exists");
            if (null != k.pid) {
                for (var t = e; t > 0 && null != k.pid; t--) k.destroy(), delete T[k.id], k = T[k.pid], u();
                k.show(), s(), c(k.path, "navigateBack")
            }
        }, openExternal: function (e) {
            console.log("openExternal start!!!"), k && k.hide();
            var t = k ? k.id : null, n = k = new _.default(e);
            T[n.id] = n, n.pid = t, n.show(), s()
        }, currentView: function () {
            return k
        }, getViewById: function (e) {
            return T[e]
        }, getViewIds: function () {
            return (0, d.default)(T).map(function (e) {
                return Number(e)
            })
        }, eachView: function (e) {
            this.getViewIds().forEach(function (t) {
                e.call(null, T[t])
            })
        }
    };
    t.default = C
}, function (e, t, n) {
    t.f = n(6)
}, function (e, t, n) {
    var r = n(8), o = n(2), i = n(42), a = n(67), s = n(11).f;
    e.exports = function (e) {
        var t = o.Symbol || (o.Symbol = i ? {} : r.Symbol || {});
        "_" == e.charAt(0) || e in t || s(t, e, {value: a.f(e)})
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        if (null === e || void 0 === e) throw new TypeError("Object.assign cannot be called with null or undefined");
        return Object(e)
    }
    var o = Object.getOwnPropertySymbols, i = Object.prototype.hasOwnProperty,
        a = Object.prototype.propertyIsEnumerable;
    e.exports = function () {
        try {
            if (!Object.assign) return !1;
            var e = new String("abc");
            if (e[5] = "de", "5" === Object.getOwnPropertyNames(e)[0]) return !1;
            for (var t = {}, n = 0; n < 10; n++) t["_" + String.fromCharCode(n)] = n;
            if ("0123456789" !== Object.getOwnPropertyNames(t).map(function (e) {
                return t[e]
            }).join("")) return !1;
            var r = {};
            return "abcdefghijklmnopqrst".split("").forEach(function (e) {
                r[e] = e
            }), "abcdefghijklmnopqrst" === Object.keys(Object.assign({}, r)).join("")
        } catch (e) {
            return !1
        }
    }() ? Object.assign : function (e, t) {
        for (var n, s, u = r(e), c = 1; c < arguments.length; c++) {
            n = Object(arguments[c]);
            for (var l in n) i.call(n, l) && (u[l] = n[l]);
            if (o) {
                s = o(n);
                for (var d = 0; d < s.length; d++) a.call(n, s[d]) && (u[s[d]] = n[s[d]])
            }
        }
        return u
    }
}, function (e, t) {
    function n(e, t) {
        function o(t) {
            function n(n) {
                if (t !== n && (o(), !n.defaultPrevented)) {
                    var r = t.preventDefault, i = t.stopPropagation;
                    t.stopPropagation = function () {
                        i.call(t), i.call(n)
                    }, t.preventDefault = function () {
                        r.call(n)
                    }, e.apply(s, u)
                }
            }
            function o(e) {
                t !== e && (clearTimeout(c), a.removeEventListener("touchmove", o), r.forEach(function (e) {
                    a.removeEventListener(e, n)
                }))
            }
            if (t.touches && !(t.touches.length > 1)) {
                var a = t.target, s = this, u = arguments, c = setTimeout(o, i);
                a.addEventListener("touchmove", o), r.forEach(function (e) {
                    a.addEventListener(e, n)
                })
            }
        }
        t = t || {};
        var i = t.timeout || n.timeout;
        return o.handler = e, o
    }
    var r = ["touchend"];
    e.exports = n, n.timeout = 200
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o() {
        var e = 0;
        for (var t in localStorage) {
            e += 2 * localStorage[t].length / 1024
        }
        return Math.ceil(e)
    }
    function i(e) {
        var t = localStorage.getItem(h + "_type");
        if (t) {
            return JSON.parse(t)[e]
        }
    }
    function a() {
        var e = localStorage.getItem(h + "_type");
        return e ? JSON.parse(e) : {}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var s = n(9), u = r(s), c = n(13), l = r(c), d = n(3), f = r(d), h = "__weweb__storage__", p = {
        set: function (e, t, n) {
            if (null == window.localStorage) return console.error("localStorage not supported");
            var r = localStorage.getItem(h), o = void 0;
            o = r ? JSON.parse(r) : {}, o[e] = t, localStorage.setItem(h, (0, l.default)(o));
            var i = a();
            i[e] = n, localStorage.setItem(h + "_type", (0, l.default)(i)), this.emit("change")
        }, get: function (e) {
            if (null == window.localStorage) return console.error("localStorage not supported");
            var t = localStorage.getItem(h), n = void 0;
            return n = t ? JSON.parse(t) : {}, {data: n[e], dataType: i(e)}
        }, remove: function (e) {
            if (null == window.localStorage) return console.error("localStorage not supported");
            var t = localStorage.getItem(h);
            if (t) {
                var n = JSON.parse(t), r = n[e];
                delete n[e], localStorage.setItem(h, (0, l.default)(n));
                var o = a();
                return delete o[e], localStorage.setItem(h + "_type", (0, l.default)(o)), this.emit("change"), r
            }
        }, clear: function () {
            if (null == window.localStorage) return console.error("localStorage not supported");
            localStorage.removeItem(h), localStorage.removeItem(h + "_type"), this.emit("change")
        }, getAll: function () {
            if (null == window.localStorage) return console.error("localStorage not supported");
            var e = localStorage.getItem(h), t = e ? JSON.parse(e) : {}, n = {};
            return (0, u.default)(t).forEach(function (e) {
                n[e] = {data: t[e], dataType: i(e)}
            }), n
        }, info: function () {
            if (null == window.localStorage) return console.error("localStorage not supported");
            var e = localStorage.getItem(h), t = e ? JSON.parse(e) : {};
            return {keys: (0, u.default)(t), limitSize: 5120, currentSize: o()}
        }
    };
    (0, f.default)(p), t.default = p
}, function (e, t, n) {
    (function (e) {
        function n(e, t) {
            t = t || {};
            var n = l || t.debug, r = "";
            r += 'var _str="";\n';
            for (var s, c, f = 1, h = [], p = "", v = 0; v <= e.length; v++) {
                var g = e[v];
                if ("\r" !== g) if ("\\" === g) p += "\\\\"; else if ("\n" === g || void 0 === g) {
                    if (n && (r += "__stack.linenr=" + f + ";"), d.test(p)) s = p.match(/\{\{(.*)\}\}/)[1], c = a(s, h), c instanceof Error && o(c, e, f), r += c + "\n"; else if (/\{\{/.test(p)) {
                        for (var m, y = "", _ = 0; _ < p.length; _++) if ("{" === p[_] && "{" === p[_ + 1]) {
                            y.length && (r += "_str += '" + i(y, "'", "\\'") + "';\n"), y = "";
                            var b = p.indexOf("}}", _);
                            switch (s = p.substring(_ + 2, b), s[0]) {
                                case"=":
                                    m = s.replace(/^=\s*/, ""), m = u(m), c = "_str+=escape(" + m + ");";
                                    break;
                                case"!":
                                    m = s.replace(/^!\s*/, ""), m = u(m), c = "_str+=" + m + ";";
                                    break;
                                default:
                                    c = a(s, h)
                            }
                            c instanceof Error && o(c, e, f), r += c + "\n", _ = b + 1
                        } else y += p[_];
                        y.length && (r += "_str += '" + i(y, "'", "\\'") + "';\n"), "\n" === g && (r += "_str +='\\n'\n")
                    } else r += "_str += '" + i(p, "'", "\\'") + ("\n" === g ? "\\n" : "") + "';\n";
                    p = "", f += 1
                } else p += e[v]
            }
            return h.length && o(new Error("tag not closed"), e, f), r += "return _str\n"
        }
        function r(e) {
            return e = null == e ? "" : e, String(e).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/'/g, "&#39;").replace(/"/g, "&quot;")
        }
        function o(e, t, n) {
            var r = t.split("\n"), o = Math.max(n - 3, 0), i = Math.min(r.length, n + 3),
                a = r.slice(o, i).map(function (e, t) {
                    var r = t + o + 1;
                    return (r == n ? " >> " : "    ") + r + "| " + e
                }).join("\n");
            throw e.message = "et compile error:" + n + "\n" + a + "\n\n" + e.message, e
        }
        function i(e, t, n) {
            return e.replace(new RegExp(t, "g"), n)
        }
        function a(e, t) {
            if ("/" === e) return 0 === t.length ? new Error("no matched begin tag") : t.pop();
            if (!/^each|if|elif|else(\s|$)/.test(e)) return new Error("expression {{" + e + "}} not recognized");
            var n, r = e.replace(/^\w+\s*/, "");
            if (0 === e.indexOf("each")) {
                var o = s(r);
                if (!o.attr) return new Error("attribute not found for " + r);
                o.as = o.as || "__val";
                var i = o.as + (o.index ? "," + o.index : "");
                n = o.attr + ".forEach(function(" + i + "){", t.push("})")
            } else 0 === e.indexOf("if") ? (n = "if (" + r + "){", t.push("}")) : 0 === e.indexOf("elif") ? n = "} else if (" + r + "){" : 0 === e.indexOf("else") && (n = "} else {");
            return n
        }
        function s(e) {
            var t = e.split(/,\s*/), n = t[1];
            return t = t[0].split(/\s+as\s+/), {index: n, attr: t[0], as: t[1]}
        }
        function u(e) {
            if (!/\s\|\s/.test(e)) return e;
            for (var t = e.split(/\s*\|\s*/), n = t[0], r = 1; r < t.length; r++) {
                var o = t[r].trim();
                if (o) {
                    var i, a = o.match(/^([\w$_]+)(.*)$/);
                    a[2] ? (i = c(a[2].trim()), n = "filters." + a[1] + "(" + n + ", " + i.join(", ") + ")") : n = "filters." + o + "(" + n + ")"
                }
            }
            return n
        }
        function c(e) {
            for (var t = [], n = e.replace(/(['"]).+?\1/g, function (e) {
                return t.push(e), "$"
            }), r = n.split(/\s+/), o = 0, i = r.length; o < i; o++) {
                "$" === r[o] && (r[o] = t.shift())
            }
            return r
        }
        var l = !1;
        t.compile = function (e, t) {
            t = t || {};
            var i, a = l || t.debug;
            if (a) {
                i = ["var __stack = { linenr: 1, input: '" + e.replace(/['\n]/g, function (e) {
                    return "'" === e ? "\\'" : "\\n"
                }) + "'};", o.toString(), "try {", n(e, t), "} catch (err) {", "  rethrow(err, __stack.input, __stack.linenr);", "}"].join("\n")
            } else i = n(e, t);
            i = "escape = escape || " + r.toString() + ";\n" + i;
            var s;
            try {
                s = new Function("_, filters, escape", i)
            } catch (e) {
                throw"SyntaxError" == e.name && (e.message += " while compiling ejs"), e
            }
            return s
        };
        var d = /^\s*\{\{[\w|\/][^}]*\}\}\s*$/
    }).call(t, n(190))
}, function (e, t, n) {
    function r(e, t, n) {
        for (n = n || document.documentElement; e && e !== n;) {
            if (o(e, t)) return e;
            e = e.parentNode
        }
        return o(e, t) ? e : null
    }
    try {
        var o = n(106)
    } catch (e) {
        var o = n(106)
    }
    e.exports = r
}, function (e, t) {
    function n(e, t) {
        return t.querySelector(e)
    }
    t = e.exports = function (e, t) {
        return t = t || document, n(e, t)
    }, t.all = function (e, t) {
        return t = t || document, t.querySelectorAll(e)
    }, t.engine = function (e) {
        if (!e.one) throw new Error(".one callback required");
        if (!e.all) throw new Error(".all callback required");
        return n = e.one, t.all = e.all, t
    }
}, function (e, t) {
    function n() {
        r = window.addEventListener ? "addEventListener" : "attachEvent", o = window.removeEventListener ? "removeEventListener" : "detachEvent", i = "addEventListener" !== r ? "on" : ""
    }
    var r, o, i;
    t.bind = function (e, t, o, a) {
        return r || n(), e[r](i + t, o, a || !1), o
    }, t.unbind = function (e, t, r, a) {
        return o || n(), e[o](i + t, r, a || !1), r
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(24), i = r(o), a = n(16), s = r(a), u = n(0), c = r(u), l = n(1), d = r(l), f = n(22), h = r(f),
        p = n(23), v = r(p), g = n(3), m = r(g), y = n(77), _ = r(y), b = n(47), w = r(b), x = n(25), k = r(x),
        T = n(37), S = function (e) {
            function t(e, n) {
                (0, c.default)(this, t);
                var r = (0, h.default)(this, (t.__proto__ || (0, s.default)(t)).call(this));
                if (e.firstElementChild) {
                    r.el = e, r.touchAction("none"), r.itemHeight = e.firstElementChild.clientHeight, r.events = (0, k.default)(e.parentNode.querySelector(".wx-picker-mask2"), r), r.events.bind("touchstart"), r.events.bind("touchmove"), r.events.bind("touchend"), r.docEvents = (0, k.default)(document, r), r.docEvents.bind("touchend"), r.maxY = 3 * r.itemHeight, r.minY = (4 - e.children.length) * r.itemHeight;
                    var o = 3 - (n || 0);
                    r.translate(o * r.itemHeight)
                }
                return r
            }
            return (0, v.default)(t, e), (0, d.default)(t, [{
                key: "current", value: function () {
                    return 3 - Math.floor(this.y / this.itemHeight)
                }
            }, {
                key: "currentValue", value: function () {
                    var e = this.current();
                    return this.el.children[e].getAttribute("data-value")
                }
            }, {
                key: "unbind", value: function () {
                    this.el && (this.events.unbind(), this.docEvents.unbind())
                }
            }, {
                key: "ontouchstart", value: function (e) {
                    this.tween && this.tween.stop(), e.preventDefault();
                    var t = this.getTouch(e);
                    this.down = {sy: this.y, x: t.clientX, y: t.clientY, at: Date.now()}
                }
            }, {
                key: "ontouchmove", value: function (e) {
                    if (this.down && !this.tween) {
                        e.preventDefault();
                        var t = this.getTouch(e), n = t.clientY, r = this.down, o = n - r.y, i = r.sy + o;
                        this.translate(i)
                    }
                }
            }, {
                key: "ontouchend", value: function (e) {
                    if (this.down) {
                        this.down = null, e.preventDefault();
                        var t = Math.round(this.y / this.itemHeight);
                        this.select(t)
                    }
                }
            }, {
                key: "select", value: function (e) {
                    var t = e * this.itemHeight;
                    this.scrollTo(t, 200, "inQuad")
                }
            }, {
                key: "scrollTo", value: function (e, t, n) {
                    function r() {
                        (0, w.default)(r), a.update()
                    }
                    var o = this;
                    if (this.tween && this.tween.stop(), !(t > 0 && e !== this.y)) return this.direction = 0, void this.translate(e);
                    this.direction = e > this.y ? -1 : 1, n = n || "out-circ";
                    var a = this.tween = (0, _.default)({y: this.y}).ease(n).to({y: e}).duration(t), s = this;
                    a.update(function (e) {
                        s.translate(e.y)
                    });
                    var u = new i.default(function (e) {
                        a.on("end", function () {
                            o.emit("end"), e(), s.tween = null, s.animating = !1, r = function () {
                            }
                        })
                    });
                    return r(), this.animating = !0, u
                }
            }, {
                key: "getTouch", value: function (e) {
                    var t = e;
                    return e.changedTouches && e.changedTouches.length > 0 && (t = e.changedTouches[0]), t
                }
            }, {
                key: "translate", value: function (e) {
                    var t = this.el.style;
                    isNaN(e) || (e = Math.min(e, this.maxY), e = Math.max(e, this.minY), this.y = e, t[T.transform] = "translate3d(0, " + e + "px, 0)")
                }
            }, {
                key: "touchAction", value: function (e) {
                    var t = this.el.style;
                    T.touchAction && (t[T.touchAction] = e)
                }
            }]), t
        }(m.default);
    t.default = S
}, function (e, t, n) {
    function r(e) {
        if (!(this instanceof r)) return new r(e);
        this._from = e, this.ease("linear"), this.duration(500)
    }
    var o = n(200), i = n(201), a = n(46), s = n(202);
    e.exports = r, o(r.prototype), r.prototype.reset = function () {
        return this.isArray = "array" === a(this._from), this._curr = i(this._from), this._done = !1, this._start = Date.now(), this
    }, r.prototype.to = function (e) {
        return this.reset(), this._to = e, this
    }, r.prototype.duration = function (e) {
        return this._duration = e, this
    }, r.prototype.ease = function (e) {
        if (!(e = "function" == typeof e ? e : s[e])) throw new TypeError("invalid easing function");
        return this._ease = e, this
    }, r.prototype.stop = function () {
        return this.stopped = !0, this._done = !0, this.emit("stop"), this.emit("end"), this
    }, r.prototype.step = function () {
        if (!this._done) {
            var e = this._duration, t = Date.now();
            if (t - this._start >= e) return this._from = this._to, this._update(this._to), this._done = !0, this.emit("end"), this;
            var n = this._from, r = this._to, o = this._curr, i = this._ease, a = (t - this._start) / e, s = i(a);
            if (this.isArray) {
                for (var u = 0; u < n.length; ++u) o[u] = n[u] + (r[u] - n[u]) * s;
                return this._update(o), this
            }
            for (var c in n) o[c] = n[c] + (r[c] - n[c]) * s;
            return this._update(o), this
        }
    }, r.prototype.update = function (e) {
        return 0 == arguments.length ? this.step() : (this._update = e, this)
    }
}, function (e, t) {
    e.exports = function (e, t, n) {
        n = n || function (e) {
            return e = null == e ? "" : e, String(e).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/'/g, "&#39;").replace(/"/g, "&quot;")
        };
        var r = "";
        return r += '<div class="wx-picker">\n', r += '  <div class="wx-picker-hd">\n', r += '    <a class="wx-picker-action cancel">取消</a>\n', r += '    <a class="wx-picker-action confirm">确定</a>\n', r += "  </div>\n", r += '  <div class="wx-picker-bd">\n', e.group.forEach(function (e, t) {
            r += '    <div class="wx-picker-group">\n', r += '      <div class="wx-picker-mask2" data-index="', r += n(t), r += '"></div>', r += "\n", r += '      <div class="wx-picker-indicator"></div>\n', r += '      <div class="wx-picker-content">\n', e.forEach(function (e, t) {
                r += '        <div class="wx-picker-item" data-value="', r += n(e.value), r += '">', r += "\n", r += "          ", r += n(e.text), r += "\n", r += "        </div>\n"
            }), r += "      </div>\n", r += "    </div>\n"
        }), r += "  </div>\n", r += "</div>\n", r += ""
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e, t, n, r) {
        r = r || {};
        var o = r.originalEvent, i = !r.bubbles, a = !r.composed, s = r.extraFields || {}, u = !1, c = Date.now() - d,
            l = e.__wxElement || e;
        e === l.shadowRoot && (l = e);
        var f = function () {
            o && o.preventDefault()
        }, h = function () {
            u = !0
        }, p = {target: l, currentTarget: l, type: t, timeStamp: c, detail: n, preventDefault: f, stopPropagation: h};
        for (var v in s) p[v] = s[v];
        for (var g = function (e, t) {
            p.currentTarget = t, !1 === e.call(t, [p]) && (f(), h())
        }, m = l.parentNode, y = l; function () {
            return !!y && (m === y && (m = y.parentNode), y.__wxEvents && y.__wxEvents[t] && g(y.__wxEvents[t], y), !i && !u)
        }();) if (y.__host) {
            if (a) break;
            m && m.__domElement || (m = y.__host, p.target = m), y = y.__host
        } else {
            var _ = !0;
            (y.__domElement || y.__virtual) && (_ = !1), y = _ || a ? y.parentNode : y.__slotParent
        }
    }
    function i(e, t, n) {
        var r = e.__wxElement || e;
        return e === r.shadowRoot && (r = e), r.__wxEvents || (r.__wxEvents = (0, u.default)(null)), r.__wxEvents[t] || (r.__wxEvents[t] = l.default.create("Event Listener")), r.__wxEvents[t].add(n)
    }
    function a(e, t, n) {
        var r = e.__wxElement || e;
        e === r.shadowRoot && (r = e), r.__wxEvents && r.__wxEvents[t] && r.__wxEvents[t].remove(n)
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var s = n(5), u = r(s);
    t.triggerEvent = o, t.addListenerToElement = i, t.removeListenerFromElement = a;
    var c = n(30), l = r(c), d = Date.now()
}, function (e, t, n) {
    var r = n(35), o = n(6)("toStringTag"), i = "Arguments" == r(function () {
        return arguments
    }()), a = function (e, t) {
        try {
            return e[t]
        } catch (e) {
        }
    };
    e.exports = function (e) {
        var t, n, s;
        return void 0 === e ? "Undefined" : null === e ? "Null" : "string" == typeof(n = a(t = Object(e), o)) ? n : i ? r(t) : "Object" == (s = r(t)) && "function" == typeof t.callee ? "Arguments" : s
    }
}, function (e, t, n) {
    e.exports = {default: n(149), __esModule: !0}
}, function (e, t, n) {
    "use strict";
    var r = n(42), o = n(10), i = n(84), a = n(18), s = n(19), u = n(33), c = n(123), l = n(44), d = n(88),
        f = n(6)("iterator"), h = !([].keys && "next" in [].keys()), p = function () {
            return this
        };
    e.exports = function (e, t, n, v, g, m, y) {
        c(n, t, v);
        var _, b, w, x = function (e) {
                if (!h && e in C) return C[e];
                switch (e) {
                    case"keys":
                    case"values":
                        return function () {
                            return new n(this, e)
                        }
                }
                return function () {
                    return new n(this, e)
                }
            }, k = t + " Iterator", T = "values" == g, S = !1, C = e.prototype, E = C[f] || C["@@iterator"] || g && C[g],
            M = E || x(g), A = g ? T ? x("entries") : M : void 0, P = "Array" == t ? C.entries || E : E;
        if (P && (w = d(P.call(new e))) !== Object.prototype && (l(w, k, !0), r || s(w, f) || a(w, f, p)), T && E && "values" !== E.name && (S = !0, M = function () {
            return E.call(this)
        }), r && !y || !h && !S && C[f] || a(C, f, M), u[t] = M, u[k] = p, g) if (_ = {
            values: T ? M : x("values"),
            keys: m ? M : x("keys"),
            entries: A
        }, y) for (b in _) b in C || i(C, b, _[b]); else o(o.P + o.F * (h || S), t, _);
        return _
    }
}, function (e, t, n) {
    e.exports = !n(14) && !n(28)(function () {
        return 7 != Object.defineProperty(n(57)("div"), "a", {
            get: function () {
                return 7
            }
        }).a
    })
}, function (e, t, n) {
    e.exports = n(18)
}, function (e, t, n) {
    var r = n(19), o = n(20), i = n(125)(!1), a = n(61)("IE_PROTO");
    e.exports = function (e, t) {
        var n, s = o(e), u = 0, c = [];
        for (n in s) n != a && r(s, n) && c.push(n);
        for (; t.length > u;) r(s, n = t[u++]) && (~i(c, n) || c.push(n));
        return c
    }
}, function (e, t, n) {
    var r = n(35);
    e.exports = Object("z").propertyIsEnumerable(0) ? Object : function (e) {
        return "String" == r(e) ? e.split("") : Object(e)
    }
}, function (e, t, n) {
    e.exports = n(8).document && document.documentElement
}, function (e, t, n) {
    var r = n(19), o = n(36), i = n(61)("IE_PROTO"), a = Object.prototype;
    e.exports = Object.getPrototypeOf || function (e) {
        return e = o(e), r(e, i) ? e[i] : "function" == typeof e.constructor && e instanceof e.constructor ? e.constructor.prototype : e instanceof Object ? a : null
    }
}, function (e, t, n) {
    "use strict";
    var r, o, i, a = n(42), s = n(8), u = n(26), c = n(80), l = n(10), d = n(27), f = n(56), h = n(130), p = n(131),
        v = n(132), g = n(92).set, m = n(134)(), y = s.TypeError, _ = s.process, b = s.Promise, _ = s.process,
        w = "process" == c(_), x = function () {
        }, k = !!function () {
            try {
                var e = b.resolve(1), t = (e.constructor = {})[n(6)("species")] = function (e) {
                    e(x, x)
                };
                return (w || "function" == typeof PromiseRejectionEvent) && e.then(x) instanceof t
            } catch (e) {
            }
        }(), T = function (e, t) {
            return e === t || e === b && t === i
        }, S = function (e) {
            var t;
            return !(!d(e) || "function" != typeof(t = e.then)) && t
        }, C = function (e) {
            return T(b, e) ? new E(e) : new o(e)
        }, E = o = function (e) {
            var t, n;
            this.promise = new e(function (e, r) {
                if (void 0 !== t || void 0 !== n) throw y("Bad Promise constructor");
                t = e, n = r
            }), this.resolve = f(t), this.reject = f(n)
        }, M = function (e) {
            try {
                e()
            } catch (e) {
                return {error: e}
            }
        }, A = function (e, t) {
            if (!e._n) {
                e._n = !0;
                var n = e._c;
                m(function () {
                    for (var r = e._v, o = 1 == e._s, i = 0; n.length > i;) !function (t) {
                        var n, i, a = o ? t.ok : t.fail, s = t.resolve, u = t.reject, c = t.domain;
                        try {
                            a ? (o || (2 == e._h && I(e), e._h = 1), !0 === a ? n = r : (c && c.enter(), n = a(r), c && c.exit()), n === t.promise ? u(y("Promise-chain cycle")) : (i = S(n)) ? i.call(n, s, u) : s(n)) : u(r)
                        } catch (e) {
                            u(e)
                        }
                    }(n[i++]);
                    e._c = [], e._n = !1, t && !e._h && P(e)
                })
            }
        }, P = function (e) {
            g.call(s, function () {
                var t, n, r, o = e._v;
                if (O(e) && (t = M(function () {
                    w ? _.emit("unhandledRejection", o, e) : (n = s.onunhandledrejection) ? n({
                        promise: e,
                        reason: o
                    }) : (r = s.console) && r.error && r.error("Unhandled promise rejection", o)
                }), e._h = w || O(e) ? 2 : 1), e._a = void 0, t) throw t.error
            })
        }, O = function (e) {
            if (1 == e._h) return !1;
            for (var t, n = e._a || e._c, r = 0; n.length > r;) if (t = n[r++], t.fail || !O(t.promise)) return !1;
            return !0
        }, I = function (e) {
            g.call(s, function () {
                var t;
                w ? _.emit("rejectionHandled", e) : (t = s.onrejectionhandled) && t({promise: e, reason: e._v})
            })
        }, R = function (e) {
            var t = this;
            t._d || (t._d = !0, t = t._w || t, t._v = e, t._s = 2, t._a || (t._a = t._c.slice()), A(t, !0))
        }, N = function (e) {
            var t, n = this;
            if (!n._d) {
                n._d = !0, n = n._w || n;
                try {
                    if (n === e) throw y("Promise can't be resolved itself");
                    (t = S(e)) ? m(function () {
                        var r = {_w: n, _d: !1};
                        try {
                            t.call(e, u(N, r, 1), u(R, r, 1))
                        } catch (e) {
                            R.call(r, e)
                        }
                    }) : (n._v = e, n._s = 1, A(n, !1))
                } catch (e) {
                    R.call({_w: n, _d: !1}, e)
                }
            }
        };
    k || (b = function (e) {
        h(this, b, "Promise", "_h"), f(e), r.call(this);
        try {
            e(u(N, this, 1), u(R, this, 1))
        } catch (e) {
            R.call(this, e)
        }
    }, r = function (e) {
        this._c = [], this._a = void 0, this._s = 0, this._d = !1, this._v = void 0, this._h = 0, this._n = !1
    }, r.prototype = n(135)(b.prototype, {
        then: function (e, t) {
            var n = C(v(this, b));
            return n.ok = "function" != typeof e || e, n.fail = "function" == typeof t && t, n.domain = w ? _.domain : void 0, this._c.push(n), this._a && this._a.push(n), this._s && A(this, !1), n.promise
        }, catch: function (e) {
            return this.then(void 0, e)
        }
    }), E = function () {
        var e = new r;
        this.promise = e, this.resolve = u(N, e, 1), this.reject = u(R, e, 1)
    }), l(l.G + l.W + l.F * !k, {Promise: b}), n(44)(b, "Promise"), n(136)("Promise"), i = n(2).Promise, l(l.S + l.F * !k, "Promise", {
        reject: function (e) {
            var t = C(this);
            return (0, t.reject)(e), t.promise
        }
    }), l(l.S + l.F * (a || !k), "Promise", {
        resolve: function (e) {
            if (e instanceof b && T(e.constructor, this)) return e;
            var t = C(this);
            return (0, t.resolve)(e), t.promise
        }
    }), l(l.S + l.F * !(k && n(93)(function (e) {
        b.all(e).catch(x)
    })), "Promise", {
        all: function (e) {
            var t = this, n = C(t), r = n.resolve, o = n.reject, i = M(function () {
                var n = [], i = 0, a = 1;
                p(e, !1, function (e) {
                    var s = i++, u = !1;
                    n.push(void 0), a++, t.resolve(e).then(function (e) {
                        u || (u = !0, n[s] = e, --a || r(n))
                    }, o)
                }), --a || r(n)
            });
            return i && o(i.error), n.promise
        }, race: function (e) {
            var t = this, n = C(t), r = n.reject, o = M(function () {
                p(e, !1, function (e) {
                    t.resolve(e).then(n.resolve, r)
                })
            });
            return o && r(o.error), n.promise
        }
    })
}, function (e, t, n) {
    var r = n(12);
    e.exports = function (e, t, n, o) {
        try {
            return o ? t(r(n)[0], n[1]) : t(n)
        } catch (t) {
            var i = e.return;
            throw void 0 !== i && r(i.call(e)), t
        }
    }
}, function (e, t, n) {
    var r = n(33), o = n(6)("iterator"), i = Array.prototype;
    e.exports = function (e) {
        return void 0 !== e && (r.Array === e || i[o] === e)
    }
}, function (e, t, n) {
    var r, o, i, a = n(26), s = n(133), u = n(87), c = n(57), l = n(8), d = l.process, f = l.setImmediate,
        h = l.clearImmediate, p = l.MessageChannel, v = 0, g = {}, m = function () {
            var e = +this;
            if (g.hasOwnProperty(e)) {
                var t = g[e];
                delete g[e], t()
            }
        }, y = function (e) {
            m.call(e.data)
        };
    f && h || (f = function (e) {
        for (var t = [], n = 1; arguments.length > n;) t.push(arguments[n++]);
        return g[++v] = function () {
            s("function" == typeof e ? e : Function(e), t)
        }, r(v), v
    }, h = function (e) {
        delete g[e]
    }, "process" == n(35)(d) ? r = function (e) {
        d.nextTick(a(m, e, 1))
    } : p ? (o = new p, i = o.port2, o.port1.onmessage = y, r = a(i.postMessage, i, 1)) : l.addEventListener && "function" == typeof postMessage && !l.importScripts ? (r = function (e) {
        l.postMessage(e + "", "*")
    }, l.addEventListener("message", y, !1)) : r = "onreadystatechange" in c("script") ? function (e) {
        u.appendChild(c("script")).onreadystatechange = function () {
            u.removeChild(this), m.call(e)
        }
    } : function (e) {
        setTimeout(a(m, e, 1), 0)
    }), e.exports = {set: f, clear: h}
}, function (e, t, n) {
    var r = n(6)("iterator"), o = !1;
    try {
        var i = [7][r]();
        i.return = function () {
            o = !0
        }, Array.from(i, function () {
            throw 2
        })
    } catch (e) {
    }
    e.exports = function (e, t) {
        if (!t && !o) return !1;
        var n = !1;
        try {
            var i = [7], a = i[r]();
            a.next = function () {
                return {done: n = !0}
            }, i[r] = function () {
                return a
            }, e(i)
        } catch (e) {
        }
        return n
    }
}, function (e, t, n) {
    var r = n(10), o = n(2), i = n(28);
    e.exports = function (e, t) {
        var n = (o.Object || {})[e] || Object[e], a = {};
        a[e] = t(n), r(r.S + r.F * i(function () {
            n(1)
        }), "Object", a)
    }
}, function (e, t, n) {
    e.exports = {default: n(153), __esModule: !0}
}, function (e, t, n) {
    "use strict";
    var r = n(8), o = n(19), i = n(14), a = n(10), s = n(84), u = n(154).KEY, c = n(28), l = n(62), d = n(44),
        f = n(43), h = n(6), p = n(67), v = n(68), g = n(155), m = n(156), y = n(157), _ = n(12), b = n(20), w = n(58),
        x = n(34), k = n(59), T = n(158), S = n(98), C = n(11), E = n(29), M = S.f, A = C.f, P = T.f, O = r.Symbol,
        I = r.JSON, R = I && I.stringify, N = h("_hidden"), L = h("toPrimitive"), j = {}.propertyIsEnumerable,
        B = l("symbol-registry"), D = l("symbols"), F = l("op-symbols"), V = Object.prototype,
        U = "function" == typeof O, H = r.QObject, q = !H || !H.prototype || !H.prototype.findChild,
        W = i && c(function () {
            return 7 != k(A({}, "a", {
                get: function () {
                    return A(this, "a", {value: 7}).a
                }
            })).a
        }) ? function (e, t, n) {
            var r = M(V, t);
            r && delete V[t], A(e, t, n), r && e !== V && A(V, t, r)
        } : A, G = function (e) {
            var t = D[e] = k(O.prototype);
            return t._k = e, t
        }, $ = U && "symbol" == typeof O.iterator ? function (e) {
            return "symbol" == typeof e
        } : function (e) {
            return e instanceof O
        }, Y = function (e, t, n) {
            return e === V && Y(F, t, n), _(e), t = w(t, !0), _(n), o(D, t) ? (n.enumerable ? (o(e, N) && e[N][t] && (e[N][t] = !1), n = k(n, {enumerable: x(0, !1)})) : (o(e, N) || A(e, N, x(1, {})), e[N][t] = !0), W(e, t, n)) : A(e, t, n)
        }, z = function (e, t) {
            _(e);
            for (var n, r = m(t = b(t)), o = 0, i = r.length; i > o;) Y(e, n = r[o++], t[n]);
            return e
        }, J = function (e, t) {
            return void 0 === t ? k(e) : z(k(e), t)
        }, K = function (e) {
            var t = j.call(this, e = w(e, !0));
            return !(this === V && o(D, e) && !o(F, e)) && (!(t || !o(this, e) || !o(D, e) || o(this, N) && this[N][e]) || t)
        }, X = function (e, t) {
            if (e = b(e), t = w(t, !0), e !== V || !o(D, t) || o(F, t)) {
                var n = M(e, t);
                return !n || !o(D, t) || o(e, N) && e[N][t] || (n.enumerable = !0), n
            }
        }, Z = function (e) {
            for (var t, n = P(b(e)), r = [], i = 0; n.length > i;) o(D, t = n[i++]) || t == N || t == u || r.push(t);
            return r
        }, Q = function (e) {
            for (var t, n = e === V, r = P(n ? F : b(e)), i = [], a = 0; r.length > a;) !o(D, t = r[a++]) || n && !o(V, t) || i.push(D[t]);
            return i
        };
    U || (O = function () {
        if (this instanceof O) throw TypeError("Symbol is not a constructor!");
        var e = f(arguments.length > 0 ? arguments[0] : void 0), t = function (n) {
            this === V && t.call(F, n), o(this, N) && o(this[N], e) && (this[N][e] = !1), W(this, e, x(1, n))
        };
        return i && q && W(V, e, {configurable: !0, set: t}), G(e)
    }, s(O.prototype, "toString", function () {
        return this._k
    }), S.f = X, C.f = Y, n(97).f = T.f = Z, n(45).f = K, n(65).f = Q, i && !n(42) && s(V, "propertyIsEnumerable", K, !0), p.f = function (e) {
        return G(h(e))
    }), a(a.G + a.W + a.F * !U, {Symbol: O});
    for (var ee = "hasInstance,isConcatSpreadable,iterator,match,replace,search,species,split,toPrimitive,toStringTag,unscopables".split(","), te = 0; ee.length > te;) h(ee[te++]);
    for (var ee = E(h.store), te = 0; ee.length > te;) v(ee[te++]);
    a(a.S + a.F * !U, "Symbol", {
        for: function (e) {
            return o(B, e += "") ? B[e] : B[e] = O(e)
        }, keyFor: function (e) {
            if ($(e)) return g(B, e);
            throw TypeError(e + " is not a symbol!")
        }, useSetter: function () {
            q = !0
        }, useSimple: function () {
            q = !1
        }
    }), a(a.S + a.F * !U, "Object", {
        create: J,
        defineProperty: Y,
        defineProperties: z,
        getOwnPropertyDescriptor: X,
        getOwnPropertyNames: Z,
        getOwnPropertySymbols: Q
    }), I && a(a.S + a.F * (!U || c(function () {
        var e = O();
        return "[null]" != R([e]) || "{}" != R({a: e}) || "{}" != R(Object(e))
    })), "JSON", {
        stringify: function (e) {
            if (void 0 !== e && !$(e)) {
                for (var t, n, r = [e], o = 1; arguments.length > o;) r.push(arguments[o++]);
                return t = r[1], "function" == typeof t && (n = t), !n && y(t) || (t = function (e, t) {
                    if (n && (t = n.call(this, e, t)), !$(t)) return t
                }), r[1] = t, R.apply(I, r)
            }
        }
    }), O.prototype[L] || n(18)(O.prototype, L, O.prototype.valueOf), d(O, "Symbol"), d(Math, "Math", !0), d(r.JSON, "JSON", !0)
}, function (e, t, n) {
    var r = n(85), o = n(63).concat("length", "prototype");
    t.f = Object.getOwnPropertyNames || function (e) {
        return r(e, o)
    }
}, function (e, t, n) {
    var r = n(45), o = n(34), i = n(20), a = n(58), s = n(19), u = n(83), c = Object.getOwnPropertyDescriptor;
    t.f = n(14) ? c : function (e, t) {
        if (e = i(e), t = a(t, !0), u) try {
            return c(e, t)
        } catch (e) {
        }
        if (s(e, t)) return o(!r.f.call(e, t), e[t])
    }
}, function (e, t, n) {
    "use strict";
    function r() {
        if (!g) {
            g = document.createElement("div");
            var e = document.createElement("i");
            "dark" === __wxConfig.window.backgroundTextStyle ? e.style.backgroundImage = "url(" + l + ")" : e.style.backgroundImage = "url(" + c + ")", e.style.width = "32px", e.style.position = "absolute", e.style.height = "6px", e.style.left = "50%", e.style.bottom = "20px", e.style.backgroundRepeat = "no-repeat", e.style.marginLeft = "-16px", e.style.backgroundSize = "cover", g.appendChild(e), g.style.width = "100%", g.style.position = "fixed", g.style.top = "0px", g.style.backgroundColor = __wxConfig.window.backgroundColor, window.__curPage__.el.parentNode.insertBefore(g, window.__curPage__.el)
        }
    }
    function o() {
        window.__curPage__.el.addEventListener("touchstart", function (e) {
            0 == window.scrollY && (r(), h = !0, p = e.touches[0].pageY, window.__curPage__.el.style.transition = "all linear 0", g.style.transition = "all linear 0")
        }, !0)
    }
    function i() {
        window.__curPage__.el.addEventListener("touchmove", function (e) {
            h && __wxConfig.window.enablePullDownRefresh && !y && (v = e.touches[0].pageY - p, v = Math.max(0, v), v = Math.min(d, v), window.__curPage__.el.style.marginTop = v + "px", v += _, g.style.height = v + "px")
        })
    }
    function a() {
        window.__curPage__.el.addEventListener("touchend", function (e) {
            h = !1, v > f ? ("function" == typeof m && m(), v = f, window.__curPage__.el.style.marginTop = v + "px", g.style.height = v + _ + "px", setTimeout(s, 3e3)) : s()
        })
    }
    function s() {
        window.__curPage__.el.style.transition = "all linear 0.3s", window.__curPage__.el.style.marginTop = "0px", g && (g.style.transition = "all linear 0.3s", g.style.height = _ + "px")
    }
    function u(e) {
        y = e
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var c = "data:image/gif;base64,R0lGODlhQAAMAMQZAPT09Orq6ubm5unp6dPT06ysrPz8/NbW1q+vr9fX1+vr687Ozv39/fr6+tXV1Z6ens3NzZ2dnZubm66urpycnKurq+Xl5czMzJmZmf///wAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/wtYTVAgRGF0YVhNUDw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDphODFiMWQ5My0wMDIwLTRiYmItYjVlMS04YjI4NTFkMzMzMjIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjFEQzRGRkU4NkU4MTFFNjkwOTg4NjNGN0JEMzY0OTUiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjFEQzRGRkQ4NkU4MTFFNjkwOTg4NjNGN0JEMzY0OTUiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDplY2RjM2MyNC03NDBkLTQ1NzMtOTc0Ni1iZGQ2MzhlMjEyYjUiIHN0UmVmOmRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDo3MGUzZDU2Ny1jZTk1LTExNzktYWFmZC04MmQ1NzRhYmI2YzIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQJFAAZACwAAAAAQAAMAAAFvmCWMQTyPAjBiGzrukOyLMnw3jegCIICtIACZkgs/HC3xuHCbB4ayJshYKlaA4aRkMgtZKOtZXPsALuo1nQgQ+C6MQSzaDCuX2xyQHpvASDeXAhyGQl2YwmDCnxpChKARBSDEIZNEIMCi1YCjo8YD5KUTAuXmVUCf52CcoWhiHKKpQptnXFydKF4ZnqlAAZbbxVfcg6UZYMZaHxrGUFvRscZSnYOUMdTysIkExEREyrQLAMHMwe54AABPAFHGSEAIfkECRQAGQAsAAAAAEAADAAABb9gJgKKICiAqK4syxDI8yAE097tkCxLMqyGgGVIDBhwOEABw2wWUshW43CpWg8NkZDIDURdy6a4cPyqqNa0IwPgui1QM0FMxxDMokF6fxko3lwKeBkIdWIIgwl8aQkCgEQCgxKGTRSDEItWEI6PFpF4k5QYD5eZVQt/nYJ4haKIeIqmCW2dcV9zond4eqY/W29egwZhdRVleA6ZaxlBwMd4SnVPgyJTfA5ZKgABJgG21C8TERETNdQrAwc8Bz8iIQAh+QQFFAAZACwAAAAAQAAMAAAFv2AmDsmyJIOormwLKIKgAG3dMgTyPAjBqI3DZUg8NGw2Q8DCbAYMyBqggKlaC7SMkMh1RFvLpjjwXTGo1nTBMOC6L6lyBiCuW7JlQnqPISTeXAlyGQp2YgqDCHxpCBCARBCDAoZNAoMSi1YUjo8XC5KUTJZymJkYD3+dgnKFoYhyiqYIbZ1xZXSheF96pgQZDo9egxlhdmSDBmh8FVBBbw5Hw0rGUMNTfFgrAwcmB7bDIgABMQG6wzgTERETPiIhADs=",
        l = "data:image/gif;base64,R0lGODlhQAAMAIABAP///////yH/C05FVFNDQVBFMi4wAwEAAAAh/wtYTVAgRGF0YVhNUDw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDphODFiMWQ5My0wMDIwLTRiYmItYjVlMS04YjI4NTFkMzMzMjIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6M0Q5MjI2RkE4NkU1MTFFNkFDRDc5Mjc3OTE2NjVFRTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6M0Q5MjI2Rjk4NkU1MTFFNkFDRDc5Mjc3OTE2NjVFRTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDphODFiMWQ5My0wMDIwLTRiYmItYjVlMS04YjI4NTFkMzMzMjIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6YTgxYjFkOTMtMDAyMC00YmJiLWI1ZTEtOGIyODUxZDMzMzIyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Af/+/fz7+vn49/b19PPy8fDv7u3s6+rp6Ofm5eTj4uHg397d3Nva2djX1tXU09LR0M/OzczLysnIx8bFxMPCwcC/vr28u7q5uLe2tbSzsrGwr66trKuqqainpqWko6KhoJ+enZybmpmYl5aVlJOSkZCPjo2Mi4qJiIeGhYSDgoGAf359fHt6eXh3dnV0c3JxcG9ubWxramloZ2ZlZGNiYWBfXl1cW1pZWFdWVVRTUlFQT05NTEtKSUhHRkVEQ0JBQD8+PTw7Ojk4NzY1NDMyMTAvLi0sKyopKCcmJSQjIiEgHx4dHBsaGRgXFhUUExIREA8ODQwLCgkIBwYFBAMCAQAAIfkECRQAAQAsAAAAAEAADAAAAkVMgInG7a7Wmy+CZhWlOe3ZLaH3YWEJnaOErhd6uCscj7Q8w+6Nn3re6nV4tp/QQvQFjxFaLeN8IqVNZzE5pbKi2SiVUQAAIfkECRQAAQAsAAAAAEAADAAAAkWMgWnL3QmBmy7KZSGlWe3aXeH1YSNZBqN6pkfrnjL6yS47h7cd53q/AvosO1hq2CkGj60l01kKQqM/ZYZBvGGvWpPGUAAAIfkEBRQAAQAsAAAAAEAADAAAAkWMgWnL7amcbBCuWufEVj+OHCDgfWDJjGqGBivZvm/rrrRsxzmKq/de6o1+Pp0QQxwah8Uk0smpnWjSKLVZDVFTrG02UgAAOw==",
        d = 100, f = 50, h = !1, p = 0, v = 0, g = null, m = null, y = !1, _ = 42, b = {};
    t.default = {
        register: function (e) {
            window.__wxConfig && !b[window.__wxConfig.viewId] && window.__wxConfig.window && window.__wxConfig.window.enablePullDownRefresh && (m = e, o(), i(), a(), b[window.__wxConfig.viewId] = !0)
        }, reset: s, togglePullDownRefresh: u
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        var t = document.createElement("canvas");
        e.appendChild(t);
        var n = e.getBoundingClientRect(), r = t.getContext("2d");
        return t.height = n.height, t.width = n.width, (0, s.default)(t), r
    }
    function i(e) {
        4 == e.length && (e = e.replace(/[^#]/g, function (e) {
            return e + e
        }));
        var t = l.exec(e);
        return t ? {r: parseInt(t[1], 16), g: parseInt(t[2], 16), b: parseInt(t[3], 16)} : null
    }
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = function (e, t) {
        function n(o) {
            if (r.clearRect(0, 0, s, a), !v) {
                g || (g = o), e.parentNode || (v = !0);
                var i = (o - g) % u;
                r.beginPath(), r.strokeStyle = "rgba(" + d.r + ", " + d.g + ", " + d.b + ", 0.4)", r.arc(f, h, p, 0, 2 * Math.PI), r.lineWidth = t.width || 4, r.lineCap = "round", r.stroke();
                var l = -Math.PI / 2 + 2 * Math.PI * i / u, m = l + Math.PI / 2;
                r.beginPath(), r.strokeStyle = "rgba(" + d.r + ", " + d.g + ", " + d.b + ", 1)", r.arc(f, h, p, l, m), r.stroke(), (0, c.default)(n)
            }
        }
        t = t || [];
        var r = o(e), a = e.clientHeight || 32, s = e.clientWidth || 32, u = t.duration || 1e3,
            l = t.color || "#ffffff", d = i(l), f = a / 2, h = s / 2, p = Math.min(a, s) / 2 - 4, v = void 0,
            g = void 0;
        return (0, c.default)(n), function () {
            v = !0
        }
    };
    var a = n(184), s = r(a), u = n(47), c = r(u), l = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i
}, function (e, t) {
    e.exports = function (e, t) {
        if (e.indexOf) return e.indexOf(t);
        for (var n = 0; n < e.length; ++n) if (e[n] === t) return n;
        return -1
    }
}, function (e, t) {
    var n;
    n = function () {
        return this
    }();
    try {
        n = n || Function("return this")() || (0, eval)("this")
    } catch (e) {
        "object" == typeof window && (n = window)
    }
    e.exports = n
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(72), i = r(o), a = n(17), s = r(a), u = n(191), c = r(u),
        l = i.default.compile('\n<div>\n  <div class="wx-toast-mask"></div>\n  <div class="wx-toast">\n    {{if _.icon}}\n      <i class="wx-toast-icon wx-icon-{{= _.icon}}" style="font-size: 55px; color: rgb(255, 255, 255);display: block;">\n    {{/}}\n    </i><p class="wx-toast-content">{{= _.title}}</p>\n  </div>\n</div>\n'),
        d = null;
    t.default = {
        show: function (e) {
            var t = this, n = e.duration, r = void 0 === n ? 1500 : n, o = e.icon, i = e.title, a = e.mask;
            this.hide(), r = Math.min(r, 1e4);
            var u = (0, s.default)(l({title: i, icon: o}));
            this.el = u, document.body.appendChild(u), a && (d = (0, c.default)()), this.timeout = setTimeout(function () {
                u.parentNode && document.body.removeChild(u), d && d(), t.el = null
            }, r)
        }, hide: function () {
            window.clearTimeout(this.timeout), d && d(), this.el && (this.el.parentNode.removeChild(this.el), this.el = null)
        }
    }
}, function (e, t) {
    var n = window.addEventListener ? "addEventListener" : "attachEvent",
        r = window.removeEventListener ? "removeEventListener" : "detachEvent",
        o = "addEventListener" !== n ? "on" : "";
    t.bind = function (e, t, r, i) {
        return e[n](o + t, r, i || !1), r
    }, t.unbind = function (e, t, n, i) {
        return e[r](o + t, n, i || !1), n
    }
}, function (e, t, n) {
    try {
        var r = n(73)
    } catch (e) {
        var r = n(73)
    }
    try {
        var o = n(75)
    } catch (e) {
        var o = n(75)
    }
    t.bind = function (e, t, n, i, a) {
        return o.bind(e, n, function (n) {
            var o = n.target || n.srcElement;
            n.delegateTarget = r(o, t, !0, e), n.delegateTarget && i.call(e, n)
        }, a)
    }, t.unbind = function (e, t, n, r) {
        o.unbind(e, t, n, r)
    }
}, function (e, t, n) {
    function r(e, t) {
        if (!e || 1 !== e.nodeType) return !1;
        if (a) return a.call(e, t);
        for (var n = o.all(t, e.parentNode), r = 0; r < n.length; ++r) if (n[r] == e) return !0;
        return !1
    }
    try {
        var o = n(74)
    } catch (e) {
        var o = n(74)
    }
    var i = Element.prototype,
        a = i.matches || i.webkitMatchesSelector || i.mozMatchesSelector || i.msMatchesSelector || i.oMatchesSelector;
    e.exports = r
}, function (e, t) {
    t.distance = function (e) {
        var t = Math.pow(e[0] - e[2], 2), n = Math.pow(e[1] - e[3], 2);
        return Math.sqrt(t + n)
    }, t.midpoint = function (e) {
        var t = {};
        return t.x = (e[0] + e[2]) / 2, t.y = (e[1] + e[3]) / 2, t
    }, Object.defineProperty(t, "viewport", {
        get: function () {
            return {
                height: Math.max(document.documentElement.clientHeight, window.innerHeight || 0),
                width: Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
            }
        }
    }), t.getAngle = function (e, t, n, r) {
        if (e == n && t == r) return 0;
        var o = Math.atan((r - t) / (n - e));
        return n < e ? o + Math.PI : o
    }, t.limit = function (e, t, n) {
        return e < n.minx ? e = n.minx : e > n.maxx && (e = n.maxx), t < n.miny ? t = n.miny : t > n.maxy && (t = n.maxy), {
            x: e,
            y: t
        }
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        w = e
    }
    function i(e) {
        return "number" == typeof e
    }
    function a(e) {
        var t = null;
        if (null != (t = /^#([0-9|A-F|a-f]{6})$/.exec(e))) {
            var n = parseInt(t[1].slice(0, 2), 16), r = parseInt(t[1].slice(2, 4), 16), o = parseInt(t[1].slice(4), 16);
            return [n, r, o, 255]
        }
        if (null != (t = /^rgb\((.+)\)$/.exec(e))) return t[1].split(",").map(function (e) {
            return parseInt(e.trim())
        }).concat(255);
        if (null != (t = /^rgba\((.+)\)$/.exec(e))) return t[1].split(",").map(function (e, t) {
            return 3 == t ? Math.floor(255 * parseFloat(e.trim())) : parseInt(e.trim())
        });
        var i = e.toLowerCase();
        if (g.predefinedColor.hasOwnProperty(i)) {
            t = /^#([0-9|A-F|a-f]{6})$/.exec(g.predefinedColor[i]);
            var n = parseInt(t[1].slice(0, 2), 16), r = parseInt(t[1].slice(2, 4), 16), o = parseInt(t[1].slice(4), 16);
            return [n, r, o, 255]
        }
        console.group("非法颜色: " + e), console.error("不支持颜色：" + e), console.groupEnd()
    }
    function s(e) {
        if (Array.isArray(e)) {
            var t = [];
            return e.forEach(function (e) {
                t.push(s(e))
            }), t
        }
        if ("object" === (void 0 === e ? "undefined" : (0, h.default)(e))) {
            var t = {};
            for (var n in e) t[n] = s(e[n]);
            return t
        }
        return e
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var u = n(0), c = r(u), l = n(1), d = r(l), f = n(4), h = r(f), p = n(109), v = r(p), g = n(225),
        m = ["scale", "rotate", "translate", "save", "restore"],
        y = ["drawImage", "fillText", "fill", "stroke", "fillRect", "strokeRect", "clearRect"],
        _ = ["beginPath", "moveTo", "lineTo", "rect", "arc", "quadraticCurveTo", "bezierCurveTo", "closePath"],
        b = ["setFillStyle", "setStrokeStyle", "setGlobalAlpha", "setShadow", "setFontSize", "setLineCap", "setLineJoin", "setLineWidth", "setMiterLimit"],
        w = "", x = function () {
            function e(t, n) {
                (0, c.default)(this, e), this.type = t, this.data = n, this.colorStop = []
            }
            return (0, d.default)(e, [{
                key: "addColorStop", value: function (e, t) {
                    this.colorStop.push([e, a(t)])
                }
            }]), e
        }(), k = function () {
            function e(t) {
                (0, c.default)(this, e), this.actions = [], this.path = [], this.canvasId = t
            }
            return (0, d.default)(e, [{
                key: "getActions", value: function () {
                    var e = s(this.actions);
                    return this.actions = [], this.path = [], e
                }
            }, {
                key: "clearActions", value: function () {
                    this.actions = [], this.path = []
                }
            }, {
                key: "draw", value: function () {
                    var e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0], t = this.canvasId,
                        n = s(this.actions);
                    this.actions = [], this.path = [], v.default.drawCanvas({canvasId: t, actions: n, reserve: e})
                }
            }, {
                key: "createLinearGradient", value: function (e, t, n, r) {
                    return new x("linear", [e, t, n, r])
                }
            }, {
                key: "createCircularGradient", value: function (e, t, n) {
                    return new x("radial", [e, t, n])
                }
            }]), e
        }();
    [].concat(m, y).forEach(function (e) {
        var t = void 0;
        k.prototype[e] = "fill" == e || "stroke" == e ? function () {
            this.actions.push({method: e + "Path", data: s(this.path)})
        } : "fillRect" === e ? function (e, t, n, r) {
            this.actions.push({method: "fillPath", data: [{method: "rect", data: [e, t, n, r]}]})
        } : "strokeRect" === e ? function (e, t, n, r) {
            this.actions.push({method: "strokePath", data: [{method: "rect", data: [e, t, n, r]}]})
        } : "fillText" == e ? function (t, n, r) {
            this.actions.push({method: e, data: [t.toString(), n, r]})
        } : "drawImage" == e ? function (n, r, o, a, s) {
            t = i(a) && i(s) ? [n, r, o, a, s] : [n, r, o], this.actions.push({method: e, data: t})
        } : function () {
            this.actions.push({method: e, data: [].slice.apply(arguments)})
        }
    }), _.forEach(function (e) {
        "beginPath" == e ? k.prototype[e] = function () {
            this.path = []
        } : "lineTo" == e ? k.prototype.lineTo = function () {
            0 == this.path.length ? this.path.push({
                method: "moveTo",
                data: [].slice.apply(arguments)
            }) : this.path.push({method: "lineTo", data: [].slice.apply(arguments)})
        } : k.prototype[e] = function () {
            this.path.push({method: e, data: [].slice.apply(arguments)})
        }
    }), b.forEach(function (e) {
        k.prototype[e] = "setFillStyle" == e || "setStrokeStyle" == e ? function () {
            var t = arguments[0];
            "string" == typeof t ? this.actions.push({
                method: e,
                data: ["normal", a(t)]
            }) : "object" === (void 0 === t ? "undefined" : (0, h.default)(t)) && t instanceof x && this.actions.push({
                method: e,
                data: [t.type, t.data, t.colorStop]
            })
        } : "setGlobalAlpha" === e ? function () {
            var t = [].slice.apply(arguments, [0, 1]);
            t[0] = Math.floor(255 * parseFloat(t[0])), this.actions.push({method: e, data: t})
        } : "setShadow" == e ? function () {
            var t = [].slice.apply(arguments, [0, 4]);
            t[3] = a(t[3]), this.actions.push({method: e, data: t})
        } : function () {
            this.actions.push({method: e, data: [].slice.apply(arguments, [0, 1])})
        }
    }), t.default = {notifyCurrentRoutetoContext: o, Context: k}
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e, t) {
        return e + "canvas" + t
    }
    function i() {
        for (var e in _) 0 == e.indexOf(m + "canvas") && (_[e], delete _[e])
    }
    function a(e) {
        m = e
    }
    function s(e, t) {
        var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
        ServiceJSBridge.publish("canvas" + e + "actionsChanged", {actions: t, reserve: n})
    }
    function u(e) {
        var t = e.canvasId, n = e.actions, r = e.reserve, i = e.success, a = e.fail, u = e.complete;
        if (t && Array.isArray(n)) {
            var c = o(m, t);
            if ("number" == typeof _[c]) {
                var t = _[c];
                s(t, n, r, i, a, u)
            } else b[c] = b[c] || [], b[c] = b[c].concat({actions: n, reserve: r, success: i, fail: a, complete: u})
        }
    }
    function c(e) {
        ServiceJSBridge.subscribe("onCanvasToDataUrl_" + e.canvasId, function (t) {
            var n = t.dataUrl;
            f.default.invokeMethod("base64ToTempFilePath", g.default.assign({base64Data: n}, e), {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("base64ToTempFilePath", "canvasToTempFilePath")
                }
            })
        }), f.default.publish("invokeCanvasToDataUrl_" + e.canvasId, {canvasId: e.canvasId})
    }
    function l(e) {
        if (e.canvasId) {
            var t = o(m, e.canvasId);
            if ("number" == typeof _[t]) e.canvasId = _[t], c(e); else {
                var n = {errMsg: "canvasToTempFilePath: fail canvas is empty"};
                "function" == typeof e.fail && e.fail(n), "function" == typeof e.complete && e.complete(n)
            }
        }
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var d = n(38), f = r(d), h = n(108), p = r(h), v = n(7), g = r(v), m = 0, y = {}, _ = {}, b = {};
    ServiceJSBridge.subscribe("canvasInsert", function (e, t) {
        var n = e.canvasId, r = e.canvasNumber, i = e.data, a = o(m, n);
        y[r] = {lastTouches: [], data: i}, _[a] = _[a] || r, Array.isArray(b[a]) && (b[a].forEach(function (e) {
            s(r, e.actions, e.reserve, e.success, e.fail, e.complete)
        }), delete b[a])
    }), ServiceJSBridge.subscribe("canvasRemove", function (e, t) {
        var n = e.canvasId, r = o(m, n);
        _[r] && delete _[r]
    });
    var w = function () {
        return new p.default.Context
    }, x = function (e) {
        return new p.default.Context(e)
    };
    t.default = {
        canvasInfo: y,
        clearOldWebviewCanvas: i,
        notifyWebviewIdtoCanvas: a,
        drawCanvas: u,
        canvasToTempFilePath: l,
        createContext: w,
        createCanvasContext: x
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o, i = n(13), a = r(i), s = n(4), u = r(s), c = n(7), l = r(c), d = n(228), f = r(d), h = n(235), p = n(111),
        v = [], g = [];
    __wxConfig__.tabBar && __wxConfig__.tabBar.list && "object" === (0, u.default)(__wxConfig__.tabBar.list) && "function" == typeof __wxConfig__.tabBar.list.forEach && __wxConfig__.tabBar.list.forEach(function (e) {
        g.push(e.pagePath)
    });
    var m = {appRouteTime: 0, newPageTime: 0, pageReadyTime: 0}, y = {}, _ = {}, b = 0, w = function () {
        return o
    }, x = function () {
        var e = [];
        return v.forEach(function (t) {
            e.push(t.page)
        }), e
    }, k = function (e) {
        if (!__wxRouteBegin) throw l.default.error("Page 注册错误", "Please do not register multiple Pages in " + __wxRoute + ".js");
        __wxRouteBegin = !1;
        var t = __wxConfig__.pages, n = __wxRoute || t[b];
        if (b++, "Object" !== l.default.getDataType(e)) throw l.default.error("Page 注册错误", "Options is not object: " + (0, a.default)(e) + " in " + __wxRoute + ".js");
        l.default.info("Register Page: " + n), _[n] = e
    }, T = Reporter.surroundThirdByTryCatch(function (e, t) {
        l.default.info("Update view with init data");
        var n = {};
        n.webviewId = t, n.enablePullUpRefresh = e.hasOwnProperty("onReachBottom");
        var r = {data: {data: e.data, ext: n, options: {firstRender: !0}}};
        l.default.publish("appDataChange", r, [t])
    }), S = function (e, t, n) {
        var r = void 0;
        _.hasOwnProperty(e) ? r = _[e] : (l.default.warn("Page route 错误", "Page[" + e + "] not found. May be caused by: 1. Forgot to add page route in app.json. 2. Invoking Page() in async task."), r = {}), m.newPageTime = Date.now();
        var i = new f.default(r, t, e);
        o = {page: i, webviewId: t, route: e}, v.push(o), y[t] = {
            params: n,
            page: i,
            route: e
        }, T(i, t), (0, p.triggerAnalytics)("enterPage", i)
    }, C = function (e) {
        document.dispatchEvent(new CustomEvent("leavePage", {})), e.page.onHide(), (0, p.triggerAnalytics)("leavePage", e.page)
    }, E = function (e) {
        e.page.onUnload(), delete y[e.webviewId], v = v.slice(0, v.length - 1), (0, p.triggerAnalytics)("leavePage", e.page)
    }, M = function (e) {
        return -1 !== g.indexOf(e.route) || -1 !== g.indexOf(e.route + ".html")
    }, A = function (e, t, n, r) {
        if (l.default.info("On app route: " + e), m.appRouteTime = Date.now(), "navigateTo" === r) o && C(o), y.hasOwnProperty(t) ? l.default.error("Page route 错误(system error)", "navigateTo with an already exist webviewId " + t) : S(e, t, n); else if ("redirectTo" === r) o && E(o), y.hasOwnProperty(t) ? l.default.error("Page route 错误(system error)", "redirectTo with an already exist webviewId " + t) : S(e, t, n); else if ("navigateBack" === r) {
            for (var i = !1, a = v.length - 1; a >= 0; a--) {
                var s = v[a];
                if (s.webviewId === t) {
                    i = !0, o = s, s.page.onShow(), (0, p.triggerAnalytics)("enterPage", s);
                    break
                }
                E(s)
            }
            i || l.default.error("Page route 错误(system error)", "navigateBack with an unexist webviewId " + t)
        } else if ("reLaunch" === r) o && E(o), y.hasOwnProperty(t) ? l.default.error("Page route 错误(system error)", "redirectTo with an already exist webviewId " + t) : S(e, t, n); else if ("switchTab" === r) {
            for (var u = !0; v.length > 1;) E(v[v.length - 1]), u = !1;
            if (v[0].webviewId === t) o = v[0], u || o.page.onShow(); else if (M(v[0]) ? u && C(v[0]) : E(v[0]), y.hasOwnProperty(t)) {
                var c = y[t].page;
                o = {webviewId: t, route: e, page: c}, v = [o], c.onShow(), (0, p.triggerAnalytics)("enterPage", c)
            } else v = [], S(e, t, n)
        } else "appLaunch" === r ? y.hasOwnProperty(t) ? l.default.error("Page route 错误(system error)", "appLaunch with an already exist webviewId " + t) : S(e, t, n) : l.default.error("Page route 错误(system error)", "Illegal open type: " + r)
    }, P = function (e, t, n) {
        if (!y.hasOwnProperty(e)) return l.default.warn("事件警告", "OnWebviewEvent: " + t + ", WebviewId: " + e + " not found");
        var r = y[e], o = r.page;
        t === h.DOM_READY_EVENT ? (o.onLoad(r.params), o.onShow(), m.pageReadyTime = Date.now(), l.default.info("Invoke event onReady in page: " + r.route), o.onReady()) : (l.default.info("Invoke event " + t + " in page: " + r.route), o.hasOwnProperty(t) ? l.default.safeInvoke.call(o, t, n) : l.default.warn("事件警告", "Do not have " + t + " handler in current page: " + r.route + ". Please make sure that " + t + " handler has been defined in " + r.route + ", or " + r.route + " has been added into app.json"))
    }, O = function (e) {
        y.hasOwnProperty(e) || l.default.warn("事件警告", "onPullDownRefresh WebviewId: " + e + " not found");
        var t = y[e], n = t.page;
        n.hasOwnProperty("onPullDownRefresh") && (l.default.info("Invoke event onPullDownRefresh in page: " + t.route), l.default.safeInvoke.call(n, "onPullDownRefresh"), (0, p.triggerAnalytics)("pullDownRefresh", n))
    }, I = function (e, t) {
        var n = e, r = y[t], o = r.page;
        if (o.hasOwnProperty("onShareAppMessage")) {
            l.default.info("Invoke event onShareAppMessage in page: " + r.route);
            var i = l.default.safeInvoke.call(o, "onShareAppMessage") || {};
            n.title = i.title || e.title, n.desc = i.desc || e.desc, n.path = i.path ? l.default.addHTMLSuffix(i.path) : e.path, n.path.length > 0 && "/" === n.path[0] && (n.path = n.path.substr(1)), n.success = i.success, n.cancel = i.cancel, n.fail = i.fail, n.complete = i.complete
        }
        return n
    }, R = function (e, t) {
        var n = I(e, t);
        ServiceJSBridge.invoke("shareAppMessage", n, function (e) {
            / ^shareAppMessage: ok /.test(e.errMsg) && "function" == typeof n.success ? n.success(e) : /^shareAppMessage:cancel/.test(e.errMsg) && "function" == typeof n.cancel ? n.cancel(e) : /^shareAppMessage:fail/.test(e.errMsg) && "function" == typeof n.fail && n.fail(e), "function" == typeof n.complete && n.complete(e)
        })
    }, N = function () {
        o = void 0, y = {}, _ = {}, v = [], b = 0
    }, L = function (e) {
        __wxConfig__ = e
    }, j = function (e) {
        __wxRoute = e
    }, B = function (e) {
        __wxRouteBegin = e
    }, D = function () {
        return y
    }, F = function () {
        return _
    };
    wx.onAppRoute(Reporter.surroundThirdByTryCatch(function (e) {
        var t = e.path, n = e.webviewId, r = e.query || {}, o = e.openType;
        A(t, n, r, o)
    }), "onAppRoute"), wx.onWebviewEvent(Reporter.surroundThirdByTryCatch(function (e) {
        var t = e.webviewId, n = e.eventName, r = e.data;
        return P(t, n, r)
    }, "onWebviewEvent")), ServiceJSBridge.on("onPullDownRefresh", Reporter.surroundThirdByTryCatch(function (e, t) {
        O(t)
    }, "onPullDownRefresh")), ServiceJSBridge.on("onShareAppMessage", Reporter.surroundThirdByTryCatch(R, "onShareAppMessage")), t.default = {
        getRouteToPage: F,
        getWebviewIdToPage: D,
        setWxRouteBegin: B,
        setWxRoute: j,
        setWxConfig: L,
        reset: N,
        pageHolder: k,
        getCurrentPages: x,
        getCurrentPage: w
    }
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    t.triggerAnalytics = function (e, t, n) {
        var r = {};
        t && (r.pageRoute = t.__route__), n && (r.desc = n), ServiceJSBridge.publish("H5_LOG_MSG", {
            event: e,
            desc: r
        }, [t && t.__wxWebviewId__ || ""])
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(5), i = r(o), a = n(30), s = r(a), u = function () {
    };
    u.prototype = (0, i.default)(Object.prototype, {constructor: {value: u, writable: !0, configurable: !0}});
    var c = ["created", "attached", "detached"], l = 1;
    u.create = function (e) {
        var t = String(l++),
            n = u.list[e.is || ""] = (0, i.default)(u.prototype, {is: {value: e.is || ""}, _id: {value: t}});
        n.template = e.template, n.properties = (0, i.default)(null), n.methods = (0, i.default)(null), n.listeners = (0, i.default)(null);
        for (var r = n.ancestors = [], o = "", a = 0; a < (e.behaviors || []).length; a++) {
            var s = e.behaviors[a];
            "string" == typeof s && (s = u.list[s]);
            for (o in s.properties) n.properties[o] = s.properties[o];
            for (o in s.methods) n.methods[o] = s.methods[o];
            for (var d = 0; d < s.ancestors.length; d++) r.indexOf(s.ancestors[d]) < 0 && r.push(s.ancestors[d])
        }
        for (o in e.properties) n.properties[o] = e.properties[o];
        for (o in e.listeners) n.listeners[o] = e.listeners[o];
        for (o in e) "function" == typeof e[o] && (c.indexOf(o) < 0 ? n.methods[o] = e[o] : n[o] = e[o]);
        return r.push(n), n
    }, u.list = (0, i.default)(null), u.prototype.hasBehavior = function (e) {
        for (var t = 0; t < this.ancestors.length; t++) if (this.ancestors[t].is === e) return !0;
        return !1
    }, u.prototype.getAllListeners = function () {
        for (var e = (0, i.default)(null), t = this.ancestors, n = 0; n < t.length; n++) {
            var r = this.ancestors[n];
            for (var o in r.listeners) e[o] ? e[o].push(r.listeners[o]) : e[o] = [r.listeners[o]]
        }
        return e
    }, u.prototype.getAllLifeTimeFuncs = function () {
        var e = (0, i.default)(null), t = this.ancestors;
        return c.forEach(function (n) {
            for (var r = e[n] = s.default.create("Lifetime Method"), o = 0; o < t.length; o++) {
                var i = t[o];
                i[n] && r.add(i[n])
            }
        }), e
    }, t.default = u
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(5), i = r(o), a = n(39), s = r(a), u = function () {
    };
    u.prototype = (0, i.default)(s.default.prototype, {
        constructor: {
            value: u,
            writable: !0,
            configurable: !0
        }
    }), u.create = function (e) {
        var t = (0, i.default)(u.prototype);
        return t.__virtual = !0, t.is = e, s.default.initialize(t, null), t
    }, t.default = u
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(5), i = r(o), a = n(50), s = r(a), u = function () {
    };
    u.prototype = (0, i.default)(Object.prototype, {
        constructor: {
            value: u,
            writable: !0,
            configurable: !0
        }
    }), u.create = function (e) {
        var t = (0, i.default)(u.prototype);
        return t.$$ = t.__domElement = document.createTextNode(e || ""), t.__domElement.__wxElement = t, t.__subtreeObserversCount = 0, t.parentNode = null, t
    }, Object.defineProperty(u.prototype, "textContent", {
        get: function () {
            return this.__domElement.textContent
        }, set: function (e) {
            this.__domElement.textContent = e, (this.__textObservers && !this.__textObservers.empty || this.__subtreeObserversCount) && s.default._callObservers(this, "__textObservers", {
                type: "characterData",
                target: this
            })
        }
    }), t.default = u
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = !function () {
        window.exparser.registerElement({
            is: "wx-input",
            template: '\n      <div id="wrapper" disabled$="{{disabled}}">\n        <input id="input" type$="{{_getType(type,password)}}" maxlength$="{{maxlength}}" value$="{{showValue}}" disabled$="{{disabled}}" >\n        <div id="placeholder" class$="{{_getPlaceholderClass(placeholderClass)}}" style$="{{_getPlaceholderStyle(placeholderStyle)}}" parse-text-content>{{placeholder}}</p>\n      </div>\n      ',
            behaviors: ["wx-base", "wx-data-Component"],
            properties: {
                focus: {type: Boolean, value: 0, coerce: "_focusChange", public: !0},
                autoFocus: {type: Boolean, value: !1, public: !0},
                placeholder: {type: String, value: "", observer: "_placeholderChange", public: !0},
                placeholderStyle: {type: String, value: "", public: !0},
                placeholderClass: {type: String, value: "", public: !0, observer: "_placeholderClassChange"},
                value: {type: String, value: "", coerce: "defaultValueChange", public: !0},
                showValue: {type: String, value: ""},
                maxlength: {type: Number, value: 140, observer: "_maxlengthChanged", public: !0},
                type: {type: String, value: "text", public: !0},
                password: {type: Boolean, value: !1, public: !0},
                disabled: {type: Boolean, value: !1, public: !0},
                bindinput: {type: String, value: "", public: !0},
                confirmHold: {type: Boolean, value: !1, public: !0}
            },
            listeners: {
                tap: "_inputFocus",
                "input.focus": "_inputFocus",
                "input.blur": "_inputBlur",
                "input.input": "_inputKey"
            },
            resetFormData: function () {
                this._keyboardShow && (this.__formResetCallback = !0, wd.hideKeyboard()), this.value = "", this.showValue = ""
            },
            getFormData: function (e) {
                this._keyboardShow ? this.__formCallback = e : "function" == typeof e && e(this.value)
            },
            _formGetDataCallback: function () {
                "function" == typeof this.__formCallback && this.__formCallback(this.value), this.__formCallback = void 0
            },
            _focusChange: function (e) {
                return this._couldFocus(e), e
            },
            _couldFocus: function (e) {
                var t = this;
                this._attached && (!this._keyboardShow && e ? window.requestAnimationFrame(function () {
                    t._inputFocus()
                }) : this._keyboardShow && !e && this.$.input.blur())
            },
            _getPlaceholderClass: function (e) {
                return "input-placeholder " + e
            },
            _maxlengthChanged: function (e, t) {
                var n = this.value.slice(0, e);
                n != this.value && (this.value = n)
            },
            _placeholderChange: function () {
                this._checkPlaceholderStyle(this.value)
            },
            attached: function () {
                var e = this;
                this._placeholderClassChange(this.placeholderClass), this._checkPlaceholderStyle(this.value), this._attached = !0, this._value = this.value, this.updateInput(), window.__onAppRouteDone && this._couldFocus(this.autoFocus || this.focus), this.__routeDoneId = exparser.addListenerToElement(document, "routeDone", function () {
                    e._couldFocus(e.autoFocus || e.focus)
                }), this.__setKeyboardValueId = exparser.addListenerToElement(document, "setKeyboardValue", function (t) {
                    if (e._keyboardShow) {
                        var n = t.detail.value, r = t.detail.cursor;
                        void 0 !== n && (e._value = n, e.value = n), void 0 !== r && -1 != r && e.$.input.setSelectionRange(r, r)
                    }
                }), this.__hideKeyboardId = exparser.addListenerToElement(document, "hideKeyboard", function (t) {
                    e._keyboardShow && e.$.input.blur()
                }), this.__onDocumentTouchStart = this.onDocumentTouchStart.bind(this), this.__updateInput = this.updateInput.bind(this), this.__inputKeyUp = this._inputKeyUp.bind(this), this.$.input.addEventListener("keyup", this.__inputKeyUp), document.addEventListener("touchstart", this.__onDocumentTouchStart), document.addEventListener("pageReRender", this.__updateInput), (this.autoFocus || this.focus) && setTimeout(function () {
                    e._couldFocus(e.autoFocus || e.focus)
                }, 500)
            },
            detached: function () {
                document.removeEventListener("pageReRender", this.__updateInput), document.removeEventListener("touchstart", this.__onDocumentTouchStart), this.$.input.removeEventListener("keyup", this.__inputKeyUp), exparser.removeListenerFromElement(document, "routeDone", this.__routeDoneId), exparser.removeListenerFromElement(document, "hideKeyboard", this.__hideKeyboardId), exparser.removeListenerFromElement(document, "onKeyboardComplete", this.__onKeyboardCompleteId), exparser.removeListenerFromElement(document, "setKeyboardValue", this.__setKeyboardValueId)
            },
            onDocumentTouchStart: function () {
                this._keyboardShow && this.$.input.blur()
            },
            _getType: function (e, t) {
                var n = {digit: "number", number: "number", email: "email", password: "password"};
                return t && "password" || n[e] || "text"
            },
            _showValueChange: function (e) {
                this.$.input.value = e
            },
            _inputFocus: function (e) {
                this.disabled || this._keyboardShow || (this._keyboardShow = !0, this.triggerEvent("focus", {value: this.value}), this.$.input.focus())
            },
            _inputBlur: function (e) {
                this._keyboardShow = !1, this.value = this._value, this._formGetDataCallback(), this.triggerEvent("change", {value: this.value}), this.triggerEvent("blur", {value: this.value}), this._checkPlaceholderStyle(this.value)
            },
            _inputKeyUp: function (e) {
                if (13 == e.keyCode) return this.triggerEvent("confirm", {value: this._value}), void(this.confirmHold || (this.value = this._value, this.$.input.blur()))
            },
            _inputKey: function (e) {
                var t = e.target.value;
                if (this._value = t, this._checkPlaceholderStyle(t), this.bindinput) {
                    var n = {
                        id: this.$$.id,
                        dataset: this.dataset,
                        offsetTop: this.$$.offsetTop,
                        offsetLeft: this.$$.offsetLeft
                    };
                    WeixinJSBridge.publish("SPECIAL_PAGE_EVENT", {
                        eventName: this.bindinput,
                        data: {
                            ext: {setKeyboardValue: !0},
                            data: {
                                type: "input",
                                timestamp: Date.now(),
                                detail: {value: e.target.value, cursor: this.$.input.selectionStart},
                                target: n,
                                currentTarget: n,
                                touches: []
                            },
                            eventName: this.bindinput
                        }
                    })
                }
                return !1
            },
            updateInput: function () {
                var e = window.getComputedStyle(this.$$), t = this.$$.getBoundingClientRect(),
                    n = (["Left", "Right"].map(function (t) {
                        return parseFloat(e["border" + t + "Width"]) + parseFloat(e["padding" + t])
                    }), ["Top", "Bottom"].map(function (t) {
                        return parseFloat(e["border" + t + "Width"]) + parseFloat(e["padding" + t])
                    })), r = this.$.input, o = t.height - n[0] - n[1];
                o != this.__lastHeight && (r.style.height = o + "px", r.style.lineHeight = o + "px", this.__lastHeight = o), r.style.color = e.color;
                var i = this.$.placeholder;
                i.style.height = t.height - n[0] - n[1] + "px", i.style.lineHeight = i.style.height
            },
            defaultValueChange: function (e, t) {
                return this.maxlength > 0 && (e = e.slice(0, this.maxlength)), this._checkPlaceholderStyle(e), this._showValueChange(e), this._value = e, e
            },
            _getPlaceholderStyle: function (e) {
                return e
            },
            _placeholderClassChange: function (e) {
                var t = e.split(/\s/);
                this._placeholderClass = [];
                for (var n = 0; n < t.length; n++) t[n] && this._placeholderClass.push(t[n])
            },
            _checkPlaceholderStyle: function (e) {
                var t = this._placeholderClass || [], n = this.$.placeholder;
                if (e) {
                    if (this._placeholderShow && (n.classList.remove("input-placeholder"), n.setAttribute("style", ""), t.length > 0)) for (var r = 0; r < t.length; r++) n.classList.contains(t[r]) && n.classList.remove(t[r]);
                    n.style.display = "none", this._placeholderShow = !1
                } else {
                    if (!this._placeholderShow && (n.classList.add("input-placeholder"), this.placeholderStyle && n.setAttribute("style", this.placeholderStyle), t.length > 0)) for (var r = 0; r < t.length; r++) n.classList.add(t[r]);
                    n.style.display = "", this.updateInput(), this._placeholderShow = !0
                }
            }
        })
    }()
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e, t) {
        exparser.Component.hasProperty(e, t) ? e[t] = void 0 : "bind" === t.slice(0, 4) ? w(e, t.slice(4), "") : "catch" === t.slice(0, 5) ? w(e, t.slice(5), "", !0) : "on" === t.slice(0, 2) ? w(e, t.slice(2), "") : (-1 !== h.default.ATTRIBUTE_NAME.indexOf(t) || y.test(t)) && e.$$.removeAttribute(t)
    }
    function i(e, t) {
        e.dataset = e.dataset || {};
        for (var n in t) !function (n) {
            var r = t[n], i = exparser.Component.hasProperty(e, n);
            if (/^data-/.test(n)) {
                var a = v.default.dashToCamelCase(n.substring(5).toLowerCase());
                e.dataset[a] = r
            }
            if (void 0 === r) o(e, n); else if (i) -1 !== h.default.INLINE_STYLE.indexOf(n) ? e[n] = m.default.transformRpx(r, !0) : e[n] = r; else if ("bind" === n.slice(0, 4)) w(e, n.slice(4), r); else if ("catch" === n.slice(0, 5)) w(e, n.slice(5), r, !0); else if ("on" === n.slice(0, 2)) w(e, n.slice(2), r); else {
                var s = -1 !== h.default.ATTRIBUTE_NAME.indexOf(n) || y.test(n);
                if (s) "style" === n ? function () {
                    var t = e.animationStyle || {}, o = t.transition, i = t.transform, a = t.transitionProperty,
                        s = t.transformOrigin,
                        u = {transition: o, transform: i, transitionProperty: a, transformOrigin: s};
                    u["-webkit-transition"] = u.transition, u["-webkit-transform"] = u.transform, u["-webkit-transition-property"] = u.transitionProperty, u["-webkit-transform-origin"] = u.transformOrigin;
                    var c = (0, d.default)(u).filter(function (e) {
                        return !(/transform|transition/i.test(e) && "" === u[e] || "" === e.trim() || void 0 === u[e] || "" === u[e] || !isNaN(parseInt(e)))
                    }).map(function (e) {
                        return e.replace(/([A-Z]{1})/g, function (e) {
                            return "-" + e.toLowerCase()
                        }) + ":" + u[e]
                    }).join(";");
                    e.$$.setAttribute(n, m.default.transformRpx(r, !0) + c)
                }() : e.$$.setAttribute(n, r); else {
                    var u = "animation" === n && "object" === (void 0 === r ? "undefined" : (0, c.default)(r)),
                        l = r.actions && r.actions.length > 0;
                    u && l && function () {
                        var t = function () {
                            if (n < i) {
                                var t = wd.animationToStyle(o[n]), r = t.transition, a = t.transitionProperty,
                                    s = t.transform, u = t.transformOrigin, c = t.style;
                                e.$$.style.transition = r, e.$$.style.transitionProperty = a, e.$$.style.transform = s, e.$$.style.transformOrigin = u, e.$$.style.webkitTransition = r, e.$$.style.webkitTransitionProperty = a, e.$$.style.webkitTransform = s, e.$$.style.webkitTransformOrigin = u;
                                for (var l in c) e.$$.style[l] = m.default.transformRpx(" " + c[l], !0);
                                e.animationStyle = {
                                    transition: r,
                                    transform: s,
                                    transitionProperty: a,
                                    transformOrigin: u
                                }
                            }
                        }, n = 0, o = r.actions, i = r.actions.length;
                        e.addListener("transitionend", function () {
                            n += 1, t()
                        }), t()
                    }()
                }
            }
        }(n)
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var a = n(5), s = r(a), u = n(4), c = r(u), l = n(9), d = r(l), f = n(40), h = r(f), p = n(276), v = r(p), g = n(7),
        m = r(g), y = /^data-/, _ = function (e) {
            return {id: e.id, offsetLeft: e.$$.offsetLeft, offsetTop: e.$$.offsetTop, dataset: e.dataset}
        }, b = function (e) {
            if (e) {
                for (var t = [], n = 0; n < e.length; n++) {
                    var r = e[n];
                    t.push({
                        identifier: r.identifier,
                        pageX: r.pageX,
                        pageY: r.pageY,
                        clientX: r.clientX,
                        clientY: r.clientY
                    })
                }
                return t
            }
        }, w = function (e, t, n, r) {
            e.__wxEventHandleName || (e.__wxEventHandleName = (0, s.default)(null)), void 0 === e.__wxEventHandleName[t] && e.addListener(t, function (n) {
                if (e.__wxEventHandleName[t]) return window.wd.publishPageEvent(e.__wxEventHandleName[t], {
                    type: n.type,
                    timeStamp: n.timeStamp,
                    target: _(n.target),
                    currentTarget: _(this),
                    detail: n.detail,
                    touches: b(n.touches),
                    changedTouches: b(n.changedTouches)
                }), !r && void 0
            }), e.__wxEventHandleName[t] = n
        };
    t.default = {removeProperty: o, applyProperties: i}
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(0), i = r(o), a = n(1), s = r(a), u = function () {
        function e(t) {
            (0, i.default)(this, e), this.text = String(t)
        }
        return (0, s.default)(e, [{
            key: "render", value: function (e) {
                return (e ? e.document || exparser : exparser).createTextNode(this.text)
            }
        }]), e
    }();
    u.prototype.type = "WxVirtualText", t.default = u
}, function (e, t, n) {
    "use strict";
    n(119), n(120), n(137), n(218), n(219), n(227), n(237), n(238), n(240), n(247), n(274)
}, function (e, t) {
}, function (e, t, n) {
    "use strict";
    window.Promise = n(121)
}, function (e, t, n) {
    n(53), n(32), n(41), n(89), e.exports = n(2).Promise
}, function (e, t, n) {
    var r = n(54), o = n(55);
    e.exports = function (e) {
        return function (t, n) {
            var i, a, s = String(o(t)), u = r(n), c = s.length;
            return u < 0 || u >= c ? e ? "" : void 0 : (i = s.charCodeAt(u), i < 55296 || i > 56319 || u + 1 === c || (a = s.charCodeAt(u + 1)) < 56320 || a > 57343 ? e ? s.charAt(u) : i : e ? s.slice(u, u + 2) : a - 56320 + (i - 55296 << 10) + 65536)
        }
    }
}, function (e, t, n) {
    "use strict";
    var r = n(59), o = n(34), i = n(44), a = {};
    n(18)(a, n(6)("iterator"), function () {
        return this
    }), e.exports = function (e, t, n) {
        e.prototype = r(a, {next: o(1, n)}), i(e, t + " Iterator")
    }
}, function (e, t, n) {
    var r = n(11), o = n(12), i = n(29);
    e.exports = n(14) ? Object.defineProperties : function (e, t) {
        o(e);
        for (var n, a = i(t), s = a.length, u = 0; s > u;) r.f(e, n = a[u++], t[n]);
        return e
    }
}, function (e, t, n) {
    var r = n(20), o = n(60), i = n(126);
    e.exports = function (e) {
        return function (t, n, a) {
            var s, u = r(t), c = o(u.length), l = i(a, c);
            if (e && n != n) {
                for (; c > l;) if ((s = u[l++]) != s) return !0
            } else for (; c > l; l++) if ((e || l in u) && u[l] === n) return e || l || 0;
            return !e && -1
        }
    }
}, function (e, t, n) {
    var r = n(54), o = Math.max, i = Math.min;
    e.exports = function (e, t) {
        return e = r(e), e < 0 ? o(e + t, 0) : i(e, t)
    }
}, function (e, t, n) {
    "use strict";
    var r = n(128), o = n(129), i = n(33), a = n(20);
    e.exports = n(82)(Array, "Array", function (e, t) {
        this._t = a(e), this._i = 0, this._k = t
    }, function () {
        var e = this._t, t = this._k, n = this._i++;
        return !e || n >= e.length ? (this._t = void 0, o(1)) : "keys" == t ? o(0, n) : "values" == t ? o(0, e[n]) : o(0, [n, e[n]])
    }, "values"), i.Arguments = i.Array, r("keys"), r("values"), r("entries")
}, function (e, t) {
    e.exports = function () {
    }
}, function (e, t) {
    e.exports = function (e, t) {
        return {value: t, done: !!e}
    }
}, function (e, t) {
    e.exports = function (e, t, n, r) {
        if (!(e instanceof t) || void 0 !== r && r in e) throw TypeError(n + ": incorrect invocation!");
        return e
    }
}, function (e, t, n) {
    var r = n(26), o = n(90), i = n(91), a = n(12), s = n(60), u = n(64), c = {}, l = {},
        t = e.exports = function (e, t, n, d, f) {
            var h, p, v, g, m = f ? function () {
                return e
            } : u(e), y = r(n, d, t ? 2 : 1), _ = 0;
            if ("function" != typeof m) throw TypeError(e + " is not iterable!");
            if (i(m)) {
                for (h = s(e.length); h > _; _++) if ((g = t ? y(a(p = e[_])[0], p[1]) : y(e[_])) === c || g === l) return g
            } else for (v = m.call(e); !(p = v.next()).done;) if ((g = o(v, y, p.value, t)) === c || g === l) return g
        };
    t.BREAK = c, t.RETURN = l
}, function (e, t, n) {
    var r = n(12), o = n(56), i = n(6)("species");
    e.exports = function (e, t) {
        var n, a = r(e).constructor;
        return void 0 === a || void 0 == (n = r(a)[i]) ? t : o(n)
    }
}, function (e, t) {
    e.exports = function (e, t, n) {
        var r = void 0 === n;
        switch (t.length) {
            case 0:
                return r ? e() : e.call(n);
            case 1:
                return r ? e(t[0]) : e.call(n, t[0]);
            case 2:
                return r ? e(t[0], t[1]) : e.call(n, t[0], t[1]);
            case 3:
                return r ? e(t[0], t[1], t[2]) : e.call(n, t[0], t[1], t[2]);
            case 4:
                return r ? e(t[0], t[1], t[2], t[3]) : e.call(n, t[0], t[1], t[2], t[3])
        }
        return e.apply(n, t)
    }
}, function (e, t, n) {
    var r = n(8), o = n(92).set, i = r.MutationObserver || r.WebKitMutationObserver, a = r.process, s = r.Promise,
        u = "process" == n(35)(a);
    e.exports = function () {
        var e, t, n, c = function () {
            var r, o;
            for (u && (r = a.domain) && r.exit(); e;) {
                o = e.fn, e = e.next;
                try {
                    o()
                } catch (r) {
                    throw e ? n() : t = void 0, r
                }
            }
            t = void 0, r && r.enter()
        };
        if (u) n = function () {
            a.nextTick(c)
        }; else if (i) {
            var l = !0, d = document.createTextNode("");
            new i(c).observe(d, {characterData: !0}), n = function () {
                d.data = l = !l
            }
        } else if (s && s.resolve) {
            var f = s.resolve();
            n = function () {
                f.then(c)
            }
        } else n = function () {
            o.call(r, c)
        };
        return function (r) {
            var o = {fn: r, next: void 0};
            t && (t.next = o), e || (e = o, n()), t = o
        }
    }
}, function (e, t, n) {
    var r = n(18);
    e.exports = function (e, t, n) {
        for (var o in t) n && e[o] ? e[o] = t[o] : r(e, o, t[o]);
        return e
    }
}, function (e, t, n) {
    "use strict";
    var r = n(8), o = n(2), i = n(11), a = n(14), s = n(6)("species");
    e.exports = function (e) {
        var t = "function" == typeof o[e] ? o[e] : r[e];
        a && t && !t[s] && i.f(t, s, {
            configurable: !0, get: function () {
                return this
            }
        })
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        if (~["openAddress", "chooseContact"].indexOf(e)) return !0
    }
    function i(e) {
        if (e) {
            var t = e.sdkName;
            "showPickerView" == t ? d.showPickerView(e.args) : "showDatePickerView" == t ? d.showDatePickerView(e.args) : "updateHTMLWebView" == t ? d.updateHTMLWebView(e.args) : "insertHTMLWebView" == t ? d.insertHTMLWebView(e.args) : "onKeyboardComplete" == t || "getPublicLibVersion" == t || "onKeyboardConfirm" == t || "disableScrollBounce" == t || "onTextAreaHeightChange" == t || "onKeyboardShow" == t || console.warn("Ignored EXEC_JSSDK " + (0, s.default)(e))
        }
    }
    var a = n(13), s = r(a), u = n(139), c = r(u), l = n(140), d = function (e) {
        if (e && e.__esModule) return e;
        var t = {};
        if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
        return t.default = e, t
    }(l), f = {}, h = 0, p = {}, v = !1, g = {}, m = !1, y = function (e, t, n) {
        _({sdkName: e, args: t, callbackID: n})
    }, _ = function (e) {
        var t = e.sdkName;
        d.hasOwnProperty(t) ? d[t](e) : console.warn("Method " + t + " not implemented for command!")
    }, b = {
        login: function (e, t, n) {
            n({errMsg: "login:ok", code: "the code is a mock one"})
        }, authorize: function (e, t, n) {
            n({errMsg: "authorize:fail"})
        }, operateWXData: function (e, t, n) {
            var r = __wxConfig__.userInfo;
            n({
                errMsg: "operateWXData:ok",
                data: {
                    data: (0, s.default)({
                        nickName: r.nickName,
                        avatarUrl: r.headUrl,
                        gender: "male" === r.sex ? 1 : 2,
                        province: r.province,
                        city: r.city,
                        country: r.country
                    })
                }
            })
        }
    }, w = function (e, t, n) {
        if (!~["reportKeyValue", "reportIDKey"].indexOf(e)) if (b.hasOwnProperty(e)) b[e](e, t, n); else if (o(e)) {
            if (!m) {
                m = !0;
                var r = ++h, i = function (e) {
                };
                f[r] = i, y("showModal", {
                    title: "请注意，转成h5以后，依赖微信相关的接口调用将无法支持，请自行改造成h5的兼容方式",
                    content: "",
                    confirmText: "确定",
                    cancelText: "取消",
                    showCancel: !0,
                    confirmColor: "#3CC51F",
                    cancelColor: "#000000"
                }, r)
            }
        } else if (c.default[e]) c.default[e].apply(this, arguments); else {
            var r = ++h;
            f[r] = n, y(e, t, r)
        }
    }, x = function (e, t) {
        var n = f[e];
        "function" == typeof n && n(t), delete f[e]
    }, k = function (e, t, n) {
        _({eventName: "custom_event_" + e, data: t, webviewIds: n, sdkName: "publish"})
    }, T = function (e, t) {
        "onAppEnterForeground" === e && (v || (t && t({}), v = !0)), p[e] = t
    }, S = function (e, t) {
        g["custom_event_" + e] = t
    }, C = function (e, t, n, r) {
        var o;
        "function" == typeof(o = -1 != e.indexOf("custom_event_") ? g[e] : p[e]) && o(t, n, r)
    };
    window.DeviceOrientation = function (e, t, n) {
        p.onAccelerometerChange && p.onAccelerometerChange({x: e, y: t, z: n})
    }, window.ServiceJSBridge = {
        showSdk: i,
        doCommand: _,
        invoke: w,
        invokeCallbackHandler: x,
        on: T,
        publish: k,
        subscribe: S,
        subscribeHandler: C
    }
}, function (e, t, n) {
    var r = n(2), o = r.JSON || (r.JSON = {stringify: JSON.stringify});
    e.exports = function (e) {
        return o.stringify.apply(o, arguments)
    }
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    var r = null, o = 0, i = function (e, t, n) {
        var r, o = "jsonp_" + Date.now() + "_" + Math.random().toString().substr(2), i = e.url,
            a = document.createElement("script");
        i += (-1 === i.indexOf("?") ? "?" : "&") + "callback=" + o, a.src = i, "number" == typeof n && (r = setTimeout(function () {
            window[o] = function () {
            }, t && t({errMsg: "request:fail"})
        }, n)), window[o] = function (e) {
            try {
                r && clearTimeout(r), t && t({errMsg: "request:ok", data: e, statusCode: 200})
            } finally {
                delete window[o], a.parentNode.removeChild(a)
            }
        }, document.body.appendChild(a)
    }, a = function (e, t, n) {
        o++;
        var r, a = t.url, s = t.header || {}, u = new XMLHttpRequest, c = t.method || "POST";
        if (__wxConfig__ && __wxConfig__.weweb && (__wxConfig__.weweb.requestProxy || "ajax" == __wxConfig__.weweb.requestType)) {
            __wxConfig__.weweb.requestProxy && (a = __wxConfig__.weweb.requestProxy), u.open(c, a, !0), "ajax" == __wxConfig__.weweb.requestType && (u.withCredentials = !0), u.onreadystatechange = function () {
                if (u.readyState, 4 == u.readyState) {
                    u.onreadystatechange = null;
                    var e = u.status;
                    0 != e && (o--, r && clearTimeout(r), n && n({
                        errMsg: "request:ok",
                        data: u.responseText,
                        statusCode: e
                    }))
                }
            }, u.onerror = function () {
                n && n({errMsg: "request:fail"})
            }, "ajax" != __wxConfig__.weweb.requestType && (u.setRequestHeader("X-Remote", t.url), u.setRequestHeader("Cache-Control", "no-cache, no-store, must-revalidate"), u.setRequestHeader("Pragma", "no-cache"), u.setRequestHeader("Expires", "0"));
            var l = 0;
            for (var d in s) "content-type" === d.toLowerCase() && l++;
            l >= 2 && delete s["content-type"];
            var f = !1;
            for (var h in s) if (s.hasOwnProperty(h)) {
                var p = h.toLowerCase();
                f = "content-type" == p || f, "cookie" === p ? u.setRequestHeader("_Cookie", s[h]) : u.setRequestHeader(h, s[h])
            }
            "POST" != c || f || u.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8"), u.setRequestHeader("X-Requested-With", "requestObj"), r = setTimeout(function () {
                u.abort("timeout"), t.complete && t.complete(), t.complete = null, o--, n && n({errMsg: "request:fail"})
            }, 3e4);
            var v = "string" == typeof t.data ? t.data : null;
            try {
                u.send(v)
            } catch (e) {
                o--, n && n({errMsg: "request:fail"})
            }
        } else i(t, n, 3e4)
    }, s = function (e, t, n) {
        var o = t.url, i = t.header;
        r = new WebSocket(o);
        for (var a in i) i.hasOwnProperty(a);
        r.onopen = function (e) {
            ServiceJSBridge.subscribeHandler("onSocketOpen", e)
        }, r.onmessage = function (e) {
            ServiceJSBridge.subscribeHandler("onSocketMessage", {data: e.data})
        }, r.onclose = function (e) {
            ServiceJSBridge.subscribeHandler("onSocketClose", e)
        }, r.onerror = function (e) {
            ServiceJSBridge.subscribeHandler("onSocketError", e)
        }, n && n({errMsg: "connectSocket:ok"})
    }, u = function (e, t, n) {
        r ? (r.close(), r = null, n && n({errMsg: "closeSocket:ok"})) : n && n({errMsg: "closeSocket:fail"})
    }, c = function (e, t, n) {
        var o = t.data;
        if (r) try {
            r.send(o), n && n({errMsg: "sendSocketMessage:ok"})
        } catch (e) {
            n && n({errMsg: "sendSocketMessage:fail " + e.message})
        } else n && n({errMsg: "sendSocketMessage:fail"})
    };
    t.default = {request: a, connectSocket: s, sendSocketMessage: c, closeSocket: u}
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        if ("GET_ASSDK_RES" == e.command) ServiceJSBridge.invokeCallbackHandler(e.ext.callbackID, e.msg); else {
            var t = _e.default.currentView(), n = t ? t.id : 0;
            ServiceJSBridge.subscribeHandler(e.msg.eventName, e.msg.data || {}, n)
        }
    }
    function i() {
        var e = document.getElementById("wx-audio-component-inside");
        if (null == e) {
            var t = document.createElement("audio");
            document.body.appendChild(t), t.outerHTML = '<audio id="wx-audio-component-inside" type="audio/mp3" style="display:none;"></audio>', e = t
        }
        return e
    }
    function a() {
        var e = "wx-background-audio-component-inside", t = document.getElementById(e);
        if (null == t) {
            var n = document.createElement("audio");
            document.body.appendChild(n), n.outerHTML = '<audio id="' + e + '" type="audio/mp3" style="display:none;"></audio>', t = n, t.addEventListener("error", function () {
                o({msg: {eventName: "onMusicError", type: "ON_MUSIC_EVENT"}})
            }, !1)
        }
        return t
    }
    function s(e, t) {
        for (var n = t.args, r = 0, o = e.length; r < o; r++) if (!n.hasOwnProperty(e[r])) return u(t, "key " + e[r] + " required for " + t.sdkName), !0;
        return !1
    }
    function u(e, t) {
        var n = {command: "GET_ASSDK_RES", ext: (0, he.default)({}, e), msg: {errMsg: e.sdkName + ":fail"}};
        t && (n.msg.message = t), o(n)
    }
    function c(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
        if (!e.sdkName) throw new Error("sdkName not found");
        var n = {command: "GET_ASSDK_RES", ext: (0, he.default)({}, e), msg: {errMsg: e.sdkName + ":ok"}};
        n.msg = (0, he.default)(n.msg, t), o(n)
    }
    function l(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
            n = {command: "GET_ASSDK_RES", ext: (0, he.default)({}, e), msg: {errMsg: e.sdkName + ":cancel"}};
        n.msg = (0, he.default)(n.msg, t), o(n)
    }
    function d() {
        return document.querySelector(".scrollable").clientHeight
    }
    function f() {
        var e = document.querySelector(".scrollable");
        return e && e.scrollHeight
    }
    function h() {
        we.default.init(), ke.default.init(), _e.default.onLaunch()
    }
    function p(e) {
        _e.default.redirectTo(e.args.url)
    }
    function v(e) {
        _e.default.navigateTo(e.args.url)
    }
    function g(e) {
        _e.default.reLaunch(e.args.url)
    }
    function m(e) {
        _e.default.switchTab(e.args.url)
    }
    function y(e) {
        e.args = e.args || {};
        var t = e.args.delta ? Number(e.args.delta) : 1;
        _e.default.navigateBack(t)
    }
    function _(e) {
        var t = e.args, n = t.urls, r = t.current, o = new Je.default(n, {});
        o.show(), o.active(r), c(e)
    }
    function b(e) {
        var t = _e.default.currentView();
        t && t.postMessage({command: "STOP_PULL_DOWN_REFRESH"}), e.sdkName = "stopPullDownRefresh", c(e)
    }
    function w(e) {
        var t = _e.default.getViewIds(), n = (0, Ke.toNumber)(e.webviewIds) || t,
            r = {msg: e, command: "MSG_FROM_APPSERVICE"};
        _e.default.eachView(function (e) {
            -1 !== n.indexOf(e.id) && e.postMessage(r)
        })
    }
    function x(e) {
        var t = document.querySelector(".scrollable"), n = e.args.scrollTop;
        if (void 0 !== n) {
            n < 0 && (n = 0);
            var r = d(), o = f();
            n > o - r && (n = o - r);
            var i = function e() {
                t.style.transition = "", t.style.webkitTransition = "", t.style.transform = "", t.style.webkitTransform = "", t.scrollTop = n, t.removeEventListener("transitionend", e), t.removeEventListener("webkitTransitionEnd", e)
            }, a = "translateY(" + (t.scrollTop - n) + "px) translateZ(0)";
            t.style.transition = "transform .3s ease-out", t.style.webkitTransition = "-webkit-transform .3s ease-out", t.addEventListener("transitionend", i), t.addEventListener("webkitTransitionEnd", i), t.style.transform = a, t.style.webkitTransform = a, t.style.scrollTop = n
        }
    }
    function k(e) {
        var t = e.args.title;
        t && we.default.setTitle(t)
    }
    function T(e) {
        var t = e.args.color;
        t && we.default.setState({color: t})
    }
    function S(e) {
        var t = e.args;
        t && we.default.setNavigationBarColor(t)
    }
    function C() {
        we.default.showLoading()
    }
    function E() {
        we.default.hideLoading()
    }
    function M(e) {
        var t = window.URL || window.webkitURL;
        (0, ve.default)({multiple: !0, accept: "image/*"}, function (n) {
            n = [].slice.call(n).slice(0, e.args.count || n.length);
            var r = n.map(function (e) {
                var n = t.createObjectURL(e);
                return Qe[n] = e, n
            });
            c(e, {tempFilePaths: r})
        })
    }
    function A(e) {
        var t = window.URL || window.webkitURL;
        (0, ve.default)({accept: "video/*"}, function (n) {
            var r = t.createObjectURL(n[0]);
            Qe[r] = n[0];
            var o = document.createElement("video");
            o.preload = "metadata", o.onloadedmetadata = function () {
                var t = o.duration, i = n[0].size;
                c(e, {duration: t, size: i, height: o.videoHeight, width: o.videoWidth, tempFilePath: r})
            }, o.src = r
        })
    }
    function P(e) {
        var t = e.args.tempFilePath;
        if (!t) return u(e, "file path required");
        var n = Qe[t];
        if (!n) return u(e, "file not found");
        var r = new me.default(n);
        r.to("/upload"), r.on("end", function (t) {
            if (t.status / 100 | !1) {
                var n = JSON.parse(t.responseText);
                c(e, {statusCode: t.status, savedFilePath: n.file_path})
            } else u(e, "request error " + t.status)
        }), r.on("error", function (t) {
            u(e, t.message)
        })
    }
    function O() {
        var e = Ae.default.watch((0, Se.default)(function (e) {
            o({msg: {eventName: "onCompassChange", data: {direction: e}}})
        }, 200));
        _e.default.currentView().on("destroy", function () {
            Ae.default.unwatch(e)
        })
    }
    function I() {
        if (window.DeviceMotionEvent) {
            var e = (0, Se.default)(function (e) {
                var t = {
                    x: e.accelerationIncludingGravity.x,
                    y: e.accelerationIncludingGravity.y,
                    z: e.accelerationIncludingGravity.z
                }, n = t.x, r = t.y, i = t.z;
                null != n && null != r && null != i && o({
                    msg: {
                        eventName: "onAccelerometerChange",
                        data: {x: n, y: r, z: i}
                    }
                })
            }, 200);
            window.addEventListener("devicemotion", e, !1), _e.default.currentView().on("destroy", function () {
                window.removeEventListener("devicemotion", e, !1)
            })
        } else console.warn("DeviceMotionEvent is not supported")
    }
    function R(e) {
        var t = navigator.connection;
        c(e, {networkType: null == t ? "WIFI" : t.type ? t.type : t.effectiveType})
    }
    function N(e) {
        "geolocation" in navigator ? navigator.geolocation.getCurrentPosition(function (t) {
            var n = t.coords;
            c(e, {longitude: n.longitude, latitude: n.latitude})
        }) : u(e, {message: "geolocation not supported"})
    }
    function L(e) {
        var t = e.args,
            n = "http://apis.map.qq.com/tools/poimarker?type=0&marker=coord:" + t.latitude + "," + t.longitude + "&key=JMRBZ-R4HCD-X674O-PXLN4-B7CLH-42BSB&referer=wxdevtools";
        _e.default.openExternal(n), c(e, {latitude: t.latitude, longitude: t.longitude})
    }
    function j(e) {
        _e.default.openExternal("https://3gimg.qq.com/lightmap/components/locationPicker2/index.html?search=1&type=1&coord=39.90403%2C116.407526&key=JMRBZ-R4HCD-X674O-PXLN4-B7CLH-42BSB&referer=wxdevtools");
        var t = !1;
        Xe.once("back", function (n) {
            t || n || (t = !0, l(e))
        }), Xe.once("location", function (n) {
            t || (t = !0, n ? c(e, n) : l(e))
        })
    }
    function B(e) {
        var t = e.args;
        if (Oe.default.set(t.key, t.data, t.dataType), null == t.key || "" == t.key) return u(e, "key required");
        c(e)
    }
    function D(e) {
        var t = e.args;
        if (null == t.key || "" == t.key) return u(e, "key required");
        var n = Oe.default.get(t.key);
        c(e, {data: n.data, dataType: n.dataType})
    }
    function F(e) {
        Oe.default.clear(), c(e)
    }
    function V(e) {
        Ee.default.startRecord({
            success: function (t) {
                c(e, {tempFilePath: t})
            }, fail: function (t) {
                return u(e, t.message)
            }
        }).catch(function (e) {
            console.warn("Audio record failed: " + e.message)
        })
    }
    function U() {
        Ee.default.stopRecord().then(function (e) {
            var t = "audio" + Ze;
            Ze++;
            var n = new File([e], t, {type: "audio/x-wav", lastModified: Date.now()});
            Qe[e] = n
        })
    }
    function H(e) {
        var t = e.args.filePath, n = i();
        n.src == t && n.paused && !n.ended ? n.play() : (n.src = t, n.load(), n.play(), (0, Ke.once)(n, "error", function (t) {
            u(e, t.message)
        }), (0, Ke.once)(n, "ended", function () {
            c(e)
        }))
    }
    function q() {
        i().pause()
    }
    function W() {
        var e = i();
        e.pause(), e.currentTime = 0, e.src = ""
    }
    function G(e) {
        var t = a(), n = {status: t.src ? t.paused ? 0 : 1 : 2, currentPosition: Math.floor(t.currentTime) || -1};
        if (t.src && !t.paused) {
            n.duration = t.duration || 0;
            try {
                n.downloadPercent = Math.round(100 * t.buffered.end(0) / t.duration)
            } catch (e) {
            }
            n.dataUrl = t.currentSrc
        }
        c(e, n)
    }
    function $(e) {
        var t = e.args, n = a();
        switch (t.operationType) {
            case"play":
                n.src == t.dataUrl && n.paused && !n.ended ? n.play() : (n.src = t.dataUrl, n.load(), n.loop = !0, n.play()), o({
                    msg: {
                        eventName: "onMusicPlay",
                        type: "ON_MUSIC_EVENT"
                    }
                });
                break;
            case"pause":
                n.pause(), o({msg: {eventName: "onMusicPause", type: "ON_MUSIC_EVENT"}});
                break;
            case"seek":
                n.currentTime = t.position;
                break;
            case"stop":
                n.pause(), n.currentTime = 0, n.src = "", o({msg: {eventName: "onMusicEnd", type: "ON_MUSIC_EVENT"}})
        }
        c(e)
    }
    function Y(e) {
        var t = e.args;
        if (!t.filePath || !t.url || !t.name) return u(e, "filePath, url and name required");
        var n = Qe[t.filePath];
        if (!n) return u(e, t.filePath + " not found");
        var r = t.header || {};
        (r.Referer || r.rederer) && console.warn("请注意，微信官方不允许设置请求 Referer");
        var o = t.formData || {}, i = new XMLHttpRequest,
            a = 0 === t.url.indexOf("http") && -1 === t.url.indexOf(location.host) && __wxConfig__.weweb && (__wxConfig__.weweb.requestProxy || "/remoteProxy") || t.url;
        i.open("POST", a), i.onload = function () {
            i.status / 100 | !1 ? c(e, {statusCode: i.status, data: i.responseText}) : u(e, "request error " + i.status)
        }, i.onerror = function (t) {
            u(e, "request error " + t.message)
        };
        var s = void 0;
        for (s in r) i.setRequestHeader(s, r[s]);
        i.setRequestHeader("X-Remote", t.url);
        var l = new FormData;
        l.append(t.name, n);
        for (s in o) l.append(s, o[s]);
        i.send(l)
    }
    function z(e) {
        var t = window.URL || window.webkitURL, n = e.args;
        if (!n.url) return u(e, "url required");
        var r = new XMLHttpRequest;
        r.responseType = "arraybuffer";
        var o = n.header || {},
            i = 0 === n.url.indexOf("http") && -1 === n.url.indexOf(location.host) && __wxConfig__.weweb && (__wxConfig__.weweb.requestProxy || "/remoteProxy") + "?" + encodeURIComponent(n.url) || n.url;
        r.open("GET", i, !0), r.onload = function () {
            if (r.status / 100 | !1 || 304 == r.status) {
                var n = new Blob([r.response], {type: r.getResponseHeader("Content-Type")}), o = t.createObjectURL(n);
                Qe[o] = n, c(e, {statusCode: r.status, tempFilePath: o})
            } else u(e, "request error " + r.status)
        }, r.onerror = function (t) {
            u(e, "request error " + t.message)
        };
        var a = void 0;
        for (a in o) r.setRequestHeader(a, o[a]);
        r.setRequestHeader("X-Remote", n.url), r.send(null)
    }
    function J(e) {
        Fe.getFileList().then(function (t) {
            c(e, {fileList: t})
        }, function (t) {
            u(e, t.message)
        })
    }
    function K(e) {
        var t = e.args;
        s(["filePath"], e) || Fe.removeFile(t.filePath).then(function () {
            c(e, {})
        }, function (t) {
            u(e, t.message)
        })
    }
    function X(e) {
        var t = e.args;
        s(["filePath"], e) || Fe.getFileInfo(t.filePath).then(function (t) {
            c(e, t)
        }, function (t) {
            u(e, t.message)
        })
    }
    function Z(e) {
        var t = e.args;
        s(["filePath"], e) || (0, Ge.default)({
            title: "确认打开",
            content: "openDocument " + t.filePath
        }).then(function (t) {
            c(e, {confirm: t})
        })
    }
    function Q(e) {
        c(e, Oe.default.info())
    }
    function ee(e) {
        var t = e.args;
        if (!s(["key"], e)) {
            c(e, {data: Oe.default.remove(t.key)})
        }
    }
    function te(e) {
        s(["title"], e) || (Ue.default.show(e.args), c(e))
    }
    function ne(e) {
        Ue.default.hide(), c(e)
    }
    function re(e) {
        s(["title", "content"], e) || (0, Ge.default)(e.args).then(function (t) {
            c(e, {confirm: t})
        })
    }
    function oe(e) {
        var t = e.args;
        if (!s(["itemList"], e)) {
            if (!Array.isArray(t.itemList)) return u(e, "itemList must be Array");
            t.itemList = t.itemList.slice(0, 6), (0, Ye.default)(t).then(function (t) {
                c(e, t)
            })
        }
    }
    function ie(e) {
        s(["src"], e) || (0, qe.default)(e.args.src).then(function (t) {
            c(e, t)
        }, function (t) {
            u(e, t.message)
        })
    }
    function ae(e) {
        var t = e.args.base64Data;
        c(e, {filePath: (0, Ke.dataURItoBlob)(t)})
    }
    function se(e) {
        c(e)
    }
    function ue(e) {
        var t = new Re.default(e);
        t.show(), t.on("select", function (e) {
            WeixinJSBridge.subscribeHandler("showPickerView", {errMsg: "showPickerView:ok", index: e})
        })
    }
    function ce(e) {
        (0, Ke.createWebview)("webview_site_" + e.htmlId, document.querySelector("#weweb-view-" + window.__webviewId__)), WeixinJSBridge.subscribeHandler("insertHTMLWebView", {errMsg: "insertHTMLWebView:ok"})
    }
    function le(e) {
        (0, Ke.updateWebView)("webview_site_" + e.htmlId, e.src)
    }
    function de(e) {
        var t = void 0;
        t = "time" == e.mode ? new Le.default(e) : new Be.default(e), t.show(), t.on("select", function (e) {
            WeixinJSBridge.subscribeHandler("showDatePickerView", {errMsg: "showDatePickerView:ok", value: e})
        })
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var fe = n(15), he = r(fe);
    t.onLaunch = h, t.redirectTo = p, t.navigateTo = v, t.reLaunch = g, t.switchTab = m, t.navigateBack = y, t.previewImage = _, t.stopPullDownRefresh = b, t.publish = w, t.pageScrollTo = x, t.setNavigationBarTitle = k, t.setStatusBarStyle = T, t.setNavigationBarColor = S, t.showNavigationBarLoading = C, t.hideNavigationBarLoading = E, t.chooseImage = M, t.chooseVideo = A, t.saveFile = P, t.enableCompass = O, t.enableAccelerometer = I, t.getNetworkType = R, t.getLocation = N, t.openLocation = L, t.chooseLocation = j, t.setStorage = B, t.getStorage = D, t.clearStorage = F, t.startRecord = V, t.stopRecord = U, t.playVoice = H, t.pauseVoice = q, t.stopVoice = W, t.getMusicPlayerState = G, t.operateMusicPlayer = $, t.uploadFile = Y, t.downloadFile = z, t.getSavedFileList = J, t.removeSavedFile = K, t.getSavedFileInfo = X, t.openDocument = Z, t.getStorageInfo = Q, t.removeStorage = ee, t.showToast = te, t.hideToast = ne, t.showModal = re, t.showActionSheet = oe, t.getImageInfo = ie, t.base64ToTempFilePath = ae, t.refreshSession = se, t.showPickerView = ue, t.insertHTMLWebView = ce, t.updateHTMLWebView = le, t.showDatePickerView = de;
    var pe = n(144), ve = r(pe), ge = n(146), me = r(ge), ye = n(66), _e = r(ye), be = n(185), we = r(be), xe = n(192),
        ke = r(xe), Te = n(193), Se = r(Te), Ce = n(194), Ee = r(Ce), Me = n(198), Ae = r(Me), Pe = n(71), Oe = r(Pe),
        Ie = n(199), Re = r(Ie), Ne = n(203), Le = r(Ne), je = n(204), Be = r(je), De = n(205), Fe = function (e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t.default = e, t
        }(De), Ve = n(103), Ue = r(Ve), He = n(209), qe = r(He), We = n(210), Ge = r(We), $e = n(211), Ye = r($e),
        ze = n(212), Je = r(ze), Ke = n(21), Xe = (0, Ke.getBus)(), Ze = 0, Qe = {}
}, function (e, t, n) {
    n(142), e.exports = n(2).Object.assign
}, function (e, t, n) {
    var r = n(10);
    r(r.S + r.F, "Object", {assign: n(143)})
}, function (e, t, n) {
    "use strict";
    var r = n(29), o = n(65), i = n(45), a = n(36), s = n(86), u = Object.assign;
    e.exports = !u || n(28)(function () {
        var e = {}, t = {}, n = Symbol(), r = "abcdefghijklmnopqrst";
        return e[n] = 7, r.split("").forEach(function (e) {
            t[e] = e
        }), 7 != u({}, e)[n] || Object.keys(u({}, t)).join("") != r
    }) ? function (e, t) {
        for (var n = a(e), u = arguments.length, c = 1, l = o.f, d = i.f; u > c;) for (var f, h = s(arguments[c++]), p = l ? r(h).concat(l(h)) : r(h), v = p.length, g = 0; v > g;) d.call(h, f = p[g++]) && (n[f] = h[f]);
        return n
    } : u
}, function (e, t, n) {
    function r(e, t) {
        function n(e) {
            t(a.files, e, a), o.unbind(a, "change", n), s = !1
        }
        "function" == typeof e && (t = e, e = {}), e = e || {}, a.multiple = !!e.multiple, a.webkitdirectory = a.mozdirectory = a.directory = !!e.directory, null == e.accept ? delete a.accept : e.accept.join ? a.accept = e.accept.join(",") : e.accept && (a.accept = e.accept), s && o.unbind(a, "change", s), o.bind(a, "change", n), s = n, i.reset(), a.click()
    }
    var o = n(145);
    e.exports = r;
    var i = document.createElement("form");
    i.innerHTML = '<input type="file" style="top: -1000px; position: absolute" aria-hidden="true">', document.body.appendChild(i);
    var a = i.childNodes[0], s = !1
}, function (e, t) {
    var n = window.addEventListener ? "addEventListener" : "attachEvent",
        r = window.removeEventListener ? "removeEventListener" : "detachEvent",
        o = "addEventListener" !== n ? "on" : "";
    t.bind = function (e, t, r, i) {
        return e[n](o + t, r, i || !1), r
    }, t.unbind = function (e, t, n, i) {
        return e[r](o + t, n, i || !1), n
    }
}, function (e, t, n) {
    function r(e) {
        if (!(this instanceof r)) return new r(e);
        o.call(this), this.file = e, e.slice = e.slice || e.webkitSlice
    }
    var o = n(3);
    e.exports = r, o(r.prototype), r.prototype.to = function (e, t) {
        var n;
        "string" == typeof e ? (n = e, e = {}) : n = e.path;
        t = t || function () {
        };
        var r = this.req = new XMLHttpRequest;
        r.open("POST", n), r.onload = this.onload.bind(this), r.onerror = this.onerror.bind(this), r.upload.onprogress = this.onprogress.bind(this), r.onreadystatechange = function () {
            if (4 == r.readyState) {
                if (2 == (r.status / 100 | 0)) return t(null, r);
                var e = new Error(r.statusText + ": " + r.response);
                e.status = r.status, t(e)
            }
        };
        var o, i = e.headers || {};
        for (o in i) r.setRequestHeader(o, i[o]);
        var a = new FormData;
        a.append(e.name || "file", this.file);
        var s = e.data || {};
        for (o in s) a.append(o, s[o]);
        r.send(a)
    }, r.prototype.abort = function () {
        this.emit("abort"), this.req.abort()
    }, r.prototype.onerror = function (e) {
        this.emit("error", e)
    }, r.prototype.onload = function (e) {
        this.emit("end", this.req)
    }, r.prototype.onprogress = function (e) {
        e.percent = e.loaded / e.total * 100, this.emit("progress", e)
    }
}, function (e, t, n) {
    n(148), e.exports = n(2).Object.keys
}, function (e, t, n) {
    var r = n(36), o = n(29);
    n(94)("keys", function () {
        return function (e) {
            return o(r(e))
        }
    })
}, function (e, t, n) {
    n(41), n(32), e.exports = n(150)
}, function (e, t, n) {
    var r = n(12), o = n(64);
    e.exports = n(2).getIterator = function (e) {
        var t = o(e);
        if ("function" != typeof t) throw TypeError(e + " is not iterable!");
        return r(t.call(e))
    }
}, function (e, t, n) {
    e.exports = {default: n(152), __esModule: !0}
}, function (e, t, n) {
    n(32), n(41), e.exports = n(67).f("iterator")
}, function (e, t, n) {
    n(96), n(53), n(159), n(160), e.exports = n(2).Symbol
}, function (e, t, n) {
    var r = n(43)("meta"), o = n(27), i = n(19), a = n(11).f, s = 0, u = Object.isExtensible || function () {
        return !0
    }, c = !n(28)(function () {
        return u(Object.preventExtensions({}))
    }), l = function (e) {
        a(e, r, {value: {i: "O" + ++s, w: {}}})
    }, d = function (e, t) {
        if (!o(e)) return "symbol" == typeof e ? e : ("string" == typeof e ? "S" : "P") + e;
        if (!i(e, r)) {
            if (!u(e)) return "F";
            if (!t) return "E";
            l(e)
        }
        return e[r].i
    }, f = function (e, t) {
        if (!i(e, r)) {
            if (!u(e)) return !0;
            if (!t) return !1;
            l(e)
        }
        return e[r].w
    }, h = function (e) {
        return c && p.NEED && u(e) && !i(e, r) && l(e), e
    }, p = e.exports = {KEY: r, NEED: !1, fastKey: d, getWeak: f, onFreeze: h}
}, function (e, t, n) {
    var r = n(29), o = n(20);
    e.exports = function (e, t) {
        for (var n, i = o(e), a = r(i), s = a.length, u = 0; s > u;) if (i[n = a[u++]] === t) return n
    }
}, function (e, t, n) {
    var r = n(29), o = n(65), i = n(45);
    e.exports = function (e) {
        var t = r(e), n = o.f;
        if (n) for (var a, s = n(e), u = i.f, c = 0; s.length > c;) u.call(e, a = s[c++]) && t.push(a);
        return t
    }
}, function (e, t, n) {
    var r = n(35);
    e.exports = Array.isArray || function (e) {
        return "Array" == r(e)
    }
}, function (e, t, n) {
    var r = n(20), o = n(97).f, i = {}.toString,
        a = "object" == typeof window && window && Object.getOwnPropertyNames ? Object.getOwnPropertyNames(window) : [],
        s = function (e) {
            try {
                return o(e)
            } catch (e) {
                return a.slice()
            }
        };
    e.exports.f = function (e) {
        return a && "[object Window]" == i.call(e) ? s(e) : o(r(e))
    }
}, function (e, t, n) {
    n(68)("asyncIterator")
}, function (e, t, n) {
    n(68)("observable")
}, function (e, t, n) {
    var r = n(162), o = n(46), i = /(\w+)\[(\d+)\]/, a = function (e) {
        try {
            return encodeURIComponent(e)
        } catch (t) {
            return e
        }
    }, s = function (e) {
        try {
            return decodeURIComponent(e.replace(/\+/g, " "))
        } catch (t) {
            return e
        }
    };
    t.parse = function (e) {
        if ("string" != typeof e) return {};
        if ("" == (e = r(e))) return {};
        "?" == e.charAt(0) && (e = e.slice(1));
        for (var t = {}, n = e.split("&"), o = 0; o < n.length; o++) {
            var a, u = n[o].split("="), c = s(u[0]);
            (a = i.exec(c)) ? (t[a[1]] = t[a[1]] || [], t[a[1]][a[2]] = s(u[1])) : t[u[0]] = null == u[1] ? "" : s(u[1])
        }
        return t
    }, t.stringify = function (e) {
        if (!e) return "";
        var t = [];
        for (var n in e) {
            var r = e[n];
            if ("array" != o(r)) t.push(a(n) + "=" + a(e[n])); else for (var i = 0; i < r.length; ++i) t.push(a(n + "[" + i + "]") + "=" + a(r[i]))
        }
        return t.join("&")
    }
}, function (e, t) {
    function n(e) {
        return e.replace(/^\s*|\s*$/g, "")
    }
    t = e.exports = n, t.left = function (e) {
        return e.replace(/^\s*/, "")
    }, t.right = function (e) {
        return e.replace(/\s*$/, "")
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        return /^http(s)?:\/\/(apis\.map|3gimg\.qq\.com)/.test(e)
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var i = n(9), a = r(i), s = n(81), u = r(s), c = n(16), l = r(c), d = n(0), f = r(d), h = n(1), p = r(h), v = n(22),
        g = r(v), m = n(23), y = r(m), _ = n(3), b = r(_), w = n(21), x = n(99), k = r(x), T = n(7), S = r(T);
    n(177);
    var C = (0, w.getBus)(), E = !1, M = function (e) {
        function t(e) {
            if ((0, f.default)(this, t), !e) throw new Error("path required for view");
            var n = (0, g.default)(this, (t.__proto__ || (0, l.default)(t)).call(this)), r = n.id = (0, w.uid)(),
                i = (0, w.parsePath)(e);
            n.url = e, n.path = i.path, n.query = i.query, n.isMap = o(e);
            var a = n.external = /^http(s)?:\/\//.test(e), s = document.querySelector(".scrollable");
            return n.ready = !1, window.__webviewId__ = n.id, a ? (n.el = (0, w.createFrame)("view-" + r, e, !1, s), n.isMap && n.el.contentWindow.addEventListener("load", function () {
                n._onReady()
            })) : (window.reRender = 0, window.__pageFrameStartTime__ = Date.now(), n.el = n.createPage(r, !1, s), n.loadWxml(), E || (E = !0, n.loadWxss("./css/app.css")), C.on("ready", function (e) {
                e == r && n._onReady()
            })), n.readyCallbacks = [], n
        }
        return (0, y.default)(t, e), (0, p.default)(t, [{
            key: "_onReady", value: function () {
                this.ready = !0;
                var e = this.readyCallbacks, t = !0, n = !1, r = void 0;
                try {
                    for (var o, i = (0, u.default)(e); !(t = (o = i.next()).done); t = !0) {
                        (0, o.value)()
                    }
                } catch (e) {
                    n = !0, r = e
                } finally {
                    try {
                        !t && i.return && i.return()
                    } finally {
                        if (n) throw r
                    }
                }
                this.readyCallbacks = null
            }
        }, {
            key: "onReady", value: function (e) {
                if (e) return this.ready ? e() : void this.readyCallbacks.push(e)
            }
        }, {
            key: "setLocation", value: function (e) {
                this.location = {
                    name: e.poiname,
                    address: e.poiaddress,
                    latitude: e.latlng.lat,
                    longitude: e.latlng.lng
                }, console.log(this.location)
            }
        }, {
            key: "getConfig", value: function () {
                var e = window.__wxConfig__.window, t = {
                    backgroundTextStyle: e.backgroundTextStyle || "dark",
                    backgroundColor: e.backgroundColor || "#fff",
                    enablePullDownRefresh: e.enablePullDownRefresh || !1
                }, n = e.pages[this.path] || {};
                return (0, a.default)(t).forEach(function (e) {
                    n.hasOwnProperty(e) && (t[e] = n[e])
                }), {window: t, viewId: this.id}
            }
        }, {
            key: "hide", value: function () {
                this.el && this.el.parentNode && this.elParent.removeChild(this.el)
            }
        }, {
            key: "show", value: function () {
                this.el && !this.el.parentNode && this.elParent.appendChild(this.el), window.__webviewId__ = this.id, this.__DOMTree__ && (window.__DOMTree__ = this.__DOMTree__), window.__enablePullUpRefresh__ = !!this.__enablePullUpRefresh__, window.__generateFunc__ = this.__generateFunc__
            }
        }, {
            key: "destroy", value: function () {
                this.emit("destroy"), this.el && this.el.parentNode && this.el.parentNode.removeChild(this.el)
            }
        }, {
            key: "postMessage", value: function (e) {
                this.onReady(function () {
                    e.msg = e.msg || {};
                    var t = e.msg, n = e.command, r = e.ext;
                    "MSG_FROM_APPSERVICE" === n ? WeixinJSBridge.subscribeHandler(t.eventName, t.data) : "GET_JSSDK_RES" == n || "INVOKE_SDK" == n || /^private_/.test(t.sdkName) ? WeixinJSBridge.subscribeHandler(t.sdkName, t.res, r) : "STOP_PULL_DOWN_REFRESH" === n && WeixinJSBridge.pull.reset()
                })
            }
        }, {
            key: "loadWxss", value: function (e) {
                var t = e || this.path, n = this;
                fetch(e).then(function (e) {
                    return e.text()
                }).then(function (e) {
                    n.inlineCss(e, t)
                })
            }
        }, {
            key: "resizeWxss", value: function () {
            }
        }, {
            key: "createPage", value: function (e, t) {
                var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : document.body,
                    r = document.createElement("div");
                return r.setAttribute("id", "weweb-view-" + e), r.setAttribute("view-id", e), r.style.height = "100%", t && (r.style.display = "none"), n.appendChild(r), this.elParent = n, r.innerHTML = '<div id="view-body-' + e + '"></div>', r
            }
        }, {
            key: "inlineCss", value: function (e, t) {
                if (e = S.default.transformRpx(e, !1)) {
                    var n = document.createElement("style");
                    n.setAttribute("type", "text/css"), n.setAttribute("page", t), n.appendChild(document.createTextNode(e)), "./css/app.css" != t ? (n.id = "view-css-" + this.id, n.setAttribute("scoped", ""), this.el.appendChild(n)) : document.querySelector("head").appendChild(n)
                }
            }
        }, {
            key: "loadWxml", value: function () {
                var e = this, t = "./src/" + this.path + ".js";
                fetch(t).then(function (e) {
                    return e.text()
                }).then(function (t) {
                    function n() {
                        window.reRender = 0, C.emit("ready", e.id), k.default.register(function () {
                            ServiceJSBridge.subscribeHandler("onPullDownRefresh", {}, e.id)
                        })
                    }
                    if (!window.__curPage__ || window.__curPage__.id == e.id) {
                        var r = t.split("@code-separator-line:");
                        try {
                            new Function(r[2] + "\n //# sourceURL=" + window.location.origin + "/" + e.path + ".js")()
                        } catch (e) {
                            console.error(e)
                        }
                        var o = new Function(r[0] + ' \n return $gwx("./' + e.path + '.wxml") \n //# sourceURL=' + window.location.origin + "/" + e.path + ".wxml");
                        try {
                            e.__generateFunc__ = window.__generateFunc__ = o()
                        } catch (e) {
                            console.error(e)
                        }
                        if (r[1] && e.inlineCss(r[1], e.path), r[3]) {
                            var i = JSON.parse(r[3]).map(function (e) {
                                return "wx-" + e
                            });
                            window.exparser.registerAsyncComp(i, function () {
                                n()
                            })
                        } else n()
                    }
                })
            }
        }]), t
    }(b.default);
    t.default = M
}, function (e, t, n) {
    n(165), e.exports = n(2).Object.getPrototypeOf
}, function (e, t, n) {
    var r = n(36), o = n(88);
    n(94)("getPrototypeOf", function () {
        return function (e) {
            return o(r(e))
        }
    })
}, function (e, t, n) {
    n(167);
    var r = n(2).Object;
    e.exports = function (e, t, n) {
        return r.defineProperty(e, t, n)
    }
}, function (e, t, n) {
    var r = n(10);
    r(r.S + r.F * !n(14), "Object", {defineProperty: n(11).f})
}, function (e, t, n) {
    e.exports = {default: n(169), __esModule: !0}
}, function (e, t, n) {
    n(170), e.exports = n(2).Object.setPrototypeOf
}, function (e, t, n) {
    var r = n(10);
    r(r.S, "Object", {setPrototypeOf: n(171).set})
}, function (e, t, n) {
    var r = n(27), o = n(12), i = function (e, t) {
        if (o(e), !r(t) && null !== t) throw TypeError(t + ": can't set as prototype!")
    };
    e.exports = {
        set: Object.setPrototypeOf || ("__proto__" in {} ? function (e, t, r) {
            try {
                r = n(26)(Function.call, n(98).f(Object.prototype, "__proto__").set, 2), r(e, []), t = !(e instanceof Array)
            } catch (e) {
                t = !0
            }
            return function (e, n) {
                return i(e, n), t ? e.__proto__ = n : r(e, n), e
            }
        }({}, !1) : void 0), check: i
    }
}, function (e, t, n) {
    n(173);
    var r = n(2).Object;
    e.exports = function (e, t) {
        return r.create(e, t)
    }
}, function (e, t, n) {
    var r = n(10);
    r(r.S, "Object", {create: n(59)})
}, function (e, t, n) {
    n(32), n(175), e.exports = n(2).Array.from
}, function (e, t, n) {
    "use strict";
    var r = n(26), o = n(10), i = n(36), a = n(90), s = n(91), u = n(60), c = n(176), l = n(64);
    o(o.S + o.F * !n(93)(function (e) {
        Array.from(e)
    }), "Array", {
        from: function (e) {
            var t, n, o, d, f = i(e), h = "function" == typeof this ? this : Array, p = arguments.length,
                v = p > 1 ? arguments[1] : void 0, g = void 0 !== v, m = 0, y = l(f);
            if (g && (v = r(v, p > 2 ? arguments[2] : void 0, 2)), void 0 == y || h == Array && s(y)) for (t = u(f.length), n = new h(t); t > m; m++) c(n, m, g ? v(f[m], m) : f[m]); else for (d = y.call(f), n = new h; !(o = d.next()).done; m++) c(n, m, g ? a(d, v, [o.value, m], !0) : o.value);
            return n.length = m, n
        }
    })
}, function (e, t, n) {
    "use strict";
    var r = n(11), o = n(34);
    e.exports = function (e, t, n) {
        t in e ? r.f(e, t, o(0, n)) : e[t] = n
    }
}, function (e, t) {
    !function (e) {
        "use strict";
        function t(e) {
            if ("string" != typeof e && (e = String(e)), /[^a-z0-9\-#$%&'*+.\^_`|~]/i.test(e)) throw new TypeError("Invalid character in header field name");
            return e.toLowerCase()
        }
        function n(e) {
            return "string" != typeof e && (e = String(e)), e
        }
        function r(e) {
            var t = {
                next: function () {
                    var t = e.shift();
                    return {done: void 0 === t, value: t}
                }
            };
            return m.iterable && (t[Symbol.iterator] = function () {
                return t
            }), t
        }
        function o(e) {
            this.map = {}, e instanceof o ? e.forEach(function (e, t) {
                this.append(t, e)
            }, this) : Array.isArray(e) ? e.forEach(function (e) {
                this.append(e[0], e[1])
            }, this) : e && Object.getOwnPropertyNames(e).forEach(function (t) {
                this.append(t, e[t])
            }, this)
        }
        function i(e) {
            if (e.bodyUsed) return Promise.reject(new TypeError("Already read"));
            e.bodyUsed = !0
        }
        function a(e) {
            return new Promise(function (t, n) {
                e.onload = function () {
                    t(e.result)
                }, e.onerror = function () {
                    n(e.error)
                }
            })
        }
        function s(e) {
            var t = new FileReader, n = a(t);
            return t.readAsArrayBuffer(e), n
        }
        function u(e) {
            var t = new FileReader, n = a(t);
            return t.readAsText(e), n
        }
        function c(e) {
            for (var t = new Uint8Array(e), n = new Array(t.length), r = 0; r < t.length; r++) n[r] = String.fromCharCode(t[r]);
            return n.join("")
        }
        function l(e) {
            if (e.slice) return e.slice(0);
            var t = new Uint8Array(e.byteLength);
            return t.set(new Uint8Array(e)), t.buffer
        }
        function d() {
            return this.bodyUsed = !1, this._initBody = function (e) {
                if (this._bodyInit = e, e) if ("string" == typeof e) this._bodyText = e; else if (m.blob && Blob.prototype.isPrototypeOf(e)) this._bodyBlob = e; else if (m.formData && FormData.prototype.isPrototypeOf(e)) this._bodyFormData = e; else if (m.searchParams && URLSearchParams.prototype.isPrototypeOf(e)) this._bodyText = e.toString(); else if (m.arrayBuffer && m.blob && _(e)) this._bodyArrayBuffer = l(e.buffer), this._bodyInit = new Blob([this._bodyArrayBuffer]); else {
                    if (!m.arrayBuffer || !ArrayBuffer.prototype.isPrototypeOf(e) && !b(e)) throw new Error("unsupported BodyInit type");
                    this._bodyArrayBuffer = l(e)
                } else this._bodyText = "";
                this.headers.get("content-type") || ("string" == typeof e ? this.headers.set("content-type", "text/plain;charset=UTF-8") : this._bodyBlob && this._bodyBlob.type ? this.headers.set("content-type", this._bodyBlob.type) : m.searchParams && URLSearchParams.prototype.isPrototypeOf(e) && this.headers.set("content-type", "application/x-www-form-urlencoded;charset=UTF-8"))
            }, m.blob && (this.blob = function () {
                var e = i(this);
                if (e) return e;
                if (this._bodyBlob) return Promise.resolve(this._bodyBlob);
                if (this._bodyArrayBuffer) return Promise.resolve(new Blob([this._bodyArrayBuffer]));
                if (this._bodyFormData) throw new Error("could not read FormData body as blob");
                return Promise.resolve(new Blob([this._bodyText]))
            }, this.arrayBuffer = function () {
                return this._bodyArrayBuffer ? i(this) || Promise.resolve(this._bodyArrayBuffer) : this.blob().then(s)
            }), this.text = function () {
                var e = i(this);
                if (e) return e;
                if (this._bodyBlob) return u(this._bodyBlob);
                if (this._bodyArrayBuffer) return Promise.resolve(c(this._bodyArrayBuffer));
                if (this._bodyFormData) throw new Error("could not read FormData body as text");
                return Promise.resolve(this._bodyText)
            }, m.formData && (this.formData = function () {
                return this.text().then(p)
            }), this.json = function () {
                return this.text().then(JSON.parse)
            }, this
        }
        function f(e) {
            var t = e.toUpperCase();
            return w.indexOf(t) > -1 ? t : e
        }
        function h(e, t) {
            t = t || {};
            var n = t.body;
            if (e instanceof h) {
                if (e.bodyUsed) throw new TypeError("Already read");
                this.url = e.url, this.credentials = e.credentials, t.headers || (this.headers = new o(e.headers)), this.method = e.method, this.mode = e.mode, n || null == e._bodyInit || (n = e._bodyInit, e.bodyUsed = !0)
            } else this.url = String(e);
            if (this.credentials = t.credentials || this.credentials || "omit", !t.headers && this.headers || (this.headers = new o(t.headers)), this.method = f(t.method || this.method || "GET"), this.mode = t.mode || this.mode || null, this.referrer = null, ("GET" === this.method || "HEAD" === this.method) && n) throw new TypeError("Body not allowed for GET or HEAD requests");
            this._initBody(n)
        }
        function p(e) {
            var t = new FormData;
            return e.trim().split("&").forEach(function (e) {
                if (e) {
                    var n = e.split("="), r = n.shift().replace(/\+/g, " "), o = n.join("=").replace(/\+/g, " ");
                    t.append(decodeURIComponent(r), decodeURIComponent(o))
                }
            }), t
        }
        function v(e) {
            var t = new o;
            return e.split(/\r?\n/).forEach(function (e) {
                var n = e.split(":"), r = n.shift().trim();
                if (r) {
                    var o = n.join(":").trim();
                    t.append(r, o)
                }
            }), t
        }
        function g(e, t) {
            t || (t = {}), this.type = "default", this.status = "status" in t ? t.status : 200, this.ok = this.status >= 200 && this.status < 300, this.statusText = "statusText" in t ? t.statusText : "OK", this.headers = new o(t.headers), this.url = t.url || "", this._initBody(e)
        }
        if (!e.fetch) {
            var m = {
                searchParams: "URLSearchParams" in e,
                iterable: "Symbol" in e && "iterator" in Symbol,
                blob: "FileReader" in e && "Blob" in e && function () {
                    try {
                        return new Blob, !0
                    } catch (e) {
                        return !1
                    }
                }(),
                formData: "FormData" in e,
                arrayBuffer: "ArrayBuffer" in e
            };
            if (m.arrayBuffer) var y = ["[object Int8Array]", "[object Uint8Array]", "[object Uint8ClampedArray]", "[object Int16Array]", "[object Uint16Array]", "[object Int32Array]", "[object Uint32Array]", "[object Float32Array]", "[object Float64Array]"],
                _ = function (e) {
                    return e && DataView.prototype.isPrototypeOf(e)
                }, b = ArrayBuffer.isView || function (e) {
                    return e && y.indexOf(Object.prototype.toString.call(e)) > -1
                };
            o.prototype.append = function (e, r) {
                e = t(e), r = n(r);
                var o = this.map[e];
                this.map[e] = o ? o + "," + r : r
            }, o.prototype.delete = function (e) {
                delete this.map[t(e)]
            }, o.prototype.get = function (e) {
                return e = t(e), this.has(e) ? this.map[e] : null
            }, o.prototype.has = function (e) {
                return this.map.hasOwnProperty(t(e))
            }, o.prototype.set = function (e, r) {
                this.map[t(e)] = n(r)
            }, o.prototype.forEach = function (e, t) {
                for (var n in this.map) this.map.hasOwnProperty(n) && e.call(t, this.map[n], n, this)
            }, o.prototype.keys = function () {
                var e = [];
                return this.forEach(function (t, n) {
                    e.push(n)
                }), r(e)
            }, o.prototype.values = function () {
                var e = [];
                return this.forEach(function (t) {
                    e.push(t)
                }), r(e)
            }, o.prototype.entries = function () {
                var e = [];
                return this.forEach(function (t, n) {
                    e.push([n, t])
                }), r(e)
            }, m.iterable && (o.prototype[Symbol.iterator] = o.prototype.entries);
            var w = ["DELETE", "GET", "HEAD", "OPTIONS", "POST", "PUT"];
            h.prototype.clone = function () {
                return new h(this, {body: this._bodyInit})
            }, d.call(h.prototype), d.call(g.prototype), g.prototype.clone = function () {
                return new g(this._bodyInit, {
                    status: this.status,
                    statusText: this.statusText,
                    headers: new o(this.headers),
                    url: this.url
                })
            }, g.error = function () {
                var e = new g(null, {status: 0, statusText: ""});
                return e.type = "error", e
            };
            var x = [301, 302, 303, 307, 308];
            g.redirect = function (e, t) {
                if (-1 === x.indexOf(t)) throw new RangeError("Invalid status code");
                return new g(null, {status: t, headers: {location: e}})
            }, e.Headers = o, e.Request = h, e.Response = g, e.fetch = function (e, t) {
                return new Promise(function (n, r) {
                    var o = new h(e, t), i = new XMLHttpRequest;
                    i.onload = function () {
                        var e = {
                            status: i.status,
                            statusText: i.statusText,
                            headers: v(i.getAllResponseHeaders() || "")
                        };
                        e.url = "responseURL" in i ? i.responseURL : e.headers.get("X-Request-URL");
                        var t = "response" in i ? i.response : i.responseText;
                        n(new g(t, e))
                    }, i.onerror = function () {
                        r(new TypeError("Network request failed"))
                    }, i.ontimeout = function () {
                        r(new TypeError("Network request failed"))
                    }, i.open(o.method, o.url, !0), "include" === o.credentials && (i.withCredentials = !0), "responseType" in i && m.blob && (i.responseType = "blob"), o.headers.forEach(function (e, t) {
                        i.setRequestHeader(t, e)
                    }), i.send(void 0 === o._bodyInit ? null : o._bodyInit)
                })
            }, e.fetch.polyfill = !0
        }
    }("undefined" != typeof self ? self : this)
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    var o = n(179), i = r(o), a = n(37), s = n(69), u = r(s), c = n(100), l = r(c), d = document.body;
    e.exports = {
        show: function () {
            var e = this.overlay = document.createElement("div"), t = document.createElement("div");
            (0, u.default)(t.style, {
                height: "48px",
                width: "48px"
            }), e.appendChild(t), (0, u.default)(e.style, (0, i.default)({
                position: "fixed",
                top: 0,
                left: 0,
                bottom: 0,
                right: 0,
                zIndex: 9999999,
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                backgroundColor: "rgba(0,0,0,0)"
            }, a.transition, "background-color 200ms linear")), d.appendChild(e), this.stop = (0, l.default)(t, {}), setTimeout(function () {
                e.style.backgroundColor = "rgba(0,0,0,0.3)"
            }, 20)
        }, hide: function () {
            var e = this;
            this.overlay.style.backgroundColor = "rgba(0,0,0,0.0)", setTimeout(function () {
                e.stop(), d.removeChild(e.overlay)
            })
        }
    }
}, function (e, t, n) {
    "use strict";
    t.__esModule = !0;
    var r = n(51), o = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(r);
    t.default = function (e, t, n) {
        return t in e ? (0, o.default)(e, t, {value: n, enumerable: !0, configurable: !0, writable: !0}) : e[t] = n, e
    }
}, function (e, t) {
    for (var n, r = ["webkitTransition", "MozTransition", "OTransition", "msTransition", "transition"], o = document.createElement("p"), i = 0; i < r.length; i++) if (null != o.style[r[i]]) {
        n = r[i];
        break
    }
    o = null, e.exports = n
}, function (e, t) {
    e.exports = function (e) {
        e || (e = document);
        var t = e.createElement("div"), n = null;
        return "touchAction" in t.style ? n = "touchAction" : "msTouchAction" in t.style && (n = "msTouchAction"), t = null, n
    }()
}, function (e, t, n) {
    var r = n(183);
    if (r && window.getComputedStyle) {
        var o = {
            webkitTransform: "-webkit-transform",
            OTransform: "-o-transform",
            msTransform: "-ms-transform",
            MozTransform: "-moz-transform",
            transform: "transform"
        }, i = document.createElement("div");
        i.style[r] = "translate3d(1px,1px,1px)", document.body.insertBefore(i, null);
        var a = getComputedStyle(i).getPropertyValue(o[r]);
        document.body.removeChild(i), e.exports = null != a && a.length && "none" != a
    } else e.exports = !1
}, function (e, t) {
    for (var n, r = ["webkitTransform", "MozTransform", "msTransform", "OTransform", "transform"], o = document.createElement("p"), i = 0; i < r.length; i++) if (n = r[i], null != o.style[n]) {
        e.exports = n;
        break
    }
}, function (e, t) {
    e.exports = function (e) {
        var t = e.getContext("2d"), n = window.devicePixelRatio || 1;
        return 1 != n && (e.style.width = e.width + "px", e.style.height = e.height + "px", e.width *= n, e.height *= n, t.scale(n, n)), e
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(15), i = r(o), a = n(186), s = r(a), u = n(66), c = r(u), l = n(71), d = r(l), f = n(103), h = r(f),
        p = n(21), v = function (e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t.default = e, t
        }(p), g = v.getBus();
    g.on("back", function () {
        c.default.currentView();
        c.default.navigateBack()
    });
    var m = window.__wxConfig__.window, y = {
        dom: null, init: function () {
            this.state = {
                backgroundColor: m.navigationBarBackgroundColor,
                color: m.navigationBarTextStyle,
                title: m.navigationBarTitleText,
                loading: !1,
                backText: "返回",
                back: !1,
                sendText: !1
            }, this.dom || (this.dom = {
                head: this.$(".jshook-ws-head"),
                headBack: this.$(".jshook-ws-head-back"),
                headBackText: this.$(".jshook-ws-head-back-text"),
                headHome: this.$(".jshook-ws-head-home"),
                headTitle: this.$(".jshook-ws-head-title"),
                headOption: this.$(".jshook-ws-head-option")
            }, this.dom.headBackSpan = this.dom.headBack.querySelector("span"), this.dom.headTitleSpan = this.dom.headTitle.querySelector("span"), this.dom.headBackI = this.dom.headBack.querySelector("i"), this.dom.headHomeI = this.dom.headHome.querySelector("i"), this.dom.headTitleI = this.dom.headTitle.querySelector("i"), this.dom.headBack.onclick = this.onBack.bind(null), this.dom.headHome.onclick = this.onHome.bind(null), this.dom.headOption.onclick = this.onOptions.bind(null)), this.dom.head.style.display = "block", g.on("route", this.reset.bind(this)), this.setState()
        }, $: function (e) {
            return document.querySelector(e)
        }, reset: function () {
            var e = {
                    backgroundColor: m.navigationBarBackgroundColor,
                    color: m.navigationBarTextStyle,
                    title: m.navigationBarTitleText,
                    loading: !1,
                    back: !1
                }, t = c.default.currentView(), n = m.pages[t.path] || {}, r = window.__wxConfig__.tabBar,
                o = r && "top" == r.position, i = o && v.isTabbar(t.url);
            t.isMap ? this.setState({
                hide: !1,
                backgroundColor: "rgb(0, 0, 0)",
                color: "#ffffff",
                title: "位置",
                loading: !1,
                backText: "取消",
                sendText: !0
            }) : this.setState({
                hide: i,
                backgroundColor: n.navigationBarBackgroundColor || e.backgroundColor,
                color: n.navigationBarTextStyle || e.color,
                title: n.navigationBarTitleText || e.title,
                loading: !1,
                backText: "返回",
                sendText: !1,
                back: null != t.pid
            })
        }, onBack: function (e, t) {
            e.preventDefault(), g.emit("back", t)
        }, onSend: function (e) {
            e.stopPropagation();
            var t = (0, i.default)({}, c.default.currentView().location);
            this.onBack(e, !0), g.emit("location", t)
        }, onOptions: function (e) {
            e.preventDefault(), (0, s.default)({
                refresh: {
                    text: "回主页", callback: function () {
                        window.sessionStorage.removeItem("routes"), v.navigateHome()
                    }
                }, clear: {
                    text: "清除数据缓存", callback: function () {
                        null != window.localStorage && (d.default.clear(), h.default.show({
                            title: "数据缓存已清除",
                            icon: "success"
                        }))
                    }
                }, cancel: {text: "取消"}
            }).then(function () {
                y.sheetShown = !0
            })
        }, setTitle: function (e) {
            this.dom.headTitleSpan.innerHTML = e
        }, showLoading: function () {
            this.dom.headTitleI.style.display = "inline-block"
        }, hideLoading: function () {
            this.dom.headTitleI.style.display = "none"
        }, onHome: function () {
            v.navigateHome()
        }, setNavigationBarColor: function (e) {
            var t = document.createElement("style"), n = null;
            document.head.appendChild(t);
            var r = t.sheet;
            n = CSS && CSS.supports && CSS.supports("animation: name") ? function (e, t) {
                var n = r.cssRules.length;
                r.insertRule("@keyframes " + e + "{" + t + "}", n)
            } : function (e, t) {
                var n = e + "{" + t + "}", o = r.cssRules.length;
                r.insertRule("@-webkit-keyframes " + n, o), r.insertRule("@keyframes " + n, o + 1)
            };
            var o = {linear: "linear", easeIn: "ease-in", easeOut: "ease-out", easeInOut: "ease-in-out"};
            e.animation ? (console.log(this.state.backgroundColor, e.backgroundColor), n("bgcAnimation", "0% {background-color: " + this.state.backgroundColor + "} 100% {background-color: " + e.backgroundColor), this.dom.head.style.animation = "bgcAnimation " + (e.animation.duration || 0) + "ms " + (o[e.animation.timingFunc] || "linear") + " forwards") : this.dom.head.style.backgroundColor = e.backgroundColor, this.state.backgroundColor = e.backgroundColor
        }, setState: function (e) {
            e && (0, i.default)(this.state, e);
            var t = this.state;
            this.dom.head.style.backgroundColor = t.backgroundColor, this.dom.head.style.display = t.hide ? "none" : "flex", this.dom.headBack.style.display = t.back ? "flex" : "none", this.dom.headBackSpan.style.color = t.color, this.dom.headTitle.style.color = t.color, this.dom.headBackSpan.innerHTML = t.backText, this.dom.headTitleSpan.innerHTML = t.title, this.dom.headBackI.style.display = t.sendText ? "none" : "inline-block", this.dom.headTitleI.style.display = t.loading ? "inline-block" : "none", this.dom.headBackI.style.borderLeft = "1px solid " + t.color, this.dom.headBackI.style.borderBottom = "1px solid " + t.color, this.dom.headHome.style.display = t.back ? "none" : "flex", this.dom.headHomeI.className = "white" == t.color ? "head-home-icon white" : "head-home-icon", this.dom.headHomeI.style.display = t.back ? "none" : "flex", t.sendText ? (this.dom.headOption.innerHTML = "<div>发送</div>", this.dom.headOption.querySelector("div").onclick = this.onSend.bind(this)) : this.dom.headOption.innerHTML = '<i class="head-option-icon' + ("white" == t.color ? " white" : "") + '"></i>'
        }
    };
    t.default = y
}, function (e, t, n) {
    var r = n(70), o = n(17), i = n(187), a = n(48), s = n(188), u = n(37), c = u.transitionend, l = n(189);
    document.addEventListener("touchstart", function () {
    }, !0);
    var d;
    e.exports = function (e) {
        function t(t) {
            var r = t.target;
            if (r.hasAttribute("data-action")) {
                var o = r.dataset.action, i = e[o], a = i.callback;
                i.redirect && (a = function () {
                    window.location.href = i.redirect
                });
                var s = i.nowait;
                if (!a) return;
                s ? (n(), a()) : a && n().then(a)
            } else n()
        }
        function n() {
            return new Promise(function (e) {
                function n() {
                    d = !1, s.unbind(u, c, n), u.parentNode && u.parentNode.removeChild(u), e()
                }
                s.unbind(u, "touchstart", p), s.unbind(u, "click", t), s.bind(u, c, n), a(u).remove("active")
            })
        }
        if (!d) {
            var u = o(i), f = u.querySelector(".actionsheet-body");
            if (Object.keys(e).forEach(function (t) {
                if ("cancel" != t) {
                    var n = e[t];
                    !0 !== n.hide && f.appendChild(o('<div class="actionsheet-item" data-action="' + t + '">' + n.text + "</div>"))
                }
            }), e.cancel) {
                var h = e.cancel.text || "cancel";
                f.parentNode.appendChild(o('<div class="actionsheet-foot"><div class="actionsheet-item cancel">' + h + "</div></div>"))
            }
            document.body.appendChild(u), d = !0;
            var p = r(t);
            return l ? s.bind(u, "touchstart", p) : s.bind(u, "click", t), new Promise(function (e) {
                setTimeout(function () {
                    a(u).add("active"), e()
                }, 20)
            })
        }
    }
}, function (e, t) {
    e.exports = '<div class="actionsheet-overlay">\n  <div class="actionsheet">\n    <div class="actionsheet-body">\n    </div>\n  </div>\n</div>\n'
}, function (e, t) {
    var n = window.addEventListener ? "addEventListener" : "attachEvent",
        r = window.removeEventListener ? "removeEventListener" : "detachEvent",
        o = "addEventListener" !== n ? "on" : "";
    t.bind = function (e, t, r, i) {
        return e[n](o + t, r, i || !1), r
    }, t.unbind = function (e, t, n, i) {
        return e[r](o + t, n, i || !1), n
    }
}, function (e, t, n) {
    (function (t) {
        e.exports = "ontouchstart" in t || t.DocumentTouch && document instanceof DocumentTouch
    }).call(t, n(102))
}, function (e, t) {
    function n() {
        throw new Error("setTimeout has not been defined")
    }
    function r() {
        throw new Error("clearTimeout has not been defined")
    }
    function o(e) {
        if (l === setTimeout) return setTimeout(e, 0);
        if ((l === n || !l) && setTimeout) return l = setTimeout, setTimeout(e, 0);
        try {
            return l(e, 0)
        } catch (t) {
            try {
                return l.call(null, e, 0)
            } catch (t) {
                return l.call(this, e, 0)
            }
        }
    }
    function i(e) {
        if (d === clearTimeout) return clearTimeout(e);
        if ((d === r || !d) && clearTimeout) return d = clearTimeout, clearTimeout(e);
        try {
            return d(e)
        } catch (t) {
            try {
                return d.call(null, e)
            } catch (t) {
                return d.call(this, e)
            }
        }
    }
    function a() {
        v && h && (v = !1, h.length ? p = h.concat(p) : g = -1, p.length && s())
    }
    function s() {
        if (!v) {
            var e = o(a);
            v = !0;
            for (var t = p.length; t;) {
                for (h = p, p = []; ++g < t;) h && h[g].run();
                g = -1, t = p.length
            }
            h = null, v = !1, i(e)
        }
    }
    function u(e, t) {
        this.fun = e, this.array = t
    }
    function c() {
    }
    var l, d, f = e.exports = {};
    !function () {
        try {
            l = "function" == typeof setTimeout ? setTimeout : n
        } catch (e) {
            l = n
        }
        try {
            d = "function" == typeof clearTimeout ? clearTimeout : r
        } catch (e) {
            d = r
        }
    }();
    var h, p = [], v = !1, g = -1;
    f.nextTick = function (e) {
        var t = new Array(arguments.length - 1);
        if (arguments.length > 1) for (var n = 1; n < arguments.length; n++) t[n - 1] = arguments[n];
        p.push(new u(e, t)), 1 !== p.length || v || o(s)
    }, u.prototype.run = function () {
        this.fun.apply(null, this.array)
    }, f.title = "browser", f.browser = !0, f.env = {}, f.argv = [], f.version = "", f.versions = {}, f.on = c, f.addListener = c, f.once = c, f.off = c, f.removeListener = c, f.removeAllListeners = c, f.emit = c, f.prependListener = c, f.prependOnceListener = c, f.listeners = function (e) {
        return []
    }, f.binding = function (e) {
        throw new Error("process.binding is not supported")
    }, f.cwd = function () {
        return "/"
    }, f.chdir = function (e) {
        throw new Error("process.chdir is not supported")
    }, f.umask = function () {
        return 0
    }
}, function (e, t, n) {
    "use strict";
    function r() {
        var e = document.createElement("div");
        return e.className = "mask", (0, i.default)(e.style, {
            position: "absolute",
            left: 0,
            top: 0,
            right: 0,
            bottom: 0,
            zIndex: 999
        }), document.body.appendChild(e), function () {
            e.parentNode && document.body.removeChild(e)
        }
    }
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = r;
    var o = n(69), i = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(o)
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(15), i = r(o), a = n(3), s = r(a), u = n(66), c = r(u), l = n(21), d = function (e) {
        if (e && e.__esModule) return e;
        var t = {};
        if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
        return t.default = e, t
    }(l), f = d.getBus(), h = (0, i.default)({}, {
        color: "#7A7E83",
        selectedColor: "#3cc51f",
        borderStyle: "black",
        backgroundColor: "#ffffff"
    }, window.__wxConfig__.tabBar), p = {
        init: function () {
            if (this.activeIdx = 0, this.scrollable = document.querySelector(".scrollable"), this.tabbar = document.querySelector(".jshook-ws-tabbar"), this.tabbar) {
                var e = this;
                this.tabbarItems = this.tabbar.querySelectorAll(".jshook-ws-tabbar-item"), [].forEach.call(this.tabbarItems, function (t, n) {
                    t.addEventListener("touchstart", e.onItemTap.bind(e, n, t))
                })
            }
        }, reset: function () {
            var e = c.default.currentView().path;
            this.select(e)
        }, show: function (e) {
            if (this.tabbar) {
                var t = e.replace(/\?(.*)$/, "").replace(/\.wxml$/, "");
                this.select(t)
            }
        }, select: function (e) {
            var t = h.list || [];
            this.activeIdx = -1;
            for (var n in t) t[n].pagePath === e && (this.activeIdx = n);
            this.doUpdate()
        }, onItemTap: function (e, t) {
            if (e != this.activeIdx) {
                var n = void 0, r = h.list || [];
                for (var o in r) o == e && (n = r[o]);
                this.activeIdx = e;
                var i = c.default.currentView();
                i && i.url == n.pagePath || c.default.switchTab(n.pagePath)
            }
        }, doUpdate: function () {
            var e = this.activeIdx, t = -1 == e || null == e, n = "top" == h.position;
            this.scrollable.style.bottom = t || n ? "0px" : "56px", this.scrollable.style.top = n && -1 != e ? "47px" : "42px", this.tabbar && (this.tabbar.style.display = t ? "none" : "flex", [].forEach.call(this.tabbarItems, function (t, r) {
                var o = t.querySelector(".tabbar-icon"), i = t.querySelector(".tabbar-label-indicator"),
                    a = t.querySelector(".tabbar-label");
                o && !o.getAttribute("src") && (o.style.display = "none"), e == r ? (n ? (i.style.color = h.selectedColor, i.style.display = "inline-block") : o && (o.src = o.getAttribute("select-icon")), a.style.color = h.selectedColor) : (n ? (i.style.color = h.color, i.style.display = "none") : o && (o.src = o.getAttribute("icon")), a.style.color = h.color)
            }))
        }
    };
    (0, s.default)(p), f.on("route", function (e) {
        p.show(e.url)
    }), t.default = p
}, function (e, t) {
    function n(e, t) {
        function n() {
            a = 0, s = +new Date, i = e.apply(r, o), r = null, o = null
        }
        var r, o, i, a, s = 0;
        return function () {
            r = this, o = arguments;
            var e = new Date - s;
            return a || (e >= t ? n() : a = setTimeout(n, t - e)), i
        }
    }
    e.exports = n
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o() {
        return navigator.getUserMedia || (navigator.getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia), new s.default(function (e, t) {
            if (v) return e();
            navigator.getUserMedia({
                audio: {
                    mandatory: {
                        googEchoCancellation: "false",
                        googAutoGainControl: "false",
                        googNoiseSuppression: "false",
                        googHighpassFilter: "false"
                    }, optional: []
                }
            }, function (t) {
                p = d.createGain(), h = d.createMediaStreamSource(t), f = h, f.connect(p), l = d.createAnalyser(), l.fftSize = 2048, p.connect(l), v = new c.default(p);
                var n = d.createGain();
                n.gain.value = 0, p.connect(n), n.connect(d.destination), e()
            }, function (e) {
                t(e)
            })
        })
    }
    function i() {
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var a = n(24), s = r(a), u = n(196), c = r(u);
    window.AudioContext = window.AudioContext || window.webkitAudioContext;
    var l, d = window.AudioContext && new AudioContext, f = null, h = null, p = null, v = null, g = !1;
    t.default = {
        startRecord: function (e) {
            var t = this, n = e.fail || i;
            return window.AudioContext ? o().then(function () {
                t.success = e.success, t.stopRecord().then(function () {
                    g = !0, v.clear(), v.record()
                }), setTimeout(function () {
                    t.stopRecord()
                }, 6e4)
            }, n) : (n(new Error("No audio API detected")), s.default.reject())
        }, stopRecord: function () {
            var e = this;
            return g ? (g = !1, v.stop(), new s.default(function (t) {
                v.exportWAV(function (n) {
                    var r = (window.URL || window.webkitURL).createObjectURL(n);
                    e.success && e.success(r), t(r)
                })
            })) : s.default.resolve(null)
        }
    }
}, function (e, t, n) {
    n(53), n(32), n(41), n(89), e.exports = n(2).Promise
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0}), t.Recorder = void 0;
    var o = n(15), i = r(o), a = n(0), s = r(a), u = n(1), c = r(u), l = n(197), d = r(l),
        f = t.Recorder = function () {
            function e(t, n) {
                var r = this;
                (0, s.default)(this, e), this.config = {
                    bufferLen: 4096,
                    numChannels: 2,
                    mimeType: "audio/wav"
                }, this.recording = !1, this.callbacks = {
                    getBuffer: [],
                    exportWAV: []
                }, (0, i.default)(this.config, n), this.context = t.context, this.node = (this.context.createScriptProcessor || this.context.createJavaScriptNode).call(this.context, this.config.bufferLen, this.config.numChannels, this.config.numChannels), this.node.onaudioprocess = function (e) {
                    if (r.recording) {
                        for (var t = [], n = 0; n < r.config.numChannels; n++) t.push(e.inputBuffer.getChannelData(n));
                        r.worker.postMessage({command: "record", buffer: t})
                    }
                }, t.connect(this.node), this.node.connect(this.context.destination);
                var o = {};
                this.worker = new d.default(function () {
                    function e(e) {
                        h = e.sampleRate, p = e.numChannels, i()
                    }
                    function t(e) {
                        for (var t = 0; t < p; t++) f[t].push(e[t]);
                        d += e[0].length
                    }
                    function n(e) {
                        for (var t = [], n = 0; n < p; n++) t.push(a(f[n], d));
                        var r = void 0;
                        r = 2 === p ? s(t[0], t[1]) : t[0];
                        var o = l(r), i = new Blob([o], {type: e});
                        this.postMessage({command: "exportWAV", data: i})
                    }
                    function r() {
                        for (var e = [], t = 0; t < p; t++) e.push(a(f[t], d));
                        this.postMessage({command: "getBuffer", data: e})
                    }
                    function o() {
                        d = 0, f = [], i()
                    }
                    function i() {
                        for (var e = 0; e < p; e++) f[e] = []
                    }
                    function a(e, t) {
                        for (var n = new Float32Array(t), r = 0, o = 0; o < e.length; o++) n.set(e[o], r), r += e[o].length;
                        return n
                    }
                    function s(e, t) {
                        for (var n = e.length + t.length, r = new Float32Array(n), o = 0, i = 0; o < n;) r[o++] = e[i], r[o++] = t[i], i++;
                        return r
                    }
                    function u(e, t, n) {
                        for (var r = 0; r < n.length; r++, t += 2) {
                            var o = Math.max(-1, Math.min(1, n[r]));
                            e.setInt16(t, o < 0 ? 32768 * o : 32767 * o, !0)
                        }
                    }
                    function c(e, t, n) {
                        for (var r = 0; r < n.length; r++) e.setUint8(t + r, n.charCodeAt(r))
                    }
                    function l(e) {
                        var t = new ArrayBuffer(44 + 2 * e.length), n = new DataView(t);
                        return c(n, 0, "RIFF"), n.setUint32(4, 36 + 2 * e.length, !0), c(n, 8, "WAVE"), c(n, 12, "fmt "), n.setUint32(16, 16, !0), n.setUint16(20, 1, !0), n.setUint16(22, p, !0), n.setUint32(24, h, !0), n.setUint32(28, 4 * h, !0), n.setUint16(32, 2 * p, !0), n.setUint16(34, 16, !0), c(n, 36, "data"), n.setUint32(40, 2 * e.length, !0), u(n, 44, e), n
                    }
                    var d = 0, f = [], h = void 0, p = void 0;
                    this.onmessage = function (i) {
                        switch (i.data.command) {
                            case"init":
                                e(i.data.config);
                                break;
                            case"record":
                                t(i.data.buffer);
                                break;
                            case"exportWAV":
                                n(i.data.type);
                                break;
                            case"getBuffer":
                                r();
                                break;
                            case"clear":
                                o()
                        }
                    }
                }, o), this.worker.postMessage({
                    command: "init",
                    config: {sampleRate: this.context.sampleRate, numChannels: this.config.numChannels}
                }), this.worker.onmessage = function (e) {
                    var t = r.callbacks[e.data.command].pop();
                    "function" == typeof t && t(e.data.data)
                }
            }
            return (0, c.default)(e, [{
                key: "record", value: function () {
                    this.recording = !0
                }
            }, {
                key: "stop", value: function () {
                    this.recording = !1
                }
            }, {
                key: "clear", value: function () {
                    this.worker.postMessage({command: "clear"})
                }
            }, {
                key: "getBuffer", value: function (e) {
                    if (!(e = e || this.config.callback)) throw new Error("Callback not set");
                    this.callbacks.getBuffer.push(e), this.worker.postMessage({command: "getBuffer"})
                }
            }, {
                key: "exportWAV", value: function (e, t) {
                    if (t = t || this.config.mimeType, !(e = e || this.config.callback)) throw new Error("Callback not set");
                    this.callbacks.exportWAV.push(e), this.worker.postMessage({command: "exportWAV", type: t})
                }
            }], [{
                key: "forceDownload", value: function (e, t) {
                    var n = (window.URL || window.webkitURL).createObjectURL(e), r = window.document.createElement("a");
                    r.href = n, r.download = t || "output.wav";
                    var o = document.createEvent("Event");
                    o.initEvent("click", !0, !0), r.dispatchEvent(o)
                }
            }]), e
        }();
    t.default = f
}, function (e, t, n) {
    "use strict";
    (function (t) {
        function n(e, n) {
            function o(e) {
                setTimeout(function () {
                    a.onmessage({data: e})
                }, 0)
            }
            var i, a = this;
            if (n = n || {}, r) return i = e.toString().trim().match(/^function\s*\w*\s*\([\w\s,]*\)\s*{([\w\W]*?)}$/)[1], new t.Worker(t.URL.createObjectURL(new t.Blob([i], {type: "text/javascript"})));
            this.self = n, this.self.postMessage = o, setTimeout(e.bind(n, n), 0)
        }
        var r = !!(t === t.window && t.URL && t.Blob && t.Worker);
        n.prototype.postMessage = function (e) {
            var t = this;
            setTimeout(function () {
                t.self.onmessage({data: e})
            }, 0)
        }, e.exports = n
    }).call(t, n(102))
}, function (e, t, n) {
    "use strict";
    !function (t) {
        var n = function (e) {
            return null != e || e != t
        }, r = function (e, t) {
            for (var n = i._callbacks[e], r = 0; r < n.length; r++) n[r].apply(window, t)
        }, o = function (e) {
            for (var t = 0, n = e.length - 1; n > e.length - 6; n--) t += e[n];
            return t / 5
        }, i = e.exports = {
            method: t,
            watch: function (e) {
                var t = ++i._lastId;
                return i.init(function (n) {
                    if ("phonegap" == n) i._watchers[t] = i._nav.compass.watchHeading(e); else if ("webkitOrientation" == n) {
                        var r = function (t) {
                            e(t.webkitCompassHeading)
                        };
                        i._win.addEventListener("deviceorientation", r), i._watchers[t] = r
                    } else if ("orientationAndGPS" == n) {
                        var o, a = function (t) {
                            o = -t.alpha + i._gpsDiff, o < 0 ? o += 360 : o > 360 && (o -= 360), e(o)
                        };
                        i._win.addEventListener("deviceorientation", a), i._watchers[t] = a
                    }
                }), t
            },
            unwatch: function (e) {
                return i.init(function (t) {
                    "phonegap" == t ? i._nav.compass.clearWatch(i._watchers[e]) : ("webkitOrientation" == t || "orientationAndGPS" == t) && i._win.removeEventListener("deviceorientation", i._watchers[e]), delete i._watchers[e]
                }), i
            },
            needGPS: function (e) {
                return i._callbacks.needGPS.push(e), i
            },
            needMove: function (e) {
                return i._callbacks.needMove.push(e), i
            },
            noSupport: function (e) {
                return !1 === i.method ? e() : n(i.method) || i._callbacks.noSupport.push(e), i
            },
            init: function (e) {
                return n(i.method) ? void e(i.method) : (i._callbacks.init.push(e), i._initing ? void 0 : (i._initing = !0, i._nav.compass ? i._start("phonegap") : i._win.DeviceOrientationEvent ? (i._checking = 0, i._win.addEventListener("deviceorientation", i._checkEvent), setTimeout(function () {
                    !1 !== i._checking && i._start(!1)
                }, 500)) : i._start(!1), i))
            },
            _lastId: 0,
            _watchers: {},
            _win: window,
            _nav: navigator,
            _callbacks: {init: [], noSupport: [], needGPS: [], needMove: []},
            _initing: !1,
            _gpsDiff: t,
            _start: function (e) {
                i.method = e, i._initing = !1, r("init", [e]), i._callbacks.init = [], !1 === e && r("noSupport", []), i._callbacks.noSupport = []
            },
            _checking: !1,
            _checkEvent: function (e) {
                i._checking += 1;
                var t = !1;
                n(e.webkitCompassHeading) ? i._start("webkitOrientation") : n(e.alpha) && i._nav.geolocation ? i._gpsHack() : i._checking > 1 ? i._start(!1) : t = !0, t || (i._checking = !1, i._win.removeEventListener("deviceorientation", i._checkEvent))
            },
            _gpsHack: function () {
                var e = !0, t = [], a = [];
                r("needGPS");
                var s = function (e) {
                    t.push(e.alpha)
                };
                i._win.addEventListener("deviceorientation", s);
                var u = function (u) {
                    var c = u.coords;
                    n(c.heading) && (e && (e = !1, r("needMove")), c.speed > 1 ? (a.push(c.heading), a.length >= 5 && t.length >= 5 && (i._win.removeEventListener("deviceorientation", s), i._nav.geolocation.clearWatch(l), i._gpsDiff = o(a) + o(t), i._start("orientationAndGPS"))) : a = [])
                }, c = function () {
                    i._win.removeEventListener("deviceorientation", s), i._start(!1)
                }, l = i._nav.geolocation.watchPosition(u, c, {enableHighAccuracy: !0})
            }
        }
    }()
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(16), i = r(o), a = n(0), s = r(a), u = n(1), c = r(u), l = n(22), d = r(l), f = n(23), h = r(f), p = n(3),
        v = r(p), g = n(17), m = r(g), y = n(25), _ = r(y), b = n(76), w = r(b), x = n(78), k = r(x), T = function (e) {
            function t(e) {
                (0, s.default)(this, t);
                var n = (0, d.default)(this, (t.__proto__ || (0, i.default)(t)).call(this));
                return n.opts = e, n.root = document.createElement("div"), document.body.appendChild(n.root), n.events = (0, _.default)(n.root, n), n.events.bind("click .cancel", "cancel"), n.events.bind("click .confirm", "confirm"), n
            }
            return (0, h.default)(t, e), (0, c.default)(t, [{
                key: "show", value: function () {
                    this.root.appendChild((0, m.default)('<div class="wx-picker-mask"></div>'));
                    var e = this.opts.array.map(function (e) {
                        return {text: e, value: e}
                    }), t = (0, m.default)((0, k.default)({group: [e]}));
                    this.root.appendChild(t);
                    var n = this.root.querySelector(".wx-picker-content");
                    this.scrollable = new w.default(n, this.opts.current)
                }
            }, {
                key: "hide", value: function () {
                    this.events.unbind(), this.scrollable.unbind(), document.body.removeChild(this.root)
                }
            }, {
                key: "cancel", value: function (e) {
                    e.preventDefault(), this.hide(), this.emit("cancel")
                }
            }, {
                key: "confirm", value: function (e) {
                    var t = this.scrollable.current();
                    e.preventDefault(), this.hide(), this.emit("select", t)
                }
            }]), t
        }(v.default);
    t.default = T
}, function (e, t) {
    function n(e) {
        if (e) return r(e)
    }
    function r(e) {
        for (var t in n.prototype) e[t] = n.prototype[t];
        return e
    }
    e.exports = n, n.prototype.on = n.prototype.addEventListener = function (e, t) {
        return this._callbacks = this._callbacks || {}, (this._callbacks["$" + e] = this._callbacks["$" + e] || []).push(t), this
    }, n.prototype.once = function (e, t) {
        function n() {
            this.off(e, n), t.apply(this, arguments)
        }
        return n.fn = t, this.on(e, n), this
    }, n.prototype.off = n.prototype.removeListener = n.prototype.removeAllListeners = n.prototype.removeEventListener = function (e, t) {
        if (this._callbacks = this._callbacks || {}, 0 == arguments.length) return this._callbacks = {}, this;
        var n = this._callbacks["$" + e];
        if (!n) return this;
        if (1 == arguments.length) return delete this._callbacks["$" + e], this;
        for (var r, o = 0; o < n.length; o++) if ((r = n[o]) === t || r.fn === t) {
            n.splice(o, 1);
            break
        }
        return this
    }, n.prototype.emit = function (e) {
        this._callbacks = this._callbacks || {};
        var t = [].slice.call(arguments, 1), n = this._callbacks["$" + e];
        if (n) {
            n = n.slice(0);
            for (var r = 0, o = n.length; r < o; ++r) n[r].apply(this, t)
        }
        return this
    }, n.prototype.listeners = function (e) {
        return this._callbacks = this._callbacks || {}, this._callbacks["$" + e] || []
    }, n.prototype.hasListeners = function (e) {
        return !!this.listeners(e).length
    }
}, function (e, t, n) {
    function r(e) {
        switch (o(e)) {
            case"object":
                var t = {};
                for (var n in e) e.hasOwnProperty(n) && (t[n] = r(e[n]));
                return t;
            case"array":
                for (var t = new Array(e.length), i = 0, a = e.length; i < a; i++) t[i] = r(e[i]);
                return t;
            case"regexp":
                var s = "";
                return s += e.multiline ? "m" : "", s += e.global ? "g" : "", s += e.ignoreCase ? "i" : "", new RegExp(e.source, s);
            case"date":
                return new Date(e.getTime());
            default:
                return e
        }
    }
    var o;
    try {
        o = n(46)
    } catch (e) {
        o = n(46)
    }
    e.exports = r
}, function (e, t) {
    t.linear = function (e) {
        return e
    }, t.inQuad = function (e) {
        return e * e
    }, t.outQuad = function (e) {
        return e * (2 - e)
    }, t.inOutQuad = function (e) {
        return e *= 2, e < 1 ? .5 * e * e : -.5 * (--e * (e - 2) - 1)
    }, t.inCube = function (e) {
        return e * e * e
    }, t.outCube = function (e) {
        return --e * e * e + 1
    }, t.inOutCube = function (e) {
        return e *= 2, e < 1 ? .5 * e * e * e : .5 * ((e -= 2) * e * e + 2)
    }, t.inQuart = function (e) {
        return e * e * e * e
    }, t.outQuart = function (e) {
        return 1 - --e * e * e * e
    }, t.inOutQuart = function (e) {
        return e *= 2, e < 1 ? .5 * e * e * e * e : -.5 * ((e -= 2) * e * e * e - 2)
    }, t.inQuint = function (e) {
        return e * e * e * e * e
    }, t.outQuint = function (e) {
        return --e * e * e * e * e + 1
    }, t.inOutQuint = function (e) {
        return e *= 2, e < 1 ? .5 * e * e * e * e * e : .5 * ((e -= 2) * e * e * e * e + 2)
    }, t.inSine = function (e) {
        return 1 - Math.cos(e * Math.PI / 2)
    }, t.outSine = function (e) {
        return Math.sin(e * Math.PI / 2)
    }, t.inOutSine = function (e) {
        return .5 * (1 - Math.cos(Math.PI * e))
    }, t.inExpo = function (e) {
        return 0 == e ? 0 : Math.pow(1024, e - 1)
    }, t.outExpo = function (e) {
        return 1 == e ? e : 1 - Math.pow(2, -10 * e)
    }, t.inOutExpo = function (e) {
        return 0 == e ? 0 : 1 == e ? 1 : (e *= 2) < 1 ? .5 * Math.pow(1024, e - 1) : .5 * (2 - Math.pow(2, -10 * (e - 1)))
    }, t.inCirc = function (e) {
        return 1 - Math.sqrt(1 - e * e)
    }, t.outCirc = function (e) {
        return Math.sqrt(1 - --e * e)
    }, t.inOutCirc = function (e) {
        return e *= 2, e < 1 ? -.5 * (Math.sqrt(1 - e * e) - 1) : .5 * (Math.sqrt(1 - (e -= 2) * e) + 1)
    }, t.inBack = function (e) {
        var t = 1.70158;
        return e * e * ((t + 1) * e - t)
    }, t.outBack = function (e) {
        var t = 1.70158;
        return --e * e * ((t + 1) * e + t) + 1
    }, t.inOutBack = function (e) {
        var t = 2.5949095;
        return (e *= 2) < 1 ? e * e * ((t + 1) * e - t) * .5 : .5 * ((e -= 2) * e * ((t + 1) * e + t) + 2)
    }, t.inBounce = function (e) {
        return 1 - t.outBounce(1 - e)
    }, t.outBounce = function (e) {
        return e < 1 / 2.75 ? 7.5625 * e * e : e < 2 / 2.75 ? 7.5625 * (e -= 1.5 / 2.75) * e + .75 : e < 2.5 / 2.75 ? 7.5625 * (e -= 2.25 / 2.75) * e + .9375 : 7.5625 * (e -= 2.625 / 2.75) * e + .984375
    }, t.inOutBounce = function (e) {
        return e < .5 ? .5 * t.inBounce(2 * e) : .5 * t.outBounce(2 * e - 1) + .5
    }, t["in-quad"] = t.inQuad, t["out-quad"] = t.outQuad, t["in-out-quad"] = t.inOutQuad, t["in-cube"] = t.inCube, t["out-cube"] = t.outCube, t["in-out-cube"] = t.inOutCube, t["in-quart"] = t.inQuart, t["out-quart"] = t.outQuart, t["in-out-quart"] = t.inOutQuart, t["in-quint"] = t.inQuint, t["out-quint"] = t.outQuint, t["in-out-quint"] = t.inOutQuint, t["in-sine"] = t.inSine, t["out-sine"] = t.outSine, t["in-out-sine"] = t.inOutSine, t["in-expo"] = t.inExpo, t["out-expo"] = t.outExpo, t["in-out-expo"] = t.inOutExpo, t["in-circ"] = t.inCirc, t["out-circ"] = t.outCirc, t["in-out-circ"] = t.inOutCirc, t["in-back"] = t.inBack, t["out-back"] = t.outBack, t["in-out-back"] = t.inOutBack, t["in-bounce"] = t.inBounce, t["out-bounce"] = t.outBounce, t["in-out-bounce"] = t.inOutBounce
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(52), i = r(o), a = n(16), s = r(a), u = n(0), c = r(u), l = n(1), d = r(l), f = n(22), h = r(f),
        p = n(23), v = r(p), g = n(3), m = r(g), y = n(17), _ = r(y), b = n(25), w = r(b), x = n(76), k = r(x),
        T = n(78), S = r(T), C = n(21), E = function (e) {
            function t(e) {
                (0, c.default)(this, t);
                var n = (0, h.default)(this, (t.__proto__ || (0, s.default)(t)).call(this));
                return n.opts = e, n.root = document.createElement("div"), document.body.appendChild(n.root), n.events = (0, w.default)(n.root, n), n.events.bind("click .cancel", "cancel"), n.events.bind("click .confirm", "confirm"), n
            }
            return (0, v.default)(t, e), (0, d.default)(t, [{
                key: "show", value: function () {
                    var e = this;
                    this.root.appendChild((0, _.default)('<div class="wx-picker-mask"></div>'));
                    var t = [];
                    t.push((0, C.range)(23, 0).map(function (e) {
                        return {text: e, value: e}
                    })), t.push((0, C.range)(59, 0).map(function (e) {
                        return {text: e, value: e}
                    }));
                    var n = (0, _.default)((0, S.default)({group: t}));
                    this.root.appendChild(n);
                    var r = (0, i.default)(this.root.querySelectorAll(".wx-picker-content")), o = this.getCurrent();
                    this.scrollables = r.map(function (t, n) {
                        var r = new k.default(t, o[n]);
                        return r.on("end", function () {
                            e.checkValue(r, r.currentValue())
                        }), r
                    })
                }
            }, {
                key: "checkValue", value: function (e, t) {
                }
            }, {
                key: "getCurrent", value: function () {
                    var e = this.opts.current, t = e.split(":");
                    return [Number(t[0]), Number(t[1])]
                }
            }, {
                key: "hide", value: function () {
                    this.events.unbind(), this.scrollables.forEach(function (e) {
                        e.unbind()
                    }), document.body.removeChild(this.root)
                }
            }, {
                key: "cancel", value: function (e) {
                    e.preventDefault(), this.hide(), this.emit("cancel")
                }
            }, {
                key: "confirm", value: function (e) {
                    e.preventDefault();
                    var t = this.scrollables.map(function (e) {
                        return e.currentValue()
                    });
                    this.hide(), this.emit("select", t.join(":"))
                }
            }]), t
        }(m.default);
    t.default = E
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(52), i = r(o), a = n(16), s = r(a), u = n(0), c = r(u), l = n(1), d = r(l), f = n(22), h = r(f),
        p = n(23), v = r(p), g = n(3), m = r(g), y = n(17), _ = r(y), b = n(25), w = r(b), x = n(76), k = r(x),
        T = n(78), S = r(T), C = n(21), E = function (e) {
            function t(e) {
                (0, c.default)(this, t);
                var n = (0, h.default)(this, (t.__proto__ || (0, s.default)(t)).call(this));
                n.opts = e, n.root = document.createElement("div"), document.body.appendChild(n.root), n.events = (0, w.default)(n.root, n), n.events.bind("click .cancel", "cancel"), n.events.bind("click .confirm", "confirm");
                var r = e.range;
                return n.sy = Number(r.start.split("-")[0]), n.ey = Number(r.end.split("-")[0]), n
            }
            return (0, v.default)(t, e), (0, d.default)(t, [{
                key: "show", value: function () {
                    var e = this;
                    this.root.appendChild((0, _.default)('<div class="wx-picker-mask"></div>'));
                    var t = [];
                    t.push((0, C.range)(this.ey, this.sy).map(function (e) {
                        return {text: e + "年", value: e}
                    })), t.push((0, C.range)(12, 1).map(function (e) {
                        return {text: e + "月", value: e}
                    })), t.push((0, C.range)(31, 1).map(function (e) {
                        return {text: e + "日", value: e}
                    })), console.log(t);
                    var n = (0, _.default)((0, S.default)({group: t}));
                    this.root.appendChild(n);
                    var r = (0, i.default)(this.root.querySelectorAll(".wx-picker-content")), o = this.getCurrent();
                    this.scrollables = r.map(function (t, n) {
                        var r = new k.default(t, o[n]);
                        return r.on("end", function () {
                            e.checkValue(r, r.currentValue())
                        }), r
                    })
                }
            }, {
                key: "checkValue", value: function (e, t) {
                }
            }, {
                key: "getCurrent", value: function () {
                    var e = this.opts.current, t = e.split("-");
                    return [Number(t[0]) - this.sy, Number(t[1]) - 1, Number(t[2]) - 1]
                }
            }, {
                key: "hide", value: function () {
                    this.events.unbind(), this.scrollables.forEach(function (e) {
                        e.unbind()
                    }), document.body.removeChild(this.root)
                }
            }, {
                key: "cancel", value: function (e) {
                    e.preventDefault(), this.hide(), this.emit("cancel")
                }
            }, {
                key: "confirm", value: function (e) {
                    e.preventDefault();
                    var t = this.scrollables.map(function (e) {
                        return e.currentValue()
                    });
                    this.hide(), this.emit("select", t.join("-"))
                }
            }]), t
        }(m.default);
    t.default = E
}, function (e, t, n) {
    "use strict";
    function r() {
        return (0, s.default)({url: "/fileList"})
    }
    function o(e) {
        return (0, s.default)({url: "/fileInfo", query: {filePath: e}})
    }
    function i(e) {
        return (0, s.default)({method: "post", url: "/removeFile", query: {filePath: e}})
    }
    Object.defineProperty(t, "__esModule", {value: !0}), t.getFileList = r, t.getFileInfo = o, t.removeFile = i;
    var a = n(206), s = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(a)
}, function (e, t, n) {
    "use strict";
    function r(e) {
        var t = e.method, n = void 0 === t ? "get" : t, r = e.headers, o = void 0 === r ? {} : r, s = e.url, u = e.data,
            c = void 0 === u ? null : u, l = e.query, d = void 0 === l ? {} : l;
        return new i.default(function (e, t) {
            var r = a(n, s);
            r.accept("json").type("json"), r.query(d), c && r.send(c);
            for (var i in o) r.set(i, o[i]);
            r.end(function (n) {
                if (n.ok) return e(n.body);
                t(new Error(n.text))
            })
        })
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(24), i = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(o);
    t.default = r;
    var a = n(207)
}, function (e, t, n) {
    function r() {
    }
    function o(e) {
        switch ({}.toString.call(e)) {
            case"[object File]":
            case"[object Blob]":
            case"[object FormData]":
                return !0;
            default:
                return !1
        }
    }
    function i() {
        if (m.XMLHttpRequest && ("file:" != m.location.protocol || !m.ActiveXObject)) return new XMLHttpRequest;
        try {
            return new ActiveXObject("Microsoft.XMLHTTP")
        } catch (e) {
        }
        try {
            return new ActiveXObject("Msxml2.XMLHTTP.6.0")
        } catch (e) {
        }
        try {
            return new ActiveXObject("Msxml2.XMLHTTP.3.0")
        } catch (e) {
        }
        try {
            return new ActiveXObject("Msxml2.XMLHTTP")
        } catch (e) {
        }
        return !1
    }
    function a(e) {
        return e === Object(e)
    }
    function s(e) {
        if (!a(e)) return e;
        var t = [];
        for (var n in e) null != e[n] && t.push(encodeURIComponent(n) + "=" + encodeURIComponent(e[n]));
        return t.join("&")
    }
    function u(e) {
        for (var t, n, r = {}, o = e.split("&"), i = 0, a = o.length; i < a; ++i) n = o[i], t = n.split("="), r[decodeURIComponent(t[0])] = decodeURIComponent(t[1]);
        return r
    }
    function c(e) {
        var t, n, r, o, i = e.split(/\r?\n/), a = {};
        i.pop();
        for (var s = 0, u = i.length; s < u; ++s) n = i[s], t = n.indexOf(":"), r = n.slice(0, t).toLowerCase(), o = y(n.slice(t + 1)), a[r] = o;
        return a
    }
    function l(e) {
        return e.split(/ *; */).shift()
    }
    function d(e) {
        return g(e.split(/ *; */), function (e, t) {
            var n = t.split(/ *= */), r = n.shift(), o = n.shift();
            return r && o && (e[r] = o), e
        }, {})
    }
    function f(e, t) {
        t = t || {}, this.req = e, this.xhr = this.req.xhr, this.text = this.xhr.responseText, this.setStatusProperties(this.xhr.status), this.header = this.headers = c(this.xhr.getAllResponseHeaders()), this.header["content-type"] = this.xhr.getResponseHeader("content-type"), this.setHeaderProperties(this.header), this.body = "HEAD" != this.req.method ? this.parseBody(this.text) : null
    }
    function h(e, t) {
        var n = this;
        v.call(this), this._query = this._query || [], this.method = e, this.url = t, this.header = {}, this._header = {}, this.set("X-Requested-With", "XMLHttpRequest"), this.on("end", function () {
            var t = new f(n);
            "HEAD" == e && (t.text = null), n.callback(null, t)
        })
    }
    function p(e, t) {
        return "function" == typeof t ? new h("GET", e).end(t) : 1 == arguments.length ? new h("GET", e) : new h(e, t)
    }
    var v = n(3), g = n(208), m = "undefined" == typeof window ? this : window, y = "".trim ? function (e) {
        return e.trim()
    } : function (e) {
        return e.replace(/(^\s*|\s*$)/g, "")
    };
    p.serializeObject = s, p.parseString = u, p.types = {
        html: "text/html",
        json: "application/json",
        xml: "application/xml",
        urlencoded: "application/x-www-form-urlencoded",
        form: "application/x-www-form-urlencoded",
        "form-data": "application/x-www-form-urlencoded"
    }, p.serialize = {
        "application/x-www-form-urlencoded": s,
        "application/json": JSON.stringify
    }, p.parse = {
        "application/x-www-form-urlencoded": u,
        "application/json": JSON.parse
    }, f.prototype.get = function (e) {
        return this.header[e.toLowerCase()]
    }, f.prototype.setHeaderProperties = function (e) {
        var t = this.header["content-type"] || "";
        this.type = l(t);
        var n = d(t);
        for (var r in n) this[r] = n[r]
    }, f.prototype.parseBody = function (e) {
        var t = p.parse[this.type];
        return e && t ? t(e) : null
    }, f.prototype.setStatusProperties = function (e) {
        var t = e / 100 | 0;
        this.status = e, this.statusType = t, this.info = 1 == t, this.ok = 2 == t, this.clientError = 4 == t, this.serverError = 5 == t, this.error = (4 == t || 5 == t) && this.toError(), this.accepted = 202 == e, this.noContent = 204 == e || 1223 == e, this.badRequest = 400 == e, this.unauthorized = 401 == e, this.notAcceptable = 406 == e, this.notFound = 404 == e, this.forbidden = 403 == e
    }, f.prototype.toError = function () {
        var e = this.req, t = e.method, n = e.url, r = "cannot " + t + " " + n + " (" + this.status + ")",
            o = new Error(r);
        return o.status = this.status, o.method = t, o.url = n, o
    }, p.Response = f, v(h.prototype), h.prototype.use = function (e) {
        return e(this), this
    }, h.prototype.timeout = function (e) {
        return this._timeout = e, this
    }, h.prototype.clearTimeout = function () {
        return this._timeout = 0, clearTimeout(this._timer), this
    }, h.prototype.abort = function () {
        if (!this.aborted) return this.aborted = !0, this.xhr.abort(), this.clearTimeout(), this.emit("abort"), this
    }, h.prototype.set = function (e, t) {
        if (a(e)) {
            for (var n in e) this.set(n, e[n]);
            return this
        }
        return this._header[e.toLowerCase()] = t, this.header[e] = t, this
    }, h.prototype.getHeader = function (e) {
        return this._header[e.toLowerCase()]
    }, h.prototype.type = function (e) {
        return this.set("Content-Type", p.types[e] || e), this
    }, h.prototype.accept = function (e) {
        return this.set("Accept", p.types[e] || e), this
    }, h.prototype.auth = function (e, t) {
        var n = btoa(e + ":" + t);
        return this.set("Authorization", "Basic " + n), this
    }, h.prototype.query = function (e) {
        return "string" != typeof e && (e = s(e)), e && this._query.push(e), this
    }, h.prototype.field = function (e, t) {
        return this._formData || (this._formData = new FormData), this._formData.append(e, t), this
    }, h.prototype.attach = function (e, t, n) {
        return this._formData || (this._formData = new FormData), this._formData.append(e, t, n), this
    }, h.prototype.send = function (e) {
        var t = a(e), n = this.getHeader("Content-Type");
        if (t && a(this._data)) for (var r in e) this._data[r] = e[r]; else "string" == typeof e ? (n || this.type("form"), n = this.getHeader("Content-Type"), this._data = "application/x-www-form-urlencoded" == n ? this._data ? this._data + "&" + e : e : (this._data || "") + e) : this._data = e;
        return t ? (n || this.type("json"), this) : this
    }, h.prototype.callback = function (e, t) {
        var n = this._callback;
        if (!e && t && t.status / 100 > 3 && (e = t.body && t.body.message ? new Error(t.body.message) : new Error("cannot GET /error (" + t.status + ")")), 2 == n.length || 0 === n.length) return n(e, t);
        t = t || {}, t.error = e, e && this.emit("error", e), n(t)
    }, h.prototype.crossDomainError = function () {
        var e = new Error("Origin is not allowed by Access-Control-Allow-Origin");
        e.crossDomain = !0, this.callback(e)
    }, h.prototype.timeoutError = function () {
        var e = this._timeout, t = new Error("timeout of " + e + "ms exceeded");
        t.timeout = e, this.callback(t)
    }, h.prototype.withCredentials = function () {
        return this._withCredentials = !0, this
    }, h.prototype.end = function (e) {
        var t = this, n = this.xhr = i(), a = this._query.join("&"), s = this._timeout,
            u = this._formData || this._data;
        if (this._callback = e || r, n.onreadystatechange = function () {
            if (4 == n.readyState) return 0 == n.status ? t.aborted ? t.timeoutError() : t.crossDomainError() : void t.emit("end")
        }, n.upload && (n.upload.onprogress = function (e) {
            e.percent = e.loaded / e.total * 100, t.emit("progress", e)
        }), s && !this._timer && (this._timer = setTimeout(function () {
            t.abort()
        }, s)), a && (a = p.serializeObject(a), this.url += ~this.url.indexOf("?") ? "&" + a : "?" + a), n.open(this.method, this.url, !0), this._withCredentials && (n.withCredentials = !0), "GET" != this.method && "HEAD" != this.method && "string" != typeof u && !o(u)) {
            var c = p.serialize[this.getHeader("Content-Type")];
            c && (u = c(u))
        }
        for (var l in this.header) null != this.header[l] && n.setRequestHeader(l, this.header[l]);
        return this.emit("request", this), n.send(u), this
    }, p.Request = h, p.get = function (e, t, n) {
        var r = p("GET", e);
        return "function" == typeof t && (n = t, t = null), t && r.query(t), n && r.end(n), r
    }, p.head = function (e, t, n) {
        var r = p("HEAD", e);
        return "function" == typeof t && (n = t, t = null), t && r.send(t), n && r.end(n), r
    }, p.del = function (e, t) {
        var n = p("DELETE", e);
        return t && n.end(t), n
    }, p.patch = function (e, t, n) {
        var r = p("PATCH", e);
        return "function" == typeof t && (n = t, t = null), t && r.send(t), n && r.end(n), r
    }, p.post = function (e, t, n) {
        var r = p("POST", e);
        return "function" == typeof t && (n = t, t = null), t && r.send(t), n && r.end(n), r
    }, p.put = function (e, t, n) {
        var r = p("PUT", e);
        return "function" == typeof t && (n = t, t = null), t && r.send(t), n && r.end(n), r
    }, e.exports = p
}, function (e, t) {
    e.exports = function (e, t, n) {
        for (var r = 0, o = e.length, i = 3 == arguments.length ? n : e[r++]; r < o;) i = t.call(null, i, e[r], ++r, e);
        return i
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        if (e.naturalWidth) return {height: e.naturalHeight, width: e.naturalWidth};
        var t = new Image;
        return t.src = e.currentSrc || e.src, {height: t.height, width: t.width}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(24), i = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(o);
    t.default = function (e) {
        var t = document.createElement("img");
        return t.src = e, t.complete ? i.default.resolve(r(t)) : new i.default(function (e, n) {
            t.onload = function () {
                e(r(t))
            }, t.onerror = function (e) {
                n(e)
            }
        })
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(24), i = r(o);
    t.default = function (e) {
        var t = e.title, n = void 0 === t ? "" : t, r = e.content, o = void 0 === r ? "" : r, a = e.imgUrl,
            s = e.showCancel, u = void 0 === s || s, l = e.cancelText, v = void 0 === l ? "取消" : l, g = e.cancelColor,
            m = void 0 === g ? "#000000" : g, y = e.confirmText, _ = void 0 === y ? "确定" : y, b = e.confirmColor,
            w = void 0 === b ? "#3CC51F" : b, x = !1, k = function (e, t, n, r, o, i, a, s) {
                h = (0, c.default)(f({
                    imgUrl: e,
                    title: t,
                    content: n,
                    showCancel: r,
                    cancelText: o,
                    cancelColor: i,
                    confirmText: a,
                    confirmColor: s
                })), document.body.appendChild(h), x = !1
            };
        return h && h.parentNode ? p = function () {
            k(a, n, o, u, v, m, _, w)
        } : k(a, n, o, u, v, m, _, w), new i.default(function (e) {
            h.addEventListener("click", function (t) {
                if (!x) {
                    if (this != h) return void h.addEventListener("click", function (t) {
                        x || ((0, d.default)(t.target).has("confirm-btn") ? (x = !0, e(!0)) : (0, d.default)(t.target).has("cancel-btn") && (x = !0, e(!1)), x && h && h.parentNode && h.parentNode.removeChild(h))
                    });
                    (0, d.default)(t.target).has("confirm-btn") ? (x = !0, e(!0)) : (0, d.default)(t.target).has("cancel-btn") && (x = !0, e(!1)), x && h && h.parentNode && h.parentNode.removeChild(h), p && (p(), p = null)
                }
            }, !1)
        })
    };
    var a = n(72), s = r(a), u = n(17), c = r(u), l = n(48), d = r(l),
        f = s.default.compile('\n<div class="wx-modal">\n  <div class="wx-modal-mask"></div>\n  <div class="wx-modal-dialog">\n    <div class="wx-modal-dialog-hd">\n      <strong>{{= _.title}}</strong>\n    </div>\n    <div class="wx-modal-dialog-bd">\n      {{if _.imgUrl}}\n        <img src="{{= _.imgurl}}" class="wx-modal-dialog-img"/>\n      {{/}}\n      {{= _.content}}\n    </div>\n    <div class="wx-modal-dialog-ft">\n    {{if _.showCancel}}\n        <a class="wx-modal-btn-default cancel-btn" style="color: {{=_.cancelColor}};">{{= _.cancelText}}</a>\n    {{/}}\n    <a class="wx-modal-btn-primary confirm-btn" style="color: {{= _.confirmColor}};">{{= _.confirmText}}</a></div>\n  </div>\n</div>\n'),
        h = null, p = null
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(24), i = r(o);
    t.default = function (e) {
        var t = e.itemList, n = e.itemColor, r = void 0 === n ? "#000000" : n;
        h && h.parentNode && h.parentNode.removeChild(h), h = (0, c.default)(f({
            itemList: t,
            itemColor: r
        })), setTimeout(function () {
            document.body.appendChild(h)
        }, 100);
        var o = !1;
        return new i.default(function (e) {
            h.addEventListener("click", function (t) {
                o || ((0, d.default)(t.target).has("wx-action-sheet-mask") ? (o = !0, e({cancel: !0})) : (0, d.default)(t.target).has("wx-action-sheet-item") ? (o = !0, e({
                    cancel: !1,
                    tapIndex: Number(t.target.getAttribute("data-index"))
                })) : (0, d.default)(t.target).has("wx-action-sheet-cancel") && (o = !0, e({cancel: !0})), o && h && h.parentNode && h.parentNode.removeChild(h))
            }, !1)
        })
    };
    var a = n(72), s = r(a), u = n(17), c = r(u), l = n(48), d = r(l),
        f = s.default.compile('\n<div>\n  <div class="wx-action-sheet-mask"></div>\n  <div class="wx-action-sheet wx-action-sheet-show">\n    <div class="wx-action-sheet-menu">\n      {{each _.itemList as item, index}}\n      <div class="wx-action-sheet-item" data-index="{{= index}}" style="color: {{= _.itemColor}};">{{= item}}</div>\n      {{/}}\n      <div class="wx-action-sheet-item-cancel">\n      <div class="wx-action-sheet-middle"></div>\n      <div class="wx-action-sheet-cancel" style="color: rgb(0, 0, 0);">取消</div>\n      </div>\n    </div>\n  </div>\n</div>\n'),
        h = null
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        if (e.naturalWidth) return {height: e.naturalHeight, width: e.naturalWidth};
        var t = new Image;
        return t.src = e.src, {height: t.height, width: t.width}
    }
    function i() {
        return Math.max($.documentElement.clientWidth, window.innerWidth || 0)
    }
    function a(e) {
        e.preventDefault()
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var s = n(24), u = r(s), c = n(16), l = r(c), d = n(0), f = r(d), h = n(1), p = r(h), v = n(22), g = r(v),
        m = n(23), y = r(m), _ = n(213), b = r(_), w = n(74), x = r(w), k = n(75), T = r(k), S = n(47), C = r(S),
        E = n(77), M = r(E), A = n(3), P = r(A), O = n(70), I = r(O), R = n(214), N = r(R), L = n(69), j = r(L),
        B = n(17), D = r(B), F = n(73), V = r(F), U = n(25), H = r(U), q = n(100), W = r(q), G = n(37), $ = document,
        Y = $.body, z = function (e) {
            function t(e) {
                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                (0, f.default)(this, t);
                var r = (0, g.default)(this, (t.__proto__ || (0, l.default)(t)).call(this));
                return r.opts = n, r.threshold = n.threshold || 200, r.fastThreshold = n.fastThreshold || 30, r.imgs = e, r._containerTap = (0, I.default)(r.hide.bind(r)), r.status = [], r.loaded = [], r.tx = 0, !1 !== n.bind && T.default.bind($, "touchstart", r._ontap), r
            }
            return (0, y.default)(t, e), (0, p.default)(t, [{
                key: "show", value: function () {
                    var e = this.container = $.createElement("div");
                    e.id = "images-preview";
                    var t = i();
                    e.style.width = t * this.imgs.length + 40 + "px", this.setTransform(-20), Y.appendChild(e);
                    var n = this.dots = (0, D.default)('<div class="imgs-preview-dots"><ul></ul></div>');
                    Y.appendChild(n);
                    for (var r = (0, x.default)("ul", n), o = $.createDocumentFragment(), s = 0, u = this.imgs.length; s < u; s++) {
                        r.appendChild($.createElement("li"));
                        var c = $.createElement("div");
                        c.style.width = t + "px";
                        var l = $.createElement("div"), d = this.imgs[s];
                        l.className = "wrapper";
                        var f = this.createImage(l, d);
                        f.style.display = "block", this.positionWrapper(l, f), c.appendChild(l), o.appendChild(c)
                    }
                    e.appendChild(o), this.zooms = [], this.emit("hide"), this.events = (0, H.default)(e, this), this.docEvents = (0, H.default)(document, this), this.events.bind("touchstart"), this.events.bind("touchmove"), this.events.bind("touchend"), this.docEvents.bind("touchend", "ontouchend"), T.default.bind(e, "touchstart", this._containerTap), T.default.bind($, "touchmove", a)
                }
            }, {
                key: "ontouchstart", value: function (e) {
                    var t = this;
                    this.animating && this.tween.stop();
                    var n = (0, V.default)(e.target, ".wrapper");
                    if (!(e.touches.length > 1 || n)) {
                        var r = e.touches[0], o = r.clientX;
                        this.down = {x: o, at: Date.now()};
                        var a = this.tx, s = i();
                        this.move = function (e, n) {
                            var r = a + n.clientX - o;
                            r = t.limit(r, s), isNaN(r) || t.setTransform(r)
                        }
                    }
                }
            }, {
                key: "ontouchmove", value: function (e) {
                    if (!(e.touches.length > 1 || null == this.move)) {
                        e.preventDefault(), e.stopPropagation();
                        var t = e.touches[0];
                        this.move(e, t)
                    }
                }
            }, {
                key: "ontouchend", value: function (e) {
                    if (null != this.move) {
                        this.animating && this.tween.stop();
                        var t = this.down;
                        this.move = this.down = null;
                        var n = e.changedTouches[0], r = n.clientX, o = Date.now();
                        if (Math.abs(r - t.x) > this.fastThreshold && o - t.at < this.threshold) {
                            var i = t.x > r ? "left" : "right";
                            this.onswipe(i)
                        } else this.restore()
                    }
                }
            }, {
                key: "active", value: function (e, t) {
                    var n = this;
                    if (-1 != (t = null == t ? this.imgs.indexOf(e) : t)) {
                        var r = i(), o = this.status[t];
                        this.idx = t;
                        var a = this.container.querySelectorAll(".wrapper")[t];
                        (0, b.default)(this.dots.querySelectorAll("li")[t]), this.emit("active", t);
                        var s = t * r;
                        if (this.setTransform(-s - 20), !o) {
                            this.status[t] = "loading";
                            var u = this.createImage(a, e);
                            u.style.display = "block";
                            var c = this.pz = new N.default(a, {
                                threshold: this.threshold,
                                fastThreshold: this.fastThreshold,
                                padding: 5,
                                tapreset: !1,
                                draggable: !0,
                                maxScale: 4
                            });
                            c.on("swipe", this.onswipe.bind(this)), c.on("move", function (e) {
                                var t = -20 - s - e;
                                t = n.limit(t, r), n.setTransform(t)
                            }), c.on("end", this.restore.bind(this)), this.zooms.push(c), this.loadImage(u, a).then(function () {
                                n.loaded.push(t)
                            }, function () {
                            })
                        }
                    }
                }
            }, {
                key: "onswipe", value: function (e) {
                    var t = this, n = i(), r = "left" == e ? this.idx + 1 : this.idx - 1;
                    r = Math.max(0, r), r = Math.min(this.imgs.length - 1, r), this.animate(-r * n - 20).then(function () {
                        if (r != t.idx) {
                            var e = t.imgs[r];
                            t.active(e, r)
                        }
                    })
                }
            }, {
                key: "limit", value: function (e, t) {
                    return e = Math.min(0, e), e = Math.max(-40 - (this.imgs.length - 1) * t, e)
                }
            }, {
                key: "restore", value: function () {
                    var e = this, t = i(), n = Math.round((-this.tx - 20) / t);
                    this.animate(-n * t - 20).then(function () {
                        if (n != e.idx) {
                            var t = e.imgs[n];
                            e.active(t, n)
                        }
                    })
                }
            }, {
                key: "loadImage", value: function (e, t) {
                    var n = this;
                    return e.complete ? (this.positionWrapper(t, e), this.positionHolder(t, e.src, !1).then(function () {
                        e.style.display = "block"
                    })) : this.positionHolder(t).then(function () {
                        e.style.display = "block";
                        var r = (0, D.default)('<div class="spin"></div>');
                        t.clientHeight > n.container.clientHeight && (r.style.top = n.container.clientHeight / 2 + "px"), t.appendChild(r);
                        var o = (0, W.default)(r, {color: "#ffffff", duration: 1e3, width: 4}), i = n;
                        return new u.default(function (n, a) {
                            function s() {
                                o(), r.parentNode && t.removeChild(r), i.positionWrapper(t, e), n()
                            }
                            if (e.complete) return s();
                            e.onload = s, e.onerror = function (e) {
                                o(), a(e)
                            }
                        })
                    })
                }
            }, {
                key: "positionWrapper", value: function (e, t) {
                    var n = Math.max($.documentElement.clientWidth, window.innerWidth || 0), r = o(t),
                        i = (n - 10) * r.height / r.width, a = Math.min(this.container.clientHeight - 10, i) / 2;
                    (0, j.default)(e.style, {
                        left: "5px",
                        width: n - 10 + "px",
                        height: i + "px",
                        marginTop: "-" + a + "px"
                    })
                }
            }, {
                key: "createImage", value: function (e, t) {
                    var n = (0, x.default)(".image", e);
                    return n || (n = $.createElement("img"), n.className = "image", n.src = t, e.appendChild(n), n)
                }
            }, {
                key: "setTransform", value: function (e) {
                    var t = this.container;
                    this.tx = e, G.has3d ? t.style[G.transform] = "translate3d(" + e + "px,0,0)" : t.style[G.transform] = "translate(" + e + "px)"
                }
            }, {
                key: "animate", value: function (e) {
                    function t() {
                        (0, C.default)(t), o.update()
                    }
                    var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 200,
                        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "out-circ";
                    if (e == this.tx) return u.default.resolve(null);
                    this.animating = !0;
                    var o = this.tween = (0, M.default)({x: this.tx}).ease(r).to({x: e}).duration(n);
                    o.update(function (e) {
                        i.setTransform(e.x)
                    });
                    var i = this, a = new u.default(function (e) {
                        o.on("end", function () {
                            t = function () {
                            }, i.animating = !1, e()
                        })
                    });
                    return t(), a
                }
            }, {
                key: "positionHolder", value: function (e, t) {
                    function n() {
                        (0, C.default)(n), i.update()
                    }
                    var r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2], o = this.holder;
                    if (!o) return u.default.resolve(null);
                    t && (o.style.backgroundImage = "url('" + t + "')");
                    var i = (0, M.default)({
                        width: parseInt(o.style.width, 10),
                        height: parseInt(o.style.height, 10),
                        left: parseInt(o.style.left, 10),
                        top: parseInt(o.style.top, 10),
                        opacity: .3
                    }).ease("out-cube").to({
                        width: parseInt(e.style.width, 10),
                        height: parseInt(e.style.height, 10),
                        left: parseInt(e.style.left, 10),
                        top: this.container.clientHeight / 2 + parseInt(e.style.marginTop, 10),
                        opacity: 1
                    }).duration(300);
                    i.update(function (e) {
                        var t = r ? e.opacity : 1;
                        (0, j.default)(o.style, {
                            width: e.width + "px",
                            height: e.height + "px",
                            left: e.left + "px",
                            top: e.top + "px",
                            opacity: t
                        })
                    });
                    var a = this, s = new u.default(function (e) {
                        i.on("end", function () {
                            o.parentNode && o.parentNode.removeChild(o), a.holder = null, n = function () {
                            }, e()
                        })
                    });
                    return n(), s
                }
            }, {
                key: "hide", value: function () {
                    this.dots && Y.removeChild(this.dots), this.zooms.forEach(function (e) {
                        e.unbind()
                    }), this.zooms = [], this.status = [], this.container.style.backgroundColor = "rgba(0,0,0,0)", this.emit("hide"), Y.removeChild(this.container), this.unbind()
                }
            }, {
                key: "unbind", value: function () {
                    this.docEvents.unbind(), this.events.unbind(), this.pz && this.pz.unbind(), T.default.unbind(this.container, "touchstart", this._containerTap), T.default.unbind($, "touchmove", a)
                }
            }]), t
        }(P.default);
    t.default = z
}, function (e, t, n) {
    var r = n(48);
    e.exports = function (e, t) {
        var n = e.parentNode.childNodes, o = e.tagName;
        t = t || "active";
        for (var i = 0, a = n.length; i < a; i++) {
            var s = n[i];
            s && 1 === s.nodeType && s.tagName === o && (s === e ? r(s).add(t) : r(s).remove(t))
        }
    }
}, function (e, t, n) {
    function r(e, t) {
        if (!(this instanceof r)) return new r(e, t);
        t = t || {}, this.el = e, this.padding = t.padding || 0, this.container = e.parentNode, this.container.style.overflow = "hidden", this.scale = 1, this.maxScale = t.maxScale || 5, this.threshold = t.threshold || 200, this.fastThreshold = t.fastThreshold || 30;
        var n = e.getBoundingClientRect();
        this.tapreset = t.tapreset || !1, this.sx = n.left + n.width / 2, this.sy = n.top + n.height / 2, this.tx = this.ty = 0, this.animating = !1, this.pinch = new h(e, this.onPinchMove.bind(this)), this.pinch.on("start", this.onPinchStart.bind(this)), this.pinch.on("end", this.onPinchEnd.bind(this)), this.el.style[v + "Origin"] = p ? "center center 0px" : "center center";
        var o = this._ontap = u(this.ontap.bind(this));
        a.bind(e, "touchstart", o), this.events = i(e, this), this.docEvents = i(document, this), t.draggable && (this.events.bind("touchstart"), this.events.bind("touchmove"), this.events.bind("touchend"), this.docEvents.bind("touchend", "ontouchend"))
    }
    function o(e) {
        var t = 1.20158;
        return --e * e * ((t + 1) * e + t) + 1
    }
    var i = n(25), a = n(215), s = n(3), u = n(70), c = n(47), l = n(77), d = n(37), f = n(107), h = n(216),
        p = d.has3d, v = d.transform, g = Math.PI;
    s(r.prototype), r.prototype.ontouchstart = function (e) {
        var t = e.touches;
        if (this.animating && (e.stopPropagation(), this.tween.stop()), t && 1 == t.length) {
            var n = this.el.getBoundingClientRect();
            this.translateY = n.top < 0 || n.bottom > this.container.clientHeight, this.speed = 0;
            var r = Date.now(), o = e.touches[0], i = o.clientX, a = o.clientY, s = this, u = {x: this.tx, y: this.ty},
                c = this.getLimitation(100);
            this.move = function (e, t) {
                s.down = {x: i, y: a, at: r};
                var n = t.clientX, o = t.clientY, l = this.prev ? this.prev.x : i, d = this.prev ? this.prev.y : a;
                e.preventDefault();
                var h = Math.abs(n - l) > Math.abs(o - d);
                1 == s.scale || h || e.stopPropagation(), s.calcuteSpeed(n, o);
                var p = u.x + n - i, v = u.y + o - a, m = f.limit(p, v, c), y = m.x - p;
                1 == s.scale && h && (m.y = this.ty, this.angle = n - l > 0 ? 0 : g), h && this.emit("move", y), this.translateY || (m.y = u.y), s.setTransform(m.x, m.y, s.scale)
            }
        }
    }, r.prototype.ontouchmove = function (e) {
        if (this.move && !this.animating && !this.pinch.pinching) {
            var t = e.touches;
            if (!t || 1 != t.length) return void(this.move = null);
            var n = t[0];
            this.move(e, n)
        }
    }, r.prototype.ontouchend = function (e) {
        if (null != this.move) {
            if (null == this.down) return this.move = null;
            if (!this.pinch.pinching && !this.animating) {
                var t = Date.now(), n = e.changedTouches[0], r = n.clientX, o = n.clientY, i = this.down.x,
                    a = this.down.y;
                this.calcuteSpeed(r, o);
                var s = Math.abs(r - i), u = this.getLimitation();
                if (s > this.fastThreshold && s > Math.abs(o - a) && t - this.down.at < this.threshold && (this.tx <= u.minx || this.tx >= u.maxx)) {
                    var c = r > i ? "right" : "left";
                    return this.down = this.move = null, this.emit("swipe", c)
                }
                this.down = this.move = null, this.emit("end"), this.speed && this.momentum()
            }
        }
    }, r.prototype.momentum = function () {
        var e = this.getLimitation(this.padding), t = Math.min(this.speed, 4), n = (4 - g) / 2, r = n * (t * t) / .002,
            i = this.tx + r * Math.cos(this.angle), a = this.ty + r * Math.sin(this.angle), s = f.limit(i, a, e),
            u = this.scale > 1 && (i < e.minx || i > e.maxx) || a < e.miny || a > e.maxy, c = u ? o : "out-circ",
            l = f.distance([i, a, s.x, s.y]), d = (1 - l / r) * t / .001;
        return (this.ty < e.miny || this.ty > e.maxy) && (d = 500, c = "out-circ"), this.translateY || (s.y = this.ty), this.animate({
            x: s.x,
            y: s.y,
            scale: this.scale
        }, d, c)
    }, r.prototype.getLimitation = function (e) {
        e = e || 0;
        var t = f.viewport, n = t.width, r = t.height, o = this.el.getBoundingClientRect(),
            i = this.el.parentNode.getBoundingClientRect();
        return {
            maxx: this.tx - o.left + i.left + this.padding,
            minx: this.tx - (o.left - i.left + o.width - n) - this.padding,
            miny: r > o.height ? this.ty - o.top : this.ty - o.top - (o.height - r) - e,
            maxy: r > o.height ? this.ty + (r - o.top - o.height) : this.ty - o.top + e
        }
    }, r.prototype.ontap = function () {
        if (this.animating) return this.tween.stop();
        var e = Date.now();
        return this.lastTap && e - this.lastTap < 300 ? void this.emit("tap") : 1 == this.scale ? void this.emit("tap") : (this.lastTap = Date.now(), void(this.tapreset ? this.reset() : this.emit("tap")))
    }, r.prototype.reset = function () {
        return this.emit("scale", {x: 0, y: 0, scale: 1}), this.animate({x: 0, y: 0, scale: 1}, 200)
    }, r.prototype.onPinchStart = function (e) {
        this.animating && this.tween.stop(), this.start = e, this.bx = this.sx + this.tx, this.by = this.sy + this.ty, this.startScale = this.scale, this.emit("start")
    }, r.prototype.onPinchMove = function (e) {
        if (!this.animating) {
            this.point = {x: e.x, y: e.y};
            var t = e.x - this.start.x, n = e.y - this.start.y, r = this.bx + t, o = this.by + n,
                i = f.getAngle(r, o, e.x, e.y), a = f.distance([e.y, e.x, o, r]) * (e.scale - 1),
                s = this.bx - this.sx + t - a * Math.cos(i), u = this.by - this.sy + n - a * Math.sin(i);
            this.setTransform(s, u, e.scale * this.startScale)
        }
    }, r.prototype.onPinchEnd = function () {
        this.scale !== this.startScale && this.emit("scale", {
            x: this.tx,
            y: this.ty,
            scale: this.scale
        }), this.startScale = this.scale, this.checkScale() || this.checkPosition()
    }, r.prototype.setTransform = function (e, t, n) {
        isNaN(e) || isNaN(t) || (this.tx = e, this.ty = t, this.scale = n, this.el.style[v] = p ? "translate3d(" + e + "px, " + t + "px, 0)  scale3d(" + n + "," + n + ", 1)" : "translate(" + e + "px, " + t + "px)  scale(" + n + "," + n + ")")
    }, r.prototype.animate = function (e, t, n) {
        function r() {
            c(r), a.update()
        }
        var o = {x: this.tx, y: this.ty, scale: this.scale};
        n = n || "out-circ";
        var i = this;
        this.animating = !0;
        var a = this.tween = l(o).ease(n).to(e).duration(t);
        a.update(function (e) {
            i.setTransform(e.x, e.y, e.scale)
        });
        var s = new Promise(function (e) {
            a.on("end", function () {
                r = function () {
                }, i.animating = !1, e()
            })
        });
        return r(), s
    }, r.prototype.unbind = function () {
        this.setTransform(0, 0, 1), this.pinch.unbind(), this.events.unbind(), this.docEvents.unbind(), a.unbind(this.el, "touchstart", this._ontap)
    }, r.prototype.checkPosition = function () {
        var e = this.el.getBoundingClientRect(), t = {x: this.tx, y: this.ty, scale: this.scale}, n = f.viewport,
            r = n.width, o = n.height, i = this.padding;
        e.left > i ? t.x = this.tx - e.left + i : e.left + e.width < r - i && (t.x = this.tx + (r - e.left - e.width - i));
        var a = e.top + e.height;
        return e.top > 0 && a > o - i ? t.y = this.ty - (a - o + i) : e.top < i && a < o - i && (t.y = this.ty - e.top + i), t.x !== this.tx || t.y !== this.ty ? this.animate(t, 200) : Promise.resolve()
    }, r.prototype.checkScale = function () {
        if (this.scale < 1) return this.reset();
        if (this.scale > this.maxScale) {
            var e = this.point;
            return this.scaleAt(e.x, e.y, this.maxScale)
        }
    }, r.prototype.limitScale = function (e) {
        var t = this.sx + this.tx, n = this.sy + this.ty, r = this.point, o = Math.atan((r.y - n) / (r.x - t));
        (r.y < n && r.x < t || r.y > n && r.x < t) && (o += g);
        var i = f.distance([r.y, r.x, n, t]) * (this.scale - e), a = this.tx + i * Math.cos(o),
            s = this.ty + i * Math.sin(o);
        return this.animate({x: a, y: s, scale: e}, 200)
    }, r.prototype.scaleAt = function (e, t, n) {
        var r = this.sx + this.tx, o = this.sy + this.ty, i = f.getAngle(r, o, e, t),
            a = f.distance([t, e, o, r]) * (1 - n / this.scale), s = this.tx + a * Math.cos(i),
            u = this.ty + a * Math.sin(i);
        return this.animate({x: s, y: u, scale: n}, 300)
    }, r.prototype.calcuteSpeed = function (e, t) {
        var n = this.prev || this.down, r = Date.now(), o = r - n.at;
        if (r - this.down.at < 50 || o > 50) {
            var i = f.distance([n.x, n.y, e, t]);
            this.speed = Math.abs(i / o), this.angle = f.getAngle(n.x, n.y, e, t)
        }
        o > 50 && (this.prev = {x: e, y: t, at: r})
    }, e.exports = r
}, function (e, t) {
    var n = window.addEventListener ? "addEventListener" : "attachEvent",
        r = window.removeEventListener ? "removeEventListener" : "detachEvent",
        o = "addEventListener" !== n ? "on" : "";
    t.bind = function (e, t, r, i) {
        return e[n](o + t, r, i || !1), r
    }, t.unbind = function (e, t, n, i) {
        return e[r](o + t, n, i || !1), n
    }
}, function (e, t, n) {
    function r(e, t) {
        if (!(this instanceof r)) return new r(e, t);
        this.el = e, this.parent = e.parentNode, this.fn = t || function () {
        }, this.midpoint = null, this.scale = 1, this.lastScale = 1, this.pinching = !1, this.events = o(e, this), this.events.bind("touchstart"), this.events.bind("touchmove"), this.events.bind("touchend"), this.fingers = {}
    }
    var o = n(25), i = n(3), a = n(217), s = n(107);
    e.exports = r, i(r.prototype), r.prototype.ontouchstart = function (e) {
        var t = e.touches;
        if (!t || 2 != t.length) return this;
        e.preventDefault(), e.stopPropagation();
        for (var n, r = [], o = 0; o < t.length; o++) n = t[o], r.push(n.clientX, n.clientY);
        return this.pinching = !0, this.distance = s.distance(r), this.midpoint = s.midpoint(r), this.emit("start", this.midpoint), this
    }, r.prototype.ontouchmove = function (e) {
        var t = e.touches;
        if (!t || 2 != t.length || !this.pinching) return this;
        e.preventDefault(), e.stopPropagation();
        for (var n, r = [], o = 0; o < t.length; o++) n = t[o], r.push(n.clientX, n.clientY);
        var i = s.distance(r), u = s.midpoint(r);
        e = a(e);
        var c = i / this.distance * this.scale;
        return Object.defineProperty(e, "scale", {
            get: function () {
                return c
            }
        }), e.x = u.x, e.y = u.y, this.fn(e), this.lastScale = e.scale, this
    }, r.prototype.ontouchend = function (e) {
        var t = e.touches;
        return t && 2 != t.length && this.pinching ? (this.scale = this.lastScale, this.pinching = !1, this.emit("end"), this) : this
    }, r.prototype.unbind = function () {
        return this.events.unbind(), this
    }
}, function (e, t) {
    function n() {
    }
    e.exports = function (e) {
        return n.prototype = e, new n
    }
}, function (e, t, n) {
    "use strict";
    var r = function () {
    }, o = {
        surroundThirdByTryCatch: function (e, t) {
            return function () {
                var n;
                try {
                    n = e.apply(e, arguments)
                } catch (e) {
                    console.error(e);
                    var r = t ? e.message + ";" + t : e.message;
                    o.triggerErrorMessage("thirdScriptError\n" + r + "\n" + e.stack)
                }
                return n
            }
        }, slowReport: function (e) {
            console.log("SLOW!!!!!", e)
        }, reportKeyValue: function (e) {
        }, reportIDKey: function (e) {
        }, thirdErrorReport: function (e) {
            var t = e.error, n = e.extend;
            console.group("thirdScriptError", n), console.log(t), console.groupEnd()
        }, errorReport: function (e) {
        }, registerErrorListener: function (e) {
            "function" == typeof e && (r = e)
        }, unRegisterErrorListener: function () {
            r = function () {
            }
        }, triggerErrorMessage: function (e) {
            r(e)
        }
    };
    window.Reporter = o, e.exports = o
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e, t, n) {
        var r = y.default.paramCheck(t, n);
        return !r || (K(e, t, e + ":fail parameter error: " + r), !1)
    }
    function i(e) {
        var t = (arguments.length > 1 && void 0 !== arguments[1] && arguments[1], arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : ""),
            n = e + ":fail " + t;
        console.error(n);
        var r = Reporter.surroundThirdByTryCatch(options.fail || L, "at api " + e + " fail callback function"),
            o = Reporter.surroundThirdByTryCatch(options.complete || L, "at api " + e + " complete callback function");
        r({errMsg: n}), o({errMsg: n})
    }
    function a(e, t) {
        var n = /^(.*)\.html/gi.exec(t.url);
        return !n || -1 !== __wxConfig__.pages.indexOf(n[1]) || (K(e, t, e + ":fail url not in app.json"), !1)
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var s = n(4), u = r(s), c = n(13), l = r(c), d = n(9), f = r(d), h = n(15), p = r(h), v = n(38), g = r(v), m = n(7),
        y = r(m), _ = n(221), b = r(_), w = n(222), x = r(w), k = n(223), T = r(k), S = n(224), C = r(S), E = n(49),
        M = r(E), A = n(108), P = r(A), O = n(109), I = r(O), R = n(226), N = r(R);
    "function" == typeof logxx && logxx("sdk start");
    var L = function () {
        }, j = {}, B = "", D = [], F = [], V = void 0, U = {}, H = !1, q = !1, W = [], G = [], $ = void 0, Y = void 0,
        z = void 0, J = "";
    g.default.subscribe("SPECIAL_PAGE_EVENT", function (e) {
        var t = e.data, n = e.eventName, r = e.ext,
            o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
        if (t && "input" == t.type && "function" == typeof V) {
            var i = V({data: t, eventName: n, webviewId: o}), a = t.detail.value;
            if (r && r.setKeyboardValue) if (void 0 === i) ; else if ("Object" === y.default.getDataType(i)) {
                var e = {};
                a != i.value && (e.value = i.value + ""), isNaN(parseInt(i.cursor)) || (e.cursor = parseInt(i.cursor)), g.default.publish("setKeyboardValue", e, [o])
            } else a != i && g.default.publish("setKeyboardValue", {value: i + "", cursor: -1}, [o])
        }
    });
    var K = function (e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
            n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "";
        console.error(n), Reporter.triggerErrorMessage(n);
        var r = Reporter.surroundThirdByTryCatch(t.fail || L, "at api " + e + " fail callback function"),
            o = Reporter.surroundThirdByTryCatch(t.complete || L, "at api " + e + " complete callback function");
        r({errMsg: n}), o({errMsg: n})
    }, X = {
        invoke: g.default.invoke,
        on: g.default.on,
        drawCanvas: I.default.drawCanvas,
        createContext: I.default.createContext,
        createCanvasContext: I.default.createCanvasContext,
        canvasToTempFilePath: I.default.canvasToTempFilePath,
        reportIDKey: function (e, t) {
        },
        reportKeyValue: function (e, t) {
        },
        onPullDownRefresh: function (e) {
            console.log("onPullDownRefresh has been removed from api list")
        },
        setNavigationBarColor: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            if (o("setNavigationBarColor", e, {frontColor: "", backgroundColor: ""})) {
                -1 === ["#ffffff", "#000000"].indexOf(e.frontColor) && K("setNavigationBarColor", e, 'invalid frontColor "' + e.frontColor + '"'), "#ffffff" === e.frontColor ? g.default.invokeMethod("setStatusBarStyle", {color: "white"}) : "#000000" === e.frontColor && g.default.invokeMethod("setStatusBarStyle", {color: "black"});
                var t = (0, p.default)({}, e);
                delete t.alpha, g.default.invokeMethod("setNavigationBarColor", t)
            }
        },
        setNavigationBarTitle: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o("setNavigationBarTitle", e, {title: ""}) && g.default.invokeMethod("setNavigationBarTitle", e)
        },
        showNavigationBarLoading: function (e) {
            g.default.invokeMethod("showNavigationBarLoading", e)
        },
        hideNavigationBarLoading: function (e) {
            g.default.invokeMethod("hideNavigationBarLoading", e)
        },
        stopPullDownRefresh: function (e) {
            g.default.invokeMethod("stopPullDownRefresh", e)
        },
        redirectTo: function (e) {
            arguments.length > 1 && void 0 !== arguments[1] && arguments[1], o("redirectTo", e, {url: ""}) && (e.url = y.default.getRealRoute(B, e.url), e.url = y.default.encodeUrlQuery(e.url), a("redirectTo", e) && g.default.invokeMethod("redirectTo", e, {
                afterSuccess: function () {
                    B = e.url
                }
            }))
        },
        reLaunch: function (e) {
            if (arguments.length > 1 && void 0 !== arguments[1] && arguments[1], "active" != y.default.defaultRunningStatus) return i("reLaunch", e, "can not invoke reLaunch in background");
            o("reLaunch", e, {url: ""}) && (e.url = y.default.getRealRoute(B, e.url), e.url = y.default.encodeUrlQuery(e.url), a("reLaunch", e) && g.default.invokeMethod("reLaunch", e, {
                afterSuccess: function () {
                    B = e.url
                }, afterFail: function () {
                    console.log("failed")
                }
            }))
        },
        createSelectorQuery: function (e) {
            var t = null;
            if (e && e.page) t.e.page__wxWebViewId__; else {
                var n = getCurrentPages();
                t = n[n.length - 1].__wxWebviewId__
            }
            return new y.default.wxQuerySelector(t)
        },
        pageScrollTo: function (e) {
            var t = getCurrentPages(), n = t[t.length - 1].__wxWebviewId__;
            e.hasOwnProperty("page") && e.page.hasOwnProperty("__wxWebviewId__") && (n = e.page.__wxWebviewId__), g.default.invokeMethod("pageScrollTo", e, [n])
        },
        navigateTo: function (e) {
            arguments.length > 1 && void 0 !== arguments[1] && arguments[1], o("navigateTo", e, {url: ""}) && (e.url = y.default.getRealRoute(B, e.url), e.url = y.default.encodeUrlQuery(e.url), a("navigateTo", e) && g.default.invokeMethod("navigateTo", e, {
                afterSuccess: function () {
                    B = e.url, P.default.notifyCurrentRoutetoContext(B)
                }
            }))
        },
        switchTab: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o("switchTab", e, {url: ""}) && (/\?.*$/.test(e.url) && (console.warn("wx.switchTab: url 不支持 queryString"), e.url = e.url.replace(/\?.*$/, "")), e.url = y.default.getRealRoute(B, e.url), e.url = y.default.encodeUrlQuery(e.url), a("switchTab", e) && g.default.invokeMethod("switchTab", e, {
                afterSuccess: function () {
                    B = e.url, P.default.notifyCurrentRoutetoContext(B)
                }
            }))
        },
        navigateBack: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            "number" != typeof e.delta ? e.delta = 1 : (e.delta = parseInt(e.delta), e.delta < 1 && (e.delta = 1)), g.default.invokeMethod("navigateBack", e)
        },
        getStorage: function (e) {
            o("getStorage", e, {key: ""}) && g.default.invokeMethod("getStorage", e, {
                beforeSuccess: function (e) {
                    e.data = y.default.stringToAnyType(e.data, e.dataType), delete e.dataType
                }, afterFail: function () {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                    if (e.errMsg && e.errMsg.indexOf("data not found") > 0) return !1
                }
            })
        },
        getStorageSync: function (e) {
            if (o("getStorageSync", e, "")) {
                var t;
                return g.default.invokeMethodSync("getStorageSync", {key: e}, {
                    beforeAll: function (e) {
                        e = e || {}, t = y.default.stringToAnyType(e.data, e.dataType)
                    }, afterFail: function () {
                        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                        if (e.errMsg && e.errMsg.indexOf("data not found") > 0) return !1
                    }
                }), t
            }
        },
        setStorage: function (e) {
            if (o("setStorage", e, {key: ""})) try {
                var t = y.default.anyTypeToString(e.data), n = t.data, r = t.dataType;
                g.default.invokeMethod("setStorage", {
                    key: e.key,
                    data: n,
                    dataType: r,
                    success: e.success,
                    fail: e.fail,
                    complete: e.complete
                })
            } catch (t) {
                "function" == typeof e.fail && e.fail({errMsg: "setStorage:fail " + t.message}), "function" == typeof e.complete && e.complete({errMsg: "setStorage:fail " + t.message})
            }
        },
        setStorageSync: function (e, t) {
            if (t = t || "", o("setStorageSync", e, "")) {
                var n = y.default.anyTypeToString(t), r = n.data, i = n.dataType;
                g.default.invokeMethodSync("setStorageSync", {key: e, data: r, dataType: i})
            }
        },
        removeStorage: function (e) {
            o("removeStorage", e, {key: ""}) && g.default.invokeMethod("removeStorage", e)
        },
        removeStorageSync: function (e) {
            o("removeStorageSync", e, "") && g.default.invokeMethodSync("removeStorageSync", {key: e})
        },
        clearStorage: function () {
            g.default.invokeMethod("clearStorage")
        },
        clearStorageSync: function () {
            g.default.invokeMethodSync("clearStorageSync")
        },
        getStorageInfo: function (e) {
            g.default.invokeMethod("getStorageInfo", e)
        },
        getStorageInfoSync: function () {
            var e = void 0;
            return g.default.invokeMethodSync("getStorageInfoSync", {}, {
                beforeAll: function (t) {
                    e = t, delete t.errMsg
                }
            }), e
        },
        request: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            if (o("request", e, {url: ""})) {
                if (!1 === y.default.validateUrl(e.url)) return K("request", e, 'request:fail invalid url "' + e.url + '"');
                if ("function" === e.data) return K("request", e, "request:fail data should not be Function");
                var t = y.default.getDataType(e.header);
                e.header = e.header || {}, e.header = y.default.convertObjectValueToString(e.header), "Undefined" !== t && "Object" !== t && (console.warn("wx.request: header must be an object"), e.header = {}), e.header = (0, f.default)(e.header).reduce(function (t, n) {
                    return "content-type" === n.toLowerCase() ? t[n.toLowerCase()] = e.header[n] : t[n] = e.header[n], t
                }, {}), e.method && (e.method = e.method.toUpperCase());
                var n = e.header || {}, r = "GET";
                "string" == typeof e.method && (r = e.method.toUpperCase());
                var i;
                e.dataType = e.dataType || "json", n["content-type"] = n["content-type"] || "application/json", i = e.data ? "string" != typeof e.data ? n["content-type"].indexOf("application/x-www-form-urlencoded") > -1 ? y.default.urlEncodeFormData(e.data, !0) : n["content-type"].indexOf("application/json") > -1 ? (0, l.default)(e.data) : "object" === (0, u.default)(e.data) ? (0, l.default)(e.data) : i.toString() : e.data : "", ("GET" == r || !__wxConfig__.requestProxy) && (e.url = y.default.addQueryStringToUrl(e.url, e.data)), g.default.invokeMethod("request", {
                    url: e.url,
                    data: i,
                    header: n,
                    method: r,
                    success: e.success,
                    fail: e.fail,
                    complete: e.complete
                }, {
                    beforeSuccess: function (t) {
                        if ("json" === e.dataType) try {
                            t.data = JSON.parse(t.data)
                        } catch (e) {
                        }
                        t.statusCode = parseInt(t.statusCode)
                    }
                })
            }
        },
        connectSocket: function (e) {
            if (o("connectSocket", e, {url: ""})) {
                "object" !== (0, u.default)(e.header) && void 0 !== e.header && (console.warn("connectSocket: header must be an object"), delete e.header);
                var t = {};
                e.header && (t = y.default.convertObjectValueToString(e.header)), g.default.invokeMethod("connectSocket", y.default.assign({}, e, {header: t}), {
                    beforeSuccess: function (e) {
                        e.statusCode = parseInt(e.statusCode)
                    }
                })
            }
        },
        closeSocket: function (e) {
            g.default.invokeMethod("closeSocket", e)
        },
        sendSocketMessage: function (e) {
            y.default.getDataType(e.data);
            g.default.invokeMethod("sendSocketMessage", e)
        },
        onSocketOpen: function (e) {
            o("onSocketOpen", e, L) && g.default.onMethod("onSocketOpen", Reporter.surroundThirdByTryCatch(e, "at onSocketOpen callback function"))
        },
        onSocketClose: function (e) {
            o("onSocketClose", e, L) && g.default.onMethod("onSocketClose", Reporter.surroundThirdByTryCatch(e, "at onSocketClose callback function"))
        },
        onSocketMessage: function (e) {
            o("onSocketMessage", e, L) && (e = Reporter.surroundThirdByTryCatch(e, "at onSocketMessage callback function"), g.default.onMethod("onSocketMessage", function (t) {
                delete t.isBuffer, "Blob" === y.default.getDataType(t.data) ? y.default.blobToArrayBuffer(t.data, function (n) {
                    t.data = n, e(t)
                }) : e(t)
            }))
        },
        onSocketError: function (e) {
            g.default.onMethod("onSocketError", Reporter.surroundThirdByTryCatch(e, "at onSocketError callback function"))
        },
        uploadFile: function (e) {
            if (o("uploadFile", e, {url: "", filePath: "", name: ""})) {
                "object" !== (0, u.default)(e.header) && void 0 !== e.header && (console.warn("uploadFile: header must be an object"), delete e.header), "object" !== (0, u.default)(e.formData) && void 0 !== e.formData && (console.warn("uploadFile: formData must be an object"), delete e.formData);
                var t = {}, n = {};
                e.header && (t = y.default.convertObjectValueToString(e.header)), e.formData && (n = y.default.convertObjectValueToString(e.formData)), g.default.invokeMethod("uploadFile", y.default.assign({}, e, {
                    header: t,
                    formData: n
                }), {
                    beforeSuccess: function (e) {
                        e.statusCode = parseInt(e.statusCode)
                    }
                })
            }
        },
        downloadFile: function (e) {
            o("downloadFile", e, {url: ""}) && g.default.invokeMethod("downloadFile", e, {
                beforeSuccess: function (e) {
                    e.statusCode = parseInt(e.statusCode), -1 === [200, 304].indexOf(e.statusCode) && delete e.tempFilePath
                }
            })
        },
        chooseImage: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            g.default.invokeMethod("chooseImage", y.default.assign({
                count: 9,
                sizeType: ["original", "compressed"],
                sourceType: ["album", "camera"]
            }, e))
        },
        previewImage: function (e) {
            o("previewImage", e, {urls: [""]}) && g.default.invokeMethod("previewImage", e)
        },
        getImageInfo: function (e) {
            o("getImageInfo", e, {src: ""}) && (/^(http|https):\/\//.test(e.src) ? g.default.invokeMethod("downloadFile", {url: e.src}, {
                afterSuccess: function (t) {
                    e.src = t.tempFilePath, g.default.invokeMethod("getImageInfo", e, {
                        beforeSuccess: function (t) {
                            t.path = e.src
                        }
                    })
                }, afterFail: function () {
                    K("getImageInfo", e, "getImageInfo:fail download image fail")
                }
            }) : /^wdfile:\/\//.test(e.src) ? g.default.invokeMethod("getImageInfo", e, {
                beforeSuccess: function (t) {
                    t.path = e.src
                }
            }) : (e.src = y.default.getRealRoute(B, e.src, !1), g.default.invokeMethod("getImageInfo", e, {
                beforeSuccess: function (t) {
                    t.path = e.src
                }
            })))
        },
        startRecord: function (e) {
            X.appStatus === M.default.AppStatus.BACK_GROUND && !1 === X.hanged || g.default.invokeMethod("startRecord", e)
        },
        stopRecord: function (e) {
            g.default.invokeMethod("stopRecord", e)
        },
        playVoice: function (e) {
            o("playVoice", e, {filePath: ""}) && g.default.invokeMethod("playVoice", e)
        },
        pauseVoice: function (e) {
            g.default.invokeMethod("pauseVoice", e)
        },
        stopVoice: function (e) {
            g.default.invokeMethod("stopVoice", e)
        },
        onVoicePlayEnd: function (e) {
            g.default.onMethod("onVoicePlayEnd", Reporter.surroundThirdByTryCatch(e, "at onVoicePlayEnd callback function"))
        },
        chooseVideo: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            e.sourceType = e.sourceType || ["album", "camera"], e.camera = e.camera || ["front", "back"], g.default.invokeMethod("chooseVideo", e)
        },
        getLocation: function (e) {
            console.log("getLocation", e, X.appStatus, X.hanged), X.appStatus === M.default.AppStatus.BACK_GROUND && !1 === X.hanged || g.default.invokeMethod("getLocation", e)
        },
        openLocation: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o("openLocation", e, {latitude: .1, longitude: .1}) && g.default.invokeMethod("openLocation", e)
        },
        chooseLocation: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            g.default.invokeMethod("chooseLocation", e)
        },
        getNetworkType: function (e) {
            g.default.invokeMethod("getNetworkType", e)
        },
        getSystemInfo: function (e) {
            var t = y.default.getPlatform();
            g.default.invokeMethodSync("getSystemInfo", e, {
                beforeSuccess: function (e) {
                    e.platform = t
                }
            })
        },
        getSystemInfoSync: function (e) {
            var t = {}, n = y.default.getPlatform();
            return g.default.invokeMethodSync("getSystemInfo", {}, {
                beforeSuccess: function (e) {
                    t = e || {}, t.platform = n, delete t.errMsg
                }
            }), t
        },
        onAccelerometerChange: function (e) {
            H || (g.default.invokeMethod("enableAccelerometer", {enable: !0}), H = !0), W.push(Reporter.surroundThirdByTryCatch(e, "at onAccelerometerChange callback function"))
        },
        onCompassChange: function (e) {
            q || (g.default.invokeMethod("enableCompass", {enable: !0}), q = !0), G.push(Reporter.surroundThirdByTryCatch(e, "at onCompassChange callback function"))
        },
        reportAction: function (e) {
            g.default.invokeMethod("reportAction", e)
        },
        getBackgroundAudioPlayerState: function (e) {
            g.default.invokeMethod("getMusicPlayerState", e, {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("getBackgroundAudioPlayerState", "getMusicPlayerState")
                }
            })
        },
        playBackgroundAudio: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            X.appStatus === M.default.AppStatus.BACK_GROUND && !1 === X.hanged || g.default.invokeMethod("operateMusicPlayer", y.default.assign({operationType: "play"}, e), {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("operateMusicPlayer", "playBackgroundAudio")
                }
            })
        },
        pauseBackgroundAudio: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            g.default.invokeMethod("operateMusicPlayer", y.default.assign({operationType: "pause"}, e), {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("operateMusicPlayer", "pauseBackgroundAudio")
                }
            })
        },
        seekBackgroundAudio: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o("seekBackgroundAudio", e, {position: 1}) && g.default.invokeMethod("operateMusicPlayer", y.default.assign({operationType: "seek"}, e), {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("operateMusicPlayer", "seekBackgroundAudio")
                }
            })
        },
        stopBackgroundAudio: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            console.log("stopBackgroundAudio"), g.default.invokeMethod("operateMusicPlayer", y.default.assign({operationType: "stop"}, e), {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("operateMusicPlayer", "stopBackgroundAudio")
                }
            })
        },
        onBackgroundAudioPlay: function (e) {
            g.default.onMethod("onMusicPlay", Reporter.surroundThirdByTryCatch(e, "at onBackgroundAudioPlay callback function"))
        },
        onBackgroundAudioPause: function (e) {
            g.default.onMethod("onMusicPause", Reporter.surroundThirdByTryCatch(e, "at onBackgroundAudioPause callback function"))
        },
        onBackgroundAudioStop: function (e) {
            g.default.onMethod("onMusicEnd", Reporter.surroundThirdByTryCatch(e, "at onBackgroundAudioStop callback function"))
        },
        login: function (e) {
            __wxConfig__ && __wxConfig__.weweb && __wxConfig__.weweb.loginUrl ? (0 != __wxConfig__.weweb.loginUrl.indexOf("/") && (__wxConfig__.weweb.loginUrl = "/" + __wxConfig__.weweb.loginUrl), J = __curPage__.url, X.redirectTo({url: __wxConfig__.weweb.loginUrl})) : g.default.invokeMethod("login", e)
        },
        loginSuccess: function () {
            var e = J && (0 === J.indexOf("/") ? J : "/" + J) || "/" + __root__;
            J = "", X.redirectTo({url: e})
        },
        checkLogin: function (e) {
            g.default.invokeMethod("checkLogin", e)
        },
        checkSession: function (e) {
            $ && clearTimeout($), g.default.invokeMethod("refreshSession", e, {
                beforeSuccess: function (e) {
                    $ = setTimeout(function () {
                        g.default.invokeMethod("refreshSession")
                    }, 1e3 * e.expireIn), delete e.err_code, delete e.expireIn
                }, beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("refreshSession", "checkSession")
                }
            })
        },
        authorize: function (e) {
            g.default.invokeMethod("authorize", e)
        },
        getUserInfo: function (e) {
            g.default.invokeMethod("operateWXData", y.default.assign({
                data: {
                    api_name: "webapi_getuserinfo",
                    data: e.data || {}
                }
            }, e), {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("operateWXData", "getUserInfo")
                }, beforeSuccess: function (e) {
                    e.rawData = e.data.data;
                    try {
                        e.userInfo = JSON.parse(e.data.data), e.signature = e.data.signature, e.data.encryptData && (console.group(new Date + " encryptData 字段即将废除"), console.warn("请使用 encryptedData 和 iv 字段进行解密，详见：https://mp.weixin.qq.com/debug/wxadoc/dev/api/open.html"), console.groupEnd(), e.encryptData = e.data.encryptData), e.data.encryptedData && (e.encryptedData = e.data.encryptedData, e.iv = e.data.iv), delete e.data
                    } catch (e) {
                    }
                }
            })
        },
        getFriends: function (e) {
            g.default.invokeMethod("operateWXData", {
                data: {api_name: "webapi_getfriends", data: e.data || {}},
                success: e.success,
                fail: e.fail,
                complete: e.complete
            }, {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("operateWXData", "getFriends")
                }, beforeSuccess: function (e) {
                    e.rawData = e.data.data;
                    try {
                        e.friends = JSON.parse(e.data.data), e.signature = e.data.signature, delete e.data
                    } catch (e) {
                    }
                }
            })
        },
        requestPayment: function (e) {
            o("requestPayment", e, {
                timeStamp: "",
                nonceStr: "",
                package: "",
                signType: "",
                paySign: ""
            }) && g.default.invokeMethod("requestPayment", e)
        },
        verifyPaymentPassword: function (e) {
            g.default.invokeMethod("verifyPaymentPassword", e)
        },
        bindPaymentCard: function (e) {
            g.default.invokeMethod("bindPaymentCard", e)
        },
        requestPaymentToBank: function (e) {
            g.default.invokeMethod("requestPaymentToBank", e)
        },
        addCard: function (e) {
            o("addCard", e, {cardList: []}) && g.default.invokeMethod("addCard", e)
        },
        openCard: function (e) {
            o("openCard", e, {cardList: []}) && g.default.invokeMethod("openCard", e)
        },
        scanCode: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o("scanCode", e, {}) && g.default.invokeMethod("scanCode", e, {
                beforeSuccess: function (e) {
                    "string" == typeof e.path && (e.path = e.path.replace(/\.html$/, ""), e.path = e.path.replace(/\.html\?/, "?"))
                }
            })
        },
        openAddress: function (e) {
            g.default.invokeMethod("openAddress", e)
        },
        saveFile: function (e) {
            o("saveFile", e, {tempFilePath: ""}) && g.default.invokeMethod("saveFile", e)
        },
        openDocument: function (e) {
            o("openDocument", e, {filePath: ""}) && g.default.invokeMethod("openDocument", e)
        },
        chooseContact: function (e) {
            g.default.invokeMethod("chooseContact", e)
        },
        makePhoneCall: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o("makePhoneCall", e, {phoneNumber: ""}) && g.default.invokeMethod("makePhoneCall", e)
        },
        onAppRoute: function (e, t) {
            D.push(e)
        },
        onAppRouteDone: function (e, t) {
            F.push(e)
        },
        onAppEnterBackground: function (e) {
            N.default.onAppEnterBackground.call(X, e)
        },
        onAppEnterForeground: function (e) {
            N.default.onAppEnterForeground.call(X, e)
        },
        onAppRunningStatusChange: function (e) {
            N.default.onAppRunningStatusChange.call(X, e)
        },
        setAppData: function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, n = arguments[2];
            if (arguments[3], t.forceUpdate = void 0 !== t.forceUpdate && t.forceUpdate, !1 === y.default.isPlainObject(e)) throw new y.default.AppServiceSdkKnownError("setAppData:data should be an object");
            !function () {
                var r = !1, o = {}, i = function (e, t, n) {
                    r = !0, o[e] = t, j[e] = "Array" === n || "Object" === n ? JSON.parse((0, l.default)(t)) : t
                };
                for (var a in e) {
                    var s = e[a], u = j[a], c = y.default.getDataType(u), d = y.default.getDataType(s);
                    c !== d ? i(a, s, d) : "Array" == c || "Object" == c ? (0, l.default)(u) !== (0, l.default)(s) && i(a, s, d) : "String" == c || "Number" == c || "Boolean" == c ? u.toString() !== s.toString() && i(a, s, d) : "Date" == c ? u.getTime().toString() !== s.getTime().toString() && i(a, s, d) : u !== s && i(a, s, d)
                }
                t.forceUpdate ? g.default.publish("appDataChange", {
                    data: e,
                    option: {timestamp: Date.now(), forceUpdate: !0}
                }, n) : r && g.default.publish("appDataChange", {data: o}, n)
            }()
        },
        onPageEvent: function (e, t) {
            console.warn("'onPageEvent' is deprecated, use 'Page[eventName]'")
        },
        createAnimation: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            if (o("createAnimation", e, {})) return new b.default(e)
        },
        createAudioContext: function (e) {
            return x.default.call(X, e, Y)
        },
        createVideoContext: function (e) {
            return T.default.call(X, e, Y)
        },
        createMapContext: function (e) {
            return new C.default.MapContext(e)
        },
        onWebviewEvent: function (e, t) {
            V = e, g.default.subscribe("PAGE_EVENT", function (t) {
                var n = t.data, r = t.eventName, o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
                e({data: n, eventName: r, webviewId: o})
            })
        },
        onNativeEvent: function (e) {
            ["onCanvasTouchStart", "onCanvasTouchMove", "onCanvasTouchEnd"].forEach(function (t) {
                g.default.onMethod(t, function (n, r) {
                    e({data: n, eventName: t, webviewId: r})
                })
            })
        },
        hideKeyboard: function (e) {
            g.default.publish("hideKeyboard", {})
        },
        getPublicLibVersion: function () {
            var e;
            return g.default.invokeMethod("getPublicLibVersion", {
                complete: function (t) {
                    t.version ? e = t.version : (e = t, delete e.errMsg)
                }
            }), e
        },
        showModal: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, t = {
                title: "",
                content: "",
                confirmText: "确定",
                cancelText: "取消",
                showCancel: !0,
                confirmColor: "#3CC51F",
                cancelColor: "#000000"
            };
            if (t = (0, p.default)(t, e), o("showModal", t, {
                title: "",
                content: "",
                confirmText: "",
                cancelText: "",
                confirmColor: "",
                cancelColor: ""
            })) return t.confirmText.length > 4 ? void K("showModal", e, "showModal:fail confirmText length should not large then 4") : t.cancelText.length > 4 ? void K("showModal", e, "showModal:fail cancelText length should not large then 4") : g.default.invokeMethod("showModal", t, {
                beforeSuccess: function (e) {
                    e.confirm = Boolean(e.confirm)
                }
            })
        },
        showToast: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                t = {duration: 1500, title: "", icon: "success", mask: !1};
            t = (0, p.default)(t, e), delete t.image, ["success", "loading"].indexOf(t.icon) < 0 && (t.icon = "success"), t.duration > 1e4 && (t.duration = 1e4), o("showToast", t, {
                duration: 1,
                title: "",
                icon: ""
            }) && g.default.invokeMethod("showToast", t)
        },
        hideToast: function (e) {
            g.default.invokeMethod("hideToast", e)
        },
        showLoading: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                t = {title: "", icon: "loading", mask: !1, duration: 1e8};
            t = (0, p.default)(t, e), e.image && (t.image = y.default.getRealRoute(B, e.image, !1)), o("showLoading", t, {
                duration: 1,
                title: ""
            }) && g.default.invokeMethod("showToast", t, {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("showToast", "showLoading")
                }
            })
        },
        hideLoading: function (e) {
            g.default.invokeMethod("hideToast", e, {
                beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("hideToast", "hideLoading")
                }
            })
        },
        showActionSheet: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                t = {itemList: [], itemColor: "#000000"};
            if (t = (0, p.default)(t, e), t.cancelText = "取消", t.cancelColor = "#000000", o("showActionSheet", t, {
                itemList: ["1"],
                itemColor: ""
            })) return e.itemList.length > 6 ? void K("showActionSheet", e, "showActionSheet:fail parameter error: itemList should not be large than 6") : g.default.invokeMethod("showActionSheet", t, {
                beforeCancel: function (t) {
                    try {
                        "function" == typeof e.success && e.success({errMsg: "showActionSheet:ok", cancel: !0})
                    } catch (e) {
                        Reporter.thirdErrorReport({error: e, extend: "showActionSheet success callback error"})
                    }
                }
            })
        },
        getSavedFileList: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            g.default.invokeMethod("getSavedFileList", e)
        },
        getSavedFileInfo: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o("getSavedFileInfo", e, {filePath: ""}) && g.default.invokeMethod("getSavedFileInfo", e)
        },
        getFileInfo: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            if (g.default.beforeInvoke("getFileInfo", e, {filePath: ""})) {
                if (void 0 !== e.digestAlgorithm) {
                    var t = y.default.paramCheck(e, {digestAlgorithm: ""});
                    t && g.default.beforeInvokeFail("getFileInfo", e, "parameter error: " + t), -1 === ["md5", "sha1"].indexOf(e.digestAlgorithm) && g.default.beforeInvokeFail("getFileInfo", e, 'parameter error: invalid digestAlgorithm "' + e.digestAlgorithm + '"')
                }
                g.default.invokeMethod("getFileInfo", e, {})
            }
        },
        removeSavedFile: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o("removeSavedFile", e, {filePath: ""}) && g.default.invokeMethod("removeSavedFile", e)
        },
        getExtConfig: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            setTimeout(function () {
                var t = {errMsg: "getExtConfig: ok", extConfig: (0, X.getExtConfigSync)()};
                "function" == typeof e.success && e.success(t), "function" == typeof e.complete && e.complete(t)
            }, 0)
        },
        getClipboardData: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            g.default.invokeMethod("getClipboardData", e, {})
        },
        setClipboardData: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o("setClipboardData", e, {data: ""}) && g.default.invokeMethod("setClipboardData", e, {
                beforeSuccess: function () {
                    z = e.data, X.reportClipBoardData(!0)
                }
            })
        },
        reportClipBoardData: function (e) {
            if ("" !== z) {
                var t = getCurrentPages().find(function (e) {
                    return e.webviewId === Y
                }) || {}, n = [z, t.route, e ? 1 : 0, (0, f.default)(t.options).map(function (e) {
                    return encodeURIComponent(e) + "=" + encodeURIComponent(t.options[e])
                }).join("&")].map(encodeURIComponent).join(",");
                Reporter.reportKeyValue({key: "Clipboard", value: n, force: !0})
            }
        },
        getExtConfigSync: function () {
            if (!__wxConfig__.ext) return {};
            try {
                return JSON.parse((0, l.default)(__wxConfig__.ext))
            } catch (e) {
                return {}
            }
        },
        chooseAddress: function (e) {
            g.default.invokeMethod("openAddress", e, {
                beforeSuccess: function (e) {
                    y.default.renameProperty(e, "addressPostalCode", "postalCode"), y.default.renameProperty(e, "proviceFirstStageName", "provinceName"), y.default.renameProperty(e, "addressCitySecondStageName", "cityName"), y.default.renameProperty(e, "addressCountiesThirdStageName", "countyName"), y.default.renameProperty(e, "addressDetailInfo", "detailInfo")
                }, beforeAll: function (e) {
                    e.errMsg = e.errMsg.replace("openAddress", "chooseAddress"), delete e.err_msg
                }
            })
        },
        canIuse: function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "1.4.2";
            if ("string" != typeof e) throw new y.default.AppServiceSdkKnownError("canIUse: schema should be an object");
            var n = e.split(".");
            return y.default.canIUse(n, t)
        }
    };
    X.onAppEnterBackground(function () {
        X.getClipboardData({
            success: function (e) {
                e.data !== z && (z = e.data, X.reportClipBoardData)(!1)
            }
        })
    }), X.onAppEnterForeground(), X.appStatus = M.default.AppStatus.FORE_GROUND, X.hanged = !1, g.default.subscribe("INVOKE_METHOD", function (e, t) {
        var n = e.name, r = e.args;
        X[n](r, !0)
    }), g.default.subscribe("WEBVIEW_ERROR_MSG", function (e, t) {
        var n = e.msg;
        Reporter.triggerErrorMessage(n)
    }), g.default.onMethod("onAppRoute", function (e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
        if (e.path = e.path.replace(/\.\w+(\?|$)/, "$1"), e.webviewId = e.webviewId ? e.webviewId : t, B = e.path, "appLaunch" !== e.openType) for (var n in e.query) e.query[n] = decodeURIComponent(e.query[n]);
        "navigateBack" != e.openType && "redirectTo" != e.openType || I.default.clearOldWebviewCanvas(), I.default.notifyWebviewIdtoCanvas(e.webviewId), C.default.notifyWebviewIdtoMap(e.webviewId), Y = e.webviewId, D.forEach(function (t) {
            t(e)
        })
    }), g.default.onMethod("onAppRouteDone", function (e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
        e.path = e.path.replace(/\.\w+(\?|$)/, "$1"), e.webviewId = void 0 !== e.webviewId ? e.webviewId : t, B = e.path, F.forEach(function (t) {
            t(e)
        }), g.default.publish("onAppRouteDone", {}, [t])
    }), g.default.onMethod("onKeyboardValueChange", function (e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0, n = e.value, r = e.cursor;
        if (e.data && "function" == typeof V) {
            var o = JSON.parse(e.data);
            if (o.bindinput) {
                var i;
                try {
                    i = V({
                        data: {
                            type: "input",
                            target: o.target,
                            currentTarget: o.target,
                            timeStamp: Date.now(),
                            touches: [],
                            detail: {value: e.value, cursor: e.cursor}
                        }, eventName: o.bindinput, webviewId: t
                    })
                } catch (e) {
                    throw new y.default.AppServiceSdkKnownError("bind key input error")
                }
                if (o.setKeyboardValue) if (void 0 === i || null === i || !1 === i) ; else if ("Object" === y.default.getDataType(i)) {
                    var a = {inputId: e.inputId};
                    n != i.value && (a.value = i.value + ""), isNaN(parseInt(i.cursor)) || (a.cursor = parseInt(i.cursor), void 0 === a.value && (a.value = n), a.cursor > a.value.length && (a.cursor = -1)), g.default.invokeMethod("setKeyboardValue", a)
                } else n != i && g.default.invokeMethod("setKeyboardValue", {
                    value: i + "",
                    cursor: -1,
                    inputId: e.inputId
                })
            }
        }
        g.default.publish("setKeyboardValue", {value: n, cursor: r, inputId: e.inputId}, [t])
    });
    var Z = function (e, t, n) {
        var r = [], o = [];
        if ("onTouchStart" === t) {
            for (var i in e) r.push(e[i]);
            var a = {x: n.touch.x, y: n.touch.y, identifier: n.touch.id};
            o.push(a), r.push(a)
        } else if ("onTouchMove" === t) for (var s in e) {
            var u = e[s], c = !1;
            for (var l in n.touches) {
                var a = {x: n.touches[l].x, y: n.touches[l].y, identifier: n.touches[l].id};
                if (a.identifier === u.identifier && (u.x !== a.x || u.y !== a.y)) {
                    r.push(a), o.push(a), c = !0;
                    break
                }
            }
            c || r.push(u)
        } else if ("onTouchEnd" === t) {
            var a = {x: n.touch.x, y: n.touch.y, identifier: n.touch.id};
            for (var d in e) {
                var u = e[d];
                u.identifier === a.identifier ? o.push(a) : r.push(u)
            }
        } else if ("onTouchCancel" === t) for (var f in n.touches) {
            var a = {x: n.touches[f].x, y: n.touches[f].y, identifier: n.touches[f].id};
            o.push(a)
        } else if ("onLongPress" === t) {
            var a = {x: n.touch.x, y: n.touch.y, identifier: n.touch.id};
            for (var h in e) e[h].identifier === a.identifier ? r.push(a) : r.push(e[h]);
            o.push(a)
        }
        return {touches: r, changedTouches: o}
    }, Q = {
        onTouchStart: "touchstart",
        onTouchMove: "touchmove",
        onTouchEnd: "touchend",
        onTouchCancel: "touchcancel",
        onLongPress: "longtap"
    };
    ["onTouchStart", "onTouchMove", "onTouchEnd", "onTouchCancel", "onLongPress"].forEach(function (e) {
        g.default.onMethod(e, function (t) {
            var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0, r = JSON.parse(t.data),
                o = r.canvasNumber;
            I.default.canvasInfo.hasOwnProperty(o) || console.error("No such canvas " + o + " register in " + n + ", but trigger " + e + " event.");
            var i = I.default.canvasInfo[o].data;
            if (i[e] && "function" == typeof V) {
                var a = Z(i.lastTouches, e, t), s = a.touches, u = a.changedTouches;
                i.lastTouches = s, "onTouchMove" === e && 0 === u.length || V({
                    data: {
                        type: Q[e],
                        timeStamp: new Date - i.startTime,
                        target: i.target,
                        touches: s,
                        changedTouches: u
                    }, eventName: i[e], webviewId: n
                })
            }
        })
    }), ["onVideoPlay", "onVideoPause", "onVideoEnded", "onVideoTimeUpdate", "onVideoClickFullScreenBtn", "onVideoClickDanmuBtn"].forEach(function (e) {
        g.default.onMethod(e, function () {
            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, n = arguments[1],
                r = "bind" + e.substring(7).toLowerCase(), o = JSON.parse(t.data), i = o.handlers, a = o.event,
                s = o.createdTimestamp;
            if (i[r] && "function" == typeof V) {
                var u = {
                    type: r.substring(4),
                    target: a.target,
                    currentTarget: a.currentTarget,
                    timeStamp: Date.now() - s,
                    detail: {}
                };
                "bindtimeupdate" === r && (u.detail = {currentTime: t.position}), V({
                    data: u,
                    eventName: i[r],
                    webviewId: n
                })
            }
        })
    }), g.default.onMethod("onAccelerometerChange", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
        arguments.length > 1 && void 0 !== arguments[1] && arguments[1], W.forEach(function (t) {
            "function" == typeof t && t(e)
        })
    }), g.default.onMethod("onCompassChange", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
        arguments.length > 1 && void 0 !== arguments[1] && arguments[1], G.forEach(function (t) {
            "function" == typeof t && t(e)
        })
    }), g.default.onMethod("onError", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
        arguments.length > 1 && void 0 !== arguments[1] && arguments[1], console.error("thirdScriptError", "\n", "sdk uncaught third Error", "\n", e.message, "\n", e.stack)
    }), g.default.onMethod("onMapMarkerClick", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
            t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
        if (e.data && "function" == typeof V) {
            var n = JSON.parse(e.data);
            n.bindmarkertap && V({data: {markerId: n.markerId}, eventName: n.bindmarkertap, webviewId: t})
        }
    }), g.default.onMethod("onMapControlClick", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
            t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
        if (e.data && "function" == typeof V) {
            var n = JSON.parse(e.data);
            n.bindcontroltap && V({data: {controlId: n.controlId}, eventName: n.bindcontroltap, webviewId: t})
        }
    }), g.default.onMethod("onMapRegionChange", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
            t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
            n = C.default.mapInfo[t + "_" + e.mapId];
        n && n.bindregionchange && "function" == typeof V && V({
            data: {type: e.type},
            eventName: n.bindregionchange,
            webviewId: t
        })
    }), g.default.onMethod("onMapClick", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
            t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
            n = C.default.mapInfo[t + "_" + e.mapId];
        n && n.bindtap && "function" == typeof V && V({data: {}, eventName: n.bindtap, webviewId: t})
    }), y.default.copyObj(U, X), window.wx = U, t.default = U
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o() {
        return {
            model: /iPhone/.test(navigator.userAgent) ? "iPhone" : "Android",
            pixelRatio: window.devicePixelRatio || 1,
            windowWidth: window.innerWidth || 0,
            windowHeight: window.innerHeight || 0,
            language: window.navigator.userLanguage || window.navigator.language,
            platform: "weweb",
            version: "0.0.1"
        }
    }
    function i(e, t, n) {
        var r = {ext: t, msg: e};
        return n && (r.command = n), r
    }
    function a(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
            n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}, r = e.sdkName;
        return i((0, g.default)({errMsg: r + ":fail"}, n), e, t ? "GET_ASSDK_RES" : null)
    }
    function s(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
            n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}, r = e.sdkName;
        return i((0, g.default)({errMsg: r + ":ok"}, n), e, t ? "GET_ASSDK_RES" : null)
    }
    function u(e) {
        var t = e.args;
        return null == t.key || null == t.data ? a(e, !0) : (y.default.set(t.key, t.data, t.dataType), s(e, !0))
    }
    function c(e) {
        var t = e.args;
        if (null == t.key || "" == t.key) return a(e, !0);
        var n = y.default.get(t.key);
        return s(e, !0, {data: n.data, dataType: n.dataType})
    }
    function l(e) {
        return y.default.clear(), s(e, !0)
    }
    function d(e) {
        var t = e.args;
        return null == t.key || "" == t.key ? a(e, !0) : (y.default.remove(t.key), s(e, !0))
    }
    function f(e) {
        return s(e, !0, y.default.info())
    }
    function h(e) {
        return s(e, !0, o())
    }
    function p(e) {
        return s(e, !0, o())
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var v = n(15), g = r(v);
    t.setStorageSync = u, t.getStorageSync = c, t.clearStorageSync = l, t.removeStorageSync = d, t.getStorageInfoSync = f, t.getSystemInfoSync = h, t.getSystemInfo = p;
    var m = n(71), y = r(m)
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(9), i = r(o), a = n(0), s = r(a), u = n(1), c = r(u), l = n(7), d = r(l), f = function () {
        function e() {
            (0, s.default)(this, e);
            var t = arguments.length <= 0 ? void 0 : arguments[0];
            this.actions = [], this.currentTransform = [], this.currentStepAnimates = [], this.option = {
                transition: {
                    duration: void 0 !== t.duration ? t.duration : 400,
                    timingFunction: void 0 !== t.timingFunction ? t.timingFunction : "linear",
                    delay: void 0 !== t.delay ? t.delay : 0
                }, transformOrigin: t.transformOrigin || "50% 50% 0"
            }
        }
        return (0, c.default)(e, [{
            key: "export", value: function () {
                var e = this.actions;
                return this.actions = [], {actions: e}
            }
        }, {
            key: "step", value: function () {
                var e = this, t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                return this.currentStepAnimates.forEach(function (t) {
                    "style" !== t.type ? e.currentTransform[t.type] = t : e.currentTransform[t.type + "." + t.args[0]] = t
                }), this.actions.push({
                    animates: (0, i.default)(this.currentTransform).reduce(function (t, n) {
                        return [].concat(d.default.toArray(t), [e.currentTransform[n]])
                    }, []),
                    option: {
                        transformOrigin: void 0 !== t.transformOrigin ? t.transformOrigin : this.option.transformOrigin,
                        transition: {
                            duration: void 0 !== t.duration ? t.duration : this.option.transition.duration,
                            timingFunction: void 0 !== t.timingFunction ? t.timingFunction : this.option.transition.timingFunction,
                            delay: void 0 !== t.delay ? t.delay : this.option.transition.delay
                        }
                    }
                }), this.currentStepAnimates = [], this
            }
        }, {
            key: "matrix", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                    n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
                    r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1,
                    o = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 1,
                    i = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 1;
                return this.currentStepAnimates.push({type: "matrix", args: [e, t, n, r, o, i]}), this
            }
        }, {
            key: "matrix3d", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                    n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
                    r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 0,
                    o = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 0,
                    i = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 1,
                    a = arguments.length > 6 && void 0 !== arguments[6] ? arguments[6] : 0,
                    s = arguments.length > 7 && void 0 !== arguments[7] ? arguments[7] : 0,
                    u = arguments.length > 8 && void 0 !== arguments[8] ? arguments[8] : 0,
                    c = arguments.length > 9 && void 0 !== arguments[9] ? arguments[9] : 0,
                    l = arguments.length > 10 && void 0 !== arguments[10] ? arguments[10] : 1,
                    d = arguments.length > 11 && void 0 !== arguments[11] ? arguments[11] : 0,
                    f = arguments.length > 12 && void 0 !== arguments[12] ? arguments[12] : 0,
                    h = arguments.length > 13 && void 0 !== arguments[13] ? arguments[13] : 0,
                    p = arguments.length > 14 && void 0 !== arguments[14] ? arguments[14] : 0,
                    v = arguments.length > 15 && void 0 !== arguments[15] ? arguments[15] : 1;
                return this.currentStepAnimates.push({
                    type: "matrix3d",
                    args: [e, t, n, r, o, i, a, s, u, c, l, d, f, h, p, v]
                }), this.stepping = !1, this
            }
        }, {
            key: "rotate", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                return this.currentStepAnimates.push({type: "rotate", args: [e]}), this
            }
        }, {
            key: "rotate3d", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                    n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
                    r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 0;
                return this.currentStepAnimates.push({type: "rotate3d", args: [e, t, n, r]}), this.stepping = !1, this
            }
        }, {
            key: "rotateX", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                return this.currentStepAnimates.push({type: "rotateX", args: [e]}), this.stepping = !1, this
            }
        }, {
            key: "rotateY", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                return this.currentStepAnimates.push({type: "rotateY", args: [e]}), this.stepping = !1, this
            }
        }, {
            key: "rotateZ", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                return this.currentStepAnimates.push({type: "rotateZ", args: [e]}), this.stepping = !1, this
            }
        }, {
            key: "scale", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1, t = arguments[1];
                return t = void 0 !== t ? t : e, this.currentStepAnimates.push({type: "scale", args: [e, t]}), this
            }
        }, {
            key: "scale3d", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1,
                    n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1;
                return this.currentStepAnimates.push({type: "scale3d", args: [e, t, n]}), this
            }
        }, {
            key: "scaleX", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1;
                return this.currentStepAnimates.push({type: "scaleX", args: [e]}), this
            }
        }, {
            key: "scaleY", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1;
                return this.currentStepAnimates.push({type: "scaleY", args: [e]}), this
            }
        }, {
            key: "scaleZ", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1;
                return this.currentStepAnimates.push({type: "scaleZ", args: [e]}), this
            }
        }, {
            key: "skew", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
                return this.currentStepAnimates.push({type: "skew", args: [e, t]}), this
            }
        }, {
            key: "skewX", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                return this.currentStepAnimates.push({type: "skewX", args: [e]}), this
            }
        }, {
            key: "skewY", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                return this.currentStepAnimates.push({type: "skewY", args: [e]}), this
            }
        }, {
            key: "translate", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
                return this.currentStepAnimates.push({type: "translate", args: [e, t]}), this
            }
        }, {
            key: "translate3d", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                    n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0;
                return this.currentStepAnimates.push({type: "translate3d", args: [e, t, n]}), this
            }
        }, {
            key: "translateX", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                return this.currentStepAnimates.push({type: "translateX", args: [e]}), this
            }
        }, {
            key: "translateY", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                return this.currentStepAnimates.push({type: "translateY", args: [e]}), this
            }
        }, {
            key: "translateZ", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                return this.currentStepAnimates.push({type: "translateZ", args: [e]}), this
            }
        }, {
            key: "opacity", value: function (e) {
                return this.currentStepAnimates.push({type: "style", args: ["opacity", e]}), this
            }
        }, {
            key: "backgroundColor", value: function (e) {
                return this.currentStepAnimates.push({type: "style", args: ["backgroundColor", e]}), this
            }
        }, {
            key: "width", value: function (e) {
                return "number" == typeof e && (e += "px"), this.currentStepAnimates.push({
                    type: "style",
                    args: ["width", e]
                }), this
            }
        }, {
            key: "height", value: function (e) {
                return "number" == typeof e && (e += "px"), this.currentStepAnimates.push({
                    type: "style",
                    args: ["height", e]
                }), this
            }
        }, {
            key: "left", value: function (e) {
                return "number" == typeof e && (e += "px"), this.currentStepAnimates.push({
                    type: "style",
                    args: ["left", e]
                }), this
            }
        }, {
            key: "right", value: function (e) {
                return "number" == typeof e && (e += "px"), this.currentStepAnimates.push({
                    type: "style",
                    args: ["right", e]
                }), this
            }
        }, {
            key: "top", value: function (e) {
                return "number" == typeof e && (e += "px"), this.currentStepAnimates.push({
                    type: "style",
                    args: ["top", e]
                }), this
            }
        }, {
            key: "bottom", value: function (e) {
                return "number" == typeof e && (e += "px"), this.currentStepAnimates.push({
                    type: "style",
                    args: ["bottom", e]
                }), this
            }
        }]), e
    }();
    t.default = f
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e, t) {
        var n = this, r = new v(e, t);
        return r._getAppStatus = function () {
            return n.appStatus
        }, r._getHanged = function () {
            return n.hanged
        }, this.onAppEnterBackground(function () {
            r.pause()
        }), r
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var i = n(0), a = r(i), s = n(1), u = r(s);
    n(38);
    var c = n(3), l = r(c), d = n(49), f = r(d), h = {}, p = new l.default;
    ServiceJSBridge.subscribe("audioInsert", function (e, t) {
        var n = e.audioId;
        h[t + "_" + n] = !0, p.emit("audioInsert_" + t + "_" + n)
    });
    var v = function () {
        function e(t, n) {
            if ((0, a.default)(this, e), "string" != typeof t) throw new Error("audioId should be a String");
            this.audioId = t, this.webviewId = n
        }
        return (0, u.default)(e, [{
            key: "setSrc", value: function (e) {
                this._sendAction({method: "setSrc", data: e})
            }
        }, {
            key: "play", value: function () {
                var e = this._getAppStatus();
                this._getHanged(), e === f.default.AppStatus.BACK_GROUND || this._sendAction({method: "play"})
            }
        }, {
            key: "pause", value: function () {
                this._sendAction({method: "pause"})
            }
        }, {
            key: "seek", value: function (e) {
                this._sendAction({method: "setCurrentTime", data: e})
            }
        }, {
            key: "_ready", value: function (e) {
                h[this.webviewId + "_" + this.audioId] ? e() : p.on("audioInsert_" + this.webviewId + "_" + this.audioId, function () {
                    e()
                })
            }
        }, {
            key: "_sendAction", value: function (e) {
                var t = this;
                this._ready(function () {
                    ServiceJSBridge.publish("audio_" + t.audioId + "_actionChanged", e, [t.webviewId])
                })
            }
        }]), e
    }();
    t.default = o
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e, t) {
        var n = this, r = new v(e, t);
        return r._getAppStatus = function () {
            return n.appStatus
        }, r._getHanged = function () {
            return n.hanged
        }, this.onAppEnterBackground(function () {
            r.pause()
        }), r
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var i = n(0), a = r(i), s = n(1), u = r(s), c = n(3), l = r(c), d = n(49), f = r(d), h = {}, p = new l.default;
    ServiceJSBridge.subscribe("videoPlayerInsert", function (e, t) {
        var n = e.domId, r = e.videoPlayerId;
        h[n] = h[n] || r, p.emit("videoPlayerInsert", n)
    }), ServiceJSBridge.subscribe("videoPlayerRemoved", function (e, t) {
        var n = e.domId;
        e.videoPlayerId, delete h[n]
    });
    var v = function () {
        function e(t) {
            if ((0, a.default)(this, e), "string" != typeof t) throw new Error("video ID should be a String");
            this.domId = t
        }
        return (0, u.default)(e, [{
            key: "play", value: function () {
                var e = this._getAppStatus();
                e === f.default.AppStatus.BACK_GROUND || e === f.default.AppStatus.LOCK || this._invokeMethod("play")
            }
        }, {
            key: "pause", value: function () {
                this._invokeMethod("pause")
            }
        }, {
            key: "seek", value: function (e) {
                this._invokeMethod("seek", [e])
            }
        }, {
            key: "sendDanmu", value: function (e) {
                var t = e.text, n = e.color;
                this._invokeMethod("sendDanmu", [t, n])
            }
        }, {
            key: "_invokeMethod", value: function (e, t) {
                function n() {
                    this.action = {method: e, data: t}, this._sendAction()
                }
                var r = this;
                "number" == typeof h[this.domId] ? n.apply(this) : p.on("videoPlayerInsert", function (e) {
                    n.apply(r)
                })
            }
        }, {
            key: "_sendAction", value: function () {
                ServiceJSBridge.publish("video_" + this.domId + "_actionChanged", this.action, [window.__wxConfig.viewId])
            }
        }]), e
    }();
    t.default = o
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        g = e
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var i = n(0), a = r(i), s = n(1), u = r(s), c = n(38), l = r(c), d = n(3), f = r(d), h = {}, p = {},
        v = new f.default, g = 0, m = 0;
    ServiceJSBridge.subscribe("mapInsert", function (e, t) {
        var n = e.domId, r = e.mapId, o = e.bindregionchange, i = e.bindtap, a = e.showLocation, s = t + "_" + n;
        h[s] = h[s] || r, p[t + "_" + r] = {bindregionchange: o, bindtap: i, showLocation: a}, v.emit("mapInsert")
    });
    var y = function () {
        function e(t) {
            (0, a.default)(this, e);
            var n = this;
            if ("string" != typeof t) throw new Error("map ID should be a String");
            this.domId = t, ServiceJSBridge.subscribe("doMapActionCallback", function (e, t) {
                var r = e.callbackId;
                "getMapCenterLocation" === e.method && r && "function" == typeof n[r] && (n[r]({
                    longitude: e.longitude,
                    latitude: e.latitude
                }), delete n[r])
            })
        }
        return (0, u.default)(e, [{
            key: "_invoke", value: function (e, t) {
                t.method = e;
                var n = "callback" + g + "_" + t.mapId + "_" + m++;
                this[n] = t.success, t.callbackId = n, l.default.publish("doMapAction" + t.mapId, t, [g])
            }
        }, {
            key: "_invokeMethod", value: function (e, t) {
                var n = this, r = g + "_" + this.domId;
                "number" == typeof h[r] || h[r] ? (t.mapId = h[r], this._invoke(e, t)) : v.on("mapInsert", function () {
                    t.mapId = h[r], n._invoke(e, t)
                })
            }
        }, {
            key: "getCenterLocation", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                this._invokeMethod("getMapCenterLocation", e)
            }
        }, {
            key: "moveToLocation", value: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                this._invokeMethod("moveToMapLocation", e)
            }
        }]), e
    }();
    t.default = {notifyWebviewIdtoMap: o, MapContext: y, mapInfo: p}
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    t.predefinedColor = {
        aliceblue: "#f0f8ff",
        antiquewhite: "#faebd7",
        aqua: "#00ffff",
        aquamarine: "#7fffd4",
        azure: "#f0ffff",
        beige: "#f5f5dc",
        bisque: "#ffe4c4",
        black: "#000000",
        blanchedalmond: "#ffebcd",
        blue: "#0000ff",
        blueviolet: "#8a2be2",
        brown: "#a52a2a",
        burlywood: "#deb887",
        cadetblue: "#5f9ea0",
        chartreuse: "#7fff00",
        chocolate: "#d2691e",
        coral: "#ff7f50",
        cornflowerblue: "#6495ed",
        cornsilk: "#fff8dc",
        crimson: "#dc143c",
        cyan: "#00ffff",
        darkblue: "#00008b",
        darkcyan: "#008b8b",
        darkgoldenrod: "#b8860b",
        darkgray: "#a9a9a9",
        darkgrey: "#a9a9a9",
        darkgreen: "#006400",
        darkkhaki: "#bdb76b",
        darkmagenta: "#8b008b",
        darkolivegreen: "#556b2f",
        darkorange: "#ff8c00",
        darkorchid: "#9932cc",
        darkred: "#8b0000",
        darksalmon: "#e9967a",
        darkseagreen: "#8fbc8f",
        darkslateblue: "#483d8b",
        darkslategray: "#2f4f4f",
        darkslategrey: "#2f4f4f",
        darkturquoise: "#00ced1",
        darkviolet: "#9400d3",
        deeppink: "#ff1493",
        deepskyblue: "#00bfff",
        dimgray: "#696969",
        dimgrey: "#696969",
        dodgerblue: "#1e90ff",
        firebrick: "#b22222",
        floralwhite: "#fffaf0",
        forestgreen: "#228b22",
        fuchsia: "#ff00ff",
        gainsboro: "#dcdcdc",
        ghostwhite: "#f8f8ff",
        gold: "#ffd700",
        goldenrod: "#daa520",
        gray: "#808080",
        grey: "#808080",
        green: "#008000",
        greenyellow: "#adff2f",
        honeydew: "#f0fff0",
        hotpink: "#ff69b4",
        indianred: "#cd5c5c",
        indigo: "#4b0082",
        ivory: "#fffff0",
        khaki: "#f0e68c",
        lavender: "#e6e6fa",
        lavenderblush: "#fff0f5",
        lawngreen: "#7cfc00",
        lemonchiffon: "#fffacd",
        lightblue: "#add8e6",
        lightcoral: "#f08080",
        lightcyan: "#e0ffff",
        lightgoldenrodyellow: "#fafad2",
        lightgray: "#d3d3d3",
        lightgrey: "#d3d3d3",
        lightgreen: "#90ee90",
        lightpink: "#ffb6c1",
        lightsalmon: "#ffa07a",
        lightseagreen: "#20b2aa",
        lightskyblue: "#87cefa",
        lightslategray: "#778899",
        lightslategrey: "#778899",
        lightsteelblue: "#b0c4de",
        lightyellow: "#ffffe0",
        lime: "#00ff00",
        limegreen: "#32cd32",
        linen: "#faf0e6",
        magenta: "#ff00ff",
        maroon: "#800000",
        mediumaquamarine: "#66cdaa",
        mediumblue: "#0000cd",
        mediumorchid: "#ba55d3",
        mediumpurple: "#9370db",
        mediumseagreen: "#3cb371",
        mediumslateblue: "#7b68ee",
        mediumspringgreen: "#00fa9a",
        mediumturquoise: "#48d1cc",
        mediumvioletred: "#c71585",
        midnightblue: "#191970",
        mintcream: "#f5fffa",
        mistyrose: "#ffe4e1",
        moccasin: "#ffe4b5",
        navajowhite: "#ffdead",
        navy: "#000080",
        oldlace: "#fdf5e6",
        olive: "#808000",
        olivedrab: "#6b8e23",
        orange: "#ffa500",
        orangered: "#ff4500",
        orchid: "#da70d6",
        palegoldenrod: "#eee8aa",
        palegreen: "#98fb98",
        paleturquoise: "#afeeee",
        palevioletred: "#db7093",
        papayawhip: "#ffefd5",
        peachpuff: "#ffdab9",
        peru: "#cd853f",
        pink: "#ffc0cb",
        plum: "#dda0dd",
        powderblue: "#b0e0e6",
        purple: "#800080",
        rebeccapurple: "#663399",
        red: "#ff0000",
        rosybrown: "#bc8f8f",
        royalblue: "#4169e1",
        saddlebrown: "#8b4513",
        salmon: "#fa8072",
        sandybrown: "#f4a460",
        seagreen: "#2e8b57",
        seashell: "#fff5ee",
        sienna: "#a0522d",
        silver: "#c0c0c0",
        skyblue: "#87ceeb",
        slateblue: "#6a5acd",
        slategray: "#708090",
        slategrey: "#708090",
        snow: "#fffafa",
        springgreen: "#00ff7f",
        steelblue: "#4682b4",
        tan: "#d2b48c",
        teal: "#008080",
        thistle: "#d8bfd8",
        tomato: "#ff6347",
        turquoise: "#40e0d0",
        violet: "#ee82ee",
        wheat: "#f5deb3",
        white: "#ffffff",
        whitesmoke: "#f5f5f5",
        yellow: "#ffff00",
        yellowgreen: "#9acd32"
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(38), i = r(o), a = n(3), s = r(a), u = n(49), c = r(u), l = n(7), d = r(l), f = new s.default;
    i.default.onMethod("onAppEnterForeground", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
        f.emit("onAppEnterForeground", e)
    }), i.default.onMethod("onAppEnterBackground", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
        f.emit("onAppEnterBackground", e)
    }), i.default.onMethod("onAppRunningStatusChange", function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
        d.default.defaultRunningStatus = e.status, f.emit("onAppRunningStatusChange", e)
    });
    var h = function (e) {
        var t = this;
        "function" == typeof e && setTimeout(e, 0), f.on("onAppEnterForeground", function (n) {
            i.default.publish("onAppEnterForeground", n), t.appStatus = c.default.AppStatus.FORE_GROUND, "function" == typeof e && e(n)
        })
    }, p = function (e) {
        var t = this;
        f.on("onAppEnterBackground", function (n) {
            n = n || {}, i.default.publish("onAppEnterBackground", n), "hide" === n.mode ? t.appStatus = c.default.AppStatus.LOCK : t.appStatus = c.default.AppStatus.BACK_GROUND, "close" === n.mode ? t.hanged = !1 : "hang" === n.mode && (t.hanged = !0), "function" == typeof e && e(n)
        })
    }, v = function (e) {
        f.on("onAppRunningStatusChange", function (t) {
            "function" == typeof e && e(t)
        })
    };
    t.default = {onAppEnterForeground: h, onAppEnterBackground: p, onAppRunningStatusChange: v}
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    var o = n(110), i = r(o), a = n(236), s = r(a);
    window.Page = i.default.pageHolder, window.App = s.default.appHolder, window.getApp = s.default.getApp, window.getCurrentPages = i.default.getCurrentPages
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(13), i = r(o), a = n(0), s = r(a), u = n(1), c = r(u), l = n(7), d = r(l), f = n(229), h = n(230),
        p = r(h), v = ["onLoad", "onReady", "onShow", "onRouteEnd", "onHide", "onUnload"], g = function (e) {
            for (var t = 0; t < v.length; ++t) if (v[t] === e) return !0;
            return "data" === e
        }, m = ["__wxWebviewId__", "__route__"], y = function (e) {
            return -1 !== m.indexOf(e)
        }, _ = function () {
            function e() {
                (0, s.default)(this, e);
                var t = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0], n = this, r = arguments[1],
                    o = arguments[2], a = {__wxWebviewId__: r, __route__: o};
                m.forEach(function (e) {
                    n.__defineSetter__(e, function () {
                        d.default.warn("关键字保护", "should not change the protected attribute " + e)
                    }), n.__defineGetter__(e, function () {
                        return a[e]
                    })
                }), t.data = t.data || {}, null == t.route && (t.route = o), d.default.isPlainObject(t.data) || d.default.error("Page data error", "data must be an object, your data is " + (0, i.default)(t.data)), this.data = JSON.parse((0, i.default)(t.data)), v.forEach(function (e) {
                    n[e] = function () {
                        var n, r = (t[e] || d.default.noop).bind(this);
                        d.default.info(this.__route__ + ": " + e + " have been invoked");
                        try {
                            var o = Date.now();
                            n = r.apply(this, arguments);
                            var i = Date.now() - o;
                            i > 1e3 && Reporter.slowReport({
                                key: "pageInvoke",
                                cost: i,
                                extend: 'at "' + this.__route__ + '" page lifeCycleMethod ' + e + " function"
                            })
                        } catch (t) {
                            Reporter.thirdErrorReport({
                                error: t,
                                extend: 'at "' + this.__route__ + '" page lifeCycleMethod ' + e + " function"
                            })
                        }
                        return n
                    }.bind(n)
                });
                for (var u in t) !function (e) {
                    y(e) ? d.default.warn("关键字保护", "Page's " + e + " is write-protected") : g(e) || ("Function" === d.default.getDataType(t[e]) ? n[e] = function () {
                        var n;
                        try {
                            var r = Date.now();
                            n = t[e].apply(this, arguments);
                            var o = Date.now() - r;
                            o > 1e3 && Reporter.slowReport({
                                key: "pageInvoke",
                                cost: o,
                                extend: "at " + this.__route__ + " page " + e + " function"
                            })
                        } catch (t) {
                            Reporter.thirdErrorReport({
                                error: t,
                                extend: 'at "' + this.__route__ + '" page ' + e + " function"
                            })
                        }
                        return n
                    }.bind(n) : n[e] = (0, p.default)(t[e]))
                }(u);
                "function" == typeof t.onShareAppMessage && ServiceJSBridge.invoke("showShareMenu", {}, d.default.info)
            }
            return (0, c.default)(e, [{
                key: "update", value: function () {
                    d.default.warn("将被废弃", "Page.update is deprecated, setData updates the view implicitly. [It will be removed in 2016.11]")
                }
            }, {
                key: "forceUpdate", value: function () {
                    d.default.warn("将被废弃", "Page.forceUpdate is deprecated, setData updates the view implicitly. [It will be removed in 2016.11]")
                }
            }, {
                key: "setData", value: function (e, t) {
                    try {
                        var n = d.default.getDataType(e);
                        "Object" !== n && d.default.error("类型错误", "setData accepts an Object rather than some " + n);
                        for (var r in e) {
                            var o = (0, f.getObjectByPath)(this.data, r), i = o.obj, a = o.key;
                            i && (i[a] = (0, p.default)(e[r]))
                        }
                        var s = function e() {
                            t(), document.removeEventListener("pageReRender", e)
                        };
                        t && document.addEventListener("pageReRender", s), window.reRender ? WeixinJSBridge.subscribeHandler("custom_event_appDataChange", {data: {data: e}}) : d.default.publish("appDataChange", {data: {data: e}}, [this.__wxWebviewId__])
                    } catch (e) {
                        Reporter.errorReport({key: "jsEnginScriptError", error: e, extend: "setData err"})
                    }
                }
            }]), e
        }();
    t.default = _
}, function (e, t, n) {
    "use strict";
    function r(e) {
        for (var t = e.length, n = [], r = "", o = 0, i = !1, s = !1, u = 0; u < t; u++) {
            var c = e[u];
            if ("\\" === c) u + 1 < t && ("." === e[u + 1] || "[" === e[u + 1] || "]" === e[u + 1]) ? (r += e[u + 1], u++) : r += "\\"; else if ("." === c) r && (n.push(r), r = ""); else if ("[" === c) {
                if (r && (n.push(r), r = ""), 0 === n.length) throw a.default.error("数据路径错误", "Path can not start with []: " + e);
                s = !0, i = !1
            } else if ("]" === c) {
                if (!i) throw a.default.error("数据路径错误", "Must have number in []: " + e);
                s = !1, n.push(o), o = 0
            } else if (s) {
                if (c < "0" || c > "9") throw a.default.error("数据路径错误", "Only number 0-9 could inside []: " + e);
                i = !0, o = 10 * o + c.charCodeAt(0) - 48
            } else r += c
        }
        if (r && n.push(r), 0 === n.length) throw a.default.error("数据路径错误", "Path can not be empty");
        return n
    }
    function o(e, t) {
        for (var n, o, i = r(t), s = e, u = 0; u < i.length; u++) Number(i[u]) === i[u] && i[u] % 1 == 0 ? Array.isArray(s) || (s = []) : a.default.isPlainObject(s) || (s = {}), o = i[u], n = s, s = s[i[u]];
        return {obj: n, key: o}
    }
    Object.defineProperty(t, "__esModule", {value: !0}), t.parsePath = r, t.getObjectByPath = o;
    var i = n(7), a = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(i)
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
    }
    function i(e) {
        var t = arguments.length <= 1 || void 0 === arguments[1] ? o : arguments[1];
        if (null === e) return null;
        var n = l.default.copyValue(e);
        if (null !== n) return n;
        var r = l.default.copyCollection(e, t), i = null !== r ? r : e;
        return a(e, t, i, [e], [i])
    }
    function a(e, t, n, r, o) {
        if (null === e) return null;
        var i = l.default.copyValue(e);
        if (null !== i) return i;
        var s, c, d, h, p, v, g, m, y = f.default.getKeys(e).concat(f.default.getSymbols(e));
        for (s = 0, c = y.length; s < c; ++s) d = y[s], h = e[d], p = f.default.indexOf(r, h), m = void 0, g = void 0, v = void 0, -1 === p ? (v = l.default.copy(h, t), g = null !== v ? v : h, null !== h && /^(?:function|object)$/.test(void 0 === h ? "undefined" : (0, u.default)(h)) && (r.push(h), o.push(g))) : m = o[p], n[d] = m || a(h, t, g, r, o);
        return n
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var s = n(4), u = r(s), c = n(231), l = r(c), d = n(232), f = r(d);
    t.default = i
}, function (e, t, n) {
    "use strict";
    function r(e, t) {
        var n = i(e);
        return null !== n ? n : o(e, t)
    }
    function o(e, t) {
        if ("function" != typeof t) throw new TypeError("customizer is must be a Function");
        if ("function" == typeof e) return e;
        var n = u.call(e);
        if ("[object Array]" === n) return [];
        if ("[object Object]" === n && e.constructor === Object) return {};
        if ("[object Date]" === n) return new Date(e.getTime());
        if ("[object RegExp]" === n) {
            var r = String(e), o = r.lastIndexOf("/");
            return new RegExp(r.slice(1, o), r.slice(o + 1))
        }
        var i = t(e);
        return void 0 !== i ? i : null
    }
    function i(e) {
        var t = void 0 === e ? "undefined" : (0, s.default)(e);
        return null !== e && "object" !== t && "function" !== t ? e : null
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var a = n(4), s = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(a), u = Object.prototype.toString;
    t.default = {copy: r, copyCollection: o, copyValue: i}
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e, t) {
        if ("[object Array]" !== h.call(e)) throw new TypeError("array must be an Array");
        var n = void 0, r = void 0, o = void 0;
        for (n = 0, r = e.length; n < r; ++n) if ((o = e[n]) === t || o !== o && t !== t) return n;
        return -1
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var i = n(233), a = r(i), s = n(95), u = r(s), c = n(4), l = r(c), d = n(9), f = r(d),
        h = Object.prototype.toString, p = "function" == typeof f.default ? function (e) {
            return (0, f.default)(e)
        } : function (e) {
            var t = void 0 === e ? "undefined" : (0, l.default)(e);
            if (null === e || "function" !== t && "object" !== t) throw new TypeError("obj must be an Object");
            var n, r = [];
            for (n in e) Object.prototype.hasOwnProperty.call(e, n) && r.push(n);
            return r
        }, v = "function" == typeof u.default ? function (e) {
            return (0, a.default)(e)
        } : function () {
            return []
        };
    t.default = {getKeys: p, getSymbols: v, indexOf: o}
}, function (e, t, n) {
    e.exports = {default: n(234), __esModule: !0}
}, function (e, t, n) {
    n(96), e.exports = n(2).Object.getOwnPropertySymbols
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    t.DOM_READY_EVENT = "__DOMReady"
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o, i = n(0), a = r(i), s = n(1), u = r(s), c = n(7), l = r(c), d = n(110), f = r(d), h = n(111),
        p = function (e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t.default = e, t
        }(h), v = ["onLaunch", "onShow", "onHide", "onUnlaunch"], g = !0, m = function (e) {
            for (var t = 0; t < v.length; ++t) if (v[t] === e) return !0;
            return !1
        }, y = function (e) {
            return "getCurrentPage" === e
        }, _ = function () {
            function e(t) {
                (0, a.default)(this, e);
                var n = this;
                v.forEach(function (e) {
                    var r = function () {
                        var n = (t[e] || l.default.noop).bind(this);
                        l.default.info("App: " + e + " have been invoked");
                        try {
                            n.apply(this, arguments)
                        } catch (t) {
                            Reporter.thirdErrorReport({
                                error: t,
                                extend: "App catch error in lifeCycleMethod " + e + " function"
                            })
                        }
                    };
                    n[e] = r.bind(n)
                });
                for (var r in t) !function (e) {
                    y(e) ? l.default.warn("关键字保护", "App's " + e + " is write-protected") : m(e) || ("[object Function]" === Object.prototype.toString.call(t[e]) ? n[e] = function () {
                        var n;
                        try {
                            n = t[e].apply(this, arguments)
                        } catch (t) {
                            Reporter.thirdErrorReport({error: t, extend: "App catch error in  " + e + " function"})
                        }
                        return n
                    }.bind(n) : n[e] = t[e])
                }(r);
                this.onError && Reporter.registerErrorListener(this.onError), this.onLaunch(), p.triggerAnalytics("launch", null, "小程序启动");
                var o = function () {
                    var e = f.default.getCurrentPages();
                    e.length && e[e.length - 1].onHide(), this.onHide(), p.triggerAnalytics("background", null, "小程序转到后台")
                }, i = function () {
                    if (this.onShow(), g) g = !1; else {
                        var e = f.default.getCurrentPages();
                        e.length && (e[e.length - 1].onShow(), p.triggerAnalytics("foreground", null, "小程序转到前台"))
                    }
                };
                wx.onAppEnterBackground(o.bind(this)), wx.onAppEnterForeground(i.bind(this))
            }
            return (0, u.default)(e, [{
                key: "getCurrentPage", value: function () {
                    l.default.warn("将被废弃", "App.getCurrentPage is deprecated, please use getCurrentPages. [It will be removed in 2016.11]");
                    var e = f.default.getCurrentPage();
                    if (e) return e.page
                }
            }]), e
        }(), b = Reporter.surroundThirdByTryCatch(function (e) {
            o = new _(e)
        }, "create app instance"), w = function () {
            return o
        };
    t.default = {appHolder: b, getApp: w}
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    var r = {}, o = function (e, t) {
        r[e] = {status: 1, factory: t}
    }, i = function (e) {
        var t = e.match(/(.*)\/([^\/]+)?$/);
        return t && t[1] ? t[1] : "./"
    }, a = function (e) {
        var t = i(e);
        return function (e) {
            if ("string" != typeof e) throw new Error("require args must be a string");
            for (var n = [], r = (t + "/" + e).split("/"), o = r.length, i = 0; i < o; ++i) {
                var a = r[i];
                if ("" != a && "." != a) if (".." == a) {
                    if (0 == n.length) throw new Error("can't find module : " + e);
                    n.pop()
                } else i + 1 < o && ".." == r[i + 1] ? i++ : n.push(a)
            }
            try {
                var u = n.join("/");
                return /\.js$/.test(u) || (u += ".js"), s(u)
            } catch (e) {
                throw e
            }
        }
    }, s = function (e) {
        if ("string" != typeof e) throw new Error("require args must be a string");
        var t = r[e];
        if (!t) throw new Error('module "' + e + '" is not defined');
        if (1 === t.status) {
            var n, o = t.factory, i = {exports: {}};
            o && (n = o(a(e), i, i.exports)), t.exports = i.exports || n, t.status = 2
        }
        return t.exports
    };
    t.define = o, t.require = s, window.define = o, window.require = s, wx.version = {
        updateTime: "2017.12.14 16:51:56",
        info: "",
        version: 32
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    var o = n(239), i = r(o), a = n(7), s = r(a), u = !1, c = [], l = {}, d = [], f = [], h = function (e, t) {
        i.default.publish("INVOKE_METHOD", {name: e, args: t})
    }, p = {
        invoke: i.default.invoke,
        on: i.default.on,
        getPlatform: s.default.getPlatform,
        onAppEnterForeground: function (e) {
            d.push(e)
        },
        onAppEnterBackground: function (e) {
            f.push(e)
        },
        reportIDKey: function (e, t) {
            console.warn("reportIDKey has been removed wx")
        },
        reportKeyValue: function (e, t) {
            console.warn("reportKeyValue has been removed from wx")
        },
        redirectTo: function (e) {
            h("redirectTo", e)
        },
        navigateTo: function (e) {
            h("navigateTo", e)
        },
        reLaunch: function (e) {
            h("reLaunch", e)
        },
        switchTab: function (e) {
            h("switchTab", e)
        },
        clearStorage: function () {
            h("clearStorage", {})
        },
        showKeyboard: function (e) {
            i.default.invokeMethod("showKeyboard", e)
        },
        showDatePickerView: function (e) {
            i.default.invokeMethod("showDatePickerView", e)
        },
        hideKeyboard: function (e) {
            i.default.invokeMethod("hideKeyboard", e)
        },
        insertMap: function (e) {
            i.default.invokeMethod("insertMap", e)
        },
        removeMap: function (e) {
            i.default.invokeMethod("removeMap", e)
        },
        updateMapCovers: function (e) {
            i.default.invokeMethod("updateMapCovers", e)
        },
        getRealRoute: s.default.getRealRoute,
        getCurrentRoute: function (e) {
            i.default.invokeMethod("getCurrentRoute", e, {
                beforeSuccess: function (e) {
                    e.route = e.route.split("?")[0]
                }
            })
        },
        getLocalImgData: function (e) {
            function t() {
                if (u = !1, c.length > 0) {
                    var e = c.shift();
                    p.getLocalImgData(e)
                }
            }
            !1 === u ? (u = !0, "string" == typeof e.path ? p.getCurrentRoute({
                success: function (n) {
                    var r = n.route;
                    e.path = s.default.getRealRoute(r || "index.html", e.path), i.default.invokeMethod("getLocalImgData", e, {beforeAll: t})
                }
            }) : i.default.invokeMethod("getLocalImgData", e, {beforeAll: t})) : c.push(e)
        },
        insertVideoPlayer: function (e) {
            i.default.invokeMethod("insertVideoPlayer", e)
        },
        removeVideoPlayer: function (e) {
            i.default.invokeMethod("removeVideoPlayer", e)
        },
        insertShareButton: function (e) {
            i.default.invokeMethod("insertShareButton", e)
        },
        updateShareButton: function (e) {
            i.default.invokeMethod("updateShareButton", e)
        },
        removeShareButton: function (e) {
            i.default.invokeMethod("removeShareButton", e)
        },
        onAppDataChange: function (e) {
            i.default.subscribe("appDataChange", function (t) {
                e(t)
            })
        },
        onPageScrollTo: function (e) {
            i.default.subscribe("pageScrollTo", function (t) {
                e(t)
            })
        },
        publishPageEvent: function (e, t) {
            i.default.publish("PAGE_EVENT", {eventName: e, data: t})
        },
        animationToStyle: s.default.animationToStyle
    };
    i.default.subscribe("onAppEnterForeground", function (e) {
        d.forEach(function (t) {
            t(e)
        })
    }), i.default.subscribe("onAppEnterBackground", function (e) {
        f.forEach(function (t) {
            t(e)
        })
    }), s.default.copyObj(l, p), e.exports = l, window.wd = l
}, function (e, t, n) {
    "use strict";
    function r(e, t, n) {
        var r = {sdkName: e, args: t || {}};
        ServiceJSBridge.showSdk(r)
    }
    function o(e, t, n) {
        if (t || (t = {}), -1 != p.indexOf(e)) console.log(e); else {
            if (f[e] = n, /^private_/.test(e)) return;
            "disableScrollBounce" === e ? l.default.togglePullDownRefresh(t.disable) : r(e, t)
        }
    }
    function i(e, t) {
        f[e] = t, r(e, {}, !0)
    }
    function a() {
        var e = Array.prototype.slice.call(arguments);
        e[1] = {data: e[1], options: {timestamp: Date.now()}}, WeixinJSBridge.publish.apply(WeixinJSBridge, e)
    }
    function s() {
        var e = Array.prototype.slice.call(arguments), t = e[1];
        e[1] = function (e, n) {
            var r = e.data;
            "function" == typeof t && t(r, n)
        }, WeixinJSBridge.subscribe.apply(WeixinJSBridge, e)
    }
    function u(e, t, n) {
        t = t || {}, n = n || {};
        var r = {};
        for (var i in t) "function" == typeof t[i] && (r[i] = t[i], delete t[i]);
        o(e, t, function (t) {
            t.errMsg = t.errMsg || e + ":ok";
            var o = 0 === t.errMsg.indexOf(e + ":ok"), i = 0 === t.errMsg.indexOf(e + ":cancel"),
                a = 0 === t.errMsg.indexOf(e + ":fail");
            "function" == typeof n.beforeAll && n.beforeAll(t), o ? ("function" == typeof n.beforeSuccess && n.beforeSuccess(t), "function" == typeof r.success && r.success(t), "function" == typeof n.afterSuccess && n.afterSuccess(t)) : i ? ("function" == typeof r.cancel && r.cancel(t), "function" == typeof n.cancel && n.cancel(t)) : a && ("function" == typeof r.fail && r.fail(t), "function" == typeof n.fail && n.fail(t)), "function" == typeof r.complete && r.complete(t), "function" == typeof n.complete && n.complete(t)
        })
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var c = n(99), l = function (e) {
            return e && e.__esModule ? e : {default: e}
        }(c), d = function () {
            return window.__wxConfig && window.__wxConfig.viewId || 0
        }, f = {}, h = {},
        p = ["insertShareButton", "updateShareButton", "removeShareButton", "insertContactButton", "updateContactButton", "removeContactButton", "reportKeyValue", "reportIDKey", "systemLog"];
    window.WeixinJSBridge = {
        pull: l.default, invoke: o, on: i, publish: function (e, t, n) {
            e = n ? e : "custom_event_" + e;
            var r = {eventName: e, data: t, webviewID: d()};
            ServiceJSBridge.subscribeHandler(r.eventName, r.data || {}, r.webviewID)
        }, subscribe: function (e, t) {
            h["custom_event_" + e] = t
        }, subscribeHandler: function (e, t) {
            var n;
            "function" == typeof(n = -1 != e.indexOf("custom_event_") ? h[e] : f[e]) && n(t)
        }
    }, t.default = {invoke: o, on: i, publish: a, subscribe: s, invokeMethod: u, onMethod: i}
}, function (e, t, n) {
    "use strict";
    var r = n(241), o = function (e) {
        if (e && e.__esModule) return e;
        var t = {};
        if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
        return t.default = e, t
    }(r);
    window.exparser = o
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0}), t.removeGlobalErrorListener = t.addGlobalErrorListener = t.triggerEvent = t.removeListenerFromElement = t.addListenerToElement = t.replaceChild = t.removeChild = t.insertBefore = t.appendChild = t.createVirtualNode = t.createTextNode = t.createElement = t.componentList = t.registerElement = t.registerBehavior = t.globalOptions = t.Observer = t.Component = t.VirtualNode = t.TextNode = t.Element = t.Behavior = void 0;
    var o = n(30), i = r(o), a = n(79), s = function (e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t.default = e, t
        }(a), u = n(112), c = r(u), l = n(39), d = r(l), f = n(242), h = r(f), p = n(114), v = r(p), g = n(113), m = r(g),
        y = n(50), _ = r(y),
        b = {renderingMode: "full", keepWhiteSpace: !1, parseTextContent: !0, throwGlobalError: !1};
    h.default._setGlobalOptionsGetter(function () {
        return b
    }), i.default._setGlobalOptionsGetter(function () {
        return b
    }), t.Behavior = c.default, t.Element = d.default, t.TextNode = v.default, t.VirtualNode = m.default, t.Component = h.default, t.Observer = _.default, t.globalOptions = b;
    t.registerBehavior = c.default.create, t.registerElement = h.default.register, t.componentList = h.default.list, t.createElement = h.default.create, t.createTextNode = v.default.create, t.createVirtualNode = m.default.create, t.appendChild = d.default.appendChild, t.insertBefore = d.default.insertBefore, t.removeChild = d.default.removeChild, t.replaceChild = d.default.replaceChild, t.addListenerToElement = s.addListenerToElement, t.removeListenerFromElement = s.removeListenerFromElement, t.triggerEvent = s.triggerEvent, t.addGlobalErrorListener = i.default.addGlobalErrorListener, t.removeGlobalErrorListener = i.default.removeGlobalErrorListener
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        return e.replace(/[A-Z]/g, function (e) {
            return "-" + e.toLowerCase()
        })
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var i = n(9), a = r(i), s = n(4), u = r(s), c = n(13), l = r(c), d = n(5), f = r(d), h = n(30), p = r(h), v = n(79),
        g = function (e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e) for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t.default = e, t
        }(v), m = n(243), y = r(m), _ = n(112), b = r(_), w = n(39), x = r(w), k = n(50), T = r(k),
        S = g.addListenerToElement, C = function () {
        };
    C.prototype = (0, f.default)(Object.prototype, {
        constructor: {
            value: C,
            writable: !0,
            configurable: !0
        }
    }), C.list = (0, f.default)(null), y.default._setCompnentSystem(C), x.default._setCompnentSystem(C), C._setGlobalOptionsGetter = function (e) {
        y.default._setGlobalOptionsGetter(e)
    };
    var E = function (e, t, n, r) {
        var i = o(n);
        t.type === Boolean ? r ? e.__domElement.setAttribute(i, "") : e.__domElement.removeAttribute(i) : t.type !== Object && (t.type === Array ? e.__domElement.setAttribute(i, (0, l.default)(r)) : e.__domElement.setAttribute(i, r))
    }, M = function (e, t) {
        switch (t) {
            case String:
                return null === e || void 0 === e ? "" : String(e);
            case Number:
                return !!isFinite(e) && Number(e);
            case Boolean:
                return !!e;
            case Array:
                return e instanceof Array ? e : [];
            case Object:
                return "object" === (void 0 === e ? "undefined" : (0, u.default)(e)) ? e : null;
            default:
                return void 0 === e ? null : e
        }
    };
    C.register = function (e) {
        var t = e.options || {}, n = {is: {value: e.is || ""}}, r = b.default.create(e), o = (0, f.default)(null);
        (0, a.default)(r.properties).forEach(function (e) {
            var t = r.properties[e];
            t !== String && t !== Number && t !== Boolean && t !== Object && t !== Array || (t = {type: t}), void 0 === t.value && (t.type === String ? t.value = "" : t.type === Number ? t.value = 0 : t.type === Boolean ? t.value = !1 : t.type === Array ? t.value = [] : t.value = null), o[e] = {
                type: t.type,
                value: t.value,
                coerce: r.methods[t.coerce],
                observer: r.methods[t.observer],
                public: !!t.public
            }, n[e] = {
                enumerable: !0, get: function () {
                    var t = this.__propData[e];
                    return void 0 === t ? o[e].value : t
                }, set: function (t) {
                    var n = o[e];
                    t = M(t, n.type);
                    var r = this.__propData[e];
                    if (n.coerce) {
                        var i = p.default.safeCallback("Property Filter", n.coerce, this, [t, r]);
                        void 0 !== i && (t = i)
                    }
                    t !== r && (this.__propData[e] = t, n.public && E(this, n, e, t), this.__templateInstance.updateValues(this, this.__propData, e), n.observer && p.default.safeCallback("Property Observer", n.observer, this, [t, r]), n.public && (this.__propObservers && !this.__propObservers.empty || this.__subtreeObserversCount) && T.default._callObservers(this, "__propObservers", {
                        type: "properties",
                        target: this,
                        propertyName: e
                    }))
                }
            }
        });
        var i = (0, f.default)(x.default.prototype, n);
        i.__behavior = r;
        for (var s in r.methods) i[s] = r.methods[s];
        i.__lifeTimeFuncs = r.getAllLifeTimeFuncs();
        var u = (0, f.default)(null), c = {};
        for (var d in o) c[d] = o[d].value, u[d] = !!o[d].public;
        var h = document.getElementById(r.is);
        !r.template && h && "TEMPLATE" === h.tagName || (h = document.createElement("template"), h.innerHTML = r.template || "");
        var v = y.default.create(h, c, r.methods, t);
        i.__propPublic = u;
        var g = r.getAllListeners(), m = (0, f.default)(null);
        for (var _ in g) {
            for (var w = g[_], k = [], S = 0; S < w.length; S++) k.push(r.methods[w[S]]);
            m[_] = k
        }
        C.list[r.is] = {proto: i, template: v, defaultValuesJSON: (0, l.default)(c), innerEvents: m}
    }, C.create = function (e) {
        e = e ? e.toLowerCase() : "virtual";
        var t = document.createElement(e), n = C.list[e] || C.list[""], r = (0, f.default)(n.proto);
        x.default.initialize(r), r.__domElement = t, t.__wxElement = r, r.__propData = JSON.parse(n.defaultValuesJSON);
        var o = r.__templateInstance = n.template.createInstance(r);
        o.shadowRoot instanceof x.default ? (x.default._attachShadowRoot(r, o.shadowRoot), r.shadowRoot = o.shadowRoot, r.__slotChildren = [o.shadowRoot], o.shadowRoot.__slotParent = r) : (r.__domElement.appendChild(o.shadowRoot), r.shadowRoot = t, r.__slotChildren = t.childNodes), r.shadowRoot.__host = r, r.$ = o.idMap, r.$$ = t, o.slots[""] || (o.slots[""] = t), r.__slots = o.slots, r.__slots[""].__slotChildren = r.childNodes;
        var i = n.innerEvents;
        for (var a in i) {
            var s = a.split(".", 2), u = s[s.length - 1], c = r, l = !0;
            if (2 === s.length && "" !== s[0] && (l = !1, "this" !== s[0] && (c = r.$[s[0]])), c) for (var d = i[a], h = 0; h < d.length; h++) l ? S(c.shadowRoot, u, d[h].bind(r)) : S(c, u, d[h].bind(r))
        }
        return C._callLifeTimeFuncs(r, "created"), r
    }, C.hasProperty = function (e, t) {
        return void 0 !== e.__propPublic[t]
    }, C.hasPublicProperty = function (e, t) {
        return !0 === e.__propPublic[t]
    }, C._callLifeTimeFuncs = function (e, t) {
        e.__lifeTimeFuncs[t].call(e, [])
    }, C.register({is: "", template: "<wx-content></wx-content>", properties: {}}), t.default = C
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e) {
        return e.replace(/-([a-z])/g, function (e, t) {
            return t.toUpperCase()
        })
    }
    function i(e) {
        for (var t = (0, c.default)(null), n = 0; n < e.length; n++) t[e[n].name] = e[n].value;
        return t
    }
    function a(e, t, n, r, o) {
        for (var i = null, s = 0, u = null, c = 0; c < e.length; c++) {
            var l = e[c];
            if (void 0 === l.name) i = w.default.create(l.text), l.exp && o.add(l.exp, i.__domElement, "textContent", T), v.default.appendChild(t, i); else {
                var d = l.attrs;
                if ("virtual" === l.name) i = _.default.create(l.virtual); else if (l.custom) for (i = C.create(l.name), s = 0; s < d.length; s++) u = d[s], u.updater ? u.updater(i, u.name, u.value) : i.__behavior.properties[u.name].type === Boolean ? i[u.name] = !0 : i[u.name] = u.value, u.exp && o.add(u.exp, i, u.name, u.updater); else for (i = m.default.wrap(document.importNode(l.prerendered, !1)), s = 0; s < d.length; s++) u = d[s], o.add(u.exp, i.__domElement, u.name, u.updater);
                v.default.appendChild(t, i), l.id && (n[l.id] = i), void 0 !== l.slot && (r[l.slot] = i), a(l.children, i, n, r, o)
            }
        }
    }
    function s(e, t, n, r, o) {
        for (var i = null, a = 0, u = null, c = 0; c < e.length; c++) {
            var l = e[c];
            if (void 0 === l.name) i = document.createTextNode(l.text), l.exp && o.add(l.exp, i, "textContent", T), t.appendChild(i); else {
                var d = l.attrs;
                for (i = document.importNode(l.prerendered, !1), a = 0; a < d.length; a++) u = d[a], o.add(u.exp, i, u.name, u.updater);
                t.appendChild(i), l.id && (n[l.id] = i), void 0 !== l.slot && (r[l.slot] = i), s(l.children, i, n, r, o)
            }
        }
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var u = n(5), c = r(u), l = n(244), d = r(l), f = n(245), h = r(f), p = n(39), v = r(p), g = n(246), m = r(g),
        y = n(113), _ = r(y), b = n(114), w = r(b), x = String.fromCharCode(36), k = function () {
        };
    k.prototype = (0, c.default)(Object.prototype, {constructor: {value: k, writable: !0, configurable: !0}});
    var T = function (e, t, n) {
        e[t] = n
    }, S = function () {
    };
    S.prototype = (0, c.default)(Object.prototype, {constructor: {value: S, writable: !0, configurable: !0}});
    var C = null;
    S._setCompnentSystem = function (e) {
        C = e
    };
    var E = function () {
        return {renderingMode: "native", keepWhiteSpace: !1, parseTextContent: !1}
    };
    S._setGlobalOptionsGetter = function (e) {
        E = e
    };
    var M = function (e, t, n) {
            e.__domElement.classList.toggle(t, !!n)
        }, A = function (e, t, n) {
            e.__domElement.style[t] = n
        }, P = function (e, t, n) {
            !0 === n ? e.setAttribute(t, "") : !1 === n || void 0 === n || null === n ? e.removeAttribute(t) : e.setAttribute(t, n)
        }, O = function (e, t, n) {
            e.classList.toggle(t, !!n)
        }, I = function (e, t, n) {
            e.style[t] = n
        }, R = {name: "virtual", virtual: "slot", slot: "", attrs: [], children: []},
        N = {name: "virtual", slot: "", attrs: [], prerendered: document.createElement("virtual"), children: []};
    S.create = function (e, t, n, r) {
        var a = E(), s = r.renderingMode || a.renderingMode, u = R;
        "native" === s && (u = N);
        var l = i(e.attributes), d = {
            parseTextContent: void 0 !== l["parse-text-content"] || r.parseTextContent || a.parseTextContent,
            keepWhiteSpace: void 0 !== l["keep-white-space"] || r.keepWhiteSpace || a.keepWhiteSpace
        }, f = e.content;
        if ("TEMPLATE" !== e.tagName) for (f = document.createDocumentFragment(); e.childNodes.length;) f.appendChild(e.childNodes[0]);
        var p = !1, v = [];
        !function e(r, i, a, c) {
            for (var l = void 0, d = 0; d < i.length; d++) {
                var f = i[d], v = a.concat(r.length);
                if (8 !== f.nodeType) if (3 !== f.nodeType) if ("WX-CONTENT" !== f.tagName && "SLOT" !== f.tagName) {
                    var g = f.tagName.indexOf("-") >= 0 && "native" !== s, m = null;
                    g || (m = document.createElement(f.tagName));
                    var y = "", _ = f.attributes, b = [];
                    if (_) {
                        for (var w = {}, k = 0; k < _.length; k++) {
                            var S = _[k];
                            if ("id" === S.name) y = S.value; else if ("parse-text-content" === S.name) w.parseTextContent = !0; else if ("keep-white-space" === S.name) w.keepWhiteSpace = !0; else {
                                l = void 0;
                                var C = void 0, E = S.name;
                                S.name.slice(-1) === x ? g ? (C = T, E = o(S.name.slice(0, -1))) : (C = P, E = S.name.slice(0, -1)) : ":" === S.name.slice(-1) ? (C = T, E = o(S.name.slice(0, -1))) : "class." === S.name.slice(0, 6) ? (C = g ? M : O, E = S.name.slice(6)) : "style." === S.name.slice(0, 6) && (C = g ? A : I, E = S.name.slice(6)), C && (l = h.default.parse(S.value, n));
                                var R = l ? l.calculate(null, t) : S.value;
                                g || (C || P)(m, E, R), (g || l) && b.push({name: E, value: R, updater: C, exp: l})
                            }
                        }
                        var N = {
                            name: f.tagName.toLowerCase(),
                            id: y,
                            custom: g,
                            attrs: b,
                            prerendered: m,
                            children: []
                        };
                        r.push(N), "VIRTUAL" === f.tagName && (N.virtual = "virtual"), f.childNodes && e(N.children, f.childNodes, v, w), 1 === N.children.length && N.children[0] === u && (N.children.pop(), N.slot = "")
                    }
                } else p = !0, r.push(u); else {
                    var L = f.textContent;
                    if (!c.keepWhiteSpace) {
                        if ("" === (L = L.trim())) continue;
                        f.textContent = L
                    }
                    l = void 0, c.parseTextContent && (l = h.default.parse(L, n)), r.push({
                        exp: l,
                        text: l ? l.calculate(null, t) : L
                    })
                }
            }
        }(v, f.childNodes, [], d), p || v.push(u), 1 === v.length && v[0] === u && v.pop();
        var g = (0, c.default)(S.prototype);
        return g._tagTreeRoot = v, g._renderingMode = s, g
    }, S.prototype.createInstance = function () {
        var e = (0, c.default)(k.prototype), t = (0, c.default)(null), n = (0, c.default)(null), r = d.default.create(),
            o = document.createDocumentFragment();
        return "native" === this._renderingMode ? s(this._tagTreeRoot, o, t, n, r) : (o = _.default.create("shadow-root"), a(this._tagTreeRoot, o, t, n, r)), e.shadowRoot = o, e.idMap = t, e.slots = n, e._binding = r, e
    }, k.prototype.updateValues = function (e, t, n) {
        n && this._binding.update(e, t, n)
    }, t.default = S
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    var r = n(5), o = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(r), i = function () {
    };
    i.prototype = (0, o.default)(Object.prototype, {
        constructor: {
            value: i,
            writable: !0,
            configurable: !0
        }
    }), i.create = function () {
        var e = (0, o.default)(i.prototype);
        return e._bindings = (0, o.default)(null), e
    }, i.prototype.add = function (e, t, n, r) {
        for (var o = {
            exp: e,
            targetElem: t,
            targetProp: n,
            updateFunc: r
        }, i = this._bindings, a = e.bindedProps, s = 0; s < a.length; s++) {
            var u = a[s];
            i[u] || (i[u] = []), i[u].push(o)
        }
    }, i.prototype.update = function (e, t, n) {
        var r = this._bindings[n];
        if (r) for (var o = 0; o < r.length; o++) {
            var i = r[o];
            i.updateFunc(i.targetElem, i.targetProp, i.exp.calculate(e, t))
        }
    }, t.default = i
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(5), i = r(o), a = n(30), s = r(a), u = function () {
    };
    u.prototype = (0, i.default)(Object.prototype, {
        constructor: {
            value: u,
            writable: !0,
            configurable: !0
        }
    }), u.parse = function (e, t) {
        for (var n = (0, i.default)(u.prototype), r = e.split(/\{\{(.*?)\}\}/g), o = [], a = 0; a < r.length; a++) if (a % 2) {
            var s = r[a].match(/^(!?)([-_a-zA-Z0-9]+)(?:\((([-_a-zA-Z0-9]+)(,[-_a-zA-Z0-9]+)*)\))?$/) || [!1, ""],
                c = null;
            if (s[3]) {
                c = s[3].split(",");
                for (var l = 0; l < c.length; l++) o.indexOf(c[l]) < 0 && o.push(c[l])
            } else o.indexOf(s[2]) < 0 && o.push(s[2]);
            r[a] = {not: !!s[1], prop: s[2], callee: c}
        }
        return n.bindedProps = o, n.isSingleletiable = 3 === r.length && "" === r[0] && "" === r[2], n._slices = r, n._methods = t, n
    };
    var c = function (e, t, n, r) {
        var o = "";
        if (r.callee) {
            for (var i = [], a = 0; a < r.callee.length; a++) i[a] = t[r.callee[a]];
            o = s.default.safeCallback("TemplateExparser Method", n[r.prop], e, i), void 0 !== o && null !== o || (o = "")
        } else o = t[r.prop];
        return r.not ? !o : o
    };
    u.prototype.calculate = function (e, t) {
        var n = this._slices, r = null, o = "";
        if (this.isSingleletiable) r = n[1], o = c(e, t, this._methods, r); else for (var i = 0; i < n.length; i++) r = n[i], o += i % 2 ? c(e, t, this._methods, r) : r;
        return o
    }, t.default = u
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(5), i = r(o), a = n(39), s = r(a), u = function () {
    };
    u.prototype = (0, i.default)(s.default.prototype, {
        constructor: {
            value: u,
            writable: !0,
            configurable: !0
        }
    }), u.wrap = function (e) {
        var t = (0, i.default)(u.prototype);
        return s.default.initialize(t), t.__domElement = e, e.__wxElement = t, t.$$ = e, t
    }, t.default = u
}, function (e, t, n) {
    "use strict";
    !function (e) {
        var t = function (e) {
            return {animationName: e.animationName, elapsedTime: e.elapsedTime}
        }, n = null;
        ["webkitAnimationStart", "webkitAnimationIteration", "webkitAnimationEnd", "animationstart", "animationiteration", "animationend", "webkitTransitionEnd", "transitionend"].forEach(function (r) {
            n = "webkit" === r.slice(0, 6), n && (r = r.slice(6).toLowerCase()), e.addEventListener(r, function (e) {
                e.target.__wxElement && exparser.triggerEvent(e.target.__wxElement, r, t(e)), document.dispatchEvent(new CustomEvent("pageReRender", {}))
            }, !0)
        })
    }(window), function (e) {
        WeixinJSBridge.subscribe("onAppRouteDone", function () {
            window.__onAppRouteDone = !0, exparser.triggerEvent(document, "routeDone", {}, {bubbles: !0}), document.dispatchEvent(new CustomEvent("pageReRender", {}))
        }), WeixinJSBridge.subscribe("setKeyboardValue", function (e) {
            e && e.data && exparser.triggerEvent(document, "setKeyboardValue", {
                value: e.data.value,
                cursor: e.data.cursor,
                inputId: e.data.inputId
            }, {bubbles: !0})
        }), WeixinJSBridge.subscribe("hideKeyboard", function (e) {
            exparser.triggerEvent(document, "hideKeyboard", {}, {bubbles: !0})
        }), WeixinJSBridge.on("onKeyboardComplete", function (e) {
            exparser.triggerEvent(document, "onKeyboardComplete", {value: e.value, inputId: e.inputId}, {bubbles: !0})
        }), WeixinJSBridge.on("onKeyboardConfirm", function (e) {
            exparser.triggerEvent(document, "onKeyboardConfirm", {value: e.value, inputId: e.inputId}, {bubbles: !0})
        }), WeixinJSBridge.on("onTextAreaHeightChange", function (e) {
            exparser.triggerEvent(document, "onTextAreaHeightChange", {
                height: e.height,
                lineCount: e.lineCount,
                inputId: e.inputId
            }, {bubbles: !0})
        }), WeixinJSBridge.on("onKeyboardShow", function (e) {
            exparser.triggerEvent(document, "onKeyboardShow", {inputId: e.inputId}, {bubbles: !0})
        })
    }(window), function (e) {
        exparser.globalOptions.renderingMode = "native", e.addEventListener("change", function (e) {
            exparser.triggerEvent(e.target, "change", {value: e.target.value})
        }, !0), e.addEventListener("input", function (e) {
            exparser.triggerEvent(e.target, "input")
        }, !0), e.addEventListener("load", function (e) {
            exparser.triggerEvent(e.target, "load")
        }, !0), e.addEventListener("error", function (e) {
            exparser.triggerEvent(e.target, "error")
        }, !0), e.addEventListener("focus", function (e) {
            exparser.triggerEvent(e.target, "focus"), e.preventDefault()
        }, !0), e.addEventListener("blur", function (e) {
            exparser.triggerEvent(e.target, "blur")
        }, !0), e.requestAnimationFrame = e.requestAnimationFrame || e.mozRequestAnimationFrame || e.webkitRequestAnimationFrame || e.msRequestAnimationFrame, e.requestAnimationFrame || (e.requestAnimationFrame = function (e) {
            "function" == typeof e && setTimeout(function () {
                e()
            }, 17)
        })
    }(window), function (e) {
        var t = function (e, t, n) {
            exparser.triggerEvent(e.target, t, n, {
                originalEvent: e,
                bubbles: !0,
                composed: !0,
                extraFields: {touches: e.touches, changedTouches: e.changedTouches}
            })
        }, n = function (e, t) {
            return e[t ? "changedTouches" : "touches"] = [{
                identifier: 0,
                pageX: e.pageX,
                pageY: e.pageY,
                clientX: e.clientX,
                clientY: e.clientY,
                screenX: e.screenX,
                screenY: e.screenY,
                target: e.target
            }], e
        }, r = !1, o = 0, i = 0, a = 0, s = 0, u = null, c = !1, l = function (e) {
            for (; e; e = e.parentNode) {
                var t = e.__wxElement || e;
                if (t.__wxScrolling && Date.now() - t.__wxScrolling < 50) return !0
            }
            return !1
        }, d = function () {
            t(s, "longtap", {x: i, y: a})
        }, f = function (e, n, r) {
            o || (o = e.timeStamp, i = n, a = r, l(e.target) ? (u = null, c = !0, t(e, "canceltap", {
                x: n,
                y: r
            })) : (u = setTimeout(d, 350), c = !1), s = e, e.defaultPrevented && (o = 0))
        }, h = function (e, n, r) {
            o && (Math.abs(n - i) < 10 && Math.abs(r - a) < 10 || (u && (clearTimeout(u), u = null), c = !0, t(s, "canceltap", {
                x: n,
                y: r
            })))
        }, p = function (e, n, r, l) {
            o && (o = 0, u && (clearTimeout(u), u = null), l ? (s, n = i, r = a) : c || (t(s, "tap", {
                x: n,
                y: r
            }), g(s)))
        };
        e.addEventListener("scroll", function (e) {
            e.target.__wxScrolling = Date.now()
        }, {capture: !0, passive: !1}), e.addEventListener("touchstart", function (e) {
            r = !0, t(e, "touchstart"), 1 === e.touches.length && f(e, e.touches[0].pageX, e.touches[0].pageY)
        }, {capture: !0, passive: !1}), e.addEventListener("touchmove", function (e) {
            t(e, "touchmove"), 1 === e.touches.length && h(0, e.touches[0].pageX, e.touches[0].pageY)
        }, {capture: !0, passive: !1}), e.addEventListener("touchend", function (e) {
            t(e, "touchend"), 0 === e.touches.length && p(0, e.changedTouches[0].pageX, e.changedTouches[0].pageY)
        }, {capture: !0, passive: !1}), e.addEventListener("touchcancel", function (e) {
            t(e, "touchcancel"), p(0, 0, 0, !0)
        }, {capture: !0, passive: !1}), window.addEventListener("blur", function () {
            p(0, 0, 0, !0)
        }), e.addEventListener("mousedown", function (e) {
            r || o || (n(e, !1), t(e, "touchstart"), f(e, e.pageX, e.pageY))
        }, {capture: !0, passive: !1}), e.addEventListener("mousemove", function (e) {
            !r && o && (n(e, !1), t(e, "touchmove"), h(0, e.pageX, e.pageY))
        }, {capture: !0, passive: !1}), e.addEventListener("mouseup", function (e) {
            !r && o && (n(e, !0), t(e, "touchend"), p(0, e.pageX, e.pageY))
        }, {capture: !0, passive: !1});
        var v = {}, g = function (e) {
            if (v.selector) for (var t = v.selector, n = e.target; n;) {
                if (n.tagName && 0 === n.tagName.indexOf("WX-")) {
                    var r = n.className.split(" ").map(function (e) {
                        return "." + e
                    });
                    ["#" + n.id].concat(r).forEach(function (e) {
                        t.indexOf(e) > -1 && m(n, e)
                    })
                }
                n = n.parentNode
            }
        }, m = function (e, t) {
            for (var n = 0; n < v.data.length; n++) {
                var r = v.data[n];
                if (r.element === t) {
                    var o = {eventID: r.eventID, page: r.page, element: r.element, action: r.action, time: Date.now()};
                    0 === t.indexOf(".") && (o.index = Array.prototype.indexOf.call(document.body.querySelectorAll(r.element), e)), WeixinJSBridge.publish("analyticsReport", {data: o});
                    break
                }
            }
        };
        WeixinJSBridge.subscribe("analyticsConfig", function (e) {
            "[object Array]" === Object.prototype.toString.call(e.data) && (v.data = e.data, v.selector = [], v.data.forEach(function (e) {
                e.element && v.selector.push(e.element)
            }))
        })
    }(window), n(248), n(249), n(250), n(251), n(252), n(253), n(254), n(255), n(256), n(257), n(258), n(259), n(260), n(261), n(262), n(263), n(264), n(265), n(115), n(266), n(267), n(268), n(269), n(270), n(271), n(272), n(273), window.exparser.registerAsyncComp = function (e, t) {
        function r(e) {
            0 == --i && t()
        }
        function o(e) {
            switch (e) {
                case"wx-map":
                    var t = document.createElement("script");
                    t.async = !0, t.type = "text/javascript", t.src = "https://map.qq.com/api/js?v=2.exp&callback=__map_jssdk_init", document.body.appendChild(t), window.__map_jssdk_id = 0, window.__map_jssdk_ready = !1, window.__map_jssdk_callback = [], window.__map_jssdk_init = function () {
                        for (window.__map_jssdk_ready = !0; window.__map_jssdk_callback.length;) {
                            window.__map_jssdk_callback.pop()()
                        }
                    }, n.e(15).then(n.bind(null, 286)).then(r);
                    break;
                case"wx-canvas":
                    n.e(18).then(n.bind(null, 287)).then(r);
                    break;
                case"wx-picker-view":
                    n.e(12).then(n.bind(null, 288)).then(r);
                    break;
                case"wx-picker":
                    n.e(11).then(n.bind(null, 289)).then(r);
                    break;
                case"wx-picker-view-column":
                    n.e(13).then(n.bind(null, 290)).then(r);
                    break;
                case"wx-video":
                    n.e(0).then(n.bind(null, 291)).then(r);
                    break;
                case"wx-radio-group":
                    n.e(9).then(n.bind(null, 292)).then(r);
                    break;
                case"wx-swiper":
                    n.e(4).then(n.bind(null, 293)).then(r);
                    break;
                case"wx-modal":
                    n.e(14).then(n.bind(null, 294)).then(r);
                    break;
                case"wx-switch":
                    n.e(3).then(n.bind(null, 295)).then(r);
                    break;
                case"wx-toast":
                    n.e(1).then(n.bind(null, 296)).then(r);
                    break;
                case"wx-radio":
                    n.e(8).then(n.bind(null, 297)).then(r);
                    break;
                case"wx-scroll-view":
                    n.e(7).then(n.bind(null, 298)).then(r);
                    break;
                case"wx-textarea":
                    n.e(2).then(n.bind(null, 299)).then(r);
                    break;
                case"wx-input":
                    new Promise(function (e) {
                        e()
                    }).then(n.bind(null, 115)).then(r);
                    break;
                case"wx-contact-button":
                    n.e(17).then(n.bind(null, 300)).then(r);
                    break;
                case"wx-audio":
                    n.e(19).then(n.bind(null, 301)).then(r);
                    break;
                case"wx-form":
                    n.e(16).then(n.bind(null, 302)).then(r);
                    break;
                case"wx-slider":
                    n.e(6).then(n.bind(null, 303)).then(r);
                    break;
                case"wx-swiper-item":
                    n.e(5).then(n.bind(null, 304)).then(r);
                    break;
                case"wx-progress":
                    n.e(10).then(n.bind(null, 305)).then(r);
                    break;
                case"wx-action-sheet-cancel":
                    n.e(22).then(n.bind(null, 306)).then(r);
                    break;
                case"wx-action-sheet":
                    n.e(20).then(n.bind(null, 307)).then(r);
                    break;
                case"wx-action-sheet-item":
                    n.e(21).then(n.bind(null, 308)).then(r);
                    break;
                case"wx-template":
                case"wx-div":
                case"wx-import":
                case"wx-include":
                case"wx-block":
                    r();
                    break;
                default:
                    console.log("Unknown Tag: " + e), r()
            }
        }
        var i = e.length;
        e.filter(function (e) {
            return !window.exparser.componentList[e] || (r(), !1)
        }).map(function (e) {
            return o(e)
        })
    }
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerBehavior({
        is: "wx-base",
        properties: {id: {type: String, public: !0}, hidden: {type: Boolean, public: !0}},
        debounce: function (e, t, n) {
            var r = this;
            this.__debouncers = this.__debouncers || {}, this.__debouncers[e] && clearTimeout(this.__debouncers[e]), this.__debouncers[e] = setTimeout(function () {
                "function" == typeof t && t(), r.__debouncers[e] = void 0
            }, n)
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerBehavior({
        is: "wx-data-Component",
        properties: {name: {type: String, public: !0}},
        getFormData: function () {
            return this.value || ""
        },
        resetFormData: function () {
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerBehavior({
        is: "wx-disabled",
        properties: {disabled: {type: Boolean, value: !1, public: !0}}
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerBehavior({
        is: "wx-group",
        listeners: {
            "this.wxItemValueChanged": "_handleItemValueChanged",
            "this.wxItemCheckedChanged": "_handleItemCheckedChanged",
            "this.wxItemAdded": "_handleItemAdded",
            "this.wxItemRemoved": "_handleItemRemoved",
            "this.wxItemChangedByTap": "_handleChangedByTap"
        },
        _handleItemValueChanged: function (e) {
            this.renameItem(e.detail.item, e.detail.newVal, e.detail.oldVal)
        },
        _handleItemCheckedChanged: function (e) {
            this.changed(e.detail.item)
        },
        _handleItemAdded: function (e) {
            return e.detail.item._relatedGroup = this, this.addItem(e.detail.item), !1
        },
        _handleItemRemoved: function (e) {
            return this.removeItem(e.detail.item), !1
        },
        _handleChangedByTap: function () {
            this.triggerEvent("change", {value: this.value})
        },
        addItem: function () {
        },
        removeItem: function () {
        },
        renameItem: function () {
        },
        changed: function () {
        },
        resetFormData: function () {
            if (this.hasBehavior("wx-data-Component")) {
                !function e(t) {
                    t.childNodes.forEach(function (t) {
                        if (t instanceof exparser.Element && !t.hasBehavior("wx-group")) return t.hasBehavior("wx-item") ? void t.resetFormData() : void e(t)
                    })
                }(this)
            }
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerBehavior({
        is: "wx-hover",
        properties: {
            hoverStartTime: {type: Number, value: 50, public: !0},
            hoverStayTime: {type: Number, value: 400, public: !0},
            hoverClass: {type: String, value: "", public: !0, observer: "_hoverClassChange"},
            hoverStyle: {type: String, value: "", public: !0},
            hover: {type: Boolean, value: !1, public: !0, observer: "_hoverChanged"}
        },
        attached: function () {
            this.hover && "none" != this.hoverStyle && "none" != this.hoverClass && (this.bindHover(), this._hoverClassChange(this.hoverClass))
        },
        isScrolling: function () {
            for (var e = this.$$; e; e = e.parentNode) {
                var t = e.__wxElement || e;
                if (t.__wxScrolling && Date.now() - t.__wxScrolling < 50) return !0
            }
            return !1
        },
        detached: function () {
            this.unbindHover()
        },
        _hoverChanged: function (e, t) {
            e ? this.bindHover() : this.unbindHover()
        },
        _hoverClassChange: function (e) {
            var t = e.split(/\s/);
            this._hoverClass = [];
            for (var n = 0; n < t.length; n++) t[n] && this._hoverClass.push(t[n])
        },
        bindHover: function () {
            this._hoverTouchStart = this.hoverTouchStart.bind(this), this._hoverTouchEnd = this.hoverTouchEnd.bind(this), this._hoverCancel = this.hoverCancel.bind(this), this._hoverTouchMove = this.hoverTouchMove.bind(this), this.$$.addEventListener("touchstart", this._hoverTouchStart), window.__DOMTree__.addListener("canceltap", this._hoverCancel), window.addEventListener("touchcancel", this._hoverCancel, !0), window.addEventListener("touchmove", this._hoverTouchMove, !0), window.addEventListener("touchend", this._hoverTouchEnd, !0)
        },
        unbindHover: function () {
            this.$$.removeEventListener("touchstart", this._hoverTouchStart), window.__DOMTree__.removeListener("canceltap", this._hoverCancel), window.removeEventListener("touchcancel", this._hoverCancel, !0), window.removeEventListener("touchmove", this._hoverTouchMove, !0), window.removeEventListener("touchend", this._hoverTouchEnd, !0)
        },
        hoverTouchMove: function (e) {
            this.hoverCancel()
        },
        hoverTouchStart: function (e) {
            var t = this;
            if (!this.isScrolling()) if (this.__touch = !0, "none" == this.hoverStyle || "none" == this.hoverClass || this.disabled) ; else {
                if (e.touches.length > 1) return;
                window.__hoverElement__ && (window.__hoverElement__._hoverReset(), window.__hoverElement__ = void 0), this.__hoverStyleTimeId = setTimeout(function () {
                    if (t.__hovering = !0, window.__hoverElement__ = t, t._hoverClass && t._hoverClass.length > 0) for (var e = 0; e < t._hoverClass.length; e++) t.$$.classList.add(t._hoverClass[e]); else t.$$.classList.add(t.is.replace("wx-", "") + "-hover");
                    t.__touch || window.requestAnimationFrame(function () {
                        clearTimeout(t.__hoverStayTimeId), t.__hoverStayTimeId = setTimeout(function () {
                            t._hoverReset()
                        }, t.hoverStayTime)
                    })
                }, this.hoverStartTime)
            }
        },
        hoverTouchEnd: function () {
            var e = this;
            this.__touch = !1, this.__hovering && (clearTimeout(this.__hoverStayTimeId), window.requestAnimationFrame(function () {
                e.__hoverStayTimeId = setTimeout(function () {
                    e._hoverReset()
                }, e.hoverStayTime)
            }))
        },
        hoverCancel: function () {
            this.__touch = !1, clearTimeout(this.__hoverStyleTimeId), this.__hoverStyleTimeId = void 0, this._hoverReset()
        },
        _hoverReset: function () {
            if (this.__hovering) if (this.__hovering = !1, window.__hoverElement__ = void 0, "none" == this.hoverStyle || "none" == this.hoverClass) ; else if (this._hoverClass && this._hoverClass.length > 0) for (var e = 0; e < this._hoverClass.length; e++) this.$$.classList.contains(this._hoverClass[e]) && this.$$.classList.remove(this._hoverClass[e]); else this.$$.classList.remove(this.is.replace("wx-", "") + "-hover")
        }
    })
}, function (e, t, n) {
    "use strict";
    window.exparser.registerBehavior({
        is: "wx-input-base",
        properties: {
            focus: {type: Boolean, value: 0, coerce: "_focusChange", public: !0},
            autoFocus: {type: Boolean, value: !1, public: !0},
            placeholder: {type: String, value: "", observer: "_placeholderChange", public: !0},
            placeholderStyle: {type: String, value: "", public: !0},
            placeholderClass: {type: String, value: "", public: !0},
            value: {type: String, value: "", coerce: "defaultValueChange", public: !0},
            showValue: {type: String, value: ""},
            maxlength: {type: Number, value: 140, observer: "_maxlengthChanged", public: !0},
            type: {type: String, value: "text", public: !0},
            password: {type: Boolean, value: !1, public: !0},
            disabled: {type: Boolean, value: !1, public: !0},
            bindinput: {type: String, value: "", public: !0}
        },
        resetFormData: function () {
            this._keyboardShow && (this.__formResetCallback = !0, wd.hideKeyboard()), this.value = "", this.showValue = ""
        },
        getFormData: function (e) {
            this._keyboardShow ? this.__formCallback = e : "function" == typeof e && e(this.value)
        },
        _formGetDataCallback: function () {
            "function" == typeof this.__formCallback && this.__formCallback(this.value), this.__formCallback = void 0
        },
        _focusChange: function (e) {
            return this._couldFocus(e), e
        },
        _couldFocus: function (e) {
            var t = this;
            !this._keyboardShow && this._attached && e && (window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame, window.requestAnimationFrame ? window.requestAnimationFrame(function () {
                t._inputFocus()
            }) : this._inputFocus())
        },
        _getPlaceholderClass: function (e) {
            return "input-placeholder " + e
        },
        _showValueFormate: function (e) {
            this.password || "password" == this.type ? this.showValue = e ? new Array(e.length + 1).join("●") : "" : this.showValue = e || ""
        },
        _maxlengthChanged: function (e, t) {
            var n = this.value.slice(0, e);
            n != this.value && (this.value = n)
        },
        _showValueChange: function (e) {
            return e
        },
        _placeholderChange: function () {
            this._checkPlaceholderStyle(this.value)
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerBehavior({
        is: "wx-item",
        properties: {
            value: {type: String, public: !0, observer: "valueChange"},
            checked: {type: Boolean, value: !1, observer: "checkedChange", public: !0}
        },
        valueChange: function (e, t) {
            this._relatedGroup && this._relatedGroup.triggerEvent("wxItemValueChanged", {
                item: this,
                newVal: e,
                oldVal: t
            })
        },
        checkedChange: function (e, t) {
            e !== t && this._relatedGroup && this._relatedGroup.triggerEvent("wxItemCheckedChanged", {item: this})
        },
        changedByTap: function () {
            this._relatedGroup && this._relatedGroup.triggerEvent("wxItemChangedByTap")
        },
        attached: function () {
            this.triggerEvent("wxItemAdded", {item: this}, {bubbles: !0})
        },
        moved: function () {
            this._relatedGroup && (this._relatedGroup.triggerEvent("wxItemRemoved"), this._relatedGroup = null), this.triggerEvent("wxItemAdded", {item: this}, {bubbles: !0})
        },
        detached: function () {
            this._relatedGroup && (this._relatedGroup.triggerEvent("wxItemRemoved", {item: this}), this._relatedGroup = null)
        },
        resetFormData: function () {
            this.checked = !1
        }
    })
}, function (e, t, n) {
    "use strict";
    window.exparser.registerBehavior({
        is: "wx-label-target", properties: {}, handleLabelTap: function (e) {
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerBehavior({
        is: "wx-mask-Behavior",
        properties: {mask: {type: Boolean, value: !1, public: !0}},
        _getMaskStyle: function (e) {
            return e ? "" : "background-color: transparent"
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerBehavior({
        is: "wx-native",
        properties: {
            hidden: {type: Boolean, value: !1, public: !0, observer: "hiddenChanged"},
            _isReady: {type: Boolean, value: !1},
            _deferred: {type: Array, value: []},
            _isError: {type: Boolean, value: !1},
            _box: {type: Object, value: {left: 0, top: 0, width: 0, height: 0}}
        },
        _getBox: function () {
            var e = this.$$.getBoundingClientRect();
            return {
                left: e.left + window.scrollX,
                top: e.top + window.scrollY,
                width: this.$$.offsetWidth,
                height: this.$$.offsetHeight
            }
        },
        _diff: function () {
            var e = this._getBox();
            for (var t in e) if (e[t] !== this._box[t]) return !0;
            return !1
        },
        _ready: function () {
            this._isReady = !0, this._deferred.forEach(function (e) {
                this[e.callback].apply(this, e.args)
            }, this), this._deferred = []
        },
        hiddenChanged: function (e, t) {
            if (!this._isError) return this._isReady ? void this._hiddenChanged(e, t) : void this._deferred.push({
                callback: "hiddenChanged",
                args: [e, t]
            })
        },
        _pageReRenderCallback: function () {
            this._isError || this._diff() && (this._box = this._getBox(), this._updatePosition())
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerBehavior({
        is: "wx-player",
        isBackground: !1,
        properties: {
            src: {type: String, observer: "srcChanged", public: !0},
            poster: {type: String, observer: "posterChanged", public: !0},
            playing: {type: Boolean, value: !1},
            _buttonType: {type: String, value: "play"},
            _currentTime: {type: String, value: "00:00"},
            _duration: {type: String, value: "00:00"},
            isLive: {type: Boolean, value: !1}
        },
        _formatTime: function (e) {
            if (e === 1 / 0) return "00:00";
            var t = Math.floor(e / 3600), n = Math.floor((e - 3600 * t) / 60), r = e - 3600 * t - 60 * n;
            return 0 == t ? (n >= 10 ? n : "0" + n) + ":" + (r >= 10 ? r : "0" + r) : (t >= 10 ? t : "0" + t) + ":" + (n >= 10 ? n : "0" + n) + ":" + (r >= 10 ? r : "0" + r)
        },
        _publish: function (e, t) {
            this.triggerEvent(e, t)
        },
        attached: function () {
            var e = this, t = this.$.player, n = {};
            for (var r in MediaError) n[MediaError[r]] = r;
            t.onerror = function (t) {
                if (t.stopPropagation(), t.srcElement.error) {
                    var r = t.srcElement.error.code;
                    e._publish("error", {errMsg: n[r]})
                }
            }, t.onplay = function (t) {
                e.playing = !0, t.stopPropagation(), e._publish("play", {}), e._buttonType = "pause", "function" == typeof e.onPlay && e.onPlay(t)
            }, t.onpause = function (t) {
                e.playing = !1, t.stopPropagation(), e._publish("pause", {}), e._buttonType = "play", "function" == typeof e.onPause && e.onPause(t)
            }, t.onended = function (t) {
                e.playing = !1, t.stopPropagation(), e._publish("ended", {}), "function" == typeof e.onEnded && e.onEnded(t)
            }, "AUDIO" == t.tagName && (t.onratechange = function (n) {
                n.stopPropagation(), e._publish("ratechange", {playbackRate: t.playbackRate})
            });
            var o = 0;
            t.addEventListener("timeupdate", function (n) {
                n.stopPropagation(), Math.abs(t.currentTime - o) % t.duration >= 1 && (e._publish("timeupdate", {
                    currentTime: t.currentTime,
                    duration: t.duration
                }), o = 1e3 * t.currentTime), e._currentTime = e._formatTime(Math.floor(t.currentTime)), "function" == typeof e.onTimeUpdate && e.onTimeUpdate(n)
            }), t.addEventListener("durationchange", function () {
                t.duration === 1 / 0 ? e.isLive = !0 : e.isLive = !1, NaN !== t.duration && 0 === e.duration && (e._duration = e._formatTime(Math.floor(t.duration)))
            })
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = exparser.registerBehavior({
        is: "wx-touchtrack",
        touchtrack: function (e, t) {
            var n = this, r = 0, o = 0, i = 0, a = 0, s = function (e, s, u, c) {
                if (!1 === n[t].call(n, {
                    target: e.target,
                    currentTarget: e.currentTarget,
                    preventDefault: e.preventDefault,
                    stopPropagation: e.stopPropagation,
                    detail: {state: s, x: u, y: c, dx: u - r, dy: c - o, ddx: u - i, ddy: c - a}
                })) return !1
            }, u = null;
            exparser.addListenerToElement(e, "touchstart", function (e) {
                if (e.touches && 1 === e.touches.length && !u) return u = e, r = i = e.touches[0].pageX, o = a = e.touches[0].pageY, s(e, "start", r, o)
            }), exparser.addListenerToElement(e, "touchmove", function (e) {
                if (e.touches && 1 === e.touches.length && u) {
                    var t = s(e, "move", e.touches[0].pageX, e.touches[0].pageY);
                    return i = e.touches[0].pageX, a = e.touches[0].pageY, t
                }
            }), exparser.addListenerToElement(e, "touchend", function (e) {
                if (e.touches && 0 === e.touches.length && u) return u = null, s(e, "end", e.changedTouches[0].pageX, e.changedTouches[0].pageY)
            }), exparser.addListenerToElement(e, "touchcancel", function (e) {
                if (e.touches && 0 === e.touches.length && u) {
                    var t = u;
                    return u = null, s(e, "end", t.touches[0].pageX, t.touches[0].pageY)
                }
            })
        }
    })
}, function (e, t, n) {
    "use strict";
    var r = 1;
    window.exparser.registerBehavior({
        is: "wx-positioning-target", created: function () {
            this._positioningId = r++, this._parentPositioningContainer = null, this._positioningSyncing = !1
        }, detached: function () {
            this._positioningId = r++
        }, _requestPositioningContainer: function () {
            this.triggerEvent("wxAddPositionTracker", {element: this}, {bubbles: !0, composed: !0})
        }, trackPositionInDocument: function () {
            this._positioningSyncing || (this._positioningSyncing = !0, this._parentPositioningContainer = document)
        }, trackPositionInContainer: function (e) {
            this._positioningSyncing || (this._positioningSyncing = !0, this._parentPositioningContainer = e)
        }, getPositioningOffset: function () {
            var e = this.$$.getBoundingClientRect();
            if (this._parentPositioningContainer === document) return {
                left: e.left + window.scrollX,
                top: e.top + window.scrollY,
                width: this.$$.offsetWidth,
                height: this.$$.offsetHeight
            };
            var t = this._parentPositioningContainer.$$.getBoundingClientRect();
            return {left: e.left - t.left, top: e.top - t.top, width: this.$$.offsetWidth, height: this.$$.offsetHeight}
        }, fetchPositioningParentId: function () {
            return 0
        }, getPositioningId: function () {
            return this._positioningId
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-button",
        template: "\n    <slot></slot>\n  ",
        behaviors: ["wx-base", "wx-hover", "wx-label-target"],
        properties: {
            type: {type: String, value: "default", public: !0},
            size: {type: String, value: "default", public: !0},
            disabled: {type: Boolean, public: !0},
            plain: {type: Boolean, public: !0},
            loading: {type: Boolean, public: !0},
            formType: {type: String, public: !0},
            hover: {type: Boolean, value: !0}
        },
        listeners: {
            tap: "_preventTapOnDisabled",
            longtap: "_preventTapOnDisabled",
            canceltap: "_preventTapOnDisabled",
            "this.tap": "_onThisTap"
        },
        _preventTapOnDisabled: function () {
            if (this.disabled) return !1
        },
        _onThisTap: function () {
            "submit" === this.formType ? this.triggerEvent("formSubmit", void 0, {bubbles: !0}) : "reset" === this.formType && this.triggerEvent("formReset", void 0, {bubbles: !0})
        },
        handleLabelTap: function (e) {
            exparser.triggerEvent(this.shadowRoot, "tap", e.detail, {
                bubbles: !0,
                composed: !0,
                extraFields: {touches: e.touches, changedTouches: e.changedTouches}
            })
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-checkbox",
        template: '\n    <div class="wx-checkbox-wrapper">\n      <div id="input" class="wx-checkbox-input" class.wx-checkbox-input-checked="{{checked}}" class.wx-checkbox-input-disabled="{{disabled}}" style.color="{{_getColor(checked,color)}}"></div>\n      <slot></slot>\n    </div>\n  ',
        behaviors: ["wx-base", "wx-label-target", "wx-item", "wx-disabled"],
        properties: {color: {type: String, value: "#09BB07", public: !0}},
        listeners: {tap: "_inputTap"},
        _getColor: function (e, t) {
            return e ? t : ""
        },
        _inputTap: function () {
            return !this.disabled && (this.checked = !this.checked, void this.changedByTap())
        },
        handleLabelTap: function () {
            this._inputTap()
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-checkbox-group",
        template: "\n    <slot></slot>\n  ",
        behaviors: ["wx-base", "wx-data-Component", "wx-group"],
        properties: {value: {type: Array, value: []}},
        addItem: function (e) {
            e.checked && this.value.push(e.value)
        },
        removeItem: function (e) {
            if (e.checked) {
                var t = this.value.indexOf(e.value);
                t >= 0 && this.value.splice(t, 1)
            }
        },
        renameItem: function (e, t, n) {
            if (e.checked) {
                var r = this.value.indexOf(n);
                r >= 0 && (this.value[r] = t)
            }
        },
        changed: function (e) {
            if (e.checked) this.value.push(e.value); else {
                var t = this.value.indexOf(e.value);
                t >= 0 && this.value.splice(t, 1)
            }
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-icon",
        template: '<i class$="wx-icon-{{type}}" style.color="{{color}}" style.font-size="{{size}}px"></i>',
        behaviors: ["wx-base"],
        properties: {
            type: {type: String, public: !0},
            size: {type: Number, value: 23, public: !0},
            color: {type: String, public: !0}
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-image",
        template: '<div id="div"></div>',
        behaviors: ["wx-base"],
        properties: {
            src: {type: String, observer: "srcChanged", public: !0},
            mode: {type: String, observer: "modeChanged", public: !0},
            _disableSizePositionRepeat: {type: Boolean, value: !1},
            backgroundSize: {type: String, observer: "backgroundSizeChanged", value: "100% 100%", public: !0},
            backgroundPosition: {type: String, observer: "backgroundPositionChanged", public: !0},
            backgroundRepeat: {type: String, observer: "backgroundRepeatChanged", value: "no-repeat", public: !0},
            _img: {type: Object}
        },
        _publishError: function (e) {
            this.triggerEvent("error", e)
        },
        _ready: function () {
            if (!(this._img && this._img instanceof Image)) {
                this._img = new Image;
                var e = this;
                this._img.onerror = function (t) {
                    t.stopPropagation();
                    var n = {errMsg: "GET " + e._img.src + " 404 (Not Found)"};
                    e._publishError(n)
                }, this._img.onload = function (t) {
                    t.stopPropagation(), e.triggerEvent("load", {
                        width: this.width,
                        height: this.height
                    }), "widthFix" === e.mode && (e.rate = this.width / this.height, e.$$.style.height = (e.$.div.offsetWidth || e.$$.offsetWidth) / e.rate + "px")
                };
                var t = this._pageReRenderCallback.bind(this);
                document.addEventListener("leavePage", function () {
                    document.removeEventListener("pageReRender", t)
                }), document.addEventListener("pageReRender", t)
            }
        },
        attached: function () {
            this._ready(), this.backgroundSizeChanged(this.backgroundSize), this.backgroundRepeatChanged(this.backgroundRepeat)
        },
        detached: function () {
            document.removeEventListener("pageReRender", this._pageReRenderCallback.bind(this))
        },
        _pageReRenderCallback: function () {
            "widthFix" === this.mode && void 0 !== this.rate && (this.$$.style.height = this.$$.offsetWidth / this.rate + "px")
        },
        _srcChanged: function (e) {
            if (!/https?:/i.test(e)) if (0 === e.indexOf("/")) e = e.substr(1); else {
                var t = window.__curPage__.url.split("/").slice(0, -1);
                t.length && (e = t.join("/") + "/" + e)
            }
            this._img.src = e, this.$.div.style.backgroundImage = "url('" + e + "')"
        },
        srcChanged: function (e, t) {
            if (e) {
                this.$.div, window.navigator.userAgent.toLowerCase();
                this._ready();
                this._srcChanged(e)
            }
        },
        _checkMode: function (e) {
            for (var t = ["scaleToFill", "aspectFit", "aspectFill", "top", "bottom", "center", "left", "right", "top left", "top right", "bottom left", "bottom right"], n = !1, r = 0; r < t.length; r++) if (e == t[r]) {
                n = !0;
                break
            }
            return n
        },
        modeChanged: function (e, t) {
            if (!this._checkMode(e)) return void(this._disableSizePositionRepeat = !1);
            switch (this._disableSizePositionRepeat = !0, this.$.div.style.backgroundSize = "auto auto", this.$.div.style.backgroundPosition = "0% 0%", this.$.div.style.backgroundRepeat = "no-repeat", e) {
                case"scaleToFill":
                    this.$.div.style.backgroundSize = "100% 100%";
                    break;
                case"aspectFit":
                    this.$.div.style.backgroundSize = "contain", this.$.div.style.backgroundPosition = "center center";
                    break;
                case"aspectFill":
                    this.$.div.style.backgroundSize = "cover", this.$.div.style.backgroundPosition = "center center";
                    break;
                case"widthFix":
                    this.$.div.style.backgroundSize = "100% 100%";
                    break;
                case"top":
                    this.$.div.style.backgroundPosition = "top center";
                    break;
                case"bottom":
                    this.$.div.style.backgroundPosition = "bottom center";
                    break;
                case"center":
                    this.$.div.style.backgroundPosition = "center center";
                    break;
                case"left":
                    this.$.div.style.backgroundPosition = "center left";
                    break;
                case"right":
                    this.$.div.style.backgroundPosition = "center right";
                    break;
                case"top left":
                    this.$.div.style.backgroundPosition = "top left";
                    break;
                case"top right":
                    this.$.div.style.backgroundPosition = "top right";
                    break;
                case"bottom left":
                    this.$.div.style.backgroundPosition = "bottom left";
                    break;
                case"bottom right":
                    this.$.div.style.backgroundPosition = "bottom right"
            }
        },
        backgroundSizeChanged: function (e, t) {
            this._disableSizePositionRepeat || (this.$.div.style.backgroundSize = e)
        },
        backgroundPositionChanged: function (e, t) {
            this._disableSizePositionRepeat || (this.$.div.style.backgroundPosition = e)
        },
        backgroundRepeatChanged: function (e, t) {
            this._disableSizePositionRepeat || (this.$.div.style.backgroundRepeat = e)
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-label",
        template: "\n    <slot></slot>\n  ",
        properties: {for: {type: String, public: !0}},
        listeners: {tap: "onTap"},
        behaviors: ["wx-base"],
        _handleNode: function (e, t) {
            return !!(e instanceof exparser.Element && e.hasBehavior("wx-label-target")) && (e.handleLabelTap(t), !0)
        },
        dfs: function (e, t) {
            if (this._handleNode(e, t)) return !0;
            if (!e.childNodes) return !1;
            for (var n = 0; n < e.childNodes.length; ++n) if (this.dfs(e.childNodes[n], t)) return !0;
            return !1
        },
        onTap: function (e) {
            for (var t = e.target; t instanceof exparser.Element && t !== this; t = t.parentNode) if (t.hasBehavior("wx-label-target")) return;
            if (this.for) {
                var n = document.getElementById(this.for);
                n && this._handleNode(n.__wxElement, e)
            } else this.dfs(this, e)
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-loading",
        template: '\n    <div class="wx-loading-mask" style$="background-color: transparent;"></div>\n    <div class="wx-loading">\n      <i class="wx-loading-icon"></i><p class="wx-loading-content"><slot></slot></p>\n    </div>\n  ',
        behaviors: ["wx-base"]
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-mask",
        template: '\n    <div class="wx-mask" id="mask" style="display: none;">\n  ',
        behaviors: ["wx-base"],
        properties: {hidden: {type: Boolean, value: !0, observer: "hiddenChange", public: !0}},
        hiddenChange: function (e) {
            var t = this.$.mask;
            !0 === e ? (setTimeout(function () {
                t.style.display = "none"
            }, 300), this.$.mask.classList.add("wx-mask-transparent")) : (t.style.display = "block", t.focus(), t.classList.remove("wx-mask-transparent"))
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-navigator",
        behaviors: ["wx-base", "wx-hover"],
        template: "<slot></slot>",
        properties: {
            url: {type: String, public: !0},
            redirect: {type: Boolean, value: !1, public: !0},
            openType: {type: String, value: "navigate", public: !0},
            hoverClass: {type: String, value: "", public: !0},
            hoverStyle: {type: String, value: "", public: !0},
            hover: {type: Boolean, value: !0},
            hoverStayTime: {type: Number, value: 600, public: !0}
        },
        listeners: {tap: "navigateTo"},
        navigateTo: function () {
            if (!this.url) return void console.error("navigator should have url attribute");
            if (this.redirect) return void wd.redirectTo({url: this.url});
            switch (this.openType) {
                case"navigate":
                    return void wd.navigateTo({url: this.url});
                case"redirect":
                    return void wd.redirectTo({url: this.url});
                case"switchTab":
                    return void wd.switchTab({url: this.url});
                case"reLaunch":
                    return void wd.reLaunch({url: this.url});
                default:
                    return void console.error("navigator: invalid openType " + this.openType)
            }
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-text",
        template: '\n    <span id="raw" style="display:none;"><slot></slot></span>\n    <span id="main"></span>\n  ',
        behaviors: ["wx-base"],
        properties: {
            style: {type: String, public: !0, observer: "_styleChanged"},
            class: {type: String, public: !0, observer: "_classChanged"},
            selectable: {type: Boolean, value: !1, public: !0},
            decode: {type: Boolean, value: !1, public: !0},
            space: {type: String, value: "", public: !0}
        },
        _styleChanged: function (e) {
            this.$$.setAttribute("style", e)
        },
        _classChanged: function (e) {
            this.$$.setAttribute("class", e)
        },
        _htmlDecode: function (e) {
            return this.space && ("nbsp" === this.space ? e = e.replace(/ /g, " ") : "ensp" === this.space ? e = e.replace(/ /g, " ") : "emsp" === this.space && (e = e.replace(/ /g, " "))), this.decode ? e.replace(/&nbsp;/g, " ").replace(/&ensp;/g, " ").replace(/&emsp;/g, " ").replace(/&lt;/g, "<").replace(/&gt;/g, ">").replace(/&quot;/g, '"').replace(/&apos;/g, "'").replace(/&amp;/g, "&") : e
        },
        _update: function () {
            for (var e = this.$.raw, t = document.createDocumentFragment(), n = 0, r = e.childNodes.length; n < r; n++) {
                var o = e.childNodes.item(n);
                if (o.nodeType === o.TEXT_NODE) for (var i = this._htmlDecode(decodeURIComponent(o.textContent)).split("\n"), a = 0; a < i.length; a++) a && t.appendChild(document.createElement("br")), t.appendChild(document.createTextNode(i[a])); else o.nodeType === o.ELEMENT_NODE && "WX-TEXT" === o.tagName && t.appendChild(o.cloneNode(!0))
            }
            this.$.main.innerHTML = "", this.$.main.appendChild(t)
        },
        created: function () {
            this._observer = exparser.Observer.create(function () {
                this._update()
            }), this._observer.observe(this, {childList: !0, subtree: !0, characterData: !0, properties: !0})
        },
        attached: function () {
            this._update()
        }
    })
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), t.default = window.exparser.registerElement({
        is: "wx-view",
        template: "<slot></slot>",
        behaviors: ["wx-base", "wx-hover"],
        properties: {inline: {type: Boolean, public: !0}, hover: {type: Boolean, value: !1, public: !0}}
    })
}, function (e, t, n) {
    "use strict";
    window.exparser.registerElement({
        is: "wx-web-view",
        template: "<div></div>",
        behaviors: ["wx-base", "wx-native", "wx-positioning-target"],
        properties: {src: {type: String, public: !0, observer: "srcChange"}},
        srcChange: function (e, t) {
            if (this._isReady) {
                var n = this.uuid;
                WeixinJSBridge.invoke("updateHTMLWebView", {htmlId: n, src: (e || "").trim()}, function (e) {
                })
            } else this._deferred.push({callback: "srcChange", args: [e, t]})
        },
        _hiddenChanged: function (e, t) {
        },
        inserted: !1,
        attached: function () {
            if (this.inserted) return void console.warn("一个页面只能插入一个 `wx-web-view`。");
            this.uuid = this.getPositioningId();
            var e = this, t = this.uuid;
            wx.getSystemInfo({
                success: function (n) {
                    e.$$.style.width = n.windowWidth + "px", e.$$.style.height = n.windowHeight + "px", WeixinJSBridge.invoke("insertHTMLWebView", {
                        htmlId: t,
                        position: {left: 0, top: 0, width: n.windowWidth, height: n.windowHeight}
                    }, function (t) {
                        /ok/.test(t.errMsg) && e._ready()
                    })
                }
            }), this.inserted = !0
        },
        detached: function () {
            var e = this, t = this.uuid;
            WeixinJSBridge.invoke("removeHTMLWebView", {htmlId: t}, function (t) {
                document.body.style.height = "", document.body.style.overflowY = "", e.inserted = !1
            })
        }
    })
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    var o = n(4), i = r(o), a = n(5), s = r(a), c = function () {
        var e = function () {
                var e = function () {
                };
                e.prototype = (0, s.default)(Object.prototype, {constructor: {value: e, writable: !0, configurable: !0}});
                var t = function (e, t) {
                    var n = t - 30 + 1;
                    return n < 0 && (n = 0), "L" + ((e.slice(0, t).match(/(\r|\n|\r\n)/g) || []).length + 1) + ": " + e.slice(n, t + 1)
                };
                e.create = function (t, n) {
                    var r = (0, s.default)(e.prototype);
                    r._cbs = n;
                    var o = r._stateTable = {}, i = r._stateRecTable = {}, a = {}, u = {}, c = function (e, n, r, o, i) {
                        if (Object.prototype.hasOwnProperty.call(t, r)) if (i[r]) {
                            if (!i[r].overwrite) throw new Error('State "' + e + '" has multiple possible rules on symbol "' + r + '".')
                        } else i[r] = n; else if ("ALL" !== r && "NULL" !== r && r.length > 1) if (o[r]) {
                            if (!o[r].overwrite) throw new Error('State "' + e + '" has multiple possible rules on symbol "' + r + '".')
                        } else for (var a = 0; a < r.length; a++) if ("-" === r[a + 1] && r[a + 2]) {
                            for (var s = r.charCodeAt(a + 2), u = r.charCodeAt(a); u <= s; u++) o[String.fromCharCode(u)] = n;
                            a += 2
                        } else o[r[a]] = n; else if (o[r]) {
                            if (!o[r].overwrite) throw new Error('State "' + e + '" has multiple possible rules on symbol "' + r + '".')
                        } else o[r] = n
                    }, l = "";
                    for (l in t) for (var d = t[l], f = o[l] = {}, h = i[l] = {}, p = a[l] = {}, v = u[l] = {}, g = 0; g < d.length; g++) {
                        var m = d[g], y = m.states[0];
                        y === l ? (y = m.states[1], c(l, m, y, h, v)) : c(l, m, y, f, p)
                    }
                    var _ = null, b = function e(t, n, r) {
                        if (2 !== _[t]) {
                            if (1 === _[t]) throw new Error('State "' + t + '" has illegal recursive rule definition.');
                            _[t] = 1;
                            var i = n[t], a = r[t];
                            for (var s in i) {
                                e(s, n, r);
                                var u = o[s];
                                for (var c in u) if (a[c]) {
                                    if (!a[c].overwrite) throw new Error('State "' + t + '" has multiple possible rules on symbol "' + c + '".')
                                } else a[c] = i[s]
                            }
                            _[t] = 2
                        }
                    };
                    _ = {};
                    for (l in a) b(l, a, o);
                    _ = {};
                    for (l in u) b(l, u, i);
                    return r
                }, e.prototype.parse = function (e, r, o) {
                    var i = {str: r, pos: 0}, a = n(this._stateTable, this._stateRecTable, e, i, this._cbs, o);
                    if (i.str.length > i.pos) throw new Error('Unexpected character "' + i.str[i.pos] + '" in position ' + t(i.str, i.pos) + i.pos + ", near ");
                    return a
                };
                var n = function e(n, r, o, i, a, s) {
                    var c = n[o], l = null;
                    if (i.str.length > i.pos && (l = c[i.str[i.pos]]), !l && (i.str.length > i.pos && (l = c.ALL), !l)) {
                        if (!(l = c.NULL)) throw new Error('Unexpected character "' + i.str[i.pos] + '" in position ' + i.pos + ' (in state "' + o + '"), near ' + t(i.str, i.pos));
                        if ("NULL" === l.states[0]) return a[l.id] ? a[l.id]([], s) : {r: l.id, c: []}
                    }
                    var d = function (u, c, l) {
                        var d = u.states, f = [];
                        c && f.push(l);
                        for (var h = c ? 1 : 0; h < d.length; h++) {
                            var p = d[h];
                            if (Object.prototype.hasOwnProperty.call(n, p)) f.push(e(n, r, p, i, a, s)); else if ("ALL" === p) f.push(i.str[i.pos]), i.pos++; else {
                                for (var v = i.str[i.pos], g = i.str.charCodeAt(i.pos), m = 0; m < p.length; m++) if ("-" === p[m + 1] && p[m + 2]) {
                                    var y = p.charCodeAt(m), _ = p.charCodeAt(m + 2);
                                    if (y <= g && g <= _) break;
                                    m += 2
                                } else if (v === p[m]) break;
                                if (m === p.length) throw new Error('Unexpected character "' + v + '" in position ' + i.pos + ' (expect "' + p + '" in state "' + o + '"), near ' + t(i.str, i.pos));
                                f.push(v), i.pos++
                            }
                        }
                        return a[u.id] ? a[u.id](f, s) : {r: u.id, c: f}
                    };
                    for (u = d(l); i.str.length > i.pos && ((l = r[o][i.str[i.pos]]) || (l = r[o].ALL));) u = d(l, !0, u);
                    return u
                };
                return e
            }(), t = {TAG_START: 1, TAG_END: -1, TEXT: 3, COMMENT: 8},
            n = {amp: "&", gt: ">", lt: "<", nbsp: " ", quot: '"', apos: "'"}, r = function (e) {
                return e.replace(/&([a-zA-Z]*?);/g, function (e, t) {
                    if (n.hasOwnProperty(t) && n[t]) return n[t];
                    if (/^#[0-9]{1,4}$/.test(t)) return String.fromCharCode(t.slice(1));
                    if (/^#x[0-9a-f]{1,4}$/i.test(t)) return String.fromCharCode("0" + t.slice(1));
                    throw new Error('HTML Entity "' + e + '" is not supported.')
                })
            }, o = function (e) {
                switch (e) {
                    case"area":
                    case"base":
                    case"basefont":
                    case"br":
                    case"col":
                    case"frame":
                    case"hr":
                    case"img":
                    case"input":
                    case"keygen":
                    case"link":
                    case"meta":
                    case"param":
                    case"source":
                    case"track":
                        return !0;
                    default:
                        return !1
                }
            }, i = null, a = function () {
                var n = {
                    TEXT: [{id: "tag", states: ["TEXT", "TAG"]}, {id: "text", states: ["TEXT", "ALL"]}, {
                        id: "tag1",
                        states: ["TAG"]
                    }, {id: "text1", states: ["ALL"]}, {id: "_null", states: ["NULL"], overwrite: !0}],
                    TAG: [{id: "_blank", states: ["<", "TAG_START"]}],
                    TAG_END: [{id: "_concat", states: ["/", ">"]}, {id: "_jump", states: [">"]}],
                    TAG_START: [{id: "comment", states: ["!", "-", "-", "COMMENT_CONTENT"]}, {
                        id: "endTag",
                        states: ["/", "TAG_NAME", ">"]
                    }, {id: "startTag", states: ["TAG_NAME", "ATTRS", "TAG_END"]}],
                    TAG_NAME: [{id: "_concat", states: ["TAG_NAME", "-_a-zA-Z0-9.:"]}, {id: "_jump", states: ["a-zA-Z"]}],
                    ATTRS: [{id: "_blank", states: [" \n\r\t\f", "ATTRS"]}, {
                        id: "_jump",
                        states: ["ATTRS", " \n\r\t\f"]
                    }, {id: "attrs", states: ["ATTR", "ATTRS"]}, {id: "_null", states: ["NULL"], overwrite: !0}],
                    ATTR: [{id: "attr", states: ["ATTR_NAME", "ATTR_NAME_AFTER"]}],
                    ATTR_NAME: [{id: "_concat", states: ["ATTR_NAME", "-_a-zA-Z0-9.:$&"]}, {
                        id: "_jump",
                        states: ["-_a-zA-Z0-9.:$&"]
                    }],
                    ATTR_NAME_AFTER: [{id: "_blank", states: ["=", "ATTR_VALUE"]}, {id: "_empty", states: ["NULL"]}],
                    ATTR_VALUE: [{id: "_blank", states: ['"', "ATTR_VALUE_INNER_1"]}, {
                        id: "_blank",
                        states: ["'", "ATTR_VALUE_INNER_2"]
                    }],
                    ATTR_VALUE_INNER_1: [{id: "_empty", states: ['"']}, {
                        id: "_concat",
                        states: ["ALL", "ATTR_VALUE_INNER_1"]
                    }],
                    ATTR_VALUE_INNER_2: [{id: "_empty", states: ["'"]}, {
                        id: "_concat",
                        states: ["ALL", "ATTR_VALUE_INNER_2"]
                    }],
                    COMMENT_CONTENT: [{id: "_concat", states: ["ALL", "COMMENT_CONTENT"]}, {
                        id: "_concat",
                        states: ["-", "COMMENT_CONTENT_DASH_1"]
                    }],
                    COMMENT_CONTENT_DASH_1: [{id: "_concat", states: ["ALL", "COMMENT_CONTENT"]}, {
                        id: "_concat",
                        states: ["-", "COMMENT_CONTENT_DASH_2"]
                    }],
                    COMMENT_CONTENT_DASH_2: [{id: "_concat", states: ["ALL", "COMMENT_CONTENT"]}, {
                        id: "_concat",
                        states: ["-", "COMMENT_CONTENT_DASH_2"]
                    }, {id: "_jump", states: [">"]}]
                }, r = {
                    _null: function () {
                    }, _empty: function () {
                        return ""
                    }, _jump: function (e) {
                        return e[0]
                    }, _concat: function (e) {
                        return e[0] + e[1]
                    }, _blank: function (e) {
                        return e[1]
                    }, attr: function (e) {
                        return {n: e[0], v: e[1]}
                    }, attrs: function (e) {
                        var t = e[1] || {};
                        return t[e[0].n] = e[0].v, t
                    }, startTag: function (e) {
                        var n = e[0].toLowerCase();
                        return {t: t.TAG_START, n: n, a: e[1] || {}, selfClose: "/>" === e[2] || o(n)}
                    }, endTag: function (e) {
                        return {t: t.TAG_END, n: e[1].toLowerCase()}
                    }, comment: function (e) {
                        return {t: t.COMMENT, c: e[3].slice(0, -3)}
                    }, tag1: function (e) {
                        return [e[0]]
                    }, text1: function (e) {
                        return [{t: t.TEXT, c: e[0]}]
                    }, tag: function (e) {
                        return e[0].push(e[1]), e[0]
                    }, text: function (e) {
                        var n = e[0];
                        return n[n.length - 1].t === t.TEXT ? n[n.length - 1].c += e[1] : n.push({t: t.TEXT, c: e[1]}), n
                    }
                };
                i = e.create(n, r)
            }, c = function (e) {
                for (var n = {children: []}, r = n, o = [], i = null, a = 0; a < e.length; a++) {
                    var s = e[a];
                    if (i = {
                        name: s.n,
                        attrs: s.a,
                        children: []
                    }, r.children.push(i), s.t === t.TAG_START) s.selfClose || (o.push(r), r = i); else if (s.t === t.TAG_END) {
                        for (; s.n !== r.name;) if (!(r = o.pop())) throw new Error('No matching start tag found for "</' + s.n + '>"');
                        r = o.pop()
                    } else s.t === t.TEXT && s.c && r.children.push({type: "text", text: s.c})
                }
                return n
            };
        return {
            parse: function (e) {
                i || a();
                var t = i.parse("TEXT", e) || [];
                return c(t).children
            }, decodeEntities: r
        }
    }(), l = {
        rules: {
            a: "nA",
            abbr: "nA",
            b: "nA",
            blockquote: "nA",
            br: "nA",
            code: "nA",
            col: "fA",
            colgroup: "fA",
            dd: "nA",
            del: "nA",
            div: "nA",
            dl: "nA",
            dt: "nA",
            em: "nA",
            fieldset: "nA",
            h1: "nA",
            h2: "nA",
            h3: "nA",
            h4: "nA",
            h5: "nA",
            h6: "nA",
            hr: "nA",
            i: "nA",
            img: "fA",
            ins: "nA",
            label: "nA",
            legend: "nA",
            li: "nA",
            ol: "fA",
            p: "nA",
            q: "nA",
            span: "nA",
            strong: "nA",
            sub: "nA",
            sup: "nA",
            table: "fA",
            tbody: "nA",
            td: "fA",
            tfoot: "nA",
            th: "fA",
            thead: "nA",
            tr: "nA",
            ul: "nA"
        }, fA: function (e, t, n, r) {
            var o = {
                col: {span: "nF", width: "nF"},
                colgroup: {span: "nF", width: "nF"},
                img: {alt: "nF", src: "fL", height: "nF", width: "nF"},
                ol: {start: "nF", type: "nF"},
                table: {width: "nF"},
                td: {colspan: "nF", height: "nF", rowspan: "nF", width: "nF"},
                th: {colspan: "nF", height: "nF", rowspan: "nF", width: "nF"}
            }, i = o[n][e];
            if (o.hasOwnProperty(n) && o[n].hasOwnProperty(e)) switch (i) {
                case void 0:
                    break;
                case"nF":
                    r.setAttribute(e, t);
                    break;
                default:
                    return l[i] && l[i](e, t, n, r)
            }
        }, fL: function (e, t, n, r) {
            r.setAttribute(e, t)
        }, parse: function (e, t, n) {
            return e.map(function (e) {
                if ("object" === (void 0 === e ? "undefined" : void 0 === e ? "undefined" : (0, i.default)(e))) if (void 0 === e.type || "node" === e.type || "" === e.type) {
                    if ("string" == typeof e.name && "" !== e.name) {
                        var r = e.name.toLowerCase();
                        if (l.rules.hasOwnProperty(r)) {
                            var o = l.rules[r], a = document.createElement(r);
                            if (a) {
                                if ("object" === (0, i.default)(e.attrs)) for (var s in e.attrs) {
                                    var u = s.toLowerCase(), d = c.decodeEntities(e.attrs[s]);
                                    if ("class" === u) {
                                        var f = n ? d.replace(/\S+/g, function (e) {
                                            return n + e
                                        }) : d;
                                        a.setAttribute("class", f)
                                    } else "style" === u ? a.setAttribute("style", d) : "nA" !== o && l[o] && l[o](u, d, r, a)
                                }
                                "object" === (0, i.default)(e.children) && e.children instanceof Array && e.children.length && l.parse(e.children, a, n), t.appendChild(a)
                            }
                        }
                    }
                } else "text" === e.type && "string" == typeof e.text && "" !== e.text && t.appendChild(document.createTextNode(c.decodeEntities(e.text)))
            }), t
        }
    };
    window.exparser.registerElement({
        is: "wx-rich-text",
        template: '<div id="rich-text"><slot></slot></div>',
        behaviors: ["wx-base"],
        properties: {nodes: {value: [], public: !0, observer: "_nodesObserver"}},
        created: function () {
            this._ready = !1, this._cachedVal = null
        },
        attached: function () {
            if (this._classPrefix = "", this.ownerShadowRoot) {
                var e = this.classList._prefix;
                e && (this._classPrefix = e + "--")
            }
            if (this._ready = !0, this._cachedVal) {
                var t = this._cachedVal;
                this._cachedVal = null, this._nodesObserver(t)
            }
        },
        _nodesObserver: function (e) {
            if (!this._ready) return void(this._cachedVal = e);
            this.$["rich-text"].innerHTML = "", Array.isArray(e) ? this.$["rich-text"].appendChild(l.parse(e, document.createDocumentFragment(), this._classPrefix)) : "string" == typeof e ? this.$["rich-text"].innerHTML = e : (console.group(new Date + " nodes属性只支持 String 和 Array 类型"), console.warn("nodes属性只支持 String 和 Array 类型，请检查输入的值。"), console.groupEnd())
        }
    })
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    function o(e, t) {
        window[e] = t, window.__curPage__ = {name: e, value: t}
    }
    function i(e) {
        g = e, window.__curPage__ = {name: "rootNode", value: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var a = n(275), s = r(a), u = n(31), c = r(u), l = n(117), d = r(l), f = n(282), h = r(f), p = n(284), v = r(p);
    r(n(285)).default.init(), window.__mergeData__ = h.default.mergeData, window.__DOMTree__ = void 0, window.reRender = 0;
    var g = void 0, m = function (e, t, n, r, o, i) {
        return new s.default(e, t, n, r, o, i)
    }, y = function (e) {
        return new d.default(e)
    }, _ = function e(t) {
        if (c.default.isString(t) || Number(t) === t && Number(t) % 1 == 0) return y(String(t));
        var n = [];
        return t.children.forEach(function (t) {
            n.push(e(t))
        }), m(t.tag, t.attr, t.n, t.wxKey, t.wxVkey, n)
    }, b = function (e) {
        window.__curPage__.envData || (window.__curPage__.envData = {});
        var t = window.__generateFunc__(window.__curPage__.envData, e);
        return _(t)
    }, w = function (e) {
        e.ext && e.ext.enablePullUpRefresh && o("__enablePullUpRefresh__", !0), i(b(e.data)), o("__DOMTree__", g.render()), exparser.Element.replaceDocumentElement(window.__DOMTree__, document.querySelector("#view-body-" + window.__wxConfig.viewId));
        wd.publishPageEvent("__DOMReady", {}), v.default.enablePullUpRefresh()
    }, x = function (e) {
        var t = b(e.data);
        window.__curPage__ && window.__curPage__.rootNode != g && (g = window.__curPage__.rootNode), g.diff(t).apply(window.__DOMTree__), i(t)
    }, k = function (e) {
        window.reRender ? (x(e), document.dispatchEvent(new CustomEvent("pageReRender", {}))) : (window.reRender = !0, w(e), e.options && e.options.firstRender || (console.log(e), console.error("firstRender not the data from Page.data"), Reporter.errorReport({
            key: "webviewScriptError",
            error: new Error("firstRender not the data from Page.data"),
            extend: "firstRender not the data from Page.data"
        })), document.dispatchEvent(new CustomEvent("pageReRender", {})))
    };
    window.onerror = function (e, t, n, r, o) {
        console.error(o && o.stack), Reporter.errorReport({key: "webviewScriptError", error: o})
    }, wd.onAppDataChange(Reporter.surroundThirdByTryCatch(function (e) {
        k(e)
    })), exparser.addGlobalErrorListener(function (e, t) {
        Reporter.errorReport({key: "webviewScriptError", error: e, extend: t.message})
    }), t.default = {
        reset: function () {
            g = void 0, window.__DOMTree__ = void 0
        }
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(0), i = r(o), a = n(1), s = r(a), u = n(31), c = r(u), l = n(116), d = r(l), f = n(277), h = r(f),
        p = n(117), v = r(p);
    n(40);
    var g = function () {
        function e(t, n, r, o, a, s) {
            (0, i.default)(this, e), this.tagName = t || "div", this.props = n || {}, this.children = s || [], this.newProps = r || [], this.wxVkey = a, c.default.isUndefined(o) ? this.wxKey = void 0 : this.wxKey = String(o), this.descendants = 0;
            for (var u = 0; u < this.children.length; ++u) {
                var l = this.children[u];
                c.default.isVirtualNode(l) ? this.descendants += l.descendants : c.default.isString(l) ? this.children[u] = new v.default(l) : c.default.isVirtualText(l) || console.log("invalid child", t, n, s, l), ++this.descendants
            }
        }
        return (0, s.default)(e, [{
            key: "render", value: function () {
                var e = "virtual" !== this.tagName ? exparser.createElement(this.tagName) : exparser.VirtualNode.create("virtual");
                return d.default.applyProperties(e, this.props), this.children.forEach(function (t) {
                    var n = t.render();
                    e.appendChild(n)
                }), e
            }
        }, {
            key: "diff", value: function (e) {
                return h.default.diff(this, e)
            }
        }]), e
    }();
    g.prototype.type = "WxVirtualNode", t.default = g
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    var r = {}, o = {dashToCamel: /-[a-z]/g, camelToDash: /([A-Z])/g}, i = function (e) {
        return r[e] ? r[e] : (e.indexOf("-") <= 0 ? r[e] = e : r[e] = e.replace(o.dashToCamel, function (e) {
            return e[1].toUpperCase()
        }), r[e])
    }, a = function (e) {
        return r[e] || (r[e] = e.replace(o.camelToDash, "-$1").toLowerCase())
    };
    t.default = {dashToCamelCase: i, camelToDashCase: a}
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(278), i = r(o), a = n(279), s = r(a), u = n(31), c = r(u), l = n(281), d = r(l), f = n(40), h = r(f),
        p = function (e, t) {
            var n = {};
            return v(e, t, n, 0), new s.default(e, n)
        }, v = function (e, t, n, r) {
            if (e !== t) {
                var o = n[r];
                if (null == t) o = y(o, new i.default(h.default.PATCH_TYPE.REMOVE, e)); else if (c.default.isVirtualNode(t)) if (c.default.isVirtualNode(e)) if (e.tagName === t.tagName && e.wxKey === t.wxKey) if ("virtual" === e.tagName && e.wxVkey !== t.wxVkey) o = y(o, new i.default(h.default.PATCH_TYPE.VNODE, e, t)); else {
                    var a = m(t.props, t.newProps);
                    a && (o = y(o, new i.default(h.default.PATCH_TYPE.PROPS, e, a))), o = g(e, t, n, o, r)
                } else o = y(o, new i.default(h.default.PATCH_TYPE.VNODE, e, t)); else o = y(o, new i.default(h.default.PATCH_TYPE.VNODE, e, t)); else {
                    if (!c.default.isVirtualText(t)) throw console.log("unknow node type", e, t), {
                        message: "unknow node type",
                        node: t
                    };
                    t.text !== e.text && (o = y(o, new i.default(h.default.PATCH_TYPE.TEXT, e, t)))
                }
                o && (n[r] = o)
            }
        }, g = function (e, t, n, r, o) {
            for (var a = e.children, s = d.default.listDiff(a, t.children), u = s.children, l = a.length > u.length ? a.length : u.length, f = 0; f < l; ++f) {
                var p = a[f], g = u[f];
                ++o, p ? v(p, g, n, o) : g && (r = y(r, new i.default(h.default.PATCH_TYPE.INSERT, p, g))), c.default.isVirtualNode(p) && (o += p.descendants)
            }
            return s.moves && (r = y(r, new i.default(h.default.PATCH_TYPE.REORDER, e, s.moves))), r
        }, m = function (e, t) {
            var n = {};
            for (var r in t) {
                var o = t[r];
                n[o] = e[o]
            }
            return c.default.isEmptyObject(n) ? void 0 : n
        }, y = function (e, t) {
            return e ? (e.push(t), e) : [t]
        };
    t.default = {diff: p, diffChildren: g, diffNode: v, diffProps: m, appendPatch: y}
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(0), i = r(o), a = n(1), s = r(a), u = n(116), c = r(u), l = n(40), d = r(l), f = function () {
        function e(t, n, r) {
            (0, i.default)(this, e), this.type = Number(t), this.vNode = n, this.patch = r
        }
        return (0, s.default)(e, [{
            key: "apply", value: function (t) {
                switch (this.type) {
                    case d.default.PATCH_TYPE.TEXT:
                        return e.stringPatch(t, this.patch);
                    case d.default.PATCH_TYPE.VNODE:
                        return e.vNodePatch(t, this.patch);
                    case d.default.PATCH_TYPE.PROPS:
                        return e.applyProperties(t, this.patch, this.vNode.props);
                    case d.default.PATCH_TYPE.REORDER:
                        return e.reorderChildren(t, this.patch);
                    case d.default.PATCH_TYPE.INSERT:
                        return e.insertNode(t, this.patch);
                    case d.default.PATCH_TYPE.REMOVE:
                        return e.removeNode(t);
                    default:
                        return t
                }
            }
        }], [{
            key: "stringPatch", value: function (e, t) {
                var n = e.parentNode, r = t.render();
                return n && r !== e && n.replaceChild(r, e), r
            }
        }, {
            key: "vNodePatch", value: function (e, t) {
                var n = e.parentNode, r = t.render();
                return n && r !== e && n.replaceChild(r, e), r
            }
        }, {
            key: "applyProperties", value: function (e, t, n) {
                return c.default.applyProperties(e, t, n), e
            }
        }, {
            key: "reorderChildren", value: function (e, t) {
                var n = t.removes, r = t.inserts, o = e.childNodes, i = {};
                return n.forEach(function (t) {
                    var n = o[t.index];
                    t.key && (i[t.key] = n), e.removeChild(n)
                }), r.forEach(function (t) {
                    var n = i[t.key];
                    e.insertBefore(n, o[t.index])
                }), e
            }
        }, {
            key: "insertNode", value: function (e, t) {
                var n = t.render();
                return e && e.appendChild(n), e
            }
        }, {
            key: "removeNode", value: function (e) {
                var t = e.parentNode;
                return t && t.removeChild(e), null
            }
        }]), e
    }();
    t.default = f
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(9), i = r(o), a = n(0), s = r(a), u = n(1), c = r(u), l = n(280), d = r(l), f = function () {
        function e(t, n) {
            (0, s.default)(this, e), this.oldTree = t, this.patches = n, this.patchIndexes = (0, i.default)(this.patches).map(function (e) {
                return Number(e)
            })
        }
        return (0, c.default)(e, [{
            key: "apply", value: function (e) {
                var t = this;
                if (0 === this.patchIndexes.length) return e;
                var n = d.default.getDomIndex(e, this.oldTree, this.patchIndexes);
                return this.patchIndexes.forEach(function (e) {
                    var r = n[e];
                    if (r) {
                        t.patches[e].forEach(function (e) {
                            e.apply(r)
                        })
                    }
                }), e
            }
        }]), e
    }();
    t.default = f
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    var r = function (e, t, n) {
        if (n && 0 != n.length) {
            n = n.sort(function (e, t) {
                return e - t
            });
            var r = {};
            return o(e, t, n, r, 0), r
        }
        return {}
    }, o = function e(t, n, r, o, a) {
        if (t) {
            i(r, a, a) && (o[a] = t);
            var s = n.children;
            if (s) for (var u = t.childNodes, c = 0; c < s.length; ++c) {
                var l = s[c];
                ++a;
                var d = a + (l.descendants || 0);
                i(r, a, d) && e(u[c], l, r, o, a), a = d
            }
        }
    }, i = function (e, t, n) {
        for (var r = 0, o = e.length - 1; r <= o;) {
            var i = o + r >> 1, a = e[i];
            if (a < t) r = i + 1; else {
                if (!(a > n)) return !0;
                o = i - 1
            }
        }
        return !1
    };
    t.default = {getDomIndex: r, mapIndexToDom: o, oneOfIndexesInRange: i}
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    var r = n(31), o = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(r), i = function (e, t) {
        function n(e, t, n) {
            return e.splice(t, 1), {index: t, key: n}
        }
        var r = a(e), i = r.keyIndexes;
        if (o.default.isEmptyObject(i)) return {children: t, moves: null};
        var u = a(t), c = u.keyIndexes, l = u.freeIndexes;
        if (o.default.isEmptyObject(c)) return {children: t, moves: null};
        for (var d = [], f = 0, h = 0, p = 0; p < e.length; ++p) {
            var v = e[p], g = s(v);
            if (g) if (c.hasOwnProperty(g)) {
                var m = c[g];
                d.push(t[m])
            } else ++h, d.push(null); else if (f < l.length) {
                var y = l[f];
                d.push(t[y]), ++f
            } else ++h, d.push(null)
        }
        for (var _ = l[f] || t.length, b = 0; b < t.length; ++b) {
            var w = t[b], x = s(w);
            x ? i.hasOwnProperty(x) || d.push(w) : b >= _ && d.push(w)
        }
        for (var k = d.slice(0), T = 0, S = [], C = [], E = 0; E < t.length;) {
            for (var M = t[E], A = s(M), P = k[T], O = s(P); null === P;) S.push(n(k, T, O)), P = k[T], O = s(P);
            O === A ? (++T, ++E) : A ? (O ? c[O] === E + 1 ? C.push({
                key: A,
                index: E
            }) : (S.push(n(k, T, O)), P = k[T], P && s(P) === A ? ++T : C.push({key: A, index: E})) : C.push({
                key: A,
                index: E
            }), ++E) : S.push(n(k, T, O))
        }
        for (; T < k.length;) {
            var I = k[T], R = s(I);
            S.push(n(k, T, R))
        }
        return S.length === h && 0 == C.length ? {children: d, moves: null} : {
            children: d,
            moves: {removes: S, inserts: C}
        }
    }, a = function (e) {
        for (var t = {}, n = [], r = 0; r < e.length; ++r) {
            var o = e[r], i = s(o);
            i ? t.hasOwnProperty(i) ? (console.error("多次使用 " + i + " 作为 wxKey"), o.wxKey = void 0, n.push(r)) : t[i] = r : n.push(r)
        }
        return {keyIndexes: t, freeIndexes: n}
    }, s = function (e) {
        if (e) return e.wxKey
    };
    t.default = {listDiff: i, makeKeyAndFreeIndexes: a, getItemKey: s}
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(13), i = r(o), a = n(0), s = r(a), u = n(1), c = r(u), l = n(283), d = r(l), f = {}, h = function () {
        function e() {
            (0, s.default)(this, e)
        }
        return (0, c.default)(e, null, [{
            key: "getAppData", value: function () {
                return f
            }
        }, {
            key: "mergeData", value: function (e, t) {
                var n = JSON.parse((0, i.default)(e));
                for (var r in t) {
                    var o = d.default.parsePath(r), a = d.default.getObjectByPath(e, o, !1), s = a.obj, u = a.key,
                        c = d.default.getObjectByPath(n, o, !0), l = c.obj, f = c.key, h = c.changed;
                    s && (s[u] = t[r]), l && (l[f] = h ? t[r] : {__value__: t[r], __wxspec__: !0})
                }
                return n
            }
        }]), e
    }();
    t.default = h
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0});
    var r = n(31), o = function (e) {
        return e && e.__esModule ? e : {default: e}
    }(r), i = function (e) {
        for (var t = e.length, n = [], r = "", o = 0, i = !1, a = !1, s = 0; s < t; s++) {
            var u = e[s];
            if ("\\" === u) s + 1 < t && ("." === e[s + 1] || "[" === e[s + 1] || "]" === e[s + 1] ? (r += e[s + 1], s++) : r += "\\"); else if ("." === u) r && (n.push(r), r = ""); else if ("[" === u) {
                if (r && (n.push(r), r = ""), 0 === n.length) throw new Error("path can not start with []: " + e);
                a = !0, i = !1
            } else if ("]" === u) {
                if (!i) throw new Error("must have number in []: " + e);
                a = !1, n.push(o), o = 0
            } else if (a) {
                if (u < "0" || u > "9") throw new Error("only number 0-9 could inside []: " + e);
                i = !0, o = 10 * o + u.charCodeAt(0) - 48
            } else r += u
        }
        if (r && n.push(r), 0 === n.length) throw new Error("path can not be empty");
        return n
    }, a = function (e, t, n) {
        for (var r = void 0, i = void 0, a = e, s = !1, u = 0; u < t.length; u++) Number(t[u]) === t[u] && t[u] % 1 == 0 ? "Array" !== o.default.getDataType(a) && (n && !s ? (s = !0, r[i] = {
            __value__: [],
            __wxspec__: !0
        }, a = r[i].__value__) : (r[i] = [], a = r[i])) : "Object" !== o.default.getDataType(a) && (n && !s ? (s = !0, r[i] = {
            __value__: {},
            __wxspec__: !0
        }, a = r[i].__value__) : (r[i] = {}, a = r[i])), i = t[u], r = a, (a = a[t[u]]) && a.__wxspec__ && (a = a.__value__, s = !0);
        return {obj: r, key: i, changed: s}
    };
    t.default = {parsePath: i, getObjectByPath: a}
}, function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {value: !0}), n(31);
    var r = 0, o = !1, i = !0, a = function () {
        return "CSS1Compat" === document.compatMode ? document.documentElement.clientHeight : document.body.clientHeight
    }, s = function () {
        var e = 0, t = 0;
        return document.body && (e = document.body.scrollHeight), document.documentElement && (t = document.documentElement.scrollHeight), Math.max(e, t)
    }, u = function () {
        var e = r - window.scrollY <= 0;
        return r = window.scrollY, !!(window.scrollY + a() + 20 >= s() && e)
    }, c = function () {
        i && !o && (wd.publishPageEvent("onReachBottom", {}), i = !1, setTimeout(function () {
            i = !0
        }, 350))
    }, l = function () {
        window.__enablePullUpRefresh__ && function () {
            window.onscroll = function () {
                u() && c()
            };
            var e = 0;
            window.__DOMTree__.addListener("touchstart", function (t) {
                e = t.touches[0].pageY, o = !1
            }), window.__DOMTree__.addListener("touchmove", function (t) {
                if (!o) {
                    t.touches[0].pageY < e && u() && (c(), o = !0)
                }
            }), window.__DOMTree__.addListener("touchend", function (e) {
                o = !1
            })
        }()
    };
    t.default = {
        getScrollHeight: s,
        getWindowHeight: a,
        checkScrollBottom: u,
        triggerPullUpRefresh: c,
        enablePullUpRefresh: l
    }
}, function (e, t, n) {
    "use strict";
    function r(e) {
        return e && e.__esModule ? e : {default: e}
    }
    Object.defineProperty(t, "__esModule", {value: !0});
    var o = n(40), i = r(o), a = n(7), s = r(a), u = function () {
        window.__webview_engine_version__ = .02, document.addEventListener("DOMContentLoaded", function () {
            var e = s.default.getPlatform() && window.innerWidth || 375;
            document.documentElement.style.fontSize = e / i.default.RPX_RATE + "px"
        }, 1e3)
    };
    t.default = {init: u}
}]);