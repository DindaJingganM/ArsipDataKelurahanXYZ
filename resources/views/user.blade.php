@extends('layouts.app')

@section('content')

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-normal">
            MENU
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="home">
              <i class="tim-icons icon-atom"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="arsip">
              <i class="tim-icons icon-atom"></i>
              <p>Arsip</p>
            </a>
          </li>
          <li>
            <a href="user">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col col-lg-4 col-md-4">
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <div class="card-body">
                      <img src="../assets/img/jg.jpeg" alt="profil" class="profile-user-img img-responsive img-circle">
                    </div>
                  </div>
                  <h3 class="profile-username text-center">Dinda Jinggan M</h3>
                  <p class="text-muted text-center">Dibuat pada tanggal : 23 Oktober 2021</p>
                  <hr>
                  <strong>
                    <i class="fas fa-map-marker mr-2"></i>
                    NIM
                  </strong>
                  <p class="text-muted">
                    1931710077
                  </p>
                  <hr>
                  <strong>
                    <i class="fas fa-envelope mr-2"></i>
                    Email
                  </strong>
                  <p class="text-muted">
                    dindajinggan20@gmail.com
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright">
          ©
          <script>
            document.write(new Date().getFullYear())
          </script> <i class="tim-icons icon-heart-2"> </i> by
          <a>Dinda Jinggan</a>
        </div>
      </div>
    </footer>
  </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
          $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            $('.fixed-plugin a').click(function(event) {
              if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                  event.stopPropagation();
                } else if (window.event) {
                  window.event.cancelBubble = true;
                }
              }
            });
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);
          });
        })
  </script>

</body>

</html>

@endsection