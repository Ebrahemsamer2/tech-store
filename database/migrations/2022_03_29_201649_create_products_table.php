<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('name');
            $table->string('slug');
            $table->text('excerpt');
            $table->text('description');
            
            // $table->foreignId('specification_id');
            // $table->foreignId('image_id');
            // $table->foreignId('review_id');
            
            $table->foreignId('category_id');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
