<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="/post" method="POST">
    @csrf

    <p>num 1</p>
    <div>
        <input type="text" name="num1">
    </div>
    
    <p>num 2</p>
    <div>
        <input type="text" name="num2">
    </div>

    <br>

    <div>
        <button type="submit">count</button>
    </div>
</form>
</body>
</html>