<!DOCTYPE html>
<html>
<head>
    @include('user.layout.link')
    <link rel="stylesheet" href="{{ asset('user/css/account/login.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/account/account.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/addOwner.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/account/AccountConfirmation.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <style>
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
        .is-invalid {
            border-color: red;
        }
        /* Bootstrap Tags Input custom styles */
        .bootstrap-tagsinput {
            background-color: #f0f0f0;
            width: 100%;
        }
        .bootstrap-tagsinput .tag {
            color: #ffffff !important;
            background-color: #5E8BF7;
            border: none;
            margin-right: 2px;
        }
    </style>
</head>
<body style="overflow-x:hidden">
    <div class="row h-auto" style="font-family: Poppins;">
        <div class="col-xl-4 left-side-add-owner">
            <div class="left-content-add-owner">
                <div class="overlay"></div>
                <div class="py-3">
                    <img src="/user/images/logo.png" class="position-relative z-index-1" alt="logo" width="100">
                </div>
                <p class="text-white position-relative create-account-text-upper z-index-1 text-uppercase">One-stop management Platform</p>
                <h4 class="text-center create-account-text-heading text-white position-relative z-index-1">Keeping your yacht seaworthy, year-round</h4>
            </div>
        </div>
        <div class="col-12 col-xl-8 px-0 right-side scroll-container">
            <div class="px-5 py-3">
                <div class="d-flex py-4">
                    <img src="/user/images/third.png"/>
                </div>
                <h3 class="heading">Let’s add your first <span style="color: #5E8BF7;">Yacht</span></h3>
                <p class="sub-heading" style="font-family: Poppins; letter-spacing: 0.5px;">
                    Please add below at least one vessel you own. Later you can add all your fleet.
                </p>
                <div class="py-0 d-flex align-content-center">
                    <p class="col-6 py-1 d-flex text-white" style="background-color: #5E8BF7; font-family: Poppins; font-size: 13px; font-weight: 500; line-height: 22px; letter-spacing: 1px; text-align: left;">YACHT 1</p>
                    <p class="col-6 py-1 d-flex text-white justify-content-end" style="background-color: #5E8BF7; font-family: Poppins; font-size: 13px; font-weight: 500; line-height: 22px; letter-spacing: 1px; text-align: left;">Default</p>
                </div>
                <div class="hero upperImage col-12 d-flex align-items-center justify-content-center" style="background-image: url('/user/images/hero-banner.png');">
                    <div class="overlayss"></div>
                    <div class="d-flex m-auto content">
                        <button class="text-white bg-transparent border border-white px-3 py-2 d-flex align-items-center text-uppercase py-3" style="font-family: Poppins; font-size: 14px; font-weight: 500; line-height: 21px; letter-spacing: 1px; text-align: left;">ADD/Change yacht Photo
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-upload ml-2" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <form id="yachtForm">
                    <div class="form-row">
                        <label class="col-12 py-3" style="font-family: Poppins; font-size: 18px; font-weight: 400; line-height: 36px; letter-spacing: 0.5px; text-align: left; color: #00365E;">Yacht details</label>
                        <div class="form-group col-md-6">
                            <input type="text" class="custome-input-field-addowner" id="yachtManufacturer" placeholder="Yacht Manufacturer *">
                            <div class="error-message" data-error="yachtManufacturer"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="custome-input-field-addowner" id="yachtName" placeholder="Yacht Name*">
                            <div class="error-message" data-error="yachtName"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="custome-input-field-addowner" id="mooringNumber" placeholder="Mooring Number *">
                            <div class="error-message" data-error="mooringNumber"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="custome-input-field-addowner" id="portBase" placeholder="Port Base*">
                            <div class="error-message" data-error="portBase"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="custome-input-field-addowner" id="yachtSize" placeholder="Yacht Size (in meters) *">
                            <div class="error-message" data-error="yachtSize"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="custome-input-field-addowner" id="yachtTonnage" placeholder="Yacht Tonnage (in GT) *">
                            <div class="error-message" data-error="yachtTonnage"></div>
                        </div>
                        <div class="col-12 innerFormBg">
                            <label for="inviteMembers" class="p-2" style="font-size: 16px;">Invite yacht members (Optional)</label>
                            <div class="input-group mt-2 px-1">
                                <input type="email" class="form-control" id="memberEmail" placeholder="Email" aria-label="Text input with dropdown button">
                                <div class="input-group-append">
                                    <select id="memberRole" class="form-control">
                                        <option value="" selected>Select Role</option>
                                        <option value="Captain">Captain</option>
                                        <option value="Chief Engineer">Chief Engineer</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-12 px-4 py-3">
                                <button type="button" id="addMember" class="border-0 text-dark bg-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                    </svg>
                                    Add another
                                </button>
                            </div>
                            <p class="text-dark small px-1" style="font-family: Poppins;">
                                Your captains/engineers will get an email that gives them access to this vessel
                            </p>
                        </div>
                    </div>
                
                <div id="membersList" class="mt-3"></div>
                <div class="hero lowerImage px-0 mt-4 position-relative" style="background-image: url('/user/images/plansimage.jpg');">
                    <div class="overlay"></div>
                    <div class="d-flex align-items-center w-100 p-3">
                        <img src="/user/images/boot.png" style="width: 70px; height: 44px; z-index: 100;">
                        <div class="container content">
                            <h2 style="font-family: Cormorant Garamond; font-size: 36px; font-weight: 400; line-height: 40px; letter-spacing: 1px; color: white;">Need to add more vessels?</h2>
                            <p style="font-family: Poppins; font-size: 14px; font-weight: 500; line-height: 21px; letter-spacing: 1px; color: white; text-transform: uppercase;">Don’t worry! you can add as many as you need later.</p>
                        </div>
                    </div>
                </div>
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-6 d-flex">
                        <a href="/register/chief/Engineer" > 
                            <button type="button" class="border-0 d-flex align-items-center bg-white px-4 py-1">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                                </svg>
                                <span>Back</span>
                            </button>
                        </a> 
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button type="submit" class="border-0 d-flex align-items-center text-white px-4 py-1" style="background-color: #5E8BF7;">
                            Next
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

                        // Retrieve and parse the yacht owner data from localStorage
            var addYachatOwners = JSON.parse(localStorage.getItem('addYachatOwner')) || {};

            // Define an array of fields to set values for
            var fields = [
                'manufacturer',
                'name',
                'mooringNumber',
                'portBase',
                'size',
                'tonnage',
                'members'
            ];

            // Loop through each field and set the value
            fields.forEach(function(field) {
                if (field === 'members') {
                    // Special case for 'members': parse JSON if exists, or set empty array
                    $('#members').val(addYachatOwners[field] ? JSON.parse(addYachatOwners[field]) : []);
                } else {
                    // Set other fields normally, with default empty string
                    $('#' + field).val(addYachatOwners[field] || '');
                }
            });


            var members = [];
            console.log(addYachatOwners);
            
            if (addYachatOwners.length>0) {
                members=JSON.parse(addYachatOwners.members) || [];

            }
            updateMembersList();
            $('#addMember').click(function() {
                var email = $('#memberEmail').val().trim();
                var role = $('#memberRole').val();
                $('#memberEmail').removeClass('is-invalid');
                $('#memberRole').removeClass('is-invalid');

                if (validateEmail(email) && role) {
                    var member = {
                        email: email,
                        role: role
                    };
                    members.push(member);
                    updateMembersList();
                    $('#memberEmail').val('');
                    $('#memberRole').val('');
                } else {
                    if (!validateEmail(email)) {
                        $('#memberEmail').addClass('is-invalid');
                    } else {
                        $('#memberEmail').removeClass('is-invalid');
                    }
                    if (!role) {
                        $('#memberRole').addClass('is-invalid');
                    } else {
                        $('#memberRole').removeClass('is-invalid');
                    }
                }
            });

            function validateEmail(email) {
                var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            function updateMembersList() {
                var membersList = $('#membersList');
                membersList.empty();
                members.forEach(function(member, index) {
                    membersList.append('<div>' + member.email + ' - ' + member.role + ' <button type="button" class="btn btn-link removeMember" data-index="' + index + '">Remove</button></div>');
                });
            }

            $(document).on('click', '.removeMember', function() {
                var index = $(this).data('index');
                members.splice(index, 1);
                updateMembersList();
            });

       

            $('#yachtForm').submit(function(event) {
                event.preventDefault();
                var yachtDetails = {
                    manufacturer: $('#yachtManufacturer').val().trim(),
                    name: $('#yachtName').val().trim(),
                    mooringNumber: $('#mooringNumber').val().trim(),
                    portBase: $('#portBase').val().trim(),
                    size: $('#yachtSize').val().trim(),
                    tonnage: $('#yachtTonnage').val().trim(),
                    members:JSON.stringify(members)         
                };

                 var isValid = validateYachtForm(yachtDetails);
                if (isValid) {
                    localStorage.setItem('addYachatOwner', JSON.stringify(yachtDetails));
                    window.location.href = "/register/password";
                    console.log('Yacht Details:', yachtDetails);
                    // Proceed with form submission (e.g., AJAX request)
                 }
            });

            function validateYachtForm(details) {
                var isValid = true;
                if (!details.manufacturer) {
                    isValid = false;
                    showError('yachtManufacturer', 'Yacht Manufacturer is required');
                } else {
                    hideError('yachtManufacturer');
                }
                if (!details.name) {
                    isValid = false;
                    showError('yachtName', 'Yacht Name is required');
                } else {
                    hideError('yachtName');
                }
                if (!details.mooringNumber) {
                    isValid = false;
                    showError('mooringNumber', 'Mooring Number is required');
                } else {
                    hideError('mooringNumber');
                }
                if (!details.portBase) {
                    isValid = false;
                    showError('portBase', 'Port Base is required');
                } else {
                    hideError('portBase');
                }
                if (!details.size) {
                    isValid = false;
                    showError('yachtSize', 'Yacht Size is required');
                } else {
                    hideError('yachtSize');
                }
                if (!details.tonnage) {
                    isValid = false;
                    showError('yachtTonnage', 'Yacht Tonnage is required');
                } else {
                    hideError('yachtTonnage');
                }
                return isValid;
            }

            function showError(field, message) {
                var errorElement = $('[data-error="' + field + '"]');
                errorElement.text(message);
                $('#' + field).addClass('is-invalid');
            }

            function hideError(field) {
                var errorElement = $('[data-error="' + field + '"]');
                errorElement.text('');
                $('#' + field).removeClass('is-invalid');
            }
        });
    </script>
</body>
</html>
