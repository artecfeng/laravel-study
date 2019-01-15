<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateUsersTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up () {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->string('email')->unique();
                $table->string('password');
                //头像
                $table->string('avatar');
                //是否激活了邮箱
                $table->smallInteger('is_active')->default(0);
                //邮箱验证
                $table->string('confirmation_token');

                //回答数
                $table->integer('answers_count')->default(0);
                //问题数
                $table->integer('questions_count')->default(0);
                $table->integer('comments_count')->default(0);
                $table->integer('favorites_count')->default(0);
                //点赞数
                $table->integer('likes_count')->default(0);
                //关注数
                $table->integer('follows_count')->default(0);
                //被关注
                $table->integer('following_count')->default(0);
                $table->json('seetings')->nullable();
                $table->rememberToken();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down () {
            Schema::dropIfExists('users');
        }
    }
