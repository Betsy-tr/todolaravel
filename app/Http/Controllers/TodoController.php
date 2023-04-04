<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class TodoController extends Controller
{
    //
    public function index(){

        $todos = Todo::all() ;

        return view('accueil' , compact('todos'));
    }

    // Méthode pour enregistrer mes données en base
    public function store(Request $request)
    {
        $todo = new Todo ;
        $todo->task = $request->task ;
        $todo->status = 'n';
        $todo->save();

        return redirect('/');
    }
}
