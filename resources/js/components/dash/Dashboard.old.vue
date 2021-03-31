<template>
	<div>
		<h3>Dashboard</h3>
		<router-link :to="{ name: 'users' }">Users</router-link>
		<br>
		<p>Login User: {{user.name}}</p>
		<button @click.prevent="logout">Logout</button>
		<router-view></router-view>
	</div>
</template>
<script>
	export default {
		data(){
			return {
				user: ''
			}
		},

		mounted() {
			axios.get('/api/users').then((res) => {
				this.user = res.data
			})
		},

		methods: {
			logout() {
				axios.post('/api/logout').then(() => {
					alert('logout successful')
					this.$router.push({ name: "login"}); 
				});
			},
			toggleBodyClass(addRemoveClass, className) {
			    const el = document.body;

			    if (addRemoveClass === 'addClass') {
			      el.classList.add(className);
			    } else {
			      el.classList.remove(className);
			    }
			 },
		},
		mounted() {
		  this.toggleBodyClass('addClass', 'skin-blue sidebar-mini');
		},
		destroyed() {
		  this.toggleBodyClass('removeClass', 'skin-blue sidebar-mini');
		}
	}
</script>