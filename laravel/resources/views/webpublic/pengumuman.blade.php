@extends('layouts.app')

@section('pengumuman')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengumuman Penerimaan Beasiswa Petro 2021 </title>

  
</head>
<style>

.marquee {
    height: 40px;
    overflow: hidden;
    position: relative;
    background: #28A745;
    color: yellow;
    border: 0;
    padding: 0;
    border-spacing: 0;
    font-family: Tahoma,Verdana,Geneva,Arial;
    font-size: 14px;
    white-space: nowrap;
}
</style>
<body>

        <div class="container-fluid" style="padding-left:0px;padding-right:0px;">
        
		<div class="p-3 d-none d-sm-block">
			<div class="row">
				<div class="col-12 col-sm-5 d-none d-sm-block">
					<div class="text-center">
						<img src="{{asset('dist/img/logo-petro.png')}}" width="200px"class="img-fluid" alt="Logo Petrokimia">
					</div>
				</div>
				<div class="col-12 col-sm-7 d-none d-sm-block">
					<div class="text-center">
						<!-- <img src="images/sponsor.png" class="img-fluid" alt="Logo Sponsor"> -->
					</div>
				</div>
			</div>
		</div>

		<div class="p-1 d-block d-sm-none">
			<div class="row">
				<div class="col-12 d-block d-sm-none">
					<div class="row ml-1 mt-2">
						<div class="col-12">
							<div class="text-center">
								<img src="{{asset('dist/img/logo-petro.png')}}" width="200px" class="img-fluid" alt="Logo LTMPT">
							</div>
						</div>
						<div class="col-12">
							<div class="text-center">
								<!-- <img src="images/sponsor.png" class="img-fluid" alt="Logo Sponsor"> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm">
				<div class="header-bottom-line"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="marquee"></div>
			</div>
		</div>
	
            <div class="row">
                <div class="col-md-8 offset-md-2">
               

                <br>
                <br>    
                <div class="col-12">
							<div class="text-center">
                            <h4><b>Pengumuman Hasil Seleksi Beasiswa Petrokimia Gresik Tahun 2021</b></h4>
							</div>
				</div>
                <br>
                @if ($message = Session::get('error'))
                    <div class="alert bg-red     alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ $message}}
                    </div>                         
                @endif
                  
                    <div class="card card-block bg-faded mx-auto box-width">
			<div class="card-header" style="background-color:#c9c9c9">
				<center><strong>Masukkan email anda yang valid.</strong></center>
			</div>

			<div class="card-body">
            <form action="{{route('pencarian-pengumuman')}}"method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
				<div class="form-group">
					<label for="nopes">Masukan Email Anda</label>
					<input type="email" id="nopes" name="email" class="form-control no-spinners" tabindex="1" size="40" autocomplete="off">
					<small id="nopes-help" class="form-text text-muted">Masukkan email anda yang terdaftar.</small>
				</div>
				
				<button id="search" class="btn btn-success" style="width:100%" type="submit">Lihat Hasil</button>
				<br>
            </form>
			</div>
		</div>
                </div>
            </div>

            @if($result)
            @foreach($result as $r)
                @if($r->seleksi_akhir==null)
                <div></div>
                @elseif($r->seleksi_akhir=='Lolos')
            <div class="row mt-3">
                <div class="col-md-10 offset-md-1">
                <div class="tab-content p-0">
                <div class="small-box bg-success">
              <div class="inner">
                <h4>Selamat Anda Telah Lolos Seleksi Beasiswa Petrokimia Gresik tahun 2021!</h4>
               
                <table width="100%" style="padding:4px;">
                <tbody>
                    <td><b>Data Diri :</b></td>
                    <tr>
                            <td width="24%">Nama</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->name}}</td>
                           
                        </tr>
                        <tr>
                            <td width="24%">TTL</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->tempat_lahir}}, {{date('d M Y',strtotime($r->tanggal_lahir))}} </td>
                           
                        </tr>
                        <tr>
                            <td width="24%">No Telp</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->no_telp}}</td>
                           
                        </tr>
                        <tr>
                            <td width="24%">Asal Sekolah</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->nama_sekolah}}</td>
                           
                        </tr>
                        <tr>
                            <td width="24%">Alamat</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->alamat_user}}</td>
                        </tr>
                         
                    </tbody>
                    
                </table>

                <br>
                <br>
                <table>
                <p>Untuk Informasi Selanjutnya akan ada petugas yang menghubungi anda melalui nomor telfon yang anda daftarkan</p>
                </table>
              </div>
              
              
            </div>


                </div>
                </div>
            </div>

            @else
            <div class="row mt-3">
                <div class="col-md-10 offset-md-1">
                <div class="tab-content p-0">
                <div class="small-box bg-danger">
              <div class="inner">
                <h4>Mohon Maaf Anda Tidak Lolos Seleksi Beasiswa Petrokimia Gresik tahun 2021</h4>
               
                <table width="100%" style="padding:4px;">
                <tbody>
                    <td><b>Data Diri :</b></td>
                    <tr>
                            <td width="24%">Nama</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->name}}</td>
                           
                        </tr>
                        <tr>
                            <td width="24%">TTL</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->tempat_lahir}}, {{date('d M Y',strtotime($r->tanggal_lahir))}} </td>
                           
                        </tr>
                        <tr>
                            <td width="24%">No Telp</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->no_telp}}</td>
                           
                        </tr>
                        <tr>
                            <td width="24%">Asal Sekolah</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->nama_sekolah}}</td>
                           
                        </tr>
                        <tr>
                            <td width="24%">Alamat</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$r->alamat_user}}</td>
                        </tr>
                         
                    </tbody>
                    
                </table>

                <br>
                <br>
                <table>
                <p>Tetap Semangat dan jangan menyerah!</p>
                </table>
              </div>
              
              
            </div>


                </div>
                </div>
            </div>

            @endif
            @endforeach
              
            @else
            
            <div></div>
            @endif
        </div>
    
</body>
</html>

@endsection


