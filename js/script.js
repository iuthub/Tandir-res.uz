$('.carousel').carousel({
  interval: 7000
})

$('input[name="phone"]').mask('+998 11 111 11 11');

var dt = new Date();
var time = dt.getHours() + 1 + ":" + "00";
var date = dt.getDay() + "/" + dt.getMonth() + "/" + dt.getYear();

$('#date').datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 1,
    todayBtn: "linked",
    daysOfWeekHighlighted: "0,6",
    calendarWeeks: true,
    autoclose: true,
    // todayHighlight: true,
    toggleActive: true
});

$('#date').datepicker('update', new Date());

$('.timepicker').timepicker({
    timeFormat: 'HH:mm',
    interval: 60,
    minTime: '09',
    maxTime: '6:00pm',
    defaultTime: time,
    startTime: time,
    dynamic: false,
    dropdown: true,
    scrollbar: true
});