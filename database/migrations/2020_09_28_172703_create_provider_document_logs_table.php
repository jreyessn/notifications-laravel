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
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
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
