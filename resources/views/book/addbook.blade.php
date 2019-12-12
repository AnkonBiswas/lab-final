<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>Add Book</h1>



	<form method="post" >
		<!-- @csrf -->

		<!-- {{csrf_field()}} -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<input type="text" name="bookname" placeholder="bookname" ><br>
		<input type="text" name="author" placeholder="author" > <br>
        <select name="category"> <br>
            <option value="novel">Novel</option>
            <option value="literature">Literature</option>
            <option value="scifi">Sci-Fi</option>
            <option value="adventure">Adventure</option>
        </select>
        <br>
		<input type="text" name="price" placeholder="price" > <br>
		<input type="submit" name="submit" value="Submit">

	</form>

	<div>
        @if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}.<br>
            @endforeach
    </div>
@endif
	</div>

</body>
</html>