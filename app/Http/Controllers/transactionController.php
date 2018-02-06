<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transactionController extends Controller
{
    public function transactionUnprocess(){
        try{
            $supplier = supplierModel::where('id',Session::get('supplier_id'))->first();
            $data['product'] = productModel::where('id',$ids)->first();
            $data['product_type'] = productTypeModel::where('supplier_type',$supplier->supplier_type)->get();
            return view('backends.supplier.product.edit')->with($data);
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
    }
    public function transactionInprocess(){

    }
}
