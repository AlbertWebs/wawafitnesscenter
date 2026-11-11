<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('site_settings', 'phone_2')) {
            Schema::table('site_settings', function (Blueprint $table) {
                $table->string('phone_2', 50)->nullable();
            });
        }

        DB::table('site_settings')
            ->whereNull('phone_2')
            ->update(['phone_2' => '+254 708 666 527']);
    }

    public function down(): void
    {
        if (Schema::hasColumn('site_settings', 'phone_2')) {
            Schema::table('site_settings', function (Blueprint $table) {
                $table->dropColumn('phone_2');
            });
        }
    }
};
