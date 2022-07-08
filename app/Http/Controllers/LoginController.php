<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        if(Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
            $role_id = auth()->user()->role_id;
            $admin_id = auth()->user()->admin_id;
            // $exp = auth()->user()->exp;

            // if ($exp == 0){
            //     $request->session()->invalidate();
            //     $request->session()->regenerateToken();
            //     return back()->with('error', 'sorry your account is being processed, we will notify you via email');
            // }
            // elseif($admin_id == 1){
            //     $request->session()->regenerate();
            //     return redirect()->intended('/superadmin');
            // }
            if($role_id == 4){
                $request->session()->regenerate();
                return redirect()->intended('/dashboard-adv');
            }
            elseif($role_id == 1){
                $request->session()->regenerate();
                return redirect()->intended('/dashboard-admin');
            }
            elseif($role_id == 5 || $role_id == 13){
                $request->session()->regenerate();
                return redirect()->intended('/dashboard-cs');
            }
        }
        // elseif (Auth::attempt(['username' => $data['username'], 'password' => $data['password'], 'role_id' => '4'])){
        //     $request->session()->regenerate();
        //     return redirect()->intended('adv');
        // }
        // elseif (Auth::attempt(['username' => $data['username'], 'password' => $data['password'], 'role_id' => '5'])){
        //     $request->session()->regenerate();
        //     return redirect()->intended('cs');
        // }
        return back()->with('error', 'Login Failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }

}
