@extends('dashboard.body.main')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <!-- Greeting Section -->
            <div class="col-lg-12 mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-3">Hi, {{ auth()->user()->name }}</h3>
                </div>
            </div>
        </div>

        <!-- KPI Section: 8 Cards -->
        <div class="row">
            <!-- 1. Total Tax Collected -->
            <div class="col-lg-3 col-md-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4 card-total-sale">
                            <div class="icon iq-icon-box-2 bg-info-light">
                                <i class="fa-solid fa-coins fa-2x text-info"></i>
                            </div>
                            <div>
                                <p class="mb-2">Total Tax Collected</p>
                                <h4>TZS {{ $total_collected_taxes }}</h4>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-2">
                            <span class="bg-info iq-progress progress-1" data-percent="85"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Outstanding Taxes -->
            <div class="col-lg-3 col-md-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4 card-total-sale">
                            <div class="icon iq-icon-box-2 bg-danger-light">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-danger"></i>
                            </div>
                            <div>
                                <p class="mb-2">Outstanding Taxes</p>
                                <h4>TZS {{ $total_outstanding_taxes }}</h4>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-2">
                            <span class="bg-danger iq-progress progress-1" data-percent="70"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Approved Ads -->
            <div class="col-lg-3 col-md-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4 card-total-sale">
                            <div class="icon iq-icon-box-2 bg-success-light">
                                <i class="fa-solid fa-circle-check fa-2x text-success"></i>
                            </div>
                            <div>
                                <p class="mb-2">Approved Ads</p>
                                <h4>{{ $approved_advertisements->isEmpty() ? 'No Approved Ads' : $approved_advertisements->count() }}
                                </h4>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-2">
                            <span class="bg-success iq-progress progress-1" data-percent="75"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Net Tax Revenue -->
            <div class="col-lg-3 col-md-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4 card-total-sale">
                            <div class="icon iq-icon-box-2 bg-warning-light">
                                <i class="fa-solid fa-chart-line fa-2x text-warning"></i>
                            </div>
                            <div>
                                <p class="mb-2">Net Tax Revenue</p>
                                <h4>TZS {{ $net_tax_revenue }}</h4>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-2">
                            <span class="bg-warning iq-progress progress-1" data-percent="85"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Enforcement Costs -->
            <div class="col-lg-3 col-md-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4 card-total-sale">
                            <div class="icon iq-icon-box-2 bg-secondary-light">
                                <i class="fa-solid fa-gavel fa-2x text-secondary"></i>
                            </div>
                            <div>
                                <p class="mb-2">Enforcement Costs</p>
                                <h4>TZS {{ $enforcement_costs }}</h4>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-2">
                            <span class="bg-danger iq-progress progress-1" data-percent="20"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. Registered Ad Spaces -->
            <div class="col-lg-3 col-md-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4 card-total-sale">
                            <div class="icon iq-icon-box-2 bg-primary-light">
                                <i class="fa-solid fa-map-location-dot fa-2x text-primary"></i>
                            </div>
                            <div>
                                <p class="mb-2">Registered Ad Spaces</p>
                                <h4>{{ $total_ad_spaces }}</h4>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-2">
                            <span class="bg-primary iq-progress progress-1" data-percent="15"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 7. Advertisers -->
            <div class="col-lg-3 col-md-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4 card-total-sale">
                            <div class="icon iq-icon-box-2 bg-info-light">
                                <i class="fa-solid fa-users fa-2x text-info"></i>
                            </div>
                            <div>
                                <p class="mb-2">Advertisers</p>
                                <h4>{{ $total_advertisers }}</h4>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-2">
                            <span class="bg-info iq-progress progress-1" data-percent="50"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 8. Pending Applications -->
            <div class="col-lg-3 col-md-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4 card-total-sale">
                            <div class="icon iq-icon-box-2 bg-success-light">
                                <i class="fa-solid fa-hourglass-half fa-2x text-success"></i>
                            </div>
                            <div>
                                <p class="mb-2">Pending Applications</p>
                                <h4>{{ $pending_applications }}</h4>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-2">
                            <span class="bg-success iq-progress progress-1" data-percent="40"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tax Overview Section -->
    <div class="row">
        <!-- Tax Summary Chart -->
        <div class="col-lg-6">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Tax Collection Summary</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownTaxFilter" data-toggle="dropdown">
                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownTaxFilter">
                                <a class="dropdown-item" href="#">Year</a>
                                <a class="dropdown-item" href="#">Month</a>
                                <a class="dropdown-item" href="#">Week</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Placeholder for Tax Chart -->
                    <div id="layout1-chart1" style="min-height: 360px;"></div>
                </div>
            </div>
        </div>

        <!-- Revenue vs Enforcement Cost -->
        <div class="col-lg-6">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Revenue vs Enforcement Cost</h4>
                    </div>
                    <div class="dropdown">
                        <span class="dropdown-toggle dropdown-bg btn" id="dropdownCostFilter" data-toggle="dropdown">
                            This Month<i class="ri-arrow-down-s-line ml-1"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownCostFilter">
                            <a class="dropdown-item" href="#">Yearly</a>
                            <a class="dropdown-item" href="#">Monthly</a>
                            <a class="dropdown-item" href="#">Weekly</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Placeholder for Revenue vs Cost Chart -->
                    <div id="layout1-chart-2" style="min-height: 360px;"></div>
                </div>
            </div>
        </div>

        <!-- Top Taxed Advertisement Assets -->
        <div class="col-lg-8">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Top Taxed Assets</h4>
                    </div>
                    <div class="dropdown">
                        <span class="dropdown-toggle dropdown-bg btn" id="dropdownTopAssets" data-toggle="dropdown">
                            This Month<i class="ri-arrow-down-s-line ml-1"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownTopAssets">
                            <a class="dropdown-item" href="#">Year</a>
                            <a class="dropdown-item" href="#">Month</a>
                            <a class="dropdown-item" href="#">Week</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled row top-product mb-0">
                        @foreach ($top_assets as $asset)
                            <li class="col-lg-3">
                                <div class="card card-block card-stretch card-height mb-0">
                                    <div class="card-body">
                                        <div class="bg-info-light rounded">
                                            <img src="{{ $asset->photo ? asset('storage/assets/' . $asset->photo) : asset('assets/images/ad-placeholder.png') }}"
                                                class="style-img img-fluid m-auto p-3" alt="image">
                                        </div>
                                        <div class="style-text text-left mt-3">
                                            <h5 class="mb-1">{{ $asset->title }}</h5>
                                            <p class="mb-0">Tax: TZS {{ number_format($asset->tax_amount) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Recently Registered Ads -->
        <div class="col-lg-4">
            <div class="card card-transparent card-block card-stretch mb-4">
                <div class="card-header d-flex align-items-center justify-content-between p-0">
                    <div class="header-title">
                        <h4 class="card-title mb-0">Recent Ad Registrations</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary view-btn font-size-14">View All</a>
                    </div>
                </div>
            </div>
            @foreach ($new_ads as $ad)
                <div class="card card-block card-stretch card-height-helf">
                    <div class="card-body card-item-right">
                        <div class="d-flex align-items-top">
                            <div class="bg-warning-light rounded">
                                <img src="{{ $ad->photo ? asset('storage/assets/' . $ad->photo) : asset('assets/images/ad-placeholder.png') }}"
                                    class="style-img img-fluid m-auto" alt="image">
                            </div>
                            <div class="style-text text-left">
                                <h5 class="mb-2">{{ $ad->title }}</h5>
                                <p class="mb-2">Location: {{ $ad->location }}</p>
                                <p class="mb-0">Start: {{ \Carbon\Carbon::parse($ad->start_date)->format('d M, Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('specificpagescripts')
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('assets/js/table-treeview.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/customizer.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="{{ asset('assets/js/chart-custom.js') }}"></script>
@endsection
