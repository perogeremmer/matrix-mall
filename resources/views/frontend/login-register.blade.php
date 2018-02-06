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
                    <h6>Login</h6>
                    <form action="/customer/check_login" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-12 col-sm-12 contact_left_grid">
                            <input class="form-control" name="username" placeholder="Username...">
                            <br>
                            <input type="password" class="form-control" name="password" placeholder="Password..." required="">
                        </div>
                        <div class="clearfix"> </div>
                        <br>
                        <input type="submit" value="Sign In">
                    </form>
                </div>
                <div class="col-md-6 contact_grid_right">
                    <h6>Register your account here</h6>
                    <form action="{{ route('customer.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-6 col-sm-6 contact_left_grid">
                            <input class="form-control" name="name" placeholder="Your Name...." >
                            <br>
                            <input class="form-control" name="email" placeholder="Your Email..." >
                        </div>
                        <div class="col-md-6 col-sm-6 contact_left_grid">
                            <input type="password" class="form-control" name="password" placeholder="Password...">
                            <br>
                            <input type="password" class="form-control" name="confirmation_password" placeholder="Password Confirmation..." required="">
                        </div>
                        <div class="clearfix"> </div>
                        <textarea class="form-control" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="" placeholder="Your address..."></textarea>
                        <input type="submit" value="Sign Up">
                        <input type="reset" value="Clear">
                    </form>
                </div>
                <div class="clearfix"> </div>

            </div>

            <div class="clearfix"></div>

        </div>
    </div>

    <script>
        $( document ).ready(function() {
            $('.pass').on('click', function () {
                $(this).attr('type', 'password');
            });
        });
    </script>
@endsection