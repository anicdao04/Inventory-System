<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_transfers', function (Blueprint $table) {
            $table->id();
            $table->longText('item_id');
            $table->longText('transfered_area');
            $table->longText('transfered_designation');
            $table->longText('bundled_to')->nullable()->default('N/A');
            $table->date('transfered_date');
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
        Schema::dropIfExists('maintenance_transfers');
    }
}
