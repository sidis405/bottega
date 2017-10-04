@extends('layouts.master')
@section('content')
  <div class="container">
    <iframe id="quoteframe" width="100%" src="http://quote.teambuildingrome.com/req_private.php?rcod=<?php echo $_GET['rcod']?>" frameBorder="0">
    </iframe>
  </div>
@stop