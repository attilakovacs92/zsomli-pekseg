@extends('layouts.app')
@section('content')
<header id="servicesbg" class="opacity" style="background-image: url(../img/headers/products_header.png); opacity: 1.0;">
  <div class="container"> 
    <div class="intro-text-sm">
      <div class="intro-lead-in"> 
        <img alt="Full Spoon" class="img-responsive center-block" height="80" src="/img/zsomli.png" width="450" style="padding-bottom: 50px;">
      </div>
    </div>
  </div>
</header>

<section id="services">

  <div class="container"> 
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Termékeink<span class="orange-accent">!</span></h2>
      </div>
    </div>
    
    <div class="border">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p><img alt="border" class="img-responsive center-block" height="26" src="img/border.svg" width="177"> </p>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-12 mrgn20-btm">
        <p>We can prepare custom cake and muffin menu for every
          ocassion. For birthday parties, we can create custom
          looking cupcakes to reflect the personality of the person
          celebrating. Sweet or sour - we can take care for all your
          guests.</p>
        <p class="mrgn20-top">We have a special drinks menu for
          occassions that require alcoholic drinks. We can prepare a
          summer sangria coctails or mohitos. Strawberry lemonade or
          cherry vodka shots.</p>
        <p class="mrgn20-top">If you want to try a sample menu,
          give us a shout and we will arrange a sample tasting
          meeting.</p>
      </div>
    </div>
    
    <div class="row"> 
      <div class="col-sm-4 menu-item text-center">
        <div class="bg-darkest-gray"> <a class="menu-link" data-toggle="modal" href="#menuModal1" style="cursor:no-drop">
          {{-- <div class="menu-hover">
            <div class="menu-hover-content"> <i class="fa fa-plus fa-3x"></i> </div>
          </div> --}}
          <img alt="Coctails and Shots" class="mrgn20-top" src="img/bits/pretzel.svg">
          <div class="menu-caption">
            <h4>Friss és csomagolt sütőipari termékek</h4>
          </div>
          </a> </div>
      </div>
      <div class="col-sm-4 menu-item text-center">
        <div class="bg-darkest-gray"> <a class="menu-link" data-toggle="modal" href="#menuModal3" style="cursor:no-drop">
          {{-- <div class="menu-hover">
            <div class="menu-hover-content"> <i class="fa fa-plus fa-3x"></i> </div>
          </div> --}}
          <img alt="Special cupcakes & Muffins" class="mrgn20-top" src="img/bits/cupcake.svg">
          <div class="menu-caption">
            <h4>Cukrász sütemények</h4>
          </div>
          </a> </div>
      </div>
      
      <div class="col-sm-4 menu-item text-center">
        <div class="bg-darkest-gray"> <a class="menu-link" data-toggle="modal" href="#menuModal6" style="cursor:no-drop">
         {{--  <div class="menu-hover">
            <div class="menu-hover-content"> <i class="fa fa-plus fa-3x"></i> </div>
          </div> --}}
          <img alt="Custom menus" class="mrgn20-top" src="img/bits/pot.svg">
          <div class="menu-caption">
            <h4>Diabetikus termékek</h4>
          </div>
          </a> </div>
      </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <span class="copyright">Copyright &copy;<a href="http://designify.me/" target="_blank">Designify.me</a></span> </div>
    </div>
  </div>
</footer>
@stop