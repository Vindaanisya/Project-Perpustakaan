
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-image: url(img/bokeh.jpg)">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
        @if(Auth::user()->avatar!="")
        <img src="{{ asset('img/'.Auth::user()->avatar)}}" style="height:45px" class="img-circle" alt="User Image">
        @else
        <img src="{{ asset('img/v.jpg')}}" style="height:45px" class="img-circle" alt="User Image">
        @endif
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" id="search" onkeyup="SearchFunction()" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul id="myMenu" class="sidebar-menu" data-widget="tree">
        <li class="header">>>>>>>>>>>>>>MENU<<<<<<<<<<<<<<</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="@yield('ac-dash')"><a href="/dashboard"><i class="fa fa-home"></i> <span>Home</span></a></li>
        @if(Auth::user()->level==1)
        <li class="treeview @yield('ac-ang')">
          <a href="#"><i class="fa fa-address-card"></i> <span>Anggota</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("anggota") }}'>Data anggota</a></li>
            <li><a href="{{ url('anggota/add') }}">Tambah Data Anggota</a></li>
          </ul>
        </li>
        <li class="treeview @yield('ac-buku')">
          <a href="#"><i class="fa fa-book"></i> <span>Buku</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("buku") }}'>Data Buku</a></li>
            <li><a href="{{ url('buku/add') }}">Tambah Data Buku</a></li>
            <li><a href="{{ url('koleksi') }}">Data Koleksi Buku</a></li>
          </ul>
        </li>


        <li class="treeview @yield('ac-kat')">
          <a href="#"><i class="fa fa-table"></i> <span>Kategori</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("kategori") }}'>Data Kategori</a></li>
            <li><a href="{{ url('kategori/add') }}">Tambah Kategori</a></li>
          </ul>
        </li>
        <li class="treeview @yield('ac-peng')">
          <a href="#"><i class="fa fa-pencil-square"></i> <span>Pengarang</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("pengarang") }}'>Data Pengarang</a></li>
            <li><a href="{{ url('pengarang/add') }}">Tambah Pengarang</a></li>
          </ul>
        </li>
        <li class="treeview @yield('ac-pen')">
          <a href="#"><i class="fa fa-tasks"></i> <span>Penerbit</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("penerbit") }}'>Data Penerbit</a></li>
            <li><a href="{{ url('penerbit/add') }}">Tambah Penerbit</a></li>
          </ul>
        </li>
        <li class="treeview @yield('ac-rak')">
          <a href="#"><i class="fa fa-bar-chart"></i> <span>Rak</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("rak") }}'>Data Rak</a></li>
            <li><a href="{{ url('rak/add') }}">Tambah Rak</a></li>
          </ul>
        </li>


        <li class="treeview @yield('ac-pin') ">
          <a href="#"><i class="fa fa-shopping-cart"></i> <span>Peminjaman Buku</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("trans/data_pinjam") }}'>Data Peminjaman</a></li>
            <li><a href='{{ url("trans/peminjaman") }}'>Peminjaman</a></li>
            <li><a href='{{ url("trans/pengembalian") }}'>Pengembalian</a></li>
          </ul>
        </li>
        <li class="treeview @yield('ac-user') ">
          <a href="#"><i class="fa fa-users"></i> <span>USER</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("user") }}'>User</a></li>
            <li><a href='{{ url("user/add") }}'>Tambah User</a></li>
          </ul>
        </li>

        @else
        <li class="treeview @yield('ac-buku')">
          <a href="#"><i class="fa fa-book"></i> <span>Buku</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("buku") }}'>Data Buku</a></li>
          </ul>
        </li>
        <li class="treeview @yield('ac-ang')">
          <a href="#"><i class="fa fa-user"></i> <span>Anggota</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("anggota") }}'>Data anggota</a></li>
          </ul>
        </li>
        <li class="treeview @yield('ac-pin') ">
          <a href="#"><i class="fa fa-shopping-cart"></i> <span>Pinjam Buku</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-double-down pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='{{ url("trans/data_pinjam") }}'>Data Pinjam</a></li>
            <li><a href='{{ url("trans/peminjaman") }}'>Pinjam</a></li>
            <li><a href='{{ url("trans/pengembalian") }}'>Pengembalian</a></li>
          </ul>
        </li>
        @endif
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>