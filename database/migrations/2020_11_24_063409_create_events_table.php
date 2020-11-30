<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            // $table->integer('participant_users_id')->unsigned();
            $table->string('event_name');
            $table->string('event_category');
            $table->string('event_location');
            $table->timestamp('event_date');
            $table->text('event_description');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('participant_users_id')->references('id')->on('participant_users')->onDelete('cascade')->onUpdate('cascade');
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
