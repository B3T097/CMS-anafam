<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Auth
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $error = $request->has("error");
        $tipo_error = $request->error;
        if ($error && $tipo_error == 1) {
            
        }
        return view('Login.login');
    }

    public function login(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $recordar = $request->has('remember');
        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return redirect()->intended(route('bienvenida'));
        } else {
            return back()->withErrors([
                'error' => 'EL Usuario y/o Contraseña son incorrectos.',
            ])->onlyInput('correo');
        }
    }

    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = new User();
        $user->nombre = $request->txtNombre;
        $user->pass = Hash::make($request->txtPWD);
        // $user->password = $request->txtPWD;
        $user->email = $request->txtEmail;

        
        if($user->save()){
            return redirect(route('newUser'));            
        }else{
            return redirect(route('newUser',['error' => 1]));
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }
}
