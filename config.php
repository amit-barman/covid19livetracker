<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "corona_data";

$con = mysqli_connect($server, $user, $pass, $db);

if($con) {

} else {
	?>
	<script>
		alert("unable to conect with database");
	</script>
	<?php
}

?>