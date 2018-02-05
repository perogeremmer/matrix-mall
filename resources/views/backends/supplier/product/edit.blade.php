@extends('backends.base')
@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <div class="validation-section">
                <div class="col-md-12 validation-grid">
                    <h4>Form Tambah Produk</h4>
                    <div class="validation-grid1">
                        <div class="valid-top">
                            <form id="defaultForm" method="post" class="form-horizontal" action="inputs.html">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="username" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email address</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="email" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-5">
                                        <input type="password" class="form-control" name="password" />
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