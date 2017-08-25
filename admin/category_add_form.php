
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
                        <li><i class="fa fa-pencil" aria-hidden="true"></i>Add new category <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                    </ol>
                </div>
            </div>
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="category_insert_function.php">

                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">

                            <!-- logo -->
                            <input type="text" name="cat_name" id="category" required="required" class="form" placeholder="new category" />
                            <!-- name -->
                            <!-- Bottom Submit -->

                            <!-- Clear -->
                            <div class="clear"></div>

                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <input type="text" name="cat_icon" id="category" required="required" class="form" placeholder="input icon link" />
                            <p> please visit:<a href="http://fontawesome.io/icons/" target="_blank">fontawesome</a> to get the icon. copy the icon that match with your category and paste here. it look like this</br> &lt;i&gt; class="fa fa-credit-card-alt" aria-hidden="true">&lt;/i&gt;</p>
                        </div>

                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Save Now</button>
                        </div><!-- End Bottom Submit -->
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
