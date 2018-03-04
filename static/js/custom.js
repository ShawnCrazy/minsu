//    轮播
//    $('#sliderBanner').scrollForever();
var current = 0;//当前显示图片编号
var total = $('#sliderBanner').find('li').length;
//    图标效果切换
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

//    表单选择事件
$('#cityBooking').click(function () {
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
        if ($(this).hasClass('t-layer-city')) {
            $(this).show();
        }
    })
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
})

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
        if(count === 1){
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
    $('.day').unbind('click',day_click);
    $('.day').bind('click',day_click);
}, 1000);

//    人数选择事件
$('.t-pc-opt').children().click(function () {
    $('#count').val($(this).text());
    $('form[name=bookingSearch]').children('div').each(function () {
        $(this).hide();
    });
});
//     地点范围切换事件
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
})

//    图片懒加载
$('.lazy').each(function (index, item) {
    $(item).attr('src',$(this).data('original'));
});

//    表单提交
$('#performSearch').click(function () {
    var formdata = new FormData();
    formdata.append('startDate', $('#startDate').val());
    formdata.append('endDate', $('#endDate').val());
    formdata.append('city', $('#cityBooking').val());
    formdata.append('count', $('#count').val());
    $.ajax({
        url:'./index.php/api/get_room',
        data:{},
        success:function (data) {
            alert('success');
            console.log(data);
        }
    })
});