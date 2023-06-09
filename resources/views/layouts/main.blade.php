@extends('layouts.header')

@extends('layouts.navigation')
@section('liens1', "Acceuil")
@section('liens2', "Connexion")
@section('liens3', "Inscription")


  <!-- Page Content -->
  <div class="container">

    @yield('content')

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Formation Laravel 2020</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

</html>
