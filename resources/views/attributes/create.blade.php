@extends('layouts.app')

@section('title', 'Create Attributes')

@section('content')
 <div class="pagetitle">
      <h1>Attributes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Attributes</li>
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
                 <form method="POST" action="{{ route('attributes.store') }}">
                      @csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                  <input type="text" id="name" name="name" class="form-control" required>
                  
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



   