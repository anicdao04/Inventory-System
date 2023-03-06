<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceReplacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_replacements', function (Blueprint $table) {
            $table->id();
            $table->longText('item_id');
            $table->longText('condition_id');
            $table->longText('note')->nullable()->default('N/A');
            $table->boolean('is_approved')->default(0); // (0)=no, (1)=yes
            $table->date('date_created');
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
        Schema::dropIfExists('maintenance_replacements');
    }
}
