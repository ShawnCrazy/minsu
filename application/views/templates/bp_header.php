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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
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
                    <a <?= $active[0]; ?> href="<?=site_url('backstage/orders')?>"><i class="fa fa-dashboard fa-3x"></i> 订单</a>
                </li>
                <li>
                    <a <?= $active[1]; ?> href="<?=site_url('backstage/users')?>"><i class="fa fa-desktop fa-3x"></i> 用户</a>
                </li>
                <li>
                    <a <?= $active[2]; ?> href="<?=site_url('backstage/rooms')?>"><i class="fa fa-qrcode fa-3x"></i> 房间</a>
                </li>
                <li>
                    <a <?= $active[3]; ?> href="<?=site_url('backstage/brands')?>"><i class="fa fa-bar-chart-o fa-3x"></i> 公告</a>
                </li>
                <li>
                    <a <?= $active[4]; ?> href="<?=site_url('backstage/areas')?>"><i class="fa fa-table fa-3x"></i> 城市管理</a>
                </li>
<!--                <li>-->
<!--                    <a href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="registeration.html"><i class="fa fa-laptop fa-3x"></i> Registeration</a>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span-->
<!--                                class="fa arrow"></span></a>-->
<!--                    <ul class="nav nav-second-level">-->
<!--                        <li>-->
<!--                            <a href="#">Second Level Link</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#">Second Level Link</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#">Second Level Link<span class="fa arrow"></span></a>-->
<!--                            <ul class="nav nav-third-level">-->
<!--                                <li>-->
<!--                                    <a href="#">Third Level Link</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">Third Level Link</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">Third Level Link</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>-->
<!--                </li>-->
            </ul>
        </div>
    </nav>
    <script>
//        var list = document.querySelectorAll('#main-menu li a');
//        for(var i = 0; i < list.length; i++ ){
//            console.log(list[i]);
//            list[i].onclick = function () {
//                this.className = 'active-menu';
//            }
//        }
        //console.log( document.querySelector('#main-menu').find('a'));
    </script>
</div>