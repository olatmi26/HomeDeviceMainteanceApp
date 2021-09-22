<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignedTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('order_id')->nullable();
            $table->unsignedInteger('AssignedBy')->nullable();
            $table->unsignedInteger('AssignedTo')->nullable();
            $table->boolean('TaskAccepted')->nullable();
            $table->boolean('TaskRejected')->nullable();
            $table->boolean('TaskPostpone')->nullable();
            $table->integer('TaskStatus')->unsigned()->nullable();
            $table->datetime('StartTime')->nullable();
            $table->datetime('EndTime')->nullable();
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
        Schema::dropIfExists('assigned_tasks');
    }
}
