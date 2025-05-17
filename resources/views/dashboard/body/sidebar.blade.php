<div class="iq-sidebar sidebar-default">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="{{ route('dashboard') }}" class="header-logo d-flex align-items-center">
            <h5 class="logo-title light-logo ml-3 mb-0">AdTaxSys</h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-0 d-flex align-items-center">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>

    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

                <!-- Dashboard -->
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="svg-icon">
                        <img src="{{ asset('assets/images/dashboard.png') }}" alt="Dashboard Icon"
                            style="width: 20px; height: 20px;">
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>

                <hr>

                <!-- Ads -->
                <li>
                    <a href="#ads" class="collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/ad-management.svg') }}" alt="Ads"
                                style="width: 20px; height: 20px;">
                            <span class="ml-3">Ads</span>
                        </div>
                        <svg class="svg-icon iq-arrow-right arrow-active ml-auto" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="9 6 15 12 9 18" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <ul id="ads" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="#">Billboards</a></li>
                        <li><a href="#">Promotional Ads</a></li>
                        <li><a href="#">Vehicle Ads</a></li>
                        <li><a href="#">Digital Ads</a></li>
                        <li><a href="#">Expired/Inactive Ads</a></li>
                    </ul>
                </li>

                <!-- Clients -->
                <li>
                    <a href="#clients" class="collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/customers.svg') }}" alt="Clients"
                                style="width: 20px; height: 20px;">
                            <span class="ml-3">Clients</span>
                        </div>
                        <svg class="svg-icon iq-arrow-right arrow-active ml-auto" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="clients" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="#">Advertisers List</a></li>
                        <li><a href="#">Add Advertiser</a></li>
                        <li><a href="#">Pending Applications</a></li>
                        <li><a href="#">Rejected Applications</a></li>
                    </ul>
                </li>

                <hr>

                <!-- Finance -->
                <li>
                    <a href="#finance" class="collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/tax.svg') }}" alt="Finance"
                                style="width: 20px; height: 20px;">
                            <span class="ml-3">Finance</span>
                        </div>
                        <svg class="svg-icon iq-arrow-right arrow-active ml-auto" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="finance" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="#">Tax Collection</a></li>
                        <li><a href="#">Outstanding Payments</a></li>
                        <li><a href="#">Payment History</a></li>
                        <li><a href="#">Enforcement Actions</a></li>
                    </ul>
                </li>

                <hr>

                <!-- Reports -->
                <li>
                    <a href="#reports" class="collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/reporting.svg') }}" alt="Reports"
                                style="width: 20px; height: 20px;">
                            <span class="ml-3">Reports</span>
                        </div>
                        <svg class="svg-icon iq-arrow-right arrow-active ml-auto" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="#">Tax Reports</a></li>
                        <li><a href="#">Advertisement Reports</a></li>
                        <li><a href="#">Payment Reports</a></li>
                        <li><a href="#">Compliance Reports</a></li>
                    </ul>
                </li>

                <hr>

                <!-- Admin -->
                <li>
                    <a href="#admin" class="collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/settings.svg') }}" alt="Admin"
                                style="width: 20px; height: 20px;">
                            <span class="ml-3">Admin</span>
                        </div>
                        <svg class="svg-icon iq-arrow-right arrow-active ml-auto" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Roles & Permissions</a></li>
                        <li><a href="#">Activity Logs</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>

                <hr>

                <!-- Data -->
                <li>
                    <a href="#data" class="collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/database.svg') }}" alt="Data"
                                style="width: 20px; height: 20px;">
                            <span class="ml-3">Data</span>
                        </div>
                        <svg class="svg-icon iq-arrow-right arrow-active ml-auto" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="data" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="#">Backup Database</a></li>
                        <li><a href="#">Restore Data</a></li>
                        <li><a href="#">Export Data</a></li>
                    </ul>
                </li>

                <hr>

                <!-- Insights -->
                <li>
                    <a href="#insights" class="collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/analytics.svg') }}" alt="Insights"
                                style="width: 20px; height: 20px;">
                            <span class="ml-3">Insights</span>
                        </div>
                        <svg class="svg-icon iq-arrow-right arrow-active ml-auto" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="insights" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="#">Top Performing Ads</a></li>
                        <li><a href="#">Revenue Trends</a></li>
                        <li><a href="#">Cities</a></li>
                        <li><a href="#">Zones/Districts</a></li>
                        <li><a href="#">Billboard Hardware</a></li>
                        <li><a href="#">Maintenance Logs</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
