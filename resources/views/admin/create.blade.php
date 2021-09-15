@extends('layouts.app')

@section('admin_content')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
      selector: '#mytextarea',
      menubar:  false
    });
</script>

<div class="card-header">{{ __('Add Blog') }}</div>

<div class="card-body">
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <textarea id="mytextarea">type here</textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" value="post">
        </div>
    </form>
</div>

@endsection
