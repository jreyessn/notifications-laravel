<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderSapAuthorizationLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_sap_authorization_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_sap_authorization_id');
            $table->foreign('provider_sap_authorization_id', 'provider_sap_authorization_logs_ibfk_1')
                   ->references('id')
                   ->on('provider_sap_authorizations')
                   ->constrained()
                   ->onDelete('cascade');

            $table->boolean("status_before")->default(0);
            $table->boolean("status_after")->default(0);
            $table->text("note")->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('provider_sap_authorization_logs');
    }
}
