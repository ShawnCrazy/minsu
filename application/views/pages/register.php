<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        会员注册-途途
    </title>
    <meta name="description" content="途途"/>
    <meta name="keywords" content=""/>
    <meta property="qc:admins" content="27330065376452116375"/>
    <meta property="wb:webmaster" content="791d1c6849c2b026"/>
    <link rel="shortcut icon" href="<?= base_url() ?>static/img/favicon.ico" type="image/x-icon"/>
    <link rel="bookmark" href="<?= base_url() ?>static/img/favicon.ico" type="image/x-icon"/>
<!--    <link rel="stylesheet" type="text/css" href="https://staticfile.tujia.com/portalsite2/styles/m-footer.css?v=11111"/>-->

    <link rel="stylesheet" type="text/css"
          href="https://staticfile.tujia.com/passportsite/styles/register.css?v=11111"/>

    <script type="text/javascript"
            src="https://staticfile.tujia.com/portalsite2/scripts/base/jquery.js?v=11111"></script>
    <script type="text/javascript"
            src="https://staticfile.tujia.com/portalsite2/scripts/base/validator.js?v=11111"></script>
</head>
<body>
<div class="wrap-large">
    <div class="back-home">
        <a href="<?= site_url() ?>" class="link-btn">返回首页</a>
    </div>
    <div class="hd-box">
        <h1 class="site-logo"></h1>
    </div>

    <div class="page-cont">
        <div class="main-box">
            <div class="login-btn-tabs login-btn-tabs-type">
                <a href="javascript:void(0)" class="active">普通会员注册</a>|<a href="javascript:void(0)" class="">企业会员注册</a>

            </div>
            <div class="m-from t-from">
                <div class="form-group">
                    <form id="registerForm" action="/PortalSite/Register" autocomplete="off" method="post">
                        <input data-val="true" data-val-required="IsEnterpriceRegister 字段是必需的。"
                               id="isEnterpriceRegister" name="isEnterpriceRegister" type="hidden" value="False"/>
                        <input id="source" name="source" type="hidden" value=""/>
                        <div class="control-group phone-group">
                            <label for="" class="controls-label">手机号</label>
                            <div class="controls">

                                <label for="mobile" style="margin-left: 0;">
                                    <input id="mobile" name="mobile" type="text" value="" maxlengt="11"
                                           style="width: 300px;"/>
                                    <span class="mask-text" style="width: 300px;">请输入手机号</span>
                                </label>
                            </div>
                            <div class="verify-info" style="display:none">
                                <span class="field-validation-valid" data-valmsg-for="Mobile"
                                      data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div id="verifyImageContainer" class="control-group verify-group" style="display:block">
                            <label for="verifyCode" class="controls-label">验证码</label>
                            <div class="controls">
                                <label for="verifyCodePic">
                                    <input id="verifyCodePic" name="verifyCodePic" type="text" maxlength="8"
                                           autocomplete="off"/>
                                    <span class="mask-text">请输入验证码</span>
                                </label>
                                <img id="verifyImage" alt="" class="verify-image" width="130" height="40"
                                     title="看不清，换一张"/>
                            </div>
                            <div class="verify-info"></div>
                        </div>
                        <div id="smsCodeContainer" class="control-group verify-group">
                            <label for="" class="controls-label">手机验证码</label>
                            <div class="controls">
                                <label for="verifycode">
                                    <input id="verifycode" name="verifycode" type="text" maxlength="4"
                                           autocomplete="off"/>
                                    <span class="mask-text ">输入手机验证码</span>
                                </label>
                                <input id="btnSendSMSCode" type="button" value="获取手机验证码" class="btn-verifyCode"/>
                                <div id="smsCodeInfo" class="hint-info" style="display: none; clear:both;"></div>
                            </div>

                            <div class="verify-info" style="display:none">
                                <span class="field-validation-valid" data-valmsg-for="Verifycode"
                                      data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="" class="controls-label">登录密码</label>
                            <div class="controls">
                                <label for="password">
                                    <input id="password" name="password" type="password" autocomplete="off"/>
                                    <span class="mask-text">登录密码</span>
                                </label>
                            </div>
                            <div class="verify-info" style="display:none">
                                <span class="field-validation-valid" data-valmsg-for="Password"
                                      data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div id="enterpriceCodeContainer" class="control-group" style="display:none">
                            <label for="" class="controls-label">企业ID</label>
                            <div class="controls">
                                <label for="enterpriceCode">
                                    <input id="enterpriceCode" name="enterpriceCode" type="text" value=""/>
                                    <span class="mask-text">企业ID</span>
                                </label>
                            </div>
                            <div class="verify-info" style="display:none">
                                <span class="field-validation-valid" data-valmsg-for="EnterpriceCode"
                                      data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="" class="controls-label">邀请码</label>
                            <div class="controls">
                                <label for="fromId">
                                    <input id="fromId" name="fromId" type="text" value=""/>
                                    <span class="mask-text">邀请码（选填）</span>
                                </label>
                            </div>
                            <div class="controls-hint" style="display:block">
                                使用好友给您的邀请码注册
                            </div>
                            <div class="verify-info" style="display:none">
                                <span class="field-validation-valid" data-valmsg-for="FromId"
                                      data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="" class="controls-label">邮箱</label>
                            <div class="controls">
                                <label for="email">
                                    <input id="email" name="email" type="text" value=""/>
                                    <span class="mask-text">常用邮箱（可作为登录账号）</span>
                                </label>
                            </div>

                            <div class="verify-info" style="display:none">
                                <span class="field-validation-valid" data-valmsg-for="Email"
                                      data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="control-group text-group">
                            <label for="">
                                <input id="chkFW" type="checkbox" checked="checked"/>
                                <a href="http://content.tujia.com/Clause/index.htm" target="_blank" class="link-btn">《途家网服务协议》</a>
                            </label>
                        </div>
                        <div class="control-group button-group">
                            <input id="registerSumbit" type="button" value="注册" title="注册"/>
                        </div>
                    </form>
                </div>
            </div>

            <div class="app-download">

            </div>
        </div>
    </div>

