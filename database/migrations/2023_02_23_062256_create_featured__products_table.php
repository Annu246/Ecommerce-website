<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured__products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->default(null);
            $table->string('Name')->default(null);
            $table->string('new_price')->default(null);
            $table->string('old_price')->default(null);
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
        Schema::dropIfExists('featured__products');
    }
}
