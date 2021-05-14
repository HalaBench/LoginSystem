<?php
    require "header.php"
?>


<main>


        <div class="loginForm">
            <p class="logintitle">LOGIN</p>

            <!--login form-->
            <form action="includes/login.inc.php" method="POST">
               <input type="text" name="mailuid" placeholder="Username/E-mail...">
               <input type="password" name="pwd" placeholder="*********">
               <button type="submit" name="login-submit">LOGIN</button> 
            </form>


            <!--signup-->
            <a class="signuplink" href="signup.php">Signup</a>

        </div>


</main>



<?php
    require "footer.php"
?>