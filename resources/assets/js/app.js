/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
        vposts:[],
        users:[],
        active:false,
        current:1,
    },
    mounted() {
        $('.create-class').on('click', function () {
            return confirm('Are you sure?');
        });

    },
    methods: {
        loadmore: function () {
            axios.get('/posts.json/'+this.current).then(response =>this.vposts=response.data);
            this.current+=3;
        },
        loaduser: function () {
            axios.get('/users.json/').then(response =>this.users=response.data);
        }
    }
});





