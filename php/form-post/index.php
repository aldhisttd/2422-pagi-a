<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="process.php" method="POST">
        <div>
            <label for="">Username</label> <br>
            <input type="text" name="username">
        </div>
    
        <div>
            <label for="">Password</label> <br>
            <input type="password" name="password">
        </div>
    
        <div style="margin-top: 20px;">
            <button type="submit" name="btn-login">Login</button>
        </div>
    </form>

    
</body>
</html>