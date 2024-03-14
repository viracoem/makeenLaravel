<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>
    <form action="/products/edit/{{ $product->id }}" method="post">
        @csrf
        <input type="text" name="name" value="{{ $product->name }}"><br>
        <input type="number" name="amount" value="{{ $product->amount }}"><br>
        <textarea name="description" cols="30" rows="10">{{ $product->description }}</textarea><br>
        <select name="color">
            <option value="red" {{ $product->color == 'red' ? 'selected' : '' }}>red</option>
            <option value="blue" {{ $product->color == 'blue' ? 'selected' : '' }}>blue</option>
        </select>
        <input type="submit" value="Send">
    </form>
</body>

</html>
