<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderRetentionIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_retention_indicators', function (Blueprint $table) {
            $table->id();
            $table->foreignId("provider_id")->constrained()->onDelete("cascade");
            $table->foreignId("retention_indicator_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_retention_indicators');
    }
}
