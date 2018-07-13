<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicons -->
<link rel="shortcut icon" href="/img/favicon.png">
<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">
<title>Zsömli Pékség</title>
<!-- Bootstrap Core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Full Spoon Custom CSS -->
<link href="/css/full-spoon.css" rel="stylesheet">
<link href="/css/animate.css" rel="stylesheet">
<link href="/css/app.css" rel="stylesheet">

<!-- Full Spoon Custom Fonts -->
<link href="/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Catamaran:400,600,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Loader -->
<div class="se-pre-con"></div>
<!-- /.Loader -->

<!-- Navigation -->
@include('partials.navbar')
<!-- /Navigation --> 

@yield('content')

<!-- jQuery --> 
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript --> 
<script src="/js/bootstrap.min.js"></script> 

<!-- Plugin JavaScript --> 
<script src="/js/isotope.pkgd.min.js"></script> 
<script src="/js/jquery.magnific-popup.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
<script src="/js/classie.js"></script> 
<script src="/js/cbpAnimatedHeader.min.js"></script> 
<script src="/js/wow.min.js"></script> 
<script src="/js/owl.carousel.js"></script> 

<!-- Custom Theme JavaScript --> 
<script src="/js/fullspoon.js"></script> 

<!-- Contact Form JavaScript --> 
<script src="/js/jqBootstrapValidation.js"></script> 
<script src="/js/contact_me.js"></script>
<script>
$('.carousel').carousel();</script>
</body>
</html>
