<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;

class ProductItemsController extends Controller
{
    public function index()
    { 
        
        // abort_unless(\Gate::allows('product_access'), 403);

        $products = Product::all();

        return view('my_work.index', compact('products'));

    }

    /**
     * $slug is een woord dat opgezocht wordt in de tabel portfolio_items.
     * Onder water wordt de volgende query uitgevoerd: select * from portfolio_items where slug = $slug
     */
    public function show()
    {

        // abort_unless(\Gate::allows('product_show'), 403);

        return view('my_work.show', compact('product'));
    }

}
