<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        return response()->json($users,200);
    }

    public function module1(){
        $users = User::all();
        return view('module1',compact('users'));
    }

    public function module2(){
        $users = User::all();
        return view('module2',compact('users'));
    }

    public function createUser(Request $request){
        $createUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/module1');
    }

    public function createUser2(Request $request){
        $createUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return response()->json('success',200);
    }
}
