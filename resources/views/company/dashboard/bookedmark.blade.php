@extends('company.layouts.master')
@section('content')

<style type="text/css">
     .navbar {
         background-color: #e5eaf4;
         padding: 15px;
     }

     .navbar-nav .nav-link {
         color: #000;
         font-weight: bold;
         margin-right: 15px;
     }

     .search-section {
         background-color: #f7faff;
         padding: 20px;
     }

     .search-section input,
     .search-section select {
         margin-right: 10px;
     }

     .job-card {
         border: 1px solid #e0e0e0;
         border-radius: 10px;
         padding: 20px;
         margin-bottom: 20px;
         background-color: #fff;
     }

     .job-card h5 {
         font-size: 18px;
     }

     .tag {
         background-color: #f0f7ff;
         border-radius: 10px;
         padding: 5px 10px;
         margin: 5px;
         display: inline-block;
     }

     .tag-remove {
         color: red;
         cursor: pointer;
         margin-left: 10px;
     }

     .overlay {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: #0F3A4F;
         /* Adjust opacity and color as needed */
         opacity: 0.5;
         /* Adjust opacity as needed */
     }

     .text-container {
         position: relative;
         z-index: 1;
         /* Ensure text is above the overlay */
     }

     .vertical-line {
         border-right: 1px solid #9CAFD1;
         /* Adjust color and thickness as needed */
         padding-right: 5px;
         /* Adjust spacing between text and line as needed */
         margin-right: 5px;
         /* Adjust spacing between lines as needed */
     }

     /* Remove border-right for last element */
     .vertical-line:last-child {
         border-right: none;
     }

     .bg-label-primary {
         background-color: #F2F6FA !important;
         color: #5E8BF7 !important;
     }
 </style>


 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->
     <div class="layout-demo-wrapper"
         style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
         <div class="overlay"></div> <!-- Overlay -->
         <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
             <!-- Text container -->
             <div class="row pt-2">
                 <div class="col-lg-7 text-white">
                     <h3 class="text-white">Find the right professional</h3>

                 </div>
                 <div class="col-lg-5" style="text-align: right;">

                     <!-- <button type="button" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;">
                            <i class="ti ti-briefcase ti-sm me-2"></i> Create Job
                          </button> -->

                 </div>
             </div>
         </div>
     </div>

     <!-- / Content -->
     <nav class="navbar navbar-expand-lg navbar-light  py-0">
         <div class="container-fluid">
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" href="{{route('company-dashboard.index')}}">Available jobs</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('company.dashboard.myjobs') }}">My Jobs</a>
                 </li>
                 <li class="nav-item text-white text-center" style="background: #5E8BF7">
                    <a class="nav-link text-white text-center"  href="{{route('company.bookmark')}}">Bookmarked</a>
                 </li>
             </ul>
         </div>
     </nav>

     <!-- Search Bar -->
     <form method="GET" action="{{ route('company.bookedmark.search') }}">
        @csrf
        <div class="search-section container mt-3">
            <div class="row">
                <div class="col-md-12 d-flex" style="gap: 0; width: 80%;">
                    <input type="text" name="job_search" class="form-control" placeholder="Search job" style="width: 300px;" value="{{ request('job_search') }}">
                    <input type="text" name="location" class="form-control" placeholder="Location" style="width: 300px;" value="{{ request('location') }}">
                    <select name="type_skill" class="form-select" style="width: 300px;">
                        <option selected>Type and Skills</option>
                        <option {{ request('type_skill') == 'highly demanded' ? 'selected' : '' }}>highly demanded</option>
                        <option {{ request('type_skill') == 'computer' ? 'selected' : '' }}>computer</option>

                        <option {{ request('type_skill') == 'engineer' ? 'selected' : '' }}>engineer</option>
                        <option {{ request('type_skill') == 'captain' ? 'selected' : '' }}>captain</option>
                        <option {{ request('type_skill') == 'Sailor' ? 'selected' : '' }}>Sailor</option>
                    </select>
                    <select name="yacht_size" class="form-select" style="width: 300px;">
                        <option selected>Yacht size</option>
                        <option {{ request('yacht_size') == 'Small' ? 'selected' : '' }}>Small</option>
                        <option {{ request('yacht_size') == 'Medium' ? 'selected' : '' }}>Medium</option>
                    </select>
                    <select name="budget_range" class="form-select" style="width: 300px;">
                        <option selected>Budget range</option>
                        <option {{ request('budget_range') == 'Up to 2000€' ? 'selected' : '' }}>Up to 2000€</option>
                        <option {{ request('budget_range') == 'Up to 5000€' ? 'selected' : '' }}>Up to 5000€</option>
                    </select>
                    <button type="submit" class="btn btn-primary" style="margin-left: 5px;">Search</button>
                </div>
            </div>
        
    
         {{-- <div class="row mt-3">
             <div class="col-md-12">
                 <span class="tag">4G <span class="tag-remove">x</span></span>
                 <span class="tag">ANTIFOULING <span class="tag-remove">x</span></span>
                 <span class="tag">ANODES <span class="tag-remove">x</span></span>
                 <span class="tag">STARLINK INSTALLATION <span class="tag-remove">x</span></span>
                 <a href="" class="text-danger ms-3">
                    <button type="reset" class="btn btn-sm"> 

                    Clear filters
                </button>
                
                </a>
             </div>
         </div> --}}
     </div>
    </form>

     <!-- Job Listings -->
     <div class="container mt-4">
         <h4>Booked Marked jobs</h4>
         <div class="row">
             <!-- Job Card 1 -->

             @if ($jobs->isEmpty())

             <div class="col-md-12" style="height:52vh">
                <div class="job-card text-center">
                    Sorry no Job marked as Booked
                </div>
             </div>
            @endif

             @foreach ($jobs as $item)
             <div class="col-md-4">
                 <div class="job-card">
                     <!-- Image section -->
                     <div>
                         <img src="{{asset($item->job->images)}}" alt="Job Image" style="width: 100%; border-radius: 10px;">
                     </div>
                     <!-- Job details -->
                     <div class="d-flex justify-content-between mt-3">
                         <h5>Surveyor</h5>
                         <small>{{$item->created_at}}</small>
                     </div>
                     <p>{{$item->job->job_title}}</p>
                     <p><strong>Budget:</strong> up to {{$item->job->budget}}(Flexible)</p>
                     <p><strong>Deliver by:</strong> {{$item->job->delivery_date}}</p>
                     <p><strong>Location:</strong> Port of Monaco, Monaco</p>
                     <p><strong>Size:</strong> 0-10 meters</p>
                     <div>
                        @php
                        $tags = json_decode($item->job->tags, true);
                    @endphp
        
                    @if ($tags)
                        @foreach ($tags as $tag)
                            <span class="tag">{{ $tag['value'] }}</span>
                        @endforeach
                    @else
                        <p>No tags available</p>
                    @endif
                     </div>
                 </div>
             </div>
             @endforeach
             <!-- Repeat for other job cards as per your image -->

         </div>
     </div>

     <!-- Footer -->

     <!-- / Footer -->

     <div class="content-backdrop fade"></div>
 </div>


 <!-- Overlay -->
 <div class="layout-overlay layout-menu-toggle"></div>

 <!-- Drag Target Area To SlideIn Menu On Small Screens -->
 <div class="drag-target"></div>
 </div>
 <!-- / Layout wrapper -->


@endsection