<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyOptimicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_optimices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->string('ingress');          //Fecha de Ingreso de Cliente
            $table->string('executive');        //Ejecutivo a cargo
            $table->string('schedule');         //Honorario Mes
            $table->string('honorary');         //Honorario Renta
            $table->string('payment');          //Modalidad de Pago
            $table->string('sii');              //Clave SII
            $table->string('remuneration');     //Remuneración
            $table->string('previred');         //Clave PreviRed
            $table->string('amount');           //cantidad liquida
            $table->string('tax');              //Afecta ó Exenta
            $table->string('remuneration_type');//Tipo de Remuneración
            $table->string('billing');          //Facturación
            $table->string('ticket');           //Boleta
            $table->boolean('attention_mail');  //Atencion A cliente
            $table->boolean('attention_visit'); //Atencion A cliente
            $table->string('ticket_monthly');   //Boleta Mensuales
            $table->string('complexity');       //Grado de complejidad
            $table->text('observations');     //observaciones
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
        Schema::dropIfExists('company_optimices');
    }
}
