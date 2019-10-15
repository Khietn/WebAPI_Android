<html>
<head>
	<title>Welcome!</title>
</head>

<body>
	<?php 
	$a = isset($hoten)?$hoten:"World!";
	echo '<h1 style="top:45%;right:45%;position: absolute;border:1px solid black;
	background-color:green;">Hello '.$a.' - '.$bietdanh.'</h1>';
	?>
</body>
</html>