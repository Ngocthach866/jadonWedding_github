<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->foreignId('project_id')->constrained('projects');
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('requirement_id')->constrained('requirements');
            $table->foreignId('venuetype_id')->constrained('venuetypes');
            $table->foreignId('location_id')->nullable()->constrained('locations');
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('venues');
    }
}
