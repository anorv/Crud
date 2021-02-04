<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EmployeesController extends Controller
{
// Darbas su Duonbaze
private $emp = [
    ['id' => 1, 'Darbuotojas' => 'Tomas']

];

public function index(){ // return $this->blogPosts;
 return view('employees', ['posts' => \App\Models\Employees::all()]); // MODEL::all() → SELECT ALL ROWS

}

public function show($id){
    foreach($this->emp as $emp){
        if($emp['id'] == $id){
            return $emp;
        }
    }
}
// Metodas Create nauja darbuotoja
public function store(Request $request){
    $pb = new \App\Models\Employees();
    $pb->Darbuotojas = $request['Darbuotojas'];
    $pb->save();
    return redirect('/');
}



}
