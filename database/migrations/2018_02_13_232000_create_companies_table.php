<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business');
            $table->string('business_rut');
            $table->string('representative');
            $table->string('representative_rut');
            $table->string('item'); // Giro
            $table->string('address');
            $table->string('county'); // Comuna
            $table->string('schedule'); // Horario Visitas
            $table->string('phone');
            $table->string('celphone');
            $table->string('speciality');
            $table->string('doctor');
            $table->string('email');
            $table->string('contact');
            $table->string('contact_phone');
            $table->string('contact_mail');
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
        Schema::dropIfExists('companies');
    }
}
