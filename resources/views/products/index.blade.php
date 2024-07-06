<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>

    <!-- to display if updated successfully  -->
<div>
    @if(session()->has('success'))
<div>
    {{session('success')}}
</div>
    @endif
</div>

    <div>
        <table border="1">
            <tr>
                <th> ID</th>
                <th> Name</th>
                <th> Qty</th>
                <th> Price</th>
                <th>Description</th>
                <th>Timestamp</th>
                <th>Edit</th>
                <th>SHOW</th>
                <th>Delete</th>
            </tr>

            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->descriptions }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                        <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                         
                </td>
<!-- show a particular product information -->
                <td>
                        <a href="{{ route('product.show', ['product' => $product]) }}">Show</a>
                         
                </td>
                </td>
                <!-- to delete  -->
                <td>
                    <form  method="post" action="{{route('product.destroy', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
                
      
            </tr>
            
            @endforeach


</table>
    </div>
</body>
</html>