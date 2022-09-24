@extends('layouts.app')

@section('title', 'Add Distributor')

@section('content')



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Distributor</h1>
        <a href="{{route('distributor.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Distributor Details</h6>
        </div>
        <form action="<?php echo url('/') ?>/Set_Roles"  method="post">
            {{ csrf_field() }}

            <div class="card-body">
                <div class="form-group row" style="justify-content: end;">

                    <input name="role_id" style="display:none" value="{{$myroles->role}}" type="text">

                    <h3 class="mt-2" style="text-align-last: center;margin: 26px;flex: 1 1 auto;font-weight: 600;">Table Distributors</h3>
                    <!-- distributors -->
                    <div class="container" style="display: flex;justify-content: end;margin-bottom: 50px;border-style: solid;padding-bottom: 55px;">
                        <div class="col-lg-5 mb-3 mt-4 mb-sm-0">
                            <label style="font-size: larger;">Distributors List <span style="color: red;">*</span></label>
                            <select name="dist" id="access" style="text-align-last: center;width: 48%;display: block;">
                                <option  {{ ($myroles->dist == '1') ? 'selected' : '' }}  value="1"> YES</option>
                                <option  {{ ($myroles->dist == '0') ? 'selected' : '' }}  value="0"> NO</option>
                            </select> 
                        </div>

                        <div class="col-lg-5 mb-3 mt-4 mb-sm-0">
                            <label style="font-size: larger;" >Distributors Create <span style="color: red;">*</span></label>
                            <select name="dist2" id="access" style="text-align-last: center;width: 48%;display: block;">
                                <option  {{ ($myroles->dist == '1') ? 'selected' : '' }}  value="1"> YES</option>
                                <option  {{ ($myroles->dist == '0') ? 'selected' : '' }}  value="0"> NO</option>
                            </select> 
                        </div>
                    </div>

                

                    <h3 class="mt-5" style="text-align-last: center;margin: 26px;flex: 1 1 auto;font-weight: 600;">Table Dealers</h3>
                    <!-- dealers -->
                    <div class="container" style="display: flex;justify-content: end;margin-bottom: 50px;border-style: solid;padding-bottom: 55px;">

                        <div class="col-lg-5 mb-3 mt-4 mb-sm-0">
                            <label style="font-size: larger;">Dealers Table 
                                <span style="color: red;">*</span>
                            </label> 
                            
                            <select name="deal" id="access" style="text-align-last: center;width: 48%;display: block;">
                                <option  {{ ($myroles->deal == '1') ? 'selected' : '' }}  value="1"> YES</option>
                                <option  {{ ($myroles->deal == '0') ? 'selected' : '' }}  value="0"> NO</option>
                            </select>
                        </div>

                        <div class="col-lg-5 mb-3 mt-4 mb-sm-0">
                            <label style="font-size: larger;">Dealers Table 
                                <span style="color: red;">*</span>
                            </label> 
                            
                            <select name="deal2" id="access" style="text-align-last: center;width: 48%;display: block;">
                            <option  {{ ($myroles->deal == '1') ? 'selected' : '' }}  value="1"> YES</option>
                            <option  {{ ($myroles->deal == '0') ? 'selected' : '' }}  value="0"> NO</option>

                            </select>
                        </div>
                    </div>



                    <h3 class="mt-5" style="text-align-last: center;margin: 26px;flex: 1 1 auto;font-weight: 600;">Table Users</h3>
                    <!-- users -->
                    <div class="container" style="display: flex;justify-content: end;margin-bottom: 50px;border-style: solid;padding-bottom: 55px;">

                        <div class="col-lg-5 mb-3 mt-4 mb-sm-0">
                            <label style="font-size: larger;">Users Table 
                                <span style="color: red;">*</span>
                            </label> 
                            <select name="users"  text-align-last:="" id="access" name="access" style="text-align-last: center;width: 48%;display: block;">
                                <option  {{ ($myroles->users == '1') ? 'selected' : '' }}  value="1"> YES</option>
                                <option  {{ ($myroles->users == '0') ? 'selected' : '' }}  value="0"> NO</option>
                            </select>
                        </div>
                        

                        <div class="col-lg-5 mb-3 mt-4 mb-sm-0">
                            <label style="font-size: larger;">Users Table 
                                <span style="color: red;">*</span>
                            </label> 
                            <select name="users2"  text-align-last:="" id="access" name="access" style="text-align-last: center;width: 48%;display: block;">
                                <option  {{ ($myroles->users == '1') ? 'selected' : '' }}  value="1"> YES</option>
                                <option  {{ ($myroles->users == '0') ? 'selected' : '' }}  value="0"> NO</option>
                            </select>
                        </div>
                    </div>    


                    
                    <!-- roles -->
                    <h3 class="mt-5" style="text-align-last: center;margin: 26px;flex: 1 1 auto;font-weight: 600;">Table Roles & Permissions</h3>
                    <div class="container" style="display: flex;justify-content: end;margin-bottom: 50px;border-style: solid;padding-bottom: 55px;">

                        <div class="col-lg-5 mb-3 mt-5 mb-sm-0" style="">
                            <label style="font-size: larger;">Roles &amp; Permissions Table 
                                <span style="color: red;">*</span>
                            </label>
                            
                            <select name="roles" id="access" text-align-last:="" style="text-align-last: center;width: 48%;display: block;">
                                <option  {{ ($myroles->roles == '1') ? 'selected' : '' }}  value="1"> YES</option>
                                <option  {{ ($myroles->roles == '0') ? 'selected' : '' }}  value="0"> NO</option>
                            </select>
                        </div>

                        <div class="col-lg-5 mb-3 mt-5 mb-sm-0" style="">
                            <label style="font-size: larger;">Roles &amp; Permissions Table 
                                <span style="color: red;">*</span>
                            </label>
                            
                            <select name="roles2"  name="access" id="access" text-align-last:="" style="text-align-last: center;width: 48%;display: block;">
                                <option  {{ ($myroles->roles == '1') ? 'selected' : '' }}  value="1"> YES</option>
                                <option  {{ ($myroles->roles == '0') ? 'selected' : '' }}  value="0"> NO</option>
                            </select>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-footer text-center">
                <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                {{-- <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('distributor.index') }}">Cancel</a> --}}
            </div>
        </form>
    </div>

    <style>
            
    .container{
    display: flex;
    margin-bottom: 31px;
    justify-content: end;
    }
    </style>

</div>


@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.form-control-payment').on('change', function(){
    	        var payment_type = $(this).val(); 
                if(payment_type == 1){
                    $(".cheque_payment").show();
                    $(".neft_payment").hide();
                }
                else if(payment_type == 2){
                    $(".cheque_payment").hide();
                    $(".neft_payment").show();
                }
                else{
                    $(".cheque_payment").hide();
                    $(".neft_payment").hide();
                }
            });
        });
    </script>
@endsection
