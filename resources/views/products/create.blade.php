<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
</head>
<body>
    <h1>Create a Product</h1>
<div>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
<li>
    {{error}}
</li>

        @endforeach
</ul>
    @endif
</div>

    <form method="POST" action="{{ route('product.store') }}">
        <!-- for security purposes use @csrf in php -->
        @csrf
        @method("POST")
        <div> 
            <label>Product Name</label>
            <input type="text" name="name" placeholder="Name of product" />
        </div>
        <div> 
            <label>QTY</label>
            <input type="text" name="qty" placeholder="Qty" />
        </div>
        <div> 
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" />
        </div>
        <div> 
            <label>Description</label>
            <input type="text" name="descriptions" placeholder="Description" />
        </div>
        <div> 
            <input type="submit" value="Save a new Product" />
        </div>
    </form>
</body>
</html>
