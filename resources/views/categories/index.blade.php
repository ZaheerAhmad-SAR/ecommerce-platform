@extends('layouts.app')

@section('title', 'Categories')

@section('content')
 <div class="pagetitle">
      <h1>Categories</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

         

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body">
                  <h5 class="card-title"></h5>

                  <table class="table table-borderless ">
                    <thead>

                   
                    </thead>
                    <tbody>
               
                       <ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li>
        @if($category->children->count() > 0)
            @include('categories.subcategories', ['subcategories' => $category->children])
        @endif
    @endforeach
</ul>
                  
                    
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          

          </div>
        </div><!-- End Left side columns -->

      

      </div>
    </section>
@endsection



   