<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class SiteSettingController extends Controller
{
    public function edit()
    {
        $savedSettings = SiteSetting::first();
        $setting = (object) array_merge(
            SiteSetting::defaults(),
            array_filter($savedSettings?->toArray() ?? [], fn ($value) => $value !== null)
        );

        return view('admin.site_settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'sitename' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,ico|max:1024',
            'url' => 'nullable|url|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'phone_2' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'region' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:32',
            'opening_hours' => 'nullable|string|max:255',
            'whatsapp_number' => 'nullable|string|max:50',
            'facebook_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'youtube_url' => 'nullable|url|max:255',
            'x_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:1000',
            'meta_keywords' => 'nullable|string|max:1000',
            'social_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'google_site_verification' => 'nullable|string|max:255',
            'google_tag_manager_id' => ['nullable', 'regex:/^GTM-[A-Z0-9]+$/i', 'max:80'],
            'tawk_property_id' => 'nullable|string|max:100',
            'tawk_widget_id' => 'nullable|string|max:100',
        ]);
        $setting = SiteSetting::first() ?? new SiteSetting();
        $setting->fill(Arr::except($validated, ['logo', 'favicon', 'social_image']));
        if ($request->hasFile('logo')) {
            $setting->logo = $request->file('logo')->store('site', 'public');
        }
        if ($request->hasFile('favicon')) {
            $setting->favicon = $request->file('favicon')->store('site', 'public');
        }
        if ($request->hasFile('social_image')) {
            $setting->social_image = $request->file('social_image')->store('site', 'public');
        }
        $setting->save();
        Cache::forget('site-settings.public');

        return redirect()->route('site-settings.edit')->with('success', 'Settings updated successfully.');
    }
}
