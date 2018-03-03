<div id="app">
    <div class="fluid booking rel t-navbar-fixed">
        <ul class="slider clearfix" id="sliderBanner">
            <li class="slider-item" style="display:block"><a href="javascript:;"></a></li>
        </ul>
        <ul class="slider-ctrl">
            <li><a href="javascript:;" class="slider-ctrl-item slider-ctrl-prev slider-ctrl-disable">向上</a> <a
                    href="javascript:;" class="slider-ctrl-item slider-ctrl-next slider-ctrl-disable">向下</a></li>
        </ul>
        <span class="slider-index"><b></b></span>
        <div class="booking-widget">
            <div class="fluid-content tc">
                <form class="booking-search rel" action="javascript:;" name="bookingSearch" method="post"><input
                        type="hidden" name="startDate" id="startDate"> <input type="hidden" name="endDate"
                                                                              id="endDate"> <input type="hidden"
                                                                                                   name="hc"
                                                                                                   id="hc">
                    <ul class="clearfix">
                        <li class="lst-item clearfix"><label for="cityBooking" class="icon icon-loc"></label><input
                                autocomplete="off" type="text" name="city" id="cityBooking" value=""><label
                                class="placeholder" for="cityBooking">目的地/景点/关键词</label></li>
                        <li class="lst-item lst-item-sep clearfix" id="checkInOutWrapper"><label
                                for="checkInOutBooking" class="icon icon-date"></label><input readonly="readonly"
                                                                                              type="text"
                                                                                              class="check-io"
                                                                                              name="checkInOut"
                                                                                              id="checkInOutBooking"
                                                                                              value=""></li>
                        <li class="lst-item lst-item-sep clearfix"><label for="count"
                                                                          class="icon icon-hc"></label><input
                                readonly="readonly" type="text" class="count" name="count" id="count"
                                value="不限"><label for="count" class="icon icon-dd"></label></li>
                        <li class="lst-item btn-lst-item clearfix"><a href="javascript:;" class="btn-med"
                                                                      id="performSearch">搜索</a></li>
                    </ul>
                    <div class="t-layer t-layer-city clearfix hide"></div>
                    <div id="citySugPane" class="t-layer t-layer-dest hide"></div>
                    <div class="t-layer t-layer-pc clearfix hide">
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
                </form>
            </div>
        </div>
    </div>
    <div id="special-sale"></div>
    <div id="unit-history"></div>
    <div class="t-module">
        <div class="fluid-content"><h3 class="t-mod-tit">玩转民宿公寓</h3>
            <div class="user-renting-story">
                <ul>
                    <li class="item01"><a href="https://go.tujia.com/3586/?code=2017hongpap1" target="_blank"><img
                                _src="../../assets/index/sy1.jpg"
                                data-original="https://wpp.tujia.com/static/img/sy1.c2a67b9.jpg" class="lazy">
                            <div class="info-box"><p class="tit-cont">轰趴聚会</p>
                                <p class="txt-cont">私密空间 亲朋好友尽兴玩</p></div>
                        </a></li>
                    <li class="item02"><a href="https://go.tujia.com/3582/?code=familyp1" target="_blank"><img
                                _src="../../assets/index/sy2.jpg"
                                data-original="https://wpp.tujia.com/static/img/sy2.37692a8.jpg" class="lazy">
                            <div class="info-box"><p class="tit-cont">家庭出游</p>
                                <p class="txt-cont">一房多卧 家人合住好照看</p></div>
                        </a></li>
                    <li class="item03"><a href="https://go.tujia.com/3583/?code=changzup1" target="_blank"><img
                                _src="../../assets/index/sy3.jpg"
                                data-original="https://wpp.tujia.com/static/img/sy3.50a66e6.jpg" class="lazy">
                            <div class="info-box"><p class="tit-cont">实惠长住</p>
                                <p class="txt-cont">洗衣做饭 设施齐全又省钱</p></div>
                        </a></li>
                    <li class="item04"><a href="https://go.tujia.com/3580/?code=xqtp1" target="_blank"><img
                                _src="../../assets/index/sy4.jpg"
                                data-original="https://wpp.tujia.com/static/img/sy4.3bcbca2.jpg" class="lazy">
                            <div class="info-box"><p class="tit-cont">新奇体验</p>
                                <p class="txt-cont">房型丰富 风格迥异更养眼</p></div>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="t-module season-hot">
        <div class="fluid-content"><h3 class="t-mod-tit">当季热门</h3>
            <div id="seasonHot"></div>
        </div>
    </div>
    <div class="t-module">
        <div class="fluid-content"><h3 class="t-mod-tit">会员福利</h3>
            <ul class="member-benefits">
                <li><a href="https://p.tujia.com/2015/invitefriends" target="_blank"><img class="lazy"
                                                                                          data-original="https://wpp.tujia.com/static/img/Membership-pic01.1d7c7dd.jpg"
                                                                                          _src="../../assets/index/Membership-pic01.jpg"
                                                                                          alt="邀请好友注册"></a></li>
                <li><a href="https://vip.tujia.com/UserInfo/ZMAuthorization?source=info" target="_blank"><img
                            class="lazy" data-original="https://wpp.tujia.com/static/img/Membership-pic02.ac4b945.jpg"
                            _src="../../assets/index/Membership-pic02.jpg" alt="授权芝麻信用"></a></li>
                <li><a href="https://p.tujia.com/2016/ShoppingMall" target="_blank"><img class="lazy"
                                                                                         data-original="https://wpp.tujia.com/static/img/Membership-pic03.3dd84e3.jpg"
                                                                                         _src="../../assets/index/Membership-pic03.jpg"
                                                                                         alt="积分商城"></a></li>
            </ul>
        </div>
    </div>
    <div class="t-module">
        <div class="fluid-content"><h3 class="t-mod-tit">安心住保障</h3>
            <ul class="user-guarantee">
                <li><a href="https://www.tujia.com/pwa/safe_rent" target="_blank">
                        <div class="guarantee-1"></div>
                        <p class="user-guarantee-text">先行赔付<span>1000万保障金</span></p></a></li>
                <li><a href="https://www.tujia.com/pwa/hotel_insure" target="_blank">
                        <div class="guarantee-2"></div>
                        <p class="user-guarantee-text">赠送保险<span>11万人身保险</span></p></a></li>
                <li><a href="https://www.tujia.com/pwa/safe_rent" target="_blank">
                        <div class="guarantee-3"></div>
                        <p class="user-guarantee-text">贴心客服<span>7*24小时在线</span></p></a></li>
                <li><a href="https://p.tujia.com/2017/housefidelity" target="_blank">
                        <div class="guarantee-4"></div>
                        <p class="user-guarantee-text">房屋保真<span>4项上房审核</span></p></a></li>
            </ul>
        </div>
    </div>
    <div class="t-module special-sales">
        <div class="fluid-content"><h3 class="t-mod-tit">房客体验</h3>
            <div class="user-experience" id="userExperience">
                <ul></ul>
            </div>
            <div class="t-mod-btn"><a href="https://travel.tujia.com" class="t-mod-btn-more" target="_blank">查看更多
                    &gt;</a></div>
        </div>
    </div>
    <div class="t-module landlord-story">
        <div class="fluid-content"><h4 class="t-mod-tit">房东故事</h4>
            <div class="landlordStory"></div>
            <div class="t-mod-btn"><a href="https://travel.tujia.com/story" target="_blank" class="t-mod-btn-more">查看更多
                    &gt;</a></div>
        </div>
    </div>
    <input type="hidden" id="tjpage_id" value="101001"></div>