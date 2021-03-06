<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id("guest_id");
            $table->string("first_nm");
            $table->string("last_nm");
            $table->foreignId("guest_type_id")->constrained("guest_types","guest_type_id")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("hotel_id")->constrained("hotels","hotel_id")->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('guests');
    }
}
