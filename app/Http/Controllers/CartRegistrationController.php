<?php

namespace App\Http\Controllers;

use App\Models\ProductRegistration;
use Illuminate\Http\Request;
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
        session(['cart' => [
            $productRegistrationId => [
                'name' => $product->product_name,
                'price_idr' => $product->price_idr_early,
                'price_usd' => $product->price_usd_early,
                'quantity' => 1,
            ]
        ]]);
        
        Alert::success('success', 'Product registration added to the cart.');
        return redirect('/registration');
    }
}
