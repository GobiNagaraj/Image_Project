<?php 

	function html_header($title)
	{
		echo '<!DOCTYPE html>
			<html>
				<head>
					<title>'.$title.'</title>
						<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
						<script src="../bootstrap/js/jquery.js"></script>
						<link rel="stylesheet" type="text/css" href="../css/header_image.css">
						<link rel="stylesheet" type="text/css" href="../css/roll_image.css">
						<script src="../bootstrap/js/jquery.js"></script>
    					<script src="../bootstrap/js/bootstrap.min.js"></script>
				</head>
			<body>';
	}
	function html_footer()
	{
		echo '</body> </html>';
						
	}
 ?>