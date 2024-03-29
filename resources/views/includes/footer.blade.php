@if (Auth::check())
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->

    <!-- Right Sidebar -->

    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-body rightbar">
            <div class="right-bar">
                <div data-simplebar class="h-100">
                    <div class="rightbar-title px-3 py-4">
                        <a href="javascript:void(0);" class="right-bar-toggle float-end" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                            <i class="mdi mdi-close noti-icon"></i>
                        </a>
                        <h5 class="m-0">Settings</h5>
                    </div>

                    <!-- Settings -->
                    <hr class="mt-0" />
                    <h6 class="text-center mb-0">Choose Layouts</h6>

                    <div class="p-4">
                        <div class="mb-2">
                            <img src="{{ asset('admin/assets/images/layouts/layout-1.jpg') }}"
                                class="img-fluid img-thumbnail" alt="">
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch"
                                checked />
                            <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                        </div>

                        <div class="mb-2">
                            <img src="{{ asset('admin/assets/images/layouts/layout-2.jpg') }}"
                                class="img-fluid img-thumbnail" alt="">
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" />
                            <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                        </div>

                        <div class="mb-2">
                            <img src="{{ asset('admin/assets/images/layouts/layout-3.jpg') }}"
                                class="img-fluid img-thumbnail" alt="">
                        </div>
                        <div class="form-check form-switch mb-5">
                            <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                                data-appStyle="assets/css/app-rtl.min.css" />
                            <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                        </div>

                    </div>

                </div>
                <!-- end slimscroll-menu-->
            </div>
        </div>

    </div>


    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->

    {{-- <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
     --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- plugin js -->
    <script src="{{ asset('admin/assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/@fullcalendar/core/main.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/@fullcalendar/bootstrap/main.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/@fullcalendar/daygrid/main.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/@fullcalendar/timegrid/main.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/@fullcalendar/interaction/main.min.js') }}"></script>

    <!-- Calendar init -->
    <script src="{{ asset('admin/assets/js/pages/calendar.init.js') }}"></script>
    <!-- apexcharts -->
    <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script src="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
    </script>

    <script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                dom: 'Bfrtip',
                responsive: false,
                pageLength: 25,
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });
        });
        $(document).ready(function() {
            $('#tablee_id').DataTable({
                dom: 'Bfrtip',
                responsive: false,
                pageLength: 25,
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });
        });
        $(document).ready(function() {
            $('#tableee_id').DataTable({
                dom: 'Bfrtip',
                responsive: false,
                pageLength: 25,
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });
        });
        $(document).ready(function() {
            $('#tableeee_id').DataTable({
                dom: 'Bfrtip',
                responsive: false,
                pageLength: 25,
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });
        });
        $(document).ready(function() {
            $('#tableeeee_id').DataTable({
                dom: 'Bfrtip',
                responsive: false,
                pageLength: 25,
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });
        });
        $(document).ready(function() {
            $('#tableeeeee_id').DataTable({
                dom: 'Bfrtip',
                responsive: false,
                pageLength: 25,
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        $(document).ready(function() {
            // Function to initialize Select2 and set focus
            function initializeSelect2() {
                $('.js-example-basic').select2({
                    dropdownParent: $('#event-modal')
                });

                setTimeout(function() {
                    $('.select2-container--open .select2-search--dropdown .select2-search__field').first()
                        .focus();
                }, 500); // Adjust the timeout as needed
            }

            // Initialize Select2 when the modal is opened
            $('#event-modal').on('shown.bs.modal', function() {
                console.log("Modal shown, initializing Select2");
                initializeSelect2();
            });
        });
    </script>

    </body>

    </html>
@endif
