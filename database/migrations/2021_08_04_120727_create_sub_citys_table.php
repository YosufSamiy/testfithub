<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_citys', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            
            $table->string('description')->nullable();
            $table->foreignId('catogres_id');
            // $table->foreignIdFor('catogres_id');
            // $table->unsignedBigInteger('catogres_id');
            
            $table->foreign('catogres_id')->on('catogres')->references('id');
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
        Schema::dropIfExists('sub_citys');
    }
}
