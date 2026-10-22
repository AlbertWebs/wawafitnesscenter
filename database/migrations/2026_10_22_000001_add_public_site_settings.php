<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code', 32)->nullable();
            $table->string('opening_hours')->nullable();
            $table->string('phone_2', 50)->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('x_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('social_image')->nullable();
            $table->string('google_site_verification')->nullable();
            $table->string('google_tag_manager_id', 80)->nullable();
            $table->string('tawk_property_id')->nullable();
            $table->string('tawk_widget_id')->nullable();
        });

        DB::table('site_settings')
            ->whereIn('phone', ['+254 722 595 395', '+254722595395'])
            ->update(['phone' => '0722595395']);
        DB::table('site_settings')
            ->whereNull('phone_2')
            ->update(['phone_2' => '+254 708 666 527']);
    }

    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'address', 'city', 'region', 'country', 'postal_code', 'opening_hours',
                'phone_2', 'whatsapp_number', 'facebook_url', 'instagram_url', 'youtube_url', 'x_url',
                'linkedin_url', 'meta_title', 'meta_description', 'meta_keywords', 'social_image',
                'google_site_verification', 'google_tag_manager_id', 'tawk_property_id', 'tawk_widget_id',
            ]);
        });
    }
};
