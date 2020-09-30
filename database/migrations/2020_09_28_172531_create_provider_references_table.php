<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_references', function (Blueprint $table) {
            $table->id();
            $table->foreignId("provider_id")->constrained()->onDelete('cascade');
            $table->string("business_name");
            $table->string("contact")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
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
        Schema::dropIfExists('provider_references');
    }
}
