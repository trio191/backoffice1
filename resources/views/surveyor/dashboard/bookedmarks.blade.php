@extends('surveyor.layouts.master')
@section('content')

    <!-- Content wrapper -->
    <div class="layout-demo-wrapper"
        style="background-image: url('dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
        <div class="overlay"></div> <!-- Overlay -->
        <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
            <!-- Text container -->
            <div class="row pt-2">
                <div class="col-lg-7 text-white">
                    <h3 class="text-white">Find your next job around the world!</h3>
                </div>
                <div class="col-lg-5" style="text-align: right;">
                </div>
            </div>
        </div>
    </div>

    <div style="background: white; border-bottom: 1px solid #eee;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; gap: 20px; padding: 0 20px;">
            <a href="{{ route('surveyor-dashboard.index') }}"> <button
                    style= "background: none; border: none; padding: 15px 20px; cursor: pointer;">Available
                    jobs</button></a>
            <a href="{{ route('surveyor.dashboard.myjobs') }}"><button
                    style="background: none; border: none; padding: 15px 20px; cursor: pointer;">My
                    Jobs</button></a>
            <a href="{{ route('surveyor-bookedmark.jobs') }}"><button
                    style="background: #4285f4; color: white; border: none; padding: 15px 20px; cursor: pointer;">Bookmarked</button></a>
        </div>
    </div>

    <div class="container" style="max-width: 1200px; margin: 20px auto; padding: 0 20px;">
        <form method="GET" action="{{ route('surveyor-bookedmark.jobs') }}">
            <div class="row">
                <div style="display: flex; gap: 10px; margin-bottom: 20px;">
                    <input type="text" placeholder="Search job" name="search" value="{{ request('search') }}"
                        style="flex: 2; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    <input type="text" placeholder="Location" name="location" value="{{ request('location') }}"
                        style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    <select name="type_skills" style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="" readonly>Type and Skills</option>
                        <option value="highly demanded" {{ request('type_skills') == 'highly demanded' ? 'selected' : '' }}>
                            Highly Demanded</option>
                        <option value="computer" {{ request('type_skills') == 'computer' ? 'selected' : '' }}>Computer
                        </option>
                        <option value="engineer" {{ request('type_skills') == 'engineer' ? 'selected' : '' }}>Engineer
                        </option>
                        <option value="captain" {{ request('type_skills') == 'captain' ? 'selected' : '' }}>Captain</option>
                        <option value="sailor" {{ request('type_skills') == 'sailor' ? 'selected' : '' }}>Sailor</option>
                    </select>
                    <select name="yacht_size" style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="" readonly>Yacht size</option>
                        <option value="100" {{ request('yacht_size') == '100' ? 'selected' : '' }}>Up to 10m</option>
                        <option value="500" {{ request('yacht_size') == '500' ? 'selected' : '' }}>10 to 20m</option>
                        <option value="1000" {{ request('yacht_size') == '1000' ? 'selected' : '' }}>20 to 50m</option>
                        <option value="2000" {{ request('yacht_size') == '2000' ? 'selected' : '' }}>Above 50m</option>
                    </select>
                    <select name="budget_range" style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="" readonly>Budget range</option>
                        <option value="100" {{ request('budget_range') == '100' ? 'selected' : '' }}>Up to 100€</option>
                        <option value="500" {{ request('budget_range') == '500' ? 'selected' : '' }}>Up to 500€</option>
                        <option value="1000" {{ request('budget_range') == '1000' ? 'selected' : '' }}>Up to 1000€
                        </option>
                        <option value="2000" {{ request('budget_range') == '2000' ? 'selected' : '' }}>Up to 2000€
                        </option>
                    </select>
                    <button type="submit"
                        style="padding: 10px 20px; background: #4285f4; color: white; border: none; border-radius: 4px; cursor: pointer;">Search</button>
                </div>
            </div>
        </form>

        <div style="display: flex; gap: 10px; margin-bottom: 20px; flex-wrap: wrap;">
            @foreach ($filters as $key => $value)
                @if (!empty($value) && $key !== 'sort')
                    <!-- Exclude the 'sort' filter -->
                    <span style="background: #f0f0f0; padding: 5px 10px; border-radius: 15px; font-size: 14px;">
                        {{ ucfirst(str_replace('_', ' ', $key)) }}: {{ $value }}
                    </span>
                @endif
            @endforeach

            @if (
                (!empty(array_filter($filters)) && !empty($filters['search'])) ||
                    !empty($filters['location']) ||
                    !empty($filters['type_skills']) ||
                    !empty($filters['yacht_size']) ||
                    !empty($filters['budget_range']))
                <a href="{{ route('surveyor-dashboard.index') }}"
                    style="color: #4285f4; border: none; background: none; cursor: pointer; padding: 5px 10px;">
                    Clear Filters
                </a>
            @endif
        </div>


        <div class="row">
            <div class="col-lg-10">
                <div>Available jobs <span style="color: #4285f4;">{{ $jobs->count() }}</span></div>
            </div>
            <div class="col-lg-2 d-flex justify-content-end">
                <select id="sortJobs" class="form-control border-0" style="padding: 5px; border-radius: 4px;">
                    <option value="newest"
                        {{ isset($filters['sort']) && $filters['sort'] === 'newest' ? 'selected' : '' }}>Sort by: Newest
                    </option>
                    <option value="oldest"
                        {{ isset($filters['sort']) && $filters['sort'] === 'oldest' ? 'selected' : '' }}>Sort by: Oldest
                    </option>
                </select>
            </div>
        </div>

        <div class="row">
            <!-- Job Card 1 -->

            @if ($jobs->isNotEmpty())
                @foreach ($jobs as $job)
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card"
                            style="width: 100%; border: 1px solid #e0e0e0; border-radius: 2px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); position: relative;">
                            <!-- Verified Badge -->
                            <div><span
                                    style="position: absolute; top: 10px; left: 10px; background: rgba(0,0,0,0.7); color: white; padding: 5px 10px; border-radius: 4px; font-size: 12px;">Verified</span>
                            </div>
                            <!-- Bookmark Icon -->
                            <button id="bookmarkButton-{{ $job->job->id }}" class="btn" onclick="toggleBookmark({{ $job->job->id }}, 'remove')" style="position: absolute; top: 10px; right: 10px; font-size: 20px; color: #007bff;">
                                <div style="background-color: white; border-radius: 150%; padding: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                        <path d="M2 2v13.5l6-3 6 3V2z" />
                                    </svg>
                                </div>
                            </button>


                            <!-- Image -->
                            <img src="{{ asset($job->job->images) }}" class="card-img-top" alt="Card Image"
                                style="border-top-left-radius: 2px; border-top-right-radius: 2px; height: 150px; object-fit: cover;">

                            <!-- Card Body -->
                            <div class="card-body" style="padding: 15px;">
                                <!-- Date and Job Type -->
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">{{ asset($job->job->updated_at->format('j M Y')) }} | @if ($job->require_surveyor == 'yes')
                                            Surveyor
                                        @endif </small>
                                </div>

                                <!-- Title -->
                                <h5 class="card-title"> {{ $job->job->job_title }}
                                </h5>

                                <!-- Description -->
                                <p class="card-text"> {{ Str::words($job->job->job_description, 15, '...') }}</p>

                                <!-- Budget -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                                    <span><i class="bi bi-cash-stack"></i> Budget:</span>
                                    <strong>up to {{ $job->job->budget }}€
                                        @if ($job->budget_flexible == 'yes')
                                            <span class="text-success">Flexible</span>
                                        @else
                                            {{-- <span class="text-muted">Not Flexible</span> --}}
                                        @endif
                                    </strong>
                                </div>
                                <hr>



                                <!-- Delivery Date with proper spacing -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                                    <span><i class="bi bi-calendar"></i> Deliver by:</span>
                                    <strong>     {{ $job->job->delivery_date ? $job->job->delivery_date->format('j M Y') : 'No delivery date available' }}
                                    </strong>
                                    
                                </div>
                                <hr>


                                <!-- Location -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                                    <span><i class="bi bi-geo-alt"></i> Location:</span>
                                    <strong>{{ $job->job->yacht ? ($job->job->yacht->portBase ? $job->job->yacht->portBase : '') : '' }}</strong>


                                </div>
                                <hr>

                                <!-- Size -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                                    <span><i class="bi bi-arrows-fullscreen"></i> Size:</span>
                                    <strong> 
                                    {{ $job->job->yacht ? ($job->job->yacht->yachtSize ? $job->job->yacht->yachtSize : '') : '' }} meters
                                    </strong>

                                </div>
                                <hr>


                                @php
                                $tags = json_decode($job->job->tags, true);
                            @endphp
                
                                <!-- Tags -->
                                <div style="display: flex; flex-wrap: wrap; gap: 5px; margin-top: 15px; color:  ">

                                    @if ($tags)
                                        @foreach ($tags as $tag)
                                            <div class=" badge bg-label-primary"
                                                style="  padding: 3px 8px; border-radius: 15px; font-size: 12px;">
                                                {{ $tag['value'] }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-lg-12 w-100  " style="height:60vh;width:100%">
                    <div class="text-center p-4"
                        style="width: 100%; border: 1px solid #e0e0e0; border-radius: 2px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);  ">
                        Sorry no Job Availible Right now
                    </div>
                </div>
            @endif


        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>


    <script>
       function toggleBookmark(jobId, action) {
    const bookmarkButton = document.getElementById(`bookmarkButton-${jobId}`);
    
    // AJAX request to add/remove bookmark
    $.ajax({
        url: '/toggle-bookmark',  // This is the URL where the bookmark toggle will be handled
        method: 'POST',
        data: {
            job_id: jobId,
            action: action,  // Pass the action (add/remove)
            _token: '{{ csrf_token() }}',  // CSRF token for security
        },
        success: function(response) {
            // If the action was successful, update the button
            
            if (response.success) {
                alert (response.success);

                // if (action === 'add') {
                //     // Change to "remove bookmark" style and icon
                //     bookmarkButton.innerHTML = `
                //         <div style="background-color: white; border-radius: 50%; padding: 5px;">
                //             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                //                 fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                //                 <path d="M2 2v13.5l6-3 6 3V2z" />
                //             </svg>
                //         </div>
                //     `;
                //     bookmarkButton.setAttribute('onclick', `toggleBookmark(${jobId}, 'remove')`);
                // } else {
                //     // Change back to "add bookmark" style and icon
                //     bookmarkButton.innerHTML = `
                //         <div style="background-color: white; border-radius: 50%; padding: 5px;">
                //             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                //                 fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                //                 <path d="M2 2v13.5l6-3 6 3V2z" />
                //             </svg>
                //         </div>
                //     `;
                //     bookmarkButton.setAttribute('onclick', `toggleBookmark(${jobId}, 'add')`);
                // }
            }
        },
        error: function() {
            alert("An error occurred. Please try again.");
        }
    });
}

    </script>
@endsection
