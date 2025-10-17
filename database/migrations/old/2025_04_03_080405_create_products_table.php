<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('slug')->unique();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->text('desc')->nullable();
            $table->string('image2')->nullable();
            $table->text('desc2')->nullable();
            $table->longText('gallery')->nullable();
            $table->text('file')->nullable();
            $table->string('published')->default(1);
            $table->json('params')->nullable();
            $table->integer('sorting')->default(999);
            $table->string('metatitle')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->longText('docs')->nullable();
            $table->json('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
