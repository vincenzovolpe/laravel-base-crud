@extends('layouts.main')

@section('page-title', 'Pagina Prodotti')

@section('content')
    <main class="flex-shrink-0" role="main">

      <div class="container">
      <h3 class="h3">Nuovi Arrivi</h3>
      <div class="row">
          @foreach ($clothes_new as $cloth)
          <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="{{ asset("images/$cloth->image_front")}}">
                          <img class="pic-2" src="{{ asset("images/$cloth->image_lateral")}}">
                      </a>
                      <ul class="social">
                          <form action="{{ route('products.destroy',$cloth->id) }}" method="POST">
                              <li><a href="{{route('products.show', $cloth->id)}}"><i class="fa fa-eye"></i></a></li>
                              <li><a href="{{route('products.edit', $cloth->id)}}"><i class="fa fa-edit"></i></a></li>
                              @csrf
                              @method('DELETE')
                              <li><button type="submit"><i class="fa fa-trash"></i></button></li>
                           </form>
                      </ul>
                      <span class="product-new-label">{{$cloth->state}}</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">{{$cloth->name}}</a></h3>
                      <div class="price">
                          € {{$cloth->price_discount}}
                          <span>€ {{$cloth->price_regular}}</span>
                      </div>
                      <ul class="rating">
                            @php
                            $stelle = ''
                            @endphp
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $cloth->vote)
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
        @endforeach
      </div>
      <h3 class="h3">Saldi</h3>
      <div class="row">
          @foreach ($clothes_sale as $cloth)
          <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="{{ asset("images/$cloth->image_front")}}">
                          <img class="pic-2" src="{{ asset("images/$cloth->image_lateral")}}">
                      </a>
                      <ul class="social">
                         <li><a href="{{route('products.show', $cloth->id)}}"><i class="fa fa-eye"></i></a></li>
                          <li><a href="{{route('products.edit', $cloth->id)}}"><i class="fa fa-edit"></i></a></li>
                          <li><a href="#"><i class="fa fa-trash"></i></a></li>
                      </ul>
                      <span class="product-new-label">{{$cloth->state}}</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">{{$cloth->name}}</a></h3>
                      <div class="price">
                          € {{$cloth->price_discount}}
                          <span>€ {{$cloth->price_regular}}</span>
                      </div>
                      <ul class="rating">
                            @php
                            $stelle = ''
                            @endphp
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $cloth->vote)
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
        @endforeach
      </div>
      <h3 class="h3">Outlet</h3>
      <div class="row">
          @foreach ($clothes_outlet as $cloth)
          <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                  <div class="product-image3">
                      <a href="#">
                          <img class="pic-1" src="{{ asset("images/$cloth->image_front")}}">
                          <img class="pic-2" src="{{ asset("images/$cloth->image_lateral")}}">
                      </a>
                      <ul class="social">
                          <li><a href="{{route('products.show', $cloth->id)}}"><i class="fa fa-eye"></i></a></li>
                          <li><a href="{{route('products.edit', $cloth->id)}}"><i class="fa fa-edit"></i></a></li>
                          <li><a href="#"><i class="fa fa-trash"></i></a></li>
                      </ul>
                      <span class="product-new-label">{{$cloth->state}}</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">{{$cloth->name}}</a></h3>
                      <div class="price">
                          € {{$cloth->price_discount}}
                          <span>€ {{$cloth->price_regular}}</span>
                      </div>
                      <ul class="rating">
                            @php
                            $stelle = ''
                            @endphp
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $cloth->vote)
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
        @endforeach
      </div>
  </div>
</main>
@endsection
