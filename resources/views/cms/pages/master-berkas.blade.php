@extends('cms.index')

@section('master-berkas')

@section('judul')
SIBESTRO - Master Berkas
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Berkas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Berkas</li>
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
              <button class="btn btn-success" style="align:right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button>
              <br>
              <br>
      
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">SMA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">S1</a>
              </li>
              
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
              <table id="example3" class="table table-bordered table-hover">
                  <thead>
                      
                  <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Jenjang</th>
                    <th>File</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($sma as $SMA)
                  <tr>
                    <td><?php echo $no++?></td>
                    <td>{{$SMA->jenis}}
                    </td>
                    <td>{{$SMA->jenjang}}</td>
                    <td>{{$SMA->nama_file}}</td>
                    <td>
                    <a href="{{ route('detail-master-berkas', $SMA->id) }}"> <button class="btn btn-info" style="padding:3px 6px;"><i class="fa fa-info"></i></button></a>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#confirmModal{{$SMA->id}}"style="padding:3px 6px;"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>
                  <div id="confirmModal{{$SMA->id}}" class="modal fade" role="dialog">
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
                              <a href="{{route('delete-master-berkas',$SMA->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach

                  </tbody>
                 
                  </table>
              </div>
              <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                      
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenjang</th>
                    <th>File</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($s1 as $S1)
                  <tr>
                    <td><?php echo $no++?></td>
                    <td>{{$S1->jenis}}
                    </td>
                    <td>{{$S1->jenjang}}</td>
                    <td>{{$S1->nama_file}}</td>
                    <td>
                    <a href="{{ route('detail-master-berkas', $S1->id) }}"> <button class="btn btn-info" style="padding:3px 6px;"><i class="fa fa-info"></i></button></a>

                    <button class="btn btn-danger" style="padding:3px 6px;"data-toggle="modal" data-target="#confirmModal{{$S1->id}}"><i class="fa fa-trash"></i></button>

                    </td>
                    
                  </tr>
                  <div id="confirmModal{{$S1->id}}" class="modal fade" role="dialog">
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
                              <a href="{{route('delete-master-berkas',$S1->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach

                  </tbody>
                  
                  </table>
              </div>  
              </div>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Berkas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('tambah-master-berkas')}}"method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Keterangan:</label>
            <input required type="text" class="form-control" id="recipient-name" name="keterangan">
          </div>
          <div class="form-group">
            <label>Jenjang</label>
                  <select required class="form-control select2" name="jenjang">
                    <option value="SMA">SMA/SEDERAJAT</option>
                    <option value="S1">S1</option>
            </select>
          </div>
          
            <label for="message-text" class="col-form-label">Berkas (.pdf):</label>
            <input type="file" required class="form-control"onchange="return fileValidation()"  id="file" name="file">
            
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" width="100%"class="btn btn-success">Submit</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
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
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('file');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
            /(\.pdf|\.xlsx|\.xls)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
</script>
        
@endsection