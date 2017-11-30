<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<div id="demo">
	<input type="button" v-on:click="change('home')" value="home">
	<input type="button" v-on:click="change('post')" value="post">
	<input type="button" v-on:click="change('like')" value="like">
</div>
<component :is="currentView">

</component>


<script>
	new Vue({
		el:'body',
		data:{
			currentView:'home'
		},
		components:{
			home:{ template:'<div> This is home component</div>' },
			post:{ template:'<div> This is post  component</div>'},
			like:{template:'<div> This is like component</div>'}
		},
		methods:{
			change:function(c){
				this.currentView=c;
			}
		}
	})
</script>