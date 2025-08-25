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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type'); // 'image' or 'video'
            $table->string('file_path'); // path to image or video file
            $table->string('thumbnail')->nullable(); // thumbnail for videos
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('video_url')->nullable(); // for YouTube/external videos
            $table->json('metadata')->nullable(); // file size, dimensions, duration, etc.
            $table->boolean('featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
