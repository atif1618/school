<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

<head>
    <base href="../">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Gamer Galactic" />
    <link rel="canonical" href="http://index.html" />
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{url(asset('assets/css/jquery.datetimepicker.css'))}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style.css')}}" rel="stylesheet" type="text/css" />
    @yield('styles')
    <!--end::Head-->

<body>

    <body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true"
        class="app-default">
        <!--begin::Theme mode setup on page load-->
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                @livewire('partials/header')
                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                    <div class="app-container container-xxl d-flex">
                        <!--begin::Main-->
                        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                            {{ $slot }}

                            @livewire('partials/footer')
                        </div>
                        <!--end:::Main-->
                    </div>
                </div>
            </div>
        </div>
        @livewire('partials/models')
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
        <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
        <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
        <script src="{{url(asset('assets/js/jquery.datetimepicker.full.js'))}}"></script>
        {{--
        <x-livewire-alert::flash /> --}}
        <!--end::Custom Javascript-->
        {{-- @livewireScripts --}}

        {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

        {{--
        <x-livewire-alert::scripts /> --}}
        {{-- <script>
            document.addEventListener('livewire:navigated', () => {

        });
        document.addEventListener('livewire:init', () => {
            Livewire.on('refresh-users',(event)=>{
            //alert('product created/updated')
            var myModalEl=document.querySelector('#kt_modal_add_user')
            var modal=bootstrap.Modal.getOrCreateInstance(myModalEl)

            setTimeout(() => {
                modal.hide();
                Livewire.dispatch('reset-modal');
            }, 5000);
            })

            Livewire.on('closeUserModal',()=>{
                $('#kt_modal_add_user').modal('hide')
            })

        });
        </script> --}}
    </body>

</html>