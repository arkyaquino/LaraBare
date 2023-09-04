<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <h1>Product Details</h1>
    <a href="{{ route('products.index') }}">Back to Main</a>

    <h2>{{ $product->product_name }}</h2>
    <p>SKU: {{ $product->product_sku }}</p>
    <p>Category: {{ $product->product_category }}</p>
    <p>Description: {{ $product->product_description }}</p>

   
</body>
</html>
