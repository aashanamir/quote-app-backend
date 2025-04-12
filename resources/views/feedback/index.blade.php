<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <h1>Feedback</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedback as $feedbackItem)
            <tr>
                <td>{{ $feedbackItem->name }}</td>
                <td>{{ $feedbackItem->email }}</td>
                <td>{{ $feedbackItem->message }}</td>
                <td>{{ $feedbackItem->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
