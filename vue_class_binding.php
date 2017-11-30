<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<div id="mydemo">
	<span v-bind:class="classobject"> Normal Text </span>
	<button v-on:click="changestyle">{{ btn1text }}</button>
	<button v-on:click="changecolor">{{ btn2text }}</button>
	<hr>
	<span v-bind:class="classobject.red ? 'green':'blue' ">Dependancy in class</span>
	<hr>
	<span v-bind:style="{color:activecolor , fontsize: fsize +'px' }">Using Style tag</span>
	<button v-on:click="chnagesize">Increase Text Size</button>
</div>
<script>
	//call setter by calling demo.fullname='some value' in  browser console
	var demo=new Vue({
		el:'#mydemo',
		data:{
			activecolor:'pink',
			fsize:'10',
			btn1text:'Bold Text',
			btn2text:'Red Color',
			classobject:{
				'red':false,
				'bold':false,
				'textsize':true
			}
		},
		methods:{
			changestyle: function () {
				this.classobject.bold=this.classobject.bold?false:true
				this.btn1text=this.classobject.bold?'Simple Text':'Bold Text'
			},
			changecolor:function(){
				this.classobject.red=this.classobject.red?false:true
				this.btn2text=this.classobject.red?'Black Color':'Red Color'
			},
			chnagesize:function(){
				this.fontSize=this.fontSize+20
			}
		}
	})
</script>
<style>
	.red{
		color: red;
	}
	.bold{
		font-weight: bold;
	}
	.green{
		color: green;
	}
	.blue{
		color:blue;
	}
	.textsize{
		font-size: 20px;
	}
</style>