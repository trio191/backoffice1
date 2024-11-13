<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<div class="offcanvas offcanvas-end" tabindex="-1" id="createJob" aria-labelledby="createJob" style="width: 500px !important;">
	<div class="offcanvas-header border-bottom">
		<h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title">
			<i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas" aria-label="Close"></i> Create Job post </h5>
	</div>
	<div class="offcanvas-body mx-0 flex-grow-0">
		<form id="jobForm" enctype="multipart/form-data" method="POST">
			<!-- Other form fields -->
             <?php 
             $fetchYachets = fetchYachets();
             ?>
			<h5 style="color: #00365E;font-size: 16px;">Select a yacht to post the job</h5>
			<div class="col-md-12 mb-4">
				<div class="input-group input-group-merge" style="border-radius: 0px !important">
					<select class="form-control" id="selectYacht" name="yacht" style="border-radius: 0px !important;">
						<option value="">Select yacht</option>
                        @foreach($fetchYachets as $data)
						<option value="{{$data->id}}">{{$data->yachtName}}</option>
                        @endforeach
					</select>
					<div class="invalid-feedback">Please select a yacht.</div>
				</div>
			</div>
			<div class="col-md-12 mb-4">
				<label style="color:#00365E;font-size: 16px">Job title</label>
				<div class="form-group mt-3" style="position: relative;">
					<input type="text" class="form-control" id="jobTitle" name="job_title" style="border-radius:0px" placeholder="What is the purpose of this job?">
					<small style="color: #9CAFD1;font-size: 14px;" class="mt-2">0 of 50 max characters.</small>
					<div class="invalid-feedback">Please enter a job title.</div>
				</div>
			</div>
			<!-- Skills Input -->
			<div class="col-md-12 mb-4">
				<label style="color:#00365E;font-size: 16px">Type & Skills</label>
				<div class="form-group mt-3" style="position: relative;">
					<input name='tags' class="form-control" placeholder='Type something...' value=''>
					<div class="invalid-feedback">Please enter the job type and skills.</div>
				</div>
			</div>
			<div class="col-md-12 mb-4">
				<label style="color:#00365E;font-size: 16px">Job description</label>
				<div class="form-group mt-3" style="position: relative;">
					<textarea class="form-control" id="jobDescription" name="job_description" style="border-radius:0px" rows="5" placeholder="Please describe the issue or present additional details for the professional"></textarea>
					<div class="invalid-feedback">Please enter a job description.</div>
				</div>
			</div>
			<div class="col-md-12 mb-2">
				<label style="color:#00365E;font-size: 16px">Do you require surveyor?</label>
				<p style="color:#9CAFD1;font-size: 16px">The job will be open for surveyors applications</p>
				<select class="form-control" id="requireSurveyor" name="require_surveyor" style="border-radius: 0px !important;">
					<option value="">select surveyors status</option>
					<option value="no">No, I don't need a surveyor</option>
					<option value="yes">Yes, I need a surveyor</option>
				</select>
				<div class="invalid-feedback">Please select if you require a surveyor.</div>
			</div>
			<div class="col-md-12 mb-2 mt-4">
				<label style="color:#00365E;font-size: 16px">Is your budget flexible?</label>
				<div class="col-md-12 mb-2 mt-2">
					<select class="form-control " id="requireflexiblity" name="budget_flexible" style="border-radius: 0px !important">
						<option value="">select budget flexiblity</option>
						<option value="yes">Yes, my budget is flexible</option>
						<option value="no">No, my budget is not flexible</option>
					</select>
					<div class="invalid-feedback">Please select your budget flexiblity.</div>
				</div>
			</div>
			<!-- Delivery Date Input with Calendar -->
			<div class="col-md-12 mb-4">
				<label style="color:#00365E;font-size: 16px">Delivery by</label>
				<p style="color:#9CAFD1;font-size: 16px">Please select the date which you want to have the job done</p>
				<div class="input-group input-group-merge" style="border-radius: 0px !important">
					<span class="input-group-text" id="basic-addon-search31" style="border-radius: 0px !important"><i class="ti ti-calendar"></i></span>
					<input type="date" class="form-control flatpickr-input" id="deliveryDate" name="delivery_date" placeholder="YYYY-MM-DD">
					<div class="invalid-feedback">Please select a delivery date.</div>
				</div>
			</div>
			<!-- Budget Input with Currency -->
			<div class="col-md-12 mb-4">
				<label style="color:#00365E;font-size: 16px">Budget <span style="color: #9CAFD1;margin-left: 5px;">(labor and material)</span></label>
				<div class="input-group input-group-merge" style="border-radius: 0px !important">
					<span class="input-group-text" style="border-radius: 0px !important">EUR</span>
					<input type="number" class="form-control" id="budget" name="budget" placeholder="">
					<div class="invalid-feedback">Please enter your budget.</div>
				</div>
			</div>
			<!-- File Upload -->
			<div class="col-md-12 mb-4">
				<label style="color:#00365E;font-size: 16px">Upload material</label>
				<p style="color:#9CAFD1;font-size: 16px">Select an image, video (max: 1min), PDF, or document</p>
				<div class="col-lg-12" id="imageUploadsContainer">
					<div class="row">
						<div class="col-lg-6 upload-sectiona" style="border: 1px dashed #5E8BF7; height: 125px; text-align: center; padding: 20px; position: relative;">
							<i class="ti ti-plus ti-md mt-3" style="color:#00365E"></i>
							<p class="mt-2" style="color:#9CAFD1;font-size: 13px">Max: 100mb</p>
							<input type="file" name="img" class="imageUpload" accept="image/*" style="opacity: 0; position: absolute; top: 0; left: 0; height: 100%; width: 100%; cursor: pointer;">
							<div class="img-alert " style="font-size:14px;color:red"></div>
						</div>
						<div class="col-lg-6 upload-img"></div>
						<br>
						<div class="col-lg-6 upload-sectionb" style="border: 1px dashed #5E8BF7; height: 125px; text-align: center; padding: 20px; position: relative;top:20px">
							<i class="ti ti-plus ti-md mt-3" style="color:#00365E"></i>
							<p class="mt-2" style="color:#9CAFD1;font-size: 13px">Max: 1min video</p>
							<input type="file" name="video" class="videoUpload" accept="video/*" style="opacity: 0; position: absolute; top: 0; left: 0; height: 100%; width: 100%; cursor: pointer;">
							<div class="video-alert"></div>
						</div>
						<div class="col-lg-6 video-img " style="font-size:14px;color:red"></div>
					</div>
				</div>
			</div>
			<!-- Submit and Cancel buttons -->
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6">
						<button type="submit" class="btn mb-2 d-grid w-100" style="border-radius:0px !important;background: #5E8BF7;color: #fff;">Create job post</button>
					</div>
					<div class="col-lg-6">
						<button type="button" class="btn d-grid w-100" data-bs-dismiss="offcanvas" style="border-radius:0px !important;background: transparent;color: #5E8BF7;border: 1px solid #C6D2E7;">Cancel</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
	var input = document.querySelector('input[name=tags]');
	new Tagify(input);
});
$(document).ready(function() {
	// Image upload preview
	$(document).on('change', '.imageUpload', function() {
		var file = this.files[0];
		if(file) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var img = `<img src="${e.target.result}" class="w-100" style="height: 125px;">`;
				$('.upload-img').html(img);
			};
			reader.readAsDataURL(file);
		}
	});
	// Video upload preview (display name)
	$(document).on('change', '.videoUpload', function() {
		var file = this.files[0];
		if(file) {
			var videoName = `<p style="color: #00365E;">${file.name}</p>`;
			$('.video-img').html(videoName);
			// Validate video duration
			var video = document.createElement('video');
			video.src = URL.createObjectURL(file);
			video.onloadedmetadata = function() {
				if(video.duration > 60) {
					showErrorMessage('.video-alert', 'Video duration should not exceed 1 minute.');
				} else {
					removeErrorMessage('.video-alert');
				}
			};
		}
	});
	// Form submission with AJAX
	$("#jobForm").on('submit', function(e) {
		e.preventDefault(); // Prevent default form submission
		var csrfToken = $('meta[name="csrf-token"]').attr('content');
		if(validateForm()) {
			var formData = new FormData(this);
			formData.append('_token', csrfToken);
			$.ajax({
				url: '/owner/job/create',
				type: 'POST',
				data: formData,
				processData: false, // Important for file upload
				contentType: false, // Important for file upload
				success: function(response) {
					$('#createJob').offcanvas('hide');
					setTimeout(function() {
						location.reload();
					}, 1000); // Adjust the timeout duration as needed
					alert("Job post created successfully!");
				},
				error: function(xhr, status, error) {
					alert("An error occurred: " + xhr.responseText);
				}
			});
		}
	});
});

