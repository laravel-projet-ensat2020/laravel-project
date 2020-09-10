<!DOCTYPE html>
<html lang="en">
<head>

  <title>E -CO MAROC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/x-icon" href="{{asset('log.ico')}}" />
</head>
<body>

<nav class="navbar navbar-inverse" style="margin-bottom: 0px; padding-bottom: 0px; padding-top: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
       <ul class="nav navbar-nav"> <img src="logo.jpg" style="width: 130px; height: 50px ;"></a></ul>
    </div>
   @yield('home')  <!-- pour ajouter principal et produit--> 

 @yield('cp') <!-- pour ajouter catégorie,facture si un client qu'est connecté ou commande , ajouter produits.. si un admin qu'est connecté -->
     @guest
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> se connecter</a></li>
        @if (Route::has('register'))
      <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> créer compte</a></li>
         @endif
            @else
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>  {{ Auth::user()->name }}</a></li>
             <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span>  {{ __('logout') }}</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:   none;">
                     @csrf
        </form>
                                    </ul>
                                    @endguest
                                  </div>
                       </ul></div></nav >@yield('content')


</body></html>

