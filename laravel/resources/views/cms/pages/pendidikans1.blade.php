@extends('cms.index')
@section('pendidikan-s1')
@section('judul')
SIBESTRO - Pendidikan S1
@endsection

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendidikan S1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
              <li class="breadcrumb-item active">Pendidikan S1</li>
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
                <h3 class="card-title">Pendidikan S1</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              @if($total==0)
              <form action ="{{route('tambah-pendidikan-s1')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
               
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Universitas :</label>
                        <input type="text" required class="form-control"placeholder="Universitas" name="universitas">
                    </div>
                </div> 
               
              </div>
              <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fakultas :</label>
                        <input type="text" required class="form-control"placeholder="Fakultas" name="fakultas">
                    </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Jurusan:</label>
                    <select class="form-control select2"  id="recipient-name"required name="jurusan">
                    <option value="">Pilih Jurusan</option>
                        @foreach($jurusan as $JURUSAN)
                        <option value="{{$JURUSAN->id}}">{{$JURUSAN->nama_jurusan}}</option>
                        @endforeach
                    </select>
                  </div>
              </div>
               
               <div class="col-md-4">
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Jalur Penerimaan :</label>
                                <select class="form-control select"  id="recipient-name"required name="penerimaan" >
                                <option value="">Pilih Jalur Penerimaan</option>
                                    <option value="SNMPTN">SNMPTN</option>
                                    <option value="SBMPTN">SBMPTN</option>
                                    <option value="SNMPN" >SNMPN</option>
                                    <option value="SBMPN" >SBMPN</option>
                                </select>
                    </div>
                </div>
             </div>
              <button type="submit" width="100%"class="btn btn-success" >Simpan</button>
            
              </form>
              @else
              @foreach($data as $d)
              <form action ="{{route('update-pendidikan-s1',$d->id)}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
               
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Universitas :</label>
                        <input type="text" required class="form-control"placeholder="Universitas" name="universitas" value="{{$d->universitas}}">
                    </div>
                </div> 
                
              </div>
              <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fakultas :</label>
                        <input type="text" required class="form-control"placeholder="Fakultas" name="fakultas"  value="{{$d->fakultas}}">
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Jurusan:</label>
                    <select class="form-control select2"  id="recipient-name"required name="jurusan">
                    <option value="">Pilih Jurusan</option>
                        @foreach($jurusan as $JURUSAN)
                        <option value="{{$JURUSAN->id}}" <?php if($d->id_jurusan==$JURUSAN->id) echo "selected" ?>>{{$JURUSAN->nama_jurusan}}</option>
                        @endforeach
                    </select>
                  </div>
              </div> 
              
              
               <div class="col-md-4">
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Jalur Penerimaan :</label>
                                <select class="form-control select"  id="recipient-name"required name="penerimaan"  value="{{$d->penerimaan}}" >
                                    <option value>Pilih Jalur Penerimaan</option>
                                    <option value="SNMPTN" <?php if($d->penerimaan=='SNMPTN') echo "selected" ?>>SNMPTN</option>
                                    <option value="SBMPTN"  <?php if($d->penerimaan=='SBMPTN') echo "selected" ?>>SBMPTN</option>
                                    <option value="SNMPN" <?php if($d->penerimaan=='SNMPN') echo "selected" ?>>SNMPN</option>
                                    <option value="SBMPN"  <?php if($d->penerimaan=='SBMPN') echo "selected" ?>>SBMPN</option>
                                </select>
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