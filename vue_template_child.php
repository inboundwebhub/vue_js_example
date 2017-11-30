<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
	<template id="child-template">
		<input v-model="msg">
		<button v-on:click="notify">Dispatch Event</button>
	</template>

	<div id="event-example">
		<p>Messages :{{ messages  | json }}</p>
		<child></child>
	</div>
<script>
	Vue.component('child',{
		template:'#child-template',
		data:function(){
			return { msg : 'hello' }
		},
		methods:{
			notify:function(){
				if(this.msg.trim())
				{
					this.$dispatch('child-msg',this.msg)
					this.msg=''
				}
			}
		}
	})

	var parent=new Vue({
		el:'#event-example',
		data:{
			messages:[]
		},
		events:{
			'child-msg': function (msg) {
				this.messages.push(msg)
			}
		}
	})
</script>