<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body style="background-color: burlywood; color:aliceblue">
    <form action="login_process.php" method="post">
        <div>
        <label for="">username</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="">password</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="login">
    </form>
</body>
</html>