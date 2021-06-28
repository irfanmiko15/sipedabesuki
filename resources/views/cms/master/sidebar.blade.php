<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIBESTRO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(Auth::user()->role=='super admin')
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{request()->is('home*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('master-berkas')}}" class="nav-link {{request()->is('master-berkas*')?'active':'' }} ">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Master Berkas
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('master-jurusan')}}" class="nav-link {{request()->is('master-jurusan*')?'active':'' }} ">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Master Jurusan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('master-sekolah')}}" class="nav-link {{request()->is('master-sekolah*')?'active':'' }} ">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Master Sekolah
                
              </p>
            </a>
          </li>
          
          <li class="nav-item {{request()->is('seleksi-administrasi-s1*')||request()->is('seleksi-administrasi-sma*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('seleksi-administrasi-s1*')||request()->is('seleksi-administrasi-sma*')?'active':'' }}">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Seleksi Administrasi
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('seleksi-administrasi-s1')}}" class="nav-link {{request()->is('seleksi-administrasi-s1*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seleksi-administrasi-sma')}}" class="nav-link {{request()->is('seleksi-administrasi-sma*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{request()->is('seleksi-wawancara-s1*')||request()->is('seleksi-wawancara-sma*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('seleksi-wawancara-s1*')||request()->is('seleksi-wawancara-sma*')?'active':'' }}">
              <i class="nav-icon fas fa-volume-up"></i>
              <p>
                Seleksi Wawancara
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('seleksi-wawancara-s1')}}" class="nav-link {{request()->is('seleksi-wawancara-s1*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seleksi-wawancara-sma')}}" class="nav-link {{request()->is('seleksi-wawancara-sma*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{request()->is('seleksi-akhir-s1*')||request()->is('seleksi-akhir-sma*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('seleksi-akhir-s1*')||request()->is('seleksi-akhir-sma*')?'active':'' }}">
              <i class="nav-icon fas fa-flag-checkered"></i>
              <p>
                Seleksi Akhir
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('seleksi-akhir-s1')}}" class="nav-link {{request()->is('seleksi-akhir-s1*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seleksi-akhir-sma')}}" class="nav-link {{request()->is('seleksi-akhir-sma*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('master-user-sma*')||request()->is('master-user-s1*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('master-user-sma*')||request()->is('master-user-s1*')?'active':'' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master User
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('master-user-sma')}}" class="nav-link {{request()->is('master-user-sma*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('master-user-s1')}}" class="nav-link {{request()->is('master-user-s1*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S1</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('orang-tua*')||request()->is('saudara*')||request()->is('tanggungan*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('orang-tua*')||request()->is('saudara*')||request()->is('tanggungan*')?'active':'' }}">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Data Keluarga
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('orang-tua')}}" class="nav-link {{request()->is('orang-tua*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orang Tua</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('saudara')}}" class="nav-link {{request()->is('saudara*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Saudara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tanggungan')}}" class="nav-link {{request()->is('tanggungan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tanggungan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('prestasi')}}" class="nav-link {{request()->is('prestasi*')?'active':'' }} ">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Prestasi
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('riwayat-pendidikan')}}" class="nav-link {{request()->is('riwayat-pendidikan*')?'active':'' }} ">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Riwayat Pendidikan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pendidikan-s1')}}" class="nav-link {{request()->is('pendidikan-s1*')?'active':'' }} ">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Pendidikan S1
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('data-diri')}}" class="nav-link {{request()->is('data-diri*')?'active':'' }} ">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Data Diri
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('data-rumah')}}" class="nav-link {{request()->is('data-rumah*')?'active':'' }} ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Data Rumah
                
              </p>
            </a>
          </li>
          
          <li class="nav-item {{request()->is('nilai-rapor*')||request()->is('nilai-us*')||request()->is('nilai-un*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('nilai-rapor*')||request()->is('nilai-us*')||request()->is('nilai-un*')?'active':'' }}">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Nilai
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('nilai-rapor')}}" class="nav-link {{request()->is('nilai-rapor*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Rapor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nilai-un')}}" class="nav-link {{request()->is('nilai-un*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai UN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nilai-us')}}" class="nav-link {{request()->is('nilai-us*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai US</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('ukt*')||request()->is('bukti-penerimaan*')||request()->is('identitas*')||request()->is('foto-rumah*')||request()->is('foto-diri*')||request()->is('sktm*')||request()->is('tagihan*')||request()->is('bansos*')||request()->is('ijazah-skhu*')||request()->is('penghasilan*')||request()->is('rapor*')||request()->is('surat-pernyataan*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('ukt*')||request()->is('bukti-penerimaan*')||request()->is('identitas*')||request()->is('foto-rumah*')||request()->is('sktm*')||request()->is('tagihan*')||request()->is('bansos*')||request()->is('ijazah-skhu*')||request()->is('penghasilan*')||request()->is('rapor*')||request()->is('surat-pernyataan*')?'active':'' }}">
              <i class="nav-icon fas fa-file-upload"></i>
              <p>
                Upload Berkas
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('bukti-penerimaan')}}" class="nav-link {{request()->is('bukti-penerimaan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bukti Penerimaan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('ukt')}}" class="nav-link {{request()->is('ukt*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UKT</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('identitas')}}" class="nav-link {{request()->is('identitas*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Identitas</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('foto-rumah')}}" class="nav-link {{request()->is('foto-rumah*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto Rumah</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('foto-diri')}}" class="nav-link {{request()->is('foto-diri*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto Diri</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('sktm')}}" class="nav-link {{request()->is('sktm*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SKTM</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('tagihan')}}" class="nav-link {{request()->is('tagihan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tagihan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('bansos')}}" class="nav-link {{request()->is('bansos*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bansos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('ijazah-skhu')}}" class="nav-link {{request()->is('ijazah-skhu*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ijazah/SKHU</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('penghasilan')}}" class="nav-link {{request()->is('penghasilan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penghasilan Orang Tua</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('rapor')}}" class="nav-link {{request()->is('rapor*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rapor</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('surat-pernyataan')}}" class="nav-link {{request()->is('surat-pernyataan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Pernyataan</p>
                </a>
            </li>
            </ul>
          </li>

          @elseif(Auth::user()->role=='admin')
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{request()->is('dashboard*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('master-berkas')}}" class="nav-link {{request()->is('master-berkas*')?'active':'' }} ">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Master Berkas
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('master-jurusan')}}" class="nav-link {{request()->is('master-jurusan*')?'active':'' }} ">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Master Jurusan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('master-sekolah')}}" class="nav-link {{request()->is('master-sekolah*')?'active':'' }} ">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Master Sekolah
                
              </p>
            </a>
          </li>
          <li class="nav-item {{request()->is('master-user-sma*')||request()->is('master-user-s1*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('master-user-sma*')||request()->is('master-user-s1*')?'active':'' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master User
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{route('master-user-s1')}}" class="nav-link {{request()->is('master-user-s1*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('master-user-sma')}}" class="nav-link {{request()->is('master-user-sma*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('seleksi-administrasi-s1*')||request()->is('seleksi-administrasi-sma*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('seleksi-administrasi-s1*')||request()->is('seleksi-administrasi-sma*')?'active':'' }}">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Seleksi Administrasi
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('seleksi-administrasi-s1')}}" class="nav-link {{request()->is('seleksi-administrasi-s1*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seleksi-administrasi-sma')}}" class="nav-link {{request()->is('seleksi-administrasi-sma*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{request()->is('seleksi-wawancara-s1*')||request()->is('seleksi-wawancara-sma*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('seleksi-wawancara-s1*')||request()->is('seleksi-wawancara-sma*')?'active':'' }}">
              <i class="nav-icon fas fa-volume-up"></i>
              <p>
                Seleksi Wawancara
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('seleksi-wawancara-s1')}}" class="nav-link {{request()->is('seleksi-wawancara-s1*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seleksi-wawancara-sma')}}" class="nav-link {{request()->is('seleksi-wawancara-sma*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{request()->is('seleksi-akhir-s1*')||request()->is('seleksi-akhir-sma*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('seleksi-akhir-s1*')||request()->is('seleksi-akhir-sma*')?'active':'' }}">
              <i class="nav-icon fas fa-flag-checkered"></i>
              <p>
                Seleksi Akhir
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('seleksi-akhir-s1')}}" class="nav-link {{request()->is('seleksi-akhir-s1*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seleksi-akhir-sma')}}" class="nav-link {{request()->is('seleksi-akhir-sma*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
            </ul>
          </li>
          
          @elseif(Auth::user()->role=='S1')
          <li class="nav-item">
            <a href="{{route('dashboard-user')}}" class="nav-link {{request()->is('dashboard-user*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('data-diri')}}" class="nav-link {{request()->is('data-diri*')?'active':'' }} ">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Data Diri
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('riwayat-pendidikan')}}" class="nav-link {{request()->is('riwayat-pendidikan*')?'active':'' }} ">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Riwayat Pendidikan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pendidikan-s1')}}" class="nav-link {{request()->is('pendidikan-s1*')?'active':'' }} ">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Pendidikan S1
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('prestasi')}}" class="nav-link {{request()->is('prestasi*')?'active':'' }} ">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Prestasi
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('data-rumah')}}" class="nav-link {{request()->is('data-rumah*')?'active':'' }} ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Data Rumah
                
              </p>
            </a>
          </li>
          
          <li class="nav-item {{request()->is('orang-tua*')||request()->is('saudara*')||request()->is('tanggungan*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('orang-tua*')||request()->is('saudara*')||request()->is('tanggungan*')?'active':'' }}">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Data Keluarga
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('orang-tua')}}" class="nav-link {{request()->is('orang-tua*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orang Tua</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('saudara')}}" class="nav-link {{request()->is('saudara*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Saudara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tanggungan')}}" class="nav-link {{request()->is('tanggungan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tanggungan</p>
                </a>
              </li>
            </ul>
          </li>
         
          
          <li class="nav-item {{request()->is('nilai-rapor*')||request()->is('nilai-us*')||request()->is('nilai-un*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('nilai-rapor*')||request()->is('nilai-us*')||request()->is('nilai-un*')?'active':'' }}">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Nilai
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('nilai-rapor')}}" class="nav-link {{request()->is('nilai-rapor*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Rapor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nilai-un')}}" class="nav-link {{request()->is('nilai-un*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai UN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nilai-us')}}" class="nav-link {{request()->is('nilai-us*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai US</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('ukt*')||request()->is('bukti-penerimaan*')||request()->is('identitas*')||request()->is('foto-rumah*')||request()->is('foto-diri*')||request()->is('sktm*')||request()->is('tagihan*')||request()->is('bansos*')||request()->is('ijazah-skhu*')||request()->is('penghasilan*')||request()->is('rapor*')||request()->is('surat-pernyataan*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('ukt*')||request()->is('bukti-penerimaan*')||request()->is('identitas*')||request()->is('foto-rumah*')||request()->is('sktm*')||request()->is('tagihan*')||request()->is('bansos*')||request()->is('ijazah-skhu*')||request()->is('penghasilan*')||request()->is('rapor*')||request()->is('surat-pernyataan*')?'active':'' }}">
              <i class="nav-icon fas fa-file-upload"></i>
              <p>
                Upload Berkas
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('bukti-penerimaan')}}" class="nav-link {{request()->is('bukti-penerimaan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bukti Penerimaan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('ukt')}}" class="nav-link {{request()->is('ukt*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UKT</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('identitas')}}" class="nav-link {{request()->is('identitas*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Identitas</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('foto-rumah')}}" class="nav-link {{request()->is('foto-rumah*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto Rumah</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('foto-diri')}}" class="nav-link {{request()->is('foto-diri*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto Diri</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('sktm')}}" class="nav-link {{request()->is('sktm*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SKTM</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('tagihan')}}" class="nav-link {{request()->is('tagihan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tagihan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('bansos')}}" class="nav-link {{request()->is('bansos*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bansos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('ijazah-skhu')}}" class="nav-link {{request()->is('ijazah-skhu*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ijazah/SKHU</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('penghasilan')}}" class="nav-link {{request()->is('penghasilan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penghasilan Orang Tua</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('rapor')}}" class="nav-link {{request()->is('rapor*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rapor</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('surat-pernyataan')}}" class="nav-link {{request()->is('surat-pernyataan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Pernyataan</p>
                </a>
            </li>
            </ul>
          </li>


          @else
          <li class="nav-item">
            <a href="{{route('dashboard-user')}}" class="nav-link {{request()->is('dashboard-user*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('data-diri')}}" class="nav-link {{request()->is('data-diri*')?'active':'' }} ">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Data Diri
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('riwayat-pendidikan')}}" class="nav-link {{request()->is('riwayat-pendidikan*')?'active':'' }} ">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Riwayat Pendidikan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('prestasi')}}" class="nav-link {{request()->is('prestasi*')?'active':'' }} ">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Prestasi
                
              </p>
            </a>
          </li>
          
         
          <li class="nav-item">
            <a href="{{route('data-rumah')}}" class="nav-link {{request()->is('data-rumah*')?'active':'' }} ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Data Rumah
                
              </p>
            </a>
          </li>
          
          <li class="nav-item {{request()->is('orang-tua*')||request()->is('saudara*')||request()->is('tanggungan*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('orang-tua*')||request()->is('saudara*')||request()->is('tanggungan*')?'active':'' }}">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Data Keluarga
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('orang-tua')}}" class="nav-link {{request()->is('orang-tua*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orang Tua</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('saudara')}}" class="nav-link {{request()->is('saudara*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Saudara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tanggungan')}}" class="nav-link {{request()->is('tanggungan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tanggungan</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item {{request()->is('nilai-rapor*')||request()->is('nilai-us*')||request()->is('nilai-un*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('nilai-rapor*')||request()->is('nilai-us*')||request()->is('nilai-un*')?'active':'' }}">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Nilai
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('nilai-rapor')}}" class="nav-link {{request()->is('nilai-rapor*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Rapor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nilai-un')}}" class="nav-link {{request()->is('nilai-un*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai UN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nilai-us')}}" class="nav-link {{request()->is('nilai-us*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai US</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('ukt*')||request()->is('bukti-penerimaan*')||request()->is('identitas*')||request()->is('foto-rumah*')||request()->is('foto-diri*')||request()->is('sktm*')||request()->is('tagihan*')||request()->is('bansos*')||request()->is('ijazah-skhu*')||request()->is('penghasilan*')||request()->is('rapor*')||request()->is('surat-pernyataan*')?'menu-open':'' }}">
          <a href="#" class="nav-link {{request()->is('ukt*')||request()->is('bukti-penerimaan*')||request()->is('identitas*')||request()->is('foto-rumah*')||request()->is('sktm*')||request()->is('tagihan*')||request()->is('bansos*')||request()->is('ijazah-skhu*')||request()->is('penghasilan*')||request()->is('rapor*')||request()->is('surat-pernyataan*')?'active':'' }}">
              <i class="nav-icon fas fa-file-upload"></i>
              <p>
                Upload Berkas
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('bukti-penerimaan')}}" class="nav-link {{request()->is('bukti-penerimaan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bukti Penerimaan</p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{route('identitas')}}" class="nav-link {{request()->is('identitas*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Identitas</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('foto-rumah')}}" class="nav-link {{request()->is('foto-rumah*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto Rumah</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('foto-diri')}}" class="nav-link {{request()->is('foto-diri*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto Diri</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('sktm')}}" class="nav-link {{request()->is('sktm*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SKTM</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('tagihan')}}" class="nav-link {{request()->is('tagihan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tagihan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('bansos')}}" class="nav-link {{request()->is('bansos*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bansos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('ijazah-skhu')}}" class="nav-link {{request()->is('ijazah-skhu*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ijazah/SKHU</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('penghasilan')}}" class="nav-link {{request()->is('penghasilan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penghasilan Orang Tua</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('rapor')}}" class="nav-link {{request()->is('rapor*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rapor</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('surat-pernyataan')}}" class="nav-link {{request()->is('surat-pernyataan*')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Pernyataan</p>
                </a>
            </li>
            </ul>
          </li>

          @endif
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>