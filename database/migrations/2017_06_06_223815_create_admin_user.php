<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function(Blueprint $table){
            $table->increments('admin_uid');
            $table->string('username', 60)->comment('用户名')->unique();
            $table->string('password',100)->comment('密码');
            $table->string('email',100)->comment('邮箱');
            $table->rememberToken()->comment('记住登录');
            $table->tinyInteger('status',false,true)->default(0)->comment('状态：0-禁用 1-启用');
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
        Schema::dropIfExists('admin_users');
    }
}
