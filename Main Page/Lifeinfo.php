<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/lifeinfo.css">
</head>
<body>
<form name="form" action="login.php" onsubmit="return invalid()" method="POST">
    <div class="lifeinfo" id="detailPage">
        <form action="index.php" method="POST">
        <h1>Lifestyle <span>Information</span> </h1>
        <h4>Enter your username</h4>
        <input type="text" name="infouser" placeholder="username">
        <hr>
        <div class="dietDiv" id="lifeinfoElement">
            <h4>what Food do you eat</h4>
            <select name="Diet" id="diet" class="option">
                <option >Only Healthy</option>
                <option>Mostly Healthy</option>
                <option>Some time heathy</option>
                <option>Only junk-food</option>
            </select>
        </div>
        <hr>
        <div class="exerciseDiv" id="lifeinfoElement">
            <h4>How often you exercise</h4>
            <select name="Exercise" id="exercise" class="option">
                <option>Always</option>
                <option>Some time</option>
                <option>Never</option>
            </select>
        </div>
        <hr>
        <div class="smokeDiv" id="lifeinfoElement">
            <h4>Do you Smoke</h4>
            <select name="Smoking" id="smoking" class="option">
                <option>Always</option>
                <option>Some time</option>
                <option>Never</option>
            </select>
        </div>
        <hr>
        <div class="AlcoholDiv" id="lifeinfoElement">
            <h4>Do you consume Alcohol</h4>
            <select name="Alcohol" id="alcohol" class="option">
                <option>Always</option>
                <option>Some time</option>
                <option>Never</option>
            </select>
        </div>
        <hr>
        <div class="drugsDiv" id="lifeinfoElement">
            <h4>Do you consume unwanted Drugs</h4>
            <select name="Drugs" id="drugs" class="option">
                <option>Always</option>
                <option>Some time</option>
                <option>Never</option>
            </select>
        </div>
        <hr>
        <input type="submit" name="goHome" value="SUBMIT" >
        </form>
    </div>
</form>
</body>
</html>