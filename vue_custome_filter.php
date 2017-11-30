<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<div id="example">
	<span v-text="msg | reverse "></span>
	<br>
	<span v-text="msg | wrap 'Hey ' 'How Are You ?'"></span><br>

	<input type="text" v-model="num | currencyDisplay" >
	<span>{{num}} </span> <br>

	<input v-model="userInput">
	<span>{{msg | concat userInput}}</span>
	<br>
	<input v-model="query">
	<ul>
		<li v-for="item in list | filterBy query">
			{{item.msg}}
		</li>
	</ul>
	<br>
	<span>Order By Filter </span>
	<ul>
		<li v-for="item in list | orderBy 'msg'">
			{{item.msg}}
		</li>
	</ul>
</div>
<script>
	Vue.filter('concat', function (value, input) {
		// here `input` === `this.userInput`
		return value + input
	})

	Vue.filter('wrap',function(value,begin,end){
		return begin + value + end
	})

	Vue.filter('reverse', function (value) {
		return value.split('').reverse().join('')
	})

	Vue.filter('currencyDisplay', {
		// model -> view
		// formats the value when updating the input element.
		read: function(val) {
			return '$'+val.toFixed(2)
		},
		//view -> model
		//formats the value when writing to the data.
		write: function(val, oldVal) {
			var number = +val.replace(/[^\d.]/g, '')
			return isNaN(number) ? 0 : parseFloat(number.toFixed(2))
		}
	})
	new Vue({
		el:'#example',
		data:{
			query: '',
			msg:' jigar ',
			num:15.22,
			userInput:'Hey',
			list: [
				{ msg: 'Bruce Lee' },
				{ msg: 'Jackie Chan' },
				{ msg: 'Chuck Norris' },
				{ msg: 'Jet Li' },
				{ msg: 'Kung Fury' }
			]
		}
	})
</script>
