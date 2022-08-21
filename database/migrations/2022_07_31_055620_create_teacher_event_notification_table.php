<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_event_notification', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("event_id");
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->unsignedBigInteger("teacher_id");
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->boolean("check")->default(0);
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
        Schema::dropIfExists('teacher_event_notification');
    }
};
