<!-- subcategories.blade.php -->

<ul>
    @foreach($subcategories as $subcategory)
        <li>{{ $subcategory->name }}</li>
        @if($subcategory->children->count() > 0)
            @include('categories.subcategories', ['subcategories' => $subcategory->children])
        @endif
    @endforeach
</ul>
