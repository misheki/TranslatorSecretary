<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('title')->nullable();
            $table->dateTimeTz('invoicedate')->nullable();
            $table->string('invoicenum')->nullable();
            $table->string('invoiceurl')->nullable();
            $table->string('endclient')->nullable();
            $table->string('description')->nullable();
            $table->string('genre1')->nullable();
            $table->string('genre2')->nullable();
            $table->string('sourcelanguage')->nullable();
            $table->string('targetlanguage')->nullable();
            $table->dateTimeTz('received')->nullable();
            $table->dateTimeTz('deadline')->nullable();
            $table->dateTimeTz('submitted')->nullable();
            $table->tinyInteger('qty')->nullable();
            $table->enum('unit', ['word', 'hour', 'page', 'lumpsum', 'min', 'fuzzy']);
            $table->char('currency', 3)->nullable();
            $table->float('rate', 3, 2)->nullable();
            $table->float('totalamount', 6, 2)->nullable();
            $table->float('depositamount', 6, 2)->nullable();
            $table->string('paymentterm')->nullable();
            $table->boolean('featurethis')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
