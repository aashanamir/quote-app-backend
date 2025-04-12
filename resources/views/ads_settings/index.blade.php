<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ads Settings</title>
</head>
<body>
    <h1>Ads Settings</h1>
    <a href="/admin/ads-settings/create">Create New Ads Setting</a>

    <table>
        <thead>
            <tr>
                <th>Admob App ID</th>
                <th>Banner Ad ID</th>
                <th>Interstitial Ad ID</th>
                <th>Rewarded Ad ID</th>
                <th>Is Enabled Banner</th>
                <th>Is Enabled Interstitial</th>
                <th>Is Enabled Rewarded</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adsSettings as $adsSetting)
            <tr>
                <td>{{ $adsSetting->admob_app_id }}</td>
                <td>{{ $adsSetting->banner_ad_id }}</td>
                <td>{{ $adsSetting->interstitial_ad_id }}</td>
                <td>{{ $adsSetting->rewarded_ad_id }}</td>
                <td>{{ $adsSetting->is_enabled_banner ? 'Yes' : 'No' }}</td>
                <td>{{ $adsSetting->is_enabled_interstitial ? 'Yes' : 'No' }}</td>
                <td>{{ $adsSetting->is_enabled_rewarded ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="/admin/ads-settings/{{ $adsSetting->id }}/edit">Edit</a>
                    <form action="/admin/ads-settings/{{ $adsSetting->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
