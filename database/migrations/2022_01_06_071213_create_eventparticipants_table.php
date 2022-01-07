<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventparticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventparticipants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('event_id')->constrained();
            $table->foreignId('participant_id')->constrained();
            // $table->foreignId('participantType_id')->constrained();
            // $table->foreignId('documents_id')->constrained();
            $table->foreignId('institution_id')->constrained();

            // $table->unsignedBigInteger('institution_id');

            // $table->foreign('institution_id')->references('id')->on('institutions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventparticipants');
    }
}