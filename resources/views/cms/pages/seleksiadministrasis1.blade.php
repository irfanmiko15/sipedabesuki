@extends('cms.index')
@section('seleksi-administrasi-s1')
@section('judul')
SIBESTRO - Seleksi Administrasi S1
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seleksi Administrasi S1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
          
              <li class="breadcrumb-item active">Seleksi Administrasi S1</li>
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
                <h3 class="card-title">Data Peserta Beasiswa Petro S1</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Asal Sekolah</th>
                    <th>No Telp</th>
                    <th>Status Berkas</th>
                    <th>Nilai Akademik</th>
                    <th>Nilai Tempat Tinggal</th>
                    <th>Nilai Kondisi Keluarga</th>
                    <th>Total Nilai</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($pesertas1 as $PESERTAS1)
                  <tr>
                    <td><?php echo $no++?></td>
                    <td>{{$PESERTAS1->name}}
                    </td>
                    <td>{{$PESERTAS1->jenis_kelamin}}</td>
                    <td>{{$PESERTAS1->email}}</td>
                    <td>{{$PESERTAS1->nama_sekolah}}</td>
                    <td>{{$PESERTAS1->no_telp}}</td>
                    @if($PESERTAS1->status_daftar=='Terdaftar')
                     <td> <span class="badge badge-pill  badge-success">Lengkap</span></td>
                    @else
                      <td><span class="badge badge-pill  badge-danger">Belum Lengkap</span></td>
                    @endif
                    <td>{{$PESERTAS1->total_PA}}</td>
                    <td>{{$PESERTAS1->total_TT}}</td>
                    <td>{{$PESERTAS1->total_KK}}</td>
                    <td>{{$PESERTAS1->total_nilai}}</td>
                   
                  
                    <td>
                    
                    
                <button class="btn btn-success" data-toggle="modal" data-target="#lolosModal{{$PESERTAS1->id}}" style="padding:3px 6px;"><i class="fa fa-check"></i> Lolos</button>
                
                <button class="btn btn-danger" data-toggle="modal" data-target="#tidaklolosModal{{$PESERTAS1->id}}" style="padding:3px 6px;"><i class="fa fa-times"></i>Tidak Lolos</button>
             
                <!-- confirmModal Hapus  -->
                    <a href="{{route('detail-seleksi-administrasi-s1',Crypt::encrypt($PESERTAS1->id))}}"><button class="btn btn-info" style="padding:3px 6px;">Detail</button></a>
                   
                    </td>
                    </div>
                    <div id="lolosModal{{$PESERTAS1->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                              </div>
                              <div class="modal-body">
                                  <a align="center" style="margin:0;">Anda Yakin Ingin Meloloskan {{$PESERTAS1->name}} Ke Tahap Selanjutnya?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('lolos-seleksi-administrasi-s1',$PESERTAS1->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-success btn-sm">Yakin</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                    <div id="tidaklolosModal{{$PESERTAS1->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                              </div>
                              <div class="modal-body">
                                  <a align="center" style="margin:0;">Anda Yakin Tidak Meloloskan {{$PESERTAS1->name}} Ke Tahap Selanjutnya?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('tidak-lolos-seleksi-administrasi-s1',$PESERTAS1->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-success btn-sm">Yakin</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>

                   
                 
                  </tr>
                  @endforeach

                  </tbody>
                 
                  </table>
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