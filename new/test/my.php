<?php 


include("setup.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sleepingfire Games</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<?php 

	$dir=scandir('./Final');
	foreach ($dir as $key) {
		if ($key=="." || $key=="..") {
			continue;
		}
		echo ('<br/><a href="./Final/'.$key.'" target="_blank">'.$key.'</a></br>');
	}

	$user_os        =   getOS();
	$user_browser   =   getBrowser();
	$ip = getRealIpAddr();
	$device_details =   "<br/><strong>Browser: </strong>".$user_browser."<br /><strong>Operating System: </strong>".$user_os."<br /><strong>IP Address: </strong>".$ip."";

	print_r($device_details);


	?>

</body>
</html>