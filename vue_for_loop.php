<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="myapp">
		<ul>
			<li v-for="todo in todos">
				{{ todo.text }}
			</li>
		</ul>
</div>
<div id="myapp2">
		<ul>
			<li v-for="todo in todos">
				{{{ todo.html }}}
			</li>
		</ul>
</div>
<script>
	new Vue({
		el:'#myapp',
		data:{
			todos:[
				{text:'1'},
				{text:'2'},
				{text:'3'},
				{text:'4'}
			]
		}
	});
	new Vue({
			el:'#myapp2',
			data:{
				todos:[
					{html:'<h1> Hello I am Here</h1>'},
					{html:'<h2> Hello I am Here</h2>'},
					{html:'<h3> Hello I am Here</h3>'},
					{html:'<h4> Hello I am Here</h4>'},
					{html:'<h5> Hello I am Here</h5>'},
					{html:'<h6> Hello I am Here</h6>'}
				]
			}
	});
</script>