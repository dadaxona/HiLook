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
        Schema::create('karzina2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('arxiv_name')->nullable();
            $table->string('name')->nullable();
            $table->string('raqam')->nullable();
            $table->string('soni')->nullable();
            $table->string('summa2')->nullable();
            $table->string('dona')->nullable();
            $table->string('itog')->nullable();
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
        Schema::dropIfExists('karzina2s');
    }
};
