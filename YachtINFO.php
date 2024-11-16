                   <!-- BUTTON  -->
                    <li class="nav-item" role="presentation">
                      <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-yacht" aria-controls="navs-top-yacht" aria-selected="true"> Yacht Info </button>
                    </li>
                    <!-- BUTTON -->


                     <!-- YACHT INFO -->
                    <div class="container py-4">
        <div class="row g-4">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Header -->
                <div class="d-flex align-items-center mb-4">
                    <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 11c0 2.09.81 4.11 2.34 5.64L11 22v-2h2v2l5.66-5.36C20.19 15.11 21 13.09 21 11c0-4.42-3.58-8-8-8s-8 3.58-8 8z"/>
                        <path d="M7 11a5 5 0 0 1 10 0"/>
                    </svg>
                    <h1 class="h4 mb-0">Yacht details</h1>
                </div>

                <!-- Yacht Photo -->
                <div class="card mb-4" style="border: none;">
                        <img src="assets/img/card-img.png" alt="Yacht" class="card-img-top" style="height: 230px; object-fit: cover;">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center" style="background-color: rgba(255, 255, 255, 0.5);">
                          <button class="btn btn-light">Add/change yacht photo <i class="fas fa-upload"></i>
                          </button>
                        </div>
                        <p class="text-center text-muted" style="margin: 0;">min 1600x230 | max 1920x480</p>
                      </div>

                <!-- Yacht Details Form -->
                <form method="POST" enctype="multipart/form-data">
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Yacht Name *</label>
                            <input type="text" class="form-control" name="yacht_name" value="Elizabeth III" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Yacht Manufacturer *</label>
                            <input type="text" class="form-control" name="manufacturer" value="Admiral" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mooring Number *</label>
                            <input type="text" class="form-control" name="mooring_number" value="5432543232" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Port Base</label>
                            <input type="text" class="form-control" name="port_base" value="Santa luzia esq, italy, 20559">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Yacht Size (in meters) *</label>
                            <input type="number" class="form-control" name="yacht_size" value="15" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Yacht Tonnage (in GT) *</label>
                            <input type="number" class="form-control" name="yacht_tonnage" value="344" required>
                        </div>
                    </div>

                    <!-- Registration Documents -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <svg class="me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                                <line x1="10" y1="9" x2="8" y2="9"/>
                            </svg>
                            <h2 class="h6 mb-0">Registration documents</h2>
                        </div>
                        <p class="text-muted small mb-3">
                            These documents are necessary to validate that you are the real owner of this vessel
                        </p>
                        <div class="d-flex gap-3">
                            <div class="document-box">
                                <div class="small mb-2">pexels-pixabay-234...</div>
                                <div class="progress-bar-mini"></div>
                            </div>
                            <div class="document-box dashed">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="17 8 12 3 7 8"/>
                                    <line x1="12" y1="3" x2="12" y2="15"/>
                                </svg>
                                <div class="small text-muted">Max: 100mb</div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                 <!-- <div class="container mt-4"> -->
                 <div style="width: 300px; border: 1px solid #e0e0e0; border-radius: 8px; padding: 16px;">
                        <h6 style="color: #5a5c69; font-weight: bold; margin-bottom: 16px;">System details</h6>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #e0e0e0; padding-bottom: 8px; margin-bottom: 8px;">
                          <span style="color: #5a5c69;">Created on:</span>
                          <span style="color: #5a5c69;">02 Jan | 16:30h</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #e0e0e0; padding-bottom: 8px; margin-bottom: 8px;">
                          <span style="color: #5a5c69;">Last update</span>
                          <span style="color: #5a5c69;">Yesterday</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #e0e0e0; padding-bottom: 8px; margin-bottom: 8px;">
                          <span style="color: #5a5c69;">Created by:</span>
                          <div style="display: flex; align-items: center;">
                            <img src="jackie_sparrow.jpg" alt="Jackie Sparrow" style="width: 24px; height: 24px; border-radius: 50%; margin-right: 8px;">
                            <span style="color: #5a5c69;">Jackie Sparrow</span>
                          </div>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                          <span style="color: #5a5c69;">Owner:</span>
                          <div style="display: flex; align-items: center;">
                            <img src="roger_jackson.jpg" alt="Roger Jackson" style="width: 24px; height: 24px; border-radius: 50%; margin-right: 8px;">
                            <span style="color: #5a5c69;">Roger Jackson</span>
                          </div>
                        </div>
                      </div>
                      <!-- </div> -->
            </div>
        </div>
    </div>