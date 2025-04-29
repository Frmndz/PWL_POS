<!DOCTYPE html>
<html>
<head>
    <title>POS - All Products</title>
    <style>
        .category {
            margin-bottom: 30px;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
        }
        .category h2 {
            margin-top: 0;
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .product-list {
            list-style-type: none;
            padding-left: 0;
        }
        .product-list li {
            padding: 8px 0;
            border-bottom: 1px dotted #eee;
        }
    </style>
</head>
<body>
    <h1>All Product Categories</h1>
    
    @foreach($categories as $categoryName => $products)
    <div class="category">
        <h2>{{ ucfirst(str_replace('-', ' ', $categoryName)) }}</h2>
        <ul class="product-list">
            @foreach($products as $product)
                <li>{{ $product }}</li>
            @endforeach
        </ul>
    </div>
    @endforeach

    <a href="/">Back to Home</a>
</body>
</html>