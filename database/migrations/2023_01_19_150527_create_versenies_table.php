<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versenyek', function (Blueprint $table) {
            $table->string('vkod', 3)->collation('utf8_hungarian_ci');
            $table->date('datum')->nullable();
            $table->string('vnev', 100)->nullable()->collation('utf8_hungarian_ci');
            $table->string('hely', 14)->nullable()->collation('utf8_hungarian_ci');
            $table->integer('kor')->nullable();
            $table->integer('hossz')->nullable();
            $table->primary('vkod');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('versenyek');
    }
};
