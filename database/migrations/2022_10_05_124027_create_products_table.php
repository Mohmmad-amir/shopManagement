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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',25);
            $table->longText('description');
            $table->string('category');
            $table->string('supplier');
            $table->integer('stock');
            $table->decimal('supplier_price',10,2);
            $table->decimal('sell_price',10,2);
            $table->integer('product_per_cartoon');
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
};
