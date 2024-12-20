<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel"
    style="width: 500px !important;">

    <div class="offcanvas-header border-bottom">
        <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title"> <i
                class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                aria-label="Close"></i> Add crew member</h5>

    </div>
    <div class="offcanvas-body  mx-0 flex-grow-0">
        <form id="teamMemberForm">
            @csrf
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
                @error('user_type')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <h5 style="color: #00365E;font-size: 16px;">Add to yacths:</h5>
            <p style="color:#9CAFD1;font-size: 14px;margin-top: -10px;">A captain or engineer can be added to multiple
                yachts</p>
            <div class="col-md-12 mb-4">
                <div class="input-group input-group-merge" style="border-radius: 0px !important">
                    <span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i
                            class="ti ti-search"></i></span>
                    <select name="yacht_id" class="form-control select2" id="yacht_id">
                        <option value="" disabled selected>Search for yacht</option>
                        @foreach ($yachts as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->id }} {{ $item->yachtName }}
                            </option>
                        @endforeach
                    </select>

                    @error('yacht_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    @error('yacht_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 mb-4">
                <label style="color:#00365E;font-size: 16px">Personal details</label>
                <div class="form-group mt-3" style="position: relative;">
                    <input type="text" class="form-control" required name="firstname" style="border-radius:0px"
                        placeholder="Boat JBL" name="">
                    <label class="labelOwn" style="color:#5E8BF7">First name*</label>
                    @error('firstname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3" style="position: relative;">
                    <input name="lastname" required type="text" required class="form-control"
                        style="border-radius:0px" placeholder="Last name*" name="">
                    @error('lastname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3" style="position: relative;">
                    <input type="text" required class="form-control" required name="email"
                        style="border-radius:0px" placeholder="Email*" name="">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3" style="position: relative;">
                    <input type="text" required name="phone" required class="form-control"
                        style="border-radius:0px" placeholder="Phone*" name="">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3 mb-3" style="position: relative;">
                    <input type="text" required name="job_title" required class="form-control"
                        style="border-radius:0px" placeholder="Job title" name="">
                    @error('job_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <label style="color:#00365E;font-size: 16px">Invitation message</label>
                <div class="form-group mt-3" style="position: relative;">
                    <textarea type="text" class="form-control" required name="message" style="border-radius:0px"
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
    $(document).ready(function() {
        $('#submitTeamMember').on('click', function(e) {
            console.log('button clicked');
            e.preventDefault(); // Prevent default form submission

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

            console.log(formData); // Debug collected data

            // AJAX request
            $.ajax({
                url: '{{ route('owner.myteam.store') }}',
                type: 'POST',
                data: formData,
                success: function(response) {
                    alert('Crew member added successfully!');
                    window.location.reload();
                    $('#teamMemberForm')[0].reset(); // Reset form fields
                    $('#offcanvasEnd').modal('hide'); // Close the modal

                    // Optionally, update the page dynamically without reload (e.g., append to the list)
                    // $("#teamList").append(response.teamMemberHtml); // Add the new team member to the list dynamically
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 422) { // Validation errors
                        var errors = xhr.responseJSON.errors;
                        for (var field in errors) {
                            if (errors.hasOwnProperty(field)) {
                                var inputField = $('input[name="' + field + '"], select[name="' + field + '"], textarea[name="' + field + '"]');
                                inputField.addClass('is-invalid');
                                inputField.after('<div class="invalid-feedback">' + errors[field].join(', ') + '</div>');
                            }
                        }
                    } else {
                        console.error(xhr.responseText);
                        alert('Error: Could not add crew member.');
                    }
                }
            });
        });

        // Clear validation errors on input change
        $('#teamMemberForm input, #teamMemberForm select').on('input change', function() {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').remove();
        });
    });
</script>

