@extends('backends.base')
@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <div class="validation-section">
                <div class="col-md-12 validation-grid">
                    <h4>Add Product Form</h4>
                    <div class="validation-grid1">
                        <div class="valid-top">
                            @include('backends.alert')
                            <form id="defaultForm" method="post" class="form-horizontal" action="{{ route('product.store') }}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Product Name</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="name" placeholder="Product Name..."/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Product Code</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="product_code" placeholder="Product Code... (Example: prod-15191219)"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Product Type</label>
                                    <div class="col-lg-5">
                                        <select class="form-control" name="product_type">
                                            <option selected="selected"> --- Product Type ---</option>
                                            @foreach($product_type as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Price</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="price" placeholder="Product Price..."/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection