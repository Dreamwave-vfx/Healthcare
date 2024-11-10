<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="BGvideo">
        <video autoplay muted loop class="video">
        <source src="Home/backgroundVid.mp4" type="video/mp4">
    </video>
    </div>
    
    <div class="login">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return invalid()" method="POST">
            <h3>Username:</h3>
            <input type="text" name="user" id="user" require>
            <br>
            <h3>Password</h3>
            <input type="password" name="password" id="" require><br>
            <button class="btn" name="submit1">Login</button><br>
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