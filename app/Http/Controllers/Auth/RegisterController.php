<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
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
    // protected $redirectTo;
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo()
    {
        if (auth()->user()->utype ===1) {
            return '/admin/index';
        } else if (auth()->user()->utype ===2) {
            return '/moderator/index';
        }else if (auth()->user()->utype ===3) {
            return '/user/index';
        }  
        else {
            return '/home';
        }
    }

    // public function redirectTo()
    // {
    //     switch(Auth::user()->utype){
    //         case 1:
    //         $this->redirectTo = '/admin';
    //         return $this->redirectTo;
    //             break;
            
    //         case 2:
    //             $this->redirectTo = '/moderator';
    //             return $this->redirectTo;
    //             break;
    //         case 3:
    //                 $this->redirectTo = '/user';
    //                 return $this->redirectTo;
    //                 break;
         
    //         default:
    //             $this->redirectTo = '/login';
    //             return $this->redirectTo;
    //     }
         
    //     // return $next($request);
    // } 
    // = RouteServiceProvider::HOME;

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
            'username' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'referral_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nationality' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'language' => ['required', 'string', 'max:255'],
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
            'username' => $data['username'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'referral_name' => $data['referral_name'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'nationality' => $data['nationality'],
            'password' => Hash::make($data['password']),
            'language' => $data['language'],
        ]);
    }
}
