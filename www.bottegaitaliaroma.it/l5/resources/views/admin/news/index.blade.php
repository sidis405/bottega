@extends('admin.layouts.master')

@section('header_extras')

<link rel="stylesheet" type="text/css" href="/css/jquery-ui.css">
<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

 @include('layouts.errors')

<section class="main">
      <div class="container">     
        @include('flash::message')
        <h1>Sezione 'News'</h1>
        <h2>In questa sezione sono consultabili le news presenti sul sito</h2>
        <div class="actions"><a href="/admin/news/crea">
            <div class="btn btn-green btn-circle"><i class="fa fa-plus"></i></div></a><span>Aggiungi news     </span></div>
        <div class="card tables-card">
          <div class="card-header">
            <h2>Clicca su una riga per modificarla      </h2>
          </div>
          <div class="card-body">
            <table class="table table-responsive table-hover">
              <thead>
                <tr>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>Titolo</th>
                  <th>Descrizione</th>
                  <th>Pin</th>
                  <th>Publicata</th>
                </tr>
              </thead>
              <tbody class="sortable" data-entityname="news">
              @foreach($news as $item)
                <tr href="/admin/news/{{$item->id}}/modifica"   data-itemId="{{{ $item->id }}}">
                  <td class="sortable-handle"><span class="glyphicon glyphicon-sort"></span></td>
                  <td>
                    <div class="thumbnail-preview-list" @if($item->featured_image_id > 0) style="background: url('/uploads/{{$item->featuredImage->id}}/{{$item->featuredImage->file_name}}?w=120&h=120&fit=crop') no-repeat center center;" @endif ></div>
                  </td>
                  <td>
                    <a href="{{$item->title}}" target="_blank">{{$item->title}}</a>
                  </td>
                  <td>
                    <a href="{{$item->excerpt}}" target="_blank">{{$item->excerpt}}</a>
                  </td>
                  <td>
                    @if($item->fixed == 1)

                    <a class="btn btn-green" href="{{$item->fixed}}" target="_blank">Si</a>

                    @else

                      <a class="btn btn-red" href="{{$item->fixed}}" target="_blank">No</a>

                    @endif
                  </td>

                  <td>
                  @if($item->published == 1)

                    <a class="btn btn-green" href="{{$item->published}}" target="_blank">Si</a>

                  @else

                    <a class="btn btn-red" href="{{$item->published}}" target="_blank">No</a>

                  @endif
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

  @stop


@section('footer_extras')

<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/adm/scripts/sortable-bindings.js"></script>

@stop


