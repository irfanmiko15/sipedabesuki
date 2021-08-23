@extends('cms.index')
@section('seleksi-akhir-sma')
@section('judul')
SIBESTRO - Seleksi Akhir SMA
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seleksi Akhir SMA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
          
              <li class="breadcrumb-item active">Seleksi Akhir SMA</li>
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
                <h3 class="card-title">Data Peserta Beasiswa Petro SMA</h3>
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
                    <th>Status Seleksi</th>
                    <th>Nilai Akademik</th>
                    <th>Nilai Tempat Tinggal</th>
                    <th>Nilai Kondisi Keluarga</th>
                    <th>Total Nilai</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($pesertasma as $PESERTASMA)
                  <tr>
                    <td><?php echo $no++?></td>
                    <td>{{$PESERTASMA->name}}
                    </td>
                    <td>{{$PESERTASMA->jenis_kelamin}}</td>
                    <td>{{$PESERTASMA->email}}</td>
                    <td>{{$PESERTASMA->nama_sekolah}}</td>
                    <td>{{$PESERTASMA->no_telp}}</td>
                    @if($PESERTASMA->seleksi_akhir=='Lolos')
                    <td> <span class="badge badge-pill  badge-success">{{$PESERTASMA->seleksi_akhir}}</span></td>
                  
                    @elseif($PESERTASMA->seleksi_akhir=='Tidak Lolos')
                    <td> <span class="badge badge-pill  badge-danger">{{$PESERTASMA->seleksi_akhir}}</span></td>
                    @else
                    <td> <span class="badge badge-pill  badge-primary">Belum Dinilai</span></td>

                    @endif
                    <td>{{$PESERTASMA->total_PA}}</td>
                    <td>{{$PESERTASMA->total_TT}}</td>
                    <td>{{$PESERTASMA->total_KK}}</td>
                    <td>{{$PESERTASMA->total_nilai}}</td>
                   
                  
                    <td>
                    @if($PESERTASMA->seleksi_akhir==null)
                    <button class="btn btn-success" data-toggle="modal" data-target="#lolosModal{{$PESERTASMA->id}}" style="padding:3px 6px;"><i class="fa fa-check"></i> Lolos</button>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#tidaklolosModal{{$PESERTASMA->id}}" style="padding:3px 6px;"><i class="fa fa-times"></i>Tidak Lolos</button>
                    @else
                    Sudah Dinilai
                    @endif
                    </td>
                    <div id="lolosModal{{$PESERTASMA->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                              </div>
                              <div class="modal-body">
                                  <a align="center" style="margin:0;">Anda Yakin Ingin Meloloskan {{$PESERTASMA->name}}?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('lolos-seleksi-akhir-sma',$PESERTASMA->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-success btn-sm">Yakin</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                    <div id="tidaklolosModal{{$PESERTASMA->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                              </div>
                              <div class="modal-body">
                                  <a align="center" style="margin:0;">Anda Yakin Tidak Meloloskan {{$PESERTASMA->name}}?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('tidak-lolos-seleksi-akhir-sma',$PESERTASMA->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-success btn-sm">Yakin</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>

                    </td>

                   
                 
                  </tr>
                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Nama</th>
                    
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Asal Sekolah</th>
                    <th>No Telp</th>
                    <th>Status Seleksi</th>
                    <th>Nilai Akademik</th>
                    <th>Nilai Tempat Tinggal</th>
                    <th>Nilai Kondisi Keluarga</th>
                    <th>Total Nilai</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
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