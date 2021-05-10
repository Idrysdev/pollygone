<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 May 2021 09:16:08 GMT -->
<head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('adminto/assets/css/bootstrap.min.css') }}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('adminto/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('adminto/assets/css/app.min.css') }}" id="app-stylesheet" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        @yield('styles')

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('partials.adminto._topbar')


            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('partials.adminto._leftsidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                <!-- Start Content-->

                    @yield('content')

                </div>
                <!-- content -->

                <!-- Footer Start -->
                @include('partials.adminto._footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        @include('partials.adminto._rightbar')
        <!-- /Right-bar -->



        <!-- Vendor js -->
        <script src="{{ asset('adminto/assets/js/vendor.min.js') }}"></script>

        <!-- knob plugin -->
        <script src="{{ asset('adminto/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('adminto/assets/libs/morris-js/morris.min.js') }}"></script>
        <script src="{{ asset('adminto/assets/libs/raphael/raphael.min.js') }}"></script>

        <!-- Dashboard init js-->
        <script src="{{ asset('adminto/assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('adminto/assets/js/app.min.js') }}"></script>

        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        @yield('scripts')

    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 May 2021 09:16:54 GMT -->
</html>
