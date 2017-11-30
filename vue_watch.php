<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="myapp">
		<input v-model="firstname" placeholder="firstname"><br>
		<input v-model="lastname"  placeholder="lastname"><br>
		<span>Your FullName :-  {{ fullname }} </span>
</div>
<script>
				var vm=	new Vue({
					el:'#myapp',
					data:{
						firstname:'jigar',
						lastname:'halani',
						fullname:'jigar halani'
					}
				})
			//watch method is used for track the variable when its value changed
				vm.$watch('firstname', function (val) {
					this.fullname=val +' ' +this.lastname
				})
				vm.$watch('lastname',function(val){
					this.fullname=this.firstname+' '+val;
				})
</script>