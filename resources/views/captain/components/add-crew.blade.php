<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel"
        style="width: 500px !important;">

        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                    class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i> Add crew member</h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">
            <form id="captainteamMemberForm">
                <h5 style="color: #00365E;font-size: 16px;">Invite user as:</h5>
                <p style="color:#9CAFD1;font-size: 14px;margin-top: -10px;">Please select the account type for this user
                </p>
                <div class="col-md-12 mb-4">
                    <select name="user_type" class="form-control selectpicker w-100 show-tick" id="selectpickerIcons"
                        data-icon-base="ti" data-tick-icon="ti-check" data-style="btn-default"
                        style="border-radius: 0px !important;">
                        <option data-icon="ti ti-brand-instagram">Captain</option>
                        <option data-icon="ti ti-brand-pinterest">Chief engineers
                        </option>
                        <option data-icon="ti ti-brand-twitch">yacht crew
                        </option>
                    </select>
                </div>
                <h5 style="color: #00365E;font-size: 16px;">Add to yacths:</h5>
                <p style="color:#9CAFD1;font-size: 14px;margin-top: -10px;">A captain or engineer can be added to multiple
                    yachts</p>
                <div class="col-md-12 mb-4">
                    <div class="input-group input-group-merge" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i
                                class="ti ti-search"></i></span>
                        {{-- <input type="text" style="border-radius: 0px !important" class="form-control"
                        placeholder="Search for yacht" aria-label="Search..." aria-describedby="basic-addon-search31"> --}}

                        <select name="yacht_id" class="form-control select2" id="">
                            <option value="">Search for yacht</option>
                            @foreach ($yachts as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->yachtName }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                {{-- <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
                    <div class="row">
                        <div class="col-lg-11">
                            <h4 style="color: #00365E;font-size: 16px;">Fast and smooth</h4>
                            <div class="d-flex flex-wrap">
                                <div class="me-2" style="color:#9CAFD1;font-size: 10px">Mooring: <span
                                        style="color: #00365E;margin-left: 5px;">0023340</span></div>
                                <div style="color:#9CAFD1;font-size: 10px">Port: <span
                                        style="color: #00365E;margin-left: 5px;">Santa luzia esq, italy, 20559</span></div>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <i class="ti ti-x ti-md" style="color: #9CAFD1;margin-left: -10px;margin-top: 10px;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4" style="border: 1px solid #5E8BF7;padding: 20px;">
                    <div class="row">
                        <div class="col-lg-11">
                            <h4 style="color: #00365E;font-size: 16px;">Elizabeth III</h4>
                            <div class="d-flex flex-wrap">
                                <div class="me-2" style="color:#9CAFD1;font-size: 10px">Mooring: <span
                                        style="color: #00365E;margin-left: 5px;">0023340</span></div>
                                <div style="color:#9CAFD1;font-size: 10px">Port: <span
                                        style="color: #00365E;margin-left: 5px;">Santa luzia esq, italy, 20559</span></div>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <i class="ti ti-x ti-md" style="color: #9CAFD1;margin-left: -10px;margin-top: 10px;"></i>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-12 mb-4">
                    <label style="color:#00365E;font-size: 16px">Personal details</label>
                    <div class="form-group mt-3" style="position: relative;">
                        <input type="text" class="form-control" name="firstname" style="border-radius:0px"
                            placeholder="Boat JBL" name="">
                        <label class="labelOwn" style="color:#5E8BF7">First name*</label>
                    </div>
                    <div class="form-group mt-3" style="position: relative;">
                        <input name="lastname" type="text" class="form-control" style="border-radius:0px"
                            placeholder="Last name*" name="">
                    </div>
                    <div class="form-group mt-3" style="position: relative;">
                        <input type="text" class="form-control" name="email" style="border-radius:0px"
                            placeholder="Email*" name="">
                    </div>
                    <div class="form-group mt-3" style="position: relative;">
                        <input type="text" name="phone" class="form-control" style="border-radius:0px"
                            placeholder="Phone*" name="">
                    </div>
                    <div class="form-group mt-3 mb-3" style="position: relative;">
                        <input type="text" name="job_title" class="form-control" style="border-radius:0px"
                            placeholder="Job title" name="">
                    </div>
                    <label style="color:#00365E;font-size: 16px">Invitation message</label>
                    <div class="form-group mt-3" style="position: relative;">
                        <textarea type="text" class="form-control" name="message" style="border-radius:0px"
                            placeholder="Leave a message for the user" name=""></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <button id="captainsubmitTeamMember" type="submit" class="btn mb-2 d-grid w-100"
                                style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Send
                                invitation</button>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn  d-grid w-100" data-bs-dismiss="offcanvas" type="reset"
                                style="border-radius:0px !important;background: transparent;color: #5E8BF7;border: 1px solid #C6D2E7;">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#captainsubmitTeamMember').on('click', function(e) {
                e.preventDefault(); // Prevent default form submission
                console.log('Submit button clicked');
                
                // Collect form data
                var formData = {
                    user_type: $('select[name="user_type"]').val(),
                    yacht_id: $('select[name="yacht_id"]').val(),
                    firstname: $('input[name="firstname"]').val(),
                    lastname: $('input[name="lastname"]').val(),
                    email: $('input[name="email"]').val(),
                    phone: $('input[name="phone"]').val(),
                    job_title: $('input[name="job_title"]').val(),
                    message: $('textarea[name="message"]').val(),
                    _token: '{{ csrf_token() }}' // Laravel CSRF token for security
                };
    
                // AJAX request
                $.ajax({
                    url: '{{ route('captain-team.store') }}', // This uses the store method of OwnerMyTeamController
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        alert('Crew member added successfully!');
                        
                        // Reset form fields
                        $('#captainteamMemberForm')[0].reset(); // Reset form fields
                        $('#selectpickerIcons').selectpicker('refresh'); // Refresh selectpicker
                        $('#offcanvasEnd').modal('hide'); // Close the modal
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText); // Log the detailed error for debugging
                        alert('Error: Could not add crew member. Please try again.');
                    }
                });
            });
        });
    </script>
    