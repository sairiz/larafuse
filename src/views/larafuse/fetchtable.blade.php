<?php 
if($table === 'Contact' || $table === 'Job')
	$masa = 12;
else $masa = 3;
?>

<html>
<head>
<?php 
	if($nextPage != null) { ?>
		<meta http-equiv="refresh" content="{{ $masa }}; url=/larafuse/fetchtable/{{ $table }}/{{ $nextPage }}/{{ $continue }}" />
<?php }

	if($nextTable != null && $nextTable != 'done') { ?>
		<meta http-equiv="refresh" content="{{ '5' }}; url=/larafuse/fetchtable/{{ $nextTable }}/0/{{ $continue }}" />
<?php } ?>
</head>
<body>
	Table : {{ $table }} => <?php var_dump($data); ?><br />
	NextPage : {{ $nextPage }}<br />
	NextTable : {{ $nextTable }}

	@if($nextTable === 'done')
		{{ '<br /><br /><br />Done' }}
	@endif
</body>
</html>