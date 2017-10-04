@extends('layouts.master')
@section('content')

    <div class="container"><img src="images/grill-main.jpg" class="img-responsive"><img src="images/pizza-banner.jpg" style="margin-top: 15px;" class="img-responsive"></div>
    <div class="container pizza">
      <h1 class="diplomata section-title"><span>Pizzeria</span></h1>
      <div class="row">
        <div class="col-sm-4">
          <div class="brownbox-pizza">
            <p>
             La pizzeria con forno a legna sforna pizza croccante e soffice allo stesso tempo, grazie al suo impasto fatto di una miscela di farine di cereali da noi selezionati e a una lievitazione di 48 ore. Abbiamo l’angolo dei “carnivori” con una grossa griglia dietro al bancone della macelleria dove tu stesso puoi scegliere la carne da farti cuocere alla brace.
            </p>
          </div>
        </div>
        <div class="col-sm-8 pizza-menu">
          <div class="row">
            <div class="col-xs-6 col-sm-4">
              <div class="menu-col">
                <p class="oswald">
                  Marinara <br>
                  Margherita <br>
                  Napoli <br>
                  Roma <br>
                  Funghi <br>
                  Prosciutto Cotto <br>
                  Capricciosa <br>
                  Salmone
                </p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4">
              <div class="menu-col">
                <p class="oswald">
                  Amatriciana <br>
                  Funghi e salsiccia <br>
                  Boscaiola <br>
                  Fiori di zucca <br>
                  Contadina <br>
                  Bresaola e rughetta <br>
                  Milano <br>
                  Caprese
                </p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4">
              <div class="menu-col">
                <p class="oswald">
                  Genova<br>
                  4 Formaggi <br>
                  Calabrisella <br>
                  Tartufo <br>
                  Margherita Vegana <br>
                  Bianca romana <br>
                  Focaccia bianca <br>
                  
                </p>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="redbox-pizza">
        <div class="row">
          <div class="col-sm-12">
            <div class="separator-darr-white"></div>
            <h2 class="diplomata">grill</h2>
            <div class="separator-uarr-white"></div>
            <div class="row"></div>
            <div class="col-sm-4">
              <ul>
                <li>Lombata di Vitella</li>
                <li>Costata di Manzo Italiano</li>
                <li>Bistecca Fiorentina Chianina</li>
                <li>Tagliata di Controfiletto</li>
              </ul>
            </div>
            <div class="col-sm-4">
              <ul>
                <li>Galletto allo spiedo</li>
                <li>Filetto di manzo italiano</li>
                <li>suprema di pollo al rosmarino</li>
                <li>Manzo Kobe</li>
              </ul>
            </div>
            <div class="col-sm-4"><img src="images/grill.jpg" class="img-responsive"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h1 class="diplomata section-title"><span>gallery</span></h1>
      <div class="row">
        <div class="col-sm-3"><a href="images/grillgallery01-big.jpg" class="thumbnail"><img src="images/grillgallery01.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/grillgallery02-big.jpg" class="thumbnail"><img src="images/grillgallery02.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/grillgallery03-big.jpg" class="thumbnail"><img src="images/grillgallery03.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/grillgallery04-big.jpg" class="thumbnail"><img src="images/grillgallery04.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/grillgallery05-big.jpg" class="thumbnail"><img src="images/grillgallery05.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/grillgallery06-big.jpg" class="thumbnail"><img src="images/grillgallery06.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/grillgallery07-big.jpg" class="thumbnail"><img src="images/grillgallery07.jpg" class="img-responsive"></a></div>
        <div class="col-sm-3"><a href="images/grillgallery08-big.jpg" class="thumbnail"><img src="images/grillgallery08.jpg" class="img-responsive"></a></div>
      </div>
    </div>
    @stop