<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ads Setting</title>
</head>
<body>
    <h1>Edit Ads Setting</h1>
    <form action="/admin/ads-settings/{{ $adsSetting->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="admob_app_id">Admob App ID:</label><br>
        <input type="text" id="admob_app_id" name="admob_app_id" value="{{ $adsSetting->admob_app_id }}"><br><br>

        <label for="banner_ad_id">Banner Ad ID:</label><br>
        <input type="text" id="banner_ad_id" name="banner_ad_id" value="{{ $adsSetting->banner_ad_id }}"><br><br>

        <label for="interstitial_ad_id">Interstitial Ad ID:</label><br>
        <input type="text" id="interstitial_ad_id" name="interstitial_ad_id" value="{{ $adsSetting->interstitial_ad_id }}"><br><br>

        <label for="rewarded_ad_id">Rewarded Ad ID:</label><br>
        <input type="text" id="rewarded_ad_id" name="rewarded_ad_id" value="{{ $adsSetting->rewarded_ad_id }}"><br><br>

        <label for="is_enabled_banner">Is Enabled Banner:</label>
        <input type="checkbox" id="is_enabled_banner" name="is_enabled_banner" {{ $adsSetting->is_enabled_banner ? 'checked' : '' }}><br><br>

        <label for="is_enabled_interstitial">Is Enabled Interstitial:</label>
        <input type="checkbox" id="is_enabled_interstitial" name="is_enabled_interstitial" {{ $adsSetting->is_enabled_interstitial ? 'checked' : '' }}><br><br>

        <label for="is_enabled_rewarded">Is Enabled Rewarded:</label>
        <input type="checkbox" id="is_enabled_rewarded" name="is_enabled_rewarded" {{ $adsSetting->is_enabled_rewarded ? 'checked' : '' }}><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
