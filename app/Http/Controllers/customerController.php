<?php

namespace App\Http\Controllers;

use App\customerModel;
use App\supplierTypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        try{
//            $data['supplier_type'] = supplierTypeModel::all();
//            $data['homepage'] = FALSE;
//            return view('frontend.shop.index')->with($data);
//
//        }
//        catch (\Exception $e){
//            return view('frontend.shop.index')->with('response-error', $e->getMessage());
//        }
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

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
                'email' => 'required|unique:suppliers|unique:customer|min:6|email',
                'password' => 'required|min:6',
                'confirmation_password' => 'required|same:password',
            ]);

            $data = new customerModel();
            $data->name = $request->name;
            $data->address = $request->address;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $code = time();
            $data->customer_code = $code;
            $data->remember_token = str_random(32);
            $data->save();
            //$this->email->registration($request->name,$request->email,$code);
            return redirect()->back()->with('response', 'Register berhasil! silahkan gunakan '. $code .' untuk login sebagai username, dan password yang sudah anda masukkan! Jika anda lupa anda dapat mengeceknya di email anda!');

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
        print_r('heee');
    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }

    public function login(){
        try{
            $data['homepage'] = FALSE;
            return view('frontend.login-register')->with($data);

        }
        catch (\Exception $e){
            return view('frontend.login-register')->with('response-error', $e->getMessage());
        }
    }

    public function logout(){
        try{
            Session::flush();
            return redirect('customer/login')->with('response','Berhasil logout!');
        }
        catch (\Exception $e){
            return redirect('customer/login')->with('response-error',$e->getMessage());
        }
    }


    public function check_login(Request $request){
        try{
            $data = customerModel::where('customer_code',$request->username)->first();

            if($data){
                if(Hash::check($request->password,$data->password)){
                    Session::put('customer_id',$data->id);
                    Session::put('customer_name',$data->name);
                    Session::put('customer_email',$data->email);
                    Session::put('customer_isLogin',true);
                    return redirect()->route('shop.index');
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

}
