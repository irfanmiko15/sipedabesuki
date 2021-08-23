@extends('cms.index')
@section('ukt')
@section('tanggungan')
SIBESTRO - Tanggungan
@endsection
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tanggungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Data Keluarga</a></li>
              <li class="breadcrumb-item active">Tanggungan</li>
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
                <h3 class="card-title">Tanggungan</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              @if($total==0)
              <form action ="{{route('tambah-tanggungan')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Masukan Jumlah Tanggungan</label>
                  <input type="text"name="jumlah" required class="form-control">
              </div>
              <button type="submit" width="100%"class="btn btn-success">Simpan</button>
              </form>
              @else
              @foreach($data as $d)
              <form action ="{{route('update-tanggungan',$d->id)}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Masukan Jumlah Tanggungan</label>
                  <input type="text"name="jumlah" required class="form-control" value="{{$d->jumlah}}">
              </div>
              <button type="submit" width="100%"class="btn btn-success">Simpan</button>
              </form>
                @endforeach
              
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
            /(\.pdf)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
</script>

@endsection