<link rel="stylesheet" href="<?= base_url(); ?>static/css/main_unitDetail.css">
<script type="text/javascript">
    document.querySelector('#tujia_page_navbar').style.position = 'relative';
</script>
<div id="app">
    <div class="view-tel">
        <div class="view-number-wrap">
            <div class="view-number-head"><h2>查看临时号码</h2><i id="closeBtn" class="icon iconfont" title="关闭"></i></div>
            <div class="view-number-body">
                <div class="step-cont"><span class="step1"><i class="order">1</i>输入您的手机号</span><span class="step2"><i
                                class="order">2</i>获取临时号码，并拨打</span></div>
                <div class="number-wrap">
                    <div class="num-box"><input class="tel-val" placeholder="请输入你的手机号码">
                        <button id="getNumberConfirmBtn" data-ismayi="False" inuse="true">获取临时号码</button>
                    </div>
                    <div class="tel-landlord" style="display:none"><p class="tel-self">请用您的手机号 <span
                                    id="input-num-info">1865555</span><span class="change" id="change">修改</span></p>
                        <p class="show-tel">拨打临时号码：<span id="gotNumber">13912345678</span></p></div>
                    <div class="tel-four" style="display:none">联系电话：<span id="tel-four-info"> 400-606-1230转21879</span>
                    </div>
                </div>
                <div class="prompt-info prompt1" style="display:none"><p>注：输入的手机号须为您拨打使用的手机号，否则无法接通</p>
                    <ol>
                        <li>为保障双方信息安全，获取到的170号码为途家提供的一次性临时号码，并非房东手机号，下次拨打仍需重新获取临时号码；</li>
                        <li>下单成功后，您可以通过订单详情或者确认短信查看房东的真实手机号；</li>
                        <li>请确保在途家平台进行交易，以防诈骗! 如与房东私下交易产生纠纷，途家不承担任何责任；</li>
                    </ol>
                </div>
                <div class="prompt-info prompt2" style="display:none">
                    <ol>
                        <li>请确保在途家平台进行交易，以防诈骗! 如与房东私下交易产生纠纷，途家不承担任何责任</li>
                    </ol>
                </div>
            </div>
        </div>
        <div id="exposeMask"></div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper"
             style="padding-left: 0px; padding-right: 0px; transform: translate3d(-4760px, 0px, 0px); transition-duration: 0s; width: 19040px; height: 390px;">
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171127081831_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141309119250_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171126575100_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171223/thumb/201712231616208233_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171302023500_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171126322951_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171126424004_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141257527573_670_390.jpg">
            </div>


            <div class="swiper-slide swiper-slide-visible swiper-slide-active"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141309125213_670_390.jpg">
            </div>

            <div class="swiper-slide swiper-slide-visible"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171223/thumb/201712231616141758_670_390.jpg">
            </div>

            <div class="swiper-slide swiper-slide-visible"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_180226/thumb/201802262142542558_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141257544074_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/20171014125752478_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141257528770_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141313454328_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171126378460_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171127081831_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141309119250_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171126575100_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171223/thumb/201712231616208233_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171302023500_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171126322951_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171126424004_670_390.jpg">
            </div>

            <div class="swiper-slide"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141257527573_670_390.jpg">
            </div>


            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141309125213_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171223/thumb/201712231616141758_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_180226/thumb/201802262142542558_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141257544074_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/20171014125752478_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141257528770_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141313454328_670_390.jpg">
            </div>
            <div class="swiper-slide swiper-slide-duplicate"><img
                        src="https://pic.tujia.com/upload/landlordunit/day_171017/thumb/201710171126378460_670_390.jpg">
            </div>
        </div>
        <span class="thumb-prev"></span>
        <span class="thumb-next"></span>
        <div class="shadow-box"></div>
        <!-- 相同房型套数 -->

    </div>
    <div id="houseInfo">
        <div class="hotel-info">
            <div class="hotel-cont">
                <div class="room-info">
                    <div class="house-name">
                        <span class="house-room-name"><?= $room["summary"]; ?></span>
                    </div>
                    <ul class="room-tag" id="tags">
                        <li class="tagsLi tagsLi-style0"
                            style="color: rgb(253, 130, 56); background: rgb(255, 245, 239); border-color: rgb(253, 130, 56);">
                            <span>连住优惠</span>
                            <div class="introducion">
                                <span style="color: #333">连住多天可享受超值折扣价</span>
                                <div class="triangle-border tb-border"></div>
                                <div class="triangle-border tb-background"></div>
                            </div>
                        </li>
                    </ul>
                    <div class="district-info">
                        <i class="icon-area"></i>
                        <span><?= $room["city"] . $room["block"] . $room["address"]; ?></span>
                        <a id="map-link" href="#unitmap">查看地图</a>
                    </div>

                    <div class="hotel-advan-tag hide">
                        <ul class="clearfix">
                            <li title="别墅单间" class="icon-bed">
                                <i class="icon iconfont"></i>
                                <span id="isDecoration">别墅单间</span>
                                <div class="m-tips-wrap" style="border: none; text-align: center;">
                                    <span></span>
                                </div>
                            </li>
                            <li title="1室1厅1卫" class="icon-bed">
                                <i class="icon iconfont"></i>
                                <span id="isDecoration" style="text-decoration: underline">1室1厅1卫</span>
                                <div class="m-tips-wrap" style="text-align: center; display: none;">
                                    <span>建筑面积26平米</span>
                                    <div class="triangle-border tb-border"></div>
                                    <div class="triangle-border tb-background"></div>
                                </div>
                            </li>
                            <li title="1张床" class="icon-bed">
                                <i class="icon iconfont"></i>
                                <span id="isDecoration" style="text-decoration: underline">1张床</span>
                                <div class="m-tips-wrap" style="text-align: center; display: none;">
                                    <span>大床(2×1.8米) 1张</span>
                                    <div class="triangle-border tb-border"></div>
                                    <div class="triangle-border tb-background"></div>
                                </div>
                            </li>
                            <li title="宜住2人" class="icon-bed">
                                <i class="icon iconfont"></i>
                                <span id="isDecoration">宜住2人</span>
                                <div class="m-tips-wrap" style="border: none; text-align: center; display: none;">
                                    <span></span>
                                </div>
                            </li>
                            <li title="独立卫浴" class="icon-bed">
                                <i class="icon iconfont"></i>
                                <span id="isDecoration">独立卫浴</span>
                                <div class="m-tips-wrap" style="border: none; text-align: center; display: none;">
                                    <span></span>
                                </div>
                            </li>
                            <li title="观景露台" class="icon-bed">
                                <i class="icon iconfont"></i>
                                <span id="isDecoration">观景露台</span>
                                <div class="m-tips-wrap" style="border: none; text-align: center; display: none;">
                                    <span></span>
                                </div>
                            </li>
                            <li title="私家花园" class="icon-bed">
                                <i class="icon iconfont"></i>
                                <span id="isDecoration">私家花园</span>
                                <div class="m-tips-wrap" style="border: none; text-align: center; display: none;">
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hotel-sidebar">
                    <div class="book-info ">
                        <div class="price-info">
                            <div class="room-price">
                                <p class="room-price-box">
                                    <span class="staring-price" id="present-price-box"><dfn>¥</dfn><a
                                                href="#date-cont-box" class="present-price" style="margin: 0px;">168</a></span>
                                </p>
                                <ul class="pay-tag">
                                    <li class="tagsLi tagsLi-style1"
                                        style="color: rgb(253, 130, 56); background: rgb(255, 245, 239); border-color: rgb(253, 130, 56);">
                                        <span>闪订</span>
                                        <div class="introducion">
                                            <span style="color: #333">下单即有房，无需等待确认</span>
                                            <div class="triangle-border tb-border"></div>
                                            <div class="triangle-border tb-background"></div>
                                        </div>
                                    </li>


                                    <li class="tagsLi tagsLi-style2"
                                        style="color: rgb(253, 130, 56); background: rgb(255, 245, 239); border-color: rgb(253, 130, 56);">
                                        <span>免押金</span>
                                        <div class="introducion">
                                            <span style="color: #333">信用验证达标，即可享受途家担保，无需支付押金</span>
                                            <div class="triangle-border tb-border"></div>
                                            <div class="triangle-border tb-background"></div>
                                        </div>
                                    </li>
                                    <!-- tag -->
                                </ul>
                            </div>
                        </div>

                        <div class="comment-info">

                            <div class="rating-box" style="display:inline-block">

                                <span class="rating-span"><b class="hotel-value">5</b>/5分</span>
                                <div class="m-tips-wrap-comments">
                                    <div class="tips-content comments-total">
                                        <h2>房屋综合评分</h2>
                                        <div class="results-wrap">
                        <span class="visual-description-wrapper">
                          <span class="score" id="score" style="width: 100%;"></span>
                        </span>
                                            <div class="results-comments">
                                                <span class="hotel-value">5</span>/5分
                                            </div>
                                        </div>
                                        <div class="comments-items">
                                            <ul>
                                                <li><span class="comments-items-name">整洁卫生：</span><span
                                                            class="number-box color-blue">5</span>分
                                                </li>
                                                <li><span class="comments-items-name">交通位置：</span><span
                                                            class="number-box color-blue">5</span>分
                                                </li>
                                                <li class="border-none"><span
                                                            class="comments-items-name">管理服务：</span><span
                                                            class="number-box color-blue">5</span>分
                                                </li>
                                                <li class="border-none"><span
                                                            class="comments-items-name">设施装修：</span><span
                                                            class="number-box color-blue">5</span>分
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="triangle-border tb-border"></div>
                                    <div class="triangle-border tb-background"></div>
                                </div>

                            </div>
                            <a class="comments-area" href="#comment" id="comments"><span
                                        class="comments-count"> 25</span>条点评</a>
                            <span class="exp-voucher">（发点评送福利<i class="icon-desc-text"></i>）</span>


                            <!--发放点评说明-->
                            <div class="tips-content-wrap">

                                <div class="tips-content">
                                    <h2>发点评送福利说明</h2>
                                    <div class="tips-info">
                                        <ol>
                                            <li>下单入住后90天内发表点评（字数为50字），审核通过后赠送300积分</li>
                                            <li>
                                                点评内容真实丰富（100字以上）并上传房屋相关实拍高质量图片（3张），将有机会评选为精华点评，加精点评将赠送200积分，赠送上传图片积分（每张50积分）
                                            </li>
                                            <li>同一账号对同一房屋的多条内容相似点评，如符合加精规则仅一条可评选为精华点评</li>
                                            <li>自订单已入住状态起，90天内可发表点评</li>
                                        </ol>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!--发放点评说明 结束-->
                    </div>
                    <!-- tag -->


                </div>
            </div>
        </div>
    </div>
    <div class="wrap-box clearfix">
        <div class="main-cont">
            <div id="product-date" class="product-date">
                <div class="date-box">
                    <div class="date-change-box">
                        <div class="change-control-group" id="wrapper"><label for="" class="calender">
                                <span><i class="icon-cal iconfont"></i> </span>
                                <img src="https://staticfile.tujia.com/portalsite2/images/loading.gif" alt=""
                                     class="unit-loading">
                                <input type="text" name="startDate" id="startDate"
                                       value="" readonly="readonly"
                                       class="calender-input">至
                                <input type="text" name="endDate" id="endDate"
                                       value="" readonly="readonly"
                                       class="calender-input-end"></label>
                        </div>
                        <p class="search-btn">确定时间</p>
                        <p class="preferential"></p></div>
                </div>
                <!--                付款入口-->
                <div class="product-content">
                    <div class="product-con">
                        <div class="product-tips">
                            连住优惠：暂无
                        </div>
                        <div class="product-box">
                            <div class="date-change-box">
                                <div class="total-price">
                                    <p class="product-name">基础价</p>
                                </div>
                                <div class="pay-all">
                                    <span class="pay-all-part" title="需预付全额房费">预付全额</span>
                                    <div class="triangle-no-refunds">
                                        <div class="no-refunds">(限时退)</div>
                                        <div class="message-box-different" style="display: none;">
                                            <h2 class="message-title">限时退</h2>
                                            <span class="message-word">
              取消订单，扣除全部房费作为违约金支付给房东，如提前离店，扣除全部剩余房费作为违约金支付给房东。
            </span>
                                            <div class="triangle-border tb-border"></div>
                                            <div class="triangle-border tb-background"></div>
                                        </div>
                                    </div>

                                </div>
                                <p class="price">
                                    <span class="symbol">￥ </span>
                                    <span class="price-count"><?= $room["price"]; ?>/天</span>
                                </p>
                                <button class="order-btn" data-id="1051371" data-activityinfo="">立即预订</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="unitDetailInfo clearfix" id="unitdetailinfo">    <!--吸顶-->
                <div class="house-tab-box">
                    <div class="house-tab" id="contentTab">
                        <ul class="clearfix">
                            <li class="item-first current">
                                <a href="#unitdetailinfo">房屋详情</a>
                            </li>
                            <li class="">
                                <a href="#unitcheckinneedtoknow">预订须知</a>
                            </li>
                            <!--                            <li class="">-->
                            <!--                                <a href="#unitmap">位置地图</a>-->
                            <!--                            </li>-->
                            <!--                            <li class="">-->
                            <!--                                <a href="#comment">房屋点评（<span class="comment-total">25条</span>）</a>-->
                            <!--                            </li>-->

                            <li class="item-last">
                                <a href="#product-date" id="tabbookbtn" class="book-btn">查看房价</a>
                                <a href="#product-date" id="tabbookprice"><span class="price-value"><dfn
                                                class="f-vt">￥</dfn> <i class="priceInfo">168</i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--房屋亮点-->

                <!--设施服务-->
                <div class="unit-cont facility-cont">
                    <div class="side-box">
                        <i class="iconfont"></i>
                        <h3>设施服务</h3>
                    </div>
                    <div class="content-box">
                        <div class="facility-list limit-height" id="listWrap">

                            <h5>居家</h5>
                            <ul class="clearfix">
                                <li><i class="iconfont"></i>电视</li>
                                <li><i class="iconfont"></i>冰箱</li>
                                <li><i class="iconfont"></i>洗衣机</li>
                                <li><i class="iconfont"></i>无线网络</li>
                                <li><i class="iconfont"></i>空调</li>
                                <li><i class="iconfont"></i>空调</li>
                                <li class="i-not"><i class="iconfont"></i>暖气</li>
                                <li><i class="iconfont"></i>电热水壶</li>
                                <li><i class="iconfont"></i>电吹风</li>
                                <li><i class="iconfont"></i>熨斗/挂烫机</li>
                                <li><i class="iconfont"></i>洗衣粉</li>
                                <li><i class="iconfont"></i>晾衣架</li>
                                <li><i class="iconfont"></i>打扫工具</li>
                                <li><i class="iconfont"></i>拖鞋</li>
                            </ul>

                            <h5>卫浴</h5>
                            <ul class="clearfix">
                                <li><i class="iconfont"></i>全天热水</li>
                                <li><i class="iconfont"></i>独立卫浴</li>
                                <li><i class="iconfont"></i>毛巾</li>
                                <li class="i-not"><i class="iconfont"></i>浴巾</li>
                                <li><i class="iconfont"></i>牙具</li>
                                <li><i class="iconfont"></i>香皂</li>
                                <li><i class="iconfont"></i>洗发水</li>
                                <li><i class="iconfont"></i>卫生纸</li>
                            </ul>

                            <h5>餐厨</h5>
                            <ul class="clearfix">
                                <li><i class="iconfont"></i>燃气灶</li>
                                <li><i class="iconfont"></i>电磁炉</li>
                                <li><i class="iconfont"></i>烹饪锅具</li>
                                <li><i class="iconfont"></i>刀具菜板</li>
                                <li><i class="iconfont"></i>调料</li>
                                <li><i class="iconfont"></i>电饭煲</li>
                                <li><i class="iconfont"></i>餐具</li>
                                <li><i class="iconfont"></i>微波炉</li>
                                <li><i class="iconfont"></i>洗涤用具</li>
                            </ul>

                            <h5>周边500米</h5>
                            <ul class="clearfix">
                                <li><i class="iconfont"></i>超市</li>
                                <li><i class="iconfont"></i>菜市场</li>
                                <li><i class="iconfont"></i>餐厅</li>
                                <li><i class="iconfont"></i>药店</li>
                                <li><i class="iconfont"></i>泳池</li>
                                <li><i class="iconfont"></i>儿童乐园</li>
                                <li><i class="iconfont"></i>提款机</li>
                                <li><i class="iconfont"></i>免费停车</li>
                            </ul>

                            <h5>特色及其他</h5>
                            <ul class="clearfix">
                                <li><i class="iconfont"></i>观景露台</li>
                                <li><i class="iconfont"></i>私家花园</li
                                <li><i class="iconfont"></i>保安</li>
                                <li><i class="iconfont"></i>灭火器</li>
                                <li class="i-not"><i class="iconfont"></i>电梯</li>
                                <li><i class="iconfont"></i>有窗户</li>
                            </ul>

                            <h5>服务</h5>
                            <ul class="clearfix">
                                <li><i class="iconfont"></i>行李寄存</li>
                            </ul>

                        </div>
                        <div class="show-all-btn" id="facilityshowmore">
                            <a href="javascript:;">查看全部</a><i class="icon-arrow down"></i>
                        </div>
                    </div>
                </div>

                <!--房屋描述-->
                <div class="unit-cont intro-cont line-dashed">
                    <div class="side-box">
                        <i class="iconfont"></i>
                        <h3>房屋描述</h3>
                    </div>
                    <div class="content-box">

                        <?= $room["introduce"]; ?>

                        <div class="show-all-btn" id="introshowmore" style="display: none;">
                            <a href="javascript:;">查看全部</a><i class="icon-arrow down"></i>
                        </div>
                    </div>
                </div>

                <!--小区概况-->
            </div>
            <div class="unitCheckinTips" id="unitcheckinneedtoknow">
                <div class="unitIntro clearfix">
                    <h2>预订须知</h2><span>（房屋编号：<?= $room["id"]; ?>)</span>
                </div>
                <!--入住须知-->

                <div class="resident-cont clearfix">
                    <div class="side-box">
                        <i class="iconfont icon-resident"></i>
                        <h3>入住须知</h3>
                    </div>
                    <div class="content-box">

                        <!--横向展示-->
                        <div class="pre-mod fold">
                            <p>入住时间：</p>
                            <span>12:00</span>
                        </div>
                        <!--横向展示-->
                        <div class="pre-mod fold">
                            <p>退房时间：</p>
                            <span>12:00</span>
                        </div>
                        <!--横向展示-->
                        <div class="pre-mod fold">
                            <p>接待时间：</p>
                            <span>00:00~24:00</span>
                        </div>
                        <!--横向展示-->
                        <div class="pre-mod fold">
                            <p>入住押金：</p>
                            <span>在线支付押金¥200.00</span>
                            <i class="iconfont icon-tips j-depositInfo" rel="j-depositInfo"></i>
                            <div id="j-depositInfo" style="display:none">
                                <div class="depositInfo-content">
                                    预订『全额预付价』产品时，在线支付200.00元住房押金，无需到店后再支付，离店后无设施损坏等问题按原支付方式全额退回
                                </div>
                            </div>
                            <span>通过信用认证，可享信用免押金</span>
                            <a href="https://vip.tujia.com/UserInfo/ZMAuthorization" class="bindnow">立即绑定</a>
                        </div>
                        <!--横向展示-->

                        <!--非横向展示-->

                        <div class="pre-mod">
                            <p>房屋守则：</p>
                            <ol class="rules-list clearfix">
                                <li><i class="iconfont"></i>提供发票(免费)
                                </li>
                                <li><i class="iconfont"></i>接待外宾
                                </li>
                                <li><i class="iconfont"></i>允许吸烟
                                </li>
                                <li><i class="iconfont"></i>允许携带宠物
                                </li>
                                <li><i class="iconfont"></i>接待老人
                                    <i class="iconfont icon-tips j-admitOldPeple" rel="j-admitOldPeple"></i>
                                    <div id="j-admitOldPeple" style="display:none">
                                        <div class="admitpeople">接待65岁以上老人</div>
                                    </div>
                                </li>
                                <li><i class="iconfont"></i>接待儿童
                                    <i class="iconfont icon-tips j-admitChildren" rel="j-admitChildren"></i>
                                    <div id="j-admitChildren" style="display:none">
                                        <div class="admitpeople">接待0-12岁儿童</div>
                                    </div>
                                </li>
                                <li><i class="iconfont"></i>打扫卫生(1客1扫)
                                </li>
                                <li><i class="iconfont"></i>被单更换(1客1换)
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!--额外费用-->

                <div class="extracost-cont clearfix line-dashed">
                    <div class="side-box">
                        <i class="iconfont icon-service"></i>
                        <h3>额外费用</h3>
                    </div>
                    <div class="content-box">

                        <!--横向展示-->
                        <div class="pre-mod fold">
                            <ol class="alowed">
                                <li class="line-through" rel="j-allowed-tip"><em>允许加人</em>
                                    <div class="tips-cont" style="display:none">
                                    </div>
                                </li>
                                <li class="line-through" rel="j-allowed-tip"><em>允许聚会</em>
                                    <div class="tips-cont" style="display:none">
                                    </div>
                                </li>
                                <li class="line-through" rel="j-allowed-tip"><em>允许做饭</em>
                                    <div class="tips-cont" style="display:none">
                                    </div>
                                </li>
                                <li rel="j-allowed-tip"><em
                                            data-tip="可加床(最多可加床1张，加床费用需要另行支付。)">可加床(最多可加床1张，加床费用需要另行支付。)</em>
                                    <div class="tips-cont" style="display:none">
                                    </div>
                                </li>
                                <li class="line-through" rel="j-allowed-tip"><em>允许商业拍摄</em>
                                    <div class="tips-cont" style="display:none">
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <!--横向展示-->
                        <div class="pre-mod">
                            <p>其他：</p>
                            <div class="desc">1、入住时请您准备好有效身份证原件! 2、贵重物品请妥善保管，老人及小孩入住，请自行照顾好注意安全! 3、请保持安静，不要打扰别人，不要做违法的事情
                                4、请爱护房间内设施，如有损坏，照价赔偿。
                                5、提供油盐酱醋调料和餐具，但不提供菜品，每人每天15元。6、加人加床需另行支付7、对宠物的看管按照客人要求进行管理，只负责饮食起居，费用按天计算。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="unitmap">
                <div class="map-title-box"><h2 class="map-title">位置地图</h2></div>
                <div class="map-main hide">
                    <div id="baidu-map"
                         style="overflow: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left;">
                        <div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: url(&quot;https://api.map.baidu.com/images/openhand.cur&quot;) 8 8, default;">
                            <div class="BMap_mask"
                                 style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; user-select: none; width: 570px; height: 550px;"></div>
                            <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;">
                                <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div>
                                <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;">
                                    <span class="BMap_Marker BMap_noprint" unselectable="on" "="" style="position:
                                    absolute; padding: 0px; margin: 0px; border: 0px; cursor: pointer; background: url(&quot;https://api.map.baidu.com/images/blank.gif&quot;);
                                    width: 30px; height: 25px; left: 488px; top: -1812px; z-index: 19000000;"
                                    title=""></span></div>
                                <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div>
                                <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;">
                                    <div class="search-overlay"
                                         style="z-index: -6114710; user-select: none; left: 566px; top: 41px;">1
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6085144; user-select: none; left: -5884px; top: 9543px;">2
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6140650; user-select: none; left: 7179px; top: -8308px;">3
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6127012; user-select: none; left: 10951px; top: -3917px;">4
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6138210; user-select: none; left: 1945px; top: -7521px;">5
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6169900; user-select: none; left: 27163px; top: -17735px;">6
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6192586; user-select: none; left: -17027px; top: -25056px;">7
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6134370; user-select: none; left: 12251px; top: -6285px;">8
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6137602; user-select: none; left: 7846px; top: -7326px;">9
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6130162; user-select: none; left: 7208px; top: -4931px;">10
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6118108; user-select: none; left: -4049px; top: -1052px;">11
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6141556; user-select: none; left: 7144px; top: -8599px;">12
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6128884; user-select: none; left: 10495px; top: -4519px;">13
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6118368; user-select: none; left: 4887px; top: -1135px;">14
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6229250; user-select: none; left: 3327px; top: -36908px;">15
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6218722; user-select: none; left: -65px; top: -33502px;">16
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6222038; user-select: none; left: -9042px; top: -34575px;">17
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6218454; user-select: none; left: -12679px; top: -33416px;">18
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6216084; user-select: none; left: -13289px; top: -32649px;">19
                                    </div>
                                    <div class="search-overlay"
                                         style="z-index: -6119436; user-select: none; left: 1430px; top: -1479px;">20
                                    </div>
                                </div>
                                <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;">
                                    <span class="BMap_Marker" unselectable="on"
                                          style="position: absolute; padding: 0px; margin: 0px; border: 0px; width: 0px; height: 0px; left: 488px; top: -1812px; z-index: 19000000;"><div
                                                style="position: absolute; margin: 0px; padding: 0px; width: 30px; height: 25px; overflow: hidden;"><img
                                                    src="https://staticfile.tujia.com/portalsite2/images/markers_sj.png"
                                                    style="display: block; border:none;margin-left:0px; margin-top:-25px; "></div></span>
                                </div>
                                <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"></div>
                                <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div>
                                <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div>
                            </div>
                            <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;">
                                <div style="position: absolute; overflow: visible; z-index: -100; left: 285px; top: 275px; display: block; transform: translate3d(0px, 0px, 0px);">
                                    <img src="https://gss0.bdstatic.com/8bo_dTSlRMgBo1vgoIiO_jowehsv/tile/?qt=tile&amp;x=22603&amp;y=6943&amp;z=17&amp;styles=pl&amp;scaler=1&amp;udt=20180308"
                                         style="position: absolute; border: none; width: 256px; height: 256px; left: 150px; top: -99px; max-width: none; opacity: 1;"><img
                                            src="https://gss0.bdstatic.com/8bo_dTSlQ1gBo1vgoIiO_jowehsv/tile/?qt=tile&amp;x=22602&amp;y=6942&amp;z=17&amp;styles=pl&amp;scaler=1&amp;udt=20180308"
                                            style="position: absolute; border: none; width: 256px; height: 256px; left: -106px; top: 157px; max-width: none; opacity: 1;"><img
                                            src="https://gss0.bdstatic.com/8bo_dTSlQ1gBo1vgoIiO_jowehsv/tile/?qt=tile&amp;x=22601&amp;y=6943&amp;z=17&amp;styles=pl&amp;scaler=1&amp;udt=20180308"
                                            style="position: absolute; border: none; width: 256px; height: 256px; left: -362px; top: -99px; max-width: none; opacity: 1;"><img
                                            src="https://gss0.bdstatic.com/8bo_dTSlR1gBo1vgoIiO_jowehsv/tile/?qt=tile&amp;x=22602&amp;y=6943&amp;z=17&amp;styles=pl&amp;scaler=1&amp;udt=20180308"
                                            style="position: absolute; border: none; width: 256px; height: 256px; left: -106px; top: -99px; max-width: none; opacity: 1;"><img
                                            src="https://gss0.bdstatic.com/8bo_dTSlRMgBo1vgoIiO_jowehsv/tile/?qt=tile&amp;x=22602&amp;y=6944&amp;z=17&amp;styles=pl&amp;scaler=1&amp;udt=20180308"
                                            style="position: absolute; border: none; width: 256px; height: 256px; left: -106px; top: -355px; max-width: none; opacity: 1;"><img
                                            src="https://gss0.bdstatic.com/8bo_dTSlRsgBo1vgoIiO_jowehsv/tile/?qt=tile&amp;x=22601&amp;y=6942&amp;z=17&amp;styles=pl&amp;scaler=1&amp;udt=20180308"
                                            style="position: absolute; border: none; width: 256px; height: 256px; left: -362px; top: 157px; max-width: none; opacity: 1;"><img
                                            src="https://gss0.bdstatic.com/8bo_dTSlR1gBo1vgoIiO_jowehsv/tile/?qt=tile&amp;x=22603&amp;y=6942&amp;z=17&amp;styles=pl&amp;scaler=1&amp;udt=20180308"
                                            style="position: absolute; border: none; width: 256px; height: 256px; left: 150px; top: 157px; max-width: none; opacity: 1;"><img
                                            src="https://gss0.bdstatic.com/8bo_dTSlR1gBo1vgoIiO_jowehsv/tile/?qt=tile&amp;x=22601&amp;y=6944&amp;z=17&amp;styles=pl&amp;scaler=1&amp;udt=20180308"
                                            style="position: absolute; border: none; width: 256px; height: 256px; left: -362px; top: -355px; max-width: none; opacity: 1;"><img
                                            src="https://gss0.bdstatic.com/8bo_dTSlRcgBo1vgoIiO_jowehsv/tile/?qt=tile&amp;x=22603&amp;y=6944&amp;z=17&amp;styles=pl&amp;scaler=1&amp;udt=20180308"
                                            style="position: absolute; border: none; width: 256px; height: 256px; left: 150px; top: -355px; max-width: none; opacity: 1;">
                                </div>
                            </div>
                            <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2; display: none; visibility: hidden;">
                                <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 0; display: none;"></div>
                            </div>
                            <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div>
                        </div>
                        <div class="pano_close" title="退出全景" style="z-index: 1201; display: none;"></div>
                        <a class="pano_pc_indoor_exit" title="退出室内景" style="z-index: 1201; display: none;"><span
                                    style="float:right;margin-right:12px;">出口</span></a>
                        <div class=" anchorBL"
                             style="height: 32px; position: absolute; z-index: 30; text-size-adjust: none; bottom: 20px; right: auto; top: auto; left: 1px;">
                            <a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1"
                               style="outline: none;"><img style="border:none;width:77px;height:32px"
                                                           src="https://api.map.baidu.com/images/copyright_logo.png"></a>
                        </div>
                        <div id="zoomer"
                             style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:url(https://api.map.baidu.com/images/openhand.cur) 8 8,default">
                            <div class="BMap_zoomer" style="top:0;left:0;"></div>
                            <div class="BMap_zoomer" style="top:0;right:0;"></div>
                            <div class="BMap_zoomer" style="bottom:0;left:0;"></div>
                            <div class="BMap_zoomer" style="bottom:0;right:0;"></div>
                        </div>
                        <div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL"
                             style="width: 62px; height: 192px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100; text-size-adjust: none;">
                            <div class="BMap_stdMpPan">
                                <div class="BMap_button BMap_panN" title="向上平移"></div>
                                <div class="BMap_button BMap_panW" title="向左平移"></div>
                                <div class="BMap_button BMap_panE" title="向右平移"></div>
                                <div class="BMap_button BMap_panS" title="向下平移"></div>
                                <div class="BMap_stdMpPanBg BMap_smcbg"></div>
                            </div>
                            <div class="BMap_stdMpZoom" style="height: 147px; width: 62px;">
                                <div class="BMap_button BMap_stdMpZoomIn" title="放大一级">
                                    <div class="BMap_smcbg"></div>
                                </div>
                                <div class="BMap_button BMap_stdMpZoomOut" title="缩小一级" style="top: 126px;">
                                    <div class="BMap_smcbg"></div>
                                </div>
                                <div class="BMap_stdMpSlider" style="height: 108px;">
                                    <div class="BMap_stdMpSliderBgTop" style="height: 108px;">
                                        <div class="BMap_smcbg"></div>
                                    </div>
                                    <div class="BMap_stdMpSliderBgBot" style="top: 13px; height: 99px;"></div>
                                    <div class="BMap_stdMpSliderMask" title="放置到此级别"></div>
                                    <div class="BMap_stdMpSliderBar" title="拖动缩放"
                                         style="cursor: url(&quot;https://api.map.baidu.com/images/openhand.cur&quot;) 8 8, default; top: 13px;">
                                        <div class="BMap_smcbg"></div>
                                    </div>
                                </div>
                                <div class="BMap_zlHolder">
                                    <div class="BMap_zlSt">
                                        <div class="BMap_smcbg"></div>
                                    </div>
                                    <div class="BMap_zlCity">
                                        <div class="BMap_smcbg"></div>
                                    </div>
                                    <div class="BMap_zlProv">
                                        <div class="BMap_smcbg"></div>
                                    </div>
                                    <div class="BMap_zlCountry">
                                        <div class="BMap_smcbg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="BMap_stdMpGeolocation"
                                 style="position: initial; display: none; margin-top: 43px; margin-left: 10px;">
                                <div class="BMap_geolocationContainer"
                                     style="position: initial; width: 24px; height: 24px; overflow: hidden; margin: 0px; box-sizing: border-box;">
                                    <div class="BMap_geolocationIconBackground"
                                         style="width: 24px; height: 24px; background-image: url(https://api.map.baidu.com/images/navigation-control/geolocation-control/pc/bg-20x20.png); background-size: 20px 20px; background-position: 3px 3px; background-repeat: no-repeat;">
                                        <div class="BMap_geolocationIcon"
                                             style="position: initial; width: 24px; height: 24px; cursor: pointer; background-image: url('https://api.map.baidu.com/images/navigation-control/geolocation-control/pc/success-10x10.png'); background-size: 10px 10px; background-repeat: no-repeat; background-position: center;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div unselectable="on" class=" BMap_scaleCtrl BMap_noprint anchorTR"
                             style="bottom: auto; right: 81px; top: 18px; left: auto; width: 61px; position: absolute; z-index: 10; text-size-adjust: none;">
                            <div class="BMap_scaleTxt" unselectable="on"
                                 style="background-color: transparent; color: black;">100&nbsp;米
                            </div>
                            <div class="BMap_scaleBar BMap_scaleHBar" style="background-color: black;"><img
                                        style="border:none" src="https://api.map.baidu.com/images/mapctrls.png"></div>
                            <div class="BMap_scaleBar BMap_scaleLBar" style="background-color: black;"><img
                                        style="border:none" src="https://api.map.baidu.com/images/mapctrls.png"></div>
                            <div class="BMap_scaleBar BMap_scaleRBar" style="background-color: black;"><img
                                        style="border:none" src="https://api.map.baidu.com/images/mapctrls.png"></div>
                        </div>
                        <div unselectable="on" class=" BMap_cpyCtrl BMap_noprint anchorBL"
                             style="cursor: default; white-space: nowrap; color: black; background: none; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 11px; line-height: 15px; font-family: arial, sans-serif; bottom: 2px; right: auto; top: auto; left: 2px; position: absolute; z-index: 10; text-size-adjust: none;">
                            <span _cid="1" style="display: inline;"><span
                                        style="background: rgba(255, 255, 255, 0.701961);padding: 0px 1px;line-height: 16px;display: inline;height: 16px;">©&nbsp;2018 Baidu - GS(2016)2089号 - 甲测资字1100930 - 京ICP证030173号 - Data © 长地万方</span></span>
                        </div>
                    </div>
                    <div id="map-origin" lng="103.95974681887597" lat="30.602482215575684" name="双流机场旁别墅，免费接送机服务"
                         coordinatetype="bd09ll" address="西航港大道中二段南100米宗申·赛纳维-北2门"><i class="icon"></i>
                        <span>房屋位置</span></div>
                </div>
                <div class="map-around hide">
                    <ul class="facility-types">
                        <li data-index="0" class="active">交通</li>
                        <li data-index="1">餐饮</li>
                        <li data-index="2">景点</li>
                        <li data-index="3">购物</li>
                        <li data-index="4">娱乐</li>
                    </ul>
                    <div id="map-result-container">
                        <div class="search-result" style="display: block;">
                            <!-- trafficStation数组中分别为： 0 机场 1 火车站 2 长途汽车站 3 地铁站  -->
                            <div class="place-list">
                                <!-- fix bug: trafficStation必然为数组，默认为空数组 -->
                                <div class="traffic-station">
                                    机场
                                </div>
                                <div class="place" data-lat="30.573554" data-lng="103.961044" title="成都双流国际机场">
                                    <span class="place-num">1</span>
                                    <span class="place-name">成都双流国际机场</span>
                                </div>
                                <div class="place" data-lat="30.425724" data-lng="103.84516" title="新津机场">
                                    <span class="place-num">2</span>
                                    <span class="place-name">新津机场</span>
                                </div>
                                <div class="traffic-station">
                                    火车站
                                </div>
                                <div class="place" data-lat="30.703259" data-lng="104.079853" title="成都站">
                                    <span class="place-num">3</span>
                                    <span class="place-name">成都站</span>
                                </div>
                                <div class="place" data-lat="30.635065" data-lng="104.147618" title="成都东站">
                                    <span class="place-num">4</span>
                                    <span class="place-name">成都东站</span>
                                </div>
                                <div class="place" data-lat="30.691053" data-lng="103.985812" title="成都西站">
                                    <span class="place-num">5</span>
                                    <span class="place-name">成都西站</span>
                                </div>
                                <div class="place" data-lat="30.849508" data-lng="104.438878" title="火车站">
                                    <span class="place-num">6</span>
                                    <span class="place-name">火车站</span>
                                </div>

                                <div class="place" data-lat="30.962938" data-lng="103.644964" title="都江堰火车站">
                                    <span class="place-num">7</span>
                                    <span class="place-name">都江堰火车站</span>
                                </div>
                                <div class="traffic-station">
                                    长途汽车站
                                </div>
                                <div class="place" data-lat="30.671855" data-lng="104.170969" title="十陵客运站">
                                    <span class="place-num">8</span>
                                    <span class="place-name">十陵客运站</span>
                                </div>
                                <div class="place" data-lat="30.688016" data-lng="104.091833" title="北门客运站">
                                    <span class="place-num">9</span>
                                    <span class="place-name">北门客运站</span>
                                </div>
                                <div class="place" data-lat="30.650816" data-lng="104.08038" title="成都新南门汽车站">
                                    <span class="place-num">10</span>
                                    <span class="place-name">成都新南门汽车站</span>
                                </div>
                                <div class="place" data-lat="30.590541" data-lng="103.878135" title="彭镇客运站">
                                    <span class="place-num">11</span>
                                    <span class="place-name">彭镇客运站</span>
                                </div>
                                <div class="place" data-lat="30.707789" data-lng="104.079219" title="成都五块石客运站">
                                    <span class="place-num">12</span>
                                    <span class="place-name">成都五块石客运站</span>
                                </div>
                                <div class="place" data-lat="30.644423" data-lng="104.139434" title="成都公交五桂桥北区客运站">
                                    <span class="place-num">13</span>
                                    <span class="place-name">成都公交五桂桥北区客运站</span>
                                </div>
                                <div class="place" data-lat="30.591842" data-lng="104.038666" title="成都石羊客运站">
                                    <span class="place-num">14</span>
                                    <span class="place-name">成都石羊客运站</span>
                                </div>
                                <div class="place" data-lat="31.146259" data-lng="104.010645" title="红岩客运站">
                                    <span class="place-num">15</span>
                                    <span class="place-name">红岩客运站</span>
                                </div>
                                <div class="place" data-lat="31.093618" data-lng="103.949704" title="楠杨汽车站">
                                    <span class="place-num">16</span>
                                    <span class="place-name">楠杨汽车站</span>
                                </div>
                                <div class="place" data-lat="31.110196" data-lng="103.788423" title="磁峰客运站">
                                    <span class="place-num">17</span>
                                    <span class="place-name">磁峰客运站</span>
                                </div>
                                <div class="place" data-lat="31.092278" data-lng="103.723078" title="向峨乡客运招呼站">
                                    <span class="place-num">18</span>
                                    <span class="place-name">向峨乡客运招呼站</span>
                                </div>

                                <div class="place" data-lat="31.080425" data-lng="103.712122" title="向峨客运站">
                                    <span class="place-num">19</span>
                                    <span class="place-name">向峨客运站</span>
                                </div>
                                <div class="traffic-station">
                                    地铁站
                                </div>
                                <div class="place" data-lat="30.597184" data-lng="103.976565" title="金花">
                                    <span class="place-num">20</span>
                                    <span class="place-name">金花</span>
                                </div>
                            </div>
                        </div>
                        <div class="route-result" style="display: none;"></div>
                        <div class="loading" style="display: none;">途途正在努力加载中...</div>
                    </div>
                </div>
            </div>
            <div id="talentExperience">
            </div>
        </div>
        <!--房东信息版块-->
        <div class="sidebar-cont">
            <div id="landlordInfo">
                <div class="m-column-box">
                    <!--title-->
                    <div class="sidebar-hd-new"><h2>房东信息</h2></div>
                    <!--title end-->
                    <!--content-->
                    <div class="m-listing-cont">
                        <div class="hotel-info">
                            <div class="photo-cont">
                                <a target="_blank" href="/fangdong/143412.htm">
                                    <img src="<?= base_url() . 'upload/default-header.png'; ?>"
                                         alt="" width="100" height="100" class="photo-img"></a>
                            </div>
                            <h2 class="name-box">
                                <a target="_blank" class="listing-name"
                                   href="/fangdong/143412.htm"><?= $person["name"]; ?> </a>
                                <span style="background: #62c4a5">个人房东</span>
                            </h2>

                            <div class="shop-tag">
                                <p class="lab-box"><i class="icon-verified"></i>实名认证</p>
                            </div>
                            <div class="shop-rate">
                                <p class="link-btn-cont" ownerid="8812097" ownername="高家庄别墅" unitid="393844"
                                   hotelid="143412">
                                    <a href="javascript:;" ownerid="8812097" ownername="高家庄别墅" unitid="393844"
                                       hotelid="143412" data="2" class="chat-btn">和房东聊天</a>
                                </p>
                                <p class="contact-info">联系电话：
                                    <span class="tel-box" data-hotelid="143412" data-loginid="5845113"
                                          data-defaultphone="400-606-1230 转 87335"
                                          data-unitglobalid="33d75dfe-a21d-4ed2-a0b4-b725fe3e6e6a"><?= $person["tel"]; ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--content -->
                </div>
            </div>
            <div id="landlordStory">
            </div>
            <div class="sidebar-house">
                <div class="landlord-other-house">
                    <h2 class="recommended-title">
                        房东其他房屋
                        (<span>1</span>)
                    </h2>
                    <ul class="recommended-house-list">


                        <li>
                            <a href="https://www.tujia.com/detail/393851.htm">
                                <img src="https://pic.tujia.com/upload/landlordunit/day_171014/thumb/201710141329436103_300_200.jpg"
                                     class="house-pic">
                            </a>
                            <div class="house-desc">
                                <a class="title" href="https://www.tujia.com/detail/393851.htm" data-id="393851">双流机场旁别墅，免费接送机</a>
                                <div class="house-detail">
                                    <span>公寓/1室1厅1卫/宜住2人/1床</span>
                                </div>
                                <span class="price">

            <span class="price-symbol">￥</span>
            <span class="price-num">188</span>

        </span>
                            </div>
                        </li>


                    </ul>

                </div>


                <div class="assured">
                    <i class="icon"></i>
                    <div class="desc">
                        <h4>
                            1000万保障金 到店无房额外赔偿
                        </h4>
                        <span>房屋描述失真、到店无房、房东加价全部退订金并补偿</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?= base_url() ?>static/js/CalWedget.js"></script>
<script type="text/javascript">
    //内容全部显示事件
    $(".show-all-btn").click(function () {
        $("#listWrap").removeClass('limit-height');
    });

    //注册日历控件
    var calwidget = new CalWidget($('#wrapper'));
    calwidget.install();

    //日历控件出现消失事件
    $("#wrapper").click(function () {
        $(".t-layer-calendar").show();
    });
    $(".search-btn").click(function () {
        $(".t-layer-calendar").hide();
    });

    //    预定时间事件
    var count = 0;//表示用户选择次数为0或偶数次
    var day_click = function () {
        var time = $(this).data('ts');
        // console.log(time);
        if (date_compare.start === null) {
            count = (count + 1) % 2;
            date_compare.start = time;
            if (date_compare.end === null) {
                date_compare.end = time;
            }
        } else if (time < date_compare.start || count === 0) {
            count = 1;
            date_compare.start = time;
            date_compare.end = time;
        } else {
            if (count === 1) {
                date_compare.end = time;
            } else {
                date_compare.start = time;
            }
            count = (count + 1) % 2;
        }

        var sDate = new Date(date_compare.start);
        var eDate = new Date(date_compare.end);
        $('#startDate').val(sDate.getFullYear() + "-" + (sDate.getMonth() + 1) + "-" + sDate.getDate());
        $('#endDate').val(eDate.getFullYear() + "-" + (eDate.getMonth() + 1) + "-" + eDate.getDate());
        $('#checkInOutBooking').val($('#startDate').val() + ' 至 ' + $('#endDate').val());
    };
    var date_compare = {
        start: null,
        end: null
    };
    //    js计时器记录
    var interval = {};
    interval.calCode = setInterval(function () {
        //      防止绑定冲突
        $('.day').unbind('click', day_click);
        $('.day').bind('click', day_click);
    }, 500);

    //提交预定事件
    $(".order-btn").click(function () {
        var form = {};
        form.user_id = <?= $room["id"];?>;
        form.room_id = <?= $person["id"];?>;
        form.begin = $('#startDate').val();
        form.end = $('#endDate').val();
        if (form.begin === '' || form.end === '') {
            alert('操作失败，没有填写时间');
            return;
        }
        $.ajax({
            method: 'post',
            data: form,
            url: indexHost + 'index.php/api/submit_order',
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
    })
</script>