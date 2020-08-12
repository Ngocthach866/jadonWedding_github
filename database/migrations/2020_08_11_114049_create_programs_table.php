<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->integer('programable_id')->nullable();
            $table->string('programable_type',50)->nullable();
            $table->foreignId('milestone1_id')->nullable()->constrained('milestones');
            $table->foreignId('milestone2_id')->nullable()->constrained('milestones');
            $table->foreignId('milestone3_id')->nullable()->constrained('milestones');
            $table->foreignId('milestone4_id')->nullable()->constrained('milestones');
            $table->foreignId('milestone5_id')->nullable()->constrained('milestones');
            $table->foreignId('milestone6_id')->nullable()->constrained('milestones');
            $table->foreignId('milestone7_id')->nullable()->constrained('milestones');
            $table->foreignId('milestone8_id')->nullable()->constrained('milestones');
            $table->foreignId('milestone9_id')->nullable()->constrained('milestones');
            $table->date('progressdate')->nullable();
            $table->smallInteger('actualprogress')->nullable();
            $table->smallInteger('actualpayment')->nullable();
            $table->date('scheduledstart')->nullable();
            $table->date('scheduledfinish')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
