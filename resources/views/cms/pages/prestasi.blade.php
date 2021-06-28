@extends('cms.index')
@section('prestasi')
@section('judul')
SIBESTRO - Prestasi
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Prestasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
             
              <li class="breadcrumb-item active">Prestasi</li>
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
                <h3 class="card-title">Data Prestasi</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <button class="btn btn-success" style="align:right" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah Data</button>
              <br>
              <br>
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                      
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tingkat</th>
                    <th>Tahun</th>
                    <th>Bukti</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($data as $d)
                  <tr>
                    <td><?php echo $no++?></td>
                    <td>{{$d->prestasi}}
                    </td>
                    <td>{{$d->tingkat}}</td>
                    <td>{{$d->tahun}}</td>
                    <td> <div>
                    <a href="{{ URL::to('/') }}/dist/img/prestasi/{{$d->nama_file}}" data-toggle="lightbox" data-title="{{$d->prestasi}}" data-gallery="gallery">
                      <img src="{{ URL::to('/') }}/dist/img/prestasi/{{$d->nama_file}}" style="height:200px;width:200px" class="img-fluid mb-2" alt="{{$d->prestasi}}"/>
                    </a>
                    </div></td>
                  
                  
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
                              <a href="{{route('delete-prestasi',$d->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Prestasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('tambah-prestasi')}}"method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Keterangan:</label>
            <input required type="text" class="form-control" id="recipient-name" name="prestasi">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tingkat:</label>
            <select class="form-control"  id="recipient-name"required name="tingkat">
                <option value>Pilih Tingkat Prestasi</option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>
                <option value="Provinsi">Provinsi</option>
                <option value="Kabupaten/kota">Kota/Kabupaten</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">tahun:</label>
            <input required type="text" class="form-control" id="recipient-name" name="tahun">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Upload Bukti (.jpg/.png):</label>
            <input required type="file" accept="image/*" class="form-control" onchange="return fileValidation()"  id="file" id="recipient-name" name="file">
          </div>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" width="100%"class="btn btn-primary">Submit</button>
      </div>
      </form>
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
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
            else 
            {
              var FileSize = fileInput.files[0].size / 1024 / 1024;
                // Image preview
                if (FileSize > 1) // 1 MiB for bytes.
                  {
                  alert("File size must under 1 Mb!");
                  fileInput.value = '';
                  return false;
                  }
                else{
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML = 
                            '<img src="' + e.target.result
                            + '"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
</script>


@endsection