<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupero tutti i vestiti con etichetta new dal db
        $products_new = Product::where('state', 'New')->get();

        // Recupero tutti i vestiti con etichetta sale dal db
        $products_sale = Product::where('state', 'Sale')->get();

        // Recupero tutti i vestiti con etichetta outlet dal db
        $products_outlet = Product::where('state', 'Outlet')->get();

        // Preparo le variabili da inviare alla view
        $data = [
            'clothes_new' => $products_new,
            'clothes_sale' => $products_sale,
            'clothes_outlet' => $products_outlet
        ];

        // Restituisco la view con i dati
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Recupero i dati dal form
        $dati = $request->all();

        //Creazione nome immagini e copia nella cartella images
        $file_image_front = time().'.'.$dati['image_front']->getClientOriginalName();
        $file_image_lateral = time().'.'.$dati['image_lateral']->getClientOriginalName();

        $request->image_front->move(public_path('images'), $file_image_front);
        $request->image_lateral->move(public_path('images'), $file_image_lateral);

        // Creo una nuova istanzadella classe Clothe
        $nuovo_prodotto = new Product();
        // Assegno all'oggetto Clothe tutte le propietà compilate nel form (posso usare fill)
        $nuovo_prodotto->name = $dati['name'];
        $nuovo_prodotto->price_regular = $dati['price_regular'];
        $nuovo_prodotto->price_discount = $dati['price_discount'];
        $nuovo_prodotto->state = $dati['state'];
        $nuovo_prodotto->vote = $dati['vote'];
        $nuovo_prodotto->image_front = $file_image_front;
        $nuovo_prodotto->image_lateral = $file_image_lateral;

        //$nuovo_prodotto->fill($dati);
        // Salvo nel database il nuovo prodotto appena creato
        $nuovo_prodotto->save();
        // Redirect all' Homepage
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // Recupero i dati dal form
        $dati = $request->all();

        // Aggiorno nel database il prodotto appena modificato
        $product->update($dati);

        // Redirect all' Homepage
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
