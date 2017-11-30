<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="mydiv">
		<button v-on:click="greet">Greet</button>
		<button v-on:click="say('hi')">Say Hi</button>
		<input type="radio" v-on:click="say('hi')">
			<a v-on:click="greet">do this</a>

			<!-- the submit event will no longer reload the page -->
			<form v-on:submit.prevent="greet">
				<input type="submit" value="Submit">
			</form>

			<!-- modifiers can be chained -->
				<a v-on:click.stop.prevent="greet">Do that</a>

				<!-- just the modifier -->
				<form v-on:submit.prevent>
					<input type="submit" value="Submit">
				</form>

			<div v-on:click.capture="greet">
				hello this is div tag
			</div>

	<input v-on:keyup.enter="greet">
	<!-- only trigger handler if event.target is the element itself -->
	<!-- i.e. not from a child element -->
	<div v-on:click.self="greet">
			<p>hey </p>
			<span>clickme</span>
			div click
	</div>

</div>

<script>
var mydiv=new Vue({
		el:'#mydiv',
		data:{
			name:'Vue.js'
		},
		methods:{
			greet:function(event){
				alert("Hello" + this.name +'!')
				alert(event.target.tagName)
				//console.log(event)
			},
			say:function(msg){
				alert(msg)
			}
		}
})
</script>