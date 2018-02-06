@extends('backends.base')
@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <div class="validation-section">
                <div class="col-md-12 validation-grid">
                    <h4>Edit Product Form</h4>
                    <div class="validation-grid1">
                        <div class="valid-top">
                            @include('backends.alert')
                            <form id="defaultForm" method="post" class="form-horizontal" action="{{ route('supplier.update', encrypt($product->id)) }}">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Supplier Name</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="name" placeholder="Product Name..." value="{{ $product->name }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Supplier Address</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="product_code" placeholder="Product Code... (Example: prod-15191219)" value="{{ $product->product_code }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Supplier Type</label>
                                    <div class="col-lg-5">
                                        <select disabled class="form-control" name="product_type">
                                            <option selected="selected"> --- Supplier Type ---</option>
                                            @foreach($type as $value)
                                                <option @if($supplier->supplier_type == $value->id)selected = "selected" @endif value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
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