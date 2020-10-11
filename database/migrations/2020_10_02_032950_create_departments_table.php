<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->foreignId('parent_department_id')->nullable()->constrained('departments');
            $table->foreignId('office_id')->nullable()->constrained();
            $table->foreignId('lead_employee_id')->nullable()->constrained('employees');
            $table->foreignId('address_id')->nullable()->constrained();
            $table->timestampsTz();
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreignId('department_id')->after('last_name')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
