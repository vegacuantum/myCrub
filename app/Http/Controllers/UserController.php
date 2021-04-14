<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //cree mis vistas
    public function index()
    {
       $users = User::latest()->get();

       return view('users.index',[
           'users' => $users
       ]);
    }

    public function store(Request $request)
    {
        //return $request->all(); esto muestra lo q estoy recibiendo
        //otra forma de salvar lo q hacemos

        // $user = new User();
        // $user->name = $request->name; asi para los demas campos y por ultimo
        //return $user, miro el objeto q me devuelve
        // $user->save();

        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return back();
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }
}
