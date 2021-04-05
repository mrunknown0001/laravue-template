<template>
	<div class="row">
	  <div class="col-xs-12">


	    <div class="box">
	      <div class="box-header">
	        <h3 class="box-title">User: {{user.name}}</h3>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">

	      </div>
	      <!-- /.box-body -->
	    </div>
	    <!-- /.box -->
	  </div>
	  <!-- /.col -->
	</div>
</template>
<script>
	export default {
		data() {
			return {
				user: ''
			}
		},
		mounted() {
			axios.get('/api/users').then((res) => {
				this.user = res.data
			})
		}
	}
</script>