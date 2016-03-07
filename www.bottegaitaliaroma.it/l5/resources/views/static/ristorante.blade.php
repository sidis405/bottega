@extends('layouts.master')
@section('content')
    <div class="container"><img src="images/ristorante-main.jpg" class="img-responsive">
      <div class="redbox">
        <div class="row">
          <div class="col-sm-5"><img src="images/ristorante.png" class="img-responsive"></div>
          <div class="col-sm-7">
            <p>
              Le isole del gusto.... la cucina al centro della sala o il cliente in cucina? Da noi puoi mangiare guardando, annusando, toccando con mano il tuo piatto, e osservando il tuo cuoco mentre cucina. C’è l’isola della pasta, quella dei secondi piatti, l’angolo delle centrifughe dove si preparano insalate di verdura e di frutta. Il nostro menu è semplice, variegato e attento alla stagionalità dei prodotti.
            </p>
          </div>
        </div>
      </div>
      <div class="transparent-box">
        <div class="row">
          <div class="col-sm-6"><a target="_blank" href="download/bottega-menu-ita.pdf" class="btn btn-primary">Scarica il menu di Bottega Italia</a></div>
          <div class="col-sm-6"><a target="_blank" href="download/bottega-menu-eng.pdf" class="btn btn-primary btn-azure">Download Bottega Italia's menu</a></div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="special">
        <h2>Alcune specialità della nostra cucina</h2>
        <div class="special-box">
          <div class="row">
            <div class="col-sm-6">
              <!-- <div class="separator-darr"></div>
              <h3>a Pranzo</h3>
              <div class="separator-uarr"></div> -->
              <p style="margin-top: 25px;"><span>CARPACCIO DI GAMBERI ROSSI</span>
                con insalatina di rucola e frutti di bosco
              </p>
              <p><span>BACCALA' </span>
                su vellutata di ceci e pomodori confit
              </p>
              <p><span>CARPACCIO DI MANZO AFFUMICATO</span>
                Carne di manzo italiana con formaggio, pomodoro, peperoni, lattuga e salsa fatta in casa, contorno
              </p>
              <p><span>GNOCCO</span>
                con ceci, cozze e pecorino
              </p>
              <p><span>QUADRONI DI PASTA AL TIMO</span>
                con faraona al vino rosso
              </p>
              <p><span>RAVIOLONI DI CALAMARI E GAMBERI</span></p>
            </div>
            <div class="col-sm-6">
              <!-- <div class="separator-darr"></div>
              <h3>a Cena</h3>
              <div class="separator-uarr"></div> -->
              <p style="margin-top: 25px;"><span>LA TRADIZIONE</span>
                Amatriciana, Carbonara, Gricia, Cacio e Pepe
              </p>
              <p><span>HAMBURGER BOTTEGA ITALIA</span>               
              </p>
              <p><span>STINCO DI MAIALE AL TEGAME</span>                 
              </p>
              <p><span>SALMONE AL VINO BIANCO</span>                
              </p>
              <p><span>TIRAMISU'</span>                
              </p>
              <p><span>CANNOLO SICILIANO</span>
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h1 class="diplomata section-title"><span>gallery</span></h1>
      <div class="row">
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery01-big.jpg" class="thumbnail"><img src="images/ristorantegallery01.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery02-big.jpg" class="thumbnail"><img src="images/ristorantegallery02.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery03-big.jpg" class="thumbnail"><img src="images/ristorantegallery03.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery04-big.jpg" class="thumbnail"><img src="images/ristorantegallery04.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery05-big.jpg" class="thumbnail"><img src="images/ristorantegallery05.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery06-big.jpg" class="thumbnail"><img src="images/ristorantegallery06.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery07-big.jpg" class="thumbnail"><img src="images/ristorantegallery07.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery08-big.jpg" class="thumbnail"><img src="images/ristorantegallery08.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery09-big.jpg" class="thumbnail"><img src="images/ristorantegallery09.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery10-big.jpg" class="thumbnail"><img src="images/ristorantegallery10.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery11-big.jpg" class="thumbnail"><img src="images/ristorantegallery11.jpg" class="img-responsive"></a></div>
        <div class="col-xs-4 col-sm-3 col-md-2"><a href="images/ristorantegallery12-big.jpg" class="thumbnail"><img src="images/ristorantegallery12.jpg" class="img-responsive"></a></div>
      </div>
    </div>

    @stop