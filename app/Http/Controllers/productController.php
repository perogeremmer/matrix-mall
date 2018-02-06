<?php

namespace App\Http\Controllers;

use App\productModel;
use App\productTypeModel;
use App\supplierModel;
use App\supplierTypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $data['product'] = productModel::where('supplier_id',Session::get('supplier_id'))->get();
            return view('backends.supplier.product.show')->with($data);
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            $supplier = supplierModel::where('id',Session::get('supplier_id'))->first();
            $data['product_type'] = productTypeModel::where('supplier_type',$supplier->supplier_type)->get();
            return view('backends.supplier.product.add')->with($data);
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
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
                'name' => 'required|min:6',
                'product_code' => 'required|unique:products|min:6',
                'price' => 'required|min:6|integer',
            ]);

            $data = new productModel();
            $data->name = $request->name;
            $data->product_type = $request->product_type;
            $data->product_code = $request->product_code;
            $data->price = $request->price;
            $data->supplier_id = Session::get('supplier_id');
            $data->save();
            return redirect()->route('product.index')->with('response', 'Berhasil Menambahkan Data!');
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
        try{
            $ids = decrypt($id);
            $supplier = supplierModel::where('id',Session::get('supplier_id'))->first();
            $data['product'] = productModel::where('id',$ids)->first();
            $data['product_type'] = productTypeModel::where('supplier_type',$supplier->supplier_type)->get();
            return view('backends.supplier.product.edit')->with($data);
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
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
        try{
            $this->validate($request, [
                'name' => 'required|min:6',
                'price' => 'required|min:6|integer',
            ]);

            $data = productModel::where('id',decrypt($id))->first();
            $data->name = $request->name;
            $data->product_type = $data->product_type;
            $data->product_code = $data->product_code;
            $data->price = $request->price;
            $data->supplier_id = Session::get('supplier_id');
            $data->status = $request->product_status;
            $data->save();
            return redirect()->route('product.index')->with('response', 'Berhasil Mengubah Data!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $data = productModel::where('id',decrypt($id))->first();
            $data->delete();
            return redirect()->route('product.index')->with('response', 'Success Delete Data!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error', $e->getMessage());
        }
    }
}
