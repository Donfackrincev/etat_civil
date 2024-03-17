<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Ecommerce</title>

 		   <!-- Google font -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">


            <link type="text/css" rel="stylesheet" href="{{ asset('aceuil/css/bootstrap.min.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('aceuil/css/slick.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('aceuil/css/slick-theme.css') }}" />
            <link type="text/css" rel="stylesheet" href="{{ asset('aceuil/css/nouislider.min.css') }}" />
            <link rel="stylesheet" href="{{ asset('aceuil/css/font-awesome.min.css') }}">
            <link type="text/css" rel="stylesheet" href="{{ asset('aceuil/css/style.css') }}" />


            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="{{url('welcome')}}"><i class="fa fa-user-o"></i> acceuil</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->


					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->



		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Commander vos articles</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="nom" placeholder="Entrer votre nom et prenom">
							</div>

							<div class="form-group">
								<input class="input" type="tel" name="numero" placeholder="Entrer votre numero de telephone">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder=" entrer votre Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="pays" placeholder="entrer votre pays">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="vile" placeholder="entrer votre ville">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="adresse" placeholder="entrer votre adresse">
							</div>

							<div class="form-group">
								<input class="input" type="text" name="produit" placeholder="entrer le produit">
							</div>

							<div class="form-group">
								<input class="input" type="number" name="quantiter" placeholder="entrer la quantiter">
							</div>

							<div class="form-group">
								<input class="input" type="number" name="prix" placeholder="prix unitaire">
							</div>

							<div class="form-group">
								<input class="input" type="number" name="prixtotal" placeholder="prix total">
							</div>

                            <input type="submit" class="primary-btn order-submit">

						</div>
						<!-- /Billing Details -->


					</div>



                    <div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Details de la commande</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUIT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>Ordinateur dell</div>
									<div>980.00 XAF</div>
								</div>
								<div class="order-col">
									<div>Casque</div>
									<div>980.00 XAF</div>
								</div>
							</div>
							<div class="order-col">
								<div>Ecouteur</div>
								<div><strong>0 XAF</strong></div>
							</div>
							<div class="order-col">
								<div><strong>PRIX TOTAL</strong></div>
								<div><strong class="order-total">2940.00 XAF</strong></div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>





		<!-- jQuery Plugins -->
	    <script src="{{ asset('aceuil/js/jquery.min.js') }}"></script>
    <script src="{{ asset('aceuil/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('aceuil/js/slick.min.js') }}"></script>
    <script src="{{ asset('aceuil/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('aceuil/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('aceuil/js/main.js') }}"></script>

	</body>
</html>
