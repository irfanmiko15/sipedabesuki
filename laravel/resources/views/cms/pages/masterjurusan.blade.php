@extends('cms.index')

@section('master-jurusan')
@section('judul')
SIBESTRO - Master Jurusan
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Jurusan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Jurusan</li>
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
                <h3 class="card-title">Data Jurusan </h3>
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
                    <th>Nama Jurusan</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($jurusan as $JURUSAN)
                  <tr>
                    <td><?php echo $no++?></td>
                    <td>{{$JURUSAN->nama_jurusan}}
                    </td>
                    <td>
                    <button class="btn btn-info" data-toggle="modal" data-target="#viewModal{{$JURUSAN->id}}"style="padding:3px 6px;"><i class="fa fa-info"></i></button>
                     <button class="btn btn-success" data-toggle="modal" data-target="#editModal{{$JURUSAN->id}}"style="padding:3px 6px;"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$JURUSAN->id}}" style="padding:3px 6px;"><i class="fa fa-trash"></i></button>

                    <!-- view modal -->
                    <div class="modal fade" id="viewModal{{$JURUSAN->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Lihat Data jurusan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action=""method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nama Jurusan:</label>
                              <input required type="text" class="form-control" id="recipient-name" readonly name="nama_jurusan" value="{{$JURUSAN->nama_jurusan}}">
                            </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>

                    <!-- edit modal -->
                    </td>
                    <div class="modal fade" id="editModal{{$JURUSAN->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Data Jurusan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('update-master-jurusan',$JURUSAN->id)}}"method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nama Jurusan:</label>
                              <input required type="text" class="form-control" id="recipient-name" name="nama_jurusan" value="{{$JURUSAN->nama_jurusan}}">
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
                    <div id="confirmModal{{$JURUSAN->id}}" class="modal fade" role="dialog">
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
                              <a href="{{route('delete-master-jurusan',$JURUSAN->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
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
                    <th>Nama Jurusan</th>
                  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jurusan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('tambah-master-jurusan')}}"method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Jurusan:</label>
            <input required type="text" class="form-control" id="recipient-name" name="nama_jurusan">
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