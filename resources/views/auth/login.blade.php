@extends('layouts.main')

@section('content')

@if (session('success'))

  <div class="alert alert-success"> {{ session('success') }}  </div>

@endif
@if (session('error'))

  <div class="alert alert-danger"> {{ session('error') }}  </div>

@endif
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
          Login
        </div>
        <div class="card-body">
          <form action = {{ route('post.login') }} method = "post">
            @csrf
            <div class="form-group">
              <label for="Email">Adresse email</label>
              <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">Ne partagez se mdp avec personne d'autres.</small>
              @error('Email')
                <div class="error"> {{ $message }} </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="Password">Mot de passe</label>
              <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
              @error('Password')
                <div class="error"> {{ $message }} </div>
              @enderror
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>
      </div>
      <!-- /.card -->

    </div>
    <!-- /.col-lg-9 -->

  </div>

@stop