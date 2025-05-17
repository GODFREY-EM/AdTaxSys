<footer class="iq-footer">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Left Side Links -->
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('/terms-of-use') }}">Terms of Use</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Right Side Branding -->
                    <div class="col-lg-6 text-right">
                        <span class="mr-1">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> ©
                        </span>
                        <a href="{{ route('dashboard') }}" class="text-primary fw-bold">AdTaxSys</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
