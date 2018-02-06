@extends('frontend.base')
@section('content')
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="col-md-12 single-right-left simpleCart_shelfItem">
                <h3> Un Process Transaction </h3>
                <hr>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Transaction Code</th>
                        <th>Supplier</th>
                        <th>Product</th>
                        <th>Count</th>
                        <th>Notes</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $no = 1 @endphp
                    @foreach($transaction_unprocess as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->transaction_code }}</td>
                            @foreach(\App\supplierModel::where('id',$item->supplier_id)->get() as $value)
                                <td>{{ $value->name }}</td>
                            @endforeach
                            @foreach(\App\productModel::where('id',$item->product_id)->get() as $value)
                                <td>{{ $value->name }}</td>
                            @endforeach
                            <td>{{ $item->count }}</td>
                            <td>{{ $item->notes }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="clearfix"> </div>
            <hr>
            <div class="col-md-12 single-right-left simpleCart_shelfItem">
                <h3> In Process Transaction </h3>
                <hr>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Transaction Code</th>
                        <th>Supplier</th>
                        <th>Product</th>
                        <th>Count</th>
                        <th>Notes</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $no = 1 @endphp
                    @foreach($transaction_inprocess as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->transaction_code }}</td>
                            @foreach(\App\supplierModel::where('id',$item->supplier_id)->get() as $value)
                                <td>{{ $value->name }}</td>
                            @endforeach
                            @foreach(\App\productModel::where('id',$item->product_id)->get() as $value)
                                <td>{{ $value->name }}</td>
                            @endforeach
                            <td>{{ $item->count }}</td>
                            <td>{{ $item->notes }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.table').DataTable( {
                "pageLength": 5
            });
        });
    </script>
@endsection