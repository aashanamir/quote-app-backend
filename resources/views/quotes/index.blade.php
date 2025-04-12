<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
</head>
<body>
    <h1>Quotes</h1>
    <a href="/admin/quotes/create">Create New Quote</a>

    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>Text</th>
                <th>Author</th>
                <th>Type</th>
                <th>Image</th>
                <th>Is Featured</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quotes as $quote)
            <tr>
                <td>{{ $quote->category->name }}</td>
                <td>{{ $quote->text }}</td>
                <td>{{ $quote->author }}</td>
                <td>{{ $quote->type }}</td>
                <td>{{ $quote->image }}</td>
                <td>{{ $quote->is_featured ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="/admin/quotes/{{ $quote->id }}/edit">Edit</a>
                    <form action="/admin/quotes/{{ $quote->id }}" method="POST">
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
