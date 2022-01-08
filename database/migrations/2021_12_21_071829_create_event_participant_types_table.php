<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventParticipantTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_participant_types', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->foreignId('events_id')->constrained();
            $table->foreignId('participant_types_id')->constrained();
            $table->string('plantillaDocumento',255);   
            $table->foreignId('document_types_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_participant_types');
    }
}
