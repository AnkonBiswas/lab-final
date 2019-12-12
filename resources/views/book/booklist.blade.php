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
            <th>Book Name</th>
            <th>Author</th>
            <th>Category</th>
            <th>Price</th>
            
               <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>
                  @foreach($books as $cate)

        <tr >
            <td>{{ $cate->id }}</td>
            <td>{{ $cate->bookname }}</td>
            <td>{{ $cate->author }}</td>
            <td>{{ $cate->category }}</td>
            <td>{{ $cate->price }}</td>
           
             <td><a href="/book/edit/{{ $cate->id }}" >Edit</a></td>
             <td><a href="/book/delete/{{ $cate->id }}" >Delete</a></td>
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