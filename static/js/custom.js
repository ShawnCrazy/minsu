//    封装js的cookie方法
var cookie = {
    set: function (key, val, time) {//设置cookie方法
        var date = new Date(); //获取当前时间
        var expiresDays = time;  //将date设置为n天以后的时间
        date.setTime(date.getTime() + expiresDays * 24 * 3600 * 1000); //格式化为cookie识别的时间
        document.cookie = key + "=" + val + ";expires=" + date.toUTCString() + ";path=/";  //设置cookie
    },
    get: function (key) {//获取cookie方法
        /*获取cookie参数*/
        var getCookie = document.cookie.replace(/[ ]/g, "");  //获取cookie，并且将获得的cookie格式化，去掉空格字符
        var arrCookie = getCookie.split(";")  //将获得的cookie以"分号"为标识 将cookie保存到arrCookie的数组中
        var tips;  //声明变量tips
        for (var i = 0; i < arrCookie.length; i++) {   //使用for循环查找cookie中的tips变量
            var arr = arrCookie[i].split("=");   //将单条cookie用"等号"为标识，将单条cookie保存为arr数组
            if (key == arr[0]) {  //匹配变量名称，其中arr[0]是指的cookie名称，如果该条变量为tips则执行判断语句中的赋值操作
                tips = arr[1];   //将cookie的值赋给变量tips
                break;   //终止for循环遍历
            }
        }
        return tips;
    },
    delete: function (key) { //删除cookie方法
        var date = new Date(); //获取当前时间
        date.setTime(date.getTime() - 10000); //将date设置为过去的时间
        document.cookie = key + "=v; expires =" + date.toGMTString() + ";path=/";//设置cookie
    }
};

function logout() {
    cookie.delete('uin');
    cookie.set('key');
    location.reload();
}

//    轮播
//    $('#sliderBanner').scrollForever();
var current = 0;//当前显示图片编号
var total = $('#sliderBanner').find('li').length;
//    背景图片效果切换
$('.slider-ctrl-prev').hover(function () {
    $('.slider-ctrl-prev').css("background-position", "-190px -75px");
}, function () {
    $('.slider-ctrl-prev').css("background-position", "-190px 0");
}).click(function () {
    current = (current + 1) % total;
    $('#sliderBanner').find('li').each(function () {
        $(this).hide();
    });
    $('#sliderBanner').find('li').eq(current).show()
});
$('.slider-ctrl-next').hover(function () {
    $('.slider-ctrl-next').css("background-position", "0 -190px");
}, function () {
    $('.slider-ctrl-next').css("background-position", "-75px -190px");
}).click(function () {
    current = (current - 1) % total;
    $('#sliderBanner').find('li').each(function () {
        $(this).hide();
    });
    $('#sliderBanner').find('li').eq(current).show()
});

//    搜索表单选择事件
$('#cityBooking').click(function () {
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
        if ($(this).hasClass('t-layer-city')) {
            $(this).show();
            $('#second-city').hide();
            $(this).removeClass('hide');//多个css兼容
        }
    })
});
$('#cityBooking').blur(function () {
    $('#areaBooking').val('');
});
$('#areaBooking').click(function () {
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
    });
    $('#second-city-item').children().each(function () {
        if ($(this).data('belong') === $('#cityBooking').data('index')) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
    $('#second-city').show();
});
$('#checkInOutBooking').click(function () {
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
        if ($(this).hasClass('t-layer-calendar')) {
            $(this).show();
        }
    })
});
$('#count').click(function () {
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
        if ($(this).hasClass('t-layer-pc')) {
            $(this).show();
            $(this).removeClass('hide');//多个css兼容
        }
    })
});
//    添加日历控件
var calwidget = new CalWidget($('#citySugPane'));
calwidget.install();
//    console.log(CalWidget._$pane)
//    选择地点事件
$('.t-layer-dest-item-sug').click(function () {
    $('#cityBooking').val($(this).data('name'));
    $('#cityBooking').next().hide();
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
    });
});
$('.t-city-item').click(function () {
    // $('#cityBooking').val($(this).data('py'));城市名的拼音
    var index = $(this).data("cid");
    $('#cityBooking').data('index', index);
    var continent = '';
    if ($(this).data('sug-type') === 2) {
        $('#extCityTab').children().each(function (index, item) {
            if ($(item).hasClass('t-hor-on') && index !== 0) {
                continent = $(item).text();
            }
            // console.log(item);
        });
    }
    $('#cityBooking').val(continent + $(this).text());
    $('#cityBooking').next().hide();
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
    });
});
$('.t-area-item').click(function () {
    var continent = '';
    $('#areaBooking').val(continent + $(this).text());
    $('#areaBooking').next().hide();
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
    });
});

