<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    protected $user;
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|exists:users,email',
            'password' => "required",
        ]);
    }

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            View::share('user', Auth::user());
            return $next($request);
        });
        $this->middleware('auth', ['except' => 'login']);
    }

    /**
     * @return View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|View
     */
    public function login(Request $request)
    {
        $validator = $this->validator($request->all());

        if(request()->method() == "POST" && $validator->fails())
            return redirect()->back()->withErrors($validator);

        if (Auth::attempt(request()->only(['email', 'password']))){
            return redirect("admin/")->with('user', $this->user);
        }

        return view("login");
    }

    /**
     * @return View
     */
    public function logout()
    {
        Auth::logout();

        return view("login");
    }
}
