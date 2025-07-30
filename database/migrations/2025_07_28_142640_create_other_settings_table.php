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
        Schema::create('other_settings', function (Blueprint $table) {
            $table->string('setting_id')->unique()->comment('セッティングの識別子');
            $table->text('other_meta_1')->comment('その他セッティング項目1');
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
        Schema::dropIfExists('other_settings');
    }
};
