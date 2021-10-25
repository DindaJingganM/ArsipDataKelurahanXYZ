@extends('layouts.app')

@section('content')

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
                  <th>Nomor Surat</th>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Waktu Pengarsipan</th>
                  <th>File Surat</th>
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
                  <td>{{$item['tanggal_arsip']}}</td>
                  <td>{{$item['surat']}}</td>
                  <td>
                    <a href="lihat">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                      </svg>
                    </a>
                  </td>
                  <td>
                    <form action="{{url('arsip')}}/{{$item->id}}" method="post" class="d-inline">
                      @csrf
                      {{ method_field('DELETE')}}
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin akan melakukan delete?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg>
                      </button>
                    </form>
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