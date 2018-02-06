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
                            <form id="defaultForm" method="post" class="form-horizontal" action="{{ route('supplier.update', encrypt($supplier->id)) }}">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Supplier Name</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="name" placeholder="Supplier Name..." value="{{ $supplier->name }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Supplier Slogan</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="slogan" placeholder="Slogan..." value="{{ $supplier->slogan }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Supplier Email</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="email" placeholder="Email..." value="{{ $supplier->email }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password (Don't write if you don't want to change)</label>
                                    <div class="col-lg-5">
                                        <input type="password" class="form-control" name="password" placeholder="Password..."/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Confirmation Passowrd</label>
                                    <div class="col-lg-5">
                                        <input type="password" class="form-control" name="confirmation_password" placeholder="Confirmation Password..."/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Supplier Address</label>
                                    <div class="col-lg-5">
                                        <textarea type="text" class="form-control" name="address">{{ $supplier->address }}</textarea>
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