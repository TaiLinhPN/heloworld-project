<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/formmmm" method="post">
        @csrf
        <div>
            name
            <input type="text" name="name">
        </div>
        <div>
        age
            <input type="text" name="age">
        </div>
        <div>
        date
            <input type="text" name="date">
        </div>
        <div>
        adress
            <input type="text" name="adress">
        </div>
        
       
        <!-- include('block.error') -->
        <button type="submit">submit</button>
    </form>

</body>
</html>