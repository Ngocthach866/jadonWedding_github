<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->string('name',50);
            $table->string('address',50);
            $table->datetime('from');
            $table->datetime('to');
            $table->foreignId('venuetype_id')->nullable()->constrained('venuetypes');
            $table->integer('price');
            $table->date('expireddate')->nullable();
            $table->text('specification')->nullable();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('locations');
    }
}
