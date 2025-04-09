<?php

use App\Models\User;
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
        Schema::create('responces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(User::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->text('desc')->nullable();
            $table->string('published')->default(1);
            $table->json('params')->nullable();
            $table->integer('sorting')->default(999);
            $table->string('metatitle')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responces');
    }
};
