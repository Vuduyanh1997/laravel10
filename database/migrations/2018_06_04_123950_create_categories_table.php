<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(); // tên thư mục
            $table->tinyInteger('parent_id')->nullable()->comment('chứa id category parent'); // chức id cha 
            $table->string('thumbnail')->nullable(); // lưu đường dẫn ảnh thu nhỏ của thư mục
            $table->string('slug')->unique(); // đường đẫn - name không dấu, và nối liền nhau bằng dấu -
            $table->mediumText('description')->nullable(); // mô tả ngắn cho  danh mục
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
        Schema::dropIfExists('categories');
    }
}
