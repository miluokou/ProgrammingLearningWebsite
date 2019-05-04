<!--
	入口文件
-->
<?php
/**
 * 
 */
//入口文件，前端请求分发器

require "model/Db.php";
require "model/Model.php";
require "model/CourseModel.php";
require "controller/UserController.php";

/*
 * 当用户点击注册，登录或者讨论区再写这个玩意儿
 */
/*
//假设用c参数代表控制器,a参数代表方法
//isset()函数测试变量是否为null,为null则返回false
$controller = isset($_GET['c'])?$_GET['c']:"User";   
$action = isset($_GET['a'])?$_GET['a']:"getRec";

$controller .="Controller"; //控制器添加后缀

//加载控制器类
 require "controller/".$controller.".php";

//实例化控制器类
$user = new $controller();
//调用控制器方法
$user->$action();
*/

$cm=new CourseModel();
$data=$cm->getRec();
echo json_encode($data);
/*foreach ($data as $value) {
    echo $value['title']."\n";
    echo $value['image']."\n";
}*/
die;

?>

<script>
    // var _hmt = _hmt || []; (function() {
    //     var hm = document.createElement("script");
    //     hm.src = "https://hm.baidu.com/hm.js?77dc9a9d49448cf5e629e5bebaa5500b";
    //     var s = document.getElementsByTagName("script")[0];
    //     s.parentNode.insertBefore(hm, s);
    // })();
