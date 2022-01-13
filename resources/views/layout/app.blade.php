<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->
<head><base href="">
    <title>بوابة بالحمر الإلكترونية</title>
    <meta charset="utf-8" />
    <meta name="description" content="البوابة الإلكترونية لإدارة المنح | مؤسسة سالم بن أحمد بالحمر وعائلته الخيرية" />
    <meta name="keywords" content="balhamer, balahmar, بالحمر، آحمد سالم، مؤسسة خيرية، إدراة المنح" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="بوابة بالحمر الإلكترونية | إدارة المنح" />
    <meta property="og:url" content="https://balahmar-new.dev" />
    <meta property="og:site_name" content="بوابة بالحمر الإلترونية | إدارة المنح" />
    <link rel="canonical" href="https://balahmar-new.dev" />
    <link rel="shortcut icon" href="{{asset("assets/media/logos/favicon.ico")}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@200;300;400&family=Tajawal:wght@200;300;400&display=swap" rel="stylesheet">

    <!--end::Fonts-->
    @yield('plugin_styles')

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset("assets/plugins/global/plugins.bundle.rtl.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/style.bundle.rtl.css")}}" rel="stylesheet" type="text/css" />

    <style>
        .menu-item, .menu-link, .menu-title {
            font-family: 'Tajawal', sans-serif !important;
            font-weight: bold;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Tajawal', sans-serif !important;
            font-weight: bold;
        }
        .breadcrumb {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }
        .btn {
            font-family: 'Noto Kufi Arabic', sans-serif !important;
        }
    </style>
    <!--end::Global Stylesheets Bundle-->

    @yield('custom_styles')

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" style="background-image: url({{asset("assets/media/patterns/header-balahmar-bg.png")}})" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
<!--begin::Main-->

<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="container-xxl d-flex align-items-center">
                    <!--begin::Heaeder menu toggle-->
                    <div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Heeder menu toggle-->

                    <!--begin::Header Logo-->
                    <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
                        <a href="{{url('/')}}">
                            <img alt="Logo" src="{{asset("assets/media/logos/logo-demo2.png")}}" class="logo-default h-25px" />
                            <img alt="Logo" src="{{asset("assets/media/logos/logo-demo2-sticky.png")}}" class="logo-sticky h-25px" />
                        </a>
                    </div>
                    <!--end::Header Logo-->

                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">

                        @include('layout._navbar')

                        @include('layout._topbar')

                    </div>
                    <!--end::Wrapper-->


                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->


            @yield('toolbar')

            @yield('content')

            @include('layout._footer')

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->


<!--begin::Drawers-->
@include('layout._drawer_activity')
@include('layout._drawer_chat')


<!--begin::Modals-->
@yield('modals')

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--end::Main-->

<script>const hostUrl = "{{asset('assets/')}}";</script>
<!--begin::Javascript-->

<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->

@yield('plugin_scripts')

@yield('page_scripts')

<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
