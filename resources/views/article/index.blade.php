@extends('layouts.main')

@section('content')
<div class="row">

    <div class="col-lg-3">
        @include('includes.sidebar')
    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">

      <div class="card mt-4">
        
        <div class="card-body">
          <h2 class="card-title"><a href=""> {{ $title }} </a></h2>
          <p class="card-text"> {{ $description }} </p>
        </div>
      </div>
      <!-- /.card -->
      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          {{ "Nos derniers articles en vogues :" }}
        </div>
            @foreach ($articles as $article)
            <div class="card-header">
                <div class="card-body">
                    <h3 class="card-title">{{$article->title}}</h3>
                    <p class="card-text">{{$article->content}}</p>
                    <p class="author">{{$article->user->name}}</p>
                    <h6>{{"#".$article->slug}}<h6>
                </div>
            </div>
            @endforeach
        </div>
      </div>
      <!-- /.card -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
@stop