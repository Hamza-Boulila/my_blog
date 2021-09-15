@extends('layouts.app')

@section('admin_content')

<div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged in!') }}

    <a href="{{url('admin/create')}}"class="btn btn-primary">add mew blog post</a>
</div>

@endsection
