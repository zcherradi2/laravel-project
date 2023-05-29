<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Store;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        //
        $data = request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if (auth()->attempt($data)) {
            // Authentication successful
            request()->session()->regenerate();
            return redirect('/brands'); // Redirect to the authenticated user's dashboard or any other page
        } else {
            // Authentication failed
            return back()->withErrors([
                'email' => 'Invalid credentials' // Add a custom error message
            ]);
        }
    }
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required'
        ]);
        $u = new User;
        $u->setAttribute('name',$data['name']);
        $u->setAttribute('email',$data['email']);
        $pass = bcrypt($data['password']);
        $u->setAttribute('password',$pass);
        
        $u->save();
        auth()->login($u);
        // $newBrand = new Brand;
        // $newBrand->fill($request->all())->save();

        return redirect("/brands");
    }
    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect("/");
    }
    public function index(){
        if(auth()->check()){
            return redirect("/brands");
        }else{
            return view("login");
        }
    }

}
