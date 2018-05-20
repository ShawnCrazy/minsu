<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>订单信息</h2>
                <!--                <h5>Welcome Jhon Deo , Love to see you back. </h5>-->
            </div>
        </div>
        <!-- /. ROW  -->
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        订单信息
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>用户</th>
                                    <th>房间号</th>
                                    <th>开始时间</th>
                                    <th>结束时间</th>
                                    <th>当前状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($res as $key => $val) {
                                    echo
                                        "<tr class=' '>
                                    <td value='" . $val["id"] . "'>" . $val["id"] . "</td>
                                    <td>" . $val["user_id"] . "</td>
                                    <td>" . $val["room_id"] . "</td>
                                    <td>" . $val["begin"] . "</td>
                                    <td>" . $val["end"] . "</td>
                                    <td>" . $val["state"] . "</td>
                                    <td>
                                    <button class='btn-success'>修改</button>
                                    <button class='btn-danger bp-delete'>删除</button>
                                    </td></tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
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
<!-- DATA TABLE SCRIPTS -->
<script src="<?= base_url() ?>assets/js/dataTables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- CUSTOM SCRIPTS -->
<script src="<?= base_url() ?>assets/js/custom.js"></script>
<!--自定义交互脚本-->
<script type="text/javascript">
    $(".bp-delete").click(function () {
        var formInfo = {};
        var currentNode = $(this).parent().parent().children('td');
        formInfo.id = currentNode.first().text();
        if (confirm("确定要删除？")) {
            $.ajax({
                method: 'post',
                url: "<?php echo site_url('page/orders')?>",
                data: formInfo,
                success: function (data) {
                    if ($.parseJSON(data).id == formInfo.id) {
                        currentNode.remove();
                    }
                }
            });
        }
    });
    $(".bp-delete").click(function () {
        $.ajax({
            method: 'post',
            url: "<?php echo site_url('api/get_table')?>",
            data: {table: 'order', key: '已付款'},
            success: function (data) {
                console.log(data);
            }
        });
    })
</script>
</body>
</html>