<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->longText('item_code');
            $table->longText('serial_no')->nullable();
            $table->longText('color')->nullable();
            $table->longText('quantity');
            $table->longText('assign_id');
            $table->longText('designation_id');
            $table->date('warranty')->nullable();
            $table->longText('image')->nullable();

            $table->longText('item_name');
            $table->longText('category_id');
            $table->longText('bundled_to');

            $table->date('date_purchased');
            $table->longText('or_no');
            $table->longText('description')->nullable();

            $table->boolean('is_active')->default(1); // (0)=false, (1)=true
            $table->boolean('is_critical')->default(0); // (0)=false, (1)=true

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
        Schema::dropIfExists('inventories');
    }
}
