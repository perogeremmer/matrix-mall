@extends('frontend.base')
@section('content')
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <h3 class="head">Contact Us</h3>
            <p class="head_para">Add Some Description</p>
            <div class="inner_section_w3ls">
                <div class="col-md-6 contact_grid_right">
                    <h6>Please fill this form to contact with us.</h6>
                    <form action="#" method="post">
                        <div class="col-md-6 col-sm-6 contact_left_grid">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                        </div>
                        <div class="col-md-6 col-sm-6 contact_left_grid">
                            <input type="text" name="Telephone" placeholder="Telephone" required="">
                            <input type="text" name="Subject" placeholder="Subject" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </form>
                </div>
                <div class="col-md-6 contact_grid_right">
                    <h6>Please fill this form to contact with us.</h6>
                    <form action="#" method="post">
                        <div class="col-md-6 col-sm-6 contact_left_grid">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                        </div>
                        <div class="col-md-6 col-sm-6 contact_left_grid">
                            <input type="text" name="Telephone" placeholder="Telephone" required="">
                            <input type="text" name="Subject" placeholder="Subject" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </form>
                </div>
                <div class="clearfix"> </div>

            </div>

            <div class="clearfix"></div>

        </div>
    </div>
@endsection