@if(Session::has('message'))

    <div class="alert alert-success" role="alert">
        <strong>Messages:</strong>{{ Session::get('message') }}
    </div>

@endif

@if(count($errors) > 0 )

    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif