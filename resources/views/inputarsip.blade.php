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
        <div class="card ">
          <div class="card-header">
            <h4 class="card-title">Input Arsip Data</h4>
          </div>
          <div class="card-body">
            @if(session('status'))
            <div class='alert alert-success'>
              {{session('status')}}
            </div>
            @endif
            <form method="POST" action="arsip" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label>Nomor Surat</label>
                <input type="text" name="nomor_surat" class="form-control" required="">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori" required="">
                  <option value="Undangan">Undangan</option>
                  <option value="Pengumuman">Pengumuman</option>
                  <option value="Nota Dinas">Nota Dinas</option>
                  <option value="Pemberitahuan">Pemberitahuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" required="">
              </div>
              <div class="form-group">
                <label>Tanggal Arsip</label>
                <input type="date" name="tanggal_arsip" class="form-control" required="">
              </div>
              <div class="form-group">
                <label>File Surat (PDF)</label>
              </div>
              <input type="file" class="form-control" name="surat" accept="application/pdf" required="">
              <div class="form-group">
                <button class="btn btn-primary">Save</button>
                <a href="arsip" class="btn btn-primary btn-block">Back</a>
              </div>
            </form>
            
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