// 日历控件

// 初始项目、参数
var FestMap = {};
var calendar = {
    lunarInfo: [0x04bd8, 0x04ae0, 0x0a570, 0x054d5, 0x0d260, 0x0d950, 0x16554, 0x056a0, 0x09ad0, 0x055d2, 0x04ae0, 0x0a5b6, 0x0a4d0, 0x0d250, 0x1d255, 0x0b540, 0x0d6a0, 0x0ada2, 0x095b0, 0x14977, 0x04970, 0x0a4b0, 0x0b4b5, 0x06a50, 0x06d40, 0x1ab54, 0x02b60, 0x09570, 0x052f2, 0x04970, 0x06566, 0x0d4a0, 0x0ea50, 0x06e95, 0x05ad0, 0x02b60, 0x186e3, 0x092e0, 0x1c8d7, 0x0c950, 0x0d4a0, 0x1d8a6, 0x0b550, 0x056a0, 0x1a5b4, 0x025d0, 0x092d0, 0x0d2b2, 0x0a950, 0x0b557, 0x06ca0, 0x0b550, 0x15355, 0x04da0, 0x0a5b0, 0x14573, 0x052b0, 0x0a9a8, 0x0e950, 0x06aa0, 0x0aea6, 0x0ab50, 0x04b60, 0x0aae4, 0x0a570, 0x05260, 0x0f263, 0x0d950, 0x05b57, 0x056a0, 0x096d0, 0x04dd5, 0x04ad0, 0x0a4d0, 0x0d4d4, 0x0d250, 0x0d558, 0x0b540, 0x0b6a0, 0x195a6, 0x095b0, 0x049b0, 0x0a974, 0x0a4b0, 0x0b27a, 0x06a50, 0x06d40, 0x0af46, 0x0ab60, 0x09570, 0x04af5, 0x04970, 0x064b0, 0x074a3, 0x0ea50, 0x06b58, 0x055c0, 0x0ab60, 0x096d5, 0x092e0, 0x0c960, 0x0d954, 0x0d4a0, 0x0da50, 0x07552, 0x056a0, 0x0abb7, 0x025d0, 0x092d0, 0x0cab5, 0x0a950, 0x0b4a0, 0x0baa4, 0x0ad50, 0x055d9, 0x04ba0, 0x0a5b0, 0x15176, 0x052b0, 0x0a930, 0x07954, 0x06aa0, 0x0ad50, 0x05b52, 0x04b60, 0x0a6e6, 0x0a4e0, 0x0d260, 0x0ea65, 0x0d530, 0x05aa0, 0x076a3, 0x096d0, 0x04afb, 0x04ad0, 0x0a4d0, 0x1d0b6, 0x0d250, 0x0d520, 0x0dd45, 0x0b5a0, 0x056d0, 0x055b2, 0x049b0, 0x0a577, 0x0a4b0, 0x0aa50, 0x1b255, 0x06d20, 0x0ada0, 0x14b63, 0x09370, 0x049f8, 0x04970, 0x064b0, 0x168a6, 0x0ea50, 0x06b20, 0x1a6c4, 0x0aae0, 0x0a2e0, 0x0d2e3, 0x0c960, 0x0d557, 0x0d4a0, 0x0da50, 0x05d55, 0x056a0, 0x0a6d0, 0x055d4, 0x052d0, 0x0a9b8, 0x0a950, 0x0b4a0, 0x0b6a6, 0x0ad50, 0x055a0, 0x0aba4, 0x0a5b0, 0x052b0, 0x0b273, 0x06930, 0x07337, 0x06aa0, 0x0ad50, 0x14b55, 0x04b60, 0x0a570, 0x054e4, 0x0d160, 0x0e968, 0x0d520, 0x0daa0, 0x16aa6, 0x056d0, 0x04ae0, 0x0a9d4, 0x0a2d0, 0x0d150, 0x0f252, 0x0d520],
    solarMonth: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],

    nStr1: ["\u65E5", "\u4E00", "\u4E8C", "\u4E09", "\u56DB", "\u4E94", "\u516D", "\u4E03", "\u516B", "\u4E5D", "\u5341"],

    nStr2: ["\u521D", "\u5341", "\u5EFF", "\u5345"],

    nStr3: ["\u6B63", "\u4E8C", "\u4E09", "\u56DB", "\u4E94", "\u516D", "\u4E03", "\u516B", "\u4E5D", "\u5341", "\u51AC", "\u814A"],

    lYearDays: function lYearDays(y) {
        var i,
            sum = 348;
        for (i = 0x8000; i > 0x8; i >>= 1) {
            sum += calendar.lunarInfo[y - 1900] & i ? 1 : 0;
        }
        return sum + calendar.leapDays(y);
    },

    leapMonth: function leapMonth(y) {
        return calendar.lunarInfo[y - 1900] & 0xf;
    },

    leapDays: function leapDays(y) {
        if (calendar.leapMonth(y)) {
            return calendar.lunarInfo[y - 1900] & 0x10000 ? 30 : 29;
        }
        return 0;
    },

    monthDays: function monthDays(y, m) {
        if (m > 12 || m < 1) {
            return -1;
        }
        return calendar.lunarInfo[y - 1900] & 0x10000 >> m ? 30 : 29;
    },

    solarDays: function solarDays(y, m) {
        if (m > 12 || m < 1) {
            return -1;
        }
        var ms = m - 1;
        if (ms == 1) {
            return y % 4 == 0 && y % 100 != 0 || y % 400 == 0 ? 29 : 28;
        } else {
            return calendar.solarMonth[ms];
        }
    },

    toChinaMonth: function toChinaMonth(m) {
        if (m > 12 || m < 1) {
            return -1;
        }
        var s = calendar.nStr3[m - 1];
        s += "\u6708";
        return s;
    },

    toChinaDay: function toChinaDay(d) {
        var s;
        switch (d) {
            case 10:
                s = "\u521D\u5341";
                break;
            case 20:
                s = "\u4E8C\u5341";
                break;
                break;
            case 30:
                s = "\u4E09\u5341";
                break;
                break;
            default:
                s = calendar.nStr2[Math.floor(d / 10)];
                s += calendar.nStr1[d % 10];
        }
        return s;
    },

    solar2lunar: function solar2lunar(y, m, d) {
        if (y < 1900 || y > 2100) {
            return -1;
        }
        if (y == 1900 && m == 1 && d < 31) {
            return -1;
        }
        if (!y) {
            var objDate = new Date();
        } else {
            var objDate = new Date(y, parseInt(m) - 1, d);
        }
        var i,
            leap = 0,
            temp = 0;

        var y = objDate.getFullYear(),
            m = objDate.getMonth() + 1,
            d = objDate.getDate();
        var offset = (Date.UTC(objDate.getFullYear(), objDate.getMonth(), objDate.getDate()) - Date.UTC(1900, 0, 31)) / 86400000;
        for (i = 1900; i < 2101 && offset > 0; i++) {
            temp = calendar.lYearDays(i);
            offset -= temp;
        }
        if (offset < 0) {
            offset += temp;
            i--;
        }

        var year = i;

        var leap = calendar.leapMonth(i);
        var isLeap = false;

        for (i = 1; i < 13 && offset > 0; i++) {
            if (leap > 0 && i == leap + 1 && isLeap == false) {
                --i;
                isLeap = true;
                temp = calendar.leapDays(year);
            } else {
                temp = calendar.monthDays(year, i);
            }

            if (isLeap == true && i == leap + 1) {
                isLeap = false;
            }
            offset -= temp;
        }

        if (offset == 0 && leap > 0 && i == leap + 1) if (isLeap) {
            isLeap = false;
        } else {
            isLeap = true;
            --i;
        }
        if (offset < 0) {
            offset += temp;
            --i;
        }

        var month = i;

        var day = offset + 1;

        return {
            'IMonthCn': (isLeap ? "\u95F0" : '') + calendar.toChinaMonth(month),
            'IDayCn': calendar.toChinaDay(day),
            'IMonth': month,
            'IDay': day
        };
    }

};
var getFest = function getFest(date, defVal) {
    var gregMap = FestMap[CalUtil.GREG];
    var dateAsKey = CalUtil.padZero(date.getMonth(), date.getDate());
    var fest = gregMap[dateAsKey];
    if (fest) {
        return fest;
    }
    var tri = calendar.solar2lunar(date.getFullYear(), date.getMonth() + 1, date.getDate());
    var triKey = CalUtil.padZero(tri.IMonth, tri.IDay);
    var triMap = FestMap[CalUtil.TRID];
    var triFest = triMap[triKey];
    if (triFest) {
        return triFest;
    }
    var foreMap = FestMap[CalUtil.FORE];
    var foreFest = foreMap[dateAsKey];
    if (foreFest) {
        return foreFest;
    }
    return typeof defVal != 'undefined' ? defVal : date.getDate();
};

