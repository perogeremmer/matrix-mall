@extends('frontend.base')
@section('content')
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                @foreach($product as $value)
                <h3> {{ $value->name }}</h3>
                <hr>
                <p style="font-size: 12pt"> price: Rp. {{$value->price}}</p>
                <div class="occasion-cart">
                    <div class="shoe single-item single_page_b">
                        @include('frontend.alert')
                        <form action="{{ route('shop.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="description">
                                <h5>Notes to Seller</h5>
                                <input type="hidden" name="product_id" value="{{ encrypt($value->id) }}">
                                <input type="hidden" name="supplier_id" value="{{ encrypt($value->supplier_id) }}">
                                <input type="text" name="notes" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
                            </div>
                            <div class="color-quality">
                                <div class="color-quality-right">
                                    <h5>Quantity :</h5>
                                    <select id="country1" name="quantity" onchange="change_country(this.value)" class="frm-field required sect">
                                        @for($i =1; $i < 100; $i++)
                                            <option value="{{ $i}}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <br>
                            <input type="submit" name="submit" value="Order" class="button add">

                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>

                    </div>

                </div>
            @endforeach
            </div>
            <div class="clearfix"> </div>
            <!--/tabs-->

            <!--//tabs-->
            <!-- /new_arrivals -->
            <div class="new_arrivals">
                <h3>Other Products</h3>
                <!-- /womens -->
                @foreach($product as $value)
                @foreach(\App\productModel::where('id','!=',$value->id)->where('supplier_id',$value->supplier_id)->get() as $item)
                    <div class="col-md-3 product-men women_two">
                        <div class="product-shoe-info shoe">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="/assets/frontend/images/white.jpg" style="height: 120px; width: 120px;" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/shop/product/detail/{{ encrypt($item->id) }}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    {{--<span class="product-new-top">New</span>--}}
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="/shop/product/detail/{{ encrypt($item->id) }}"> {{$item->name }}</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <div class="grid-price ">
                                                    <span class="money ">Rp. {{ $item->price }}</span>
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
            @endforeach
            <!-- //womens -->
                <div class="clearfix"></div>
            </div>
            <!--//new_arrivals-->


        </div>
    </div>
@endsection