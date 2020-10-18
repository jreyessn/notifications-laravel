<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId("document_id")->constrained();
            $table->foreignId("provider_id")->constrained();
            $table->string("name");
            $table->date("date")->nullable();
            $table->boolean("approved")->default(0)->comment("0 en revision, 1 aprobado, 2 rechazado");
            
            $table->bigInteger('user_approver_id')->unsigned();
            $table->foreign("user_approver_id")
                  ->references('id')
                  ->on('users')
                  ->default(null)
                  ->nullable()
                  ->comment("Usuario que aprobó el doc");

            $table->text("note")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_documents');
    }
}
