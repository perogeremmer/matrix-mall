<?php

namespace App\Http\Controllers;

use App\productModel;
use App\productTypeModel;
use App\supplierModel;
use App\supplierTypeModel;
use App\transactionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class shopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $supplierType = supplierTypeModel::all();
            $data['homepage'] = FALSE;
            $data['supplier_type'] = $supplierType;
            return view('frontend.shop.index')->with($data);

        }
        catch (\Exception $e){
            return view('frontend.shop.index')->with('response-error', $e->getMessage());
        }
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
        try{
            $this->validate($request, [
                'notes' => 'required',
            ]);

            $data = new transactionModel();
            $data->transaction_code = time();
            $data->customer_id = Session::get('customer_id');
            $data->product_id = decrypt($request->product_id);
            $data->notes = $request->notes;
            $data->count = $request->quantity;
            $data->supplier_id = decrypt($request->supplier_id);
            $data->save();
            return redirect()->back()->with('response', 'Successful order the product!!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $supplier = supplierModel::where('supplier_type',decrypt($id))->get();
            $data['homepage'] = FALSE;
            $data['supplier'] = $supplier;
            return view('frontend.shop.supplier')->with($data);

        }
        catch (\Exception $e){
            return view('frontend.shop.supplier')->with('response-error', $e->getMessage());
        }
    }

    public function detail($id)
    {
        try{
            $supplier = supplierModel::where('id',decrypt($id))->first();
            $product_type = productTypeModel::where('supplier_type',$supplier->supplier_type)->get();
            $product = productModel::where('supplier_id',$supplier->id)->get();
            $data['homepage'] = FALSE;
            $data['supplier'] = $supplier;
            $data['product'] = $product;
            $data['product_type'] = $product_type;
            return view('frontend.shop.supplier.detail')->with($data);

        }
        catch (\Exception $e){
            return view('frontend.shop.supplier.detail')->with('response-error', $e->getMessage());
        }
    }

    public function category_detail($id)
    {
        try{
            $product = productModel::where('product_type',decrypt($id))->get();
            //$supplier = supplierModel::where('id',$product->supplier_id)->get();
            $category = productTypeModel::where('id',decrypt($id))->first();
            $data['homepage'] = FALSE;
            $data['product'] = $product;
            $data['category'] = $category->name;
            return view('frontend.shop.supplier.product_by_category')->with($data);
        }
        catch (\Exception $e){
            return view('frontend.shop.supplier.product_by_category')->with('response-error', $e->getMessage());
        }
    }

    public function product_detail($id)
    {
        try{
            $product = productModel::where('id',decrypt($id))->get();
            $data['homepage'] = FALSE;
            $data['product'] = $product;
            return view('frontend.shop.supplier.detail_product')->with($data);
        }
        catch (\Exception $e){
            return view('frontend.shop.supplier.detail_product')->with('response-error', $e->getMessage());
        }
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
}
