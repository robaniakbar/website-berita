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
<body>
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
						<li><a href="{{ url('/')}}"><i class="ion-help-circled"></i></a></li>
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
				<li><a href="{{ url('home')}}" class="jawa">HOME</a></li>
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
			<div class="h-2-3 h-sm-auto oflow-hidden">
		
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
                        <img src="https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/Apple-iPhone-15-Pro-lineup-hero-230912_Full-Bleed-Image.jpg" width="90" height="400">
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13"><b>iPhone 15 Pro Max specs: thinner bezels, a bigger battery and a periscope lens</b></h3>
							<ul class="list-li-mr-20">
								<li>by <span class="color-primary"><b>Daman Alfarizy</b></span> Februari, 2024</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
				
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<img src="https://www.pcworld.com/wp-content/uploads/2022/12/asus-rog-zephyrus-g14-100836859-orig-2.jpg?quality=50&strip=all" width="500" height="200">
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><a href="#"><b>Asus ROG Zephyrus G14 light laptop a winner</b></a></h4>
								<ul class="list-li-mr-20">
									<li>Feb 25, 2024</li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>76</li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
					<div class="pl-5 ptb-5 pl-sm-0 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<img src="https://smart-phoneprice.com/wp-content/uploads/2023/02/Samsung-Galaxy-S24-Ultra-5G-2-1024x579.jpg" width="500" height="200">
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><a href="#"><b>Samsung S24 Ultra 5G Specifications Leak</b></a></h4>
								<ul class="list-li-mr-20">
									<li>Jan 25, 2024</li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,0</li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
				</div><!-- float-left -->

			</div><!-- h-2-3 -->
			
			<div class="h-1-3 oflow-hidden">
		
				<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<img src="https://th.bing.com/th/id/R.5227b183cbb4985bc5bc86a463171491?rik=uUuVFXhAro6%2fwA&riu=http%3a%2f%2fwww.pixelsham.com%2fwp-content%2fuploads%2f2023%2f06%2fAppleVisionPro.jpg&ehk=oaU5uwyWeOA8zWy9z%2bFRCqhp4pmm0YbpEGTvB%2bWAyFg%3d&risl=&pid=ImgRaw&r=0" width="500" height="200">
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><a href="#"><b>Apple Vision Pro: A New Way To Experience Sports</b></a></h4>
							<ul class="list-li-mr-20">
								<li>Feb 29, 2024</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>29</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<img src="https://arqbahia.com.br/wp-content/uploads/2024/02/xiaomi-14-linha.jpg" width="500" height="200">
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><a href="#"><b>Xiaomi 14: discover the new line of smartphones from the Chinese manufacturer</b></a></h4>
							<ul class="list-li-mr-20">
								<li>Feb 26, 2024</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<img src="https://www.macworld.com/wp-content/uploads/2021/04/ipad-air-2020.jpeg?quality=50&strip=all" width="500" height="200">
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><a href="#"><b>Get a new iPad Air for the lowest price</b></a></h4>
							<ul class="list-li-mr-20">
								<li>Jan 17, 2024</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->
	
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<h4 class="p-title"><b>RECENT NEWS</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="https://rbtv.disway.id/upload/fff359bd588343469b299087237bbb08.jpg" width="150" height="240">
							<h4 class="pt-20"><a href="#"><b>Samsung Galaxy Z Fold 6<br/>Rilis Akhir Juli</b></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Daman Alfarizy,</b></a>
								Feb 12, 2024</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><b>30,190</b></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>47</b></li>
							</ul>
							<p>Informasi mengenai spesifikasi Samsung Galaxy Z Fold 6 terus bermunculan di tahun 2024 ini, salah satunya ponsel lipat ini akan memiliki spesifikasi yang tak jauh berbeda dengan ponsel lipat Samsung lainnya..</p>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="https://th.bing.com/th/id/OIP.K6ySTOdUvGVLPJP0t5hKFAHaFl?rs=1&pid=ImgDetMain"></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Samsung Galaxy A54 5G review</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Daman Alfarizy,</b></span> Jan 25, 2024</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="https://th.bing.com/th/id/OIP.gSgk7vCeH_ZegAv9xJ7kMAHaEJ?rs=1&pid=ImgDetMain"></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Galaxy A23 5G smartphone goes official</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Daman Alfarizy,</b></span> Jan 25, 2024</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="https://www.notebookcheck.net/uploads/tx_nbc2/AsusROGPhone3.JPG" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Asus ROG Phone 3</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Daman Alfarizy,</b></span> Jan 25, 2024</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="https://th.bing.com/th/id/OIP.NS-0RcVEO5jNs5zhkTCdfgAAAA?w=226&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>OPPO Reno8 (CPH2461)</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Daman Alfarizy,</b></span> Jan 25, 2024</h6>
								</div>
							</a><!-- oflow-hidden -->
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<h4 class="p-title mt-30"><b>GADGET MINING NEWS</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="https://i.ytimg.com/vi/y1HLSicgFSs/maxresdefault.jpg" width="100" height="262">
							<h4 class="pt-20"><a href="#"><b>iPhone SE 4 -<br/>HERE'S WHAT TO EXPECT!</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Daman Alfarizy,</b></a>
								Feb 28, 2024</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="https://gizchina.it/wp-content/uploads/2024/01/poco-x6-pro-m6-4g-scheda-tecnica-prezzo-uscita-00-1068x601.jpg" width="100" height="262">
							<h4 class="pt-20"><a href="#"><b>POCO X5 GT is coming,<br/>what to expect?</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Daman Alfarizy,</b></a>
								Jan 28, 2024</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
					
						<div class="col-sm-6">
							<img src="https://www.lifewire.com/thmb/a2bnQxoRZgww4MfCb4UF1C-rLVM=/1764x0/filters:no_upscale():max_bytes(150000):strip_icc()/ScreenShot2021-06-24at9.13.15AM-550a7f07df6e45adac17dc4114b29b8e.png" width="100" height="262">
							<h4 class="pt-20"><a href="#"><b>Microsoft Goes All-In<br/>on Tablets With Windows 11</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Daman Alfarizy,</b></a>
								Feb 13, 2024</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="https://i.ytimg.com/vi/U-hcAfbAbrg/maxresdefault.jpg" width="100" height="262">
							<h4 class="pt-20"><a href="#"><b>MacBook Pro M3 :<br/>Release Date and Price</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Daman Alfarizy,</b></a>
								Feb 3, 2024</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>66</li>
							</ul>
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>VIEW MORE NEWS A GADGET</b></a>
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">						
						<div class="mtb-50">
							<h4 class="p-title"><b>POPULAR POSTS</b></h4>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="https://th.bing.com/th/id/OIP.6KjmAf1mE3yi-gjVrOHDdQHaE7?w=231&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>HP debuts Pavilion Gaming Laptops for mainstream gamers</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Daman Alfarizy,</b>Feb 22, 2024</span></h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="https://avechi.co.ke/mogefov/2021/10/Infinix-zero-x-pro-1-1024x1024.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Infinix Zero X Pro 8gb 256gb | Price in Kenya | Avechi</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Daman Alfarizy,</b>Feb 22, 2024</span></h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="https://th.bing.com/th/id/OIP.5ycD2llQUVwVy7WSB7Pr7gAAAA?rs=1&pid=ImgDetMain" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Apple MacBook Air deal brings laptop to lowest price at Amazon</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Daman Alfarizy,</b>Feb 22, 2024</span></h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="https://th.bing.com/th/id/OIP.AfxsXFfm1B5dScWlCz-1ggAAAA?w=474&h=392&rs=1&pid=ImgDetMain" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>The Dell Latitude 7320 Detachable takes on the Surface Pro 7+ |</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Daman Alfarizy,</b>Feb 22, 2024</span></h6>
								</div>
							</a><!-- oflow-hidden -->
							
						</div><!-- mtb-50 -->
						
						<div class="mtb-50 mb-md-0">
							<h4 class="p-title"><b>NEWSLETTER</b></h4>
							<p class="mb-20">Subscribe to our newsletter to get notification about new updates,
								information, discount, etc..</p>
							<form class="nwsltr-primary-1">
								<input type="text" placeholder="Your email"/>
								<button type="submit"><i class="ion-ios-paperplane"></i></button>
							</form>
						</div><!-- mtb-50 -->
						
					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
	
	<footer class="bg-191 color-ccc">
		
		<div class="container">
			<div class="pt-50 pb-20 pos-relative">
				<div class="abs-tblr pt-50 z--1 text-center">
					<div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="images/map.png" alt=""></div>
				</div>
				<div class="row">
				
					<div class="col-sm-4">
						<div class="mb-30">
							<a href="#"><img src="images/logo.white.png"></a>
							<p class="mtb-20 color-ccc">Gadget is a loanword taken from English, which if interpreted into a small size electronic device with a special function and must undergo changes.</p>
							<p class="color-ash"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website A Phaeticth <i class="ion-heart" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>Creadits :</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Web creation is created by very adequate finger movements</b></a>
								<h6 class="mt-10">Feb 25, 2024</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>For Me Daman Alfarizy</b></a>
								<h6 class="mt-10">Mei 06, 2006</h6>
							</div>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Its Make or Break Time for Gadgets</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>Any sufficiently advanced technology is equivalent to magic.</b></a>
								<h6 class="mt-10">Jan 25, 2024</h6>
							</div>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
				</div><!-- row -->
			</div><!-- ptb-50 -->
			
			<div class="brdr-ash-1 opacty-2"></div>
			
			<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
			
				<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
					<li><a class="pl-0 pl-sm-10" href="#">Terms & Conditions</a></li>
					<li><a href="#">Privacy policy</a></li>
					<li><a href="#">Jobs advertising</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
				<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
					<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
					<li><a href="#"><i class="ion-social-twitter"></i></a></li>
					<li><a href="#"><i class="ion-social-google"></i></a></li>
					<li><a href="#"><i class="ion-social-instagram"></i></a></li>
					<li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
				</ul>
				
			</div><!-- oflow-hidden -->
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/tether.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.js"></script>
	
	<script src="common/scripts.js"></script>
	
</body>
</html>
