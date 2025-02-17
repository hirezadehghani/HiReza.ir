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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->string('thumbnail')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->text('body');
            $table->integer('like')->unsigned()->nullable()->default(0);
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
