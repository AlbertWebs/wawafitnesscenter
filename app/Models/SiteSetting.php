<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'sitename', 'logo', 'favicon', 'url', 'email', 'phone', 'address', 'city', 'region',
        'country', 'postal_code', 'opening_hours', 'phone_2', 'whatsapp_number', 'facebook_url',
        'instagram_url', 'youtube_url', 'x_url', 'linkedin_url', 'meta_title',
        'meta_description', 'meta_keywords', 'social_image', 'google_site_verification',
        'google_tag_manager_id', 'tawk_property_id', 'tawk_widget_id',
    ];

    public static function defaults(): array
    {
        return [
            'sitename' => 'WAWA Fitness Center',
            'url' => 'https://wawafitnesscenter.co.ke',
            'email' => 'info@wawafitnesscenter.co.ke',
            'phone' => '+254 722 595 395',
            'phone_2' => '+254 708 666 527',
            'whatsapp_number' => '+254 722 595 395',
            'address' => 'JKIA Terminal 1B International Departures, Gate 11',
            'city' => 'Nairobi',
            'region' => 'Nairobi',
            'country' => 'Kenya',
            'postal_code' => '00100',
            'opening_hours' => 'Daily, 8:30 AM–6:00 PM',
            'facebook_url' => 'https://www.facebook.com/WAWAFitnessCenter',
            'instagram_url' => 'https://www.instagram.com/WAWAFitnessCenter',
            'youtube_url' => 'https://www.youtube.com/@wawafitnesscenter5166',
            'x_url' => 'https://x.com/WAWAfcKENYA',
            'linkedin_url' => 'https://www.linkedin.com/company/massage-chairs-kenya/',
            'meta_title' => 'WAWA Fitness Center | Massage Chairs in Kenya',
            'meta_description' => 'Premium massage chairs, massage services and chair hire in Nairobi, Kenya.',
            'meta_keywords' => 'massage chairs Nairobi, massage services Kenya, chair hire',
            'google_site_verification' => 'Uz_e9ysCFlFqN_Ztv7_k9ZVRg41BcOCoSwEzQC-O5s8',
            'google_tag_manager_id' => 'GTM-T5QLXSZX',
            'tawk_property_id' => '68469ec575ee061917b3299d',
            'tawk_widget_id' => '1it9todsv',
        ];
    }
}
