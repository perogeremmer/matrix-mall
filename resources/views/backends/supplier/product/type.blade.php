@extends('backends.base')
@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <h2 class="hdg">Product Type</h2>
            <div class="bottom-table">
                <div class="bs-docs-example">
                    @include('backends.alert')
                    <table class="table table-hover table-bordered">
                        <tbody>
                        @php $no = 1 @endphp
                        @foreach($product_type as $item)
                        <tr>
                            <td><center><a href="{{ route('product.show',encrypt($item->id)) }}"><font size="6">{{ $item->name }}</font></a> </center></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection