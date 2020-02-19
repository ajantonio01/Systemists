<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
<title>Reservation Management System</title>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

<div class="loginbox w3-container">
    <h3>Reservation Management System</h3>
    <p id="detail"><i>Reserve your rooms here</i></p>
    <form>
        <p id="usern_passw">Username</p>
        <input type="text" name="" placeholder="Enter Username">
        <p id="usern_passw">Password</p>
        <input type="password" name="" placeholder="Enter Password">
        <input id="homepage" class="btn btn-primary" 
        type="button" name="" value="Login">
        <a href="#">Don't have an account yet?</a>
    </form>
</div>
</div>
<script type="text/javascript">
    document.getElementById("homepage").onclick = function(){
        location.href="index.php";
    };
    </script>
    <script src="jquery.slim.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
    </html>