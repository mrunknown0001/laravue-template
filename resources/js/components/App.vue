<template>
	<div>
		<router-view></router-view>
	</div>
</template>
<script>
  export default {
    watch: {
        $route: {
            immediate: true,
            handler(to, from) {
                document.title = to.meta.title || 'Laravel VueJS SPA';
            }
        },
    },
  }
</script>

