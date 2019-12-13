<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login'); 
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required',
        'password'  => 'required|min:5'
      ]);

      $user     = User::where('email', $request->email);
      $get_user = $user->first();
      $count    = $user->count();

      if($count > 0) {
        // Attempt to log the user in
        if (Auth::guard($get_user->role)->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
          
          // if successful, then redirect to their intended location
          $getRole = Auth::guard($get_user->role)->user()->role;

          if($getRole == 'admin'){
              return redirect()->route('dashboard');
          }
        }
        // if unsuccessful, then redirect back to the login with the form data
        \Session::flash('flash_message', array('pesan' => 'Maaf, kombinasi username dan password salah', 'tipe' => 'error'));
          return back();
      } else {
        // if unsuccessful, then redirect back to the login with the form data
        \Session::flash('flash_message', array('pesan' => 'Maaf, kombinasi username dan password salah', 'tipe' => 'error'));
        return back();
      }
    }

    public function logout(Request $request) {
        $user = User::where('id', $request->user_id)->first();
        Auth::guard($user->role)->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        \Session::flash('flash_message', array('pesan' => 'Anda Berhasil Logout', 'tipe' => 'success'));
        return redirect()->route('login');
    }
}
