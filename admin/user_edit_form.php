
<?php
include "../include/connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $role = mysqli_real_escape_string($conn, $_POST['role']);

        date_default_timezone_set('Asia/Phnom_Penh');
        $create_date = date('Y-m-d H:i:s', time());

        $update_user= "UPDATE tbl_users SET username='$username', email='$email', password ='$password', user_role='$role', create_date='$create_date' WHERE id = '{$id}'";
        $result = mysqli_query($conn, $update_user);
        if(!$result){
            die("Can not update!".mysqli_error($conn));
        }
        else{
            $meg = "Record update successfully!";
            header("Location:user_view.php?error=".urlencode($meg));
            exit();

        }
    }

    $query = "SELECT * FROM tbl_users WHERE id = '$id' ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Can not select data from database" . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($result);

}
?>


<?php include_once "header_admin.php"?>

<!-- container section start -->
<section id="container" class="">

    <!--include top content of dashboard page like username at the right of the top-->
    <?php require_once("header_sidebar.php") ?>
    <!--header end-->

    <!--sidebar start-->
    <?php require_once("sidebar.php") ?>
    <!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--header end-->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-pencil" aria-hidden="true"></i> <strong>Edit User</strong>  <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                </ol>
            </div>
        </div>
        <!--sidebar start-->
        <div class="inner contact">
            <!-- Form Area -->
            <div class="contact-form">
                <!-- Form -->
                <form id="contact-us" method="post" action=" ">
                    <div class="col-xs-4 wow animated slideInLeft" data-wow-delay=".5s">

                    </div>
                    <!-- Left Inputs -->
                    <div class="col-xs-4 wow animated slideInLeft" data-wow-delay=".5s">

                        <!-- logo -->
                        <label>Username :</label>
                        <input type="text" name="user" id="username" value="<?php echo $row['username']; ?>" required="required" class="form" placeholder="username" />
                        <label>Email :</label>
                        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required="required" class="form" placeholder="email address" />
                        <label>Password :</label>
                        <input type="password" name="password" value="<?php echo $row['password']; ?>" id="password" required="required" class="form" placeholder="password" />

                        <!-- role-->

                        <select name="role">
                            <option value="select role">select role</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>

                        <br><br>
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Update Now</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->

                    </div><!-- End Left Inputs -->
                    <!-- Right Inputs -->
                    <div class="col-xs-4 wow animated slideInLeft" data-wow-delay=".5s"></div>
                </form>

            </div><!-- End Contact Form Area -->
        </div><!-- End Inner -->

        <!-- End query all users to display dashboard -->
    </section> <!-- End of section -->

    <div class="success" style=" background-color: #ffffff; text-align: center; font-weight: bold">
        <?php if(isset($_GET['error'])) :?>
            <h4><i class="fa fa-check-square" aria-hidden="true"></i>
                <?php echo $_GET['error']; ?></h4>
        <?php endif; ?>
    </div>
<?php include_once "javascript_footer.php"?>
