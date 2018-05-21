/*=============================================================
    Authour URI: www.binarycart.com
    Version: 1.1
    License: MIT
    
    http://opensource.org/licenses/MIT

    100% To use For Personal And Commercial Use.
   
    ========================================================  */

(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {
            /*====================================
            METIS MENU 
            ======================================*/
            $('#main-menu').metisMenu();

            /*====================================
              LOAD APPROPRIATE MENU BAR
           ======================================*/
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });

            /*====================================
            MORRIS BAR CHART
         ======================================*/
            new Morris.Bar({
                element: 'morris-bar-chart',
                data: [{
                    y: '2006',
                    a: 100,
                    b: 90
                }, {
                    y: '2007',
                    a: 75,
                    b: 65
                }, {
                    y: '2008',
                    a: 50,
                    b: 40
                }, {
                    y: '2009',
                    a: 75,
                    b: 65
                }, {
                    y: '2010',
                    a: 50,
                    b: 40
                }, {
                    y: '2011',
                    a: 75,
                    b: 65
                }, {
                    y: '2012',
                    a: 100,
                    b: 90
                }],
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                hideHover: 'auto',
                resize: true
            });

            /*====================================
          MORRIS DONUT CHART
       ======================================*/
            new Morris.Donut({
                element: 'morris-donut-chart',
                data: [{
                    label: "Download Sales",
                    value: 12
                }, {
                    label: "In-Store Sales",
                    value: 30
                }, {
                    label: "Mail-Order Sales",
                    value: 20
                }],
                resize: true
            });

            /*====================================
         MORRIS AREA CHART
      ======================================*/

            new Morris.Area({
                element: 'morris-area-chart',
                data: [{
                    period: '2010 Q1',
                    iphone: 2666,
                    ipad: null,
                    itouch: 2647
                }, {
                    period: '2010 Q2',
                    iphone: 2778,
                    ipad: 2294,
                    itouch: 2441
                }, {
                    period: '2010 Q3',
                    iphone: 4912,
                    ipad: 1969,
                    itouch: 2501
                }, {
                    period: '2010 Q4',
                    iphone: 3767,
                    ipad: 3597,
                    itouch: 5689
                }, {
                    period: '2011 Q1',
                    iphone: 6810,
                    ipad: 1914,
                    itouch: 2293
                }, {
                    period: '2011 Q2',
                    iphone: 5670,
                    ipad: 4293,
                    itouch: 1881
                }, {
                    period: '2011 Q3',
                    iphone: 4820,
                    ipad: 3795,
                    itouch: 1588
                }, {
                    period: '2011 Q4',
                    iphone: 15073,
                    ipad: 5967,
                    itouch: 5175
                }, {
                    period: '2012 Q1',
                    iphone: 10687,
                    ipad: 4460,
                    itouch: 2028
                }, {
                    period: '2012 Q2',
                    iphone: 8432,
                    ipad: 5713,
                    itouch: 1791
                }],
                xkey: 'period',
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['iPhone', 'iPad', 'iPod Touch'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });

            /*====================================
    MORRIS LINE CHART
 ======================================*/
            new Morris.Line({
                element: 'morris-line-chart',
                data: [{
                    y: '2006',
                    a: 100,
                    b: 90
                }, {
                    y: '2007',
                    a: 75,
                    b: 65
                }, {
                    y: '2008',
                    a: 50,
                    b: 40
                }, {
                    y: '2009',
                    a: 75,
                    b: 65
                }, {
                    y: '2010',
                    a: 50,
                    b: 40
                }, {
                    y: '2011',
                    a: 75,
                    b: 65
                }, {
                    y: '2012',
                    a: 100,
                    b: 90
                }],
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                hideHover: 'auto',
                resize: true
            });


        },

        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        // mainApp.main_fun();
        $('.nav-second-level').hide();
        //富文本编辑器初始化
        var um = UM.getEditor('myEditor');
        $('.edui-container').css('width', '100%');//编辑器适配大小
        $('#btn-save-brand').click(submitBrand);
        $('#btn-save-area').click(submitArea);
    });

}(jQuery));

//菜单逻辑处理
function choseMenu(e) {
    if (!$(e).hasClass('active-menu')) {
        var index = $('.nav-first-level');
        index.removeClass('active-menu');
        index.next().hide();
        $(e).addClass('active-menu');
        $('#page-inner h2').text(e.text);
        $(e).next().show();
    }
};

//二级菜单，异步数据处理
function chose2ndMenu(id) {
    //处理页面视图
    $('#data-tables').show();
    $('#pub-brand').hide();
    $('#pub-area').hide();
    var container = $('.table-responsive');
    var table = $('<table class="table table-striped table-bordered table-hover" id="dataTables-example"></table>');

    var words = id.split('-');
    var form = {};
    form.table = words[0];
    form.key = words[1];
    $.ajax({
        url: indexHost + 'index.php/api/get_info_table',
        method: 'post',
        data: form,
        success: function (res) {
            var data = $.parseJSON(res);
            if (data.code === 100) {
                container.empty();
                container.append(table);
                table.append(data.content);
                table.dataTable();
            }
        }
    })
}

function submitBrand() {
    var form = {};
    var isNull = false;
    $('#pub-brand .form-horizontal input').each(function (index, item) {
        var curEle = $(item);
        if (curEle.data('toggle') === 'popover' && curEle.val() === '') {
            curEle.popover('show');
            isNull = true;
        } else if (curEle.data('toggle') === 'popover') {
            curEle.popover('destroy');
        }
    });

    if (isNull) {
        console.log(123);
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

function submitArea() {
    var form = {};
    var isNull = false;
    $('#pub-area .form-horizontal input').each(function (index, item) {
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

function delItem(e) {
    var item = $(e);
    var form = {};
    var args = item.data('info').split('-');
    form.table = args[0];
    form.id = args[1];
    if (!confirm('确定要删除？')) {
        return;
    }
    $.ajax({
        method: 'post',
        url: indexHost + 'index.php/api/delete_tutu',
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