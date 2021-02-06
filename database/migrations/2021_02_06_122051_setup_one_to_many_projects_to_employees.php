<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetupOneToManyProjectsToEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->unsignedBigInteger('projects_id')->nullable(); // FK collumn
            $table->foreign('projects_id')
               ->references('id')->on('projects')
               ->onDelete('cascade')
               ->onUpdate('restrict'); // Apribojimas

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['projects_id']);
            $table->dropColumn('projects_id');
            
        });
    }
}
