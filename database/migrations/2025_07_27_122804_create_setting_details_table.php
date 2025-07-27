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
        Schema::create('setting_details', function (Blueprint $table) {
            $table->id();
            $table->string('setting_id')->unique()->comment('セッティングの識別子');
            $table->text('setting_comment')->comment('セッティングの説明');
            $table->decimal('camber_angle_f', 4, 2)->comment('フロントキャンバー');
            $table->decimal('camber_angle_r', 4, 2)->comment('リアキャンバー');
            $table->decimal('toe_angle_f', 4, 2)->comment('フロントトー');
            $table->decimal('toe_angle_r', 4, 2)->comment('リアトー');
            $table->decimal('caster_angle_f', 4, 2)->comment('フロントキャスター');
            $table->decimal('caster_angle_r', 4, 2)->comment('リアキャスター');
            $table->decimal('skid_angle_f', 4, 2)->comment('フロントスキッド角');
            $table->decimal('skid_angle_r', 4, 2)->comment('リアスキッド角');
            $table->string('dumper_spring_f')->comment('フロントスプリング');
            $table->string('dumper_spring_r')->comment('フロントスプリング');
            $table->string('dumper_oil_f')->comment('フロントダンパーオイル');
            $table->string('dumper_oil_r')->comment('リアダンパーオイル');
            $table->decimal('gear_ratio',4,3)->comment('ギア比');
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
        Schema::dropIfExists('setting_details');
    }
};
