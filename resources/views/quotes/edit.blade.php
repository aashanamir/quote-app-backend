<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Quote</title>
</head>
<body>
    <h1>Edit Quote</h1>
    <form action="/admin/quotes/{{ $quote->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="category_id">Category:</label><br>
        <select id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $quote->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select><br><br>

        <label for="text">Text:</label><br>
        <textarea id="text" name="text">{{ $quote->text }}</textarea><br><br>

        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value="{{ $quote->author }}"><br><br>

        <label for="type">Type:</label><br>
        <select id="type" name="type">
            <option value="text" {{ $quote->type == 'text' ? 'selected' : '' }}>Text</option>
            <option value="image" {{ $quote->type == 'image' ? 'selected' : '' }}>Image</option>
        </select><br><br>

        <label for="image">Image:</label><br>
        <input type="text" id="image" name="image" value="{{ $quote->image }}"><br><br>

        <label for="is_featured">Is Featured:</label>
        <input type="checkbox" id="is_featured" name="is_featured" {{ $quote->is_featured ? 'checked' : '' }}><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