//    预定时间事件
var count = 0;//表示用户选择次数为0或偶数次
var during = 0;//预订时间
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
    during = parseInt((eDate.getTime() - sDate.getTime()) / 1000 / 60 / 60 / 24);
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
//这里要用动态绑定，live方法在此版本jQuery中移除，以下方法与控件有冲突
// $('body').on('click', '.day', day_click);
// $('form[name=bookingSearch]').delegate('click', '.day', day_click);
// $('form[name=bookingSearch]').on('.day', 'click', function () {
//     alert(1);
// });

//    人数选择事件
$('.t-pc-opt').children().click(function () {
    $('#count').val($(this).text());
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
    });
});
//    地点范围切换事件
$('.t-tab-ver-itm').click(function () {
    $('#outerTab').children().removeClass('t-tab-ver-itm-on');
    $('#outerTabContent').children().hide();
    $(this).addClass('t-tab-ver-itm-on');

    switch ($(this).attr('_twi')) {
        case '0':
            $('#recAndSugBox').show();
            break;
        case '1':
            $('#intBox').show();
            break;
        case '2':
            $('#extBox').show();
            break;
        default:
            alert('错误');
    }
});
$('#intCityTab').children().click(function () {
    $('#intCityTab').children().removeClass('t-hor-on');
    $(this).addClass('t-hor-on');
    var content = $('#intCityContent').children();
    content.hide();
    content.eq($(this).attr('_twi')).show();
});
$('#extCityTab').children().click(function () {
    $('#extCityTab').children().removeClass('t-hor-on');
    $(this).addClass('t-hor-on');
    var content = $('#extCityContent').children();
    content.hide();
    content.eq($(this).attr('_twi')).show();
});

//    图片懒加载
$('.lazy').each(function (index, item) {
    $(item).attr('src', $(this).data('original'));
});

