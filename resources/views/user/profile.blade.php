<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>Edit Product</h1>

	<a href="{{route('logout.index')}}" class="uk-button uk-button-primary">logout</a>
    
<br><br>
{{session('msg')}}

<form method="post" enctype="multipart/form-data" >
	{{csrf_field()}}
	<table border="0">
		  @foreach($products as $product)
		<tr>
			<td>Title</td>
			<td><input type="text" name="name" value="{{ $product->name }}" ></td>
		</tr>
		
		<tr>
			<td>Quantity</td>
			<td><input type="text" name="quantity" value="{{ $product->quantity }}"></td>
		</tr>
		<tr>
			<td>des</td>
			<td><input type="text" name="price" value="{{ $product->price }}" ></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save" ></td>
		</tr>

		@endforeach
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach

</div></div>
</body>
</html>