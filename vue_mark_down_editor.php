<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.2/marked.min.js"></script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EDITOR</title>
</head>
<body>
	<div id="editor">
		<textarea v-model="input" debounce="300"></textarea>
		<div v-html="input | marked"></div>
	</div>
</body>
</html>
<script>
	new Vue({
		el:'#editor',
		data:{
			input:'Hello'
		},
		filters:{
			marked:marked
		}
	})
</script>
<style>
	html, body, #editor {
		margin: 0;
		height: 100%;
		font-family: 'Helvetica Neue', Arial, sans-serif;
		color: #333;
	}

	textarea, #editor div {
		display: inline-block;
		width: 49%;
		height: 100%;
		vertical-align: top;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		padding: 0 20px;
	}

	textarea {
		border: none;
		border-right: 1px solid #ccc;
		resize: none;
		outline: none;
		background-color: #f6f6f6;
		font-size: 14px;
		font-family: 'Monaco', courier, monospace;
		padding: 20px;
	}

	code {
		color: #f66;
	}
</style>