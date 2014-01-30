<html>
<head>
<?php 
	if($nextPage != null) { ?>
		<meta http-equiv="refresh" content="{{ '15' }}; url=/larafuse/fetchTable/{{ $table }}/{{ $nextPage }}" />
<?php } ?>


</head>
<body>
	Table : {{ $table }} => {{ $data }}

	@if($nextPage === null)
		{{ '<br /><br /><br />Done' }}
	@endif
</body>
</html>