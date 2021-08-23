@extends('cms.index')
@section('data-diri')
@section('judul')
SIBESTRO - Data Diri
@endsection

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Diri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
              <li class="breadcrumb-item active">Data Diri</li>
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
                <h3 class="card-title">Data Diri</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
             
            
              @foreach($data as $d)
              <form action ="{{route('update-data-diri',$d->id)}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
              
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Lengkap:</label>
                        <input type="text" required class="form-control" placeholder="Nama Lengkap" value="{{$d->name}}" name="name">
                    </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email :</label>
                        <input type="text" required class="form-control" placeholder="Email" value="{{$d->email}}" name="email" value="{{$d->email}}">
                    </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">No Telp :</label>
                        <input type="number" required class="form-control" placeholder="No Telp" value="{{$d->no_telp}}" name="no_telp" value="{{$d->no_telp}}">
                    </div>
                </div>
              </div>
              <div class='row'>
                <div class="col-md-6">
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Jenis Kelamin :</label>
                                <select class="form-control"  id="recipient-name"required name="jenis_kelamin"  value="{{$d->jenis_kelamin}}" >
                                    <option value>Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki" <?php if($d->jenis_kelamin=='Laki-Laki') echo "selected" ?>>Laki-Laki</option>
                                    <option value="Perempuan"  <?php if($d->jenis_kelamin=='Perempuan') echo "selected" ?>>Perempuan</option>
                                   
                                </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Agama :</label>
                                <select class="form-control"  id="recipient-name"required name="agama"  value="{{$d->agama}}" >
                                    <option value>Pilih Agama</option>
                                    <option value="Islam" <?php if($d->agama=='Islam') echo "selected" ?>>Islam</option>
                                    <option value="Budha"  <?php if($d->agama=='Budha') echo "selected" ?>>Budha</option>
                                    <option value="Hindu"  <?php if($d->agama=='Hindu') echo "selected" ?>>Hindu</option>  
                                    <option value="Katolik"  <?php if($d->agama=='Katolik') echo "selected" ?>>Katolik</option>
                                    <option value="Konghucu"  <?php if($d->agama=='Konghucu') echo "selected" ?>>Konghucu</option>
                                    <option value="Kristen"  <?php if($d->agama=='Kristen') echo "selected" ?>>Kristen</option>
                                </select>
                    </div>
                </div>

              </div>
              
              <div class="row">
              
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                        <input type="text" required class="form-control" placeholder="Tempat Lahir" value="{{$d->tempat_lahir}}" name="tempat_lahir">
                    </div>
                </div>
              
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
                        <input type="date" required class="form-control"  value="{{$d->tanggal_lahir}}" name="tanggal_lahir">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Alamat Sesuai KK :</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Alamat"name="alamat_kk"rows="4">{{$d->alamat_kk}}</textarea>
                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Alamat Tempat Tinggal :</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Alamat"name="alamat_user"rows="4">{{$d->alamat_user}}</textarea>
                </div>
                </div>
            </div>
             
            
            
              
              <button type="submit" width="100%"class="btn btn-success" >Simpan</button>
            
              </form>
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

@endsection