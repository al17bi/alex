/**
 * Created by User on 17.11.2016.
 */
// Настройки datepicker
$.fn.datepicker.defaults.autoclose = 'true';
$.fn.datepicker.defaults.format = 'dd-mm-yyyy';
$.fn.datepicker.defaults.language = 'ru';
$.fn.datepicker.defaults.todayHighlight = 'true';

$(function () {
    $('#panel-1').lobiPanel();
    $('#panel-2').lobiPanel();
    Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, {
        size: 'mini',
        // delay: false,
        position: 'right top'
    });
    //Overriding default options
    $.fn.lobiList.DEFAULT_OPTIONS = $.extend({}, $.fn.lobiList.DEFAULT_OPTIONS, {
        // Whether to show checkboxes or not
        useCheckboxes: true,
        // Show/hide to---do remove button
        enableTodoRemove: true,
        // Show/hide to---do edit button
        enableTodoEdit: true,
        // Whether to make lists and todos sortable
        sortable: true,
        // Default action buttons for all lists
//            controls: ['edit', 'add', 'remove', 'styleChange'],
        controls: ['edit', 'styleChange'],
        //List style
        defaultStyle: 'lobilist-info',
        // Whether to show lists on single line or not
        onSingleLine: true
    });
});


