<?php
            include "../include/connection.php";
                if(isset($_POST['submit'])) {


                    $username = mysqli_real_escape_string($conn, $_POST['username']);
                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $password = mysqli_real_escape_string($conn, $_POST['password']);
                    $con_pass = mysqli_real_escape_string($conn, $_POST['conpass']);
                    $role = mysqli_real_escape_string($conn, $_POST['role']);

                    date_default_timezone_set('Asia/Phnom_Penh');
                    $create_date = date('Y-m-d H:i:s', time());




            //check condition for input data
                    if(!isset($username) || $username == ''){
                        $require_username = ("Please enter your first name!");
                        header("Location:user_add_form.php?error=".urlencode($require_username));
                        exit();
                    }

                    elseif (!isset($email) || $email == ''){
                        $require_email = ("Please enter your Email!");
                        header("Location:user_add_form.php?error=".urlencode($require_email));
                        exit();
                    }

                    elseif (!isset($password) || $password == ''){
                        $require_password = ("Please confirm password");
                        header("Location:user_add_form.php?error=".urlencode($require_password));
                        exit();
                    }
                    elseif (!isset($con_pass) || $con_pass == ''){
                        $require_conpassword = ("Please confirm password");
                        header("Location:user_add_form.php?error=".urlencode($require_conpassword));
                        exit();
                    }

                    else{

                        $query = "SELECT 1 FROM tbl_users WHERE email='$email' OR username = '$username'";
                        $select_Result= mysqli_query($conn, $query);
                        if(mysqli_num_rows($select_Result)>0) {
                            $email_match = "Email already exist please enter other email";
                            header("Location:user_add_form.php?error=".urlencode($email_match));
                            exit();
                        }

                        elseif ($password != $con_pass){
                            $Pass_Not_Match= "confirm password not match";
                            header("Location:user_add_form.php?error=".urlencode($Pass_Not_Match));
                            exit();
                        }
                    else{
                        $insert = "INSERT INTO tbl_users(username, email, password, user_role ,create_date)
                           VALUES('$username', '$email', '$password','$role','$create_date')";

                        if (!mysqli_query($conn, $insert)) {
                            die('Can not insert data to database' . mysqli_error($conn));
                        } else {
                            $display="record added";
                            echo $display;
                            header("Location:user_view.php?error=".urlencode($display));
                            exit();
                        }
                        }//end if validate email and password match
                    }

                    //end else

                }



