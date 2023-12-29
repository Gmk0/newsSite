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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->longText('content')->nullable();
            $table->text('author')->nullable();
            $table->foreignId('category_id');
            $table->json('lien')->nullable();
            $table->string('type')->nullable();
            $table->bigInteger('views_count')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('afficher')->default(true);
            $table->timestamp('published_at')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
