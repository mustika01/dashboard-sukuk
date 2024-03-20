 <!-- Favicon -->
 <!-- <link rel="icon" type="image/x-icon" href="{{ asset('templates/vuexy/assets/img/favicon/favicon.ico') }}" /> -->
 <link rel="icon" type="image/x-icon" href="<?= asset('assets/images/icon_title.gif') ?>">

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
