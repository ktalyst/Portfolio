(function ($) {


    function arrayContains(array, value) {
        for (var i = 0; i < array.length; i++) {
            if (array[i] === value) {
                return true;
            }
        }
        return false;
    }

    var clickEventType = ((document.ontouchstart !== null) ? 'click' : 'touchstart');

    var calendar = new Object();
    var calendarDispoDays = [
        new Date(2016, 6, 1),
        new Date(2016, 6, 4),
        new Date(2016, 6, 5),
        new Date(2016, 6, 6),
        new Date(2016, 6, 7),
        new Date(2016, 6, 8),
        new Date(2016, 6, 19),
        new Date(2016, 6, 20),
        new Date(2016, 6, 21),
        new Date(2016, 6, 22),
        new Date(2016, 6, 25),
        new Date(2016, 6, 26),
        new Date(2016, 6, 27),
        new Date(2016, 6, 28),
        new Date(2016, 6, 29),
    ];

    function dispoCalendar() {
        var calendarHtml = $("#calendar");

        var calendarThead = calendarHtml.find('.calendar-thead');
        var calendarTbody = calendarHtml.find('.calendar-tbody');

        var calendarTodayDay = calendarHtml.find('.calendar-today .day');
        var calendarTodayMonth = calendarHtml.find('.calendar-today .month');
        var calendarTodayWeekday = calendarHtml.find('.calendar-today .week-day');

        var calendarActiveMonth = calendarHtml.find('.active-month');
        var calendarActiveYear = calendarHtml.find('.active-year');
        var calendarActiveMonthAndYear = calendarActiveMonth.add(calendarActiveYear)


        if (calendarHtml.length > 0) {
            calendar = {
                currentYear: new Date().getFullYear(),
                currentMonth: new Date().getMonth(),
                _nextMonth: new Date().getMonth()+1,
                currentWeekDay: new Date().getDay(),
                currentDay: new Date().getDate(),
                active: {
                    month: '',
                    year: ''
                },
                limitUp: {
                    month: '6',
                    year: '2016'
                },
                limitDown: {
                    month: '',
                    year: ''
                },
                dispoDays: '',
                daysInMonth: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
                weekNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                init: function () {
                    this.initToday();
                    this.initWeekNames();
                    this.createMonthHtml(this.currentYear, this.currentMonth, this._nextMonth);
                },
                initToday: function () {
                    calendarTodayDay.html(this.currentDay);
                    calendarTodayMonth.html(this.monthNames[this.currentMonth].substring(0, 3));
                    calendarTodayWeekday.html(this.weekNames[this.currentWeekDay]);
                },
                initWeekNames: function () {
                    var html = '<tr>';

                    for (var i = 0; i < this.weekNames.length; ++i) {
                        html += '<th>' + this.weekNames[i].substring(0, 3) + '</th>';
                    }
                    html += '</tr>';

                    calendarThead.append(html);
                },
                getDaysInMonth: function (year, month) {
                    if ((month == 1) && (year % 4 == 0) && ((year % 100 != 0) || (year % 400 == 0))) {
                        return 29;
                    } else {
                        return this.daysInMonth[month];
                    }
                },
                createMonthHtml: function (year, month, _nextMonth) {
                    var html = '';
                    var monthFirstDay = new Date(year, month, 1).getDay();
                    var nextMonthFirstDay = new Date(year, _nextMonth, 1).getDay();
                    var monthDispoDays = [];
                    var nextMonthDispoDays = [];

                    calendarActiveMonth.empty().html(this.monthNames[month]);
                    calendarActiveYear .empty().html(year);

                    // Get busy days array for active month
                    for (var i = 0; i < this.dispoDays.length; i++) {
                        if (this.dispoDays[i].getFullYear() == year && ( this.dispoDays[i].getMonth() == month || this.dispoDays[i].getMonth() == _nextMonth) ) {
                            if(this.dispoDays[i].getMonth() == month) {
                                monthDispoDays[i] = this.dispoDays[i].getDate();
                            } else {
                                nextMonthDispoDays[i] = this.dispoDays[i].getDate();
                            }
                        }
                    }

                    for (var j = 0; j < 42; j++) {
                        var className = '';

                        // Set today class
                        if (year == this.currentYear && month == this.currentMonth && (j - monthFirstDay + 1) == this.currentDay) {
                            className += 'current-day';
                        }

                        // Set busy day class
                        if (arrayContains(monthDispoDays, (j - monthFirstDay + 1))) {
                            className += 'dispo-day';
                        }

                        // Create month html
                        if (j % 7 == 0) html += '<tr>';
                        if ((j < monthFirstDay) || (j >= monthFirstDay + this.getDaysInMonth(year, month))) {
                            html += '<td class="calendar-other-month"><span></span></td>';
                        } else {
                            html += '<td class="calendar-current-month"><span class="' + className + '">' + (j - monthFirstDay + 1) + '</span></td>';
                        }
                        if (j % 7 == 6) html += '</tr>';
                    }

                    calendarTbody.empty().append(html);
                },
                nextMonth: function () {
                    console.log(this.active.year, this.limitUp.year, this.active.month, this.limitUp.month);
                    if (!(this.active.year == this.limitUp.year && this.active.month == this.limitUp.month)) {
                        calendarActiveMonthAndYear.addClass('moveup');
                        calendarTbody.addClass('moveright');

                        setTimeout(function () {
                            calendarActiveMonthAndYear.removeClass('moveup');
                            calendarActiveMonthAndYear.addClass('movedown');

                            calendarTbody.removeClass('moveright');
                            calendarTbody.addClass('moveleft');
                        }, 300);
                        setTimeout(function () {
                            calendarActiveMonthAndYear.removeClass('movedown');
                            calendarTbody.removeClass('moveleft');
                        }, 450);

                        if (this.active.month == 11) {
                            this.active.month = 0;
                            this.active.year = this.active.year + 1;
                        } else {
                            this.active.month = this.active.month + 1;
                        }
                        this.createMonthHtml(this.active.year, this.active.month);
                    } else {
                        console.log('Calendar Limit Up');
                    }
                },
                prevMonth: function () {
                    if (!(this.active.year == this.limitDown.year && this.active.month == this.limitDown.month)) {
                        calendarActiveMonthAndYear.addClass('moveup');
                        calendarTbody.addClass('moveright');
                        setTimeout(function () {
                            calendarActiveMonthAndYear.removeClass('moveup');
                            calendarActiveMonthAndYear.addClass('movedown');

                            calendarTbody.removeClass('moveright');
                            calendarTbody.addClass('moveleft');
                        }, 300);
                        setTimeout(function () {
                            calendarActiveMonthAndYear.removeClass('movedown');
                            calendarTbody.removeClass('moveleft');
                        }, 450);

                        if (this.active.month == 0) {
                            this.active.month = 11;
                            this.active.year = this.active.year - 1;
                        } else {
                            this.active.month = this.active.month - 1;
                        }
                        this.createMonthHtml(this.active.year, this.active.month);
                    } else {
                        console.log('Calendar Limit Down');
                    }
                }
            };

            calendar.active.year = calendar.currentYear;
            calendar.active.month = calendar.currentMonth;
/*            calendar.limitUp.year = calendar.currentYear + 1;
              calendar.limitUp.month = calendar.currentMonth;*/            
            calendar.limitDown.year = calendar.currentYear;
            calendar.limitDown.month = calendar.currentMonth;
            calendar.dispoDays = calendarDispoDays;

            calendar.init();

            calendarHtml.on('click', ".calendar-next", function() {
                calendar.nextMonth();
            });
            calendarHtml.on('click', ".calendar-prev", function() {
                calendar.prevMonth();
            });
        }
    };

    $(window).load(function () {

        dispoCalendar()

    });
})(jQuery);