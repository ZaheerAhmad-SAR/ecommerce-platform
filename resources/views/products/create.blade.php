@extends('layouts.app')
@section('title', 'Create Product')
@section('content')
 <div class="pagetitle">
      <h1>Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-5">

          <div class="card">
            <div class="card-body">
           
 <h5 class="card-title"></h5>

              <!-- Horizontal Form -->
                 <form method="POST" action="{{ route('products.store') }}">
                      @csrf
                <div class="row mb-4">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Product Name</label>
                  <div class="col-sm-5">
                  <input type="text" id="name" name="name" class="form-control" required>
                  
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-5 col-form-label">Category</label>
                  <div class="col-sm-5">
                    <select id="category_id"  class="form-select" name="category_id" onchange="displayAttributes()">
                     <option value="">Select Category</option>
                      @foreach($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                     @endforeach
                      </select>              
                  </div>
                </div>   
                <div class="row mb-3" id="attributes-section" style="display: none;">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Attributes</label>
                  <div class="col-sm-10" id="attributes">
                   <!-- Attributes will be displayed here dynamically -->
                  
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
  
<script>
function displayAttributes() {
    var categoryId = document.getElementById('category_id').value;
    var attributes = @json($attributes);

    var selectedAttributes = attributes[categoryId];
    var attributesHtml = '';

    if (selectedAttributes) {
        selectedAttributes.forEach(function(attribute) {
            attributesHtml += '<label for="attribute_' + attribute.id + '">' + attribute.name + ':</label>';
            attributesHtml += '<input type="text" id="attribute_' + attribute.id + '" name="attributes[' + attribute.id + '][value]" required><br>';
            // Add a hidden input field to send the attribute_id along with its value
            attributesHtml += '<input type="hidden" name="attributes[' + attribute.id + '][attribute_id]" value="' + attribute.id + '">';
        });

        document.getElementById('attributes-section').style.display = 'block';
        document.getElementById('attributes').innerHTML = attributesHtml;
    } else {
        document.getElementById('attributes-section').style.display = 'none';
        document.getElementById('attributes').innerHTML = '';
    }
}


</script>



