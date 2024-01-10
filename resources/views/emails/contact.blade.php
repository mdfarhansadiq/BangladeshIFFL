<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<p>
		    Name : {{ $data['name'] }}<br />
		    Phone : {{ $data['phone'] }}<br />
			Email :  {{ $data['email'] }}<br />
		</p>
		<span> Message : </span>
		<div>
			{{ $data['message'] }}
		</div>
		<p> Thank You </p><br /><br />
	</body>
</html>