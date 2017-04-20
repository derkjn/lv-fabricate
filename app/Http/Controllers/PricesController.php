<?php

namespace App\Http\Controllers;

use App\Price;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PricesController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            View::share('user', Auth::user());
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::all();
        $stores = Store::all();
        return view('price.index', ['prices' => $prices, 'stores' => $stores]);

    }
}
