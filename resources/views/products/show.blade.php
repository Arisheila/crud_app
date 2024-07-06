<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diplaying a particular Product</title>
</head>
<body>
    <h1>Name of Particular Product : {{$product->name}}</h1>
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

<div>
    <label >Time </label> : 
    {{ $product->created_at }}
</div>
<div> 
            <label>Product Name</label>
            <input type="text" name="name" placeholder="Name of product" value="{{$product->name}}" />
        </div>

        <div> 
            <label>Product Name</label>
            <input type="text" name="name" placeholder="Name of product" value="{{$product->name}}" />
        </div>
        <div> 
            <label>QTY</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}" />
        </div>
        <div> 
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}" />
        </div>
        <div> 
            <label>Description</label>
            <input type="text" name="descriptions" placeholder="Description" value="{{$product->descriptions}}" />
        </div>
        <div>
        <a href="{{ route('product.index') }}">
            <button type="button">Back to Main Page</button>
        </a>
    </div>
    </form>
</body>
</html>

