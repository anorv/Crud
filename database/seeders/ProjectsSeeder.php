<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
 
    public function run(){
        $bp1 = new \App\Models\Projects();
        $bp1->Projektas = "PHP";
        $bp1->save();

        $bp2 = new \App\Models\Projects();
        $bp2->Projektas = "Java";
        $bp2->save();
    
}
}