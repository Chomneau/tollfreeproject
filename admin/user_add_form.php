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
              <!--Display head of content ex: Dashboard/Home/add about-->
              <div class="row">
                  <div class="col-lg-12">
                      <ol class="breadcrumb">
                          <li><i class="fa fa-pencil" aria-hidden="true"></i>Add new user <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                      </ol>
                  </div>
              </div>

              <div class="inner contact">
                  <!-- Form Area -->
                  <div class="contact-form">
                      <!-- Form -->
                      <form id="contact-us" method="post" action="user_add_function.php">
                          <div class="col-xs-4 wow animated slideInLeft" data-wow-delay=".5s"></div>
                          <!-- Left Inputs -->
                          <div class="col-xs-4 wow animated slideInLeft" data-wow-delay=".5s">

                              <!-- logo -->
                              <input type="text" name="username" id="username" required="required" class="form" placeholder="username" />
                              <input type="email" name="email" id="email" required="required" class="form" placeholder="email address" />
                              <input type="password" name="password" id="password" required="required" class="form" placeholder="password" />
                              <input type="password" name="conpass" id="conpass" required="required" class="form" placeholder="confirm password" />
                              <!-- name -->
                              <select name="role">
                                  <option value="select role">select role</option>
                                  <option value="admin">admin</option>
                                  <option value="user">user</option>
                              </select>
                              <!-- Bottom Submit -->
                              <br><br>
                              <div class="relative fullwidth col-xs-12">
                                  <!-- Send Button -->
                                  <button type="submit" id="submit" name="submit" class="form-btn semibold">Save Now</button>
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


          <div class="alert alert-danger text-center" >
              <?php if(isset($_GET['error'])) :?>
                  <h4><i class="fa fa-check-square" aria-hidden="true"></i>
                      <?php echo $_GET['error']; ?></h4>
              <?php endif; ?>
          </div>

          <!-- include javascript code from file -->
          <?php require_once("javascript_footer.php") ?>
            

