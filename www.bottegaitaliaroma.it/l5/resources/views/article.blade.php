@extends('layouts.master')

@section('og')

  @include('og')

@stop


@section('content')
   
    
    <div class="container news-page">      
      <div class="row news-content">
        <div class="col-md-6">
          <div class="news-page-img" style="background: url('/image/{{$item->featuredImage->id}}/{{$item->featuredImage->file_name}}?1') no-repeat center center; background-size: cover;"></div>          
        </div>
        <div class="col-md-6">           
            <h1>{{$item->title}}</h1>
            <span class="date">{{$item->subtitle}}</span>            
            <p>
              {!!$item->body!!}
            </p>  
            <div class="social-share">
              <span>Condividi questo articolo:</span>
              <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.bottegaitaliaroma.it/news/{{$item->slug}}" target="_blank" data-title="Facebook Share">
                <i class="fa fa-facebook-official"></i>
              </a>
              <a href="https://twitter.com/share?url=//bottegaitaliaroma.it/news/{{$item->slug}}&text={{$item->title}}" data-title="Twitter Share">
                <i class="fa fa-twitter-square"></i>
              </a>


              <a href="https://pinterest.com/pin/create/bookmarklet/?media=//bottegaitaliaroma.it/uploads/{{$item->featuredImage->id}}/{{rawurlencode($item->featuredImage->file_name)}}&url=//bottegaitaliaroma.it/news/{{$item->slug}}&is_video=false&description={{$item->title}}"  data-title="Pinterest Share">
                 <i class="fa fa-pinterest-square"></i>
              </a>

              <a href="https://plus.google.com/share?url=//bottegaitaliaroma.it/news/{{$item->slug}}"  data-title="Google+ Share">
                 <i class="fa fa-google-plus-square"></i>
              </a>
           </div>        
        </div>
      </div>
     
    </div><!-- end of news -->    

    @stop

    @section('footer_scripts')
    <script>
      document.title = '{{$item->title}} | Bottega Italia';
        
    </script>

    @stop