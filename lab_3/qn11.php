<?php


    $user="Elon";
    $pass="Musk";


if(isset($_GET["submit"])){
    if(($user==$_GET["username"])&& ($pass==$_GET["password"])){
        header("Location:qn11.html");
    }else{
        echo "Error: invalid username or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qn10</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="submit" value="login" name="submit">
    </form>
    
</body>
</html>
