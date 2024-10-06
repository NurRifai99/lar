<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
 

    public function login()
    {
        if (Auth::check()) {
            return redirect(to: 'home');
        }else{
            return view(view: 'login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input(key: 'email'),
            'password' => $request->input(key: 'password'),
        ];

        if (Auth::Attempt(credentials: $data)) {
            return redirect(to: 'home');
        }else{
            Session::flash(key: 'error', value: 'Email atau Password Salah');
            return redirect(to: '/');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('/');
    }
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
