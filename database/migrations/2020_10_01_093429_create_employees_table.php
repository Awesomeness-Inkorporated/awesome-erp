<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->text('first_name');
            $table->text('middle_name')->nullable();
            $table->text('last_name');
            $table->foreignId('address_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('job_title_id'); // TODO: Add reference to job_titles table
            $table->foreignId('emergency_contact_id')->constrained('addresses');
            $table->foreignId('room_id'); // TODO: Add reference to rooms table
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
        Schema::dropIfExists('employees');
    }
}
