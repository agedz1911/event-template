<?php

namespace App\Http\Controllers;

use App\Models\CategoryRegistration;
use App\Models\ClassCategory;
use App\Models\ProductRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrationDashboardController extends Controller
{
    public function index()
    {
        $categoryReg = CategoryRegistration::paginate(3);
        $classCategory = ClassCategory::with('categoryReg')->paginate(3);
        $productReg= ProductRegistration::paginate(5);
        return view('dashboard.admin.registrations.ProductRegistration', compact('categoryReg', 'classCategory', 'productReg'));
    }

    public function storeCategoryReg(Request $request)
    {
        $request->validate(
            [
                'category_name' => 'required',
            ]
        );
        // dd($request->all());
        $categoryReg = new CategoryRegistration();
        //dd($categoryReg);
        $categoryReg->create($request->all());
        Alert::success('Succesfully!', 'Category has been created');
        return redirect()->back();
    }

    public function storeClassCategory(Request $request)
    {
        $request->validate(
            [
                'class_name' => 'required',
                'category_id' => 'required',
            ]
        );
        // dd($request->all());
        $classCategory = new ClassCategory();
        $classCategory->create($request->all());
        Alert::success('Succesfully!', 'Class has been created');
        return redirect()->back();
    }

    public function storeProductRegistration(Request $request)
    {
        // dd($request->all());
        $customCode = 'AESC-' . str_pad(DB::table('product_registrations')->count() + 0001, 4, '0', STR_PAD_LEFT);
        $request->merge(['code_product' => $customCode]);
        
        $product = new ProductRegistration();   
        // dd($product);
        $product->create($request->all());
        Alert::success('Succesfully!', 'Registration has been created');
        return redirect()->back();
    }   
}
