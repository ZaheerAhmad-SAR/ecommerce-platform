@extends('layouts.app')
@section('title', 'Create Category')
@section('content')
 <div class="pagetitle">
      <h1>Attributes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">     
              <h5 class="card-title"></h5>
              <!-- Horizontal Form -->
                <form method="POST" action="{{ route('categories.store') }}">
                   @csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Category Name</label>
                  <div class="col-sm-5">
                  <input type="text" id="name" name="name" class="form-control" required>
                
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Parent Category</label>
                  <div class="col-sm-5">
                  <select id="parent_id" class="form-select" name="parent_id">
                 <option value="">Select Parent Category</option>
                 @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @if ($category->children->count() > 0)
                    @include('categories.subcategories-dropdown', ['subcategories' => $category->children, 'prefix' => '-'])
                @endif
                 @endforeach
                </select>
                  </div>
                </div>
                <div class="row mb-12">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Assign Attributes (check incase mandatory):</label>
                  <div class="col-sm-5">
                  @foreach($attributes as $attribute)
                         <label>
                            <input type="checkbox" name="mandatory[{{ $attribute->id }}]" value="1">
                              </label> <label>
                              {{ $attribute->name }}
                          </label>
                          <br>
                      @endforeach
                  </div>
                </div>   
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>


        </div>

        
      </div>
    </section>
@endsection



   