//logger参数
var flag = typeof localStorage != 'undefined' ? localStorage.getItem('DEBUG') : null;
var isDebug = flag === 'true' && typeof console != 'undefined';
var logger = {
    log: function log() {
        if (!isDebug) return;

        var args = Array.prototype.slice.call(arguments, 0);
        if (typeof args[0] === 'string') {
            var tag = args.shift();
            args.unshift('%c[LOG MESSAGE] ' + tag, 'background:#666; color: white; text-transform: uppercase;');
        } else {
            args.unshift('%c[LOG MESSAGE]', 'background:#666; color: white; text-transform: uppercase;');
        }
        console.log.apply(console, args);
    },
    debug: function debug() {
        if (!isDebug) return;

        var args = Array.prototype.slice.call(arguments, 0);
        if (typeof args[0] === 'string') {
            var tag = args.shift();
            args.unshift('%c[DEBUG MESSAGE] ' + tag, 'background:green; color: white; text-transform: uppercase;');
        } else {
            args.unshift('%c[DEBUG MESSAGE]', 'background:green; color: white; text-transform: uppercase;');
        }
        console.log.apply(console, args);
    },
    error: function error() {
        if (!isDebug) return;

        var args = Array.prototype.slice.call(arguments, 0);
        if (typeof args[0] === 'string') {
            var tag = args.shift();
            args.unshift('%c[ERROR MESSAGE] ' + tag, 'background:red; color: white; text-transform: uppercase;');
        } else {
            args.unshift('%c[ERROR MESSAGE]', 'background:red; color: white; text-transform: uppercase;');
        }
        console.log.apply(console, args);
    }
}

