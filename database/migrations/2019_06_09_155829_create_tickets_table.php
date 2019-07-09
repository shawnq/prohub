<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->string('type')->nullable();
            $table->string('location');
            $table->string('state');
            $table->string('priority');
            $table->decimal('charge', 9, 2)->nullable();
            $table->bigInteger('created_by');
            $table->bigInteger('assigned_to')->nullable();
            $table->text('description')->nullable();
            $table->string('pictures')->nullable();

            //$table->foreign('created_by')->references('id')->on('users');
            $table->index('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
