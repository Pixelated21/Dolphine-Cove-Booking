<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id("booking_id");
            $table->foreignId("guest_id")->constrained("guests","guest_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("tour_company_id")->nullable()->constrained("tour_companies","tour_company_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("programme_id")->constrained("programs","programme_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("booking_type");
            $table->string("payment_type");
            $table->date("date_booked")->default(now("Jamaica"));
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
        Schema::dropIfExists('bookings');
    }
}
