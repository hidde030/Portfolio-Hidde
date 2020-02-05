<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555355681975ProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('name');
            // $table->longText('description')->nullable();
            // $table->decimal('price', 15, 2)->nullable();
            // $table->timestamps();
            // $table->softDeletes();
            $table->increments('id');
            $table->string('headtitle');
            $table->string('title');
            $table->string('category');
            $table->string('sub_title');
            $table->string('slug');
            $table->string('day');
            $table->string('month');
            $table->mediumText('description');
            $table->text('body');
            $table->text('image');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
