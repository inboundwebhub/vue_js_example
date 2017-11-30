<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>User Form</title>
</head>
<style>
	body {
		font-family: Helvetica, Arial, sans-serif;
	}
	ul {
		padding: 0;
	}
	.error {
		color: #f00;
	}
</style>
<body>
<div id="example">
		<ul>
			<h3>All user</h3>
			<span v-show="users.length==0">No User Added</span><br>
			<li v-for="i in users">
				<span>{{i.name}} -> {{i.email}}</span>
				<button v-on:click="remove($index)">X</button>
			</li>
		</ul>
		<form id="form" v-on:submit.prevent="adduser">
				<div>
					<input v-model="newuser.name" placeholder="Enter Name">
					<span v-show="!validation.name" class="error">name can not be empty</span>
				</div>
				<div>
					<input v-model="newuser.email" placeholder="Enter Email">
					<span v-show="!validation.email" class="error">Please provide valid email Address</span>
				</div>
				<div>
					<input type="submit" value="Add user">
				</div>
		</form>

</div>
</body>
</html>
<script>
	var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	new Vue({
		el:'#example',
		data:{
			users:[],
			newuser:{
				name:'',
				email:''
			}
		},computed:{
			validation:function(){
				return{
					name:!!this.newuser.name.trim(),
					email:emailRE.test(this.newuser.email)
				}
			},isvalid:function(){
				var validation=this.validation
				return Object.keys(validation).every(function(key){
					return validation[key]
				})
			}
		},methods:{
			adduser:function(){
					if(this.isvalid){
						this.users.push( { name:this.newuser.name,email:this.newuser.email } )
						this.newuser.name=''
						this.newuser.email=''
					}
			},
			remove:function(index){
				this.users.splice(index,1)
			}
		}
	})
</script>