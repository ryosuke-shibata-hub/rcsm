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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('setting_id')->comment('セッティングの識別子');
            $table->string('tag_name')->comment('タグ名');
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
        Schema::dropIfExists('tags');
    }
};
