<?php

namespace App\Http\Controllers;
use App\Models\titikModel;
use Illuminate\Http\Request;

class titikController extends Controller
{
    public function __construct(){
        $this->titikModel= new titikModel();
    }
    public function index (){
        return view('welcome');
    }
    public function titik(){
        $result= $this->titikModel->alldata();
        return json_encode($result);
    }
}
