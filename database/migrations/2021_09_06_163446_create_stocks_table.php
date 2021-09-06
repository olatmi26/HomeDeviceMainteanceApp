<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('partTrackN0')->unique();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->string('partName')->index();
            $table->unsignedInteger('UnitCost')->nullable();
            $table->string('Maker');
            $table->string('ModelNo');
            $table->dateTime('DateStock');
            $table->string('Type')->nullable();
            $table->unsignedInteger('QtyInstock')->nullable();
            $table->unsignedInteger('Availability')->nullable()->default(1);
            $table->string('status')->default('Active')->nullable();
            $table->unsignedInteger('stockBy')->nullable();
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
        Schema::dropIfExists('stocks');
    }
}
