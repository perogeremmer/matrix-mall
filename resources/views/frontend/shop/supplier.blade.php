@extends('frontend.base')
@section('content')
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            @include('frontend.alert')
            <!-- tittle heading -->
            <!-- //tittle heading -->
            <!-- product left -->
            {{--<div class="side-bar col-md-3">--}}
                {{--<!-- deals -->--}}
                {{--<div class="deal-leftmk left-side">--}}
                    {{--<h3 class="agileits-sear-head">Categr</h3>--}}
                    {{--<div class="special-sec1">--}}
                        {{--<div class="col-xs-8 img-deal1">--}}
                            {{--<h3>Shuberry Heels</h3>--}}
                            {{--<a href="single.html">$180.00</a>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- //deals -->--}}

            {{--</div>--}}
            <!-- //product left -->
            <!-- product right -->
            <div class="left-ads-display col-md-12">
                <div class="wrapper_top_shop">
                    <div class="col-md-6 shop_left">
                        <img src="/assets/frontend/images/banner3.jpg" alt="">
                        <h6>40% off</h6>
                    </div>
                    <div class="col-md-6 shop_right">
                        <img src="/assets/frontend/images/banner2.jpg" alt="">
                        <h6>50% off</h6>
                    </div>
                    <div class="clearfix"></div>
                    <!-- product-sec1 -->
                    <div class="product-sec1">
                        <!--/mens-->
                        @foreach($supplier as $item)
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="/assets/frontend/images/white.jpg" style="height: 120px; width: 120px;" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="/shop/detail/{{ encrypt($item->id) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        {{--<span class="product-new-top">New</span>--}}
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="/shop/detail/{{ encrypt($item->id) }}">{{ $item->name }}</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">Total Product : {{ count(\App\productModel::where('supplier_id',$item->id)->count()) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--<div class="shoe single-item hvr-outline-out">--}}
                                                {{--<form action="#" method="post">--}}
                                                    {{--<input type="hidden" name="cmd" value="_cart">--}}
                                                    {{--<input type="hidden" name="add" value="1">--}}
                                                    {{--<input type="hidden" name="shoe_item" value="Bella Toes">--}}
                                                    {{--<input type="hidden" name="amount" value="675.00">--}}
                                                    {{--<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>--}}

                                                    {{--<a href="#" data-toggle="modal" data-target="#myModal1"></a>--}}
                                                {{--</form>--}}

                                            {{--</div>--}}
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>

                    {{--<!-- //product-sec1 -->--}}
                    {{--<div class="col-md-6 shop_left shp">--}}
                        {{--<img src="/assets/frontend/images/banner4.jpg" alt="">--}}
                        {{--<h6>21% off</h6>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 shop_right shp">--}}
                        {{--<img src="/assets/frontend/images/banner1.jpg" alt="">--}}
                        {{--<h6>31% off</h6>--}}
                    {{--</div>--}}
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection