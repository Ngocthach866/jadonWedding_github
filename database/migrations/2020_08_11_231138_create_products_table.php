<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->foreignId('vendor_id')->nullable()->constrained('vendors');
            $table->foreignId('purchasingtype_id')->nullable()->constrained('purchasingtypes');
            $table->string('name',50);
            $table->text('specification')->nullable();
            $table->integer('price');
            $table->string('picture')->nullable();
            $table->date('expireddate')->nullable();
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
        Schema::dropIfExists('products');
    }
}
