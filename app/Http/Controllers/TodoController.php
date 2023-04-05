<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    // Afficher toutes les tâches
    public function index(){

        $todos = Todo::all() ;

        return view('accueil' , compact('todos'));
    }

    // Méthode pour enregistrer les données en base
    public function create(Request $request)
    {
        $request->validate(['task'=>'required']);
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
