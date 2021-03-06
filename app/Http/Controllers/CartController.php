<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cartID = $request->session()->get('shoppingCartList');
        if(!$cartID) return redirect()->route('home');
        $cart   = array();
        foreach($cartID as $key => $value) {
            $cart[] = Product::where('id', '=', $value)->first();
        }
        return view('cart')->with('cartContent', $cart);
        
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addToCart(Request $request, $id)
    {
        if(!$request->session()->has('shoppingCartList')){
           $request->session()->put('shoppingCartList', array()); 
        }

        $request->session()->push('shoppingCartList', $id);

        return back();
    }

    public function deleteFromCart(Request $request, $id)
    {
        $temp = $request->session()->get('shoppingCartList');
        unset($temp[$id]); 
        $temp = array_values($temp);

        $request->session()->put('shoppingCartList', $temp); 
        // $request->session()->get('shoppingCartList')[$id] = NULL;
        // unset($request->session()->get('shoppingCartList')[$id]);

        return redirect()->route('back');
    }
}
