<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<div id="example">
	<demo-component></demo-component>
	<child msg="jigar is good boy"></child>

	<br>
	<span>How to use Property</span>

	<div>
		<input v-model="parentMsg" value="Hey there">
		<child v-bind:msg="parentMsg"></child><br>
		<child :msg="parentMsg"></child> <!-- sort cut --><br>
		<child :msg.sync="parentMsg"></child> <!-- sort cut -->
	</div>

</div>
<script>/*
	var mycomponent=Vue.extend({
		template:'<div>A custome Component</div>'
	})
	Vue.component('demo-component',mycomponent);*/

	Vue.component('demo-component',{
		template:'<div> This is second component</div>'
	});
	/* this is not worked
		var Parent = Vue.extend({
		components: {
			'demo-component': {
				template: '<div>A custom component!</div>'
			}
		}
	})*/

	Vue.component('child', {
		// declare the props
		props: ['msg'],
		// the prop can be used inside templates, and will also
		// be set as `this.msg`
		template: '<span>{{ msg }}</span>'
	})
	new Vue({
		el:'#example',
		data:{
			parentMsg:''
		}
	})
	// otherway


</script>