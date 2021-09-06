<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName', 20);
            $table->string('LastName', 20);
            $table->string('OtherName', 25)->nullable();
            $table->string('PhoneNo', 11)->unique();
            $table->string('PhoneNo2', 11)->unique()->nullable();
            $table->string('ProfileImage')->nullable();
            $table->string('email')->unique();
            $table->longText('Address');
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->string('password');
            $table->decimal('CurrentGpsLocationLong', 10, 8)->nullable();
            $table->decimal('CurrentGpsLocationLat', 10, 8)->nullable();
            $table->boolean('CustomerStatus')->default(true);
            $table->timestamp('email_verified_at');
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
        Schema::dropIfExists('customers');
    }
}
