<?php 
	require_once "lib/connect.php";
	$con = new Connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vue JS</title>
	<?php $con->connect("vue-js"); ?>
	<?php $con->link("bootstrap"); ?>
</head>
<body>
	<div id="app">
		<input type="text" v-model="message" @keyup.enter="enter">
	</div>
	<script>
		new Vue({
			el: '#app',
			data: {
				message: ''
			},
			methods: {
				enter: function() {
					alert(this.message);
				}
			}
		})
	</script>
</body>
</html>