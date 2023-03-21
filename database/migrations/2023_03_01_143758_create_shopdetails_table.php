<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->default(null);
            $table->string('name')->default(null);
            $table->longtext('Description')->default(null);
            $table->float('Price')->default(null);
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
        Schema::dropIfExists('shopdetails');
    }
}
