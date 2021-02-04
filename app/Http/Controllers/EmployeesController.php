<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
// Darbas su Duonbaze
private $emp = [
    ['id' => 1, 'title' => 'Title k', 'text' => 'Some text '],
    ['id' => 2, 'title' => 'Title 2', 'text' => 'Some text 2']
];

public function index(){
    return view('employees', ['posts' => $this->emp]);
}

public function show($id){
    foreach($this->emp as $emp){
        if($emp['id'] == $id){
            return $emp;
        }
    }
}


}
