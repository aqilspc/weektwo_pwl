<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{route('contact-us.store')}}" method="post">
	@csrf
	<input type="text" name="pesan">
	<button type="submit">Kirim</button>
</form>
</body>
</html>