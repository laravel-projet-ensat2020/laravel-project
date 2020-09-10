@extends('layouts.app')
@section('home')
 <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/')}}">principal</a></li>
    </ul>
<ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/produit')}}">produit</a></li>
    </ul>
    @endsection

@section('content')



<body style="background-color: #848486; ">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:0px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="ddd.jpg" alt="Los Angeles" style="width:100%; height: 600px;">
      </div>

      <div class="item">
        <img src="zzz.jpg" alt="Chicago" style="width:100%;  height: 600px;">
      </div>
    
    
      <div class="item">
        <img src="eee.jpg" alt="New york" style="width:100%;  height: 600px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




   <br><br><br>
<!--service-->
  <section class="p-5">
            <div class="container-fluid">
              <div class="row mb-5">
                <div class="col text-center">
                    <h2 class=" text-secondary display-2;Services</h2>
    <p class="section-subheading text-muted text-dark" style="color:white;">services</h2>
  <p style="color:white;">    E-CO maroc  est une entrprise de vente des produits électroniques à distance,qui permet via son site internet ,de commander et de payer en ligne ses produits </p>
                </div>
              </div>

            <div class="row text-center">
                <div class="col-lg-4">
                    <i class="fa fa-shopping-cart text-dark fa-5x mx-5 mb-3" aria-hidden="true"></i> 
                    <h4 class="text-secondary" style="color:white;">Achat en ligne</h4>
                      <p class="text-muted" style="color:white;">E-CO maroc vous donne le service de commander et d'acheter en ligne tous les types des produits électroniques que vous vouler afin de faciliter la vie</p>
                      <a href="#" class="btn btn-secondary">lire la suite</a>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-money text-dark fa-5x mx-5" aria-hidden="true"></i>
                    <h4 class="text-secondary" style="color:white;">Payement</h4>
                    <p class="text-muted" style="color:white;">Pour payez les produits que vous avez acheté, E-CO maroc vous offre deux types de services la première correspond au  payement  en ligne et la deuxiéme consiste à payer après le recu de la commande
                    le client a toujours le choix </p>
                    <a href="#" class="btn btn-secondary">lire la suite</a>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-truck text-dark fa-5x mx-5" aria-hidden="true"></i>
                    <h4 class="text-secondary" style="color:white;">Livraison </h4>
                    <p class="text-muted" style="color:white;">E-CO maroc vous offre le service de la livraison dans tout le maroc ,tous vos commandes vont étre livrer à vos domiciles en toute sécurité </p>
                    <a href="#" class="btn btn-secondary">lire la suite</a>
                </div>
            </div>
  </section>

<br>

<!--les types des produits-->
        
  <div class="text-center">
      <h2 class=" text-secondary display-4" style="color:white;">Les produits électroniques</h2>
  </div>
<br>
<br>
  <div class="row text-center">
                <div class="col-lg-4">
                 <img class="img-fluid" src="mat.jpg" style="height: 220px; width: 300px;" alt="" />    
                 <h4 class="text-secondary" ><small style="color:white; ">Materiel informatique et logiciels </small></h4>     
                </div>
                <div class="col-lg-4">
                  <img class="img-fluid" src="ecout.jpg" style="height: 220px; width: 300px;" alt="" />
                  <h4 class="text-secondary" style="color:white;"><small style="color:white;">Ecouteurs et casque</small></h4>
                    
                </div>
                <div class="col-lg-4">
                  <img class="img-fluid" src="app.jpg" style="height: 220px; width: 300px;" alt="" />  
                  <h4 class="text-secondary" style="color:white;"><small style="color:white;">Appareil photo</small> </h4>
                </div>
  </div>
  <br>
  <div class="row text-center">
                <div class="col-lg-4">
                <img class="img-fluid" src="charg.jpg" style="height: 220px; width: 300px;" alt="" />      
                 <h4 class="text-secondary" style="color:white;"><small style="color:white;">Chargeurs, batteries et blocs ... </small></h4>     
                </div>
                <div class="col-lg-4" >
                  <img class="img-fluid" src="teljpg.jpg" style="height: 220px; width: 300px;" alt="" />
                  <h4 class="text-secondary" style="color:white;"><small style="color:white;">Mobile Phone</small></h4>
                    
                </div>
                <div class="col-lg-4">
                  <img class="img-fluid" src="mac.jpg"  style="height: 220px; width: 300px;"alt="" />  
                  <h4 class="text-secondary" style="color:white;"><small style="color:white;">machines de cuisines</small> </h4>
                </div>
  </div>
 
 <br>
 <br>
 <br> 
<!--fouter-->
<footer class="bg-secondary" style="background-color: black;">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 class="text-white  text-captalize font-weight-light p-3 ">contacts</h1>
        <p>
          <strong>Adresse:</strong>hay salam ksar Elkebir<br>
          <strong>Phone:</strong>+212623456890<br>
          <strong>Gmail:</strong>MSFZK@gmail.com<br>
        </p>
        <div class="social-links">
          

          <a href="#" class="twitter"><i class="fa fa-twitter fa-2x text-info mx-3"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram fa-2x text-danger mx-3"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook fa-2x  mx-3"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus fa-2x text-danger mx-3"></i></a>
        
        </div>
      </div>
      
    </div>
    
  </div>
</footer>
@endsection
</html>
