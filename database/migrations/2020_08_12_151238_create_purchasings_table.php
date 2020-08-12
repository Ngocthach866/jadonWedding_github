<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasings', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->foreignId('project_id')->constrained('projects');
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('requirement_id')->constrained('requirements');
            $table->foreignId('purchasingtype_id')->constrained('purchasingtypes');
            $table->foreignId('product_id')->nullable()->constrained('products');
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
        Schema::dropIfExists('purchasings');
    }
}
