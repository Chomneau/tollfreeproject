
<?php include "head.php";?>
<main class="cd-main-content">
    <!-- your content here -->
    <div class="container">
        <div class="row">

            <?php
            include "include/connection.php";

            $query="select * from tbl_company WHERE com_category = 'Pharmacy'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result)> 0 ){
                while ($row = mysqli_fetch_array($result)) :?>
                    <div class="company-contact col-sm-4 col-md-4 col-xs-12">

                        <div class="logo-company col-md-3 col-xs-4">


                            <img src="<?php echo "logo_upload/" . $row['logo'] ?>" width="70px" height="70px">

                        </div>

                        <div class="title col-md-9 col-xs-8">
                            <ul class="list-item">

                                <li><h6><?php echo $row['company_name'] ?></h6></li>
                                <li style="margin-top: -10px;"><i class="fa fa-credit-card" aria-hidden="true"></i><?php echo $row['com_category']?></li>
                                <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><a
                                        href="tel:<?php echo $row['com_phone'] ?>"> <?php echo $row['com_phone'] ?></a>
                                </li>
                                <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo $row['com_did']?>"> <?php echo $row['com_did']?></a> </li>
                            </ul>

                        </div>

                    </div>

                <?php endwhile; ?>
                <?php
            }
            else{
                echo "<div class='company-contact col-sm-4 col-md-4 col-xs-12' style='font-size: 18px; padding-top: 25px'>";
                echo "<img src='image/Warning.png' width='50px'>
                        <span style='color: #0A5175'>Sorry! This industry not yet available!</span>";
                echo "</div>";
            }


            ?>


        </div><!--End row-->

    </div><!--End container-->


</main>
<?php include "foot.php";?>

