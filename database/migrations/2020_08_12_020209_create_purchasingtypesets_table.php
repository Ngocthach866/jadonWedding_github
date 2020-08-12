<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasingtypesetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasingtypesets', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->string('name',50);
            $table->foreignId('purchasingtype1_id')->constrained('purchasingtypes');
            $table->foreignId('purchasingtype2_id')->nullable()->constrained('purchasingtypes');
            $table->foreignId('purchasingtype3_id')->nullable()->constrained('purchasingtypes');
            $table->foreignId('purchasingtype4_id')->nullable()->constrained('purchasingtypes');
            $table->foreignId('purchasingtype5_id')->nullable()->constrained('purchasingtypes');
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
        Schema::dropIfExists('purchasingtypesets');
    }
}
