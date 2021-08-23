@extends('cms.index')
@section('orang-tua')
@section('judul')
SIBESTRO - Data Orang Tua
@endsection
<?php function tgl_indo($tanggal){
            $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecahkan = explode('-', $tanggal);
            
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
         
            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Orang Tua</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Orang Tua</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
             <br>
              <!-- /.card-header -->
              <div class="card-body">
              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
              @endif
                <div>
        

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Orang Tua</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              
              <form action ="{{route('tambah-data-orang-tua')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Lengkap :</label>
                        <input type="text" required class="form-control" placeholder="Nama Lengkap"name="nama">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Hubungan :</label>
                                <select class="form-control"  id="recipient-name"required name="hubungan" >
                                    <option value>Pilih Jenis Hubungan</option>
                                    <option value="Ayah">Ayah</option>
                                    <option value="Ibu">Ibu</option>
                                    <option value="Wali">Wali</option>
                                </select>
                    </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tempat Lahir :</label>
                        <input type="text" required class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tanggal Lahir :</label>
                        <input type="date" required class="form-control" name="tanggal_lahir">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                         <label for="recipient-name" class="col-form-label">Telepon :</label>
                        <input type="number" required class="form-control" placeholder="Telepon" name="telepon">
                    </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Pekerjaan :</label>
                        <input type="text" required class="form-control" placeholder="Pekerjaan" name="pekerjaan">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Penghasilan per bulan :</label>
                        <input type="number" required class="form-control"  name="penghasilan" placeholder="Penghasilan" name="penghasilan">
                    </div>
                </div>
                
              </div>
              
              
              
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Alamat :</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" required placeholder="Alamat"name="alamat"rows="4"></textarea>
                </div>
                </div>
            </div>
              @if($total>=2)
              <button type="submit" width="100%"class="btn btn-success"disabled>Tambah</button>
              @else
              <button type="submit" width="100%"class="btn btn-success" >Tambah</button>
              @endif
              </form>
               </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      </div>
            @if($total==0)
            <div></div>
            @else
            <div class="container-fluid">
            <div class="col-12">
            <div class="card card-success">
              <div class="card-header">
                <h4 class="card-title">Data Orang Tua</h4>
              </div>
              <div class="card-body">
                
                @foreach($data as $d)
                <div class="box-group">
                <div class="clearfix">
                    <div class="d-inline-block">
                        <br>
                        <h5><strong>Data {{$d->jenis}}</strong></h5>
                    </div>
                    <div class="d-inline-block float-right">
                    <br>
                        <button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$d->id}}" style="padding:3px 6px;"><i class="fa fa-trash"></i></button></center>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <p><strong>Nama Lengkap</strong></p>
                        <span>{{$d->nama}}</span>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Penghasilan Per bulan</strong></p>
                        <span>@currency($d->penghasilan)</span>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <p><strong>Tempat, Tanggal Lahir</strong></p>
                        <span>{{$d->tempat_lahir}}, <?php echo tgl_indo($d->tanggal_lahir)?>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <p><strong>No. Handphone</strong></p>
                        <span>{{$d->no_telp}}</span>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <p><strong>Pekerjaan</strong></p>
                        <span>{{$d->pekerjaan}}</span>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Alamat Rumah</strong></p>
                        <span>{{$d->alamat}}</span>
                    </div>
                </div>

               
            </div>
                  
                  <div id="confirmModal{{$d->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                              </div>
                              <div class="modal-body">
                                  <a align="center" style="margin:0;">Anda Yakin Ingin Menghapus Data Ini?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('delete-data-orang-tua',$d->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                @endforeach
                 
                    
              </div>
            </div>
          </div>
      </div>
          @endif
        
              
     
      <!-- /.container-fluid -->
    </section>
      
             
            </div>
           
           
          

</div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

@endsection