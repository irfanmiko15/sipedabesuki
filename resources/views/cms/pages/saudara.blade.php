@extends('cms.index')
@section('saudara')
@section('judul')
SIBESTRO - Data Saudara
@endsection

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Saudara</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Data Keluarga</a></li>
              <li class="breadcrumb-item active">Data Saudara</li>
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
                <h3 class="card-title">Data Saudara</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              
              <form action ="{{route('tambah-saudara')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Lengkap :</label>
                        <input type="text" required class="form-control" placeholder="Nama Lengkap"name="nama_saudara">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Umur :</label>
                        <input type="number" required class="form-control" placeholder="Umur"name="umur">
                    </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Anak Ke :</label>
                        <input type="number" required class="form-control" placeholder="Anak Ke" name="anak_ke">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Pendidikan :</label>
                        <input type="text" required class="form-control" placeholder="Pendidikan"name="pendidikan">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                         <label for="recipient-name" class="col-form-label">Pekerjaan :</label>
                        <input type="text" required class="form-control" placeholder="Pekerjaan" name="pekerjaan">
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
      </div>
            @if($total==0)
            <div></div>
            @else
            <div class="col-12">
            <div class="card card-success">
              <div class="card-header">
                <h4 class="card-title">Data Saudara</h4>
              </div>
              <div class="card-body">
                
                @foreach($data as $d)
                <div class="box-group">
                <div class="clearfix">
                    <div class="d-inline-block">
                        <br>
                        <h5><strong>Data Saudara Ke {{$d->anak_ke}}</strong></h5>
                    </div>
                    <div class="d-inline-block float-right">
                    <br>
                    <button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$d->id}}" style="padding:3px 6px;"><i class="fa fa-trash"></i></button></center>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <p><strong>Nama Lengkap</strong></p>
                        <span>{{$d->nama_saudara}}</span>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Umur</strong></p>
                        <span>{{$d->umur}} Tahun</span>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <p><strong>Pendidikan</strong></p>
                        <span>{{$d->pendidikan}}
                        </span>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Pekerjaan</strong></p>
                        <span>{{$d->pekerjaan}}</span>
                    </div>
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
                                  <a align="center" style="margin:0;">Anda Yakin Ingin Menghapus Data Ini?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('delete-saudara',$d->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                @endforeach
                 
                    
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

@endsection