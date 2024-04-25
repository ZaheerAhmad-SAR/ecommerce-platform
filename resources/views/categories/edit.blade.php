<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>
<body>
 
<form method="POST" action="{{ route('categories.update', $category) }}">
    @csrf
    @method('PUT')
    <label for="name">Category Name:</label>
    <input type="text" id="name" name="name" value="{{ $category->name }}" required><br>
    
    <h3>Assign Attributes:</h3>
    @foreach($attributes as $attribute)
        <label>
            <input type="checkbox" name="attributes[]" value="{{ $attribute->id }}" {{ in_array($attribute->id, $categoryAttributes) ? 'checked' : '' }}>
            {{ $attribute->name }}
        </label>
        <label>
            <input type="checkbox" name="mandatory[{{ $attribute->id }}]" value="1" {{ in_array($attribute->id, $categoryAttributes) && $category->attributes->find($attribute->id)->pivot->mandatory ? 'checked' : '' }}>
            Mandatory
        </label><br>
    @endforeach
    
    <button type="submit">Update Category</button>
</form>
</body>
</html>
