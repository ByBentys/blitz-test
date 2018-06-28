'use strict';
var flatpickrDemo = {
    init: function init() {

        this.bindUIActions();
    },
    bindUIActions: function bindUIActions() {

        // event handlers
        this.handleFlatpickr();
    },
    _fp1: function _fp1() {
        // basic
        return flatpickr('#form4', {
            dateFormat: 'd-m-y',
        });
    },
    _fp2: function _fp2() {
        // Time Picker
        return flatpickr('#form5', {
            disableMobile: true,
            enableTime: true,
            noCalendar: true,
            dateFormat: 'H:i',
            defaultDate: '1:45'
        });
    },
    handleFlatpickr: function handleFlatpickr() {
        this._fp1();
        this._fp2();
    }
};
flatpickrDemo.init();

function show_menu() {
    var menu = document.querySelector('.app-aside');
    var app_backgroup = document.querySelector('.app-backdrop');
    if (menu) {
        menu.classList.toggle('has-open');
    }
    if (app_backgroup) {
        app_backgroup.addEventListener('click',_hide_menu);
        app_backgroup.classList.add('active-backdrop');
    }
    function _hide_menu() {
        if (menu) {
            menu.classList.toggle('has-open');
        }
        if (app_backgroup) {
            app_backgroup.removeEventListener('click',_hide_menu);
            app_backgroup.classList.remove('active-backdrop');
        }
    }
}
