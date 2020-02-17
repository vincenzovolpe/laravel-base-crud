@extends('layouts.main')

@section('page-title', 'Creazione Prodotto')

@section('content')
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form class="form-horizontal text-center" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset>

                        <!-- Form Name -->
                        <legend>CREAZIONE PRODOTTO</legend>

                        <!-- Text input-->
                        <div class="form-group">
                          <input id="product_name" name="name" placeholder="Inserisci il nome del  prodotto" class="form-control input-md" required type="text">
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <input id="product_price" name="price_regular" placeholder="Inserisci il prezzo del prodotto" class="form-control input-md" required type="text">
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <input id="product_price_discount" name="price_discount" placeholder="Inserisci il prezzo scontato del prodotto" class="form-control input-md" required type="text">
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <select id="product_vote" name="state" class="form-control">
                                <option selected>Seleziona target prodotto</option>
                                <option>New</option>
                                <option>Sale</option>
                                <option>Outlet</option>
                            </select>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <input id="product_vote" name="vote" placeholder="Inserisci un voto per il prodotto da 0 a 5" class="form-control input-md" required type="text">
                        </div>

                         <!-- File Immagine Frontale -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Immagine Frontale</label>
                            <input id="immagine_frontale" name="image_front" class="input-file" type="file">
                        </div>

                        <!-- File Immagine Laterale -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Immagine Laterale</label>
                            <input id="immagine_laterale" name="image_lateral" class="input-file" type="file">
                        </div>

                        <!-- Bottone Inserisci Prodotto -->
                        <div class="form-group">
                            <input id="crea_prodotto" name="insert_product" class="btn btn-primary" type="submit" value="Inserisci prodotto">
                         </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

@endsection
