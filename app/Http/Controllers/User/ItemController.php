<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Stock;


class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }

    public function index()
    {
        $stocks = DB::table('t_stocks')
        ->select('product_id',
        DB::raw('sum(quantity) as quantity'))
        ->groupBy('product_id')
        ->having('quantity', '>=', 1);

        $products = DB::table('products')
            ->joinSub($stocks, 'stock', function($join) {
                $join->on('products.id', '=', 'stock.product_id');
        })
        ->join('shops', 'products.shop_id', '=', 'shops.id')
        ->join('secondary_categories', 'products.secondary_category_id', '=', 'secondary_categories.id')
        ->leftJoin('images as image1', 'products.image1', '=', 'image1.id')
        ->leftJoin('images as image2', 'products.image2', '=', 'image2.id')
        ->leftJoin('images as image3', 'products.image3', '=', 'image3.id')
        ->leftJoin('images as image4', 'products.image4', '=', 'image4.id')
        ->where('shops.is_selling', true)
        ->where('products.is_selling', true)
        ->select(
            'products.id as id',
            'products.name as name',
            'products.price',
            'products.sort_order as sort_order',
            'products.information',
            'secondary_categories.name as category',
            DB::raw('COALESCE(image1.filename, image2.filename, image3.filename, image4.filename) as filename')
        )
        ->get();

        return view('user.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with(['imageFirst', 'imageSecond', 'imageThird', 'imageFourth'])->findOrFail($id);

        $quantity = Stock::where('product_id', $product->id)->sum('quantity');

        if ($quantity > 9) {
            $quantity = 9;
        }

        return view('user.show', compact('product', 'quantity'));
    }

}
