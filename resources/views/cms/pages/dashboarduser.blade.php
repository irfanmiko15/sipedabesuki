@extends('cms.index')
@section('judul')
SIBESTRO - Dashboard
@endsection
@section('dashboard-user')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <center><h4><div id="clock"></div></h4></center>
      <center><h3>	<!-- Menampilkan Hari, Bulan dan Tahun -->
		<script type='text/javascript'>
			<!--
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
			//-->
		</script>
 </h3></center>
     
      @foreach($user as $u)
    
      @if($u->seleksi_berkas==null)
      
      <div class="card">
      <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bell"></i>
                  Pengumuman
                </h3> 
      </div>
      <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  Belum ada pengumuman
                </div>
              </div>
      </div>
      @elseif($u->seleksi_berkas=='Lolos' && $u->seleksi_akhir==null)
      <div class="card">
      <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bell"></i>
                  Pengumuman
                </h3> 
      </div>
      <div class="card-body">
                <div class="tab-content p-0">
                <div class="small-box bg-success">
              <div class="inner">
                <h4>Selamat Anda Telah Lolos Seleksi Berkas</h4>
               
                <table width="100%" style="padding:4px;">
                    <tr>
                    <td><b>Jadwal Wawancara :</b></td>
                        <tr>
                            <td width="24%">Tanggal Wawancara</td>
                            <td width="2%">:</td>
                            @if($u->tanggal_wawancara==null)

                            @else
                            <td width="60%">{{date('d M Y',strtotime($u->tanggal_wawancara))}} </td>
                            @endif
                        </tr>
                        <tr>
                            <td width="24%">Jam Wawancara</td>
                            <td width="2%">:</td>
                            @if($u->jam_wawancara==null)

                            @else
                            <td width="60%">{{$u->jam_wawancara}} WIB</td>
                            @endif 
                        </tr>
                        <tr>
                            <td width="24%">Penanggung Jawab</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$u->pic_wawancara}}</td>
                        </tr>
                                           </tr>
                    <tbody>
                        
                    </tbody>
                </table>

               
             
              </div>
              
              
            </div>
                </div>
              </div>
      </div>
      @elseif($u->seleksi_berkas=='Lolos' && $u->seleksi_akhir=='Lolos')
      <div class="card">
      <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bell"></i>
                  Pengumuman
                </h3> 
      </div>
      <div class="card-body">
                <div class="tab-content p-0">
                <div class="small-box bg-success">
              <div class="inner">
                <h4>Selamat Anda Telah Lolos Seleksi Beasiswa Petrokimia Gresik tahun 2021</h4>
               
               <p>Untuk Informasi Selanjutnya akan ada petugas yang menghubungi anda melalui nomor telfon yang anda daftarkan</p>
              </div>
              
              
            </div>
                </div>
              </div>
      </div>
      @else
      <div class="card">
      <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bell"></i>
                  Pengumuman
                </h3> 
      </div>
      <div class="card-body">
                <div class="tab-content p-0">
                <div class="small-box bg-danger">
              <div class="inner">
                <h4>Mohon Maaf, Anda Tidak Lolos Seleksi Beasiswa Petrokimia Gresik tahun 2021, Tetap Semangat!</h4>
               
                 </div>
              
              
            </div>
                </div>
              </div>
      </div>
@endif
    @endforeach

    <div class="card">
        <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-file"></i>
                    Download Berkas
                  </h3> 
        </div>  
        <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <ol>
                      @foreach($berkas as $b)
                      <li>
                      <div class="row">
                      <div class="col-md-5"> {{$b->jenis}}</div>
                      <div class="col-md-5"><a href="{{route('download-berkas',$b->id)}}">Download</a></div>
                      </div>
                      @endforeach
                    </ol>
                  </div>
        </div>
      </div>
    </section>
    
		<script type="text/javascript">
		<!--
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }
 
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		//-->
		</script>
 
 
    @endsection