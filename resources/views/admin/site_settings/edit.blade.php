@extends('layouts.admin')

@section('title', 'Site Settings')

@section('content_header')
    <div class="d-flex align-items-center justify-content-between flex-wrap">
        <div>
            <h1>Site settings</h1>
            <p>Manage the details, brand assets, search previews and integrations used across your website.</p>
        </div>
        <a class="btn btn-outline-secondary" href="{{ url('/') }}" target="_blank" rel="noopener">
            <i class="fas fa-external-link-alt mr-1"></i> View website
        </a>
    </div>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Please review the highlighted fields.</strong>
            <ul class="mb-0 mt-1">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <div class="settings-intro">
        <div>
            <h2>One place for your website details</h2>
            <p>Changes here update the shared contact details and brand settings used across the site.</p>
        </div>
        <i class="fas fa-sliders-h fa-2x" aria-hidden="true"></i>
    </div>

    <form action="{{ route('site-settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xl-8">
                <section class="card">
                    <div class="card-header"><h2 class="card-title settings-section-title"><i class="fas fa-globe"></i> Website identity</h2></div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sitename">Website name</label>
                                <input id="sitename" type="text" name="sitename" class="form-control @error('sitename') is-invalid @enderror" value="{{ old('sitename', $setting->sitename) }}" required>
                                @error('sitename')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="url">Website URL</label>
                                <input id="url" type="url" name="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url', $setting->url) }}" placeholder="https://example.com">
                                @error('url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Public email</label>
                                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $setting->email) }}" placeholder="hello@example.com">
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone number 1</label>
                                <input id="phone" type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $setting->phone) }}" placeholder="+254 722 595 395">
                                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phone_2">Phone number 2</label>
                                <input id="phone_2" type="tel" name="phone_2" class="form-control @error('phone_2') is-invalid @enderror" value="{{ old('phone_2', $setting->phone_2) }}" placeholder="+254 708 666 527">
                                @error('phone_2')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="whatsapp_number">WhatsApp number</label>
                                <input id="whatsapp_number" type="tel" name="whatsapp_number" class="form-control @error('whatsapp_number') is-invalid @enderror" value="{{ old('whatsapp_number', $setting->whatsapp_number) }}" placeholder="+254 700 000 000">
                                <small class="form-text">Include the country code. Used to build WhatsApp links.</small>
                                @error('whatsapp_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-0">
                                <label for="opening_hours">Opening hours</label>
                                <input id="opening_hours" type="text" name="opening_hours" class="form-control @error('opening_hours') is-invalid @enderror" value="{{ old('opening_hours', $setting->opening_hours) }}" placeholder="Daily, 8:30 AM–6:00 PM">
                                @error('opening_hours')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </section>

                <section class="card">
                    <div class="card-header"><h2 class="card-title settings-section-title"><i class="fas fa-map-marker-alt"></i> Address and location</h2></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="address">Street address or location</label>
                            <input id="address" type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $setting->address) }}" placeholder="Building, terminal, street or landmark">
                            @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="city">City</label>
                                <input id="city" type="text" name="city" class="form-control" value="{{ old('city', $setting->city) }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="region">Region / county</label>
                                <input id="region" type="text" name="region" class="form-control" value="{{ old('region', $setting->region) }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="country">Country</label>
                                <input id="country" type="text" name="country" class="form-control" value="{{ old('country', $setting->country) }}">
                            </div>
                            <div class="form-group col-md-3 mb-0">
                                <label for="postal_code">Postal code</label>
                                <input id="postal_code" type="text" name="postal_code" class="form-control" value="{{ old('postal_code', $setting->postal_code) }}">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="card">
                    <div class="card-header"><h2 class="card-title settings-section-title"><i class="fas fa-share-alt"></i> Social profiles</h2></div>
                    <div class="card-body">
                        <div class="form-row">
                            @foreach(['facebook_url' => 'Facebook', 'instagram_url' => 'Instagram', 'youtube_url' => 'YouTube', 'x_url' => 'X / Twitter', 'linkedin_url' => 'LinkedIn'] as $field => $label)
                                <div class="form-group col-md-6">
                                    <label for="{{ $field }}">{{ $label }} URL</label>
                                    <input id="{{ $field }}" type="url" name="{{ $field }}" class="form-control @error($field) is-invalid @enderror" value="{{ old($field, $setting->$field) }}" placeholder="https://">
                                    @error($field)<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="card">
                    <div class="card-header"><h2 class="card-title settings-section-title"><i class="fas fa-search"></i> Search and sharing</h2></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="meta_title">Default page title</label>
                            <input id="meta_title" type="text" name="meta_title" maxlength="255" class="form-control @error('meta_title') is-invalid @enderror" value="{{ old('meta_title', $setting->meta_title) }}">
                            <small class="form-text">Used as the default title in browser and search previews.</small>
                            @error('meta_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Default description</label>
                            <textarea id="meta_description" name="meta_description" maxlength="1000" class="form-control @error('meta_description') is-invalid @enderror" rows="3">{{ old('meta_description', $setting->meta_description) }}</textarea>
                            @error('meta_description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Search keywords</label>
                            <input id="meta_keywords" type="text" name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" value="{{ old('meta_keywords', $setting->meta_keywords) }}" placeholder="massage chairs, wellness, Nairobi">
                            @error('meta_keywords')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group mb-0">
                            <label for="google_site_verification">Google site verification</label>
                            <input id="google_site_verification" type="text" name="google_site_verification" class="form-control @error('google_site_verification') is-invalid @enderror" value="{{ old('google_site_verification', $setting->google_site_verification) }}">
                            @error('google_site_verification')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </section>

                <section class="card">
                    <div class="card-header"><h2 class="card-title settings-section-title"><i class="fas fa-plug"></i> Analytics and live chat</h2></div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="google_tag_manager_id">Google Tag Manager ID</label>
                                <input id="google_tag_manager_id" type="text" name="google_tag_manager_id" class="form-control @error('google_tag_manager_id') is-invalid @enderror" value="{{ old('google_tag_manager_id', $setting->google_tag_manager_id) }}" placeholder="GTM-XXXXXXX">
                                @error('google_tag_manager_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tawk_property_id">Tawk.to property ID</label>
                                <input id="tawk_property_id" type="text" name="tawk_property_id" class="form-control @error('tawk_property_id') is-invalid @enderror" value="{{ old('tawk_property_id', $setting->tawk_property_id) }}">
                                @error('tawk_property_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-md-4 mb-0">
                                <label for="tawk_widget_id">Tawk.to widget ID</label>
                                <input id="tawk_widget_id" type="text" name="tawk_widget_id" class="form-control @error('tawk_widget_id') is-invalid @enderror" value="{{ old('tawk_widget_id', $setting->tawk_widget_id) }}">
                                @error('tawk_widget_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-xl-4">
                <section class="card">
                    <div class="card-header"><h2 class="card-title settings-section-title"><i class="fas fa-palette"></i> Brand assets</h2></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="logo">Website logo</label>
                            <div class="asset-preview">
                                <img src="{{ !empty($setting->logo) ? asset('storage/' . $setting->logo) : asset('uploads/logo.png') }}" alt="Current website logo">
                            </div>
                            <input id="logo" type="file" name="logo" accept="image/*" class="form-control-file @error('logo') is-invalid @enderror">
                            <small class="form-text">PNG, JPG, GIF or SVG, up to 2 MB.</small>
                            @error('logo')<div class="text-danger small">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="favicon">Browser icon</label>
                            <div class="asset-preview justify-content-start">
                                <img style="max-height:38px" src="{{ !empty($setting->favicon) ? asset('storage/' . $setting->favicon) : asset('uploads/favicon.png') }}" alt="Current favicon">
                            </div>
                            <input id="favicon" type="file" name="favicon" accept="image/*,.ico" class="form-control-file @error('favicon') is-invalid @enderror">
                            <small class="form-text">Square image recommended, up to 1 MB.</small>
                            @error('favicon')<div class="text-danger small">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group mb-0">
                            <label for="social_image">Social sharing image</label>
                            @if(!empty($setting->social_image))
                                <div class="asset-preview"><img src="{{ asset('storage/' . $setting->social_image) }}" alt="Current sharing image"></div>
                            @endif
                            <input id="social_image" type="file" name="social_image" accept="image/*" class="form-control-file @error('social_image') is-invalid @enderror">
                            <small class="form-text">Shown when a page is shared. JPG, PNG or WebP, up to 4 MB.</small>
                            @error('social_image')<div class="text-danger small">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="settings-savebar">
            <span><i class="far fa-shield-check mr-1"></i> Settings apply to the public website after saving.</span>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Save site settings</button>
        </div>
    </form>
@stop
