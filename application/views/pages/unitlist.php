<link rel="stylesheet" href="<?= base_url(); ?>static/css/main_unitlist.css">
<script type="text/javascript">
    document.querySelector('#tujia_page_navbar').style.position = 'relative';
</script>
<div class="unitList-con unitLattice-con">
    <div id="unitList-container">
        <div class="searchresult-cont lattice-con">
            <ul class="nineLattice clearfix">
                <?php
                foreach ($rooms as $item) {
                    ?>

                    <li class="listLi">
                        <div class="topImg">
                            <a class="house-detail-link" href="<?= site_url('page/roominfo'); ?>" target="_blank">
                                <img class="lazy"
                                     _src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141309125213_300_200.jpg"
                                     data-original="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141309125213_300_200.jpg"
                                     width="370px" height="232px"
                                     style="display: inline;"></a>
                            <!--<div class="label-tag"><img src= /> </div>-->
                            <div class="label-tag">
                                <div class="noMmpty"></div>
                            </div>
                        </div>
                        <div class="house-title">
                            <div class="house-name">
                                <a class="house-detail-link" href="https://www.tujia.com/detail/393844.htm"
                                   target="_blank"><?= $item['summary']; ?></a></div>

                            <div class="price">
                                <a class="house-detail-link" href="https://www.tujia.com/detail/393844.htm"
                                   target="_blank">￥<?= $item['price']; ?></a></div>
                        </div>
                        <div class="house-address">
                            <div class="region" data-value="507" data-label="双流区"><a><?= $item['city']; ?></a></div>
                            <!--<div class="address"></div>-->

                            <div class="left-con"><?= $item['address']; ?></div>

                            <!--<div class="preferredLabel">优选</div>-->
                        </div>
                        <div class="house-detail">
                            <?= $item['bedroom'] . '居/' . $item['area'] . '平米/宜住' . $item['suggest_count'] . '人'; ?>
                            <a class="house-detail-link" href="https://www.tujia.com/detail/393844.htm#comment"
                               target="_blank"><span><b><?= $item['grade']; ?></b>分</span>/25条评论</a></div>
                    </li>

                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>