<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderAccountBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_account_banks', function (Blueprint $table) {
            $table->id();
            $table->foreignId("provider_id")->constrained()->onDelete("cascade");
            $table->string("account_holder");
            $table->string("account_number");
            $table->string("account_clabe");
            $table->string("bank_name");
            $table->string("bank_address");
            $table->foreignId("bank_country_id")->constrained();
            $table->foreignId("bank_id")->constrained();
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
        Schema::dropIfExists('provider_document_account_banks');
    }
}
