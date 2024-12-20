@extends('admin.layout.master')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        /* body {
                                                                background-color: #f8f9fa;
                                                            } */
        .card {

            border: 1px solid #e9ecef;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .avatar-sm {
            width: 32px;
            height: 32px;
        }

        .browser-icon {
            width: 24px;
            height: 24px;
        }

        .country-flag {
            width: 24px;
            height: 24px;
            border-radius: 50%;
        }

        .progress {
            height: 8px;
        }

        .table th {
            font-weight: 500;
            color: #6c757d;
        }

        .badge-soft {
            padding: 4px 8px;
            border-radius: 4px;
        }

        .badge-soft-success {
            background-color: #d1fae5;
            color: #065f46;
        }

        .badge-soft-warning {
            background-color: #fef3c7;
            color: #92400e;
        }

        .badge-soft-danger {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .card {

            border: 1px solid #e9ecef;
            background: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        .browser-icon {
            width: 24px;
            height: 24px;
        }

        .referral-item {
            padding: 12px;
            border-bottom: 1px solid #e9ecef;
        }

        .referral-item:last-child {
            border-bottom: none;
        }

        .text-primary-blue {
            color: #0066ff;
        }

        .browser-item {
            padding: 8px 0;
        }
    </style>

    <!-- / Navbar -->
    <div class="content-wrapper">
        <div class="layout-demo-wrapper"
            style="background-image: url('/dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; position: relative;">
            <div class="overlay">

            </div>
            <!-- Overlay -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-container">
                        <!-- Text container -->
                        <div class="row">
                            <div class="col-lg-7 text-white">
                                <h3 class="text-white">Welcome back, Petter</h3>
                                <p style="margin-top: -10px;">Nice to see you again <span
                                        style="background-color: white;color: #00365d;padding: 2px;">
                                        <strong>
                                            <i class="ti ti-link"
                                                style="font-size: 16px;margin-top: -3px;font-weight: 700;"></i>Referal link
                                        </strong>
                                        <span style="color: #9cafd1;">(worldyachtrefit/4325425ptuser)</span>
                                    </span>
                                </p>
                            </div>
                            <div class="col-lg-5" style="text-align: right;">
                                <button type="button" class="btn "
                                    style="border-radius: 0px !important;color: #00365d;border: 1px solid white;color: white;width: 20px;">
                                    <span class="ti-xs ti ti-dots-vertical me-1"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-5">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card"
                                    style=" border: 1px solid #5E8BF7;height: 90px;box-shadow: 0px 16px 30px 0px #4680FF29;background: url('/dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                            style="background-color:#F2F6FA !important">
                                            <i class="fa-solid fa-dollar-sign" style="color:#5E8BF7"></i>
                                        </div>
                                        <div class="card-info">
                                            <small style="font-size: 11px">income</small>
                                            <h5 class="mb-0" style="color: #00365E">€ 34555</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card"
                                    style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('dashboard/assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                            style="background-color:#F2F6FA !important">
                                            <i style= "" class="fa-regular fa-star"
                                                style="color:#00365E; height: 20px; "></i>
                                        </div>
                                        <div class="card-info">
                                            <small style="font-size: 11px">Premium Accounts</small>
                                            <h5 class="mb-0" style="color: #00365E">123</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card"
                                    style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('dashboard/assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                            style="background-color:#FF005C0D !important">
                                            <i class="fa-solid fa-arrow-trend-down"></i>
                                        </div>
                                        <div class="card-info">
                                            <small style="font-size: 11px">Users Downgraded</small>
                                            <h5 class="mb-0" style="color: #FF005C">03</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card"
                                    style="   border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('dashboard/assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                            style="background-color:#2AD7B30D !important">
                                            <i class="fa-solid fa-arrow-trend-up" style="color:#2AD7B3"></i>
                                        </div>
                                        <div class="card-info">
                                            <small style="font-size: 11px">Users Upgraded</small>
                                            <h5 class="mb-0" style="color: #2AD7B3">04 <span
                                                    class="badge bg-label-secondary badge-sm"
                                                    style="width: 60px;height: 20px;font-size: 10px;color: #00365E !important;">3.456
                                                    €</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-3">
                    <!-- Sales Overview -->
                    <div class="col-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M3 3v18h18" />
                                            <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3" />
                                        </svg>
                                        <h5 class="card-title mb-0">Sales Overview</h5>
                                    </div>
                                    <select class="form-select form-select-sm w-auto">
                                        <option value="Current Year" selected>Current Year</option>
                                        <option value="Show All">Show All</option>
                                    </select>
                                </div>
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Top Customers -->
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="card-title mb-0">Top customers</h5>
                                    <a href="{{ route('admin-users.index') }}" class="text-decoration-none">View all</a>
                                </div>
                                @foreach ($users->sortByDesc(function ($user) {
                                    return $user->orders->sum('amount'); // Sorting by the sum of order amounts in descending order
                                })->take(6) as $user)
                                    <div style = "margin-top: 10px;" class="d-flex flex-column gap-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">

                                                <img src="{{ $user->profile_image ? $user->profile_image : 'https://via.placeholder.com/40' }}" class="avatar" alt="User Avatar">

                                                <div>
                                                    <div class="fw-medium">{{ $user->firstName . ' ' . $user->lastName }}
                                                    </div>
                                                    <div class="text-muted small">{{ $user->accountType }}</div>
                                                </div>
                                            </div>
                                            <div class="fw-medium">{{ $user->orders->sum('amount') }}</div>
                                        </div>
                                        <!-- Repeat for other customers -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div style= "margin-top: 20px;" class="container-fluid">
                        <div class="row g-4">
                            <!-- Customer Type Card -->
                            <div class="col-md-4">
                                <div
                                    style="background: white; border-radius: 8px; padding: 20px; height: 100%; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                                    <h2 style="color: #1e293b; font-size: 16px; font-weight: 500; margin-bottom: 20px;">
                                        Customer type</h2>
                                    <div style="display: flex; align-items: center; padding: 8px 0; color: #64748b;">
                                        <svg style="width: 24px; height: 24px; margin-right: 12px; color: #64748b;"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path
                                                d="M3 9h18v10a2 2 0 01-2 2H5a2 2 0 01-2-2V9zm0 0V5a2 2 0 012-2h14a2 2 0 012 2v4">
                                            </path>
                                        </svg>
                                        <span>Companies</span>
                                        <span style="margin-left: auto;">
                                            {{ $users->where('accountType', 'Company')->count() }}

                                        </span>
                                        <span style="margin-left: 16px; width: 80px; text-align: right;">€
                                            44,553</span>
                                    </div>
                                    <div
                                        style=" margin-top: 30px; display: flex; align-items: center; padding: 8px 0; color: #64748b;">
                                        <svg style="width: 24px; height: 24px; margin-right: 12px; color: #64748b;"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                        <span>Yacht Owner</span>
                                        <span style="margin-left: auto;">
                                            {{ $users->where('accountType', 'Yachtowner')->count() }}
                                        </span>
                                        <span style="margin-left: 16px; width: 80px; text-align: right;">€
                                            44,553</span>
                                    </div>
                                    <div
                                        style=" margin-top: 30px; display: flex; align-items: center; padding: 8px 0; color: #64748b;">
                                        <svg style="width: 24px; height: 24px; margin-right: 12px; color: #64748b;"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                        <span>Captain</span>
                                        <span style="margin-left: auto;">

                                            {{ $users->where('accountType', 'CaptainEngineer')->count() }}
                                        </span>
                                        <span style="margin-left: 16px; width: 80px; text-align: right;">€
                                            44,553</span>
                                    </div>
                                    <div
                                        style=" margin-top: 30px; display: flex; align-items: center; padding: 8px 0; color: #64748b;">
                                        <svg style="width: 24px; height: 24px; margin-right: 12px; color: #64748b;"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path
                                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <span>Professional</span>
                                        <span style="margin-left: auto;">
                                            {{ $users->where('accountType', 'Professional')->count() }}
                                        </span>
                                        <span style="margin-left: 16px; width: 80px; text-align: right;">€
                                            44,553</span>
                                    </div>
                                    <div
                                        style=" margin-top: 30px; display: flex; align-items: center; padding: 8px 0; color: #64748b;">
                                        <svg style="width: 24px; height: 24px; margin-right: 12px; color: #64748b;"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                        <span>Surveyor</span>
                                        <span style="margin-left: auto;"> <span style="margin-left: auto;">
                                                {{ $users->where('accountType', 'Surveyor')->count() }}
                                            </span>
                                            <span style="margin-left: 16px; width: 80px; text-align: right;">€
                                                44,553</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Companies by Country Card -->
                            <div class="col-md-4">
                                <div
                                    style="background: white; border-radius: 8px; padding: 20px; height: 100%; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                                    <div
                                        style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                                        <h2 style="color: #1e293b; font-size: 16px; font-weight: 500; margin-bottom: 0;">
                                            Companies by country</h2>
                                        <select
                                            style="font-size: 14px; color: #64748b; border: none; background: transparent; cursor: pointer;">
                                            <option>this month</option>
                                        </select>
                                    </div>
                                    @foreach ($users->take(6) as $user)
                                        @if ($user->accountType == 'Company')
                                            @php
                                                // Country code mapping (you can use a more complete mapping)
                                                $countryCodes = [
                                                    'Pakistan' => 'PK',
                                                    'United States' => 'US',
                                                    'France' => 'FR',
                                                    'Spain' => 'ES',
                                                    // Add more countries here
                                                ];
                                                $countryCode = $countryCodes[$user->company['country']] ?? 'US'; // Default to US if not found
                                            @endphp


                                            <div
                                                style=" margin-top: 30px; display: flex; align-items: center; padding: 8px 0;">

                                                <img src="https://flagcdn.com/w20/{{ $countryCode }}.png"
                                                    alt="{{ $user->company['country'] }}"
                                                    style="width: 24px; height: 24px; margin-right: 12px; border-radius: 50%;">

                                                <span
                                                    style="color: #64748b; font-size: 14px;">{{ $user->company['country'] }}</span>
                                                <span style="margin-left: auto; color: #64748b;">€
                                                    {{ $user->jobs->sum('budget') }}</span>
                                                <span
                                                    style="margin-left: 16px; color: #10b981; width: 60px; text-align: right;">↑
                                                    10.3%</span>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- Reports Performance Card -->
                            <div class="col-md-4">
                                <div
                                    style="background: white; border-radius: 8px; padding: 20px; height: 100%; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                                    <h2 style="color: #1e293b; font-size: 16px; font-weight: 500; margin-bottom: 20px;">
                                        Reports Performance</h2>
                                    <div style="position: relative; width: 200px; height: 200px; margin: 0 auto 20px;">
                                        <canvas id="performanceChart"></canvas>
                                        <div
                                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                                            <div style="font-size: 24px; font-weight: 500; color: #1e293b;">
                                                {{ array_sum($data) }}
                                            </div>
                                            <div style="font-size: 14px; color: #64748b;">Reports</div>
                                        </div>
                                    </div>
                                    <div style="display: flex; align-items: center; margin-top: 16px; padding: 4px 0;">
                                        <svg style="width: 20px; height: 20px; margin-right: 8px;" viewBox="0 0 24 24"
                                            fill="none" stroke="#ef4444" stroke-width="2">
                                            <path
                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                            </path>
                                        </svg>
                                        <span style="color: #64748b; flex-grow: 1;">Incidents</span>
                                        <span
                                            style="color: #ef4444; font-weight: 500;">{{ $reports->where('reportType.name', 'Incident')->count() }}</span>
                                    </div>
                                    <div style="display: flex; align-items: center; margin-top: 16px; padding: 4px 0;">
                                        <svg style="width: 20px; height: 20px; margin-right: 8px;" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span style="color: #64748b; flex-grow: 1;">Progress</span>
                                        <span
                                            style="color: #64748b; font-weight: 500;">{{ $reports->where('reportType.name', 'Progress')->count() }}</span>
                                    </div>
                                    <div style="display: flex; align-items: center; margin-top: 16px; padding: 4px 0;">
                                        <svg style="width: 20px; height: 20px; margin-right: 8px;" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                        <span style="color: #64748b; flex-grow: 1;">Surveyors</span>
                                        <span
                                            style="color: #64748b; font-weight: 500;">{{ $reports->where('reportType.name', 'Surveyor')->count() }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row g-4">
                            <!-- Top Referral Leads -->
                            <div class="col-12 col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div class="d-flex align-items-center gap-2">
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2">
                                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                                    </path>
                                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                                    </path>
                                                </svg>
                                                <h5 class="card-title mb-0">Top refereal leads</h5>
                                            </div>
                                            <select class="form-select form-select-sm w-auto">
                                                <option>This month</option>
                                            </select>
                                        </div>

                                        <!-- Referral Items -->
                                        <div class="referral-list">
                                            <div class="referral-item d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="https://via.placeholder.com/32" class="avatar"
                                                        alt="Tim Burton">
                                                    <div>
                                                        <div class="fw-medium">Tim Burton</div>
                                                        <div class="text-muted small">All fit LDA</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <div class="small text-primary-blue">worldyachtrefit/tim3225</div>
                                                    <div class="d-flex align-items-center gap-2 text-muted">
                                                        <svg width="16" height="16" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M12 6v6l4 2"></path>
                                                        </svg>
                                                        44.520€
                                                        <span class="badge bg-light text-muted">13</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Repeat 5 more times for other items -->
                                            <div class="referral-item d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="https://via.placeholder.com/32" class="avatar"
                                                        alt="Tim Burton">
                                                    <div>
                                                        <div class="fw-medium">Tim Burton</div>
                                                        <div class="text-muted small">All fit LDA</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <div class="small text-primary-blue">worldyachtrefit/tim3225</div>
                                                    <div class="d-flex align-items-center gap-2 text-muted">
                                                        <svg width="16" height="16" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M12 6v6l4 2"></path>
                                                        </svg>
                                                        44.520€
                                                        <span class="badge bg-light text-muted">13</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Repeat 5 more times for other items -->
                                            <div class="referral-item d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="https://via.placeholder.com/32" class="avatar"
                                                        alt="Tim Burton">
                                                    <div>
                                                        <div class="fw-medium">Tim Burton</div>
                                                        <div class="text-muted small">All fit LDA</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <div class="small text-primary-blue">worldyachtrefit/tim3225</div>
                                                    <div class="d-flex align-items-center gap-2 text-muted">
                                                        <svg width="16" height="16" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M12 6v6l4 2"></path>
                                                        </svg>
                                                        44.520€
                                                        <span class="badge bg-light text-muted">13</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Repeat 5 more times for other items -->
                                            <div class="referral-item d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="https://via.placeholder.com/32" class="avatar"
                                                        alt="Tim Burton">
                                                    <div>
                                                        <div class="fw-medium">Tim Burton</div>
                                                        <div class="text-muted small">All fit LDA</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <div class="small text-primary-blue">worldyachtrefit/tim3225</div>
                                                    <div class="d-flex align-items-center gap-2 text-muted">
                                                        <svg width="16" height="16" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M12 6v6l4 2"></path>
                                                        </svg>
                                                        44.520€
                                                        <span class="badge bg-light text-muted">13</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Repeat 5 more times for other items -->
                                            <div class="referral-item d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="https://via.placeholder.com/32" class="avatar"
                                                        alt="Tim Burton">
                                                    <div>
                                                        <div class="fw-medium">Tim Burton</div>
                                                        <div class="text-muted small">All fit LDA</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <div class="small text-primary-blue">worldyachtrefit/tim3225</div>
                                                    <div class="d-flex align-items-center gap-2 text-muted">
                                                        <svg width="16" height="16" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M12 6v6l4 2"></path>
                                                        </svg>
                                                        44.520€
                                                        <span class="badge bg-light text-muted">13</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Repeat 5 more times for other items -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Platform Access -->
                            <div class="col-12 col-lg-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="card-title mb-0">Platform access</h5>
                                            <select class="form-select form-select-sm w-auto">
                                                <option>Browser</option>
                                            </select>
                                        </div>

                                        <!-- Browser Stats -->
                                        <div class="browser-stats">
                                            <div class="browser-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://via.placeholder.com/24" class="browser-icon"
                                                        alt="Chrome">
                                                    <span>Google Chrome</span>
                                                </div>
                                                <span class="fw-medium">56%</span>
                                            </div>
                                            <div class="browser-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://via.placeholder.com/24" class="browser-icon"
                                                        alt="Safari">
                                                    <span>Safari</span>
                                                </div>
                                                <span class="fw-medium">40%</span>
                                            </div>
                                            <div class="browser-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://via.placeholder.com/24" class="browser-icon"
                                                        alt="Opera">
                                                    <span>Opera</span>
                                                </div>
                                                <span class="fw-medium">33%</span>
                                            </div>
                                            <div class="browser-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://via.placeholder.com/24" class="browser-icon"
                                                        alt="Edge">
                                                    <span>Microsoft Edge</span>
                                                </div>
                                                <span class="fw-medium">30%</span>
                                            </div>
                                            <div class="browser-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://via.placeholder.com/24" class="browser-icon"
                                                        alt="Brave">
                                                    <span>Brave</span>
                                                </div>
                                                <span class="fw-medium">22%</span>
                                            </div>
                                            <div class="browser-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://via.placeholder.com/24" class="browser-icon"
                                                        alt="Firefox">
                                                    <span>Firefox</span>
                                                </div>
                                                <span class="fw-medium">22%</span>
                                            </div>
                                            <div class="browser-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://via.placeholder.com/24" class="browser-icon"
                                                        alt="Samsung">
                                                    <span>Samsung Internet</span>
                                                </div>
                                                <span class="fw-medium">22%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Accounts Table -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 00-3-3.87" />
                                            <path d="M16 3.13a4 4 0 010 7.75" />
                                        </svg>
                                        <h5 class="card-title mb-0">Recent accounts</h5>
                                        <span class="badge bg-secondary">{{ $users->count() }}</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="search" class="form-control form-control-sm"
                                            placeholder="Search user">
                                        <select class="form-select form-select-sm">
                                            <option>All roles</option>
                                        </select>
                                        <select class="form-select form-select-sm">
                                            <option>Order by: activity</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Plan</th>
                                                <th>Billing</th>
                                                <th>Price</th>
                                                <th>Created on</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ $user->profile_image ? $user->profile_image : 'https://via.placeholder.com/32' }}"
                                                                class="avatar-sm">

                                                            <div>
                                                                <div>{{ $user->firstName . ' ' . $user->lastName }}</div>
                                                                <div class="text-muted small">{{ $user->accountType }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->accountType }}</td>
                                                    <td>
                                                        @if ($user->orders->sum('amount') == 0)
                                                            Free forever
                                                        @else
                                                            Paid
                                                        @endif
                                                    </td>
                                                    <td><span class="badge-soft badge-soft-success">Paid</span></td>
                                                    <td>{{ $user->orders->sum('amount') }}</td>
                                                    <td>
                                                        {{ \Carbon\Carbon::parse($user->created_at)->format('d F Y') }}
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-light">PDF</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                @if ($users->isNotEmpty())
                                    <nav class="mt-3" aria-label="Page navigation" style="float: right;">
                                        {{ $users->links('vendor.custom-pagination') }}
                                    </nav>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        // Initialize the donut chart
        const ctx = document.getElementById('performanceChart').getContext('2d');

        // Data passed from the controller
        const reportData = @json($data); // The counts of the reports by type
        const reportLabels = @json($labels); // The labels for each report type

        // Initialize the doughnut chart
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: reportLabels, // Labels (report types)
                datasets: [{
                    data: reportData, // The count of reports per type
                    backgroundColor: [
                        '#10b981', // Green
                        '#5e8bf7', // Blue
                        '#ff0053' // Red
                    ],
                    borderColor: '#ffffff', // White border between segments
                    borderWidth: 2, // T
                    cutout: '65%' // Makes the doughnut shape with hollow center
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // Display the legend
                    },
                    tooltip: {
                        enabled: true // Enable tooltips
                    }
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const salesChartElement = document.getElementById('salesChart');
            let salesChart;

            // Function to fetch and render chart data
            function fetchSalesData(filter = 'current_year') {
                fetch(`/api/sales-data?filter=${filter}`)
                    .then(response => response.json())
                    .then(data => {
                        if (salesChart) {
                            salesChart.destroy(); // Destroy previous chart instance
                        }

                        // Render chart
                        salesChart = new Chart(salesChartElement, {
                            type: 'bar',
                            data: {
                                labels: data.labels,
                                datasets: [{
                                    data: data.data,
                                    backgroundColor: '#0d6efd',
                                    borderRadius: 4,
                                    barThickness: 'flex', // Allow flexibility in width
                                    maxBarThickness: 50, // Maximum bar width in pixels
                                    minBarLength: 5 // Minimum bar length (for very small values)
                                }]
                            },
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        grid: {
                                            borderDash: [2, 2]
                                        }
                                    },
                                    x: {
                                        grid: {
                                            display: false
                                        }
                                    }
                                }
                            }
                        });
                    })
                    .catch(error => console.error('Error fetching sales data:', error));
            }

            // Initial fetch (Current Year)
            fetchSalesData();

            // Event listener for the dropdown filter
            const filterSelect = document.querySelector('.form-select');
            filterSelect.addEventListener('change', function() {
                const selectedFilter = filterSelect.value === 'Current Year' ? 'current_year' : 'show_all';
                fetchSalesData(selectedFilter);
            });
        });



        // Reports Chart
        new Chart(document.getElementById('reportsChart'), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [55, 332, 144],
                    backgroundColor: ['#ef4444', '#3b82f6', '#10b981']
                }]
            },
            options: {
                cutout: '75%',
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>


    <!-- Add JavaScript to render the chart -->
    <script>
        // Static data
        const data = {
            labels: ['Incidents', 'Progress', 'Surveyors'],
            datasets: [{
                label: 'Reports Distribution',
                data: [300, 100, 50], // Static data values
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)'],
                hoverOffset: 4
            }]
        };

        // Chart configuration
        const config = {
            type: 'doughnut', // Pie chart type
            data: data,
        };

        // Render the chart
        window.onload = function() {
            const ctx = document.getElementById('performanceChart').getContext('2d');
            new Chart(ctx, config);
        };
    </script>
@endsection
