@include('owner.components.add-job')
<div class="layout-demo-wrapper"
    style="background-image: url('/dashboard/assets/img/bg.png'); height: 120px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
    <div class="overlay"></div>
    <!-- Overlay -->
    <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
        <!-- Text container -->
        <div class="row">
            <div class="col-lg-7 text-white">
                <h3 class="text-white">{{$yachetData->yachtName}}</h3>
                <div class="d-flex flex-wrap" style="margin-top:-10px">

                    <span class="d-flex align-items-center justify-content-center text-nowrap me-3 vertical-line"
                        style="color:#fff">Mooring: {{$yachetData->yachtName}}</span>
                    <span class="d-flex align-items-center justify-content-center text-nowrap me-3 vertical-line"
                        style="color:#fff">Size: {{$yachetData->yachtSize}}</span>
                    <span class="d-flex align-items-center justify-content-center text-nowrap vertical-line"
                        style="color:#fff">Tonnage: {{$yachetData->yachtTonnage}}</span>
                    <span class="d-flex align-items-center justify-content-center text-nowrap vertical-line"
                        style="color:#fff">Port: <strong>{{$yachetData->portBase}}</strong></span>
                </div>
            </div>
            <div class="col-lg-5" style="text-align: right;">

                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#createJob" aria-controls="createJob"
                    class="btn btn-white waves-effect waves-light"
                    style="border-radius: 0px !important;color: #00365d;">
                    <span class="ti-xs ti ti-briefcase me-1"></span>Create Job </button>
                <button type="button" class="btn "
                    style="border-radius: 0px !important;color: #00365d;border: 1px solid white;color: white;width: 20px;">
                    <span class="ti-xs ti ti-dots-vertical me-1"></span>
                </button>
            </div>
        </div>
    </div>
</div>
