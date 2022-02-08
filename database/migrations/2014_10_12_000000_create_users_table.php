<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*  Schema::connection('users')->create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name2');
            $table->string('surname');
            $table->string('surname2');
            $table->string('email', 150)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('number_cell')->nullable();
            $table->string('code_contry')->nullable();
            $table->string('code_refernces_friends')->nullable();
            $table->boolean('status')->default('1');
            $table->string('rol')->nullable();
            $table->string('profession')->nullable();
            $table->string('banner')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->date('birth_date')->nullable();
            $table->double('amount')->nullable();
            $table->string('general_presentation')->nullable();
            $table->string('gender')->nullable();
            $table->string('faceboock')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->integer('count_like')->nullable();
            $table->integer('count_dislike')->nullable();
            $table->boolean('terms_conditions')->default('0');
            $table->rememberToken();
            $table->timestamps();
        }); */

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('url_info');
            $table->string('url_img');
            $table->string('abstract');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->integer('count_like');
            $table->integer('count_dislike');
            $table->integer('user_id');
            $table->unsignedBigInteger('blog_id');
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default('1');
            $table->string('type');
            $table->string('url_img');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('abstract');
            $table->string('type');
            $table->text('content');
            $table->string('url_img');
            $table->integer('user_id');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });

        schema::create('users_products_services', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('question_and_answers', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->integer('order');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('abstract');
            $table->string('url_img');
            $table->text('content');
            $table->integer('order');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
        Schema::create('category_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        // Schema::dropIfExists('users');
        Schema::dropIfExists('ikigais');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('products');
        Schema::dropIfExists('users_products_services');
        Schema::dropIfExists('questions_and_amswers');
        Schema::dropIfExists('news');
    }
}
