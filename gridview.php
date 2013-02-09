<html>
<head>
	<meta charset="utf-8">
	<title>Tutorial: Declarative Scripting</title>
	<link rel="stylesheet" href="./css/demo.css">
	<link rel="stylesheet" href="./js/dojo/dijit/themes/claro/claro.css" media="screen">
</head>
<body class="claro">
	<h1>Tutorial: Declarative Scripting</h1>
	<div id="someDialog" data-dojo-type="dijit/Dialog" data-dojo-props="title: 'Hello World!'">
		<p>I am a dialog. That makes me happy.</p>
	</div>
	<button type="button" id="myButton" data-dojo-type="dijit/form/Button">
		<span>Click Me!</span>
		<script type="dojo/on" data-dojo-event="click">
			document.write('click');
		</script>
	</button>
	<!-- load dojo and provide config via data attribute -->
		<script src="./js/dojo/dojo/dojo.js" data-dojo-config="isDebug: 1, async:1"></script>
	<script type="text/javascript">
		require([
			"dojo/parser",
			"dojo/ready",
		], function(parser, ready){
			ready(function(){
				parser.parse();
			});
		});
	</script>
</body>
</html>