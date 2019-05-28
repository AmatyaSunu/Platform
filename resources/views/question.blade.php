
<!DOCTYPE html>
<html>
<head>
	<title>quiz </title>
</head>
<body>

	@foreach ($question as $display)
	<h4> {{$display->question}}</h4>
	@endforeach

</body>
</html>