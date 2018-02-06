@extends('backends.base')
@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <h2 class="hdg">Daftar Produk</h2>
            <div class="bottom-table">
                <div class="bs-docs-example">
                    @include('backends.alert')
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Supplier Name</th>
                            <th>Address</th>
                            <th>Supplier Type</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1 @endphp
                        @foreach($supplier as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address}}</td>
                            @foreach(\App\supplierTypeModel::where('id',$item->supplier_type)->get() as $value)
                            <td>{{ $value->name }}</td>
                            @endforeach
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="/admin/approve/{{ encrypt($item->id) }}" class="btn btn-sm btn-primary" onclick="return confirm('Are you sore?')">Approve</a>
                            </td>
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