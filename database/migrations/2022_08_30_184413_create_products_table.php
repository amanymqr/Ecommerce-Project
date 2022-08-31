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
            $table->String('name_en');
            $table->String('name_ar');
            $table->String('image');
            $table->text('content_en');
            $table->text('content_ar');
            $table->double('price');
            $table->double('sale_price')->nullable();
            $table->integer('quantity')->default(1);
            $table->foreignId('category_id');
            $table->timestamps();
            $table->softDeletes();

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
