<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderSapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_sap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained();
            // $table->foreignId("society_id")->constrained();
            // $table->foreignId("organization_id")->constrained();
            $table->foreignId("accounts_group_id")->constrained();
            $table->foreignId("treatment_id")->constrained();
            $table->string("curp", 200)->nullable();
            $table->boolean("natural_person")->default(0)->nullable();
            $table->string("alba", 200)->nullable();
            $table->string("cfdi", 200)->nullable();

            $table->unsignedBigInteger("type_bank_interlocutor_id");
            $table->foreign('type_bank_interlocutor_id')->references('id')->on('type_bank_interlocutors');

            $table->string("reference_bank", 200)->nullable();
            $table->string("number_account_alternative", 200)->nullable();
            $table->foreignId("treasury_group_id")->constrained();
            $table->foreignId("associated_account_id")->constrained();
            $table->string("clave_clasific", 200)->nullable();
            $table->string("previous_account_number", 200)->nullable();
            $table->foreignId("payment_condition_id")->constrained();
            $table->boolean("verif_fra_dob")->default(1)->nullable()
            ->comment("Siempre se pone X");
            $table->foreignId("payment_method_id")->constrained();
            $table->boolean("block_payment")->default(1)->nullable()
            ->comment("Siempre se pone X");
            $table->foreignId("currency_id")->constrained();
            $table->string("incoterms", 200)->nullable();
            $table->string("description_incoterms", 200)->nullable();
            $table->string("group_schema_prov", 200)->nullable();
            $table->boolean("verif_invoice_base_em")->default(1)->nullable();
            $table->boolean("verif_invoice_relac_service")->default(1)->nullable();
            $table->boolean("order_automatic_permitted")->default(1)->nullable();
            $table->string("conc_bonus_specie", 200)->nullable();
            $table->string("group_purchase", 200)->nullable();
            $table->string("term_delivery_prev", 200)->nullable();
            
            // $table->unsignedBigInteger("companies_participate_id");
            // $table->foreign('companies_participate_id')->references('id')->on('societies');
            
            $table->string("subject")->nullable();
            $table->string("applicant")->nullable();
            $table->string("purchase")->nullable();
            
            $table->boolean("approved")->default(0);
            $table->timestamp("approved_at")->nullable();

            $table->string("note")->nullable();
            
            $table->unsignedBigInteger("approver_by_user_id")->nullable();
            $table->foreign('approver_by_user_id')
                  ->nullable()
                  ->references('id')->on('users')
                  ->comment("Usuario que aprueba la info");

            $table->unsignedBigInteger("created_by_user_id");
            $table->foreign('created_by_user_id')->references('id')->on('users')
                  ->comment("Usuario que registra");

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
        Schema::dropIfExists('provider_sap');
    }
}
