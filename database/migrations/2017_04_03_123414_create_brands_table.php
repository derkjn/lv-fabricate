<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('email');
            $table->string('skype');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('pinterest');
            $table->string('linkedin');
            $table->text('notes');
            $table->string('hi_res');
            $table->string('low_res');
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
        Schema::dropIfExists('brands');
    }
}
