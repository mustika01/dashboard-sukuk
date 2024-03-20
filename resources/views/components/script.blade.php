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
<script src="{{ asset('templates/vuexy/assets/vendor/libs/sweetalert2.js') }}"></script>

<script src="{{ asset('templates/vuexy/assets/vendor/js/menu.js') }}"></script>
@yield('menu-js')
<!-- endbuild -->

<!-- Vendors JS -->
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
