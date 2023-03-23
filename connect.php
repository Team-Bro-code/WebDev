<?php
$connect=mysqli_connect($localhost,$root,$harish12345678,$Login) or die("Connection Failed");
if(!empty($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from Admin where Username='$username' and Password='$password'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        echo "Login successfull";
        header("Location: geo.html"); 
    }
    else
    {
        echo "Login not sucessfull";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link href='admin.css' rel='stylesheet' type='text/css'>
</head>
<body>
    <form method="POST">
    <div class="logo"></div>
    <div class="login-block">
        <h1>Admin login</h1>
        <input type="text" value="" placeholder="Username" id="username" name="username" />
        <input type="password" value="" placeholder="Password" id="password" name="password"/>
        <input type="submit" name="submit" value="submit"/>
    </div>
    </form>
    
</body>
</html> 