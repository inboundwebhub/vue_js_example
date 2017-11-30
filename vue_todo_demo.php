<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<div id="demo" v-cloak class="main">
	<div>
		<input type="text" v-model="item" v-on:keyup.enter="add()" class="textbox" placeholder="Press enter after writing todo">
	</div>
	<h4>{{title | uppercase}}</h4>
	<p v-show="!todos.length">No todos at this moment.</p>
	<ul class="todo-list">
		<li v-for="todo in todos">
			<div>
				<span :class="{ done: todo.done }" @click="todo.done = !todo.done">{{ todo.content }}</span>
				<button class="destroy" v-on:click="remove($index)">X</button>
			</div>
		</li>
	</ul>
</div>
<style>
	button, input[type="checkbox"] {
			outline: none;
	}
	.main {
		position: relative;
		z-index: 2;
		border-top: 1px solid #e6e6e6;
	}
	.todo-list {
		margin: 0;
		padding: 0;
		list-style: none;
		width: 280px;
	}
	.todo-list li:last-child {
		border-bottom: none;
	}
	.todo-list li {
		position: relative;
		font-size: 24px;
		border-bottom: 1px solid #ededed;
	}
	.todo-list li:hover .destroy {
		display: block;
	}
	.todo-list li .destroy:hover {
		color: #af5b5e;
	}
	.todo-list li .destroy {
		display: none;
		position: absolute;
		right: -8px;
		bottom: -19px;
		width: 40px;
		height: 40px;
		margin: auto 0;
		font-size: 19px;
		color: #cc9a9a;
		margin-bottom: 11px;
		transition: color 0.2s ease-out;
	}
	button, input[type="checkbox"] {
		outline: none;
	}
	button {
		margin: 0;
		padding: 0;
		border: 0;
		background: none;
		font-size: 100%;
		vertical-align: baseline;
		font-family: inherit;
		font-weight: inherit;
		color: inherit;
		-webkit-appearance: none;
		appearance: none;
		-webkit-font-smoothing: antialiased;
		-moz-font-smoothing: antialiased;
		font-smoothing: antialiased;
	}
	body {
		font-family: Helvetica Neue, Arial, sans-serif;
	}
	span.done {
		text-decoration: line-through;
	}
	[v-cloak] {
		display: none;
	}
	.textbox {
		 border: 1px solid #848484;
		 -webkit-border-radius: 30px;
		 -moz-border-radius: 30px;
		 border-radius: 30px;
		 outline:0;
		 height:25px;
		 width: 275px;
		 padding-left:10px;
		 padding-right:10px;
	 }
</style>
<script>
	var demo = new Vue({
		el: '#demo',
		data: {
			title: 'todos',
			item:'',
			todos: [
				{done:true,content:'testing1'},
				{done:false,content:'testing2'},
				{done:false,content:'testing3'}
			] //testing with data use: [{done:false,content:'testing'}]
		},
		methods:{
			add:function(){
				this.todos.push( { done:false , content:this.item } )
				this.item='';
			},
			remove:function(index)
			{
				this.todos.splice(index,1);
			}
		}
	})
</script>