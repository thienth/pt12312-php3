<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post" >
		{{csrf_field()}}

		Username: <input type="text" name="username" value="{{old('username')}}" placeholder="">
		@if (count($errors) > 0)
			<span>{{$errors->first('username')}}</span>
		@endif
		<br>
		Email: <input type="text" name="email" value="{{old('email')}}" placeholder="">
		@if (count($errors) > 0)
			<span>{{$errors->first('email')}}</span>
		@endif
		<br>
		Password: <input type="password" name="password" value="" placeholder="">
		@if (count($errors) > 0)
			<span>{{$errors->first('password')}}</span>
		@endif
		<br>
		Confirm Password: <input type="password" name="cfpassword" value="" placeholder="">
		@if (count($errors) > 0)
			<span>{{$errors->first('cfpassword')}}</span>
		@endif
		<br>
		<button type="submit">Save</button>
	</form>

</body>
</html>