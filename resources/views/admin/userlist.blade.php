<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>

<input type="text" id="search" name="search" onchange="myFunction()">

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


<script>
    /*function myFunction(){

(function() {



    var x = document.getElementById("search").value;

    
  var imageApi = "http://localhost:8000/product/load/"+x;


  $('#table').load(imageApi);

})();
    }
    */
</script>
</body>
</html>