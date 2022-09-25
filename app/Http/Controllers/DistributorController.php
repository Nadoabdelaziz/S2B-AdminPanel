<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistributorController extends Controller
{
    public function index(){
        return view('distributor.index');
    }
    public function addDistributor(){
        return view('distributor.create');
    }

    public function Add_Distributor(Request $request){

        DB::table('distributors')->insert([

            'name' => $request->first_name,
            'email' => $request->email,

            'mobile_number' => $request->mobile_number,
            'country' => $request->country,

            'city' => $request->city,
            'state' => $request->state,

            'payment_type' => $request->status,
            'bank_name' => $request->bank_name,

            'bank_ifsc' => $request->bank_ifsc,
            'cheque_number' => $request->chequenumber,

            'neft_number' => $request->neft_number,
            'neft_details' => $request->neft_details,
            'role_id' => '2'
        ]);

        return redirect('distributors');
    }


    public function dist_approve($id){




        $dist_data = DB::table('distributors')->where('id', $id)->first();


        DB::table('distributors')->where('id', $id)->update([

            'approval_status' => '1'
        ]);


        DB::table('users')->insert([

            'name' => $dist_data->name,
            'email' => $dist_data->email,

            'mobile_number' => $dist_data->mobile_number,
            'country' => $dist_data->country,

            'city' => $dist_data->city,
            'state' => $dist_data->state,
            'password' => '123',
            'role_user' => '2'
        ]);

        return redirect('/home');
    }
}
