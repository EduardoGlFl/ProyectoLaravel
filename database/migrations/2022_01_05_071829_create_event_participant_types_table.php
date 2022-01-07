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
            $table->int('events_id'); 
            $table->int('participantTypes_id'); 
            $table->string('plantillaDocumento',255);            
            $table->int('documentTypes_id');

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
