<?php
    session_start();
	session_destroy();
	header("location: ../loginKoki.php");
?>