@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif