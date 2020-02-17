@extends('layouts.main')

@section('page-title', 'Dettaglio Prodotto')

@section('content')
    <main class="flex-shrink-0" role="main">

      <div class="container">
      <h3 class="h3">Id prodotto: {{$product->id}}</h3>
      <div class="row">
          <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="{{ asset("images/$product->image_front")}}">
                          <img class="pic-2" src="{{ asset("images/$product->image_lateral")}}">
                      </a>
                      <ul class="social">
                          <li><a href="{{route('products.show', $product->id)}}"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-edit"></i></a></li>
                          <li><a href="#"><i class="fa fa-trash"></i></a></li>
                      </ul>
                      <span class="product-new-label">{{$product->state}}</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                      <div class="price">
                          € {{$product->price_discount}}
                          <span>€ {{$product->price_regular}}</span>
                      </div>
                      <ul class="rating">
                            @php
                            $stelle = ''
                            @endphp
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $product->vote)
                                    @php $stelle = $stelle . '<li class="fa fa-star"></li>' @endphp
                                @else
                                    @php $stelle = $stelle . '<li class="fa fa-star disable"></li>'
                                    @endphp
                                @endif
                            @endfor
                            {!!($stelle)!!}
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
