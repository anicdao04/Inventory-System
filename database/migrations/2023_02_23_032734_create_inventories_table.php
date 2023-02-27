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
            $table->longText('serial_no')->nullable()->default('N/A');
            $table->longText('color')->nullable()->default('N/A');
            $table->longText('assign_id');
            $table->longText('designation_id');
            $table->date('warranty')->nullable()->default('2000-01-01');
            $table->longText('image')->nullable()->default('N/A');
            $table->longText('item_id');
            $table->longText('category_id');
            $table->longText('bundled_to')->nullable()->default('N/A');
            $table->date('date_purchased');
            $table->longText('or_no');
            $table->longText('description')->nullable()->default('N/A');

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
