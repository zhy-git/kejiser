(function() {
    var e = {};
    e.config = {
        type: "",
        mediaTitle: "",
        nativeControls: false,
        autoplay: false,
        preload: "none",
        videoWidth: "100%",
        videoHeight: "auto",
        aspectRation: 16 / 9,
        audioWidth: "100%",
        audioHeight: 44,
        autoLoop: false,
        timeFormatType: 1,
        alwaysShowHours: false,
        alwaysShowControls: false,
        hideVideoControlsOnLoad: false,
        enableFullscreen: true,
        pauseOtherPlayers: true,
        duration: 0,
        success: null,
        error: null
    }; (function(e) {
        var i = window.navigator.userAgent.toLowerCase();
        var t = document.createElement("video");
        e.isiOS = /iphone|ipod|ipad/i.test(i) && !window.MSStream;
        e.isAndroid = /android/i.test(i) && !window.MSStream;
        e.isBustedAndroid = /android 2\.[12]/i.test(i);
        e.isChromium = /chromium/i.test(i);
        e.hasTouch = "ontouchstart" in window;
        e.supportsCanPlayType = typeof t.canPlayType !== "undefined";
        e.isVendorBigPlay = /iphone/i.test(i) && !window.MSStream;
        e.isVendorControls = /baidu/i.test(i);
        e.isVendorFullscreen = /micromessenger|weibo/i.test(i);
        e.isVendorAutoplay = /v819mini/i.test(i) || e.isiOS;
        e.nativeFullscreenPrefix = function() {
            if (t.requestFullScreen) {
                return ""
            } else if (t.webkitRequestFullScreen) {
                return "webkit"
            } else if (t.mozRequestFullScreen) {
                return "moz"
            } else if (t.msRequestFullScreen) {
                return "ms"
            }
            return "-"
        } ();
        e.hasOldNativeFullScreen = e.nativeFullscreenPrefix == "-" && t.webkitEnterFullscreen;
        if (e.hasOldNativeFullScreen && /mac os x 10_5/i.test(i)) {
            e.nativeFullscreenPrefix = "-";
            e.hasOldNativeFullScreen = false
        }
    })(e.features = {});
    function i(e, i) {
        return parseInt(e.style[i] || getComputedStyle(e, null).getPropertyValue(i))
    }
    function t(e, i) {
        return new RegExp("(\\s|^)" + i + "(\\s|$)").test(e.className)
    }
    function n(e, i) {
        if (e.classList) {
            e.classList.add(i)
        } else if (!t(e, i)) {
            e.className += "" + i
        }
    }
    function s(e, i) {
        if (e.classList) {
            e.classList.remove(i)
        } else if (t(e, i)) {
            e.className = e.className.replace(new RegExp("(\\s|^)" + i + "(\\s|$)"), " ").replace(/^\s+|\s+$/g, "")
        }
    }
    function a(e, i) {
        if (!isFinite(e) || e < 0) {
            e = 0
        }
        var t = i.alwaysShowHours ? [0] : [];
        if (Math.floor(e / 3600) % 24) {
            t.push(Math.floor(e / 3600) % 24)
        }
        t.push(Math.floor(e / 60) % 60);
        t.push(Math.floor(e % 60));
        t = t.join(":");
        if (i.timeFormatType == 1) {
            t = t.replace(/(:|^)([0-9])(?=:|$)/g, "$10$2")
        }
        return t
    }
    function r() {
        return document.fullscreenElement || document.mozFullScreen || document.webkitIsFullScreen
    }
    function o(e) {
        e = e.toLowerCase().split("?")[0];
        var i = e.substring(e.lastIndexOf(".") + 1);
        var t = /mp4|m4v|ogg|ogv|m3u8|webm|webmv|wmv|mpeg|mov/gi.test(i) ? "video/": "audio/";
        switch (i) {
        case "mp4":
        case "m4v":
        case "m4a":
            return t + "mp4";
        case "webm":
        case "webma":
        case "webmv":
            return t + "webm";
        case "ogg":
        case "oga":
        case "ogv":
            return t + "ogg";
        case "m3u8":
            return "application/x-mpegurl";
        case "ts":
            return t + "mp2t";
        default:
            return t + i
        }
    }
    function l(e, i) {
        if (e && !i) {
            return o(e)
        } else {
            if (i && ~i.indexOf(";")) {
                return i.substr(0, i.indexOf(";"))
            } else {
                return i
            }
        }
    }
    function d(i, t, n) {
        var s = [];
        var a;
        var r;
        var o;
        if (t.type) {
            if (typeof t.type == "string") {
                s.push({
                    type: t.type,
                    url: n
                })
            } else {
                for (a = 0; a < t.type.length; a++) {
                    s.push({
                        type: t.type[a],
                        url: n
                    })
                }
            }
        } else if (n !== null) {
            s.push({
                type: l(n, i.getAttribute("type")),
                url: n
            })
        } else {
            for (a = 0; a < i.children.length; a++) {
                r = i.children[a];
                if (r.nodeType == 1 && r.tagName.toLowerCase() == "source") {
                    n = r.getAttribute("src");
                    s.push({
                        type: l(n, r.getAttribute("type")),
                        url: n
                    })
                }
            }
        }
        if (e.features.isBustedAndroid) {
            i.canPlayType = function(e) {
                return /video\/(mp4|m4v)/i.test(e) ? "maybe": ""
            }
        }
        if (e.features.isChromium) {
            i.canPlayType = function(e) {
                return /video\/(webm|ogv|ogg)/i.test(e) ? "maybe": ""
            }
        }
        if (e.features.supportsCanPlayType) {
            for (a = 0; a < s.length; a++) {
                if (s[a].type == "video/m3u8" || i.canPlayType(s[a].type).replace(/no/, "") !== "" || i.canPlayType(s[a].type.replace(/mp3/, "mpeg")).replace(/no/, "") !== "" || i.canPlayType(s[a].type.replace(/m4a/, "mp4")).replace(/no/, "") !== "") {
                    o = true;
                    break
                }
            }
        }
        return o
    }
    var u = 0;
    e.players = {};
    e.MediaPlayer = function(i, t) {
        var n = this;
        var s;
        if (i.isInstantiated) {
            return
        } else {
            i.isInstantiated = true
        }
        n.media = i;
        var a = n.media.tagName.toLowerCase();
        if (!/audio|video/.test(a)) return;
        n.isVideo = a === "video";
        n.options = {};
        for (s in e.config) {
            n.options[s] = e.config[s]
        }
        try {
            for (s in t) {
                n.options[s] = t[s]
            }
            var r = JSON.parse(n.media.getAttribute("data-config"));
            for (s in r) {
                n.options[s] = r[s]
            }
        } catch(o) {}
        if (n.options.autoplay) {
            n.options.autoplay = !e.features.isVendorAutoplay
        }
        if (!n.isVideo) {
            n.options.alwaysShowControls = true
        }
        if (n.options.nativeControls || e.features.isVendorControls) {
            n.media.setAttribute("controls", "controls")
        } else {
            var l = n.media.getAttribute("src");
            l = l === "" ? null: l;
            if (d(n.media, n.options, l)) {
                n.id = "zym_" + u++;
                e.players[n.id] = n;
                n.init()
            } else {}
        }
    };
    e.MediaPlayer.prototype = {
        isControlsVisible: true,
        isFullScreen: false,
        setPlayerSize: function(e, t) {
            var n = this;
            var s = i(n.container, "width");
            if (e > s) {
                n.width = s
            }
            if (n.enableAutoSize) {
                var a = n.media.videoWidth;
                var r = n.media.videoHeight;
                if (a && r) {
                    if (Math.abs(n.options.aspectRation - a / r) < .1) {
                        n.options.aspectRation = a / r
                    }
                }
                n.height = parseInt(s / n.options.aspectRation)
            }
            n.container.style.width = n.width + "px";
            n.media.style.height = n.container.style.height = n.height + "px"
        },
        showControls: function() {
            var e = this;
            if (e.isControlsVisible) return;
            e.controls.style.bottom = 0;
            if (e.options.mediaTitle) {
                e.title.style.top = 0
            }
            e.isControlsVisible = true
        },
        hideControls: function() {
            var e = this;
            if (!e.isControlsVisible || e.options.alwaysShowControls) return;
            e.controls.style.bottom = "-45px";
            if (e.options.mediaTitle) {
                e.title.style.top = "-35px"
            }
            e.isControlsVisible = false
        },
        setControlsTimer: function(e) {
            var i = this;
            clearTimeout(i.controlsTimer);
            i.controlsTimer = setTimeout(function() {
                i.hideControls()
            },
            e)
        },
        updateTimeline: function(e) {
            var t = this;
            var n = e !== undefined ? e.target: t.media;
            var s = null;
            var a = i(t.slider, "width");
            if (n.buffered && n.buffered.length > 0 && n.buffered.end && n.duration) {
                s = n.buffered.end(n.buffered.length - 1) / n.duration
            } else if (n.bytesTotal !== undefined && n.bytesTotal > 0 && n.bufferedBytes !== undefined) {
                s = n.bufferedBytes / n.bytesTotal
            } else if (e && e.lengthComputable && e.total !== 0) {
                s = e.loaded / e.total
            }
            if (s !== null) {
                s = Math.min(1, Math.max(0, s));
                t.loaded.style.width = a * s + "px";
                t.media.addEventListener("pause",
                function(e) {
                    setTimeout(function() {
                        t.loaded.style.width = a * s + "px";
                        t.updateTimeline(e)
                    },
                    300)
                })
            }
            if (t.media.currentTime !== undefined && t.media.duration) {
                var r = Math.round(a * t.media.currentTime / t.media.duration);
                t.current.style.width = r + "px";
                t.handle.style.left = r - Math.round(i(t.handle, "width") / 2) + "px"
            }
        },
        updateTime: function() {
            var e = this;
            e.currentTime.innerHTML = a(e.media.currentTime, e.options);
            if (e.options.duration > 1 || e.media.duration > 1) {
                e.durationDuration.innerHTML = a(e.options.duration > 1 ? e.options.duration: e.media.duration, e.options)
            }
        },
        enterFullScreen: function() {
            var t = this;
            t.normalHeight = i(t.container, "height");
            t.normalWidth = i(t.container, "width");
            if (e.features.nativeFullscreenPrefix != "-") {
                t.container[e.features.nativeFullscreenPrefix + "RequestFullScreen"]()
            } else if (e.features.hasOldNativeFullScreen) {
                t.media.webkitEnterFullscreen();
                return
            }
            n(document.documentElement, "zy_fullscreen");
            t.media.style.width = t.container.style.width = "100%";
            t.media.style.height = t.container.style.height = "100%";
            n(t.fullscreenBtn, "zy_unfullscreen");
            t.isFullScreen = true
        },
        exitFullScreen: function() {
            var i = this;
            if (r() || i.isFullScreen) {
                if (e.features.nativeFullscreenPrefix != "-") {
                    document[e.features.nativeFullscreenPrefix + "CancelFullScreen"]()
                } else if (e.features.hasOldNativeFullScreen) {
                    document.webkitExitFullscreen()
                }
            }
            s(document.documentElement, "zy_fullscreen");
            i.media.style.width = i.container.style.width = i.normalWidth + "px";
            i.media.style.height = i.container.style.height = i.normalHeight + "px";
            s(i.fullscreenBtn, "zy_unfullscreen");
            i.isFullScreen = false
        },
        buildContainer: function() {
            var e = this;
            e.container = e.media.parentNode;
            e.container.style.overflow = "hidden";
            e.container.style.height = (e.isVideo ? i(e.container, "width") / e.options.aspectRation: e.options.audioHeight) + "px";
            e.container.innerHTML = '<div class="zy_wrap"></div><div class="zy_controls"></div>' + (e.options.mediaTitle ? '<div class="zy_title">' + e.options.mediaTitle + "</div>": "");
            e.title = e.container.querySelector(".zy_title");
            e.media.setAttribute("preload", e.options.preload);
            e.container.querySelector(".zy_wrap").appendChild(e.media);
            e.controls = e.container.querySelector(".zy_controls");
            if (e.isVideo) {
                e.width = e.options.videoWidth;
                e.height = e.options.videoHeight;
                if (e.width == "100%" && e.height == "auto") {
                    e.enableAutoSize = true
                }
                e.setPlayerSize(e.width, e.height)
            }
        },
        buildPlaypause: function() {
            var e = this;
            var i = document.createElement("div");
            i.className = "zy_playpause_btn zy_play";
            e.controls.appendChild(i);
            i.addEventListener("click",
            function() {
                e.media.isUserClick = true;
                if (e.media.paused) {
                    e.media.play();
                    if (!e.media.paused && !e.options.alwaysShowControls) {
                        e.setControlsTimer(3e3)
                    }
                } else {
                    e.media.pause()
                }
            });
            function t(t) {
                if (e.media.isUserClick || e.options.autoplay) {
                    if ("play" === t) {
                        s(i, "zy_play");
                        n(i, "zy_pause")
                    } else {
                        s(i, "zy_pause");
                        n(i, "zy_play")
                    }
                }
            }
            e.media.addEventListener("play",
            function() {
                t("play")
            });
            e.media.addEventListener("playing",
            function() {
                t("play")
            });
            e.media.addEventListener("pause",
            function() {
                t("pse")
            });
            e.media.addEventListener("paused",
            function() {
                t("pse")
            })
        },
        buildTimeline: function() {
            var t = this;
            var n = document.createElement("div");
            n.className = "zy_timeline";
            n.innerHTML = '<div class="zy_timeline_slider">' + '<div class="zy_timeline_buffering" style="display:none"></div>' + '<div class="zy_timeline_loaded"></div>' + '<div class="zy_timeline_current"></div>' + '<div class="zy_timeline_handle"></div>' + "</div>";
            t.controls.appendChild(n);
            t.slider = n.children[0];
            t.buffering = t.slider.children[0];
            t.loaded = t.slider.children[1];
            t.current = t.slider.children[2];
            t.handle = t.slider.children[3];
            var s = false;
            var a = t.slider.offsetLeft;
            var r = i(t.slider, "width");
            var o = function(e) {
                var i = 0;
                var n;
                if (e.changedTouches) {
                    n = e.changedTouches[0].pageX
                } else {
                    n = e.pageX
                }
                if (t.media.duration) {
                    if (n < a) {
                        n = a
                    } else if (n > r + a) {
                        n = r + a
                    }
                    i = (n - a) / r * t.media.duration;
                    if (s && i !== t.media.currentTime) {
                        t.media.currentTime = i
                    }
                }
            };
            if (e.features.hasTouch) {
                t.slider.addEventListener("touchstart",
                function(e) {
                    s = true;
                    o(e);
                    a = t.slider.offsetLeft;
                    r = i(t.slider, "width");
                    t.slider.addEventListener("touchmove", o);
                    t.slider.addEventListener("touchend",
                    function(e) {
                        s = false;
                        t.slider.removeEventListener("touchmove", o)
                    })
                })
            } else {
                t.slider.addEventListener("mousedown",
                function(e) {
                    s = true;
                    o(e);
                    a = t.slider.offsetLeft;
                    r = i(t.slider, "width");
                    t.slider.addEventListener("mousemove", o);
                    t.slider.addEventListener("mouseup",
                    function(e) {
                        s = false;
                        t.slider.addEventListener("mousemove", o)
                    })
                })
            }
            t.slider.addEventListener("mouseenter",
            function(e) {
                t.slider.addEventListener("mousemove", o)
            });
            t.slider.addEventListener("mouseleave",
            function(e) {
                if (!s) {
                    t.slider.removeEventListener("mousemove", o)
                }
            });
            t.media.addEventListener("timeupdate",
            function(e) {
                t.updateTimeline(e)
            })
        },
        buildTime: function() {
            var e = this;
            var i = document.createElement("div");
            i.className = "zy_time";
            i.innerHTML = '<span class="zy_currenttime">' + a(0, e.options) + "</span>/" + '<span class="zy_duration">' + a(e.options.duration, e.options) + "</span>";
            e.controls.appendChild(i);
            e.currentTime = i.children[0];
            e.durationDuration = i.children[1];
            e.media.addEventListener("timeupdate",
            function() {
                e.updateTime()
            })
        },
        buildFullscreen: function() {
            var i = this;
            if (e.features.nativeFullscreenPrefix != "-") {
                var t = function(e) {
                    if (i.isFullScreen) {
                        if (!r()) {
                            i.exitFullScreen()
                        }
                    }
                };
                document.addEventListener(e.features.nativeFullscreenPrefix + "fullscreenchange", t)
            }
            i.fullscreenBtn = document.createElement("div");
            i.fullscreenBtn.className = "zy_fullscreen_btn";
            i.controls.appendChild(i.fullscreenBtn);
            i.fullscreenBtn.addEventListener("click",
            function() {
                if (e.features.nativeFullscreenPrefix != "-" && r() || i.isFullScreen) {
                    i.exitFullScreen()
                } else {
                    i.enterFullScreen()
                }
            })
        },
        buildDec: function() {
            var i = this;
            var t = document.createElement("div");
            t.className = "dec_loading";
            t.style.display = "none";
            i.container.appendChild(t);
            var n = document.createElement("div");
            n.className = "dec_error";
            n.style.display = "none";
            n.innerHTML = "播放异常";
            i.container.appendChild(n);
            var s = document.createElement("div");
            if (!e.features.isVendorBigPlay) {
                s.className = "dec_play";
                i.container.appendChild(s);
                s.addEventListener("click",
                function() {
                    i.media.isUserClick = true;
                    i.media.play();
                    if (!i.media.paused && !i.options.alwaysShowControls) {
                        i.setControlsTimer(3e3)
                    }
                })
            }
            i.media.addEventListener("play",
            function() {
                if (i.media.isUserClick) {
                    s.style.display = "none";
                    t.style.display = "";
                    i.buffering.style.display = "none"
                }
            });
            i.media.addEventListener("playing",
            function() {
                s.style.display = "none";
                t.style.display = "none";
                i.buffering.style.display = "none";
                n.style.display = "none"
            });
            i.media.addEventListener("seeking",
            function() {
                t.style.display = "";
                s.style.display = "none";
                i.buffering.style.display = ""
            });
            i.media.addEventListener("seeked",
            function() {
                t.style.display = "none";
                i.buffering.style.display = "none"
            });
            i.media.addEventListener("pause",
            function() {
                s.style.display = ""
            });
            i.media.addEventListener("waiting",
            function() {
                t.style.display = "";
                s.style.display = "none";
                i.buffering.style.display = ""
            });
            i.media.addEventListener("error",
            function(e) {
                t.style.display = "none";
                s.style.display = "";
                i.buffering.style.display = "none";
                i.media.pause();
                n.style.display = "";
                if (typeof i.options.error == "function") {
                    i.options.error(e)
                }
            })
        },
        init: function() {
            var i = this;
            var t = ["Container", "Playpause", "Timeline", "Time"];
            if (i.options.enableFullscreen && !e.features.isVendorFullscreen && i.isVideo) {
                t.push("Fullscreen")
            }
            if (i.isVideo) {
                t.push("Dec")
            }
            for (var n = 0; n < t.length; n++) {
                try {
                    i["build" + t[n]]()
                } catch(s) {}
            }
            if (i.isVideo) {
                if (e.features.hasTouch) {
                    i.media.addEventListener("click",
                    function() {
                        if (i.isControlsVisible) {
                            i.hideControls()
                        } else {
                            i.showControls();
                            if (!i.media.paused && !i.options.alwaysShowControls) {
                                i.setControlsTimer(3e3)
                            }
                        }
                    })
                } else {
                    i.media.addEventListener("click",
                    function() {
                        if (i.media.paused) {
                            i.media.play()
                        } else {
                            i.media.pause()
                        }
                    });
                    i.container.addEventListener("mouseenter",
                    function() {
                        i.showControls();
                        if (!i.options.alwaysShowControls) {
                            i.setControlsTimer(3e3)
                        }
                    });
                    i.container.addEventListener("mousemove",
                    function() {
                        i.showControls();
                        if (!i.options.alwaysShowControls) {
                            i.setControlsTimer(3e3)
                        }
                    })
                }
                if (i.options.hideVideoControlsOnLoad) {
                    i.hideControls()
                }
                i.media.addEventListener("loadedmetadata",
                function(e) {
                    if (i.enableAutoSize) {
                        setTimeout(function() {
                            if (!isNaN(i.media.videoHeight)) {
                                i.setPlayerSize()
                            }
                        },
                        50)
                    }
                })
            }
            i.media.addEventListener("play",
            function() {
                var t;
                for (var n in e.players) {
                    t = e.players[n];
                    if (t.id != i.id && i.options.pauseOtherPlayers && !t.paused && !t.ended) {
                        try {
                            t.media.pause()
                        } catch(s) {}
                    }
                }
            });
            window.addEventListener("orientationchange",
            function() {
                setTimeout(function() {
                    i.setPlayerSize()
                },
                500)
            });
            i.media.addEventListener("ended",
            function(e) {
                i.media.currentTime = 0;
                if (i.options.autoLoop) {
                    i.media.play()
                } else {
                    if (i.isVideo) {
                        setTimeout(function() {
                            i.container.querySelector(".dec_loading").style.display = "none"
                        },
                        20)
                    }
                    i.media.pause()
                }
                i.updateTimeline(e)
            });
            i.media.addEventListener("loadedmetadata",
            function(e) {
                i.updateTime()
            });
            if (i.options.autoplay) {
                i.media.isUserClick = false;
                i.media.play()
            }
            if (typeof i.options.success == "function") {
                i.options.success(i.media)
            }
        }
    };
    window.zymedia = function(i, t) {
        if (typeof i === "string") { [].forEach.call(document.querySelectorAll(i),
            function(i) {
                new e.MediaPlayer(i, t)
            })
        } else {
            new e.MediaPlayer(i, t)
        }
    }
})();