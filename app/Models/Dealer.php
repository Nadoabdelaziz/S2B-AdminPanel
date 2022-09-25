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

    protected $fillable = [

        'name',
        'email',

        'mobile_number',
        'country',

        'city',
        'state',

        'bank_ifsc',
        'bank_name',

        'payment_type',
        'cheque_number',

        'neft_number',
        'neft_details',

        'role_id',
        'approval_status',
        'distributor_id'

    ];
}
