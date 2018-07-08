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
            $table->integer('purchase_order_id')->unsigned()->references('id')->on('purchase_orders');
            $table->integer('contact_person_id')->unsigned()->references('id')->on('contact_persons');     
            $table->string('code')->unique();
            $table->string('title')->nullable();
            $table->string('end_client')->nullable();
            $table->string('description')->nullable();
            $table->string('genre1')->nullable();
            $table->string('genre2')->nullable();
            $table->string('source_lang')->nullable();
            $table->string('target_lang')->nullable();
            $table->timestamp('received_at')->nullable();
            $table->timestamp('deadline_at')->nullable();
            $table->timestamp('submitted_at')->nullable();
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
