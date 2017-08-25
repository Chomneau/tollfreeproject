<?php
//include "connection.php";

include_once "header_admin.php";
?>
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
                      <div class="row">
                          <div class="col-lg-12">
                              <ol class="breadcrumb">
                                  <li><i class="fa fa-user-o" aria-hidden="true"></i> Welcome to <b><?php echo $_SESSION['username'] ?></b> <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                              </ol>
                          </div>
                      </div>

                      <?php require_once ("home_report.php")?>
                      <!-- display all user from database -->
                      <?php require_once ("display_all_user.php")?>

                  </section> <!-- End of section -->

                  <!-- include javascript code from file -->

                  
                  <?php require_once("javascript_footer.php") ?>