//    判断是否登录，导航栏相应改变
$('.g-login').removeClass('z-hidden');//测试用
$('.g-login').children().each(function (index, item) {
    if (cookie.get('uin') && cookie.get('key')) {//这里弱类型判断不易错
        if ($(item).hasClass('m-login')) {
            $(item).show();
        } else if ($(item).hasClass('m-unlogin')) {
            $(item).hide();
        } else {
            $(item).hide();
        }
        if (cookie.get('pri') === '1' && $(item).hasClass('m-publish')) {
            $(item).show();
        } else if (cookie.get('pri') === '2' && $(item).hasClass('m-apply')) {
            $(item).show();
        }
        return;
    }
    if ($(item).hasClass('m-unlogin')) {
        $(item).show();
    } else if ($(item).hasClass('m-login')) {
        $(item).hide();
    } else {
        $(item).hide();
    }
});
//    顶部导航栏点击事件在此处处理
$('.m-unlogin').click(function () {
    if ($(this).data('val') === 'login') {
        $('#tabSmsLoginContent').hide();
        $('#tabPwdLoginContent').show();
    } else {
        $('#tabSmsLoginContent').show();
        $('#tabPwdLoginContent').hide();
    }
    $('#userPop').modal('show');
    typeof(um) !== 'undefined' ? um.setHide() : {};
});
/*******************登录注册开始******************/
//    定义正则表达式
var reg_mail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
var reg_pwd = /^[a-zA-Z0-9_]{8,20}$/;
var reg_mobile = /^1[3|4|5|8][0-9]\d{4,8}$/;
//    表单调整登录注册按钮显示兼容
$('#loginSubmit').parent().parent().css('display', 'block');
$('#sloginSubmit').parent().parent().css('display', 'block');
//    表单登录注册切换事件
$('#tabSmsLogin').click(function () {
    $('#tabSmsLoginContent').show();
    $('#tabPwdLoginContent').hide();
});
$('#tabPwdLogin').click(function () {
    $('#tabSmsLoginContent').hide();
    $('#tabPwdLoginContent').show();
});
//    登录表单提交
$('#loginSubmit').click(function () {
    if (!reg_mail.test($('#account').val())) {
        $('#account').popover('show');
    } else if (!reg_pwd.test($('#password').val())) {
        $('#password').popover('show');
    } else {
        $('#account').popover('destroy');
        $('#password').popover('destroy');
        var data = {
            account: $('#account').val(),
            password: $('#password').val()
        };
        $(this).hide();
        $('#loginSubmitIng').show();
        $.ajax({
            method: 'post',
            url: indexHost + 'index.php/api/check_login',
            data: data,
            success: function (res) {
                res = $.parseJSON(res);
                if (res.code === 100) {
                    data = res.content[0];
                    cookie.set('uin', data.account, 1);
                    cookie.set('key', data.password, 1);
                    cookie.set('pri', data.limited, 1);
                    $('#userPop').modal('hide');
                    typeof(um) !== 'undefined' ? um.setShow() : {};
                    $('.g-login').children().each(function (index, item) {
                        if ($(item).hasClass('m-login')) {
                            $(item).show();
                        } else if ($(item).hasClass('m-unlogin')) {
                            $(item).hide();
                        }
                        if (cookie.get('pri') === '1' && $(item).hasClass('m-publish')) {
                            $(item).show();
                        } else if (cookie.get('pri') === '2' && $(item).hasClass('m-apply')) {
                            $(item).show();
                        }
                    });
                    //console.log(res.content[0]);
                } else {
                    alert('错误，' + res.content);
                    $('#loginSubmit').show();
                    $('#loginSubmitIng').hide();
                }
            }
        });
    }
});
//    注册表单提交
$('#sloginSubmit').click(function () {
    if ($('#nickname').val() === '') {
        $('#nickname').popover('show');
    } else if (!reg_mail.test($('#smsaccount').val())) {
        $('#smsaccount').popover('show');
    } else if (!reg_pwd.test($('#pwd').val())) {
        $('#pwd').popover('show');
    } else if ($('#re-pwd').val() !== $('#pwd').val()) {
        $('#re-pwd').popover('show');
    } else if ($('#smobile').val() !== '' && !reg_mobile.test($('#smobile').val())) {
        $('#smobile').popover('show');
    } else {
        $('#nickname').popover('destroy');
        $('#smsaccount').popover('destroy');
        $('#pwd').popover('destroy');
        $('#re-pwd').popover('destroy');
        $('#smobile').popover('destroy');
        var data = {
            name: $('#nickname').val(),
            account: $('#smsaccount').val(),
            password: $('#pwd').val(),
            tel: $('#smobile').val()
        };
        $(this).hide();
        $('#sloginSubmitIng').show();
        // 验证账号是否可用
        $.ajax({
            method: 'post',
            url: indexHost + 'index.php/api/check_register',
            data: data,
            success: function (res) {
                res = $.parseJSON(res);
                if (res.code === 100) {
                    $('#userPop').modal('hide');
                    typeof(um) !== 'undefined' ? um.setShow() : {};
                    $('.g-login').children().each(function (index, item) {
                        if ($(item).hasClass('m-login')) {
                            $(item).show();
                        } else if ($(item).hasClass('m-unlogin')) {
                            $(item).hide();
                        }
                    });
                    cookie.set('uin', data.account, 1);
                    cookie.set('key', data.password, 1);
                } else {
                    alert('错误，' + res.content);
                    $('#sloginSubmit').show();
                    $('#sloginSubmitIng').hide();
                }
            }
        });
    }
});
/*****************登录注册结束*******************/
//    搜索表单提交事件
$('#performSearch').click(function () {
    // var formdata = new FormData();
    // formdata.append('startDate', $('#startDate').val());
    // formdata.append('endDate', $('#endDate').val());
    // formdata.append('city', $('#cityBooking').val());
    // formdata.append('count', $('#count').val());
    // $.ajax({
    //     url: './api/get_room',
    //     data: {},
    //     success: function (data) {
    //         alert('success');
    //         console.log(data);
    //     }
    // });
    $('form[name=bookingSearch]').submit();
});