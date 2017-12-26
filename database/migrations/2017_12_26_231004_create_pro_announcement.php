<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProAnnouncement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_announcements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("userId")->references('id')->on('users')->onDelete('cascade');
            $table->string('header',200)->nullable();
            $table->longText('content')->nullable();
            $table->string('type',50)->nullable();
            $table->decimal('amount',10,2)->nullable();
            $table->integer("area");
            $table->tinyInteger("roomCount");
            $table->smallInteger("locatedFloor");
            $table->smallInteger("floorCount");
            $table->tinyInteger("documentType");
            $table->tinyInteger("repairing");
            $table->boolean('deleted')->default(0);
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
        Schema::dropIfExists('pro_announcements');
    }
}
