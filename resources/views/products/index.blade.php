<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products List</title>
</head>

<body>
    <h1>Products List</h1>
    <table border="1" style="width:700px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Color</th>
            <th>manage</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->amount }}</td>
                <td>{{ $product->color }}</td>
                <td>
                    <a href="/products/edit/{{ $product->id }}">Edit</a> /
                    <form action="/products/delete/{{ $product->id }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
