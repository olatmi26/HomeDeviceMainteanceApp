<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname', 20);
            $table->string('Lastname', 20);
            $table->string('Othername', 20)->nullable();
            $table->string('MobileN01', 11 );
            $table->string('MobileN02', 11)->nullable();
            $table->string('MobileN03', 11)->nullable();
            $table->string('ProfilePhoto')->nullable();
            $table->text('ResidentailAddress')->nullable();
            $table->text('City')->nullable();
            $table->date('DOB');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('employees');
    }
}
