<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Faker\Generator as Faker;

use App\Models\Typology;
use App\Models\Product;
use App\Models\Category;


class MainController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        return view('pages.home', compact('categories'));
    }

    public function productCreate()
    {
        $typologies = Typology::all();

        return view('pages.product.create', compact('typologies'));
    }
    public function productStore(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string|max:64",
            'description' => "nullable|string|",
            'price' => "required|integer",
            'weight' => "required|integer",
            'typology_id' => "required|integer",
        ]);

        $code = rand(10000, 99999);
        $data['code'] = $code;

        $product = Product::make($data);
        $typology = Typology::find($data['typology_id']);

        $product->typology()->associate($typology);
        $product->save();
        return redirect()->route('home');

    }

}