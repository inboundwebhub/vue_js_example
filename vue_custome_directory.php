<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Directory</title>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" >
	<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>

</head>
<style>
	select {
		min-width: 300px;
	}
</style>
<body>
	<div id="el">
		<p>Selected: {{selected}}</p>
		<select v-select="selected" :options="options">
			<option value="0">default</option>
		</select>
	</div>
</body>
</html>
<script>
	Vue.directive('select',{
		twoWay:true,
		priority:1000,
		params:['options'],
		bind: function () {
			var self=this
			$(this.el).select2({
					data:this.params.options
			}).on('change',function(){
				self.set(this.value)
			})
		},
		update: function (value) {
			$(this.el).val(value).trigger('change')
		},
		unbind: function () {
			$(this.el).off().select2('destroy')
		}
	})
	var vm=new Vue({
		el:'#el',
		data:{
			selected:0,
			options:[
				{ id:1 , text:'hello' },
				{ id:2 , text:'what'  }
			]
		}
	})
</script>