<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['deadline', 'start', 'invoice', 'payment1', 'payment2'])->nullable();
            $table->string('message')->nullable()->comment('Example: Deadline of Project Title on Project Due Date.  You have x days/hours left.');
            $table->dateTimeTz('expiry')->nullable()->comment('When the alert should go off.');
            $table->dateTimeTz('consumed')->nullable()->comment('When the alert actually was seen');
            $table->enum('status', ['active', 'expired'])->nullable();
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
        Schema::dropIfExists('alerts');
    }
}
