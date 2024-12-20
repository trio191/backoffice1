@extends('professional.layouts.master')
@section('content')
    <style>
        #card-element {
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            font-size: 16px;
            height: 44px;
            padding: 10px;
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        #card-element:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
        }

        .hide {
            display: none;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .btn {
            font-size: 18px;
        }
    </style>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
            style="background-image: url('dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
            <div class="overlay"></div> <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                <!-- Text container -->
                <div class="row pt-2">
                    <div class="col-lg-12 text-center">
                        <h3 class="text-white">Discover our plans</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->
            <div class="col-lg-12 text-center mt-5">
                <center>
                    <div class="col-lg-7">
                        <h3 style="color: #00365E;">Flexible Plans Tailored to Fit Your Unique Needs!
                        </h3>
                        <p style="color:#00365E;font-size: 16px;">Get started with one of the options we
                            have below or upgrade your account to fully unlock all features and enjoy a
                            hassle-free experience</p>
                        <div class="row">
                            <div class="col-lg mb-md-0 mb-4">
                                <div class="card border  shadow-none" style="border-radius: 0px">
                                    <div class="col-lg-12" style="height: 27px">

                                    </div>
                                    <div class="card-body">

                                        <p class="text-center" style="color: #00365E;">Forever Free</p>
                                        <div class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <h1 class="fw-semibold display-4 mb-0 " style="color:#00365E">0€</h1>

                                            </div>
                                            <small style="color:#00365E">No hassle, no worry.</small>
                                        </div>
                                        <a href="auth-register-basic.html"
                                            class="btn btn-label-success d-grid w-100 waves-effect mt-4"
                                            style="border-radius: 0px;"> Active Plan</a>
                                        <p class="mt-4 " style="text-align: left;color: #00365E;">Best
                                            way
                                            to test all the feaures and check how our platform can help
                                            you
                                            to manage your vessel.</p>
                                        <hr>
                                        <ul class="ps-3 my-4 pt-2 list-unstyled"
                                            style="text-align: left;text-decoration: none !important;color: #00365E;">
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Unlimited
                                                documents</li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Daily
                                                incident reporting
                                            </li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Surveyor
                                                hiring</li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> User
                                                verification</li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Up to 4
                                                posts</li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Weekly
                                                progress
                                                reporting
                                            </li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Unlimited
                                                Fleet
                                                management
                                            </li>
                                        </ul>


                                        <p style="text-align: left;color: #00365E;">*During the trial
                                            period you can test all features completely unlocked</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg mb-md-0 mb-4">
                                <div class="card border  shadow-none"
                                    style="border-radius: 0px;border-color: #5E8BF7 !important;">
                                    <div class="col-lg-12"
                                        style="height: 30px;color: #fff;text-align: center;background: #5E8BF7;">
                                        <p class="pt-1">Most Popular</p>
                                    </div>
                                    <div class="card-body">

                                        <p class="text-center" style="color: #00365E;">Membership</p>
                                        <div class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <h1 class="fw-semibold display-4 mb-0 " style="color:#00365E">
                                                    50€/<small>month</small></h1>

                                            </div>
                                            <small style="color:#00365E">Price per metter for each
                                                vessel
                                                owned. Billed annualy</small>
                                        </div>
                                        <a type="button" data-bs-toggle="offcanvas" data-bs-target="#activePlan"
                                            aria-controls="activePlan" class="btn d-grid w-100 waves-effect mt-"
                                            style="border-radius: 0px;background: #5E8BF7;color: #fff;">
                                            Active Plan</a>
                                        <p class="mt-4 " style="text-align: left;color: #00365E;">
                                            Manage
                                            your vessel with the best features available and access
                                            exclusive offers.</p>
                                        <hr>
                                        <ul class="ps-3 my-4 pt-2 list-unstyled"
                                            style="text-align: left;text-decoration: none !important;color: #00365E;">
                                            <li class="mb-3" style="margin-left: -15px;color: #5E8BF7;">
                                                Include all Free Perks +</li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Team
                                                management</li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Access to
                                                workplan</li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Referal
                                                link</li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Access to
                                                profiles &
                                                reviews</li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Access
                                                companies jobs
                                            </li>
                                            <li class="mb-3" style="margin-left: -15px;"><i
                                                    class="ti ti-circle-check me-2" style="color: #2AD7B3"></i> Access to
                                                ranks</li>
                                        </ul>


                                        <p style="text-align: left;color: #00365E;">*During the trial
                                            period you can test all features completely unlocked</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
            <!--/ Layout Demo -->
        </div>
        <!-- / Content -->

        <!-- Footer -->

        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    <!-- / Layout wrapper -->
    <!-- create job modal -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="activePlan" aria-labelledby="activePlan"
        style="width: 500px !important;">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" style="color:#00365E;font-size: 18px" class="offcanvas-title">
                <i class="ti ti-arrow-left ti-md me-2 text-reset" style="margin-top: -5px" data-bs-dismiss="offcanvas"
                    aria-label="Close"></i>Upgrade plan
            </h5>

        </div>
        <div class="offcanvas-body  mx-0 flex-grow-0">

            <h5 style="color: #00365E;font-size: 14px;">Thank you for selecting:</h5>

            <div class="col-md-12">
                <div class="w-100" style="border: 2px solid #5E8BF7;padding: 10px;text-align: center;">
                    <h4 class="mb-0" style="font-size: 14px;color: #5E8BF7;">Most popular plan</h4>
                </div>
            </div>
            <div class="col-lg-12 mb-4"
                style="padding: 20px;background: url(dashboard/assets/img/back2.png);background-size: 100% 100%;background-repeat: no-repeat;height: 150px;text-align: center;">
                <h5 class="text-white" style="font-size: 14px;">MEMBERSHIP</h5>
                <div class="d-flex justify-content-center" style="margin-top: -14px">
                    <h1 class="fw-semibold display-4 mb-0 " style="color:#fff;font-size: 38px">
                        50€/<small>month</small></h1>

                </div>
                <p style="color: #fff;font-size: 13px;">Price per metter for each vessel owned.<br>
                    Billed annualy</p>
            </div>
            <div class="col-md-12 mb-4">
                <div class="d-flex flex-wrap">
                    <img src="dashboard/assets/img/yacht-black.png" class="me-2">
                    <p class="me-2" style="color: #00365E;font-size: 20px;margin-top: 14px;">My
                        yacht</p>
                    <div class="badge bg-label-primary rounded-pill " style="height: 25px;margin-top: 18px;">5</div>
                </div>
            </div>
            <div class="col-lg-12 mb-2" style="background-color: #F2F6FA;padding: 20px">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="mb-0" style="color: #00365E;font-size: 16px;">Fast and smooth</p>
                    </div>
                    <div class="col-lg-6" style="text-align: right">
                        <div class="d-flex" style="float: right">
                            <i class="ti ti-ruler-2 ti-xs me-2"></i>
                            <p class="mb-0" style="font-size: 13px;color:#00365E">12 Metters</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-2" style="background-color: #F2F6FA;padding: 20px">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="mb-0" style="color: #00365E;font-size: 16px;">Elizabeth III</p>
                    </div>
                    <div class="col-lg-6" style="text-align: right">
                        <div class="d-flex" style="float: right">
                            <i class="ti ti-ruler-2 ti-xs me-2"></i>
                            <p class="mb-0" style="font-size: 13px;color:#00365E">22 Metters</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4"
                style="padding: 20px;background: url(dashboard/assets/img/back3.png);background-size: 100% 100%;background-repeat: no-repeat;height: 120px;text-align: center;">
                <h5 style="font-size: 14px;color: #00365E;">Total cost</h5>
                <div class="d-flex justify-content-center" style="margin-top: -14px">
                    <h1 class="fw-semibold display-4 mb-0 " style="color:#00365E;font-size: 38px">
                        1200€/<small>Year</small></h1>

                </div>
            </div>

            <form role="form" action="{{ route('process-payment') }}" method="post" class="require-validation"
                data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_PUBLISHABLE') }}" id="payment-form">
                @csrf

                <!-- Billing Details Section -->
                <div class="form-row">
                    <div class="col-md-12">
                        <h4 class="mb-3">Billing Details</h4>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <label for="billing-name" class="form-label">Full Name</label>
                        <input type="text" id="billing-name" name="billing_name" class="form-control"
                            placeholder="John Doe" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="billing-phone" class="form-label">Phone Number</label>
                        <input type="tel" id="billing-phone" name="billing_phone" class="form-control"
                            placeholder="123-456-7890" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <label for="billing-email" class="form-label">Email Address</label>
                        <input type="email" id="billing-email" name="billing_email" class="form-control"
                            placeholder="example@example.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <label for="billing-address-line1" class="form-label">Address Line 1</label>
                        <input type="text" id="billing-address-line1" name="billing_address_line1"
                            class="form-control" placeholder="123 Main St" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="billing-address-line2" class="form-label">Address Line 2</label>
                        <input type="text" id="billing-address-line2" name="billing_address_line2"
                            class="form-control" placeholder="Apartment, Suite, Unit (optional)">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <label for="billing-city" class="form-label">City</label>
                        <input type="text" id="billing-city" name="billing_city" class="form-control"
                            placeholder="City" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="billing-state" class="form-label">State</label>
                        <input type="text" id="billing-state" name="billing_state" class="form-control"
                            placeholder="State" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="billing-postal-code" class="form-label">Postal Code</label>
                        <input type="text" id="billing-postal-code" name="billing_postal_code" class="form-control"
                            placeholder="25000" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <label for="billing-country" class="form-label">Country</label>
                        <input type="text" id="billing-country" name="billing_country" class="form-control"
                            placeholder="Country" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <label for="amount" class="form-label">Country</label>
                        <input type="text" readonly='readonly' value="10000" id="amount" name="amount"
                            class="form-control" placeholder="amount">
                    </div>
                </div>

                <!-- Card Details Section -->
                <div class="form-row">
                    <div class="col-md-12">
                        <h4 class="mb-3">Payment Details</h4>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <label for="card-element" class="form-label">Credit or Debit Card</label>
                        <div id="card-element" class="form-control" style="padding: 10px; height: auto;">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <div id="card-errors" role="alert" class="text-danger mt-2"></div>
                    </div>
                </div>


                <div class="form-row mt-4">
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now
                            ($100)</button>
                    </div>
                </div>
            </form>






            <div class="col-lg-12 mb-4"
                style="border: 1px solid #C6D2E7;background:#FFFFFF;padding: 20px;text-align: center;">
                <img src="dashboard/assets/img/PayPal.png" style="width: 30%">
            </div>
            <p style="font-size: 13px;color:#00365E">By proceeding with the payment you agree with the
                terms of
                services of each payment method. Please note that the invoice will be emmited the
                currepondent payment
                platform you select.</p>
            <div class="text-center">
                <img src="dashboard/assets/img/pyment.png">
            </div>
        </div>
    </div>
@endsection
<script src="{{ asset('frontend/js/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    $(function() {
        const stripe = Stripe($("form.require-validation").data('stripe-publishable-key'));
        const elements = stripe.elements();

        // Create an instance of the card Element
        const card = elements.create('card');
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element
        card.addEventListener('change', function(event) {
            const displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission
        $('form.require-validation').on('submit', function(e) {
            e.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error
                    const errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the token and form to the server
        function stripeTokenHandler(token) {
            const form = document.getElementById('payment-form');
            // Insert the token ID into the form so it gets submitted to the server
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    });
</script>
