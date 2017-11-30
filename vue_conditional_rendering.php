<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="mydiv">
		<span v-if="ok">This is okay</span>
		<span v-else>Not Okay </span>
		<h1 v-if="demo=='jigar'">Yes</h1>
		<h1 v-else>No</h1>
		<template v-if="ok">
				<div>Hello ,</div>
			    <div>How R You?</div>
				<div>How is Your Day</div>
		</template>
</div>
<hr>
<div id="mydiv2">
</div>

<script>
var mydiv=new Vue({
	el:'#mydiv',
	data:{
		ok:false,
		demo:'jigar'
	}
})
mydiv.$watch('demo', function (val) {
	alert()
})
var mydiv2=new Vue({
	el:'#mydiv2',
	template:'<div v-if="name"><span v-text="name"></span></div> ',
	data:{
		name:'jigar'
	}
})
</script>