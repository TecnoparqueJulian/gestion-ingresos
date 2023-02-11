<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Esta tabla contiene los campos id, employee_name, check_in, check_out, hours_worked, pay_amount, y created_at/updated_at 
     * para mantener un registro de la hora de ingreso y salida de cada empleado, las horas trabajadas y el valor a pagar.
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_name');
            $table->dateTime('check_in');
            $table->dateTime('check_out')->nullable();
            $table->double('hours_worked')->nullable();
            $table->double('pay_amount')->nullable();
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
        Schema::dropIfExists('employee');
    }
};
