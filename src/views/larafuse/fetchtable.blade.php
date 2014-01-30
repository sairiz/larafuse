<html>
<head>
<?php 
	if($nextPage != null) { ?>
		<meta http-equiv="refresh" content="{{ '15' }}; url=/larafuse/fetchtable/{{ $table }}/{{ $nextPage }}/{{ $continue }}" />
<?php }

	if($nextTable != null) { ?>
		<meta http-equiv="refresh" content="{{ '10' }}; url=/larafuse/fetchtable/{{ $nextTable }}/0/{{ $continue }}" />
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