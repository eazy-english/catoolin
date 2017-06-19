<?php 
	require_once "lib/connect.php";
	require_once "lib/api/pinterest.php";
	$con = new Connect();
	$pin = new PinterestAPI();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vue JS</title>
	<?php $con->connect("vue-js"); ?>
	<?php $con->link("bootstrap"); ?>
	<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
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
	<?php $pin->showBoard("ACCESS TOKEN"); ?>
	<?php $pin->showPin("BOARD ID", "ACCESS TOKEN"); ?>
</body>
</html>