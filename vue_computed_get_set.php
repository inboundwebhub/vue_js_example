<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="mydemo">
		<input v-model="firstname" placeholder="fname"><br>
		<input v-model="lastname" placeholder="lname"><br>
		<span>{{ fullname }}</span>
		<hr>
		<button v-on:click="callgetter">callgetter</button>
		<button v-on:click="callsetter">callsetter</button>
</div>
<script>
 	//call setter by calling demo.fullname='some value' in  browser console
	var demo=new Vue({
		el:'#mydemo',
		data:{
			firstname: 'Jigar',
			lastname: 'Halani'
		},
		methods:{
			callsetter:function(){
				this.fullname='joy thakkar'
			},
			callgetter: function () {
				alert(this.fullname)
			}
		},
		computed:{
			fullname:{
				get:function(){
					return this.firstname+ ' ' +this.lastname
				},
				set:function(newvalue){
					alert('setter called')
					var names=newvalue.split(' ')
					this.firstname=names[0]
					this.lastname =names[names.length-1]
				}
			}
		}
	})
</script>