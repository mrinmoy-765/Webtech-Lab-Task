
<?php
if(isset($_POST['Register'])){
     $name=$_POST['name'];
      if(empty($_POST["name"])){ echo " Name Required" ; } $name=$_POST['lname']; if(empty($_POST["lname"])){ echo "Last Name Required"; } $name=$_POST['fname']; if(empty($_POST["fname"])){ echo "Father Name Required"; } $name=$_POST['mname']; if(empty($_POST["name"])){ echo "Mother Name Required"; } $email=$_POST['email']; if(empty($_POST["email"])){ echo "Email Required"; } $phone=$_POST['phone']; if(empty($_POST["phone"])){ echo "Phone Required"; } $website=$_POST['website']; if(empty($_POST["website"])){ echo "Website Required"; } $address=$_POST['address']; if(empty($_POST["address"])){ echo "Address Required"; } $username=$_POST['username']; if(empty($_POST["username"])){ echo "Username Required"; } $Password=$_POST['password']; 
      if(empty($_POST["password"])){ 
        echo "password Required"; 
    }
        }?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<h1> <center>Registration</center></h1>
<form method="POST" action="">
<fieldset>
    <legend>General Information:</legend>
    First Name:<input type="text" id="" name="name" ><br>
    Last Name: <input type="text" id="" name="lname" ><br> 
    Father's Name: <input type="text" id="" name="fname" ><br> 
    Mother's Name: <input type="text" id="" name="mname" ><br>
    Gender:
    <input type="radio" id="" name="monster" value="K">
    <label for="kraken">Male</label>

    <input type="radio" id="sasquatch" name="monster" value="S">
    <label for="sasquatch">Female</label><br>

     <label for="birthday">Date of Birth:</label>
     <input type="date" id="" name="birthday"><br>

     Blood Group:
      <select>
      <option>A Positive</option> 
      <option>A Negative</option>
       <option>A Unknown</option>
        <option>B Positive</option>
       <option>B Negative</option>
       <option>B Unknown</option>
       <option>AB Positive</option>
        <option>AB Negative</option>
         <option>AB Unknown</option>
         <option>O Positive</option>
         <option>O Negative</option>
         <option>O Unknown</option>
      <option>Unknown</option>

      </select>
    </fieldset>
    <fieldset>
    <legend>Contact Information</legend>
    Email: <input type="email" id="" name="email" ><br>
    Phone/Mobile: <input type="tel" id="" name="phone" ><br>
    Website:<input type="url" id="" name="website" ><br>
    Present Address: <input type="text" id="" name="address" ><br>
    </fieldset>
    <fieldset>
        <legend>Account Information</legend>
        Username: <input type="text" id="" name="username" ><br>
        Password: <input type="password" id="" name="password" ><br>
    </fieldset>
    <center><input type="submit" value="register" name="Register"></center>
    </form>
    <span>Already have an account??</span><a href="Login.php">Log in</a>


</body>


