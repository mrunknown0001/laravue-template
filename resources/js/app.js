require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes'

import App from './components/App'
import Menu from './components/includes/Menu'

Vue.use(VueRouter);


const app = new Vue({
	el: '#app',
	router: new VueRouter(routes),
	components: { App },
})