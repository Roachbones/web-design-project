<p><a href="home.php">🏚️ home</a>
<?php
    $username=$_SESSION["login"];
    if(isSet($username)){
        echo "| Hello, $username";
    }
?>
</p>
