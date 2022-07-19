<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SinginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Singin.index');
    }


    public function form(Request $request){
        
        // dd($request->all());
        $user = [
            'user' => $request->user,
            'role_id' => 1,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ];
        // dd($user);
        User::create($user);
        return redirect()->route('site.login.get');
    }
}
