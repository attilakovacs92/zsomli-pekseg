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
	      <div class="fill img-responsive" style="background-image: url(/img/slider-1.png);"></div>
	      <div class="carousel-caption"> 
	      <img alt="Full Spoon" class= "img-responsive center-block" height="123" src="/img/zsomli.png" width="682">
	        <p class="address" style="margin-top: 100px;">6000 Kecskemét,<br>
	          Külső-Szegedi út 136-16.<br>
	          </p>
	      </div>
	    </div>
	    <div class="item"> 
	      <!-- Set the second background image using inline CSS below. -->
	      <div class="fill" style="background-image: url(/img/slider-2.png);"></div>
	      <div class="carousel-caption"> 
	      <img alt="Full Spoon" class= "img-responsive center-block" height="123" src= "/img/zsomli.png" width="682">
	        <p class="mrgn80-top"  style="margin-top: 250px;"><a class= "btn btn-lg btn-outline" href="{{ route('pages.products')}}">Termékek</a> </p>
	      </div>
	    </div>
	    <div class="item"> 
	      <!-- Set the third background image using inline CSS below. -->
	      <div class="fill" style="background-image: url(/img/slider3.png);"></div>
	      <div class="carousel-caption"> 
	      <img alt="Full Spoon" class= "img-responsive center-block" height="123" src= "/img/zsomli.png" width="682">
	        <p class="mrgn80-top"  style="margin-top: 250px;"><a class= "btn btn-lg btn-outline" href="{{ route('pages.contact')}}">Kapcsolat</a> </p>
	      </div>
	    </div>
	  </div>
	  
	  <!-- Controls --> 
	  <a class="left carousel-control" href="#fullSpoonCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#fullSpoonCarousel" data-slide="next"> <span class="icon-next"></span> </a> 
	</header>
@stop