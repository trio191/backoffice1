@extends('company.layout.layout')

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
    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
           style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
           <div class="overlay"></div>
           <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
              <!-- Text container -->
        <div class="row pt-2">
            <div class="col-lg-7 text-white">
                <h3 class="text-white">Find the right professional</h3>
            </div>
            <!-- <div class="col-lg-5" style="text-align: right;">
                <button class="btn btn-primary" id="createJobBtn">Create Job</button>
            </div> -->
        </div>
    </div>
</div>

<!-- Hidden Form -->
<div id="createJobForm" class="slide-in-form" style="display:none; position:fixed; right:-400px; top:0; height:100%; background-color:white; width:400px; padding:20px; box-shadow: -2px 0px 5px rgba(0,0,0,0.5); transition: right 0.3s ease;">
    <h3>Create Job</h3>
    <form>
    <div class="container">
        <div class="mt-4 p-3" style="border: 1px solid #ddd; padding: 20px; background-color: #fff; max-width: 500px; margin: 0 auto;">
            <h5 style="font-size: 18px; font-weight: bold;">The plastic on the roof needs replacement before winter</h5>
            <span class="badge bg-primary">Verified</span> <span>#34563</span>

            <div class="row mt-3">
                <div class="col-6">
                    <p style="margin-bottom: 5px; font-size: 14px; color: #999;">Deliver by: <strong>12 Dec 2024</strong></p>
                </div>
                <div class="col-6">
                    <p style="margin-bottom: 5px; font-size: 14px; color: #999;">Yacht Size: <strong>0 - 10 meters</strong></p>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <p style="margin-bottom: 5px; font-size: 14px; color: #999;">Manufactorer: <strong>Admiral</strong></p>
                </div>
                <div class="col-6">
                    <p style="margin-bottom: 5px; font-size: 14px; color: #999;">Surveyor: <strong>Yes</strong></p>
                </div>
            </div>

            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="message" class="form-label" style="font-weight: bold;">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Why are you suitable for this job?" required style="margin-bottom: 20px;"></textarea>
                    <div class="invalid-feedback">
                        Please provide a message.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="availability" class="form-label" style="font-weight: bold;">Availability</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                        <input type="date" id="availability" class="form-control" required style="margin-bottom: 20px;">
                        <div class="invalid-feedback">
                            Please select your availability date.
                        </div>
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="timeframe" required>
                    <label class="form-check-label" for="timeframe" style="font-weight: bold;">Timeframe for completing the job</label>
                    <div class="invalid-feedback">
                        Please confirm the timeframe.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="workplan" class="form-label" style="font-weight: bold;">Workplan</label>
                    <textarea class="form-control" id="workplan" rows="3" placeholder="Please describe your work plan" required style="margin-bottom: 20px;"></textarea>
                    <div class="invalid-feedback">
                        Please provide a workplan.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="laborCost" class="form-label" style="font-weight: bold;">Costs (labor and material)</label>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" id="laborCost" placeholder="EUR 3400" required style="margin-bottom: 20px;">
                            <div class="invalid-feedback">
                                Please provide labor cost.
                            </div>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="materialCost" placeholder="EUR Material cost" required style="margin-bottom: 20px;">
                            <div class="invalid-feedback">
                                Please provide material cost.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3" style="background-color: #f1f3f5; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                    <p>Total cost: <strong id="totalCost">3400</strong></p>
                </div>

                <div class="mb-3">
                    <label for="paymentOptions" class="form-label" style="font-weight: bold;">Payment options</label>
                    <select id="paymentOptions" class="form-select" required style="margin-bottom: 20px;">
                        <option value="3 Installments (1000€/each)">3 Installments (1000€/each)</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a payment option.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Apply for this job</button>
            </form>

            <p class="text-danger mt-3" style="color: #ff5757;">Your proposal will be reviewed and you will get an email with the job offer.</p>
        </div>
    </div>
    </form>
