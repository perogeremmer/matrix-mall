@extends('frontend.base')
@section('content')
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <h3 class="head">Login or Register</h3><br>
            <p class="head_para">Sign in to your account or create your account</p>
            <br>
            @include('frontend.alert')
            <div class="inner_section_w3ls">
                <div class="col-md-6 contact_grid_right">
                    <h6>Profile</h6>
                    <form action="/update/customer/{{ encrypt($customer->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-6 col-sm-6 contact_left_grid">
                            <input class="form-control" name="name" placeholder="Your Name...." value="{{ $customer->name }}" >
                            <br>
                            <input class="form-control" name="email" placeholder="Your Email..." value="{{ $customer->email }}" >
                        </div>
                        <div class="col-md-6 col-sm-6 contact_left_grid">
                            <input disabled class="form-control" name="cust_code" placeholder="Your Name...." value="{{ $customer->customer_code }}" >
                            <br>
                        </div>
                        <div class="col-md-6 col-sm-6 contact_left_grid">
                            <input type="password" class="form-control" name="password" placeholder="Password...">
                            <br>
                            <input type="password" class="form-control" name="confirmation_password" placeholder="Password Confirmation...">
                        </div>
                        <div class="clearfix"> </div>
                        <textarea class="form-control" name="address" >{{ $customer->address }}</textarea>
                        <input type="submit" value="Sign Up">
                        <input type="reset" value="Clear">
                    </form>
                </div>
                <div class="clearfix"> </div>

            </div>

            <div class="clearfix"></div>

        </div>
    </div>
@endsection