<?php
    include("connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return invalid()" method="POST">
            <label>Username:</label>
            <input type="text" name="user" id="user" require>
            <br>
            <label>Password:</label>
            <input type="password" name="password" id="" require><br>
            <input type="submit" class="btn" value="login" name="submit1">
            <a href="resister.php">Don't have account</a>
        </form>
    </div>
    <script>
        function invalid(){        
            var user = document.form.user.value;
            var password = document.form.password.value;
            if(user.length == "" || password.length == ""){
                alert("All fields are required !");
                return false;
            }
        }
    </script>
</body>
</html>