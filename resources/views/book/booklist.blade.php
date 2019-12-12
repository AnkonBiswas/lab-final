<!DOCTYPE html>
<html>
<head>
	<title>Book List</title>
</head>
<body>

<h1>Book List</h1>

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


</body>
</html>