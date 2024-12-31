<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarmain2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carmain2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('carimage')->nullable();
            $table->string('carname')->nullable();
            $table->string('carbody')->nullable();
            $table->string('cardoors')->nullable();
            $table->string('carseats')->nullable();
            $table->string('carbagaj')->nullable();
            $table->string('carstar')->nullable();
            $table->string('carprice')->nullable();
            $table->string('carvites')->nullable();
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
        Schema::dropIfExists('carmain2');
    }
}
