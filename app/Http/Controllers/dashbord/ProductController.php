<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return  view('Dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|unique:products,name",
            'price' => "required|numeric",
            'main_image' => "required|image|mimes:jpeg,png,jpg,gif",
            'images.*' => "required|image|mimes:jpeg,png,jpg,gif",
            'description' => "required|string"
        ]);


        $data = $request->except('main_image', 'images');
        $data['main_image'] = uniqid(5) . $request->file('main_image')->getClientOriginalName();
        $request->file('main_image')->storeAs('', $data['main_image'], 'products');
        $product = Product::create($data);


        foreach ($request->file('images') as $image) {
            $name = uniqid(5) . $image->getClientOriginalName();
            $image->storeAs('', $name, 'products');
            ImageProduct::create([
                'image' => $name,
                'product_id' => $product->id
            ]);
        }
        return redirect()->back()->with('success', 'تم اضافة المنتج بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Product::findOrFail($id)->update([
            'active' => $request->active,
        ]);
        return redirect()->back()->with('success', 'تم تعديل حالة المنتج بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        // unlink("./" . parse_url($product->main_image)['path']);
        // $images = $product->images;
        // foreach ($images as $image) {
        //     unlink("./" . parse_url($image->image)['path']);
        // }
        File::delete(ltrim(parse_url($product->main_image)['path'], '/'));
        $images = $product->images;
        foreach ($images as $image) {
            File::delete(ltrim(parse_url($image->image)['path'], '/'));
        }
        $product->delete();
        return redirect()->back()->with('success', 'تم حذف المنتج بنجاح');
    }
}
