<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname', 20);
            $table->string('Lastname', 20);
            $table->string('Othername', 20)->nullable();
            $table->foreignId('department_id')->nullable()->constrained();
            $table->string('MobileN01', 11);
            $table->string('MobileN02', 11);
            $table->string('MobileN03', 11);
            $table->string('ProfilePhoto')->nullable();
            $table->longText('ResidentialAddress');
            $table->string('City');
            $table->date('DOB');
            $table->string('email')->unique();
            $table->dateTime('email_verified_at');
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
