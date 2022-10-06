<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $titlePage }} - Admin Formulir Digital Registrasi Internet</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ URL::to('library/staradmin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::to('library/staradmin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('library/staradmin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('library/staradmin/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet"
        href="{{ URL::to('library/staradmin/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('library/staradmin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ URL::to('library/staradmin/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ URL::to('library/staradmin/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <img src="{{ URL::to('library/staradmin/images/logo-nusanet-transparent.png') }}"
                                    alt="logo" style="width: 300px; height: 100px;" class="mb-3">
                                <p class="fw-bold h4">Admin Formulir Registrasi Internet</p>
                            </div>
                            @yield('auth-wrapper')
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ URL::to('library/staradmin/vendors/js/vendor.bundle.base.js') }}../../"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ URL::to('library/staradmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}../../">
    </script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ URL::to('library/staradmin/js/off-canvas.js') }}"></script>
    <script src="{{ URL::to('library/staradmin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ URL::to('library/staradmin/js/template.js') }}"></script>
    <script src="{{ URL::to('library/staradmin/js/settings.js') }}"></script>
    <script src="{{ URL::to('library/staradmin/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>
