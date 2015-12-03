<!DOCTYPE html>
<!-- [if lt IE 7]> html.no-js.lt-ie9.lt-ie8.lt-ie7 <![endif]-->
<!-- [if IE 7]> html.no-js.lt-ie9.lt-ie8 <![endif]-->
<!-- [if IE 8]> html.no-js.lt-ie9 <![endif]-->
<!-- [if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Bottega Italia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/vendor.css">
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link href="/cfg-contactform-13/css/contactform.css" rel="stylesheet" type="text/css" />
    @yield('headers')
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/modernizr.js"></script>
    <link rel="shortcut icon" href="/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Diplomata+SC|Oswald:400,700,300|Pacifico:400' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <div class="container">
      <div class="topbar"></div>
      <header>
        <div class="row">
          <div class="col-sm-4 col-sm-push-4">
            <div class="logo"><a href="/"><img src="/images/logo.jpg" alt="Bottega Italia"></a></div>
          </div>
          <div class="col-sm-4 col-sm-pull-4">
            <div class="info-left">
              <p><span class="arvo">Per prenotazioni</span><span class="diplomata hidden-sm">Tel.</span><span class="oswald"><i>+39 0642390752</i></span></p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="info-right">
              <p><span class="diplomata">Via Veneto, 15/23</span>
              <span class="arvo">
                Roma
              </span>
              <span class="social-header">
                <a target="_blank" href="https://www.facebook.com/bitroma/"><i class="fa fa-facebook-official"></i></a>
                <a target="_blank" href="https://twitter.com/BottegaItaliaRM"><i class="fa fa-twitter-square"></i></a>
                <a target="_blank" href="https://instagram.com/BottegaItalia/"><i class="fa fa-instagram"></i></a>
              </span>
              </p>
            </div>
          </div>
        </div>
      </header>
    </div>
    <div class="container">
      <div class="menu-header">
        <h5>Menu</h5>
      </div>
      <nav class="navbar">
        <ul class="nav nav-justified">
          <li {{ checkActivePath('ristorante')}} ><a class="" href="ristorante.html">Ristorante</a></li>
          <li {{ checkActivePath('gelateria')}} ><a href="gelateria.html">Pasticceria e Gelateria</a></li>
          <li {{ checkActivePath('caffe')}} ><a class="" href="caffe.html">Caffè</a></li>
          <li {{ checkActivePath('friggitoria')}} ><a class="" href="friggitoria.html">Friggitoria</a></li>
          <li {{ checkActivePath('market')}} ><a class="" href="market.html">Market</a></li>
          <li class="last {{ checkActivePath('pizza', true)}}"><a href="pizza.html">Pizza e Grill</a></li>
        </ul>
      </nav>
    </div>
    @yield('content')
    @include('layouts.footer')
  </body>
</html>