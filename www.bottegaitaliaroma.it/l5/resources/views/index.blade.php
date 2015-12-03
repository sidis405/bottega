@extends('layouts.master')
@section('content')

    <div class="container">
      <div id="carousel-home" data-ride="carousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-home" data-slide-to="1"></li>
          <li data-target="#carousel-home" data-slide-to="2"></li>
          <li data-target="#carousel-home" data-slide-to="3"></li>
          <li data-target="#carousel-home" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active"><img src="/images/slide01-new.jpg" alt="First slide"></div>
          <div class="item"><img src="/images/slide02.jpg" alt="Second slide"></div>
          <div class="item"><img src="/images/slide03.jpg" alt="Third slide"></div>
          <div class="item"><img src="/images/slide04.jpg" alt="Fourth slide"></div>
          <div class="item"><img src="/images/slide05.jpg" alt="Fifth slide"></div>
        </div><a href="#carousel-home" data-slide="prev" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a><a href="#carousel-home" data-slide="next" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
    </div>
    <div class="container">
      <div class="separator-darr"></div>
      <p class="shoutout">
        Un ristorante, un mercato, una salumeria, <br>
        un posto dove comprare, degustare, mangiare, condividere e stare in compagnia. <br>
        Per una pizza con gli amici, per un brunch o per un pasto take away. <br>
        <b>Questa è Bottega Italia, ti aspettiamo!</b>
      </p>
      <div class="separator-uarr"></div>
    </div>
    
    @include('news')
    <div class="container">
      <div class="home-gallery">
        <h1 class="diplomata section-title"><span>gallery</span></h1>
        <div class="row">
          <div class="col-sm-3 col-xs-6"><a href="/images/homegallery01-big.jpg" class="thumbnail"><img src="/images/homegallery01.jpg" alt="" class="img-responsive"></a></div>
          <div class="col-sm-3 col-xs-6"><a href="/images/homegallery02-big.jpg" class="thumbnail"><img src="/images/homegallery02.jpg" alt="" class="img-responsive"></a></div>
          <div class="col-sm-3 col-xs-6"><a href="/images/homegallery03-big.jpg" class="thumbnail"><img src="/images/homegallery03.jpg" alt="" class="img-responsive"></a></div>
          <div class="col-sm-3 col-xs-6"><a href="/images/homegallery04-big.jpg" class="thumbnail"><img src="/images/homegallery04.jpg" alt="" class="img-responsive"></a></div>
        </div>
      </div>
    </div>
    @stop