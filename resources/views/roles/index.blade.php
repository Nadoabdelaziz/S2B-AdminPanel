@extends('layouts.app')

@section('title', 'Add Distributor')

@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Roles</h1>
        <a href="{{route('distributor.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')
   
    <!-- DataTales Example -->
    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code> </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>Distributors Table</th>
                          <th>Dealers Table</th>
                          <th style="padding-left: 40px;">Users Table</th>
                          <th>Roles & Permissions Table</th>

                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($roles as $role)
                            <?php $id = $role->role ?>
                            <tr>
                                <td>{{ ($role->role) == '1' ? 'SuperAdmin' : 
                                        (($role->role) == '2' ? 'Distributor':
                                        (($role->role) == '3' ? 'Dealer':
                                        (($role->role) == '4' ? 'SO':
                                        (($role->role) == '5' ? 'Support': ''))))}}</td>
                                
                                <td>
                                        @if($role->dist == '1')
                                            <h3 style="color: lawngreen;padding-left: 48px;">
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </h3>
                                        @else
                                            <h3 style="color: red;padding-left: 48px;">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </h3>
                                        @endif
                                </td>        
                                <td>
                                        @if($role->deal == '1')
                                            <h3 style="color: lawngreen;padding-left: 48px;">
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </h3>
                                        @else
                                            <h3 style="color: red;padding-left: 48px;">
                                              <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </h3>
                                        @endif
                                </td>
                                <td>
                                    @if($role->users == '1')
                                            <h3 style="color: lawngreen;padding-left: 48px;">
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </h3>
                                        @else
                                            <h3 style="color: red;padding-left: 48px;">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </h3>
                                        @endif</td>
                                <td>
                                        @if($role->roles == '1')
                                            <h3 style="color: lawngreen;padding-left: 48px;">
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </h3>
                                        @else
                                            <h3 style="color: red;padding-left: 48px;">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </h3>
                                        @endif</td>
                                </td>
                                <td>
                                        <a class="btn btn-warning" href="{{route('roles.edit',$id)}}">
                                            Edit
                                        </a> 
                                </td>
                            </tr>
                        @endforeach    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

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
