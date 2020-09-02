/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError, AlertErrors, AlertSuccess } from 'vform';
import VueRouter from 'vue-router';
import moment from 'moment';


Vue.use(VueRouter);
window.Form = Form;
window.Fire = new Vue();

import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '200px'
});

Vue.component(HasError.name , HasError);
Vue.component(AlertError.name, AlertError);
Vue.component(AlertErrors.name, AlertErrors);
Vue.component(AlertSuccess.name, AlertSuccess);

let routes = [
    {path: '/dashboard', component: require('./components/DashboardComponent.vue').default },
    {path: '/users', component: require('./components/UsersComponent.vue').default },
    {path: '/applicants', component: require('./components/Applicants.vue').default },
    {path: '/student-portal', component: require('./components/StudentPortalComponent.vue').default },
    {path: '/user-profile', component: require('./components/UserProfile.vue').default },
    {path: '/payment-history', component: require('./components/PaymentHistory.vue').default }
];
const router = new VueRouter({
    mode: 'history',
    routes
});
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('registration', require('./components/Registration.vue').default);

const app = new Vue({
    el: '#app',
    router
});


Vue.filter('ToUpperCaseText', function(test){
    return test.toUpperCase();
});
Vue.filter('ActiveText', function(text){
    if(text == '1')
        return 'Active';
    else   
        return 'In-active';
});
Vue.filter('UpperFirstCharText', function(text){
    return text.charAt(0).toUpperCase() + text.Slice(1);
});

Vue.filter('myDate', function(created){
    return moment(created).format('MMMM Do YYYY');
});


import swal from 'sweetalert2';
window.swal = swal;

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', swal.stopTimer)
      toast.addEventListener('mouseleave', swal.resumeTimer)
    }
});

window.toast = swal;

Vue.directive("uppercase", {
    update: function (el) {
        el.value = el.value.toUpperCase();
    }
})
