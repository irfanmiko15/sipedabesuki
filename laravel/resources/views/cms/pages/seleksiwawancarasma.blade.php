@extends('cms.index')
@section('seleksi-wawancara-sma')
@section('judul')
SIBESTRO - Seleksi wawancara SMA
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seleksi Wawancara SMA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
          
              <li class="breadcrumb-item active">Seleksi Wawancara SMA</li>
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
                    <th>Tanggal Wawancara</th>
                    <th>Jam Wawancara</th>
                    <th>PIC Wawancara</th>
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
                    <td>{{date('d M Y', strtotime($PESERTASMA->tanggal_wawancara))}}</td>
                    <td>{{$PESERTASMA->jam_wawancara}} WIB</td>
                    <td>{{$PESERTASMA->pic_wawancara}}</td>
                    <td>
                    <button class="btn btn-success" data-toggle="modal" data-target="#editModal{{$PESERTASMA->id}}" style="padding:3px 6px;"><i class="fa fa-edit"></i>Jadwalkan Wawancara</button>
                    <a href="{{route('detail-seleksi-wawancara-sma',Crypt::encrypt($PESERTASMA->id))}}"><button class="btn btn-info" style="padding:3px 6px;">Detail</button></a>
                     <!-- edit modal -->
                     
                    </td>

                   
                 
                  </tr>
                  <div class="modal fade" id="editModal{{$PESERTASMA->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Data User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('update-jadwal-wawancara',$PESERTASMA->id)}}"method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tanggal Wawancara:</label>
                                <input required type="date" class="form-control" id="recipient-name" name="tanggal_wawancara" value="{{$PESERTASMA->tanggal_wawancara}}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Jam Wawancara:</label>
                                <input required type="time" class="form-control" id="recipient-name" name="jam_wawancara" value="{{$PESERTASMA->jam_wawancara}}">
                              </div>
                             
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">PIC Wawancara:</label>
                                <input required type="text" class="form-control" id="recipient-name" name="pic_wawancara"  value="{{$PESERTASMA->pic_wawancara}}">
                              </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" width="100%"class="btn btn-success">Simpan</button>
                          </div>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>
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
                    <th>Tanggal Wawancara</th>
                    <th>Jam Wawancara</th>
                    <th>PIC Wawancara</th>
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