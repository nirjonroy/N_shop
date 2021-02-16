<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateTblShopinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_shopinformation', function (Blueprint $table) {
            $table->increments('shop_id');
            $table->string('shop_name');
            $table->string('shop_location');
            $table->string('shop_hotline');
            $table->string('shop_email');
            $table->string('shop_description');
            $table->string('shop_logo');
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
        Schema::dropIfExists('tbl_shopinformation');
    }
}
