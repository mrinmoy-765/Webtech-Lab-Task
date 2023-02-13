<?php
if($_POST){
    $num = $_POST["number"];
}
?>
<!DOCTYPE html>

<body>


    <center>
        <h1>Login</h1>

        <form method="POST">
            Enter a number:
            <input type="text" name="number">
            <input type="submit" value="submit">

</form>
<hr>
<style>

    table,th,td{
        border:1px solid black;
    }
</style>
<table style="width:30%">

<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 1; ?></td>
    <td><?php   echo $num*1; ?></td>
</tr>

<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 2; ?></td>
    <td><?php   echo $num*2; ?></td>
</tr>

<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 3; ?></td>
    <td><?php   echo $num*3; ?></td>
</tr>
<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 4; ?></td>
    <td><?php   echo $num*4; ?></td>
</tr>
<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 5; ?></td>
    <td><?php   echo $num*5; ?></td>
</tr>
<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 6; ?></td>
    <td><?php   echo $num*6; ?></td>
</tr>
<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 7; ?></td>
    <td><?php   echo $num*7; ?></td>
</tr>
<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 8; ?></td>
    <td><?php   echo $num*8; ?></td>
</tr>
<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 9; ?></td>
    <td><?php   echo $num*9; ?></td>
</tr>
<tr>
    <td><?php  echo $num;  ?></td>
    <td><?php  echo "*";  ?></td>
    <td><?php   echo 10; ?></td>
    <td><?php   echo $num*10; ?></td>
</tr>
</table>
</center>

</body>
</html>