//CalUtil参数
var CalUtil = {
    toYYYYMM: function toYYYYMM(date) {
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        return year + '\u5E74' + month + '\u6708';
    },
    makeDisableDateEnd: function makeDisableDateEnd() {
        var date = CalUtil.getNow();
        CalUtil.clearMSM(date);
        date.setMonth(date.getMonth() + 6);
        date.setDate(date.getDate() - 2);
        return date;
    },
    toConYYMMDD: function toConYYMMDD(ts) {
        var date = new Date(ts);
        var m = date.getMonth() + 1;
        var d = date.getDate();
        return date.getFullYear() + '-' + (m < 10 ? '0' + m : m) + '-' + (d < 10 ? '0' + d : d);
    },
    padZero: function padZero(month, day) {
        return (month < 10 ? '0' + month : month) + '' + (day < 10 ? '0' + day : day);
    },
    makeDefaultRangeExt: function makeDefaultRangeExt() {
        var cache = CalUtil.getNow();
        CalUtil.clearMSM(cache);

        cache.setDate(cache.getDate() + 3);
        var s = cache.getTime();

        cache.setDate(cache.getDate() + 1);
        var e = cache.getTime();

        return [s, e];
    },

    makeDefaultRange: function makeDefaultRange() {
        var cache = CalUtil.getNow();
        CalUtil.clearMSM(cache);
        var s = cache.getTime();

        cache.setDate(cache.getDate() + 1);
        var e = cache.getTime();

        return [s, e];
    },
    formatRange: function formatRange(begin, end) {
        var cache = CalUtil.getNow();
        cache.setTime(begin);
        var s = this.formatDate(cache);

        cache.setTime(end);
        var e = this.formatDate(cache);

        return s + '\xA0\u81F3 ' + e;
    },
    formatDate: function formatDate(d) {
        return d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + d.getDate();
    },
    clearMSM: function clearMSM(date) {
        date.setHours(0);
        date.setMinutes(0);
        date.setSeconds(0);
        date.setMilliseconds(0);
    },
    copyFrom: function copyFrom(from, to) {
        to.setTime(from.getTime());
    },
    getNow: function getNow() {
        return new Date();
    },
    compareDate: function compareDate(granulity, first, second) {
        switch (granulity) {
            case CalUtil.YEAR:
                return first.getFullYear() - second.getFullYear();
            case CalUtil.MONTH:
                if (first.getFullYear() != second.getFullYear()) {
                    return first.getFullYear() - second.getFullYear();
                } else {
                    return first.getMonth() - second.getMonth();
                }
            case CalUtil.DATE:
                return first.getTime() - second.getTime();
            default:
                return 0;
        }
    },
    sameDay: function sameDay(first, second) {
        return first.getFullYear() == second.getFullYear() && first.getMonth() == second.getMonth() && first.getDate() == second.getDate();
    }
};
CalUtil.YEAR = 1;
CalUtil.MONTH = 2;
CalUtil.DATE = 3;

