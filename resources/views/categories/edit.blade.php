<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <form action="/admin/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $category->name }}"><br><br>

        <label for="slug">Slug:</label><br>
        <input type="text" id="slug" name="slug" value="{{ $category->slug }}"><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ $category->description }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
