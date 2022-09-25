@extends('layouts.app')

@section('title', 'Add Dealer')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Dealer</h1>
        <a href="{{route('dealer.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dealer Details</h6>
        </div>
        <form method="POST" action="Add_Dealer">
            @csrf

            <input type="text" value="auth()->user()->id" style="display:none">

            <div class="card-body">
                <div class="form-group row">

                    {{-- First Name --}}
                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <label>Dealer Name <span style="color:red;">*</span></label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('first_name') is-invalid @enderror" 
                            id="exampleFirstName"
                            placeholder="dealer Name" 
                            name="first_name" 
                            value="{{ old('first_name') }}">

                        @error('first_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <label>Email <span style="color:red;">*</span></label>
                        <input 
                            type="email" 
                            class="form-control form-control-user @error('email') is-invalid @enderror" 
                            id="exampleEmail"
                            placeholder="Email" 
                            name="email" 
                            value="{{ old('email') }}">

                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- Mobile Number --}}
                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <label>Mobile Number <span style="color:red;">*</span></label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('mobile_number') is-invalid @enderror" 
                            id="exampleMobile"
                            placeholder="Mobile Number" 
                            name="mobile_number" 
                            value="{{ old('mobile_number') }}">

                        @error('mobile_number')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- country --}}
                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <label>Country</label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('country') is-invalid @enderror" 
                            id="exampleCountry"
                            placeholder="Country" 
                            name="country" 
                            value="{{ old('country') }}">

                        @error('country')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <!-- City -->
                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <label>City</label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('city') is-invalid @enderror" 
                            id="examplecity"
                            placeholder="City" 
                            name="city" 
                            value="{{ old('city') }}">

                        @error('city')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <!-- State -->
                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <label>State</label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('state') is-invalid @enderror" 
                            id="examplestate"
                            placeholder="State" 
                            name="state" 
                            value="{{ old('state') }}">

                        @error('mobile_number')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>
            </div>


            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Payment Details</h6>
            </div>

            <div class="card-body">
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mt-3 mb-sm-0" style="margin-top:0px !important">
                        <div class="row">
                            <div class="col-sm-4 mb-3 mt-3 mb-sm-0">
                                <span style="color:red;">*</span>Payment Type</label>
                                <select class="form-control form-control-payment @error('status') is-invalid @enderror" name="status">
                                    <option>Select Payment Type</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Neft">NEFT</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 mb-3 mt-3 mb-sm-0 cheque_payment" style="margin-top:0px !important">
                        <div class="row">
                            {{-- Bank Name --}}
                            <div class="col-sm-4 mb-3 mt-3 mb-sm-0">
                                <label>Bank Name <span style="color:red;">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-user @error('bank_name') is-invalid @enderror" 
                                    id="exampleBank_name"
                                    placeholder="Bank Name" 
                                    name="bank_name" 
                                    value="{{ old('bank_name') }}">

                                @error('bank_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            {{-- Bank IFSC --}}
                            <div class="col-sm-4 mb-3 mt-3 mb-sm-0">
                                <label>Bank IFSC <span style="color:red;">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-user @error('bank_ifsc') is-invalid @enderror" 
                                    id="examplebank_ifsc"
                                    placeholder="Bank IFSC" 
                                    name="bank_ifsc" 
                                    value="{{ old('bank_ifsc') }}">

                                @error('bank_ifsc')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            {{-- Cheque Number --}}
                            <div class="col-sm-4 mb-3 mt-3 mb-sm-0">
                                <label>Cheque Number <span style="color:red;">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-user @error('chequenumber') is-invalid @enderror" 
                                    id="examplechequenumber"
                                    placeholder="Cheque Number" 
                                    name="chequenumber" 
                                    value="{{ old('chequenumber') }}">

                                @error('chequenumber')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 mb-3 mt-3 mb-sm-0 neft_payment" style="margin-top:0px !important">
                        <div class="row">
                            {{-- Neft Number --}}
                            <div class="col-sm-4 mb-3 mt-3 mb-sm-0">
                                <label>Neft Number <span style="color:red;">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-user @error('neft_number') is-invalid @enderror" 
                                    id="exampleneft_number"
                                    placeholder="Neft Number" 
                                    name="neft_number" 
                                    value="{{ old('neft_number') }}">

                                @error('neft_number')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            {{-- Neft Details --}}
                            <div class="col-sm-4 mb-3 mt-3 mb-sm-0">
                                <label>NEFT Details <span style="color:red;">*</span></label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-user @error('neft_details') is-invalid @enderror" 
                                    id="exampleneft_details"
                                    placeholder="NEFT Details" 
                                    name="neft_details" 
                                    value="{{ old('neft_details') }}">

                                @error('neft_details')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product Details</h6>
            </div>

            <div class="card-body">
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mt-3 mb-sm-0" style="margin-top:0px !important">
                        <div class="row">
                            <div class="col-sm-4 mb-3 mt-3 mb-sm-0">
                                <span style="color:red;">*</span>Product</label>
                                <select class="form-control form-control-product @error('status') is-invalid @enderror" name="status">
                                    <option>Select Product</option>
                                    <option value="product1">Product1</option>
                                    <option value="product2">Product2</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0" style="margin-top:0px !important">
                                <div class="row">
                                    <div class="col-sm-4 mb-3 mt-3 mb-sm-0">
                                        <span style="color:red;">*</span>Distributor</label>
                                        <select class="form-control @error('distributor_id') is-invalid @enderror" name="distributor_id">
                                            <option>Select Distributor ID</option>

                                            @foreach($dists as $dist)    
                                                <option value="{{$dist->id}}">{{$dist->id}}</option>
                                            @endforeach    

                                        </select>
                                        @error('distributor_id')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            

            <div class="card-footer text-center">
                <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                {{-- <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('dealer.index') }}">Cancel</a> --}}
            </div>


        </form>
    </div>

</div>

<style></style>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.form-control-payment').on('change', function(){
    	        var payment_type = $(this).val(); 
                if(payment_type == 'Cheque'){
                    $(".cheque_payment").show();
                    $(".neft_payment").hide();
                }
                else if(payment_type == 'Neft'){
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


@section('styles')

<style>
    .col-sm-3.mb-3.mt-3.mb-sm-0 {
    padding-bottom: 27px;
    margin-right: 40px;
}
</style>

@endsection
