<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
		<div id="app">
				<counter subject="likes" ></counter>
				<counter subject="dislikes"></counter>
		</div>
		<template id="counter-template">
			<h1 :class="jjj">{{ subject }}</h1>
			<button @click="count +=1">{{count}}</button>
		</template>
</body>
</html>
<script>
	Vue.component('counter',{
		template:'#counter-template',
		props:['subject'],
		data:function(){
			return {count:0}
		}
	})
	new Vue({
		el:'#app',
	})
</script>