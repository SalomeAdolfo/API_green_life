<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'primer_apellido' => ['required', 'string'],
            'segundo_apellido' => ['required','string'],
            'sexo' => ['required','string'],
            'perfil' => ['required', 'string']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
            return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'primer_apellido' =>$data['primer_apellido'],
            'segundo_apellido' => $data['segundo_apellido'],
            'sexo'=> $data['sexo'],
            'perfil' => $data['perfil'],
            'password' => Hash::make($data['password']),

        ])->assignRole($data['perfil']);
        //if($data['perfil'] === 'Vendedor'){
        //    $user -> assignRole("Vendedor");
        //    return $user;
        //}else if($data['perfil'] === 'Cliente'){
        //    $user -> assignRole("Cliente");
        //    return $user;
        //}
        
        
    }
}
