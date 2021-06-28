@extends('cms.index')
@section('nilai-us')
@section('judul')
SIBESTRO - Nilai Ujian Sekolah
@endsection

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nilai Ujian Sekolah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
              <li class="breadcrumb-item active">Nilai Ujian Sekolah</li>
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
                <h3 class="card-title">Nilai Ujian Sekolah</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              @if($total==0)
              <form action ="{{route('tambah-nilai-us')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
               
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nilai Rata-rata Ujian Sekolah:</label>
                        <input type="number" required class="form-control" step="0.01"placeholder="Nilai" name="nilai">
                    </div>
                </div> 
              </div>
              <button type="submit" width="100%"class="btn btn-success" >Simpan</button>
            
              </form>
              @else
              @foreach($data as $d)
              <form action ="{{route('update-nilai',$d->id)}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
              
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nilai Rata-rata Ujian Sekolah:</label>
                        <input type="number" required class="form-control" step="0.01"placeholder="Nilai" value="{{$d->nilai}}" name="nilai">
                    </div>
                </div>
              
                
              </div>
              
            
            
              
              <button type="submit" width="100%"class="btn btn-success" >Simpan</button>
            
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

@endsection