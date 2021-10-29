<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Description');
            $table->string('Fund');
            $table->int('raised_fund')->default(0);
            $table->boolean('Status')->nullable();
            $table->string('Image');
            $table->string('Proof');
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('User_Name');
            $table->string('User_Email');
            $table->string('User_Contact');
            $table->unsignedBigInteger('Category_id');
            $table->foreign('Category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('events');
    }
}
