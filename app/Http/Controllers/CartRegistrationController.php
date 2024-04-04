<?php

namespace App\Http\Controllers;

use App\Models\ProductRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CartRegistrationController extends Controller
{
    public function index()
    {
        $productReg = ProductRegistration::with('classReg')->where('status', 1)->get();
        return view('registration', ['productReg' => $productReg]);
    }

    public function addProductRegtoCart(Request $request)
    {
        $productRegistrationId = $request->input('product_registration_id');
        $product = ProductRegistration::findOrFail($productRegistrationId);
        // session(['cart' => [
        //     $productRegistrationId => [
        //         'name' => $product->product_name,
        //         'price_idr' => $product->price_idr_early,
        //         'price_usd' => $product->price_usd_early,
        //         'quantity' => 1,
        //     ]
        // ]]);
        if (!$request->user()) {
            Alert::warning('Missing biodata', 'Please Sign in first for Register');
            return redirect()->route('login');
        }
        $user = Auth::user();
        if (!$user->biodata || $user->biodata->country) {
            Alert::warning('Missing biodata', 'Please fill in your biodata before Registration.',);
            return redirect('/dashboard/profile/my-profile');
        }
        $cart = session()->get('cart', []);
        if (isset($cart[$productRegistrationId])) {
            $cart[$productRegistrationId]['quantity']++;
        } else {
            $cart[$productRegistrationId] = [
                'name' => $product->product_name,
                'price_idr' => $product->price_idr_early,
                'price_usd' => $product->price_usd_early,
                'quantity' => 1,
            ];
        }
        session()->put('cart', $cart);
        Alert::success('success', 'Product registration added to the cart.');
        return redirect('/registration');
    }
}
