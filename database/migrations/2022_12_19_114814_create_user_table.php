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
        Schema::create('user', function (Blueprint $table) {
            $table->id()->comment('データ固有ID');
            $table->string('user_id')->unique()->comment('ユーザーID');
            $table->string('password')->comment('パスワード');
            $table->integer('delete_flag')->comment('削除フラグ 0:存在 1:削除');
            $table->string('user_name')->comment('ユーザー名');
            $table->string('email')->comment('メールアドレス');
            $table->integer('temp_register')->comment('仮登録フラグ 0:本登録 1:仮登録');
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
        Schema::dropIfExists('user');
    }
};
