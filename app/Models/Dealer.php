<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    public static function getDealerData(){
        $value = DB::table('dealers')->orderBy('id','asc')->get();
        return $value;
    }
}
