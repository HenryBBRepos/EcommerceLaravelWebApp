<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;



class AccountController extends Controller
{
    //

     // this is for sign up
     public function signup_page(){
        return view("pages.signup");
    }
    public function signup(Request $request){
        $valid = $this->validation($request->all());
        if($valid){

            $request['password'] = bcrypt($request->password);
            User::create($request->all());
            return view("pages.index");
        }
    }


    
    public function validation($reAZqquest){

        $validator = Validator::make($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|unique:users|max:255|email',
            'phone' => 'required|max:255',
            'Password' => 'required|max:255',
            'confirm' => 'required|max:255',

        ]);

        return $validator;
    
    }

}
