@extends('layouts.app')
@section('title', 'Attributes')
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
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                      </tr>
                    </thead>
                    <tbody>
                   @foreach($attributes as $attribute)
                      <tr>
                        <th scope="row">{{ $attribute->id }}</th>
                        <td>{{ $attribute->name }}</td>
                      </tr>
                       @endforeach                 
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



   