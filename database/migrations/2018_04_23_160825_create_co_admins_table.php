<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('branch_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('position_id');
            $table->string('employee_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('added_by');
            $table->SoftDeletes();
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
        Schema::dropIfExists('co_admins');
    }
}
