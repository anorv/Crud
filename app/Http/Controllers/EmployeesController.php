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
    // foreach($this->emp as $emp){
    //     if($emp['id'] == $id){
    //         return $emp;
    //     }
    // }
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
    // [Dėmesio] validacijoje unique turi būti teisingas lentelės pavadinimas!
            $this->validate($request, [
                'Darbuotojas' => 'required',
            
            ]);
            $bp = \App\Models\Employees::find($id);
            $bp->Darbuotojas = $request['Darbuotojas'];
            return ($bp->save() !== 1) ? 
                redirect('/'.$id)->with('status_success', 'Post updated!') : 
                redirect('/'.$id)->with('status_error', 'Post was not updated!');
        }
    

}
