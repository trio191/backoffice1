<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel"
        style="width: 500px !important;">

        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                    class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i> Add crew member</h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">
            <form id="teamMemberFor" enctype="multipart/form-data" method="post" action="{{ route('owner.myteam.store') }}">
   
                @csrf
                @method('post')
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


                    <label style="color:#00365E;font-size: 16px">Profile Picture</label>

                    <div class="form-group mt-3 mb-3" style="position: relative;">
                        <input type="file" name="picture" class="form-control" style="border-radius:0px" name="picture">
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
                            <button id="submitTeamMember" type="submit" class="btn mb-2 d-grid w-100"
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
        $(document).ready(function () {
            let isSubmitting = false; // Flag to prevent multiple submissions
    
            $('#submitTeamMember').off('click').on('click', function (e) {
                e.preventDefault(); // Prevent default form submission
    
                if (isSubmitting) return; // Exit if already submitting
                isSubmitting = true;
    
                var formData = new FormData($('#teamMemberForm')[0]); // Collect form data
                
                // Disable the submit button to avoid double clicks
                var $submitButton = $('#submitTeamMember');
                $submitButton.prop('disabled', true);
                $submitButton.text('Sending...');
    
                // AJAX request
                $.ajax({
                    url: '{{ route('owner.myteam.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        alert('Crew member added successfully!');
                        $('#teamMemberForm')[0].reset(); // Reset form fields
                        $('#selectpickerIcons').selectpicker('refresh'); // Refresh selectpicker
                        $('#offcanvasEnd').modal('hide'); // Close modal
                    },
                    error: function (xhr, status, error) {
                        console.error("Error:", error);
                        alert('Error: Could not add crew member.');
                    },
                    complete: function () {
                        isSubmitting = false; // Reset flag
                        $submitButton.prop('disabled', false);
                        $submitButton.text('Send invitation');
                    }
                });
            });
        });
    </script>
    