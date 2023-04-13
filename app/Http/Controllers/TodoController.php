<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    // Afficher toutes les tâches
    public function index($sort='desc',$tri=''){

      /*  if($sort=='asc'){
            $todos = Todo::orderBy('created_at','asc')->paginate(10);
        }else{
            $todos = Todo::orderBy('created_at','desc')->paginate(10);
        }
            
        */
        // Filtrage
        switch ($tri) {
            case 'active':
                $todos = Todo::where('status' , 'n') ;
                break;
            case 'inactive':
                $todos = Todo::where('status' , 'o') ;
                break;
            default:
                $todos = Todo::where('status' , 'n')->orWhere('status' , 'o') ;
                break;
        }
       // dd($todos);


       if($sort=='asc'){
        $todos = $todos->orderBy('created_at','asc')->paginate(10);
        }else{
            $todos = $todos->orderBy('created_at','desc')->paginate(10);
        }
       // $todos = $todos->paginate(10) ; 

        return view('accueil' , compact('todos'));

    }
    /*          **** DEUXIEME METHODE ****
    *
    * $order = ($sort=='desc')?'desc':asc' ;
    * $todos = Todo::orderBy('created_at','$order')->paginate(10);
    */

    // Méthode pour enregistrer les données en base
    public function create(Request $request)
    {
        $request->validate(['task'=>'required|min:15']);
        $todo = new Todo ;
        $todo->task = $request->task ;
        $todo->status = 'n';
        $todo->save();

        return redirect('/');
         
    }

    // Méthode pour valider une tâche à partir de son identifiant : $id
    public function update($id)
    {
        
        $todo = Todo::find($id) ; // Recherche de la tâche à modifier
        $todo->status = 'o' ; // Affectation de la modification
        $todo->save() ; // Enregistrement de la modifivation

        return redirect('/'); // redirection vers la page d'accueil
    }

    // Méthode pour supprimer une tâche à partir de son identifiant : $id
    public function delete($id)
    {
        $todo = Todo::find($id) ;
        $todo->delete() ;
        return redirect('/');

    }

}
