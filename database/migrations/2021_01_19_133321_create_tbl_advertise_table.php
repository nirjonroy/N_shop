<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAdvertiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_advertise', function (Blueprint $table) {
            $table->increments('advertise_id');
            $table->string('advertise_name');
            $table->integer('categories_id');
            $table->integer('manufacture_id');
            $table->integer('product_id');
            
            $table->string('advirtise_long_description');
            $table->string('advirtise_short_description');
            $table->string('advirtise_image');
            $table->integer('publication_status');
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
        Schema::dropIfExists('tbl_advertise');
    }
}
