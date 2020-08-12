<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->foreignId('client_id')->nullable()->constrained('clients');
            $table->integer('controlable_id')->nullable();
            $table->string('controlable_type',50)->nullable();
            $table->date('ad_approved')->nullable();
            $table->date('ed_approved')->nullable();
            $table->date('pd_approved')->nullable();
            $table->date('vd_approved')->nullable();
            $table->date('cd_approved')->nullable();
            $table->date('cl_approved')->nullable();
            $table->integer('proposedprice')->nullable();
            $table->integer('approvedprice')->nullable();
            $table->integer('latestrevision')->nullable();
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
        Schema::dropIfExists('controls');
    }
}
