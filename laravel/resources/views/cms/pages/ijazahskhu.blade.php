@extends('cms.index')
@section('ijazah-skhu')
@section('judul')
SIBESTRO - Ijazah SKHU
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ijazah SKHU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Upload Berkas</a></li>
              <li class="breadcrumb-item active">Ijazah SKHU</li>
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
                <h3 class="card-title">Upload Berkas Ijazah SKHU</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              
              <form action ="{{route('tambah-berkas-ijazah-skhu')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Jenis :</label>
                                <select class="form-control"  id="recipient-name"required name="jenis">
                                    <option value="Ijazah">Ijazah</option>
                                    <option value="SKHU">SKHU</option>
                                </select>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Upload Berkas (.pdf)</label>
                <input type="file" accept="application/pdf" required class="form-control"onchange="return fileValidation()"  id="file" name="file" >
              </div>
              @if($total>=2)
              <br>
              
              <button type="submit" width="100%"class="btn btn-success" disabled>Upload</button>
              @else
              <br>
              
              <button type="submit" width="100%"class="btn btn-success">Upload</button>
              @endif
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
            <div class="col-12">
            <div class="card card-success">
              <div class="card-header">
                <h4 class="card-title">List Berkas</h4>
              </div>
              <div class="card-body">
                <div class="row">
                @foreach($data as $d)
                  <div class="col-md-4">
                    <div>
                    <h5>{{$d->jenis}}</h5>
                    <br>
                    <embed src="{{ asset('berkas/ijazahskhu')}}/{{$d->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%"height="500px"/>
                    </div>
                  <button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$d->id}}" style="padding:3px 6px;width:100%;">Hapus</button>
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
                              <a href="{{route('delete-berkas-ijazah-skhu',$d->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
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
            /(\.pdf)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
</script>

@endsection