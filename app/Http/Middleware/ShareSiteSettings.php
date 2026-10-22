<?php

namespace App\Http\Middleware;

use App\Models\SiteSetting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class ShareSiteSettings
{
    public function handle(Request $request, Closure $next)
    {
        $settings = Cache::remember('site-settings.public', 300, function () {
            $saved = SiteSetting::first();

            return (object) array_merge(
                SiteSetting::defaults(),
                array_filter($saved?->toArray() ?? [], fn ($value) => $value !== null)
            );
        });

        View::share('siteSettings', $settings);

        return $next($request);
    }
}
