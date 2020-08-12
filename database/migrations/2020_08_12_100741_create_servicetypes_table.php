<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicetypes', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->string('name',50);
            $table->string('category',50)->nullable();
            $table->foreignId('tasktypeset_id')->nullable()->constrained('tasktypesets');
            $table->foreignId('purchasingtypeset_id')->nullable()->constrained('purchasingtypesets');
            $table->foreignId('venuetype_id')->nullable()->constrained('venuetypes');
            $table->boolean('master')->nullable();
            $table->string('picture')->nullable();
            $table->text('specification')->nullable();
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
        Schema::dropIfExists('servicetypes');
    }
}
