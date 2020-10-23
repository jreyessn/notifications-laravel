<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderSapOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_sap_organizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_sap_id');
            $table->foreign('provider_sap_id', 'provider_sap_organizations_ibfk_1')
                  ->references('id')
                  ->on('provider_sap')
                  ->constrained()
                  ->onDelete('cascade');

            $table->foreignId('organization_id')->constrained();
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
        Schema::dropIfExists('provider_sap_organizations');
    }
}
