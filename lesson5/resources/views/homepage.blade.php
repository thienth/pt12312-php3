<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $el)
			<tr>
				<td>{{$el->id}}</td>
				<td>{{$el->product_name}}</td>
				<td>{{$el->price}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>