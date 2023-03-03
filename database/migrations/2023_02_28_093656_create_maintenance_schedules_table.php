<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_schedules', function (Blueprint $table) {
            $table->id();
            $table->longText('item_id');
            $table->date('date_scheduled');
            $table->longText('type');
            $table->longText('note')->nullable()->default('N/A');
            $table->boolean('status')->default(0); // (0)=pending, (1)=served
            $table->boolean('is_overdue'); // (0)=overdue, (1)=due, (2)=not due
            $table->date('date_requested');
            $table->date('date_completed')->nullable();
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
        Schema::dropIfExists('maintenance_schedules');
    }
}
