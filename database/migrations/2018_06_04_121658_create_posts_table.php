<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->index(); // tiêu đề bài viết
            $table->string('thumbnail')->nullable(); // ảnh thu nhỏ của bài viết
            $table->mediumText('description')->nullable(); // mô tả ngắn cho bài viết
            $table->longText('content')->nullable(); // nội dung bài viết
            $table->string('slug')->unique(); // đường đẫn - title không dấu, và nối liền nhau bằng dấu -
            $table->integer('user_id')->unsigned(); //  id của người viết bài
            $table->integer('category_id')->unsigned(); // id của danh mục mà bài viết đang đứng
            $table->integer('view_count')->default(0); // đếm lượt xem bài viết

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
        Schema::dropIfExists('posts');
    }
}
