<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\LoginNotification;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('frontend/auth/login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        
        $password = $request->input('password');

        if (User::where('email', $email)->exists()) 
        {
            $user = User::where('email', $email)->first();
            
            Auth::login($user);   
            
            // Send login notification email
            $this->sendLoginNotification($user);

            return redirect('profile');
        }
        
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email  or password']);
        
    }

    /**
     * Send login notification email.
     *
     * @param \App\Models\User $user
     * @return void
     */
    private function sendLoginNotification(User $user)
    {
        Mail::to($user->email)->send(new LoginNotification($user));
    }

    public function profile(Request $request)
    {
        return view('frontend/auth/profile');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function register(Request $request)
    {
        return view('frontend/auth/register');
    }
}
