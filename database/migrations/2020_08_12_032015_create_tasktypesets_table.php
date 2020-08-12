<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasktypesetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasktypesets', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->string('name',50);
            $table->foreignId('tasktype1_id')->constrained('tasktypes');
            $table->foreignId('tasktype2_id')->nullable()->constrained('tasktypes');
            $table->foreignId('tasktype3_id')->nullable()->constrained('tasktypes');
            $table->foreignId('tasktype4_id')->nullable()->constrained('tasktypes');
            $table->foreignId('tasktype5_id')->nullable()->constrained('tasktypes');
            $table->boolean('master')->nullable();
            $table->string('picture')->nullable();
            $table->foreignId('clientinput_id')->nullable()->constrained('clientinputs');
            $table->foreignId('control_id')->constrained('controls');
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
        Schema::dropIfExists('tasktypesets');
    }
}
