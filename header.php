<nav>
<a href="index.php">🏚️ home</a>
<!-- delet this before turning in, makes it easier to work on -->
<a href="insert.php">insert.php</a>;
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
