<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="myapp">
	<span>Message is: {{ message }}</span>
	<br>
	<input type="text" v-model="message" placeholder="edit me">
	<hr>
	<input type="checkbox" v-model="checked" >
	<label for="checkbox">{{ checked }}</label>
	<hr>
	<input type="checkbox" v-model="checkednames" value="jigar">  jigar   <br>
	<input type="checkbox" v-model="checkednames" value="gaurav"> gaurav  <br>
	<input type="checkbox" v-model="checkednames" value="mukund"> mukund  <br>
	<input type="checkbox" v-model="checkednames" value="chirag"> chirag
	<br>
	<span>Selected person: {{ checkednames }}</span>
	<hr>
	<input type="radio" value="one" v-model="picked">
	<label for="one">One</label><br>
	<input type="radio" value="Two" v-model="picked">
	<label for="one">Two</label>
	<br>
	<span>Picked:{{ picked }}</span>
	<hr>
	<select v-model="select">
		<option>A</option>
		<option>B</option>
		<option>C</option>
	</select>
	<span>Selected {{select}}</span>
	<hr>
	<select v-model="multipless">
		<option>A</option>
		<option>B</option>
		<option>C</option>
	</select>
	<span>Multiple Selected :{{ multipless }}</span>
	<hr>
		<select v-model="selectedmultiple">
			<option v-for="option in options" v-bind:value="option.value">
				{{ option.text }}
			</option>
		</select>
		<span>Selected: {{ selectedmultiple }}</span>
	<hr>
	<span>lazy</span>
		<input v-model="lazydemo" lazy>
		<span>{{ lazydemo }}</span>
	<hr>
	<span>Age</span>
	<input v-model="age" number>
	<hr>
	<input v-model="msg" debounce="50000">
	<span>{{ msg }}</span>
</div>
<script>
	var vm=new Vue({
		el:'#myapp',
		data:{
				message:'',
				msg:'',
				checkednames:[],
				checked:true,
				picked:'',
				select:'B',
				multipless:'B',
				selectedmultiple:'A',
				lazydemo:'',
				age:'10',
				options: [
					{ text: 'One', value: 'A' },
					{ text: 'Two', value: 'B' },
					{ text: 'Three', value: 'C' }
				]
		}
	})
</script>