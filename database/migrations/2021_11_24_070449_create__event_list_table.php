<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_event_list', function (Blueprint $table) {
            $table->id();
            $table->String('Event_name');
            $table->dateTime('Event_time');
            $table->longText('Event_Description');
            $table->string('Event_Description1');
            $table->string('Event_Description2');
            $table->string('Event_Description3');
            $table->string('Event_Description4');
            $table->string('image');
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
        Schema::dropIfExists('_event_list');
    }
}
