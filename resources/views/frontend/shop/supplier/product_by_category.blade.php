@extends('frontend.base')
@section('content')
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="clearfix"> </div>
            <!--/tabs-->

            <!--//tabs-->
            <!-- /new_arrivals -->
            <div class="new_arrivals">
                @foreach($product as $value)
                    @php $supplier = \App\supplierModel::where('id',$value->supplier_id)->first() @endphp
                @endforeach
                <h3> {{ $supplier->name }} Products by Category {{ $category }}</h3>
                <!-- /womens -->
                @foreach($product as $value)
                    <div class="col-md-3 product-men women_two">
                        <div class="product-shoe-info shoe">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="/assets/frontend/images/white.jpg" style="height: 120px; width: 120px;" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/shop/product/detail/{{ encrypt($value->id) }}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    {{--<span class="product-new-top">New</span>--}}
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="/shop/product/detail/{{ encrypt($value->id) }}"> {{$value->name}} </a>
                                    </h4>
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <div class="grid-price ">
                                                    <span class="money ">Rp. {{ $value->price }}</span>
                                                </div>
                                            </div>
                                            {{--<ul class="stars">--}}
                                            {{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>--}}
                                            {{--</ul>--}}
                                        </div>
                                        {{--<div class="shoe single-item hvr-outline-out">--}}
                                        {{--<form action="#" method="post">--}}
                                        {{--<input type="hidden" name="cmd" value="_cart">--}}
                                        {{--<input type="hidden" name="add" value="1">--}}
                                        {{--<input type="hidden" name="shoe_item" value="Shuberry Heels">--}}
                                        {{--<input type="hidden" name="amount" value="575.00">--}}
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
            <!-- //womens -->
                <div class="clearfix"></div>
            </div>
            <!--//new_arrivals-->


        </div>
    </div>
@endsection