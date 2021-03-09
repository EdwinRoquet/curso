<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $usuarios = User::all();
        return view('usuarios.index', compact('roles','usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'rol' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
          ]);

          $valorAleatorio = uniqid();
          $slug = Str::of($data['name'])->slug("-")->limit(255 - mb_strlen($valorAleatorio) - 1, "")->trim("-")->append("-", $valorAleatorio);

          $user = User::create([
              'slug' =>  $slug ,
              'name' => $data['name'],
              'email' => $data['email'],
              'password' => Hash::make($data['password']),
          ]);

          $user->roles()->attach(Role::where('name', $data['rol'],)->first());

          return redirect()->action([UserController::class, 'index'])->with('mensaje','Se agrego correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('activacion.usuario')->with('usuario', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->action([UserController::class, 'index'])->with('mensaje','Se elimino correctamente');
    }
}
