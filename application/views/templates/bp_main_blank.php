<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>途途后台管理</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- MORRIS CHART STYLES-->

    <!-- CUSTOM STYLES-->
    <link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>-->
    <!-- TABLE STYLES-->
    <link href="<?= base_url() ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet"/>

    <script type="text/javascript">var indexHost = '<?= base_url(); ?>';</script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">途途管理后台</a>
        </div>
        <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
            系统时间 : <?= date("Y年m月d日 h:i:s"); ?>
            <a href="<?= site_url('backstage'); ?>" class="btn btn-danger square-btn-adjust">登出</a>
        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?= base_url() ?>assets/img/find_user.png" class="user-image img-responsive"/>
                </li>
                <li>
                    <a class="nav-first-level" href="javascript:;" onclick="choseMenu(this)"><i
                                class="fa fa-dashboard fa-3x"></i> 订单</a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a id="orders-payed" href="javascript:" onclick="chose2ndMenu(this.id)">已付款</a>
                        </li>
                        <li>
                            <a id="orders-fail" href="javascript:" onclick="chose2ndMenu(this.id)">未付款</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-first-level" href="javascript:;" onclick="choseMenu(this)"><i
                                class="fa fa-desktop fa-3x"></i>
                        用户</a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a id="users-0" href="javascript:" onclick="chose2ndMenu(this.id)">普通用户</a>
                        </li>
                        <li>
                            <a id="users-1" href="javascript:" onclick="chose2ndMenu(this.id)">房东</a>
                        </li>
                        <li>
                            <a id="users-2" href="javascript:" onclick="chose2ndMenu(this.id)">申请房东</a>
                        </li>
                        <li>
                            <a id="users-3" href="javascript:" onclick="chose2ndMenu(this.id)">封禁用户</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-first-level" href="javascript:;" onclick="choseMenu(this)"><i
                                class="fa fa-qrcode fa-3x"></i>
                        房屋</a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a id="rooms-rented" href="javascript:" onclick="chose2ndMenu(this.id)">已出租</a>
                        </li>
                        <li>
                            <a id="rooms-identified" href="javascript:" onclick="chose2ndMenu(this.id)">已认证</a>
                        </li>
                        <li>
                            <a id="rooms-identifying" href="javascript:" onclick="chose2ndMenu(this.id)">申请认证</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-first-level" href="javascript:;" onclick="choseMenu(this)"><i
                                class="fa fa-bar-chart-o fa-3x"></i> 公告</a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a id="brands-0" href="javascript:" onclick="chose2ndMenu(this.id)">有效</a>
                        </li>
                        <li>
                            <a id="brands-1" href="javascript:" onclick="chose2ndMenu(this.id)">已失效</a>
                        </li>
                        <li>
                            <a href="javascript:"
                               onclick="$('#pub-brand').show();$('#pub-area').hide();$('#data-tables').hide();">
                                发布公告</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-first-level" href="javascript:;" onclick="choseMenu(this)"><i
                                class="fa fa-table fa-3x"></i>
                        城市管理</a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a id="area-0" href="javascript:" onclick="chose2ndMenu(this.id)">一级城市</a>
                        </li>
                        <li>
                            <a id="area-1" href="javascript:" onclick="chose2ndMenu(this.id)">二级城市</a>
                        </li>
                        <li>
                            <a href="javascript:"
                               onclick="$('#pub-area').show();$('#pub-brand').hide();$('#data-tables').hide();">
                                添加城市</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</div>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>————</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr/>
        <div id="data-tables" class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        报表统计
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <div class="row">
            <div class="tab-pane" style="display: none;" id="pub-brand">
                <form class="form-horizontal" onsubmit="return false;" role="form">
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">公告标题</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" required
                                   maxlength="20" placeholder="必填"
                                   data-toggle="popover" data-placement="right" data-content="不能为空"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="author" class="col-sm-2 control-label">发布者</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="author" required
                                   maxlength="20" placeholder="请填写合法的名字"
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
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-default" id="btn-save-brand">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="tab-pane" style="display: none;" id="pub-area">
                <form class="form-horizontal" onsubmit="return false;" role="form">
                    <div class="form-group">
                        <label for="city-name" class="col-sm-2 control-label">城市名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="city-name" required
                                   maxlength="20" placeholder="城市中文名：如成都市"
                                   data-toggle="popover" data-placement="right" data-content="不能为空"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="py" class="col-sm-2 control-label">城市拼音</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="py" required
                                   maxlength="20" placeholder="城市拼音：如chengdu"
                                   data-toggle="popover" data-placement="right" data-content="不能为空"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="belong" class="col-sm-2 control-label">所属城市</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="belong" required
                                   maxlength="20" placeholder="添加一级城市请填0，否则填写相应的城市序号"
                                   data-toggle="popover" data-placement="right" data-content="不能为空"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-default" id="btn-save-area">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

<!-- JQUERY SCRIPTS -->
<script src="<?= base_url() ?>assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?= base_url() ?>assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="<?= base_url() ?>assets/js/dataTables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
<?php $this->load->view('templates/editor_header'); ?>
<script>
    $(document).ready(function () {
        // $('#dataTables-example').dataTable();
    });
</script>
<!-- CUSTOM SCRIPTS -->
<script src="<?= base_url() ?>assets/js/custom.js"></script>