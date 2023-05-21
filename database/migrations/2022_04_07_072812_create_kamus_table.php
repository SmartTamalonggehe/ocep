<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('indonesia_id')
                ->constrained('indonesia')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('waropen_id')
                ->constrained('waropen')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('kamus');
    }
}
