<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

use function Laravel\Prompts\password;


// our all auth system depends on Auth facade
class SessionController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }


    public function store(Request $request)
    {
        // more strict rules password::min(3)->numbers()->symbols(),

        $credentials = $request->validate([
            'email' => 'required|email|string', //here put the same names in blade
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/jobs');

        }


        return redirect('/login')->withErrors([
            'email'=>'the email credential incorrect',
        ]);
    }


  public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}
}



// every thing depends on Auth facade

// register user
// (Auth::login())
//log user out
// (Auth::logout())
//login user 
// (Auth::attempt())
