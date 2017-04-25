@extends('layouts.app')
@section('content')
	<header id="fullSpoonCarousel" class="carousel slide"> 
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#fullSpoonCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#fullSpoonCarousel" data-slide-to="1"></li>
	    <li data-target="#fullSpoonCarousel" data-slide-to="2"></li>
	  </ol>
	  
	  <!-- Wrapper for Slides -->
	  <div class="carousel-inner">
	    <div class="item active"> 
	      <!-- Set the first background image using inline CSS below. -->
	      <div class="fill" style="background-image: url(/img/headers/aboutus-header.jpg);"></div>
	      <div class="carousel-caption"> <img alt="Full Spoon" class=
	                "img-responsive center-block" height="123" src=
	                "/img/full-spoon-logo.svg" width="682">
	        <p class="mrgn40-btm"><img alt="Full Spoon" src=
	                "/img/bits/cake.svg"> </p>
	        <div class="intro-heading"> Muffins & Cakes Café </div>
	        <p class="address">6000 Kecskemét,<br>
	          Külső-Szegedi út 136-16.<br>
	          </p>
	      </div>
	    </div>
	    <div class="item"> 
	      <!-- Set the second background image using inline CSS below. -->
	      <div class="fill" style="background-image: url(/img/headers/services-header.jpg);"></div>
	      <div class="carousel-caption"> <img alt="Full Spoon" class=
	                "img-responsive center-block" height="123" src=
	                "/img/full-spoon-logo.svg" width="682">
	        <p class="mrgn40-btm"><img alt="Full Spoon" src="/img/badge-food-drinks-sm.svg"> </p>
	        <div class="intro-heading"> Delicious Food & Drinks </div>
	        <p class="mrgn80-top"><a class=
	                    "btn btn-lg btn-outline" href=
	                    "menu.html">Termékeink</a> </p>
	      </div>
	    </div>
	    <div class="item"> 
	      <!-- Set the third background image using inline CSS below. -->
	      <div class="fill" style="background-image: url(/img/headers/contact-header.jpg);"></div>
	      <div class="carousel-caption"> <img alt="Full Spoon" class=
	                "img-responsive center-block" height="123" src=
	                "/img/full-spoon-logo.svg" width="682">
	        <p class="mrgn40-btm"><img alt="Full Spoon" src="/img/badge-music-art-sm.svg"> </p>
	        <div class="intro-heading"> Local & Global Music Events </div>
	        <p class="mrgn80-top"><a class=
	                    "btn btn-lg btn-outline" href=
	                    "events.html">Have a Look</a> </p>
	      </div>
	    </div>
	  </div>
	  
	  <!-- Controls --> 
	  <a class="left carousel-control" href="#fullSpoonCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#fullSpoonCarousel" data-slide="next"> <span class="icon-next"></span> </a> 
	</header>
@stop