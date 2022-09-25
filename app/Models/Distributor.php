<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

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

        'approval_status',
        'role_id'



    ];
}
