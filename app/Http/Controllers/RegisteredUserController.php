<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {

    //validate the request data
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'employer_name' => 'required|string',
            'employer_logo' => 'required|image|mimes:jpg,png,jpeg|max:2048'
            ]);

            // create new user in DB
            $user = User::create($request->only([
                'name',
                'email',
                'password'
                ]));

            // handling the employer data

                //store the file in the distination disk
            $path = $request->file('employer_logo')->store('images','public');  //create images folder in public desk


            $user->employer()->create([
                'name'=>$validated['employer_name'],
                'logo'=>$path
            ]);


            Auth::login($user);
        return redirect('/');
    }


}
