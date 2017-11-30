<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<span>Mixin Example Check Console</span>
<script>
	Vue.mixin({
		created: function () {
			var myOption = this.$options.myOption
			if (myOption) {
				console.log(myOption)
			}
		}
	})
	new Vue({
		myOption: 'hello!'
	})
</script>