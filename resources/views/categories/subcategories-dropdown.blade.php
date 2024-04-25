<!-- subcategories-dropdown.blade.php -->

@foreach($subcategories as $subcategory)
    <option value="{{ $subcategory->id }}">{{ $prefix }}{{ $subcategory->name }}</option>
    @if($subcategory->children->count() > 0)
        @include('categories.subcategories-dropdown', ['subcategories' => $subcategory->children, 'prefix' => $prefix.'-'])
    @endif
@endforeach
