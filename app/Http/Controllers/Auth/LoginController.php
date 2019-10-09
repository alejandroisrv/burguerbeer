<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function login(Request $request){
        $data = $request->all();
        $credentials= ['email'=>$data['email'], 'password'=> $data['password'] ];
        if (auth()->attempt($credentials)) {
          $user = auth()->user();
          return response()->json(['response' => true,'user'=> $user]);
        }
        return response()->json(['error'=> 'Los datos son incorrectos'],422);
      }

    public function register(Request $request){
      $data = $request->all();
      $user = User::create([
        'name' => $data['nombre'],
        'email' => $data['email'],
        'telefono' => $data['telefono'],
        'direccion' => $data['direccion'],
        'password' => Hash::make($data['password']),
      ]);
        
      $credentials= ['email'=>$data['email'], 'password'=> $data['password'] ];

      if($user){
        if(auth()->attempt($credentials)){
          $user = auth()->user();
          return response()->json(['response' => $user ], 201);
        }
      }
      return response()->json(['response' => "No se ha podido crear el usaurio"], 422);
    }
}
