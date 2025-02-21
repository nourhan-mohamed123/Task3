<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Validation\ValidationException;



class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'max:255'],
        ]);

        if (Auth::attempt($data, $request->has('remember'))) {
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
            'password' => 'These credentials do not match our records.',
        ])->withInput($request->except('password'));
    }
}
