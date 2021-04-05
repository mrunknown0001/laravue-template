<template>
<div class="login-box">
  <div class="login-logo">
    <img  class="img" height="50px" src="/assets/img/bgc_logo.png" alt="BGC Inventory System">
    <p><a><b>Inventory Management System</b></a></p>
  </div>
  
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <div class="alert alert-danger" role="alert" v-if="loginError"><p class="text-center">{{ loginError }}</p>
    </div>

    <form>
      <div id="email-group" class="form-group has-feedback">
        <input type="email" class="form-control" v-model="form.email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <!-- <span class="w-full text-red-500" v-if="errors.email">{{errors.email}}</span> -->
        <!-- <div class="alert alert-danger" role="alert" v-if="emailError">{{emailError}}</div> -->
      </div>
      <div id="password-group" class="form-group has-feedback">
        <input type="password" class="form-control" v-model="form.password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" @click.prevent="login()" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
</template>
<script>
	export default {
		data() {
			return {
				form: {
					email: '',
					password: '',
				},
				errors: [],
				loginError: '',
			}
		},
		methods: {
			login() {
				// alert('hey')
				axios.post('/api/login', this.form).then(() => {
					// alert('authentication success')
					this.swal('Login Success!', 'Login Successful!', 'success');
					this.$router.push({ name: "dashboard"}); 
					// console.log(this.form.email)
				}).catch((error) =>{
	                // this.errors = error.response.data.errors;
	                // if (error.response.status == 422){
				       // this.validationErrors = error.response.data.errors;
				       // alert('422 error');
				       console.log(error.response.data.errors)
				       // alert(error.response.data.errors.email)
				       this.errors = error.response.data.errors
				       // alert(this.errors)
				      // }
				      if(error.response.data.errors.email) {
				      	document.getElementById("email-group").classList.add('has-error')
				      }
				      else {
				      	document.getElementById("email-group").classList.remove('has-error')
				      }
				      
				      if(error.response.data.errors.password) {
				      	document.getElementById("password-group").classList.add('has-error')
				      }
				      else {
				      	document.getElementById("password-group").classList.remove('has-error')
				      }

				      this.loginError = error.response.data.errors.login
	            })
			},
			  toggleBodyClass(addRemoveClass, className) {
			    const el = document.body;

			    if (addRemoveClass === 'addClass') {
			      el.classList.add(className);
			    } else {
			      el.classList.remove(className);
			    }
			  },
			 swal(title, text, type) {
			 	 Swal.fire({
		            title: title,
		            text: text,
		            type: type,
		            showCancelButton: false,
		            confirmButtonColor: '#3085d6',
		            cancelButtonColor: '#d33',
		            confirmButtonText: 'ok'
		          });
			 }

		},
		mounted() {
			  this.toggleBodyClass('addClass', 'login-page');
			},
		destroyed() {
		  this.toggleBodyClass('removeClass', 'login-page');
		}
	}
</script>