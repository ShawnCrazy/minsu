<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

</head>
<body>
<div class="container">
    <div class="row text-center ">
        <div class="col-md-12">
            <br/><br/>
            <h2> 欢迎使用后台管理</h2>

            <h5>( 仅限管理员账号登录 )</h5>
            <br/>
        </div>
    </div>
    <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> 不支持使用昵称登录 </strong>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <br/>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input type="text" class="form-control" placeholder="帐户/邮箱/手机"/>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="输入密码"/>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox"/> 保持登录
                            </label>
                            <span class="pull-right">
                                   <a href="javascript:;" id="">忘记密码点这 </a>
                            </span>
                        </div>

                        <a id="btn_login" href="javascript:;" class="btn btn-primary ">登录</a>
                        <hr/>
                        没有账户 ? <a href="<?= base_url() ?>">点这进入官网 </a>
                    </form>
                </div>

            </div>
        </div>


    </div>
</div>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="<?= base_url() ?>assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?= base_url() ?>assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<!--<script src="assets/js/custom.js"></script>-->
<!--自定义交互脚本-->
<script type="text/javascript">
    $('#btn_login').click(function () {
        var formdata = {};
        $('input').val(function (index, val) {
            switch (index) {
                case 0:
                    formdata.account = val;
                    return '';
                case 1:
                    formdata.pwd = val;
                    return '';
                default:
                    return val;
            }
        });
        $.ajax({
            method: 'post',
            url: "<?php echo site_url('page/orders')?>",
            data: formdata,
            success: function (data) {
                location.href = "<?php echo site_url('welcome')?>";
            }
        })
    })
</script>
</body>
</html>
