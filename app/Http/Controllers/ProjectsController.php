<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{

public function index(){
    return view('projects', ['posts' => \App\Models\Projects::all()]); // MODEL::all() → SELECT ALL ROWS
}

public function show($id){
    return view('project', ['post' => \App\Models\Projects::find($id)]);
}

// Metodas Create nauja darbuotoja
public function store(Request $request){
    $pb = new \App\Models\Projects();
    $pb->Projektas = $request['Projektas'];
    $pb->save();
    return redirect('/projects');
}
// Delete
public function destroy($id){
    \App\Models\Projects::destroy($id);
    return redirect('/projects')->with('status_success', 'Post deleted!');
}

// Update
public function update($id, Request $request){
    // [Dėmesio] validacijoje unique turi būti nurodytas teisingas lentelės pavadinimas!
    // galime pažiūrėti, kas bus jei bus neteisingas
    $this->validate($request, [
        'Projektas' => 'required|unique:projects,Projektas,'.$id.',id|max:225',
    ]);
    $bp = \App\Models\Projects::find($id);
    $bp->Projektas = $request['Projektas'];
    $bp->save(); 
    return redirect('/projects');
}  

}
