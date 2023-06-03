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
        Schema::table('prestas', function (Blueprint $table) {
            $table->integer('image')->nullable()->change();
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prestas', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->string('image')->nullable();
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->string('image')->nullable();
        });
    }
};
