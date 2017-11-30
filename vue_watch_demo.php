<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<div id="app">
	<h1>Fullname :{{ fullname }}</h1>
	<input type="text" v-model="first" placeholder="Enter First name">
	<input type="text" v-model="last" placeholder="Enter Last name">
</div>
</body>
</html>
<script>
	new Vue({
		el:'#app',
		data:{
			first:'Jigar',
			last:'Halani',
			fullname:'Jigar Halani'
		},
		watch:{
			// dont use watch property use computed property
			first:function(first){
				this.fullname=first + ' ' + this.last;
			},
			last:function(last){
				this.fullname=this.first + ' ' + last;
			}
		}
	})
</script>