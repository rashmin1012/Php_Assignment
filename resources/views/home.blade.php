<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Laravel HomeWork</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		    <!-- Blabk .... Header -->
			<div id="header-wrapper" class="wrapper">
				<div id="header">
					
					<!-- Logo -->
						<div id="logo">
							<h1>Laravel Blog</h1>
							<p>A free responsive site template</p>
						</div>
						<div>
    						    			
 						</div>

					
					<!-- Tabs -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/introduction')}}">Introduction</a></li>
								<li><a href="{{url('/achievement')}}">Achievements</a></li>
							</ul>
						</nav>

				</div>
			</div>

            @yield('intro');
            @yield('achieve');
		
		    <!-- Footer -->
			<div id="footer-wrapper" class="wrapper">
				<div class="title">Footer</div>
				<div id="footer" class="container">
					<header class="style1">
						<h2>Like it?</h2>
						<p>
							Your Feedbacks are Welcome ... !!!
						</p>
					</header>
					<hr />
					<div class="row 150%">
						<div class="6u">

							<!-- Contact Form -->
								<section>
									<form method="post" action="#">
										<div class="row 50%">
											<div class="6u">
												<input type="text" name="name" id="contact-name" placeholder="Name" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="contact-email" placeholder="Email" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="style1" value="Send" /></li>
													<li><input type="reset" class="style2" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>

						</div>
						<div class="6u">
						
							<!-- Contact -->
								<section class="feature-list small">
									<div class="row">
										<div class="6u">
											<section>
												<h3 class="icon fa-home">Mailing Address</h3>
												<p>
													Computer Engineering Department<br />
													SVIT, Vasad<br />
													Anand, GJ 388306
												</p>
											</section>
										</div>
										<div class="6u">
											<section>
												<h3 class="icon fa-comment">Social</h3>
												<p>
													<a href="#">@link 1</a><br />
													<a href="#">linkedin.com/Link 2</a><br />
													<a href="#">facebook.com/Link 3</a>
												</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u">
											<section>
												<h3 class="icon fa-envelope">Email</h3>
												<p>
													<a href="#">rashmin@compit.com</a>
												</p>
											</section>
										</div>
										<div class="6u">
											<section>
												<h3 class="icon fa-phone">Phone</h3>
												<p>
													(091) 12-345-67890
												</p>
											</section>
										</div>
									</div>
								</section>
								
						</div>
					</div>
					<hr />
				</div>
				<div id="copyright">
					<ul>
						<li>&copy; copyright</li><li>Design: <a href="http://html5up.net">Free Template from themezy</a></li>
					</ul>
				</div>
			</div>

	</body>
</html>