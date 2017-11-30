<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<div id="demo">
		<div v-for="plan in plans">
							<plan :plan="plan" :active.sync="active"></plan>
		</div>
		<template id="plan-template">
					<table border="1">
						<tr>
								<td width="100"><span>{{plan.name}}</span></td>
								<td width="100"><span>{{plan.price}}/month</span></td>
								<td width="100">
										<button @click="setActivePlan" v-show="plan.name!=active.name">{{ isUpgrade ? 'Upgrade':'Downgrade' }}</button>
										<span v-else>Current Plan</span>
								</td>
						</tr>
					</table>
			</div>
		</template>
</div>
<script>
	new Vue({
		el:'#demo',
		data:{
			plans:[
				{ name:'Enterprise',price:100},
				{ name:'Pro'       ,price:50},
				{ name:'Personal'  ,price:10},
				{ name:'Free'      ,price:0}
			],
			active:{}
		},
		components:{
			plan:{
				template:'#plan-template',
				props:['plan','active'],
				data : function(){
					return {
						active : false
					};
				},
				computed:{
					isUpgrade:function(){
						return this.plan.price > this.active.price
					}
				},
				methods:{
					setActivePlan:function(){
						this.active=this.plan;
					}
				}
			}
		}
	})
</script>