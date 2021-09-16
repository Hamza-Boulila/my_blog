@extends('layouts.default')

@section('body')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome</h1>
        <p class="lead text-muted">Welcome to our blog</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($articles as $article)
            
        <div class="col">
          <div class="card shadow-sm">
            <img width="100%" class="bd-placeholder-img card-img-top" src="{{url('uploads/'. $article->thumbnail)}}" alt="">
            <div class="card-body">
              <p class="card-text">
                <a href="{{url('article/'. $article->id)}}">
                {{$article->title}}
                </a>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">{{$article->created_at}}</small>
              </div>
            </div>
          </div>
        </div>

        @endforeach
      </div>
    </div>
  </div>
@endsection