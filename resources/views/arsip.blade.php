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
                <h4 class="card-title">Arsip Data</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Nomor Surat</th>
                        <th>
                          Kategori</th>
                        <th>
                          Judul</th>
                        <th>
                          Waktu Pengarsipan</th>
                        <th>
                          Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $item)
                      <tr>
                        <td>{{$item['nomor_surat']}}</td>
                        <td>{{$item['kategori']}}</td>
                        <td>{{$item['judul']}}</td>
                        <td >{{$item['tanggal_arsip']}}</td>
                        <td>
                        <form action="" method="post">
                                    @csrf
                                    {{ method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin akan melakukan delete?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </button>
                                    </form>
                                  </td>
                                  <td>
                                    <form action="" method="post">
                                    @csrf
                                    {{ method_field('DOWNLOAD')}}
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Anda Yakin akan melakukan mengunduhnya?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                      </svg>
                                        </button>
                                    </form>
                                  </td>
                                  <td>
                                    <form action="" method="post">
                                    @csrf
                                    {{ method_field('PREVIEW')}}
                                        <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Anda Yakin akan melakukan mengunduhnya?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                      </svg>
                                        </button>
                                    </form>
                                  </td>
                                  
                        </td>
                      </tr>
                      
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <hr>
                  <a href="inputarsip" class="btn btn-primary btn-block">Input Arsip</a>
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
            </script> <i class="tim-icons icon-heart-2" > </i> by
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
  </script>

</body>

</html>
@endsection