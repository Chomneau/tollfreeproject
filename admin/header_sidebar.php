<?php if(!isset($_SESSION)){
    session_start();
} ?>
<?php
    if(!isset($_SESSION['user_role'])){
       // if($_SESSION['user_role']!=='admin'){
            header("Location:../index.php");
     //   }
    }
?>



<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="index.php" class="logo">TOLL FREE <span class="lite">Admin</span></a>
    <!--logo end-->

    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
            <!--user login dropdown start-->
            <li>
                <a href="../index.php" target="_blank"><span><i class="fa fa-globe" aria-hidden="true"></i> go site</span></a>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
<!--                                <img alt="" src="img/chomneau.jpg">-->
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                    <span class="username"><?php echo $_SESSION['username']?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li>
                        <a href="../include/logout.php"><i class="icon_key_alt"></i> Log Out</a>
                    </li>

                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>