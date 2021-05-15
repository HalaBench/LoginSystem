<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleHeader.css">
    <link rel="stylesheet" href="styleBody.css">
    <title>DEMO WEBSITE</title>
</head>
<body>
        <!--navbar-->
        <header>
        <a class="logo" href="#">LOGO</a>

        <nav>
            <ul class="nav-links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">PORTOFOLIO</a></li>
                <li><a href="#">ABOUT ME</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>

        </nav>

        <!--logout-->
        <?php
        if (isset($_SESSION['userId']))
           echo' <form class="cta" action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit">LOGOUT</button> 
                </form>';
        ?>
        </header>