<?php
/**
 * Created by PhpStorm.
 * User: chomneau
 * Date: 8/5/17
 * Time: 1:30 PM
 */
session_start();
include "connection.php";

if(isset($_POST['login'])){
     $email =  mysqli_real_escape_string($conn, $_POST['email']);
     $password =  mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM tbl_users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn, $query);

    if(!$select_user_query){
        die("QUERY FAILED".mysqli_error($conn));
    }
    while ($row = mysqli_fetch_array($select_user_query)){
        $db_id = $row['id'];
        $db_username = $row['username'];
        $db_email = $row['email'];
        $db_password = $row['password'];
        $db_user_role = $row['user_role'];
    }

    if($email !== $db_email && $password !== $db_password) {
        $msg = "email and password not correct!";
        header("Location:../login.php?message=".urlencode($msg));

    }else if($email === $db_email && $password === $db_password){

        $_SESSION['username'] = $db_username;
        $_SESSION['email'] = $db_email;
        $_SESSION['user_role'] = $db_user_role;
        $_SESSION['id'] = $db_id;

        header("Location:../admin/");
    }else{
        header("Location:../login.php");

    }




}