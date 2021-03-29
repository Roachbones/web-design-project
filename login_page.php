<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="author" content="the cool web design group">
<meta name="description" content="Boring course registration project for Dr. Williamson's Web Design & Programming class, spring 2021.">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile compatibility -->
<title>Boring Course Registration System</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php session_start(); ?>

</head>
<body>
<header>
	<h1>Boring Course Registration System</h1>
</header>
<main>
	<form action="login.php" method="post">
        <p style="text-align:center">
            <?php if($_SESSION["login"] == "BAD LOGIN"){ echo "INVALID LOGIN: Please try again.";} elseif($_SESSION["login"]=="SESSION TIMEOUT"){echo "Session timed out, please login again."; } else{ echo "Please log in to use the system."; } ?>
        </p>
        <div class="two_column">
            <label for="login">username</label>
            <input type="text" name="login" id="login" required>
        </div>
        
        <input type="submit" value="login" id="submit">
    </form>
</main>

<footer>
<p>this website was <a href="https://github.com/Roachbones/web-design-project">constructed</a> by the cool web design group: vivian, spence, kade, and tony</p>
</footer>

</body>
</html>
