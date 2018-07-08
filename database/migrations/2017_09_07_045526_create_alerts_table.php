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
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('type')->nullable(); // ['deadline', 'start', 'invoice', 'payment1', 'payment2']
            $table->string('message')->nullable()->comment('Example: Deadline of Project Title on Project Due Date.  You have x days/hours left.');
            $table->timestamp('expiry')->nullable()->comment('When the alert should go off.');
            $table->timestamp('consumed')->nullable()->comment('When the alert actually was seen');
            $table->string('status')->nullable(); // ['active', 'expired']
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
