<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Ads Setting</title>
</head>
<body>
    <h1>Create Ads Setting</h1>
    <form action="/admin/ads-settings" method="POST">
        @csrf
        <label for="admob_app_id">Admob App ID:</label><br>
        <input type="text" id="admob_app_id" name="admob_app_id"><br><br>

        <label for="banner_ad_id">Banner Ad ID:</label><br>
        <input type="text" id="banner_ad_id" name="banner_ad_id"><br><br>

        <label for="interstitial_ad_id">Interstitial Ad ID:</label><br>
        <input type="text" id="interstitial_ad_id" name="interstitial_ad_id"><br><br>

        <label for="rewarded_ad_id">Rewarded Ad ID:</label><br>
        <input type="text" id="rewarded_ad_id" name="rewarded_ad_id"><br><br>

        <label for="is_enabled_banner">Is Enabled Banner:</label>
        <input type="checkbox" id="is_enabled_banner" name="is_enabled_banner"><br><br>

        <label for="is_enabled_interstitial">Is Enabled Interstitial:</label>
        <input type="checkbox" id="is_enabled_interstitial" name="is_enabled_interstitial"><br><br>

        <label for="is_enabled_rewarded">Is Enabled Rewarded:</label>
        <input type="checkbox" id="is_enabled_rewarded" name="is_enabled_rewarded"><br><br>

        <button type="submit">Create</button>
    </form>
</body>
</html>
