



    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if(isset($_GET['Set Cookie'])){
        $cookie_name = "user";
        $cookie_value = "John Doe";
        $time=($_POST['datetime']);
       
       
        setcookie( $cookie_name, $cookie_value ,  $time);
        ?>
        
        <?php
        if(isset($_COOKIE[$cookie_name])) {
            header("Location: Lab4Cookie.php?msg=" . "Theme set.");
        } else {
         
          echo "Theme is not set ";
        }

       
    }
}
?>

