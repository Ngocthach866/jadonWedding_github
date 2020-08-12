<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientinputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientinputs', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->foreignId('client_id')->nullable()->constrained('clients');
            $table->integer('clientinputable_id');
            $table->string('clientinputable_type',50);
            $table->text('message')->nullable();
            $table->date('messagedate')->nullable();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('clientinputs');
    }
}
