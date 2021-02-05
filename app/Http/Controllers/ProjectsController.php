<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
// Darbas su Duonbaze
private $prj = [
    ['id' => 1, 'Projektas' => 'PHP']
];

public function index(){
    return view('projects', ['posts' => \App\Models\Projects::all()]); // MODEL::all() → SELECT ALL ROWS
}

public function show($id){
    foreach($this->prj as $prj){
        if($prj['id'] == $id){
            return $prj;
        }
    }
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

}
