<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('site_settings')
            ->whereIn('phone', ['0722595395', '+254722595395'])
            ->update(['phone' => '+254 722 595 395']);
    }

    public function down(): void
    {
        DB::table('site_settings')
            ->where('phone', '+254 722 595 395')
            ->update(['phone' => '0722595395']);
    }
};
