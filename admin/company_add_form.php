
<!--about-->
<?php include_once "header_admin.php"?>
<!-- container section start -->
<section id="container" class="" style="position: fixed">
    <!--include top content of dashboard page like username at the right of the top-->
    <?php require_once("header_sidebar.php") ?>
    <!--header end-->

    <!--sidebar start-->
    <?php require_once("sidebar.php") ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--Display head of content ex: Dashboard/Home/add about-->
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-pencil" aria-hidden="true"></i>Add New Company <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                    </ol>
                </div>
            </div>
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" action="company_insert_function.php" method="POST" enctype="multipart/form-data">

                        <div class="col-xs-3 wow animated slideInLeft" data-wow-delay=".5s"></div>
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <div class="form">
                                <label for="Upload photo">Upload company Logo</label>
                                <div style="float: left; margin: auto">
                                    <input type="hidden" name="size" value="1000000">
                                    <input type="file" name="pic"></br>
                                </div>
                            </div>

                            <input type="text" name="com_name" id="name" required="required" class="form" placeholder="Company Name" />
                            <!-- Message -->
                            <!-- Industry category -->
                            <select name="com_category" class="form" style=" color:#000000; width:100%; height: 50px" placeholder="Select industry category">
                                //php code
                                <option>Please select industry category</option>
                                <?php
                                include "../include/connection.php";
                                $query = "SELECT * FROM tbl_category ORDER BY cat_name ASC ";
                                $result = mysqli_query($conn, $query);
                                if($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option>". $row['cat_icon'].$row['cat_name'] . "</option>";

                                    }
                                }
                                ?>
                            </select>

                            <input type="text" name="com_phone" id="name" required="required" class="form" placeholder="company phone number(1800)" />
                            <input type="text" name="com_did" id="name" required="required" class="form" placeholder="company phone number(023)" />

                        </div><!-- End Left Inputs -->
                        <div class="col-xs-3 wow animated slideInLeft" data-wow-delay=".5s"></div>
                        <!-- Right Inputs -->
                        <!-- Input Khmer Description-->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">

                        </div><!-- End Right Inputs -->



                        <!-- Bottom Submit -->

                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Save Now</button>

                        </div><!-- End Bottom Submit -->

                        <!-- Clear -->
                        <div class="clear"></div>


                    </form>

                    <!-- Your Mail Message -->
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
            <div class="success">
                <?php if(isset($_GET['error'])) :?>
                    <h4><i class="fa fa-check-square" aria-hidden="true"></i>
                        <?php echo $_GET['error']; ?></h4>
                <?php endif; ?>
            </div>




        </section> <!-- End of section -->

        <!-- include javascript code from file -->
        <?php require_once ("javascript_footer.php")?>

        </section>
