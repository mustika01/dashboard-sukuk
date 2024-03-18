<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('templates/vuexy/assets') }}/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>Webform - Customer Management System</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="{{ asset('templates/vuexy/assets/img/favicon/favicon.ico') }}" /> -->
    <link rel="icon" type="image/x-icon" href="<?= asset('assets/image/icon_title.gif') ?>">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('templates/vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('templates/vuexy/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('templates/vuexy/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('templates/vuexy/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />

    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/libs/quill/editor.css') }}" />

    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/libs/select2/select2.css') }} " />

    <!-- <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/libs/typeahead-js/typeahead.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/libs/spinkit/spinkit.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/vuexy/assets/vendor/libs/dropzone/dropzone.css') }}" />

    @yield('vendor-css')

    <!-- Page CSS -->
    @yield('page-css')

    <!-- Helpers -->
    <script src="{{ asset('templates/vuexy/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('templates/vuexy/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('templates/vuexy/assets/js/config.js') }}"></script>

    <style>
        #template-customizer {
            visibility: hidden !important;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.layouts.menu')

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Content wrapper -->
                <div class="content-wrapper" id="content">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('main-content')
                    </div>
                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <!-- <div class="layout-overlay layout-menu-toggle"></div> -->

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <!-- <div class="drag-target"></div> -->
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
    <script src="{{ asset('templates/vuexy/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('templates/vuexy/assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('templates/vuexy/assets/vendor/libs/quill/quill.js') }}"></script>
    <script src="{{ asset('templates/vuexy/assets/vendor/libs/block-ui/block-ui.js') }}"></script>
    <script src="{{ asset('templates/vuexy/assets/vendor/libs/select2/select2.js') }}"></script>

    <script src="{{ asset('templates/vuexy/assets/vendor/js/menu.js') }}"></script>
    @yield('menu-js')
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    @yield('vendor-js')

    <!-- Main JS -->
    <script src="{{ asset('templates/vuexy/assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/components/customAlert.js') }}"></script>
    <script src="{{ asset('assets/js/components/customFormValidation.js') }}"></script>
    <script src="{{ asset('assets/js/components/loading.js') }}"></script>

    <!-- Page JS -->
    <script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                loading(true);
            } else {
                loading(false);
            }
        };
    </script>

    @yield('page-js')
</body>

</html>