</div>
<div id="footer" class="footer-wrap" style="margin: 0; margin-top: 15px; position: absolute; top: 900px; width: 100%;">
    <div class="m-footer-link-list" style="border:0; background-color: transparent">
        <a href="http://content.tujia.com/tujiajianjie.htm" target="_blank" class="forst" rel="nofollow">关于我们</a>|
        <a href="http://content.tujia.com/youkebangzhu.htm" target="_blank" rel="nofollow">我是房客</a>|
        <a href="http://content.tujia.com/qiyewenhua.htm" target="_blank" rel="nofollow">加入途家</a>|


        <a href="https://www.tujia.com/sitemap.htm" target="_blank">网站地图</a>
    </div>

    <div id="copyright" class="copyright-cont" style="border:0; padding:0; margin-top:3px;">
        <p style="margin:0;">&copy; Copyright 2018 tujia.com 途家版权所有<span><a href="http://www.miitbeian.gov.cn/"
                                                                            target="_blank"
                                                                            rel="nofollow">京ICP证120277号</a></span> <span
                style="display: inline-block; margin-left: 10px">京公网安备11010502027120</span></p>
        <p class="safe-cont">
            <a href="http://www.12377.cn/" target="_blank" rel="nofollow">
                <img src="https://staticfile.tujia.com/PortalSite2/Images/safeImages/safe-img1.jpg" alt="互联网违法和不良信息举报中心"
                     width="138" height="40"/>
            </a>
            <a href="http://bj.cyberpolice.cn/" target="_blank" rel="nofollow">
                <img src="https://staticfile.tujia.com/PortalSite2/Images/safeImages/safe-img3.jpg" alt="北京市公安局网络违法犯罪举报"
                     width="98" height="40"/>
            </a>
            <a href="http://www.itrust.org.cn/home/index/itrust_certifi/wm/PJ2017011301.html" target="_blank"
               rel="nofollow">
                <img src="https://staticfile.tujia.com/PortalSite2/Images/safeImages/net-img1.jpg" alt="企业信用评级"
                     width="113" height="40"/>
            </a>
        </p>
    </div>
