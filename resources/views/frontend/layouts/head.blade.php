    <!-- Meta Tag -->
    <!--@yield('meta')-->
    <!-- Title Tag  -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" />
    <title>@yield('title','Gaming Fusion | Multi-Game Boosting & Elite Progression Services')</title>
    <meta name="description" content="@yield('meta_description','Boost your rank, power up your skills, and unlock exclusive rewards across all top multiplayer games. Gaming Fusion delivers fast, secure, and reliable boosting.')">
    <meta name="keywords" content="@yield('meta_keywords','game boosting, multi-game boost, rank boosting, gaming services, battle pass completion, unlock farming, pro gamers')">
    <!-- site favicon -->
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.ico') }}">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/style3.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900" rel="stylesheet">
    <!-- Open Graph / Facebook Meta Tags -->
 <meta property="og:title" content="Gaming Fusion | The Ultimate Boosting Hub">
 <meta property="og:description" content="Your destination for fast progress and peak performance in every game you play.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('storage/photos/category/41.webp') }}">
<meta property="og:site_name" content="Gaming Fusion">
<meta property="og:locale" content="en_US">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3X49SHWXWY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3X49SHWXWY');
</script>
<style>
        .cookiesBtn,#cookies-policy .cookiesBtn__link {
               
    cursor: pointer;
    display: block;
    font: inherit;
    font-size:14px;
    font-weight: 600;
    /* line-height: 1em; */
    margin: 0;
    overflow: hidden;
    /* padding: .86em 1em; */
    text-align: center;
    text-decoration: none;
    text-overflow: ellipsis;
    transition: opacity .2s 
ease-out;
     white-space: normal !important;;
    width: 100%;
    text-transform: uppercase;
    border: 1px solid #1698bb  !important;
    background-color: #1698bb  !important;
    color: #fff !important;
    padding:10px 2px !important;
    border-radius: 6px;
    transition: .5s;
    font-family: 'Rajdhani', sans-serif !important;
    font-weight: 600;
    
        }
        
        #cookies-policy .cookies__alert {
            border: 3px solid #1698bb  !important;
        }
    #cookies-policy .cookies__title {
        color:  #273648  !important;
        text-align: center;
    font-size: 16px;
    }
    </style>
    
    @cookieconsentscripts
 @cookieconsentview

