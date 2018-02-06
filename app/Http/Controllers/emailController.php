<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    public function registration($name,$email,$code){
        $data = ['name' => $name, 'code' => $code ];

        Mail::send('emails.regist', $data, function ($mail) use ($email,$name)
        {
            $mail->to($email, $name);
            $mail->subject('Selamat Bergabung!');
        });

        if(count(Mail::failures()) > 0){
            return false;
        }
        else{
            return true;
        }
    }
}
