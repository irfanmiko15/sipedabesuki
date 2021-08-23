@extends('cms.index')
@section('form-pendaftaran')
@section('judul')
SIBESTRO - Form Pendaftaran
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Pendaftaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Upload Berkas</a></li>
              <li class="breadcrumb-item active">Form Pendaftaran</li>
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
                <h3 class="card-title">Upload Form Pendaftaran</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              @if($total==0)
              <form action ="{{route('tambah-form-pendaftaran')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Upload Form Pendaftaran (.xls/.xlsx)</label>
                  <input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required class="form-control"onchange="return fileValidation()"  id="file" name="file">
              </div>
              <button type="submit" width="100%"class="btn btn-success">Upload</button>
              </form>
              @else
              <div></div>
              @endif
                @foreach($data as $d)
                <div class="container">
                <div class="row">
                <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=http://127.0.0.1:8000/berkas/formpendaftaran/{{$d->nama_file}}' width='100%' height='565px' frameborder='0'></iframe> 
                <div class="col-md-12">
                <br>
                <button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$d->id}}" style="padding:3px 6px;width:60%">Hapus</button></div>
                </div>
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
                              <a href="{{route('delete-form-pendaftaran',$d->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                @endforeach
              
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
            /(\.xls|\.xlsx)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
</script>

@endsection