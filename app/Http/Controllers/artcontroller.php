<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Route;
use App\Article;
use App\Commande;
use App\User;
use Auth;

class artcontroller extends Controller
    {

    	//afficher la page des produit
       public function afficher_produit() // afficher les produit aprés authentification
      {
      	 $use=User::find(Auth::user()->id);
    	 $article=Article::all();
      	 return view('produit_achat',['art'=>$article],['user'=>$use]);
      }

/*==================================================================*/

     public function ajouter_produit() //ajouter un produit par l'admin
       {
       	 $use=User::find(Auth::user()->id);
         return view('ajout_produit',['user'=>$use]);
        }


     public function ajou_produit_bd(Request $request) //
       {
       	  $art=new Article();
         
          $art->name=$request->input('nom');
          $art->categorie=$request->input('categorie');
          $art->nbr_stock=$request->input('nbr');
          $art->prix=$request->input('prix');
          $art->image=$request->input('image');
          $art->info=$request->input('info');
          $art->user_id=Auth::user()->id;
   
        $art->save();
        session()->flash('succes','le produit est bien enregistré!!');
        return redirect('pg1');

       }
 /*==================================================================*/      

     public function prd_portable() // 
      { 
      	$use=User::find(Auth::user()->id);
      	 $article=Article::where('categorie','portable')->get();
      	 return view('produit_achat',['art'=>$article],['user'=>$use]);


      }

      public function prd_ordinateur() //
       {
       	  $use=User::find(Auth::user()->id);
       	  $article=Article::where('categorie','ordinateur')->get();
      	 return view('produit_achat',['art'=>$article],['user'=>$use]);
       }


       

     public function prd_machine() //
       {
       	   $use=User::find(Auth::user()->id);
       	  $article=Article::where('categorie','machine')->get();
      	 return view('produit_achat',['art'=>$article],['user'=>$use]);
       }






        public function all_produit() // selectioner tous les produits 
       {
          
          $article=Article::all();
            
         return view('produits',['art'=>$article]);
           
       }

/*==================================================================*/
     public function acheter($id) 
     {
         $use=User::find(Auth::user()->id);
     	return view('acheteur_info',['id'=> $id],['user'=>$use]);
     }

   
    public function save_commande(Request $request,$id) //permet d'enregistrer les commandes
     {
     	$use=User::find(Auth::user()->id);
     	$commande=new Commande();
     	$use=User::find(Auth::user()->id);//find user
     	$use->commande_existe=1;
     	$prd=Article::find($id); //find l'article
     	$commande->user_id=$use->id;
     	$commande->produit_id=$id;
     	$commande->numero_tele=$request->input('tele');
     	$commande->nbr_produit=$request->input('nbr_piece');
     	$commande->user_name=$use->name;
     	$commande->produit_name=$prd->name;
     	
     	

     	$commande->prix_totale=$request->input('nbr_piece')*$prd->prix;
     	$prd->nbr_stock=$prd->nbr_stock-$request->input('nbr_piece');
     	$prd->save();
     	$use->save();
     	$commande->save();
     	session()->flash('bien','votre commande est bien enregistré!!');
     	return redirect('pg1');
     }
/*==================================================================*/

 

  public function afficher_facture()  //afficher la facture d'un client
   {
   	  
   	  $prix=0;
   	  $id=Auth::user()->id;
   	  $com=Commande::where('user_id',$id)->get();
   	  foreach ($com as $cmp ) {
   	  	 $prix=$prix+$cmp->prix_totale;
   	  	 
    }
    
       return view('facture',['commande'=>$com],['prix'=>$prix]);
}
/*==================================================================*/
  
  public function changer($id) //afficher la page qui permet de changer produit
   {
   	   $use=User::find(Auth::user()->id);
   	  $article=Article::find($id);
   	  return view('changer_produit',['art'=>$article],['user'=>$use]);
   }

  public function enregistrer_chang(Request $request,$id) // enregistrer le changement
   {
          
          $art=Article::find($id);
          $art->name=$request->input('nom');
          $art->categorie=$request->input('categorie');
          $art->nbr_stock=$request->input('nbr');
          $art->prix=$request->input('prix');
          $art->image=$request->input('image');
          $art->info=$request->input('info');
          
   
        $art->save();
        return redirect('pg1');



   }

/*==================================================================*/
  public function commande() // afficher la liste des clients + un lien commande pour afficher les commande de chaque client

   {
   	    $use=User::find(Auth::user()->id);
   	   $cmd=User::all();
   	   
   	   return view('clients_com',['utilisateur'=>$cmd],['user'=>$use]);
   }

public function commande1($id) // afficher les commandes de client sélectionée
   {
   	   
   	  $prix=0;
   	  $com=Commande::where('user_id',$id)->get();
   	  foreach ($com as $cmp ) {
   	  	 $prix=$prix+$cmp->prix_totale;
   	  	  }
    
       return view('commande',['commande'=>$com],['prix'=>$prix]);
}


//(le view commande.blade.php affiche les commandes du clients sélectionnée , prix total et un boutton supprimer commande)

 public function delete_commande($id) // la suppression d'une commande par un admin
   {
   	   $use=User::find(Auth::user()->id);
   	  $commande=Commande::find($id);
   	  $cp=$commande->user_id;
   	  $commande->delete();
   	  $prix=0;
   	  $com=Commande::where('user_id',$cp)->get();
   	  foreach ($com as $cmp ) {
   	  	 $prix=$prix+$cmp->prix_totale;
   	  	  }

      $user=User::find($cp);
       
   	  	 if($prix==0)
   	  	  {
             $user->commande_existe=0;
   	  	  } 

   	    $user->save(); 	  
    
       return view('commande',['commande'=>$com],['prix'=>$prix],['user'=>$use]);

  }


public function delete_produit($id)
{
     $article=Article::find($id);
     $article->delete();
     session()->flash('delete','le produit est supprimé!!');
     return redirect('pg1');

}









}