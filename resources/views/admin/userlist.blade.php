<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

<h1>User List</h1>

<div id="table">
<table>


    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            
               <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>
                  @foreach($users as $cate)

        <tr >
            <td>{{ $cate->id }}</td>
            <td>{{ $cate->username }}</td>
            <td>{{ $cate->password }}</td>
           
             <td><a href="user/edit/{{ $cate->id }}" >Edit</a></td>
             <td><a href="user/delete/{{ $cate->id }}" >Delete</a></td>
        </tr>

          @endforeach
        
    </tbody>
</table>


</body>
</html>