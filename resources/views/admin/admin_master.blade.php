<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <title>Sunny Admin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/skin_color.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">

        @include('admin.body.header')

        <!-- Left side column. contains the logo and sidebar -->
        @include('admin.body.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('admin')
        </div>
        <!-- /.content-wrapper -->
        @include('admin.body.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar">

            <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i
                        class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>
            <!-- Create the tabs -->
            <ul class="nav nav-tabs control-sidebar-tabs">
                <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active">Chat</a></li>
                <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <div class="flexbox">
                        <a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>
                        <p>Users</p>
                        <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                    </div>
                    <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                        <input type="text" name="s" placeholder="Search" class="w-p100">
                    </div>
                    <div class="media-list media-list-hover mt-20">
                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="../images/avatar/1.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="../images/avatar/2.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="../images/avatar/3.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="../images/avatar/4.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="../images/avatar/1.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="../images/avatar/2.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="../images/avatar/3.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="../images/avatar/4.jpg" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <div class="flexbox">
                        <a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>
                        <p>Todo List</p>
                        <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                    </div>
                    <ul class="todo-list mt-20">
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                            <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                            <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                            <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                            <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                            <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                            <span class="text-line">Maecenas scelerisque</span>
                            <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                            <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                            <span class="text-line">Vivamus nec orci</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                            <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                            <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                            <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                            <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var link = $(this).attr('href')
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Ushbu Brendni o`chirmoqchimisiz?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ha, O`chiraman!',
                    cancelButtonText: 'Yo`q orqaga!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                })
            })
        })
    </script>
    <!-- Vendor JS -->
    {{-- <script src="{{ asset('backend/assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('backend/assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

    <script src="{{ asset('backend/assets/vendor_components/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/data-table.js') }}"></script> --}}

    <!-- Vendor JS -->
    <script
        src="{{ asset('backend/assets/icons/feather-icons/feather.min.js"></script>	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js') }}">
    </script>
    <script src="{{ asset('backend/assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>
    <script
        src="{{ asset('backend/assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/vendor_components/select2/dist/js/select2.full.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
    </script>
    <script
        src="{{ asset('backend/assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor_plugins/iCheck/icheck.min.js') }}"></script>
    <script src="js/pages/advanced-form-element.js"></script>
    {{-- ck editors --}}
    <script src="{{ asset('backend/assets/icons/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>
    <script src="{{ asset('backend/assets/js/pages/editor.js')}}"></script>

    <!-- Sunny AdApp -->
    <script src="{{ asset('backend/assets/js/template.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/dashboard.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}")
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}")
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}")
                    break;

                case 'danger':
                    toastr.danger("{{ Session::get('message') }}")
                    break;

            }
        @endif
    </script>
</body>

</html>
