<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderDocumentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_document_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("provider_document_id")->constrained()->onDelete("cascade");
            $table->boolean("status_before")->default(0);
            $table->boolean("status_after")->default(0);
            $table->text("note")->nullable();
            
            $table->bigInteger('approver_by_user_id')->unsigned();
            $table->foreign("approver_by_user_id")
                  ->references('id')
                  ->on('users')
                  ->comment("Usuario que aprobó el doc");

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
        Schema::dropIfExists('provider_document_logs');
    }
}
