<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>Register</h1>



	<form method="post" >
		<!-- @csrf -->

		<!-- {{csrf_field()}} -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<input type="text" name="username" placeholder="Username" ><br>
		<input type="password" name="password" placeholder="Password" >
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