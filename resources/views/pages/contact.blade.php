@extends('layouts.app')
@section('content')
<header id="contactbg" class="opacity" style="background-image: url(../img/headers/contact-header.png); opacity: 1.0;">
  <div class="container"> 
    <div class="intro-text-sm">
		<div class="intro-lead-in"> 
			<img alt="Full Spoon" class="img-responsive center-block" height="80" src="/img/zsomli.png" width="450" style="padding-bottom: 50px;">
		</div>
    </div>
  </div>
</header>

<section id="contact">
  <div class="container"> 
    <div class="row">
      <div class="col-lg-12 text-center mrgn20-btm">
        <h2 class="section-heading">Elérhetőségeink</h2>
        <p><img alt="Contact Us" class="img-responsive center-block" src="/img/bits/pretzel.svg"> </p>
        <p class="text-uppercase mrgn20-btm"><strong>Zsömli Sütöde Kft.</strong><br>
          	6000 Kecskemét, <br>
          Külső-Szegedi út 136-16.
        </p>
        <p>Telefon:<br> <a href="tel:+3676327291">+36 (76) 327 291</a></p>
        <p>Email: <br><a href="mailto:proba@proba.hu">proba@proba.hu</a></p>
        {{-- <ul class="list-inline social-buttons">
          <li> <a class="fa fa-twitter" href="https://www.facebook.com/designify.me"></a> </li>
          <li> <a class="fa fa-facebook" href="https://www.facebook.com/designify.me"></a> </li>
          <li> <a class="fa fa-linkedin" href="https://www.facebook.com/designify.me"></a> </li>
          <li> <a class="fa fa-google-plus" href="https://www.facebook.com/designify.me"></a> </li>
          <li> <a class="fa fa-pinterest-p" href="https://www.facebook.com/designify.me"></a> </li>
        </ul> --}}
      </div>
    </div>
  </div>
  
  <div id="iframe">
    <div class="container-fluid">
      <div class="row">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10905.921049072429!2d19.6968396!3d46.8932725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f8cdf556e5bd3ec!2zWnPDtm1saSBTw7x0w7ZkZSBLZnQu!5e0!3m2!1shu!2shu!4v1490974662978" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  
  <div class="container"> 
    <div class="row">
      <div class="col-lg-12 mrgn20-top text-center">
        <h2 class="section-heading">Azonnali <span class=
                    "orange-accent">Üzenetküldés</span></h2>
        <h3 class="section-subheading">Kérjük, hogy észrevételeivel, javaslataival segítse munkánkat!</h3>
      </div>
    </div>
    
    <div class="border">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p><img alt="border" class="img-responsive center-block" height="26" src="img/border.svg" width="177"> </p>
        </div>
      </div>
    </div>
    
    <form id="contactForm" name="sentMessage" novalidate>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control"
                            data-validation-required-message=
                            "Please enter your name." id="name" placeholder=
                            "Név" required type="text">
            <p class="help-block text-danger"> </p>
          </div>
          <div class="form-group">
            <input class="form-control"
                            data-validation-required-message=
                            "Please enter your email address." id="email"
                            placeholder="Email" required type=
                            "email">
            <p class="help-block text-danger"> </p>
          </div>
          <div class="form-group">
            <input class="form-control"
                            data-validation-required-message=
                            "Please enter your phone number." id="phone"
                            placeholder="Telefonszám" required type="tel">
            <p class="help-block text-danger"> </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <textarea style="height: 223px;" class="form-control"
                            data-validation-required-message=
                            "Please enter a message." id="message" name=
                            "message" placeholder=
                            "Tell us a little bit of your event or evening with us *"
                            required="">
			</textarea>
            <p class="help-block text-danger"> </p>
          </div>
        </div>
        <div class="clearfix"> </div>
        <div class="col-lg-12 text-left">
          <div id="success"> </div>
          <button class="btn btn-contact" type="submit">Küldés</button>
        </div>
      </div>
    </form>
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