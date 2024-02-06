<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_code',18);
            $table->string('product_name',30);
            $table->string('price');
            $table->string('currency');
            $table->string('discount')->nullable();
            $table->string('dimension');
            $table->string('unit');
            $table->string('jumlah')->nullable();
            $table->string('foto')->nullable()->default('assets/img/avatar/avatar.png');
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
        Schema::dropIfExists('products');
    }
}
