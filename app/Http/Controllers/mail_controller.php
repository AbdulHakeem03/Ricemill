<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\user_mail;
use Mail;

class mail_controller extends Controller
{
   

    function save (Request $req){

        $data = new User;

        $data->name=$req->name;
        $data->email=$req->email;
        $data->city=$req->city;
        $data->password=$req->password;
        $data->save();

        $details=[
            'title'=>'Information For:'.$req->name,
            'url'=>'https://www.itsolutionstuff.com'
        ];
        Mail::to($req->email)->send(new user_mail($details));


        return redirect('/');
    }
}
