<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class EmployeesController extends Controller
{
// Darbas su Duonbaze
// private $emp = [
//     ['id' => 1, 'Darbuotojas' => 'Tomas']

// ];
// Grazina viska is duonbazes i ekrana
public function index(){ // return $this->blogPosts;
 return view('employees', ['posts' => \App\Models\Employees::all()]); // MODEL::all() → SELECT ALL ROWS

}

public function show($id){
    return view('employee', ['post' => \App\Models\Employees::find($id)]);

}

// Metodas Create nauja darbuotoja
public function store(Request $request){
    $pb = new \App\Models\Employees();
    $pb->Darbuotojas = $request['Darbuotojas'];
    $pb->save();
    return redirect('/');
}

// Delete
public function destroy($id){
    \App\Models\Employees::destroy($id);
    return redirect('/')->with('status_success', 'Post deleted!');
}

// Update
public function update($id, Request $request){
    // [Dėmesio] validacijoje unique turi būti nurodytas teisingas lentelės pavadinimas!
    // galime pažiūrėti, kas bus jei bus neteisingas
    $this->validate($request, [
        'Darbuotojas' => 'required|unique:employees,Darbuotojas,'.$id.',id|max:225',
    ]);
    $bp = \App\Models\Employees::find($id);
    $bp->Darbuotojas = $request['Darbuotojas'];
    $bp->save(); 
    return redirect('/');
}  

}
