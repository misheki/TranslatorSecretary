<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned()->references('id')->on('projects');
            $table->timestamp('dated_at')->nullable();
            $table->string('invoice_num')->nullable();
            $table->string('payment_terms')->nullable();
            $table->tinyInteger('qty')->nullable();
            $table->string('unit');  //['word', 'hour', 'page', 'lumpsum', 'min', 'fuzzy']
            $table->char('currency', 3)->nullable();
            $table->decimal('rate', 8, 2)->nullable();
            $table->decimal('total_amount', 8, 2)->nullable();
            $table->decimal('deposit_amount', 8, 2)->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
