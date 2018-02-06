<?php

namespace App\Http\Controllers;

use App\transactionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class transactionController extends Controller
{
    public function customerTransaction(){
        try{
            $transUn = transactionModel::where('customer_id',Session::get('customer_id'))->where('status',0)->get();
            $transIn = transactionModel::where('customer_id',Session::get('customer_id'))->where('status',1)->get();
            $data['transaction_unprocess'] = $transUn;
            $data['transaction_inprocess'] = $transIn;
            $data['homepage'] = FALSE;
            return view('frontend.customer.transaction')->with($data);
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
    }

    public function transactionUnprocess(){
        try{
            $trans = transactionModel::where('supplier_id',Session::get('supplier_id'))->where('status',0)->get();
            $data['transaction'] = $trans;
            $data['notes'] = "Not Process";
            $data['action'] = TRUE;
            return view('backends.supplier.transaction.data')->with($data);
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
    }

    public function transactionInprocess(){
        try{
            $trans = transactionModel::where('supplier_id',Session::get('supplier_id'))->where('status',1)->get();
            $data['transaction'] = $trans;
            $data['notes'] = "On Process";
            $data['action'] = FALSE;
            return view('backends.supplier.transaction.data')->with($data);
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
    }

    public function processing($id){
        try{
            $data = transactionModel::where('id',decrypt($id))->first();
            $data->status = 1;
            $data->save();
            return redirect('supplier/transaction/un-process')->with('response','Successful process data!');
        }
        catch (\Exception $e){
            return redirect()->back()->with('response-error',$e->getMessage());
        }
    }
}
