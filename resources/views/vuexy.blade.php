<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('templates/vuexy/assets') }}/"
    data-template="vertical-menu-template-starter">

@include('layouts.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.menu')

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('layouts.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('main-content')
                    </div>
                    <!-- / Content -->

                    {{-- @include('layouts.footer') --}}

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('templates/vuexy/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('templates/vuexy/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('templates/vuexy/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('templates/vuexy/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('templates/vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('templates/vuexy/assets/vendor/libs/hammer/hammer.js') }}"></script>

    <script src="{{ asset('templates/vuexy/assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('templates/vuexy/assets/js/main.js') }}"></script>

    <!-- Page JS -->
</body>

</html>
