<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	@auth
	    <h2>hello, Mr. {{Auth::user()->name}}</h2>
	    <a href="{{ route('logout') }}" title="">Logout</a>
	@endauth
	<form action="" method="get">
		<input type="text" name="keyword" value="{{old('keyword', $keyword)}}" placeholder="">
		<button type="submit">search</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>
					<a href="{{ route('product.add') }}" title="">Add new</a>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $pr)
			<tr>
				<td>{{$pr->id}}</td>
				<td>{{$pr->product_name}}</td>
				<td>{{$pr->price}}</td>
				<td>
					<a href="{{ route('product.update', ['id' => $pr->id]) }}" title="">Update</a>
					<a href="{{ route('product.remove', ['id' => $pr->id]) }}" title="">Remove</a>
				</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="3">
					{{$products->links()}}
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>