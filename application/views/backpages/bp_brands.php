<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>房间信息</h2>
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
                        用户信息
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>标题</th>
                                    <th>发布时间</th>
                                    <th>内容</th>
                                    <th>发布者</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($res as $key => $val) {
                                    echo
                                        "<tr class=' '>
                                    <td value='" . $val["id"] . "'>" . $val["id"] . "</td>
                                    <td>" . $val["title"] . "</td>
                                    <td>" . $val["time"] . "</td>
                                    <td>" . $val["content"] . "</td>
                                    <td>" . $val["author"] . "</td>
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

        <div class="row">
            <hr>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button class="btn btn-success" id="btn-pub"
                            onclick="$('#pub-brand').fadeIn();$(this).hide();">发布公告</button>
                </div>
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
                            <button class="btn btn-default" id="btn-save">提交</button>
                        </div>
                    </div>
                </form>
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
<?php $this->load->view('templates/editor_header'); ?>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
        var um = UM.getEditor('myEditor');
        $('.edui-container').css('width', '100%');//编辑器适配大小
        $('#btn-save').click(submitBrand);
    });

    function submitBrand() {
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
        form.title = $('#title').val();
        form.author = $('#author').val();
        form.content = UM.getEditor('myEditor').getContent();
        $.ajax({
            method: 'post',
            url: indexHost + 'index.php/api/submit_brand',
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
        })
    }
</script>