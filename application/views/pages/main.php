<div id="app">
    <div class="fluid booking rel t-navbar-fixed">
        <ul class="slider clearfix" id="sliderBanner">
            <!--            <li class="slider-item" style="display:block"><a href="javascript:;"></a></li>-->
            <li class="slider-item" style="display: block; opacity: 1;">
                <a target="_blank" href="javascript:;">
                    <img alt="途家疯狂特卖会"
                         src="<?= base_url(); ?>static/img/bg_temp2018-4-1.jpg"
                         data-source="<?= base_url(); ?>static/img/bg_temp2018-4-1.jpg">
                </a>
            </li>
            <li class="slider-item" style="opacity: 1; display: none;">
                <a target="_blank" href="javascript:;">
                    <img alt="杭州西湖龙井村陇景伍捌豪华民宿"
                         src="<?= base_url(); ?>static/img/bg_temp2018-4-2.jpg"
                         data-source="<?= base_url(); ?>static/img/bg_temp2018-4-2.jpg">
                </a>
            </li>
            <li class="slider-item" style="opacity: 1; display: none;">
                <a target="_blank" href="javascript:;">
                    <img alt="三亚毗邻亚龙湾人间天堂四居泳池度假别墅"
                         src="<?= base_url(); ?>static/img/bg_temp2018-4-3.jpg"
                         ata-source="<?= base_url(); ?>static/img/bg_temp2018-4-3.jpg">
                </a>
            </li>
        </ul>
        <ul class="slider-ctrl">
            <li>
                <a href="javascript:;" class="slider-ctrl-item slider-ctrl-prev -slider-ctrl-disable">向上</a>
                <a href="javascript:;" class="slider-ctrl-item slider-ctrl-next -slider-ctrl-disable">向下</a>
            </li>
        </ul>
        <span class="slider-index"><b></b></span>
        <div class="booking-widget">
            <div class="fluid-content tc">
                <form class="booking-search rel" action="<?= site_url('page/unitlist') ?>" name="bookingSearch"
                      method="post">
                    <input type="hidden" name="startDate" id="startDate">
                    <input type="hidden" name="endDate" id="endDate">
                    <input type="hidden" name="hc" id="hc">
                    <ul class="clearfix">
                        <li class="lst-item clearfix"><label for="cityBooking" class="icon icon-loc"></label>
                            <input autocomplete="off" type="text" name="city" id="cityBooking" value="" data-index="-1">
                            <label class="placeholder" for="cityBooking">市级城市</label>
                        </li>
                        <li class="lst-item clearfix"><label for="areaBooking" class="icon icon-loc"></label>
                            <input autocomplete="off" type="text" name="area" id="areaBooking" value="">
                            <label class="placeholder" for="areaBooking">区/县</label>
                        </li>

                        <li class="lst-item lst-item-sep clearfix" id="checkInOutWrapper">
                            <label for="checkInOutBooking" class="icon icon-date"></label>
                            <input readonly="readonly" type="text" class="check-io" name="checkInOut"
                                   id="checkInOutBooking" value="">
                        </li>
                        <li class="lst-item lst-item-sep clearfix">
                            <label for="count" class="icon icon-hc"></label>
                            <input readonly="readonly" type="text" class="count" name="count" id="count" value="不限">
                            <label for="count" class="icon icon-dd"></label>
                        </li>
                        <li class="lst-item btn-lst-item clearfix">
                            <a href="javascript:;" class="btn-med" id="performSearch">搜索</a>
                        </li>
                    </ul>
                    <div class="t-layer t-layer-city clearfix hide">
                        <ul class="t-tab-ver" id="outerTab">
                            <!--tab-->
                            <!--li class="t-tab-ver-itm t-tab-ver-itm-on" _twi="0"><a href="javascript:;">推荐</a></li-->
                            <li class="t-tab-ver-itm  t-tab-ver-itm-on" _twi="1"><a href="javascript:;">国内</a></li>
                            <li class="t-tab-ver-itm" _twi="2"><a href="javascript:;">海外</a></li>
                        </ul>
                        <ul class="t-tab-ver-con" id="outerTabContent">

                            <!--li class="t-tab-ver-con-item" style="display:block" id="recAndSugBox">

                                <dl class="t-layer-sec-loc">

                                    <dt>热门商圈</dt>
                                    <dd>
                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="c" data-dest-name="" data-dest-id="" data-name="春熙路/盐市口"
                                           data-value="104" data-echo-name="春熙路/盐市口" data-cond-type="11">
                                            春熙路/盐市口
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="c" data-dest-name="" data-dest-id="" data-name="宽窄巷子"
                                           data-value="105" data-echo-name="宽窄巷子" data-cond-type="11">
                                            宽窄巷子
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="c" data-dest-name="" data-dest-id="" data-name="天府广场"
                                           data-value="842" data-echo-name="天府广场" data-cond-type="11">
                                            天府广场
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="c" data-dest-name="" data-dest-id="" data-name="骡马市"
                                           data-value="7087" data-echo-name="骡马市" data-cond-type="11">
                                            骡马市
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="c" data-dest-name="" data-dest-id="" data-name="青城山"
                                           data-value="96" data-echo-name="青城山" data-cond-type="11">
                                            青城山
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="c" data-dest-name="" data-dest-id="" data-name="玉林"
                                           data-value="8244" data-echo-name="玉林" data-cond-type="11">
                                            玉林
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="c" data-dest-name="" data-dest-id="" data-name="街子古镇"
                                           data-value="101" data-echo-name="街子古镇" data-cond-type="11">
                                            街子古镇
                                        </a>


                                    </dd>

                                    <dt>机场车站</dt>
                                    <dd>
                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="成都双流国际机场"
                                           data-value="2452" data-echo-name="成都双流国际机场" data-cond-type="16">
                                            成都双流国际机场
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="成都火车北站"
                                           data-value="3676" data-echo-name="成都火车北站" data-cond-type="15">
                                            成都火车北站
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="成都火车东站"
                                           data-value="3675" data-echo-name="成都火车东站" data-cond-type="15">
                                            成都火车东站
                                        </a>


                                    </dd>

                                    <dt>热门景点</dt>
                                    <dd>
                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="宽窄巷子"
                                           data-value="4062" data-echo-name="宽窄巷子" data-cond-type="19">
                                            宽窄巷子
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="锦里古街"
                                           data-value="4053" data-echo-name="锦里古街" data-cond-type="19">
                                            锦里古街
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="武侯祠"
                                           data-value="4048" data-echo-name="武侯祠" data-cond-type="19">
                                            武侯祠
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="环球中心"
                                           data-value="6958" data-echo-name="环球中心" data-cond-type="19">
                                            环球中心
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="大邑刘氏庄园"
                                           data-value="4072" data-echo-name="大邑刘氏庄园" data-cond-type="19">
                                            大邑刘氏庄园
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="宝光寺"
                                           data-value="4071" data-echo-name="宝光寺" data-cond-type="19">
                                            宝光寺
                                        </a>

                                        <a class="t-layer-dest-item-sug" href="javascript:;" data-id=""
                                           data-searchtype="d" data-dest-name="" data-dest-id="" data-name="三圣花乡"
                                           data-value="4064" data-echo-name="三圣花乡" data-cond-type="19">
                                            三圣花乡
                                        </a>


                                    </dd>

                                </dl>

                            </li-->

                            <li class="t-tab-ver-con-item" style="display: block" id="intBox">
                                <ul class="t-tab-hor clearfix" id="intCityTab">
                                    <li class="t-tab-hor-item t-hor-on" _twi="0"><a href="javascript:;">热门</a></li>
                                    <li class="t-tab-hor-item" _twi="1"><a href="javascript:;">ABCDEF</a></li>
                                    <li class="t-tab-hor-item" _twi="2"><a href="javascript:;">GHIJK</a></li>
                                    <li class="t-tab-hor-item" _twi="3"><a href="javascript:;">LMNOPQ</a></li>
                                    <li class="t-tab-hor-item" _twi="4"><a href="javascript:;">RSTUVW</a></li>
                                    <li class="t-tab-hor-item" _twi="5"><a href="javascript:;">XYZ</a></li>
                                </ul>
                                <ul class="t-tab-hor-con" id="intCityContent">

                                    <li class="t-tab-hor-con-item" style="display:block">

                                        <dl class="t-layer-city-group-sec clearfix no-group">
                                            <dt></dt>
                                            <dd class="clearfix">
                                                <?php
                                                foreach ($areas as $area) {
                                                    if ($area['belong'] == 0) {
                                                        ?>
                                                        <a class="t-city-item" href="javascript:;"
                                                           data-sug-ext-link="beijing_gongyu_r48"
                                                           data-sug-type="<?= $area['sug_type']; ?>"
                                                           data-py="<?= $area['py']; ?>"
                                                           data-cid="<?= $area['id']; ?>"><?= $area['name']; ?></a>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>A</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="aba_gongyu_r107"
                                                                    data-sug-type="1" data-py="aba"
                                                                    data-cid="107">阿坝</a><a class="t-city-item"
                                                                                            href="javascript:;"
                                                                                            data-sug-ext-link="aletai_gongyu_r382"
                                                                                            data-sug-type="1"
                                                                                            data-py="aletai"
                                                                                            data-cid="382">阿勒泰</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="alashan_gongyu_r267" data-sug-type="1"
                                                        data-py="alashan" data-cid="267">阿拉善</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="ankang_gongyu_r307"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="ankang"
                                                                                                   data-cid="307">安康</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="anqing_gongyu_r227" data-sug-type="1"
                                                        data-py="anqing" data-cid="227">安庆</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="anshun_gongyu_r120"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="anshun"
                                                                                                 data-cid="120">安顺</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="anyang_gongyu_r173" data-sug-type="1"
                                                        data-py="anyang" data-cid="173">安阳</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="anshan_gongyu_r127"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="anshan"
                                                                                                 data-cid="127">鞍山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="alaer_gongyu_r385" data-sug-type="1"
                                                        data-py="alaer" data-cid="385">阿拉尔</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="akesu_gongyu_r374"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="akesu"
                                                                                                 data-cid="374">阿克苏</a>
                                            </dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>B</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="beijing_gongyu_r48"
                                                                    data-sug-type="1" data-py="beijing"
                                                                    data-cid="48">北京</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="boao_gongyu_r2"
                                                                                           data-sug-type="1"
                                                                                           data-py="boao" data-cid="2">博鳌(琼海)</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="beihai_gongyu_r251" data-sug-type="1"
                                                        data-py="beihai" data-cid="251">北海</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="baoding_gongyu_r157"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="baoding"
                                                                                                 data-cid="157">保定</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="baoshan_gongyu_r360" data-sug-type="1"
                                                        data-py="baoshan" data-cid="360">保山</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="binzhou_gongyu_r214"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="binzhou"
                                                                                                  data-cid="214">滨州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="bengbu_gongyu_r225" data-sug-type="1"
                                                        data-py="bengbu" data-cid="225">蚌埠</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="baoji_gongyu_r302"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="baoji"
                                                                                                 data-cid="302">宝鸡</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="bayinguoleng_gongyu_r377" data-sug-type="1"
                                                        data-py="bayinguoleng" data-cid="377">巴音郭楞</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="boertala_gongyu_r379" data-sug-type="1"
                                                        data-py="boertala" data-cid="379">博尔塔拉</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="baotou_gongyu_r257"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="baotou"
                                                                                                     data-cid="257">包头</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="baishan_gongyu_r194" data-sug-type="1"
                                                        data-py="baishan" data-cid="194">白山</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="benxiln_gongyu_r134"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="benxiln"
                                                                                                  data-cid="134">本溪</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="baoting_gongyu_r4054" data-sug-type="1"
                                                        data-py="baoting" data-cid="4054">保亭</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="bijie_gongyu_r122"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="bijie"
                                                                                                   data-cid="122">毕节</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="baise_gongyu_r247" data-sug-type="1"
                                                        data-py="baise" data-cid="247">百色</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="bazhong_gongyu_r105"
                                                                                                data-sug-type="1"
                                                                                                data-py="bazhong"
                                                                                                data-cid="105">巴中</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="baicheng_gongyu_r196" data-sug-type="1"
                                                        data-py="baicheng" data-cid="196">白城</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>C</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="chengdu_gongyu_r10"
                                                                    data-sug-type="1" data-py="chengdu"
                                                                    data-cid="10">成都</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="chongqing_gongyu_r22"
                                                                                           data-sug-type="1"
                                                                                           data-py="chongqing"
                                                                                           data-cid="22">重庆</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="changchun_gongyu_r189" data-sug-type="1"
                                                        data-py="changchun" data-cid="189">长春</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="changsha_gongyu_r63"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="changsha"
                                                                                                    data-cid="63">长沙</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="changbaishan_gongyu_r408" data-sug-type="1"
                                                        data-py="changbaishan" data-cid="408">长白山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="changzhou_gongyu_r21" data-sug-type="1"
                                                        data-py="changzhou" data-cid="21">常州</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="chengde_gongyu_r158"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="chengde"
                                                                                                   data-cid="158">承德</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="changzhi_gongyu_r272" data-sug-type="1"
                                                        data-py="changzhi" data-cid="272">长治</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="chenzhou_gongyu_r339"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="chenzhou"
                                                                                                   data-cid="339">郴州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="changde_gongyu_r338" data-sug-type="1"
                                                        data-py="changde" data-cid="338">常德</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="chifeng_gongyu_r259"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="chifeng"
                                                                                                  data-cid="259">赤峰</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="changjiang_gongyu_r4051" data-sug-type="1"
                                                        data-py="changjiang" data-cid="4051">昌江</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="chengmai_gongyu_r4047" data-sug-type="1"
                                                        data-py="chengmai" data-cid="4047">澄迈</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="chuxiong_gongyu_r365"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="chuxiong"
                                                                                                    data-cid="365">楚雄</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="chuzhou_gongyu_r228" data-sug-type="1"
                                                        data-py="chuzhou" data-cid="228">滁州</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="chizhou_gongyu_r237"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="chizhou"
                                                                                                  data-cid="237">池州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="cangzhou_gongyu_r159" data-sug-type="1"
                                                        data-py="cangzhou" data-cid="159">沧州</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="changji_gongyu_r378"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="changji"
                                                                                                   data-cid="378">昌吉</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="chaozhou_gongyu_r83" data-sug-type="1"
                                                        data-py="chaozhou" data-cid="83">潮州</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="chongzuo_gongyu_r254"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="chongzuo"
                                                                                                  data-cid="254">崇左</a>
                                            </dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>D</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="dali_gongyu_r36"
                                                                    data-sug-type="1" data-py="dali"
                                                                    data-cid="36">大理</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="dalian_gongyu_r18"
                                                                                           data-sug-type="1"
                                                                                           data-py="dalian"
                                                                                           data-cid="18">大连</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="dunhuang_gongyu_r398" data-sug-type="1"
                                                        data-py="dunhuang" data-cid="398">敦煌</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="dongguan_gongyu_r73"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="dongguan"
                                                                                                   data-cid="73">东莞</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="daqing_gongyu_r202" data-sug-type="1"
                                                        data-py="daqing" data-cid="202">大庆</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="dandong_gongyu_r129"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="dandong"
                                                                                                 data-cid="129">丹东</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="dehong_gongyu_r366" data-sug-type="1"
                                                        data-py="dehong" data-cid="366">德宏</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="danzhou_gongyu_r3973"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="danzhou"
                                                                                                 data-cid="3973">儋州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="dongying_gongyu_r211" data-sug-type="1"
                                                        data-py="dongying" data-cid="211">东营</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="deyang_gongyu_r91"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="deyang"
                                                                                                   data-cid="91">德阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="dezhou_gongyu_r219" data-sug-type="1"
                                                        data-py="dezhou" data-cid="219">德州</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="datong_gongyu_r270"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="datong"
                                                                                                 data-cid="270">大同</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="dingan_gongyu_r4049" data-sug-type="1"
                                                        data-py="dingan" data-cid="4049">定安</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="dongfang_gongyu_r4062"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="dongfang"
                                                                                                  data-cid="4062">东方</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="dazhou_gongyu_r96" data-sug-type="1"
                                                        data-py="dazhou" data-cid="96">达州</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="daxinganling_gongyu_r209"
                                                                                                data-sug-type="1"
                                                                                                data-py="daxinganling"
                                                                                                data-cid="209">大兴安岭</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="dingxi_gongyu_r296" data-sug-type="1"
                                                        data-py="dingxi" data-cid="296">定西</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>E</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="emeishan_gongyu_r40"
                                                                    data-sug-type="1" data-py="emeishan" data-cid="40">峨眉山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="ezhou_gongyu_r323" data-sug-type="1"
                                                        data-py="ezhou" data-cid="323">鄂州</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="eerduosi_gongyu_r261"
                                                                                                data-sug-type="1"
                                                                                                data-py="eerduosi"
                                                                                                data-cid="261">鄂尔多斯</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="enshih_gongyu_r330" data-sug-type="1"
                                                        data-py="enshih" data-cid="330">恩施</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>F</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="fangchenggang_gongyu_r252"
                                                                    data-sug-type="1" data-py="fangchenggang"
                                                                    data-cid="252">防城港</a><a class="t-city-item"
                                                                                             href="javascript:;"
                                                                                             data-sug-ext-link="fuzhou_gongyu_r145"
                                                                                             data-sug-type="1"
                                                                                             data-py="fuzhou"
                                                                                             data-cid="145">福州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="foshan_gongyu_r68" data-sug-type="1"
                                                        data-py="foshan" data-cid="68">佛山</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="fuyanga_gongyu_r229"
                                                                                                data-sug-type="1"
                                                                                                data-py="fuyanga"
                                                                                                data-cid="229">阜阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="fushunl_gongyu_r128" data-sug-type="1"
                                                        data-py="fushunl" data-cid="128">抚顺</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="fuzhou2_gongyu_r355"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="fuzhou2"
                                                                                                  data-cid="355">抚州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="fenghuang_gongyu_r405" data-sug-type="1"
                                                        data-py="fenghuang" data-cid="405">凤凰(湘西)</a></dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>G</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="guangzhou_gongyu_r45"
                                                                    data-sug-type="1" data-py="guangzhou" data-cid="45">广州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="guilin_gongyu_r32" data-sug-type="1"
                                                        data-py="guilin" data-cid="32">桂林</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="guiyang_gongyu_r117"
                                                                                                data-sug-type="1"
                                                                                                data-py="guiyang"
                                                                                                data-cid="117">贵阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="guigang_gongyu_r245" data-sug-type="1"
                                                        data-py="guigang" data-cid="245">贵港</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="ganzhou_gongyu_r352"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="ganzhou"
                                                                                                  data-cid="352">赣州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="guyuann_gongyu_r285" data-sug-type="1"
                                                        data-py="guyuann" data-cid="285">固原</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="ganzi_gongyu_r108"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="ganzi"
                                                                                                  data-cid="108">甘孜</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="gaoxiong_gongyu_r3996" data-sug-type="1"
                                                        data-py="gaoxiong" data-cid="3996">高雄</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="gannan_gongyu_r299"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="gannan"
                                                                                                    data-cid="299">甘南</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="guangyuan_gongyu_r99" data-sug-type="1"
                                                        data-py="guangyuan" data-cid="99">广元</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>H</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="haerbin_gongyu_r64"
                                                                    data-sug-type="1" data-py="haerbin" data-cid="64">哈尔滨</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="hangzhou_gongyu_r7" data-sug-type="1"
                                                        data-py="hangzhou" data-cid="7">杭州</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="hefei_gongyu_r50"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="hefei"
                                                                                                 data-cid="50">合肥</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="heyuan_gongyu_r80" data-sug-type="1"
                                                        data-py="heyuan" data-cid="80">河源</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="huizhou_gongyu_r72"
                                                                                                data-sug-type="1"
                                                                                                data-py="huizhou"
                                                                                                data-cid="72">惠州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="huangshan_gongyu_r6" data-sug-type="1"
                                                        data-py="huangshan" data-cid="6">黄山</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="huaian_gongyu_r140"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="huaian"
                                                                                                  data-cid="140">淮安</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="haikou_gongyu_r255" data-sug-type="1"
                                                        data-py="haikou" data-cid="255">海口</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="huaibei_gongyu_r234"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="huaibei"
                                                                                                 data-cid="234">淮北</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="huainan_gongyu_r233" data-sug-type="1"
                                                        data-py="huainan" data-cid="233">淮南</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="hailuogou_gongyu_r409"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="hailuogou"
                                                                                                  data-cid="409">海螺沟</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="honghezhou_gongyu_r364" data-sug-type="1"
                                                        data-py="honghezhou" data-cid="364">红河州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="huhehaote_gongyu_r256" data-sug-type="1"
                                                        data-py="huhehaote" data-cid="256">呼和浩特</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="hulunbeier_gongyu_r262" data-sug-type="1"
                                                        data-py="hulunbeier" data-cid="262">呼伦贝尔</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="hanzhong_gongyu_r305" data-sug-type="1"
                                                        data-py="hanzhong" data-cid="305">汉中</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="huangshi_gongyu_r317"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="huangshi"
                                                                                                   data-cid="317">黄石</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="huzhou_gongyu_r111" data-sug-type="1"
                                                        data-py="huzhou" data-cid="111">湖州</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="hualian_gongyu_r3997"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="hualian"
                                                                                                 data-cid="3997">花莲</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="huludao_gongyu_r133" data-sug-type="1"
                                                        data-py="huludao" data-cid="133">葫芦岛</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="huanggang_gongyu_r327"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="huanggang"
                                                                                                   data-cid="327">黄冈</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="huaihua_gongyu_r344" data-sug-type="1"
                                                        data-py="huaihua" data-cid="344">怀化</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="heze_gongyu_r221"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="heze"
                                                                                                  data-cid="221">菏泽</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="hainanzhou_gongyu_r313" data-sug-type="1"
                                                        data-py="hainanzhou" data-cid="313">海南州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="haibeiqh_gongyu_r311" data-sug-type="1"
                                                        data-py="haibeiqh" data-cid="311">海北</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="haidong_gongyu_r310"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="haidong"
                                                                                                   data-cid="310">海东</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="haixi_gongyu_r316" data-sug-type="1"
                                                        data-py="haixi" data-cid="316">海西</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="hechi_gongyu_r248"
                                                                                                data-sug-type="1"
                                                                                                data-py="hechi"
                                                                                                data-cid="248">河池</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="hengshui_gongyu_r161" data-sug-type="1"
                                                        data-py="hengshui" data-cid="161">衡水</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="hezhou_gongyu_r253"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="hezhou"
                                                                                                   data-cid="253">贺州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="handan_gongyu_r155" data-sug-type="1"
                                                        data-py="handan" data-cid="155">邯郸</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="hami_gongyu_r372"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="hami"
                                                                                                 data-cid="372">哈密</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="heihe_gongyu_r205" data-sug-type="1"
                                                        data-py="heihe" data-cid="205">黑河</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="hengyang_gongyu_r335"
                                                                                                data-sug-type="1"
                                                                                                data-py="hengyang"
                                                                                                data-cid="335">衡阳</a>
                                            </dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>J</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="jinan_gongyu_r19"
                                                                    data-sug-type="1" data-py="jinan"
                                                                    data-cid="19">济南</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="jiuzhaigou_gongyu_r15"
                                                                                           data-sug-type="1"
                                                                                           data-py="jiuzhaigou"
                                                                                           data-cid="15">九寨沟</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jingdezhen_gongyu_r347" data-sug-type="1"
                                                        data-py="jingdezhen" data-cid="347">景德镇</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jiaxing_gongyu_r110" data-sug-type="1"
                                                        data-py="jiaxing" data-cid="110">嘉兴</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="jining_gongyu_r215"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="jining"
                                                                                                  data-cid="215">济宁</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jilinj_gongyu_r190" data-sug-type="1"
                                                        data-py="jilinj" data-cid="190">吉林</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="jiayuguan_gongyu_r300"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="jiayuguan"
                                                                                                 data-cid="300">嘉峪关</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jiuquan_gongyu_r294" data-sug-type="1"
                                                        data-py="jiuquan" data-cid="294">酒泉</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="jinhua_gongyu_r113"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="jinhua"
                                                                                                  data-cid="113">金华</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jinmen_gongyu_r4027" data-sug-type="1"
                                                        data-py="jinmen" data-cid="4027">金门</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="jiaozuo_gongyu_r170"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="jiaozuo"
                                                                                                  data-cid="170">焦作</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jiangmen_gongyu_r70" data-sug-type="1"
                                                        data-py="jiangmen" data-cid="70">江门</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="jian_gongyu_r353"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="jian"
                                                                                                  data-cid="353">吉安</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jinzhong_gongyu_r275" data-sug-type="1"
                                                        data-py="jinzhong" data-cid="275">晋中</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="jincheng_gongyu_r273"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="jincheng"
                                                                                                   data-cid="273">晋城</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jingmen_gongyu_r322" data-sug-type="1"
                                                        data-py="jingmen" data-cid="322">荆门</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="jingzhou_gongyu_r320"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="jingzhou"
                                                                                                  data-cid="320">荆州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jiujiangjx_gongyu_r349" data-sug-type="1"
                                                        data-py="jiujiangjx" data-cid="349">九江</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="jieyang_gongyu_r84"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="jieyang"
                                                                                                     data-cid="84">揭阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jinzhou_gongyu_r130" data-sug-type="1"
                                                        data-py="jinzhou" data-cid="130">锦州</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="jixi_gongyu_r199"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="jixi"
                                                                                                  data-cid="199">鸡西</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jiamusi_gongyu_r204" data-sug-type="1"
                                                        data-py="jiamusi" data-cid="204">佳木斯</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="jiyuan_gongyu_r176"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="jiyuan"
                                                                                                   data-cid="176">济源</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jilong_gongyu_r3998" data-sug-type="1"
                                                        data-py="jilong" data-cid="3998">基隆</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="jiayi_gongyu_r4000"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="jiayi"
                                                                                                  data-cid="4000">嘉义</a>
                                            </dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>K</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="kunming_gongyu_r31"
                                                                    data-sug-type="1" data-py="kunming"
                                                                    data-cid="31">昆明</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="kunshan_gongyu_r46"
                                                                                           data-sug-type="1"
                                                                                           data-py="kunshan"
                                                                                           data-cid="46">昆山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="kaifeng_gongyu_r177" data-sug-type="1"
                                                        data-py="kaifeng" data-cid="177">开封</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="kashi_gongyu_r375"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="kashi"
                                                                                                  data-cid="375">喀什</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="kelamayi_gongyu_r370" data-sug-type="1"
                                                        data-py="kelamayi" data-cid="370">克拉玛依</a></dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>L</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="lasa_gongyu_r389"
                                                                    data-sug-type="1" data-py="lasa"
                                                                    data-cid="389">拉萨</a><a class="t-city-item"
                                                                                            href="javascript:;"
                                                                                            data-sug-ext-link="lanzhou_gongyu_r287"
                                                                                            data-sug-type="1"
                                                                                            data-py="lanzhou"
                                                                                            data-cid="287">兰州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="lijiang_gongyu_r12" data-sug-type="1"
                                                        data-py="lijiang" data-cid="12">丽江</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="lianyungang_gongyu_r39"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="lianyungang"
                                                                                                 data-cid="39">连云港</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="lingshui_gongyu_r5" data-sug-type="1"
                                                        data-py="lingshui" data-cid="5">陵水(三亚)</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="lishuiz_gongyu_r116"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="lishuiz"
                                                                                                     data-cid="116">丽水</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="lushan_gongyu_r42" data-sug-type="1"
                                                        data-py="lushan" data-cid="42">庐山</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="linzhi_gongyu_r395"
                                                                                                data-sug-type="1"
                                                                                                data-py="linzhi"
                                                                                                data-cid="395">林芝</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="luoyang_gongyu_r168" data-sug-type="1"
                                                        data-py="luoyang" data-cid="168">洛阳</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="linyi2_gongyu_r218"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="linyi2"
                                                                                                  data-cid="218">临沂</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="longyan_gongyu_r151" data-sug-type="1"
                                                        data-py="longyan" data-cid="151">龙岩</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="leshan_gongyu_r93"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="leshan"
                                                                                                  data-cid="93">乐山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="ledongxian_gongyu_r3993" data-sug-type="1"
                                                        data-py="ledongxian" data-cid="3993">乐东</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="luzhou_gongyu_r90" data-sug-type="1"
                                                        data-py="luzhou" data-cid="90">泸州</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="linfen_gongyu_r278"
                                                                                                data-sug-type="1"
                                                                                                data-py="linfen"
                                                                                                data-cid="278">临汾</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="liuan_gongyu_r232" data-sug-type="1"
                                                        data-py="liuan" data-cid="232">六安</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="liupanshui_gongyu_r118"
                                                                                                data-sug-type="1"
                                                                                                data-py="liupanshui"
                                                                                                data-cid="118">六盘水</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="langfang_gongyu_r160" data-sug-type="1"
                                                        data-py="langfang" data-cid="160">廊坊</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="laibin_gongyu_r249"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="laibin"
                                                                                                   data-cid="249">来宾</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="liaocheng_gongyu_r220" data-sug-type="1"
                                                        data-py="liaocheng" data-cid="220">聊城</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="loudi_gongyu_r341"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="loudi"
                                                                                                    data-cid="341">娄底</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="liuzhou_gongyu_r242" data-sug-type="1"
                                                        data-py="liuzhou" data-cid="242">柳州</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="laiwu_gongyu_r213"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="laiwu"
                                                                                                  data-cid="213">莱芜</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="lvliang_gongyu_r279" data-sug-type="1"
                                                        data-py="lvliang" data-cid="279">吕梁</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="lingao_gongyu_r4048"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="lingao"
                                                                                                  data-cid="4048">临高</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="linxia_gongyu_r298" data-sug-type="1"
                                                        data-py="linxia" data-cid="298">临夏</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="longnan_gongyu_r297"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="longnan"
                                                                                                 data-cid="297">陇南</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="liangshan_gongyu_r97" data-sug-type="1"
                                                        data-py="liangshan" data-cid="97">凉山</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>M</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="mianyang_gongyu_r92"
                                                                    data-sug-type="1" data-py="mianyang" data-cid="92">绵阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="mudanjiang_gongyu_r208" data-sug-type="1"
                                                        data-py="mudanjiang" data-cid="208">牡丹江</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="meishan_gongyu_r103" data-sug-type="1"
                                                        data-py="meishan" data-cid="103">眉山</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="maoming_gongyu_r71"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="maoming"
                                                                                                  data-cid="71">茂名</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="meizhou_gongyu_r78" data-sug-type="1"
                                                        data-py="meizhou" data-cid="78">梅州</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="manzhouli_gongyu_r400"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="manzhouli"
                                                                                                 data-cid="400">满洲里</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="maanshan_gongyu_r226" data-sug-type="1"
                                                        data-py="maanshan" data-cid="226">马鞍山</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="miaoli_gongyu_r4001"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="miaoli"
                                                                                                    data-cid="4001">苗栗</a>
                                            </dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>N</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="nanjing_gongyu_r9"
                                                                    data-sug-type="1" data-py="nanjing"
                                                                    data-cid="9">南京</a><a class="t-city-item"
                                                                                          href="javascript:;"
                                                                                          data-sug-ext-link="nantong_gongyu_r52"
                                                                                          data-sug-type="1"
                                                                                          data-py="nantong"
                                                                                          data-cid="52">南通</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="nanchang_gongyu_r346" data-sug-type="1"
                                                        data-py="nanchang" data-cid="346">南昌</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="nanning_gongyu_r250"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="nanning"
                                                                                                   data-cid="250">南宁</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="ningbo_gongyu_r16" data-sug-type="1"
                                                        data-py="ningbo" data-cid="16">宁波</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="ningde_gongyu_r152"
                                                                                                data-sug-type="1"
                                                                                                data-py="ningde"
                                                                                                data-cid="152">宁德</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="nanyang_gongyu_r175" data-sug-type="1"
                                                        data-py="nanyang" data-cid="175">南阳</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="neijiang_gongyu_r101"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="neijiang"
                                                                                                  data-cid="101">内江</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="nanchong_gongyu_r94" data-sug-type="1"
                                                        data-py="nanchong" data-cid="94">南充</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="nantou_gongyu_r4002"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="nantou"
                                                                                                  data-cid="4002">南投</a>
                                            </dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>P</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="penglai_gongyu_r29"
                                                                    data-sug-type="1" data-py="penglai"
                                                                    data-cid="29">蓬莱</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="panzhihua_gongyu_r98"
                                                                                           data-sug-type="1"
                                                                                           data-py="panzhihua"
                                                                                           data-cid="98">攀枝花</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="pingyao_gongyu_r37" data-sug-type="1"
                                                        data-py="pingyao" data-cid="37">平遥</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="pingdingshan_gongyu_r169"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="pingdingshan"
                                                                                                 data-cid="169">平顶山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="pingxiang2_gongyu_r348" data-sug-type="1"
                                                        data-py="pingxiang2" data-cid="348">萍乡</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="panjin_gongyu_r132"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="panjin"
                                                                                                     data-cid="132">盘锦</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="putian_gongyu_r146" data-sug-type="1"
                                                        data-py="putian" data-cid="146">莆田</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="puyang_gongyu_r178"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="puyang"
                                                                                                 data-cid="178">濮阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="penghu_gongyu_r4003" data-sug-type="1"
                                                        data-py="penghu" data-cid="4003">澎湖</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="puer_gongyu_r61"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="puer"
                                                                                                  data-cid="61">普洱市</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="pingdong_gongyu_r4004" data-sug-type="1"
                                                        data-py="pingdong" data-cid="4004">屏东(垦丁)</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>Q</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="qiandaohu_gongyu_r67"
                                                                    data-sug-type="1" data-py="qiandaohu" data-cid="67">千岛湖</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qinhuangdao_gongyu_r65" data-sug-type="1"
                                                        data-py="qinhuangdao" data-cid="65">秦皇岛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qingdao_gongyu_r8" data-sug-type="1"
                                                        data-py="qingdao" data-cid="8">青岛</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="quanzhou_gongyu_r148"
                                                                                                data-sug-type="1"
                                                                                                data-py="quanzhou"
                                                                                                data-cid="148">泉州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qiannan_gongyu_r125" data-sug-type="1"
                                                        data-py="qiannan" data-cid="125">黔南</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="qiandongnan_gongyu_r124"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="qiandongnan"
                                                                                                  data-cid="124">黔东南</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qianxinan_gongyu_r123" data-sug-type="1"
                                                        data-py="qianxinan" data-cid="123">黔西南</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="qingyuan2_gongyu_r82"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="qingyuan2"
                                                                                                     data-cid="82">清远</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qinghaihu_gongyu_r403" data-sug-type="1"
                                                        data-py="qinghaihu" data-cid="403">青海湖</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="quzhouzj_gongyu_r114"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="quzhouzj"
                                                                                                     data-cid="114">衢州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qionghai_gongyu_r407" data-sug-type="1"
                                                        data-py="qionghai" data-cid="407">琼海</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="qiongzhong_gongyu_r4053"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="qiongzhong"
                                                                                                   data-cid="4053">琼中</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qinzhou_gongyu_r244" data-sug-type="1"
                                                        data-py="qinzhou" data-cid="244">钦州</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="qujing_gongyu_r358"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="qujing"
                                                                                                  data-cid="358">曲靖</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qiqihaer_gongyu_r198" data-sug-type="1"
                                                        data-py="qiqihaer" data-cid="198">齐齐哈尔</a></dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>R</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="rizhao_gongyu_r217"
                                                                    data-sug-type="1" data-py="rizhao"
                                                                    data-cid="217">日照</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>S</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="sanya_gongyu_r1"
                                                                    data-sug-type="1" data-py="sanya"
                                                                    data-cid="1">三亚</a><a class="t-city-item"
                                                                                          href="javascript:;"
                                                                                          data-sug-ext-link="shanghai_gongyu_r23"
                                                                                          data-sug-type="1"
                                                                                          data-py="shanghai"
                                                                                          data-cid="23">上海</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shangrao_gongyu_r356" data-sug-type="1"
                                                        data-py="shangrao" data-cid="356">上饶</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="shenzhen_gongyu_r49"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="shenzhen"
                                                                                                   data-cid="49">深圳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="suzhou_gongyu_r11" data-sug-type="1"
                                                        data-py="suzhou" data-cid="11">苏州</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="shenyang_gongyu_r126"
                                                                                                data-sug-type="1"
                                                                                                data-py="shenyang"
                                                                                                data-cid="126">沈阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shaoguan_gongyu_r75" data-sug-type="1"
                                                        data-py="shaoguan" data-cid="75">韶关</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="shantou_gongyu_r69"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="shantou"
                                                                                                  data-cid="69">汕头</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shanwei_gongyu_r79" data-sug-type="1"
                                                        data-py="shanwei" data-cid="79">汕尾</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="shaoxing_gongyu_r112"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="shaoxing"
                                                                                                 data-cid="112">绍兴</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="suqian_gongyu_r142" data-sug-type="1"
                                                        data-py="suqian" data-cid="142">宿迁</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="shijiazhuang_gongyu_r153"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="shijiazhuang"
                                                                                                 data-cid="153">石家庄</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shennongjia_gongyu_r332" data-sug-type="1"
                                                        data-py="shennongjia" data-cid="332">神农架</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="suiningsc_gongyu_r100" data-sug-type="1"
                                                        data-py="suiningsc" data-cid="100">遂宁</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="shiyan_gongyu_r319"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="shiyan"
                                                                                                    data-cid="319">十堰</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="sanmenxia_gongyu_r180" data-sug-type="1"
                                                        data-py="sanmenxia" data-cid="180">三门峡</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="sanming_gongyu_r147"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="sanming"
                                                                                                     data-cid="147">三明</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="suzhouanhui_gongyu_r230" data-sug-type="1"
                                                        data-py="suzhouanhui" data-cid="230">宿州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shangluo_gongyu_r308" data-sug-type="1"
                                                        data-py="shangluo" data-cid="308">商洛</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="shizuishan_gongyu_r283"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="shizuishan"
                                                                                                   data-cid="283">石嘴山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shihezi_gongyu_r383" data-sug-type="1"
                                                        data-py="shihezi" data-cid="383">石河子</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="shangqiu_gongyu_r181"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="shangqiu"
                                                                                                   data-cid="181">商丘</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="suizhou_gongyu_r329" data-sug-type="1"
                                                        data-py="suizhou" data-cid="329">随州</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="shaoyang_gongyu_r336"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="shaoyang"
                                                                                                  data-cid="336">邵阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="siping_gongyu_r191" data-sug-type="1"
                                                        data-py="siping" data-cid="191">四平</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="songyuan_gongyu_r195"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="songyuan"
                                                                                                 data-cid="195">松原</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="suizhongln_gongyu_r402" data-sug-type="1"
                                                        data-py="suizhongln" data-cid="402">绥中</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>T</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="tengchong_gongyu_r56"
                                                                    data-sug-type="1" data-py="tengchong" data-cid="56">腾冲(保山)</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="tianjin_gongyu_r66" data-sug-type="1"
                                                        data-py="tianjin" data-cid="66">天津</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="taizhou1_gongyu_r115"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="taizhou1"
                                                                                                 data-cid="115">台州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="taian_gongyu_r216" data-sug-type="1"
                                                        data-py="taian" data-cid="216">泰安</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="taiyuan_gongyu_r269"
                                                                                                data-sug-type="1"
                                                                                                data-py="taiyuan"
                                                                                                data-cid="269">太原</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="tangshan_gongyu_r154" data-sug-type="1"
                                                        data-py="tangshan" data-cid="154">唐山</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="tongliao_gongyu_r260"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="tongliao"
                                                                                                   data-cid="260">通辽</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="tianshui_gongyu_r290" data-sug-type="1"
                                                        data-py="tianshui" data-cid="290">天水</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="tongrenshi_gongyu_r121"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="tongrenshi"
                                                                                                   data-cid="121">铜仁</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="tongling_gongyu_r235" data-sug-type="1"
                                                        data-py="tongling" data-cid="235">铜陵</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="taizhou_gongyu_r141"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="taizhou"
                                                                                                   data-cid="141">泰州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="tieling_gongyu_r136" data-sug-type="1"
                                                        data-py="tieling" data-cid="136">铁岭</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="tonghua_gongyu_r193"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="tonghua"
                                                                                                  data-cid="193">通化</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="taibei_gongyu_r4005" data-sug-type="1"
                                                        data-py="taibei" data-cid="4005">台北</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="taizhong_gongyu_r4008"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="taizhong"
                                                                                                  data-cid="4008">台中</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="tainan_gongyu_r4007" data-sug-type="1"
                                                        data-py="tainan" data-cid="4007">台南</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="taidong_gongyu_r4006"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="taidong"
                                                                                                  data-cid="4006">台东</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="taoyuan_gongyu_r4009" data-sug-type="1"
                                                        data-py="taoyuan" data-cid="4009">桃园</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="tulufan_gongyu_r371"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="tulufan"
                                                                                                   data-cid="371">吐鲁番</a>
                                            </dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>W</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="wanning_gongyu_r43"
                                                                    data-sug-type="1" data-py="wanning"
                                                                    data-cid="43">万宁</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="weihai_gongyu_r30"
                                                                                           data-sug-type="1"
                                                                                           data-py="weihai"
                                                                                           data-cid="30">威海</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="weinan_gongyu_r304" data-sug-type="1"
                                                        data-py="weinan" data-cid="304">渭南</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="wenchang_gongyu_r4"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="wenchang"
                                                                                                 data-cid="4">文昌</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="wuhan_gongyu_r55" data-sug-type="1"
                                                        data-py="wuhan" data-cid="55">武汉</a><a class="t-city-item"
                                                                                               href="javascript:;"
                                                                                               data-sug-ext-link="wuxi_gongyu_r14"
                                                                                               data-sug-type="1"
                                                                                               data-py="wuxi"
                                                                                               data-cid="14">无锡</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="wuyishan_gongyu_r62" data-sug-type="1"
                                                        data-py="wuyishan" data-cid="62">武夷山</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="wuyuan_gongyu_r59"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="wuyuan"
                                                                                                   data-cid="59">婺源</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="wuzhishan_gongyu_r3" data-sug-type="1"
                                                        data-py="wuzhishan" data-cid="3">五指山</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="wuzhen_gongyu_r401"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="wuzhen"
                                                                                                   data-cid="401">乌镇</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="wulumuqi_gongyu_r369" data-sug-type="1"
                                                        data-py="wulumuqi" data-cid="369">乌鲁木齐</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="wuhai_gongyu_r258"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="wuhai"
                                                                                                     data-cid="258">乌海</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="wuzhou_gongyu_r243" data-sug-type="1"
                                                        data-py="wuzhou" data-cid="243">梧州</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="wuhu_gongyu_r53"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="wuhu"
                                                                                                 data-cid="53">芜湖</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="wenzhou_gongyu_r109" data-sug-type="1"
                                                        data-py="wenzhou" data-cid="109">温州</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="wenshan_gongyu_r363"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="wenshan"
                                                                                                  data-cid="363">文山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="weifang_gongyu_r212" data-sug-type="1"
                                                        data-py="weifang" data-cid="212">潍坊</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="wulanchabu_gongyu_r264"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="wulanchabu"
                                                                                                  data-cid="264">乌兰察布</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="wujiaqu_gongyu_r387" data-sug-type="1"
                                                        data-py="wujiaqu" data-cid="387">五家渠</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="wuwei_gongyu_r291"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="wuwei"
                                                                                                   data-cid="291">武威</a>
                                            </dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>X</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="xiamen_gongyu_r33"
                                                                    data-sug-type="1" data-py="xiamen"
                                                                    data-cid="33">厦门</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="xian_gongyu_r17"
                                                                                           data-sug-type="1"
                                                                                           data-py="xian" data-cid="17">西安</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xishuangbanna_gongyu_r58" data-sug-type="1"
                                                        data-py="xishuangbanna" data-cid="58">西双版纳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xitang_gongyu_r28" data-sug-type="1"
                                                        data-py="xitang" data-cid="28">西塘</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="xining_gongyu_r309"
                                                                                                data-sug-type="1"
                                                                                                data-py="xining"
                                                                                                data-cid="309">西宁</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xichang_gongyu_r404" data-sug-type="1"
                                                        data-py="xichang" data-cid="404">西昌</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="xianggang_gongyu_r396"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="xianggang"
                                                                                                  data-cid="396">香港</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xianggelila_gongyu_r57" data-sug-type="1"
                                                        data-py="xianggelila" data-cid="57">香格里拉</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xiongan_gongyu_r202740" data-sug-type="1"
                                                        data-py="xiongan" data-cid="202740">雄安</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="xiangxi_gongyu_r345"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="xiangxi"
                                                                                                     data-cid="345">湘西</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xianyang_gongyu_r303" data-sug-type="1"
                                                        data-py="xianyang" data-cid="303">咸阳</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="xianning_gongyu_r328"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="xianning"
                                                                                                   data-cid="328">咸宁</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xuancheng_gongyu_r238" data-sug-type="1"
                                                        data-py="xuancheng" data-cid="238">宣城</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="xuzhou_gongyu_r139"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="xuzhou"
                                                                                                    data-cid="139">徐州</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xinzhousx_gongyu_r277" data-sug-type="1"
                                                        data-py="xinzhousx" data-cid="277">忻州</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="xinyu_gongyu_r350"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="xinyu"
                                                                                                    data-cid="350">新余</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xingtai_gongyu_r156" data-sug-type="1"
                                                        data-py="xingtai" data-cid="156">邢台</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="xinganmeng_gongyu_r265"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="xinganmeng"
                                                                                                  data-cid="265">兴安盟</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xilinguole_gongyu_r266" data-sug-type="1"
                                                        data-py="xilinguole" data-cid="266">锡林郭勒</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xiangtanhn_gongyu_r334" data-sug-type="1"
                                                        data-py="xiangtanhn" data-cid="334">湘潭</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="xiantao_gongyu_r324"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="xiantao"
                                                                                                     data-cid="324">仙桃</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xuchangh_gongyu_r179" data-sug-type="1"
                                                        data-py="xuchangh" data-cid="179">许昌</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="xinyang_gongyu_r182"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="xinyang"
                                                                                                   data-cid="182">信阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xinxiang_gongyu_r172" data-sug-type="1"
                                                        data-py="xinxiang" data-cid="172">新乡</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="xiaogan_gongyu_r326"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="xiaogan"
                                                                                                   data-cid="326">孝感</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xiangyang_gongyu_r4031" data-sug-type="1"
                                                        data-py="xiangyang" data-cid="4031">襄阳</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="xintai_gongyu_r4010"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="xintai"
                                                                                                     data-cid="4010">新北</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xinzhu_gongyu_r4012" data-sug-type="1"
                                                        data-py="xinzhu" data-cid="4012">新竹</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>Y</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="yanan_gongyu_r25"
                                                                    data-sug-type="1" data-py="yanan"
                                                                    data-cid="25">延安</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="yancheng_gongyu_r54"
                                                                                           data-sug-type="1"
                                                                                           data-py="yancheng"
                                                                                           data-cid="54">盐城</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yangzhou_gongyu_r26" data-sug-type="1"
                                                        data-py="yangzhou" data-cid="26">扬州</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="yabuli_gongyu_r406"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="yabuli"
                                                                                                  data-cid="406">亚布力</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yantai_gongyu_r44" data-sug-type="1"
                                                        data-py="yantai" data-cid="44">烟台</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="yili_gongyu_r380"
                                                                                                data-sug-type="1"
                                                                                                data-py="yili"
                                                                                                data-cid="380">伊犁</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yingkou_gongyu_r35" data-sug-type="1"
                                                        data-py="yingkou" data-cid="35">营口</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="yinchuan_gongyu_r282"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="yinchuan"
                                                                                                 data-cid="282">银川</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yuxi_gongyu_r359" data-sug-type="1"
                                                        data-py="yuxi" data-cid="359">玉溪</a><a class="t-city-item"
                                                                                               href="javascript:;"
                                                                                               data-sug-ext-link="yingtan_gongyu_r351"
                                                                                               data-sug-type="1"
                                                                                               data-py="yingtan"
                                                                                               data-cid="351">鹰潭</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yichang_gongyu_r321" data-sug-type="1"
                                                        data-py="yichang" data-cid="321">宜昌</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="yaan_gongyu_r104"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="yaan"
                                                                                                  data-cid="104">雅安</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yangjiang_gongyu_r81" data-sug-type="1"
                                                        data-py="yangjiang" data-cid="81">阳江</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="yunchengsx_gongyu_r276"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="yunchengsx"
                                                                                                   data-cid="276">运城</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yangquan_gongyu_r271" data-sug-type="1"
                                                        data-py="yangquan" data-cid="271">阳泉</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="yulinshi_gongyu_r306"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="yulinshi"
                                                                                                   data-cid="306">榆林</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yibin_gongyu_r95" data-sug-type="1"
                                                        data-py="yibin" data-cid="95">宜宾</a><a class="t-city-item"
                                                                                               href="javascript:;"
                                                                                               data-sug-ext-link="yanbian1_gongyu_r197"
                                                                                               data-sug-type="1"
                                                                                               data-py="yanbian1"
                                                                                               data-cid="197">延边</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yueyang_gongyu_r337" data-sug-type="1"
                                                        data-py="yueyang" data-cid="337">岳阳</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="yichunj_gongyu_r354"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="yichunj"
                                                                                                  data-cid="354">宜春</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yilan_gongyu_r4013" data-sug-type="1"
                                                        data-py="yilan" data-cid="4013">宜兰</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="yiyangh_gongyu_r343"
                                                                                                 data-sug-type="1"
                                                                                                 data-py="yiyangh"
                                                                                                 data-cid="343">益阳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yongzhou_gongyu_r340" data-sug-type="1"
                                                        data-py="yongzhou" data-cid="340">永州</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="yulin_gongyu_r246"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="yulin"
                                                                                                   data-cid="246">玉林</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yichun_gongyu_r203" data-sug-type="1"
                                                        data-py="yichun" data-cid="203">伊春</a></dd>
                                        </dl>


                                        <dl class="t-layer-city-group-sec clearfix ">
                                            <dt>Z</dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="zaozhuang_gongyu_r38"
                                                                    data-sug-type="1" data-py="zaozhuang" data-cid="38">枣庄</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhangjiakou_gongyu_r60" data-sug-type="1"
                                                        data-py="zhangjiakou" data-cid="60">张家口</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhenjiang_gongyu_r27" data-sug-type="1"
                                                        data-py="zhenjiang" data-cid="27">镇江</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="zhoushan_gongyu_r20"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="zhoushan"
                                                                                                   data-cid="20">舟山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhouzhuang_gongyu_r13" data-sug-type="1"
                                                        data-py="zhouzhuang" data-cid="13">周庄</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="zhuhai_gongyu_r51"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="zhuhai"
                                                                                                    data-cid="51">珠海</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhengzhou_gongyu_r167" data-sug-type="1"
                                                        data-py="zhengzhou" data-cid="167">郑州</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="zhangjiajie_gongyu_r342"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="zhangjiajie"
                                                                                                    data-cid="342">张家界</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhongshan_gongyu_r74" data-sug-type="1"
                                                        data-py="zhongshan" data-cid="74">中山</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="zhaoqing_gongyu_r77"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="zhaoqing"
                                                                                                   data-cid="77">肇庆</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhangzhou_gongyu_r149" data-sug-type="1"
                                                        data-py="zhangzhou" data-cid="149">漳州</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="zibo_gongyu_r210"
                                                                                                    data-sug-type="1"
                                                                                                    data-py="zibo"
                                                                                                    data-cid="210">淄博</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhanjiang_gongyu_r76" data-sug-type="1"
                                                        data-py="zhanjiang" data-cid="76">湛江</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="zhuzhou_gongyu_r333"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="zhuzhou"
                                                                                                   data-cid="333">株洲</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhangye_gongyu_r292" data-sug-type="1"
                                                        data-py="zhangye" data-cid="292">张掖</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="zhongwei_gongyu_r286"
                                                                                                  data-sug-type="1"
                                                                                                  data-py="zhongwei"
                                                                                                  data-cid="286">中卫</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="ziyangsc_gongyu_r106" data-sug-type="1"
                                                        data-py="ziyangsc" data-cid="106">资阳</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="zigong_gongyu_r89"
                                                                                                   data-sug-type="1"
                                                                                                   data-py="zigong"
                                                                                                   data-cid="89">自贡</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhumadian_gongyu_r184" data-sug-type="1"
                                                        data-py="zhumadian" data-cid="184">驻马店</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="zhoukou_gongyu_r183"
                                                                                                     data-sug-type="1"
                                                                                                     data-py="zhoukou"
                                                                                                     data-cid="183">周口</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zunyi_gongyu_r119" data-sug-type="1"
                                                        data-py="zunyi" data-cid="119">遵义</a></dd>
                                        </dl>

                                    </li>

                                </ul>
                            </li>

                            <li class="t-tab-ver-con-item" id="extBox">
                                <ul class="t-tab-hor clearfix" id="extCityTab">
                                    <li class="t-tab-hor-item t-hor-on" _twi="0"><a href="javascript:;">热门</a></li>
                                    <li class="t-tab-hor-item" _twi="1"><a href="javascript:;">港台</a></li>
                                    <li class="t-tab-hor-item" _twi="2"><a href="javascript:;">亚洲</a></li>
                                    <li class="t-tab-hor-item" _twi="3"><a href="javascript:;">欧洲</a></li>
                                    <li class="t-tab-hor-item" _twi="4"><a href="javascript:;">美洲</a></li>
                                    <li class="t-tab-hor-item" _twi="5"><a href="javascript:;">大洋洲</a></li>
                                    <li class="t-tab-hor-item" _twi="6"><a href="javascript:;">非洲</a></li>
                                </ul>
                                <ul class="t-tab-hor-con" id="extCityContent">

                                    <li class="t-tab-hor-con-item" style="display:block">

                                        <dl class="t-layer-city-group-sec clearfix no-group">
                                            <dt></dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="xianggang_gongyu_r100"
                                                                    data-sug-type="2" data-py="xianggang"
                                                                    data-cid="100">香港</a><a class="t-city-item"
                                                                                            href="javascript:;"
                                                                                            data-sug-ext-link="pujidao_gongyu_r28"
                                                                                            data-sug-type="2"
                                                                                            data-py="pujidao"
                                                                                            data-cid="28">普吉岛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="mangu_gongyu_r40" data-sug-type="2"
                                                        data-py="mangu" data-cid="40">曼谷</a><a class="t-city-item"
                                                                                               href="javascript:;"
                                                                                               data-sug-ext-link="balidao_gongyu_r19"
                                                                                               data-sug-type="2"
                                                                                               data-py="balidao"
                                                                                               data-cid="19">巴厘岛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="dongjing_gongyu_r77" data-sug-type="2"
                                                        data-py="dongjing" data-cid="77">东京</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="shouer_gongyu_r129"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="shouer"
                                                                                                  data-cid="129">首尔</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xinjiapo_gongyu_r104" data-sug-type="2"
                                                        data-py="xinjiapo" data-cid="104">新加坡</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="taibei_gongyu_r138"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="taibei"
                                                                                                    data-cid="138">台北</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qingmai_gongyu_r128" data-sug-type="2"
                                                        data-py="qingmai" data-cid="128">清迈</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="batiya_gongyu_r41"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="batiya"
                                                                                                  data-cid="41">芭提雅</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="pingdong_gongyu_r144" data-sug-type="2"
                                                        data-py="pingdong" data-cid="144">屏东(垦丁)</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="sumeidao_gongyu_r29" data-sug-type="2"
                                                        data-py="sumeidao" data-cid="29">苏梅岛</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="jingdu_gongyu_r76"
                                                                                                   data-sug-type="2"
                                                                                                   data-py="jingdu"
                                                                                                   data-cid="76">京都</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="daban_gongyu_r147" data-sug-type="2"
                                                        data-py="daban" data-cid="147">大阪</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="shaba_gongyu_r184"
                                                                                                data-sug-type="2"
                                                                                                data-py="shaba"
                                                                                                data-cid="184">沙巴</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jizhoudao_gongyu_r162" data-sug-type="2"
                                                        data-py="jizhoudao" data-cid="162">济州岛</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="lankawei_gongyu_r185"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="lankawei"
                                                                                                     data-cid="185">兰卡威</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jilongpo_gongyu_r108" data-sug-type="2"
                                                        data-py="jilongpo" data-cid="108">吉隆坡</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="bincheng_gongyu_r186"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="bincheng"
                                                                                                    data-cid="186">槟城</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="gaoxiong_gongyu_r134" data-sug-type="2"
                                                        data-py="gaoxiong" data-cid="134">高雄</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="hualian_gongyu_r133"
                                                                                                   data-sug-type="2"
                                                                                                   data-py="hualian"
                                                                                                   data-cid="133">花莲</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="maerdaifu_gongyu_r157" data-sug-type="2"
                                                        data-py="maerdaifu" data-cid="157">马尔代夫</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xiaweiyi_gongyu_r46" data-sug-type="2"
                                                        data-py="xiaweiyi" data-cid="46">夏威夷</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="niuyue_gongyu_r30"
                                                                                                   data-sug-type="2"
                                                                                                   data-py="niuyue"
                                                                                                   data-cid="30">纽约</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="luoshanji_gongyu_r20" data-sug-type="2"
                                                        data-py="luoshanji" data-cid="20">洛杉矶</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="lasiweijiasi_gongyu_r31"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="lasiweijiasi"
                                                                                                    data-cid="31">拉斯维加斯</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="lundun_gongyu_r17" data-sug-type="2"
                                                        data-py="lundun" data-cid="17">伦敦</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="bali_gongyu_r26"
                                                                                                data-sug-type="2"
                                                                                                data-py="bali"
                                                                                                data-cid="26">巴黎</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="luoma_gongyu_r15" data-sug-type="2"
                                                        data-py="luoma" data-cid="15">罗马</a><a class="t-city-item"
                                                                                               href="javascript:;"
                                                                                               data-sug-ext-link="xini_gongyu_r43"
                                                                                               data-sug-type="2"
                                                                                               data-py="xini"
                                                                                               data-cid="43">悉尼</a></dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix no-group">
                                            <dt></dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="xianggang_gongyu_r100"
                                                                    data-sug-type="2" data-py="xianggang"
                                                                    data-cid="100">香港</a><a class="t-city-item"
                                                                                            href="javascript:;"
                                                                                            data-sug-ext-link="pingdong_gongyu_r144"
                                                                                            data-sug-type="2"
                                                                                            data-py="pingdong"
                                                                                            data-cid="144">屏东(垦丁)</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="taibei_gongyu_r138" data-sug-type="2"
                                                        data-py="taibei" data-cid="138">台北</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="hualian_gongyu_r133"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="hualian"
                                                                                                 data-cid="133">花莲</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="gaoxiong_gongyu_r134" data-sug-type="2"
                                                        data-py="gaoxiong" data-cid="134">高雄</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="xintai_gongyu_r136"
                                                                                                   data-sug-type="2"
                                                                                                   data-py="xintai"
                                                                                                   data-cid="136">新北</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="tainan_gongyu_r137" data-sug-type="2"
                                                        data-py="tainan" data-cid="137">台南</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="taoyuan_gongyu_r149"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="taoyuan"
                                                                                                 data-cid="149">桃园</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="nantou_gongyu_r145" data-sug-type="2"
                                                        data-py="nantou" data-cid="145">南投</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="taidong_gongyu_r139"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="taidong"
                                                                                                 data-cid="139">台东</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jiayi_gongyu_r140" data-sug-type="2"
                                                        data-py="jiayi" data-cid="140">嘉义</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="taizhong_gongyu_r141"
                                                                                                data-sug-type="2"
                                                                                                data-py="taizhong"
                                                                                                data-cid="141">台中</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xinzhu_gongyu_r146" data-sug-type="2"
                                                        data-py="xinzhu" data-cid="146">新竹</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="yilan_gongyu_r148"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="yilan"
                                                                                                 data-cid="148">宜兰</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="penghu_gongyu_r150" data-sug-type="2"
                                                        data-py="penghu" data-cid="150">澎湖</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="miaoli_gongyu_r151"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="miaoli"
                                                                                                 data-cid="151">苗栗</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jinmen_gongyu_r152" data-sug-type="2"
                                                        data-py="jinmen" data-cid="152">金门</a></dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix no-group">
                                            <dt></dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="balidao_gongyu_r19"
                                                                    data-sug-type="2" data-py="balidao" data-cid="19">巴厘岛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="pujidao_gongyu_r28" data-sug-type="2"
                                                        data-py="pujidao" data-cid="28">普吉岛</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="dongjing_gongyu_r77"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="dongjing"
                                                                                                  data-cid="77">东京</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="taibei_gongyu_r138" data-sug-type="2"
                                                        data-py="taibei" data-cid="138">台北</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="xinjiapo_gongyu_r104"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="xinjiapo"
                                                                                                 data-cid="104">新加坡</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="mangu_gongyu_r40" data-sug-type="2"
                                                        data-py="mangu" data-cid="40">曼谷</a><a class="t-city-item"
                                                                                               href="javascript:;"
                                                                                               data-sug-ext-link="xianggang_gongyu_r100"
                                                                                               data-sug-type="2"
                                                                                               data-py="xianggang"
                                                                                               data-cid="100">香港</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="daban_gongyu_r147" data-sug-type="2"
                                                        data-py="daban" data-cid="147">大阪</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="jingdu_gongyu_r76"
                                                                                                data-sug-type="2"
                                                                                                data-py="jingdu"
                                                                                                data-cid="76">京都</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shouer_gongyu_r129" data-sug-type="2"
                                                        data-py="shouer" data-cid="129">首尔</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="sililanka_gongyu_r109"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="sililanka"
                                                                                                 data-cid="109">斯里兰卡</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jilongpo_gongyu_r108" data-sug-type="2"
                                                        data-py="jilongpo" data-cid="108">吉隆坡</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="manila_gongyu_r143"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="manila"
                                                                                                    data-cid="143">马尼拉</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jizhoudao_gongyu_r162" data-sug-type="2"
                                                        data-py="jizhoudao" data-cid="162">济州岛</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="fushan_gongyu_r164"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="fushan"
                                                                                                     data-cid="164">釜山</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="renchuan_gongyu_r163" data-sug-type="2"
                                                        data-py="renchuan" data-cid="163">仁川</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="bincheng_gongyu_r186"
                                                                                                   data-sug-type="2"
                                                                                                   data-py="bincheng"
                                                                                                   data-cid="186">槟城</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shaba_gongyu_r184" data-sug-type="2"
                                                        data-py="shaba" data-cid="184">沙巴</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="lankawei_gongyu_r185"
                                                                                                data-sug-type="2"
                                                                                                data-py="lankawei"
                                                                                                data-cid="185">兰卡威</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="maliujia_gongyu_r187" data-sug-type="2"
                                                        data-py="maliujia" data-cid="187">马六甲</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="yajiada_gongyu_r153"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="yajiada"
                                                                                                    data-cid="153">雅加达</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="mindandao_gongyu_r158" data-sug-type="2"
                                                        data-py="mindandao" data-cid="158">民丹岛</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="maerdaifu_gongyu_r157"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="maerdaifu"
                                                                                                     data-cid="157">马尔代夫</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xianli_gongyu_r197" data-sug-type="2"
                                                        data-py="xianli" data-cid="197">暹粒</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="dibai_gongyu_r106"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="dibai"
                                                                                                 data-cid="106">迪拜</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="abuzhabi_gongyu_r156" data-sug-type="2"
                                                        data-py="abuzhabi" data-cid="156">阿布扎比</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="chongsheng_gongyu_r167"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="chongsheng"
                                                                                                     data-cid="167">冲绳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhahuang_gongyu_r168" data-sug-type="2"
                                                        data-py="zhahuang" data-cid="168">札幌</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="mingguwu_gongyu_r178"
                                                                                                   data-sug-type="2"
                                                                                                   data-py="mingguwu"
                                                                                                   data-cid="178">名古屋</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="batiya_gongyu_r41" data-sug-type="2"
                                                        data-py="batiya" data-cid="41">芭提雅</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="sumeidao_gongyu_r29"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="sumeidao"
                                                                                                 data-cid="29">苏梅岛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="qingmai_gongyu_r128" data-sug-type="2"
                                                        data-py="qingmai" data-cid="128">清迈</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="pipidao_gongyu_r195"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="pipidao"
                                                                                                  data-cid="195">皮皮岛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jiami_gongyu_r189" data-sug-type="2"
                                                        data-py="jiami" data-cid="189">甲米</a><a class="t-city-item"
                                                                                                href="javascript:;"
                                                                                                data-sug-ext-link="shameidao_gongyu_r194"
                                                                                                data-sug-type="2"
                                                                                                data-py="shameidao"
                                                                                                data-cid="194">沙美岛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="xiangdao_gongyu_r193" data-sug-type="2"
                                                        data-py="xiangdao" data-cid="193">象岛</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="huaxin_gongyu_r188"
                                                                                                   data-sug-type="2"
                                                                                                   data-py="huaxin"
                                                                                                   data-cid="188">华欣</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="hualian_gongyu_r133" data-sug-type="2"
                                                        data-py="hualian" data-cid="133">花莲</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="gaoxiong_gongyu_r134"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="gaoxiong"
                                                                                                  data-cid="134">高雄</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="pingdong_gongyu_r144" data-sug-type="2"
                                                        data-py="pingdong" data-cid="144">屏东(垦丁)</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="taizhong_gongyu_r141" data-sug-type="2"
                                                        data-py="taizhong" data-cid="141">台中</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="tainan_gongyu_r137"
                                                                                                   data-sug-type="2"
                                                                                                   data-py="tainan"
                                                                                                   data-cid="137">台南</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="changtandao_gongyu_r1482" data-sug-type="2"
                                                        data-py="changtandao" data-cid="1482">长滩岛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zhanghua_gongyu_r1518" data-sug-type="2"
                                                        data-py="zhanghua" data-cid="1518">彰化</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="Beilanpo_gongyu_r1725"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="Beilanpo"
                                                                                                    data-cid="1725">北榄坡</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shucao_gongyu_r1621" data-sug-type="2"
                                                        data-py="shucao" data-cid="1621">束草</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="niganbu_gongyu_r1259"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="niganbu"
                                                                                                  data-cid="1259">尼甘布</a>
                                            </dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix no-group">
                                            <dt></dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="bali_gongyu_r26"
                                                                    data-sug-type="2" data-py="bali"
                                                                    data-cid="26">巴黎</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="lundun_gongyu_r17"
                                                                                           data-sug-type="2"
                                                                                           data-py="lundun"
                                                                                           data-cid="17">伦敦</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="luoma_gongyu_r15" data-sug-type="2"
                                                        data-py="luoma" data-cid="15">罗马</a><a class="t-city-item"
                                                                                               href="javascript:;"
                                                                                               data-sug-ext-link="milan_gongyu_r27"
                                                                                               data-sug-type="2"
                                                                                               data-py="milan"
                                                                                               data-cid="27">米兰</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="bolin_gongyu_r21" data-sug-type="2"
                                                        data-py="bolin" data-cid="21">柏林</a><a class="t-city-item"
                                                                                               href="javascript:;"
                                                                                               data-sug-ext-link="basailuona_gongyu_r24"
                                                                                               data-sug-type="2"
                                                                                               data-py="basailuona"
                                                                                               data-cid="24">巴塞罗那</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="weinisi_gongyu_r14" data-sug-type="2"
                                                        data-py="weinisi" data-cid="14">威尼斯</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="weiyena_gongyu_r70"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="weiyena"
                                                                                                  data-cid="70">维也纳</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="bulage_gongyu_r71" data-sug-type="2"
                                                        data-py="bulage" data-cid="71">布拉格</a><a class="t-city-item"
                                                                                                 href="javascript:;"
                                                                                                 data-sug-ext-link="yadian_gongyu_r38"
                                                                                                 data-sug-type="2"
                                                                                                 data-py="yadian"
                                                                                                 data-cid="38">雅典</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="rineiwa_gongyu_r67" data-sug-type="2"
                                                        data-py="rineiwa" data-cid="67">日内瓦</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="puluowangsi_gongyu_r25"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="puluowangsi"
                                                                                                  data-cid="25">普罗旺斯</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="bulusaier_gongyu_r97" data-sug-type="2"
                                                        data-py="bulusaier" data-cid="97">布鲁塞尔</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="madeli_gongyu_r16"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="madeli"
                                                                                                     data-cid="16">马德里</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="budapeisi_gongyu_r72" data-sug-type="2"
                                                        data-py="budapeisi" data-cid="72">布达佩斯</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="sulishi_gongyu_r68"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="sulishi"
                                                                                                     data-cid="68">苏黎世</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="amusitedan_gongyu_r69" data-sug-type="2"
                                                        data-py="amusitedan" data-cid="69">阿姆斯特丹</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="aidingbao_gongyu_r99" data-sug-type="2"
                                                        data-py="aidingbao" data-cid="99">爱丁堡</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="foluolunsa_gongyu_r66"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="foluolunsa"
                                                                                                    data-cid="66">佛罗伦萨</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="nisi_gongyu_r18" data-sug-type="2"
                                                        data-py="nisi" data-cid="18">尼斯</a><a class="t-city-item"
                                                                                              href="javascript:;"
                                                                                              data-sug-ext-link="masai_gongyu_r95"
                                                                                              data-sug-type="2"
                                                                                              data-py="masai"
                                                                                              data-cid="95">马赛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="munihei_gongyu_r35" data-sug-type="2"
                                                        data-py="munihei" data-cid="35">慕尼黑</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="hanbao_gongyu_r96"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="hanbao"
                                                                                                  data-cid="96">汉堡</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="sidegeermo_gongyu_r73" data-sug-type="2"
                                                        data-py="sidegeermo" data-cid="73">斯德哥尔摩</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shengtuolinidao_gongyu_r36" data-sug-type="2"
                                                        data-py="shengtuolinidao" data-cid="36">圣托里尼岛</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="kelitedao_gongyu_r13" data-sug-type="2"
                                                        data-py="kelitedao" data-cid="13">克里特岛</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="lisiben_gongyu_r98"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="lisiben"
                                                                                                     data-cid="98">里斯本</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yisitanbuer_gongyu_r42" data-sug-type="2"
                                                        data-py="yisitanbuer" data-cid="42">伊斯坦布尔</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="Luowaniemi_gongyu_r1728" data-sug-type="2"
                                                        data-py="Luowaniemi" data-cid="1728">罗瓦涅米</a></dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix no-group">
                                            <dt></dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="niuyue_gongyu_r30"
                                                                    data-sug-type="2" data-py="niuyue"
                                                                    data-cid="30">纽约</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="luoshanji_gongyu_r20"
                                                                                           data-sug-type="2"
                                                                                           data-py="luoshanji"
                                                                                           data-cid="20">洛杉矶</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jiujinshan_gongyu_r23" data-sug-type="2"
                                                        data-py="jiujinshan" data-cid="23">旧金山</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="xiyatu_gongyu_r34"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="xiyatu"
                                                                                                     data-cid="34">西雅图</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="duolunduo_gongyu_r116" data-sug-type="2"
                                                        data-py="duolunduo" data-cid="116">多伦多</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="zhijiage_gongyu_r39"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="zhijiage"
                                                                                                     data-cid="39">芝加哥</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="huashengdun_gongyu_r32" data-sug-type="2"
                                                        data-py="huashengdun" data-cid="32">华盛顿DC</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="boshidun_gongyu_r33" data-sug-type="2"
                                                        data-py="boshidun" data-cid="33">波士顿</a><a class="t-city-item"
                                                                                                   href="javascript:;"
                                                                                                   data-sug-ext-link="xiaweiyi_gongyu_r46"
                                                                                                   data-sug-type="2"
                                                                                                   data-py="xiaweiyi"
                                                                                                   data-cid="46">夏威夷</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shengdiyage_gongyu_r22" data-sug-type="2"
                                                        data-py="shengdiyage" data-cid="22">圣地亚哥</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="lasiweijiasi_gongyu_r31" data-sug-type="2"
                                                        data-py="lasiweijiasi" data-cid="31">拉斯维加斯</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="wengehua_gongyu_r102" data-sug-type="2"
                                                        data-py="wengehua" data-cid="102">温哥华</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="wotaihua_gongyu_r131"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="wotaihua"
                                                                                                    data-cid="131">渥太华</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="liyuereneilu_gongyu_r119" data-sug-type="2"
                                                        data-py="liyuereneilu" data-cid="119">里约热内卢</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="saerwaduo_gongyu_r127" data-sug-type="2"
                                                        data-py="saerwaduo" data-cid="127">萨尔瓦多</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="shengbaoluo_gongyu_r126" data-sug-type="2"
                                                        data-py="shengbaoluo" data-cid="126">圣保罗</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="zonglvtan_gongyu_r646" data-sug-type="2"
                                                        data-py="zonglvtan" data-cid="646">棕榈滩</a><a class="t-city-item"
                                                                                                     href="javascript:;"
                                                                                                     data-sug-ext-link="zonglvquan_gongyu_r645"
                                                                                                     data-sug-type="2"
                                                                                                     data-py="zonglvquan"
                                                                                                     data-cid="645">棕榈泉</a>
                                            </dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix no-group">
                                            <dt></dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="xini_gongyu_r43"
                                                                    data-sug-type="2" data-py="xini"
                                                                    data-cid="43">悉尼</a><a class="t-city-item"
                                                                                           href="javascript:;"
                                                                                           data-sug-ext-link="huangjinhaian_gongyu_r44"
                                                                                           data-sug-type="2"
                                                                                           data-py="huangjinhaian"
                                                                                           data-cid="44">黄金海岸</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="moerben_gongyu_r45" data-sug-type="2"
                                                        data-py="moerben" data-cid="45">墨尔本</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="huanghouzhen_gongyu_r87"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="huanghouzhen"
                                                                                                  data-cid="87">皇后镇</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="jiducheng_gongyu_r88" data-sug-type="2"
                                                        data-py="jiducheng" data-cid="88">基督城</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="aokelan_gongyu_r90"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="aokelan"
                                                                                                    data-cid="90">奥克兰</a>
                                            </dd>
                                        </dl>

                                    </li>


                                    <li class="t-tab-hor-con-item" style="">

                                        <dl class="t-layer-city-group-sec clearfix no-group">
                                            <dt></dt>
                                            <dd class="clearfix"><a class="t-city-item" href="javascript:;"
                                                                    data-sug-ext-link="maoliqiusi_gongyu_r124"
                                                                    data-sug-type="2" data-py="maoliqiusi"
                                                                    data-cid="124">毛里求斯</a><a class="t-city-item"
                                                                                              href="javascript:;"
                                                                                              data-sug-ext-link="saisheer_gongyu_r159"
                                                                                              data-sug-type="2"
                                                                                              data-py="saisheer"
                                                                                              data-cid="159">塞舌尔</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yuehanneisibao_gongyu_r801" data-sug-type="2"
                                                        data-py="yuehanneisibao" data-cid="801">约翰内斯堡</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="yelusaleng_gongyu_r1461" data-sug-type="2"
                                                        data-py="yelusaleng" data-cid="1461">耶路撒冷</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="suyishi_gongyu_r1368" data-sug-type="2"
                                                        data-py="suyishi" data-cid="1368">苏伊士</a><a class="t-city-item"
                                                                                                    href="javascript:;"
                                                                                                    data-sug-ext-link="kaipudun_gongyu_r1439"
                                                                                                    data-sug-type="2"
                                                                                                    data-py="kaipudun"
                                                                                                    data-cid="1439">开普敦</a><a
                                                        class="t-city-item" href="javascript:;"
                                                        data-sug-ext-link="kailuo_gongyu_r1154" data-sug-type="2"
                                                        data-py="kailuo" data-cid="1154">开罗</a><a class="t-city-item"
                                                                                                  href="javascript:;"
                                                                                                  data-sug-ext-link="neiluobi_gongyu_r1257"
                                                                                                  data-sug-type="2"
                                                                                                  data-py="neiluobi"
                                                                                                  data-cid="1257">内罗毕</a>
                                            </dd>
                                        </dl>

                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="t-layer t-layer-city clearfix hide" id="second-city" style="display: none;">
                        <ul class="t-tab-hor-con" id="intCityContent">

                            <li class="t-tab-hor-con-item" style="display:block">

                                <dl class="t-layer-city-group-sec clearfix no-group">
                                    <dt></dt>
                                    <dd class="clearfix" id="second-city-item">
                                        <?php
                                        foreach ($areas as $area) {
                                            if ($area['belong'] != 0) {
                                                ?>
                                                <a class="t-area-item" href="javascript:;"
                                                   data-sug-ext-link="<?= $area['py']; ?>"
                                                   data-sug-type="<?= $area['sug_type']; ?>"
                                                   data-py="<?= $area['py']; ?>"
                                                   data-cid="<?= $area['id']; ?>"
                                                   data-belong="<?= $area['belong']; ?>"><?= $area['name']; ?></a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </dd>
                                </dl>

                            </li>
                        </ul>
                    </div>
                    <div id="citySugPane" class="t-layer t-layer-dest hide"></div>
                    <div class="t-layer t-layer-pc clearfix hide" style="left: 613px">
                        <ul class="t-pc-opt">
                            <li><a data-count="0" class="t-sel-row" href="javascript:;">不限</a></li>
                            <li><a data-count="1" class="t-sel-row" href="javascript:;">1人</a></li>
                            <li><a data-count="2" class="t-sel-row" href="javascript:;">2人</a></li>
                            <li><a data-count="3" class="t-sel-row" href="javascript:;">3人</a></li>
                            <li><a data-count="4" class="t-sel-row" href="javascript:;">4人</a></li>
                            <li><a data-count="5" class="t-sel-row" href="javascript:;">5人</a></li>
                            <li><a data-count="6" class="t-sel-row" href="javascript:;">6人</a></li>
                            <li><a data-count="7" class="t-sel-row" href="javascript:;">7人</a></li>
                            <li><a data-count="8" class="t-sel-row" href="javascript:;">8人</a></li>
                            <li><a data-count="9" class="t-sel-row" href="javascript:;">9人</a></li>
                            <li><a data-count="10" class="t-sel-row" href="javascript:;">10人+</a></li>
                        </ul>
                    </div>
                    <!--                    <div class="t-layer t-layer-calendar clearfix" style="left: 0px; display: none">-->
                    <!--                    </div>-->
                </form>
            </div>
        </div>
    </div>
    <div id="special-sale"></div>
    <div id="unit-history"></div>
    <input type="hidden" id="tjpage_id" value="101001"></div>