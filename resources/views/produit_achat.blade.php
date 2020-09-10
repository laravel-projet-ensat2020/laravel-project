@extends('master')

@section('master')

<br>
<div class="container">
	@if(session()->has('succes'))
 <div class="alert alert_success" style="background-color:#98f5ac;">
 	{{session()->get('succes')}}
 </div>
@endif  

@if(session()->has('bien'))
 <div class="alert alert_success" style="background-color:#676af7;">
 	{{session()->get('bien')}}
 </div>
@endif 	

@if(session()->has('delete'))
 <div class="alert alert_success" style="background-color:#fa5b5f;">
 	{{session()->get('delete')}}
 </div>
@endif 




<div class="row">
      <div class="col-md-12">
        
 <br><br>
  <div class="row">

   @foreach($art as $article)
    <div class="col-sm-6 col-md-4" >
      <div class="thumbnail" style="background-color:#848486; border-color: #666668; width: 350px;">
        <img src="{{$article->image}}" style="width: 350px; height: 300px;">
          <div class="caption">
             <h3>{{$article->name}}</h3>
             <p>categorie:{{$article->categorie}}</p>
             <p>prix:{{$article->prix}}</p>
             <p>{{$article->info}}</p>  
          <p>

     

            
 @if($user->is_admin==1)
    
    <a href="{{url('pg13/'.$article->id)}}" class="btn btn-primary" role="button">changer</a>
    <a href="{{url('pg17/'.$article->id)}}" class="btn btn-danger" role="button">supprimer</a>
 @else

    <a href="{{url('pg8/'.$article->id)}}" class="btn btn-warning" role="button">acheter</a>

 @endif                 
               
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




