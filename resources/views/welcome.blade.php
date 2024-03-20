<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>PHAETICTH</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
	
	<link href="fonts/ionicons.css" rel="stylesheet">
	
		
	<link href="common/styles.css" rel="stylesheet">
	
	
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
	<header>

		<div class="bg-191">
			<div class="container">	
				<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
				
					<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
						<li><a class="pl-0 pl-sm-10" href="#">About</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">Submit Press Release</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
						<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-instagram"></i></a></li>
					</ul>
					
				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- bg-191 -->
		
		<div class="container">
			<a class="logo" href="index.html"><img src="images/logo.black.png" alt="Logo"></a>
			
			<a class="right-area src-btn" href="#" >
				<i class="active src-icn ion-search"></i>
				<i class="close-icn ion-close"></i>
			</a>
			<div class="src-form">
				<form>
					<input type="text" placeholder="Search here">
					<button type="submit"><i class="ion-search"></i></a></button>
				</form>
			</div><!-- src-form -->
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<ul class="main-menu" id="main-menu">
				<li><a href="{{ url('home')}}">HOME</a></li>
				<li><a href="{{ url('smartphone')}}">SMARTPHONE</a></li>
				<li><a href="{{ url('laptop')}}">LAPTOP</a></li>
				<li><a href="{{ url('tablets')}}">TABLETS</a></li>
				
				<li>
					@if (Route::has('login'))
						@auth
							<a href="{{ url('/admin/dashboard') }}">DASHBOARD</a>
						@else
							<a href="{{ url('/admin/login') }}">LOGIN</a>
						@endauth
					@endif
				</li>

			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
	
	<div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden container2 mt-5">
		    <h1 class="kotik"> WELCOME TO PHAETICTH</h1>
				<p class="kotak">Welcome to the Phaeticth website for you users, this website was created specifically for those of you who are confused about finding solutions for smartphones, laptops or tablets, so for all of you users who are looking for website recommendations, you can just visit the Phaeticth website for free.Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde explicabo iusto nesciunt fugiat nihil illo cumque odit possimus beatae! Alias porro sit est, accusamus libero voluptatibus corporis officiis possimus provident?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, doloribus, necessitatibus beatae recusandae natus aliquid numquam qui, delectus asperiores mollitia minima suscipit sit deleniti ut accusantium cupiditate temporibus expedita sunt architecto harum blanditiis magnam excepturi? Porro enim totam adipisci hic.
				</p>
			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->
	
	<footer class="bg-191 color-ccc">
		
		<div class="container">
			<div class="pt-50 pb-20 pos-relative">
				<div class="abs-tblr pt-50 z--1 text-center">
					<div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="images/logo.white.png" alt=""></div>
				</div>
				<div class="row">
				
					<div class="col-sm-10">
						<div class="mb-30">
							{{-- <a href="#"><img src="images/logo.white.png"></a> --}}


					</div><!-- col-md-4 -->
					
					
					
					
					
				</div><!-- row -->
			</div><!-- ptb-50 -->
			
			<div class="brdr-ash-1 opacty-2"></div>
			
			
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/tether.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.js"></script>
	
	<script src="common/scripts.js"></script>
	
</body>
</html>
