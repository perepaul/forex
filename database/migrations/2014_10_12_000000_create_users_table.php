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
            $table->id();
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->unsignedBigInteger('plan_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->enum('gender',['male','female','rather not say'])->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('bitcoin_address')->nullable();
            $table->string('ethereum_address')->nullable();
            $table->double('balance',15,2)->default(0);
            $table->double('demo_balance',15,2)->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('id_file')->nullable();
            $table->string('password');
            $table->enum('two_factor_auth',['active','inactive'])->default('inactive');
            $table->rememberToken();
            $table->tinyInteger('status')->default(0);
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
