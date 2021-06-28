@extends('cms.index')
@section('master-user-sma')
@section('judul')
SIBESTRO - Master User SMA
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Master User</a></li>
              <li class="breadcrumb-item active">Master User SMA</li>
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

              @elseif($message=Session::get('error'))
              <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
              @endif
                <div>
                <div>
        

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User SMA</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <button class="btn btn-success" style="align:right" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah Data</button>
              <br>
              <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Asal Sekolah</th>
                    <th>Tahun Penerimaan</th>
                    <th>Jenjang</th>
                    <th>Status User</th>
                    <th>Action User</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($pesertasma as $PESERTASMA)
                  <tr>
                    <td><?php echo $no++?></td>
                    <td>{{$PESERTASMA->name}}
                    </td>
                    <td>{{$PESERTASMA->email}}</td>
                    <td>{{$PESERTASMA->nama_sekolah}}</td>
                    <td>{{$PESERTASMA->tahun_penerimaan}}</td>
                    <td>{{$PESERTASMA->role}}</td>

                    @if($PESERTASMA->status_user=='aktif')
                     <td> <span class="badge badge-pill  badge-success">{{$PESERTASMA->status_user}}</span></td>
                    
                    @else
                      <td><span class="badge badge-pill  badge-danger">{{$PESERTASMA->status_user}}</span></td>
                    @endif
                  
                    <td>
                    <button class="btn btn-info" data-toggle="modal" data-target="#viewModal{{$PESERTASMA->id}}"style="padding:3px 6px;"><i class="fa fa-info"></i></button>
                   
                    <button class="btn btn-success" data-toggle="modal" data-target="#editModal{{$PESERTASMA->id}}"style="padding:3px 6px;"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$PESERTASMA->id}}" style="padding:3px 6px;"><i class="fa fa-trash"></i></button>
                    @if($PESERTASMA->status_user=='aktif')
                    <button class="btn btn-warning"data-toggle="modal" data-target="#nonaktifModal{{$PESERTASMA->id}}" style="padding:3px 6px;">Nonaktif</button>
                    @else
                    <button class="btn btn-warning"data-toggle="modal" data-target="#aktifModal{{$PESERTASMA->id}}" style="padding:3px 6px;">Aktifkan</button>
                    @endif
                    </td>

                    <!-- edit modal -->
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
                            <form action="{{route('update-master-user',$PESERTASMA->id)}}"method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input required type="text" class="form-control" id="recipient-name" name="name" value="{{$PESERTASMA->name}}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input required type="email" class="form-control" readonly id="recipient-name" name="email" value="{{$PESERTASMA->email}}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Asal Sekolah:</label>
                                <select class="form-control select2"  id="recipient-name"required name="asal_sekolah"  value="{{$PESERTASMA->asal_sekolah}}">
                                    
                                    @foreach($sekolah as $SEKOLAH)
                                    <option value="{{$SEKOLAH->id}}" <?php if($PESERTASMA->asal_sekolah==$SEKOLAH->id) echo "selected" ?>>{{$SEKOLAH->nama_sekolah}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tahun Penerimaan:</label>
                                <input required type="number" class="form-control" id="recipient-name" name="tahun_penerimaan"  value="{{$PESERTASMA->tahun_penerimaan}}">
                              </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" width="100%"class="btn btn-success">Update</button>
                          </div>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- view modal -->
                    <div class="modal fade" id="viewModal{{$PESERTASMA->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lihat Data User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action=""method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input required type="text" class="form-control" id="recipient-name" name="name" readonly value="{{$PESERTASMA->name}}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input required type="email" class="form-control" readonly id="recipient-name" name="email"readonly value="{{$PESERTASMA->email}}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Asal Sekolah:</label>
                                <select class="form-control select2"  id="recipient-name"required name="asal_sekolah"  value="{{$PESERTASMA->asal_sekolah}}" readonly>
                                    
                                    @foreach($sekolah as $SEKOLAH)
                                    <option value="{{$SEKOLAH->id}}" <?php if($PESERTASMA->asal_sekolah==$SEKOLAH->id) echo "selected" ?>>{{$SEKOLAH->nama_sekolah}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tahun Penerimaan:</label>
                                <input required type="number" class="form-control" id="recipient-name" name="tahun_penerimaan"readonly  value="{{$PESERTASMA->tahun_penerimaan}}">
                              </div>
                         
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>

                  <!-- confirmModal Hapus  -->
                  </div>
                    <div id="confirmModal{{$PESERTASMA->id}}" class="modal fade" role="dialog">
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
                              <a href="{{route('delete-master-user',$PESERTASMA->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                  <!-- Konfirmasi Nonaktif -->
                    <div id="nonaktifModal{{$PESERTASMA->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                              </div>
                              <div class="modal-body">
                                  <a align="center" style="margin:0;">Anda Yakin Ingin menonaktifkan user {{$PESERTASMA->name}}?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('nonaktif-user',$PESERTASMA->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Nonaktifkan</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                  <!-- Konfirmasi Aktifkan -->
                    <div id="aktifModal{{$PESERTASMA->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                              </div>
                              <div class="modal-body">
                                  <a align="center" style="margin:0;">Anda Yakin Ingin mengaktifkan user {{$PESERTASMA->name}}?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('aktif-user',$PESERTASMA->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-success btn-sm">Aktifkan</button></a>
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
    <div class="modal fade" id="tambahModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('tambah-master-user')}}"method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama:</label>
            <input required type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input required type="email" class="form-control" id="recipient-name" name="email">
          </div>
         
            <input required type="hidden" class="form-control" id="recipient-name" name="role" value="SMA">
       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input required type="password" class="form-control" id="recipient-name" name="password">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Asal Sekolah:</label>
            <select class="form-control select2"  id="recipient-name"required name="asal_sekolah">
                <option value="">Pilih Sekolah</option>
                @foreach($sekolah as $SEKOLAH)
                <option value="{{$SEKOLAH->id}}">{{$SEKOLAH->nama_sekolah}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tahun Penerimaan:</label>
            <input required type="number" class="form-control" id="recipient-name" name="tahun_penerimaan">
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