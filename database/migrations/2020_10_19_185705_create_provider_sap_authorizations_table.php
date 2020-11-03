<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderSapAuthorizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_sap_authorizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_sap_id');
            $table->foreign('provider_sap_id')->references('id')->on('provider_sap')->constrained();
            $table->boolean('approved')->default(0)->comment("0 en espera, 1 aprobado, 2 rechazado");
            $table->string("note")->nullable();

            $table->foreignId('role_id')->constrained();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign("user_id")
                  ->nullable()
                  ->references('id')
                  ->on('users')
                  ->commet("Usuario que aprueba/rechaza");

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
        Schema::dropIfExists('provider_sap_authorizations');
    }
}
