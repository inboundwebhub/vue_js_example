<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
	<div id="app">
			<h1>Skill :{{ skill }}</h1>
			<input type="text" v-model="level">
	</div>
</body>
</html>
<script>
new Vue({
		el:'#app',
		data:{
			level:100,
			skill:'Beginner'
		},
		computed:{
			skill:function(){
				if(this.level<=100){
						return 'Beginner';
				}
				else if(this.level>100  && this.level<=200)
				{
						return 'Intermediate';
				}
				else{
						return 'Advance';
				}
			}
		}
})
</script>