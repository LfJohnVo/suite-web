'use strict';

/* eslint-disable require-jsdoc, no-unused-vars */

var CalendarList = [];

function CalendarInfo() {
    this.id = null;
    this.name = null;
    this.checked = true;
    this.color = null;
    this.bgColor = null;
    this.borderColor = null;
    this.dragBgColor = null;
}

function addCalendar(calendar) {
    CalendarList.push(calendar);
}

function findCalendar(id) {
    var found;

    CalendarList.forEach(function(calendar) {
        if (calendar.id === id) {
            found = calendar;
        }
    });

    return found || CalendarList[0];
}

function hexToRGBA(hex) {
    var radix = 16;
    var r = parseInt(hex.slice(1, 3), radix),
        g = parseInt(hex.slice(3, 5), radix),
        b = parseInt(hex.slice(5, 7), radix),
        a = parseInt(hex.slice(7, 9), radix) / 255 || 1;
    var rgba = 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')';

    return rgba;
}

(function() {
    var calendar;
    var id = 0;

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = '<i class="fas fa-thumbtack i_calendar" style="color:#9e5fff;"></i> Mis Actividades';
    calendar.color = '#ffffff';
    calendar.bgColor = '#9e5fff';
    calendar.dragBgColor = '#9e5fff';
    calendar.borderColor = '#9e5fff';
    addCalendar(calendar);


    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = '<i class="fas fa-graduation-cap i_calendar" style="color:#ff5583;"></i> Mis Cursos';
    calendar.color = '#ffffff';
    calendar.bgColor = '#ff5583';
    calendar.dragBgColor = '#ff5583';
    calendar.borderColor = '#ff5583';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = ' <i class="fas fa-clipboard-list i_calendar" style="color:#00a9ff;"></i> Mis Auditorias';
    calendar.color = '#ffffff';
    calendar.bgColor = '#00a9ff';
    calendar.dragBgColor = '#00a9ff';
    calendar.borderColor = '#00a9ff';
    addCalendar(calendar);


    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = '<i class="fas fa-cocktail i_calendar" style="color:#87F378;"></i> Eventos';
    calendar.color = '#000000';
    calendar.bgColor = '#87F378';
    calendar.dragBgColor = '#87F378';
    calendar.borderColor = '#87F378';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = '<i class="fas fa-birthday-cake i_calendar" style="color:#FF9B00;"></i> Cumpleaños';
    calendar.color = '#ffffff';
    calendar.bgColor = '#FF9B00';
    calendar.dragBgColor = '#FF9B00';
    calendar.borderColor = '#FF9B00';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = '<i class="fas fa-award i_calendar" style="color:#DDD30A;"></i> Aniversarios';
    calendar.color = '#ffffff';
    calendar.bgColor = '#DDD30A';
    calendar.dragBgColor = '#DDD30A';
    calendar.borderColor = '#DDD30A';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = '<i class="fas fa-drum i_calendar" style="color:#25F4E4;"></i>Festivos';
    calendar.color = '#000000';
    calendar.bgColor = '#25F4E4';
    calendar.dragBgColor = '#25F4E4';
    calendar.borderColor = '#25F4E4';
    addCalendar(calendar);







})();
