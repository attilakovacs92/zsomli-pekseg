@extends('layouts.app')
@section('content')
<header id="servicesbg" class="opacity">
  <div class="container"> 
    <div class="intro-text-sm">
      <div class="intro-lead-in"> <img alt="Full Spoon" class="img-responsive center-block" height="80" src="img/full-spoon-logo.svg" width="450">
        <p><img alt="Full Spoon" src="img/bits/cake.svg"> </p>
        <div class="intro-heading"> Muffins & Cakes Café </div>
      </div>
    </div>
  </div>
</header>

<section id="services">

  <div class="container"> 
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Our <span class="orange-accent">Services</span></h2>
        <h3 class="section-subheading">We can make your party really delicious.</h3>
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
        <div class="bg-darkest-gray"> <a class="menu-link" data-toggle="modal" href="#menuModal1">
          <div class="menu-hover">
            <div class="menu-hover-content"> <i class="fa fa-plus fa-3x"></i> </div>
          </div>
          <img alt="Coctails and Shots" class="mrgn20-top" src="img/bits/pretzel.svg">
          <div class="menu-caption">
            <h4>Coctails and Shots</h4>
          </div>
          </a> </div>
      </div>
      
      <div class="col-sm-4 menu-item text-center">
        <div class="bg-darkest-gray"> <a class="menu-link" data-toggle="modal" href="#menuModal2">
          <div class="menu-hover">
            <div class="menu-hover-content"> <i class="fa fa-plus fa-3x"></i> </div>
          </div>
          <img alt="Coffee & Tea" class="mrgn20-top" src="img/bits/cappuccino.svg">
          <div class="menu-caption">
            <h4>Coffee & Tea</h4>
          </div>
          </a> </div>
      </div>
      
      <div class="col-sm-4 menu-item text-center">
        <div class="bg-darkest-gray"> <a class="menu-link" data-toggle="modal" href="#menuModal3">
          <div class="menu-hover">
            <div class="menu-hover-content"> <i class="fa fa-plus fa-3x"></i> </div>
          </div>
          <img alt="Special cupcakes & Muffins" class="mrgn20-top" src="img/bits/cupcake.svg">
          <div class="menu-caption">
            <h4>Special cupcakes & Muffins</h4>
          </div>
          </a> </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-4 menu-item text-center">
        <div class="bg-darkest-gray"> <a class="menu-link" data-toggle="modal" href="#menuModal4">
          <div class="menu-hover">
            <div class="menu-hover-content"> <i class="fa fa-plus fa-3x"></i> </div>
          </div>
          <img alt="Fruit salads & Drinks" class="mrgn20-top" src="img/bits/forest-fruit.svg">
          <div class="menu-caption">
            <h4>Fruit salads & Drinks</h4>
          </div>
          </a> </div>
      </div>
      
      <div class="col-sm-4 menu-item text-center">
        <div class="bg-darkest-gray"> <a class="menu-link" data-toggle="modal" href="#menuModal5">
          <div class="menu-hover">
            <div class="menu-hover-content"> <i class="fa fa-plus fa-3x"></i> </div>
          </div>
          <img alt="Salty Nibbles" class="mrgn20-top" src="img/bits/pretzel.svg">
          <div class="menu-caption">
            <h4>Salty Nibbles</h4>
          </div>
          </a> </div>
      </div>
      
      <div class="col-sm-4 menu-item text-center">
        <div class="bg-darkest-gray"> <a class="menu-link" data-toggle="modal" href="#menuModal6">
          <div class="menu-hover">
            <div class="menu-hover-content"> <i class="fa fa-plus fa-3x"></i> </div>
          </div>
          <img alt="Custom menus" class="mrgn20-top" src="img/bits/pot.svg">
          <div class="menu-caption">
            <h4>Custom menus</h4>
          </div>
          </a> </div>
      </div>
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