</script>
<!DOCTYPE html>
<html xmlns="//www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
    <head>
        <title>
            中国大学MOOC(慕课)_国家精品课程在线学习平台
        </title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="shortcut icon" href="https://edu-image.nosdn.127.net/32a8dd2a-b9aa-4ec9-abd5-66cd8751befb.png?imageView&amp;quality=100"
        />
        <meta http-equiv="x-dns-prefetch-control" content="on" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta itemprop="name" content="中国大学MOOC(慕课)_国家精品课程在线学习平台" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Cache-Control" content="no-cache" max-age="0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Expires" content="0" />
        <meta name="author" content="Netease" />
        <meta name="version" content="1.0" />
        <meta name="keywords" content=""/>
        <meta name="description" itemprop="description" content=""
        />
        <meta name="robots" content="all" />
        <meta name="360-site-verification" content="92d0cfcc97ca254f26fcc0586fa319b6"
        />
        <meta name="sogou_site_verification" content="kFeGWcT6tD" />
        <meta name="baidu-site-verification" content="BYFmFBILbh" />
        <meta name="shenma-site-verification" content="8ef752d11066ef909303c078d32230d6_1456214698">
        <meta property="wb:webmaster" content="981d7778ffe598a6" />
        <meta property="qc:admins" content="2206160020613752351636727736372561577477166045"/>

        <script onerror="javascript:window.errorEventHandler && window.errorEventHandler(event)"
        src="https://mc.stu.126.net/pub/s/libRxJS_7f27cccc1cc810f59b4daed7605cf42b.js">
        </script>
        <script type="text/javascript" src="https://urswebzj.nosdn.127.net/webzj_cdn101/message.js">
        </script>
        <script type="text/javascript" src="https://acstatic-dun.126.net/tool.min.js">
        </script>
        <script type="text/javascript" src = './js/origin.js'></script>
        <script>
            if ("undefined" == typeof EDU) EDU = function() {
                var e = {},
                t = function() {
                    return ! 1
                },
                n = {};
                var i = function(t, n) {
                    return e.toString.call(t) === "[object " + n + "]"
                };
                return function(e, a) {
                    var o = n[e],
                    r = i(a, "Function");
                    if (null != a && !r) o = a;
                    if (r && (null == o || o.__dt__ === !0)) {
                        var s = [];
                        for (var d = 2,
                        c = arguments.length; d < c; d++) s.push(arguments.callee(arguments[d]));
                        var l = {};
                        s.push.call(s, l, {},
                        t, []);
                        var f = a.apply(null, s) || l;
                        if (!o || !i(f, "Object")) o = f;
                        else if (Object.keys) for (var u = Object.keys(f), d = 0, c = u.length, h; d < c; d++) {
                            h = u[d];
                            o[h] = f[h]
                        } else for (var h in f) o[h] = f[h];
                        if (null != o && o.__dt__ === !0) delete o.__dt__
                    }
                    if (null == o) o = {
                        __dt__: !0
                    };
                    n[e] = o;
                    return o
                }
            } ();
            window.__phoneAccountFunctionalitiesSwitch = true;
            var $$$nativeWindowKeys = ["postMessage", "blur", "focus", "close", "frames", "self", "window", "parent", "opener", "top", "length", "closed", "location", "document", "origin", "name", "history", "locationbar", "menubar", "personalbar", "scrollbars", "statusbar", "toolbar", "status", "frameElement", "navigator", "applicationCache", "customElements", "external", "screen", "innerWidth", "innerHeight", "scrollX", "pageXOffset", "scrollY", "pageYOffset", "screenX", "screenY", "outerWidth", "outerHeight", "devicePixelRatio", "clientInformation", "screenLeft", "screenTop", "defaultStatus", "defaultstatus", "styleMedia", "onanimationend", "onanimationiteration", "onanimationstart", "onsearch", "ontransitionend", "onwebkitanimationend", "onwebkitanimationiteration", "onwebkitanimationstart", "onwebkittransitionend", "isSecureContext", "onabort", "onblur", "oncancel", "oncanplay", "oncanplaythrough", "onchange", "onclick", "onclose", "oncontextmenu", "oncuechange", "ondblclick", "ondrag", "ondragend", "ondragenter", "ondragleave", "ondragover", "ondragstart", "ondrop", "ondurationchange", "onemptied", "onended", "onerror", "onfocus", "oninput", "oninvalid", "onkeydown", "onkeypress", "onkeyup", "onload", "onloadeddata", "onloadedmetadata", "onloadstart", "onmousedown", "onmouseenter", "onmouseleave", "onmousemove", "onmouseout", "onmouseover", "onmouseup", "onmousewheel", "onpause", "onplay", "onplaying", "onprogress", "onratechange", "onreset", "onresize", "onscroll", "onseeked", "onseeking", "onselect", "onstalled", "onsubmit", "onsuspend", "ontimeupdate", "ontoggle", "onvolumechange", "onwaiting", "onwheel", "ongotpointercapture", "onlostpointercapture", "onpointerdown", "onpointermove", "onpointerup", "onpointercancel", "onpointerover", "onpointerout", "onpointerenter", "onpointerleave", "onbeforeunload", "onhashchange", "onlanguagechange", "onmessage", "onmessageerror", "onoffline", "ononline", "onpagehide", "onpageshow", "onpopstate", "onrejectionhandled", "onstorage", "onunhandledrejection", "onunload", "performance", "stop", "open", "alert", "confirm", "prompt", "print", "requestAnimationFrame", "cancelAnimationFrame", "requestIdleCallback", "cancelIdleCallback", "captureEvents", "releaseEvents", "getComputedStyle", "matchMedia", "moveTo", "moveBy", "resizeTo", "resizeBy", "getSelection", "find", "getMatchedCSSRules", "webkitRequestAnimationFrame", "webkitCancelAnimationFrame", "btoa", "atob", "setTimeout", "clearTimeout", "setInterval", "clearInterval", "createImageBitmap", "scroll", "scrollTo", "scrollBy", "onappinstalled", "onbeforeinstallprompt", "caches", "crypto", "ondevicemotion", "ondeviceorientation", "ondeviceorientationabsolute", "indexedDB", "webkitStorageInfo", "sessionStorage", "localStorage", "fetch", "onauxclick", "visualViewport", "speechSynthesis", "webkitRequestFileSystem", "webkitResolveLocalFileSystemURL", "openDatabase", "chrome", '__REGULAR_DEVTOOLS_GLOBAL_HOOK__', '$$$nativeWindowKeysCheckMap', '$$$nativeWindowKeys', '$$$globalErrors'];
            var $$$nativeWindowKeysCheckMap = {},
            i = 0,
            l = $$$nativeWindowKeys.length;
            for (; i < l; i++) {
                $$$nativeWindowKeysCheckMap[$$$nativeWindowKeys[i]] = 1;
            }
            window.__globalErrorEvents = [];
            function errorEventHandler(e) {
                window.__globalErrorEvents.push(e);
            }
            function addEvent(el, ev, fn) {
                if (el) {
                    if (el.addEventListener) {
                        el.addEventListener(ev, fn);
                    } else if (el.attachEvent) {
                        el.attachEvent(ev, fn);
                    }
                }
            }
            addEvent(window, 'error', errorEventHandler);
            // delete window.addEvent; // error reported in ie9, why do this?
            
        </script>
        <script onerror="javascript:window.errorEventHandler && window.errorEventHandler(event)"
        src="https://mc.stu.126.net/pub/s/libRegular_4bb7955a19e81cbf93aacd2e9b2e1bca.js">
        </script>
        <script>
            window.gaProduct = "mooc";
            window.urlPrefix = {
                indexPrefix: "/",
                homePrefix: "/home.htm",
                loginPrefix: "/member/login.htm",
                logoutPrefix: "/passport/member/logout.htm",
                searchPrefix: "/search.htm",
                courseListPrefix: "/category/all",
                universityListPrefix: "/university/view/all.htm",
                universityPrefix: "/university/",
                universityPreviewPrefix: "/university/preview/",
                vocationIndexPrefix: "/vemooc",
                courseInfoPrefix: "/course/",
                courseInfoPreviewPrefix: "/course/preview/",
                courseLearnPrefix: "/learn/",
                courseLearnPreviewPrefix: "/learn/preview/",
                courseLearnReviewPrefix: "/learn/review/",
                learnForTeacherPrefix: "/learn/enroll/",
                spocMainPrefix: "/spoc/schoolcloud/index.htm",
                spocCourseInfoPrefix: "/spoc/course/",
                spocCourseLearnPrefix: "/spoc/learn/",
                spocUsityIdPrefix: "/spoc/university.htm?schoolId=",
                spocUniversityListPrefix: "/university/view/all.htm",
                spocUniversityPrefix: "/spoc/university/",
                spocUniversityPreviewPrefix: "/spoc/university/preview/",
                spocMemberPrefix: "/spoc/u/",
                spocMemberPreviewPrefix: "/spoc/u/preview/",
                memberPrefix: "/u/",
                memberPreviewPrefix: "/u/preview/",
                addMemberInfoPrefix: "https://www.icourse163.org/member/addMemberInfo.htm",
                partnerSuperAdminPrefix: "/partnerAdmin/superAdmin.htm",
                partnerEditorAdminPrefix: "/partnerAdmin/editorAdmin.htm",
                columnistAdminPrefix: "/column/management/index.htm",
                adminManagerPrefix: "/collegeAdmin/schoolPanel.htm",
                adminTeacherPrefix: "/collegeAdmin/teacherPanel.htm",
                coursecreatePrefix: "/collegeAdmin/courseCreate.htm",
                adminSetMessagePrefix: "/collegeAdmin/setMessage.htm",
                adminSettingPrefix: "/collegeAdmin/setting.htm",
                adminToolsPrefix: "/collegeAdmin/tools.htm",
                termManagePrefix: "/collegeAdmin/termManage/",
                reviewQuizPrefix: "/review/quiz/{id}.htm",
                reviewHwPrefix: "/review/hw/",
                reviewTrainPrefix: "/review/train/",
                teacherMainEditPrefix: "/user/teacherMainEdit.htm",
                personInfoSettingPrefix: "/user/setting/personInfoEdit.htm",
                accountSettingPrefix: "/user/setting/accountSetting.htm",
                attachmentPrefix: "/homework/attachment.htm",
                titleAttachmentPrefix: "/question/title/attachment.htm",
                notSupportedPrefix: "/common/errors/notSupported.htm",
                helpFrontPrefix: "/help/help.htm",
                helpBackIndexPrefix: "/help/helpIndex.htm",
                helpBackPrefix: "/help/manageHelp.htm",
                couponsSuffix: "/user/myCoupons.htm",
                scholarship2017TeamPrefix: "/scholarship2017/team/team.htm",
                aboutUsPrefix: "/about/aboutus.htm",
                contactUsPrefix: "/about/contactus.htm",
                certApplyPrefix: "/cert/apply.htm",
                certDesignPrefix: "/cert/certDesign/{id}.htm",
                chargeCertDesignPrefix: "/cert/chargeCertDesign/{id}.htm",
                payOrderPrefix: "/pay/order.htm",
                donateCoursePrefix: "/donate/course.htm",
                getTextPrefix: "/resource/getText.htm",
                cdnReportPrefix: 'https://study.163.com/about/cdnReport.htm',
                snsOAuthPrefix: "/passport/sns/doOAuth.htm",
                ursAuthorPrefix: "https://www.icourse163.org/member/ursLogin.htm",
                thirdBindCallbackHref: "https://www.icourse163.org/logingate/urs/bindCallback.htm",
                icourseAuthorPrefix: "https://www.icourse163.org/member/icourseLogin.htm",
                livePrefix: "/live/liveRoom.htm",
                kaoYanAdminManagerPrefix: "/collegeAdmin/postgradExamSchoolPanel.htm",
                kaoyaoOrderPrefix: "/collegeAdmin/kaoyanOrder.htm",
                columnOrderPrefix: "/collegeAdmin/columnOrder.htm",
                orderServicePrefix: "/order/service.htm"
            };
            window.moocHost = "icourse163.org";
            window.moocHref = "index.html";
            window.moocStaticHost = "mc.stu.126.net";
            window.callAppDownloadHref = "https://www.icourse163.org/client/callAppDownload.htm";
            window.NEJ_CONF = {
                clipboard: '//mc.stu.126.net/res/swf/nej_clipboard.swf?0eba83544b107d7207d8936baab41283'
            };

            window.serverTimeDiff = new Date().getTime() - 1556323644865;
            window.currentPageName = "index";
            window.imageUrlMap = {
                loading_circle_gif: "//mc.stu.126.net/res/images/ui/loading_circle.gif?00ef871b291bc03a497d608a5bd8ec99",
                share_sprite: "//mc.stu.126.net/res/images/ui/shareUI.png?e2653a364a790663aed6c6ece19fd83a",
                ui_sprite: "//mc.stu.126.net/res/images/ui/ui_sprite.png?5f7eedcf69b8a05d3ed53b4c1918de1c",
                forum_icon_sprite: "//mc.stu.126.net/res/images/ui/forum_icon.png?b12539c2400cc76ad30262bdf7e12cbd",
                image_upload_swf: "//mc.stu.126.net/res/swf/imageUpload.swf?884965992b66cee07fb945929ac4b00f",
                image_pdf_swf: "//mc.stu.126.net/res/swf/pdfReader.swf?74ddf86a5d97e5af891638154a0989d1",
                image_video_swf: "//mc.stu.126.net/res/swf/moocPlayer.swf",
                img_upd_select_swf: "//mc.stu.126.net/res/swf/DragCutUpload_mooc.swf?ac94fb92d65cb0f12a93a8ca00fa3df9",
                img_default_big_head: "//edu-image.nosdn.127.net/457BE69DFFF1A6157EAF6D44EA2D8662.png?imageView&thumbnail=180y180&quality=100",
                img_default_small_head: "//mc.stu.126.net/res/images/common/headImg/small.jpg?06517f5e438da035a4016abd8e661d2f",
                img_default_unviersity_1: "//mc.stu.126.net/res/images/common/default/university1.png?55bbec907070a55ee4d333bc645445d1",
                img_default_unviersity_2: "//mc.stu.126.net/res/images/common/default/university2.png?a00032f80fa68a6ea6135ee8df9ed7a4",
                img_default_unviersity_3: "//mc.stu.126.net/res/images/common/default/university3.png?63f350451049f7803b014abab9408a4d",
                img_default_unviersity_cert: "//mc.stu.126.net/res/images/common/default/universityCert.png?4c209d5c5ebddc91e80fcf34795ddae1",
                img_default_course: "//edu-image.nosdn.127.net/65d6907b-b4ff-4409-bbcc-e4dcc285e00b.jpg?imageView&quality=100",
                img_default_signature: "//mc.stu.126.net/res/images/common/signature_example.png?a15f9c690bfd58771de32d5c483dea59",
                img_step_score_mail: "//mc.stu.126.net/res/images/common/step_score_mail.jpg?201e015a404c3c7aef85de694a4b6622"
            };
            window.swfUrlMap = {
                CloudPlayer: "//mc.stu.126.net/res/swf/eduPlayer.swf?be877349a3014ffd45d3be0ba2633556",
                cloudPlayerUI: "//mc.stu.126.net/res/swf/cloudPlayerUI.swf?83eaf96a4fa93df776e734c42d59ecc6"
            }
            window.ursBasicConfig = {
                newCDN: 1,
                // 代表使用的CDN是连通性更好的SNI域名
                version: 3,
                // 代表版本3
                productKey: 'a3b396bb2f589bbc1151f0fa61d14747',
                product: 'imooc',
                promark: 'cjJVGQM',
                mode: 'popup',
                //product : 'urs',
                //promark : 'RFYwJDP',
                //productkey: 'bcaddd8933a501880ebef6b951fe8f8a',
                host: 'www.icourse163.org',
                cookieDomain: 'icourse163.org',
                regCookieDomain: 'icourse163.org'
            };
            window.URSLoginConfig = {
                newCDN: 1,
                // 代表使用的CDN是连通性更好的SNI域名
                version: 3,
                // 代表版本3
                mode: 'popup',
                product: 'imooc',
                productKey: 'a3b396bb2f589bbc1151f0fa61d14747',
                promark: 'cjJVGQM',
                host: 'www.icourse163.org',
                cookieDomain: 'icourse163.org',
                skin: 3,
                page: 'login',
                needUnLogin: 1,
                defaultUnLogin: 1,
                placeholder: {
                    account: '常用邮箱或网易邮箱',
                    pwd: '密码'
                },
                needPrepare: 1,
                regUrl: '//zc.reg.163.com/regInitialized?pd=imooc&pkid=YeaYYzQ&pkht=www.icourse163.org',
                coverBackground: "background:-webkit-radial-gradient(center,rgba(0,0,0,0.3),#000 75%);",
                single: 1,
                cssDomain: '//cmc.stu.126.net/u/css/cms/',
                cssFiles: 'urs4moocweb.css',
                frameSize: {
                    'width': 380,
                    'height': 282
                },
                logincb: function(cb) {}
            };
        </script>
        <script type="text/javascript">
            window.isMobilePhone = "false";
            window.gaTrackPageview = '_trackPageview';
            window.gaTrackEvent = '_trackEvent';
            window.gaqStr = '_gaq';
            window.m_shareUrl = "";
            var _ua = 'UA-35176345-3';
            // var _ua = 'UA-35176345-8'; //fix http://jira.netease.com/browse/MOOC-3603
            window._gaq = [];
            window._gaq.push(['_setAccount', _ua], ['_setLocalGifPath', '/' + _ua + '/__utm.gif'], ['_setLocalRemoteServerMode']);
            window._gaq.push(['_addOrganic', 'm.baidu.com', 'word']);
            window._gaq.push(['_addOrganic', 'soso', 'search']);
            window._gaq.push(['_addOrganic', 'sogou', 'query']);
            window._gaq.push(['_addOrganic', 'haosou', 'q']);
            window._gaq.push(['_addOrganic', 'youdao', 'q']);
            window._gaq.push(['_addOrganic', 'chinaso', 'q']);
            window._gaq.push(['_addOrganic', 'zhongsou', 'w']);
            window._gaq.push(['_addOrganic', 'm.sp.sm.cn', 'w']); (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = '//wr.da.netease.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <!--[if lt IE 9]>
            <script onerror="javascript:window.errorEventHandler && window.errorEventHandler(event)"
            src="//mc.stu.126.net/pub/s/libH5Shiv_f4d9dea8e0ae8455500862bbb874d63c.js">
            </script>
        <![endif]-->
        <script src="https://hubble-js-bucket.nosdn.127.net/DATracker.sync.1.6.11.js">
        </script>
        <script>
            DATracker.init("MA-A976-948FFA05E931", {
                truncateLength: 255,
                persistence: "localStorage",
                cross_subdomain_cookie: false,
                use_app_track: true,
                heatmap: {
                    isTrackLink: true,
                    collect_all: true,
                    collect_url: function() {
                        //使用场景如：
                        //学习页面不再采集
                        if (location.href.indexOf("/learn/") > -1) {
                            return false;
                        } else {
                            return true;
                        }
                    },
                    // 自定义设置采集的元素的路径，需返回该元素的path，
                    // 该路径是热力图渲染时查找元素所需，请正确设置
                    set_collect_element_path: function(targetElement, heatmap) {
                        try {
                            var pathMap = {
                                "a:nth-child": "ANC",
                                "aside:nth-child": "ASNC",
                                "article:nth-child": "ATNC",
                                "button:nth-child": "BNC",
                                "code:nth-child": "CDNC",
                                "canvas:nth-child": "CVNC",
                                "div:nth-child": "DVNC",
                                "footer:nth-child": "FTNC",
                                "form:nth-child": "FMNC",
                                "frame:nth-child": "FRNC",
                                "header:nth-child": "HDNC",
                                "iframe:nth-child": "IFNC",
                                "img:nth-child": "IGNC",
                                "input:nth-child": "IPNC",
                                "label:nth-child": "LBNC",
                                "li:nth-child": "LINC",
                                "p:nth-child": "PNC",
                                "section:nth-child": "SCNC",
                                "span:nth-child": "SPNC",
                                "table:nth-child": "TBNC",
                                "tbody:nth-child": "TYNC",
                                "td:nth-child": "TDNC",
                                "textarea:nth-child": "TANC",
                                "tfoot:nth-child": "TFNC",
                                "th:nth-child": "THNC",
                                "ul:nth-child": "ULNC"
                            }
                            var selector = function(targetElement) {
                                var i = (targetElement.parentNode && 9 == targetElement.parentNode.nodeType) ? -1 : heatmap.getDomIndex(targetElement);
                                var pathStr = targetElement.tagName.toLowerCase() + (~i ? ':nth-child(' + (i + 1) + ')': '');
                                for (let key in pathMap) {
                                    var re = new RegExp(key, 'g');
                                    pathStr = pathStr.replace(re, pathMap[key]);
                                }
                                return pathStr;
                            };
                            var getDomSelector = function(targetElement, arr) {
                                if (!targetElement || !targetElement.parentNode || !targetElement.parentNode.children) {
                                    return false;
                                }
                                arr = arr && arr.join ? arr: [];
                                var name = targetElement.nodeName.toLowerCase();
                                if (!targetElement || name === 'body' || 1 != targetElement.nodeType) {
                                    arr.unshift('body');
                                    return arr.join(' > ');
                                }
                                arr.unshift(selector(targetElement));
                                return getDomSelector(targetElement.parentNode, arr);
                            }
                            return getDomSelector(targetElement);
                        } catch(error) {}
                    }
                }
            }) document.addEventListener('click',
            function(e) {
                var $node = e.target;
                try {
                    if ($node.classList.contains('ga-click')) {
                        //替换打点
                        var params = getGaParams($node);
                        console.log('hubble打点成功');
                        DATracker.track(params.data_cate, params);
                        return;
                    }
                    var $parent = $node.parentNode
                    while ($parent.nodeName != 'BODY') {
                        if ($parent.classList.contains('ga-click')) {
                            var _params = getGaParams($parent);
                            console.log('hubble打点成功');
                            DATracker.track(_params.data_cate, _params);
                            return;
                        } else {
                            $parent = $parent.parentNode;
                        }
                    }
                } catch(e) {
                    console.log(e);
                }
            });
            function getGaParams(node) {
                var obj = {};
                obj.user_id = window.webUser && window.webUser.id;
                obj.data_cate = node.getAttribute('data-cate') || '';
                obj.data_action = node.getAttribute('data-action') || '';
                obj.data_label = node.getAttribute('data-label') || '';
                return obj;
            }
        </script>
        <link rel="stylesheet" href="https://mc.stu.126.net/pub/s/pt_web_index.web_c0180fe84ed88b5837e05d6bb348deca.css"/>
        <!-- 4月29好 添加的 样式调整首页右上角的登陆显示问题-->
        <style type="text/css">
        	.m-navlinks .unlogin {
			    width: 90px;
			    text-align: right;
			}
        </style>
    </head>
    
    
    <body>
        <div id="j-activityBanner" class="f-dn ga-click" data-cate="小黄条" data-action="点击"
        style="position:relative;z-index:300;">
        </div>
        <div id="j-activityRightBanner" class="ga-click" style="position:fixed;z-index:300;text-align:right;right: 16px;bottom:143px;">
        </div>
        <div id="j-appbanner" style="position:relative;z-index:300;">
        </div>
        <div id="g-container">
            <div id="j-indexNav-bar" class="m-indexNav-bar">
                <div class="web-nav-container">
                    <div class="m-navTop-func">
                        <div class="m-navTop-func-i">
                            <div class="u-navLogin-container">
                                <div class="u-navLogin-logo new-nav-spoc-logo">
                                    <a href="index.html" target="_top">
                                        <img width="190" height="28" src="https://edu-image.nosdn.127.net/C0124E0336721FF65563B76A16A8143F.png?imageView&amp;thumbnail=190y28&amp;quality=100">
                                    </a>
                                </div>
                                <div class="e-hover-source u-navLogin-course">
                                    <a href="category/all.html" target="_top">
                                        <span class="nav">
                                            课程
                                        </span>
                                    </a>
                                    <div class="e-hover-target">
                                        <div class="e-hover-arrow">
                                        </div>
                                        <div class="e-hover-arrow-border">
                                        </div>
                                        <div class="e-hover-content">
                                            <div class="j-nav-CateBox u-cateBox-container">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-navLogin-school">
                                    <a href="university/view/all.htm" target="_top">
                                        <span class="nav">
                                            名校
                                        </span>
                                    </a>
                                </div>
                                <div class="u-navLogin-discuss">
                                    <a href="https://kaoyan.icourse163.org" target="_top">
                                        <span class="nav">
                                            2020考研
                                        </span>
                                    </a>
                                </div>
                                <div class=" u-navLogin-cloud">
                                    <a href="spoc/schoolcloud/index.htm" target="_blank">
                                        <span class="nav">
                                            学校云
                                        </span>
                                    </a>
                                </div>
                                <div class="j-kaoyan-link u-navLogin-kaoyan">
                                    <a href="topics/topmszl/index.html" target="_blank">
                                        <span class="nav">
                                            名师专栏
                                        </span>
                                    </a>
                                </div>
                                <div class="j-latest-mark u-navLogin-mark f-f0 f-dn">
                                    <span>
                                        新
                                    </span>
                                </div>
                                <div class="web-nav-right-part">
                                    <div class="u-navLogin-app">
                                        <img width="13" height="21" src="https://edu-image.nosdn.127.net/03CC83FA97B35119DFB8C772754765CC.png?imageView&amp;thumbnail=13y22&amp;quality=100">
                                    </div>
                                    <div class="e-hover-source u-navLogin-appText">
                                        <a href="mobile-from=navibar&amp;mobiletopbar=hidden.htm" target="_top">
                                            <span class="nav">
                                                客户端
                                            </span>
                                        </a>
                                        <div class="e-hover-target">
                                            <div class="e-hover-arrow">
                                            </div>
                                            <div class="e-hover-arrow-border">
                                            </div>
                                            <div class="e-hover-content">
                                                <div class="u-app-download-container">
                                                    <div class="u-app-tip">
                                                        <span>
                                                            扫码下载官方APP
                                                        </span>
                                                    </div>
                                                    <div class="u-app-qrcode">
                                                        <img width="140" height="140" src="https://img-ph-mirror.nosdn.127.net/Rg6muO26iMOFWx9vwEHC-g==/6630234335885341999.png">
                                                    </div>
                                                    <div class="u-app-iphone-link">
                                                        <a href="https://itunes.apple.com/cn/app/id977883304" target="_blank">
                                                        </a>
                                                    </div>
                                                    <div class="u-app-android-link">
                                                        <a href="https://study.163.com/pub/ucmooc/ucmooc-android-official.apk"
                                                        target="_blank">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-navLogin-searchFunc">
                                        <div class="u-navLogin-searchFunc-i">
                                            <div class="j-search-box u-search-container">
                                                <div class="j-input u-search-input">
                                                </div>
                                                <div class="u-search-icon">
                                                    <span class="u-icon-search2 j-searchBtn">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-navLogin-loginBox">
                                        <div class="u-navLogin-loginBox-i">
                                            <div class="m-navlinks" id='j-topnav'>
                                                <div class="unlogin">
                                                    <a class="f-f0 navLoginBtn">
                <!-- 登录-->     登录              <a href="view/index2.php">登录</a>
                                                        <span class="huo">
                                                            &nbsp;&nbsp;|&nbsp;&nbsp;
                                                        </span>
                <!-- 注册-->     注册              <a href="view/index2.php">注册</a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="g-body">
                <div class="p-index-container">
                    <div class="p-index-headFunc">
                        <div class="p-index-headFunc-i">
                            <div class="m-head-container">
                                <div class="m-head-category ga-click" data-cate="首页_头部导航">
                                    <a href="category/all.html" target="_top">
                                        <span>
                                            课程
                                        </span>
                                    </a>
                                </div>
                                <div class="m-head-logo">
                                    <a href="index.html" target="_blank">
                                        <img width="241" height="34" src="https://edu-image.nosdn.127.net/B34DC36428D2D51B8EF5EE2C83CE9BF2.png?imageView&amp;thumbnail=241y34&amp;quality=100">
                                    </a>
                                </div>
                                <div class="m-head-school ga-click" data-cate="首页_头部导航">
                                    <a href="university/view/all.htm" target="_top">
                                        <span>
                                            名校
                                        </span>
                                    </a>
                                </div>
                                <div class="m-head-discuss ga-click" data-cate="首页_头部导航">
                                    <a href="https://kaoyan.icourse163.org" target="_top">
                                        <span>
                                            2020考研
                                        </span>
                                    </a>
                                </div>
                                <div class="m-head-link-to-geek ga-click">
                                    <a href="https://ke.youdao.com/?outVendor=zw_mooc_tab_0313_pczz" target="_blank">
                                        <span>
                                            有道精品课
                                        </span>
                                    </a>
                                </div>
                                <div class="m-head-link-to-study163 ga-click">
                                    <a href="https://study.163.com/" target="_blank">
                                        <span>
                                            网易云课堂
                                        </span>
                                    </a>
                                </div>
                                <div class="m-head-right-more e-hover-source">
                                    <a>
                                        <span class="e-hover-source">
                                            更多课程频道
                                        </span>
                                    </a>
                                    <div class="e-hover-target">
                                        <div class="e-hover-arrow">
                                        </div>
                                        <div class="e-hover-arrow-border">
                                        </div>
                                        <div class="e-hover-content">
                                            <div class="u-more-course-container">
                                                <div class="ga-click u-more-course-1" data-cate="首页_头部导航" data-label="topics/CAPmooc2018summer.html">
                                                    <a href="topics/CAPmooc2018summer.html" target="_blank">
                                                        <span>
                                                            大学先修课
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="ga-click u-more-course-2" data-cate="首页_头部导航" data-label="//www.icourse163.org/vemooc">
                                                    <a href="vemooc.html" target="_blank">
                                                        <span>
                                                            职业教育课程
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="ga-click u-more-course-3" data-cate="首页_头部导航" data-label="//www.icourse163.org/topics/teachermooc/">
                                                    <a href="topics/teachermooc/index.html" target="_blank">
                                                        <span>
                                                            教师系列MOOC
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-head-cloud ga-click " data-cate="首页_头部导航">
                                    <a href="spoc/schoolcloud/index.htm" target="_blank">
                                        <span>
                                            学校云
                                        </span>
                                    </a>
                                </div>
                                <div class="m-head-searchPA">
                                    <div class="m-head-searchPA-i">
                                        <div class="m-headSearchPA-container">
                                            <div class="m-head-app">
                                                <img width="13" height="22" src="https://edu-image.nosdn.127.net/75298CEB06474FD85CBC95D208B44F8E.png?imageView&amp;thumbnail=14y22&amp;quality=100">
                                            </div>
                                            <div class="e-hover-source m-head-app-text">
                                                <a href="mobile-from=navibar&amp;mobiletopbar=hidden.htm" target="_top">
                                                    <span class="e-hover-source">
                                                        客户端
                                                    </span>
                                                </a>
                                                <div class="e-hover-target">
                                                    <div class="e-hover-arrow">
                                                    </div>
                                                    <div class="e-hover-arrow-border">
                                                    </div>
                                                    <div class="e-hover-content">
                                                        <div class="u-app-download-container">
                                                            <div class="u-app-tip">
                                                                <span>
                                                                    扫码下载官方APP
                                                                </span>
                                                            </div>
                                                            <div class="u-app-qrcode">
                                                                <img width="140" height="140" src="https://img-ph-mirror.nosdn.127.net/Rg6muO26iMOFWx9vwEHC-g==/6630234335885341999.png">
                                                            </div>
                                                            <div class="ga-click u-app-iphone-link" data-cate="首页_头部导航" data-action="ios下载点击">
                                                                <a href="https://itunes.apple.com/cn/app/id977883304" target="_blank">
                                                                </a>
                                                            </div>
                                                            <div class="ga-click u-app-android-link" data-cate="首页_头部导航" data-action="android下载点击">
                                                                <a href="https://study.163.com/pub/ucmooc/ucmooc-android-official.apk"
                                                                target="_blank">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="u-head-searchFunc">
                                                <div class="u-head-searchFunc-i">
                                                    <div class="j-search-box u-search-container">
                                                        <div class="j-input u-search-input">
                                                        </div>
                                                        <div class="ga-click u-search-icon" data-cate="首页_头部导航" data-action="搜索icon点击">
                                                            <span class="u-icon-search2 j-searchBtn">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-head-personFunc">
                                                <div class="m-head-personFunc-i">
                                                    <div class="m-navlinks" id='j-topnav'>
                                                        <div class="unlogin">
                                                            <a class="f-f0 navLoginBtn">
                                                                     <a href="view/index2.php">登录</a> 
                                                                <span class="huo">
                                                                    &nbsp;&nbsp;|&nbsp;&nbsp;
                                                                </span>
                                                                     <a href="view/index2.php">注册</a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-head-kaoyan ga-click j-kaoyan-link" data-cate="首页_头部导航">
                                    <a href="topics/topmszl/index.html" target="_top">
                                        <span>
                                            名师专栏
                                        </span>
                                    </a>
                                </div>
                                <div class="m-head-mark j-latest-mark f-f0 f-dn">
                                    <span>
                                        新
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="j-slideTop-slideBox-wrapper" class="p-index-slideFunc">
                        <div class="p-index-slideFunc-i">
                            <div class="m-slideTop-container">
                                <div class="m-slideTop-slideBox" id="j-slideTop-slideBox">
                                </div>
                                <div class="m-slideTop-cateFunc">
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="计算机0">
                                            <a href="category/computer.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-computer">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        计算机
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="经济学1">
                                            <a href="category/ECO.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-economics">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        经济学
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="管理2">
                                            <a href="category/management%20theory.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-management">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        管理
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="考研3">
                                            <a href="https://kaoyan.icourse163.org/course/index.htm" target="_blank">
                                                <div class="u-cateItem-icon u-icon-scholar">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        考研
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="理工补习4">
                                            <a href="topics/houboshimooc_kysp.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-teaching-method">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        理工补习
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="四六级5">
                                            <a href="https://kaoyan.icourse163.org/course/category/siliuji.htm" target="_blank">
                                                <div class="u-cateItem-icon u-icon-post">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        四六级
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="心理学6">
                                            <a href="category/psychology.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-psychology">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        心理学
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="外语7">
                                            <a href="category/foreign-language.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-foreign-language">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        外语
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="更多8">
                                            <a href="" target="_blank">
                                                <div class="u-cateItem-icon u-icon-more2">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        更多
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="文学文化9">
                                            <a href="category/literature.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-literature">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        文学文化
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="艺术设计10">
                                            <a href="category/art-design.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-art">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        艺术设计
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="历史11">
                                            <a href="category/historiography.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-history">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        历史
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="哲学12">
                                            <a href="category/philosophy.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-philosophy">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        哲学
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="法学13">
                                            <a href="category/law.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-law">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        法学
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="工学14">
                                            <a href="category/engineering.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-engineering">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        工学
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="理学15">
                                            <a href="category/science.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-science">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        理学
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="医药卫生16">
                                            <a href="category/biomedicine.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-biomedicine">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        医药卫生
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="农林园艺17">
                                            <a href="category/agriculture.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-agriculture">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        农林园艺
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-slideTop-cateFunc-f">
                                        <div class="u-cateItem-container" data-cate="首页_头部导航" data-action="分类点击"
                                        data-label="教育教学18">
                                            <a href="category/teaching-method.html" target="_blank">
                                                <div class="u-cateItem-icon u-icon-teaching-method">
                                                </div>
                                                <div class="u-cateItem-txt">
                                                    <span class="f-thide">
                                                        教育教学
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-slideTop-personFunc">
                                    <div class="m-slideTop-personFunc-f">
                                        <div class="u-person-container">
                                            <div class="u-person-title">
                                                <span>
                                                    免费学习名校名师的精品课程
                                                </span>
                                            </div>
                                            <div class="u-person-pic">
                                                <img width="83" height="83" src="https://edu-image.nosdn.127.net/49E89BEA3F1B3F1AC788F5F94C4A457F.png?imageView&amp;thumbnail=83y83&amp;quality=100">
                                            </div>
                                            <div class="navLoginBtn u-person-login" data-cate="首页_个人面板框">
                                                <span class="m-index-person-loginBtn">
                                                    登录
                                                </span>
                                            </div>
                                            <div class="u-person-word">
                                                <span>
                                                    网易和高等教育出版社出品
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-index-schoolFunc">
                        <div class="p-index-schoolFunc-i">
                            <div class="u-topSchool-container">
                                <div class="u-topSchool-tip" data-cate="首页_合作高校" data-action="全部学校" data-label="//www.icourse163.org/university/view/all.htm">
                                    <a href="university/view/all.htm" target="_blank">
                                        <span>
                                            全部319所合作高校
                                        </span>
                                    </a>
                                </div>
                                <div class="u-topSchool-func">
                                    <div class="u-topSchool-func-f">
                                        <div class="f-fl u-schoolItem-container">
                                            <div class="u-schoolItem-image" data-cate="首页_合作高校 " data-action="学校点击"
                                            data-label="北京大学https://www.icourse163.org/university/pku#/c">
                                                <a href="university/pku.html#/c" target="_blank">
                                                    <img width="110" height="31" src="https://edu-image.nosdn.127.net/0E1CA0462AD847E2F1ECE099FB9F658D.png?imageView&amp;thumbnail=220y62&amp;quality=100"
                                                    alt="北京大学">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-topSchool-func-f">
                                        <div class="f-fl u-schoolItem-container">
                                            <div class="u-schoolItem-image" data-cate="首页_合作高校 " data-action="学校点击"
                                            data-label="浙江大学https://www.icourse163.org/university/ZJU#/c">
                                                <a href="university/ZJU.html#/c" target="_blank">
                                                    <img width="110" height="31" src="https://edu-image.nosdn.127.net/AEE98EB739A46AB06C02307E236069C7.png?imageView&amp;thumbnail=220y62&amp;quality=100"
                                                    alt="浙江大学">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-topSchool-func-f">
                                        <div class="f-fl u-schoolItem-container">
                                            <div class="u-schoolItem-image" data-cate="首页_合作高校 " data-action="学校点击"
                                            data-label="南京大学https://www.icourse163.org/university/NJU#/c">
                                                <a href="university/NJU.html#/c" target="_blank">
                                                    <img width="110" height="31" src="https://edu-image.nosdn.127.net/E0B01352DE274FFEB5D1D8AC87865E8D.png?imageView&amp;thumbnail=220y62&amp;quality=100"
                                                    alt="南京大学">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-topSchool-func-f">
                                        <div class="f-fl u-schoolItem-container">
                                            <div class="u-schoolItem-image" data-cate="首页_合作高校 " data-action="学校点击"
                                            data-label="武汉大学https://www.icourse163.org/university/whu#/c">
                                                <a href="university/whu.html#/c" target="_blank">
                                                    <img width="110" height="31" src="https://edu-image.nosdn.127.net/5CC1B174CC3720F04AD96049ABCAC33D.png?imageView&amp;thumbnail=220y62&amp;quality=100"
                                                    alt="武汉大学">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-topSchool-func-f">
                                        <div class="f-fl u-schoolItem-container">
                                            <div class="u-schoolItem-image" data-cate="首页_合作高校 " data-action="学校点击"
                                            data-label="哈尔滨工业大学https://www.icourse163.org/university/HIT#/c">
                                                <a href="university/HIT.html#/c" target="_blank">
                                                    <img width="110" height="31" src="https://edu-image.nosdn.127.net/4660A53B645D7E5D09860BE200E2BC02.png?imageView&amp;thumbnail=220y62&amp;quality=100"
                                                    alt="哈尔滨工业大学">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-index-recCourseFunc">
                        <div class="p-index-recCourseFunc-i">
                            <div class="m-recCourse-container">
                                <div class="m-recCourse-title">
                                    <span>
                                        推荐课程
                                    </span>
                                </div>
                                <div class="m-recCourse-cardList" id="j-index-recommend-course">
                                    <!-- 推荐课程开始 -->
                                    <div class="m-recCourse-cardList" id="j-index-recommend-course">
                                        <div class="ux-slider-slider-wrapper f-pr" style="width: 1276px; height: 275px;">
                                            <!--Regular if4-->
                                            <div class="ux-scroll-container" style="width: 1276px; height: 275px;">
                                                <div class="ux-scroll-box f-pr" style="width: 2560px; left: 0px;">
                                                    <!--inlcude-->
                                                    <!--Regular list-->
                                                    <!--Regular list-->
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="中国慕课大会——识变 应变 求变点击" data-label="//www.icourse163.org/course/icourse-1205948801">
                                                        <a href="//www.icourse163.org/course/icourse-1205948801" target="_blank"
                                                        class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if27-->
                                                                <span class="u-courseCardWithTime-new">
                                                                    新课
                                                                </span>
                                                                <!--Regular if28-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/002c83e6786c462c9363ced33f767933.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    中国慕课大会——识变 应变 求变
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    爱课程
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    深入推进教育理念、教学内容、教育教学模式与方法的深刻变革
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if29-->
                                                                    <!--Regular if30-->
                                                                    <!--Regular if31-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第3周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;3237
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="神话与神话研究点击" data-label="//www.icourse163.org/course/PKU-1205721816">
                                                        <a href="//www.icourse163.org/course/PKU-1205721816" target="_blank" class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if32-->
                                                                <span class="u-courseCardWithTime-new">
                                                                    新课
                                                                </span>
                                                                <!--Regular if33-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/a94e43a0c126437ab13d64568a0477df.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    神话与神话研究
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    北京大学
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    掌握神话的基本知识和神话研究的基本理论、思路和方法
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if34-->
                                                                    <!--Regular if35-->
                                                                    <!--Regular if36-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第2周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;5279
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="VR教育资源快速开发与应用点击" data-label="//www.icourse163.org/course/gxtc-1003542130">
                                                        <a href="//www.icourse163.org/course/gxtc-1003542130" target="_blank"
                                                        class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if37-->
                                                                <!--Regular if38-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/75b671f136c647f9b32cd190420d2066.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    VR教育资源快速开发与应用
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    南宁师范大学
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    激发学习者的想象力和创造力，实现创新性学习。
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if39-->
                                                                    <!--Regular if40-->
                                                                    <!--Regular if41-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第2周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;3227
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="生理学实验点击" data-label="//www.icourse163.org/course/PKU-1205902801">
                                                        <a href="//www.icourse163.org/course/PKU-1205902801" target="_blank" class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if42-->
                                                                <span class="u-courseCardWithTime-new">
                                                                    新课
                                                                </span>
                                                                <!--Regular if43-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/3a2221e6ad4f464894630b7266b510af.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    生理学实验
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    北京大学
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    观察记录生理学现象，验证经典和基本的生理学规律
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if44-->
                                                                    <!--Regular if45-->
                                                                    <!--Regular if46-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第3周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;1126
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="正说科举考试制度点击" data-label="//www.icourse163.org/course/NCU-1205895801">
                                                        <a href="//www.icourse163.org/course/NCU-1205895801" target="_blank" class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if47-->
                                                                <span class="u-courseCardWithTime-new">
                                                                    新课
                                                                </span>
                                                                <!--Regular if48-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/bb8d1766b67d41ee9897167c803a2fa7.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    正说科举考试制度
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    南昌大学
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    趣味系统讲解科举考试
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if49-->
                                                                    <!--Regular if50-->
                                                                    <!--Regular if51-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第2周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;447
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="从创意到创业点击" data-label="//www.icourse163.org/course/HUNNU-1003719006">
                                                        <a href="//www.icourse163.org/course/HUNNU-1003719006" target="_blank"
                                                        class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if52-->
                                                                <!--Regular if53-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/7bfc0a9409564a99906a5e3d49e5dcc0.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    从创意到创业
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    湖南师范大学
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    案例紧跟潮流的创业课
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if54-->
                                                                    <!--Regular if55-->
                                                                    <!--Regular if56-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第7周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;1697
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="女子防身术点击" data-label="//www.icourse163.org/course/NCU-1205811824">
                                                        <a href="//www.icourse163.org/course/NCU-1205811824" target="_blank" class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if57-->
                                                                <!--Regular if58-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/e465c321c0804d178d1ef3f769536c27.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    女子防身术
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    南昌大学
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    有效的防范危险、应对侵害、逃脱困境
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if59-->
                                                                    <!--Regular if60-->
                                                                    <!--Regular if61-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第5周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;7414
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="会计学基础点击" data-label="//www.icourse163.org/course/PKU-1002701018">
                                                        <a href="//www.icourse163.org/course/PKU-1002701018" target="_blank" class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if62-->
                                                                <!--Regular if63-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/24d37b6e260740aa8b7b0fb4b4145d9b.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    会计学基础
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    北京大学
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    学习会计语言，读懂企业这本书
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if64-->
                                                                    <!--Regular if65-->
                                                                    <!--Regular if66-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第5周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;18764
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="金匮要略点击" data-label="//www.icourse163.org/course/XMU-1205884801">
                                                        <a href="//www.icourse163.org/course/XMU-1205884801" target="_blank" class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if67-->
                                                                <!--Regular if68-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/d82c025f79274bc191620e85ad56ebdc.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    金匮要略
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    厦门大学
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    解读经典原文、感受中医精髓
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if69-->
                                                                    <!--Regular if70-->
                                                                    <!--Regular if71-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第5周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;5120
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="u-courseCardWithTime-container  f-fl f-transition ga-click f-scaleSubImg11"
                                                    data-cate="首页_推荐课程" data-action="公文写作规范点击" data-label="//www.icourse163.org/course/HLJU-1002839012">
                                                        <a href="//www.icourse163.org/course/HLJU-1002839012" target="_blank"
                                                        class="u-courseCardWithTime-container_a160">
                                                            <div class="u-courseCardWithTime-tags">
                                                                <!--Regular if72-->
                                                                <!--Regular if73-->
                                                            </div>
                                                            <div class="u-courseCardWithTime-img">
                                                                <img width="236" height="136" alt="" src="http://edu-image.nosdn.127.net/26ba40075824424eab7694dca0789652.png?imageView&amp;quality=100"
                                                                class="u-courseCardWithTime-img_img161">
                                                            </div>
                                                            <div class="u-courseCardWithTime-teacher">
                                                                <span class="f-thide u-courseCardWithTime-teacher_span162">
                                                                    公文写作规范
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-school  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-school_span163">
                                                                    黑龙江大学
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-desc">
                                                                <span class="u-courseCardWithTime-desc_span164">
                                                                    事关公务需权重，方能入化又出神
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-time">
                                                                <span class="f-thide u-courseCardWithTime-time_span165">
                                                                    <!--Regular if74-->
                                                                    <!--Regular if75-->
                                                                    <!--Regular if76-->
                                                                    <div class="over">
                                                                        <span class="txt over_span168">
                                                                            进行至第4周
                                                                        </span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="u-courseCardWithTime-people  f-thide">
                                                                <span class="f-thide u-courseCardWithTime-people_span171">
                                                                    <span class="u-icon-person">
                                                                    </span>
                                                                    &nbsp;&nbsp;6539
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ux-right-nav f-pa ga-click" data-action="0" data-label="右">
                                                <span class="ux-icon-caret-right u-icon-circle-caret-right">
                                                </span>
                                            </div>
                                            <!--Regular if5-->
                                        </div>
                                    </div>
                                    <!-- 推荐课程结束 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-index-columnFunc">
                        <div class="p-index-columneFunc-i">
                            <div class="m-column-container" id="j-index-column-box">
                            </div>
                        </div>
                    </div>
                    <div class="p-index-discussFunc">
                        <div class="p-index-discussFunc-i">
                            <div class="m-discuss-container">
                                <div class="m-discuss-img">
                                    <img width="380" height="69" src="https://edu-image.nosdn.127.net/9c1ff6b7-e34f-4d52-8a5b-ed9f89137a82.png?imageView&amp;thumbnail=380y69&amp;quality=100"
                                    alt="精彩讨论">
                                </div>
                                <div class="m-discuss-title">
                                    <span>
                                        一起学习 一起成长
                                    </span>
                                </div>
                                <div class="m-discuss-content" id="j-index-discuss-box">
                                </div>
                                <div class="m-discuss-introFunc">
                                    <div class="m-discuss-introFunc-t">
                                        <div class="u-discussIntro-container">
                                            <span>
                                                已有392.27万老师和同学在此发言讨论
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-discuss-joinFunc">
                                    <div class="m-discuss-joinFunc-t">
                                        <div class="navLoginBtn u-discuss-join-container" data-cate="首页_精彩讨论">
                                            <span>
                                                加入中国大学MOOC
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-discuss-introTopFunc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-index-selfDefineFunc">
                        <div class="p-index-selfDefineFunc-i">
                            <div class="m-selfDefine-container" id="j-index-selfDefine-box">
                            </div>
                        </div>
                    </div>
                    <div class="p-index-studentFunc m-index-student">
                        <div class="p-index-studentFunc-i">
                            <div class="m-indexStudent-container">
                                <div class="m-indexStudent-title">
                                    <span>
                                        即便错过心仪的大学，也不要错过中国大学MOOC!
                                    </span>
                                </div>
                                <div class="m-indexStudent-box" id="j-indexStudent-box">
                                </div>
                                <div class="m-indexStudent-joinFunc">
                                    <div class="m-indexStudent-joinFunc-t">
                                        <div class="navLoginBtn u-indexStudent-join-container" data-cate="首页_故事展示">
                                            <span>
                                                加入中国大学MOOC
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="g-wrap m-foot f-pr" id="j-footer">
                <div class="g-flow f-cb">
                    <div class="f1 f-fl">
                        <div class="logo">
                        </div>
                        <p class="f-fc14 f-fc9">
                            由高教社联手网易推出，让每一个有提升愿望的用户能够学到中国知名高校的课程，并获得认证。
                        </p>
                    </div>
                    <div class="f4 f-fr f-pr">
                        <h4 class="f-fcc">
                            友情链接
                        </h4>
                        <div class="f-cb">
                            <a href="https://www.kada.com/?utm_source=www.icourse163.org/&amp;utm_medium=bottom_links&amp;utm_campaign=business&amp;utm_content=kada2018092902"
                            target="_blank" class="f-fc9 f4a">
                                网易卡搭编程
                            </a>
                            <a href="https://study.163.com/" target="_blank" class="f-fc9 f4a">
                                网易云课堂
                            </a>
                            <a href="https://100.163.com/" target="_blank" class="f-fc9 f4a">
                                网易100分
                            </a>
                        </div>
                    </div>
                    <div class="f3 f-fr f-pr">
                        <h4 class="f-fcc">
                            关注我们
                        </h4>
                        <div class="f-cb">
                            <a class="f-icon f-fc9 u-icon-weixin weixin gzIc f-pr f-fl">
                                <div class="tipQrcode f-pa">
                                    <div class="qrImag">
                                        <img src="https://edu-image.nosdn.127.net/ceff46a7-e151-4a3a-b208-90e41721870c.jpg?imageView&amp;thumbnail=860y860&amp;quality=100"
                                        width="120px" height="120px" alt="加中M微信好友">
                                    </div>
                                    <div class="tip f-pa">
                                    </div>
                                </div>
                            </a>
                            <a href="https://weibo.com/icourse163" target="_blank" class="f-icon f-fc9 gzIc f-fs1 f-fl u-icon-weibo weibo">
                            </a>
                        </div>
                    </div>
                    <div class="f2 f-fr f-pr">
                        <h4 class="f-fcc">
                            关于我们
                        </h4>
                        <div class="f-cb">
                            <a href="about/aboutus.htm" target="_blank" class="f-fc9 f2a">
                                关于我们
                            </a>
                            <a href="spoc/schoolcloud/index.htm" target="_blank" class="f-fc9 f2a">
                                学校云
                            </a>
                            <a href="about/contactus.htm#/contactus?type=2" target="_blank" class="f-fc9 f2a">
                                联系我们
                            </a>
                            <a href="help/help.htm" target="_blank" class="f-fc9 f2a">
                                常见问题
                            </a>
                            <a href="about/contactus.htm#/contactus?type=4" target="_blank" class="f-fc9 f2a">
                                意见反馈
                            </a>
                            <a href="about/contactus.htm#/contactus?type=5" target="_blank" class="f-fc9 f2a">
                                法律条款
                            </a>
                        </div>
                    </div>
                </div>
                <div class="beian">
                    <p class="f-fc12 f-fc6">
                        <a class="f-fc6" target="_blank" href="https://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">
                            粤B2-20090191-26
                        </a>
                        | 京ICP备12020869号-2 |
                        <a class="f-fc6" target="_blank" href="https://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44010602000207">
                            京公网安备44010602000207
                        </a>
                        <br>
                        ©2014-2019 icourse163.org
                    </p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.webFocusPicVoList = [];
            window.webFocusPicVoList.push({
                "picUrl": "https://edu-image.nosdn.127.net/5fa324b94b60470b992036b6166e9aca.png?imageView&quality=100",
                "focusName": "banner",
                "bgColor": "#D4635C",
                "weight": 260,
                "uptime": 1556208000000,
                "downtime": 1556726400000,
                "targetUrl": "https://www.icourse163.org/topics/sexual_knowledge_w"
            });
            window.webFocusPicVoList.push({
                "picUrl": "https://edu-image.nosdn.127.net/9ca86fd17bd1418dabdf1de6bcea5b65.jpg?imageView&quality=100",
                "focusName": "营销新课",
                "bgColor": "#FDAF5C",
                "weight": 250,
                "uptime": 1556208000000,
                "downtime": 1557072000000,
                "targetUrl": "https://www.icourse163.org/topics/xinke_w"
            });
            window.webFocusPicVoList.push({
                "picUrl": "https://edu-image.nosdn.127.net/6a4526f7409e42dfa1235ecfe9a99845.jpeg?imageView&quality=100",
                "focusName": "急救",
                "bgColor": "#B2EAF7",
                "weight": 150,
                "uptime": 1555948800000,
                "downtime": 1556553600000,
                "targetUrl": "https://www.icourse163.org/course/SCU-1003489001"
            });
            window.webFocusPicVoList.push({
                "picUrl": "https://edu-image.nosdn.127.net/e3e08c94ea3844e3b89685a7844e894c.jpg?imageView&quality=100",
                "focusName": "孔昱力考研政治",
                "bgColor": "#64b6e5",
                "weight": 100,
                "uptime": 1554739200000,
                "downtime": 1557071940000,
                "targetUrl": "https://kaoyan.icourse163.org/course/packages/1205975823.htm"
            });
            window.webFocusPicVoList.push({
                "picUrl": "https://edu-image.nosdn.127.net/451749f9a36043f8971dbdba93f5639c.jpeg?imageView&quality=100",
                "focusName": "性别",
                "bgColor": "#4C4DE6",
                "weight": 25,
                "uptime": 1555948800000,
                "downtime": 1556553600000,
                "targetUrl": "https://www.icourse163.org/course/FUDAN-1205701807"
            });
            window.webFocusPicVoList.push({
                "picUrl": "https://edu-image.nosdn.127.net/c0033d0b4db44bd2a3d903a36112f212.jpg?imageView&quality=100",
                "focusName": "云课堂",
                "bgColor": "#ffd829",
                "weight": 20,
                "uptime": 1556121600000,
                "downtime": 1556553600000,
                "targetUrl": "https://study.163.com/topics/reading/?share=3&shareId=400000000591893&utm_source=icourse163.org&utm_medium=web_banner&utm_campaign=business&utm_content=20190424webZM&utm_term=web01"
            });
        </script>
        <script onerror="javascript:window.errorEventHandler && window.errorEventHandler(event)"
        src="https://mc.stu.126.net/pub/s/core_aab77eeea088cb504b85fea1996e9654.js">
        </script>
        <script onerror="javascript:window.errorEventHandler && window.errorEventHandler(event)"
        src="https://mc.stu.126.net/pub/s/pt_web_index.web_05b188f1a7cc51ac42099f1a5d62fbed.js">
        </script>
        <script type="text/javascript">
            (function() {
                var bp = document.createElement('script');
                var curProtocol = window.location.protocol.split(':')[0];
                if (curProtocol === 'https') {
                    bp.src = '//zz.bdstatic.com/linksubmit/push.js';
                } else {
                    bp.src = '//push.zhanzhang.baidu.com/push.js';
                }
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(bp, s);
            })();
            // (function(){
            //     var src = (document.location.protocol == "http:") ? "//js.passport.qihucdn.com/11.0.1.js?8c55f3ce5a3a2c16bf18ef5d07963b1f":"//jspassport.ssl.qhimg.com/11.0.1.js?8c55f3ce5a3a2c16bf18ef5d07963b1f";
            //     document.write('<script src="' + src + '" id="sozz"><\/script>');
            // })();
            
        </script>
    </body>

</html>