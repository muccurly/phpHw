<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $products = Product::query()->get();
        return view('models.products.index',compact('products'));
    }


    public function create()
    {
        return view('models.products.create');
    }


    public function store(ProductRequest $request)
    {
        $req = $request->validated();
        $product = new Product($req);
        $product->save();
        return redirect()->route('products.show',$product);
    }

    public function show(Product $product)
    {
        return view('models.products.show',[
            'product'=>$product,
        ]);
    }

    public function edit(Product $product)
    {
        return view('models.products.create',[
            'product'=>$product
        ]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('products.show',$product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
