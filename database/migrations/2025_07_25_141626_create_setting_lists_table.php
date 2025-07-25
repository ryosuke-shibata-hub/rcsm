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
        Schema::create('setting_lists', function (Blueprint $table) {
            $table->id();
            $table->string('setting_id')->unique()->comment('セッティングの識別子');
            $table->string('create_user_id')->comment('作成者のID');
            $table->string('create_user_name')->comment('作成者のアカウント名');
            $table->string('setting_title')->comment('セッティングのタイトル');
            $table->string('setting_img_main')->comment('セッティングのイメージ画像');
            $table->integer('delete_flg')->comment('削除フラグ');
            $table->timestamp('create_date')->comment('作成日時');
            $table->timestamp('update_date')->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_lists');
    }
};
