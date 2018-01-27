<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="{{route('login')}}" method="post" >
		@if(session("errMsg"))
			<span style="color: red">{{session('errMsg')}}</span>
		@endif
		{{csrf_field()}}
		<input type="text" name="username" value="" placeholder="">
		<input type="text" name="password" value="" placeholder="">
		<button type="submit">login</button>
		
	</form>
</body>
</html>