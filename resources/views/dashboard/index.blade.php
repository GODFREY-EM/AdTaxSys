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
        <!-- Card 1: Revenue (Existing) -->
        <div class="col-lg-3 col-md-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                        <div class="icon iq-icon-box-2 bg-info-light">
                            <img src="../assets/images/product/1.png" class="img-fluid" alt="image">
                        </div>
                        <div>
                            <p class="mb-2">Revenue</p>
                            <h4>$ {{ $total_paid }}</h4>
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                        <span class="bg-info iq-progress progress-1" data-percent="85"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2: Total Due (Existing) -->
        <div class="col-lg-3 col-md-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                        <div class="icon iq-icon-box-2 bg-danger-light">
                            <img src="../assets/images/product/2.png" class="img-fluid" alt="image">
                        </div>
                        <div>
                            <p class="mb-2">Total Due</p>
                            <h4>$ {{ $total_due }}</h4>
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                        <span class="bg-danger iq-progress progress-1" data-percent="70"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Complete Orders (Existing) -->
        <div class="col-lg-3 col-md-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                        <div class="icon iq-icon-box-2 bg-success-light">
                            <img src="../assets/images/product/3.png" class="img-fluid" alt="image">
                        </div>
                        <div>
                            <p class="mb-2">Complete Orders</p>
                            <h4>{{ count($complete_orders) }}</h4>
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                        <span class="bg-success iq-progress progress-1" data-percent="75"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4: Profit -->
        <div class="col-lg-3 col-md-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                        <div class="icon iq-icon-box-2 bg-warning-light">
                            <img src="../assets/images/dash/profit.svg" class="img-fluid" alt="image">
                        </div>
                        <div>
                            <p class="mb-2">Profit</p>
                            <h4>$ </h4>
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                        <span class="bg-warning iq-progress progress-1" data-percent="85"></span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Card 6: Expenses -->
        <div class="col-lg-3 col-md-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                        <div class="icon iq-icon-box-2 bg-secondary-light">
                            <img src="../assets/images/dash/expenses.svg" class="img-fluid" alt="image">
                        </div>
                        <div>
                            <p class="mb-2">Expenses</p>
                            <h4>$</h4>
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                        <span class="bg-danger iq-progress progress-1" data-percent="20"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 5: products -->
        <div class="col-lg-3 col-md-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                        <div class="icon iq-icon-box-2 bg-primary-light">
                            <img src="../assets/images/dash/products.svg" class="img-fluid" alt="image">
                        </div>
                        <div>
                            <p class="mb-2">Total Products</p>
                            <h4>{{ $total_products }}</h4> <!-- Display total products count -->
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                        <span class="bg-primary iq-progress progress-1" data-percent="15"></span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Card 7: Total Customers -->
        <div class="col-lg-3 col-md-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                        <div class="icon iq-icon-box-2 bg-info-light">
                            <img src="../assets/images/dash/customer.svg" class="img-fluid" alt="image">
                        </div>
                        <div>
                            <p class="mb-2">Total Customers</p>
                            <h4>{{ $totalCustomers }}</h4> <!-- Display the total customer count here -->
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                        <span class="bg-info iq-progress progress-1" data-percent="50"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 8: Pending Orders -->
        <div class="col-lg-3 col-md-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                        <div class="icon iq-icon-box-2 bg-success-light">
                            <img src="../assets/images/dash/pending.svg" class="img-fluid" alt="image">
                        </div>
                        <div>
                            <p class="mb-2">Pending Orders</p>
                            <h4></h4>
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


<!-- Overview Section (Adjusted part) -->
<div class="row">
    <!-- First Graph: Overview -->
    <div class="col-lg-6">
        <div class="card card-block card-stretch card-height">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Overview</h4>
                </div>
                <div class="card-header-toolbar d-flex align-items-center">
                    <div class="dropdown">
                        <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton001" data-toggle="dropdown">
                            This Month<i class="ri-arrow-down-s-line ml-1"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton001">
                            <a class="dropdown-item" href="#">Year</a>
                            <a class="dropdown-item" href="#">Month</a>
                            <a class="dropdown-item" href="#">Week</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Placeholder for Overview Chart -->
                <div id="layout1-chart1" style="min-height: 360px;"></div>
            </div>
        </div>
    </div>

    <!-- Second Graph: Revenue Vs Cost -->
    <div class="col-lg-6">
        <div class="card card-block card-stretch card-height">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Revenue Vs Cost</h4>
                </div>
                <div class="card-header-toolbar d-flex align-items-center">
                    <div class="dropdown">
                        <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton002"
                            data-toggle="dropdown">
                            This Month<i class="ri-arrow-down-s-line ml-1"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right shadow-none"
                            aria-labelledby="dropdownMenuButton002">
                            <a class="dropdown-item" href="#">Yearly</a>
                            <a class="dropdown-item" href="#">Monthly</a>
                            <a class="dropdown-item" href="#">Weekly</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="layout1-chart-2" style="min-height: 360px;"></div>
            </div>
        </div>
    </div>

    <!-- Products Section (Unchanged) -->
    <div class="col-lg-8">
        <div class="card card-block card-stretch card-height">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Top Products</h4>
                </div>
                <div class="card-header-toolbar d-flex align-items-center">
                    <div class="dropdown">
                        <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton006"
                            data-toggle="dropdown">
                            This Month<i class="ri-arrow-down-s-line ml-1"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right shadow-none"
                            aria-labelledby="dropdownMenuButton006">
                            <a class="dropdown-item" href="#">Year</a>
                            <a class="dropdown-item" href="#">Month</a>
                            <a class="dropdown-item" href="#">Week</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-unstyled row top-product mb-0">
                    @foreach ($products as $product)
                    <li class="col-lg-3">
                        <div class="card card-block card-stretch card-height mb-0">
                            <div class="card-body">
                                <div class="bg-warning-light rounded">
                                    <img src="{{ $product->product_image ? asset('storage/products/'.$product->product_image) : asset('assets/images/product/default.webp') }}" class="style-img img-fluid m-auto p-3" alt="image">
                                </div>
                                <div class="style-text text-left mt-3">
                                    <h5 class="mb-1">{{ $product->product_name }}</h5>
                                    <p class="mb-0">{{ $product->product_store }} Item</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-transparent card-block card-stretch mb-4">
            <div class="card-header d-flex align-items-center justify-content-between p-0">
                <div class="header-title">
                    <h4 class="card-title mb-0">New Products</h4>
                </div>
                <div class="card-header-toolbar d-flex align-items-center">
                    <div><a href="#" class="btn btn-primary view-btn font-size-14">View All</a></div>
                </div>
            </div>
        </div>
        @foreach ($new_products as $product)
        <div class="card card-block card-stretch card-height-helf">
            <div class="card-body card-item-right">
                <div class="d-flex align-items-top">
                    <div class="bg-warning-light rounded">
                        <img src="../assets/images/product/04.png" class="style-img img-fluid m-auto" alt="image">
                    </div>
                    <div class="style-text text-left">
                        <h5 class="mb-2">{{ $product->product_name }}</h5>
                        <p class="mb-2">Stock : {{ $product->product_store }}</p>
                        <p class="mb-0">Price : ${{ $product->selling_price }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Page end  -->
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