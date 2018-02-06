@extends('backends.base')
@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <h2 class="hdg">Transaction {{ $notes }}</h2>
            <div class="bottom-table">
                <div class="bs-docs-example">
                    @include('backends.alert')
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Transaction Code</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Count</th>
                            <th>Notes</th>
                            <th>Date</th>
                            @if($action)
                            <th>Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1 @endphp
                        @foreach($transaction as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->transaction_code }}</td>
                            @foreach(\App\customerModel::where('id',$item->customer_id)->get() as $value)
                            <td>{{ $value->name }}</td>
                            @endforeach
                            @foreach(\App\productModel::where('id',$item->product_id)->get() as $value)
                                <td>{{ $value->name }}</td>
                            @endforeach
                            <td>{{ $item->count }}</td>
                            <td>{{ $item->notes }}</td>
                            <td>{{ $item->created_at }}</td>
                            @if($action)
                                <td><a href="/supplier/transaction/processing/{{ encrypt($item->id) }}" onclick="return confirm('Are you already process this transaction?')" class="btn btn-sm btn-primary">Process</a> </td>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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