<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',100)->nullable();
            $table->integer('category_id')->nullable();
            $table->text('detail')->nullable();
            $table->integer('star',)->nullable();
            $table->string('address',150);
            $table->integer('phone')->nullable();
            $table->integer('fax')->nullable();
            $table->string('email',150);
            $table->string('city',150);
            $table->string('country',150);
            $table->string('location',150);
            $table->integer('user_id')->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->string('slug',100)->nullable();
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
        Schema::dropIfExists('hotels');
    }
}
