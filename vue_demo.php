<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="myapp">
	<select v-model="selectedmultiple">
		<option v-for="option in options" v-bind:value="option.value">
			{{ option.text }}
		</option>
	</select>
	<span>Selected: {{ selectedmultiple }}</span>
</div>
<script>
	new Vue({
		el: '#myapp',
		data: {
			selectedmultiple: 'A',
			options: [
				{ text: 'One', value: 'A' },
				{ text: 'Two', value: 'B' },
				{ text: 'Three', value: 'C' }
			]
		}
	})
</script>