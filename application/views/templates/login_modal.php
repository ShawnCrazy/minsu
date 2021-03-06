<div class="m-login-wrap modal fade" id="userPop">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="login-head modal-header"><h2>登录即享：积分余额抵订金，高级会员有优惠</h2>
                <i class="close-btn closeSubmit" title="关闭" data-dismiss="modal"></i></div>
            <div class="login-tabs modal-header">
                <a id="tabSmsLogin" href="javascript:;" class="phone-pwd">快捷登录/注册</a>
                <a id="tabPwdLogin" href="javascript:;" class="user-pwd">普通登录</a></div>
            <div class="login-body modal-body"><input type="hidden" id="redirectUrl" name="redirectUrl">
                <div id="tabPwdLoginContent" class="dn">
                    <div class="column-box"><p>注册立送<span class="highlight-box">300</span> 元红包，预订立即可用</p></div>
                    <div class="control-group" style="margin-top:10px;">
                        <div class="controls"><label for="account">
                                <input type="text" class="ipt-text" name="username" id="account" value=""
                                       placeholder="邮箱" maxlength="20" required
                                       data-toggle="popover" data-placement="right" data-content="邮箱格式不正确">
                                <span class="text-watermark hide">邮箱</span></label></div>
                    </div>
                    <div class="control-group">
                        <div class="controls"><label for="password">
                                <input type="password" class="ipt-text" name="pwd" id="password"
                                       placeholder="密码" maxlength="20" required
                                       data-toggle="popover" data-placement="right" data-content="密码不能为空">
                                <span class="text-watermark hide">密码</span></label></div>
                        <div class="validationError dn" id="loginerrormsg"></div>
                    </div>
                    <div class="control-group" id="validateArea">
                        <div class="controls"><label for="verifycode">
                                <input type="text" class="ipt-text verify-ipt" placeholder="请输入验证码"
                                       name="verifycode" id="verifycode">
                                <span class="text-watermark hide" style="width: 140px;">请输入验证码</span>
                                <?php echo $captcha['image']; ?>
                                <img id="verifyImage" alt="看不清楚，换一张" class="verify-img">
                                <a id="verifyImageLink" href="javascript:void(0)" class="change-rand"
                                   style="display:none">看不清，换一张</a></label>
                        </div>
                        <div class="validationError dn" id="verifycodeErorr"></div>
                    </div>
                    <div class="control-group t-control-group">
                        <div class="controls"><label for="saveUserLongTime">
                                <input type="checkbox" name="" class="check-btn"
                                       id="saveUserLongTime" checked="checked">保存登录时长一月</label>
                            <a href="https://passport.tujia.com/PortalSite/ResetPassword/" class="forget-pwd"
                               target="_blank">忘记密码？</a>
                            <input type="hidden" name="userExpiresHours" id="userExpiresHours" value=""></div>
                    </div>
                    <div class="control-group btn-group">
                        <div class="controls">
                            <input type="button" value="登录" class="login-btn" id="loginSubmit"
                                   style="cursor:pointer;">
                            <input type="button" value="登录中" class="login-btn" id="loginSubmitIng"
                                   style="display:none;"></div>
                    </div>
                    <div class="coagent-cont">
                        <div class="coagent-tit"><span>合作网站账号登录</span></div>
                        <div class="link-btn-cont">
                            <a href="javascript:;" id="qqLogin" title="QQ账户登录"
                               onclick="qqLogin();return false;" class="qq-login-btn">QQ</a>
                            <a href="javascript:;" id="sinaLogin" title="新浪微博账户登录"
                               onclick="sinaLogin();return false;" class="sian-login-btn">新浪微博</a>
                            <a href="javascript:;" id="" title="微信账户登录"
                               onclick="wechatLogin();return false;" class="weixin-login-btn">微信</a></div>
                    </div>
                </div>
                <div id="tabSmsLoginContent" class="dn">
                    <form action method="post">
                        <div class="column-box hide"><p>注册立送<span class="highlight-box">300</span> 元红包，预订立即可用</p></div>
                        <div class="control-group" style="margin-top:10px;">
                            <div class="controls"><label for="nickname">
                                    <input type="text" class="ipt-text" name="nickname" placeholder="昵称"
                                           id="nickname" value="" maxlength="20" required
                                           data-toggle="popover" data-placement="right" data-content="不能为空">
                                    <span class="text-watermark hide">昵称</span></label></div>
                        </div>
                        <div class="control-group" style="margin-top:10px;">
                            <div class="controls"><label for="account">
                                    <input type="email" class="ipt-text" name="account" placeholder="仅支持邮箱"
                                           id="smsaccount" value="" maxlength="20" required
                                           data-toggle="popover" data-placement="right" data-content="邮箱格式不正确">
                                    <span class="text-watermark hide">暂只支持邮箱注册</span></label></div>
                        </div>
                        <div class="control-group" style="margin-top:10px;">
                            <div class="controls"><label for="pwd">
                                    <input type="password" class="ipt-text" name="pwd" placeholder="密码"
                                           id="pwd" value="" maxlength="20" required
                                           data-toggle="popover" data-placement="right" data-content="密码为8-20个字母或数字组合">
                                    <span class="text-watermark hide">密码</span></label></div>
                        </div>
                        <div class="control-group" style="margin-top:10px;">
                            <div class="controls"><label for="re-pwd">
                                    <input type="password" class="ipt-text" name="re-pwd" placeholder="重复密码"
                                           id="re-pwd" value="" maxlength="20"
                                           data-toggle="popover" data-placement="right" data-content="密码不一致">
                                    <span class="text-watermark hide">重复密码</span></label></div>
                        </div>
                        <div class="control-group" style="margin-top:10px;">
                            <div class="controls"><label for="smobile">
                                    <input type="tel" class="ipt-text" name="smobile" placeholder="手机"
                                           id="smobile" value=""
                                           data-toggle="popover" data-placement="right" data-content="格式错误">
                                    <span class="text-watermark hide">手机号</span></label></div>
                        </div>
                        <div class="control-group" id="svalidatearea">
                            <div class="controls"><label for="sverifycode">
                                    <input type="text" class="ipt-text verify-ipt"
                                           name="sverifycode" id="sverifycode">
                                    <span class="text-watermark" style="width: 140px;">请输入验证码</span>
                                    <?php echo $captcha['image']; ?>
                                    <img id="sverifyImage" alt="看不清楚，换一张" class="verify-img">
                                    <a id="sverifyImageLink" href="javascript:void(0)" class="change-rand"
                                       style="display:none">看不清，换一张</a></label>
                            </div>
                        </div>
                        <div class="control-group pwd-group hide">
                            <div class="controls"><label for="spassword">
                                    <input type="text" class="ipt-text" name="code" id="spassword">
                                    <span class="text-watermark">动态密码</span></label>
                                <input type="button" id="sbtnGetVerifyCode" value="获取手机验证码" class="verify-btn"></div>
                            <div class="validationError dn" id="sloginerrormsg"></div>
                        </div>
                        <div class="control-group btn-group">
                            <div class="controls">
                                <input type="button" value="登录/注册" class="login-btn" id="sloginSubmit"
                                       style="cursor:pointer;">
                                <input type="button" value="登录/注册中" class="login-btn" id="sloginSubmitIng"
                                       style="display:none;"></div>
                        </div>
                        <div class="coagent-cont">
                            <div class="coagent-tit"><span>合作网站账号登录</span></div>
                            <div class="link-btn-cont">
                                <a href="javascript:;" id="qqLogin" title="QQ账户登录"
                                   onclick="qqLogin();return false;" class="qq-login-btn">QQ</a>
                                <a href="javascript:;" id="sinaLogin" title="新浪微博账户登录"
                                   onclick="sinaLogin();return false;" class="sian-login-btn">新浪微博</a>
                                <a href="javascript:;" id="wechatLogin" title="微信账户登录"
                                   onclick="wechatLogin();return false;" class="weixin-login-btn">微信</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>