<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>

<div id="myapp">
		<h1>{{ message }}</h1>
		<input v-model="message">
		<h1>{{* message }}</h1>//star is used for interpolation so value is not changed when message is changed
		<pre>
			{{ $data | json}}
		</pre>
		<p v-if="greetings">Hello Sir , How's Your day ?</p><button v-on:click="display()">{{btntext}}</button>
</div>
<div id="myapp2">
		<h1>{{ name }}</h1>
		<h1>{{ name2 }}</h1>
		<h1>{{ name3 }}</h1>
		<ul>
			<li v-for="todo in todos">
				<span>{{ todo.text }}</span>
			</li>
		</ul>

		<input type="color">
</div>

<script>
	var d=new Vue({
		el:'#myapp',
		data:{
			btntext:'hide',
			message:'welcome to Arsenaltech',
			greetings:true
		},
		methods:{
			display: function () {
				if(this.greetings) {
					this.greetings = false
					this.btntext = 'Show'
				}
				else{
					this.greetings = true
					this.btntext='Hide'
				}
			}
		}
	})
	var exampleData = {
		name: 'Vue.js',
		name2:'demo2',
		name3:'demo3',
		todos:[
			{ text:'12' },
			{ text:'13' },
			{ text:'14' }
		]
	}
	new Vue({
		el:'#myapp2',
		data:exampleData
	})
</script>