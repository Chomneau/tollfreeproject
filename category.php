<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/megastyle.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/custom.css"> <!-- CSS reset -->




	<title>Cambodia Toll Free | Tollfreetc.com</title>
</head>
<body>
<header class="cd-main-header">
	<a class="cd-logo" href="index.php"><img src="img/cd-logo.png" alt="Logo" width="190px" style="margin-top: 5px" ></a>
	<!--		<h5>Cambodia Toll Free</h5>-->

	<ul class="cd-header-buttons">
		<li><a class="cd-search-trigger" href="#cd-search">Search<span></span></a></li>
		<li><a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a></li>
	</ul> <!-- cd-header-buttons -->
</header>

<main class="cd-main-content">
	<!-- your content here -->
	<div class="container">
		<div class="row">

			<?php
			include "connection.php";
			if(isset($_POST['search'])){    //trigger button click

				$search=$_POST['search'];

				$query="select * from tbl_company where company_name like '%{$search}%'  || com_category like '%{$search}%'";
				$result =mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_array($result)) :?>
						<div class="company-contact col-sm-4 col-md-4 col-xs-12">

							<div class="logo-company col-md-3 col-xs-4">

								<img src="<?php echo "admin/logo_upload/".$row['logo']?>" width="70px" height="70px">

							</div>

							<div class="title col-md-9 col-xs-8">
								<ul class="list-item">

									<li><h6><?php echo $row['company_name']?></h6></li>
									<li style="margin-top: -10px;"><i class="fa fa-credit-card" aria-hidden="true"></i> <?php echo $row['com_category']?></li>
									<li class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i><a href="tel:<?php echo $row['com_phone']?>"> <?php echo $row['com_phone']?></a> </li>
									<li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo $row['com_did']?>"> <?php echo $row['com_did']?></a> </li>
								</ul>

							</div>

						</div>

					<?php endwhile; ?>


					<?php
				}else{
					echo "search is result not found";
				}
			}else{
				$query=mysqli_query($conn, "select * from tbl_company");
				while ($row = mysqli_fetch_array($query)) :?>
					<div class="company-contact col-sm-4 col-md-4 col-xs-12">

						<div class="logo-company col-md-3 col-xs-4">


							<img src="<?php echo "logo_upload/".$row['logo']?>" width="70px" height="70px">

						</div>

						<div class="title col-md-9 col-xs-8">
							<ul class="list-item">

								<li><h6><?php echo $row['company_name']?></h6></li>
								<li style="padding-top: -10px"><i class="fa fa-credit-card" aria-hidden="true"></i> <?php echo $row['com_category']?></li>
								<li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo $row['com_phone']?>"> <?php echo $row['com_phone']?></a> </li>
							</ul>

						</div>

					</div>

				<?php endwhile; ?>
			<?php  }; ?>


		</div><!--End row-->

	</div><!--End container-->

</main>

<div class="cd-overlay"></div>

<nav class="cd-nav">
	<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
		<li><a href="#">Home</a></li>





		<li class="has-children">
			<a href="http://codyhouse.co/?p=409">Browse Industry</a>
			<ul class="cd-nav-icons is-hidden">
				<li class="go-back"><a href="#0">Menu</a></li>
				<li class="see-all"><a href="#">Browse Industry</a></li>
				<li>
					<a class="cd-nav-item item-1" href="#">
						<h4>Bank & Finance</h4>
						<p>Find all Bank and Micro-finance that use Toll Free</p>
					</a>
				</li>

				<li>
					<a class="cd-nav-item item-2" href="#">
						<h4>Insurance</h4>
						<p>Find all insurance that use Toll Free</p>
					</a>
				</li>

				<li>
					<a class="cd-nav-item item-3" href="#">
						<h4>Food & Restaurant</h4>
						<p>Find all food & Restaurant here</p>
					</a>
				</li>

				<li>
					<a class="cd-nav-item item-4" href="#">
						<h4>Drinks</h4>
						<p>Drink industries like Coca Cola</p>
					</a>
				</li>

				<li>
					<a class="cd-nav-item item-5" href="#">
						<h4>Transportation</h4>
						<p>Taxi, Bus, Truck Services</p>
					</a>
				</li>

				<li>
					<a class="cd-nav-item item-6" href="#">
						<h4>Pharmacies</h4>
						<p>Find Medical industries</p>
					</a>
				</li>

				<li>
					<a class="cd-nav-item item-7" href="#">
						<h4>Tourism & Travel</h4>
						<p>Find the place to go from here</p>
					</a>
				</li>

				<li>
					<a class="cd-nav-item item-8" href="#">
						<h4>Real Estate</h4>
						<p>Want to know about land, house, condo price?</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="has-children">
			<a href="#">Our Services</a>

			<ul class="cd-nav-gallery is-hidden">
				<li class="go-back"><a href="#0">Menu</a></li>
				<li class="see-all"><a href="#">Browse Services</a></li>
				<li>
					<a class="cd-nav-item" href="#">
						<img src="img/img.jpg" alt="Product Image">
						<h4 style="padding-top: 20px">Call Center</h4>
					</a>
				</li>

				<li>
					<a class="cd-nav-item" href="#">
						<img src="img/img.jpg" alt="Product Image">
						<h4 style="padding-top: 20px">Booking System</h4>
					</a>
				</li>

				<li>
					<a class="cd-nav-item" href="#">
						<img src="img/img.jpg" alt="Product Image">
						<h4 style="padding-top: 20px">Toll Free Service</h4>
					</a>
				</li>

				<li>
					<a class="cd-nav-item" href="#">
						<img src="img/img.jpg" alt="Product Image">
						<h4 style="padding-top: 20px">SMS</h4>
					</a>
				</li>
			</ul>
		</li>

		<li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
	</ul> <!-- primary-nav -->
</nav> <!-- cd-nav -->

<div id="cd-search" class="cd-search">
	<form>
		<input type="search" placeholder="Search...">
	</form>
</div>





<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>