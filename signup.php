<?php
    require "header.php"
?>


<main>


        <div class="signupForm">
            <h1 class="logintitle">SIGNUP</h1>

            <?php
            #error messages
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'emptyfields') {
                        echo'<p class="signuperrors">Fill in all fields!</p>';
                    }
                   
                }
            ?>

            <!--signup form-->
            <form action="includes/signup.inc.php" method="POST">
               <input type="text" name="uid" placeholder="Username">
               <input type="text" name="mail" placeholder="E-mail">
               <input type="password" name="pwd" placeholder="*********">
               <input type="password" name="pwd-repeat" placeholder="*********">
               <button type="submit" name="signup-submit">SIGNUP</button> 
            </form>


            <!--login-->
            <a class="signuplink" href="#">Login</a>

        </div>


</main>



<?php
    require "footer.php"
?>