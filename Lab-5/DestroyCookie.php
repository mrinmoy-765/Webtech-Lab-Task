<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if(isset($_GET['Destroy Cookie'])){
        $cookie_name = "user";
        $cookie_value = "John Doe";
        $time=($_POST['datetime']);
       
       
        setcookie( $cookie_name, $cookie_value ,  time()-0);
        ?>
       
        
        <?php
        if(isset($_COOKIE[$cookie_name])) {
            header("Location: Lab4Cookie.php?msg=" . "Theme removed.");
        } else {
         
          echo "Theme is not removed ";
        }

       
    }
}
?>