<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>高科大學生議會</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/splogo.png') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141147198-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-141147198-1');
		</script>

	</head>
	<style>
	</style>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<img src="{{ asset('images/image.png') }}"> 
						<a href="/">
							<a href="/"><h1 style="font-size:1em; font-weight:bold;">高科大 學生議會</h1></a>
						</a>

						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="/">首頁</a></li>
											<li><a href="https://drive.google.com/open?id=12lGM-A3cyeNIoHwIaVF41zQXyN-CH8FH" target="_blank" rel="noopener noreferrer">法規編定</a></li>
											<li><a href="https://drive.google.com/drive/u/1/folders/1xlwveAZLA6WQ8eDrCoDRJanAiW0d0dlv?fbclid=IwAR3ZknGSfeec6VSOywmBOwTIr_o935u5k7Kd9R7KMtLaQRTzcg4IliM2_pI" target="_blank" rel="noopener noreferrer">預算公佈</a></li>
											<li><a href="https://drive.google.com/drive/folders/1eBAHx8Q1IvdY2mMpz2k_zWbud-4JyV4q?usp=sharing" target="_blank" rel="noopener noreferrer">會議資料公開</a></li>
											<li><a href="{{ route('show_all_issue') }}">議題追蹤系統</a></li>
											<li><a href="{{ route('show_member') }}">團隊成員</a></li>
											<li><a href="{{ route('links.show_links') }}">議會連結</a></li>
											@if(Auth::check())
											<li><a href="{{ route('show_admin_panel') }}">網站後台</a></li>
											@endif
										<!-- <li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li> -->
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>



				@yield('content')

			</div>

		<!-- Scripts -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
		<script src="{{ asset('assets/js/browser.min.js') }}"></script>
		<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
		<script src="{{ asset('assets/js/util.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>