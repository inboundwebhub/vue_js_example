<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>

<div id="myapp">
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
		methods:method,
		created: function () {
				// `this` points to the vm instance
			alert("created")
		},
		compiled:function()
		{
			alert("compiled")
		},
		beforeCompile:function()
		{
			alert("Before compile")
		},
		ready: function () {
			alert("ready")
		},
		destroyed:function()
		{
			alert("destroyed")
			console.log("Before"+this.items.text)
			this.items=[]
			console.log("After"+this.items)
		},
		beforeDestroyed:function(){
			this.items.push({ text:'beforedestroy added' })
			alert("before destroyed");
		}
	})
	vm.$destroy()
</script>