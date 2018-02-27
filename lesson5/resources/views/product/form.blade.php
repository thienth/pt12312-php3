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
		<textarea name=""></textarea>
		<button type="submit">Save</button>
	</form>
	<script type="text/javascript" src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
	<script type="text/javascript">
		tinymce.init({
			selector: 'textarea',
			plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path:"/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
		});
	</script>
</body>
</html>