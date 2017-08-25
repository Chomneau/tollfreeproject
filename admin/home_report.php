<?php
    include "../include/connection.php";
    $user_query = "SELECT * FROM tbl_users";
    $user_result = mysqli_query($conn, $user_query);
    if(!$user_query){
        die("cannot select data from user table");
    }
    $countUser = mysqli_num_rows($user_result);
    //formate number with 001
    $countUser = sprintf("%02d", $countUser);
    //count all companies
    $company_query = "SELECT * FROM tbl_company";
    $company_result = mysqli_query($conn, $company_query);
    if(!$company_result){
        die("cannot select data from user table");
    }
    $countCompany = mysqli_num_rows($company_result);
    //formate number with 001
    $countCompany = sprintf("%02d", $countCompany);

    //count all companies
    $category_query = "SELECT * FROM tbl_category";
    $category_result = mysqli_query($conn, $category_query);
    if(!$category_result){
        die("cannot select data from user table");
    }
    $countCategory = mysqli_num_rows($category_result);
    //formate number with 001
    $countCategory = sprintf("%02d", $countCategory);
?>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="info-box blue-bg">
            <i class="fa fa-users" aria-hidden="true"></i>
            <div class="count"><?php echo $countUser; ?></div>
            <div class="title">USERS</div>
        </div><!--/.info-box-->
    </div><!--/.col-->

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="info-box green-bg">
            <i class="fa fa-building-o" aria-hidden="true"></i>
            <div class="count"><?php echo $countCompany; ?></div>
            <div class="title">COMPANIES</div>
        </div><!--/.info-box-->
    </div><!--/.col-->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="info-box blue-bg">
            <i class="fa fa-cloud-download"></i>
            <div class="count">003</div>
            <div class="title">On site</div>
        </div><!--/.info-box-->
    </div><!--/.col-->

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="info-box brown-bg">
            <i class="fa fa-tasks" aria-hidden="true"></i>
            <div class="count"><?php echo $countCategory; ?></div>
            <div class="title">Categories</div>
        </div><!--/.info-box-->
    </div><!--/.col-->

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="info-box pink-bg">
            <i class="fa fa-users" aria-hidden="true"></i>

            <div class="count">000</div>
            <div class="title">Visitors Pending</div>
        </div><!--/.info-box-->
    </div><!--/.col-->

    <div class="col-lg-4s col-md-4 col-sm-12 col-xs-12">
        <div class="info-box green-bg">
            <i class="fa fa-cubes"></i>
            <div class="count">000</div>
            <div class="title">Calls pending</div>
        </div><!--/.info-box-->
    </div><!--/.col-->

</div><!--/.row-->