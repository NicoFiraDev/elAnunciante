<?php
  // Developer database connection
	$link = mysqli_connect('localhost', 'root', 'root', 'el-anunciante');
  // Production database connction
	// $link = mysqli_connect('localhost', 'dms_admin', 'Colombia.0202', 'dms_articles');
	if(mysqli_connect_error()){
		die ("There was an error connecting to the database");
	}
	mysqli_set_charset($link,"utf8");
?>
