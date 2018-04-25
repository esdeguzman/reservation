<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('branch_id');
            $table->unsignedInteger('trainee_id');
            $table->unsignedInteger('schedule_id');
            $table->string('code')->nullable();
            // MKT0X-000000-0X
            // where MKT = branch code, 0 = constant, X = trainee id on database
            //       000000 = MMYYYY
            //       0 = constant, X = reservation count on branch based on YYYY
            $table->string('deposit_slip_url')->nullable();
            $table->string('payment_transaction_number')->nullable();
            $table->boolean('paid')->nullable();
            $table->unsignedInteger('payment_confirmed_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('reservations');
    }
}
