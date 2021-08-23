@extends('cms.index')

@section('master-sekolah')
@section('judul')
SIBESTRO - Master Sekolah
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Sekolah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Sekolah</li>
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
                <h3 class="card-title">Data Sekolah </h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <button class="btn btn-success" style="align:right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button>
              <br>
              <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      
                  <tr>
                    <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($sekolah as $SEKOLAH)
                  <tr>
                    <td><?php echo $no++?></td>
                    <td>{{$SEKOLAH->nama_sekolah}}
                    </td>
                    <td>{{$SEKOLAH->alamat}}</td>
                    <td>{{$SEKOLAH->no_telp}}</td>
                    <td>
                    <button class="btn btn-info" data-toggle="modal" data-target="#viewModal{{$SEKOLAH->id}}"style="padding:3px 6px;"><i class="fa fa-info"></i></button>
                     <button class="btn btn-success" data-toggle="modal" data-target="#editModal{{$SEKOLAH->id}}"style="padding:3px 6px;"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$SEKOLAH->id}}" style="padding:3px 6px;"><i class="fa fa-trash"></i></button>

                    <!-- view modal -->
                    <div class="modal fade" id="viewModal{{$SEKOLAH->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Sekolah</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action=""method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nama Sekolah:</label>
                              <input required type="text" class="form-control" id="recipient-name" readonly name="nama_sekolah" value="{{$SEKOLAH->nama_sekolah}}">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Alamat:</label>
                              <input required type="text" class="form-control" id="recipient-name" readonly name="alamat" value="{{$SEKOLAH->alamat}}">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">No Telp:</label>
                              <input required type="text" class="form-control" id="recipient-name" readonly name="no_telp" value="{{$SEKOLAH->no_telp}}">
                            </div>
                            
                            
                          
                        
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>

                    <!-- edit modal -->
                    </td>
                    <div class="modal fade" id="editModal{{$SEKOLAH->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Sekolah</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('update-master-sekolah',$SEKOLAH->id)}}"method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nama Sekolah:</label>
                              <input required type="text" class="form-control" id="recipient-name" name="nama_sekolah" value="{{$SEKOLAH->nama_sekolah}}">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Alamat:</label>
                              <input required type="text" class="form-control" id="recipient-name" name="alamat" value="{{$SEKOLAH->alamat}}">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">No Telp:</label>
                              <input required type="text" class="form-control" id="recipient-name" name="no_telp" value="{{$SEKOLAH->no_telp}}">
                            </div>
                            
                            
                          
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" width="100%"class="btn btn-success">Submit</button>
                        </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- confirmasi hapus -->
                    <div id="confirmModal{{$SEKOLAH->id}}" class="modal fade" role="dialog">
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
                              <a href="{{route('delete-master-sekolah',$SEKOLAH->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  </tr>
                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('tambah-master-sekolah')}}"method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Sekolah:</label>
            <input required type="text" class="form-control" id="recipient-name" name="nama_sekolah">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Alamat:</label>
            <input required type="text" class="form-control" id="recipient-name" name="alamat">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">No Telp:</label>
            <input required type="text" class="form-control" id="recipient-name" name="no_telp">
          </div>
          
          
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" width="100%"class="btn btn-success">Submit</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>


@endsection