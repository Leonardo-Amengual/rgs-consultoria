require('./bootstrap');

import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import 'jquery-mask-plugin';
import 'popper.js';
import 'bootstrap';

import formMask from './partials/form-mask';
import menu from './partials/menu';
import form from './partials/form';
import dynamicForm from './partials/dynamic-form';

($ => {
  $(() => {
    // Jquery Functions
    menu();
    formMask();
    form();
    dynamicForm();
  });
})(jQuery);

import Vue from 'vue';

Vue.component('example', require('./components/Example.vue').default);

const app = new Vue({
  el: '#app'
});
