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
                    <h3 class="card-title"><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{$article->title}}</a></h3>
                    <p class="card-text">{{ Str::words($article->content, 5) }}</p>
                    <p class="author"><a href="{{ route('user.profile', ['username' => $article->user->name]) }}">{{ $article->user->name }}</a></p>

                    <p class="time">{{$article->created_at->isoFormat('LLL')}}</p>                    
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