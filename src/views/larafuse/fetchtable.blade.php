<html>
<head>
<?php 
	if($nextPage != null) { ?>
		<meta http-equiv="refresh" content="{{ '10' }}; url=/larafuse/fetchtable/{{ $table }}/{{ $nextPage }}" />
<?php } ?>


</head>
<body>
	Table : {{ $table }} => {{ $data }}

	@if($nextPage === null)
		{{ '<br /><br /><br />Done' }}
	@endif
</body>
</html>