<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
class AccountController extends Controller
{
    public function index(){
        $datas=User::orderby('id','desc')->get();
        $header='';
        $slot='';
        return view('account/index',compact('datas','header','slot'));
    }
    public function create(){
        return view('account/create');
    }
    public function store_account(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('account');
    }
}
