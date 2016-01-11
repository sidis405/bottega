
@if(strlen($item->seo_description) > 2)
    <meta name="description" content="{{$item->seo_description}}">
@else
    <meta name="description" content="{{$item->excerpt}}">
@endif

@if(strlen($item->tags))
    <meta name="keywords" content="{{str_replace(',', ', ', $item->tags)}}">
@endif

<meta property="og:title" content="{{$item->title}}" />
<meta property="og:site_name" content="Bottega Italia"/>
<meta property="og:url" content="http://bottegaitaliaroma.it/news/{{$item->slug}}" />
<meta property="og:description" content="{{$item->excerpt}}" />
<meta property="fb:app_id" content="966242223397117" />
<meta property="og:image" content="http://bottegaitaliaroma.it/uploads/{{$item->featuredImage->id}}/{{rawurlencode($item->featuredImage->file_name)}}">
<meta property="og:type" content="article" />
<meta property="og:locale:alternate" content="it_IT" />  <!-- Italian -->