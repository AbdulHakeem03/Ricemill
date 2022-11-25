<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
<form action="/save/" method="post" >
    @csrf
<label for="">name</label>
<input type="text" name="name">
<br>
<label for="">eamil</label>
<input type="email" name="email">
<br>
<label for="">password</label>
<input type="password" name="password">
<br>
<label for="">city</label>
<input type="text" name="city">
<br>

<input type="submit" name="save" value="Save">
<br>
</form>
</body>
</html>