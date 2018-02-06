<?php

namespace App\Http\Controllers;

use App\adminModel;
use App\supplierModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{

    public function update($id){
        try{
            $data['homepage'] = FALSE;
            $data['supplier'] = supplierModel::where('status',0)->get();
            return redirect('/suppliers')->with($data);
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error', $e->getMessage());
        }
    }

    public function suppliers(){
        try{
            $data['homepage'] = FALSE;
            $data['supplier'] = supplierModel::where('status',0)->get();
            return view('backends.admin.show')->with($data);
        }
        catch (\Exception $e){
            return view('backends.admin.show')->with('response-error', $e->getMessage());
        }
    }

    public function login(){
        try{
            $data['homepage'] = FALSE;
            return view('backends.admin.login')->with($data);
        }
        catch (\Exception $e){
            return view('backends.admin.login')->with('response-error', $e->getMessage());
        }
    }

    public function logout(){
        try{
            Session::flush();
            return redirect('admin/login')->with('response','Berhasil logout!');
        }
        catch (\Exception $e){
            return redirect('admin/login')->with('response-error',$e->getMessage());
        }
    }


    public function check_login(Request $request){
        try{
            $data = adminModel::where('email',$request->email)->first();

            if($data){
                if(Hash::check($request->password,$data->password)){
                    Session::put('admin_id',$data->id);
                    Session::put('admin_name',$data->name);
                    Session::put('admin_email',$data->email);
                    Session::put('admin_isLogin',true);
                    return redirect('admin/suppliers');
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

    public function approve($id){
        try{
            $data = supplierModel::where('id',decrypt($id))->first();
            $data->status = 1;
            $data->save();
            return redirect('admin/suppliers')->with('response','Successful Approve data!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
    }
}
