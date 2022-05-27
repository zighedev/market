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

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->bigIncrements('id');
            $table->string('full_name')->collation('utf8_general_ci');
            $table->string('email')->unique()->collation('utf8_general_ci')->nullable()->comment('to contact');
            $table->string('phone')->unique()->collation('utf8_general_ci')->nullable()->comment('to contact');
            $table->string('address')->collation('utf8_general_ci')->nullable();
            $table->string('username')->unique()->collation('utf8_general_ci')->comment('username to log in');
            $table->string('password')->collation('utf8_general_ci')->comment('password to log in');
            $table->tinyInteger('user_group')->default(0)->comment('identify user group');
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
