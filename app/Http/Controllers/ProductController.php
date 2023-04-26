<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function getProducts()
    {
        $items = Product::get();
        return view('products', compact('items'));
    }

    public function addProduct(Request $request)
    {
        $c_image = $request->file('image');
        $image = Str::random(20);
        $ext = strtolower($c_image->getClientOriginalExtension());
        $image_full_name = $image . '.' . $ext;
        $upload_path = 'images/';
        $save_url_image = $upload_path . $image_full_name;
        $success = $c_image->move($upload_path, $image_full_name);

        Product::insert([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $save_url_image,
            'user_id' => $request->user_id,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('products');
    }

    public function editProduct($id)
    {
        $item = Product::where('id', $id)->first();
        return view('editProduct', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Product::where('id', $id)->first();
        $item->update([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image,
        ]);
        return redirect()->route('products');
    }

    public function deletePost($id)
    {
        $item = Product::where('id', $id)->first();
        $item->delete();
        return redirect()->route('products');
    }
}
