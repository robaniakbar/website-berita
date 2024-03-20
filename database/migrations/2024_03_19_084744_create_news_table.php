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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->text('content');
            $table->string('image_url');
            $table->integer('category_id')->default(0);
            $table->string('slug');
            $table->enum('status',['draft','published','archived'])->default('draft');
            $table->integer('viewed_content')->default(0);
            $table->integer('writer_id')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