</div>

        <!-- / Content -->
        @include('company.job.tab')
        <!-- Search Bar -->
        <?php $Yachtsize = fetchUniqueColumnValues('yachet', 'yachtSize'); ?>
        <?php $Skills = fetchUniqueColumnValues('job_posts', 'tags'); ?>
        <?php $budgetrange = fetchUniqueColumnValues('job_posts', 'budget'); ?>

 <div class="search-section container mt-3">
          <div class="row">
        <div class="col-md-12 d-flex" style="gap: 0; width: 80%;">
            <!-- Input for Job Search -->
            <input type="text" id="search-job" class="form-control" placeholder="Search job" style="margin-right: 0; width: 300px;">

            <!-- Select for Type and Skills -->
            <select id="skills-select" class="form-select" style="margin-right: 0; width: 300px;">
                <option value="" selected>Type and Skills</option>
                @foreach ($Skills as $data)
                    <?php
                    // Clean up the data (if needed) and decode the JSON
                    $data = trim($data, '"');
                    $dt = json_decode($data);
                    ?>

                    @if (json_last_error() === JSON_ERROR_NONE)
                        @foreach ($dt as $dita)
                            <option>{{ $dita->value }}</option> <!-- Use Blade syntax for echoing -->
                        @endforeach
                    @else
                        <option>Invalid data</option>
                    @endif
                @endforeach
            </select>

            <!-- Select for Yacht Size -->
            <select id="yacht-size-select" class="form-select" style="margin-right: 0; width: 300px;">
                <option selected value="" >Yacht size</option>
                @foreach ($Yachtsize as $data)
                    <option>{{ $data }}</option>
                @endforeach
            </select>

            <!-- Select for Budget Range -->
            <select id="budget-range-select" class="form-select" style="width: 300px;">
                <option  value="" selected>Budget range</option>
                @foreach ($budgetrange as $data)
                    <option>{{ $data }}€</option>
                @endforeach
            </select>

            <!-- Search Button -->
            <button id="search-btn" class="btn btn-primary" style="margin-left: 5px;" onclick="fetchPage(1)" >Search</button>
            </div>
    </div>

      <div class="row mt-3">
           <div class="col-md-12">
            <span class="tag">4G <span class="tag-remove">x</span></span>
            <span class="tag">ANTIFOULING <span class="tag-remove">x</span></span>
            <span class="tag">ANODES <span class="tag-remove">x</span></span>
            <span class="tag">STARLINK INSTALLATION <span class="tag-remove">x</span></span>
            <a href="#" id="clear-filters" class="text-danger ms-3">Clear filters</a>
            </div>
          </div>
</div>

        <!-- Job Listings -->
        <div class="container mt-4">
            <h4>Available jobs <span style="color: #6c757d; font-size: 0.8rem;">230</span>
            </h4>
            <div class="container mt-5">
                <div class="row" id="jobDataContainer">
                    <!-- Job Card 1 -->
                   
                   
                </div>
            </div>
        </div>
        <!-- Footer -->
        <!-- / Footer -->
        <div class="content-backdrop fade"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
         
        // Capture the HTML elements in JavaScript variables

// Add event listeners if needed, for example on the search button
// searchButton.addEventListener('click', function() {
//     console.log("Search button clicked");
//     console.log("Search Query: ", searchInput.value);
//     console.log("Selected Skill: ", skillsSelect.value);
//     console.log("Selected Yacht Size: ", yachtSizeSelect.value);
//     console.log("Selected Budget Range: ", budgetRangeSelect.value);
// });

// Example: Clear filters action
// clearFilters.addEventListener('click', function() {
//     searchInput.value = "";
//     skillsSelect.selectedIndex = 0;
//     yachtSizeSelect.selectedIndex = 0;
//     budgetRangeSelect.selectedIndex = 0;
//     console.log("Filters cleared");
// });
         fetchPage(1);

function fetchPage(page) {

    const searchInput = document.getElementById('search-job').value;
    const skillsSelect = document.getElementById('skills-select').value;
    const yachtSizeSelect = document.getElementById('yacht-size-select').value;
    const budgetRangeSelect = document.getElementById('budget-range-select').value;
    const searchButton = document.getElementById('search-btn').value;
    const clearFilters = document.getElementById('clear-filters').value;


    // document.getElementById('loader').style.display = 'block';
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    var formData = new FormData();
    formData.append('_token', csrfToken);
    formData.append('searchjob', searchInput);
    formData.append('skill', skillsSelect);
    formData.append('yachtsize', yachtSizeSelect);
    formData.append('budgetrange', budgetRangeSelect);

    $.ajax({
        url: "/company/job/available/fetch?page=" + page, // Make sure the URL is correct for job fetching
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(response) {
            console.log(response.data,"razi");
            displayJobs(response.data.data)
            
      
        },
        error: function(xhr, status, error) {
            console.error(error);
            document.getElementById('loader').style.display = 'none';
        }
    });
}


