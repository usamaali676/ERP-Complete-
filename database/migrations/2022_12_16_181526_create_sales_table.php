<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();

            $table->string('business_name');
            $table->string('business_name_adv')->nullable();
            $table->string('business_number');
            $table->string('business_number_adv')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('additional_links');
            $table->text('comments');
            $table->text('area');
            $table->date('date');
            $table->text('services');
            $table->text('keywords');
            $table->text('landing_pages');
            $table->unsignedBigInteger('agent_id');
            $table->unsignedBigInteger('closer_id');
            $table->foreign('agent_id')->references('id')->on('users');
            $table->foreign('closer_id')->references('id')->on('users');
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
        Schema::dropIfExists('sales');
    }
}
