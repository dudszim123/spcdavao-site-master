/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError, AlertErrors, AlertSuccess } from 'vform';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
window.Form = Form;

Vue.component(HasError.name , HasError);
Vue.component(AlertError.name, AlertError);
Vue.component(AlertErrors.name, AlertErrors);
Vue.component(AlertSuccess.name, AlertSuccess);

let routes = [
    {path: '/dashboard', component: require('./components/DashboardComponent.vue').default },
    {path: '/users', component: require('./components/UsersComponent.vue').default },
    {path: '/applicants', component: require('./components/Applicants.vue').default },
    {path: '/student-portal', component: require('./components/StudentPortalComponent.vue').default }
];
const router = new VueRouter({
    mode: 'history',
    routes
});
Vue.component('example-component', require('./components/ExampleComponent.vue').default);


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