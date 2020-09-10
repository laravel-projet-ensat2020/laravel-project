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


<SCRIPT language="JavaScript">
<!--
function PetiteFenetre() {
   msg=open("","DisplayWindow","width=450,height=350");
   msg.document.write("<P>pour acheter un produit il faut se connecter sur notre site ou créer un compte si vous nous visitez pour la premiere fois.<CENTER><BR><FORM>" +
   "<input type=button value='Fermer' onClick='window.close()'>"); }
// -->
</SCRIPT>



<body style="background-color: #848486;">
<div class="container">
<div class="row">
      <div class="col-md-12">
        
 <br><br>
  <div class="row">

   @foreach($art as $article)
    <div class="col-sm-6 col-md-4" >
      <div class="thumbnail" style="background-color:#848486; border-color: #666668; width: 350px;" >
        <img src="{{$article->image}}"  style="width: 350px; height: 300px;">
          <div class="caption">
             <h3>{{$article->name}}</h3>
             <p>categorie:{{$article->categorie}}</p>
             <p>prix:{{$article->prix}}</p>
             <p>{{$article->info}}</p>  
          <p>
   
    <a href="#" class="btn btn-warning" role="button"  onClick="PetiteFenetre()">acheter</a>
          
          
               
               
            </p>
         </div>
      </div>
  </div>
   @endforeach
   </div>
   </div>

    </tbody>

    </table>    

@endsection




