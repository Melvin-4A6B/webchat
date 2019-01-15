<?php
	$dbc = mysqli_connect('localhost', 'root', '', 'webchat');

	if(!$dbc) {
		echo 'Database connection failed.';
	}
?>