<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="assets/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Jobs Detail</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="assets/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="assets/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/assets/css/demo.css" />
    <link rel="stylesheet" href="assets/css/profile3.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/assets/vendor/js/helpers.js"></script>

    <!-- Template customizer & Theme config files -->
    <script src="assets/assets/vendor/js/template-customizer.js"></script>
    <script src="assets/assets/js/config.js"></script>

    <style type="text/css">
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #0F3A4F;
            opacity: 0.5;
        }

        .text-container {
            position: relative;
            z-index: 1;
        }

        .vertical-line {
            border-right: 1px solid #9CAFD1;
            padding-right: 5px;
            margin-right: 5px;
        }

        .vertical-line:last-child {
            border-right: none;
        }

        .bg-label-primary {
            background-color: #F2F6FA !important;
            color: #5E8BF7 !important;
        }

        .image-upload-container {
            position: relative;
            display: inline-block;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 120px;
            height: 120px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .upload-icon {
            color: white;
            font-size: 24px;
        }

        .upload-icon:hover {
            color: #ccc;
        }

        #uploadedImage {
            display: block;
            width: 120px;
            height: 120px;
            border-radius: 100%;
            object-fit: cover;
        }

        body {
            font-family: Arial, sans-serif;
            color: #3E6785;
        }

        h4 {
            font-size: 1.25rem;
        }

        .section i {
            font-size: 1.5rem;
        }

        .section p {}

        .border {}

        strong {
            font-weight: 600;
        }

        .banner {
            height: 200px;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
                        url('https://images.unsplash.com/photo-1534447677768-be436bb09401?auto=format&fit=crop&q=80') center/cover;
            position: relative;
        }

        .profile-container {
            padding-top: 60px;
            position: relative;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
            position: absolute;
            top: -60px;
            left: 20px;
        }

        .profile-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
            color: #4a5568;
        }

        .profile-info span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .edit-profile {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: white;
            border: 1px solid #e2e8f0;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            color: #2d3748;
        }

        .edit-profile:hover {
            background-color: #f7fafc;
        }

        h1 {
            color: white;
            margin: 0;
            padding: 20px;
            font-size: 2rem;
        }

        .icon {
            color: #718096;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include 'layout/sidebar.php'; ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php include 'layout/header-6.php'; ?>
                <!-- / Navbar -->

                <div class="wrapper-outer">
                <div class="container-fluid p-0">
        <div style=" height: 130px;" class="banner">
            <h1>Jack Sparrow profile</h1>
            <a href="#" class="edit-profile">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
                Edit profile
            </a>
        </div>
        
        <div class="container profile-container">
            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Profile%20(2)-VgMPL0PKGzopSUvgyTxb3JBkJWuN9i.png" alt="Profile Avatar" class="profile-avatar">
            
            <div class="profile-info mt-4">
                <span class="badge bg-primary">Captain</span>
                
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock icon" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    Yesterday
                </span>

                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar icon" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                    12 December 2022
                </span>

                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt icon" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Florida, United States
                </span>
            </div>
        </div>
    </div>


                    <!-- Header  -->
                    <div class="row" style="margin:100px 20px 0px 30px;">
                        <div class="container col-8">
                            <!-- Introduction Section -->
                            <div class="section">
                                <div class="d-flex  mb-3">
                                    <i style="color: #295677;" class="ti ti-user-circle me-2"></i>
                                    <h4 style="color: #295677;">Introduction</h4>
                                </div>
                                <p style="color: #295677;">The service offered by a Professional on WYR is called a Job.
                                    When a Job is placed for a specific Yacht in a location, a ranked local Professional
                                    provide a quotation and exact time frame for the Job to be executed.</p>
                                <p style="color: #295677;">Yacht owners have various maintenance options. This comprises
                                    different price ranges. Professionals can offer various and tailored service
                                    packages according to their specific requirements.</p>
                            </div>

                            <!-- Company Details Section -->
                            <div class="section mt-5">
                                <div class="d-flex align-items-center mb-3">
                                    <i style="color: #295677;" class="ti ti-building me-2 mb-4 fs-1"></i>
                                    <h4 style="color: #2D597A;">Company details</h4>
                                </div>
                                <div class="row gy-3">
                                    <div class="col-md-6">
                                        <div style="color: #2D597A;" class="p-2 border rounded">Location:
                                            <strong>Portugal</strong></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="color: #2D597A;" class="p-2 border rounded">Years of experience:
                                            <strong>8</strong></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="color: #2D597A;" class="p-2 border rounded">Number of employees:
                                            <strong>10-20</strong></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="color: #2D597A;" class="p-2 border rounded">Workshop:
                                            <strong>Yes</strong></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="color: #2D597A;" class="p-2 border rounded">Storage unit:
                                            <strong>Yes</strong></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job references -->

                            <div class=" mt-5">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="ti ti-briefcase me-2 mb-4 fs-1"></i>
                                    <h4 style="color: #3E6785;">Past jobs and references</h4>
                                </div>
                                <div class="job-card">
                                    <div class="row">
                                        <div  class="col-md-2">
                                            <img style=" width: 100%; height: 105px;" src="assets/img/plastic.jpeg" alt="Job Image" class="job-image">
                                        </div>
                                        <div class="col-md-10">
                                            <div
                                                style=" display: flex; align-items: center; font-family: Arial, sans-serif; font-size: 14px; color: #b0b0cc;">
                                                <label
                                                    style="background-color: #00365E; color: #fff; height: 25px; padding: 0 8px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: 500;">
                                                    <i class="ti ti-star ti-xs" style="margin-right: 4px;"></i>
                                                    Verified
                                                </label>
                                                <span style="margin: 0 8px; color: #b0b0cc;">|</span>
                                                <span>20 Jan 2024</span>
                                                <span style="margin: 0 8px; color: #b0b0cc;">|</span>
                                                <span style="display: flex; align-items: center; margin: 0 8px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        style="width: 14px; height: 14px; fill: #b0b0cc; margin-right: 4px;">
                                                        <path
                                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                                                    </svg>
                                                    Port Portals Nous
                                                </span>
                                                <span style="margin: 0 8px; color: #b0b0cc;">|</span>
                                                <span style="display: flex; align-items: center; margin: 0 8px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                        style="fill: #b0b0cc; margin-right: 4px;">
                                                        <path d="M17 3l4 4l-14 14l-4 -4z" />
                                                        <path d="M16 7l-1.5 -1.5" />
                                                        <path d="M13 10l-1.5 -1.5" />
                                                        <path d="M10 13l-1.5 -1.5" />
                                                        <path d="M7 16l-1.5 -1.5" />
                                                    </svg>
                                                    0-10 meters
                                                </span>
                                            </div>
                                            <div class="job-title mt-2">The plastic on the roof needs replacement
                                                before winter</div>
                                            <div style="color: #3E6785;" class="job-description">
                                                Yacht owners have various maintenance options. This comprises different
                                                price ranges.
                                                Professionals can offer various and tailored service packages according
                                                to their ...
                                            </div>

                                        </div>
                                        <div class="row col-12">
                                            <div class="job-feedback mt-3 p-3 border-top"
                                                style="display: flex; align-items: center; font-size: 0.9rem; color: #333;">
                                                <div class="me-3" style="display: flex; align-items: center;">
                                                    <img src="assets/img/profilePic.jpg" alt="Profile Picture"
                                                        style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover;">
                                                </div>
                                                <div style="color: #3E6785;">
                                                    Job was done very well and the professional presented interest, care
                                                    and dedication from the start.
                                                    For sure I've added him to my list of professionals to contact in
                                                    the future.
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="job-card">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img style=" width: 100%; height: 105px;" src="assets/img/plastic.jpeg" alt="Job Image" class="job-image">
                                        </div>
                                        <div class="col-md-10">
                                            <div
                                                style="display: flex; align-items: center; font-family: Arial, sans-serif; font-size: 14px; color: #b0b0cc;">

                                                <span style="margin: 0 8px; color: #b0b0cc;">|</span>
                                                <span>20 Jan 2024</span>
                                                <span style="margin: 0 8px; color: #b0b0cc;">|</span>
                                                <span style="display: flex; align-items: center; margin: 0 8px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        style="width: 14px; height: 14px; fill: #b0b0cc; margin-right: 4px;">
                                                        <path
                                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                                                    </svg>
                                                    Port Portals Nous
                                                </span>
                                                <span style="margin: 0 8px; color: #b0b0cc;">|</span>
                                                <span style="display: flex; align-items: center; margin: 0 8px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                        style="fill: #b0b0cc; margin-right: 4px;">
                                                        <path d="M17 3l4 4l-14 14l-4 -4z" />
                                                        <path d="M16 7l-1.5 -1.5" />
                                                        <path d="M13 10l-1.5 -1.5" />
                                                        <path d="M10 13l-1.5 -1.5" />
                                                        <path d="M7 16l-1.5 -1.5" />
                                                    </svg>
                                                    0-10 meters
                                                </span>
                                            </div>
                                            <div class="job-title mt-2">The plastic on the roof needs replacement
                                                before winter</div>
                                            <div style="color: #3E6785;" class="job-description">
                                                Yacht owners have various maintenance options. This comprises different
                                                price ranges.
                                                Professionals can offer various and tailored service packages according
                                                to their ...
                                            </div>

                                        </div>
                                        <div class="row col-12">
                                            <div class="job-feedback mt-3 p-3 border-top"
                                                style="display: flex; align-items: center; font-size: 0.9rem; color: #333;">
                                                <div class="me-3" style="display: flex; align-items: center;">
                                                    <img src="assets/img/profilePic.jpg" alt="Profile Picture"
                                                        style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover;">
                                                </div>
                                                <div style="color: #3E6785;">
                                                    Job was done very well and the professional presented interest, care
                                                    and dedication from the start.
                                                    For sure I've added him to my list of professionals to contact in
                                                    the future.
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="job-card">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img style=" width: 100%; height: 105px;" src="assets/img/plastic.jpeg" alt="Job Image" class="job-image">
                                        </div>
                                        <div class="col-md-10">
                                            <div
                                                style="display: flex; align-items: center; font-family: Arial, sans-serif; font-size: 14px; color: #b0b0cc;">
                                                <label
                                                    style="background-color: #00365E; color: #fff; height: 25px; padding: 0 8px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: 500;">
                                                    <i class="ti ti-star ti-xs" style="margin-right: 4px;"></i>
                                                    Verified
                                                </label>
                                                <span style="margin: 0 8px; color: #b0b0cc;">|</span>
                                                <span>20 Jan 2024</span>
                                                <span style="margin: 0 8px; color: #b0b0cc;">|</span>
                                                <span style="display: flex; align-items: center; margin: 0 8px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        style="width: 14px; height: 14px; fill: #b0b0cc; margin-right: 4px;">
                                                        <path
                                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                                                    </svg>
                                                    Port Portals Nous
                                                </span>
                                                <span style="margin: 0 8px; color: #b0b0cc;">|</span>
                                                <span style="display: flex; align-items: center; margin: 0 8px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                        style="fill: #b0b0cc; margin-right: 4px;">
                                                        <path d="M17 3l4 4l-14 14l-4 -4z" />
                                                        <path d="M16 7l-1.5 -1.5" />
                                                        <path d="M13 10l-1.5 -1.5" />
                                                        <path d="M10 13l-1.5 -1.5" />
                                                        <path d="M7 16l-1.5 -1.5" />
                                                    </svg>
                                                    0-10 meters
                                                </span>
                                            </div>
                                            <div class="job-title mt-2">The plastic on the roof needs replacement
                                                before winter</div>
                                            <div style="color: #3E6785;" class="job-description">
                                                Yacht owners have various maintenance options. This comprises different
                                                price ranges.
                                                Professionals can offer various and tailored service packages according
                                                to their ...
                                            </div>

                                        </div>
                                        <div class="row col-12">
                                            <div class="job-feedback mt-3 p-3 border-top"
                                                style="display: flex; align-items: center; font-size: 0.9rem; color: #333;">
                                                <div class="me-3" style="display: flex; align-items: center;">
                                                    <img src="assets/img/profilePic.jpg" alt="Profile Picture"
                                                        style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover;">
                                                </div>
                                                <div style="color: #3E6785;">
                                                    Job was done very well and the professional presented interest, care
                                                    and dedication from the start.
                                                    For sure I've added him to my list of professionals to contact in
                                                    the future.
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="right-contain col-4 ">
                            <!-- Jobs and Yachts Section -->
                            <div class="info-card d-flex align-items-center"
                                style="background: url('assets/img/card-corner.png'); background-size: 100% 100%">
                                <div class="badge rounded-pill bg-label-primary me-3 p-3"
                                    style="background-color:#F2F6FA !important">
                                    <i class="ti ti-briefcase fs-2" style="color:#00365E"></i>
                                </div>
                                <div>
                                    <h5 style="color: #0E4166;">Jobs completed</h5>
                                    <p style="color: #0E4166;">33</p>
                                </div>
                            </div>

                            <div class="info-card d-flex align-items-center"
                                style="background: url('assets/img/card-corner.png'); background-size: 100% 100%">
                                <div class="badge rounded-pill bg-label-primary me-3 p-3"
                                    style="background-color:#F2F6FA !important"><img src="assets\img\yacht-blue.png"
                                        width="35" /></div>
                                <div>
                                    <h5 style="color: #0E4166;"> Yachts & Vessels managed</h5>
                                    <p style="color: #0E4166;" class="mt-1">4</p>
                                </div>
                            </div>



                            <!-- Skills and Competences Section -->
                            <div>
                                <h5>Skills and competences</h5>
                                <div class="skills">
                                    <span class="skill-tag">4G</span>
                                    <span class="skill-tag"
                                        style="background-color: #F2F6FA;
                                  color: #85A7F8;">ANTIFOOLING</span>
                                    <span class="skill-tag">ANODES</span>
                                    <span class="skill-tag">4G</span>
                                    <span class="skill-tag">ANTIFOOLING</span>
                                    <span class="skill-tag">ANODES</span>
                                    <span class="skill-tag">4G, 5G, STARLINK (INTERNET) INSTALLATION</span>
                                </div>
                            </div>

                            <div class="container my-5">
                                <!-- Certifications Section -->
                                <h5>Certifications</h5>
                                <div class="certification-card ">
                                    <div class="col-12">
                                        <p class="certification-title">
                                            Master navigator and cordinate analisys</p>
                                    </div>

                                    <div class="d-flex mt-1">
                                        <label class="col-6"
                                            style="background-color: #00365E; color: #fff; width:80px; height: 25px; padding: 3px 8px; border-radius: 5px; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: 500;">
                                            <i class="ti ti-star ti-xs" style="margin-right: 4px;"></i> Verified
                                        </label>

                                        <p class="certification-date">12 Jan 1990</p>
                                    </div>

                                </div>

                                <div class="certification-card ">
                                    <div class="col-12">
                                        <p class="certification-title">
                                            Master navigator and cordinate analisys</p>
                                    </div>

                                    <div class=" mt-1">

                                        <p class="certification-date mx-1">12 Jan 1990</p>
                                    </div>

                                </div>

                                <div class="certification-card ">
                                    <div class="col-12">
                                        <p class="certification-title">
                                            Master navigator and cordinate analisys</p>
                                    </div>

                                    <div class="d-flex mt-1">
                                        <label class="col-6"
                                            style="background-color: #00365E; color: #fff; width:80px; height: 25px; padding: 3px 8px; border-radius: 5px; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: 500;">
                                            <i class="ti ti-star ti-xs" style="margin-right: 4px;"></i> Verified
                                        </label>

                                        <p class="certification-date">12 Jan 1990</p>
                                    </div>

                                </div>


                                <!-- Contacts Section -->
                                <h5 class="mt-4">Contacts</h5>
                                <div class="contact-icons">
                                    <div class="contact-icon fs-3">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="contact-icon fs-3">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Yacht Listing    -->
                    <div class="row" style="margin:30px 40px 40px 40px;">

                        <div class="container my-5 yacht-section">
                            <!-- Header Section -->
                            <div class="yacht-header mt-3 mb-5">
                                <h5 style="color: #3E6785;">
                                    <span class="yacht-icon"><img src="assets/img/yacht-blue.png"
                                            alt="yacht icon"></i></span> My yachts
                                    <span style="color: #3E6785;" class="yacht-count">3</span>
                                </h5>

                                <div class="row align-items-center">
                                    <div class="col-6 d-flex" style="gap: 8px;">
                                        <!-- Left Arrow Button -->
                                        <button type="button" class="arrow-btn"
                                            style="width: 40px; height: 40px; border: 2px solid rgba(0, 0, 0, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: rgba(0, 0, 0, 0.2); font-size: 18px; background-color: transparent; transition: color 0.3s, border-color 0.3s;">
                                            <i class="bi bi-arrow-left"></i>
                                        </button>

                                        <!-- Right Arrow Button -->
                                        <button type="button" class="arrow-btn"
                                            style="width: 40px; height: 40px; border: 2px solid #0d6efd; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #0d6efd; font-size: 18px; background-color: transparent; transition: color 0.3s, border-color 0.3s;">
                                            <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </div>

                                    <div class="col-6">
                                        <a href="#" class="view-all"
                                            style="font-size: 16px; font-weight: 500; color: #0d6efd; text-decoration: none;">
                                            View all <i class="bi bi-chevron-right" style="font-size: 14px;"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <!-- Yacht Cards -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="yacht-card"
                                        style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
                                        <img src="assets\img\yacht1.jpeg" alt="Yacht Image"
                                            style="width: 100%; height: auto;">
                                        <div style="padding: 15px 25px; background-color: #f8f9fa;">
                                            <p class="yacht-card-title"
                                                style="margin: 0; font-size: 28px; font-weight: 500; color: #305C7B;">
                                                Fast and smooth</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="yacht-card"
                                        style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
                                        <img src="assets\img\yacht1.jpeg" alt="Yacht Image"
                                            style="width: 100%; height: auto;">
                                        <div style="padding: 15px 25px; background-color: #f8f9fa;">
                                            <p class="yacht-card-title"
                                                style="margin: 0; font-size: 28px; font-weight: 500; color: #305C7B;">
                                                Elizabeth </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="yacht-card"
                                        style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
                                        <img src="assets\img\yacht1.jpeg" alt="Yacht Image"
                                            style="width: 100%; height: auto;">
                                        <div style="padding: 15px 25px; background-color: #f8f9fa;">
                                            <p class="yacht-card-title"
                                                style="margin: 0; font-size: 28px; font-weight: 500; color: #305C7B;">
                                                Slice of life</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
