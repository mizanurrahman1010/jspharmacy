<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("order_code")->unique();
            $table->integer('customer_id');

            $table->string('delivery_mobile', 20)->nullable();
            $table->string('delivery_house', 100)->nullable();
            $table->string('delivery_road', 100)->nullable();
            $table->string('delivery_ward', 100)->nullable();
            $table->string('delivery_para', 100)->nullable();
            $table->string('delivery_district_city', 100)->nullable();
            $table->text('delivery_note')->nullable();

            $table->string('prescription_image', 100)->nullable();
            $table->enum("status", ['new', 'accepted', 'canceled', 'processing', 'ready', 'rider', 'delivered'])->default('new');

            $table->dateTime('delivery_time')->nullable();

            $table->string("accepted_by")->nullable();
            $table->dateTime("accepted_at")->nullable();
            $table->string("shipped_by")->nullable();
            $table->dateTime("shipped_at")->nullable();
            $table->string("delivery_by")->nullable();
            $table->dateTime('delivery_at')->nullable();
            $table->string('delivery_man_mobile_no', 15)->nullable();
            $table->string("cancel_note", 150)->nullable();
            $table->string("canceled_by")->nullable();
            $table->dateTime("canceled_at")->nullable();

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
        Schema::dropIfExists('medicine_orders');
    }
}
