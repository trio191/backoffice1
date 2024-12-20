<br><br>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-5">
            <i class="ti ti-clipboard-check ti-md" style="color: #00365E"></i>
            <label style="font-size: 18px; color: #00365E; padding-top: 5px;" class="me-2">{{ $title }}</label>
            <label class="badge bg-label-primary rounded-pill" style="color: #00365E !important"></label>
        </div>
        <div class="col-lg-7" style="text-align: right; color: #00365E;">
            <div class="row">
                <div class="col-lg-5">
                    <div class="input-group input-group-merge">
                        <span class="input-group-text" id="basic-addon-search31">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" id="searchBar" placeholder="Search..."
                            aria-label="Search..." aria-describedby="basic-addon-search31">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap">
                        <a href="{{route('owner/job')}}">
                        <button type="button" class="btn waves-effect waves-light" style="color: #00365E;">
                            All View
                        </button>
                    </a>
                        <button type="button" class="btn dropdown-toggle waves-effect waves-light"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: #00365E;">
                            Order By
                        </button>
                        <a href="{{route('owner.dashboard')}}">
                        <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false"
                            style="color: #9CAFD1;">
                            Reset
                        </button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards area  -->
    <div id="jobDataContainer">
        <!-- Job data will be loaded here -->
    </div>
    <!-- Pagination -->
    <nav aria-label="Page navigation" style="float: right;">
        <ul class="pagination pagination-square pagination-secondary" id="pagination">
            <!-- Dynamic pagination links will be inserted here -->
        </ul>
    </nav>
</div>
<div id="loader"
    style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.8); z-index: 1000; text-align: center; padding-top: 20%;">
    <img style="width:200px" src="/dashboard/assets/img/loader.gif" alt="Loading...">