function validateForm() {
	var isValid = true;
	// Validate yacht selection
	if($("#selectYacht").val() === "") {
		showErrorMessage('#selectYacht', 'Please select a yacht.');
		isValid = false;
	} else {
		removeErrorMessage('#selectYacht');
	}
	// Validate job title
	if($("#jobTitle").val().trim() === "") {
		showErrorMessage('#jobTitle', 'Please enter a job title.');
		isValid = false;
	} else {
		removeErrorMessage('#jobTitle');
	}
	// Validate Type & Skills
	var tags = $('input[name="tags"]').val().trim();
	if(tags === "") {
		showErrorMessage('input[name="tags"]', 'Please enter the job type and skills.');
		isValid = false;
	} else {
		removeErrorMessage('input[name="tags"]');
	}
	// Validate job description
	if($("#jobDescription").val().trim() === "") {
		showErrorMessage('#jobDescription', 'Please enter a job description.');
		isValid = false;
	} else {
		removeErrorMessage('#jobDescription');
	}
	// Validate delivery date
	if($("#deliveryDate").val() === "") {
		showErrorMessage('#deliveryDate', 'Please select a delivery date.');
		isValid = false;
	} else {
		removeErrorMessage('#deliveryDate');
	}
	// Validate surveyor requirement
	if($("#requireSurveyor").val() === "") {
		showErrorMessage('#requireSurveyor', 'Please select if you require a surveyor.');
		isValid = false;
	} else {
		removeErrorMessage('#requireSurveyor');
	}
	// Validate budget
	var budget = $("#budget").val().trim();
	if(budget === "" || isNaN(budget)) {
		showErrorMessage('#budget', 'Please enter a valid budget.');
		isValid = false;
	} else {
		removeErrorMessage('#budget');
	}
	if($("#requireflexiblity").val() === "") {
		showErrorMessage('#requireflexiblity', 'Please select your budget flexibility.');
		isValid = false;
	} else {
		removeErrorMessage('#requireflexiblity');
	}
	// Validate image upload
	var imageFile = $('.imageUpload')[0].files[0];
	if(!imageFile || !imageFile.type.startsWith("image/")) {
		$('.img-alert').html('Please upload a valid image.'); // Remove existing error message if any
		isValid = false;
	} else {
		$('.img-alert').html('.'); // Remove existing error message if any
	}
	return isValid;
}

function showErrorMessage(selector, message) {
	$(selector).next('.invalid-feedback').remove(); // Remove existing error message if any
	$(selector).after(`<div class="invalid-feedback d-block" style="color: red;">${message}</div>`);
}

function removeErrorMessage(selector) {
	$(selector).next('.invalid-feedback').remove(); // Remove error message
}
</script>