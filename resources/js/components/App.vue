<template>
	<div>
        <transition name="fade" mode="out-in">
    		<router-view></router-view>
        </transition>
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

