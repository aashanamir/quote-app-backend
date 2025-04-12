<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quote</title>
</head>
<body>
    <h1>Create Quote</h1>
    <form action="/admin/quotes" method="POST">
        @csrf
        <label for="category_id">Category:</label><br>
        <select id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br><br>

        <label for="text">Text:</label><br>
        <textarea id="text" name="text"></textarea><br><br>

        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br><br>

        <label for="type">Type:</label><br>
        <select id="type" name="type">
            <option value="text">Text</option>
            <option value="image">Image</option>
        </select><br><br>

        <label for="image">Image:</label><br>
        <input type="text" id="image" name="image"><br><br>

        <label for="is_featured">Is Featured:</label>
        <input type="checkbox" id="is_featured" name="is_featured"><br><br>

        <button type="submit">Create</button>
    </form>
</body>
</html>
