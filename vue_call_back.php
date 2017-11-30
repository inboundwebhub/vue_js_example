<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>

<div id="myapp">
	<h1>{{ a }}</h1>
	<input v-model="a">
	<ul>
			<li v-for="i in items">
					{{ i.text }}
			</li>
	</ul>
	<button v-on:click="add">Add New item</button>
</div>

<script>
	var i=2;
	var data={
			a:1,
			items:[
				{text:'item1'}
			]
	}
	var method= {
		add: function () {
			data.items.push({text:'item'+(i++)})
		}
	}
	var vm=new Vue({
		el: '#myapp',
		data:data,
		methods:method
	})
	vm.$watch('a', function (newVal, oldVal) {
		// this callback will be called when `vm.a` changes
		alert(newVal+'->'+oldVal)
	})
	vm.$watch('items',function(newval,oldval)
	{
			alert("call back called newval ->"+newval)
			console.log(newval)
	})
</script>