<?php

namespace App\Http\Controllers;

use App\Scanner;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ScannerController extends Controller
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
        $scanners = Scanner::all();
        return view('scanners.index', ['scanners' => $scanners]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scanners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scanner = new Scanner($request->all());
        $scanner->save();
        return redirect()->back()->with('message', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scanner = Scanner::find($id);
        $stores = Store::all();
        return view('scanners.show', ['scanner' => $scanner, 'stores' => $stores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
        $scanner = Scanner::find($id);
        $scanner->fill($request->all());
        $scanner->save();
        return redirect()->back()->with('message', 'Data saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
