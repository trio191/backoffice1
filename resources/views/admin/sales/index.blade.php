@extends('admin.layout.master')
@section('content')
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

    <!-- Layout wrapper -->
    <div class="content-wrapper">
        <div class="container layout-demo-wrapper" style="background-image: url('/dashboard/assets/img/bg.png'); height: 100px; background-size: 100% 100%; padding-top: 20px; position: relative;">
            <div class="overlay"></div>
            <!-- Overlay -->
        <div class="container" style=" ">
                <!-- Text container -->
                <div class="row">
                    <div class="col-lg-7 text-white">
                        <h3 class="text-white">Manage Your Finance</h3>
                        <!-- <p style="margin-top: -20px;">Nice to see you again <span style="background-color: white;color: #00365d;padding: 2px;"><strong><i class="ti ti-link" style="font-size: 16px;margin-top: -3px;font-weight: 700;"></i>Referal link </strong><span style="color: #9cafd1;">(worldyachtrefit/4325425ptuser)</span></span> -->
                        </p>
                    </div>
                    <div class="col-lg-5" style="text-align: right;">
                        <!-- <button type="button" data-bs-toggle="offcanvas"
                                      data-bs-target="#offcanvasEnd"
                                      aria-controls="offcanvasEnd" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;"><span class="ti-xs ti ti-user-plus me-1"></span>Add crew </button><button type="button" data-bs-toggle="offcanvas"
                                      data-bs-target="#createJob"
                                      aria-controls="createJob" class="btn btn-white waves-effect waves-light" style="border-radius: 0px !important;color: #00365d;"><span class="ti-xs ti ti-briefcase me-1"></span>Create Job </button> -->
                        <button type="button" class="btn "
                            style="border-radius: 0px !important;color: #00365d;border: 1px solid white;color: white;width: 20px;">
                            <span class="ti-xs ti ti-dots-vertical me-1"></span>
                        </button>
                    </div>
                </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"
                        style="  margin-left: 20px; border: 1px solid #5E8BF7;height: 90px;box-shadow: 0px 16px 30px 0px #4680FF29;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
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
                        style="border: 1px solid #C6D2E7;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                style="background-color:#F2F6FA !important">
                                <i style="" class="fa-regular fa-star" style="color:#00365E; height: 20px; "></i>
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
                        style="border: 1px solid #FF005C;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-red.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
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
                        style=" margin-right: 20px; border: 1px solid #2AD7B3;height: 90px;box-shadow: none !important;background: url('assets/img/card-corner-green.png');background-size: 100% 100% ;padding: 20px;border-radius: 0px;color: #00365E;">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2"
                                style="background-color:#2AD7B30D !important">
                                <i class="fa-solid fa-arrow-trend-up" style="color:#2AD7B3"></i>
                            </div>
                            <div class="card-info">
                                <small style="font-size: 11px">Users Upgraded</small>
                                <h5 class="mb-0" style="color: #2AD7B3">04 <span class="badge bg-label-secondary badge-sm"
                                        style="width: 60px;height: 20px;font-size: 10px;color: #00365E !important;">3.456
                                        €</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
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
                                {{-- <select class="form-select form-select-sm w-auto">
                                    <option>Current Year</option>
                                </select> --}}
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


                <!-- Recent Accounts Table -->
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
    <script>
        // Initialize the donut chart

     // Sales Chart
new Chart(document.getElementById('salesChart'), {
    type: 'bar',
    data: {
        labels: {!! json_encode($formattedData['labels']) !!}, // Dynamically generated month labels
        datasets: [{
            data: {!! json_encode($formattedData['data']) !!}, // Dynamically generated sales data
            backgroundColor: '#0d6efd',
        


            borderRadius: 4,
                                    barThickness: 'flex', // Allow flexibility in width
                                    maxBarThickness: 50, // Maximum bar width in pixels
                                    minBarLength: 5 // Minimum 
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
@endsection
