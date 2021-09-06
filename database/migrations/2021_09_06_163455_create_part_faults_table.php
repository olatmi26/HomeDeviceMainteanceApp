<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartFaultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('part_faults', function (Blueprint $table) {
            $table->id();
            $table->string('partFualty')->nullable();
            $table->longText('ExactFualt');
            $table->foreignId('PartReplacewith')->nullable()->constrained('stocks');
            $table->foreignId('PartChanged')->nullable()->constrained('stocks');
            $table->string('fualtyCOmponentPicture')->nullable();
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
        Schema::dropIfExists('part_faults');
    }
}
