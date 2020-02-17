@extends('layouts.main')

@section('page-title', 'Modifica Prodotto')

@section('content')
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form class="form-horizontal text-center" action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <fieldset>

                        <!-- Form Name -->
                        <legend>CREAZIONE PRODOTTO</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="filebutton">Nome Prodotto</label>
                          <input id="product_name" name="name" placeholder="Inserisci il nome del  prodotto" value="{{$product->name}}" class="form-control input-md" required type="text">
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="filebutton">Prezzo Prodotto</label>
                          <input id="product_price" name="price_regular" placeholder="Inserisci il prezzo del prodotto" value="{{$product->price_regular}}" class="form-control input-md" required type="text">
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="filebutton">Prezzo Scontato Prodotto</label>
                          <input id="product_price_discount" name="price_discount" placeholder="Inserisci il prezzo scontato del prodotto" value="{{$product->price_discount}}" class="form-control input-md" required type="text">
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="filebutton">Target Prodotto</label>
                            <select id="product_vote" name="state" class="form-control">
                                <option value=''>Seleziona target prodotto</option>
                                <option value="New" @if($product->state == "New") @php echo 'selected' @endphp @endif>New</option>
                                <option value="Sale" @if($product->state == "Sale") @php echo 'selected' @endphp @endif>Sale</option>
                                <option value="Outlet" @if($product->state == "Outlet") @php echo 'selected' @endphp @endif>Outlet</option>
                            </select>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="filebutton">Voto Prodotto</label>
                          <input id="product_vote" name="vote" placeholder="Inserisci un voto per il prodotto da 0 a 5" value="{{$product->vote}}" class="form-control input-md" required type="text">
                        </div>

                         <!-- File Immagine Frontale -->
                         <label class="col-md-6 control-label" for="filebutton">Immagine Frontale</label>
                        <div class="form-group">
                                <img class="col-md-4" src="{{ asset("images/$product->image_front")}}">
                            <input id="immagine_frontale" name="image_front" class="input-file" type="file">
                        </div>

                        <!-- File Immagine Laterale -->
                        <label class="col-md-6 control-label" for="filebutton">Immagine Laterale</label>
                        <div class="form-group">
                                <img class="col-md-4" src="{{ asset("images/$product->image_lateral")}}">
                            <input id="immagine_laterale" name="image_lateral" class="input-file" type="file">
                        </div>

                        <!-- Bottone Inserisci Prodotto -->
                        <div class="form-group">
                            <input id="crea_prodotto" name="insert_product" class="btn btn-primary" type="submit" value="Modifica prodotto">
                         </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

@endsection