</div>
<script type="text/javascript">
    setTimeout(function () {
        var imgsrc = 'https://staticfile.tujia.com/PassportSite/Images/body0' + Math.floor(Math.random() * 7 + 1) + '.jpg';
        $("body").css("background-image", 'url(' + imgsrc + ')');
    }, 1);
</script>
<script type="text/javascript" src="https://staticfile.tujia.com/passportsite/scripts/common.js?v=11111"></script>

<script type="text/javascript">
    var verifyImageSrc = 'https://passport.tujia.com/PortalSite/VerifyImage';
</script>
<script type="text/javascript" src="https://staticfile.tujia.com/passportsite/scripts/select.js?v=11111"></script>
<script type="text/javascript" src="https://staticfile.tujia.com/passportsite/scripts/register.js?v=11111"></script>


<script type='text/javascript'>
    var _vds = _vds || [];
    window._vds = _vds;
    (function () {
        _vds.push(['setAccountId', '1fa38dc3b3e047ffa08b14193945e261']);
        _vds.push(['trackBot', false]);
        var getCookie = function (name) {
            if (document.cookie.length > 0) {
                var index = document.cookie.indexOf(name + "=");
                if (-1 != index) {
                    index = index + name.length + 1;
                    var endIndex = document.cookie.indexOf(";", index);
                    if (endIndex == -1) {
                        endIndex = document.cookie.length
                    }

                    return document.cookie.substring(index, endIndex);
                }
            }
            return ""
        }

        var getDateDiff = function (daybegin, dayend) {
            s1 = new Date(daybegin.replace(/-/g, "/"));
            s2 = new Date(dayend.replace(/-/g, "/"));

            var days = s2.getTime() - s1.getTime();
            return parseInt(days / (1000 * 60 * 60 * 24));
        }

        var userId = getCookie("tujia.com_PortalContext_UserId");

        if (userId) {
            _vds.push(['setCS1', 'user_id', userId]);
        }

        var pageIdEle = document.getElementById("tjpage_id");

        var tjPageId = pageIdEle == null ? 0 : pageIdEle.value;

        if (tjPageId) {
            /* 游客站首页 */
            if (tjPageId == '101001') {
                _vds.push(['setPageGroup', 'PC_首页']);
            }
            /* 国内列表页 */
            else if (tjPageId == '101002') {
                _vds.push(['setPageGroup', 'PC_国内列表页']);
                _vds.push(['setPS1', $("#destInput").val()]);
                /* 搜索天数 */
                _vds.push(['setPS2', getDateDiff($("#startDate").val(), $("#endDate").val())]);
                /* 搜索词 */
                _vds.push(['setPS3', $("#adress").val()]);

                /* 筛选项数量 */
                _vds.push(['setPS6', $(".j-filter-selectedItemsContainer a").length > 2 ? $(".j-filter-selectedItemsContainer a").length - 1 : $(".j-filter-selectedItemsContainer a").length]);

            }
            /* 国内详情页 */
            else if (tjPageId == '101003') {
                _vds.push(['setPageGroup', 'PC_国内详情页']);
                _vds.push(['setPS1', $("#dir a:eq(1)").html().replace(/住宿/ig, '')]);
                /* 搜索天数 */
                _vds.push(['setPS2', getDateDiff($("#unitDetailStartDate").val(), $("#unitDetailEndDate").val())]);
                /* 自营/平台商户 */
                _vds.push(['setPS4', $(".landlord-tag").length > 0 ? '个人' : $(".hotel-tag").length > 0 ? '商户' : '自营']);
                /* 是否海外 */
                _vds.push(['setPS5', $("#mapIconInfo").length > 0 ? "否" : "是"]);
                /* 房屋类型 */
                _vds.push(['setPS7', $(".hotel-advan-tag ul li:first").html()]);
                /* 是否途家优选 */
                _vds.push(['setPS8', $(".icon-quality-hotel").length > 0 ? '是' : '否']);
            }
            /* 海外首页 */
            else if (tjPageId == '103001') {
                _vds.push(['setPageGroup', 'PC_海外首页']);
            }
            /* 海外列表页 */
            else if (tjPageId == '103002') {
                _vds.push(['setPageGroup', 'PC_海外列表页']);
                _vds.push(['setPS1', $("#criteriaSelect").val()]);
                /* 搜索天数 */
                _vds.push(['setPS2', getDateDiff($("#startDate").val(), $("#endDate").val())]);
                /* 搜索词 */
                _vds.push(['setPS3', $("#worldKwdInput").val()]);

                /* 筛选项数量 */
                _vds.push(['setPS6', $(".j-filter-selectedItemsContainer a").length > 2 ? $(".j-filter-selectedItemsContainer a").length - 1 : $(".j-filter-selectedItemsContainer a").length]);

            }
            /* 海外详情页 */
            else if (tjPageId == '103003') {
                _vds.push(['setPageGroup', 'PC_海外详情页']);
                /* 城市 */
                _vds.push(['setPS1', $("#dir a:last").html().replace(/酒店公寓/ig, '')]);
                /* 搜索天数 */
                _vds.push(['setPS2', getDateDiff($("#startDate").val(), $("#endDate").val())]);
                /* 自营/平台商户 */
                _vds.push(['setPS4', $(".landlord-tag").length > 0 ? '个人' : $(".hotel-tag").length > 0 ? '商户' : '自营']);
                /* 是否海外 */
                _vds.push(['setPS5', "是"]);
                /* 房屋类型 */
                _vds.push(['setPS7', $(".hotel-advan-tag ul li:first").html()]);
                /* 是否途家优选 */
                _vds.push(['setPS8', $(".icon-quality-hotel").length > 0 ? '是' : '否']);
            }


        }
        _vds.push(['trackBot', false]);
        (function () {
            var vds = document.createElement('script');
            vds.type = 'text/javascript';
            vds.async = true;
            vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(vds, s);
        })();

        window._vdsTracPortalListAjaxPV = function () {
            _vds.push(['setPS1', $("#destInput").val()]);
            /* 搜索天数 */
            _vds.push(['setPS2', getDateDiff($("#startDate").val(), $("#endDate").val())]);
            /* 搜索词 */
            _vds.push(['setPS3', $("#adress").val()]);

            /* 筛选项数量 */
            _vds.push(['setPS6', $(".j-filter-selectedItemsContainer a").length > 2 ? $(".j-filter-selectedItemsContainer a").length - 1 : $(".j-filter-selectedItemsContainer a").length]);
            /* Track */
            _vds.trackPV();

        };

        window._vdsTrackInternationalAjaxPV = function () {
            _vds.push(['setPS1', $("#criteriaSelect").val()]);
            /* 搜索天数 */
            _vds.push(['setPS2', getDateDiff($("#startDate").val(), $("#endDate").val())]);
            /* 搜索词 */
            _vds.push(['setPS3', $("#worldKwdInput").val()]);
            /* 筛选项数量 */
            _vds.push(['setPS6', $(".j-filter-selectedItemsContainer a").length > 2 ? $(".j-filter-selectedItemsContainer a").length - 1 : $(".j-filter-selectedItemsContainer a").length]);
            /* Track */
            _vds.trackPV();
        }

    })();
</script>
</body>
</html>
