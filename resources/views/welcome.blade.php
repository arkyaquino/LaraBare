<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h1>Lay Bare Back-end Exam</h1>
    <a href="/main">Go to main page</a>
   
    <h2>Products</h2>

    <form method="get" action="{{ route('products.index') }}">
        @csrf
        <label for="sort">Sort Product Name:</label>
        <select name="sort" id="sort">
            <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Ascending</option>
            <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Descending</option>
        </select>
        <button type="submit">Sort</button>
    </form>

    <p>We have a total of {{ $total_products[0]->total }} products</p>
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
            <td>{{ $p->product_id }}</td>
            <td><a href="{{ route('show', ['product' => $p->product_id]) }}">{{ $p->product_name }}</a></td>
            <td>{{ $p->product_sku }}</td>
            <td>{{ $p->product_category_id }}</td>
            <td>{{ $p->product_category }}</td>
            <td>{{ $p->product_description }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
