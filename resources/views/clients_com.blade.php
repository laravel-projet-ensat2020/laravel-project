@extends('master')

@section('master')

<div class="container">
  <h3>la liste des clients</h3>
    
    <table class="table">
      <thead>
        <td>nom du client</td>
        <td>email</td>
        <td>commande</td>
     </thead>
     <tbody>
    @foreach($utilisateur as $cmd)
      @if($cmd->is_admin==0)
     <tr>
       <td>{{$cmd->name}}</td>
       <td>{{$cmd->email}}</td>
       <td>

           @if($cmd->commande_existe==1)
              <a href="{{url('pg15/'.$cmd->id)}}">commande</a>
         
           @else
             <p>commande</p>
            @endif
            </td>
            </tr>  
          @endif  
   @endforeach
</tbody></table>

@endsection
