<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dealer;
use Illuminate\Support\Facades\DB;


class DealerController extends Controller
{
    //

    public function index(){
        return view('dealer.index');
    }

    public function addDealer(){
        return view('dealer.create');
    }

    public function Add_Dealer(Request $request){

        DB::table('dealers')->insert([

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

            'distributor_id' =>$request->distributor_id,
            'role_id' => '3'
        ]);

        return redirect('dealers');
    }

    public function dealer_approve($id){


        $deal_data = DB::table('dealers')->where('id', $id)->first();


        DB::table('dealers')->where('id', $id)->update([

            'approval_status' => '1'
        ]);


        DB::table('users')->insert([

            'name' => $deal_data->name,
            'email' => $deal_data->email,

            'mobile_number' => $deal_data->mobile_number,
            'country' => $deal_data->country,

            'city' => $deal_data->city,
            'state' => $deal_data->state,
            'password' => '123',
            'role_user'=> '3'
        ]);

        return redirect('/home');
    }
}
