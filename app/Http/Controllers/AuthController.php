<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\LoginNotification;
use App\Mail\LogoutNotification;

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
        // Retrieve the currently authenticated user before logging out
        $id = Auth::id();

        // dd($id);
        $user = User::where('id', $id)->first();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Send logout notification email
        if ($user) {
            $this->sendLogoutNotification($user);
        }

        return redirect('/');
    }

    /**
     * Send logout notification email.
     *
     * @param \App\Models\User $user
     * @return void
     */
    private function sendLogoutNotification(User $user)
    {
        Mail::to($user->email)->send(new LogoutNotification($user));
    }


    public function register(Request $request)
    {
        return view('frontend/auth/register');
    }
}
