@extends('cms.index')
@section('riwayat-pendidikan')
@section('judul')
SIBESTRO - Riwayat Pendidikan
@endsection

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Riwayat Pendidikan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
              <li class="breadcrumb-item active">Riwayat Pendidikan</li>
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
                <h3 class="card-title">Riwayat Pendidikan</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              
              <form action ="{{route('tambah-riwayat-pendidikan')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
                <div class="col-md-3">
                    @if(Auth::user()->role=="S1")
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Jenjang :</label>
                                <select class="form-control"  id="recipient-name"required name="jenjang" >
                                    <option value>Pilih Jenjang</option>
                                    <option value="SD/MI">SD/MI</option>
                                    <option value="SMP/MTs">SMP/MTs</option>
                                    <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                </select>
                    </div>
                    @else
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Jenjang :</label>
                                <select class="form-control"  id="recipient-name"required name="jenjang" >
                                    <option value>Pilih Jenjang</option>
                                    <option value="SD/MI">SD/MI</option>
                                    <option value="SMP/MTs">SMP/MTs</option>
                                   
                                </select>
                    </div>
                    @endif
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Institusi :</label>
                        <input type="text" required class="form-control"placeholder="Nama Sekolah" name="nama_sekolah">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kota/Kab :</label>
                        <input type="text" required class="form-control"placeholder="Kota/Kab" name="lokasi">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tahun Lulus :</label>
                        <input type="number" required class="form-control"placeholder="Tahun Lulus" name="tahun_lulus">
                    </div>
                </div>
                
              </div>
              
            
            
              
              <button type="submit" width="100%"class="btn btn-success" >Tambah</button>
            
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
      @if($total==0)
      <div></div>
      @else
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Nilai Rapor</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
      <table id="example2" class="table table-bordered table-striped">
                  <thead>
                      
                  <tr>
                    <th>No</th>
                    <th>Jenjang</th>
                    <th>nama_sekolah</th>
                    <th>Kota/Kab</th>
                    <th>Tahun Lulus</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1 ?>
                     @foreach($data as $d)
                  <tr>
                    <td><?php echo $no++?></td>
                    <td>{{$d->jenjang}}
                    </td>
                    <td>{{$d->nama_sekolah}}</td>
                    <td>{{$d->lokasi}}</td>
                    <td>{{$d->tahun_lulus}}</td>
                   

                   
                  
                    <td>
                     <button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$d->id}}" style="padding:3px 6px;"><i class="fa fa-trash"></i></button>
                   
                    </td>

                  <!-- confirmModal Hapus  -->
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
                              <a href="{{route('delete-riwayat-pendidikan',$d->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
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
                    <th>Jenjang</th>
                    <th>nama_sekolah</th>
                    <th>Kota/Kab</th>
                    <th>Tahun Lulus</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                  </table>
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