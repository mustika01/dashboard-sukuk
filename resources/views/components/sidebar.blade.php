<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo d-flex justify-content-center">
                <img width="100%" src="<?= asset('assets/images/icon_title.gif') ?>" alt="Brand Logo">
            </span>
            <span class="app-brand-text demo menu-text fw-bold text-warning" style="font-size: large;">Dashboard</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul id="menu_container" class="menu-inner py-1">
    </ul>
    {{-- <ul class="menu-inner py-1"> --}}
    <!-- Accounts & Settings -->
    <!-- <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Accounts & Settings">Accounts &amp; Settings</span>
        </li>
        <li class="menu-item">
            <div class="dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle menu-link" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="menu-icon tf-icons ti ti-md"></i>
                    <div>Theme</div>
                </a>
                <ul class="dropdown-menu dropdown-menu-start dropdown-styles">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                            <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                            <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                            <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="menu-item">
            <a href="#" onclick="logout()" class="menu-link">
                <i class="menu-icon tf-icons ti ti-logout"></i>
                <div>Log Out</div>
            </a>
        </li> -->
    {{-- </ul> --}}
</aside>
<!-- / Menu -->

@section('menu-js')
    <script src="{{ asset('assets/js/menuList.js') }}"></script>
    <script>
        $(document).ready(function() {
            let url = "/<?php echo request()->path(); ?>";
            $('.menu-item').removeClass('active open');

            MenuList.forEach(function(item) {
                let menuActive = url == item?.url ? true : false;

                if (item?.id) {
                    $('#menu_container').append(
                        `<li id="${item?.id}" class="menu-item ${menuActive ? 'active' : ''}">
                        <a href="${item?.url}" class="menu-link ${item?.sub_menu ? 'menu-toggle' : ''}">
                            <i class="menu-icon tf-icons ti ${item?.icon}"></i>
                            <div>${item?.name}</div>
                        </a>
                    </li>`
                    );

                    if (item?.sub_menu) {
                        $(`#${item?.id}`).append(
                            `<ul id="sub-${item?.id}" class="menu-sub">
                        </ul>`
                        );
                        item?.sub_menu.forEach(function(subItem) {
                            let subMenuActive = url == (item?.url + subItem?.url) ? true : false;
                            if (subMenuActive) $(`#${item?.id}`).addClass('open');

                            $(`#sub-${item?.id}`).append(
                                `<li class="menu-item ${subMenuActive ? 'active' :''}">
                                <a href="${item?.url}${subItem?.url}" class="menu-link">
                                    <div data-i18n="${subItem?.name}">${subItem?.name}</div>
                                </a>
                            </li>`
                            );
                        });
                    }
                }

                if (item?.header) {
                    $('#menu_container').append(
                        `<li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="${item?.header}">${item?.header}</span>
                    </li>`
                    );
                }
            })

            $('#menu_container').append(
                `<li class="menu-item">
                <a href="#" onclick="logout()" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-logout"></i>
                    <div>Log Out</div>
                </a>
            </li>`
            );
        });

        function logout() {
            event.preventDefault();

            confirmAlert({
                confirmMsg: "Log Out"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "post",
                        url: "{{ route('logout') }}",
                        data: {
                            auth: 'admin'
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response?.error) {
                                popupAlert('error', 'Proses gagal, silahkan periksa data kembali');
                                return;
                            }

                            if (response?.success) {
                                window.location = "{{ route('login') }}";
                            }
                        },
                        error: function(error) {
                            popupAlert('error', error?.responseJSON?.error);
                        }
                    });
                }
            })
        }
    </script>
@endsection
