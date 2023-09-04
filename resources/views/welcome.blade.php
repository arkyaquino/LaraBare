<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome </title>


</head>
<body>
    <h1>Lay Bare Back-end Exam</h1>
    <a href="/main">Go to main page</a>
   
    <h2>Products</h2>

    <div class="dropdown">
  <button class="dropbtn">SORT</button>
  <div class="dropdown-content">
    <a href="#">acending</a>
    <a href="#">decending</a>
  </div>
</div>

    <p>We have a total of {{$total_products[0]->total}} products</p>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product SKU</th>
            <th>Product Category ID</th>
            <th>Product Category</th>
            <th>Product Description</th>
        </tr>
        @foreach ($products as $p)
        <tr>
            <td>{{$p->product_id}}</td>
            <td>{{$p->product_name}}</td>
            <td>{{$p->product_sku}}</td>
            <td>{{$p->product_category_id}}</td>
            <td>{{$p->product_category}}</td>
            <td>{{$p->product_description}}</td>
        </tr>
        @endforeach
</table>






<style>
    /* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</body>
</html>