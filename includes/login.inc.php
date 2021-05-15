<?php
    //click login button
  /*if 1*/
    if (isset($_POST['login-submit'])) {

            //database connection
            require 'dbh.inc.php';

            //get users inputs
            $mailuid = $_POST['mailuid'];
            $password = $_POST['pwd'];
        


            //error empty fields
            #if 2
            if (empty($mailuid) || empty($password)) {
                
                header("Location: ../index.php?error=emptyfields");
                exit();
            }
            #else 2
            else 
            {
                $sql = "SELECT * FROM users2 WHERE uidUsers =? OR emailUsers=?;";
                $stmt = mysqli_stmt_init($conn);

                #if 3
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../index.php?error=sqlerror");
                    exit();
                }
                #else 3
                else 
                {
                    mysqli_stmt_bind_param($stmt, "ss",$mailuid,$mailuid);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    #if 4
                    if ($row = mysqli_fetch_assoc($result)) {
                        //dehash and verify passeword
                        $pwdCheck = password_verify($password, $row['pwdUsers'] );
                        #if 5
                        if ($pwdCheck == false) 
                        {
                            header("Location: ../index.php?error=wrongpwd1");
                            exit();
                        }
                        #else 5 if 6
                        elseif($pwdCheck == true)
                        {
                            session_start();
                            $_SESSION['userId'] = $row['idUsers'];
                            $_SESSION['userUid'] = $row['uidUsers'];

                            //connected!
                            header("Location: ../index.php?login=success");
                        }
                        #else 6
                        else 
                        {
                            header("Location: ../index.php?error=wrongpwd2");
                            exit();
                        }

                    }
                    #else 4
                    else 
                    {
                        header("Location: ../index.php?error=nouser");
                        exit();
                    }
                }



            }
































    }/*else 1*/ 
    else 
    {
        header("Location: ../index.php");
        exit();
    }

    ?>