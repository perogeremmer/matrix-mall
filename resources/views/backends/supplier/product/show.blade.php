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
                            <th>Product Code</th>
                            <th>Product Type</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1 @endphp
                        @foreach($product as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->product_code }}</td>
                            @foreach(\App\productTypeModel::where('id',$item->id)->get() as $value)
                            <td>{{ $value->name }}</td>
                            @endforeach
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                @if($item->status == 1)
                                    Available
                                @else
                                    Not Available
                                @endif
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td><form method="post" action="{{ route('product.destroy',encrypt($item->id)) }}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <a href="{{ route('product.edit',encrypt($item->id)) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                </form></td>
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
            $('.table').DataTable();
        });
    </script>
@endsection