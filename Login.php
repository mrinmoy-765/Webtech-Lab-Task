


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form  method="post" action="">
<fieldset>
    <legend>Login Information</legend>
        Username: <input type="text" id="" name="username" ><br>
        Password: <input type="password" id="" name="password" ><br>
    </fieldset>
    <input type="submit" value="Login" name="submit">

</form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $username=$_POST['username'];

    if(empty($_POST["username"])){ 
        
        echo "Userame Required" ; 
      }
      
      $password=$_POST['password'];
      if(!empty($_POST["password"])){
        include 'showlogin.php';
    }else{
    
       
        echo "Password Required";
    }
}

?>