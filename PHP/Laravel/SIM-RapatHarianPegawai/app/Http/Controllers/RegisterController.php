<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Regsiter',
            'active' => 'register'
        ]);
    }   

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:50'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        // $request->session()->flash('succes','Registration succesfull!! Please login');
        
        return redirect('/Login')->with('success','Registration succesfull! Please login');
    }
}
