<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('checkout', 'profile', 'profileUpdate', 'orders');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::where('active', 1)->paginate(10);
        return view('home', compact('products'));
    }

    public function products()
    {
        $products = Product::where('active', 1)->paginate(20);
        return view('products', compact('products'));
    }
    public function product($id)
    {
        $product = product::findOrFail($id);
        $wishlists = Cart::instance('wishlist')->content()->pluck('id');
        return view('product-details', compact('product', 'wishlists'));
    }

    public function cart()
    {
        // return Cart::instance('cart')->content();
        return view('cart');
    }
    public function wishlist()
    {
        $products = Cart::instance('wishlist')->content();
        return view('wishlist', compact('products'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        Cart::instance('cart')->add($product->id, $product->name, 1, $product->price)->associate('\App\Models\Product');
        return redirect()->route('cart')->with('success', 'تم اضافة المنتج للسلة بنجاح');
    }

    public function addToWishlist($id)
    {
        $product = Product::findOrFail($id);
        Cart::instance('wishlist')->add($product->id, $product->name, 1, $product->price)->associate('\App\Models\Product');
        return redirect()->route('wishlist')->with('success', 'تم اضافة المنتج للمفضله بنجاح');
    }

    public function update_cart(Request $request, $rowId)
    {
        Cart::instance('cart')->update($rowId, $request->qty);
        return redirect()->back()->with('success', 'تم تحديث الكمية بنجاح');
    }

    public function deleteCart($id)
    {
        $rowId = Cart::instance('cart')->content()->where('id', $id)->first()->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->back()->with('success', 'تم حذف المنتج من السلة');
    }
    public function deleteWishlist($id)
    {
        $rowId = Cart::instance('wishlist')->content()->where('id', $id)->first()->rowId;
        Cart::instance('wishlist')->remove($rowId);
        return redirect()->back()->with('success', 'تم حذف المنتج من المفضله');
    }


    public function checkout()
    {
        return view('checkout');
    }
    public function completeCheckout(Request $request)
    {
        $request->validate([
            'name' => "required|string|max:255",
            'phone' => "required",
            'email' => "required|email",
            'address' => "required|string",
        ]);



        $order = $request->user()->orders()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'sub_total' => Cart::instance('cart')->subtotal(),
            'tax' => 0,
            'total' => Cart::instance('cart')->total()
        ]);


        foreach (Cart::instance('cart')->content() as $item) {
            $product = [
                $item->id => [
                    'qty' => $item->qty,
                    'price' => $item->price,
                ]
            ];
            $order->products()->attach($product);
        }

        Cart::instance('cart')->destroy();
        return redirect()->route('home')->with('success', 'تم اكمال الطلب  بنجاح');
    }
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSend(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => "required|string|max:255",
            'phone' => "required|string|max:100",
            'email' => "required|email|max:100",
            'object' => "required|string|max:100",
            'message' => "required|string",
        ]);
        Contact::create($validate->validated());
        return redirect()->back()->with('success', 'تم الارسال بنجاح');
    }

    public function profile(Request $request)
    {
        $user = $request->user();
        return view('profile', compact('user'));
    }


    public function profileUpdate(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => "required|string|unique:users,phone",
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'required', 'string', 'min:5', 'confirmed'],
        ]);

        $profile = $request->user();
        // return $request->password;
        $profile->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        if ($request->password != null) {
            $profile->update([
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect()->back()->with('success', 'تم تحديث البيانات');
    }


    public function orders()
    {
        $orders = auth()->user()->orders;
        return view('orders', compact('orders'));
    }
}
