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
                                    <th>城市名</th>
                                    <th>拼音</th>
                                    <th>所属城市序号</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($res as $key => $val) {
                                    echo
                                        "<tr class=' '>
                                    <td value='" . $val["id"] . "'>" . $val["id"] . "</td>
                                    <td>" . $val["name"] . "</td>
                                    <td>" . $val["py"] . "</td>
                                    <td>" . $val["belong"] . "</td>
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
                            onclick="$('#pub-brand').fadeIn();$(this).hide();">添加城市</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="tab-pane" style="display: none;" id="pub-brand">
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
        $('#btn-save').click(submitArea);
    });

    function submitArea() {
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
        form.name = $('#city-name').val();
        form.py = $('#py').val();
        form.belong = $('#belong').val();
        form.indexchar = form.py.toUpperCase()[0];
        $.ajax({
            method: 'post',
            url: indexHost + 'index.php/api/submit_tutu/area',
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