@extends('layouts.main')

@section('content')

@if (session('success'))

  <div class="alert alert-success"> {{ session('success') }}  </div>

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
          Réinitialisation
        </div>
        <div class="card-body">
          <form action = {{ route('post.reset') }} method = "post">
            @csrf

            <input type="hidden" name="Token" value={{ $password_reset->token }}> 

            <div class="form-group">
              <label for="Email">Adresse email</label>
              <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
              @error('Email')
                <div class="error" style="color: brown"> {{ $message }} </div>
              @enderror
              @if (session('error'))
                <div class="error" style="color: brown">{{ session('error') }}</div>
              @endif

            </div>
            <div class="form-group">
              <label for="Password">Mot de passe</label>
              <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
              <small id="Passwordhelp" class="form-text text-muted">Ne partagez se mdp avec personne d'autres.</small
              @error('Password')
              <p class="error" style="color:brown"> {{ $message }} </p>
              @enderror
            </div>
            <div class="form-group">
                <label for="Password_confirmation">Confirmer votre mot de passe</label>
                <input type="password" class="form-control" id="Password_confirm" name="Password_confirmation" placeholder="Password">
                <small id="Passwordhelp" class="form-text text-muted">Ne partagez se mdp avec personne d'autres.</small>
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