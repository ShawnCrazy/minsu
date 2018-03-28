<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>【途途】-公告</title>
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
            <ul class="nav" data-spy="affix" data-offset-top="50">
                <?php
                foreach ($brands as $brand) {
                    ?>
                    <li class=""><a href="#brand<?= $brand['id']; ?>" data-toggle="tab"><?= $brand['author']; ?></a>
                    </li>
                    <?php
                }
                ?>
                <!--                <li class=""><a href="#person" data-toggle="tab">个人信息</a></li>-->
                <!--                <li class=""><a href="#record" data-toggle="tab" onclick="getSubRec()">提交记录</a></li>-->
                <!--                <li class=""><a href="#ordered" data-toggle="tab" onclick="getOrdered()">预订记录</a></li>-->
                <!--                <li class=""><a href="#submit" data-toggle="tab">发布房屋</a></li>-->
                <li class="bg-info"><a href="<?= site_url('page'); ?>"><< 回到主页</a></li>
            </ul>
        </div>
        <div class="col-md-10 col-sm-7 tab-content">
            <!--            <div class="tab-pane fade in active" id="home">-->
            <!--                <p>这是使用bootstrap框架的页面</p>-->
            <!--            </div>-->
            <?php
            foreach ($brands as $brand) {
                ?>
                <div class="tab-pane fade in" id="brand<?= $brand['id']; ?>">
                    <?= '发布时间：' . $brand['time']; ?>
                    <sub class="text-danger"><?php
                        if($brand['state']){
                            echo '——已过期';
                        }else{
                            echo '——火热进行中';
                        }
                        ?></sub>
                    <hr />
                    <?= $brand['content']; ?>
                </div>
            <?php } ?>
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
                        <label for="block" class="col-sm-2 control-label">所属街道/区</label>
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
        </div>
    </div>
</div>
</body>