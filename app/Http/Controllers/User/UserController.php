<?php

namespace App\Http\Controllers\User;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{    
    /**
     * create new data for register 
     *
     * @param  mixed $request
     * @return void
     */
    public function register(Request $request)
    {
       $data = new User;
       $data->name = $request->input('name');
       $data->email = $request->input('email');
       $data->password = Hash::make($request->input('email'));
       $data->save();
       return $data;
    }
}