CalUtil.GREG = 1;
CalUtil.TRID = 2;
CalUtil.FORE = 3;

//参数初始化
FestMap[CalUtil.GREG] = {
    '0001': '元旦',
    '0401': '五一',
    '0901': '国庆'
};
FestMap[CalUtil.TRID] = {
    '0505': '端午',
    '0308': '清明',
    '0815': '中秋',
    '0101': '春节',
    '0102': '初二',
    '0103': '初三'
};
FestMap[CalUtil.FORE] = {
    '1124': '圣诞'
};

//CalView参数
var CalView = function CalView(date, opts) {
    this._date = date;
    this._opts = opts || {};
};
CalView.rngCache = null;
CalView.prototype._rngCls = function (curday, selRng) {
    var cache = CalView.rngCache;
    if (!cache) {
        cache = CalView.rngCache = CalUtil.getNow();
    }
    cache.setTime(curday.getTime());
    CalUtil.clearMSM(cache);
    if (selRng[0] == cache.getTime() || selRng[1] == cache.getTime()) {
        return 'range-edge';
    } else if (cache.getTime() < selRng[1] && cache.getTime() > selRng[0]) {
        return 'range-span';
    }
};
CalView.prototype.toHtml = function () {
    var html = [];
    var yyyymm = CalUtil.toYYYYMM(this._date);
    var today = CalUtil.getNow();

    var ctrlClass = '';
    if (this._opts.nextCtrl === true) {
        ctrlClass = 't-cal-ctrl t-cal-ctrl-next';
    } else if (this._opts.prevCtrl === true) {
        var comparation = CalUtil.compareDate(CalUtil.MONTH, today, this._date);
        if (comparation < 0) {
            ctrlClass = "t-cal-ctrl t-cal-ctrl-prev";
        } else {
            ctrlClass = "t-cal-ctrl t-cal-ctrl-prev hide";
        }
    } else {
        ctrlClass = "t-cal-ctrl hide";
    }

    var singleDayFn = this._opts.onSingleDay;
    var hasSingleDayFn = typeof singleDayFn == 'function';

    html.push('\n      <div class="t-calendar t-bx">\n        <div class="t-bx-head"><a href="javascript:;" class="' + ctrlClass + '"></a>' + yyyymm + '</div>\n        <div class="t-bx-body">\n          <table>\n            <thead>\n              <tr>\n                <th class="weekend">\u65E5</th>\n                <th>\u4E00</th>\n                <th>\u4E8C</th>\n                <th>\u4E09</th>\n                <th>\u56DB</th>\n                <th>\u4E94</th>\n                <th class="weekend">\u516D</th>\n              </tr>\n            </thead>\n            <tbody>\n              <tr>\n  ');

    var shadowDate = new Date(this._date.getTime());
    shadowDate.setDate(1);
    var firstDay = shadowDate.getDate();
    var wd = shadowDate.getDay();

    var selRng = this._opts.selectionRange;
    var hasSelRng = selRng.length == 2;

    CalUtil.copyFrom(this._date, shadowDate);

    shadowDate.setDate(1);
    shadowDate.setMonth(shadowDate.getMonth() + 1);
    shadowDate.setDate(1);
    shadowDate.setDate(shadowDate.getDate() - 1);
    var lastDay = shadowDate.getDate();
    var lastWd = shadowDate.getDay();


    for (var i = 0; i < wd; i++) {
        html.push('\n      <td class="ep"></td>\n    ');
    }

    CalUtil.copyFrom(this._date, shadowDate);

    var disableBeforeDate = typeof this._opts.disableDayBefore != 'undefined' && this._opts.disableDayBefore instanceof Date;
    var dayBefore = null;
    var millDayBefore = 0;
    if (disableBeforeDate) {
        dayBefore = CalUtil.getNow();
        CalUtil.copyFrom(this._opts.disableDayBefore, dayBefore);

        CalUtil.clearMSM(dayBefore);
        millDayBefore = dayBefore.getTime();
    }

    var disableAfterDate = typeof this._opts.disableDayAfter != 'undefined' && this._opts.disableDayAfter instanceof Date;
    var dayAfter = null;
    var millDayAfter = 0;
    if (disableAfterDate) {
        dayAfter = CalUtil.getNow();
        CalUtil.copyFrom(this._opts.disableDayAfter, dayAfter);
        CalUtil.clearMSM(dayAfter);
        millDayAfter = dayAfter.getTime();
    }

    for (var i = firstDay; i <= lastDay; i++) {
        shadowDate.setDate(i);
        var curday = shadowDate.getDay();
        var curmilli = shadowDate.getTime();
        if (curday % 7 == 0) {
            html.push('\n              </tr>\n              <tr>\n      ');
        }
        var weekend = curday % 7 == 0 || curday % 7 == 6;

        var cellClass = 'day';
        if (disableBeforeDate && shadowDate.getTime() < millDayBefore) {
            cellClass = 'disable';
        } else if (disableAfterDate && shadowDate.getTime() > millDayAfter) {
            cellClass = 'disable';
        }

        if (hasSelRng) {
            var rngCls = this._rngCls(shadowDate, selRng);
            if (rngCls) {
                cellClass += ' ' + rngCls;
            }
        }

        if (hasSingleDayFn) {
            var singleDayCls = singleDayFn.call(this, i, curmilli, shadowDate);
            if (typeof singleDayCls == 'string') {
                cellClass += ' ' + singleDayCls;
            }
        }

        if (CalUtil.sameDay(today, shadowDate)) {
            html.push('\n        <td class="' + cellClass + '" data-ts="' + curmilli + '" data-date-index="' + i + '">\u4ECA\u5929</td>\n      ');
        } else {
            var cur = getFest(shadowDate, i);
            html.push('\n        <td class="' + cellClass + '" data-ts="' + curmilli + '" data-date-index="' + i + '">' + cur + '</td>\n      ');
        }
    }

    for (var j = lastWd + 1; j < 7; j++) {
        html.push('\n        <td class="ep"></td>\n      ');
    }

    html.push('\n            </tr>\n          </tbody>\n        </table>\n      </div>\n    </div>\n  ');
    return html.join('');
};