</div>
<script>
    let typingTimer; // Timer identifier
    const doneTypingInterval = 2000; // Time in ms (2 seconds)
    document.getElementById('searchBar').addEventListener('keyup', function() {
        clearTimeout(typingTimer); // Clear previous timer
        if (this.value) {
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        }
    });

    function doneTyping() {
        const query = document.getElementById('searchBar').value.trim();
        if (query) {
            window.location.href = '/search?q=' + encodeURIComponent(query);
        } else {
            location.reload();
        }
    }
    fetchPage(1);

    function fetchPage(page) {
        document.getElementById('loader').style.display = 'block';
        var yachetId = @json($yachetId);
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var formData = new FormData();
        formData.append('_token', csrfToken);
        formData.append('yachetId', yachetId);
        $.ajax({
            url: "/owner/job/fetch?page=" + page, // Make sure the URL is correct for job fetching
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(response) {
                document.getElementById('loader').style.display = 'none';
                if(response.data.data.length>0){
                    displayJobs(response.data.data); 
                    setupPagination(response.data); // Set up pagination
                }else{
                    empty()
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                document.getElementById('loader').style.display = 'none';
            }
        });
    }
    function empty() {
        var data =`<div data-bs-toggle="offcanvas" data-bs-target="#createJob" aria-controls="createJob" class="col-lg-12 mb-4" style="border: 1px dashed #5E8BF7;height: 156px;padding: 20px;">
                        <center>
                          <label class="text-center" style="width: 50px;height: 50px;border-radius: 100%;background: #F2F6FA;">
                            <i class="ti ti-briefcase ti-md" style="padding-top: 12px;color: #5E8BF7;"></i>
                          </label>
                          <h4     style="font-size: 20px;color: #00365E;">Create a job post</h4>
                        </center>
                      </div>`;
                      let container = document.getElementById('jobDataContainer');
                      container.innerHTML = data;
    }
    function displayJobs(jobs) {
        let container = document.getElementById('jobDataContainer');
        container.innerHTML = '';
        jobs.forEach(job => {
            let surveyorSpan = job.require_surveyor == "yes" ?
                `<span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1; font-size: 13px;">
                <img src="/dashboard/assets/img/check.png" class="me-1" />Surveyor </span>` :
                '';
            let Flexible = job.budget_flexible == "yes" ?
                `<span class="badge" style="background: #2AD7B30D; color: #1CBDA0;">Flexible</span>` :
                '';
            let jobCard = `
                <div class="col-lg-12 mb-3" style="border: 1px solid #C6D2E7; padding: 20px">
                <div class="row">
                
                    <div class="col-lg-2">
                    <a href="/owner/job/detail/${job.id}" >
                        <img src="/storage/${job.images}" style="width: 100%;" >
                    </a>
                    </div>
                    <div class="col-lg-9" style="color:#00365E">
                    <div class="row">
                        <div style="display: flex">
                        <span class="badge me-2" style="background: #5E8BF7; height: 30px;">
                            <i class="ti ti-circle-check me-1 ti-xs"></i>${job.approval_status} </span>
                        <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1; font-size: 13px;">#${job.id}</span>
                        <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1; font-size: 13px;">${job.delivery_date}</span>
                        <span class="me-2 vertical-line" style="padding-top: 5px; color: #9CAFD1; font-size: 13px;">
                           <a href="/owner/job/detail/${job.id}" >
                                <img src="/dashboard/assets/img/yacht.png" class="me-1" />${job.yacht.yachtName } </span>
                            </a>
                            ${surveyorSpan}
                        </div>
                    </div>
                    <p class="mt-1">${job.job_description}</p>
                    </div>
                    <div class="col-lg-1" style="text-align: right;">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical" style="color: #9CAFD1;"></i></button>
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:void(0);">Edit Job</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Mark as Done</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Approve Job</a></li>
                        <li><a style="color: red;" class="dropdown-item" href="javascript:void(0);">Delete Job</a></li>
                        </ul>
                </div>
                <div class="row mt-1" style="border-top: 1px solid #C6D2E7; margin-left: -20px; margin-right: -20px; padding: 15px; padding-bottom: 0px !important; color: #00365E;">
                    <div class="col-lg-6" style="border-right: 1px solid #9CAFD1;">
                    <div class="d-flex flex-wrap ">
                        <i class="ti ti-coin me-2"></i>
                        <span style="font-size: 14px;" class="me-2">Budget range:</span>
                        <span style="font-size: 14px;" class="me-2">up to ${job.budget}€</span>
                        ${Flexible}
                    </div>
                    </div>
                    <div class="col-lg-5" style="color:#1CBDA0">
                    <div class="d-flex flex-wrap">
                        <i class="fa fa-file-export me-2" style="padding-top: 3px;"></i>
                        <span style="font-size: 14px;" class="me-2">Applications:</span>
                        <span style="font-size: 14px;" class="me-2">05</span>
                    </div>
                    </div>
                </div>
                </div>
            `;
            container.innerHTML += jobCard;
        });
    }
    function setupPagination(data) {
        let pagination = document.getElementById('pagination');
        pagination.innerHTML = ''; // Clear existing pagination
        // First page button
        let firstClass = data.current_page === 1 ? 'disabled' : '';
        let firstPageLink = `
        <li class="page-item ${firstClass}">
            <a class="page-link waves-effect" href="javascript:void(0);" onclick="fetchPage(1)"><i class="ti ti-chevrons-left ti-xs"></i></a>
        </li>`;
        pagination.innerHTML += firstPageLink;
        // Previous button
        let prevClass = data.current_page === 1 ? 'disabled' : '';
        let prevPage = data.current_page > 1 ? data.current_page - 1 : 1;
        let prevLink = `
        <li class="page-item ${prevClass}">
            <a class="page-link waves-effect" href="javascript:void(0);" onclick="fetchPage(${prevPage})"><i class="ti ti-chevron-left ti-xs"></i></a>
        </li>`;
        pagination.innerHTML += prevLink;
        // Page numbers
        for (let page = 1; page <= data.last_page; page++) {
            let activeClass = page === data.current_page ? 'active' : '';
            let pageLink = `
            <li class="page-item ${activeClass}">
                <a class="page-link waves-effect" href="javascript:void(0);" onclick="fetchPage(${page})">${page}</a>
            </li>`;
            pagination.innerHTML += pageLink;
        }
        // Next button
        let nextClass = data.current_page === data.last_page ? 'disabled' : '';
        let nextPage = data.current_page < data.last_page ? data.current_page + 1 : data.last_page;
        let nextLink = `
        <li class="page-item ${nextClass}">
            <a class="page-link waves-effect" href="javascript:void(0);" onclick="fetchPage(${nextPage})"><i class="ti ti-chevron-right ti-xs"></i></a>
        </li>`;
        pagination.innerHTML += nextLink;
        // Last page button
        let lastClass = data.current_page === data.last_page ? 'disabled' : '';
        let lastPageLink = `
        <li class="page-item ${lastClass}">
            <a class="page-link waves-effect" href="javascript:void(0);" onclick="fetchPage(${data.last_page})"><i class="ti ti-chevrons-right ti-xs"></i></a>
        </li>`;
        pagination.innerHTML += lastPageLink;
    }
</script>
