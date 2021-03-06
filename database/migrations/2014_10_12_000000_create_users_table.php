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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role_id')->default(2);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('about')->nullable();
            $table->string('contact')->unique();
            $table->string('isapproved')->default('pending');
            $table->date('dob')->nullable();
            $table->text('image')->default('default.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('position')->nullable();


        

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
        Schema::dropIfExists('users');
    }
}
