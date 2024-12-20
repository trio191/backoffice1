@extends('owner.layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        @include('owner.yachts.detail.head', ['yachetData' => $yachetData])
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->
            <div class="col-lg-12 " style="margin-top: -24px">
                <div class="nav-align-top  ">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/overview/{{ $id }}">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false"
                                    tabindex="-1">
                                    Overview
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/job/{{ $id }}">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile"
                                    aria-selected="false" tabindex="-1">
                                    Jobs
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/report/{{ $id }}">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-messages" aria-controls="navs-top-messages"
                                    aria-selected="true">
                                    Reports
                                </button>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="/owner/yachets/info/{{ $id }}">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-yacht" aria-controls="navs-top-yacht" aria-selected="true">
                                    Yacht Info
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" style="margin-left: -20px;margin-right: -20px">
                    <div class="tab-pane fade show active" id="navs-top-yacht" role="tabpanel">


                        <form id="yachtForm" enctype="multipart/form-data">
                            <div class="col-lg-12" style="border: 1px dashed #9CAFD1;padding: 30px;text-align: center;">
                                <button class="btn" id="uploadPhotoBtn" type="button"
                                    style="border: 1px solid #5E8BF7;color: #5E8BF7;background: transparent;border-radius: 0px;">
                                    <div class="d-flex">
                                        <span class="me-2">Upload Photo</span>
                                        <i class="ti ti-upload ti-xs"></i>
                                    </div>
                                </button>
                                <input type="file" id="yachtPhoto" accept="image/*" name="yachtPhoto" style="display: none;">
                                <div id="photoPreview" style="margin-top: 10px;"><img style="width:100px" src="/storage/{{$yachetData->image}}" ></div>
                                <div class="validation-message" id="yachtPhotoValidation"
                                    style="color: red; display: none;"></div>
                            </div>
                            <small style="color: #9CAFD1;">min 1600x230 | max 1920x480</small>
                            <div class="col-md-12 mb-4 mt-4">
                                <label style="color:#00365E;font-size: 16px">Yacht details</label>
                                <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px"
                                        placeholder="John doe"  value="{{$yachetData->yachtName}}"  name="yachtName" id="yachtName">
                                    <label class="labelOwn" style="color:#5E8BF7">Yacht Name*</label>
                                    <div class="validation-message" id="yachtNameValidation"
                                        style="color: red; display: none;"></div>
                                </div>
                                <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px"
                                        placeholder="Yacht Manufacturer *" value="{{$yachetData->yachtManufacturer}}"  name="yachtManufacturer" id="yachtManufacturer">
                                    <div class="validation-message" id="yachtManufacturerValidation"
                                        style="color: red; display: none;"></div>
                                </div>
                                <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px"
                                        placeholder="Mooring Number *"  value="{{$yachetData->mooringNumber}}" name="mooringNumber" id="mooringNumber">
                                    <div class="validation-message" id="mooringNumberValidation"
                                        style="color: red; display: none;"></div>
                                </div>
                                <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control"  value="{{$yachetData->portBase}}" style="border-radius:0px"
                                        placeholder="Port Base" name="portBase" id="portBase">
                                    <div class="validation-message" id="portBaseValidation"
                                        style="color: red; display: none;"></div>
                                </div>
                                <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control" style="border-radius:0px"
                                        placeholder="Yacht Size (in meters) *"  value="{{$yachetData->yachtSize}}" name="yachtSize" id="yachtSize">
                                    <div class="validation-message" id="yachtSizeValidation"
                                        style="color: red; display: none;"></div>
                                </div>
                                <div class="form-group mt-3" style="position: relative;">
                                    <input type="text" class="form-control"  value="{{$yachetData->yachtTonnage}}" style="border-radius:0px"
                                        placeholder="Yacht Tonnage (in GT) *" name="yachtTonnage" id="yachtTonnage">
                                    <div class="validation-message" id="yachtTonnageValidation"
                                        style="color: red; display: none;"></div>
                                </div>
                                <label class="mt-3" style="color:#00365E;font-size: 16px">Registration documents</label>
                                <p style="color:#9CAFD1;font-size: 16px">These documents are necessary to validate that you
                                    are the real owner of this vessel</p>
                                <div class="col-lg-12 mt-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12"
                                                style="border: 1px dashed #5E8BF7;height: 125px;text-align: center;padding: 20px;">
                                                <button class="btn" id="uploadDocumentBtn" type="button"
                                                    style="color: #5E8BF7;background: transparent;border-radius: 0px;">
                                                    <i class="ti ti-plus ti-md mt-3" style="color:#00365E"></i>
                                                    <p class="mt-4" style="color:#9CAFD1;font-size: 13px">Max: 100mb</p>
                                                </button>
                                                <input type="file" accept=".pdf, .doc, .docx" id="registrationDocuments"
                                                    name="registrationDocuments" style="display: none;">
                                                <div class="validation-message" id="registrationDocumentsValidation"
                                                    style="color: red; display: none;"></div>
                                            </div>
                                            <a href="/storage/{{$yachetData->document}}" > view file </a>

                                        </div>
                                        <div class="col-lg-6">
                                            <div id="documentPreview" style="margin-top: 20px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn mb-2 d-grid w-100"
                                            style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Add
                                            yacht</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-backdrop fade"></div>
    </div>

    <script>
        $(document).ready(function() {
            // Show file input when upload button is clicked
            $('#uploadPhotoBtn').on('click', function(e) {
                e.preventDefault();
                $('#yachtPhoto').click();
            });

            // Show file input when upload document button is clicked
            $('#uploadDocumentBtn').on('click', function(e) {
                e.preventDefault();
                $('#registrationDocuments').click();
            });

            // Show image preview
            $('#yachtPhoto').on('change', function() {
                let file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        $('#photoPreview').html('<img src="' + e.target.result +
                            '" alt="Photo Preview" style="max-width: 100%; height: auto;">');
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Show document preview
            $('#registrationDocuments').on('change', function() {
                let file = this.files[0];
                if (file) {
                    $('#documentPreview').html('<p>' + file.name + '</p>');
                }
            });

            // Form validation and submission
            $('#yachtForm').on('submit', function(e) {
                e.preventDefault();

                // Clear previous validation messages and remove red border
                $('.validation-message').hide().html('');
                $('.form-control').removeClass('is-invalid');
                $('.btn').removeClass('is-invalid');
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                // Validate the form
                let valid = true;
                const yachtName = $('#yachtName').val().trim();
                const yachtManufacturer = $('#yachtManufacturer').val().trim();
                const mooringNumber = $('#mooringNumber').val().trim();
                const yachtSize = $('#yachtSize').val().trim();
                const yachtTonnage = $('#yachtTonnage').val().trim();
                const portBase = $('#portBase').val().trim();
                const yachtPhoto = $('#yachtPhoto').prop('files')[0];
                const registrationDocuments = $('#registrationDocuments').prop('files')[0];

                if (yachtName === '') {
                    valid = false;
                    $('#yachtName').addClass('is-invalid');
                    $('#yachtNameValidation').html('Yacht Name is required.').show();
                }
                if (yachtManufacturer === '') {
                    valid = false;
                    $('#yachtManufacturer').addClass('is-invalid');
                    $('#yachtManufacturerValidation').html('Yacht Manufacturer is required.').show();
                }
                if (portBase === '') {
                    valid = false;
                    $('#portBase').addClass('is-invalid');
                    $('#portBaseValidation').html('Port Base is required.').show();
                }
                if (mooringNumber === '') {
                    valid = false;
                    $('#mooringNumber').addClass('is-invalid');
                    $('#mooringNumberValidation').html('Mooring Number is required.').show();
                }
                if (yachtSize === '') {
                    valid = false;
                    $('#yachtSize').addClass('is-invalid');
                    $('#yachtSizeValidation').html('Yacht Size is required.').show();
                }
                if (yachtTonnage === '') {
                    valid = false;
                    $('#yachtTonnage').addClass('is-invalid');
                    $('#yachtTonnageValidation').html('Yacht Tonnage is required.').show();
                }
                if (!yachtPhoto) {
                    valid = false;
                    $('#uploadPhotoBtn').addClass('is-invalid');
                    $('#yachtPhotoValidation').html('Yacht Photo is required.').show();
                }
                if (!registrationDocuments) {
                    valid = false;
                    $('#uploadDocumentBtn').addClass('is-invalid');
                    $('#registrationDocumentsValidation').html('Registration Documents are required.')
                    .show();
                }

                if (valid) {
                    // Form data to send via AJAX
                    let formData = new FormData(this);
                    formData.append('_token', csrfToken);

                    $.ajax({
                        url: '/owner/yachet/update', // Change this to your actual server-side script URL
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            // Handle success response
                            alert('Yacht added successfully!');
                            // Close the offcanvas and reset the form
                            $('#addYacht').offcanvas('hide');
                            $('#yachtForm')[0].reset();
                            $('#photoPreview').html('');
                            $('#documentPreview').html('');

                            // // Reload the page after showing the success message
                            setTimeout(function() {
                                location.reload();
                            }, 1000); // Adjust the timeout duration as needed
                        },
                        error: function(xhr, status, error) {
                            // Handle error response
                            alert(
                            'An error occurred while adding the yacht. Please try again.');
                        }
                    });
                }
            });
        });
    </script>
@endsection