//日历控件类构造
//    var logger = __webpack_require__(49)['default'];
//    var CalUtil = __webpack_require__(36).CalUtil;
//    var CalView = __webpack_require__(36).CalView;

var CalWidget = function CalWidget(opts) {
    this._opts = opts;
    this._baseMonth = null;
    this._$pane = null;
    this._selectPrepare = false;
    this._renderMonth = null;
    this._selectionRange = [];
};
CalWidget.prototype = {
    setSelectionRange: function setSelectionRange(dateRange) {
        var r = dateRange;
        if (!$.isArray(r)) {
            return;
        }
        if (r[0] instanceof Date && r[1] instanceof Date) {
            var begin = CalUtil.getNow();
            CalUtil.copyFrom(r[0], begin);
            CalUtil.clearMSM(begin);

            var end = CalUtil.getNow();
            CalUtil.copyFrom(r[1], end);
            CalUtil.clearMSM(end);

            this._selectionRange[0] = Math.min(begin.getTime(), end.getTime());
            this._selectionRange[1] = Math.max(begin.getTime(), end.getTime());
        }
    },
    show: function show() {
        if (this._$pane) {
            this._$pane.show();
        }
        if (this._selectPrepare) {
            this._callPrepare();
        }
    },
    _callPrepare: function _callPrepare() {
        var fn = this._opts.onRangeSelectionPrepare;
        logger.log('call prepare selection');
        if ($.isFunction(fn)) {
            fn.call(fn);
        }
    },
    hide: function hide() {
        if (this._$pane) {
            this._$pane.hide();
        }
        if (this._selectPrepare) {
            var fn = this._opts.onRangeSelectionCancel;
            logger.log('call cancel selection');
            if ($.isFunction(fn)) {
                fn.call(fn);
            }
        }
    },
    setBaseDay: function setBaseDay(baseDay) {
        if (baseDay instanceof Date) {
            this._baseMonth = baseDay;
        }
    },
    clearSelectionRange: function clearSelectionRange() {
        this._selectionRange.length = 0;

        this._step(0);
    },
    _install: function _install() {
        this._baseMonth = this._opts.month;

        var disableDayAfter = this._opts.disableDayAfter;

        if (this._opts.selectionDateRange) {
            this.setSelectionRange(this._opts.selectionDateRange);
        }

        if (!this._baseMonth) {
            this._baseMonth = CalUtil.getNow();
        }

        var prev = CalUtil.getNow();
        CalUtil.copyFrom(this._baseMonth, prev);

        var cal = new CalView(prev, {
            prevCtrl: true,
            disableDayBefore: this._baseMonth,
            disableDayAfter: disableDayAfter,
            selectionRange: this._selectionRange,
            onSingleDay: this._opts.onSingleDay
        });

        var next = CalUtil.getNow();
        CalUtil.copyFrom(this._baseMonth, next);

        next.setDate(1);
        next.setMonth(prev.getMonth() + 1);
        var calNext = new CalView(next, {
            nextCtrl: true,
            disableDayBefore: this._baseMonth,
            disableDayAfter: disableDayAfter,
            selectionRange: this._selectionRange,
            onSingleDay: this._opts.onSingleDay
        });
        this._renderMonth = prev;
        var $pane = this._asPane(cal, calNext);
//            console.log($pane);

        this._$pane = $pane;
        if (this._opts.parent()) {
            $pane.appendTo(this._opts.parent());
        } else {
            $pane.appendTo('body');
        }
        this._align();
        this._ctrlOn();
        this._cellOn();
        this._ignoreClick();
    },
    _asPane: function _asPane(cal, calNext) {
        var $pane = $('\n        <div class="t-layer t-layer-calendar clearfix">\n          ' + cal.toHtml() + '\n          ' + calNext.toHtml() + '\n        </div>\n    ');
        return $pane;
    },
    _ignoreClick: function _ignoreClick() {
        this._$pane.click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        });
    },
    _cellOn: function _cellOn() {
        var _this = this;

        this._$pane.delegate('td', 'click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            var $target = $(e.target);
            if ($target.hasClass('disable') || $target.hasClass('ep')) {
                return false;
            }
            var day = new Date(parseInt($target.data('ts')));
            CalUtil.clearMSM(day);
            _this._rangeSelection(day, $target.data('date-index'));
            return false;
        });
    },
    _rangeSelection: function _rangeSelection(day, dayOfMonth) {
        var range = this._selectionRange;
        var cur = day.getTime();
        var cfm = false;
        if (range.length == 0) {
            range[0] = range[1] = cur;
        } else if (range[0] == range[1]) {
            if (cur < range[0]) {
                range[0] = range[1] = cur;
            } else if (cur > range[0]) {
                range[1] = cur;
                cfm = true;
            }
        } else {
            range[0] = range[1] = cur;
        }

        this._step(0);
        if (cfm) {
            this._rangeConfirm(range);
        } else {
            this._rangeConfirmHint();
        }
    },
    _rangeConfirmHint: function _rangeConfirmHint() {
        this._selectPrepare = true;
        this._callPrepare();
    },
    _rangeConfirm: function _rangeConfirm(range) {
        var fn = this._opts.onRangeSelection;
        this._selectPrepare = false;
        if ($.isFunction(fn)) {
            var behave = fn.apply(fn, range);
            if (behave !== false) {
                this.hide();
            }
        }
    },
    _ctrlOn: function _ctrlOn() {
        var _this2 = this;

        this._$pane.delegate('.t-cal-ctrl', 'click', function (e) {
            var nextCtrl = $(e.target).hasClass('t-cal-ctrl-next');
            if (nextCtrl) {
                _this2._step(2);
            } else {
                _this2._step(-2);
            }
            e.preventDefault();
            e.stopPropagation();
            return false;
        });
    },
    _step: function _step(offset) {
        var disableDayAfter = this._opts.disableDayAfter;

        var renderDate = CalUtil.getNow();
        CalUtil.copyFrom(this._renderMonth, renderDate);

        renderDate.setDate(1);
        renderDate.setMonth(renderDate.getMonth() + offset);

        var prev = renderDate;
        var cal = new CalView(prev, {
            prevCtrl: true,
            disableDayBefore: this._baseMonth,
            disableDayAfter: disableDayAfter,
            selectionRange: this._selectionRange,
            onSingleDay: this._opts.onSingleDay
        });

        var next = CalUtil.getNow();
        CalUtil.copyFrom(prev, next);

        next.setDate(1);
        next.setMonth(prev.getMonth() + 1);
        var calNext = new CalView(next, {
            nextCtrl: true,
            disableDayBefore: this._baseMonth,
            disableDayAfter: disableDayAfter,
            selectionRange: this._selectionRange,
            onSingleDay: this._opts.onSingleDay
        });

        var $pane = this._$pane;
        $pane.html(cal.toHtml() + calNext.toHtml());

        this._renderMonth = prev;
    },
    _align: function _align() {
        var anchor = this._opts.anchor;
        var $pane = this._$pane;
        if (anchor) {
            var offset = $(anchor).offset();
            var left = offset.left;
            if (this._opts.parent) {
                var parentLeft = $(this._opts.parent).offset().left;
                left -= parentLeft;
            }
            $pane.css({
                left: left
            });
        }
    },
    setPosition: function setPosition(x, y) {
        var $pane = this._$pane;
        if (typeof x == 'number') {
            $pane.css({
                left: x
            });
        }
        if (typeof y == 'number') {
            $pane.css({
                top: y
            });
        }
    },
    install: function install() {
        this._install();
    }
};