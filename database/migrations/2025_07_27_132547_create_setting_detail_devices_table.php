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
        Schema::create('setting_detail_devices', function (Blueprint $table) {
            $table->id();
            $table->string('setting_id')->unique()->comment('セッティングの識別子');
            $table->string('transmitter')->comment('プロポ');
            $table->string('receiver')->comment('受信機');
            $table->string('esc')->comment('アンプ');
            $table->string('servo')->comment('サーボ');
            $table->string('gyro')->comment('ジャイロ');
            $table->string('motor')->comment('モーター');
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
        Schema::dropIfExists('setting_detail_devices');
    }
};