function displayJobs(jobs) {
        let container = document.getElementById('jobDataContainer');
        container.innerHTML = '';
        jobs.forEach(job => {
           console.log(job);
           
         var tag = JSON.parse(job.tags);
         console.log(tag, "ahad");

         let tagsHtml = `<div style="display: flex; flex-wrap: wrap; gap: 5px; margin-top: 15px;">`;

// Loop through each tag in the array and generate the corresponding HTML
tag.forEach(function(t) {
    tagsHtml += `
    <div style="background-color: #f1f1f1; color: #6c757d; padding: 3px 8px; border-radius: 15px; font-size: 12px;">
        ${t.value}
    </div>`;
});

// Close the container div
tagsHtml += `</div>`;
         
           
            let jobCard = ` <div class="col-md-4 d-flex justify-content-center">
                        <div class="card"A
                            style="width: 100%; border: 1px solid #e0e0e0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); position: relative;">
                            <!-- Verified Badge -->
                            <div
                                style="position: absolute; top: 10px; left: 10px; background-color: #1f8ef1; color: white; border-radius: 10px; padding: 5px 10px; font-size: 12px;">
                                Verified</div>
                            <!-- Bookmark Icon -->
                            <div  onclick="addbokmark(${job.id})" style="position: absolute; top: 10px; right: 10px; font-size: 20px; color: #007bff;">
                                <div style="background-color: white; border-radius: 150%; padding: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                        <path d="M2 2v13.5l6-3 6 3V2z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- Image -->
                            <img src="/storage/${job.images}" class="card-img-top" alt="Card Image"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px; height: 150px; object-fit: cover;">
                            <!-- Card Body -->
                            <div class="card-body" style="padding: 15px;">
                                <!-- Date and Job Type -->
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">${job.created_at}</small>
                                    <small class="text-muted">${job.require_surveyor}</small>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title">${job.job_title} </h5>
                                <!-- Description -->
                                <p class="card-text">${job.job_description}</p>
                                <!-- Budget -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                                    <span>
                                        <i class="bi bi-cash-stack"></i> Budget: </span>
                                    <strong>${job.budget}€ <span class="text-success">${job.budget_flexible}</span>
                                    </strong>
                                </div>
                                <hr>
                                <!-- Delivery Date with proper spacing -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                                    <span>
                                        <i class="bi bi-calendar"></i> Deliver by: </span>
                                    <strong>${job.delivery_date}</strong>
                                </div>
                                <hr>
                                <!-- Location -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                                    <span>
                                        <i class="bi bi-geo-alt"></i> Location: </span>
                                    <strong>Port of Monaco, Monaco</strong>
                                </div>
                                <hr>
                                <!-- Size -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="font-size: 13px; color: #6c757d; margin-top: 10px;">
                                    <span>
                                        <i class="bi bi-arrows-fullscreen"></i> Size: </span>
                                    <strong>${job.yacht_size}</strong>
                                </div>
                                <hr>
                                <!-- Tags -->
${tagsHtml}
                            </div>
                        </div>
                    </div>            `;
            container.innerHTML += jobCard;
        });
    }
    function addbokmark(jobid) {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var formData = new FormData();
        formData.append('_token', csrfToken);
        formData.append('job_id', jobid);


        $.ajax({
            url: "/company/job/boomark/add",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(response) {
                console.log(response);
                
                
        
            },
            error: function(xhr, status, error) {
                console.error(error);
                document.getElementById('loader').style.display = 'none';
            }
        });
    }
    const createJobBtn = document.getElementById('createJobBtn');
    const createJobForm = document.getElementById('createJobForm');
    const closeFormBtn = document.getElementById('closeFormBtn');

    createJobBtn.addEventListener('click', function() {
        createJobForm.style.display = 'block';
        setTimeout(() => {
            createJobForm.style.right = '0';
        }, 10); // Small delay to trigger the transition
    });

    closeFormBtn.addEventListener('click', function() {
        createJobForm.style.right = '-400px';
        setTimeout(() => {
            createJobForm.style.display = 'none';
        }, 300); // Same duration as the transition
    });

    </script>
@endsection
