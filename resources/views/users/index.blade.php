@extends('layouts.app')

@section('title', 'Add Distributor')

@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Distributors List</h1>
        <a href="{{route('distributor.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-left fa-sm text-white-50"></i> Back
        </a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')
   
    <!-- DataTales Example -->
    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr style="white-space: nowrap;">
                          <th>ID</th>

                          <th>Name</th>
                          <th>Email</th>

                          <th>Mobile Number</th>
                          <th>Country</th>

                          <th>City</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $dist)
                            <tr>
                                <td>{{ $dist->id }}</td>
                                
                                <td>{{ $dist->name }}</td>

                                <td>{{ $dist->email }}</td>

                                <td>{{ $dist->mobile_number }}</td>

                                <td>{{ $dist->country }}</td>

                                <td>{{ $dist->city }}</td>

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
