<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller d-flex">
        <!-- partial:./partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item sidebar-category">
                    <p>Navigasi</p>
                    <span></span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('dashboard') }}">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Beranda</span>
                        {{-- <div class="badge badge-info badge-pill">3</div> --}}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('karyawan') }}">
                        <i class="mdi mdi-account-multiple  menu-icon"></i>
                        <span class="menu-title">Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('jabatan') }}">
                        <i class="mdi mdi-account-card-details  menu-icon"></i>
                        <span class="menu-title">Absensi</span>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('penggajian') }}">
                        <i class="mdi mdi-cash menu-icon"></i>
                        <span class="menu-title">Penggajian</span>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('riwayat') }}">
                        <i class="mdi mdi-book-multiple menu-icon"></i>
                        <span class="menu-title">Riwayat Absensi</span>

                    </a>
                </li>

                <li class="nav-item">

                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link" href="route('logout')"
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                        <i class="mdi mdi-logout-variant menu-icon"></i>
                        <span class="menu-title">Logout</span>

                    </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="navbar-brand-wrapper">

                        <a class="navbar-brand brand-logo" href="index.html">
                            <img src="../../images/logoaja.png" alt="logo" style="width:50px; margin-left:-20px;">
                        </a>

                    </div>
                    <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1" style="margin-left:-10px;">CV. ANUGRAH
                        ABADI | Hai, {{ Auth::user()->nama_karyawan }}
                    </h4>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item">
                            <h4 class="mb-0 font-weight-bold d-none d-xl-block">
                                <div id="DisplayClock" class="clock" onload="showTime()"></div>
                            </h4>
                        </li>

                        {{-- <li class="nav-item dropdown mr-1">
                            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                                id="messageDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-calendar mx-0"></i>
                                <span class="count bg-info">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="messageDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('images/faces/face4.jpg') }}" alt="image"
                                            class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            The meeting is cancelled
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('images/faces/face2.jpg') }}" alt="image"
                                            class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            New product launch
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('images/faces/face3.jpg') }}" alt="image"
                                            class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            Upcoming board meeting
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-2">
                            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                                id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-email-open mx-0"></i>
                                <span class="count bg-danger">1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-information mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-settings mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Settings</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-account-box mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li> --}}
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
                {{-- <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here..."
                                    aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                id="profileDropdown">
                                <img src="{{ asset('images/faces/face5.jpg') }}" alt="profile" />
                                <span class="nav-profile-name">Eleanor Richardson</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link icon-link">
                                <i class="mdi mdi-plus-circle-outline"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link icon-link">
                                <i class="mdi mdi-web"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link icon-link">
                                <i class="mdi mdi-clock-outline"></i>
                            </a>
                        </li>
                    </ul>
                </div> --}}
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:./partials/_footer.html -->
                <footer class="footer">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                    bootstrapdash.com 2020</span>
                                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed
                                    By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
                                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                        href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                                        templates</a> from Bootstrapdash.com</span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->

    <script>
        function showTime() {
            var date = new Date();
            var x = date.getDay();
            var d = date.getDate();
            var b = date.getMonth() + 1;
            var y = date.getFullYear();
            var h = date.getHours();
            var m = date.getMinutes();
            var s = date.getSeconds();
            var session = "PM";

            switch (x) {
                case 0:
                    x = "Minggu";
                    break;
                case 1:
                    x = "Senin";
                    break;
                case 2:
                    x = "Selasa";
                    break;
                case 3:
                    x = "Rabu";
                    break;
                case 4:
                    x = "Kamis";
                    break;
                case 5:
                    x = "Jumat";
                    break;
                case 6:
                    x = "Sabtu";
                    break;
            }

            switch (b) {
                case 1:
                    b = "Januari";
                    break;
                case 2:
                    b = "Februari";
                    break;
                case 3:
                    b = "Maret";
                    break;
                case 4:
                    b = "April";
                    break;
                case 5:
                    b = "Mei";
                    break;
                case 6:
                    b = "Juni";
                    break;
                case 7:
                    b = "Juli";
                    break;
                case 8:
                    b = "Agustus";
                    break;
                case 9:
                    b = "September";
                    break;
                case 10:
                    b = "Oktober";
                    break;
                case 11:
                    b = "November";
                    break;
                case 12:
                    b = "Desember";
                    break;

            }

            if (h == 0) {
                h = 12;
                session = "AM";
            }
            if (h > 12) {
                h = h - 12;
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = x + ", " + d + " " + b + " " + y + " | " + h + ":" + m + ":" + s + " " + session;

            document.getElementById("DisplayClock").innerText = time;
            document.getElementById("DisplayClock").textContent = time;

            setTimeout(showTime, 1000);
        }

        showTime();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.hapus_jabatan').click(function(event) {
            var form = $(this).closest("form");
            var nama = $(this).data("nama");
            event.preventDefault();
            swal({
                    title: `Apakah Anda yakin ingin menghapus data Jabatan ${nama} ?`,
                    text: `Dengan menekan tombol OK, maka data Jabatan ${nama} beserta data Karyawan yang punya Jabatan ${nama} akan hilang selamanya!`,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            //     const swalWithBootstrapButtons = Swal.mixin({
            //         customClass: {
            //             confirmButton: "btn btn-success",
            //             cancelButton: "btn btn-danger"
            //         },
            //         buttonsStyling: false
            //     });
            //     swalWithBootstrapButtons.fire({
            //         title: `Apakah Anda yakin ingin menghapus data jabatan ${nama} ini?`,
            //         text: `Dengan menekan tombol hapus, maka data jabatan ${nama} akan hilang selamanya`,
            //         icon: "warning",
            //         showCancelButton: true,
            //         confirmButtonText: "Hapus",
            //         cancelButtonText: "Tidak",
            //         reverseButtons: true
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             swalWithBootstrapButtons.fire({
            //                 title: "Berhasil!",
            //                 text: `Data ${nama} telah dihapus`,
            //                 icon: "success",
            //             }).then(() => {
            //                 form.submit();
            //             });
            //         } else if (
            //             /* Read more about handling dismissals below */
            //             result.dismiss === Swal.DismissReason.cancel
            //         ) {
            //             swalWithBootstrapButtons.fire({
            //                 title: "Gagal",
            //                 text: `Data ${nama} tidak jadi dihapus` ,
            //                 icon: "error"
            //             });
            //         }
            //     });

        });

        // $('.tambah_jabatan').click(function(event) {
        //     event.preventDefault();
        //     swal.fire({
        //         icon: "success",
        //         title: "Jabatan berhasil ditambah",
        //         showConfirmButton: false,
        //         timer: 1500
        //     })
        // });

        $('.hapus_karyawan').click(function(event) {
            var form = $(this).closest("form");
            var nama = $(this).data("nama");
            event.preventDefault();
            swal({
                    title: `Apakah Anda yakin ingin menghapus Biodata ${nama} ?`,
                    text: `Dengan menekan tombol OK, maka Biodata ${nama} akan hilang selamanya!`,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });

    </script>

</body>

</html>
