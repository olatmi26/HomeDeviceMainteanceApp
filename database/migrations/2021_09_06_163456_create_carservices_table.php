<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('carservices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('vehicle_id')->nullable();
            $table->boolean('isCustomerCar')->nullable();
            $table->foreignId('customer_id')->nullable()->constrained();
            $table->boolean('isCompanyCar')->nullable();
            $table->foreignId('partfault_id')->nullable()->constrained();
            $table->string('fualtyCOmponentPicture')->nullable();
            $table->integer('RepairCost')->nullable()->index();
            $table->integer('TotalCost')->nullable();
            $table->foreignId('ServiceBy')->nullable()->constrained('users');
            $table->dateTime('DateService');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carservices');
    }
}
