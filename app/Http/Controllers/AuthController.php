<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registrationForm() {
        return view('register');
    }
 
    public function loginForm(){
        return view('login');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|email|unique:users',
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'remember_token' => $token
        ]);

        Mail::send('verification-email', ['user'=>$user], function($mail) use ($user) {
            $mail->to($user->email);
            $mail->subject('Account Verification');
            $mail->from('cycabahug21@gmail.com', 'Verification Letter');
        });

        return redirect('/login')->with('Message', 'Your account has been created. Check email for verification.');

    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || $user->email_verified_at==null) {
            return redirect ('/login')->with('Error', 'You are not yet verified.');
        }

        $login = auth()->attempt([
            'email'=> $request->email,
            'password' => $request->password
        ]);

        if(!$login) {
            return back()->with('Error', 'Invalid credentials!');
        }

        return redirect('/dashboard'); 

    }

    public function verification(User $user, $token) {
        if($user->remember_token!==$token) {
            return redirect('/login')->with('Error', 'The token is invalid.');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect('/login')->with('Message', 'Account has been verified. You may login.');

    }

    public function logout(Request $request){
        auth()->logout();
        return redirect('/')->with('Message', 'Logged out successfuly');
    }
}
