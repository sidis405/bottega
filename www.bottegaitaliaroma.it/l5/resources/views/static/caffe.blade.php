@extends('layouts.master')
@section('content')
    <div style="position: relative;" class="container">
    <img class="illy" src="images/illy-mark.jpg" alt="">
    <img src="images/caffe-main.jpg" class="img-responsive">
      <div class="box-transparent caffe">
        <div class="row">
          <div class="col-sm-5"><img src="images/caffe.png" class="img-responsive"></div>
          <div class="col-sm-7">
            <p>
              La colazione è il nostro benvenuto, con il caffè Illy ti diamo il giusto sprint per iniziare al meglio la tua giornata. Il latte che usiamo è della Centrale del latte di Roma, biologico o senza lattosio. Puoi venire per l’aperitivo, un cocktail accompagnato da piccoli assaggi sfiziosi che provengono dalla cucina o dalla salumeria. Puoi prenderti un amaro dopo cena e tirare fino a tardi, ti aspettiamo, tanto fino alle 02,00 stiamo qui per te, tutti i giorni!               
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="beigebg">
            <div class="caffe-box">
              <div class="separator-darr"></div>
              <h2>Centrifugati</h2>
              <div class="separator-uarr"></div>
              <p>Ananas, mela, carota, zenzero</p>
              <p>Arancia, carota, limone, menta</p>
              <p>Mela, kiwi, ananas, menta</p>
              <p>Mango, carota, arancia</p>
              <p>Kiwi, sedano, melone</p>
              <p style="margin-top: 88px;">               
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="beerbg">
            <div class="caffe-box right"><img src="images/poretti.png">
              <div class="separator-darr"></div>
              <h2>Birra</h2>
              <div class="separator-uarr"></div>
              <div class="row">
                <div class="col-xs-6">
                  <div class="inner-col borded">
                    <h4>Alla Spina</h4>
                    <p>4 luppoli (chiara)</p>
                    <p>5 luppoli (doppio malto chiara)</p>
                    <p>6 luppoli (doppio malto rossa)</p>
                    <p>7 luppoli (stagionale)</p>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="inner-col">
                    <h4>In Bottiglia</h4>
                    <p>4 luppoli (chiara)</p>
                    <p>Artigianale “Angelo” <br> (Pale Ale ⁄ Brown Ale)</p>
                    <p>10 luppoli Le Bollicine (birra Champagne)</p>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <!--<div class="container">
      <div class="sectionbreak"><a href="#" class="btn btn-primary">scarica il menu del pranzo</a></div>
    </div>-->
    <div class="container"><img src="images/caffe-banner.jpg" style="margin-bottom: 15px;" class="img-responsive"></div>


    <div class="container">
      <h1 class="diplomata section-title"><span>gallery</span></h1>
      <div class="row">
        <div class="col-sm-3"><a href="images/caffegallery01-big.jpg" class="thumbnail"><img src="images/caffegallery01.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/caffegallery02-big.jpg" class="thumbnail"><img src="images/caffegallery02.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/caffegallery03-big.jpg" class="thumbnail"><img src="images/caffegallery03.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/caffegallery04-big.jpg" class="thumbnail"><img src="images/caffegallery04.jpg" class="img-responsive"></a></div>        
      </div>
    </div>

@stop