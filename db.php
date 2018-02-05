<?php

 $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test2";
      
    $link = mysqli_connect($host, $db_user, $db_password, $db_name);
	
	mysqli_query( $link, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );
	
	?>
