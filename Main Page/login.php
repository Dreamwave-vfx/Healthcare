<?php
$server = "localhost";
$username = "root";
$pass = "";
$database = "hftdocument";

$conn = mysqli_connect($server,$username,$pass,$database);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}


if(isset($_POST['submit1'])){
    $usernam = $_POST['user'];
    $password = $_POST['password'];
    $sql = "select * from userinfo where username = '$usernam' and password = '$password'";
    $name = "select name from userinfo where username = '$usernam' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    $nameresult = $conn->query($name);
    $row = $nameresult->fetch_assoc();
    $name = $row['name'];
    if($count == 1){
        $_SESSION['name'] = $usernam;
        header("Location:home.php?user=$name");
    }
    else{
        echo '<script>
        window.location.href="index.php";
        alert("Failed to login");
        </script>';
    }
}
if(isset($_POST['submit2'])){
    $name = $_POST['name'];
    $usernam = $_POST['user'];
    $user = $username;
    $password = $_POST['password'];
    $emailid = $_POST['emailid'];

    $email = " ";
    $cheakEmail = "select email from userinfo where email = '$emailid'";
    $cheakUser = "select username from userinfo where email = '$username'";
    $emailexist = $conn->query($cheakEmail);
    $row = $emailexist->fetch_assoc();
    $email = $row['email']; 
    $userexist = $conn->query($cheakUser);
    $row = $userexist->fetch_assoc();
    $user = $row['username']; 

    if($email == $emailid){
        echo $email;
        echo '<script>
        window.location.href="resister.php";
        alert("Email already exist");
        </script>';
    }
    elseif($user == $usernam){
        echo $email;
        echo '<script>
        window.location.href="resister.php";
        alert("Username already exist");
        </script>';
    }
    else{
        $cheakEmail = "insert into userinfo values('$name','$usernam','$emailid','$password')";
        $emailresult = mysqli_query($conn,$cheakEmail);
        header("Location:lifeinfo.php");
    }
}

if(isset($_POST['goHome'])){
    $infouser = $_POST['infouser'];
    $diet = $_POST['Diet'];
    $exercise = $_POST['Exercise'];
    $Smoke = $_POST['Smoking'];
    $alcohol = $_POST['Alcohol'];
    $drug = $_POST['Drugs'];
    $existuser = "select * from lifeinfo where username = '$infouser'";
    $result = mysqli_query($conn,$existuser);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        //$query = "UPDATE lifeinfo SET diet='$diet',exercise='$exercise',smoke='$Smoke',drink='$alcohol',drugs='$drug' WHERE username='$existuser'";
        $result = mysqli_query($conn,"UPDATE lifeinfo SET diet='$diet',exercise='$exercise',smoke='$Smoke',drink='$alcohol',drugs='$drug' WHERE username='$infouser'");
        header("Location:index.php");
    }else{
        $sql = "insert into lifeinfo values('$diet','$exercise','$Smoke','$alcohol','$drug','$infouser')";
        $result = mysqli_query($conn,$sql);
        header("Location:index.php");
    }
    
}


if(isset($_POST['food'])){
    header("Location:food.php");
}
if(isset($_POST['exer'])){
    header("Location:exercise.php");
}
?>