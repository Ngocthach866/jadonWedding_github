<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->foreignId('project_id')->constrained('projects');
            $table->foreignId('requirement_id')->constrained('requirements');
            $table->foreignId('servicetype_id')->nullable()->constrained('servicetypes');
            
            $table->foreignId('task1_id')->nullable()->constrained('tasks');
            $table->foreignId('task2_id')->nullable()->constrained('tasks');
            $table->foreignId('task3_id')->nullable()->constrained('tasks');
            $table->foreignId('task4_id')->nullable()->constrained('tasks');
            $table->foreignId('task5_id')->nullable()->constrained('tasks');

            $table->foreignId('purchasing1_id')->nullable()->constrained('purchasings');
            $table->foreignId('purchasing2_id')->nullable()->constrained('purchasings');
            $table->foreignId('purchasing3_id')->nullable()->constrained('purchasings');
            $table->foreignId('purchasing4_id')->nullable()->constrained('purchasings');
            $table->foreignId('purchasing5_id')->nullable()->constrained('purchasings');


            $table->foreignId('venue_id')->nullable()->constrained('venues');
            $table->foreignId('clientinput_id')->nullable()->constrained('clientinputs');
            $table->foreignId('control_id')->constrained('controls');
            $table->foreignId('program_id')->constrained('programs');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
