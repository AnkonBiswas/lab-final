<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Profile</h1>
    
<br><br>

	<table border="0">
		
		<tr>
			<td>User Id</td>
			<td>{{ $user->id}} </td>
		</tr>
		
		<tr>
			<td>Username</td>
			<td>{{ $user->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{ $user->password }}</td>
		</tr>
		
	</table>

</body>
</html>