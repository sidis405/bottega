<div class="container news">
      <div class="home-news">
        <h1 class="diplomata section-title"><span>news ed eventi</span></h1>
      </div>
      <div class="row">             
      @if($pinned)
        <div class="col-md-4">
          <div class="news-box vertical pinned">
              <div class="pin"><!-- <i class="fa fa-star"></i> --></div>           
              <div class="news-img news-1" style="background: url('/image/{{$pinned->featuredImage->id}}/{{$pinned->featuredImage->file_name}}') no-repeat center center; background-size: cover;"></div>           
              <a href="/news/{{$pinned->slug}}"><h3>{{$pinned->title}}</h3></a>
                @if(strlen($pinned->subtitle)) <h4>{{$pinned->subtitle}}</h4> @endif
                <p>
                  {{tokenTruncate($pinned->excerpt, 185)}}
                </p>
                <a class="read-more" href="/news/{{$pinned->slug}}">Leggi di piu</a>
          </div>
        </div>
        @endif
        <div class="news-carousel">
        @foreach($news as $item)
          <div class="col-md-4">
            <div class="news-box vertical">            
                <div class="news-img news-1" style="background: url('/image/{{$item->featuredImage->id}}/{{$item->featuredImage->file_name}}')  no-repeat center center; background-size: cover;"></div>           
                <a href="/news/{{$item->slug}}"><h3>{{$item->title}}</h3></a>
                  @if(strlen($item->subtitle))<h4> {{$item->subtitle}}</h4> @endif
                  <p>
                    {{tokenTruncate($item->excerpt, 185)}}
                  </p>      
                  <a class="read-more" href="/news/{{$item->slug}}">Leggi di piu</a>
            </div>         
          </div>
          @endforeach

        </div> <!-- end of news carousel -->     
       
        </div>       
                   
    </div><!-- end of news -->

    @section('footer_scripts')
    @if($pinned)
    <script>
    $(document).ready(function(){
      $('.news-carousel').slick({
        slidesToShow: 2,
        arrows: false,
        autoplay: true,
        responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,        
            infinite: true        
          }
        }
        ]
      });
    });
    </script>
    @else

    <script>
    $(document).ready(function(){
      $('.news-carousel').slick({
        slidesToShow: 3,
        arrows: false,
        autoplay: true,
        responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,        
            infinite: true        
          }
        }
        ]
      });
    });
    </script>

    @endif

    @stop


