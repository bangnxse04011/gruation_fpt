<?php

namespace App\Http\Controllers\Auth;

use App\User;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = '/';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //------------------------------------------------------------------------------
    /**
     * Method sign In and check exist data
     */
    public function sign_In(Request $request) {
        try {
            $password = $request->input('password');
            $password_confirmation = $request->input('password_confirmation');
            //-----------------------------------------------------
            $name = $request->input('name');
            $email_signin = $request->input('email');
            $user =  User::create([
                'name' => $name,
                'email' => $email_signin,
                'password' => Hash::make($password),
            ]);
            if($user) {
                $mesage = "Tạo tài khoản thành công.";
            }
        } catch (\Exception $e) {
            $mesage = "Đã có lỗi trong quá trình xử lý.";
        }
        return response()->json(['MESSAGE' => $mesage]);
    }
    
    //------------------------------------------------------------------------------
    /**
     * Method check exit user
     *
     * @return true if exit and false if not exit
     */
    public function check_Exist_User(Request $request) {
        $email = $request->input('email');
        try {
            if($email && $email != null) {
                $user_Item = User::where('email', $email)->get()->toArray();
            }
        } catch (\Exception $e) {
            $user_Item = null;
        }
        return response()->json(['user_item' => $user_Item]);
    }

    //------------------------------------------------------------------------------
    /**
     * Method change pass
     *
     * @return true if exit and false if not exit
     */
    public function change_Pass(Request $request) {
        dd(11111);
    }
}
