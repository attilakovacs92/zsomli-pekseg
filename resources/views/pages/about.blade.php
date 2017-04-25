@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/css/owl.theme.css">

<header id="aboutus" class="opacity">
  <div class="container"> 
    <div class="intro-text-sm">
		<div class="intro-lead-in"> 
			<img alt="Full Spoon" class="img-responsive center-block" height="80" src="/img/full-spoon-logo.svg" width="450">
			<p><img alt="Full Spoon" src="/img/bits/cake.svg"> </p>
			<div class="intro-heading"> Muffins & Cakes Café </div>
		</div>
	</div>
  </div>
</header>
<section id="about">
  <div class="container"> 
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">About <span class= "orange-accent">us</span></h2>
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
      <div class="col-md-12">
        <p>Cégünk 12 éve működik stabilan. A cég 100%-ban Magyar tulajdonú társaság, mely családi vállalkozásként működik, közel húsz alkalmazottnak adva biztos megélhetést.</p> 
        <p class="mrgn20-top">Üzletpolitikánk fő ismerve: folyamatos megújulás, magas színvonalas munka, valamint minőségi szolgáltatást nyújtani a vevőkörünknek és megrendelőinknek. Ennek érdekében a teljes gépparkunkat az elmúlt év Decemberében lecseréltük.</p>
        <p class="mrgn20-top">A gyártást eneritakarékos és a legmodernebb technológia követelményeknek megfelelő sütőipari kemencében végezzük.</p>
        <p class="mrgn20-top">A  partner kapcsolat megőrzése érdekében igényes, céltudatos munkára törekszünk. Cégünkhöz folyamatosan érkező vásárlói visszajelzések nagyfokú elégedettséget mutatnak termékeikkel. Innovatív módon működünk!!</p>
        <p class="mrgn20-top">Fő tevékenységünk a friss és csomagolt sutőipari termékek, cukrász sütemények, diabetikus termékek gyártása, értékesítése viszonteladói hálózatban.
        Egyik vezető termékünk az Európai Unióban a megőrzendő gasztronómiai értékek közé sorolható a hagyományos technológiával gyártott kenyér, mely rendkívül népszerű a lakosság körében.</p>
        <p class="mrgn20-top">Bízva a közös együttműködés lehetőségében várjuk szíves visszajelzését! </p>
      </div>
    </div>
  </div>
</section>
<section id="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> 
        <div id="owl-testimonials" class="owl-carousel"> 
          
          <div class="item">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1  col-xs-10 col-xs-offset-1">
                <img src="/img/about/about-slider1.jpg" alt="" class="img-responsive">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1  col-xs-10 col-xs-offset-1">
                <img src="/img/about/about-slider2.jpg" alt="" class="img-responsive">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1  col-xs-10 col-xs-offset-1">
                <img src="/img/about/about-slider3.jpg" alt="" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
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
  <!-- /.container --> 
</footer>
@stop