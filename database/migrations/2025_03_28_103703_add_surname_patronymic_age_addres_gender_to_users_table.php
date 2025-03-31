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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('gender')->after('name')->nullable();
            $table->integer('age')->after('name')->nullable();
            $table->string('patronymic')->after('name')->nullable();
            $table->string('surname')->after('name')->nullable();
            $table->string('address')->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('patronymic');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('address');
        });
    }
};
