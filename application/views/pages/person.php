<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>【途途】-个人中心</title>
    <link rel="shortcut icon" href="<?= base_url() ?>static/img/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <?php $this->load->view('templates/editor_header'); ?>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <script type="text/javascript">var indexHost = '<?= base_url(); ?>'; </script>
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
    <div class="row">
        <div class="col-md-2 col-sm-3" id="myScrollspy">
            <ul id="tabbar" class="nav" data-spy="affix" data-offset-top="50">
                <li class=""><a href="#person" data-toggle="tab">个人信息</a></li>
                <li class="" id="room-rec"><a href="#record" data-toggle="tab" onclick="getSubRec()">提交记录</a></li>
                <li class=""><a href="#ordered" data-toggle="tab" onclick="getOrdered()">预订记录</a></li>
                <li class="" id="room-pub"><a href="#submit" data-toggle="tab">发布房屋</a></li>
                <li class="" id="#order-record"><a href="#bill" data-toggle="tab" onclick="getBill()">资金往来记录</a></li>
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
                            <input type="text" class="form-control" id="nickname" maxlength="20" value="<?= $p_info['name']; ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="account" class="col-sm-2 control-label">账户/邮箱</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="account" data-cid="<?= $p_info['id']; ?>"
                                   maxlength="20" readonly value="<?= $p_info['account']; ?>"/>
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
                            <input type="tel" class="form-control" id="mobile" value="<?= $p_info['tel']; ?>"/>
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

                </table>
            </div>
            <div class="tab-pane fade table-responsive" id="ordered">
                <table class="table">
                    <caption>预订详情记录</caption>

                </table>
            </div>
            <div class="tab-pane fade" id="submit">
                <form class="form-horizontal" onsubmit="return false;" role="form">
                    <div class="form-group">
                        <label for="public" class="col-sm-2 control-label">联系人称呼</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="public" required
                                   maxlength="20" placeholder="必填"
                                   data-toggle="popover" data-placement="right" data-content="不能为空"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="connect" class="col-sm-2 control-label">联系人电话</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="connect" required placeholder="必填"
                                   data-toggle="popover" data-placement="right" data-content="不能为空"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">价格（￥/天）</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" required
                                   placeholder="0-999之间的人民币数值，如1320、199.99"
                                   data-toggle="popover" data-placement="right" data-content="不能为空"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="summary" class="col-sm-2 control-label">简述</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="summary" required maxlength="10"
                                   placeholder="请用一句话说明，必填"
                                   data-toggle="popover" data-placement="right" data-content="不能为空"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="introduce" class="col-sm-2 control-label">详细介绍</label>
                        <div class="col-sm-10">
                            <?php $this->load->view('pages/editor'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-2 control-label">详细地址</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" required
                                   maxlength="20" placeholder="具体到楼栋号"
                                   data-toggle="popover" data-placement="right" data-content="不能为空"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bedroom" class="col-sm-2 control-label">可接受住户</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="bedroom" placeholder="不填写则默认为1"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="area" class="col-sm-2 control-label">房屋面积</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="area" placeholder="可选"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-sm-2 control-label">所属城市</label>
<!--                        <div class="col-sm-8">-->
<!--                            <input type="text" class="form-control" id="city" placeholder="可选"/>-->
<!--                        </div>-->
                        <div class="col-sm-10">
                            <select id="city" value="" class="form-control">
                                <?php
                                foreach ($citys as $city){
                                    echo '<option value="' . $city['name'] . '">' . $city['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="block" class="col-sm-2 control-label">所属县区</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="block" placeholder="可选"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-default" id="btn-save">提交</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade table-responsive" id="bill">
                <table class="table">
                    <caption>资金往来记录</caption>

                </table>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    /*获取cookie pri参数*/
    var getCookie = document.cookie.replace(/[ ]/g, "");
    var arrCookie = getCookie.split(";") ;
    var pri;  //声明变量pri
    for (var i = 0; i < arrCookie.length; i++) {   //使用for循环查找cookie中的tips变量
        var arr = arrCookie[i].split("=");   //将单条cookie用"等号"为标识，将单条cookie保存为arr数组
        if ('pri' == arr[0]) {  //匹配变量名称，其中arr[0]是指的cookie名称，如果该条变量为tips则执行判断语句中的赋值操作
            pri = arr[1];   //将cookie的值赋给变量tips
            break;   //终止for循环遍历
        }
    }
    if (pri === '1'){
        $('#room-rec').show();
        $('#room-pub').show();
        $('#order-record').show();
    }else{
        $('#room-rec').hide();
        $('#room-pub').hide();
        $('#order-record').hide();
    }
    var user_primary_id = -1;
    var now = new Date();
    var currentDay = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate();
    window.onload = function () {
        var um = UM.getEditor('myEditor');
        $('.edui-container').css('width', '100%');//编辑器适配大小
        setDefault();
    };

    function clearAllCookie() {
        var keys = document.cookie.match(/[^ =;]+(?=\=)/g);
        if (keys) {
            for (var i = keys.length; i--; i !== 0) {
                document.cookie = keys[i] + '=;expires=' + new Date(0).toUTCString();
            }
        }
    }

    /*获取账户信息，成功则绑定信息修改事件*/
    function setDefault() {
        $.ajax({
            url: indexHost + 'index.php/api/get_user',
            success: function (res) {
                var data = $.parseJSON(res);
                if (data.code === 100) {
                    user_primary_id = data.content.id;
                    $('#nickname').val(data.content.name);
                    $('#account').val(data.content.account);
                    $('#mobile').val(data.content.tel);

                    $('#btn-change').click(updateAccount);
                    $('#btn-save').click(publishRoom);
                } else {
                    alert(data.content);
                    console.log(data);
                }
            }
        });
    }

    /*修改个人信息方法*/
    function updateAccount() {
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
            url: indexHost + 'index.php/api/set_user_new',
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
    }

    /*获取提交信息的方法*/
    function getSubRec() {
        $.ajax({
            method: 'post',
            url: indexHost + 'index.php/api/get_room/<?= $p_info['id']; ?>',
            success: function (res) {
                var data = $.parseJSON(res);
                if (data.code === 100) {
                    $('#record').children('table').empty();
                    $('#record').children('table').append(data.content);
                } else {
                    alert("没有数据，请求结果为" + data.content);
                }
            }
        })
    }

    /*获取订单信息的方法*/
    function getOrdered() {
        $.ajax({
            method: 'post',
            url: indexHost + 'index.php/api/get_order/<?= $p_info['id']; ?>',
            success: function (res) {
                var data = $.parseJSON(res);
                if (data.code === 100) {
                    $('#ordered').children('table').empty();
                    $('#ordered').children('table').append(data.content);
                } else {
                    alert('没有数据，请求结果为：' + data.content);
                }
            }
        })
    }

    /*获取交易信息的方法*/
    function getBill() {
        $.ajax({
            method: 'post',
            url: indexHost + 'index.php/api/get_bill/<?= $p_info['id']; ?>',
            success: function (res) {
                var data = $.parseJSON(res);
                if (data.code === 100) {
                    $('#bill').children('table').empty();
                    $('#bill').children('table').append(data.content);
                } else {
                    alert('没有数据，请求结果为：' + data.content);
                }
            }
        })
    }

    /*提交房屋方法*/
    function publishRoom() {
        var form = {};
        var isNull = false;
        $('.form-horizontal input').each(function (index, item) {
            var curEle = $(item);
            if (curEle.data('toggle') === 'popover' && curEle.val() === '') {
                curEle.popover('show');
                isNull = true;
            } else if (curEle.data('toggle') === 'popover') {
                curEle.popover('destroy');
            }
        });
        if (isNull) {
            return;
        }
        form.owner_id = user_primary_id;
        form.connect_name = $('#public').val();
        form.connect_tel = $('#connect').val();
        form.price = $('#price').val();
        form.summary = $('#summary').val();
        form.introduce = UM.getEditor('myEditor').getContent();
        form.address = $('#address').val();
        form.city = $('#city').val();
        form.state = '申请认证中';
        form.bedroom = $('#bedroom').val() === '' ? 1 : $('#bedroom').val();
        form.area = $('#area').val();
        form.block = $('#block').val();
        form.pub_time = currentDay;
        $.ajax({
            method: 'post',
            url: indexHost + 'index.php/api/submit_room',
            data: form,
            success: function (res) {
                var data = $.parseJSON(res);
                if (data.code === 100) {
                    location.reload();
                } else {
                    alert(data.content);
                    console.log(data);
                }
            }
        });
    }

</script>
</html>