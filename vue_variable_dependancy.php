<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="myapp">
		<input v-model="a" placeholder="Pleace enter value for a">
		a={{ a }} , b={{ b }}   (b=a+5)
</div>

<hr>
<span>DEMO2</span>
<hr>
<div id="myapp2">
	<input v-model="firstname" placeholder="firstname"><br>
	<input v-model="lastname"  placeholder="lastname"><br>
	<span>Your FullName :-  {{ fullname }} </span>
</div>
<script>
	var d=new Vue({
		el:'#myapp',
		data:{
			a:1
		},
		computed:{
			b:function(){
				return parseInt(this.a)+5
			}
		}
	})
	var d2=new Vue({
		el:'#myapp2',
		data:{
			firstname:'jigar',
			lastname:'halani'
		},
		computed:{
			fullname:function()	{
				return this.firstname +'   '+this.lastname
			}
		}
	})
</script>