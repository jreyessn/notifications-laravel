<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string("applicant_name");
            $table->string("business_name");
            $table->string("rfc");
            $table->foreignId("business_type_id")->nullable()->constrained();
            $table->mediumText("business_type_activity")->nullable();
            $table->string("fiscal_address")->nullable();
            $table->string("street_address")->nullable();
            $table->string("street_number")->nullable();
            $table->string("colony")->nullable();
            $table->unsignedInteger("country_id")->nullable();
            $table->unsignedInteger("state_id")->nullable();
            $table->unsignedInteger("city_id")->nullable();
            $table->string("zip_code")->nullable();
            $table->string("phone")->nullable();
            $table->string("main_shareholder")->nullable();
            $table->string("sales_representative")->nullable();
            $table->string("sales_phone")->nullable();
            $table->string("email_quotation")->nullable();
            $table->string("email_purchase_orders")->nullable();
            $table->string("website")->nullable();
            $table->boolean("retention")->default(0);
            $table->unsignedInteger("retention_country_id")->nullable();
            $table->boolean("contracted")->default(0)->comment("1 contratado, 2 rechazado, 0 en espera");
            $table->text("note")->nullable();
            $table->foreignId("user_id")->constrained();
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
        Schema::dropIfExists('providers');
    }
}
