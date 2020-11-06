<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditStatusProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_status_providers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_id');
            $table->string('model_type', 50);
            $table->string('action', 100)->nullable();
            $table->boolean('status_before')->default(0);
            $table->boolean('status_after')->default(0);
            $table->text('note')->nullable();
            $table->foreignId('user_id')->constrained()->comment("El usuario que ha cambiado el estado");
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
        Schema::dropIfExists('audit_status_providers');
    }
}
