<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="myapp">
		<h1 >{{message}} {{demo()}}</h1>
	<span v-if="false">demoo</span>
	<span v-else>demoo false</span>
		<input type="button" value="Reverse Message" v-on:click="reverse" >
</div>
<script>
	var vm=new Vue({
			el:'#myapp',
			data:{
				message:'jigars'
			},
		    methods:{
				demo:function(){
					console.log("called");
				},
				reverse:function(){
					this.message=this.message.split('').reverse().join('')
				}
			}
	})
</script>