@extends('cms.index')
@section('bukti-penerimaan')
@section('judul')
SIBESTRO - Bukti Penerimaan
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bukti Penerimaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Upload Berkas</a></li>
              <li class="breadcrumb-item active">Bukti Penerimaan </li>
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
              @elseif($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
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
                <h3 class="card-title">Upload Bukti Penerimaan </h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
             
              <form action ="{{route('tambah-bukti-penerimaan')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Upload Bukti Penerimaan (.jpeg,.png) Maks 1mb</label>
                <input type="file" accept="images/*" required class="form-control"onchange="return fileValidation()"  id="file" name="file" >
              </div>
              <div id="imagePreview"></div>
              @if($total>0)
              <br>
              
              <button type="submit" width="100%"class="btn btn-success" disabled>Upload</button>
              @else
              <br>
              
              <button type="submit" width="100%"class="btn btn-success">Upload</button>
              @endif
              </form>

              </div>
              </div>
              </div>
              @if($total==0)
            <div></div>
            @else
            <div class="col-12">
            <div class="card card-success">
              <div class="card-header">
                <h4 class="card-title">Bukti Penerimaan</h4>
              </div>
              <div class="card-body">
                <div class="row">
                @foreach($data as $d)
                  <div class="col-sm-2">
                    <div>
                    <a href="{{asset('dist/img/buktipenerimaan')}}/{{$d->nama_file}}" data-toggle="lightbox" data-title="bukti penerimaan" data-gallery="gallery">
                      <img src="{{asset('dist/img/buktipenerimaan')}}/{{$d->nama_file}}" style="height:200px;width:200px" class="img-fluid mb-2" alt="bukti penerimaan"/>
                    </a>
                    </div>
                    <center><button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$d->id}}" style="padding:3px 6px;">Hapus</button></center>
              
                  </div>
                  <div id="confirmModal{{$d->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                              </div>
                              <div class="modal-body">
                                  <a align="center" style="margin:0;">Anda Yakin Ingin Menghapus Berkas Ini?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('delete-bukti-penerimaan',$d->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
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