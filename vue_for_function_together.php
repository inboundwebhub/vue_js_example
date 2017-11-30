<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="myapp">
	<span style="color:red;">{{errormsg}}</span>
	<input v-model="temp" v-on:keyup.enter="add()" v-on:keypress="removeerror" id="inputs">
	<button v-on:click="add()">Add</button>
	<button v-on:click="deleteall()">Delete all</button>
	<ul>
			<li v-for="i in items">
					<span>{{i.text}}</span>
					<button v-on:click="remove($index)">X</button>
			</li>
	</ul>
</div>
<script>
	var i=2;
	new Vue({
		el:'#myapp',
		data:{
			errormsg:'',
			temp:'',
			items:[	{ text:'item1' } ]
		},
		methods:{
			add: function () {
				var t=this.temp.trim()
				this.temp=''
				if(t)
					this.items.push( {text:t} )
				else {
					var el = document.getElementById("inputs");
					el.classList.add("red");
					this.errormsg='Please Enter some text'
				}
			},
			remove:function(index)
			{
				this.items.splice(index,1)
			},
			deleteall:function(){
				this.items=[]
			},
			removeerror:function(){
				this.errormsg=''
				var el = document.getElementById("inputs");
				el.classList.remove("red");
			}
		}
	})
</script>
<style>
	.red{
		border: 1px solid red;
	}
</style>