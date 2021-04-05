import Home from './components/views/Home'
import About from './components/views/About'
import PageNotFound from './components/views/PageNotFound'
import Register from './components/views/Register'
import Login from './components/views/Login'

import Authenticated from './components/views/Authenticated'

import Dashboard from './components/dash/Dashboard'
import Users from './components/dash/Users'
import Table from './components/dash/Table'

export default {
	mode: 'history',
	linkActiveClass: "active",
	linkExactActiveClass: "active",

	routes: [
		{
			path: '*',
			component: PageNotFound,
			name: 'pagenotfound',
			meta: {
				title: 'Page Not Found',
			}
		},
		{
			path: '/',
			component: Login,
			name: 'home',
			meta: {
				title: 'Login - Home Page'
			}
		},
		{
			path: '/about',
			component: About,
			name: 'about',
			meta: {
				title: 'About Page',
			}
		},
		{
			path: '/register',
			component: Register,
			name: 'register',
			meta: {
				title: 'Register User'
			}
		},
		{
			path: '/login',
			component: Login,
			name: 'login',
			meta: {
				title: 'Login'
			}


		},
		{
			path: '/u',
			component: Authenticated,
			name: 'authenticated',

			children: [
				{
					path: 'dashboard',
					component: Dashboard,
					name: 'dashboard',
					meta: {
						title: 'Dashboard'
					}
				},
				{
					path: 'users',
					component: Users,
					name: 'users',
					meta: {
						title: 'Users'
					}
				},
				{
					path: 'table',
					component: Table,
					name: 'table',
					meta: {
						title: 'Table'
					}
				}
			],
			beforeEnter: (to, form, next) =>{
               axios.get('/api/authenticated').then(()=>{
               	// alert('authenticated!')
                   next()
               }).catch(()=>{
               	// alert('login first')
                   return next({ name: 'login'})
               })
           },
           methods: {

           }
		}
	]
}