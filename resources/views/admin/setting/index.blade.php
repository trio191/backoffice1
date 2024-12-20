@extends('admin.layout.master')
@section('content')
    <style type="text/css">
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0F3A4F;
            /* Adjust opacity and color as needed */
            opacity: 0.5;
            /* Adjust opacity as needed */
        }

        .text-container {
            position: relative;
            z-index: 1;
            /* Ensure text is above the overlay */
        }

        .vertical-line {
            border-right: 1px solid #9CAFD1;
            /* Adjust color and thickness as needed */
            padding-right: 5px;
            /* Adjust spacing between text and line as needed */
            margin-right: 5px;
            /* Adjust spacing between lines as needed */
        }

        /* Remove border-right for last element */
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
    </style>


    <!-- / Navbar -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="layout-demo-wrapper"
            style="background-image: url('assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px;padding-bottom: 20px; position: relative;">
            <div class="overlay"></div>
            <!-- Overlay -->
            <div class="col-lg-12 text-container" style="max-width: 1440px;padding-left: 100px;padding-right: 100px;">
                <!-- Text container -->
                <div class="row">
                    <div class="col-lg-7 text-white">
                        <h3 class="text-white">Account settings</h3>

                    </div>
                    <div class="col-lg-5" style="text-align: right;">
                        <button type="button" class="btn waves-effect waves-light"
                            style="border-radius: 0px !important;color: #fff;">
                            <span class="ti-xs ti ti-edit me-1"></span>Background</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->

            <div class="col-lg-12" style="margin-top: -24px">
                <div class="nav-align-top  mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false"
                                tabindex="-1">
                                Account settings
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false"
                                tabindex="-1">
                                Security
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="true">
                                Billing/invoice
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-notification" aria-controls="navs-top-notification"
                                aria-selected="true">
                                Notifications
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-permission" aria-controls="navs-top-permission"
                                aria-selected="true">
                                Permission
                            </button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                                                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="true">
                                                                  Certificates
                                                                </button>
                                                              </li> -->
                    </ul>
                    <div class="tab-content" style="margin-left: -20px;margin-right: -20px">
                        <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                            <form method="POST" action="{{ route('update.admin.info', $user->id) }}"
                                enctype="multipart/form-data">
                                <!-- Specify the action route -->
                                @csrf <!-- CSRF token for form submission -->
                                @method('PUT') <!-- Specify that this is a PUT request -->
                                <div class="row">
                                    <div class="col-lg-8" style="color: #00365E">
                                        <h4 style="color: #00365E;" class=" d-flex">
                                            <i class="ti ti-user-circle ti-md me-2"></i>
                                            <span style="margin-top: 2px;font-size: 18px;">Personal details</span>
                                        </h4>
                                        <div class="col-lg-12 mt-5" style="color: #00365E">
                                            <p style="font-size: 16px">User registeres as*</p>
                                            <div class="alert alert-secondary" style="border-radius: 0px">
                                                <p class="mb-0 d-flex" style="color: #00365E">
                                                    <i class="ti ti-building me-2"></i>
                                                    <span style="font-size: 16px;">Admin </span>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Elizabth III"
                                                            name="firstName" value="{{ $user->firstName }}">
                                                        <label class="labelOwn">First name</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Admiral"
                                                            name="lastName" value="{{ $user->lastName }}">
                                                        <label class="labelOwn">Last name</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" value="{{ $user->email }}"
                                                            name="email">
                                                        <label class="labelOwn">Email</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="+351 5432 543321"
                                                            name="phoneNumber" value="{{ $user->phoneNumber }}">
                                                        <label class="labelOwn">Phone number</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Maintance Manager"
                                                            name="accountType" readonly value="{{ $user->accountType }}">
                                                        <label class="labelOwn">Job title</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <h4 style="color: #00365E;" class="mt-3 d-flex">
                                                <i class="ti ti-building ti-md me-2"></i>
                                                <span style="margin-top: 2px;font-size: 18px;">Additional details</span>
                                            </h4>
                                            <div class="row">

                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="country*"
                                                            name="adminDetails[country]"
                                                            value=" {{ $adminDetails['country'] ?? '' }}">

                                                        <label class="labelOwn">Country *</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Something"
                                                            name="adminDetails[state]"
                                                            value="{{ $adminDetails['state'] ?? '' }}">
                                                        <label class="labelOwn">State/Region</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Something"
                                                            name="adminDetails[city]"
                                                            value=" {{ $adminDetails['city'] ?? '' }}">
                                                        <label class="labelOwn">City</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="1234"
                                                            name="adminDetails[postalCode]"
                                                            value=" {{ $adminDetails['postalCode'] ?? '' }}">
                                                        <label class="labelOwn">Post Code</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" name="adminDetails[address]"
                                                            value=" {{ $adminDetails['address'] ?? '' }}">
                                                        <label class="labelOwn">Address</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 style="color: #00365E;" class="mt-3 d-flex">
                                                <i class="ti ti-bolt ti-md me-2"></i>
                                                <span style="margin-top: 2px;font-size: 18px;">Skills and services</span>
                                            </h4>
                                            <div class="row">
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius: 0px" placeholder="Search for a service">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn"
                                                style="background-color:#5E8BF7;color:#fff;border-radius: 0px">Save
                                                changes</button>
                                        </div>


                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-2"
                                            style="border: 1px solid #C6D2E7;box-shadow: none !important;background: url('assets/img/card-corner2.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                            <p style="font-size: 18px">Change picture</p>
                                            <center>
                                                <div class="image-upload-container">
                                                    <input type="file" name="profile_image" id="imageUploadInput"
                                                        accept="image/*" style="display: none;">
                                                    <label for="imageUploadInput">
                                                        <div class="image-overlay">
                                                            <i class="ti ti-upload ti-xl upload-icon"></i>
                                                        </div>
                                                        <img id="uploadedImage"
                                                            src="{{ $user->profile_image ?? 'assets/img/bg.png' }}"
                                                            alt="Uploaded Image">
                                                    </label>
                                                </div>

                                                <p style="font-size: 13px;color: #9CAFD1;">Allowed JPG, GIF or PNG. Max
                                                    size of 2mb</p>
                                            </center>
                                            <div class="col-lg-12">
                                                <div class="row" style="border-bottom: 1px solid #C6D2E7">
                                                    <div class="col-lg-6">
                                                        <p style="font-size: 14px;color:#00365E">Created on:</p>
                                                    </div>
                                                    <div class="col-lg-6" style="text-align: right;">
                                                        <p style="font-size: 14px;color:#00365E">

                                                            @if ($user->created_at)
                                                                {{ $user->created_at->format('d M | H:i') }}h
                                                            @else
                                                                N/A
                                                            @endif

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mt-3" style="border-bottom: 1px solid #C6D2E7">
                                                    <div class="col-lg-6">
                                                        <p style="font-size: 14px;color:#00365E">Location:</p>
                                                    </div>
                                                    <div class="col-lg-6" style="text-align: right;">
                                                        <p style="font-size: 14px;color:#00365E">
                                                            {{ $adminDetails['country'] }}</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-3" style="border-bottom: 1px solid #C6D2E7">
                                                    @php
                                                        $updatedAt = $user->updated_at;
                                                        $isYesterday = $updatedAt && $updatedAt->isYesterday();
                                                        $formattedDate = $updatedAt
                                                            ? $updatedAt->format('d M | H:i') . 'h'
                                                            : 'N/A';
                                                    @endphp

                                                    <div class="col-lg-6">
                                                        <p style="font-size: 14px; color: #00365E;">Last update</p>
                                                    </div>
                                                    <div class="col-lg-6" style="text-align: right;">
                                                        <p style="font-size: 14px; color: #00365E;">
                                                            {{ $isYesterday ? 'Yesterday' : $formattedDate }}
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2"
                                            style="border: 1px solid #C6D2E7;box-shadow: none !important;background: url('assets/img/card-corner2.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                            <p style="font-size: 18px;color: #00365E;">Social profiles</p>
                                            <p style="font-size: 13px;color:#9CAFD1">Share with us your social networks and
                                                complete your profile</p>
                                            <div class="d-flex"
                                                style="border: 1px solid #C6D2E7;border-radius: 0px;background: #fff;text-align: left;padding: 10px;">
                                                <i class="ti ti-brand-facebook ti-sm"></i>
                                                <input class="w-100" type="text" style="border: none !important"
                                                    placeholder="facebook URL" name="adminDetails[facebookUrl]">
                                            </div>
                                            <div class="d-flex mt-2"
                                                style="border: 1px solid #C6D2E7;border-radius: 0px;background: #fff;text-align: left;padding: 10px;">
                                                <i class="ti ti-brand-linkedin ti-sm"></i>
                                                <input class="w-100" type="text" placeholder="LinkedIn URL"
                                                    style="border: none !important" name="adminDetails[linkedinUrl]">
                                            </div>
                                        </div>
                                        <div class="card mb-2"
                                            style="border: 1px solid #C6D2E7;box-shadow: none !important;background: url('assets/img/card-corner2.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <p style="font-size: 18px; color: #00365E;">Forever free plan</p>
                                                </div>
                                                <div class="col-lg-4 text-end">
                                                    <p style="font-size: 14px; color: #00365E;" class="pt-1">View plans
                                                    </p>
                                                </div>
                                            </div>
                                            <center>
                                                <h2 style="color: #00365E; font-size: 40px;">0€/year</h2>
                                            </center>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p style="font-size:13px; color: #9CAFD1;">Start date</p>
                                                        <p style="color: #00365E; margin-top: -15px;" class="mb-1">Nov
                                                            23,
                                                            2021</p>
                                                    </div>
                                                    <div class="col-lg-6 text-end">
                                                        <p style="font-size:13px; color: #9CAFD1;">Renew date</p>
                                                        <p style="color: #00365E; margin-top: -15px;" class="mb-1">Nov
                                                            23,
                                                            2022</p>
                                                    </div>
                                                </div>
                                                <div class="progress" style="height: 4px; margin-bottom: 15px;">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 75%; background-color: #5E8BF7;" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <p style="color: #00365E; font-size: 13px; text-align: center;">Unlock all
                                                features
                                                and fully enjoy WorldYachtrefit platform:</p>
                                            <ul
                                                style="list-style: none; padding-left: 0; color: #00365E; font-size: 14px;">
                                                <li>✔️ Team management</li>
                                                <li>✔️ Access to workplan</li>
                                                <li>✔️ Referral link</li>
                                            </ul>
                                            <center>
                                                <button
                                                    style="background-color: #5E8BF7; color: white; padding: 10px 20px; border: none; border-radius: 5px;">UPGRADE
                                                    MY PLAN</button>
                                            </center>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                            <h4 style="color: #00365E;" class=" d-flex">
                                <i class="ti ti-lock ti-md me-2"></i>
                                <span style="margin-top: 2px;font-size: 18px;">Change your account password</span>
                            </h4>
                            <div class="col-lg-12 mt-5" style="border-bottom: 1px solid #C6D2E7;">
                                <form action="{{ route('update.password') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group" style="position: relative;">
                                                <div class="input-group input-group-merge" style="position: relative;">
                                                    <input type="password" class="form-control" name="current_password"
                                                        placeholder="Current password" style="border-radius: 0px;" />

                                                    <span class="input-group-text cursor-pointer"
                                                        style="border-radius: 0px;" id="basic-default-password"><i
                                                            class="ti ti-eye-off"></i></span>
                                                </div>
                                                <label class="labelOwn" style="color:#5E8BF7">Current
                                                    password</label>
                                                @error('current_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-password-toggle">
                                                <div class="input-group input-group-merge">
                                                    <input type="password" class="form-control"
                                                        id="basic-default-password32" placeholder="New password"
                                                        name="new_password" aria-describedby="basic-default-password"
                                                        style="border-radius: 0px;" />
                                                    <span class="input-group-text cursor-pointer"
                                                        style="border-radius: 0px;" id="basic-default-password"><i
                                                            class="ti ti-eye-off"></i></span>
                                                    @error('new_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-password-toggle">
                                                <div class="input-group input-group-merge">
                                                    <input type="password" class="form-control"
                                                        id="basic-default-password32" placeholder="Confirm password"
                                                        name="confirm_password" aria-describedby="basic-default-password"
                                                        style="border-radius: 0px;" />
                                                    <span class="input-group-text cursor-pointer"
                                                        style="border-radius: 0px;" id="basic-default-password"><i
                                                            class="ti ti-eye-off"></i></span>
                                                    @error('confirm_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 alert alert-secondary"
                                        style="border-radius: 0px;background: #F2F6FA !important;">
                                        <p style="font-size: 16px;color: #00365E;">The Password must use
                                            following characters combinations:</p>
                                        <ul style="color:#323957">
                                            <li>Uppercase letters</li>
                                            <li>Lowercase letters</li>
                                            <li>Non-alphanumeric characters</li>
                                            <li>(special characters): (~!@#$%^&*_-+=`|(){}[]:;"'<>,.?/)</li>
                                            <li>Numberaic characters</li>
                                        </ul>
                                    </div>
                                    <button class="btn mb-4"
                                        style="border-radius:0px;background: #5E8BF7;color: #fff;">Change

                                        password</button>
                                </form>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 style="color: #00365E;" class=" d-flex">
                                            <i class="fas fa-desktop ti-md me-2"></i>
                                            <span style="margin-top: 2px;font-size: 18px;">Web linked devices</span>
                                        </h4>
                                    </div>
                                    <div class="col-lg-6" style="text-align: right">
                                        <button class="btn"
                                            style="background-color: #FF005C;color: #fff;border-radius: 0px;">Logout form
                                            all</button>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <table class="table table-responsive">
                                        <tr style="font-size: 14px">
                                            <td><span class="me-2">Browser</span> <i
                                                    class="fa fa-bars-staggered me-2"></i></td>
                                            <td><span class="me-2">Device</span> <i
                                                    class="fa fa-bars-staggered me-2"></i></td>
                                            <td><span class="me-2">Location</span> <i
                                                    class="fa fa-bars-staggered me-2"></i></td>
                                            <td><span class="me-2">Activity</span> <i
                                                    class="fa fa-bars-staggered me-2"></i></td>
                                            <td><span class="me-2">Action</span> <i
                                                    class="fa fa-bars-staggered me-2"></i></td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td>
                                                Chrome
                                            </td>
                                            <td>
                                                <div class="d-flex flex-wrap">
                                                    <i class="ti ti-device-tablet me-2"></i>
                                                    <span style="font-size: 14px;padding-top: 2px;">HP Spectre 360</span>
                                                </div>
                                            </td>
                                            <td>
                                                Switzerland
                                            </td>
                                            <td>
                                                10, July 2021 20:07
                                            </td>
                                            <td>
                                                <label class="badge bg-label-danger">
                                                    <span style="padding-top: 4px;">Logout </span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td>
                                                Chrome on iPhone
                                            </td>
                                            <td>
                                                <div class="d-flex flex-wrap">
                                                    <i class="ti ti-device-tablet me-2"></i>
                                                    <span style="font-size: 14px;padding-top: 2px;">iPhone 12x</span>
                                                </div>
                                            </td>
                                            <td>
                                                Australia
                                            </td>
                                            <td>
                                                Australia13, July 2021 10:10
                                            </td>
                                            <td>
                                                <label class="badge bg-label-danger">
                                                    <span style="padding-top: 4px;">Logout </span>
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="navs-top-messages" role="tabpanel">
                            <div class="row" style="border-bottom: 1px solid #C6D2E7;">
                                <div class="col-lg-8" style="color: #00365E">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4 style="color: #00365E;" class=" d-flex">
                                                <i class="ti ti-user-circle ti-md me-2"></i>
                                                <span style="margin-top: 2px;font-size: 18px;">Billing information</span>
                                            </h4>
                                        </div>
                                        <div class="col-lg-4" style="text-align: right">
                                            <button class="btn" style="border: 1px solid #C6D2E7;"><span
                                                    class="me-2" style="color:#9CAFD1">powered by </span><strong
                                                    style="color:#9CAFD1">Stripe</strong></button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5" style="color: #00365E">
                                        <p style="font-size: 16px;color:#00365E">This information must be kept current to
                                            ensure your account continues to be active.</p>
                                        <form method="POST" action="{{ route('update.admin.info', $user->id) }}">
                                            <!-- Specify the action route -->
                                            @csrf <!-- CSRF token for form submission -->
                                            @method('PUT') <!-- Specify that this is a PUT request -->


                                            <div class="row mt-5">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" name="firstName"
                                                            value="{{ $user->firstName }}">
                                                        <label class="labelOwn">First name</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" name="lastName"
                                                            value="{{ $user->lastName }}">
                                                        <label class="labelOwn">Last name</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" name="adminDetails[country]"
                                                            value="{{ $adminDetails['country'] ?? '' }}  ">
                                                        <label class="labelOwn">Country</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Something"
                                                            name="adminDetails[state]"
                                                            value="{{ $adminDetails['state'] ?? '' }}  ">
                                                        <label class="labelOwn">State/Region</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" name="city"
                                                            value="{{ $adminDetails['city'] ?? '' }}  ">
                                                        <label class="labelOwn">City</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="1234"
                                                            name="adminDetails[postCode]"
                                                            value="{{ $adminDetails['postCode'] ?? '' }}  ">
                                                        <label class="labelOwn">Post Code</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Address*"
                                                            name="adminDetails[address]"
                                                            value="{{ $adminDetails['address'] ?? '' }}  ">

                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Phone number*"
                                                            name="adminDetails[phoneNumber]"
                                                            value="{{ $adminDetails['phoneNumber'] ?? '' }}  ">

                                                    </div>

                                                </div>
                                            </div>
                                            <h4 style="color: #00365E;" class="mt-3 d-flex">
                                                <i class="ti ti-building ti-md me-2"></i>
                                                <span style="margin-top: 2px;font-size: 18px;">Company Info</span>
                                            </h4>
                                            <div class="row">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Boat JBL"
                                                            name="adminDetails[companyName]"
                                                            value="{{ $adminDetails['companyName'] ?? '' }}  ">
                                                        <label class="labelOwn">Company name*</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="VAT/Tax ID"
                                                            name="adminDetails[companyRegVat]"
                                                            value="{{ $adminDetails['companyRegVat'] ?? '' }}  ">

                                                    </div>

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1"
                                                            style="font-size: 14px"> Company Address is the same as billing
                                                            contact </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 style="color: #00365E;" class="mt-5 d-flex">
                                                <i class="ti ti-globe ti-md me-2"></i>
                                                <span style="margin-top: 2px;font-size: 18px;">Company address</span>
                                            </h4>
                                            <div class="row">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="VAT/Tax ID"
                                                            name="adminDetails[country]"
                                                            value="{{ $adminDetails['country'] ?? '' }}  ">

                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Something"
                                                            name="adminDetails['state']"
                                                            value="{{ $adminDetails['state'] ?? '' }}  ">
                                                        <label class="labelOwn">State/Region</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="Something"
                                                            name="adminDetails[city]"
                                                            value="{{ $adminDetails['city'] ?? '' }}">
                                                        <label class="labelOwn">City</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px" placeholder="1234"
                                                            name="adminDetails[postCode]"
                                                            value="{{ $adminDetails['postCode'] ?? '' }}">
                                                        <label class="labelOwn">Post Code</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control"
                                                            style="border-radius:0px"
                                                            placeholder="Some street name and code"
                                                            name="adminDetails[address] "
                                                            value="{{ $adminDetails['address'] ?? '' }}">
                                                        <label class="labelOwn">Address</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <button class="btn mb-4"
                                                style="background-color:#5E8BF7;color:#fff;border-radius: 0px">Save
                                                changes</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;box-shadow: none !important;background: url('assets/img/card-corner2.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p style="font-size: 18px;color: #00365E;">Membership plan</p>
                                            </div>
                                            <div class="col-lg-4" style="text-align:right">
                                                <p style="font-size: 14px;color:#00365E" class="pt-1">View plans</p>
                                            </div>
                                        </div>
                                        <center>
                                            <h2 style="color: #00365E">2500€/<small style="font-size: 18px">year</small>
                                            </h2>
                                            <p style="color:#00365E;font-size: 13px;">Price per metter for each vessel
                                                owned.<br>Billed annualy</p>
                                        </center>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p style="font-size:13px;color: #9CAFD1;">Start date</p>
                                                    <p style="color:#00365E;margin-top: -15px" class="mb-1">Nov 23, 2021
                                                    </p>
                                                </div>
                                                <div class="col-lg-6" style="text-align: right;">
                                                    <p style="font-size:13px;color: #9CAFD1;">Renew date</p>
                                                    <p style="color:#00365E;margin-top: -15px" class="mb-1">Nov 23, 2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <button class="w-100 mt-3"
                                                style="border: 1px solid #C6D2E7;border-radius: 0px;background: #fff;padding: 10px;color: #FF005C;">
                                                Cancel subscription
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card mb-2"
                                        style="border: 1px solid #C6D2E7;box-shadow: none !important;background: url('assets/img/card-corner2.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p style="font-size: 18px;color: #00365E;">Payment method</p>
                                            </div>
                                            <div class="col-lg-4" style="text-align:right">
                                            </div>
                                        </div>
                                        <button class="w-100 mt-3"
                                            style="border: 1px solid #5E8BF7;border-radius: 0px;background: #f2f6fa;padding: 10px;color: #FF005C;">
                                            <div class="row">
                                                <div class="col-lg-6" style="text-align: left">
                                                    <img src="assets/img/visa.png">
                                                </div>
                                                <div class="col-lg-6" style="text-align:right">
                                                    <p style="font-size:14px;color: #00365E;" class="mb-0">**** 7634,
                                                        5/2026</p>
                                                </div>
                                            </div>
                                        </button>
                                        <p style="color:#00365E;font-size: 13px;" class="mt-3">Next payment will be
                                            automatically collected from this card.</p>
                                        <p style="color:#00365E;font-size: 13px;" class="mt-3">Next billing is due
                                            on October 7, 2024 for $288 + tax.</p>
                                        <div class="col-lg-12">


                                            <button class="w-100 mt-3"
                                                style="border: 1px solid #5E8BF7;border-radius: 0px;background: #5E8BF7;padding: 10px;color: #fff;">
                                                Change payment method
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-12 mt-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4 style="color: #00365E;" class=" d-flex">
                                                <i class="fas fa-desktop ti-md me-2"></i>
                                                <span style="margin-top: 2px;font-size: 18px;">Web linked devices</span>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <table class="table table-responsive">
                                            <tr style="font-size: 14px">
                                                <td><span class="me-2">Issue date</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Payment</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Descripion</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Price</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                                <td><span class="me-2">Status</span> <i
                                                        class="fa fa-bars-staggered me-2"></i></td>
                                            </tr>
                                            <tr class="border" style="color:#00365E;font-size: 14px;">
                                                <td>
                                                    October 7, 2022
                                                </td>
                                                <td>
                                                    Card **** 4354
                                                </td>
                                                <td>
                                                    Yearly Renewal
                                                </td>
                                                <td>
                                                    2500€
                                                </td>
                                                <td>
                                                    <label class="badge bg-label-danger">
                                                        <span style="padding-top: 4px;">Due </span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr class="border" style="color:#00365E;font-size: 14px;">
                                                <td>
                                                    October 7, 2022
                                                </td>
                                                <td>
                                                    Card **** 4354
                                                </td>
                                                <td>
                                                    Yearly Renewal
                                                </td>
                                                <td>
                                                    2500€
                                                </td>
                                                <td>
                                                    <label class="badge bg-label-primary">
                                                        <span style="padding-top: 4px;">Paid </span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-top-notification" role="tabpanel">
                            <div class="row">
                                <h4 style="color: #00365E;" class=" d-flex">
                                    <i class="ti ti-speakerphone ti-md me-2"></i>
                                    <span style="margin-top: 2px;font-size: 18px;">Notifications preferences</span>
                                </h4>
                                <div class="col-lg-12">
                                    <p style="font-size:14px;color: #00365E;">Select the notificaitons ou would like to
                                        receive via email.</p>
                                    <p style="font-size:14px;color: #00365E;margin-top: -10px;">Please note that you cannot
                                        opt out of receving service messages, such as payment, security or legal
                                        notifications.</p>
                                    <p class="mt-4" style="font-size: 16px;color: #00365E;">Email address to receive
                                        notifications:</p>
                                    <div class="form-group mt-3" style="position: relative;">
                                        <input type="text" class="form-control" style="border-radius:0px"
                                            placeholder="elizabeth@smithandsmith.com" name="">
                                        <label class="labelOwn">Email</label>
                                    </div>
                                    <p class="mt-2" style="color: #9CAFD1;font-size: 14px;">By default the register
                                        email will be used for notifications</p>
                                    <div class="col-lg-12 mt-5">
                                        <div class="d-flex align-items-start">
                                            <div class="badge bg-label-secondary p-2 me-3 rounded"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-shadow ti-sm " style="color:#00365E"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0" style="font-size:18px;color: #00365E;">Our
                                                        newsletter</h6>
                                                    <small style="font-size:14px;color:#00365E">Learn about the most recent
                                                        changes, advatages, or platform updates that we have for you</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="d-flex align-items-start">
                                            <div class="badge bg-label-secondary p-2 me-3 rounded"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-file-export ti-sm " style="color:#00365E"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0" style="font-size:18px;color: #00365E;">Job
                                                        applications</h6>
                                                    <small style="font-size:14px;color:#00365E">Receive a notification
                                                        about new applications every 2 days</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="d-flex align-items-start">
                                            <div class="badge bg-label-secondary p-2 me-3 rounded"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-circle-check ti-sm " style="color:#00365E"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0" style="font-size:18px;color: #00365E;">Job aproval
                                                    </h6>
                                                    <small style="font-size:14px;color:#00365E">Receive a notification when
                                                        a job requires your aproval</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="d-flex align-items-start">
                                            <div class="badge bg-label-secondary p-2 me-3 rounded"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-briefcase ti-sm " style="color:#00365E"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0" style="font-size:18px;color: #00365E;">New
                                                        Opportunity</h6>
                                                    <small style="font-size:14px;color:#00365E">Receive a notification when
                                                        a new job opportunity is posted based on your locations and
                                                        skills</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="d-flex align-items-start">
                                            <div class="badge bg-label-secondary p-2 me-3 rounded"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-file-analytics ti-sm " style="color:#00365E"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0" style="font-size:18px;color: #00365E;">Report
                                                        notification</h6>
                                                    <small style="font-size:14px;color:#00365E">Receive a notification when
                                                        a report is submited to one of your jobs</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="d-flex align-items-start">
                                            <div class="badge bg-label-secondary p-2 me-3 rounded"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-credit-card ti-sm " style="color:#00365E"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0" style="font-size:18px;color: #00365E;">Subscription
                                                        expiration</h6>
                                                    <small style="font-size:14px;color:#00365E">Receive a notification when
                                                        your subscription is near due</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="d-flex align-items-start">
                                            <div class="badge bg-label-secondary p-2 me-3 rounded"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-lock ti-sm " style="color:#00365E"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0" style="font-size:18px;color: #00365E;">Login device
                                                    </h6>
                                                    <small style="font-size:14px;color:#00365E">Receive a notification when
                                                        you login form a diferent mobile device or location</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="d-flex align-items-start">
                                            <div class="badge bg-label-secondary p-2 me-3 rounded"
                                                style="background-color:#F2F6FA !important">
                                                <i class="ti ti-lock ti-sm " style="color:#00365E"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0" style="font-size:18px;color: #00365E;">Vessel
                                                        registration</h6>
                                                    <small style="font-size:14px;color:#00365E">Receive a notification when
                                                        you or your captain add a new yacth</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn mt-5"
                                        style="color: #fff;background: #5E8BF7;border-radius: 0px;">Update email
                                        notifications</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-top-permission" role="tabpanel">
                            <div class="row">
                                <h4 style="color: #00365E;" class=" d-flex">
                                    <i class="ti ti-lock ti-md me-2"></i>
                                    <span style="margin-top: 2px;font-size: 18px;">User permissions</span>
                                </h4>
                                <p style="font-size:14px;color:#00365E" class="mt-3">Define and configure what actions
                                    your crew can do.</p>
                                <div class="mt-5">
                                    <table class="table table-responsive" style="color:#00365E">
                                        <tr style="font-size: 14px">
                                            <td colspan="10" class="w-75"><span class="me-2">Yacts</span> </td>
                                            <td><span class="me-2">Captain</span></td>
                                            <td><span class="me-2">Chief Engineer</span></td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td colspan="10">
                                                Access platform
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td colspan="10">
                                                Access platform
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mt-5">
                                    <table class="table table-responsive" style="color:#00365E">
                                        <tr style="font-size: 14px">
                                            <td colspan="10" class="w-75"><span class="me-2">Crew</span> </td>
                                            <td><span class="me-2">Captain</span></td>
                                            <td><span class="me-2">Chief Engineer</span></td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td colspan="10">
                                                Access platform
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td colspan="10">
                                                Access platform
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mt-5">
                                    <table class="table table-responsive" style="color:#00365E">
                                        <tr style="font-size: 14px">
                                            <td colspan="10" class="w-75"><span class="me-2">Job Posts</span>
                                            </td>
                                            <td><span class="me-2">Captain</span></td>
                                            <td><span class="me-2">Chief Engineer</span></td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td colspan="10">
                                                Access platform
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td colspan="10">
                                                Access platform
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mt-5">
                                    <table class="table table-responsive" style="color:#00365E">
                                        <tr style="font-size: 14px">
                                            <td colspan="10" class="w-75"><span class="me-2">Marketing</span>
                                            </td>
                                            <td><span class="me-2">Captain</span></td>
                                            <td><span class="me-2">Chief Engineer</span></td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td colspan="10">
                                                Access platform
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border" style="color:#00365E;font-size: 14px;">
                                            <td colspan="10">
                                                Access platform
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-input">
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                            <button class="btn mt-5" style="border-radius:0px;color:#fff;background:#5E8BF7">Update
                                permissions</button>
                        </div>
                    </div>
                </div>

            </div>

            <!--/ Layout Demo -->
        </div>
        <!-- / Content -->

        <!-- Footer -->

        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <script type="text/javascript">
        document.getElementById('imageUploadInput').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('uploadedImage').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
