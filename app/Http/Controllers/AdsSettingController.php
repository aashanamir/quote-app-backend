<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adsSettings = \App\Models\AdsSetting::all();
        return view('ads_settings.index', compact('adsSettings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ads_settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'admob_app_id' => 'nullable',
            'banner_ad_id' => 'nullable',
            'interstitial_ad_id' => 'nullable',
            'rewarded_ad_id' => 'nullable',
            'is_enabled_banner' => 'nullable|boolean',
            'is_enabled_interstitial' => 'nullable|boolean',
            'is_enabled_rewarded' => 'nullable|boolean',
        ]);

        \App\Models\AdsSetting::create($request->all());

        return redirect('/admin/ads-settings');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adsSetting = \App\Models\AdsSetting::findOrFail($id);
        return view('ads_settings.edit', compact('adsSetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'admob_app_id' => 'nullable',
            'banner_ad_id' => 'nullable',
            'interstitial_ad_id' => 'nullable',
            'rewarded_ad_id' => 'nullable',
            'is_enabled_banner' => 'nullable|boolean',
            'is_enabled_interstitial' => 'nullable|boolean',
            'is_enabled_rewarded' => 'nullable|boolean',
        ]);

        $adsSetting = \App\Models\AdsSetting::findOrFail($id);
        $adsSetting->update($request->all());

        return redirect('/admin/ads-settings');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $adsSetting = \App\Models\AdsSetting::findOrFail($id);
        $adsSetting->delete();

        return redirect('/admin/ads-settings');
    }
}
