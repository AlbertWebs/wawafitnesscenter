<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function edit()
    {
        $setting = SiteSetting::first();
        return view('admin.site_settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'sitename' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,ico|max:1024',
            'url' => 'nullable|url',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
        ]);
        $setting = SiteSetting::first() ?? new SiteSetting();
        $setting->sitename = $request->sitename;
        $setting->url = $request->url;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        if ($request->hasFile('logo')) {
            $setting->logo = $request->file('logo')->store('site', 'public');
        }
        if ($request->hasFile('favicon')) {
            $setting->favicon = $request->file('favicon')->store('site', 'public');
        }
        $setting->save();
        return redirect()->route('site-settings.edit')->with('success', 'Settings updated successfully.');
    }
}
