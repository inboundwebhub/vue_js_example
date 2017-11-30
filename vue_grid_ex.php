<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GRID DEMO</title>
</head>
<style>
	body {
		font-family: Helvetica Neue, Arial, sans-serif;
		font-size: 14px;
		color: #444;
	}

	table {
		border: 2px solid #42b983;
		border-radius: 3px;
		background-color: #fff;
	}

	th {
		background-color: #42b983;
		color: rgba(255,255,255,0.66);
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-user-select: none;
	}

	td {
		background-color: #f9f9f9;
	}

	th, td {
		min-width: 120px;
		padding: 10px 20px;
	}

	th.active {
		color: #fff;
	}

	th.active .arrow {
		opacity: 1;
	}

	.arrow {
		display: inline-block;
		vertical-align: middle;
		width: 0;
		height: 0;
		margin-left: 5px;
		opacity: 0.66;
	}

	.arrow.asc {
		border-left: 4px solid transparent;
		border-right: 4px solid transparent;
		border-bottom: 4px solid #fff;
	}

	.arrow.dsc {
		border-left: 4px solid transparent;
		border-right: 4px solid transparent;
		border-top: 4px solid #fff;
	}

	#search {
		margin-bottom: 10px;
	}
</style>
<body>
	<script type="text/x-template" id="grid-template">
		<table>
			<thead>
				<tr>
					<th v-for="key in columns"
						@click="sortby(key)"
						:class="{active:sortkey==key}">
						{{ key | capitalize }}
						<span class="arrow" :class="sortorder[key]>0 ? 'asc' : 'dsc'">
						</span>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="entry in data | filterBy filterkey | orderBy sortkey sortorder[sortkey]">
						<td v-for="key in columns">
							{{ entry[key] }}
						</td>
				</tr>
			</tbody>
		</table>
	</script>
	<div id="demo">
		<form id="search">
			Search <input name="query" v-model="query">
		</form>
		<demo-grid
			:data="griddata"
			:columns="gridcolumn"
			:filterkey="query"
			>
		</demo-grid>
	</div>
</body>
</html>
<script>
	Vue.component('demo-grid',{
		template:'#grid-template',
		props:{
			data:Array,
			columns:Array,
			filterkey:String
		},
		data:function()
		{
			var sortorder={}
			this.columns.forEach(function(key){
				sortorder[key]=1
			})
			return {
				sortkey:'',
				sortorder:sortorder
			}
		},
		methods:{
			sortby:function(key){
				this.sortkey=key
				this.sortorder[key]=this.sortorder[key]*-1
			}
		}
	})
	new Vue({
		el:'#demo',
		data:{
			query:'',
			gridcolumn:['name','age'],
			griddata:[
				{ name:'jigar' , age:20},
				{ name:'dip'   , age:21},
				{ name:'abc'   , age:10},
				{ name:'faruk' , age:15}
			]
		}
	})
</script>