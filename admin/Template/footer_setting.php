
<?php include_once "header_admin.php" ?>
<!-- container section start -->
<section id="container" class="" style="overflow: scroll">
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
                        <li><i class="fa fa-plus-square" aria-hidden="true"></i>Footer Setting <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                    </ol>
                </div>
            </div>
            <!-- add new content of about form -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="footer_insert_function.php" enctype="multipart/form-data">
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                                <!-- Message -->
                                <label>About Description</label>
                                <textarea name="en_about" id="message"  class="form textarea"  placeholder="Description"></textarea>
                                <!-- ចំណងជើង -->
                                <label for="address">Facebook</label>
                                <input type="text" name="facebook" id="name"  class="form" placeholder="Facebook url" />
                                <label for="address">Twitter</label>
                                <input type="text" name="twitter" id="name"  class="form" placeholder="twitter url" />
                                <label for="address">Youtube</label>
                                <input type="text" name="youtube" id="name"  class="form" placeholder="Facebook url" />

                            </div><!-- End Right Inputs -->

                        </div><!-- End Left Inputs -->

                        <!-- Right Inputs -->
                        <!-- Input Khmer Description-->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <label for="khmerdecription" style="font-family: Content">អំពីយើង</label>
                            <!-- ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ -->
                            <textarea name="kh_about"  id="message" class="form textarea"  placeholder="ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ "></textarea>
                            <label for="address">Address</label>
                            <input type="text" name="address" id="name"  class="form" placeholder="address" />
                            <label for="address">phone</label>
                            <input type="text" name="phone" id="name"  class="form" placeholder="phone" />
                            <label for="address">email</label>
                            <input type="text" name="email" id="name" class="form" placeholder="email" />
                        </div><!-- End Right Inputs -->



                        <!-- Bottom Submit -->

                        <div class="relative fullwidth col-xs-12" style="margin-top: 20px">
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
        <?php require_once("javascript_footer.php") ?>

