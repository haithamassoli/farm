<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;
use GuzzleHttp\Psr7\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cart = Cart::where('user_id', auth()->user()->id)->get();
        foreach ($cart as $key => $value) {
            $value->product = Product::find($value->product_id);
        }
        
        $total = 0;
        foreach ($cart as $key => $value) {
            $total += $value->product->product_price * $value->product_quntity;
        }
        return view('pages.cart', compact('cart', 'total'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    // public function addToCart($id)
    // {
    //     $product = Product::find($id);

    //     if (!$product) {

    //         abort(404);
    //     }
    //     $cart = session()->get('cart');
    //     if (!$cart) {
    //         $cart = [
    //             $id => [
    //                 "name" => $product->name,
    //                 "quantity" => 1,
    //                 "price" => $product->price,
    //                 "photo" => $product->photo
    //             ]
    //         ];
    //         session()->put('cart', $cart);
    //         return redirect()->back()->with('success', 'Product added to cart successfully');
    //     }
    //   // if cart not empty then check if this product exist then increment quantity

    //     if (isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //         session()->put('cart', $cart);
    //         return redirect()->back()->with('success', 'Product added to cart successfully');
    //     }
    //   // if item not exist in cart then add to cart with quantity = 1

    //     else {
    //         $cart[$id] = [
    //             "name" => $product->name,
    //             "quantity" => 1,
    //             "price" => $product->price,
    //             "photo" => $product->photo
    //         ];
    //         session()->put('cart', $cart);
    //         return redirect()->back()->with('success', 'Product added to cart successfully');
    //     }

    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        $request->validate([
            'product_id' => 'required',
            'product_quntity' => 'required',
        ]);
        
        $product = Product::find($request->input('product_id'));
        $cart = Cart::create([
            "user_id" => auth()->user()->id,
            'product_id' => $request->input('product_id'),
            'product_quntity' => $request->input('product_quntity'),
            'total' => $product->product_price * $request->input('product_quntity'),
        ]);
        return redirect()->back()->with('success', 'Product added to cart successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::find($id);
        return view('pages.cart', compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Cart $cart)
    // {
    //     $cart->delete();
    //     return redirect('cart')->with('success', 'Deleted successfully');
    // }

    public function destroy(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
}
}
