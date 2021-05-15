<?php
    require "header.php"
?>


<main>
    <?php

        if (!isset($_SESSION['userId'])) {
                
               echo' <div class="loginForm">';
                   echo '<h1 class="logintitle">LOGIN</h1>';

                    echo'<!--login form-->
                        <form action="includes/login.inc.php" method="POST">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="*********">
                        <button type="submit" name="login-submit">LOGIN</button> 
                        </form>


                        <!--signup-->
                        <a class="signuplink" href="signup.php">Signup</a>

                </div>';

            }

        else {
            echo '<h1 class="contenueH">YOU ARE CONNECTED!</h1>';
        }
        ?>

        


</main>



<?php
    require "footer.php"
?>