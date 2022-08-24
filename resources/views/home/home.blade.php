@extends('layouts.main')
@section('content')
      <!-- bread_cum -->
      <nav aria-label="breadcrumb" class="breadcrumb mb-0 d-none">
         <div class="container">
            <ol class="d-flex align-items-center mb-0 p-0">
               <li class="breadcrumb-item"><a href="{{ URL::to('/') }}" class="text-success">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
         </div>
      </nav>
      <section class="py-4 osahan-main-body">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <!-- home page -->
                  <div class="osahan-home-page">
                     <!-- body -->
                     <div class="osahan-body">
                        
                        @include('layouts/lottie')

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection
