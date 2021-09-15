@if (Session::has('errors'))
<div class="card alert alert-danger">
    <div class="card-body">
        @foreach ($errors->all() as $error)
            {{$error}}        
        @endforeach
    </div>
</div>

@endif

@if (Session::has('message'))
<div class="card">
    <div class="card-body alert alert-success">
        {{Session::get('message')}}
    </div>
</div>
@endif
