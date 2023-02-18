<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="SetCookie.php">
    <h1>Cookie Example</h1>
    <?php
    date_default_timezone_set('Asia/Dhaka');
    $timezone = date_default_timezone_get();
    echo "Time Zone: " . $timezone;
    ?>
    <hr>
    <br><br><br>
    <h3>Set Cookie</h3>
    <br><br><br>
    <hr>
    Select a color:
    <input type="color" id="sltdcolor" title="Choose Background Color">
    <script>
        document.getElementById("sltdcolor").addEventListener("change",colorchange);
        function colorchange(){
            var x= document.getElementById("sltdcolor").value;
            document.body.style.backgroundColor=x;
        }
    </script>
    
<br>
    <label for="birthdaytime">Expire on:</label>
  <input type="datetime-local" id="datetime" name="datetime"><br>
  <input type="submit" name="Set Cookie" value="Set Cookie">

  <hr>
  <br><br><br>
  <h3>Destroy Cookie</h3>
  <br><br><br>
  <hr>
  <input type="submit" name="Destroy Cookie" value="Destroy Cookie">
    </form>
</body>
</html>