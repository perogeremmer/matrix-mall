@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(\Illuminate\Support\Facades\Session::has('response'))
    <div class="alert alert-success">
        {{ \Illuminate\Support\Facades\Session::get('response') }}
    </div>
@endif
@if(\Illuminate\Support\Facades\Session::has('response-error'))
    <div class="alert alert-danger">
        {{ \Illuminate\Support\Facades\Session::get('response-error') }}
    </div>
@endif