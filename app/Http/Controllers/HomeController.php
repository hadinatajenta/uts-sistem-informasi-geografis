<?php

namespace App\Http\Controllers;
use App\Models\GeospasialModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = GeospasialModel::all();
        return view('auth/admin/dashboard' ,compact('data'));
    }

    
}