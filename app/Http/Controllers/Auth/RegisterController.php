<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'age' => 'required'
        ]);
   
        if($validator->fails()){
            return response()->json(['message' => $validator], 401);      
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'age' => $request->age
        ]);
        $token = $user->createToken('Mini-Ecommerce')->accessToken;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $token;
            $success['name'] =  $user->name;

        
 
        return response()->json([
            'token' => $token,
            'user' => $user,
            'success' => 'User registered and logged in!'
        ], 201);
        }

    }


    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $userdetails = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($userdetails)){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('Mini Ecommerce')->accessToken; 
            $success['name'] =  $user->name;
            
            return response()->json(['token' => $success,
            'success' => 'User logged in successfully'], 200);;
        } 
        else{ 
            return response()->json(['error' => 'UnAuthorised'], 401);
        } 
    }
    
}
