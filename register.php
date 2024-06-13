<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die("Connection error:". mysqli_connect_error);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

$sql = "INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";


if($conn->query($sql)===True){
    echo "<p>New record created successfully</p>";
}
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>
    <style>
        body{
            background-color: rgb(239, 239, 239);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1{
            font-family: Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
        }
        .container{
            /* border: 2px solid red; */
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: white;
        }
        form{
           display: flex;
           flex-direction: column;
           align-items: center;
        }
        .container input{
            /* border: 2px solid green; */
            width: 80%;
            margin: 10px;
            text-align: center;
            padding: 10px;
        }
        .btn{
            background-color: green;
            color: white;
            outline: none;
            border: none;
            border-radius: 2px;
            padding: 10px;
            margin: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register Here</h1>
        <form action="register.php" method="post">
            <input type="text" name="username" id="username" placeholder="Name">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <button class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
