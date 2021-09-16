<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_info', function (Blueprint $table) {
            $table->id("payment_info_id");
            $table->foreignId("entity_type_id")->constrained("entity_types","entity_type_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("entity_id")->constrained("guests","guest_id")->cascadeOnDelete()->cascadeOnUpdate();
//            $table->string("card_holder_nm");
//            $table->string("card_nbr");
//            $table->longText("billing_address");
//            $table->date("exp_mnt");
//            $table->date("exp_yr");
//            $table->integer("cvv");
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
        Schema::dropIfExists('payment_info');
    }
}
