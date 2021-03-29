<nav>
<a href="index.php">🏚️ home</a>
<div style="float:right;">
    <?php
        $username=$_SESSION["login"];
        if(isSet($username)){
            echo "logged in as $username | ";
        }

    ?>
    <a href="logout.php">👋 logout</a>
</div>
</nav>
