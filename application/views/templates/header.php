<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="途途，民宿，短租房，短租公寓，日租房，家庭旅馆，住宿预定，度假公寓、度假别墅、民宿短租">
    <meta name="description" content="途途，提供国内外特色民宿、短租房、短租公寓、日租房、家庭旅馆等在线预订。更优惠的价格，更贴心的服务，全球公寓民宿住宿预定尽在途家网！途家，旅途中的家。">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>【途途】民宿_短租房_短租公寓_日租房-全球公寓民宿预订平台</title>
    <link rel="shortcut icon" href="<?= base_url() ?>static/img/favicon.ico" type="image/x-icon">
    <link rel="bookmark" href="<?= base_url() ?>static/img/favicon.ico" type="image/x-icon">
<!--    <link rel="dns-prefetch" href="https://staticfile.tujia.com">-->
<!--    <link rel="dns-prefetch" href="https://pic.tujia.com">-->
<!--    <link rel="dns-prefetch" href="https://pic1.tujia.com">-->
<!--    <link rel="dns-prefetch" href="https://pic2.tujia.com">-->
<!--    <link rel="dns-prefetch" href="https://pic3.tujia.com">-->
<!--    <link rel="dns-prefetch" href="https://pic4.tujia.com">-->
<!--    <link rel="dns-prefetch" href="https://wpp.tujia.com">-->
<!--    jQuery由于重用性高，置于开头，与editor有关-->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript">(function () {
            var ua = navigator.userAgent;
            var rgua = /(mobile|mobi|j2me|ucweb|opera mini|iphone|htc|ipad)/gi;
            var redirectMap = {
                'www.fvt.tujia.com': 'm.fvt.tujia.com',
                'www.tujia.com': 'm.tujia.com'
            }
            if (rgua.test(ua) && !/(platform=pc)|(isCallCenter=true)/gi.test(location.search)) {
                var host = redirectMap[location.host];
                if (host) {
                    location.host = host;
                }
            }
        })();
    var indexHost = '<?= base_url(); ?>';</script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link href="<?= base_url() ?>static/css/main.css" rel="stylesheet">
</head>
<body class="page-fluid" data-server-domain="tujia.com" data-host="<?= base_url() ?>"
      data-host-inter="https://international.tujia.com" data-host-pic="<?= base_url() ?>"><!--[if lte IE 8]>
<div class="ie-tips">
    <div class="tips-up">
        <div class="tip-image"></div>
        <div>
            <p class="font-16">亲爱的用户，因浏览器版本过低，您所浏览的页面飞走了</p>
            <p>建议您更新浏览器或通过APP、微信访问途家网</p>
        </div>
        <div>
            <a href="https://support.microsoft.com/zh-cn/help/17621/internet-explorer-downloads" target="_blank">
                <span></span>
                <span>更新IE浏览器</span>
            </a>
            <a href="http://www.google.cn/chrome/browser/desktop/" target="_blank">
                <span></span>
                <span>下载Chrome浏览器</span>
            </a>
            <a href="http://se.360.cn/" target="_blank">
                <span class="ico3"></span>
                <span>下载360浏览器</span>
            </a>
        </div>
    </div>
    <div class="tips-down">
        <ul>
            <li>
                <p class="code-left">
                    <span></span>
                </p>
                <p>
                    <span class="font-16">扫码下载途家APP</span><br>
                    <span class="gray-font">随时随地预订公寓民宿</span>
                </p>
            </li>
            <li>
                <p class="code-right">
                    <span></span>
                </p>
                <p>
                    <span class="font-16">微信关注途家服务号</span><br>
                    <span class="gray-font">预订更方便</span>
                </p>
            </li>
        </ul>
    </div>
</div>
<![endif]-->
<article class="g-page">
    <div id="tujia_page_navbar" class="t-navbar-container rel z-navbar-flow" >
        <div class="t-navbar-bg"></div>
        <div class="fluid-content">
            <div class="t-navbar clearfix"><a href="/" class="t-logo t-fl"><img
                            src="<?= base_url(); ?>upload/tutu-logo-1.png" alt=""></a>
                <ul class="t-fl">
                    <li><a class="t-nav-cata t-nav-cata-on" href="<?= site_url('page'); ?>">首页</a></li>
                    <li><a class="t-nav-cata" href="<?= site_url('page/brand'); ?>">公告</a></li>
<!--                    <li><a class="t-nav-cata" href="https://international.tujia.com">海外公寓</a></li>-->
<!--                    <li><a class="t-nav-cata" href="https://travel.tujia.com">发现</a></li>-->
<!--                    <li><a class="t-nav-cata" href="https://www.tujia.com/Experience/">体验房</a></li>-->
                </ul>
                <ul class="g-login log t-fr z-hidden">
                    <li class="m-unlogin" data-val="register"><a class="t-lk-log t-lk-log-reg" -href="<?= site_url('page/register') ?>">
                            注册</a> <span class="log-pro"></span></li>
                    <li class="m-unlogin" data-val="login"><a class="t-lk-log" -href="<?= site_url('page/loginpage') ?>">
                            登录</a></li>
                    <li class="m-login m-tujing-user"><a class="t-lk-log" href="<?= site_url('page/person') ?>">
                            我的途家</a></li>
                    <li class="m-login"><a class="t-lk-log" href="javascript:;" onclick="logout()">
                            [退出]</a></li>
                    <li class="m-yezhu-nav"><a class="t-lk-log" href="https://owner.tujia.com">
                            业主中心</a></li>
                    <li class="m-tujing m-tujing-merchant-system"><a class="t-lk-log" href="https://merchant.tujia.com/Store/Index/">
                            商户系统</a></li>
                    <li class="m-tujing m-tujing-merchant-send">
                        <a class="t-lk-log-blue" target="_blank" href="https://merchantcrm.tujia.com/merchant-web/StoreApply/">
                            免费发布房屋</a></li>
                </ul>
            </div>
        </div>
    </div>