<?php

namespace App\Http\Controllers;

use App\supplierModel;
use App\supplierTypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class supplierController extends Controller
{
    public function __construct()
    {
        $this->email = new emailController();
    }

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
                'name' => 'required|min:6',
                'address' => 'required|min:6',
                'email' => 'required|unique:suppliers|min:6|email',
                'password' => 'required|min:6',
                'confirmation_password' => 'required|same:password',
            ]);

            $data = new supplierModel();
            $data->name = $request->name;
            $data->address = $request->address;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->supplier_type = $request->supplier_type;
            $data->slogan = $request->slogan;
            $code = time();
            $data->supplier_code = $code;
            $data->save();
            //$this->email->registration($request->name,$request->email,$code);
            return redirect()->back()->with('response', 'Register berhasil! silahkan gunakan '. $code .' untuk login sebagai username, dan password yang sudah anda masukkan! Jika anda lupa anda dapat mengeceknya di email anda!');

        }
        catch (\Exception $e){
            return redirect('supplier-register')->with('response-error', $e->getMessage());
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

    public function login(){
        try{
            return view('backends.login');
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
    }

    public function logout(){
        try{
            Session::flush();
            return redirect('supplier/login')->with('response','Berhasil logout!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
    }


    public function check_login(Request $request){
        try{
            $data = supplierModel::where('supplier_code',$request->code)->first();

            if($data){
                if(Hash::check($request->password,$data->password)){
                    Session::put('supplier_id',$data->id);
                    Session::put('supplier_name',$data->name);
                    Session::put('supplier_email',$data->email);
                    Session::put('supplier_isLogin',true);
                    return redirect()->route('product.index');
                }
                else{
                    return redirect()->back()->with('response-error', 'Wrong credientials username or password!');
                }
            }
            else{
                return redirect()->back()->with('response-error', 'We can`t found this account');
            }
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error', $e->getMessage());
        }
    }


    public function register(){
        try{
            $data['supplier_type'] = supplierTypeModel::all();
            return view('backends.register')->with($data);
        }
        catch (\Exception $e){
            return redirect('supplier-register')->with('response-error', $e->getMessage());
        }

    }
}
