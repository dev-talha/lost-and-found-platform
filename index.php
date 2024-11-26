<?php
// Redirect root URL to /views/ if the current request is not already targeting /views/
if ($_SERVER['REQUEST_URI'] === '/') {
     echo '<script type="text/javascript">
        location.replace("https://lostfound.abutalha.com.bd/views/");
      </script>';
    exit();
}
?>
