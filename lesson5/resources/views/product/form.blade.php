<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="{{ route('product.save') }}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$model->id}}">
		Product name: <input type="text" name="product_name" value="{{old('product_name', $model->product_name)}}" placeholder="">
		<br>
		Product price: <input type="text" name="price" value="{{old('price', $model->price)}}" placeholder="">
		<br>
		<button type="submit">Save</button>
	</form>
</body>
</html>