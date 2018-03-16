<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>【途途】-个人中心</title>
    <link rel="shortcut icon" href="<?= base_url() ?>static/img/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col logo">
            <h1 class="text-success">途途 -- 一个专注于用户权益de民宿订住网站！</h1>
            <hr/>
        </div>
    </div>
</div>
<div class="container">
    <!--    <div class="jumbotron">-->
    <!--        <h1>Bootstrap Affix</h1>-->
    <!--    </div>-->
    <div class="row">
        <div class="col-md-2 col-sm-3" id="myScrollspy">
            <ul class="nav" data-spy="affix" data-offset-top="50">
                <li class=""><a href="#person" data-toggle="tab">个人信息</a></li>
                <li class=""><a href="#record" data-toggle="tab">提交记录</a></li>
                <li class="active"><a href="#ordered" data-toggle="tab">预订记录</a></li>
                <li class="bg-success"><a href="#submit" data-toggle="tab">发布房屋</a></li>
                <li class="bg-info"><a href="<?= site_url('page'); ?>"><< 回到主页</a></li>
            </ul>
        </div>
        <div class="col-md-10 col-sm-7 tab-content">
            <!--            <div class="tab-pane fade in active" id="home">-->
            <!--                <p>这是使用bootstrap框架的页面</p>-->
            <!--            </div>-->
            <div class="tab-pane fade in active" id="person">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="nickname" class="col-sm-2 control-label">昵称</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nickname" maxlength="20"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="account" class="col-sm-2 control-label">账户/邮箱</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="account" maxlength="20" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="col-sm-2 control-label">旧密码</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pwd"
                                   maxlength="20" placeholder="如要修改密码请正确填写"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new-pwd" class="col-sm-2 control-label">新密码</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="new-pwd"
                                   maxlength="20" placeholder="如要修改请填写正确的旧密码"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mobile" class="col-sm-2 control-label">联系电话</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="mobile"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-default" id="btn-change">保存</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade table-responsive" id="record">
                <table class="table">
                    <caption>房间提交记录</caption>
                    <thead>
                    <tr>
                        <th>序号</th>
                        <th>房间号</th>
                        <th>开始时间</th>
                        <th>结束时间</th>
                        <th>状态</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>产品1</td>
                        <td>23/11/2013</td>
                        <td>待发货</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade table-responsive" id="ordered">
                <table class="table">
                    <caption>预订详情记录</caption>
                    <thead>
                    <tr>
                        <th>序号</th>
                        <th>房间号</th>
                        <th>开始时间</th>
                        <th>结束时间</th>
                        <th>状态</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>产品1</td>
                        <td>23/11/2013</td>
                        <td>待发货</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="submit">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="public" class="col-sm-2 control-label">可公开的称呼</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="public" maxlength="20"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">价格</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="introduce" class="col-sm-2 control-label">介绍</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="introduce" placeholder="介绍"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-2 control-label">详细地址</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="address"
                                   maxlength="20" placeholder="如要修改请填写正确的旧密码"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="connect" class="col-sm-2 control-label">联系电话</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="connect"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-default" id="btn-change">保存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    function clearAllCookie() {
        var keys = document.cookie.match(/[^ =;]+(?=\=)/g);
        if (keys) {
            for (var i = keys.length; i--; i !== 0) {
                document.cookie = keys[i] + '=;expires=' + new Date(0).toUTCString();
            }
        }
    }

    $.ajax({
        url: '../api/get_user',
        success: function (res) {
            var data = $.parseJSON(res);
            if (data.code === 100) {
                $('#nickname').val(data.content.name);
                $('#account').val(data.content.account);
                $('#mobile').val(data.content.tel);

                $('#btn-change').click(function () {
                    event.preventDefault();
                    var form = {};
                    if ($('#pwd').val() === data.content.password) {
                        form.password = $('#new-pwd').val();
                    } else {
                        form.password = data.content.password;
                    }
                    form.name = $('#nickname').val();
                    form.account = $('#account').val();
                    form.tel = $('#mobile').val();
                    $.ajax({
                        method: 'post',
                        url: '../api/set_user_new',
                        data: form,
                        success: function (res) {
                            var data = $.parseJSON(res);
                            if (data.code === 100) {
                                clearAllCookie();
                                location.reload();
                            } else {
                                alert(data.content);
                            }
                        }
                    })
                });
            } else {
                alert(data.content);
                console.log(data);
            }
        }
    });
</script>
</html>