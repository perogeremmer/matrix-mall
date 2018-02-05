<?php

namespace App\Http\Controllers;

use App\supplierModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                'name' => 'required',
                'address' => 'required',
                'email' => 'required|unique:suppliers',
                'password' => 'required',
                'confirmation password' => 'required|same:password',
            ]);

            $data = new supplierModel();
            $data->name = $request->name;
            $data->address = $request->address;
            $data->email = $request->email;
            $data->password = $request->password;
            $data->supplier_type = $request->supplier_type;
            $data->slogan = $request->slogan;
            $data->supplier_code = time();
            $data->save();

        }
        catch (\Exception $e){
            return redirect('form');
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
