<?php include_once "header_admin.php" ?>
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
            <?php require_once ("dashboard_bar_display.php")?>
            <!-- add new content of about form -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="publication_insert_function.php" enctype="multipart/form-data">
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                                <!-- Name -->
                                <input type="text" name="en_title" id="name" required="required" class="form" placeholder="Title" />
                                <!-- Message -->
                                <textarea name="en_body" id="message" class="form textarea"  placeholder="Description"></textarea>
                                <div class="form">
                                    <label for="Upload photo">Upload Image</label>
                                    <div style="float:left; margin: auto">
                                        <input type="hidden" name="size" value="1000000">
                                        <input type="file" name="pic"><br>
                                    </div>
                                </div>
                            </div><!-- End Right Inputs -->
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <!-- Input Khmer Description-->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- ចំណងជើង -->
                            <input type="text" name="kh_title" id="name" required="required" class="form" placeholder="ចំណងជើង" />
                            <!-- ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ -->
                            <textarea name="kh_body" id="message" class="form textarea"  placeholder="ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ "></textarea>
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

