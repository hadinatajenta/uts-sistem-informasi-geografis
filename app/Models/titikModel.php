<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class titikModel extends Model
{
    public function alldata(){
        $result = DB::table('geospasial')
        ->select('nama','longitude','latitude')
        ->get();
        return $result;
    }
}
