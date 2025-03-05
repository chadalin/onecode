<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->stock}}</td>
            <td>{{$product->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>