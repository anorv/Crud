<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $bp1 = new \App\Models\Employees();
        $bp1->Darbuotojas = "Tomas";
        $bp1->save();

        $bp2 = new \App\Models\Employees();
        $bp2->Darbuotojas = "Tadas";
        $bp2->save();
    }

}