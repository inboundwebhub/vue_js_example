<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="mydiv">
		<ul v-for="(key,o) in object" >
			<span>{{key}}</span>
			<li v-for="value in o" track-by="age">
					{{value}}
			</li>
		</ul>

		<ul >
			<li v-for="o in object">
				{{o['fname']}}->
				{{o['lname']}}->
				{{o['age']}}

			</li>
		</ul>

		<div>
			<span v-for="n in 10">{{ n }} </span>
		</div>

		<ul>
			<template v-for="(key,o) in object">
					<li v-for="value in o" track-by="$index">{{ value }}</li>
			</template>
		</ul>
		<div v-for="item in items" track-by="_uid">
					<span>{{item['_uid']}}</span>
		</div>
</div>
<script>
	var  mydiv=new Vue({
		el:'#mydiv',
		data:{
			items: [
				{ _uid: '88f869d', name:'demo' },
				{ _uid: '7496c10', name:'demo2'}
			],
			object:[
				{
					fname:'jigar',
					lname:'halani',
					age:'22'
				},
				{
					fname:'joy',
					lname:'halani',
					age:'21'
				},
				{
					fname:'ravi',
					lname:'prajapati',
					age:'23'
				}
			]
		}
	})
</script>