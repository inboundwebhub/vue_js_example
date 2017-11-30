<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<style>
	ul {
		padding-left: 0;
		font-family: Helvetica, Arial, sans-serif;
	}
	.staggered-transition {
		transition: all .5s ease;
		overflow: hidden;
		margin: 0;
		height: 20px;
	}
	.staggered-enter, .staggered-leave {
		opacity: 0;
		height: 0;
	}
</style>
<div id="demo">
	<input v-model="query">
	<ul>
		<li v-for="item in list | filterBy query" transition="staggered"
			stagger="100">
			{{item.msg}}
		</li>
	</ul>
</div>
<script>
	new Vue({
		el: '#demo',
		data: {
			query: '',
			list: [
				{ msg: 'Bruce Lee' },
				{ msg: 'Jackie Chan' },
				{ msg: 'Chuck Norris' },
				{ msg: 'Jet Li' },
				{ msg: 'Kung Fury' }
			]
		}
	})
</script>