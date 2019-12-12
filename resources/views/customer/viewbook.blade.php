<!DOCTYPE html>
<html>
<head>
	<title>All Books</title>
</head>
<body>

<h1>Category: Novel</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
                  @foreach($novel as $n)

        <tr >
            <td>{{ $n->id }}</td>
            <td>{{ $n->bookname }}</td>
            <td>{{ $n->author }}</td>
            <td>{{ $n->category }}</td>
            <td>{{ $n->price }}</td>
            <td><a href="/customer/addtocart/>{{ $n->id }}">Add To Cart</a></td>

        </tr>

          @endforeach
        
    </tbody>
</table>

<h1>Category: Literature</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
                  @foreach($literature as $n)

        <tr >
            <td>{{ $n->id }}</td>
            <td>{{ $n->bookname }}</td>
            <td>{{ $n->author }}</td>
            <td>{{ $n->category }}</td>
            <td>{{ $n->price }}</td>
            <td><a href="/customer/addtocart/>{{ $n->id }}">Add To Cart</a></td>

        </tr>

          @endforeach
        
    </tbody>
</table>

<h1>Category: Sci-Fi</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Category</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
                  @foreach($scifi as $n)

        <tr >
            <td>{{ $n->id }}</td>
            <td>{{ $n->bookname }}</td>
            <td>{{ $n->author }}</td>
            <td>{{ $n->category }}</td>
            <td>{{ $n->price }}</td>
            <td><a href="/customer/addtocart/>{{ $n->id }}">Add To Cart</a></td>

        </tr>

          @endforeach
        
    </tbody>
</table>

<h1>Category: Adventrure</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
                  @foreach($adventure as $n)

        <tr >
            <td>{{ $n->id }}</td>
            <td>{{ $n->bookname }}</td>
            <td>{{ $n->author }}</td>
            <td>{{ $n->category }}</td>
            <td>{{ $n->price }}</td>
            <td><a href="/customer/addtocart/>{{ $n->id }}">Add To Cart</a></td>

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