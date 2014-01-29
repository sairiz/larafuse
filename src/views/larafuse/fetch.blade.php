<html>
<head>
	<meta http-equiv="refresh" content="{{ '5' }}; url=/larafuse/fetch" />
</head>

<body>
<?php

	if($done)
		echo 'Done';
	else {
		echo $tab.'<br />';
		print_r($data);
	}
?>
</body>

</html>