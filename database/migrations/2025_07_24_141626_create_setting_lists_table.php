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
            $table->string('setting_id')->name('セッティングの識別子');
            $table->string('create_user_id')->name('作成者のID');
            $table->string('create_user_name')->name('作成者のアカウント名');
            $table->string('setting_title')->name('セッティングのタイトル');
            $table->string('setting_img_main')->name('セッティングのイメージ画像');
            $table->integer('delete_flg')->name('削除フラグ');
            $table->timestamp('create_date')->name('作成日時');
            $table->timestamp('update_date')->name('更新日時');
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
