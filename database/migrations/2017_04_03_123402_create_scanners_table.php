<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scanners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('scan_tech')->nullable();
            $table->string('resolution')->nullable();
            $table->string('hd')->nullable();
            $table->string('hi_res')->nullable();
            $table->string('low_res')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('scanners');
    }
}
