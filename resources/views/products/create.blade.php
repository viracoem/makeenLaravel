<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>

<body>
    <h1>Create Product</h1>
    <form action="/products/create" method="post">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <input type="number" name="amount" placeholder="amount"><br>
        <textarea name="description" cols="30" rows="10" placeholder="description"></textarea><br>
        <select name="color">
            <option value="red">red</option>
            <option value="blue">blue</option>
        </select><br>
        <input type="submit" value="Send">
    </form>
</body>

</html>
