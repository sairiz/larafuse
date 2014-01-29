<html>
<head>
<?php
	if($done)
	{

	} else {
		?><meta http-equiv="refresh" content="{{ '5' }}; url=/larafuse/fetch" />
<?php	}
?>
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