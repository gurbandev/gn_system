<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::with(['category', 'brand'])
            ->orderBy('id', 'desc')
            ->paginate();

        return view('products.index')
            ->with([
                'products' => $products,
            ]);
    }

    public function show($slug){

        $product = Product::where('slug', $slug)
            ->with(['category', 'brand'])
            ->firstorFail();

            return view('product.show')
                ->with([
                    'product' => $product,
                ]);
        }
    }
}
